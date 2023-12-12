<template>
    <Navbar />
    <main class="main-content max-height-vh-100 h-100 mx-8 my-6">
        <div class="row">
            <div class="col-12">
<!--                d-md-flex align-items-center mb-4-->
                <div class="tw-grid tw-grid-cols-2">
                    <div class="mb-md-0 mb-4">
                        <h5 class="font-weight-semibold mb-1">تفاصيل الفاتورة</h5>
                        <p class="text-sm mb-0">Pick an account plan that fits your workflow.</p>
                    </div>
                    <div>
                        <div class="tw-mx-12 mt-4" v-if="enrollments.paid_at === null">
                            <a class="btn-grad-secondary" :href="route('invoices.noon.pay', {id: enrollments.invoice_id})">سداد الفاتورة</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="col-md-4">
                <h6 class="text-sm font-weight-semibold mb-1">Card details</h6>
                <p class="text-sm">We’ll credit your account if you need to <br> downgrade during the billing
                    cycle.</p>
            </div>
            <div class="col-md-8 mb-4">
                <div class="card border shadow-xs">
                    <div class="card-body">
                        <div class="row">
                            <img src="WM-LOGO.png">
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
    props: ['users', 'courses', 'enrollments'],
    methods: {
    }
}
</script>
