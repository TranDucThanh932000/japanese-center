import './bootstrap';

import { createApp } from "vue";
import CoreuiVue from "@coreui/vue";

const app = createApp({});
app.use(CoreuiVue);

import HomePage from './components/home/index.vue'

app.component('home-page', HomePage)

app.mount("#app");