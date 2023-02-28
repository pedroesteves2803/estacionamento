<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register.parking.store') }}">
            @csrf

            <div>
                <x-jet-label for="name_parking" value="{{ __('Nome') }}" />
                <x-jet-input id="name_parking" class="block mt-1 w-full" type="text" name="name_parking" :value="old('name_parking')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="cnpj" value="{{ __('Cnpj') }}" />
                <x-jet-input id="cnpj" class="block mt-1 w-full" type="text" name="cnpj" :value="old('cnpj')" required autofocus autocomplete="cnpj" />
            </div>

            <div class="mt-4">
                <x-jet-label for="cep" value="{{ __('Cep') }}" />
                <x-jet-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('Cidade') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Endereço') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="uf" value="{{ __('UF') }}" />
                <x-jet-input id="uf" class="block mt-1 w-full" type="text" name="uf" :value="old('uf')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="number" value="{{ __('Numero') }}" />
                <x-jet-input id="number" class="block mt-1 w-full" type="text" name="number" :value="old('number')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="complement" value="{{ __('complemento') }}" />
                <x-jet-input id="complement" class="block mt-1 w-full" type="text" name="complement" :value="old('complement')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="total_vacancies" value="{{ __('Total de vagas') }}" />
                <x-jet-input id="total_vacancies" class="block mt-1 w-full" type="number" name="total_vacancies" required />
            </div>

            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-4 mb-4">
                Cadastro de administrador
            </h2>

            <div>
                <x-jet-label for="name" value="{{ __('Nome') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Senha') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmar Senha') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('admin.login.parking') }}">
                    {{ __('Já esta registrado?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Registrar') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
