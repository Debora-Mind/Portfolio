<template>
  <div id='projeto' class="movel">
    <div class='text-center display-5 m-6 titulo movel'>Projetos</div>
    <div class='h-100 mt-3 content'>

    </div>

  </div>
</template>

<script>
export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Projetos",
  data() {
    return {
      projetos: [
        {
          nome: 'Cholet Shoes',
          descricao: 'Aplicação para controle financeiro e de estoque para pequenas empresas da indústria calçadista',
          link: '',
          img: 'img/projetos/cholet-shoes.png'
        }
      ]
    }
  },
  methods: {
    add() {
      for (let i = 0; i < this.projetos.length; i++) {
        // eslint-disable-next-line no-undef
        $('#projeto .content').append(`
          <article class='container'>
            <div class='row col-12 rounded bg-dark bg-opacity-50 border border-withe'>
              <dd class='col col-3 m-0 justify-content-center'>
                <a href="` + this.projetos[i].link + `">
                  <img src="` + this.projetos[i].img + `" style="width: 6rem;" alt="` + this.projetos[i].nome + `">
                  <p class="conteudo">
                    ` + this.projetos[i].nome + `
                  </p>
                </a>
              </dd>
              <dd class='col col-9 m-auto text-start m-0 conteudo'>
                ` + this.projetos[i].descricao + `
              </dd>
            </div>
          </article>
        `)
      }
    }
  },
  mounted() {
    this.add()
  }
}
</script>

<style scoped>

</style>