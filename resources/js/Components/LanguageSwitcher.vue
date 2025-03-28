<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import { loadLanguageAsync } from 'laravel-vue-i18n';

const languages = [
  { code: 'ru', name: 'Русский' },
  { code: 'en', name: 'English' },
  { code: 'ar', name: 'العربية' }
];

const currentLanguage = ref('ru');
const isDropdownOpen = ref(false);
const dropdownRef = ref(null);

// Инициализация текущего языка
const initLanguage = () => {
  const savedLang = localStorage.getItem('lang') || 'ru';
  currentLanguage.value = savedLang;
  loadLanguageAsync(savedLang);
};

// Изменение языка
const changeLanguage = (langCode) => {
  currentLanguage.value = langCode;
  isDropdownOpen.value = false;
  localStorage.setItem('lang', langCode);
  loadLanguageAsync(langCode);
};

// Закрытие дропдауна при клике вне его области
const handleClickOutside = (event) => {
  if (dropdownRef.value && !dropdownRef.value.contains(event.target)) {
    isDropdownOpen.value = false;
  }
};

onMounted(() => {
  initLanguage();
  document.addEventListener('click', handleClickOutside);
});

onUnmounted(() => {
  document.removeEventListener('click', handleClickOutside);
});
</script>

<template>
  <div ref="dropdownRef" class="relative">
    <button 
      @click.stop="isDropdownOpen = !isDropdownOpen" 
      class="px-4 py-2 border rounded-md bg-white text-gray-700 shadow-sm hover:bg-gray-100 transition">
      {{ languages.find(lang => lang.code === currentLanguage)?.name }}
    </button>

    <div 
      v-if="isDropdownOpen" 
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
</template>
