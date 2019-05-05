<template>
    <div class="panel panel-default">
        <div class="panel-heading">¿En qué estás pensando ahora?</div>

        <div class="panel-body">
            <form action="" v-on:submit.prevent="newThought()">
                <div class="form-group">
                    <label for="fruit">las :</label>
                    <input type="text" class="form-control" name="fruit" v-model="nombre"v-model="tipo">
                </div>
                <button type="submit" class="btn btn-primary">
                    Enviar nueva fruta
                </button>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                nombre: ''
            }
        },
        mounted() {
            console.log('Componente de fruta.')
        },
        methods: {
            newThought() {
                const params = {
                    nombre: this.nombre
                };
                this.nombre = '';

                axios.post('/fruits', params)
                    .then((response) => {
                        const fruit = response.data;
                        this.$emit('new', fruit);
                    });
            }
        }
    }
</script>
