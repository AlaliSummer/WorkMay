<template>
    <Head :title="$t('words.confirm-registration')" />
    <Navbar />
    <PublicLayout>
        <main class="main-content max-height-vh-100 h-100">
            <div class="pt-5 pb-6 bg-cover" style="background-image: url('/img/header-blue-purple.jpg')"></div>

            <div class="tw-container px-3 tw-py-20 lg:tw-w-1/2 tw-mx-auto">
                <h2>{{ $t('words.confirm-registration') }}</h2>
                <form @submit.prevent="submit">
                    <div class="tw-col-span-6 sm:tw-col-span-4">
                        <label>{{ $t('words.name') }}</label>
                        <div class="mb-3">
                            <input dir="auto"
                                   v-model="form.name"
                                   class="form-control"
                                   required
                            >
                        </div>
                        <InputError :message="form.errors.name" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <label>{{ $t('words.phone') }}</label>
                        <div class="mb-3">
                            <input dir="ltr"
                                   placeholder="9665xxxxxxxx"
                                   type="text"
                                   v-model="form.phone"
                                   class="form-control"
                                   required
                            >
                        </div>
                        <InputError :message="form.errors.phone" class="mt-2" />
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <label>{{ $t('words.course') }}</label>
                        <div class="mb-3">
                            <input dir="auto"
                                   type="text"
                                   v-model="course.title"
                                   class="form-control"
                                   disabled>
                        </div>
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <label>{{ $t('words.location') }}</label>
                        <div class="mb-3">
                            <input dir="auto"
                                   type="text"
                                   value="شمال الرياض - قاعة فندقية"
                                   class="form-control"
                                   disabled>
                        </div>
                    </div>

                    <!-- instructions to attend the course -->
                    <div id="instructions">
                        <ul class="tw-list-disc tw-px-5">
                            <li>بعد السداد يتم إرسال رسالة الى البريد الإلكتروني الخاص بكم تحتوي على موقع الدورة.</li>
                            <li>يحق للمتدرب إلغاء الحجز قبل 72 ساعة من تاريخ بدء الدورة.</li>
                            <li>يتم إرسال رسالة تذكير قبل بدء الدورة بيومين.</li>
                        </ul>
                    </div>

                    <div>
                        <button type="submit" class="btn-grad-secondary">
                            موافق، توجه الى صفحة سداد
                        </button>
                    </div>
                </form>

                <!--<div class="tw-text-xs">-->
                <!--<ul class="tw-list-disc tw-px-5">-->
                <!--        <li>* في حالة عدم الحضور للدورة، لا يتم استرجاع المبلغ المدفوع</li>-->
                <!--        <li>* تعتبر الدورة مؤكدة بعد تأكيد الحجز من قبل الإدارة</li>-->
                <!--        <li>* لا يسمح بالتصوير أو التسجيل الصوتي أو المرئي للدورة</li>-->
                <!--        <li>* يحق للإدارة إلغاء الدورة في حالة عدم اكتمال العدد الأدنى للمتدربين</li>-->
                <!--        <li>* يحق للإدارة تغيير موعد الدورة في حالة الضرورة</li>-->
                <!--        <li>* يحق للإدارة إلغاء الدورة في حالة الضرورة</li>-->
                <!--        <li>* يحق للإدارة تغيير المدرب في حالة الضرورة</li>-->
                <!--        <li>* يحق للإدارة إلغاء الدورة في حالة عدم اكتمال العدد الأدنى للمتدربين</li>-->
                <!--        <li>* يحق للمتدرب إلغاء الحجز قبل 72 ساعة من تاريخ بدء الدورة</li>-->
                <!--        <li>* يحق للمتدرب استبدال الدورة بأخرى في حالة عدم تناسبه مع الدورة</li>-->
                <!--        <li>* إذا تم تأكيد الحجز ولم يتم الحضور فلا يحق للمتدرب استبدال الدورة بأخرى</li>-->
                <!--    </ul>-->
                <!--</div>-->
            </div>
        </main>
    </PublicLayout>
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import CourseCard from "@/Components/CourseCard.vue";
import { Head } from '@inertiajs/vue3';
import { useForm } from '@inertiajs/vue3';

export default {
    components: {CourseCard, Footer, Navbar, Head, InputError, InputLabel, TextInput},
    props: ['users', 'courses', 'old_courses', 'upcoming_courses', 'course'],
    data() {
        return {
            form: useForm({
                name: '',
                phone: '',
            }),
        }
    },
    mounted() {
        this.form.name = this.$page.props.auth.user.name;
        this.form.phone = this.$page.props.auth.user.phone;
    },
    methods: {
        submit() {
            this.form.post(route('courses.invoices', this.course.id));
        }
    }
}
</script>
