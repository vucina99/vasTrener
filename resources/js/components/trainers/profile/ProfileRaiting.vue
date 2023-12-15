<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "ProfileRaiting"
})
</script>

<template>
    <div>

        <div class="trainer-package border-0  p-0 pt-2 d-flex justify-content-between">
            <div class="pt-2"> <h5 class="fw-bold ">Ocena: 3.5 <i class="fa-solid fa-star text-warning mt-1"></i> </h5></div>
            <div>
                <give-rate></give-rate>
            </div>

        </div>
        <div >
            <div class="trainer-package bg-light w-100 mt-3" >
                <div class="container">
                    <div class="row">

                        <div class="col-12 pt-2">
                            <h4 class="vastrener-blues fw-bold fst-italic">Vuk Zdravković</h4>
                            <h5 class="fw-bold ">vukzdravkovic69@gmail.com</h5>
                            <div class="pb-2">
                                <i class="fa-solid fa-star text-warning mt-1"></i>
                                <i class="fa-solid fa-star text-warning mt-1"></i>
                                <i class="fa-solid fa-star text-warning mt-1"></i>
                                <i class="fa-solid fa-star text-warning mt-1"></i>
                                <i class="fa-solid fa-star text-warning mt-1"></i>
                            </div>

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi venenatis faucibus tortor, vitae
                            rhoncus erat faucibus scelerisque. Praesent a efficitur leo. Mauris vel ligula et elit consequat dictum
                            mollis convallis massa. Fusce malesuada bibendum ex, eget suscipit mi pellentesque ultrices. Aenean et dignissim neque,
                            nec commodo mi. In ultricies convallis luctus. Suspendisse arcu urna, commodo sit amet semper eu, sagittis at nunc. Ut ornare ultrices dui,
                            sit amet gravida nulla gravida ut. Aliquam at porta ipsum. Nullam ut rutrum nisl,
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <br>
    </div>
</template>

<style scoped>

</style>
