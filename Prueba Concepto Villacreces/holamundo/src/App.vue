<template>
  <div>
      <h1>{{mensaje}}</h1><!--Esta opción se suele utilizar cuando queremos mostrar nuestra variable y algo más como por ejemplo "Este es el mensaje: {{mensaje}}"-->
      <h1 v-text="mensaje"></h1><!--A diferencia de la otra, esta forma se utiliza cuando queramos que el elemento solo muestre el valor de la variable-->
  </div>
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
      mensaje: 'Hola mundo'
    }
  }
}
</script>

<style>
  h1{
    color: #f5716c;
    text-align: center;
    font-weight: bold;
  }
</style>