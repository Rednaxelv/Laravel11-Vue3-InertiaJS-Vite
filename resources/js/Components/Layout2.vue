<template>
  <!-- /resources/js/components/Layout2.vue -->
  <div>
    <header>
      <nav>
        <ul>
          <li><a href="/inicio">Inicio</a></li>
          <li><a href="/contacto">Contacto</a></li>
        </ul>
      </nav>

      <h1>Estas en el layout 2</h1>
    </header>
    <main>
      <slot></slot>
    </main>
    <footer>
      Este es el footer editado
    </footer>
  </div>
</template>

<script>
export default {
  name: 'Layout2'
}
</script>