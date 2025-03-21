<script setup>
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import Header from '@/Components/Welcome/Header.vue';
import BannerSection from '@/Components/Welcome/BannerSection.vue';
import ArticlesList from '@/Components/Welcome/ArticlesList.vue';
import NewsletterForm from '@/Components/Welcome/NewsletterForm.vue';
import Footer from '@/Components/Welcome/Footer.vue';



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

    <Head>
        <title>EcoTravelDubai - Экологический туризм в Дубае</title>
        <meta name="description"
            content="Откройте для себя эко-туризм в Дубае: лучшие эко-отели, устойчивые маршруты и полезные советы.">
        <meta name="keywords" content="эко-туризм, Дубай, эко-отели, устойчивый туризм, экология в ОАЭ">
        <meta property="og:title" content="EcoTravelDubai - Экологичный туризм в Дубае">
        <meta property="og:description"
            content="Гид по экологичным путешествиям в Дубае. Лучшие эко-отели, экскурсии и советы.">
        <meta property="og:image" content="/ecotraveldubai-banner.jpg">
        <meta property="og:url" content="https://ecotraveldubai.com">
        <link rel="canonical" href="https://ecotraveldubai.com">
    </Head>
    <div class="min-h-screen bg-white text-gray-900">
        <!-- Хедер -->
        <Header />

        <!-- Главный баннер -->
        <BannerSection />

        <!-- Популярные статьи -->
        <ArticlesList />

        <!-- Призыв к подписке -->
        <NewsletterForm />

        <!-- Подвал -->
        <Footer />
    </div>
</template>
