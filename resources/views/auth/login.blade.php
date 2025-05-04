<x-auth-layout>
    <div class="text-center">
        <x-application-logo />
    </div>
    <p class="text-danger">{{ $errors->get('email') ? $errors->get('email')[0] : '' }}</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <x-input-label for="username" :value="__('locale.username')" />
            <x-text-input id="email" class="form-control" type="text" placeholder="{{ __('locale.username') }}" name="email" :value="old('email')" required autofocus autocomplete="username" />
        </div>
        <div class="form-group">
            <x-input-label for="password" :value="__('locale.password')" />
            <x-text-input id="password" class="form-control" type="password" placeholder="{{ __('locale.password') }}" name="password" required />
        </div>
        <div class="">
            <div class="form-group float-left">
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember">
                    <span>@lang('locale.remember')</span>
                </label>
            </div>
            <a href="" class="float-right">@lang('locale.forgot_password')?</a>
        </div>
        <x-button class="btn btn-az-primary btn-block">@lang('locale.sign_in')</x-button>
    </form>
</x-auth-layout>
