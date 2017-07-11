<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Accueil Component</div>

                    <div class="panel-body">
                        <h1>Hello world</h1>
                        <a href="/upload">Upload</a>
                        <router-link :to="{ path: 'details', query: { onglet: 'menuiserie' }}">Menuiserie</router-link>
                        <router-link :to="{ path: 'details', query: { onglet: 'charpente' }}">Charpente</router-link>
                        <router-link :to="{ path: 'details', query: { onglet: 'couverture' }}">Couverture</router-link>
                    </div>
                </div>
            </div>
        </div>
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
            console.log('mounted accueil')
        }
    }
</script>
