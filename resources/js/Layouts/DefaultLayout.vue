<template>
  <v-app>
    <Navbar/>
  <v-main class="backgroundcolor">
     <slot>
     </slot>
  </v-main>
  </v-app>
</template>


<script>
import Navbar from "@/Components/Navbar.vue"
export default {
components:{
Navbar
}
}
</script>

<style scoped>
.backgroundcolor {
 background-color: #15396f;
}
</style>