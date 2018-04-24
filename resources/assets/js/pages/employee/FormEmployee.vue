<template>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">First Name</label>
        <input class="form-control" v-model="first_name" :class="{'is-invalid':errors.get('first_name')}" />
        <div v-if="errors.get('first_name')" class="invalid-feedback">
        {{ errors.get('first_name') }}
        </div>
    </div>


    <div class="form-group col-md-6">
        <label for="">Last Name</label>
        <input class="form-control" v-model="last_name" :class="{'is-invalid':errors.get('last_name')}" />
        <div v-if="errors.get('last_name')" class="invalid-feedback">
        {{ errors.get('last_name') }}
        </div>
    </div>
    <button class="btn btn-primary btn-xs" @click="add">Save</button>
</div>    
</template>

<script>
export default {
    name:'FormEmployee',
    props:['errors'],
  data(){
      return {
          first_name:'',
          last_name:'',
         
      }
  },
  methods:{
      add(){
          this.$emit("update",this.$data);
      }
  }
}
</script>

