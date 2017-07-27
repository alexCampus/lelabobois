import VueRouter from 'vue-router'



let routes = [
{
	path:'/',
	component: require('./components/Accueil')
},
{
	path:'/details',
	component: require('./components/Example')
}
];

export default new VueRouter({
	routes,
	mode: 'history',
	scrollBehavior (to, from, savedPosition) {
  		if (to.hash) {
    		return {
      			selector: to.hash
      			// , offset: { x: 0, y: 10 }
    		}
  		}
	}
});