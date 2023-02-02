<template>
    <div>
        <v-container class="ma-15">
            <v-form method="post" 
                id="nativeForm"
               @submit.prevent="addNewPost"
                justify="center"
                align="center"
            >
                <v-row justify="center" align="center">
                    <v-col cols="3" color="">
                        <h3 class="text-white">First Name</h3>

                        <v-text-field
                            v-model="form.name"
                            :rules="firstnameRules"
                            :counter="10"
                            bg-color="white"
                            required
                        ></v-text-field>
                    </v-col>
                    <v-col cols="3">
                        <h3 class="text-white">Last Name</h3>

                        <v-text-field
                            v-model="form.surname"
                            :rules="lastnameRules"
                            :counter="10"
                            bg-color="white"
                            required
                            name="message"
                        ></v-text-field>
                    </v-col>
                </v-row>
                <v-row justify="center" align="center">
                    <v-col cols="6">
                        <h3 class="text-white">Email Address</h3>
                        <v-text-field
                            v-model="form.email"
                            :rules="emailRules"
                            required
                            bg-color="white"
                            name="mail"
                        ></v-text-field>
                    </v-col>
                </v-row>
                <v-row justify="center" align="center">
                    <v-col cols="6">
                        <h3 class="text-white">Message</h3>
                        <v-textarea
                            bg-color="white"
                            color="black"
                            :rules="messageRules"
                            required
                            name="message"
                            v-model="form.message"
                        ></v-textarea>
                    </v-col>
                </v-row>

                <v-btn type="submit" value="Submit" class="mb-4 #15396f-text" > <b>submit </b></v-btn>
                                
            </v-form>
        </v-container>
        

<v-divider color="white" inset class="mt-8"></v-divider>
        <v-spacer />
        <v-card  flat color="#15396f" class="text-white">
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
    name: "contact",

    data() {
        return {
            form:{
                name: '',
                surname:'',
                email:'',
                message:'',
            },

            valid: false,
            name: "",
            firstnameRules: [
                (v) => !!v || "First Name is required",
                (v) => v.length <= 10 || "Name must be less than 10 characters",
            ],
            lastnameRules: [
                (v) => !!v || "Last Name is required",
                (v) => v.length <= 10 || "Name must be less than 10 characters",
            ],
            email: "",
            emailRules: [
                (v) => !!v || "E-mail is required",
                (v) =>
                    /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(v) ||
                    "E-mail must be valid",
            ],
            messageRules: [
                (v) => !!v || "Message is required",
                (v) => v.length <= 50 || "Name must be less than 50 characters",
            ],
            value: "",
        };
    },
    methods: {
        submit() {
            this.$router.replace('/');
        }
    },
};
</script>
