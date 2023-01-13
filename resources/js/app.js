import './bootstrap';

import 'vuetify/styles' // Global CSS has to be imported
import { createApp } from 'vue'
import { createVuetify } from 'vuetify'
import App from './vue/App.vue'
import Store from './store'

// Route設定は次に行います
import router from "./router"

const app = createApp(App)
const vuetify = createVuetify()
app.use(router)
app.use(Store)
app.use(vuetify)
app.mount('#app')