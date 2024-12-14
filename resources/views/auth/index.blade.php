<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @endif
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="shortcut icon" href="{{ asset('assets/img/logotipos/2.svg') }}" type="image/x-icon" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <title>Login Essentials</title>
</head>

<body class="bg-blanco min-h-[80vh] m-[80px]">
    <section class="flex justify-between min-h-[80vh]">
        <main class="w-[50%] bg-blanco h-[100%] pr-[8%]">
            <article class="flex gap-[10px] items-center animate__animated animate__fadeInLeft">
                <div>
                    <img src="{{ asset('assets/img/logotipos/1.svg') }}" alt="logotipo1" width="60px" heigth="60px" />
                </div>
                <div>
                    <h1 class="text-rojo font-bold text-[25px]">Taurus Comunity CO</h1>
                    <p class="text-gris -mt-[10px] font-semibold">
                        Sistematización POS
                    </p>
                </div>
            </article>
            <article class="min-h-[480px] flex flex-col justify-center animate__animated animate__fadeInUp">
                <h2 class="text-[28px] font-semibold">Inicia sesión</h2>
                <p class="font-ligth text-[16px]">
                    ¡Bienvenido nuevamente a esta comunidad como lo es Taurix.
                </p>

                <form action="" method="post">
                    <label for="usuario" class="font-bold">Usuario</label>
                    <div class="rounded-lg border-[2px] border-gris p-[5px] flex items-center gap-[8px] my-[10px]">
                        <i class="fa-solid fa-circle-user text-gris"></i>
                        <input type="text" class="w-full focus:outline-none focus:border-none font-medium"
                            placeholder="1013580" name="usuario" />
                    </div>
                    <label for="pass" class="font-bold my-[10px]">Contraseña</label>
                    <div class="rounded-lg border-[2px] border-gris p-[5px] flex items-center gap-[8px] my-[10px]">
                        <i class="fa-solid fa-lock text-gris"></i>
                        <input type="password" id="password-input"
                            class="w-full focus:outline-none focus:border-none font-medium" placeholder="Salo***"
                            name="pass" />
                        <i id="toggle-password" class="fa-solid fa-eye text-gris cursor-pointer"></i>
                    </div>

                    <div class="flex items-center space-x-3 mt-[10px]">
                        <label class="group flex items-center cursor-pointer">
                            <input class="hidden peer" type="checkbox" />

                            <span
                                class="relative w-5 h-5 flex justify-center items-center bg-gray-100 border-2 border-gray-400 rounded-md shadow-md transition-all duration-500 peer-checked:border-rojo peer-checked:bg-rojo peer-hover:scale-105">
                                <span
                                    class="absolute inset-0 bg-gradient-to-br from-white/30 to-white/10 opacity-0 peer-checked:opacity-100 rounded-md transition-all duration-500 peer-checked:animate-pulse"></span>

                                <svg fill="currentColor" viewBox="0 0 20 20"
                                    class="hidden w-5 h-5 text-white peer-checked:block transition-transform duration-500 transform scale-50 peer-checked:scale-100"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path clip-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </span>

                            <span class="ml-3 text-[12px] text-gray-700 font-medium transition-colors duration-300">
                                Al darle click, entiendo los
                                <a href="" class="text-rojo font-semibold">Terminos & Condiciones</a>
                                de Taurus Comunity CO.
                            </span>
                        </label>
                    </div>

                    <button
                        class="group/button relative inline-flex items-center justify-center overflow-hidden rounded-md bg-rojo backdrop-blur-lg px-10 py-2 text-base font-semibold text-white transition-all duration-300 ease-in-out hover:scale-110 hover:shadow-xl hover:shadow-gray-600/50 border border-white/20 my-[20px]"
                        type="submit">
                        <span class="text-sm">Iniciar App</span>
                        <div
                            class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-13deg)_translateX(-100%)] group-hover/button:duration-1000 group-hover/button:[transform:skew(-13deg)_translateX(100%)]">
                            <div class="relative h-full w-10 bg-white/20"></div>
                        </div>
                    </button>
                </form>
            </article>
        </main>
        <main
            class="bg-rojo flex justify-center items-center w-[50%] rounded-xl p-[5%] animate__animated animate__fadeInRight">
            <article
                class="bg-negro_fuerte rounded-xl text-center flex flex-col items-center text-blanco text-[25px] p-[40px]">
                <p>¡Hola, soy Meilan! Bot de Taurus CO</p>
                <img src="{{ asset('assets/img/logotipos/essential.png') }}" alt="logo" width="250px" />
                <p>Eres el Taurix #1 de nuestra excelente comunidad.</p>
            </article>
        </main>
    </section>
</body>

<script src="https://kit.fontawesome.com/db59255a97.js" crossorigin="anonymous" defer></script>
<script src="{{ asset ('assets/js/main.js') }}"></script>
<script src="https://cdn.tailwindcss.com"></script>

</html>