
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
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf

                                            <div class="row mb-3">
                                                <label for="email"
                                                       class="col-form-label ">Vaša e-mail adresa *</label>

                                                <div class="col-md-12">
                                                    <input id="email" type="email"
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

                                            <div class="pt-3">
                                                <button type="submit" class="btn btn-primary  w-100">
                                                    POŠALJI LINK ZA OBNOVU LOZINKE <i class="fa-solid fa-spinner"></i>
                                                </button>
                                            </div>
                                            <br><br>
                                            <div class="d-flex justify-content-around">
                                                <div class="border border-primary rem">

                                                    <a class="btn btn-link login-re-btn-link" href="/login">
                                                         Vrati se prijavu
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



