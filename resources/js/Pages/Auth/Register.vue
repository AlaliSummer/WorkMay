<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    name: '',
    email: '',
    password: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Register" />

    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none">
                                <div class="oblique-image position-absolute d-flex fixed-top me-auto h-100 z-index-0 bg-cover ms-n8"
                                     style="background-image:url('/img/image-sign-up.jpg')">
                                    <div class="my-auto text-end max-width-350 me-7">
                                        <h1 class="mt-3 text-white font-weight-bolder">{{ $t('words.start-your-new-journey') }}.</h1>
                                        <p class="text-white text-lg mt-4 mb-4">
                                            تعلم من الافضل، كن الافضل
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <!--<div class="avatar-group d-flex">-->
                                            <!--<a href="javascript:;" class="avatar avatar-sm rounded-circle"-->
                                            <!--    data-bs-toggle="tooltip" data-original-title="Jessica Rowland">-->
                                            <!--    <img alt="Image placeholder" src="/img/team-1.jpg"-->
                                            <!--        class="">-->
                                            <!--</a>-->
                                            <!--<a href="javascript:;" class="avatar avatar-sm rounded-circle"-->
                                            <!--    data-bs-toggle="tooltip" data-original-title="Audrey Love">-->
                                            <!--    <img alt="Image placeholder" src="/img/team-4.jpg"-->
                                            <!--        class="rounded-circle">-->
                                            <!--</a>-->
                                            <!--<a href="javascript:;" class="avatar avatar-sm rounded-circle"-->
                                            <!--    data-bs-toggle="tooltip" data-original-title="Michael Lewis">-->
                                            <!--    <img alt="Image placeholder" src="/img/marie.jpg"-->
                                            <!--        class="rounded-circle">-->
                                            <!--</a>-->
                                            <!--<a href="javascript:;" class="avatar avatar-sm rounded-circle"-->
                                            <!--    data-bs-toggle="tooltip" data-original-title="Audrey Love">-->
                                            <!--    <img alt="Image placeholder" src="/img/team-1.jpg"-->
                                            <!--        class="rounded-circle">-->
                                            <!--</a>-->
                                            <!--</div>-->
                                            <p class="font-weight-bold text-white text-sm mb-0">
                                                {{ $t('words.join-thousands-of-other-talented-people-like-you') }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="text-start position-absolute fixed-bottom ms-7">
                                        <h6 class="text-white text-sm mb-5">
                                            {{ $t('words.all-rights-reserved') }} © 2023
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-black text-dark display-6">{{ $t('words.sign-up') }}</h3>
                                    <p class="mb-0">{{ $t('words.sign-up-tag-line') }}</p>
                                </div>
                                <div class="card-body">
                                    <a :href="route('login.google')"
                                       type="button"
                                       class="tw-my-5 tw-flex tw-justify-center tw-border tw-border-gray-400 tw-rounded tw-w-full tw-py-3 tw-transition hover:tw-bg-gray-100 hover:tw-text-gray-800">
                                        <img class="tw-w-5 tw-me-3" src="/../img/google-logo.svg" alt="google-logo" />
                                        <span class="btn-inner--text">{{ $t('words.login-using') }} Google</span>
                                    </a>
                                    <form role="form" @submit.prevent="submit">
                                        <label>{{ $t('words.name') }}</label>
                                        <div class="mb-3">
                                            <input type="text"
                                                   v-model="form.name"
                                                   dir="auto"
                                                   class="form-control"
                                                   aria-label="Name"
                                                   required
                                                   aria-describedby="name-addon">
                                        </div>
                                        <label>{{ $t('words.email') }}</label>
                                        <div class="mb-3">
                                            <input type="email"
                                                   v-model="form.email"
                                                   dir="ltr"
                                                   class="form-control"
                                                   required
                                                   aria-label="Email"
                                                   aria-describedby="email-addon">
                                        </div>
                                        <label>{{ $t('words.password') }}</label>
                                        <div class="mb-3">
                                            <input type="password"
                                                   minlength="8"
                                                   dir="ltr"
                                                   required
                                                   v-model="form.password"
                                                   class="form-control"
                                                   aria-label="Password" aria-describedby="password-addon">
                                        </div>

                                        <div class="form-check form-check-info text-right mb-0">
                                            <input class=""
                                                   type="checkbox"
                                                   v-model="form.terms"
                                                   required
                                                   id="flexCheckDefault">
                                            <label class="font-weight-normal text-dark mb-0 me-2" for="flexCheckDefault">
                                                {{ $t('words.i-agree-to') }} <a href="javascript:;" class="text-dark font-weight-bold">{{ $t('words.terms-and-conditions') }}</a>.
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">
                                                {{ $t('words.sign-up') }}
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-xs mx-auto">
                                        {{ $t('words.already-have-an-account') }}
                                        <a href="javascript:;" class="text-dark font-weight-bold">{{ $t('words.login') }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
