<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import LanguageSwitcher from '@/Components/LanguageSwitcher.vue';

// Управление бургер-меню
const menuOpen = ref(false);

// Доступ к данным пользователя
const page = usePage();
const isAuthenticated = computed(() => page.props.auth?.user);
const canRegister = computed(() => page.props.canRegister ?? false);
</script>

<template>
  <header class="flex justify-between items-center px-6 md:px-12 py-6 shadow-md relative bg-white">
    <h1 class="text-xl font-bold flex items-center gap-2">
      <Link href="/" class="flex items-center gap-2 no-underline text-green-600">
        EcoTravelDubai
        <img src="/ecotraveldubai.ico" alt="Иконка листочка" class="w-7 h-7">
      </Link>
    </h1>

    <nav class="hidden md:flex items-center gap-4">
      <ul class="flex gap-4">
        <li><a href="/blog" class="hover:underline text-green-600">{{ $t('blog') }}</a></li>
        <li v-if="isAuthenticated">
          <Link :href="route('dashboard')" class="hover:underline text-green-600">{{ $t('dashboard') }}</Link>
        </li>
        <li v-if="!isAuthenticated">
          <Link :href="route('login')" class="hover:underline text-green-600">{{ $t('login') }}</Link>
        </li>
        <li v-if="!isAuthenticated && canRegister">
          <Link :href="route('register')" class="hover:underline text-green-600">{{ $t('register') }}</Link>
        </li>
      </ul>

      <!-- Используем компонент переключателя языка -->
      <LanguageSwitcher />
    </nav>
  </header>
</template>
