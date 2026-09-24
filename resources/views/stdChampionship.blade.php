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
                <div class="flex justify-center">
                    <h1 class="ml-6 pt-6 pb-6 text-xl md:ml-12 md:pt-4 md:pb-2 md:text-2xl">
                        Torneios
                    </h1>
                </div>
                <div class="px-12 mb-6 flex flex-col">
                    <div class="flex justify-between items-center">
                        <img
                            src="/images/champ-1.png"
                            alt="champ-1"
                            class="pb-2 pr-1 h-auto w-1/2 rounded-full object-cover"
                        />
                        <img
                            src="/images/champ-2.png"
                            alt="champ-2"
                            class="pb-2 pl-1 h-auto w-1/2 rounded-full object-cover"
                        />
                    </div>
                    <div class="flex justify-between items-center">
                        <img
                            src="/images/champ-3.png"
                            alt="champ-3"
                            class="pb-2 pr-1 h-auto w-1/2 rounded-full object-cover"
                        />
                        <img
                            src="/images/champ-4.png"
                            alt="champ-4"
                            class="pb-2 pl-1 h-auto w-1/2 rounded-full object-cover"
                        />
                    </div>
                </div>
                <form method="POST" action="/" class="mt-12 mb-12 px-12 w-full">
                    <label class="pt-1 pb-2 text-lg">
                        Nome
                    </label>
                    <div class="py-2 mt-4 mb-4 flex items-center border border-black">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 leading-tight focus:outline-none"
                            type="text"
                            aria-label="name"
                            name="name"
                        >
                    </div>
                    <label class="pt-1 pb-2 text-lg">
                        Dupla
                    </label>
                    <div class="py-2 mt-4 mb-4 flex items-center border border-black">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 leading-tight focus:outline-none"
                            type="text"
                            aria-label="pair"
                            name="pair"
                        >
                    </div>
                    <label class="pt-1 pb-2 text-lg">
                        Tipo
                    </label>
                    <div class="py-2 mt-4 mb-4 flex items-center border border-black">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 leading-tight focus:outline-none"
                            type="text"
                            aria-label="type"
                            name="type"
                        >
                    </div>
                    <button
                        type="submit"
                        class="p-2 mt-12 text-center border border-black border-solid w-full bg-[#FFFFFF] hover:bg-blue-950"
                    >
                        Confirmar
                    </button>
                </form>
                <div class="mb-12 w-full">
                    <h2 class="p-2 text-lg">Regras do futevôlei:</h2>
                    <h3 class="p-2">Quadra</h3>
                    <p class="p-2">
                        A quadra de futevôlei é de areia e mede 18x9 metros. Há linhas laterais e de fundo, mas não há linhas de centro.
                    </p>
                    <p class="p-2">
                        A zona de saque fica atrás da linha de fundo.
                    </p>
                    <h3 class="p-2">Rede</h3>
                    <p class="p-2">
                        A rede de futevôlei mede 9,5 metros de comprimento por 1 metro de largura. Ela é colocada com as seguintes alturas: 2,20 metros (nos jogos masculinos) e 2,10 metros (nos jogos femininos).
                    </p>
                    <h3 class="p-2">
                        Bola
                    </h3>
                    <p class="p-2">
                        Em um jogo, todas as bolas usadas devem ter as mesmas características quanto ao tamanho, a pressão e o tipo.
                    </p>
                    <p class="p-2">
                        A bola de futevôlei mede entre 68 e 70 centímetros e a sua pressão deve ter 0,56/0,63 Kg/cm.
                    </p>
                    <h3 class="p-2">
                        Jogadores
                    </h3>
                    <p class="p-2">
                        A equipe de futevôlei pode ser formada por 2 jogadores, jogando-se em duplas (no caso dos campeonatos oficiais), ou por 4 jogadores em cada equipe, sendo um deles o capitão.
                    </p>
                    <h3 class="p-2">
                        Uniforme e acessórios
                    </h3>
                    <p class="p-2">
                        O uniforme do futevôlei é short, ou calção, e camisa de malha, ou camiseta.
                    </p>
                </div>
            </main>

            <footer class="bg-[#3F95C5] py-6 text-center">
                <p class="text-gray-50">Av. Lúcio Costa - Recreio dos Bandeirantes</p>
                <p class="text-gray-50">CEP: 22630-010 | CNPJ: 12.585.556/0001-25</p>
            </footer>
        </div>

    </body>
</html>
