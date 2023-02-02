<template>
    <Head title="Dashboard" />
    <div >
        <v-row class="ma-15">
                       <v-col cols="4" class="shrink text-center">
                <v-card height="250">
                    <v-img
                        :src="logos()"
                        alt=""
                        cover
                        max-width="200"
                        class="bg-white ma-16 "
                    ></v-img>
                </v-card>
            </v-col>
            <v-col cols="4" class="shrink text-center">
                <v-card height="250" color="#78c6a3">
                    <a href="https://portal.praz.org.zw/">
                        <v-img
                            :src="icon()"
                            alt=""
                            cover
                            max-width="200"
                            class="bg-color-#78c6a3 ml-16 mt-6 text-center"
                        ></v-img>
                    </a>
                </v-card>
            </v-col>
            <v-col cols="4" class="shrink text-center">
                <v-card height="250">
                    <v-img
                        :src="tate()"
                        alt=""
                        cover
                        max-width="200"
                        class="bg-grey-lighten-2 ml-16 mt-6 text-center"
                    ></v-img>
                </v-card>
            </v-col>
        </v-row>

        <v-row class="ma-15">
            <v-col cols="4" class="shrink text-center">
                <v-card height="250">
                    <v-img
                        :src="fafa()"
                        alt=""
                        cover
                        max-width="200"
                        class="bg-grey-lighten-2 ml-16 mt-6 "
                    ></v-img>
                </v-card>
            </v-col>
            <v-col cols="4" class="shrink text-center">
                <v-card height="250" color="black">
                    <v-img
                        :src="tatenda()"
                        alt=""
                        cover
                        max-width="200"
                        class="bg-grey-lighten-2 ml-16 mt-6 "
                    ></v-img>
                </v-card>
            </v-col>
            <v-col cols="4" class="shrink text-center">
                <v-card height="250">
                    <v-img
                        :src="icon()"
                        alt=""
                        cover
                        max-width="200"
                        class="bg-white ml-16 mt-6 "
                    ></v-img>
                </v-card>
            </v-col>
        </v-row>

        <v-divider color="white" inset class="ma-8"></v-divider>
        <v-spacer />
        <v-card flat color="#15396f" class="text-white">
            <v-card-text class="mt-3 text-center">
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
            </v-card-text>
        </v-card>
    </div>
</template>

<script>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
export default {
    layout: DefaultLayout,
    methods: {
        logos() {
            return "img/logos.png";
        },
        icon() {
            return "img/icon.png";
        },
        tate() {
            return "img/tate.png";
        },
        fafa() {
            return "img/fafa.png";
        },
        tatenda() {
            return "img/tatenda.png";
        },
    },
};
</script>
