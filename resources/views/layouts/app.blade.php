<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    class="h-full bg-gray-100">

<head>
    <link rel="icon" href="{{ asset('assets/img/logobwi.svg') }}">
    @include('includes.meta')

    <title>@yield('title') | Kartu Induk Kesenian Banyuwangi</title>

    @stack('before-style')
    {{-- style --}}
    @include('includes.style')
    @stack('after-style')
</head>

<body class="h-full">
    <div>
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div x-data="{ isMobile: true }" x-bind:class="! isMobile ? 'hidden' : 'fixed inset-0 flex z-40 md:hidden'" role="dialog" aria-modal="true">
            <!--
                Off-canvas menu overlay, show/hide based on off-canvas menu state.

                Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
             -->
            <template x-if="isMobile">
                <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
            </template>
            <!--
                Off-canvas menu, show/hide based on off-canvas menu state.

                Entering: "transition ease-in-out duration-300 transform"
                    From: "-translate-x-full"
                    To: "translate-x-0"
                Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "-translate-x-full"
            -->
            <div
                x-show="isMobile"
                x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-35 transform"
                x-transition:leave-start="opacity-100 scale-100"
                x-transition:leave-end="opacity-0 scale-95" 
                class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-indigo-700">
                <!--
                    Close button, show/hide based on off-canvas menu state.

                    Entering: "ease-in-out duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                    Leaving: "ease-in-out duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button type="button" @click="isMobile = false"
                        class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                {{-- logo --}}
                @include('includes.logo')
                {{-- Logo end --}}
                <div class="mt-5 flex-1 h-0 overflow-y-auto">
                    @include('includes.mobilenav')
                </div>
            </div>

            <div class="flex-shrink-0 w-14" aria-hidden="true">
                <!-- Dummy element to force sidebar to shrink to fit close icon -->
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <div class="flex flex-col flex-grow pt-5 bg-indigo-700 overflow-y-auto">
                @include('includes.logo')
                <div class="mt-5 flex-1 flex flex-col">
                    @include('includes.dekstopnav')
                </div>
            </div>
        </div>
        
        <div class="md:pl-64 flex flex-col flex-1">
        <!-- topbar for all dekstop & Mobile -->
            @include('includes.topbar')

            <main>
                <div class="py-6">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>
    {{-- <div class="min-h-screen bg-gray-100">
@include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
    </div>
    </header>

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
    </div> --}}
    @stack('before-script')
    {{-- script --}}
    @include('includes.script')

    @stack('after-script')
</body>

</html>
