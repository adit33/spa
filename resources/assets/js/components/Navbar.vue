<template>
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
</template>

<script>
export default {
  
}
</script>
