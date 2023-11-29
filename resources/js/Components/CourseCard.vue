<template>
    <div class=" my-auto" v-for="course in courses" :key="course.id">
        <div class="d-flex">
            <img src="https://piktochart.com/wp-content/uploads/2023/07/large-92-600x848.jpg"><br/>
        </div>
        <p>{{ courses.title }}</p>
<!--        <p>courses.title</p>-->
        <button @click="open" class="items-center px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ltr:tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">
            {{ $t('words.course-details') }}
        </button>

    </div>
</template>

<script>

export default {
    components: {
    },
    props: ['users', 'courses'],
    data() {
        return {
        }
    },
    methods: {
    }
}
</script>

<style scoped>

</style>
