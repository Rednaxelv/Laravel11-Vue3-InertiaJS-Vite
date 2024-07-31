<template>
  <div>
    <h1>Hola desde el inicio</h1>
    <p>Hola {{ nombre }}</p>
  </div>
</template>

<script>
export default {
    name: 'Inicio',
    props: {
        nombre: String
    },
}
</script>