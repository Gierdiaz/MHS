import './bootstrap';

// UIKIT
import 'uikit/dist/css/uikit.min.css';
import 'uikit/dist/js/uikit.min.js';
import 'uikit/dist/js/uikit-icons.min.js';

// Route with ZIGGY
import { ZiggyVue } from 'ziggy-js';
import { Ziggy } from './ziggy.js';

// VUE INERTIA
import { createApp, h } from 'vue'
import { createInertiaApp, router } from '@inertiajs/vue3'

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./pages/**/*.vue', { eager: true })
    return pages[`./pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(ZiggyVue, Ziggy)
      .mount(el)

  },
})
