<template>
    <div>
        <div class="bg-blue-900 text-white shadow-lg">
            <TopHeader />
        </div>
        <router-view />
        <div v-if="route.path === '/appointment'">
            <main class="container mx-auto px-4 py-8 mt-20">
                <div class="max-w-4xl mx-auto">
                    <!-- Top row with 3 certificates -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div
                            v-for="cert in topRowCertificates"
                            :key="cert.id"
                            :class="[
                                'relative p-6 rounded-xl border-2 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105',
                                cert.borderColor,
                                cert.bgColor,
                            ]"
                            @click="handleCertificateClick(cert)"
                        >
                            <!-- Same card content as before -->
                            <div class="flex items-center space-x-4">
                                <div
                                    :class="[
                                        'p-3 rounded-lg bg-white shadow-sm',
                                        cert.color,
                                    ]"
                                >
                                    <component
                                        :is="cert.icon"
                                        :size="32"
                                        :stroke-width="1.5"
                                    />
                                </div>
                                <div class="flex-1">
                                    <h3
                                        :class="[
                                            'text-xl font-bold',
                                            cert.color,
                                        ]"
                                    >
                                        {{ cert.title }}
                                    </h3>
                                    <p
                                        v-if="cert.subtitle"
                                        :class="[
                                            'text-lg font-semibold',
                                            cert.color,
                                        ]"
                                    >
                                        {{ cert.subtitle }}
                                    </p>
                                </div>
                            </div>

                            <div class="mt-4 space-y-1 opacity-30">
                                <div
                                    :class="[
                                        'h-1 rounded w-3/4',
                                        cert.bgLineColor,
                                    ]"
                                ></div>
                                <div
                                    :class="[
                                        'h-1 rounded w-1/2',
                                        cert.bgLineColor,
                                    ]"
                                ></div>
                                <div
                                    :class="[
                                        'h-1 rounded w-2/3',
                                        cert.bgLineColor,
                                    ]"
                                ></div>
                            </div>

                            <div
                                :class="[
                                    'absolute bottom-3 right-3 w-8 h-8 rounded-full border-2 opacity-50',
                                    cert.borderColor,
                                    cert.bgColor,
                                ]"
                            >
                                <div
                                    :class="[
                                        'w-full h-full rounded-full border m-0.5',
                                        cert.borderColor,
                                    ]"
                                ></div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom row with 2 certificates centered -->
                    <div class="flex justify-center">
                        <div
                            class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl"
                        >
                            <div
                                v-for="cert in bottomRowCertificates"
                                :key="cert.id"
                                :class="[
                                    'relative p-6 rounded-xl border-2 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105',
                                    cert.borderColor,
                                    cert.bgColor,
                                ]"
                                @click="handleCertificateClick(cert)"
                            >
                                <!-- Same card content as before -->
                                <div class="flex items-center space-x-4">
                                    <div
                                        :class="[
                                            'p-3 rounded-lg bg-white shadow-sm',
                                            cert.color,
                                        ]"
                                    >
                                        <component
                                            :is="cert.icon"
                                            :size="32"
                                            :stroke-width="1.5"
                                        />
                                    </div>
                                    <div class="flex-1">
                                        <h3
                                            :class="[
                                                'text-xl font-bold',
                                                cert.color,
                                            ]"
                                        >
                                            {{ cert.title }}
                                        </h3>
                                        <p
                                            v-if="cert.subtitle"
                                            :class="[
                                                'text-lg font-semibold',
                                                cert.color,
                                            ]"
                                        >
                                            {{ cert.subtitle }}
                                        </p>
                                    </div>
                                </div>

                                <div class="mt-4 space-y-1 opacity-30">
                                    <div
                                        :class="[
                                            'h-1 rounded w-3/4',
                                            cert.bgLineColor,
                                        ]"
                                    ></div>
                                    <div
                                        :class="[
                                            'h-1 rounded w-1/2',
                                            cert.bgLineColor,
                                        ]"
                                    ></div>
                                    <div
                                        :class="[
                                            'h-1 rounded w-2/3',
                                            cert.bgLineColor,
                                        ]"
                                    ></div>
                                </div>

                                <div
                                    :class="[
                                        'absolute bottom-3 right-3 w-8 h-8 rounded-full border-2 opacity-50',
                                        cert.borderColor,
                                        cert.bgColor,
                                    ]"
                                >
                                    <div
                                        :class="[
                                            'w-full h-full rounded-full border m-0.5',
                                            cert.borderColor,
                                        ]"
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        <footer class="bg-gray-800 text-white mt-45">
            <FooterContent />
        </footer>
    </div>
</template>

<script setup>
import TopHeader from "../components/TopHeader.vue";
import { ref } from "vue";
import { FileText, Heart, Skull, User, UserX } from "lucide-vue-next";
import FooterContent from "../components/FooterContent.vue";
import { useRouter, useRoute } from "vue-router";

const router = useRouter(); //navigate to the router
const route = useRoute(); //get the current route

const topRowCertificates = ref([
    {
        id: "birth",
        title: "Birth",
        subtitle: "Certificate",
        icon: FileText,
        color: "text-blue-500",
        borderColor: "border-blue-200",
        bgColor: "bg-blue-50",
        bgLineColor: "bg-blue-500",
    },
    {
        id: "marriage",
        title: "Marriage",
        subtitle: "Certificate",
        icon: Heart,
        color: "text-red-500",
        borderColor: "border-red-200",
        bgColor: "bg-red-50",
        bgLineColor: "bg-red-500",
    },
    {
        id: "death",
        title: "Death",
        subtitle: "Certificate",
        icon: Skull,
        color: "text-gray-500",
        borderColor: "border-gray-200",
        bgColor: "bg-gray-50",
        bgLineColor: "bg-gray-500",
    },
]);

const bottomRowCertificates = ref([
    {
        id: "cenomar",
        title: "CENOMAR",
        subtitle: "",
        icon: User,
        color: "text-yellow-600",
        borderColor: "border-yellow-200",
        bgColor: "bg-yellow-50",
        bgLineColor: "bg-yellow-600",
    },
    {
        id: "cenodeath",
        title: "CENODEATH",
        subtitle: "",
        icon: UserX,
        color: "text-green-600",
        borderColor: "border-green-200",
        bgColor: "bg-green-50",
        bgLineColor: "bg-green-600",
    },
]);

const handleCertificateClick = (certificate) => {
    console.log("Clicked:", certificate);

    if (certificate.id === "birth") {
        router.push("/appointment/birth");
    }
    if (certificate.id === "death") {
        router.push("/appointment/death");
    }
    if (certificate.id === "marriage") {
        router.push("/appointment/marriage");
    }
};
</script>
