<template>
  <div>Edit {{ $route.params.employeeId }}
 <form-employee @save="saveEmployee" :errors="errors" :employee="employee"></form-employee>
  </div>
</template>
<script>
import FormEmployee from './FormEmployee';
import Errors from 'Dist/Errors';
export default {
  components:{
      'form-employee':FormEmployee,
  },
  data(){
      return {
        employeeId:this.$route.params.employeeId,
        errors:new Errors(),
        employee:[]
      }
  },
  mounted(){
      this.getEmployee()
  },
  methods:{
      getEmployee(){
            let url="api/employee/"+this.employeeId;
            axios.get(url).then(response=>{
                this.employee = response.data
            });
      },
      saveEmployee(){
          let url="api/employee/"+this.employeeId;
          axios.put(url,{
              first_name:this.employee.first_name,
              last_name:this.employee.last_name
          }).then(response=>{
              this.$router.push('/employee');
          }).catch(error=>{
               this.errors.record(error.response.data.errors)
          })
      }

  }
}
</script>

