<template>
    <Navbar />
    <Head :title="$t('words.invoice') + ' ' + invoice.number" />
    <main class="container">
        <div class="row">
            <div class="col-12 col-lg-10 mx-auto">
                <div class="tw-flex tw-justify-between tw-items-center mt-5">
                    <h5 class="font-weight-semibold">تفاصيل الفاتورة</h5>
                    <div>
                        <div v-if="invoice.paid_at === null">
                            <a class="btn-grad text-xs" :href="route('invoices.noon.pay', {id: enrollments.invoice_id})">السداد الآن</a>
                        </div>
                        <div v-else>
                            <img class="tw-center" src="https://i.ibb.co/kMHzJWW/checked.png" width="80" height="80">
                        </div>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-sm font-weight-semibold mb-1">الدورة</h6>
                        <p class="text-sm">{{invoice.course.title}}</p>
                    </div>

                    <div class="col-md-8 mb-4">
                        <div class="card border shadow-xs">
                            <div class="card-body">
                                <div class="tw-flex tw-justify-between mx-6 mt-5">
                                    <div class="">
                                        <h4>فاتورة ضريبية</h4>
                                        <h4 class="font-weight-semibold tw-text-gray-600">#{{invoice.number}}</h4>
                                    </div>
                                    <img src="/WM-LOGO.png" alt="Logo" class="w-10 tw-self-center">
                                </div>
                                <hr class="horizontal mb-4 dark mx-6">
                                <!-- customer / business information -->
                                <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-6">
                                    <div>
                                        <div class="my-1">من:</div>
                                        <div class="my-1 tw-text-black">شركة مركز احترافية المدرب للتدريب</div>
                                        <div class="my-1 tw-text-black">الرياض، حي اليرموك</div>
                                        <div class="my-1 tw-text-black">311555192400003</div>
                                    </div>
                                    <div>
                                        <div class="my-1">الى:</div>
                                        <div class="my-1 tw-text-black">{{invoice.user.name}}</div>
                                        <div class="my-1 tw-text-black">
                                            <!-- customer address -->
                                        </div>
                                        <div class="my-1 tw-text-black">{{ invoice.user.phone }}</div>
                                    </div>
                                </div>
                                <hr class="horizontal mb-4 dark mx-6">

                                <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-6">
                                    <div>
                                        <div class="my-1">الوصف:</div>
                                        <div class="my-1 tw-text-black">{{invoice.course.title}}</div>
                                    </div>
                                    <div>
                                        <div class="my-1">السعر:</div>
                                        <div class="my-1 tw-text-black">{{invoice.course.price}}</div>
                                    </div>
                                </div>

                                <hr class="horizontal mb-4 dark mx-6">
                                <div class="tw-grid tw-grid-cols-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-5">
                                    <div>
                                        <img :src="invoice.invoice_qr_image" alt="Logo" class=" tw-align-items-end w-60">
                                    </div>
                                    <div class="tw-grid tw-grid-cols-2">
                                        <div class="my-1">المجموع:</div>
                                        <div class="my-1 tw-text-black">{{invoice.sub_total}}</div>
                                        <div class="my-1">الضريبة:</div>
                                        <div class="my-1 tw-text-black">{{invoice.tax}}</div>
                                        <div class="my-1">الإجمالي:</div>
                                        <div class="my-1 tw-text-black">{{invoice.grand_total}}</div>
                                        <div class="tw-flex tw-justify-between tw-col-span-2">
                                            <svg width="40" height="40" class="mx-0.5">
                                                <image class="inline" xlink:href="https://www.svgrepo.com/show/328112/visa.svg" src="https://www.svgrepo.com/show/328112/visa.svg" width="40" height="40"/>
                                            </svg>
                                            <svg width="20" height="40" class="mx-0.5">
                                                <image class="inline" xlink:href="https://www.svgrepo.com/show/163750/mastercard.svg" src="https://www.svgrepo.com/show/163750/mastercard.svg" width="20" height="40"/>
                                            </svg>
                                            <svg width="40" height="40" class="mx-0.5">
                                                <image class="inline" xlink:href="https://upload.wikimedia.org/wikipedia/commons/f/fb/Mada_Logo.svg" src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Mada_Logo.svg" width="40" height="40"/>
                                            </svg>
                                            <svg width="40" height="40" class="mx-0.5">
                                                <image class="inline" xlink:href="https://www.svgrepo.com/show/303191/apple-pay-logo.svg" src="https://www.svgrepo.com/show/303191/apple-pay-logo.svg" width="40" height="40"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <hr class="horizontal mb-4 dark mx-6">
                                <div class="tw-mx-12 my-5" v-if="invoice.paid_at === null">
                                    <a class="btn-grad" :href="route('invoices.noon.pay', {id: enrollments.invoice_id})">السداد الآن</a>
                                </div>
                                <div v-else class="tw-text-white tw-bg-green-700 tw-rounded-full tw-mx-8 tw-px-6 tw-py-1 tw-font-bold tw-border-solid border-2 tw-border-green-700">
                                    <center>
                                        {{ $t('words.paid') }}
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <Footer class="container" />
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";
import { Head } from '@inertiajs/vue3';

export default {
    components: {CourseCard, Footer, Navbar, Head},
    props: ['users', 'course', 'enrollments', 'invoice'],
    methods: {
    }
}
</script>
