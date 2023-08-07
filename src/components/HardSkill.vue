<template>
  <div id='hardSkill' class="movel conteudo">
    <div class='text-center display-5 titulo'>Hard Skills</div>
    <div class='row col-auto mx-0 justify-content-center h-100 mt-3 conteudo'>

    </div>
  </div>
</template>

<script type="ts">
export default {
  name: "HardSkill",
  data() {
    return {
      hardskill: [
        {
          nome: 'PHP',
          porcentagem: '90',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg'
        },
        {
          nome: 'Composer',
          porcentagem: '80',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/composer/composer-original.svg'
        },
        {
          nome: 'Doctrine',
          porcentagem: '70',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/doctrine/doctrine-original-wordmark.svg'
        },
        {
          nome: 'Codeigniter',
          porcentagem: '70',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain-wordmark.svg'
        },
        {
          nome: 'Laravel',
          porcentagem: '50',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain-wordmark.svg'
        },
        {
          nome: 'HTML',
          porcentagem: '80',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg'
        },
        {
          nome: 'CSS',
          porcentagem: '80',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg'
        },
        {
          nome: 'Bootstrap',
          porcentagem: '70',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original-wordmark.svg'
        },
        {
          nome: 'JS',
          porcentagem: '60',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg'
        },
        {
          nome: 'TS',
          porcentagem: '70',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg'
        },
        {
          nome: 'jQuery',
          porcentagem: '40',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jquery/jquery-original-wordmark.svg'
        },
        {
          nome: 'VUE',
          porcentagem: '60',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original-wordmark.svg'
        },
        {
          nome: 'Postgres',
          porcentagem: '60',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/postgresql/postgresql-original-wordmark.svg'
        },
        {
          nome: 'Git',
          porcentagem: '80',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original-wordmark.svg'
        },
        {
          nome: 'Figma',
          porcentagem: '60',
          icone: 'https://cdn.jsdelivr.net/gh/devicons/devicon/icons/figma/figma-original.svg'
        },
      ]
    }
  },
  methods: {
    add() {
      for (let i = 0; i < this.hardskill.length; i++) {
        // eslint-disable-next-line no-undef
        $('#hardSkill .conteudo').append(
          `<div class = "col col-auto m-3" >
            <dd class = 'mx-5 text-center' >
              <img style='width:6rem' src="` + this.hardskill[i].icone + `" alt = "` + this.hardskill[i].nome + `" / >
              <div class = "progress rounded-5 mx-auto" style = 'width:6rem' >
                <div class = "progress-bar progress-bar-striped progress-bar-animated bg-success rounded-5"
                role = "progressbar"
                aria-label = "Animated striped example"
                aria-valuenow = "` + this.hardskill[i].porcentagem + `"
                aria-valuemin = "0"
                aria-valuemax = "100"
                style = "width: ` + this.hardskill[i].porcentagem + `%"> ` + this.hardskill[i].porcentagem + ` %
                </div>
              </div>
            </dd>
          </div>`
        )
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