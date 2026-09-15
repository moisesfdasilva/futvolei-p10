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
        <nav class="relative bg-[#3F95C5]">
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-16 items-center justify-between">
                    <div class="flex flex-1 items-center justify-center md:items-stretch md:justify-start">
                        <div class="flex shrink-0 items-center">
                            <img src="/images/logo.png" alt="Your Company" class="h-9 w-auto" />
                        </div>
                        <div class="hidden md:ml-6 md:block">
                            <div class="flex space-x-4">
                                <!-- quando reduzir um item do menu ver a possibilidade usar "sm" no lugar de "md" -->
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
                    <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <span class="text-gray-50">Menu</span>
                    </div>
                </div>
            </div>
        </nav>

        <div class="h-screen bg-center bg-cover bg-[url(/images/bgweb2.png)]">
            <div class="flex flex-col items-center h-screen w-full md:w-4/5 mx-auto bg-[#FFFFFF]">

                <div class="flex flex-row max-w-sm md:max-w-2xl h-36 md:h-auto overflow-hidden shadow-lg bg-white border border-gray-100">
                    <!-- Imagem Lateral (Fixa na esquerda, ganha tamanho no desktop) -->
                    <div class="w-1/3 md:w-1/3 h-full md:h-auto relative flex-shrink-0">
                        <img class="absolute inset-0 w-full h-full object-cover" src="/images/logo.png" alt="Imagem do produto">
                    </div>
                    
                    <!-- Conteúdo (Ajusta espaçamentos e textos dinamicamente) -->
                    <div class="flex flex-col justify-between p-3 md:p-6 w-2/3 md:w-2/3 leading-tight md:leading-normal">
                        <div>
                        <span class="inline-block text-[10px] md:text-xs font-semibold text-blue-600 uppercase tracking-wider mb-1 md:mb-2">
                            Tecnologia
                        </span>
                        <h3 class="text-sm md:text-xl font-bold text-gray-900 line-clamp-1 md:line-clamp-none">
                            Headphone Premium Wireless
                        </h3>
                        <p class="text-gray-600 text-xs md:text-sm mt-1 md:mt-0 mb-0 md:mb-4 line-clamp-2 md:line-clamp-none">
                            Experimente o melhor cancelamento de ruído ativo do mercado com conforto prolongado e bateria de até 40 horas de duração.
                        </p>
                        </div>
                        
                        <!-- Rodapé do Card / Ação -->
                        <div class="flex items-center justify-between mt-2 md:mt-4">
                        <span class="text-sm md:text-xl font-bold text-gray-900">R$ 1.299</span>
                        <button class="px-3 py-1 md:px-4 md:py-2 bg-blue-600 text-white text-[11px] md:text-sm font-semibold rounded-md md:rounded-lg hover:bg-blue-700 transition-colors shadow-sm">
                            Comprar
                        </button>
                        </div>
                    </div>
                    </div>

            </div>
        </div>

        <footer class="bg-[#3F95C5] py-6 text-center">
            <p class="text-gray-50">Av. Lúcio Costa - Recreio dos Bandeirantes</p>
            <p class="text-gray-50">CEP: 22630-010 | CNPJ: 12.585.556/0001-25</p>
        </footer>

    </body>
</html>
