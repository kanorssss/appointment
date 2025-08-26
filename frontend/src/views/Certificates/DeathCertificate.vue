<template>
    <div class="min-h-[400px] container mx-auto px-4 py-8">
        <form @submit.prevent="handeDeathCert">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <h2 class="text-lg font-medium text-blue-600 mb-4">
                    Request Details - DEATH CERTIFICATE
                </h2>
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
                            />
                            <p class="text-red-500 text-sm"></p>
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
                        <p
                            class="text-red-500 text-sm"
                            v-if="apiErrors?.number_of_copies?.[0]"
                        >
                            {{ apiErrors.number_of_copies[0] }}
                        </p>
                    </div>
                </div>

                <div class="mb-6">
                    <h2 class="text-lg font-medium text-blue-600 mb-4">
                        Certificate Details
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Deceased's Last Name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="deceased_last_name"
                                type="text"
                                placeholder="Deceased's Last Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.deceased_last_name?.[0]"
                            >
                                {{ apiErrors.deceased_last_name[0] }}
                            </p>
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Deceased's First Name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="deceased_first_name"
                                type="text"
                                placeholder="Deceased's First Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.deceased_first_name?.[0]"
                            >
                                {{ apiErrors.deceased_first_name[0] }}
                            </p>
                        </div>
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Deceased's Middle Name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="deceased_middle_name"
                                type="text"
                                placeholder="Deceased's Middle Name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.deceased_middle_name?.[0]"
                            >
                                {{ apiErrors.deceased_middle_name[0] }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Place of Death<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                v-model="country"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                name="country"
                            >
                                <option value="">Select Country</option>
                                <option value="PHILIPPINES">PHILIPPINES</option>
                            </select>
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.country?.[0]"
                            >
                                {{ apiErrors.country[0] }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Place of Death (Province)<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                v-model="province"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                name="province"
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
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.province?.[0]"
                            >
                                {{ apiErrors.province[0] }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Place of Death (City/Municipality)<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <select
                                v-model="city_or_municipality"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                name="provide"
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
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.city_or_municipality?.[0]"
                            >
                                {{ apiErrors.city_or_municipality[0] }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Date of Death<span class="text-red-500">*</span>
                            </label>
                            <input
                                v-model="date_of_death"
                                type="date"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.date_of_death?.[0]"
                            >
                                {{ apiErrors.date_of_death[0] }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Sex<span class="text-red-500">*</span>
                            </label>
                            <div class="flex items-center space-x-6">
                                <label class="inline-flex items-center">
                                    <input
                                        type="radio"
                                        class="form-radio text-blue-600"
                                        name="document_delivery"
                                        value="yes"
                                        v-model="sex"
                                    />
                                    <span class="ml-2 text-gray-700">Yes</span>
                                </label>

                                <label class="inline-flex items-center">
                                    <input
                                        type="radio"
                                        class="form-radio text-blue-600"
                                        name="document_delivery"
                                        value="no"
                                        v-model="sex"
                                    />
                                    <span class="ml-2 text-gray-700">No</span>
                                </label>
                            </div>
                            <p class="text-red-500" v-if="apiErrors?.sex?.[0]">
                                {{ apiErrors.sex[0] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Father's Last Name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="fathers_last_name"
                                type="text"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.fathers_last_name?.[0]"
                            >
                                {{ apiErrors.fathers_last_name[0] }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Father's First Name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="fathers_first_name"
                                type="text"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.fathers_first_name?.[0]"
                            >
                                {{ apiErrors.fathers_first_name[0] }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Father's Middle Name<span class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="fathers_middle_name"
                                type="text"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.fathers_middle_name?.[0]"
                            >
                                {{ apiErrors.fathers_middle_name[0] }}
                            </p>
                        </div>

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
                                type="text"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.mothers_last_name?.[0]"
                            >
                                {{ apiErrors.mothers_last_name[0] }}
                            </p>
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
                                type="text"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.mothers_first_name?.[0]"
                            >
                                {{ apiErrors.mothers_first_name[0] }}
                            </p>
                        </div>

                        <div>
                            <label
                                class="block text-sm font-medium text-gray-700 mb-2"
                            >
                                Mother's Maiden Middle Name<span
                                    class="text-red-500"
                                    >*</span
                                >
                            </label>
                            <input
                                v-model="mothers_middle_name"
                                type="text"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            />
                            <p
                                class="text-red-500"
                                v-if="apiErrors?.mothers_middle_name?.[0]"
                            >
                                {{ apiErrors.mothers_middle_name[0] }}
                            </p>
                        </div>

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
                                v-model="relationship_to_the_owner"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md bg-white focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
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
                                    />
                                    <span class="ml-2 text-gray-700">Yes</span>
                                </label>

                                <label class="inline-flex items-center">
                                    <input
                                        type="radio"
                                        class="form-radio text-blue-600"
                                        name="document_delivery"
                                        value="no"
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
                                v-model="delivery_to"
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
                                v-model="purpose"
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
import { ref, watch, computed } from "vue";
import { useStore } from "vuex";
import { useProvinces } from "../../views/composable/useProvinces.js";
import { useCityAndMunicipality } from "../../views/composable/cityAndMunicipality.js";
import Swal from "sweetalert2";
const store = useStore();

const { provinces, loading, error } = useProvinces();
const { places, loading1, error2 } = useCityAndMunicipality();

//getters
const apiResponse = computed(() => store.getters["apiResponse"]);
const apiIsLoading = computed(() => store.getters["apiIsLoading"]);
const apiErrors = computed(() => store.getters["apiErrors"]);
//watch
watch(
    apiResponse,
    async (response) => {
        if (response) {
            Swal.fire({
                title: "Success!",
                text: response.message || "Appointment successful!",
                icon: "success",
                confirmButtonText: "OK",
            });
            await store.dispatch("resetApiResponse");
            resetForm();
        }
    },
    { immediate: true }
);
//form fields
const certificate_type = ref("Death");
const type_of_request = ref("Death Certificate");
const number_of_copies = ref("");
const deceased_last_name = ref("");
const deceased_middle_name = ref("");
const deceased_first_name = ref("");
const country = ref("");
const province = ref("");
const city_or_municipality = ref("");
const date_of_death = ref("");
const sex = ref("");
const fathers_last_name = ref("");
const fathers_middle_name = ref("");
const fathers_first_name = ref("");
const mothers_last_name = ref("");
const mothers_middle_name = ref("");
const mothers_first_name = ref("");
const purpose = ref("");
const relationship_to_the_owner = ref("");
const delivery_to = ref("");

//Watch

const handeDeathCert = async () => {
    try {
        const payload = {
            certificate_type: certificate_type.value,
            type_of_request: type_of_request.value,
            number_of_copies: number_of_copies.value,
            deceased_last_name: deceased_last_name.value,
            deceased_middle_name: deceased_middle_name.value,
            deceased_first_name: deceased_first_name.value,
            country: country.value,
            province: province.value,
            city_or_municipality: city_or_municipality.value,
            date_of_death: date_of_death.value,
            sex: sex.value,
            fathers_last_name: fathers_last_name.value,
            fathers_middle_name: fathers_middle_name.value,
            fathers_first_name: fathers_first_name.value,
            mothers_last_name: mothers_last_name.value,
            mothers_middle_name: mothers_middle_name.value,
            mothers_first_name: mothers_first_name.value,
            purpose: purpose.value,
            relationship_to_the_owner: relationship_to_the_owner.value,
            delivery_to: delivery_to.value,
        };

        await store.dispatch("storeDeathCertificate", payload);
    } catch (error) {
        console.error("Error submitting form:", error);
    }
};

const resetForm = () => {
    certificate_type.value = "";
    type_of_request.value = "";
    number_of_copies.value = "";
    deceased_last_name.value = "";
    deceased_middle_name.value = "";
    deceased_first_name.value = "";
    country.value = "";
    province.value = "";
    city_or_municipality.value = "";
    date_of_death.value = "";
    sex.value = "";
    fathers_last_name.value = "";
    fathers_middle_name.value = "";
    fathers_first_name.value = "";
    mothers_last_name.value = "";
    mothers_middle_name.value = "";
    mothers_first_name.value = "";
    purpose.value = "";
    relationship_to_the_owner.value = "";
    delivery_to.value = "";
};
</script>
