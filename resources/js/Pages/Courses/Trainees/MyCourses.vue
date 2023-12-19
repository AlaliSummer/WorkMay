<template>
    <Navbar/>
    SUMMER :)
    <Footer/>
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";
import { Head } from '@inertiajs/vue3';

export default {
    components: {CourseCard, Footer, Navbar, Head},
    props: ['enrollments'],
}
</script>
