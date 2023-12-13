<template>
    <Navbar />
    <main class="main-content max-height-vh-100 h-100">
        <div class="pt-5 pb-6 bg-cover" style="background-image: url('/img/header-blue-purple.jpg')"></div>
        <div class="container my-3 py-3">
            <h2 class="my-5">{{courses.title}}</h2>
            <div class="grid-row-2 tw-grid md:tw-grid-cols-1 lg:tw-grid-cols-2 tw-gap-12">
                <div>
                    <div class="d-flex">
                        <img class="border-radius-xl" src="https://memberpress.com/wp-content/uploads/2019/11/promote-courses-to-students-1.jpg" width="650"><br/>
                    </div>
                </div>
                <div>
                    <h5>معلومات عن الدورة</h5>
                    <p>{{courses.description}}</p>
                    <div>
                        <h5>المقاعد المتاحة</h5>
                        <p>{{courses.seats_available}}</p>
                    </div>
                    <div>
                        <h5>السعر</h5>
                        <p>{{courses.price}}</p>
                    </div>
                    <div>
                        <h5>عدد الساعات</h5>
                        <p>{{courses.hours}}</p>
                    </div>
                </div>
                <div></div>
                <div>
                    <hr class="horizontal mb-4 dark">
                    <div class="tw-grid tw-text-center tw-grid-col-1 md:tw-grid-cols-1 lg:tw-grid-cols-2">
                        <div v-if="courses.is_user_enrolled" class="lg:tw-text-right">
                            <div>
                            <div class="tw-text-green-700 tw-text-sm pt-2 ">
                                تاريخ التسجيل:
                                {{enrollments.enrolled_at}}
                            </div>
                            </div>
                            <div class="mt-2" v-if="enrollments.paid_at === null">
                                لتأكيد حجز مقعدك قم بسداد الفاتورة
                            </div>
                        </div>
                        <div>
                            <div v-if="courses.is_user_enrolled">
                                <div class="tw-mx-12 mt-4" v-if="enrollments.paid_at === null">
                                    <a class="btn-grad-secondary" :href="route('invoice.show', {id: enrollments.invoice_id})">سداد الفاتورة</a>
                                </div>
                                <div v-if="enrollments.paid_at">
                                    <a class="btn-grad-secondary" :href="route('invoice.show', {id: enrollments.invoice_id})">عرض الفاتورة</a>
                                </div>
                            </div>
                            <div v-if="!courses.is_user_enrolled">
                                <button @click="enrollCourse" class="btn-grad-secondary">
                                    سجل الان
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <Footer class="px-10 mt-6" />
        </div>
    </main>

</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";

export default {
    components: {CourseCard, Footer, Navbar},
    props: ['users', 'courses', 'enrollments'],
    methods: {
        enrollCourse() {
            //If Signed in: Create an Invoice
            // if(auth()->user()){
            if(confirm('Sure?')){
                this.$inertia.post(route('courses.invoices', {id: this.courses.id}));
            }
            // }else{
            //     this.$inertia.get(route('login');
            //}
        }
    }
}
</script>
