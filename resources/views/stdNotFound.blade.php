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
        <div class="min-h-dvh flex flex-col bg-center bg-cover bg-[#FFFFFF]">
            <nav class="relative border border-b-black border-solid bg-[#FFFFFF]">
                <div class="mx-auto max-w-7xl px-2 h-16">
                    <div class="relative flex h-16 items-center justify-between">
                        <div class="flex flex-1 items-center justify-center">
                            <div class="flex shrink-0 items-center">
                                <img src="/images/logo.png" alt="fut-p10" class="h-9 w-auto" />
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

            <main class="flex-grow flex flex-col p-2 content-start w-full md:w-4/5 min-[905px]:w-[724px] mx-auto
                bg-[url(/images/bola-fora.png)] bg-center bg-no-repeat bg-cover"
            >
                
                <h1 class="ml-6 pt-2 pb-1 text-2xl md:ml-12 md:pt-4 md:pb-2 md:text-4xl text-white font-bold">
                    Página Não Encontrada
                </h1>
                <h2 class="ml-6 pt-1 pb-2 text-xl md:ml-12 md:pt-2 md:pb-4 md:text-2xl text-white font-bold">
                    Lamentamos, mas esta página não está disponível.
                </h2>
                <a
                    class="m-auto mt-40 p-6 text-center border border-black border-solid bg-[#FFFFFF]"
                    href="/std"
                    :active="request()->is('/')"
                >
                    VOLTAR À PÁGINA PRINCIPAL
                </a>
            </main>

            <footer class="border border-t-black border-solid bg-[#FFFFFF] py-6 text-center">
                <p class="text-black">Av. Lúcio Costa - Recreio dos Bandeirantes</p>
                <p class="text-black">CEP: 22630-010 | CNPJ: 12.585.556/0001-25</p>
            </footer>
        </div>

    </body>
</html>
