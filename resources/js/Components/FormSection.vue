<script setup>
import { computed, useSlots } from 'vue';
import SectionTitle from './SectionTitle.vue';

defineEmits(['submitted']);

const hasActions = computed(() => !! useSlots().actions);
</script>

<template>
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div>
            <SectionTitle>
                <template #title>
                    <slot name="title" />
                </template>
                <template #description>
                    <slot name="description" />
                </template>
            </SectionTitle>

            <form @submit.prevent="$emit('submitted')"
                    class="tw-rounded-lg tw-bg-white tw-drop-shadow-2xl px-6 py-6"
                    :class="hasActions ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md'"
                >
                <div class="grid grid-cols-6 gap-6">
                    <slot name="form" />
                </div>
                <div class="tw-py-6">
                    <slot v-if="hasActions" name="actions" />
                </div>
            </form>
        </div>
    </div>
</template>
