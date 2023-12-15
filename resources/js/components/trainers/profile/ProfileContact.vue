<script>
import {defineComponent} from 'vue'
export default defineComponent({
name: "ProfileContact",
    methods : {
        proba(){
          this.$refs.close.click();
        }
    }
})
</script>

<template>
<div>
    <!-- Button trigger modal -->

    <button type="button" class="btn w-100 btn-outline-light "  data-bs-toggle="modal" data-bs-target="#contactTrainer"> &nbsp; Kontaktiraj trenera <i class="fa-solid fa-paper-plane contact-trainer-plain"></i></button>

    <!-- Modal -->
    <div class="modal fade" id="contactTrainer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg ">
            <div class="modal-content">
                <div class="modal-header vastrener-bg-blue">
                    <h4 class="modal-title text-light" id="exampleModalLabel">Kontaktiraj trenera <i class="fa-solid fa-paper-plane contact-trainer-plain"></i></h4>
                    <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-1 col-sm-12"></div>
                            <div class="col-lg-8 col-md-10 col-sm-12">
                                <div class="alert alert-primary alert-dismissible fade show m-0" role="alert">

                                    <p class="contact-text"> <strong>Kontaktirajte trenera direktno preko sajta.</strong> Vaša poruka će biti direktno prosleđena treneru, nakon čega očekujte povratni mail <strong><i class="fa-regular fa-fa-smile fa-face-smile"></i></strong>  </p>
                                    <button type="button" class="btn-close"  style="font-size: 0.6rem;" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <form action="" method="">
                                    <div class="form-group">
                                        <label for="firstname" class="lable-font">Vaše ime: </label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"  placeholder="Vaše ime">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname" class="lable-font">Vaše prezime: </label>
                                        <input type="text" class="form-control" id="lastname"  name="lastname" placeholder="Vaše prezime">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="lable-font">Vaš e-mail: </label>
                                        <input type="text" class="form-control" id="email"  name="email"  placeholder="Vaš e-mail">
                                    </div>
                                    <div class="form-group">
                                        <label for="message" class="lable-font">Sadržaj poruke: </label>
                                        <textarea name="message" class="form-control" placeholder="Sadržaj poruke" id="message" cols="20" rows="8"></textarea>
                                    </div>
                                    <br>
                                    <button type="button" class="btn btn-primary w-100">Pošalji poruku <i class="fa-solid fa-paper-plane contact-trainer-plain"></i></button>

                                </form>
                            </div>
                            <div class="col-lg-2 col-md-1 col-sm-12"></div>

                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
</template>

<style scoped>

</style>
