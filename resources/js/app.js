import '../css/app.css';
import './bootstrap';

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import { i18nVue } from 'laravel-vue-i18n';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(i18nVue, {
                lang: localStorage.getItem('lang') || 'en', // Загружаем язык из локального хранилища
                resolve: async (lang) => {
                    const langs = import.meta.glob('../../lang/*.json');
                    if (langs[`../../lang/${lang}.json`]) {
                        return langs[`../../lang/${lang}.json`]();
                    }
                    console.warn(`⚠️ Переводы для языка "${lang}" не найдены.`);
                    return {};
                }
            });

        return app.mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
