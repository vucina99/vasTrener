

<template>
<div >

    <ul class="nav nav-tabs ">
        <li class="nav-item ">
            <a :class="[activeTab == 1 ? 'active' : '','nav-link vastrener-blue fw-bold']" @click="changeTab(1, $event)"  aria-current="page" href="#">Informacije</a>
        </li>
        <li class="nav-item">
            <a :class="[activeTab == 2 ? 'active' : '','nav-link vastrener-blue fw-bold']"  @click="changeTab(2, $event)"  href="#">Galerija</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" :class="[activeTab == 3 ? 'active' : '','nav-link vastrener-blue fw-bold']"  @click="changeTab(3, $event)"  href="#">Ponude</a>
        </li>
        <li class="nav-item">
            <a :class="[activeTab == 4 ? 'active' : '','nav-link vastrener-blue fw-bold']"  @click="changeTab(4, $event)"  >Ocene</a>
        </li>

    </ul>
    <div class="bg-silver check-tab border border-top-0 px-2 py-2 w-100">
        <div v-if="activeTab == 1">
            <profile-information></profile-information>
        </div>
        <div v-if="activeTab == 2">
            <profile-gallery></profile-gallery>
        </div>
        <div v-if="activeTab == 3">
            <profile-packages></profile-packages>
        </div>
        <div v-if="activeTab == 4">
            <profile-raiting></profile-raiting>
        </div>
    </div>
</div>
</template>


<script>
import {defineComponent} from 'vue'
import ProfileInformation from "./ProfileInformation.vue"
import ProfileGallery from "./ProfileGallery.vue"
import ProfilePackages from "./ProfilePackages.vue"
import ProfileRaiting from "./ProfileRaiting.vue"

export default defineComponent({
    name: "ProfileTabs",
    components : {
        "profile-information" : ProfileInformation,
        "profile-gallery" : ProfileGallery,
        "profile-packages" : ProfilePackages,
        "profile-raiting" : ProfileRaiting
    },
    data(){
        return{
            activeTab : 1
        }
    },
    methods: {
        changeTab(numberTab, e)
        {
            e.preventDefault();
            this.activeTab = numberTab
        }
    }
})
</script>

<style scoped>

</style>
