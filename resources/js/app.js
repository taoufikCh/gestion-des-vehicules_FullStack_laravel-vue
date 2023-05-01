import { createApp } from 'vue'
import App from './App.vue'
import './bootstrap';
import axios from 'axios';
import router from './routes';
/* add fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* add some free styles */
import { faTrashAlt,faEdit } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';

/* add each imported icon to the library */
library.add(faTrashAlt,faEdit)

const app = createApp(App).use(router)
app.component('font-awesome-icon', FontAwesomeIcon)
app.config.globalProperties.axios=axios
app.mount('#app')

