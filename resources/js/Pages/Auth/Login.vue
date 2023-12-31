
<template>
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!--    -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent text-center">
                                    <h3 class="font-weight-black text-dark display-6">{{ $t('words.welcome') }}</h3>
                                </div>
                                <div class="card-body">
                                    <form role="form" @submit.prevent="submit">
                                        <div class="w-full">
                                        <label class="w-full">{{ $t('words.email') }}</label>
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" id="email" name="email" class="form-control"
                                                value=""
                                                aria-label="Email" aria-describedby="email-addon">
                                        </div>
                                        <label>{{ $t('words.password') }}</label>
                                        <div class="mb-3">
                                            <input type="password" id="password" name="password"
                                                value=""
                                                class="form-control" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <inertia-link :href="route('password.request')"
                                                class="text-xs font-weight-bold ms-auto mb-3">
                                                {{ $t('words.forgot-password') }}
                                            </inertia-link>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-dark w-100 mt- mb-3">{{ $t('words.login') }}</button>
                                            <a :href="route('login.google')" type="button" class="tw-flex tw-justify-center tw-border tw-border-gray-400 tw-rounded tw-w-full tw-py-3 tw-transition hover:tw-bg-gray-100 hover:tw-text-gray-800">
                                                <img class="tw-w-5 tw-me-3" src="/../img/google-logo.svg" alt="google-logo" />
                                                <span class="btn-inner--text">{{ $t('words.login-using') }} Google</span>
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-xs mx-auto">
                                        {{ $t('words.dont-have-an-account') }}
                                        <a :href="route('register')" class="text-dark font-weight-bold">
                                            {{ $t('words.sign-up') }}
                                        </a>
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
                                        <h2 class="mt-3 text-dark font-weight-bold">تابع رحلتك من هنا</h2>
                                        <h6 class="text-dark text-sm mt-5">كل الحقوق محفوظة © 2023</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
