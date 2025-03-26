<script setup>
import Header from '@/Components/Welcome/Header.vue';
import Footer from '@/Components/Welcome/Footer.vue';
</script>

<template>
  <Header />
  <div class="max-w-3xl mx-auto py-12 px-4">
    <h1 class="text-4xl font-bold text-center mb-6">Privacy Policy</h1>
    <p class="text-black text-center mb-4"><strong>Effective Date:</strong> [Specify Date]</p>
    <p class="text-black text-center mb-6"><strong>Last Updated:</strong> [Specify Date]</p>

    <section class="mb-6">
      <h2 class="text-2xl font-semibold">1. Introduction</h2>
      <p class="text-black mt-2">Welcome to Your Website Name. Your privacy is important to us. This Privacy Policy explains how we collect, use, and protect your personal data.</p>
    </section>
    
    <section class="mb-6">
      <h2 class="text-2xl font-semibold">2. Information We Collect</h2>
      <p class="text-black mt-2">We collect personal data such as your name, email, and browsing behavior. For more details, visit our <a href="/terms-of-service" class="underline">Terms of Service</a>.</p>
    </section>
    
    <section class="mb-6">
      <h2 class="text-2xl font-semibold">3. How We Use Your Information</h2>
      <p class="text-black mt-2">We use your data to improve our services, personalize content, and ensure security.</p>
    </section>
    
    <section class="mb-6">
      <h2 class="text-2xl font-semibold">4. Your Rights</h2>
      <p class="text-black mt-2">You have the right to access, correct, or delete your personal data. Contact us at <a href="mailto:privacy@yourwebsite.com" class="underline">privacy@yourwebsite.com</a>.</p>
    </section>

    <section class="mb-6">
      <h2 class="text-2xl font-semibold">5. Contact Us</h2>
      <p class="text-black mt-2">If you have any questions about this Privacy Policy, please contact us at <a href="mailto:support@yourwebsite.com" class="underline">support@yourwebsite.com</a>.</p>
    </section>
  </div>
  <Footer />
</template>
