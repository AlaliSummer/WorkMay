<template>
    <Head :title="$t('words.courses')" />
    <Navbar />
    <main class="main-content max-height-vh-100 h-100">
        <div class="pt-5 pb-6 bg-cover" style="background-image: url('/img/header-blue-purple.jpg')"></div>
        <div class="container my-3 py-3">
            <h2 class="my-5">{{course.title}}</h2>
            <div class="grid-row-2 tw-grid md:tw-grid-cols-1 lg:tw-grid-cols-2 tw-gap-12">
                <div>
                    <div class="d-flex">
                        <img v-if="course.title === 'إدارة الازمات'" class="border-radius-xl" src="https://ptc-ksa.net/wp-content/uploads/2023/09/top-view-abstract-representation-financial-crisis-e1694680164907.png" width="650"><br/>
                        <img v-if="course.title === 'أساسيات الأعمال المكتبية'" class="border-radius-xl" src="https://ptc-ksa.net/wp-content/uploads/2023/12/top-view-workspace-with-glasses-cup-tea1.png" width="650"><br/>
                        <img v-if="course.title === 'القيادة الإدارية'" class="border-radius-xl" src="https://ptc-ksa.net/wp-content/uploads/2023/12/financial-business2.png" width="650"><br/>
                        <img v-if="course.title === 'إدارة المشاريع الاحترافية (®PMP) - دورة معتمدة'" class="border-radius-xl" src="https://ptc-ksa.net/wp-content/uploads/2023/12/40.png" width="650"><br/>
                        <img v-if="course.title === 'PMP'" class="border-radius-xl" src="https://piktochart.com/wp-content/uploads/2023/07/large-92-600x848.jpg" width="650"><br/>
                    </div>
                </div>
                <div>
                    <h5>معلومات عن الدورة</h5>
                    <p>{{course.description}}</p>
                    <div class="tw-grid tw-grid-cols-2 tw-mt-10">
                        <div>
                            <h5>الفترة</h5>
                            <p>
                                {{ course.from_date }}<br/>
                                {{ course.to_date }}<br/>
                                ({{ course.days }}) ايام
                            </p>
                        </div>
                        <div>
                            <h5>الموقع</h5>
                            <p>قاعة فندقية</p>
                        </div>
                        <div>
                            <h5>المقاعد المتاحة</h5>
                            <p>{{ course.seats_available }}</p>
                        </div>
                        <div>
                            <h5>السعر</h5>
                            <p>{{ course.price }} ر.س.</p>
                        </div>
                    </div>
                </div>
                <div></div>
                <div v-if="can_enroll">
                    <hr class="horizontal mb-4 dark">
                    <div class="tw-grid tw-text-center tw-grid-col-1 md:tw-grid-cols-1 lg:tw-grid-cols-2">
                        <div v-if="course.is_user_enrolled" class="lg:tw-text-right">
                            <div>
                                <div class="tw-text-green-700 tw-text-sm py-2 ">
                                    تاريخ التسجيل:
                                    {{enrollments.enrolled_at}}
                                </div>
                            </div>
                            <div class="mt-2" v-if="invoice.paid_at === null">
                                لتأكيد حجز مقعدك قم بسداد الفاتورة
                            </div>
                        </div>
                        <div>
                            <div v-if="course.is_user_enrolled">
                                <div class="tw-mx-12 mt-4" v-if="invoice.paid_at === null">
                                    <a class="btn-grad-secondary" :href="route('invoices.show', {id: enrollments.invoice_id})">سداد الفاتورة</a>
                                </div>
                                <div v-if="invoice.paid_at">
                                    <a class="btn-grad-secondary" :href="route('invoices.show', {id: enrollments.invoice_id})">عرض الفاتورة</a>
                                </div>
                            </div>
                            <div v-if="!course.is_user_enrolled">
                                <inertia-link :href="route('courses.confirm', course.id)" class="btn-grad-secondary">
                                    سجل الان
                                </inertia-link>
                            </div>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <hr class="horizontal mb-4 dark">
                    <h4 class="tw-text-red-500">انتهت الدورة!</h4>
                    <p class="tw-text-gray-400">يمكنك تصفح دوراتنا القادمة وحجز مقعدك مبكرا</p>
                </div>
            </div>
            <Footer class="container" />
        </div>
    </main>

</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";
import { Head } from '@inertiajs/vue3';

export default {
    components: {CourseCard, Footer, Navbar, Head},
    props: ['users', 'course', 'old_courses', 'upcoming_courses', 'can_enroll', 'enrollments', 'invoice'],
    methods: {
        confirmCourse() {
            this.$inertia.post(route('courses.invoices', {id: this.courses.id}));
        }
    }
}
</script>
