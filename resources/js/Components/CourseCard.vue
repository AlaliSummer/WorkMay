<template>
    <div class=" my-auto" v-for="course in courses.data" :key="course.id" >
        <div class="d-flex">
            <img src="https://piktochart.com/wp-content/uploads/2023/07/large-92-600x848.jpg"><br/>
        </div>
        <p>{{ course.title }}</p>
        <!--        <p>courses.title</p>-->
        <button @click="courseDetails" class="items-center px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ltr:tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
            {{ $t('words.course-details') }}
        </button>
        <inertia-link class="font-bold text-center mx-3 mt-5 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-red-700 active:bg-red-900 border border-transparent rounded-md font-semibold text-xs text-black uppercase ltr:tracking-widest focus:outline-none focus:border-gray-300 focus:shadow-outline-gray transition ease-in-out duration-150 disabled:cursor-not-allowed mx-"
                      :href="route('courses.show', course.id)">
            {{ $t('words.simple-table') }}
        </inertia-link>

    </div>
</template>

<script>

export default {
    components: {
    },
    props: ['users', 'courses'],
    name: "CourseCard",
    data() {
        return {
        }
    },
    methods: {
        courseDetails: {

        }
    }
}
</script>

<style scoped>

</style>
