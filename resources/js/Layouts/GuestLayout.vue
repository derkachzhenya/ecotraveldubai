<script setup>
import { Link } from '@inertiajs/vue3';
import Header from '@/Components/Welcome/Header.vue';
</script>

<template>
    <Header />
    <div class="flex flex-col items-center pt-6 sm:justify-center sm:pt-0">
        <div class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
