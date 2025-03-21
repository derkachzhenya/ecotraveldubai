<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

// Управление бургер-меню
const menuOpen = ref(false);

// Доступ к данным пользователя
const page = usePage();
const isAuthenticated = computed(() => page.props.auth?.user);
const canRegister = computed(() => page.props.canRegister ?? false);
</script>

<template>
    <header class="flex justify-between items-center px-6 md:px-12 py-6 shadow-md bg-green-600 text-white relative">
        <h1 class="text-xl font-bold flex items-center gap-2">
            <Link href="/" class="flex items-center gap-2 no-underline">
                EcoTravelDubai
                <img src="/ecotraveldubai.ico" alt="Иконка листочка" class="w-7 h-7">
            </Link>
        </h1>

        <!-- Бургер-кнопка (мобильные) -->
        <button @click="menuOpen = !menuOpen" class="md:hidden focus:outline-none">
            <svg v-if="!menuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
            <svg v-else class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Навигация (десктоп) -->
        <nav class="hidden md:flex">
            <ul class="flex gap-4">
                <li><a href="#" class="hover:underline">Блог</a></li>
                <li><a href="#" class="hover:underline">Гид</a></li>
                <li v-if="isAuthenticated">
                    <Link :href="route('dashboard')" class="hover:underline">Личный кабинет</Link>
                </li>
                <li v-if="!isAuthenticated">
                    <Link :href="route('login')" class="hover:underline">Войти в аккаунт</Link>
                </li>
                <li v-if="!isAuthenticated && canRegister">
                    <Link :href="route('register')" class="hover:underline">Зарегистрироваться</Link>
                </li>
            </ul>
        </nav>

        <!-- Мобильное меню -->
        <nav v-if="menuOpen" class="absolute top-20 left-0 w-full bg-green-600 md:hidden z-50">
            <ul class="flex flex-col items-center gap-4 py-6">
                <li><a href="#" class="hover:underline">Блог</a></li>
                <li><a href="#" class="hover:underline">Гид</a></li>
                <li v-if="isAuthenticated">
                    <Link :href="route('dashboard')" class="hover:underline">Личный кабинет</Link>
                </li>
                <li v-if="!isAuthenticated">
                    <Link :href="route('login')" class="hover:underline">Войти в аккаунт</Link>
                </li>
                <li v-if="!isAuthenticated && canRegister">
                    <Link :href="route('register')" class="hover:underline">Зарегистрироваться</Link>
                </li>
            </ul>
        </nav>
    </header>
</template>
