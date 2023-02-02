<template>
    <v-row class="ml-15">
        <v-col cols="6" class="ma-10">
            <p class="text-h3 text-white mt-16 text-justify">I'm Patricia. A designer,</p>
            <p class="text-h3 text-white text-justify">maker and problem solver.</p>
            <p class="text-body-1 text-white mt-12 text-justify">
                I’ve been designing with computers since the day I first opened
                Microsoft Paint. The cusp of art and technology has always
                fascinated me and I've never been afraid to just jump in and
                give it a go, whether it's Paint, Photoshop, Sketch or CSS.
            </p>
            <p class="text-body-1 text-white mt-12 text-justify">
                Fast forward to 2022 and I’ve tried it all, from Digital
                Campaign Design and Flash Actionscript to Web Design, Animation,
                HTML/CSS/Webflow, Product Design and Product Management.
                Everything I have done, small or big, has been a vital stepping
                stone for where I am today.
            </p>
            <p class="text-body-1 text-white mt-12 text-justify">
                What excites me most about working in software development is
                being able to design and create things that have purpose and
                solve real problems. Leaning into customer research and insight,
                finding the right problems to solve, delivering that value as
                quickly as possible, learning from it and then iterating and
                improving that value over time is the key to great design.
            </p>
            <p class="text-body-1 text-white mt-12 text-justify">
                One of my favourite quotes by Peter Drucker:
            </p>
            <p class="text-h3 text-white mt-12 text-justify">
                “There is nothing so useless as doing efficiently that which
                should not be done at all.”
            </p>
            <p class="text-body-1 text-white mt-12 text-justify">
                This resonates so deeply with me because I have no desire to
                make things just for the sake of it. I only want to make, design
                or build ideas and products that matter and have a positive
                impact in the world.
            </p>
            <p class="text-h5 text-white mt-12">EXPERIENCE</p>
            <p class="text-body-1 text-white text-justify">
                - Degree in Brand Communications
            </p>
            <p class="text-body-1 text-white text-justify">
                - 14 years experience in Digital Design, Web Development,
                Advertising and Product Development
            </p>
            <p class="text-body-1 text-white text-justify">Within those 14 years, I have:</p>
            <p class="text-body-1 text-white text-justify">
                - 9 years experience in Software Design
            </p>
            <p class="text-body-1 text-white text-justify">
                - 3 years experience in Front-end Web Development,
            </p>
            <p class="text-body-1 text-white text-justify">
                - 4 years experience in Webflow Development
            </p>
            <p class="text-body-1 text-white text-justify">
                - Recent experience in Framer Development
            </p>
            <p class="text-h4 text-white mt-12">SKILLS</p>
            <p class="text-body-1 text-white text-justify mb-10">
                UI/UX Design / Strategy / Product Management / User Research /
                Agile Methodologies / Collaboration / Design Sprints / Design
                Systems / HTML and CSS / CMS Design & Architecture / Webflow
                Development / Framer Development / Photography / Graphic Design
            </p>
           
        </v-col>
        <v-col cols="5">
            <v-img
                :src="me()"
                alt=""
                cover
                max-width="500"
                class="bg-white ml-20 mt-5 text-center"
            ></v-img>
            <p class="text-center mt-16"><v-btn rounded="pill" a href="img/resume.pdf" color="white"> My Resume </v-btn> </p>
            
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
</template>
<script>
import DefaultLayout from "@/Layouts/DefaultLayout.vue";
export default {
    layout: DefaultLayout,
    methods: {
        me() {
            return "img/me.jpeg";
        },
    },
};
</script>
