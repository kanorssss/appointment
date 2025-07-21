//import our vue feature
import { ref, onMounted } from "vue";
import axios from "axios";

//create a ref to store our provinces
export function useProvinces() {
    //create a ref to store our provinces
    const provinces = ref([]);
    //create a ref to store our loading state
    const loading = ref(true);
    //create a ref to store our error state
    const error = ref(null);

    //create a function to fetch our provinces
    const fetchProvinces = async () => {
        //handling errors using try catch
        try {
            //fetch our provinces
            const { data } = await axios.get(
                "https://psgc.cloud/api/provinces"
            );
            provinces.value = data;
        } catch (err) {
            //set our error state to the error
            error.value = err;
            console.log(err);
        } finally {
            //set our loading state to false
            loading.value = false;
        }
    };

    //call our fetchProvinces function
    onMounted(fetchProvinces);

    //return our provinces, loading, and error
    return { provinces, loading, error };
}

//TESTING ON TERMINAL
// const axios = require('axios');

// async function fetchProvinces() {
//   try {
//     const { data } = await axios.get("https://psgc.vercel.app/api/province");
//     console.log(JSON.stringify(data, null, 2));
//   } catch (err) {
//     console.error("Error fetching provinces:", err);
//   }
// }

// fetchProvinces();
