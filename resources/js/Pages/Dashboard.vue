<script setup>
import { ref } from 'vue';
import { Head, router } from '@inertiajs/vue3';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import InputNumber from 'primevue/inputnumber';
import Calendar from 'primevue/calendar';
import Dropdown from 'primevue/dropdown';
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
import Accordion from 'primevue/accordion';
import AccordionTab from 'primevue/accordiontab';
import Menu from 'primevue/menu';

const activeTab = ref(0);
const fields = ref({
    username: { label: 'User Name', type: 'text', value: 'AJHABIBI' },
    employeeId: { label: 'Employee ID', type: 'text', value: '11-0070' },
    firstName: { label: 'First Name', type: 'text', value: 'ABDUL' },
    middleName: { label: 'Middle Name', type: 'text', value: 'JABLE' },
    lastName: { label: 'Last Name', type: 'text', value: 'HABIBI' },
    citizenship: { label: 'Citizenship', type: 'text', value: 'FILIPINO' },
    birthday: { label: 'Birthday', type: 'date', value: '2000-11-01' },
    placeOfBirth: { label: 'Place of Birth', type: 'text', value: 'DAVAO CITY' },
    height: { label: 'Height (m)', type: 'number', value: 1.82 },
    weight: { label: 'Weight (kg)', type: 'number', value: 74 },
    zipcode: { label: 'Zip Code', type: 'number', value: 'N/A' },
    block: { label: 'BLOCK/STREET/PUROK', type: 'text', value: 'N/A' },
    villsub: { label: 'VILLAGE SUBDIVISION', type: 'text', value: 'N/A' },
    mobilenum: { label: 'MOBILE NUMBER', type: 'number', value: '09088184444' },
    telnum: { label: 'TELEPHONE NUMBER', type: 'number', value: '22222222' },
    emailadd: { label: 'EMAIL ADDRESS', type: 'text', value: 'ABJHABIBI@DSWD.GOV.PH' },
    pass: { label: 'PASSWORD', type: 'text', value: 'password' }
});

const sexOptions = ref([
    { label: 'MALE', value: 'MALE' },
    { label: 'FEMALE', value: 'FEMALE' }
]);

const civilStatusOptions = ref([
    { label: 'SINGLE', value: 'SINGLE' },
    { label: 'MARRIED', value: 'MARRIED' },
    { label: 'DIVORCED', value: 'DIVORCED' },
    { label: 'WIDOWED', value: 'WIDOWED' }
]);

const bloodTypeOptions = ref([
    { label: 'O+', value: 'O+' },
    { label: 'A+', value: 'A+' },
    { label: 'B+', value: 'B+' },
    { label: 'AB+', value: 'AB+' },
    { label: 'O-', value: 'O-' },
    { label: 'A-', value: 'A-' },
    { label: 'B-', value: 'B-' },
    { label: 'AB-', value: 'AB-' }
]);

const regionOptions = ref([
    { label: 'REGION I', value: 'REGION I' },
    { label: 'REGION II', value: 'REGION II' },
    { label: 'REGION III', value: 'REGION III' },
    { label: 'REGION IV', value: 'REGION IV' },
    { label: 'REGION V', value: 'REGION V' },
    { label: 'REGION VI', value: 'REGION VI' },
    { label: 'REGION VII', value: 'REGION VII' },
    { label: 'REGION VIII', value: 'REGION VIII' },
    { label: 'REGION IX', value: 'REGION IX' },
    { label: 'REGION X', value: 'REGION X' },
    { label: 'REGION XI', value: 'REGION XI' }
]);

const provinceOptions = ref([
    { label: 'DAVAO DE ORO', value: 'DAVAO DE ORO' },
    { label: 'DAVAO DEL NORTE', value: 'DAVAO DEL NORTE' },
    { label: 'DAVAO ORIENTAL', value: 'DAVAO ORIENTAL' },
    { label: 'DAVAO DEL SUR', value: 'DAVAO DEL SUR' },
    { label: 'DAVAO OCCIDENTAL', value: 'DAVAO OCCIDENTAL' }
]);

