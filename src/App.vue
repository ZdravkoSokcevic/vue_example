<template>
	<div id="app">
		<!-- <img src="./assets/logo.png"> -->
		<div class="nav">
			<ul class="center">
				<a href="/#/">
					<li>
						<NavCard name=Home icon=pera> </NavCard>
					</li>
				</a>
				<a href="/#/about">
					<li>
						<NavCard name=About icon=about></NavCard>
					</li>
				</a>
				<a href="/#/test">
					<li>
						<NavCard name=Test icon=default></NavCard>		
					</li>
				</a>
			</ul>
		</div>
		<div class="main">
			<router-view/>
		</div>
	</div>
</template>

<script>
	import NavCard from './components/NavCard'
	export default {
		name: 'App',
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
		}
	}
</script>

<style lang="css">
html {
	overflow: hidden;
	position: absolute;
	width: 100%;
	height: 100%;
}
#app {
	background-color:#232525!important;
	color: #2c3e50;
	padding: 0!important;
	margin: 0!important;
	width: 100%;
	height: 100%;
	position: absolute;
	display: flex;
	flex-direction: column;
}
.nav {
	align-content: center;
	width: 100%;
	z-index: 1000;
	height: 50px;
}
ul {
	width: 100%;
	display: flex;
	flex-direction: row;
	list-style-type: none;
	padding: 0;
	justify-content: center;
}
.nav > ul {
	margin-top: 50px;
}
.nav > ul > a > li {
	padding: 5px;
	padding: 15px;
}
li:hover {
	background-color:#2a343c;
}
.main {
	width: 100%;
	height: 100%;
}
a {
	color:white;
}
</style>
