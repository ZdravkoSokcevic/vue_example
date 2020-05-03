<template>
	<div class="About">
		<div class="title-container">
			<h1 class="title">About page</h1>
		</div>
		<div class="content-container">
			<div class="fancy-letters">
				<p :prop=charNumber> {{computedText}} </p>
				
			</div>
			<div class="item-container">
				<p v-for="item in items" :key="item.id">
					<NavCard
						:name="item.first_name + ' ' + item.last_name"
						icon=""
						lightColor="#555753"
					></NavCard>
				</p>
			</div>
		</div>
		<div class="image">
			<!-- <img src="../assets/picture.jpeg"> -->
		</div>
	</div>
</template>

<script>
	import NavCard from './NavCard'
	export default {
		components: {NavCard},
		data () {
			return {
				text: 'This is my first attempt with Vue.js, I hope the learning process goes well.',
				comutedText: ' ',
				charNumber: 0,
				first_name: '',
				last_name: '',
				items: [],
				itemColor: '#555753',
				tick: null
			}
		},
		methods: {
			setText () {
				if(this.charNumber > this.text.length)
					this.charNumber=1
				else if(this.charNumber==this.text.length) 
					return;
				else this.charNumber++
				this.computedText= this.text.substring(0,this.charNumber)	
			},
			tickClear () {
				clearInterval(this.tick)
			},
			getFullName (item) {
				if(item.hasOwnProperty('first_name') && item.hasOwnProperty('last_name'))
					return item.first_name + ' ' + item.last_name
				else return ' '
			}
		},
		beforeCreate () {
			this.computedText= ' '
		},
		mounted () {
			let apiRoute= 'http://vue.ba/api/public/' + 'test';
			// let apiRoute= 'http://192.168.42.52:8000/test';
			this.tick=setInterval( () => {
				this.setText()
			}, 60)
			this.$api.get()
				.then( res=> {
					let data= {}
					res.data.map(el => {
						data.id= (el.hasOwnProperty('id'))? el.id : ' '
						data.first_name= (el.hasOwnProperty('first_name'))? el.first_name : ' '
						data.last_name= (el.hasOwnProperty('last_name'))? el.last_name : ' '
						this.items.push(data)
						data={}
					})
				})
				.catch( err=> {
					console.log(`Error: ${JSON.stringify(err)}`)
					// console.error(JSON.stringify(err))
				});
		},
		beforeDestroy () {
			this.tickClear()
		}
	}
</script>

<style strict>
	#About {
		align-content: center;
	}
	.title {
		color:white;
	}
	p {
		color:white;
	}
	.title-container {
		margin-top:40px;
		margin-bottom: 50px;
		width: 100%;
		/*text-align: center;*/
	}
	.title-container {
		/*margin-left: -200px;*/
	}
	.image {
		width: 400px;
		height:100px;
		overflow: hidden;
	}
	img {
		max-width: initial;
		width: 100%;
		object-fit: data;
	}
	.content-container {
		width: 60%;
		margin-left: 20%;
	}
	.item-container {
		width: 100%;
	}
	.fancy-letters{
		height: 50px;
	}
</style>