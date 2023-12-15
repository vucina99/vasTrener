@extends('content')

@section('content')
    <div class="log-reg-back">
        <div class="container login-container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card border border-primary">
                        <div class="card-header d-flex justify-content-center">
                            <div class="logo-login-reg pt-2 pb-2">
                                <img src="{{asset('img/logo/logo-plavo-crni.png')}}" class="img-fluid" alt="logo">
                            </div>

                        </div>
                        <div class="card-body py-4">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="email"
                                                       class="col-form-label ">Vaša e-mail adresa *</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="text"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email"  value="{{ old('email') }}"
                                                           autocomplete="email" autofocus>

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password"
                                                       class="col-form-label ">Vaša lozinka *</label>

                                                <div class="col-md-12">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password"   autocomplete="current-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                   <strong>{{ $message }}</strong>
                                                </span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="form-check ">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    Zapamti me
                                                </label>
                                            </div>
                                            <div class="pt-3">
                                                <button type="submit" class="btn btn-primary  w-100">
                                                    PRIJAVA <i
                                                        class="fa-solid fa-right-to-bracket"></i>
                                                </button>
                                            </div>
                                            <br><br>
                                            <div class="d-flex justify-content-around">
                                                <div class="border border-primary rem">

                                                        <a class="btn btn-link login-re-btn-link" href="{{ route('password.request') }}">
                                                            Zaboravili ste lozinku?
                                                        </a>

                                                </div>
                                                <div class="border border-primary rem">
                                                        <a class="btn btn-link login-re-btn-link" href="/register">
                                                            Kreirajte  profil
                                                        </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
