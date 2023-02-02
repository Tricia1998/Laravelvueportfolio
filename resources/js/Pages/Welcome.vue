<template>
  <Head title="Welcome" />

  <div>
      <v-row class="mb-15">
          <v-col class="ml-15">
              <img :src="pic()" class="card-img-top" alt="" />
          </v-col>
          <v-col class="mt-15">
              <p class="mt-15"></p>
              <v-spacer />
              <v-spacer />
                <p class="text-h3 text-white">
                    Frontend Developer & Graphic Designer
                </p>
              <p class="text-h6 text-white mt-2">
                  I'm a junior web developer and a graphic designer based in
                  Harare (Zimbabwe) & I create awesome and effective sites. I
                  have just recently begun my journey as a freelance designer
                  as of May 2022, I've done remote work for agencies,
                  consulted for startups, and collaborated with talented
                  people to create dial products for both business and
                  consumer use. I'm quietly confident, naturally curious, and
                  perpetually working on improving my skills with one design
                  problem at a time.
              </p>
              <p class="mt-15 text-white" > Get In Touch With Farie, <a class="text-blue" href="faraisepete@gmail.com"> <i> Send Email</i></a></p>
              <v-spacer />
          </v-col>
      </v-row>
      <v-divider color="white" inset class="ma-8"></v-divider>
      <v-spacer />
      <v-card  color="#15396f" class="text-white">
      <v-card-text class=" mt-3 text-center">
              {{ new Date().getFullYear() }} —
              <strong>Farai Patricia Sepete</strong>
              <v-spacer></v-spacer>

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
              a href="https://www.instagram.com/">
                <v-icon>mdi-instagram</v-icon>
              </v-btn>

              <v-btn 
              class="text-white"
                icon
                color="#15396f"
                flat
              a href="https://twitter.com/home">
                <v-icon>mdi-twitter</v-icon>
              </v-btn>
              <v-btn 
              class="text-white"
                icon
                color="#15396f"
                flat
              a href="https://www.linkedin.com/notifications/">
                <v-icon>mdi-linkedin</v-icon>
              </v-btn>
            </v-card-text>
          </v-card>
  </div>
</template>

<script>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
export default {
  layout: DefaultLayout,
  methods: {
      pic() {
          return "img/pic.jpeg";
      },
  },
};
</script>
