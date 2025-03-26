<template>
    <footer class="py-8 bg-green-700 text-white">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- О нас -->
            <div>
                <h4 class="text-lg font-bold mb-2">О нас</h4>
                <p class="text-sm text-gray-200">
                    <strong>EcoTravelDubai</strong> – ваш гид по экологичной жизни и путешествиям в Дубае.
                </p>
            </div>
            
            <!-- Полезные ссылки -->
            <nav aria-label="Полезные ссылки">
                <h4 class="text-lg font-bold mb-2">Полезные ссылки</h4>
                <ul class="text-sm text-gray-200 space-y-2">
                    <li><a href="/" class="hover:underline">Главная</a></li>
                    <li><a href="/blog" class="hover:underline">Блог</a></li>
                    <li><a href="/eco-guide" class="hover:underline">Гид по эко-местам</a></li>
                    <li><a href="/contact" class="hover:underline">Контакты</a></li>
                </ul>
            </nav>

            <!-- Рекламодателям -->
            <div>
                <h4 class="text-lg font-bold mb-2">Рекламодателям</h4>
                <ul class="text-sm text-gray-200 space-y-2">
                    <li><a href="/advertise" rel="nofollow" class="hover:underline">Разместить рекламу</a></li>
                    <li><a href="/pricing" rel="nofollow" class="hover:underline">Тарифы и условия</a></li>
                    <li><a href="/partners" rel="nofollow" class="hover:underline">Партнерская программа</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-6 text-center text-sm text-gray-300 border-t border-green-500 pt-4">
            <p>© 2025 <strong>EcoTravelDubai</strong>. Все права защищены.</p>
            <p class="mt-2">
                <a href="/privacy-policy" class="hover:underline">Политика конфиденциальности</a> |
                <a href="/terms-of-service" class="hover:underline">Пользовательское соглашение</a>
            </p>
        </div>
    </footer>
</template>
