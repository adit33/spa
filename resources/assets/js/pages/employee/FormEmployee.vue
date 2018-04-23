<template>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">First Name</label>
        <input class="form-control" v-model="first_name" />
    </div>

    <div class="form-group col-md-6">
        <label for="">Last Name</label>
        <input class="form-control" v-model="last_name" />
    </div>
    <button class="btn btn-primary btn-xs" @click="add">Save</button>
</div>    
</template>

<script>
// import Errors from '@dist/Errors'
export default {
    name:'FormEmployee',
  data(){
      return {
          first_name:'',
          last_name:'',
          errors:new  Errors()
      }
  },
  methods:{
      add(){
          this.$emit("update",this.$data);
      }
  }
}
</script>

