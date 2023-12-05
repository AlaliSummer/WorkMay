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
            <button @click="enrollCourse" class="items-center px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ltr:tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
                سجل الان
            </button>
            <p v-if="courses.is_user_enrolled">yay</p>
            <p v-else>nooooo</p>
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
    props: ['users', 'courses'],
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
