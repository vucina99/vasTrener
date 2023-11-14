<template>

    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="bg-silver border  rounded"><br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center card-space">
                                <div class="card bg-silver card-trainer border-0">
                                    <label for="city " class="label-silver">Izaberi grad: </label>
                                    <multi-select
                                        v-model="filter.grad"
                                        :options="options"
                                        :multiple="true"
                                        :close-on-select="false"
                                        placeholder=""
                                        label="name"
                                        track-by="name"
                                        id="city"
                                        :select-label="'Izaberi grad'"
                                        :selected-label="'Izabrano'"
                                        :deselect-label="'Otkaži izabrano'"
                                    />
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center card-space">
                                <div class="card bg-silver card-trainer border-0">
                                    <label for="municipality " class="label-silver">Izaberi opštinu: </label>
                                    <multi-select
                                        v-model="filter.opstina"
                                        :options="options"
                                        :multiple="true"
                                        :close-on-select="false"
                                        placeholder=""
                                        label="name"
                                        track-by="name"
                                        id="municipality"
                                        :select-label="'Izaberi opštinu'"
                                        :selected-label="'Izabrano'"
                                        :deselect-label="'Otkaži izabrano'"
                                    />
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center card-space">
                                <div class="card  bg-silver card-trainer border-0">
                                    <label for="sport " class="label-silver">Izaberi sport: </label>
                                    <multi-select
                                        v-model="filter.sport"
                                        :options="options"
                                        :multiple="true"
                                        :close-on-select="false"
                                        placeholder=""
                                        label="name"
                                        track-by="name"
                                        id="sport"
                                        :select-label="'Izaberi sport'"
                                        :selected-label="'Izabrano'"
                                        :deselect-label="'Otkaži izabrano'"
                                    />
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center card-space">
                                <div class="card bg-silver  card-trainer border-0">
                                    <label for="city " class="label-silver">Izaberi tip treninga: </label>
                                    <multi-select
                                        v-model="filter.tip"
                                        :options="options"
                                        :multiple="true"
                                        :close-on-select="false"
                                        placeholder=""
                                        class="custom-multi-select"

                                        label="name"
                                        track-by="name"
                                        id="city"
                                        :select-label="'Izaberi tip'"
                                        :selected-label="'Izabrano'"
                                        :deselect-label="'Otkaži izabrano'"
                                    />
                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center card-space">
                                <div class="card bg-silver   card-trainer border-0">
                                    <!--                                        <label for="price " class="label-silver">Cena do (€): </label>-->
                                    <!--                                        <input type="number"    v-model="filter.cena" class="form-control h-100 form-control-search" id="price">-->


                                    <span class="range-value min">{{ minValue }}  (€) </span> <span
                                    class="range-value max">{{ maxValue }}  (€)</span>

                                    <div class="">
                                        <div class="track-container ">
                                            <div class="track" ref="_vpcTrack"></div>
                                            <div class="track-highlight" ref="trackHighlight"></div>
                                            <button class="track-btn track1" ref="track1"></button>
                                            <button class="track-btn track2" ref="track2"></button>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center card-space ">
                                <div class="card  card-trainer border-0 bg-silver"><br>
                                    <button class="btn btn-primary w-100 h-100"><i
                                        class="fa-solid fa-magnifying-glass"></i> Pretraga
                                    </button>

                                </div>

                            </div>

                        </div>
                    </div>
                    <br>
                </div>
            </div>

        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center card-space">

                            <div class="card bg-silver card-trainer border-primary">
                                <div class="profil-trainer-image-container">
                                    <img src="/img/cover.jpg" class="card-img-top" alt="logo">
                                    <div class="position-absolute category-button">
                                        <!--                                                                          OVDE TREBA URADITI POPOVER SA TEKSTOM DA JE ISTAKNUT OGLAS-->
                                        <a href="#"
                                           class="btn  btn-light vastrener-blue border border-primary btn-sm"><i
                                            class="fa-solid fa-crown"></i></a>
                                    </div>
                                    <div class="position-absolute price-trainer category-button w-100">

                                        <div class="w-100 d-flex justify-content-end " style="padding-right: 20px">
                                            <a href="#"
                                               class="btn  btn-light vastrener-blue border border-primary fw-bold  btn-sm">Cena
                                                od 20€</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Vuk Zdravković</h5>
                                    <div class="sports-badge">
                                        <span class="badge bg-secondary">Bodybuilding </span>
                                        <span class="badge bg-secondary">Crossfit </span>
                                        <span class="badge bg-secondary">Powerlifting </span>
                                        <span class="badge bg-secondary te"> +4 </span>
                                    </div>
                                    <div class="pt-2"></div>
                                    <div class="text-box">
                                        <p class="card-text"> Naša posvećena ekipa stručnih ličnih trenera je tu da vas
                                            podrži na putu ka ostvarenju vaših zdravstvenih i fitnes ciljeva.

                                            Sa vašim ličnim trenerom, dob... </p></div>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <div><a href="#" class="btn btn-sm btn-primary">Pogledaj profil <i
                                            class="fa-regular fa-eye"></i></a></div>
                                        <div class=" star">
                                            <button class="btn btn-sm border border-warning btn-light ">3 <i
                                                class="fa-solid fa-star text-warning"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-sm-12 d-flex justify-content-center  card-space">

                            <div class="card bg-silver card-trainer border-muted">
                                <div class="profil-trainer-image-container">
                                    <img src="/img/cover.jpg" class="card-img-top" alt="logo">
                                    <!--                                                                         <div  class="position-absolute category-button" >-->
                                    <!--                                                                                                                      OVDE TREBA URADITI POPOVER SA TEKSTOM DA JE ISTAKNUT OGLAS-->
                                    <!--                                                                               <a href="#" class="btn  btn-light vastrener-blue border border-primary btn-sm"><i class="fa-solid fa-crown"></i></a>-->
                                    <!--                                                                           </div>-->
                                    <div class="position-absolute price-trainer category-button w-100">

                                        <div class="w-100 d-flex justify-content-end " style="padding-right: 20px">
                                            <a href="#"
                                               class="btn  btn-light vastrener-blue border border-primary fw-bold  btn-sm">Cena
                                                od 20€</a>
                                        </div>

                                    </div>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Vuk Zdravković</h5>
                                    <div class="sports-badge">
                                        <span class="badge bg-secondary">Bodybuilding </span>
                                        <span class="badge bg-secondary">Crossfit </span>
                                        <span class="badge bg-secondary">Powerlifting </span>
                                        <span class="badge bg-secondary te"> +4 </span>
                                    </div>
                                    <div class="pt-2"></div>
                                    <div class="text-box">
                                        <p class="card-text"> Naša posvećena ekipa stručnih ličnih trenera je tu da vas
                                            podrži na putu ka ostvarenju vaših zdravstvenih i fitnes ciljeva.

                                            Sa vašim ličnim trenerom, dob... </p></div>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <div><a href="#" class="btn btn-sm btn-primary">Pogledaj profil <i
                                            class="fa-regular fa-eye"></i></a></div>
                                        <div class=" star">
                                            <button class="btn btn-sm  border-warning btn-light ">3 <i
                                                class="fa-solid fa-star text-warning"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>


