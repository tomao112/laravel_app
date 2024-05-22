<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ (isset($title) ? $title . ' | ' : '') . config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-sky-50">
        <div class="flex justify-between pt-5 bg-sky-200">
            <div class="flex flex-wrap mb-8">
                <div class="px-4 py-4">
                    <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline">トップページ</a>
                </div>
                <div class="px-4 py-4">
                    <a href="{{ route('article') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">output</a>
                </div>
            </div>
            <div>
                @if (Route::has('login'))
                    <div class="px-4 py-4 text-right sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ダッシュボード</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">会員登録</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
        
        <div class="font-sans text-gray-900 antialiased">
            <div class=" mx-auto prose">
                {{ $slot }}
            </div>
        </div>
        <!-- <footer class="flex items-end text-white h-10 text-center mt-10">
            <small class="leading-10">© {{ config('app.name') }}</small>
        </footer> -->
    </body>
</html>