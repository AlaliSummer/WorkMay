<template>
    <ProfileNavbar/>
    <main>
        <div class="pt-5 pb-6 bg-cover" style="background-image: url('/img/header-blue-purple.jpg')"></div>
        <div class="px-8">
            <div class="tw-flex tw-justify-between">
                <div class="">
                    <h4 class="text-2xl font-weight-semibold pt-10 pb-4" >دوراتي</h4>
                </div>
                <img src="/img/mega-creator(4).png" alt="Logo" class="w-20 tw-self-center">
            </div>
            <hr class="horizontal mb-4 dark mt-5">
            <div>
                <div class="row">
                    <div class="d-flex">
                        <div class="col-12">
                            <div>
                                <div class="card-body p-2">
                                    <div class="tw-grid tw-grid-col-1 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-3 tw-gap-12">
                                        <div class="mb-xl-0 mb-4" v-for="enroll in enrollments" :key="enroll.id" >
                                            <div
                                                class="tw-transition tw-transform hover:tw--translate-y-1 motion-reduce:tw-transition-none motion-reduce:hover:tw-transform-none card card-background border-radius-xl card-background-after-none align-items-start tw-mb-4">
                                                <div v-if="enroll.course.title === 'إدارة الازمات'" class="full-background bg-cover" style="background-image: url('https://ptc-ksa.net/wp-content/uploads/2023/09/top-view-abstract-representation-financial-crisis-e1694680164907.png')"></div>
                                                <div v-if="enroll.course.title === 'أساسيات الأعمال المكتبية'" class="full-background bg-cover" style="background-image: url('https://ptc-ksa.net/wp-content/uploads/2023/12/top-view-workspace-with-glasses-cup-tea1.png')"></div>
                                                <div v-if="enroll.course.title === 'القيادة الإدارية'" class="full-background bg-cover" style="background-image: url('https://ptc-ksa.net/wp-content/uploads/2023/12/financial-business2.png')"></div>
                                                <div v-if="enroll.course.title === 'إدارة المشاريع الاحترافية (®PMP) - دورة معتمدة'" class="full-background bg-cover" style="background-image: url('https://ptc-ksa.net/wp-content/uploads/2023/12/40.png')"></div>
                                                <div v-if="enroll.course.title === 'PMP'" class="full-background bg-cover" style="background-image: url('https://piktochart.com/wp-content/uploads/2023/07/large-92-600x848.jpg')"></div>
                                                <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                                                <div class="card-body text-start p-3 w-100">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div
                                                                class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                                                                <div class="">
                                                                    <p class="text-dark text-sm font-weight-bold mb-1">{{ enroll.course.instructor_name }}</p>
                                                                    <p class="text-xs text-secondary mb-0 tw-text-start">{{ enroll.course.from_date }} ({{ course.days}}) ايام</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript:;">
                                                <h4 class="font-weight-semibold">
                                                    {{ enroll.course.title }}
                                                </h4>
                                            </a>
                                            <p class="mb-4">
                                                {{enroll.course.description.substring(0,100)+"..."}}
                                            </p>
                                            <a href="javascript:;"
                                               class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                                                <inertia-link class="btn-grad text-white" :href="route('courses.show', enroll.course.id)">
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
                </div>
            </div>
        </div>
    </main>

    <Footer/>
</template>
<script>
import ProfileNavbar from "@/Components/ProfileNavbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";
import { Head } from '@inertiajs/vue3';

export default {
    components: {CourseCard, Footer, ProfileNavbar, Head},
    props: ['enrollments', 'course', 'user'],
}
</script>
