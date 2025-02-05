import { defineStore } from "pinia";

export const useWindowStore = defineStore("window", {
    state: () => ({
        width: window.innerWidth, // Initialize with the current window width
    }),
    getters: {
        responsive(state: any) {
            const resSize = [
                320,
                360,
                411,
                414,
                555,
                480,
                600,
                720,
                768,
                800,
            ];
            return resSize.includes(state.width);                        
        },
    },
});
