<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "GiveRate",
    data(){
        return{
            starsColor : {
                starNumber: 4,
                starSelected: 0,
                starClicked: 0
            }
        }
    }
})
</script>

<template>
    <div>
        <!-- Button trigger modal -->

        <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#giverate">Oceni trenera <i class="fa-solid fa-plus"></i></button>
        <!-- Modal -->
        <div class="modal fade" id="giverate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg ">
                <div class="modal-content">
                    <div class="modal-header vastrener-bg-blue">
                        <h4 class="modal-title text-light" id="exampleModalLabel">Oceni trenera <i class="fa-solid fa-star contact-trainer-plain"></i></h4>
                        <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-1 col-sm-12"></div>
                                <div class="col-lg-8 col-md-10 col-sm-12">

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
                                            <label for="message" class="lable-font">Vaš komentar: </label>
                                            <textarea name="komentar" class="form-control" placeholder="Vaš komentar" id="komentar" cols="20" rows="8"></textarea>
                                        </div>
                                        <br>
                                        <div class="d-flex ">
                                            <div class="cursor-pointer" v-for="index in starsColor.starNumber" :key="index">
                                                <i @mouseover="starsColor.starSelected = index "
                                                   @mouseleave="starsColor.starSelected = starsColor.starClicked "
                                                   @click="starsColor.starClicked = index"
                                                   :class="[starsColor.starSelected >= index ? 'fa-solid' : 'fa-regular' , 'fa-star fa-2x text-warning']"></i>
                                            </div>
<!--                                            <div  class="mx-1 cursor-pointer">-->
<!--                                                <i  @mouseover="changeStarColor(2)" :class="['star-'+2 ,'fa-regular  fa-star fa-2x text-warning']"></i>-->
<!--                                            </div>-->
<!--                                            <div class="cursor-pointer">-->
<!--                                                <i  @mouseover="changeStarColor(3)"  :class="['star-'+3 ,'fa-regular  fa-star fa-2x text-warning']"></i>-->
<!--                                            </div>-->
<!--                                            <div  class="mx-1 cursor-pointer">-->
<!--                                                <i  @mouseover="changeStarColor(4)"  :class="['star-'+4 ,'fa-regular  fa-star fa-2x text-warning']"></i>-->
<!--                                            </div>-->

                                        </div>
                                        <br>
                                        <button type="button" class="btn btn-primary w-100">Oceni trenera <i class="fa-solid fa-star contact-trainer-plain"></i></button>

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

