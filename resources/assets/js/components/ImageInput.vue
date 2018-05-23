<template>
    <div>
        <div>
            <input type="file" @change="onChange($event)" enctype="multipart/form-data" accept="image/*">
        </div>
        <div>
            <img class="img-thumbnail img-reponsive image-preview"
                :src="image_src" width="150" height="150">
        </div>            
    </div>    
</template>
<script>
export default {
    data(){
        return {
            image_src:''
        }
    },
    methods:{
        onChange(e){
            
            let file=e.target.files[0];
            let reader= new FileReader();

            reader.onload = (e) => {
                //this.imageSrc = e.target.result;
                //this.imageName = files[0].name;
                let src=e.target.result;
                this.image_src=src;
            };
            reader.readAsDataURL(file);

            this.$emit('loaded',{immage_src,file});
        }
    }    
}
</script>
