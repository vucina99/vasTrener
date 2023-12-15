@extends("content")

@section("title" , 'Sa nama ste korak bliže svom cilju')

@section("keywords" , 'personalni trener, licni trener, vaš trener, fitness trener')
@section("description" , 'Najveća baza perosnalnih trenera u Srbiji. Pronadjite trenera po Vašoj meri i počnite sa treningom već danas')

@section("header")

    <div class="background-image">
        <div class="gradient">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-text text-center text-light ">
                            <h1>Pronađi najbolje za sebe </h1> <br>
                            <h2 class=" d-none d-sm-block">Najbrži način da pronađete ličnog trenera, plan ishrane ili
                                <br>
                                proizvod koji će zadovoljiti vaše potrebe</h2>
                            <h2 class="  d-sm-none">Najbrži način da pronađete ličnog trenera, plan ishrane ili
                                proizvod koji će zadovoljiti vaše potrebe</h2>
                            <br>
                            <p>Ako si trener i želiš da postaneš deo trenerske zajednice klikni <a href="/register"
                                                                                                   class="ovde_link">OVDE</a>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center ">
                    <div class="col-lg-7 col-md-10 col-sm-12 pb-4 ">
                        <div class="container  bg-light p-4 rounded ">
                            <div class="row d-none d-sm-block">
                                <form action="" class="d-flex  flex-column  flex-lg-row">
                                    <div class="col-lg-6 col-sm-12 pt-3">

                                        <select class="form-select    form-select-lg">
                                            <option>Izaberi sport</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 pt-3 ">
                                        <select class="form-select form-select-lg">
                                            <option>Izaberi Grad</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="row d-sm-none">
                                <form action="" class="d-flex  flex-column  flex-lg-row">
                                    <div class="col-lg-6 col-sm-12 pt-3">

                                        <select class="form-select    ">
                                            <option>Izaberi sport</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6 col-sm-12 pt-3 ">
                                        <select class="form-select ">
                                            <option>Izaberi Grad</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12  pt-3  ">

                                    <button class="btn btn-primary pt-1 pb-1 button-search-text h-100 w-100"><i
                                            class="fa-solid fa-magnifying-glass"></i> Brza Pretraga
                                    </button>
                                </div>
                                <div class="col-12 col-sm-12  pt-2  ">
                                    <button
                                        class="btn btn-outline-primary btn-outline-primary-secound pt-1 pb-1 vastrener-blue button-search-text h-100 w-100">
                                        <i class="fa fa-users" aria-hidden="true"></i>
                                        Svi Treneri
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection

