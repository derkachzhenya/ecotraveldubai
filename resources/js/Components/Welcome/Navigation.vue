<template>
    <div>
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
        <nav class="hidden md:flex items-center gap-4">
            <ul class="flex gap-4">
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
            </ul>
            
            <!-- Иконка выбора языка -->
            <div class="ml-4 flex items-center space-x-2">
                <button @click="toggleLanguage" class="flex items-center">
                    <span class="text-sm">{{ selectedLanguage }}</span>
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
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
                
                <!-- Иконка выбора языка в мобильном меню -->
                <li>
                    <button @click="toggleLanguage" class="flex items-center">
                        <span class="text-sm">{{ selectedLanguage }}</span>
                        <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </li>
            </ul>
        </nav>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

// Состояние меню
const menuOpen = ref(false);
const selectedLanguage = ref('EN');

// Пропсы
defineProps({
    isAuthenticated: {
        type: Boolean,
        required: true,
    },
    canRegister: {
        type: Boolean,
        required: true,
    },
});

// Функция смены языка (без логики)
const toggleLanguage = () => {
    selectedLanguage.value = selectedLanguage.value === 'EN' ? 'RU' : 'EN';
};
</script>
