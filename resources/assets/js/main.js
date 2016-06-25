/*
 * Load Vue & Vue-Resource.
 */
if (window.Vue === undefined) {window.Vue = require('vue');}
Vue.use(require('vue-resource'));

/*
 * Load jQuery and Bootstrap jQuery, used for front-end interaction.
 */
if (window.$ === undefined || window.jQuery === undefined) {
  window.$ = window.jQuery = require('jquery');
}

/*
 * Laravel csrf token
 */
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
  }
});
Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="_token"]').attr('content');

/**
 * Bootstrap
 */
require('bootstrap-sass');

/**
 * Main Vue Appliation and Global Components
 */
import Confirm from './components/Confirm.vue';

window.vueApp = new Vue({
  el: 'body',
  components: {
    Confirm
  }
});
