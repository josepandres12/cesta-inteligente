<template>
  <header>
        <div class="ancho">
            <div class="logo">
                <p>IsraWeb</p>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
* {
    margin: 0;
    padding: 0%;
}

header {
    width: 100%;
    background: #1ABC9C;
    height: 70px;
}

.ancho {
    width: 80%;
    height: 70px;
    /*  background: red; */
    margin: auto;
}

.logo {
    width: 30%;
    height: 70px;
    /*   background: blue;*/
    float: left;
    padding-top: 10px;
    box-sizing: border-box;
}

.logo p  {
    color: #ffffff;
    font-size: 40px;
    text-decoration: none;
    font-weight: bold;
    font-family: rale;
}

nav {
    width: 70%;
    height: 70px;
    /* background: olive;*/
    float: left;
    text-align: right;
    padding-top: 24px;
    box-sizing: border-box;
}

nav ul li {
    display: inline;
}

nav ul li a {
    color: #ffffff;
    font-size: 13px;
    text-decoration: none;
    text-transform: uppercase;
    padding-left: 15px;
    font-weight: bold;
    letter-spacing: 1px;
    font-family: rale;
}

nav ul li a:hover {
    color: #444;
}
</style>