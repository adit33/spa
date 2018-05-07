<template>
  <div>
      <router-link class="btn btn-xs btn-primary" to="employee/create">Add</router-link>
      <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(employee,index) in employees">
      <th scope="row"></th>
      <td>{{ employee.first_name }}</td>
      <td>{{ employee.last_name }}</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
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
        }
    }
}
</script>
