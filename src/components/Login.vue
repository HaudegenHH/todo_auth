<template>

  <form @submit.prevent="handleSubmit">
    <h3>Login</h3>

    <hr>

    <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control mb-3" placeholder="Username" v-model="username" />
    </div>

    <div class="form-group">
      <label>Passwort</label>
      <input type="password" class="form-control mb-5" placeholder="Passwort" v-model="password" />
    </div>

    <button class="btn btn-success w-100">Login</button>
  </form>
</template>

<script>

export default {
  name: 'Login',
  data(){
    return {
      username: '',
      password: ''    
    }
  },
  methods: {
    handleSubmit() {      
      if(this.username == "admin" && this.password == "123"){
        this.$router.push('/projects') 
      } else {
        return;
      }
    }
  }
}
</script>