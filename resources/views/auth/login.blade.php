<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card px-5 py-5" id="form1">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />
                            <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2 btn" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="form-label">
                                <input id="remember_me" type="checkbox" class=form-control">
                                <span class="form-text">{{ __('Remember me') }}</span>
                            </label>
                        </div>

                        <div class="d-grid gap-2">
                            @if (Route::has('password.request'))
                                <a class="form-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                     
                            <x-primary-button class="btn btn-primary">
                                {{ __('Log in') }}
                            </x-primary-button>
               
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
