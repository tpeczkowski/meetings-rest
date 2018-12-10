import Vue from 'vue'
import Meetings from './Meetings.vue'

Vue.config.productionTip = false

new Vue({
  render: h => h(Meetings),
}).$mount('#app')
