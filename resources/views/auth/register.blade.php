<x-layouts.auth title="Sign up">
  <section class="section">
    <br/>
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-4">
          <div class="card">
            <br/>
            <p style="text-align: center">
              <i class='fas fa-user-plus is-centered' style='font-size:100px; color:#145867'></i>
            </p>
            <p style="text-align: center; font-size: 3em; font-weight: bold">Sign up</p>
            <div class="card-content">
              <div class="content">

                <form method="POST" action="{{ route('register') }}">
                      @csrf

                      <div class="field">
                          <label class="label" for="email">{{ __('Name') }}</label>
                          <div class="control">
                              <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name"
                                  value="{{ old('name') }}" required autocomplete="name" autofocus>
                          </div>

                          @error('name')
                              <p class="help is-danger" role="alert">
                                  {{ $message }}
                              </p>
                          @enderror
                      </div>

                      <div class="field">
                          <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                          <div class="control">
                              <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email"
                                  value="{{ $email ?? old('email') }}" required autocomplete="email">
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
                              <input id="password" type="password" class="input @error('password') is-danger @enderror"
                                  name="password" required autocomplete="new-password">
                          </div>

                          @error('password')
                              <p class="help is-danger" role="alert">
                                  {{ $message }}
                              </p>
                          @enderror
                      </div>

                      <div class="field">
                          <label class="label" for="password-confirm">{{ __('Confirm Password') }}</label>
                          <div class="control">
                              <input id="password-confirm" type="password" class="input" name="password_confirmation" required
                                  autocomplete="new-password">
                          </div>
                      </div>

                      <hr>

                      <div class="field is-form-action-buttons">
                          <button type="submit" class="button" style="background-color:#145867">
                            <p style="color: white">{{ __('Register') }}</p>
                          </button>

                          <a class="button" style="background-color:#145867" href="{{ route('login') }}">
                            <p style="color: white">{{ __('Log in') }}</p>
                          </a>
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
