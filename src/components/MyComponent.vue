<template>
	<div class="my-component">
		<p v-on:click="increment">pera</p>
		<a href="/#/about">About</a>
	</div>
</template>

<script>
export default {
	name:'MyComponent',
	methods: {
		increment: (event) => {
			console.log('klikk');
		}
	}
}
</script>