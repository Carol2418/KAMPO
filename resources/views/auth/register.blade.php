<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Rol') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="document_type" value="{{ __('Tipo de Documento') }}" />
                <x-jet-input id="document_type" class="block mt-1 w-full" type="text" name="document_type" :value="old('document_type')" required autofocus autocomplete="document_type" />
            </div>
            <div>
                <x-jet-label for="document_number" value="{{ __('Numero de Documento') }}" />
                <x-jet-input id="document_number" class="block mt-1 w-full" type="text" name="document_number" :value="old('document_number')" required autofocus autocomplete="document_number" />
            </div>

            <div>
                <x-jet-label for="full_name" value="{{ __('Nombre Completo') }}" />
                <x-jet-input id="full_name" class="block mt-1 w-full" type="text" name="full_name" :value="old('full_name')" required autofocus autocomplete="full_name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="city" value="{{ __('Ciudad') }}" />
                <x-jet-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
            </div>
            <div class="mt-4">
                <x-jet-label for="state" value="{{ __('Departamento') }}" />
                <x-jet-input id="state" class="block mt-1 w-full" type="text" name="state" :value="old('state')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Dirección') }}" />
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
            </div>


            <div class="mt-4">
                <x-jet-label for="age" value="{{ __('Edad') }}" />
                <x-jet-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')" required />
            </div>


            <div class="mt-4">
                <x-jet-label for="gender" value="{{ __('Genero') }}" />
                <x-jet-input id="gender" class="block mt-1 w-full" type="text" name="gender" :value="old('gender')" required />
            </div>


            <div class="mt-4">
                <x-jet-label for="phone" value="{{ __('Telefono') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Correo Electronico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmación de Contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
