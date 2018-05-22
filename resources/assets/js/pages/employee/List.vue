<template>
  <div>
      <router-link class="btn btn-xs btn-primary" to="employee/create">Add</router-link>

        <div class="card card-default">
                    <div class="card-header">List Employee</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(employee,index) in employees">
                                <th scope="row">{{ index + 1 }}</th>
                                <td>{{ employee.first_name }}</td>
                                <td>{{ employee.last_name }}</td>
                                <td>
                                    <router-link :to="{ path: 'employee/edit/'+employee.id }" class="btn btn-sm btn-primary">Edit</router-link>
                                    <button class="btn btn-danger btn-sm" @click="deleteEmployee(employee.id)">Delete</button>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                </div>



  </div>
</template>
<script>
import axios from 'axios';
export default {
    name:'List',
    data(){
        return {
            employees:[]
        }
    },
    mounted(){
        this.getEmployees()
    },
    methods:{
        getEmployees(){
            let url='api/getemployees';
            axios.get(url).then(response=>{
                this.employees = response.data;
            }).catch(errors=>{

            })
        },
        deleteEmployee(id){
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    let url="api/employee/"+id;
                    axios.delete(url).then(response=>{
                         this.$router.push('/employee');
                         this.employees=this.employees.filter(employee => employee.id != id );
                    });
                    
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        }
    }
}
</script>
