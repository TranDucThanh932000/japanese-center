import './bootstrap';

import { createApp } from "vue";
import HomePage from './components/home/index.vue'

const app = createApp({});
app.component('home-page', HomePage)
app.mount("#app");