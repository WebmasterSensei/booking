<template>
    <div class="container m-auto">

        <div className="text-center space-y-5 pt-40 pb-10">
            <span
                className="pointer-events-none whitespace-pre-wrap bg-gradient-to-b from-black to-gray-300/80 bg-clip-text text-3xl font-semibold leading-none text-transparent dark:from-white dark:to-slate-900/10">
                Description
            </span>
            <!-- <p className="text-black/50">Here are some rooms that are available</p> -->
        </div>
        <div class="inline-flex items-center justify-center w-full">
            <hr class="w-full h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
            <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                    <path
                        d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                </svg>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="p-14">
                <blockquote class="text-xl italic font-semibold text-gray-900 dark:text-white">
                    <p>"Flowbite is just awesome. It contains tons of predesigned components and pages starting from
                        login screen to complex dashboard. Perfect choice for your next SaaS application."</p>
                </blockquote>
            </div>
            <div class="p-10">

                <ol class="relative border-s border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ms-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February
                            2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI code in Tailwind
                            CSS</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+
                            pages including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce
                            & Marketing pages.</p>
                        <a href="#"
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-100 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn
                            more <svg class="w-3 h-3 ms-2 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg></a>
                    </li>
                    <li class="mb-10 ms-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March
                            2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in Figma
                        </h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">All of the pages and
                            components are first designed in Figma and we keep a parity between the two versions even as
                            we update the project.</p>
                    </li>
                    <li class="ms-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -start-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April
                            2022</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">E-Commerce UI code in Tailwind
                            CSS</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web
                            components and interactive elements built on top of Tailwind CSS.</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</template>
