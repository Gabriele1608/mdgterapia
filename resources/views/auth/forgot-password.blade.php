<x-app-layout>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-white font-comic">
            @lang('app.olvidopasswordexplicacion')

        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-white font-comic">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                <label class="font-dancing text-white" for="name">@lang('app.email')</label>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    @lang('app.enviarenlacerestablecerpassword')
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
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
</x-app-layout>