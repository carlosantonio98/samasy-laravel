<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            <div>

                @include('layouts.partials.header')
                
                <!--===== Main contente =====-->
                <div class="flex overflow-hidden bg-white pt-[64px] lg:pt-[58px]">
                    @include('layouts.partials.aside')

                    <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
                    <div id="main-content" class="w-full h-full min-h-[calc(100vh-64px)] lg:min-h-[calc(100vh-58px)] lg:ml-64 flex flex-col justify-between bg-gray-50 relative overflow-y-auto">
                        
                        <!--===== Page content =====-->
                        <main>
                            <div class="pt-6 px-4">
                                {{ $slot }}
                            </div>
                        </main>

                        @include('layouts.partials.footer')

                    </div>

                </div>

            </div>

        </div>
    </body>
</html>
