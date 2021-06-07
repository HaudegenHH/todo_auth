<template>
  <div>
  <li v-for="project in this.projects" :key="project.id">{{project.name}}</li>  
  </div>
</template>

<script>
import axios from 'axios'

export default {
  data() {
    return {
      isLoggedIn: true,
      projects: null,
    }
  },
  mounted() {
      if(!this.isLoggedIn){
        this.$router.push('/');
      }
      axios.get('http://localhost:8080/getProjects.php')
        .then(response => {
          let data  = JSON.parse(response.data);
          this.projects = data.projects;
          console.log(data.projects);          
        })
  }
  
}
</script>