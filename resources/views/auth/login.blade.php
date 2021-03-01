<x-guest-layout>
    {{-- <x-jet-authentication-card> --}}
        {{-- <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot> --}}

        {{-- <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif --}}

        <div class="form-login">

            <div class="login">
                <img src="{{ asset('img/Logo-de-Tagging.png') }}" alt="Logo de Tagging">
    
                <form method="POST" action="{{ route('login') }}">
                    @csrf
        
                    <div class="form-group">
                        <x-jet-label for="email" class="label" value="{{ __('Nombre de usuario') }}" />
                        <x-jet-input id="email" class="input" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
        
                    <div class="form-group">
                        <x-jet-label for="password" class="label" value="{{ __('Contraseña') }}" />
                        <x-jet-input id="password" class="input" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="">
                        <label for="remember_me" class="remember_check">
                            <x-jet-checkbox id="remember_me" name="remember" class="check" />
                            <span class="">{{ __('Recordarme') }}</span>
                        </label>
                    </div>
        
                    <div class="">
                        <x-jet-button class="text-tiny bg-secondary ml-4">
                            {{ __('Acceder') }}
                        </x-jet-button>

                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Olvidé mi contraseña') }}
                            </a>
                        @endif
        
                    </div>
                </form>
            </div>

        </div>


        
    {{-- </x-jet-authentication-card> --}}
</x-guest-layout>
