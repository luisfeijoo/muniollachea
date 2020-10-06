<template>
    <splide :options="options">
        <splide-slide v-for="s in slides" :key="s.src">
                <img :src="'/img/carousel/'+s.src" />
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
                    autoplay    : true,
                    breakpoints: {
                        640: {
                            height: '17rem',
                        }
                    }
                },
                slides: [
                    { src: '1.jpg' },
                    { src: '2.jpg' },
                    { src: '3.jpg' },
                ]
            }
        }
    }
</script>

<style scoped>

</style>
