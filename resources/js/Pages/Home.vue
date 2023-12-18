
<template>
    <Head :title="$t('words.home')" />
    <navbar/>
    <PublicLayout>
        <div class="col-12">
            <!--                d-md-flex align-items-center mb-4-->
            <div class="bg">
                <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-2 lg:tw-grid-cols-2 tw-gap-12 mt-4 mx-8 pb-6">
                    <div class="grid-row-2 tw-grid md:tw-grid-cols-1 lg:tw-grid-cols-1 mb-md-0 mx-4">
                        <div>
                            <p class="mt-7" style="color:#A73468;">
                                <span class="text-bold text-sm">دورات</span>,
                                <span class="text-bold text-sm">تقنية</span>,
                                <span class="text-bold text-sm">مهنية</span>,
                                <span class="text-bold text-sm">اعمال</span>.
                            </p>
                            <h1 class="font-weight-semibold">تعلم من الأفضل،</h1>
                            <h1 class="font-weight-semibold">كن الأفضل.</h1>
                        </div>
                        <div>
<!--                            <img src="/img/3d-glassy-layered-wavy-ribbons.png" alt="Logo" class="w-10 tw-mt-5 my-2 ">-->
                            <p class="my-5">مع المشهد المتغير باستمرار والتحديات العالمية الجديدة، توجب على الأساتذة والطلاب في جميع أنحاء العالم التكيف. أصبح التواصل مع الأصدقاء والعائلة أسهل عن طريق تطبيقات مثل واتساب أو زوم  وغيرها، وتبع التعليم نفس النهج أيضاً.</p>
                            <button class="btn-grad my-5 px-8" >الدورات القادمة</button>
                        </div>
                    </div>
                    <div>
                        <div class="tw-flex tw-justify-end mx-4" >
                            <img src="/img/3d-construction-abstract-composition-with-human-silhouette-1.png" alt="Logo" class="tw-align-items-end w-60 tw-mt-5 mx-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-8">
                <div class="tw-rounded-lg tw-bg-white tw-drop-shadow-2xl mb-8">
                    <div class="py-6 px-6">
                        <div class="tw-grid tw-grid-col-2 sm:tw-grid-cols-2 md:tw-grid-cols-3 lg:tw-grid-cols-3 tw-gap-12">
                            <div>
                                استكشف أحدث الدورات المهنية المتاحة لدينا والمختارة بعناية.
                            </div>
                            <div class="tw-grid tw-grid-row-3 tw-grid-col-1 sm:tw-grid-cols-1 md:tw-grid-cols-1 lg:tw-grid-cols-1">
                                <div><h5>طور مهارات الموظفين</h5></div>
                                <div><h6 class="tw-text-gray-500">للشركات</h6></div>
                                <div class="mt-2">قم بتدريب وتطوير مهارات موظفيك بدورات معتمدة من مؤسسة العامة للتدريب التقني والمهني لتلبية شروط الإفصاح عن التدريب</div>
                            </div>
                            <div class="tw-grid tw-grid-row-3 tw-grid-col-1 sm:tw-grid-cols-1 md:tw-grid-cols-1 lg:tw-grid-cols-1">
                                <div><h5>تطوير الذات</h5></div>
                                <div><h6 class="tw-text-gray-500">للأشخاص</h6></div>
                                <div class="mt-2">قم باكتساب مهارات مهنية وطور ذاتك من قائمة الدورات المقدمة من قبل مدربين معتمدين.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal mb-4 dark mx-8">
            <div class="row mx-8">
                <div class="col-md-4">
                    <h6 class="text-2xl font-weight-semibold mb-1 pb-6">{{ $t('words.up-coming-courses') }}</h6>
                </div>
                <CourseCard
                    v-if="upcoming_courses"
                    :courses="upcoming_courses"
                />
            </div>
            <hr class="horizontal mb-4 dark mx-8">
            <div class="row mx-8">
                <div class="col-md-4">
                    <h6 class="text-2xl font-weight-semibold mb-1 pb-6">{{ $t('words.previous-courses') }}</h6>
                </div>
                <CourseCard
                    v-if="old_courses"
                    :courses="old_courses"
                />
            </div>
        </div>
    </PublicLayout>
    <Footer class="px-10" />
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import CourseCard from "@/Components/CourseCard.vue";
import { Head } from '@inertiajs/vue3';
export default {
    components: {CourseCard, Footer, Navbar, Head},
    props: ['users', 'courses', 'old_courses', 'upcoming_courses'],
}
</script>

<style>
.bg {
    background-image: url("/img/New Project(2).png");
    background-size: cover;
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
</style>
