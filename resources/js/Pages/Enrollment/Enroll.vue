<template>
    <navbar/>
    <center>
        <div class="tw-container px-3 tw-py-10 lg:tw-w-1/2 tw-mx-auto">
            <p class="text-red-500">{{ message }}</p>
            <img class="pb-4" src="https://i.ibb.co/kMHzJWW/checked.png" alt="Girl in a jacket" width="100" height="100">
            <h2 class="pb-4"> قمت بالتسجيل بنجاح في دورة {{course.title}}</h2>
            <p class="">{{course.description}}</p>
            <hr class="horizontal mb-4 dark">
            <a class="btn-grad-secondary " :href="route('invoice.show', {id: enrollment.invoice_id})">عرض الفاتورة</a>
            <p class="text-gray-400 mt-2">تم ارسال تفاصيل الفاتورة عبر البريد الالكتروني</p>
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
    props: ['users', 'course', 'message', 'enrollment'],
    methods: {

    }
}
</script>
