<template>
    <div class="container">
        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>Mes Activités</h2>
        </div>
        
        <div class="row">
            <div class="col-sm-4 wow fadeInDown text-center">
                <img class="rotate" src="img/icon/icoCharpente.jpg" alt="Generic placeholder image">
                <h3>Charpente</h3>
                <p class="lead">Travaux structurels de Charpente traditionnelle de la conception à la pose.</p>
                <router-link :to="{ path: 'details', query: { onglet: 'charpente' }}" replace>
                    <p><a class="btn btn-embossed btn-primary view">Details</a></p>
                </router-link>
            </div><!-- /.col-lg-4 -->
            
            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="img/icon/icoConstruction.JPG" width="100px" height="100px" alt="Generic placeholder image">
                <h3>Construction Bois</h3>
                <p class="lead">De l’agrandissement en Ossature bois à la réalisation complète de votre projet.</p>
                <router-link :to="{ path: 'details', query: { onglet: 'construction-bois' }}" replace>
                    <p><a class="btn btn-embossed btn-primary view">Details</a></p>
                </router-link>
            </div><!-- /.col-lg-4 -->
            
            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="img/icon/icoMenuiserie.jpg" alt="Generic placeholder image">
                <h3>Menuiserie - Bardage</h3>
                <p class="lead">De la Réalisation d’escalier, balcon, terrasse à la pose de bardage lambris.</p>
                <router-link :to="{ path: 'details', query: { onglet: 'menuiserie' }}" replace>
                    <p><a class="btn btn-embossed btn-primary view" role="button">Details</a></p>
                </router-link>
            </div><!-- /.col-lg-4 -->
            
        </div><!-- /.row -->
            
        <div class="row tworow">
        
            <div class="col-sm-4  wow fadeInDown text-center">
                <img class="rotate" src="img/icon/icoCouverture.JPG" alt="Generic placeholder image">
                <h3>Couverture</h3>
                <p class="lead">Couverture Traditionnelle, Tuile, ardoise, tôle, tavaillon, étanchéité.</p>
                <router-link :to="{ path: 'details', query: { onglet: 'couverture' }}" replace>
                    <p><a class="btn btn-embossed btn-primary view">Details</a></p>
                </router-link>
            </div><!-- /.col-lg-4 -->
            
            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="img/icon/icoZinguerie.JPG" alt="Generic placeholder image">
                <h3>Zinguerie</h3>
                <p class="lead">Travaux de Pliage et soudure de la Couvertine à la Gouttière, Pose de Velux.</p>
                <router-link :to="{ path: 'details', query: { onglet: 'zinguerie' }}" replace>
                    <p><a class="btn btn-embossed btn-primary view">Details</a></p>
                </router-link>
            </div><!-- /.col-lg-4 -->
            
            <div class="col-sm-4 wow fadeInDown text-center">
                <img  class="rotate" src="img/icon/icoRenovation.jpg" alt="Generic placeholder image">
                <h3>Rénovation</h3>
                <p class="lead">De l’Isolation thermique et l’étanchéité à l’air à l’aménagement intérieur.</p>
                <router-link :to="{ path: 'details', query: { onglet: 'renovation' }}" replace>
                    <p><a class="btn btn-embossed btn-primary view">Details</a></p>
                </router-link>
            <!-- </div> --><!-- /.col-lg-4 -->
            </div>
        </div><!-- /.row -->
    </div>

</template>

<script>
import Vue from 'vue';
    export default {
        data () {
            return {
                message: 'Hello World',
            }
        },
        mounted() {
            console.log('Hello accueil')
        }
    }
</script>
