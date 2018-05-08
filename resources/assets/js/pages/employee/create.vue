<template>
<div class="container">
    <form action="">
        <div class="card card-default">
                    <div class="card-header">Create Employee</div>

                    <div class="card-body">
                        <form-employee @save="saveEmployee" :employee="employee" :errors="errors"></form-employee>
                        
                    </div>
                </div>
    </form>
  
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
          employee:{
              first_name:'',
              last_name:''
          },
           errors:new  Errors()
      }
  },
  methods:{
      saveEmployee(data){
          let url='api/employee';
          axios.post(url,this.$data.employee).then(response=>{
               this.$router.push('/employee');
          }).catch(error=>{
              this.errors.record(error.response.data.errors)
          })
      }
  }
}
</script>
