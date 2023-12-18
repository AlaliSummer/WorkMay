<script setup>
defineProps({
    message: String,
});
</script>

<template>
    <div v-show="message">
        <p class="tw-text-sm tw-text-white tw-rounded tw-p-2 tw-bg-red-500">
            {{ message }}
        </p>
    </div>
</template>