const cityOptions = ref([
    { label: 'PANABO', value: 'PANABO' },
    { label: 'SAMAL', value: 'SAMAL' },
    { label: 'TAGUM', value: 'TAGUM' },
    { label: 'DAVAO', value: 'DAVAO' },
    { label: 'MATI', value: 'MATI' }
]);

const barangayOptions = ref([
    { label: 'MAA', value: 'MAA' },
    { label: 'MATINA', value: 'MATINA' },
    { label: 'LANGUB', value: 'LANGUB' }
]);

const selectedSex = ref(fields.value.sex?.value || null);
const selectedCivilStatus = ref(fields.value.civilStatus?.value || null);
const selectedBloodType = ref(null);
const selectedRegion = ref(null);
const selectedProvince = ref(null);
const selectedCity = ref(null);
const selectedBarangay = ref(null);

const showPassword = ref(false);

const updateProfile = () => {
    alert('Profile updated');
};

// Sidebar menu items
const items = ref([
    {
        label: 'Basic Info',
        icon: 'pi pi-fw pi-user',
        command: () => { window.location.href = route('dashboard'); }
    },
    {
        label: 'Background',
        icon: 'pi pi-fw pi-briefcase',
        command: () => { window.location.href = route('background'); }
    },
    {
        label: 'Other Info',
        icon: 'pi pi-fw pi-info-circle',
        command: () => { window.location.href = route('otherinfo'); }
    }
]);

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <Head title="Dashboard" />
    <head>
        <link rel="stylesheet" href="path/to/app.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
        <!-- Main Content Area -->
        <div class="flex flex-col min-h-screen">
            <div class="flex flex-1">
                <aside class="relative w-64 p-4 overflow-hidden bg-gradient-to-t from-blue-900 to-blue-500">
                    <!-- Background Image -->
                    <img src="images/bgthisd.png" alt="Sidebar Background" class="absolute top-0 left-0 object-cover w-full h-full opacity-30">
                    <!-- Gradient Overlay -->
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-blue-900 to-blue-500 opacity-70"></div>
                    <!-- Content -->
                    <div class="relative z-10">
                        <!-- Logo -->
                        <img src="images/dswd-logo.png" alt="Logo" class="h-16 mx-auto mb-4">
                        <!-- User Profile Section -->
                        <Accordion activeIndex={0} class="w-full custom-accordion">
                            <AccordionTab header="USER PROFILE">
                                <Menu :model="items" class="w-full" />
                            </AccordionTab>
                        </Accordion>
                        <button class="fixed p-2 mt-4 text-lg text-white bg-red-600 rounded bottom-4 left-4" @click="logout">Log-out</button>
                    </div>
                </aside>
                <main class="relative flex-1 p-8 overflow-hidden bg-custom">
                    <!-- Background Image -->
                    <img src="images/bgwhiteredblue.png" alt="Main Background" class="absolute top-0 left-0 object-cover w-full h-full opacity-30">
                    <!-- Gradient Overlay -->
                    <div class="absolute top-0 left-0 w-full h-full opacity-0 bg-gradient-to-t from-white to-transparent"></div>
                    <!-- Content -->
                    <div class="relative z-10">
                        <div class="grid w-full grid-cols-3 gap-4">
                            <div class="col-span-1">
                                <img alt="Profile photo of a young man with short dark hair and facial hair" class="w-full rounded-lg" height="300" src="images/profile-picture.webp" width="300"/>
                                <Button label="Upload Photo" class="w-full py-2 mt-4 text-white rounded-lg bg-gradient-to-r from-pink-500 to-purple-500" />
                            </div>
                            <div class="col-span-2">
                                <h1 class="mb-4 text-3xl font-bold">HABIBI, ABDUL JABLE</h1>
                                <p class="mb-4 text-gray-600">ADMINISTRATIVE ASSISTANT II</p>
                                <TabView v-model:activeIndex="activeTab" class="no-background">
                                    <TabPanel header="PERSONAL INFO">
                                        <div class="grid grid-cols-2 gap-4">
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">USER NAME</label>
                                                <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value" disabled placeholder="Disabled" />
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">EMPLOYEE ID</label>
                                                <InputText class="w-full p-2 border rounded" type="text" v-model="fields.employeeId.value" disabled placeholder="Disabled"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">FIRST NAME</label>
                                                <InputText class="w-full p-2 border rounded" type="text" v-model="fields.firstName.value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">MIDDLE NAME</label>
                                                <InputText class="w-full p-2 border rounded" type="text" v-model="fields.middleName.value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">LAST NAME</label>
                                                <InputText class="w-full p-2 border rounded" type="text" v-model="fields.lastName.value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">CITIZENSHIP</label>
                                                <InputText class="w-full p-2 border rounded" type="text" v-model="fields.citizenship.value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">BIRTHDAY</label>
                                                <Calendar class="w-full p-2 border rounded" dateFormat="yy-mm-dd" v-model="fields.birthday.value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">PLACE OF BIRTH</label>
                                                <InputText class="w-full p-2 border rounded" type="text" v-model="fields.placeOfBirth.value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">SEX</label>
                                                <Dropdown class="w-full p-2 border rounded" :options="sexOptions" v-model="selectedSex" optionLabel="label" optionValue="value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">CIVIL STATUS</label>
                                                <Dropdown class="w-full p-2 border rounded" :options="civilStatusOptions" v-model="selectedCivilStatus" optionLabel="label" optionValue="value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">HEIGHT(M)</label>
                                                <InputNumber class="w-full p-2 border rounded" v-model="fields.height.value" :step="0.01"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">WEIGHT(KG)</label>
                                                <InputNumber class="w-full p-2 border rounded" v-model="fields.weight.value"/>
                                            </div>
                                            <div>
                                                <label class="block mb-2 text-sm font-bold text-gray-700">BLOOD TYPE</label>
                                                <Dropdown class="w-full p-2 border rounded" :options="bloodTypeOptions" v-model="selectedBloodType" optionLabel="label" optionValue="value" />
                                            </div>
                                        </div>
                                    </TabPanel>
                                    <TabPanel header="ADDRESS">
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">REGION</label>
                                            <Dropdown class="w-full p-2 border rounded" :options="regionOptions" v-model="selectedRegion" optionLabel="label" optionValue="value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">PROVINCE</label>
                                            <Dropdown class="w-full p-2 border rounded" :options="provinceOptions" v-model="selectedProvince" optionLabel="label" optionValue="value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">CITY</label>
                                            <Dropdown class="w-full p-2 border rounded" :options="cityOptions" v-model="selectedCity" optionLabel="label" optionValue="value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">ZIP CODE</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.zipcode.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">BLOCK/STREET/PUROK</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.block.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">VILLAGE SUBDIVISION</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.villsub.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">BARANGAY</label>
                                            <Dropdown class="w-full p-2 border rounded" :options="barangayOptions" v-model="selectedBarangay" optionLabel="label" optionValue="value"/>
                                        </div>
                                    </TabPanel>
                                    <TabPanel header="SECURITY & CONTACT DETAILS">
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">MOBILE NUMBER</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.mobilenum.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">TELEPHONE NUMBER</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.telnum.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">EMAIL ADDRESS</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.emailadd.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">PASSWORD</label>
                                            <InputText :type="showPassword ? 'text' : 'password'" class="w-full p-2 border rounded" v-model="fields.pass.value"/>
                                            <div class="mt-2">
                                                <input type="checkbox" id="showPassword" v-model="showPassword">
                                                <label for="showPassword" class="ml-2 text-sm font-bold text-gray-700">Show Password</label>
                                            </div>
                                        </div>
                                    </TabPanel>
                                </TabView>
                                <Button label="UPDATE" class="float-right px-8 py-2 mt-6 text-white bg-green-500 rounded-lg" @click="updateProfile" />
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
</template>
