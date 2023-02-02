<template>
  <div>
       
    <v-row justify="center" class="mt-5">
        <v-col md="4">
          <v-breadcrumbs :items="items">
      <template v-slot:divider>
        <v-icon icon="mdi-chevron-right"></v-icon>
      </template>
    </v-breadcrumbs>
            <v-card  title="Login" :loading="loading" variant="outlined">
                <v-card-text>
                  <v-row>
                    <v-col>
                      <v-row class="mt-5">
                        <v-col>
                          <v-text-field
     
      variant="outlined"
      label="Username/email"
      required
    ></v-text-field>
                        </v-col>
                      </v-row>
        <v-text-field
     
      variant="outlined"
      label="Password"
      :type="show ? 'text' : 'password'"
      @click:append="show = !show"
      required
    ></v-text-field>
  <Link class="v-btn v-theme--light text-lowercase text-sm-body-2 v-btn--density-default v-btn--size-default v-btn--variant-text" :href="`/auth/forgot-password`">I forgot my password</Link>
      <v-btn block color="primary" class="mt-2" flat>
      Login
    </v-btn>
     <Link class="v-btn  mt-2 text-lowercase text-sm-body-2 v-theme--light v-btn--density-default v-btn--size-default v-btn--variant-text" :href="`register`">Not registered ? create account</Link>
                    </v-col>
                  </v-row>
                </v-card-text>
            </v-card>
        </v-col>
    </v-row>
  </div>
</template>

<script>
import defaultlayout from '@/Layouts/DefaultLayout.vue'
import {Link,inertia} from '@inertiajs/inertia-vue3'
export default {
layout:defaultlayout,
components:{
  Link
},
data(){
  return{
    show:false,
    loading:false,
     items: [
        {
          title: 'Home',
          disabled: false,
          href: '/',
        },
        {
          title: 'Login',
          disabled: true,
          href: 'breadcrumbs_link_2',
        },
      ],
  }
}

}
</script>

<style>

</style>