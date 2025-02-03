<script setup lang="ts">
import { ref, onMounted } from "vue";

const fadeUpElements = ref<NodeListOf<Element> | null>(null);

onMounted(() => {
  fadeUpElements.value = document.querySelectorAll(".fade-up");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
          observer.unobserve(entry.target); // Stop observing once the element is visible
        }
      });
    },
    { threshold: 0.1 } // Trigger when 10% of the element is visible
  );

  fadeUpElements.value.forEach((el) => observer.observe(el));
});
</script>

<template>
  <AuthenticatedLayout>
    <curousel class="fade-up" />

    <div class="grid lg:grid-cols-3 gap-4 mt-7">
  <div class="col-span-2 p-4 text-white fade-up">
    <headings />
  </div>
  <div class="p-4 text-white fade-up">
    <ratings />
  </div>
</div>

    <available-room class="fade-up" />
    <description class="pb-40 fade-up" />
    <welcome-video class="fade-up" />

    <welcome-footer class="fade-up" />
  </AuthenticatedLayout>
</template>

<style>
.fade-up {
  opacity: 0;
  transform: translateY(10px);
  transition: opacity 0.6s ease, transform 0.6s ease;
}

.fade-up.show {
  opacity: 1;
  transform: translateY(0);
}
</style>
