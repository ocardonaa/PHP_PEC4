<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sinlge videogame page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @if (Auth::check())
                        <p style='color: white'>Hola de nuevo, {{Auth::user()->name}}!</p>
                    @endif
                    <a
                            href="{{ url('/') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Home
                        </a>
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-left w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main>
                <h1 style='color: white; display: block; font-size: x-large'>
                        Game title: {{ $videogame->title }}
                    </h1>
                    <h1 style='color: white; display: block; font-size: x-large'>
                        Game developer: {{ $videogame->developer }}
                    </h1>
                    <h1 style='color: white; display: block; font-size: x-large;'>
                        Platform: {{ $videogame->platform }}
                    </h1>
                    <h1 style='color: white; display: block; font-size: x-large;'>
                        Release year: {{ $videogame->release_year }}
                    </h1>
                    <h1 style='color: white; display: block; font-size: x-large;'>
                        Game mode: {{ $videogame->game_mode }}
                    </h1>
                    <div style='margin-bottom: 2em'>
                        <h1 style='color: white; display: block; font-size: x-large'>
                            Game cover:
                        </h1>
                        @if (file_exists($videogame->cover_image))
                            <img src="{{ asset($videogame->cover_image) }}" alt="Game Cover" style="max-width: 100%; height: auto;">
                        @else
                            <img src="{{ asset('covers/default.jpg') }}" alt="Game Cover" style="max-width: 100%; height: auto;">
                        @endif
                    </div>
                    <h1 style='color: white; display: block; font-size: x-large;'>
                        <a href="{{ url('/') }}" class="text-black font-semibold hover:underline">Click to return to Home Page</a>
                    </h1>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
