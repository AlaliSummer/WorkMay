<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({
    email: String,
    token: String,
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('password.update'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <Head title="Reset Password" />

    <AuthenticationCard>
        <template #logo>

            <!--<AuthenticationCardLogo />-->
        </template>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" :value="$t('words.email')" />
                <TextInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    dir="ltr"
                    class="tw-mt-1 tw-block tw-w-full"
                    required
                    autofocus
                    autocomplete="username"
                />
                <InputError class="tw-mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" :value="$t('words.password')" />
                <TextInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="tw-mt-1 tw-block tw-w-full"
                    dir="ltr"
                    required
                    autocomplete="new-password"
                />
                <InputError class="tw-mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" :value="$t('auth.confirm-password')" />
                <TextInput
                    id="password_confirmation"
                    v-model="form.password_confirmation"
                    type="password"
                    class="tw-mt-1 tw-block tw-w-full"
                    dir="ltr"
                    required
                    autocomplete="new-password"
                />
                <InputError class="tw-mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="tw-flex tw-items-center tw-justify-end tw-mt-4">
                <PrimaryButton :class="{ 'tw-opacity-25': form.processing }" :disabled="form.processing">
                    {{ $t('auth.reset-password') }}
                </PrimaryButton>
            </div>
        </form>
    </AuthenticationCard>
</template>
