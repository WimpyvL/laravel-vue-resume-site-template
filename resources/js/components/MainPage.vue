<template>
    <div class="h-100vh d-flex flex-row">
        <i id="showNav" class="bi bi-list"></i>

        <Header />

        <Main-Content />

        <loader id="loader" object="#212431" color1="#149ddd" color2="#ffffff" size="5" speed="2" bg="#000000" objectbg="#149ddd" opacity="100" :disableScrolling="false" name="circular"></loader>
    </div>
</template>

<script>
export default {
    mounted() {
        let loader = document.getElementById("loader");

        window.onload = () => {
            loader.classList.add("loader-animation");
        }

        loader.onanimationend = () => {
            loader.style.display = "none";
        }
    },
}
</script>

<style scoped>
    .loader-animation {
        animation: fadeLoader .5s;
    }

    @keyframes fadeLoader {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>