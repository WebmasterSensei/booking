<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div class="bg-gradient-to-r  text-black rounded-lg p-10">
        <div class="container mx-auto px-6 py-16 md:py-1 flex flex-col md:flex-row items-center">
            <!-- Left Content -->
            <div class="text-center">

                <div class="max-w-7xl mx-auto mt-10 p-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Left Section -->
                    <div class="p-6 flex flex-col justify-center">
                        <!-- Title -->
                        <h1 class="text-4xl font-bold mb-4">Book your dream vacation</h1>
                        <p class="text-gray-00 mb-6 leading-relaxed">
                            Plan and book your perfect trip with expert advice, destination
                            inspiration, and inspiration from us!
                        </p>

                        <!-- Button -->
                        <Link :href="route('book.now')"
                            class="inline-block bg-blue-500 text-white px-6 py-2 rounded-md font-medium hover:bg-blue-600 transition">
                        Book Now
                        </Link>

                        <!-- Stats -->
                        <div class="flex  mt-6 lg:flex-wrap gap-4">
                            <div>
                                <p class="text-2xl font-bold text-black">115k+</p>
                                <p class="text-gray-400 text-sm">Hotels Listed</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-black">85k+</p>
                                <p class="text-gray-400 text-sm">Happy Customers</p>
                            </div>
                            <div>
                                <p class="text-2xl font-bold text-black">100+</p>
                                <p class="text-gray-400 text-sm">Destinations</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Section -->
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0"
                            alt="Vacation Destination" class="w-full h-[400px] object-cover rounded-lg" />
                        <!-- Overlay Content -->
                        <div class="absolute bottom-0 left-0 right-0 bg-black/50 p-4 text-white rounded-b-lg">
                            <div class="text-sm text-blue-300 mb-1">Mauritius</div>
                            <h2 class="text-lg font-semibold">CHEVAL BLANC RANDHELI</h2>
                            <p class="text-gray-300 text-sm mt-2">
                                Enjoy a luxurious vacation at your favorite destination with a
                                breathtaking view and easy access to the vibrant city life and
                                culinary delights.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
