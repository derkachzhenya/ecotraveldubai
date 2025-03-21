<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>

    <Head title="EcoTravelDubai - Экологический туризм в Дубае" />
    <div class="min-h-screen bg-white text-gray-900">
        <!-- Хедер -->
        <header class="flex justify-between items-center px-12 py-6 shadow-md bg-green-600 text-white">
            <h1 class="text-xl font-bold flex items-center gap-2">
                EcoTravelDubai
                <img src="/ecotraveldubai.ico" alt="Иконка листочка" class="w-7 h-7"> <!-- Иконка -->
            </h1>
            <nav v-if="canLogin">
                <ul class="flex gap-4">
                    <li><a href="#" class="hover:underline">Блог</a></li>
                    <li><a href="#" class="hover:underline">Гид</a></li>
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="hover:underline">
                    Dashboard
                    </Link>
                    <li>
                        <Link :href="route('login')" class="hover:underline">Логин</Link>
                    </li>
                    <li>
                        <Link v-if="canRegister" :href="route('register')" class="hover:underline">Регистрация</Link>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Главный баннер -->
        <section class="text-center py-20 bg-green-100">
            <h2 class="text-4xl font-bold mb-4">Экологичный Дубай: Путешествуй осознанно</h2>
            <p class="text-lg mb-6">Откройте для себя эко-отели, эко-туризм и устойчивый образ жизни</p>
            <button class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">Скачать гид по
                эко-отелям</button>
        </section>

        <!-- Популярные статьи -->
        <section class="py-16 px-6">
            <h3 class="text-2xl font-bold text-center mb-8">Популярные статьи</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-4 shadow-lg rounded-lg bg-white">
                    <h4 class="text-xl font-semibold">ТОП-10 эко-отелей в Дубае (2024)</h4>
                    <p class="text-gray-600">Где остановиться, чтобы жить экологично?</p>
                </div>
                <div class="p-4 shadow-lg rounded-lg bg-white">
                    <h4 class="text-xl font-semibold">Как вести экологичный образ жизни в ОАЭ?</h4>
                    <p class="text-gray-600">Практические советы для жителей и туристов.</p>
                </div>
                <div class="p-4 shadow-lg rounded-lg bg-white">
                    <h4 class="text-xl font-semibold">Лучшие эко-экскурсии в Дубае</h4>
                    <p class="text-gray-600">Где найти самые зелёные маршруты?</p>
                </div>
            </div>
        </section>



        <!-- Призыв к подписке -->
        <section class="text-center py-16 bg-green-50">
            <h3 class="text-2xl font-bold mb-4">Хотите больше полезных материалов?</h3>
            <p class="text-lg mb-6">Подпишитесь на нашу рассылку и получайте актуальные новости об экологии и туризме.
            </p>
            <button class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-green-700">Подписаться</button>
        </section>

        <!-- Подвал -->
        <footer class="py-8 bg-green-700 text-white">
            <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-4 gap-6">
                <!-- О нас -->
                <div>
                    <h4 class="text-lg font-bold mb-2">О нас</h4>
                    <p class="text-sm text-gray-200">EcoTravelDubai – ваш гид по экологичной жизни и путешествиям в
                        Дубае.</p>
                </div>
                <!-- Полезные ссылки -->
                <div>
                    <h4 class="text-lg font-bold mb-2">Полезные ссылки</h4>
                    <ul class="text-sm text-gray-200 space-y-2">
                        <li><a href="#" class="hover:underline">Главная</a></li>
                        <li><a href="#" class="hover:underline">Блог</a></li>
                        <li><a href="#" class="hover:underline">Гид по эко-местам</a></li>
                        <li><a href="#" class="hover:underline">Контакты</a></li>
                    </ul>
                </div>
                <!-- Рекламодателям -->
                <div>
                    <h4 class="text-lg font-bold mb-2">Рекламодателям</h4>
                    <ul class="text-sm text-gray-200 space-y-2">
                        <li><a href="#" class="hover:underline">Разместить рекламу</a></li>
                        <li><a href="#" class="hover:underline">Тарифы и условия</a></li>
                        <li><a href="#" class="hover:underline">Партнерская программа</a></li>
                    </ul>
                </div>
                <!-- Подписка и соцсети -->
                <div>
                    <h4 class="text-lg font-bold mb-2">Подпишитесь на нас</h4>
                    <p class="text-sm text-gray-200 mb-2">Получайте новости об экологии в Дубае</p>
                    <form class="flex">
                        <input type="email" placeholder="Ваш email" class="px-3 py-2 rounded-l-md text-gray-900">
                        <button class="bg-green-500 px-4 py-2 rounded-r-md hover:bg-green-600">OK</button>
                    </form>
                </div>
            </div>
            <div class="mt-6 text-center text-sm text-gray-300 border-t border-green-500 pt-4">
                <p>© 2025 EcoTravelDubai. Все права защищены.</p>
                <p class="mt-2">
                    <a href="#" class="hover:underline">Политика конфиденциальности</a> |
                    <a href="#" class="hover:underline">Пользовательское соглашение</a>
                </p>
            </div>
        </footer>
    </div>
</template>
