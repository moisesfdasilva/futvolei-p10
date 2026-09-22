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

            <main class="flex-grow flex flex-col p-2 content-start w-full md:w-4/5 min-[1500px]:w-[1200px] mx-auto bg-[#FFFFFF]">

                <h1 class="ml-6 pt-2 pb-1 text-2xl md:ml-12 md:pt-4 md:pb-2 md:text-4xl">Liga Nacional de Futevôlei</h1>
                <h2 class="ml-6 pt-1 pb-2 text-xl md:ml-12 md:pt-2 md:pb-4 md:text-2xl">Isso aqui é Futevôlei - Esporte 100% brasileiro</h2>
                <div class="flex justify-center items-center">
                    <img
                        src="/images/logo.png"
                        alt="fut-p10"
                        class="pt-2 pb-12 h-auto w-9/10 md:w-[615px]"
                    />
                </div>
                <h3 class="ml-6 pt-1 pb-2 text-lg md:ml-12 md:pt-2 md:pb-4 md:text-xl">BandSports transmite Copa Paulista de Futevôlei</h3>
                <p class="ml-6 mr-6 pt-1 pb-2 text-sm md:ml-12 md:mr-6 md:pt-2 md:pb-4 md:text-base text-justify">
                    Criado nos anos 1960, nas areias de Copacabana, no Rio de Janeiro, o futevôlei é uma modalidade que mistura características do 
                    futebol e do vôlei, os dois esportes mais praticados no Brasil. O esporte, que foi levado para a Europa nos anos 1980 e para a 
                    Ásia nos anos 2000, está presente em cerca de 40 países atualmente.
                </p>
                <p class="ml-6 mr-6 pt-1 pb-2 text-sm md:ml-12 md:mr-6 md:pt-2 md:pb-4 md:text-base text-justify">
                    A quadra é igual à do vôlei de areia, com 16 m x 8 m, dividida por uma rede um pouco mais baixa, a 2,20 m de altura, no masculino, 
                    e de 2,10 m, no feminino. A bola usada tem o tamanho da de futebol, de 68 cm a 70 cm de circunferência, é revestida com material 
                    flexível, mas resistente, que pode ser couro natural ou sintético, e tem uma câmara interna de borracha ou material semelhante.
                </p>
                <p class="ml-6 mr-6 pt-1 pb-2 text-sm md:ml-12 md:mr-6 md:pt-2 md:pb-4 md:text-base text-justify">
                    Os jogadores podem bater na bola com qualquer parte do corpo que não sejam os braços e as mãos. Como no vôlei, o time pode tocar 3 
                    vezes na bola até passar para a quadra adversária. O objetivo é derrubar a bola na quadra adversária. Embora oficialmente o jogo 
                    seja disputado apenas em duplas, nas areias do mundo todo é possível ver disputas com trios ou quartetos também.
                </p>
                <p class="ml-6 mr-6 pt-1 pb-2 text-sm md:ml-12 md:mr-6 md:pt-2 md:pb-4 md:text-base text-justify">
                    O jogo é disputado no esquema melhor de três sets. Os dois primeiros sets fecham em 18 pontos ou até uma das equipes alcançar uma 
                    diferença mínima de dois pontos, caso haja empate em 17 a 17. O terceiro set fecha em 15 pontos, também com 2 pontos de diferença.
                </p>
                <p class="ml-6 mr-6 pt-1 pb-2 text-sm md:ml-12 md:mr-6 md:pt-2 md:pb-4 md:text-base text-justify">
                    Mesmo tendo nascido na segunda metade do século passado, o futevôlei demorou para se organizar em associações profissionais. Foi 
                    apenas em 1998 que foi fundada a Confederação Brasileira de Futevôlei e, em 2002, a Federação Internacional de Futevôlei. O primeiro 
                    mundial da modalidade aconteceu em 2003, em Atenas, na Grécia.
                </p>
                <div class="p-8"></div>
            </main>

            <footer class="bg-[#3F95C5] py-6 text-center">
                <p class="text-gray-50">Av. Lúcio Costa - Recreio dos Bandeirantes</p>
                <p class="text-gray-50">CEP: 22630-010 | CNPJ: 12.585.556/0001-25</p>
            </footer>
        </div>

    </body>
</html>
