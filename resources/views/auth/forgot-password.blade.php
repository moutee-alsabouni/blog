{{-- <x-layouts.auth title="Forgot Password!">
  <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
              <div class="field">
                <x-label for="email" :value="__('Email')" />
                <div class="control has-icons-left has-icons-right">
                  <input class="input" type="email" placeholder="Email input" :value="old('email')">
                  <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                  </span>
                  <span class="icon is-small is-right">
                  </span>
                </div>
              </div>

              <div>
                <x-label for="email" :value="__('Email')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
  </x-layouts.auth> --}}

<x-layouts.auth title="Forgot Password!">
  <section class="section">
    <div class="container is-centered">
            <div class="container">
                <div class="container">
                  <p style="text-align: center; font-size: 3em"><b>Thanks for visiting Dandy Co</b></p>
  <section class="section">
  <div class="container">
    <div class="columns is-centered">
        <div class="column is-5">
          <div class="container">
            <x-auth-card>
              <div class="container">
                <div class="mb-4 text-sm text-gray-600">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    {{ __('Forgot your password? No problem :)
                    Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </div>
              </div>
              <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="field">
                    <x-label for="email" :value="__('Email')"/>
                    <div class="control has-icons-left">
                        <input type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="icon is-small is-left">
                          <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                        </span>
                      </div>
                    @error('email')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
              </form>
            </x-auth-card>
          </div>
        </div>
    </div>
  </div>
</section>
</x-layouts.auth>

