<template>
    <div class="min-h-[400px] container mx-auto px-4 py-8">
        <form @submit.prevent="submitForm">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-medium text-blue-600 mb-4">
                    Request Details - BIRTH CERTIFICATE
                </h2>
                <!-- Top Row - Certificate Selection -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div>
                        <label
                            class="block text-sm font-medium text-gray-700 mb-2"
                            >Certificate Type</label
                        >
                        <div class="relative">
                            <input
                                v-model="certificate_type"
                                type="text"
                                readonly
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700"
                                placeholder="Ex.Birth Certificate"
                            />
                        </div>
                    </div>
                    <div>
                        <label
                            class="block text-sm font-medium text-gray-700 mb-2"
                            >Type of Request</label
                        >
                        <div class="relative">
                            <input
                                v-model="type_of_request"
                                type="text"
                                readonly
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700"
                                placeholder="Ex. Certified True Copy of Birth Certificate"
                                value="Certified True Copy of Birth Certificate"
                            />
                        </div>
                    </div>
                    <div>
                        <label
                            class="block text-sm font-medium text-gray-700 mb-2"
                            >Number of Copies</label
                        >
                        <select
                            v-model="number_of_copies"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        >
                            <option value="">Select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>

                <!-- Certificate Details Section -->
                <div class="mb-6">
                    <h2 class="text-lg font-medium text-blue-600 mb-4">
                        Certificate Details
                    </h2>

                    <!-- Info Notice -->
                    <div class="flex items-start mb-6 text-sm text-gray-600">
                        <svg
                            class="w-4 h-4 mr-2 mt-0.5 text-blue-500"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                        <span>Please enter Maiden Name, if Married Female</span>
                    </div>

                    <!-- Name Fields -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Last Name<span class="text-red-500">*</span>
                            </label>
                            <input
                                v-model="last_name"
                                type="text"
                                placeholder="Last Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                First Name<span class="text-red-500">*</span>
                            </label>
                            <input
                                v-model="first_name"
                                type="text"
                                placeholder="First Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                                >Middle Name</label
                            >
                            <input
                                v-model="middle_name"
                                type="text"
                                placeholder="Middle Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                    </div>

                    <!-- Place of Birth -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Place of Birth (Country)<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                v-model="country"
                                name="country"
                            >
                                <option value="PHILIPPINES">PHILIPPINES</option>
                            </select>
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Place of Birth (Province)<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                v-model="selectedProvince"
                            >
                                <option value="">Select Province</option>
                                <option
                                    v-for="province in provinces"
                                    :key="province.code"
                                    :value="province.name"
                                >
                                    {{ province.name }}
                                </option>
                            </select>
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Place of Birth (City/Municipality)<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                v-model="selectCitiesandMunicipal"
                            >
                                <option value="">
                                    Select Cities and Municipality
                                </option>
                                <option
                                    v-for="place in places"
                                    :key="place.code"
                                    :value="place.name"
                                >
                                    {{ place.name }}
                                </option>
                            </select>
                        </div>
                    </div>

                    <!-- Date of Birth and Sex -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Date of Birth<span class="text-red-500">*</span>
                            </label>
                            <input
                                v-model="date_of_birth"
                                type="date"
                                placeholder="MM/DD/YYYY"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Sex<span class="text-red-500">*</span>
                            </label>
                            <div class="flex items-center space-x-6 mt-2">
                                <label class="flex items-center">
                                    <input
                                        v-model="sex"
                                        type="radio"
                                        name="sex"
                                        value="male"
                                        class="mr-2 text-blue-600 focus:ring-blue-500"
                                    />
                                    <span class="text-gray-700">Male</span>
                                </label>
                                <label class="flex items-center">
                                    <input
                                        type="radio"
                                        name="sex"
                                        value="female"
                                        class="mr-2 text-blue-600 focus:ring-blue-500"
                                    />
                                    <span class="text-gray-700">Female</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Father's Information -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                                >Father's Last Name</label
                            >
                            <input
                                v-model="fathers_last_name"
                                type="text"
                                placeholder="Father's Last Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                                >Father's First Name</label
                            >
                            <input
                                v-model="fathers_first_name"
                                type="text"
                                placeholder="Father's First Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                                >Father's Middle Name</label
                            >
                            <input
                                v-model="fathers_middle_name"
                                type="text"
                                placeholder="Father's Middle Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                    </div>

                    <!-- Mother's Information -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Mother's Maiden Last Name<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="mothers_last_name"
                                name="mothers_last_name"
                                type="text"
                                placeholder="Mother's Last Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Mother's Maiden First Name<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="mothers_first_name"
                                name="mothers_first_name"
                                type="text"
                                placeholder="Mother's First Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                                >Mother's Maiden Middle Name</label
                            >
                            <input
                                name="mothers_middle_name"
                                v-model="mothers_middle_name"
                                type="text"
                                placeholder="Mother's Middle Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                    </div>

                    <!-- Relationship to Document Owner -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Relationship to the Document Owner<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                v-model="relationship_to_the_owner"
                                name="relationship_to_the_owner"
                            >
                                <option value="">
                                    Select Relationship to the Document Owner
                                </option>
                                <option value="self">Self</option>
                                <option value="parent">Parent</option>
                                <option value="spouse">Spouse</option>
                                <option value="child">Child</option>
                                <option value="sibling">Sibling</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                                >Date for Pick up</label
                            >
                            <input
                                v-model="date_for_pickup"
                                type="date"
                                placeholder="Father's First Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                        </div>
                    </div>
                    <button
                        type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mt-6"
                        @click="handleClick"
                    >
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script setup>
import TopHeader from "../../components/TopHeader.vue";
import { ref } from "vue";
import { useProvinces } from "../../views/composable/useProvinces.js";
import { useCityAndMunicipality } from "../../views/composable/cityAndMunicipality.js";
import { useStore } from "vuex";
import Swal from "sweetalert2";
const store = useStore();

