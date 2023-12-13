<template>
    <Navbar />
    <main class="main-content max-height-vh-100 h-100 mx-12 my-6">
        <div class="row">
            <div class="col-12">
<!--                d-md-flex align-items-center mb-4-->
                <div class="tw-flex tw-justify-between">
                    <div class="mb-md-0 mb-4">
                        <h5 class="font-weight-semibold mb-1 mt-4">تفاصيل الفاتورة</h5>
                    </div>
                    <div>
                        <div class="tw-mx-12 mb-4" v-if="enrollments.paid_at === null">
                            <a class="btn-grad" :href="route('invoices.noon.pay', {id: enrollments.invoice_id})">السداد الآن</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-4">
                <h6 class="text-sm font-weight-semibold mb-1">الدورة</h6>
                <p class="text-sm">{{invoice.course.title}}</p>
            </div>
            <div class="col-md-8 mb-4">
                <div class="card border shadow-xs">
                    <div class="card-body">
                        <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2">
                            <div>
                                <div class="mt-4 mx-6">
                                    <h4>فاتورة ضريبية</h4>
                                    <h4 class="font-weight-semibold tw-text-gray-600">#{{invoice.number}}</h4>
                                </div>
                            </div>
                            <div>
                                <div class="tw-flex tw-justify-end">
                                    <img src="/WM-LOGO.png" alt="Logo" class="tw-align-items-end w-20 tw-mt-5 mx-6">
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal mb-4 dark mx-6">
                        <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-6">
                            <div class="my-1">من:</div>
                            <div class="my-1">الى:</div>
                            <div class="my-1 tw-text-black">شركة مركز احترافية المدرب للتدريب</div>
                            <div class="my-1 tw-text-black">{{invoice.user.name}}</div>
                            <div class="my-1 tw-text-black">الرياض، حي اليرموك</div>
                            <div class="my-1 tw-text-black">الرياض، حي الازدهار</div>
                            <div class="my-1 tw-text-black">311555192400003</div>
                            <div class="my-1 tw-text-black">0565176235</div>
                        </div>
                        <hr class="horizontal mb-4 dark mx-6">
                        <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-6">
                            <div class="my-1">الوصف:</div>
                            <div class="my-1">السعر:</div>
                            <div class="my-1 tw-text-black">{{invoice.course.title}}</div>
                            <div class="my-1 tw-text-black">{{invoice.course.price}}</div>
                        </div>
                        <hr class="horizontal mb-4 dark mx-6">
                        <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 mt-4 mx-5">
                            <div>
                                <img src="/qrcode-feature.svg" alt="Logo" class=" tw-align-items-end w-60">
                            </div>
                            <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2">
                                <div class="my-1">المجموع:</div>
                                <div class="my-1 tw-text-black">{{invoice.sub_total}}</div>
                                <div class="my-1">الضريبة:</div>
                                <div class="my-1 tw-text-black">{{invoice.tax}}</div>
                                <div class="my-1">الإجمالي:</div>
                                <div class="my-1 tw-text-black">{{invoice.grand_total}}</div>
                                <div class="tw-grid tw-grid-col-4 sm:tw-grid-cols-4 md:tw-grid-cols-4 lg:tw-grid-cols-4">
                                    <div>
                                        <svg width="40" height="40" class="mx-0.5">
                                            <image class=inline xlink:href="https://www.svgrepo.com/show/328112/visa.svg" src="https://www.svgrepo.com/show/328112/visa.svg" width="40" height="40"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <svg width="20" height="40" class="mx-0.5">
                                            <image class=inline xlink:href="https://www.svgrepo.com/show/163750/mastercard.svg" src="https://www.svgrepo.com/show/163750/mastercard.svg" width="20" height="40"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <svg width="40" height="40" class="mx-0.5">
                                            <image class=inline xlink:href="https://upload.wikimedia.org/wikipedia/commons/f/fb/Mada_Logo.svg" src="https://upload.wikimedia.org/wikipedia/commons/f/fb/Mada_Logo.svg" width="40" height="40"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <svg width="40" height="40" class="mx-0.5">
                                            <image class=inline xlink:href="https://www.svgrepo.com/show/303191/apple-pay-logo.svg" src="https://www.svgrepo.com/show/303191/apple-pay-logo.svg" width="40" height="40"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal mb-4 dark mx-6">
                        <div class="tw-mx-12 my-5" v-if="enrollments.paid_at === null">
                            <a class="btn-grad" :href="route('invoices.noon.pay', {id: enrollments.invoice_id})">السداد الآن</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <Footer class="px-10 mt-12" />
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";

export default {
    components: {CourseCard, Footer, Navbar},
    props: ['users', 'course', 'enrollments', 'invoice'],
    methods: {
    }
}
</script>
