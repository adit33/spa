<template>
<div class="container">
    <form action="">
        <div class="card card-default">
                    <div class="card-header">Create Employee</div>

                    <div class="card-body">
                        <form-employee @update="saveEmployee"></form-employee>
                        
                    </div>
                </div>
    </form>
  
</div>
</template>

<script>
import FormEmployee from './FormEmployee';
export default {
  components:{
      'form-employee':FormEmployee,
  },
  methods:{
      saveEmployee(data){
          let url='api/employee';
          axios.post(url,data).then(response=>{

          }).catch(erros=>{

          })
      }
  }
}
</script>
