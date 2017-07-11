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
	routes
});