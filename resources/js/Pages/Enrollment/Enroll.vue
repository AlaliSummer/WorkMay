<template>
    <navbar/>
    <center>
        <div>
            <p class="text-red-500">{{ message }}</p>
            <img class="pt-8 pb-4" src="https://i.ibb.co/kMHzJWW/checked.png" alt="Girl in a jacket" width="100" height="100">
            <h2 class="pb-4"> قمت بالتسجيل بنجاح في دورة {{courses.title}}</h2>
            <p class="px-12">{{courses.description}}</p>
            <hr class="horizontal mb-4 dark">
            <button @click="enrollCourse">  <a href="javascript:;" class="btn btn-sm btn-dark">عرض الفاتورة</a></button>
            <p class="text-gray-400">تم ارسال تفاصيل الفاتورة عبر البريد الالكتروني</p>
        </div>
    </center>
    <footer/>
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";

export default {
    components: {CourseCard, Footer, Navbar},
    props: ['users', 'courses', 'message'],
    methods: {

    }
}
</script>
