<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    </head>
    <body>
        <div class="min-h-dvh flex flex-col bg-center bg-cover bg-[url(/images/bgweb2.png)]">
            <nav class="relative bg-[#3F95C5]">
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-16 items-center justify-between">
                        <!-- ========================================================================= -->
                        <!-- 0. NAVEGAÇÃO                                                              -->
                        <!-- ========================================================================= -->
                        <div class="flex flex-1 items-center justify-center md:items-stretch md:justify-start">
                            <div class="flex shrink-0 items-center">
                                <img src="/images/logo.png" alt="fut-p10" class="h-9 w-auto" />
                            </div>
                            <div class="hidden md:ml-6 md:block">
                                <div class="flex py-2 space-x-4">
                                    <x-nav-link href="/std" :active="request()->is('/')">Página Inicial</x-nav-link>
                                    <x-nav-link href="/std" :active="request()->is('/')">Aulas</x-nav-link>
                                    <x-nav-link href="/std" :active="request()->is('/')">Torneios</x-nav-link>
                                    <x-nav-link href="/std" :active="request()->is('/')">Venda/Aluguel</x-nav-link>
                                    <x-nav-link href="/std" :active="request()->is('/')">Suporte Técnico</x-nav-link>
                                    <x-nav-link href="/std" :active="request()->is('/')">Iniciar Sessão</x-nav-link>
                                    <x-nav-link href="/std" :active="request()->is('/')">Cadastrar</x-nav-link>
                                    <x-nav-link href="/std" :active="request()->is('/')">Contato</x-nav-link>
                                </div>
                            </div>
                        </div>

                        <!-- ========================================================================= -->
                        <!-- 1. MENU DESKTOP (Aparece apenas em telas médias 'md' e maiores)            -->
                        <!-- ========================================================================= -->
                        <div class="hidden md:inline-block relative group">
                            <!-- Botão Gatilho Desktop -->
                            <button class="bg-transparent text-white px-4 py-2 rounded-md">
                                Menu
                            </button>

                            <!-- Dropdown Menu Desktop (Abre com Hover) -->
                            <div class="absolute right-0 hidden group-hover:flex flex-col w-48 bg-white border border-gray-200 shadow-lg rounded-md mt-1 z-40">
                                <a class="p-2 hover:bg-blue-950" href="/std" :active="request()->is('/')">Página Inicial</a>
                                <a class="p-2 hover:bg-blue-950" href="/std" :active="request()->is('/')">Aulas</a>
                                <a class="p-2 hover:bg-blue-950" href="/std" :active="request()->is('/')">Torneios</a>
                                <a class="p-2 hover:bg-blue-950" href="/std" :active="request()->is('/')">Venda/Aluguel</a>
                                <a class="p-2 hover:bg-blue-950" href="/std" :active="request()->is('/')">Suporte Técnico</a>
                                <a class="p-2 hover:bg-blue-950" href="/std" :active="request()->is('/')">Iniciar Sessão</a>
                                <a class="p-2 hover:bg-blue-950" href="/std" :active="request()->is('/')">Cadastrar</a>
                                <a class="p-2 hover:bg-blue-950" href="/std" :active="request()->is('/')">Contato</a>
                            </div>
                        </div>

                        <!-- ========================================================================= -->
                        <!-- 2. MENU MOBILE (Aparece apenas em telas menores que 'md')                 -->
                        <!-- ========================================================================= -->
                        <div class="md:hidden inline-block">
                            <!-- Botão Mobile -->
                            <button
                                onclick="document.getElementById('mobile-menu').classList.remove('hidden')" 
                                class="bg-transparent text-white p-3 rounded-md"
                            >
                                Menu
                            </button>

                            <!-- Menu Overlay Mobile (Abre com Clique via JS) -->
                            <div
                                id="mobile-menu"
                                class="hidden fixed inset-0 flex flex-col justify-center items-center w-screen h-screen space-y-12 bg-[#A6CADA] z-50"
                            >
                                <!-- Botão Fechar -->
                                <button
                                    onclick="document.getElementById('mobile-menu').classList.add('hidden')"
                                    class="border border-black border-solid p-2 w-4/5 text-base shadow-lg hover:bg-blue-950"
                                >
                                    <span class="font-bold text-xl">X</span> FECHAR MENU
                                </button>
                            
                                <nav class="flex flex-col w-4/5 space-y-4 text-center text-base">
                                    <a 
                                        class="border border-black border-solid p-2 w-full bg-[#3F95C5] shadow-lg hover:bg-blue-950"
                                        href="/std"
                                        :active="request()->is('/')"
                                    >
                                        PÁGINA INICIAL
                                    </a>
                                    <a 
                                        class="border border-black border-solid p-2 w-full bg-[#3F95C5] shadow-lg hover:bg-blue-950"
                                        href="/std"
                                        :active="request()->is('/')"
                                    >
                                        AULAS
                                    </a>
                                    <a
                                        class="border border-black border-solid p-2 w-full bg-[#3F95C5] shadow-lg hover:bg-blue-950"
                                        href="/std"
                                        :active="request()->is('/')"
                                    >
                                        TORNEIOS
                                    </a>
                                    <a
                                        class="border border-black border-solid p-2 w-full bg-[#3F95C5] shadow-lg hover:bg-blue-950"
                                        href="/std"
                                        :active="request()->is('/')"
                                    >
                                        VENDA/ALUGUEL
                                    </a>
                                    <a
                                        class="border border-black border-solid p-2 w-full bg-[#3F95C5] shadow-lg hover:bg-blue-950"
                                        href="/std"
                                        :active="request()->is('/')"
                                    >
                                        SUPORTE TÉCNICO
                                    </a>
                                    <a
                                        class="border border-black border-solid p-2 w-full bg-[#3F95C5] shadow-lg hover:bg-blue-950"
                                        href="/std"
                                        :active="request()->is('/')"
                                    >
                                        INICIAR SESSÃO
                                    </a>
                                    <a
                                        class="border border-black border-solid p-2 w-full bg-[#3F95C5] shadow-lg hover:bg-blue-950"
                                        href="/std"
                                        :active="request()->is('/')"
                                    >
                                        CADASTRAR
                                    </a>
                                    <a
                                        class="border border-black border-solid p-2 w-full bg-[#3F95C5] shadow-lg hover:bg-blue-950"
                                        href="/std"
                                        :active="request()->is('/')"
                                    >
                                        CONTATO
                                    </a>
                                </nav>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </nav>

            <main class="flex-grow flex flex-col p-2 content-start w-full md:w-4/5 min-[905px]:w-[724px] mx-auto bg-[#FFFFFF]">
                <form method="POST" action="/" class="mb-12 px-12 w-full">
                    <div class="flex justify-center items-center mt-6">
                        <label class="text-lg">
                            CONTATOS
                        </label>
                    </div>
                    <input type="email" id="email" name="email">
                    <div class="flex items-center border-b border-black py-2 mt-8">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 leading-tight focus:outline-none"
                            type="email"
                            placeholder="E-MAIL"
                            aria-label="email"
                            name="email"
                        >
                    </div>
                    <div class="flex items-center border-b border-black py-2 mt-8">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 leading-tight focus:outline-none"
                            type="text"
                            placeholder="NOME"
                            aria-label="name"
                            name="name"
                        >
                    </div>
                    <div class="flex items-center border-b border-black py-2 mt-8">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 leading-tight focus:outline-none"
                            type="text"
                            placeholder="SOBRENOME"
                            aria-label="lastName"
                            name="lastName"
                        >
                    </div>
                    <div class="flex items-center border-b border-black py-2 mt-8">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 leading-tight focus:outline-none"
                            type="text"
                            placeholder="TEXTO"
                            aria-label="text"
                            name="text"
                        >
                    </div>
                    <button
                        type="submit"
                        class="p-2 mt-12 text-center border border-black border-solid w-full bg-[#FFFFFF] hover:bg-blue-950"
                    >
                        ENVIAR
                    </button>
                </form>
                <div class="flex flex-row mb-6 ml-12">
                    <img src="/images/whatsapp.png" alt="whatsapp" class="h-12 w-12"/>
                    <p class="p-2">(21) 94848-8409</p>
                </div>
                <div class="flex flex-row mb-6 ml-12">
                    <img src="/images/instagram.png" alt="instagram" class="h-12 w-12"/>
                    <p class="p-2">CT_FTVP10</p>
                </div>
                <div class="flex flex-row mb-12 ml-12">
                    <img src="/images/twitter.png" alt="twitter" class="h-12 w-12"/>
                    <p class="p-2">FTVP10</p>
                </div>
            </main>

            <footer class="bg-[#3F95C5] py-6 text-center">
                <p class="text-gray-50">Av. Lúcio Costa - Recreio dos Bandeirantes</p>
                <p class="text-gray-50">CEP: 22630-010 | CNPJ: 12.585.556/0001-25</p>
            </footer>
        </div>

    </body>
</html>
