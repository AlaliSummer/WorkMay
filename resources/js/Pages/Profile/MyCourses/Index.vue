<template>
    <ProfileNavbar/>
    <main>
        <div class="pt-5 pb-6 bg-cover" style="background-image: url('/img/header-blue-purple.jpg')"></div>
        <div class="container">
            <div v-if="enrollments.course">
                <div class="tw-flex tw-justify-between tw-relative">
                <div class="">
                    <h4 class="text-2xl font-weight-semibold pt-6 pb-4" >الدورات المسجلة</h4>
                </div>
                <img src="/img/neon-data-analytics-and-visualization-on-screen.png" alt="Logo" class="w-25 tw-self-center tw-absolute tw-bottom-0 tw-left-0">
            </div>
                <hr class="horizontal mb-4 dark mt-4">
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
                <div class="tw-flex tw-justify-between">
                    <div class="">
                        <h4 class="text-2xl font-weight-semibold pt-6 pb-4" >الدورات المقدمة</h4>
                    </div>
                    <!--                <img src="/img/mega-creator(2).png" alt="Logo" class="w-20 tw-self-center">-->
                </div>
                <hr class="horizontal mb-4 dark mt-4">
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
                    <center>
                        <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                            <div class="card h-100 card-plain border border-dashed px-5">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                    <a href="javascript:;">
                                        <div
                                            class="icon icon-shape bg-dark text-center text-white rounded-circle mx-auto d-flex align-items-center justify-content-center mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="19"
                                                 width="19" viewBox="0 0 24 24" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <h5 class="text-dark text-lg"> انشاء دورة جديدة </h5>
                                        <p class="text-sm text-secondary mb-0">Drive into the editor and add
                                            your content.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div v-else class="my-6">
                <center>
                    <img src="/img/neon-shopping-cart-1.png" alt="Logo" class="w-25 tw-self-center">
                    <h4 class="pt-4">لا يوجد دورات مسجلة</h4>
                    <p>قم بالتسجيل في افضل الدورات المقدمة من منصتنا</p>
                </center>
            </div>
        </div>
    </main>
    <Footer class="container"/>
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
