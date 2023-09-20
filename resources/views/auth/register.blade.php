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
                                        <form method="POST" action="{{ route('register') }}">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                <strong> <i class="fa-regular fa-face-smile"></i>  Dobrodošli na registraciju!  Vaša registracija znači da postajete deo
                                                    našeg tima trenera. Pored izgradnje profila koji će biti javan na platformi,
                                                    moćićete da vodite lične evidencije i programe za vaše klijente, sve na jednom mestu.
                                                    Radujemo se što ćemo zajedno raditi na postizanju  ciljeva i uspeha. </strong>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="name"
                                                       class=" col-form-label">Vaše ime i prezime *</label>

                                                <div class="col-md-12">
                                                    <input id="name" type="text"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           name="name"
                                                           value="{{ old('name') }}"  autocomplete="name"
                                                           autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="email"
                                                       class=" col-form-label">Vaša e-mail adresa *</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="email"
                                                           class="form-control @error('email') is-invalid @enderror"
                                                           name="email" value="{{ old('email') }}"
                                                           autocomplete="email">

                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password"
                                                       class=" col-form-label">Vaša lozinka *</label>

                                                <div class="col-md-12">
                                                    <input id="password" type="password"
                                                           class="form-control @error('password') is-invalid @enderror"
                                                           name="password"  autocomplete="new-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="password-confirm"
                                                       class=" col-form-label">Potvrda vaše lozinke *</label>

                                                <div class="col-md-12">
                                                    <input id="password-confirm" type="password" class="form-control"
                                                           name="password_confirmation"
                                                           autocomplete="new-password">
                                                </div>
                                            </div>



                                            <div class="pt-3">
                                                <button type="submit" class="btn btn-primary w-100">
                                                    REGISTRACIJA <i
                                                        class="fa-solid fa-right-to-bracket"></i>
                                                </button>
                                            </div>
                                            <br><br>
                                            <div class="d-flex justify-content-center">

                                                <div class="border border-primary rem">
                                                        <a class="btn btn-link login-re-btn-link" href="/login">
                                                            Već imate profil?
                                                        </a>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
