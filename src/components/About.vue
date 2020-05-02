<template>
	<div class="About">
		<div class="title-container">
			<h1 class="title">About page</h1>
		</div>
		<p :prop=charNumber> {{computedText}} </p>
		<div class="image">
			<img src="../assets/picture.jpeg">
		</div>
	</div>
</template>

<script>
	export default {
		data () {
			return {
				text: 'Hello, my name is Zdravko Sokcevic, i\'m a full-stack Web Developer, with 2 years experience with OOP Php and 1 year expirience with Laravel.',
				comutedText: ' ',
				charNumber: 0,
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
			}
		},
		beforeCreate () {
			this.computedText= ' '
		},
		mounted () {
			this.tick=setInterval( () => {
				this.setText()
			}, 60)
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
</style>