
<template>
    <div className="text-center space-y-5 pt-40 pb-20">
        <span
            className="pointer-events-none whitespace-pre-wrap bg-gradient-to-b from-black to-gray-300/80 bg-clip-text text-5xl font-semibold leading-none text-transparent dark:from-white dark:to-slate-900/10">
            Available Rooms
        </span>
        <p className="text-black/50">Here are some rooms that are available</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-10">
        <div class=" p-2" v-for="item in images">
            <a href="#"
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-48 md:h-40 md:w-48 md:rounded-none md:rounded-s-lg"
                    :src="item.url" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                        {{ item.name }}
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        {{ item.description }}
                    </p>
                    <p class="">
                       Good for {{ item.packs }} pax
                    </p>
                </div>
            </a>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';

const images = ref([
    {
        url: 'https://4kwallpapers.com/images/walls/thumbs_3t/19518.png',
        name: 'Sunset Beach',
        description: 'A beautiful sunset over a tranquil beach.',
        packs: '2'
    },
    {
        url: 'https://4kwallpapers.com/images/walls/thumbs_3t/17277.jpg',
        name: 'Mountain Peak',
        description: 'A majestic mountain peak covered in snow.',
        packs: '9'
    },
    {
        url: 'https://4kwallpapers.com/images/walls/thumbs_3t/19746.jpg',
        name: 'City Lights',
        description: 'A vibrant cityscape illuminated at night.',
        packs: '10'
    }
]);
</script>

