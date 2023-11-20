<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Welcome" />

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
          
        <div v-if="canLogin" class="sm:fixed sm:top-0 sm:end-0 p-6 text-end z-10 bg-blue-400 w-full">
            <!-- <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link> -->
            <Link :href="route('dashboard')" class="font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</Link>

            <!-- <template v-else> -->
            <template>
            
                <Link :href="route('login')" class="text-[20px] font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</Link>

                <!-- <Link v-if="canRegister" :href="route('register')" class="text-[20px] ms-4 font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link> -->
                <Link  :href="route('register')" class="text-[20px] ms-4 font-semibold text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</Link>
            </template>
        </div>
        
        <div class="py-20 w-[60vw]">
            <div class="text-5xl font-extrabold ...">
                <span class="animate-pulse bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                   Welcome to UTG Online Examination
                </span>
            </div>
            <div class="relative mb-5 h-2 rounded-full bg-gray-200">
                <div class="h-2 rounded-full bg-red-500" style="width: 25%"></div>
                <span class="absolute inset-0 flex items-center justify-center text-sm font-medium text-gray-900">25%</span>
            </div>
            
            <div class="mb-5 h-2 overflow-hidden rounded-full bg-gray-200">
                <div class="h-2 animate-pulse rounded-full bg-gray-800" style="width: 50%">
                  <div class="h-full w-full translate-x-full transform bg-white"></div>
                </div>
            </div>
            
            <div class="relative mb-5 pt-1">
                <div class="mb-4 flex h-2 overflow-hidden rounded bg-gray-100 text-xs">
                  <div style="width: 80%" class="bg-green-500"></div>
                </div>
                <div class="mb-2 flex items-center justify-between text-xs">
                  <div class="text-gray-600">Progress</div>
                  <div class="text-gray-600">100%</div>
                </div>
            </div>

            
            
            <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full "> -->
            <!-- <div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-[150px] w-full h-full py-5">
                    <h1  class="font-extrabold text-[20px] text-center md:text-xl sm:text-[20px]">Welcome To UTG Online Examination</h1>
                    <div class="flex items-center justify-center">
                        <ApplicationLogo class="block w-5 h-5 text-center"/>
                    </div>
                    
                    
                </div>
                <div class="flex items-center justify-center">
                    <PrimaryButton class="mt-20"><Link :href="route('login')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></Link></PrimaryButton>

                    <img class="w-full " src="https://img.freepik.com/free-photo/crop-hand-writing-notebook-near-computer_23-2147863504.jpg?w=740&t=st=1699480129~exp=1699480729~hmac=19d61802785d0f0ff4117c353f85ab4a0b6df198d26fa6b9666a6c821771df1f" alt="" >                
                </div>
            
            </div> -->
       
        </div>
        
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("https://img.freepik.com/free-photo/crop-hand-writing-notebook-near-computer_23-2147863504.jpg?w=740&t=st=1699480129~exp=1699480729~hmac=19d61802785d0f0ff4117c353f85ab4a0b6df198d26fa6b9666a6c821771df1f");
    background-size: cover;
}

</style>

