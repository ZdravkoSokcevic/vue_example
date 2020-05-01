<template>
	<ul>
		<li v-if="drPasus=='about'">{{aboutTitle}}></li>
<!-- 		<li v-on:click="velikaSlova" v-on:mouseenter="uvecaj">Pera</li>
		<li :style="getStyle()" v-on:click="getAnotherStyle"> Dodjeljivanje style-a </li> -->
		<li v-if="drPasus=='card1'">
			<MyCard name=janko lastName=Jankovic></MyCard>
		</li>
		<li v-if="drPasus=='card2'">
			<MyCard name=Petar lastName=Petrovic></MyCard>
		</li>
	</ul>
</template>

<script>
	import MyCard from './MyCard'
	export default {
		name: 'HelloWorld',
		components: {
			MyCard
		},
		data () {
			return {
				aboutTitle: 'About',
				msg: 'Welcome to Your Vue.js App',
				drPasus: 'about',
				about: 1
			}
		},
		methods: {
			getStyle: ()=> {
				return 'color:red;'
			},
			getAnotherStyle: e => {
				console.log(e)
				e.target.style.color= 'blue'
			},
			velikaSlova: e => {
				e.target.style.textTransform = 'uppercase'
			},
			uvecaj: e => {
				console.log(this.a.data().drPasus.toUpperCase())
				console.log('uvecaj')
			}
		},
		mounted: () => {
			setTimeout(() => {
				console.log('tu si')
				this.a.data().drPasus='card1'
			});
		}
	}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
	font-weight: normal;
}
ul {
	float: left;
	position: relative;
	display: flex;
	flex-direction: column;
	list-style-type: none;
	padding: 0;
}
li {
	padding: 10px;
	margin-top:20px;
	display: inline-block;
	margin: 10 10px;
}
li:hover {
	background-color:#262626;
}
a {
	color: #42b983;
}
</style>
