<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import type { PageProps } from '@inertiajs/core'; // Import PageProps if needed

interface Auth {
    user: {
        id: number;
        name: string;
        email: string;
        avatar: string;
    };
}

const page = usePage<PageProps & { auth: Auth }>();

const user = page.props.auth.user;

</script>

<template>
    <nav class="">
        <div class="max-w-screen m-3.00-xl flex flex-wrap bg-[#103866] items-center justify-between mx-auto p-4 ">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Flowbite</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div v-if="user">
                    <button type="button" tt
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" :src="user?.avatar" alt="user photo">
                    </button>
                </div>
                <div v-else>
                    <Link :href="route('login')"
                        class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                    Login</Link>
                </div>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ user?.name }}</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ user?.email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <Link method="post" :href="route('logout')" as="button"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Sign
                            out</Link>
                        </li>
                        <!-- <li v-if="user">
                            <Link method="post" :href="route('logout')" as="button"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Sign
                            out</Link>
                        </li>
                        <li v-else>
                            <Link :href="route('login')"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                            Logins</Link>
                        </li> -->
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <Link :href="route('welcome')"
                            class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</Link>
                    </li>
                    <li v-if="user">
                        <Link :href="route('book.now')" class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent
                             md:hover:text-white md:p-0 text-white md:dark:hover:text-white
                              dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent
                               dark:border-gray-700">Book Now</Link>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3  rounded
                             hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 text-white md:dark:hover:text-white
                             dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent
                              dark:border-gray-700">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>


                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 text-white md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="bg-white">
        <slot />
    </div>

</template>
