<template>
  <div class="position-fixed top-0 end-0 m-4">
    <img id="logo" src="/img/logo-1.svg" alt="">
  </div>

  <div id="inicio" class="movel row conteudo top-0">
    <div class="text-center titulo">Débora</div>
    <div class="text-start mb-5 col-8">
      <div class="me-0 mb-5 conteudo">
        <div>
            Olá! Em busca de um desenvolvedor para dar vida ao seu projeto? Vamos nessa!
          Minha expertise está focada em aplicações web. Portanto, se você está procurando criar um site,
          é só mandar uma mensagem e começaremos a trocar ideias. Sou uma desenvolvedor fullstack e logo
          abaixo você pode conferir tanto as minhas habilidades quanto alguns dos projetos que já realizei.
          Com uma formação em Análise e Desenvolvimento de Sistemas, estou sempre atualizada com as últimas
          tendências do mercado e constantemente adquirindo novos conhecimentos para garantir que meus
          projetos sejam práticos, seguros e eficientes. Vamos trabalhar juntos para transformar sua visão
          em realidade!
        </div>
      </div>
    </div>
    <div class="mt-5 pe-5 col-4">
      <img id="foto" src="https://avatars.githubusercontent.com/u/90586894?v?v=4" target="_blank" style="width: 15rem; height: auto" alt="Minha foto">
    </div>
  </div>
</template>

<script>
import {defineComponent} from "vue";

export default defineComponent({
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Index",
})
</script>

<style scoped>
  #logo {
    width: 10rem;
  }

  #foto {
    width:6rem;
    height:6rem;
    border-radius:500px;
    background-color:rgba(196, 196, 196, 1);
  }
</style>