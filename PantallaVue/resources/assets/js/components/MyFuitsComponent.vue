<template>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <form-component @new="addFruit"></form-component>

            <thought-component
                v-for="(fruits, index) in thoughts"
                :key="fruit.id"
                :thought="thought"
                @update="updateFruit(index, name)"
                @delete="deleteFruit(index)">
            </fruit-component>

        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                fruits: []
            }
        },

        mounted() {
            axios.get('/fruits').then((response) => {
                this.fruits = response.data;
            });
        },

        methods: {
            addFruit(fruit) {
                this.fruits.push(fruit);
            },
            updateFruit(index, fruit) {
                this.fruit[index] = fruit;
            },
            deleteFruit(index) {
                this.thoughts.splice(index, 1);
            }
        }
    }
</script>
