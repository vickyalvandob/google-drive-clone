<script setup>
// import { ref } from 'vue';
// import ApplicationLogo from '@/Components/ApplicationLogo.vue';
// import Dropdown from '@/Components/Dropdown.vue';
// import DropdownLink from '@/Components/DropdownLink.vue';
// import NavLink from '@/Components/NavLink.vue';
// import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
// import { Link } from '@inertiajs/vue3';

import Navigation from '@/Components/app/Navigation.vue';
import UserSettingsDropdown from '@/Components/app/UserSettingsDropdown.vue';
import SearchForm from '@/Components/app/SearchForm.vue';

// const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="h-screen bg-gray-50 flex w-full gap-4" >
       <Navigation />

       <main class="flex flex-col flex-1 px-4 overflow-hidden">
        
        <div class="flex items-center justify-between w-full">
            <SearchForm />
            <UserSettingsDropdown />
        </div>
        
        <div class="flex-1 flex flex-col overflow-hidden">
            <slot/>
        </div>
        
       </main>

    </div>
</template>
