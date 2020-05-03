<template>
	<div class="my-component">
		<p v-on:click="">{{id}}</p>
		<p >Broj posjeta: {{visites}}</p>
		<button></button>
		<div class="editor-container">
			<vue-editor v-model="initialEditorData" @click="collectCharacters">
				
			</vue-editor>
		</div>
	</div>
</template>

<script>
import {VueEditor} from 'vue2-editor'
export default {
	name:'MyComponent',
	components: {
		VueEditor
	},
	data () {
		return {
			polling: null,
			id: 0,
			visites: 0,
			initialEditorData: 'This is very rich text editor'
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
		},
		// initialEditorData (data) {
		// 	console.log(data)
		// 	return this.initalTextData
		// },
		collectCharacters () {
			console.log(this.initialEditorData)
		},
	    handleSavingContent: function() {
	      // You have the content to save
	      console.log(this.content);
	    }
	},
	beforeDestroy () {
		clearInterval(this.polling)
	},
	created () {
		this.pollData()
	},
	mounted () {
		this.initialEditorData= 'This is very rich text editor'
		this.visites= 0
		this.id=0
		this.countVisites()
	},
	beforeDestroy () {
		console.log(this.initialEditorData)
	}
}
</script>

<style lang="css" strict>
	.my-component {
		display: flex;
		flex-direction: column;
		height: 100%;
	}
	.editor-container {
		margin-left: 10%;
		width: 80%;
		height: 100%;
	}
	.quillWrapper {
		height: 100%;
		background-color: #2e3436;		
	}
	.ql-toolbar {
		background-color: #5a5a59;
	}
</style>