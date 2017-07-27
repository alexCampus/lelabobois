<template>

        <div class="container">
            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Domaine d'Activités</h2>
            </div>
            
            <div class="row">
                <div class="col-sm-4 wow fadeInDown text-center">
                    <router-link :to="{ path: 'details', query: { onglet: 'charpente'}, hash: 'activite'}" replace>
                        <img class="rotate" src="img/icon/icoCharpente.png" alt="Generic placeholder image">
                        <h3>Charpente</h3>
                        <p class="lead">Travaux structurels de Charpente traditionnelle de la conception à la pose.</p>
                    </router-link>
                </div><!-- /.col-lg-4 -->
                
                <div class="col-sm-4 wow fadeInDown text-center">
                    <router-link :to="{ path: 'details', query: { onglet: 'construction-bois'}, hash: 'activite'}" replace>
                        <img  class="rotate" src="img/icon/icoConstruction.png" alt="Generic placeholder image">
                        <h3>Construction Bois</h3>
                        <p class="lead">De l’agrandissement en Ossature bois à la réalisation complète de votre projet.</p>
                    </router-link>
                </div><!-- /.col-lg-4 -->
                
                <div class="col-sm-4 wow fadeInDown text-center">
                    <router-link :to="{ path: 'details', query: { onglet: 'menuiserie' }, hash: 'activite'}" replace>
                        <img  class="rotate" src="img/icon/icoMenuiserie.png" alt="Generic placeholder image">
                        <h3>Menuiserie - Bardage</h3>
                        <p class="lead">De la Réalisation d’escalier, balcon, terrasse à la pose de bardage lambris.</p>
                    </router-link>
                </div><!-- /.col-lg-4 -->
                
            </div><!-- /.row -->
                
            <div class="row tworow">
            
                <div class="col-sm-4  wow fadeInDown text-center">
                    <router-link :to="{ path: 'details', query: { onglet: 'couverture'}, hash: 'activite'}" replace>
                        <img class="rotate" src="img/icon/icoCouverture.png" alt="Generic placeholder image">
                        <h3>Couverture</h3>
                        <p class="lead">Couverture Traditionnelle, Tuile, ardoise, tôle, tavaillon, étanchéité.</p>
                    </router-link>
                </div><!-- /.col-lg-4 -->
                
                <div class="col-sm-4 wow fadeInDown text-center">
                    <router-link :to="{ path: 'details', query: { onglet: 'zinguerie'}, hash: 'activite'}" replace>
                        <img  class="rotate" src="img/icon/icoZinguerie.png" alt="Generic placeholder image">
                        <h3>Zinguerie</h3>
                        <p class="lead">Travaux de Pliage et soudure de la Couvertine à la Gouttière, Pose de Velux.</p>
                    </router-link>
                </div><!-- /.col-lg-4 -->
                
                <div class="col-sm-4 wow fadeInDown text-center">
                    <router-link :to="{ path: 'details', query: { onglet: 'renovation' }, hash: 'activite'}" replace>
                        <img  class="rotate" src="img/icon/icoRenovation.png" alt="Generic placeholder image">
                        <h3>Rénovation</h3>
                        <p class="lead">De l’Isolation thermique et l’étanchéité à l’air à l’aménagement intérieur.</p>
                    </router-link>
                <!-- </div> --><!-- /.col-lg-4 -->
                </div>
            </div><!-- /.row -->
        </div>
 

</template>

<script>
import Vue from 'vue';
    export default {
    }
</script>
