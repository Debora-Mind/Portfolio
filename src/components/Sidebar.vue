<template>
  <div class="fixed-bottom text-end h-75 me-0">
    <nav class="btn-group-vertical me-0">
      <a href="https://github.com/Debora-Mind" class="nav-item m-3" target="_blank"><i id="social" class="bi bi-github"></i></a>
      <a href="https://www.linkedin.com/in/debora-almeida-dev/" class="nav-item m-3" target="_blank"><i id="social" class="bi bi-linkedin"></i></a>
      <a href="https://wa.me/5551984859816" class="nav-item m-3" target="_blank"><i id="social" class="bi bi-whatsapp"></i></a>
      <a href="mailto:debora.almeida.de.mello@gmail.com" class="nav-item m-3" target="_blank"><i id="social" class="bi bi-envelope"></i></a>
    </nav>
  </div>
</template>

<script>
export default {
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Sidebar"
}
</script>

<style scoped>
  #social {
    font-size: 3rem;
    color: #ffffff;
    width:3rem;
    height: 3rem;
    margin: 0 1rem 0.5rem 1rem;
  }

  #social:hover  {
    color: rgba(28, 32, 33, 0.85);
  }
</style>