<template class="movel-container">
  <Index></Index>
  <HardSkill></HardSkill>
  <SoftSkill></SoftSkill>
  <Projetos></Projetos>
  <Formacoes></Formacoes>
  <Metas></Metas>
  <Sidebar></Sidebar>
  <Navbar></Navbar>
</template>

<script>
import Index from "@/components/Index";
import HardSkill from "@/components/HardSkill";
import SoftSkill from "@/components/SoftSkill";
import Formacoes from "@/components/Formacoes";
import Projetos from "@/components/Projetos";
import Metas from "@/components/Metas";
import Navbar from "@/components/Navbar";
import Sidebar from "@/components/Sidebar";
export default {
  name: 'App',
  components: {
    Sidebar,
    Navbar,
    Metas,
    Projetos,
    Formacoes,
    SoftSkill,
    HardSkill,
    Index
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
  }

  body {
    background: linear-gradient(189.1deg, rgb(62, 133, 178) 34.32%, rgb(183, 119, 220) 100.27%);
    background-attachment: fixed;
  }

  .titulo {
    color: #ffffff;
    font-family: 'Montserrat', sans-serif;
    font-size: 4rem;
    padding: 2rem 0;
  }

  .conteudo {
    color: #ffffff;
    font-family: Jaldi, serif;
    font-size:1.5rem;
    margin: 0 4rem;
  }

  .hr {
    background-color: rgb(255, 255, 255);
    width:55rem;
    height:3px;
    border-radius: 10px;
  }

  .movel-container {
    display: flex;
    flex-direction: column;
    min-height: 100vh; /* Garante que o container ocupe pelo menos a altura da tela */
  }

  .movel {
    flex: 1;
    padding-top: 30px;
    min-height: 100vh;
  }


</style>
