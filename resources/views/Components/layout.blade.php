<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <html class="h-full bg-gray-100">

    <body class="h-full">

        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img src="https://www.freepik.com/premium-psd/3d-logo-mockup-marbel-background_417221136.htm#fromView=keyword&page=1&position=8&uuid=2916598e-fa33-4cf9-97be-19d38afdffa9&query=Logo"
                                    alt="Your Company" class="size-8" />
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav-link href="/" action="false">Home</x-nav-link>
                                    <x-nav-link href="/jobs">Jobs</x-nav-link>
                                    <x-nav-link href="/contact">Contact</x-nav-link>
                                </div>
                            </div>
                        </div>
                        <div class="flex align-items-end g-8">
                            @guest
                            <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                            <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                        @endguest

                        @auth
                            <form action='logout' method="POST">
                                 @csrf
                                <x-form-button>Log out</x-form-button>
                            </form>
                        @endauth
                        </div>

                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div id="mobile-menu" class="md:hidden">
                   <div class="ml-10 flex items-baseline space-x-4">
                                    <x-nav-link href="/" action="false">Home</x-nav-link>
                                    <x-nav-link href="/jobs">Jobs</x-nav-link>
                                    <x-nav-link href="/contact">Contact</x-nav-link>
                                </div>
                    <div class="border-t border-gray-700 pt-4 pb-3">

                    </div>
                </div>
            </nav>

            <header class="bg-white shadow-sm">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                  @auth
                        <x-button href="/jobs/create">Create Job </x-button>
                  @endauth
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>

    </body>

    </html>
