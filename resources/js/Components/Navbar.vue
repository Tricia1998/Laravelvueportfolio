<template>
  <v-app-bar  class="pt-2 " color="#15396f" flat>
      <img :src="logo()" class="card-img-top ml-15" alt="" height="40" width="70" />
      <v-spacer />
      <Link
          class="v-btn text-white v-theme--light v-btn--size-small mr-2 v-btn--density-default v-btn--size-default v-btn--variant-text"
          :href="`/`"
          >Home</Link
      >

      <Link
          class="v-btn text-white ml-2 mr-2 v-btn--small v-theme--light v-btn--density-default v-btn--size-default v-btn--variant-text"
          :href="`/portfolio`"
          >Portfolio</Link
      >
      <Link
          class="v-btn text-white ml-2 mr-2 v-btn--small v-theme--light v-btn--density-default v-btn--size-default v-btn--variant-text"
          :href="`/contact`"
          >Contact Us</Link
      >

      <Link
          class="v-btn text-white ml-2 mr-2 v-btn--small v-theme--light v-btn--density-default v-btn--size-default v-btn--variant-text"
          :href="`/about`"
          >About</Link
      >

      <v-spacer />
      <div class="mr-16">
          <v-btn
              class="text-white"
              icon
              color="#15396f"
              flat
              a
              href="https://www.facebook.com/profile.php?id=100011356793995"
          >
              <v-icon>mdi-facebook</v-icon>
          </v-btn>

          <v-btn
              class="text-white"
              icon
              color="#15396f"
              flat
              a
              href="https://www.instagram.com/"
          >
              <v-icon>mdi-instagram</v-icon>
          </v-btn>

          <v-btn
              class="text-white"
              icon
              color="#15396f"
              flat
              a
              href="https://twitter.com/home"
          >
              <v-icon>mdi-twitter</v-icon>
          </v-btn>
          <v-btn
              class="text-white"
              icon
              color="#15396f"
              flat
              a
              href="https://www.linkedin.com/notifications/"
          >
              <v-icon>mdi-linkedin</v-icon>
          </v-btn>
      </div>
  </v-app-bar>
</template>


<script>
import { Link, inertia } from "@inertiajs/inertia-vue3";
export default {
  name: "DefaultNavbar",
  methods: {
      logo() {
          return "img/logo.png";
      },
  },
  data() {
      return {
          logo_url: "/img/logo.png",
      };
  },
  components: {
      Link,
  },
};
</script>

<style>
a:hover {
  background-color: #396dba;
}
a:active {
  background-color: #396dba;
}
</style>
