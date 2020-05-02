<template>
	<div class="my-component">
		<p v-on:click="">{{id}}</p>
		<p>Broj posjeta: {{visites}}</p>
		<a href="/#/about">MyComponent</a>
	</div>
</template>

<script>
export default {
	name:'MyComponent',
	data () {
		return {
			polling: null,
			id: 0,
			visites: 0
		}
	},
	methods: {
		pollData () {
			this.polling = setInterval(() => {
				this.id++
			}, 3000)
		},
		countVisites () {
			this.visites++
		}
	},
	beforeDestroy () {
		clearInterval(this.polling)
	},
	created () {
		this.pollData()
	},
	mounted () {
		this.countVisites()
	}
}
</script>