<template>
  <div id="app">
    <!-- <img src="./assets/logo.png"> -->
    <router-view/>
  </div>
</template>

<script>
  export default {
    name: 'App'
  }
</script>

<style>
html {
  position: absolute;
  width: 100%;
  height: 100%;
}
#app {
  background-color:#232525!important;
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  padding: 0!important;
  margin: 0!important;
  width: 100%;
  height: 100%;
  position: absolute;
}
</style>
