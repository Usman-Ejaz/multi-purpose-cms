// import './bootstrap';
import '../css/app.css';

import { createApp, defineAsyncComponent, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Link } from '@inertiajs/vue3';

const Layout = defineAsyncComponent(() => import('@/Layouts/AuthenticatedLayout.vue'));

const appName = import.meta.env.VITE_APP_NAME || 'CMS';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async (name) => {
        const page = await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'));

        if (page.default.layout === undefined) {
            page.default.layout = Layout;
        }
        
        return page;
    },
    setup({ el, App, props, plugin }) {
        return createApp({
            name: 'CMS',
            mounted: () => {
                document.querySelector('[data-page]')?.removeAttribute('data-page');
            },
            render: () => h(App, props) 
        })
        .use(plugin)
        .use(ZiggyVue, Ziggy)
        .component('Link', Link)
        .mount(el);
    },
    progress: {
        showSpinner: true,
        color: '#2a3042',
    },
});
