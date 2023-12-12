<template>
    <Navbar />
    <main class="main-content max-height-vh-100 h-100 mx-8 my-6">
        <div class="row">
            <div class="col-12">
<!--                d-md-flex align-items-center mb-4-->
                <div class="tw-flex tw-justify-between">
                    <div class="mb-md-0 mb-4">
                        <h5 class="font-weight-semibold mb-1 mt-4">تفاصيل الفاتورة</h5>
                    </div>
                    <div>
                        <div class="tw-mx-12 mb-4" v-if="enrollments.paid_at === null">
                            <a class="btn-grad" :href="route('invoices.noon.pay', {id: enrollments.invoice_id})">سداد الفاتورة</a>
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
                        <div class="tw-flex tw-justify-between">
                            <div>
                                <div class="mt-4 mx-4">
                                    <h4>فاتورة ضريبية</h4>
                                    <h4 class="font-weight-semibold tw-text-gray-600">#{{invoice.number}}</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="pt-5 pb-6 bg-cover" style="background-image: url('/WM-LOGO.png')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <Footer class="px-10 mt-6" />
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
