<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import ApplicationMark from '@/Components/ApplicationMark.vue';

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <Head title="Forgot Password" />
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="tw-shrink-0 tw-flex tw-items-center mb-4">
                                <inertia-link :href="'/'">
                                    <ApplicationMark class="tw-w-1/5 mx-auto" />
                                </inertia-link>
                            </div>

                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-black text-dark display-6 text-center">{{ $t('words.forgot-password') }}</h3>
                                <p class="mb-0 text-center">{{ $t('words.enter-your-email') }}</p>
                            </div>
                            <!--@if ($errors->any())-->
                            <!--    <div class="alert alert-danger text-sm" role="alert">-->
                            <!--        @foreach ($errors->all() as $error)-->
                            <!--            {{ $error }}-->
                            <!--        @endforeach-->
                            <!--    </div>-->
                            <!--@endif-->
                            <!--@if (session('status'))-->
                            <!--    <div class="alert alert-info text-sm" role="alert">-->
                            <!--        {{ session('status') }}-->
                            <!--    </div>-->
                            <!--@endif-->
                            <!--@if (session('error'))-->
                            <!--    <div class="alert alert-danger text-sm" role="alert">-->
                            <!--        {{ session('error') }}-->
                            <!--    </div>-->
                            <!--@endif-->
                            <div class="card-body">
                                <form role="form" @submit.prevent="submit">
                                    <div class="mb-3">
                                        <input type="email"
                                               class="form-control"
                                               dir="ltr"
                                               aria-label="Email"
                                               id="email"
                                               name="email"
                                               v-model="form.email"
                                               required
                                               autofocus>
                                        <InputError class="tw-mt-3 tw-ms-1 tw-text-red-500 font-bold" :message="form.errors.email" />
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="my-4 mb-2 btn btn-dark btn-lg w-100">
                                            {{ $t('words.email-password-reset-link') }}
                                        </button>
                                    </div>
                                </form>
                                <p class="tw-text-center mt-4">
                                    <inertia-link :href="route('login')">{{ $t('words.go-back-to-login-page') }}</inertia-link>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="position-absolute w-40 top-0 ltr:end-0 rtl:start-0 h-100 d-md-block d-none">
                                <div class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8"
                                    style="background-image:url('../img/image-sign-in.jpg')"
                                >
                                    <div
                                        class="blur mt-12 p-4 text-center border border-white border-radius-md position-absolute fixed-bottom m-4">
                                        <h2 class="mt-3 text-dark font-weight-bold">
                                            "المعرفة كنز يتبع صاحبه أينما ذهب."
                                        </h2>
                                        <h6 class="text-dark te xt-sm mt-5">كل الحقوق محفوظة © 2023</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!--<AuthenticationCard>-->
    <!--    <template #logo>-->
    <!--        <AuthenticationCardLogo />-->
    <!--    </template>-->

    <!--    <div class="mb-4 text-sm text-gray-600">-->
    <!--        Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.-->
    <!--    </div>-->

    <!--    <div v-if="status" class="mb-4 font-medium text-sm text-green-600">-->
    <!--        {{ status }}-->
    <!--    </div>-->

    <!--    <form @submit.prevent="submit">-->
    <!--        <div>-->
    <!--            <InputLabel for="email" value="Email" />-->
    <!--            <TextInput-->
    <!--                id="email"-->
    <!--                v-model="form.email"-->
    <!--                type="email"-->
    <!--                class="mt-1 block w-full"-->
    <!--                required-->
    <!--                autofocus-->
    <!--                autocomplete="username"-->
    <!--            />-->
    <!--            <InputError class="mt-2" :message="form.errors.email" />-->
    <!--        </div>-->

    <!--        <div class="flex items-center justify-end mt-4">-->
    <!--            <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">-->
    <!--                Email Password Reset Link-->
    <!--            </PrimaryButton>-->
    <!--        </div>-->
    <!--    </form>-->
    <!--</AuthenticationCard>-->
</template>
