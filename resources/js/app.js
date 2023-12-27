import './bootstrap';
import { createApp } from 'vue';
import ComponentA from './components/ComponentA.vue';

const app = createApp({
    data(){
        return {
            value:"me"
        }
    }
});
app.component('ComponentA', ComponentA);
app.mount("#app");