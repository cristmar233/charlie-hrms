<script setup>
import { ref, computed } from 'vue';
import { Head } from '@inertiajs/vue3';
import Button from 'primevue/button';
import InputText from 'primevue/inputtext';
import Calendar from 'primevue/calendar';
import Dropdown from 'primevue/dropdown';
import TabView from 'primevue/tabview';
import TabPanel from 'primevue/tabpanel';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
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

// Dummy data for tables
const educationData = ref([
    { level: 'Example Level', school: 'Example School', course: 'Example Course', dates: '2020 - 2024', highestLevel: 'Bachelor\'s Degree', yearGraduated: 2024, scholarships: 'Scholarship Example' }
]);

const organizationData = ref([
    { level: 'Example Level' }
]);

const workExperienceData = ref([
    { dates: 'N/A', position: 'N/A', department: 'N/A', salary: 'N/A', grade: 'N/A', appointment: 'N/A', govService: 'N/A' }
]);

const skillsData = ref([
    { skill: 'EXAMPLE SKILLS' }
]);

const referencesData = ref([
    { fullName: 'FULL NAME', address: 'ADDRESS', phone: 'TELEPHONE NUMBER' }
]);

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
                            <h1 class="mb-4 text-3xl font-bold">BACKGROUND</h1>
                            <TabView v-model:activeIndex="activeTab" class="no-background">
                                <TabPanel header="FAMILY">
                                    <div class="grid grid-cols-2 gap-4 mt-8">
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">SPOUSE SURNAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value" />
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">FIRST NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.employeeId.value" />
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">MIDDLE NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.firstName.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">EXT. NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.middleName.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">OCCUPATION</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.lastName.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">EMPLOYERS/BUSINESS NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.citizenship.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">BUSINESS ADDRESS</label>
                                            <Calendar class="w-full p-2 border rounded" dateFormat="yy-mm-dd" v-model="fields.birthday.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">TEL. NO.</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.placeOfBirth.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">FATHER'S SURNAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">FATHER'S FIRST NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">FATHER'S MIDDLE NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">EXT. NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">MOTHER'S MAIDEN NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">MOTHER'S SURNAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">MOTHER'S FIRST NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value"/>
                                        </div>
                                        <div>
                                            <label class="block mb-2 text-sm font-bold text-gray-700">MOTHER'S MIDDLE NAME</label>
                                            <InputText class="w-full p-2 border rounded" type="text" v-model="fields.username.value"/>
                                        </div>
                                    </div>
                                </TabPanel>
                                <TabPanel header="EDUCATION">
                                    <DataTable :value="educationData" class="mt-8">
                                        <Column field="level" header="LEVEL OF EDUCATION"></Column>
                                        <Column field="school" header="NAME OF SCHOOL"></Column>
                                        <Column field="course" header="BASIC EDUCATION|DEGREE|COURSE"></Column>
                                        <Column field="dates" header="INCLUSIVE DATES (FROM - TO)"></Column>
                                        <Column field="highestLevel" header="HIGHEST LEVEL EARNED"></Column>
                                        <Column field="yearGraduated" header="YEAR GRADUATED"></Column>
                                        <Column field="scholarships" header="SCHOLARSHIPS & ACADEMIC EXCELLENCE"></Column>
                                    </DataTable>
                                </TabPanel>
                                <TabPanel header="ORGANIZATION">
                                    <DataTable :value="organizationData" class="mt-8">
                                        <Column field="level" header="LEVEL OF EDUCATION"></Column>
                                    </DataTable>
                                </TabPanel>
                                <TabPanel header="WORK EXPERIENCE">
                                    <DataTable :value="workExperienceData" class="mt-8">
                                        <Column field="dates" header="INCLUSIVE DATES (FROM - TO)"></Column>
                                        <Column field="position" header="POSITION"></Column>
                                        <Column field="department" header="DEPARTMENT|AGENCY|OFFICE|COMPANY"></Column>
                                        <Column field="salary" header="MONTHLY SALARY"></Column>
                                        <Column field="grade" header="SALARY GRADE"></Column>
                                        <Column field="appointment" header="STATUS OF APPOINTMENT"></Column>
                                        <Column field="govService" header="GOV'T SERVICE"></Column>
                                    </DataTable>
                                </TabPanel>
                                <TabPanel header="SKILLS">
                                    <DataTable :value="skillsData" class="mt-8">
                                        <Column field="skill" header="SKILLS"></Column>
                                    </DataTable>
                                </TabPanel>
                                <TabPanel header="REFERENCES">
                                    <DataTable :value="referencesData" class="mt-8">
                                        <Column field="fullName" header="FULL NAME"></Column>
                                        <Column field="address" header="ADDRESS"></Column>
                                        <Column field="phone" header="TELEPHONE NUMBER"></Column>
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
