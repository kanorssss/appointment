//import our vue feature
import { ref, onMounted } from "vue";
import axios from "axios";

export function useCityAndMunicipality() {
    const places = ref([]);
    const loading1 = ref(true);
    const error2 = ref(null);

    const fetchCitiesMunicipalities = async () => {
        try {
            const [citiesResponse, municipalitiesResponse] = await Promise.all([
                axios.get("https://psgc.cloud/api/cities"),
                axios.get("https://psgc.cloud/api/municipalities"),
            ]);

            //merge both array
            places.value = [
                ...citiesResponse.data,
                ...municipalitiesResponse.data,
            ];
        } catch (err) {
            error2.value = err;
            console.log(err);
        } finally {
            loading1.value = false;
        }
    };
    onMounted(fetchCitiesMunicipalities);
    return { places, loading1, error2 };
}

// async function fetchProvincesCities() {
//     try {
//         const [municipalitiesResponse] = await Promise.all([
//             // axios.get("https://psgc.cloud/api/cities"),
//             axios.get("https://psgc.cloud/api/municipalities"),
//         ]);
//         console.log(JSON.stringify(municipalitiesResponse.data, null, 2));
//         // console.log(JSON.stringify(citiesResponse.data, null, 2));
//     } catch (err) {
//         console.error("Error fetching provinces:", err);
//     }
// }

// fetchProvincesCities();
