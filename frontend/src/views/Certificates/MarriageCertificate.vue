<template>
    <div class="min-h-[400px] container mx-auto px-4 py-8">
        <form @submit.prevent="handleSubmitForMarriageCert">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-medium text-blue-600 mb-4">
                    Request Details - MARRIAGE
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
                                v-model="form.certificate_type"
                                type="text"
                                readonly
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700"
                                required
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
                                v-model="form.type_of_request"
                                type="text"
                                readonly
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-gray-100 text-gray-700"
                                placeholder="Ex. Certified True Copy of Birth Certificate"
                                required
                            />
                        </div>
                    </div>
                    <div>
                        <label
                            class="block text-sm font-medium text-gray-700 mb-2"
                            >Number of Copies</label
                        >
                        <select
                            v-model="form.number_of_copies"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
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
                <!-- Certificate Details -->
                <div class="mb-6">
                    <h2 class="text-lg font-medium text-blue-600 mb-4">
                        Certificate Details
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Husband's Last name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="form.husband_last_name"
                                type="text"
                                placeholder="Husband Last Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Husband's Middle name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="form.husband_middle_name"
                                type="text"
                                placeholder="Husband Middle Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Husband's First name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="form.husband_first_name"
                                type="text"
                                placeholder="Husband first Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Wife's Last name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="form.wife_first_name"
                                type="text"
                                placeholder="Wife first Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            />
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Wife's Middle Name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="form.wife_middle_name"
                                type="text"
                                placeholder="Wife Middle Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Wife's Last Name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="form.wife_last_name"
                                type="text"
                                placeholder="Wife Last Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            />
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Place of Marriage (Country)<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                v-model="form.country"
                                name="country"
                                required
                            >
                                <option value="">Select Country</option>
                                <option value="PHILIPPINES">PHILIPPINES</option>
                            </select>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Place of Marriage (Province)<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                v-model="form.province"
                                name="province"
                                required
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
                                Place of Marriage (City/Municipality)<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                v-model="form.city_or_municipality"
                                name="provide"
                                required
                            >
                                <option value="">
                                    Select Municipality/City
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

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Date of Marriage<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="form.date_of_marriage"
                                type="date"
                                placeholder="Wife Middle Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div>
                            <!-- <h2 class="text-lg font-medium text-blue-600 mb-4">
                                Embassy or Government Agency Details
                            </h2> -->
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Relationship to the owner<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                v-model="form.purpose"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            >
                                <option value="">Select</option>
                                <option
                                    value=" AUTHORIZED GUARDIAN/INSTITUTION IN CHARAGE"
                                >
                                    AUTHORIZED GUARDIAN/INSTITUTION IN CHARGE
                                </option>
                                <option value="BROTHER">BROTHER</option>
                                <option value="COUSIN">COUSIN</option>
                                <option value="DAUGTHER">DAUGTHER</option>
                                <option value="FATHER">FATHER</option>
                                <option value="GRANDCHILD">GRANDCHILD</option>
                                <option value="SON">SON</option>
                                <option value="SPOUSE">SPOUSE</option>
                                <option value="SISTER">SISTER</option>
                                <option value="UNCLE/AUTH">UNCLE/AUTH</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div>
                            <h2 class="text-lg font-medium text-blue-600 mb-4">
                                Embassy or Government Agency Details
                            </h2>

                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Document(s) for delivery to an Embassy or
                                Government Agency?
                                <span class="text-red-500">*</span>
                            </label>

                            <div class="flex items-center space-x-6">
                                <label class="inline-flex items-center">
                                    <input
                                        type="radio"
                                        class="form-radio text-blue-600"
                                        name="document_delivery"
                                        value="yes"
                                        v-model="documentDelivery"
                                    />
                                    <span class="ml-2 text-gray-700">Yes</span>
                                </label>

                                <label class="inline-flex items-center">
                                    <input
                                        type="radio"
                                        class="form-radio text-blue-600"
                                        name="document_delivery"
                                        value="no"
                                        v-model="documentDelivery"
                                    />
                                    <span class="ml-2 text-gray-700">No</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <h2
                                class="text-lg font-medium text-blue-600 mb-4 invisible"
                            >
                                Embassy or Government Agency Details
                            </h2>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Delivery To<span class="text-red-500">*</span>
                            </label>
                            <select
                                v-model="deliveryTo"
                                :disabled="documentDelivery !== 'yes'"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent disabled:bg-gray-100 disabled:cursor-not-allowed"
                            >
                                <option value="">Select</option>
                                <option
                                    value=" AUTHORIZED GUARDIAN/INSTITUTION IN CHARAGE"
                                >
                                    AFP Pension and Gratuatity Management Center
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div>
                            <h2 class="text-lg font-medium text-blue-600 mb-4">
                                Purpose
                            </h2>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Purpose of Request
                                <span class="text-red-500">*</span>
                            </label>

                            <select
                                v-model="form.relationship_to_owner"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            >
                                <option value="">
                                    Select Purpose of Request
                                </option>
                                <option
                                    value=" AUTHORIZED GUARDIAN/INSTITUTION IN CHARAGE"
                                >
                                    AUTHORIZED GUARDIAN/INSTITUTION IN CHARGE
                                </option>
                                <option value="CLAM BENIFITS/LOAN">
                                    CLAM BENIFITS/LOAN
                                </option>
                                <option value="EMPLOYMENT/ABROAD">
                                    EMPLOYMENT/ABROAD
                                </option>
                                <option value="EMPLOYMENT/LOCAL">
                                    EMPLOYMENT/LOCAL
                                </option>
                                <option value="OTHERS">OTHERS</option>
                                <option value="PASSPORT/TRAVEL">
                                    PASSPORT/TRAVEL
                                </option>
                                <option value="SCHOOL REQUIREMENTS">
                                    SCHOOL REQUIREMENTS
                                </option>
                            </select>
                            <button
                                type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 mt-6"
                                @click="handleClick"
                            >
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</template>
<script setup>
import { ref, watch, reactive } from "vue";
import { useProvinces } from "../../views/composable/useProvinces.js";
import { useCityAndMunicipality } from "../../views/composable/cityAndMunicipality.js";
import { useStore } from "vuex";

