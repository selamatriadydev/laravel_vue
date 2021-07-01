<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
export default {
  name: 'App',
  components: {
    HelloWorld
  },
  created () {
    window.axios.get('http://127.0.0.1:8000/buku/laravel vue')
    .then((response) => {
    console.log(response)
    })
    .catch((error) => {
      if (!error.response) {
            // network error
            // this.errorStatus = 'Error: Network Error';
          console.log('Error: Network Error')
        } else {
            // this.errorStatus = error.response.data.message;
          console.log(error.response.data.message)
        }
    })
  }

}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
