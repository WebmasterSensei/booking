<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @routes
    @vite(['resources/js/app.ts', "resources/js/Pages/{$page['component']}.vue"], 'resources/css/app.css', 'resources/js/app.js')
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

<style>
    * {
        /* width: 100%; */
        font-family: "Poppins", serif;
        font-weight: 400;
        font-size: 14px;
        letter-spacing: .7px;
        text-decoration: none;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
</style>

</html>
