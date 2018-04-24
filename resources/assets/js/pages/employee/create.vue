<template>
<div class="container">
    <form action="">
        <div class="card card-default">
                    <div class="card-header">Create Employee</div>

                    <div class="card-body">
                        <form-employee @update="saveEmployee" :errors="errors"></form-employee>
                        
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
           errors:new  Errors()
      }
  },
  methods:{
      saveEmployee(data){
          let url='api/employee';
          axios.post(url,data).then(response=>{

          }).catch(error=>{
              this.errors.record(error.response.data.errors)
          })
      }
  }
}
</script>
