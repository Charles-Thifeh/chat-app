<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ticchat</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-blue-600 selection:bg-red-500 selection:text-white">
            <nav
            class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 "
          >
            <div
              class="container px-4 mx-auto flex flex-wrap items-center justify-between"
            >
              <div
                class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start"
              >
                <a
                  class="text-3xl font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap text-white"
                  >ticchat</a
                ><button
                  class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                  type="button"
                  onclick="toggleNavbar('example-collapse-navbar')"
                >
                  <i class="text-white fas fa-bars"></i>
                </button>
              </div>
              <div
                class="lg:flex flex-grow items-center bg-white lg:bg-transparent lg:shadow-none hidden"
                id="example-collapse-navbar"
              >
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto">
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">
                                <button class="bg-white hover:bg-blue-800 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">
                                Login
                                </button>
                            </a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">
                                    <button class="bg-white hover:bg-blue-800 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded-full">
                                        Register
                                    </button>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
                </ul>
              </div>
            </div>
          </nav>
          <main>
            <div
              class="relative pt-16 pb-32 flex content-center items-center justify-center"
              style="min-height: 75vh;"
            >
              <div
                class="absolute top-0 w-full h-full bg-center bg-cover"
                style='background-image: url("https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80");'
              >
                <span
                  id="blackOverlay"
                  class="w-full h-full absolute opacity-75 bg-black"
                ></span>
              </div>
              <div class="container relative mx-auto">
                <div class="items-center flex flex-wrap">
                  <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                      <h1 class="text-white font-semibold text-5xl">
                        A chat App created by tic atelier
                      </h1>
                      <p class="mt-4 text-lg text-gray-300">
                        Just a Simple chat app feature created with Laravel and Tailwind Css. 
                        Reach us by clicking on the button below if you would like us to build something like this for your firm.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </main>
        </div>
    </body>
</html>
