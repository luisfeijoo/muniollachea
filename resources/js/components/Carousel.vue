<template>
    <splide :options="options">
        <splide-slide>
            <img src="/img/carousel/1.jpg">
        </splide-slide>
        <splide-slide>
            <img src="/img/carousel/2.jpg">
        </splide-slide>
        <splide-slide>
            <img src="/img/carousel/3.jpg">
        </splide-slide>
    </splide>
</template>

<script>
    import { Splide, SplideSlide } from '@splidejs/vue-splide';

    export default {
        components: {
            Splide,
            SplideSlide,
        },
        data () {
            return {
                options: {
                    type:'loop',
                    heightRatio: 0.25,
                    cover: true,
                    breakpoints: {
                        640: {
                            height: '17rem',
                        }
                    }
                }
            }
        }
    }
</script>

<style scoped>

</style>