// Load provinces and municipalities from composables
const { provinces, loading, error } = useProvinces();
const { places, loading1, error2 } = useCityAndMunicipality();

// Define form fields using ref()
const certificate_type = ref("Birth Certificate");
const type_of_request = ref("Certified True Copy of Birth Certificate");
const number_of_copies = ref("");
const last_name = ref("");
const first_name = ref("");
const middle_name = ref("");
const country = ref("PHILIPPINES");
const selectedProvince = ref("");
const selectCitiesandMunicipal = ref("");
const date_of_birth = ref("");
const sex = ref("");
const fathers_last_name = ref("");
const fathers_first_name = ref("");
const fathers_middle_name = ref("");
const mothers_last_name = ref("");
const mothers_first_name = ref("");
const mothers_middle_name = ref("");
const relationship_to_the_owner = ref("");

// This function sends form data to the Vuex store
const submitForm = async () => {
    const payload = {
        certificate_type: certificate_type.value,
        type_of_request: type_of_request.value,
        number_of_copies: number_of_copies.value,
        last_name: last_name.value,
        first_name: first_name.value,
        middle_name: middle_name.value,
        country: country.value,
        province: selectedProvince.value,
        city_or_municipality: selectCitiesandMunicipal.value,
        date_of_birth: date_of_birth.value,
        sex: sex.value,
        fathers_last_name: fathers_last_name.value,
        fathers_first_name: fathers_first_name.value,
        fathers_middle_name: fathers_middle_name.value,
        mothers_last_name: mothers_last_name.value,
        mothers_first_name: mothers_first_name.value,
        mothers_middle_name: mothers_middle_name.value,
        relationship_to_the_owner: relationship_to_the_owner.value,
    };

    try {
        await store.dispatch("storeCertificate", payload);
        Swal.fire({
            icon: "success",
            title: "Submitted!",
            text: "Your certificate request was successfully submitted.",
        });
        //clear all fields after submission
        certificate_type.value = "Birth Certificate";
        type_of_request.value = "Certified True Copy of Birth Certificate";
        number_of_copies.value = "";
        last_name.value = "";
        first_name.value = "";
        middle_name.value = "";
        country.value = "PHILIPPINES";
        selectedProvince.value = "";
        selectCitiesandMunicipal.value = "";
        date_of_birth.value = "";
        sex.value = "";
        fathers_last_name.value = "";
        fathers_first_name.value = "";
        fathers_middle_name.value = "";
        mothers_last_name.value = "";
        mothers_first_name.value = "";
        mothers_middle_name.value = "";
        relationship_to_the_owner.value = "";
    } catch (error) {
        console.error("Submission error:", error);
        alert("Something went wrong!");
    }
};
</script>
