<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    active: Boolean,
    href: String,
    as: String,
});

const classes = computed(() => {
    return props.active
        ? 'tw-block tw-w-full tw-ps-3 tw-pe-4 tw-py-2 tw-border-l-4 tw-border-rose-700 tw-text-start tw-text-base tw-font-medium tw-text-rose-700 tw-bg-rose-50 focus:tw-outline-none focus:tw-text-w-800 hover:tw-text-pink-700 focus:tw-bg-pink-100 focus:tw-border-pink-700 tw-transition tw-duration-150 tw-ease-in-out'
        : 'tw-block tw-w-full tw-ps-3 tw-pe-4 tw-py-2 tw-border-l-4 tw-border-transparent tw-text-start tw-text-base tw-font-medium tw-text-gray-600 hover:tw-text-gray-800 hover:tw-bg-gray-50 hover:tw-border-gray-300 focus:tw-outline-none focus:tw-text-gray-800 focus:tw-bg-gray-50 focus:tw-border-gray-300 tw-transition tw-duration-150 tw-ease-in-out';
});
</script>

<template>
    <div>
        <button v-if="as == 'button'" :class="classes" class="w-full text-start">
            <slot />
        </button>

        <Link v-else :href="href" :class="classes">
            <slot />
        </Link>
    </div>
</template>
