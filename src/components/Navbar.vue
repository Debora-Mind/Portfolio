<template>
  <div id="navbar" class="fixed-top text-center mx-auto">
    <nav>
      <a id="nav" href="#inicio">Início</a>
      <a id="nav" href="#hardSkill">Hard Skills</a>
      <a id="nav" href="#softSkill">Soft Skills</a>
      <a id="nav" href="#projeto">Projetos</a>
      <a id="nav" href="#formacao">Formação</a>
      <a id="nav" href="#metas">Metas</a>
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