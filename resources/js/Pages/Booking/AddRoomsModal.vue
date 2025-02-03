<template>
  <n-modal
    :mask-closable="false"
    preset="dialog"
    title="Dialog"
    content="Are you sure?"
    positive-text="Confirm"
    negative-text="Cancel"
    class=""
  >
    <!-- Input Field -->
    <n-input
      v-model:value="desc"
      size="large"
      round
      placeholder="Enter text"
      class="w-full"
    />
  </n-modal>
</template>
<script setup lang="ts">
import { ref } from 'vue';

const image = ref<any>();
const desc = ref<any>();
</script>