</template>

<script>
import Multiselect from 'vue-multiselect';

export default {
    components: {
        "multi-select": Multiselect,
    },
    data() {
        return {
            min: -10,
            max: 1000,
            minValue: 0,
            maxValue: 1000,
            step: 10,
            totalSteps: 0,
            percentPerStep: 1,
            trackWidth: null,
            isDragging: false,
            pos: {
                curTrack: null
            },
            filter: {
                'grad': '',
                'opstina': '',
                'sport': '',
                'tip': '',
                'cena': '',
            },
            selectedOptions: null, // Inicijalna selekcija
            options: [             // Opcije koje će se prikazati u multiselectu
                {name: 'Beograd', value: 'Option 1'},
                {name: 'Novi Sad', value: 'Option 2'},
                {name: 'Niš', value: 'Option 1'},
                {name: 'Loznica', value: 'Option 2'},
                // Dodajte ostale opcije ovde
            ],
        };
    },


    methods: {
        moveTrack(track, ev) {

            let percentInPx = this.getPercentInPx();

            let trackX = Math.round(this.$refs._vpcTrack.getBoundingClientRect().left);
            let clientX = ev.clientX;
            let moveDiff = clientX - trackX;

            let moveInPct = moveDiff / percentInPx
            // console.log(moveInPct)

            if (moveInPct < 1 || moveInPct > 100) return;
            let value = (Math.round(moveInPct / this.percentPerStep) * this.step) + this.min;
            if (track === 'track1') {
                if (value >= (this.maxValue - this.step)) return;
                this.minValue = value;
            }

            if (track === 'track2') {
                if (value <= (this.minValue + this.step)) return;
                this.maxValue = value;
            }

            this.$refs[track].style.left = moveInPct + '%';
            this.setTrackHightlight()

        },
        mousedown(ev, track) {

            if (this.isDragging) return;
            this.isDragging = true;
            this.pos.curTrack = track;
        },

        touchstart(ev, track) {
            this.mousedown(ev, track)

        },

        mouseup(ev, track) {
            if (!this.isDragging) return;
            this.isDragging = false
        },

        touchend(ev, track) {
            this.mouseup(ev, track)
        },

        mousemove(ev, track) {
            if (!this.isDragging) return;
            this.moveTrack(track, ev)
        },

        touchmove(ev, track) {
            this.mousemove(ev.changedTouches[0], track)
        },

        valueToPercent(value) {
            return ((value - this.min) / this.step) * this.percentPerStep
        },

        setTrackHightlight() {
            this.$refs.trackHighlight.style.left = this.valueToPercent(this.minValue) + '%'
            this.$refs.trackHighlight.style.width = (this.valueToPercent(this.maxValue) - this.valueToPercent(this.minValue)) + '%'
        },

        getPercentInPx() {
            let trackWidth = this.$refs._vpcTrack.offsetWidth;
            let oneStepInPx = trackWidth / this.totalSteps;
            // 1 percent in px
            let percentInPx = oneStepInPx / this.percentPerStep;

            return percentInPx;
        },

        setClickMove(ev) {
            let track1Left = this.$refs.track1.getBoundingClientRect().left;
            let track2Left = this.$refs.track2.getBoundingClientRect().left;
            // console.log('track1Left', track1Left)
            if (ev.clientX < track1Left) {
                this.moveTrack('track1', ev)
            } else if ((ev.clientX - track1Left) < (track2Left - ev.clientX)) {
                this.moveTrack('track1', ev)
            } else {
                this.moveTrack('track2', ev)
            }
        }
    },

    mounted() {
        // calc per step value
        this.totalSteps = (this.max - this.min) / this.step;

        // percent the track button to be moved on each step
        this.percentPerStep = 100 / this.totalSteps;
        // console.log('percentPerStep', this.percentPerStep)

        // set track1 initilal
        document.querySelector('.track1').style.left = this.valueToPercent(this.minValue) + '%'
        // track2 initial position
        document.querySelector('.track2').style.left = this.valueToPercent(this.maxValue) + '%'
        // set initila track highlight
        this.setTrackHightlight()

        var self = this;

        ['mouseup', 'mousemove'].forEach(type => {
            document.body.addEventListener(type, (ev) => {
                // ev.preventDefault();
                if (self.isDragging && self.pos.curTrack) {
                    self[type](ev, self.pos.curTrack)
                }
            })
        });

        ['mousedown', 'mouseup', 'mousemove', 'touchstart', 'touchmove', 'touchend'].forEach(type => {
            document.querySelector('.track1').addEventListener(type, (ev) => {
                ev.stopPropagation();
                self[type](ev, 'track1')
            })

            document.querySelector('.track2').addEventListener(type, (ev) => {
                ev.stopPropagation();
                self[type](ev, 'track2')
            })
        })

        // on track clik
        // determine direction based on click proximity
        // determine percent to move based on track.clientX - click.clientX
        document.querySelector('.track').addEventListener('click', function (ev) {
            ev.stopPropagation();
            self.setClickMove(ev)

        })

        document.querySelector('.track-highlight').addEventListener('click', function (ev) {
            ev.stopPropagation();
            self.setClickMove(ev)

        })
    }


}
</script>
<style src="node_modules/vue-multiselect/dist/vue-multiselect.css">


.multiselect__tag {
    background-color: blue !important; /* Boja pozadine prilikom hover-a */
    color: white; /* Boja teksta prilikom hover-a */
}
</style>
