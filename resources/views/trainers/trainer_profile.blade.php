@extends("content")

@section("title" , 'Sa nama ste korak bliže svom cilju')

@section("keywords" , 'personalni trener, licni trener, vaš trener, fitness trener')
@section("description" , 'Najveća baza perosnalnih trenera u Srbiji. Pronadjite trenera po Vašoj meri i počnite sa treningom već danas')

@section("content")
    <div class="container">

        <div class="white-back ">
            <div class="container">
                <div class="row">
                    <div class="col-12 bg-silver border  rounded pt-3 ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item"><a href="#">Početna</a></li>
                                <li class="breadcrumb-item"><a href="#">Treneri</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Vuk Zdravković</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 pb-5 ">
                    <div class="w-100 card-radius  vastrener-bg-blue pt-4">
                        <div class="d-flex justify-content-center w-100">
                            <div class="  profil-image-container">
                                <img src="{{asset("img/cover.jpg")}}" class="okrugla-slika" alt="">
                            </div>
                        </div>
                        <div class="pt-4 text-light h1-name text-center">
                            <h1 class="fw-bold">Stefanija Ninkolovski</h1>
                            <br>
                            <div class="d-flex justify-content-center infotable">
                            <table class="w-75 profile-table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-bottom">
                                        <td  class=" text-start "> &nbsp;&nbsp; <i class="fa-solid fa-phone"></i></td>
                                        <td   class="text-end "> <a class="text-light" href="tel:0659377030">0659377030</a> &nbsp;&nbsp;
                                         </td>
                                    </tr>

                                    <tr  class="border-bottom">
                                        <td  class=" text-start " > &nbsp;&nbsp; <i class="fa-solid fa-envelope"></i>  </td>
                                        <td class=" text-end align-middle">vukzdravkovicpetrovic69@yahoo </td>
                                    </tr>

                                    <tr  class="border-bottom">
                                        <td  class=" text-start" > &nbsp;&nbsp; <i class="fa-solid fa-location-dot"></i>  </td>
                                        <td class=" text-end">Pančevo &nbsp;&nbsp; </td>
                                    </tr>
                                   <tr>
                                       <td></td>
                                       <td></td>
                                   </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="text-start">
                                             <button class="btn btn-sm border border-warning btn-light profile-trainer-star d-flex"> <span>3.5</span> <span>&nbsp;</span><i
                                                    class="fa-solid fa-star text-warning mt-1"></i></button>
                                        </td>
                                        <td  class="text-end social-media">
                                            <div class="d-flex justify-content-end">
                                            <div class="bg-light p-1 pb-0"><a href="" class="text-primary"><i class="fa-brands fa-square-facebook"></i></a></div>


                                            &nbsp;&nbsp;
                                                <div class="bg-light  p-1 pb-0"> <a href="" class="text-primary"> <i class="fa-brands fa-square-instagram"></i></a></div>
                                            &nbsp;&nbsp;
                                                    <div class="bg-light p-1 pb-0">  <a href="" class="text-primary"> <i class="fa-solid fa-globe"></i></a></div>&nbsp;&nbsp;
                                           </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="button" class="btn w-100 btn-outline-light "><i class="fa-solid fa-paper-plane contact-trainer-plain"></i> &nbsp; Kontaktiraj trenera</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12 ">
                   <profile-tab></profile-tab>
                 </div>


        </div>
    </div>

@endsection
