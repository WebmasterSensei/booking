<script setup lang="ts">

</script>
<template>
    <AuthenticatedLayout>
        <curousel />

        <div class="grid lg:grid-cols-[65%_35%] gap-4 mt-7">
            <div class="p-4 text-white">
                <headings />
            </div>
            <div class="p-4 text-white">
                <ratings/>
            </div>
        </div>

       <available-room/>
       
    </AuthenticatedLayout>
</template>
