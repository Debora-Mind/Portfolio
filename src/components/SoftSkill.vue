<template>
  <div id='softSkill' class="movel">
    <div class='text-center display-5 m-6 titulo movel'>Soft Skills</div>
    <div class='h-100 mt-3'>
      <div class="ps-4 content">

      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SoftSkill",
  data() {
    return {
      softSkill: [
        {
          nome: 'Determinação',
          descricao: 'Tudo pode ser feito'
        },
        {
          nome: 'Foco',
          descricao: 'Entender o problema para encontrar a solução'
        },
        {
          nome: 'Estudiosa',
          descricao: 'Sempre da para aprendar mais'
        },
        {
          nome: 'Resiliencia',
          descricao: 'É preciso se atualizar'
        },
        {
          nome: 'Comunicação',
          descricao: 'A chave para qualquer negócio'
        }
      ]
    }
  },
  methods: {
    add() {
      for (let i = 0; i < this.softSkill.length; i++) {
        // eslint-disable-next-line no-undef
        $('#softSkill .content').append(`
          <li class='container row col-auto justify-content-center text-start conteudo'>
            <div class="col col-3">` + this.softSkill[i].nome + `</div>
            <div class="col col-9">` + this.softSkill[i].descricao + `</div>
            <hr>
          </li>
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