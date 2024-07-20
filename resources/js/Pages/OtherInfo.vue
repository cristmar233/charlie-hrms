<script setup>
import { ref, computed } from 'vue';
import { Head } from '@inertiajs/vue3';
import Button from 'primevue/button';
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import InputText from 'primevue/inputtext';
import Calendar from 'primevue/calendar';
import Splitter from 'primevue/splitter';
import SplitterPanel from 'primevue/splitterpanel';
import Accordion from 'primevue/accordion';
import AccordionTab from 'primevue/accordiontab';
import Menu from 'primevue/menu';

const activeTab = ref(0);

const cseligibilityData = ref([
    { level: 'Example Level', school: 'Example School', course: 'Example Course', dates: '2020 - 2024', highestLevel: 'Bachelor\'s Degree', yearGraduated: 2024, scholarships: 'Scholarship Example' }
]);

const voluntaryworkData = ref([
    { level: 'Example Level', school: 'Example School', course: 'Example Course', dates: '2020 - 2024', highestLevel: 'Bachelor\'s Degree', yearGraduated: 2024, scholarships: 'Scholarship Example' }
]);

const learndevData = ref([
    { level: 'Example Level' }
]);

const recogdistData = ref([
    { skill: 'EXAMPLE SKILLS' }
]);

const governmentIdFields = ref({
    sssId: '09223512331',
    gsisId: '272-2034',
    pagIbigId: '09223512331',
    philHealthId: '272-2034',
    tinId: '09223512331',
    govIssuedId: 'DSWD EMPLOYEE ID',
    dateIssued: new Date(),
    licenseNo: '272-2034',
    placeIssued: 'QUEZON CITY'
});

const updateProfile = () => {
    alert('Profile updated');
};

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
                    <div class="relative flex flex-1">
                        <div class="w-full">
                            <h1 class="mb-4 text-3xl font-bold">OTHER INFO</h1>
                            <TabView v-model:activeIndex="activeTab" class="no-background">
                                <TabPanel header="CS ELIGIBILITY">
                                    <DataTable :value="cseligibilityData" class="mt-8">
                                        <Column field="level" header="LEVEL OF EDUCATION"></Column>
                                        <Column field="school" header="NAME OF SCHOOL"></Column>
                                        <Column field="course" header="BASIC EDUCATION|DEGREE|COURSE"></Column>
                                        <Column field="dates" header="INCLUSIVE DATES (FROM - TO)"></Column>
                                        <Column field="highestLevel" header="HIGHEST LEVEL EARNED"></Column>
                                        <Column field="yearGraduated" header="YEAR GRADUATED"></Column>
                                        <Column field="scholarships" header="SCHOLARSHIPS & ACADEMIC EXCELLENCE"></Column>
                                    </DataTable>
                                </TabPanel>
                                <TabPanel header="VOLUNTARY WORK">
                                    <DataTable :value="voluntaryworkData" class="mt-8">
                                        <Column field="level" header="LEVEL OF EDUCATION"></Column>
                                        <Column field="school" header="NAME OF SCHOOL"></Column>
                                        <Column field="course" header="BASIC EDUCATION|DEGREE|COURSE"></Column>
                                        <Column field="dates" header="INCLUSIVE DATES (FROM - TO)"></Column>
                                        <Column field="highestLevel" header="HIGHEST LEVEL EARNED"></Column>
                                        <Column field="yearGraduated" header="YEAR GRADUATED"></Column>
                                        <Column field="scholarships" header="SCHOLARSHIPS & ACADEMIC EXCELLENCE"></Column>
                                    </DataTable>
                                </TabPanel>
                                <TabPanel header="LEARNING & DEVELOPMENT">
                                    <DataTable :value="learndevData" class="mt-8">
                                        <Column field="level" header="LEVEL OF EDUCATION"></Column>
                                    </DataTable>
                                </TabPanel>
                                <TabPanel header="GOVERNMENT ID">
                                    <Splitter style="height: 300px;">
                                        <SplitterPanel size={50}>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">SSS ID:</label>
                                                    <InputText class="w-full p-2 border rounded" v-model="governmentIdFields.sssId" />
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">GSIS ID:</label>
                                                    <InputText class="w-full p-2 border rounded" v-model="governmentIdFields.gsisId" />
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">PAG-IBIG ID:</label>
                                                    <InputText class="w-full p-2 border rounded" v-model="governmentIdFields.pagIbigId" />
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">PHILHEALTH ID:</label>
                                                    <InputText class="w-full p-2 border rounded" v-model="governmentIdFields.philHealthId" />
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">TIN ID:</label>
                                                    <InputText class="w-full p-2 border rounded" v-model="governmentIdFields.tinId" />
                                                </div>
                                            </div>
                                        </SplitterPanel>
                                        <SplitterPanel size={50}>
                                            <div class="grid grid-cols-2 gap-4">
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">GOV'T. ISSUED ID:</label>
                                                    <InputText class="w-full p-2 border rounded" v-model="governmentIdFields.govIssuedId" />
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">ID/LICENSE/PASSPORT NO.:</label>
                                                    <InputText class="w-full p-2 border rounded" v-model="governmentIdFields.licenseNo" />
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">DATE ISSUED:</label>
                                                    <Calendar class="w-full p-2 border rounded" v-model="governmentIdFields.dateIssued" dateFormat="dd/mm/yy" />
                                                </div>
                                                <div>
                                                    <label class="block mb-2 text-sm font-bold text-gray-700">PLACE OF ISSUANCE:</label>
                                                    <InputText class="w-full p-2 border rounded" v-model="governmentIdFields.placeIssued" />
                                                </div>
                                            </div>
                                        </SplitterPanel>
                                    </Splitter>
                                </TabPanel>
                                <TabPanel header="RECOGNITION AND DISTINCTIONS">
                                    <DataTable :value="recogdistData" class="mt-8">
                                        <Column field="skill" header="SKILLS"></Column>
                                    </DataTable>
                                </TabPanel>
                            </TabView>
                            <Button label="UPDATE" class="float-right px-8 py-2 mt-6 text-white bg-green-500 rounded-lg" @click="updateProfile" />
                        </div>
                    </div>
                </main>
            </div>
        </div>
</template>
