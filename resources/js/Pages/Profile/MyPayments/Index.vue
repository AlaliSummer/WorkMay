<template>
    <ProfileNavbar/>
    <main>
        <div class="pt-5 pb-6 bg-cover" style="background-image: url('/img/header-blue-purple.jpg')"></div>
        <div class="container">
            <div class="container">
                <div class="tw-flex tw-justify-between tw-relative">
                    <div class="">
                        <h4 class="text-2xl font-weight-semibold pt-6 pb-4" >المدفوعات</h4>
                    </div>
                    <img src="/img/zeta-payment-card.png" alt="Logo" class="w-20 tw-self-center tw-absolute tw-bottom-0 tw-left-0">
                </div>
                <hr class="horizontal mb-4 dark mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-sm font-weight-semibold mb-1">تاريخ المدفوعات</h6>
                        <p class="text-sm">We’ll credit your account if you need to <br> downgrade during the billing cycle.
                        </p>
                    </div>
                    <div class="col-md-8 mb-6">
                        <div class="card shadow-xs border mb-4">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="d-flex align-items-center py-3 px-4 text-sm">
                                            <span class="text-xs font-weight-semibold opacity-7 ms-1">الفاتورة</span>
                                        </th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">الحالة</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">الدورة</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">المبلغ</th>
                                        <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="invoice in invoices" :key="invoice.id">
                                        <td class="d-flex align-items-center py-3 px-4 text-sm">
                                            <inertia-link :href="route('invoices.show', invoice.id)">
                                                <span class="text-sm">{{ invoice.created_at_date }} <br/> {{ invoice.number_formatted }}</span>
                                            </inertia-link>
                                        </td>
                                        <td>
                                            <div v-if="invoice.paid_at">
                                                <span class="badge badge-sm border border-success text-success bg-success border-radius-sm">
                                                    مدفوع
                                            </span>
                                            </div>
                                            <div v-if="!invoice.paid_at">
                                                <span class="badge badge-sm border border-failed text-failed bg-failed border-radius-sm">
                                                    غير مدفوع
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <inertia-link :href="route('invoices.show', invoice.id)">
                                                <span class="text-sm">{{ invoice.course.title }}</span>
                                            </inertia-link>
                                        </td>
                                        <td>
                                            <span class="text-sm">{{ invoice.grand_total }}</span>
                                        </td>
                                        <td>
                                            <button @click="downloadInvoice"><svg width="25" height="25" class="mx-3">
                                                <image class=inline xlink:href="https://i.ibb.co/Y0gdtmc/download.png" src="https://i.ibb.co/Y0gdtmc/download.png" width="25" height="25"/>
                                            </svg></button>
                                            <button @click="shareInvoice"><svg width="20" height="20" class="mx-3">
                                                <image class=inline xlink:href="https://i.ibb.co/vmpjZpL/share.png" src="https://i.ibb.co/vmpjZpL/share.png" width="20" height="20"/>
                                            </svg></button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <Footer class="container"/>
</template>
<script>
import ProfileNavbar from "@/Components/ProfileNavbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";
import { Head } from '@inertiajs/vue3';

export default {
    components: {CourseCard, Footer, ProfileNavbar, Head},
    props: ['user', 'invoices', 'amount_due', 'course',],
    methods: {
        downloadInvoice()
        {
            //
        },
        shareInvoice()
        {
            //
        },
    }
}
</script>
