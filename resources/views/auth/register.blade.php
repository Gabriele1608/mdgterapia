<x-app-layout>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                {{-- <x-jet-label for="name" value="@lang('app.registrarse')" /> --}}
                <label class="font-dancing text-white" for="name">@lang('app.nombre')</label>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <label class="font-dancing text-white" for="name">@lang('app.email')</label>
                {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <label class="font-dancing text-white" for="name">@lang('app.password')</label>
                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <label class="font-dancing text-white" for="name">@lang('app.passwordconfirmation')</label>
                {{-- <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" /> --}}
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
                    @lang('app.yaregistrado')
                </a>

                <x-jet-button class="ml-4">
                    @lang('app.registrarse')
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    <footer class="flex h-24 sm:h-12 items-center bg-vinoclarisimo">
        <div class="flex flex-col sm:flex-row justify-center justify-self-start ml-2	">
            <a href=""><i class="fab fa-facebook-square text-xl mr-2 text-vino"></i></a>
            <a href=""><i class="fab fa-linkedin text-xl text-vino"></i></a>
        </div>
        <p
            class="text-center flex flex-col sm:flex-row text-xs justify-center w-full items-center sm:text-sm font-dancing tracking-widest font-semibold">
            <span class="font-black font-dancing text-lg sm:mr-2"> &copy; </span> @lang('app.desarrolladocon') <span><i
                    class="far fa-heart text-lg sm:mx-2 text-vino"></i></span> @lang('app.por') <strong
                class="font-semibold font-dancing ml-1">Gabriele Cangelli</strong>
        </p>
    </footer>
</x-guest-layout>
</x-app-layout>
