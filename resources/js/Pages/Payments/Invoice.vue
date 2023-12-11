<template>
    <Navbar />
    <main class="main-content max-height-vh-100 h-100">
        <h1>Invoice</h1>
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
