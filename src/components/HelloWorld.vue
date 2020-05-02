<template>
	<div class="hello">
		<h1>HOME</h1>
	</div>
</template>

<script>
	import NavCard from './NavCard'
	export default {
		name: 'HelloWorld',
		components: {
			NavCard
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
</style>
