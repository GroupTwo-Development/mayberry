/**
 * External Dependencies
 */
import 'jquery';
import 'bootstrap';
import {createApp} from 'vue';

import homePage from './vue/homepage'

$(document).ready(() => {
  // console.log('Hello world');
});

const homeApp = createApp(homePage);
homeApp.mount('#home-app');
