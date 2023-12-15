<script>
import {defineComponent} from 'vue'

export default defineComponent({
    name: "ProfilGallery",

})
</script>

<template>
    <div class="py-4">
        <div class="gallery-photos">
        <vue-picture-swipe :items="[
          {src: 'https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg',thumbnail: 'https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg',w: 600,h: 400},
            {src: 'https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg',thumbnail: 'https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg',w: 600,h: 400},
{src: 'https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg',thumbnail: 'https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg',w: 600,h: 400},
            {src: 'https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg',thumbnail: 'https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg',w: 600,h: 400},
{src: 'https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg',thumbnail: 'https://www.gabrielgorgi.com/wp-content/uploads/2019/12/01.jpg',w: 600,h: 400},
            {src: 'https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg',thumbnail: 'https://media.sproutsocial.com/uploads/2022/06/profile-picture.jpeg',w: 600,h: 400},

      ]"></vue-picture-swipe>
        </div>
    </div>
</template>

<style scoped>

</style>
