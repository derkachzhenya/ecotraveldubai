<script setup>
import Header from '@/Components/Welcome/Header.vue';
import Footer from '@/Components/Welcome/Footer.vue';
</script>

<template>
  <Header />
  <div class="container mx-auto px-4 py-16 max-w-3xl">
    <h1 class="text-4xl font-bold text-center mb-6">Contact Us</h1>
    <p class="text-gray-700 text-center mb-6">
      Have any questions or need more information about eco-tourism in Dubai? Feel free to reach out to us.
    </p>

    <div class="space-y-6">
      <div>
        <h2 class="text-2xl font-semibold">Email</h2>
        <p class="text-gray-700">
          <a href="mailto:contact@ecotraveldubai.com" class="text-green-600 underline">contact@ecotraveldubai.com</a>
        </p>
      </div>

      <div>
        <h2 class="text-2xl font-semibold">Phone</h2>
        <p class="text-gray-700">
          <a href="tel:+971123456789" class="text-green-600 underline">+971 123 456 789</a>
        </p>
      </div>

      <div>
        <h2 class="text-2xl font-semibold">WhatsApp</h2>
        <p class="text-gray-700">
          <a href="https://wa.me/971123456789" class="text-green-600 underline">Chat with us on WhatsApp</a>
        </p>
      </div>

      <div>
        <h2 class="text-2xl font-semibold">Address</h2>
        <p class="text-gray-700">Dubai, UAE</p>
      </div>

      <div>
        <h2 class="text-2xl font-semibold">Follow Us</h2>
        <div class="flex space-x-4 mt-2">
          <a href="#" class="text-green-600 hover:underline">Facebook</a>
          <a href="#" class="text-green-600 hover:underline">Instagram</a>
          <a href="#" class="text-green-600 hover:underline">Twitter</a>
          <a href="#" class="text-green-600 hover:underline">LinkedIn</a>
        </div>
      </div>
    </div>
  </div>
  <Footer />
</template>
