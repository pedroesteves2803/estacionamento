<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="iq-card p-4">
                    <div class="iq-card-body">
                       <div class="iq-example-row">
                          <div class="container-fluid px-lg-5">
                             <div class="row mx-lg-n5">
                                <div class="col py-3 px-lg-5 border bg-light m-1">
                                    <div class="card iq-mb-3">
                                        <img src="https://source.unsplash.com/random/800x600?user?parking" class="card-img-top" alt="#">
                                        <div class="card-body">
                                            <h4 class="card-title">Faça login e garanta sua vaga no estacionamento - Reserve agora mesmo!</h4>
                                            {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                                            <p class="card-text"><small class="text-muted">Encontre vaga no estacionamento! Faça login em nossa plataforma e garanta sua vaga agora mesmo com apenas alguns cliques. Gerencie seu estacionamento de forma mais inteligente e eficiente. Faça login e garanta sua vaga!"</small></p>
                                        </div>

                                        <a href="{{route('login')}}" class="btn btn-primary btn-block m-2">Logar</a>
                                    </div>
                                </div>
                                <div class="col py-3 px-lg-5 border bg-light m-1">
                                    <div class="card iq-mb-3">
                                        <img src="https://source.unsplash.com/random/800x600?parking?administrator" class="card-img-top" alt="#">
                                        <div class="card-body">
                                            <h4 class="card-title">Administre seu estacionamento com facilidade - Faça login como administrador agora!</h4>
                                            {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
                                            <p class="card-text"><small class="text-muted">Administre seu estacionamento de forma mais eficiente! Faça login como administrador em nossa plataforma e tenha acesso a todas as ferramentas de gerenciamento de vagas, relatórios e controle de fluxo de veículos.</small></p>
                                        </div>

                                        <a href="{{route('login.parking')}}" class="btn btn-primary btn-block m-2">Administrar</a>
                                    </div>
                                </div>
                                <div class="col py-3 px-lg-5 border bg-light m-1">
                                    <div class="card iq-mb-3">
                                        <img src="https://source.unsplash.com/random/800x600?parking" class="card-img-top" alt="#">
                                        <div class="card-body">
                                            <h4 class="card-title">Simplifique o gerenciamento do seu estacionamento! Tudo em um só lugar.</h4>
                                            {{-- <p class="card-text">Procurando por um jeito mais fácil de gerenciar seu estacionamento? Não procure mais! Nosso site de gerenciamento de estacionamento oferece uma solução eficiente e conveniente para gerenciar seu estacionamento. Com nossas ferramentas de gerenciamento de vagas, controle de fluxo de veículos e relatórios em tempo real, você pode facilmente administrar seu estacionamento de forma mais inteligente. Visite nosso site agora e comece a gerenciar seu estacionamento com eficiência!</p> --}}
                                            <p class="card-text"><small class="text-muted">Gerencie seu estacionamento de forma inteligente! Oferecemos ferramentas de gerenciamento de vagas, controle de fluxo de veículos e relatórios em tempo real. Visite nosso site e comece a administrar seu estacionamento com eficiência!</small></p>
                                        </div>

                                        <a href="{{route('register.parking')}}" class="btn btn-primary btn-block m-2">Cadastrar</a>
                                    </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</x-guest-layout>
