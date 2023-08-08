<template>
  <div id='formacao' class="movel">
    <div class='text-center display-5 titulo'>Formações</div>
    <div class='h-100 mt-6 content'>

    </div>
  </div>
</template>

<script>
import {defineComponent} from "vue";

export default defineComponent({
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Formacoes",
  data() {
    return {
      formacao: [
        {
          instituicao: 'Anhanguera',
          nome: 'Análise e Desenvolvimento de Software',
          inicio: '07/2021',
          fim: '06/2023',
          img: 'img/instituicoes/anhanguera.png'
        },
        {
          instituicao: 'Alura',
          nome: 'PHP, JS, TS, GIT, PostgreSQL, Laravel, Doctrine, Composer, HTML 5, Python, VUE, Figma',
          inicio: '',
          fim: '',
          img: 'img/instituicoes/alura.jpg'
        },
        {
          instituicao: 'Udemy',
          nome: 'Codeigniter 4, Charts, JS, jQuery, VUE + Laravel',
          inicio: '',
          fim: '',
          img: 'img/instituicoes/udemy.png'
        },
      ]
    }
  },
  methods: {
    add(){
      for (let i = 0; i < this.formacao.length; i++) {
        // eslint-disable-next-line no-undef
        $('#formacao .content').append(`
          <div class="container justify-content-center text-start h-100">
            <div class="row col-12">
              <div class="col col-4 text-center">
                <img style="width: 6rem" src="` + this.formacao[i].img + `" alt="Logo ` + this.formacao[i].instituicao + `">
              </div>
              <p class="col col-5 m-auto text-start conteudo">` + this.formacao[i].nome + `</p>
              <p class="col col-3 m-auto text-end conteudo">
                ` + this.formacao[i].inicio + ' - ' + this.formacao[i].fim + `
              </p>
            </div>
          <hr>
          </div>
        `)
      }
    }
  },
  mounted() {
    this.add()
  }
})
</script>

<style scoped>

</style>