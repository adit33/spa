
class Errors { 
    constructor(){
        this.errors = {};
    }

    get(field){
        if(this.errors[field]){
            return this.errors[field][0];
        }
    }

    clear(field){
        delete this.errors[field];
    }

    record(errors){
        this.errors = errors;
    }
    

}

export default Errors