<template>
  <div>

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
