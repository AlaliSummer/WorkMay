<template>
    <div class="">
        <div class="d-flex">
            <div class="col-12">
                <div class="">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0 font-weight-semibold text-lg">Last articles</h6>
                        <p class="text-sm mb-1">Here you will find the latest articles.</p>
                    </div>
                    <div class="card-body p-2">
                        <div class="tw-grid tw-grid-col-1 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-12">
                            <div class="mb-xl-0 mb-4" v-for="course in courses.data" :key="course.id" >
                                <div
                                    class="tw-transition tw-transform hover:tw--translate-y-1 motion-reduce:tw-transition-none motion-reduce:hover:tw-transform-none card card-background border-radius-xl card-background-after-none align-items-start tw-mb-4">
                                    <div class="full-background bg-cover"
                                         style="background-image: url('https://memberpress.com/wp-content/uploads/2019/11/promote-courses-to-students-1.jpg')"></div>
                                    <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                                    <div class="card-body text-start p-3 w-100">
                                        <div class="row">
                                            <div class="col-12">
                                                <div
                                                    class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                                                    <div class="">
                                                        <p class="text-dark text-sm font-weight-bold mb-1">خالد العبدالله</p>
                                                        <p class="text-xs text-secondary px-4 mb-0">20 Jul 2022</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:;">
                                    <h4 class="font-weight-semibold">
                                        {{ course.title }}
                                    </h4>
                                </a>
                                <p class="mb-4">
                                    {{course.description}}
                                </p>
                                <a href="javascript:;"
                                   class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                                    <inertia-link class="btn-grad text-white" :href="route('courses.show', course.id)">
                                        {{ $t('words.course-details') }}
                                    </inertia-link>
                                    <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <p></p>
        <!--        <p>courses.title</p>-->


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

<!--<template>-->
<!--    <div class=" my-auto">-->
<!--        <div class="d-flex">-->
<!--            <div class="col-12">-->
<!--                <div class="card shadow-xs border mb-4 pb-3">-->
<!--                    <div class="card-header pb-0 p-3">-->
<!--                        <h6 class="mb-0 font-weight-semibold text-lg">Last articles</h6>-->
<!--                        <p class="text-sm mb-1">Here you will find the latest articles.</p>-->
<!--                    </div>-->
<!--                    <div class="card-body p-3">-->
<!--                        <div class="row">-->
<!--                            <div  v-for="course in courses.data" :key="course.id"  class="col-xl-4 col-md-6 mb-xl-0 mb-4">-->
<!--                                <div-->
<!--                                    class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">-->
<!--                                    <div class="full-background bg-cover"-->
<!--                                         style="background-image: url('/img/')"></div>-->
<!--                                    <span class="mask bg-dark opacity-1 border-radius-sm"></span>-->
<!--                                    <div class="card-body text-start p-3 w-100">-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-12">-->
<!--                                                <div-->
<!--                                                    class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">-->
<!--                                                    <div class="w-50">-->
<!--                                                        <p class="text-dark text-sm font-weight-bold mb-1">المدرب: خالد العبدالله</p>-->
<!--                                                        <p class="text-xs text-secondary mb-0">20 Jul 2022</p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <a href="javascript:;">-->
<!--                                    <h4 class="font-weight-semibold">-->
<!--                                        {{ course.title }}-->
<!--                                    </h4>-->
<!--                                </a>-->
<!--                                <p class="mb-4">-->
<!--                                    As Uber works through a huge amount of internal management turmoil.-->
<!--                                </p>-->
<!--                                <a href="javascript:;"-->
<!--                                   class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">-->
<!--                                    <button @click="courseDetails" class="items-center px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ltr:tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">-->
<!--                                        {{ $t('words.course-details') }}-->
<!--                                    </button>-->
<!--                                    <inertia-link class="font-bold text-center mx-3 mt-5 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-red-700 active:bg-red-900 border border-transparent rounded-md font-semibold text-xs text-black uppercase ltr:tracking-widest focus:outline-none focus:border-gray-300 focus:shadow-outline-gray transition ease-in-out duration-150 disabled:cursor-not-allowed mx-"-->
<!--                                                  :href="route('courses.show', course.id)">-->
<!--                                        {{ $t('words.course-details') }}-->
<!--                                    </inertia-link>-->
<!--                                    <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>-->
<!--                                </a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--        <p></p>-->
<!--        &lt;!&ndash;        <p>courses.title</p>&ndash;&gt;-->


<!--    </div>-->
<!--</template>-->

<!--<script>-->

<!--export default {-->
<!--    components: {-->
<!--    },-->
<!--    props: ['users', 'courses'],-->
<!--    name: "CourseCard",-->
<!--    data() {-->
<!--        return {-->
<!--        }-->
<!--    },-->
<!--    methods: {-->
<!--        courseDetails: {-->

<!--        }-->
<!--    }-->
<!--}-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->

