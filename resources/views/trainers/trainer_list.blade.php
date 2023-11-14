@extends("content")

@section("title" , 'Sa nama ste korak bliže svom cilju')

@section("keywords" , 'personalni trener, licni trener, vaš trener, fitness trener')
@section("description" , 'Najveća baza perosnalnih trenera u Srbiji. Pronadjite trenera po Vašoj meri i počnite sa treningom već danas')

@section("content")
    <div class="white-back ">
        <div class="container">
            <div class="row">
                <div class="col-12 seo-tekstovi text-center">
                    <h1>
                        Pronađite vašeg personalnog-ličnog trenera već danas
                    </h1>
                    <h2>
                        Iskusni personalni-lični treneri, personalni treninzi i plan ishrane koji će vas usmeriti ka
                        ostvarivanju željenih rezultata sada su dostupni na samo <span class="vastrener-blue fw-bold">jedan klik od vas</span>.
                    </h2>
                </div>
            </div>
        </div>
        <br><br>

        <trainers-list></trainers-list>
    </div>

@endsection
