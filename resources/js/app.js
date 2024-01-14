import './bootstrap';
import '../css/app.css';
import '../scss/corporate-ui-dashboard.scss';
import '../css/variables.css';
import '../fonts/tajawal.css'
import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import i18n from './i18n.js'

import { createStore } from "vuex";
import logrocketPlugin from './Store/plugins/logrocket'
const store = createStore({
    /* state, actions, mutations */
    plugins: [logrocketPlugin]
});

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// import.meta.glob(['../images/**'])

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('InertiaHead', Head)
            .component('InertiaLink', Link)
            .use(ZiggyVue)
            .use(i18n)
            .use(store)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
