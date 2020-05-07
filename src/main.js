// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import axios from 'axios'

Vue.config.productionTip = false

import { BootstrapVue, BootstrapVueIcons, IconsPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue)
Vue.use(BootstrapVueIcons)

// External scripts
Vue.use({
	install (Vue) {
		Vue.prototype.$api = axios.create({
			baseUrl: 'http://vue.ba/api/public/'
		})
		Vue.prototype.$api.defaults.headers.post['Content-Type']= 'multipart/form-data'
	}
})

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
