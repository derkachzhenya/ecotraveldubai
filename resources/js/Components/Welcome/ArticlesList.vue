<script setup>

</script>

<template>
    <section class="py-16 px-6">
        <h3 class="text-2xl font-bold text-center mb-8">Популярные статьи</h3>
        <!-- Раздел  -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Карточка 1 -->
            <div class="p-6 shadow-lg rounded-lg bg-white hover:shadow-xl transition-shadow duration-300">
                <img src="/img/1.jpg" alt="Эко-экскурсии в Дубае" class="w-full h-48 object-cover rounded-t-lg">
                <div class="mt-4">
                    <h4 class="text-xl font-semibold">Лучшие эко-экскурсии в Дубае</h4>
                    <p class="text-gray-600 mt-2">Где найти самые зелёные маршруты?</p>
                </div>
            </div>

            <!-- Карточка 2 -->
            <div class="p-6 shadow-lg rounded-lg bg-white hover:shadow-xl transition-shadow duration-300">
                <img src="/img/2.jpg" alt="Эко-рестораны в Дубае" class="w-full h-48 object-cover rounded-t-lg">
                <div class="mt-4">
                    <h4 class="text-xl font-semibold">Эко-рестораны в Дубае</h4>
                    <p class="text-gray-600 mt-2">Где попробовать блюда из органических продуктов?</p>
                </div>
            </div>

            <!-- Карточка 3 -->
            <div class="p-6 shadow-lg rounded-lg bg-white hover:shadow-xl transition-shadow duration-300">
                <img src="/img/3.jpg" alt="Эко-транспорт в Дубае" class="w-full h-48 object-cover rounded-t-lg">
                <div class="mt-4">
                    <h4 class="text-xl font-semibold">Эко-транспорт в Дубае</h4>
                    <p class="text-gray-600 mt-2">Как передвигаться по городу с пользой для природы?</p>
                </div>
            </div>
        </div>
    
    </section>

    <section class="py-16 px-6 bg-green-50">
        <h3 class="text-2xl font-bold text-center mb-8">Эко-советы дня</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Карточка 1 -->
            <div class="p-6 shadow-lg rounded-lg bg-white hover:shadow-xl transition-shadow duration-300">
                <img src="/img/eco-tip-1.jpg" alt="Совет 1" class="w-full h-48 object-cover rounded-t-lg">
                <div class="mt-4">
                    <h4 class="text-xl font-semibold">Используйте многоразовые бутылки</h4>
                    <p class="text-gray-600 mt-2">Замените пластиковые бутылки на многоразовые, чтобы сократить отходы.
                    </p>
                    <a href="#"
                        class="inline-block mt-4 px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-300">
                        Подробнее
                    </a>
                </div>
            </div>

            <!-- Карточка 2 -->
            <div class="p-6 shadow-lg rounded-lg bg-white hover:shadow-xl transition-shadow duration-300">
                <img src="/img/eco-tip-2.jpg" alt="Совет 2" class="w-full h-48 object-cover rounded-t-lg">
                <div class="mt-4">
                    <h4 class="text-xl font-semibold">Сортируйте мусор</h4>
                    <p class="text-gray-600 mt-2">Начните сортировать отходы, чтобы помочь переработке.</p>
                    <a href="#"
                        class="inline-block mt-4 px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-300">
                        Подробнее
                    </a>
                </div>
            </div>

            <!-- Карточка 3 -->
            <div class="p-6 shadow-lg rounded-lg bg-white hover:shadow-xl transition-shadow duration-300">
                <img src="/img/eco-tip-3.jpg" alt="Совет 3" class="w-full h-48 object-cover rounded-t-lg">
                <div class="mt-4">
                    <h4 class="text-xl font-semibold">Экономьте воду</h4>
                    <p class="text-gray-600 mt-2">Закрывайте кран, когда чистите зубы, чтобы сэкономить воду.</p>
                    <a href="#"
                        class="inline-block mt-4 px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-300">
                        Подробнее
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
       
    <!-- Полезная информация для пользователей -->
    <div class="mt-12 text-center bg-green-100 p-8 rounded-lg">
        <h4 class="text-2xl font-semibold">Как начать экологический туризм в Дубае?</h4>
        <div class="text-gray-700 mt-4">
            <p>Экологический туризм в Дубае — это отличная возможность поддержать местную природу
            и узнать больше о культурных и природных особенностях региона. Вот несколько советов, как начать:</p>
            <ul class="list-disc list-inside text-left text-gray-600 mt-4">
                <li>Выбирайте эко-отели, которые придерживаются принципов устойчивости.</li>
                <li>Используйте общественный транспорт или электромобили, чтобы снизить углеродный след.</li>
                <li>Участвуйте в эко-экскурсиях, которые помогут вам узнать больше о природе Дубая.</li>
                <li>Поддерживайте местные эко-рестораны, которые используют органические продукты.</li>
            </ul>
        </div>
        <a href="#"
            class="inline-block mt-6 px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-300">
            Узнать больше
        </a>
    </div>

    </section>





</template>