@section("content")

    {{--    SPORTOVI--}}
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="text-center  section-title ">
                    <h3>SPORTOVI </h3>
                    <div class="w-100 d-flex justify-content-center">
                        <div class="blue-border"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex  ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/strength.png')}}" class="bodibilding">
                        </div>
                        <div class=" ">
                            <div class="pt-2">
                                <h5 class="fw-bold">BODYBUILDING</h5>
                                <p>3 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex  ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/fitness.png')}}" class="fitnes">
                        </div>

                        <div class=" ">
                            <div class="pt-2">
                                <h5 class="fw-bold">FITNESS </h5>
                                <p>2 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex  ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/crossfit.png')}}" class="crossfit">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">CROSSFIT</h5>
                                <p>2 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/cardio.png')}}" class="kardio">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">CARDIO</h5>
                                <p>6 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex  ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/power.png')}}" class="powerlifting">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">POWERLIFTING</h5>
                                <p>6 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/boxing.png')}}" class="boks">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">BOKS </h5>
                                <p>1 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex  ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/kickbox.png')}}" class="kikbox">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">KIK BOKS </h5>
                                <p>7 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex  ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/mma.png')}}" class="mma">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">MMA </h5>
                                <p>7 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex  ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/football.png')}}" class="fudbal">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">FUDBAL </h5>
                                <p>4 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex  ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/basketball.png')}}" class="kosarka">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">KOŠARKA </h5>
                                <p>3 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/tennis.png')}}" class="tenis">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">TENIS </h5>
                                <p>3 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card cards  card-2 w-100 pt-2">
                    <div class="card-body d-flex ">
                        <div class="sport-img ">
                            <img src="{{asset('img/sports/sport.png')}}" class="ostalo">
                        </div>
                        <div class=" d-flex  align-items-center ">
                            <div class="pt-2">
                                <h5 class="fw-bold">OSTALO </h5>
                                <p>3 x trener</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{--    END SPORTOVI--}}
    <br><br><br><br>

    {{--    O NAMA --}}
    <div class="baby-blue">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="text-center  section-title ">
                        <h3>O NAMA </h3>
                        <div class="w-100 d-flex justify-content-center">
                            <div class="blue-border"></div>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 desc pb-5">
                    <div class="w-100 onama ">
                        <h2 class="vastrener">Kako <span class="vastrener-blue">pronadji-trenera</span> funkcioniše?
                        </h2>
                        <br><br>
                        <p>
                            <i class="fa-solid fa-check"></i> &nbsp; Želite da trenirate klijente uživo ili online?
                        </p>
                        <p>
                            <i class="fa-solid fa-check"></i> &nbsp; Imate savršen trening plan?
                        </p>
                        <p>
                            <i class="fa-solid fa-check"></i> &nbsp; Uz Vaše planove ishrane klijenti postižu
                            neverovatne rezultate?
                        </p>
                        <p><i class="fa-solid fa-check"></i>&nbsp; Imate jedinstvene ponude? </p>
                        <p><i class="fa-solid fa-award"></i>&nbsp; U tom slučaju ste na pravom mestu! </p>

                        <p>
                            Pokažite svietu Vašu ponudu, jer baš u ovom trenutku nekome su potrebne Vaše usluge ili
                            proizvodi.
                            <br>
                            <a href="">Prijavite se</a> i dozvolite da Vas pronađu.
                        </p> <br>
                        <div
                            class=" w-100 d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-xl-start">
                            <button class="btn btn-primary "><b>Saznaj više <i
                                        class="fa-solid fa-circle-info text-light"></i></b></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 ">
                    <div
                        class=" d-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-xl-end">
                        <img src="{{asset('img/phone.png')}}" class="w-50" alt="phone">
                    </div>
                </div>

            </div>
        </div>

    </div>
    {{--    END O NAMA--}}

    {{--     KOMENTARI --}}
    <div class="comments">
        <div class="comment-dark">
            <div class="container">

                <div class="row">
                    <div class="col-12">

                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active " data-bs-interval="10000">
                                    <div class="w-100 d-block item-comment"></div>
                                    <div
                                        class="carousel-caption  h-100 d-flex align-items-center justify-content-center">
                                        <div class="pt-4">
                                            <h5>Zoki Sumadinac</h5>
                                            <h6> ~ Korisnik ~</h6>
                                            <p><sub> <i class="fa-solid fa-quote-right"></i> </sub> Na platformi sam
                                                nasao odgovarajuceg trenera, po svojoj meri <sup> <i
                                                        class="fa-solid fa-quote-right"></i> </sup></p>

                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item " data-bs-interval="2000">
                                    <div class="w-100 d-block item-comment"></div>
                                    <div
                                        class="carousel-caption h-100 d-flex align-items-center justify-content-center">
                                        <div class="pt-4">
                                            <h5>Dejan Dejanovic</h5>
                                            <h6> ~ Trener ~</h6>
                                            <p><sub><i class="fa-solid fa-quote-right"></i> </sub> Ova platforma mi je
                                                pomogla u
                                                pronalazenju
                                                novih klijenata i olaksala posao <sup> <i
                                                        class="fa-solid fa-quote-right"></i> </sup></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="w-100 d-block item-comment"></div>
                                    <div
                                        class="carousel-caption h-100 d-flex align-items-center justify-content-center">
                                        <div class="pt-4">
                                            <h5>Marko Markovic</h5>
                                            <h6> ~ Trener ~</h6>
                                            <p><sub><i class="fa-solid fa-quote-right"></i> </sub> Lako se dolazi do
                                                novih klijenata, sto je poenta aplikacije i ovog okruzenja <sup> <i
                                                        class="fa-solid fa-quote-right"></i> </sup></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide="prev">
                                <span class="carousel-control-prev-icon text-light" aria-hidden="true"></span>
                                <span class="visually-hidden  text-light">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                                    data-bs-slide="next">
                                <span class="carousel-control-next-icon " aria-hidden="true"></span>
                                <span class="visually-hidden  text-light ">Next</span>
                            </button>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--    END KOMENTARI --}}

    {{--PARTNERI    --}}

    <div class="container " id="partneri">
        <div class="row">
            <div class="col-12 ">
                <div class="text-center  section-title ">
                    <h3>PARTNERI </h3>
                    <div class="w-100 d-flex justify-content-center">
                        <div class="blue-border"></div>
                        <br>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 onama mb-5">
                <p>
                    U našem poslovanju, partnerstva su od velike važnosti jer nam omogućuju da pružimo najbolju uslugu
                    našim klijentima. Suradnja s našim partnerima pomaže nam da pronađemo inovativna rešenja i
                    zajednički radimo na ostvarivanju ciljeva.
                </p>
                <p class="fst-italic text-primary-secound">Naši partneri su odabrani zbog svoje stručnosti, kvaliteta
                    proizvoda
                    i usluga i kulture poslovanja koja odgovara našim vrednostima.</p>
                <p>Kao partneri, zajedno radimo na razvoju novih proizvoda i usluga koje mogu pomoći našim klijentima u
                    postizanju njihovih ciljeva. Kroz naša partnerstva, stvaramo dugoročne i uspešne odnose koji su
                    temeljeni na poverenju i međusobnom poštovanju.</p>
                <p>Hvala na poseti našoj stranici o partnerima, a za više informacija o partnerstvu,
                    <span class="text-primary-secound fst-italic"> kontaktirajte nas putem e-pošte ili telefona.</span>
                </p>
                <br>
                <div class=" text-sm-center-xs">
                    <a class="scrollto" href="#kontakt">
                        <button class="btn btn-primary  "><b>Kontakt <i class="fa-solid fa-address-book"></i></b>
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 ">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center ">
                        <div class="logo-partner d-flex justify-content-center align-items-center">
                            <span>Logo kompanije</span></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center ">
                        <div class="logo-partner d-flex justify-content-center align-items-center">
                            <span>Logo kompanije</span></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center ">
                        <div class="logo-partner d-flex justify-content-center align-items-center">
                            <span>Logo kompanije</span></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center ">
                        <div class="logo-partner d-flex justify-content-center align-items-center">
                            <span>Logo kompanije</span></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center ">
                        <div class="logo-partner d-flex justify-content-center align-items-center">
                            <span>Logo kompanije</span></div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 text-center ">
                        <div class="logo-partner d-flex justify-content-center align-items-center">
                            <span>Logo kompanije</span></div>
                    </div>
                </div>
            </div>

        </div>
    </div><br><br>

    {{--        END PARNETI--}}

    {{--    KONTAKT--}}
    <div class="contact-background " id="kontakt">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <div class="text-center  section-title text-light">
                        <h3>KONTAKT </h3>
                        <div class="w-100 d-flex justify-content-center">
                            <div class="blue-border bg-light"></div>
                            <br>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-12 pb-3">
                    <div class="box bg-light text-center pt-4 pb-4">
                        <span class="round-border">
                            <i class="fa-solid fa-earth-europe text-primary-secound"></i>
                        </span>
                        <br><br>
                        <h4 class="fw-bold"> Naša Lokacija </h4>
                        <h5> Evropa Srbija </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12   pb-3">
                    <div class="box  bg-light text-center pt-4 pb-4 ">
                    <span class="round-border">
                        <i class="fa-solid fa-envelope text-primary-secound"></i>
                   </span>
                        <br><br>
                        <h4 class="fw-bold"> Naš E-mail </h4>
                        <h5> pronadji-trenera@gmail.com </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12  pb-3">
                    <div class="box  bg-light text-center pt-4 pb-4">
                        <span class="round-border">
                        <i class="fa-solid fa-phone text-primary-secound"></i>
                        </span>
                        <br><br>
                        <h4 class="fw-bold"> Naš Telefon </h4>
                        <h5> +381 65 9377030 </h5>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-6 col-md-12  pb-3">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2933886.414387111!2d15.906813495451411!3d44.10144462172507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47571ddff2898095%3A0x55e50ea3723865d!2z0KHRgNCx0LjRmNCw!5e0!3m2!1ssr!2srs!4v1683545797713!5m2!1ssr!2srs"
                        allowfullscreen="" class="w-100 h-100 map" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6 col-md-12  pb-3">
                    <div class="box bg-light  pt-5 pb-5 px-4">
                        <form action="">
                            <div class="form-group pb-3">
                                <input type="text" id="ime" name="ime" placeholder="Ime i prezime" class="form-control">
                            </div>
                            <div class="form-group  pb-3">
                                <input type="text" id="email" name="email" placeholder="E-mail" class="form-control">
                            </div>
                            <div class="form-group  pb-3">
                                <input type="text" id="naslov" name="naslov" placeholder="Naslov poruke"
                                       class="form-control">
                            </div>
                            <div class="form-group  pb-4">
                                <textarea id="sadrzaj" name="sadrzaj" rows="7" placeholder="Sadržaj poruke"
                                          class="form-control"></textarea>
                            </div>
                            <div class="send">
                                <button class="btn btn-primary px-5"> Pošalji <i class="fa-solid fa-paper-plane "></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @include("blogs.last_blogs")

@endsection
