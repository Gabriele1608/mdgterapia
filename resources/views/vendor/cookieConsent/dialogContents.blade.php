<div class="js-cookie-consent cookie-consent flex justify-between p-2 bg-vinoclaro mt-4 text-sm font-semibold">

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>
<div class="flex justify-end w-56">
    <button class="js-cookie-consent-agree cookie-consent__agree p-1 mr-2 text-center bg-vino hover:bg-vinoclarisimo font-semibold text-sm rounded-lg">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

    <a class="p-1 bg-vino hover:bg-vinoclarisimo font-semibold text-sm text-center rounded-lg" href="{{route('legal.privacidad')}}">Política de Privacidad</a>
</div>
</div>
