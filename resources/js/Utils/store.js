// stores/windowStore.js
import { defineStore } from 'pinia';
import { useWindowSize } from '@vueuse/core';

export const useWindowStore = defineStore('window', {
  state: () => ({
    widthSize: 0,
  }),
  actions: {
    updateWidth() {
      const { width } = useWindowSize();
      this.widthSize = width.value;
    },
  },
});
