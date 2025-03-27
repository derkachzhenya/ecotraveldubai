<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue';
import { Link, usePage } from '@inertiajs/vue3';
import { loadLanguageAsync } from 'laravel-vue-i18n';

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

// Инициализация языка при загрузке компонента
const initLanguage = () => {
  const savedLang = localStorage.getItem('lang') || 'ru';
  currentLanguage.value = savedLang;
  loadLanguageAsync(savedLang);
};

// Вызов инициализации при монтировании компонента
onMounted(initLanguage);

const changeLanguage = (langCode) => {
  currentLanguage.value = langCode;
  isLanguageDropdownOpen.value = false;
  localStorage.setItem('lang', langCode);
  loadLanguageAsync(langCode);
};

// Закрытие dropdown при клике вне его области
const languageDropdownRef = ref(null);

const handleClickOutside = (event) => {
  if (
    languageDropdownRef.value && 
    !languageDropdownRef.value.contains(event.target)
  ) {
    isLanguageDropdownOpen.value = false;
  }
};

onMounted(() => {
  document.addEventListener('click', handleClickOutside);
});

onUnmounted(() => {
  document.removeEventListener('click', handleClickOutside);
});
</script>

<template>
  <header class="flex justify-between items-center px-6 md:px-12 py-6 shadow-md relative bg-white">
    <h1 class="text-xl font-bold flex items-center gap-2">
      <Link href="/" class="flex items-center gap-2 no-underline text-green-600">
        EcoTravelDubai
        <img src="/ecotraveldubai.ico" alt="Иконка листочка" class="w-7 h-7">
      </Link>
    </h1>

    <!-- Навигация (десктоп) -->
    <nav class="hidden md:flex items-center gap-4">
      <ul class="flex gap-4">
        <li><a href="/blog" class="hover:underline text-green-600">{{ $t('blog') }}</a></li>
        <li v-if="isAuthenticated">
          <Link :href="route('dashboard')" class="hover:underline text-green-600">Личный кабинет</Link>
        </li>
        <li v-if="!isAuthenticated">
          <Link :href="route('login')" class="hover:underline text-green-600">{{ $t('login')  }}</Link>
        </li>
        <li v-if="!isAuthenticated && canRegister">
          <Link :href="route('register')" class="hover:underline text-green-600">{{ $t('register')  }}</Link>
        </li>
      </ul>

      <!-- Переключатель языка -->
      <div 
        ref="languageDropdownRef" 
        class="relative"
      >
        <button 
          @click.stop="isLanguageDropdownOpen = !isLanguageDropdownOpen" 
          class="px-4 py-2 border rounded-md bg-white text-gray-700 shadow-sm hover:bg-gray-100 transition">
          {{ languages.find(lang => lang.code === currentLanguage)?.name }}
        </button>

        <div 
          v-if="isLanguageDropdownOpen" 
          class="absolute right-0 mt-2 w-40 bg-white border rounded-md shadow-lg z-50">
          <button 
            v-for="lang in languages" 
            :key="lang.code" 
            @click="changeLanguage(lang.code)" 
            class="block w-full text-left px-4 py-2 hover:bg-gray-100">
            {{ lang.name }}
          </button>
        </div>
      </div>
    </nav>

    <!-- Остальной код остается без изменений -->
  </header>
</template>