<template>
  <div id="navbar" class="fixed-top text-center mx-auto">
    <nav>
      <router-link to="/"><a id="nav">Início</a></router-link>
      <router-link to="/hardskill"><a id="nav">Hard Skills</a></router-link>
      <router-link to="/softskill"><a id="nav">Soft Skills</a></router-link>
      <router-link to="/projetos"><a id="nav">Projetos</a></router-link>
      <router-link to="/formacoes"><a id="nav">Formação</a></router-link>
      <router-link to="/metas"><a id="nav">Metas</a></router-link>
    </nav>
    <div class="mx-auto hr"></div>
  </div>
</template>

<script>
export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Navbar"
}
</script>

<style scoped>
  #nav {
    text-decoration: none;
    color: rgb(255, 255, 255);
    font-family: Quicksand, serif;
    text-align:center;
    font-size:1.5rem;
    margin: 0 1.3rem;
  }

  #nav:hover  {
    text-decoration: none;
    color: rgb(111, 42, 176);
    text-shadow: 1px 1px #5998d7;
}
</style>