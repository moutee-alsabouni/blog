<x-layouts.auth title="Log in">
  <br/>
  <section class="section">
    <br/>
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-4">
          <div class="card">
            <br/>
            <p style="text-align: center">
              <i class='fas fa-user-circle is-centered' style='font-size:100px; color:#145867'></i>
            </p>
            <p style="text-align: center; font-size: 3em; font-weight: bold">Login</p>
            <div class="card-content">
              <div class="content">
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="field">
                      <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                      <div class="control">
                          <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      </div>
                      @error('email')
                          <p class="help is-danger" role="alert">
                              {{ $message }}
                          </p>
                      @enderror
                  </div>
                  <div class="field">
                      <label class="label" for="password">{{ __('Password') }}</label>
                      <div class="control">
                          <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password">
                      </div>
                      @error('password')
                          <p class="help is-danger" role="alert">
                              {{ $message }}
                          </p>
                      @enderror
                  </div>
                  <div class="field">
                      <div class="control">
                          <label class="checkbox">
                              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                              <span style="color: black">{{ __('Remember Me') }}</span>
                          </label>
                      </div>
                  </div>
                  <hr>
                  <div class="field is-grouped">
                      <div class="control">
                          <button type="submit" style="background-color:#145867" class="button is-info">
                              {{ __('Login') }}
                          </button>
                      </div>
                      @if (Route::has('password.request'))
                          <div class="control">
                              <a class="button" style="background-color:#145867" href="{{ route('password.request') }}">
                                <p style="color: white">{{ __('Forgot Your Password?') }}</p>

                              </a>
                          </div>
                      @endif
                      <div class="control">
                        <a class="button" style="background-color:#145867" href="{{ route('register') }}">
                          <p style="color: white">{{ __('Register') }}</p>
                        </a>
                      </div>
                    </div>
                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>
