<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEDALL</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">INICIAR SESIÓN</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTRARSE</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                   <img style="width:200px; heigth:100px;" src="https://medic-all.org/about/terms/assets/images/logo.png" alt="">
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <img style="width: 25px; height: 25px;"src="https://cdn-icons.flaticon.com/png/512/3196/premium/3196695.png?token=exp=1639106413~hmac=ca9f2ff3cb85efa8267527e3c67879d3" alt="">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Bienestar</a></div>
                            </div>
                            <div class="object-center my-6 " >
                                <img style="width: 200px; height: 200px;"src="https://www.uell.com.ar/wp-content/uploads/2021/09/slide-bienestar.png" alt="">   
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                En nuestro día a día podemos llevar a cabo múltiples estrategias con las que contribuir al máximo a nuestro bienestar y la calidad de vida. Desde técnicas de relajación, gestión emocional, ejercicios para cuidar de nuestras articulaciones o perder peso...Descubre todo ese amplio abanico de estrategias con las que sentirte bien por dentro y por fuera.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <img style="width: 25px; height: 25px;" src="https://cdn-icons.flaticon.com/png/512/1184/premium/1184810.png?token=exp=1639107988~hmac=88b73b8e0dfac925e0b27d14b5cb7b77" alt="">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Salud</a></div>
                            </div>
                            <div class="object-center my-6 " >
                                <img style="width: 250px; height: 200px;"src="https://userscontent2.emaze.com/images/f5693ff8-f99a-4ed9-9d86-6b55af6b8379/3ff962a9d4f6be13c240bf43bad36a64.png" alt="">   
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                La salud es prevención, es conocimiento y es tratamiento. En esta sección te facilitamos toda la información relativa al cuerpo humano, funcionamiento de los órganos, trastornos, enfermedades, los principales tratamientos para cada afección, así como esos primeros auxilios que todos deberíamos conocer.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                            <img style="width: 25px; height: 25px;" src="https://cdn-icons.flaticon.com/png/512/5165/premium/5165920.png?token=exp=1639108534~hmac=ab0f6cbfb04ce3d432dd0344d986fed0" alt=""> 
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Compromisos</a></div>
                            </div>
                            <div class="object-center my-6 " >
                                <img style="width: 300px; height: 200px;"src="https://www.reynaers.es/sites/default/files/public/styles/paragraph_image_small_video/public/media/p._commitment_icon.png?itok=hQdPepCx" alt="">   
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Establecemos las mejores prácticas médicas para su aplicación rigurosa, con principios como: Efectividad, calidad y seguridad.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                            <img style="width: 25px; height: 25px;" src="https://cdn-icons-png.flaticon.com/512/3712/3712097.png" alt="">
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Calidad</div>
                            </div>
                            <div class="object-center my-6 " >
                                <img style="width: 400px; height: 200px;"src="data:image/png;base64,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" alt="">   
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Nuestro equipo de talento humano junto a nuestros expertos trabajan en equipo para lograr brindarte la atención que necesitas duran tu estadía.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
