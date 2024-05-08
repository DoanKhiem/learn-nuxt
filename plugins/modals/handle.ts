import layout from "./layout.vue";
import type { App } from 'vue';
import { createApp } from 'vue'; // Import the createApp function from Vue

const VModal = {
    install(Vue: any, options: any) {
        const VModal = {
            install(app: App, options: any) {
                const EventBus = createApp({});
                app.component('v-modal', layout);
                app.config.globalProperties.$vmodal = {
                    open(params: any) {
                        EventBus.emit('open', params);
                    },
                    close(params: any) {
                        EventBus.emit('close', params);
                    },
                };
            },
        };
    }
}

export default VModal;