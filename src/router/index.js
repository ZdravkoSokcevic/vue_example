import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import MyComponent from '@/components/MyComponent'
import About from '@/components/About'
import Post from '@/components/Post'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    }, {
      path: '/test',
      name: 'TestRoute',
      component: MyComponent
    }, {
      path: '/about',
      name: 'About',
      component: About
    }, {
      path: '/posts',
      name: 'Post',
      component: Post
    }
  ]
})
