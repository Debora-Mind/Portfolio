<template>
  <Index></Index>
  <HardSkill></HardSkill>
  <SoftSkill></SoftSkill>
  <Formacoes></Formacoes>
  <Projetos></Projetos>
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
    background: linear-gradient(189.1deg, rgb(35, 40, 40) 34.32%, rgba(148, 146, 146, 0.85) 100.27%);
    background-attachment: fixed;
  }

  .titulo {
    color: #ffffff;
    font-family: 'Montserrat', sans-serif;
    font-size: 4rem;
    padding: 0 0 4rem 0;
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

  .movel {
    padding-top: 30px;
  }

</style>
