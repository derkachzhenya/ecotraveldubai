<script setup>
import { ref, computed } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';

// Управление бургер-меню
const menuOpen = ref(false);

// Доступ к данным пользователя
const page = usePage();
const isAuthenticated = computed(() => page.props.auth?.user);
const canRegister = computed(() => page.props.canRegister ?? false);

// Переключение языков
const languages = [
  { code: 'ru', name: 'Русский' },
  { code: 'en', name: 'English' },
  { code: 'ar', name: 'العربية' }
];
const currentLanguage = ref('ru');
const isLanguageDropdownOpen = ref(false);

const changeLanguage = (langCode) => {
  currentLanguage.value = langCode;
  isLanguageDropdownOpen.value = false;
  // TODO: Реализовать смену языка через Laravel
};
</script>

<template>
    <header class="flex justify-between items-center px-6 md:px-12 py-6 shadow-md relative">
        <h1 class="text-xl font-bold flex items-center gap-2">
            <Link href="/" class="flex items-center gap-2 no-underline">
                EcoTravelDubai
                <img src="/ecotraveldubai.ico" alt="Иконка листочка" class="w-7 h-7">
            </Link>
        </h1>

        <!-- Бургер-кнопка (мобильные) -->
        <button @click="menuOpen = !menuOpen" class="md:hidden focus:outline-none">
            <svg v-if="!menuOpen" class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
            <svg v-else class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <!-- Навигация (десктоп) -->
        <nav class="hidden md:flex items-center gap-4">
            <ul class="flex gap-4">
                <li><a href="/blog" class="hover:underline text-green-600">Блог</a></li>
                <li v-if="isAuthenticated">
                    <Link :href="route('dashboard')" class="hover:underline text-green-600">Личный кабинет</Link>
                </li>
                <li v-if="!isAuthenticated">
                    <Link :href="route('login')" class="hover:underline text-green-600">Войти</Link>
                </li>
                <li v-if="!isAuthenticated && canRegister">
                    <Link :href="route('register')" class="hover:underline text-green-600">Регистрация</Link>
                </li>
            </ul>
            
            <!-- Переключатель языка -->
            <div class="relative">
                <button @click="isLanguageDropdownOpen = !isLanguageDropdownOpen" class="px-3 py-2 border rounded hover:bg-gray-100">
                    {{ languages.find(lang => lang.code === currentLanguage)?.name }}
                </button>
                <div v-if="isLanguageDropdownOpen" class="absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-lg">
                    <button v-for="lang in languages" :key="lang.code" @click="changeLanguage(lang.code)" class="block w-full text-left px-4 py-2 hover:bg-gray-100">
                        {{ lang.name }}
                    </button>
                </div>
            </div>
        </nav>

        <!-- Мобильное меню -->
        <nav v-if="menuOpen" class="absolute top-20 left-0 w-full bg-green-600 md:hidden z-50">
            <ul class="flex flex-col items-center gap-4 py-6">
                <li><a href="/blog" class="hover:underline">Блог</a></li>
                <li v-if="isAuthenticated">
                    <Link :href="route('dashboard')" class="hover:underline">Личный кабинет</Link>
                </li>
                <li v-if="!isAuthenticated">
                    <Link :href="route('login')" class="hover:underline">Войти</Link>
                </li>
                <li v-if="!isAuthenticated && canRegister">
                    <Link :href="route('register')" class="hover:underline">Регистрация</Link>
                </li>
                
                <!-- Переключатель языка (мобильное меню) -->
                <div class="relative">
                    <button @click="isLanguageDropdownOpen = !isLanguageDropdownOpen" class="px-3 py-2 border rounded hover:bg-gray-100">
                        {{ languages.find(lang => lang.code === currentLanguage)?.name }}
                    </button>
                    <div v-if="isLanguageDropdownOpen" class="absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-lg">
                        <button v-for="lang in languages" :key="lang.code" @click="changeLanguage(lang.code)" class="block w-full text-left px-4 py-2 hover:bg-gray-100">
                            {{ lang.name }}
                        </button>
                    </div>
                </div>
            </ul>
        </nav>
    </header>
</template>
