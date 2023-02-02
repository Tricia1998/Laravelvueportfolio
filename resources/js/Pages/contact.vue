<template>
    <div>
        <v-row class="d-flex justify-center">
            <p class="text-h3 text-white mt-15">
                <b> Get in Touch </b>
            </p>
        </v-row>
        <v-row class="d-flex justify-center mt-12">
            <v-card
                class="mx-auto text-grey rounded-shaped"
                max-width="800"
                variant="outlined"
            >
                <v-card-item class="ma-10 text-white">
                    <div>
                        <div class="text-h5 mb-8">
                            Want to work together or have any questions?
                        </div>
                        <div class="d-flex justify-center">
                            <v-btn color="white">
                                <b>
                                    Say Hello
                                    <svg-icon
                                        type="mdi"
                                        :path="path"
                                    ></svg-icon> </b
                            ></v-btn>
                        </div>
                    </div>
                </v-card-item>
            </v-card>
        </v-row>
        <div class="d-flex justify-center mt-6 text-h6 text-white">
            <v-btn variant="plain" a href="img/resume.pdf">Resume</v-btn>
            <v-btn variant="plain" a href="https://github.com/Tricia1998"
                >Github</v-btn
            >
            <v-btn
                variant="plain"
                a
                href="https://www.canva.com/brand/join?token=D_S7rWvaBme2hfZMzNJt7g&referrer=team-invite"
                >Canva</v-btn
            >
        </div>
        <div class="d-flex justify-center">
            <p>
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
            </p>
            <p>
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
            </p>
        </div>
        <div class="text-center text-white">
            <v-rating v-model="rating" hover half-increments></v-rating>
            <pre>{{ rating }}</pre>
        </div>
        <v-divider color="white" inset class="ma-8"></v-divider>
        <v-spacer />
        <p class="mt-3 text-center text-white"> 
             {{ new Date().getFullYear() }} —
                <strong>Farai Patricia Sepete</strong>
                <v-spacer></v-spacer>
        </p>
       
    </div>
</template>

<script>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
import SvgIcon from "@jamescoyle/vue-icon";
import { mdiHandWave } from "@mdi/js";
export default {
    layout: DefaultLayout,
    name: "my-component",
    components: {
        SvgIcon,
    },
    data() {
        return {
            path: mdiHandWave,
            rating: '',
        };
    },
};
</script>
