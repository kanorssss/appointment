<template>
    <div class="container mx-auto px-4">
        <!-- Top bar -->
        <div
            class="flex justify-between items-center py-2 text-sm border-b border-blue-800"
        >
            <div class="flex space-x-4">
                <a href="#" class="hover:text-blue-200">Contact Us</a>
                <a href="#" class="hover:text-blue-200">Help</a>
                <a href="#" class="hover:text-blue-200">Accessibility</a>
            </div>
            <div class="flex space-x-4">
                <select
                    class="bg-blue-800 text-white border border-blue-700 rounded px-2 py-1 text-xs"
                >
                    <option>English</option>
                    <option>Español</option>
                    <option>Français</option>
                </select>
            </div>
        </div>

        <!-- Main header -->
        <div class="flex items-center justify-between py-4">
            <div class="flex items-center space-x-4">
                <div
                    class="w-12 h-12 bg-white rounded-full flex items-center justify-center"
                >
                    <Shield class="w-8 h-8 text-blue-900" />
                </div>
                <div>
                    <h1 class="text-xl font-bold">
                        Local Civil Registry Office
                    </h1>
                    <p class="text-blue-200 text-sm">
                        Centro Penablanca, Cagayan, Philippines
                    </p>
                </div>
            </div>

            <nav class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-blue-200 font-medium">Home</a>
                <a href="#" class="hover:text-blue-200 font-medium">Services</a>
                <a href="#" class="hover:text-blue-200 font-medium"
                    >Resources</a
                >
                <a href="#" class="hover:text-blue-200 font-medium">About</a>
                <!-- <a href="#">Appointment</a> -->
                <router-link
                    :to="{ name: 'AppointmentPage' }"
                    :class="[
                        'hover:text-blue-200 font-medium',
                        isAppointmentActive ? 'underline text-blue-200' : '',
                    ]"
                >
                    Appointment
                </router-link>
            </nav>

            <button @click="$emit('toggle-button')" class="md:hidden">
                <!-- <Menu class="w-6 h-6" /> -->
                <Menu />
            </button>
        </div>
    </div>
</template>

<script setup>
import { Shield } from "lucide-vue-next";
import { Menu } from "lucide-vue-next";
import { useRoute } from "vue-router";
import { computed } from "vue";
const route = useRoute();

const isAppointmentActive = computed(() =>
    route.path.startsWith("/appointment")
);
</script>
