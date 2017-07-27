<template>
    <div class="container">
        <div class="row">
            <router-link to="/" class='btn wow tada btn-embossed btn-primary pull-left'>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </router-link>
            <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
                <h1>{{ title}} </h1>
                <p class="lead" style="margin-top:0">{{subtitle}}</p>
             </div>
        </div>
       
        <carousel-3d :autoplayTimeout="3000" :animationSpeed="1000" :controls-visible="true" :inverse-scaling="2000" :space="1000" :autoplay="true" :width="800" :height="400" :count="images.length">
            <slide v-for="(image, i) in images" :index="i">
                <img :src="image">
            </slide>
        </carousel-3d>
        <p class="lead">{{ content }}</p>
        <router-link to="/" class='btn wow tada btn-embossed btn-primary pull-left'>
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
        </router-link>
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
                title: '',
                content:'',
                subtitle: '',
                images: [],
            }
        },
        methods: {
            msg() {
                if(this.$route.query['onglet'] === 'charpente')
                {
                    this.title = "Charpente"
                    this.content = "Le labo Bois met son expertise à votre disposition pour réaliser vos travaux de charpente bois des plus simples au plus complexes. Une étude au préalable sera effectuée, pour vous proposer la meilleure solution à votre projet et répondre au plus près à vos attentes. N’hésitez pas à nous contacter pour réaliser"
                    this.subtitle = "Travaux structurels de Charpente traditionnelle de la conception à la pose."
                    axios.get('/api/imgCharpente').then(response => this.images = response.data)
                } 
                if(this.$route.query['onglet'] === 'menuiserie')
                {
                    this.title = 'Menuiserie Bardage'
                    this.content = "Le Labo Bois effectue toutes sortes d’aménagements extérieur et intérieur. Pose de bardage ou de lambris en sous face, sur mur ou plafond. Réalisation de terrasses en extérieurs, Montage de balcons et de barrières. Pose d’escalier intérieur extérieur."
                    this.subtitle = "De la Réalisation d’escalier, balcon, terrasse à la pose de bardage lambris."
                    axios.get('/api/imgMenuiserie').then(response => this.images = response.data)
                }
                if(this.$route.query['onglet'] === 'couverture')
                {
                    this.title = 'Couverture'
                    this.content = "De la rénovation de toiture à la pose sur votre nouveau projet. Tous matériaux de couverture tuiles, ardoises, tôles et tavaillons, ainsi que les membranes goudronnées, polymères et élastomères."
                    this.subtitle = "Couverture Traditionnelle, Tuile, ardoise, tôle, tavaillon, étanchéité."
                    axios.get('/api/imgCouverture').then(response => this.images = response.data)
                }
                if(this.$route.query['onglet'] === 'construction-bois')
                {
                    this.title = 'Construction Bois'
                    this.content = "La construction bois permet une fabrication rapide et maitrisée, mais aussi des possibilités plus larges en termes d’imagination. Différents type de fabrication sont possibles, tant en terme de structure que d’isolation et d’imperméabilité."
                    this.subtitle = "De l’agrandissement en Ossature bois à la réalisation complète de votre projet."
                    axios.get('/api/imgConstruction').then(response => this.images = response.data)
                }
                if(this.$route.query['onglet'] === 'zinguerie')
                {
                    this.title = 'Zinguerie'
                    this.content = "Tous travaux de zinguerie. Pose et rénovation. Cuivre, Zinc, tôle ou plomb selon travaux : Couvertines de mur, gouttières et chéneaux, faitages et rives, abergements et frontons… Montage Velux."
                    this.subtitle = "Travaux de Pliage et soudure de la Couvertine à la Gouttière, Pose de Velux."
                    axios.get('/api/imgZinguerie').then(response => this.images = response.data)
                }
                if(this.$route.query['onglet'] === 'renovation')
                {
                    this.title = 'Rénovation'
                    this.content = "Le labo Bois propose son savoir faire pour réaliser au mieux votre confort intérieur. Utilisation de produit sain et durable pour votre isolation, mise en avant du bois en tant isolant. Conseil et pose."
                    this.subtitle = "De l’Isolation thermique et l’étanchéité à l’air à l’aménagement intérieur."
                    axios.get('/api/imgRenovation').then(response => this.images = response.data)
                }
            },
        },
        watch: {
            '$route': function() {
                this.msg()             
            },
        },
        created() {
        },
        mounted() {
            this.msg()
        }
    }
</script>
