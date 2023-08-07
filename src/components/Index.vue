<template>
  <div class="position-fixed top-0 end-0 m-4">
    <img id="logo" src="/img/logo-1.svg" alt="">
  </div>

  <div id="inicio" class="movel row conteudo">
    <div class="text-center titulo">Débora</div>
    <div class="text-start h-100 col-8">
      <div class="d-inline-block me-0 conteudo">
        <div>
          Olá! É um prazer ter você aqui! Está é uma página onde pretendo mostrar um pouquinho sobre
          quem sou, meus projetos, metas, trajetórias, evoluções e expectativas profissionais. Tenho 29
          anos, sou casada e tenho uma enteada de 9 anos. Moramos hoje em Igrejinha no Vale do
          Paranhana, RS. Encontrei-me ao estudar sobre tecnologia e dessa vez senti estar no caminho
          certo. Hoje sou Técnica de Suporte TI, resolvo problemas no sistema referentes a SQL, HTML,
          JavaScript, relatórios JasperSoft e PHP.
        </div>
      </div>
    </div>
    <div class="m-auto mt-1 col-4">
      <img id="foto" src="https://avatars.githubusercontent.com/u/90586894?v?v=4" target="_blank" style="width: 15rem; height: auto" alt="Minha foto">
    </div>
  </div>
</template>

<script>
export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Index",
}
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