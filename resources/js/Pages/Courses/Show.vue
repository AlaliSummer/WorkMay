<template>
    <Navbar />
    <main class="main-content max-height-vh-100 h-100">
        <div class="pt-5 pb-6 bg-cover" style="background-image: url('/img/header-blue-purple.jpg')"></div>
        <div class="container my-3 py-3">
            <h1>{{courses.title}}</h1>
            <div class="d-flex">
                <img src="https://piktochart.com/wp-content/uploads/2023/07/large-92-600x848.jpg"><br/>
            </div>
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
            <div v-if="courses.is_user_enrolled">
                <div>لقد سجلت في الدورة بتاريخ:</div>
                <div>{{enrollments.enrolled_at}}</div>
                <div v-if="enrollments.paid_at === null">
                    لتأكيد حجز مقعدك قم بسداد الفاتورة
                </div>
                <div v-if="enrollments.paid_at">
<!--                    <button class="btn-grad-secondary">-->
<!--                        عرض الفاتورة-->
<!--                    </button>-->
                    <a class="btn-grad-secondary" :href="route('invoices.noon.pay', {id: '123'})">عرض الفاتورة</a>
                </div>
            </div>
            <div v-else>
                <button @click="enrollCourse" class="btn-grad-secondary">
                    سجل الان
                </button>
            </div>
            <Footer class="px-10" />
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
