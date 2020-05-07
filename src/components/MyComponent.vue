<template>
	<div class="my-component">
		<p v-on:click="">{{id}}</p>
		<p >Broj posjeta: {{visites}}</p>
		<button></button>
		<div class="editor-container">
			<vue-editor v-model="initialEditorData" @click="collectCharacters">
				
			</vue-editor>
			<b-button class="save-button" @click=saveEditorContent>Save</b-button>
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
	    saveEditorContent: function() {
	      // You have the content to save
	      let apiPath= 'http://vue.ba/api/public/'
	      // let postData= {
	      // 	data: this.initialEditorData
	      // }
	      let formData= new FormData();
	      formData.set('data', this.initialEditorData)
	      // console.log(formData)
	      this.$api.post(apiPath + 'editor/data', formData)
	      	.then( res => {
	      		console.log(res)
	      	})
	      	.catch( err => {
	      		console.error('Something wen\'t wrong')
	      	});
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
		//this.saveEditorContent()
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
		position: relative;
		margin-left: 10%;
		width: 80%;
		height: 100%;
	}
	.quillWrapper {
		height: 100%;
		background-color: #2e3436;
		color:#fff;	
		position: relative;
	}
	.ql-toolbar {
		background-color: #5a5a59;
	}
	.save-button {
		position: absolute;
		bottom: 10px;
		right: 10px;
	}
</style>