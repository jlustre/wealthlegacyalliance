<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('build/assets/tailwind.css') }}">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance
    </head>

<body class="min-h-screen bg-white dark:bg-zinc-800">
   <livewire:front.custom-header />

    @fluxScripts
</body>
</html>
