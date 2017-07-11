<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Slide Component</div>
                    <router-link tag="button" to="/" class='btn btn-default pull-right'>
                      Retour
                    </router-link>
                    <div class="panel-body">
                        
                    </div>
                </div>
            </div>
        </div>
       
        <carousel-3d :autoplayTimeout="3000" :animationSpeed="1000" :controls-visible="true" :inverse-scaling="2000" :space="1000" :autoplay="true" :width="600" :height="400" :count="images.length">
            <slide v-for="(image, i) in images" :index="i">
                <img :src="image">
            </slide>
        </carousel-3d>

    </div>
</template>

<script>
import Vue from 'vue';
import { Carousel3d, Slide } from 'vue-carousel-3d';

    export default {
        components: {
            Carousel3d,
            Slide
        },
        data () {
            return {
                message: '',
                content:'',
                images: [],
            }
        },
        methods: {
            msg() {
                if(this.$route.query['onglet'] === 'charpente')
                {
                    this.message = "Je suis Charpente"
                    this.content = "truc"
                    axios.get('/api/imgCharpente').then(response => this.images = response.data)
                } 
                if(this.$route.query['onglet'] === 'menuiserie')
                {
                    this.message = 'Je suis Menuiserie'
                    this.content = "Menuiserie"
                    axios.get('/api/imgMenuiserie').then(response => this.images = response.data)
                }
                if(this.$route.query['onglet'] === 'couverture')
                {
                    this.message = 'Je suis Couverture'
                    this.content = "Couverture"
                    axios.get('/api/imgCouverture').then(response => this.images = response.data)
                }
            },
        },
        watch: {
            '$route': function() {
                this.msg()
            },
        },
        mounted() {
            this.msg()


        }
    }
</script>