import Swal from "sweetalert2";

//disabled the selection for the delivation
const store = useStore();
const deliveryTo = ref("");
const documentDelivery = ref("");
const { provinces, loading, error } = useProvinces();
const { places, loading1, error2 } = useCityAndMunicipality();

// Automatically clear the select when "No" is selected
watch(documentDelivery, (newValue) => {
    if (newValue !== "yes") {
        deliveryTo.value = "";
    }
});

//save data
const form = reactive({
    number_of_copies: "",
    certificate_type: "Marriage Certificate",
    type_of_request: "Certified True Copy of Marriage Certificate",
    husband_last_name: "",
    husband_middle_name: "",
    husband_first_name: "",
    wife_last_name: "",
    wife_middle_name: "",
    wife_first_name: "",
    country: "",
    province: "",
    city_or_municipality: "",
    date_of_marriage: "",
    purpose: "",
});

//clear form data
function clearData() {
    form.number_of_copies = "";
    form.husband_last_name = "";
    form.husband_middle_name = "";
    form.husband_first_name = "";
    form.wife_last_name = "";
    form.country = "";
    form.province = "";
    form.city_or_municipality = "";
    form.date_of_marriage = "";
    form.purpose = "";

    form.wife_middle_name = "";
    form.wife_first_name = "";
    documentDelivery.value = "";
}
const handleSubmitForMarriageCert = async () => {
    //use json if there are no files to be upload like this
    // const payload = {
    // ...form,
    //     documentDelivery: documentDelivery.value,
    // };
    try {
        const payload = {
            ...form,
            documentDelivery: documentDelivery.value,
        };

        await store.dispatch("storeMarriageCertificate", payload);
        clearData();
        Swal.fire({
            title: "Success!",
            text: "Marriage Certificate request submitted successfully.",
            icon: "success",
            confirmButtonText: "OK",
        });
    } catch (error) {
        // console.log(error);
        const errorMessage =
            error.response?.data?.error ||
            error.message ||
            "Failed to save employee";
        Swal.fire("Error!", errorMessage, "error");
    }
};
</script>
