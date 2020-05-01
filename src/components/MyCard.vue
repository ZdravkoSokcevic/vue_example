<template>
	<div class="MyCard">
		<!-- <b-icon icon="dot"><b-icon> -->
		<div v-on:click="changeSvgColor">
			<svg class="bi bi-arrow-right-short" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L10.793 8 8.146 5.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
			  <path fill-rule="evenodd" d="M4 8a.5.5 0 01.5-.5H11a.5.5 0 010 1H4.5A.5.5 0 014 8z" clip-rule="evenodd"/>
			</svg>
		</div>
		<p class="text-notify" v-on:click="changeColor"> {{name}} &nbsp; {{lastName}}</p>
		
	</div>
</template>

<script>
	export default {
		name: 'MyCard',
		props: {
			name: String,
			lastName: String,
			lightColor: '#f00',
		},
		data() {
			return {
				getFirstName: ()=> {
					console.log('tu si')
					return this.firstName
				}
			}
		},
		methods: {
			changeColor: (e) => {
				let color= "ABCDEF0123456789";
				let colorString= ''
				let randNum;
				for (var i=0; i <= 6; i++) {
					randNum= Math.round((Math.random()*color.length)+1)
					colorString+= color.charAt(randNum)
				}
				e.target.style.color= '#'+colorString
				// console.log(colorString)
			},
			changeSvgColor: (e) => {
				console.log(document.getElementsByClassName('bi-arrow-right-short')[0])
				console.log(this.a.props.lightColor.type)
				document.getElementsByClassName('bi-arrow-right-short')[0].style.color= this.a.props.lightColor
			}
		}
	}
</script>

<style strict>
	.MyCard {
		display: flex;
		flex-direction: row;
		align-items: center;
		vertical-align: middle;
	}
	.icon {
		font-color:'#ffffff';
	}
	p {
		margin-bottom: 0!important;
	}
	.bi-arrow-right-short {
		color:white;
		font-size: 30px
	}
	.bi-arrow-right-short:hover {
		color:'#ff0000';
	}
</style>