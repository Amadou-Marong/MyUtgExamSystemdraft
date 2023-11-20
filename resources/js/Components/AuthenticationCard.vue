<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 shadow-md shadow-slate-400">
        <div>
            <slot name="logo" />
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-blue-50 shadow-md shadow-slate-600 overflow-hidden sm:rounded-lg border">
            <slot />
        </div>
    </div>
</template>
