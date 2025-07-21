<template>
    <div class="min-h-screen bg-gray-50">
        <!-- Header -->

        <header class="bg-blue-900 text-white shadow-lg">
            <TopHeader @toggle-button="toggleMobileMenu" />
        </header>

        <!-- Mobile Menu -->
        <div v-if="showMobileMenu" class="md:hidden bg-blue-800 text-white">
            <MobileMenu @close="showMobileMenu = false" />
        </div>
        <!-- Breadcrumb -->
        <div class="bg-white border-b">
            <BreadCrumb />
        </div>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-8">
            <MainContent />
        </main>
        <router-view />
        <!-- Footer -->
        <footer class="bg-gray-800 text-white">
            <FooterContent />
        </footer>
    </div>
</template>
<script setup>
import { ref } from "vue";

import TopHeader from "../components/TopHeader.vue";
import MobileMenu from "../components/MobileMenu.vue";
import BreadCrumb from "../components/BreadCrumb.vue";
import MainContent from "../components/MainContent.vue";
import FooterContent from "../components/FooterContent.vue";

const showMobileMenu = ref(false);

const toggleMobileMenu = () => {
    showMobileMenu.value = !showMobileMenu.value;
};
</script>
