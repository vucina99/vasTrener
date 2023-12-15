@extends("content")

@section("title" , 'Sa nama ste korak bliže svom cilju')

@section("keywords" , 'personalni trener, licni trener, vaš trener, fitness trener')
@section("description" , 'Najveća baza perosnalnih trenera u Srbiji. Pronadjite trenera po Vašoj meri i počnite sa treningom već danas')

@section("content")
    <div class="white-back ">
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header vastrener-bg-blue pt-3 text-light"><h5>Verifikacija profila</h5></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-primary" role="alert">
                            Novi link za verifikaciju profila je poslat na Vašu e-mail adresu.
                        </div>
                    @endif
                        Pre nego što nastavite, molimo vas da proverite svoj e-mail kako biste pronašli link za verifikaciju.

                        Ako niste primili e-mail
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">kliknite ovde kako biste zatražili ponovno slanje</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
