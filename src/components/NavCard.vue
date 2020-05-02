<template>
	<div class="NavCard">
		<!-- <b-icon icon="dot"><b-icon> -->
		<div v-if="icon == 'home'">
			<svg class="bi bi-arrow-right-short" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L10.793 8 8.146 5.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
			  <path fill-rule="evenodd" d="M4 8a.5.5 0 01.5-.5H11a.5.5 0 010 1H4.5A.5.5 0 014 8z" clip-rule="evenodd"/>
			</svg>
		</div>
		<div v-else-if="icon == 'about'">
			<svg class="bi bi-info-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
			  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
			  <circle cx="8" cy="4.5" r="1"/>
			</svg>
		</div>
		<div v-else>
			<svg class="bi bi-arrow-right-short" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			  <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 01.708 0l3 3a.5.5 0 010 .708l-3 3a.5.5 0 01-.708-.708L10.793 8 8.146 5.354a.5.5 0 010-.708z" clip-rule="evenodd"/>
			  <path fill-rule="evenodd" d="M4 8a.5.5 0 01.5-.5H11a.5.5 0 010 1H4.5A.5.5 0 014 8z" clip-rule="evenodd"/>
			</svg>
		</div>
		<p class="text-notify" v-on:click=""> {{name}} </p>
		
	</div>
</template>

<script>
	export default {
		name: 'NavCard',
		props: {
			name: String,
			icon: String,
			lightColor: '#f00',
		},
		data() {
			return {
				getFirstName: ()=> {
					console.log('tu si')
					return this.name
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
			}
		}
	}
</script>

<style strict>
	.NavCard {
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
	svg.bi-info-circle {
		margin-left: 7px;
		margin-right:10px;
		color:white;
	}
	.bi-arrow-right-short {
		color:white;
		font-size: 30px
	}
	.bi-arrow-right-short:hover {
		color:'#ff0000';
	}
</style>