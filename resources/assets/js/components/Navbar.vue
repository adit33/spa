<template>
<div>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
     
        <div class="input-group">
        <input type="text" class="search-input" id="inlineFormInputGroupUsername" placeholder="Search">
      </div>
</nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <router-link to="/home" class="nav-link">Home <span class="sr-only">(current)</span></router-link>
        </li>
        <li class="nav-item">
          <router-link to="/employee" class="nav-link">Employee</router-link>
        </li>
      </ul>
      
    </div>
  </nav>
</div> 
</template>

<style>
  .search-input{
    background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
    border: solid 1px #ccc;
    padding: 9px 10px 9px 32px;
    width: 5%;
    padding-left: 10px;
    
    -webkit-border-radius: 10em;
    -moz-border-radius: 10em;
    border-radius: 10em;
    
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    transition: all .5s;
  }
  .search-input:focus{
    width: 100%;
  }
</style>

<script>
export default {
  
}
</script>
