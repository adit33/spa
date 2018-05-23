<template>
<div class="row">
    <div class="form-group col-md-6">
        <label for="">First Name</label>
        <input class="form-control" v-model="employee.first_name" :class="{'is-invalid':errors.get('first_name')}" />
        <div v-if="errors.get('first_name')" class="invalid-feedback">
        {{ errors.get('first_name') }}
        </div>
    </div>


    <div class="form-group col-md-6">
        <label for="">Last Name</label>
        <input class="form-control" v-model="employee.last_name" :class="{'is-invalid':errors.get('last_name')}" />
        <div v-if="errors.get('last_name')" class="invalid-feedback">
        {{ errors.get('last_name') }}
        </div>
    </div>

    <div class="form-group col-md-6">
        <image-input @loaded="onLoad" v-model="employee.image"></image-input>
    </div> 

    <div>
        <button class="btn btn-primary btn-xs" @click="add">Save</button>
    </div>
    
</div>    
</template>

<script>
import ImageInput from 'Components/ImageInput';
export default {
    name:'FormEmployee',
    props:['errors','employee'],
    components:{'image-input':ImageInput},
  data(){
      return {
                  
      }
  },
  methods:{
      add(){
          this.$emit("save",this.$data);
      },
      onLoad(value){
          let vm=this;
          vm.employee.image=value.src;
        //   this.employee.image=data.image;
          console.log(vm.employee)
      }
  }
}
</script>

