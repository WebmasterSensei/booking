<script setup lang="ts">
import { ref } from 'vue';

const images = ref<object>([
    'https://4kwallpapers.com/images/walls/thumbs_3t/19518.png',
    'https://4kwallpapers.com/images/walls/thumbs_3t/17277.jpg',
    'https://4kwallpapers.com/images/walls/thumbs_3t/19746.jpg',
    'https://4kwallpapers.com/images/walls/thumbs_3t/20019.jpg',
    'https://4kwallpapers.com/images/walls/thumbs_3t/7710.jpg'
])

</script>
<template>
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-40 overflow-hidden md:h-96"
            style="box-shadow: rgba(0, 0, 205, 0.4) 0px 20px 30px -10px;">
            <!-- Carousel images loop -->
            <div class="hidden duration-700 ease-in-out" v-for="item in images" data-carousel-item>
                <img :src="item" class="absolute block w-full" alt="...">
            </div>
            <!-- Absolute text overlay (not in the loop) -->
        </div>

        <!-- Carousel indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button v-for="(item, key) in images" type="button" class="w-2 h-2 rounded-full" aria-current="true"
                :aria-label="'Slide' + key" :data-carousel-slide-to="key">
            </button>
        </div>
    </div>

</template>
