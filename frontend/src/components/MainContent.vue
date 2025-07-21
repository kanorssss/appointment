<template>
    <!-- Hero Section -->
    <section
        class="bg-gradient-to-r from-blue-600 to-blue-800 text-white rounded-lg p-8 mb-8"
    >
        <div class="max-w-3xl">
            <h2 class="text-3xl font-bold mb-4">Welcome to Citizen Services</h2>
            <p class="text-xl mb-6 text-blue-100">
                Access government services, apply for permits, pay taxes, and
                more through our secure online portal.
            </p>
            <div class="flex flex-col sm:flex-row gap-4">
                <button
                    class="bg-white text-blue-800 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors"
                >
                    Get Started
                </button>
                <button
                    class="border-2 border-white text-white px-6 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-800 transition-colors"
                >
                    Learn More
                </button>
            </div>
        </div>
    </section>

    <!-- Quick Services -->
    <section class="mb-12">
        <h3 class="text-2xl font-bold text-gray-900 mb-6">Quick Services</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
                v-for="service in quickServices"
                :key="service.title"
                class="bg-white p-6 rounded-lg shadow-md border border-gray-200 hover:shadow-lg transition-shadow cursor-pointer"
            >
                <component
                    :is="service.icon"
                    class="w-8 h-8 text-blue-600 mb-4"
                />
                <h4 class="font-semibold text-gray-900 mb-2">
                    {{ service.title }}
                </h4>
                <p class="text-gray-600 text-sm">
                    {{ service.description }}
                </p>
            </div>
        </div>
    </section>

    <!-- News & Updates -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
        <div class="lg:col-span-2">
            <h3 class="text-2xl font-bold text-gray-900 mb-6">
                Latest News & Updates
            </h3>
            <div class="space-y-6">
                <article
                    v-for="article in newsArticles"
                    :key="article.id"
                    class="bg-white p-6 rounded-lg shadow-md border border-gray-200"
                >
                    <div class="flex items-start justify-between mb-4">
                        <span
                            class="bg-red-100 text-red-800 text-xs font-semibold px-2.5 py-0.5 rounded"
                        >
                            {{ article.category }}
                        </span>
                        <time class="text-gray-500 text-sm">{{
                            article.date
                        }}</time>
                    </div>
                    <h4 class="text-lg font-semibold text-gray-900 mb-2">
                        {{ article.title }}
                    </h4>
                    <p class="text-gray-600 mb-4">
                        {{ article.excerpt }}
                    </p>
                    <a
                        href="#"
                        class="text-blue-600 hover:text-blue-800 font-medium text-sm"
                    >
                        Read more →
                    </a>
                </article>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="space-y-6">
            <!-- Emergency Alert -->
            <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded">
                <div class="flex items-start">
                    <AlertTriangle class="w-5 h-5 text-red-400 mt-0.5 mr-3" />
                    <div>
                        <h4 class="text-red-800 font-semibold">
                            Emergency Alert
                        </h4>
                        <p class="text-red-700 text-sm mt-1">
                            Road closure on Main St. due to construction.
                            Expected completion: Dec 15.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Information -->
            <div
                class="bg-white p-6 rounded-lg shadow-md border border-gray-200"
            >
                <h4 class="font-semibold text-gray-900 mb-4">
                    Contact Information
                </h4>
                <div class="space-y-3 text-sm">
                    <div class="flex items-center">
                        <Phone class="w-4 h-4 text-gray-400 mr-3" />
                        <span>(555) 123-4567</span>
                    </div>
                    <div class="flex items-center">
                        <Mail class="w-4 h-4 text-gray-400 mr-3" />
                        <span>info@government.gov</span>
                    </div>
                    <div class="flex items-start">
                        <MapPin class="w-4 h-4 text-gray-400 mr-3 mt-0.5" />
                        <span>123 Government Plaza<br />City, State 12345</span>
                    </div>
                </div>
            </div>

            <!-- Office Hours -->
            <div
                class="bg-white p-6 rounded-lg shadow-md border border-gray-200"
            >
                <h4 class="font-semibold text-gray-900 mb-4">Office Hours</h4>
                <div class="space-y-2 text-sm">
                    <div class="flex justify-between">
                        <span>Monday - Friday</span>
                        <span>8:00 AM - 5:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Saturday</span>
                        <span>9:00 AM - 1:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sunday</span>
                        <span>Closed</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import {
    Shield,
    Menu,
    ChevronRight,
    FileText,
    CreditCard,
    Building,
    Users,
    AlertTriangle,
    Phone,
    Mail,
    MapPin,
} from "lucide-vue-next";
import { ref } from "vue";
const quickServices = ref([
    {
        title: "Apply for Permits",
        description:
            "Submit applications for building, business, and other permits online.",
        icon: FileText,
    },
    {
        title: "Pay Taxes",
        description:
            "Pay property taxes, business taxes, and other fees securely.",
        icon: CreditCard,
    },
    {
        title: "Business Services",
        description:
            "Register your business, renew licenses, and access resources.",
        icon: Building,
    },
    {
        title: "Citizen Resources",
        description: "Access forms, documents, and information for residents.",
        icon: Users,
    },
]);

const newsArticles = ref([
    {
        id: 1,
        title: "New Online Portal Launched for Business Licenses",
        excerpt:
            "We are excited to announce the launch of our new streamlined online portal for business license applications and renewals.",
        category: "ANNOUNCEMENT",
        date: "Dec 10, 2024",
    },
    {
        id: 2,
        title: "Holiday Schedule for Government Offices",
        excerpt:
            "Please note the modified hours and closures for government offices during the upcoming holiday season.",
        category: "NOTICE",
        date: "Dec 8, 2024",
    },
    {
        id: 3,
        title: "Public Hearing: Proposed Budget Changes",
        excerpt:
            "Join us for a public hearing to discuss proposed changes to the municipal budget for the upcoming fiscal year.",
        category: "PUBLIC MEETING",
        date: "Dec 5, 2024",
    },
]);
</script>
