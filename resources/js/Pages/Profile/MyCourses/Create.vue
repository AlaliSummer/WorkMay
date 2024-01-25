<template>
    <navbar/>
    <main>
        <div class="container">
            <div class="px-5 py-4 container-fluid ">
                <form @submit.prevent="submitForm(user.id)">
                <div class="h-100">
                    <h4 class="text-2xl font-weight-semibold pt-6 pb-4" >انشاء دورة جديدة</h4>
                </div>
                <hr class="horizontal mb-4 dark mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <div class="alert alert-danger" role="alert" id="alert">
                          حدث خطأ
                        </div>
                        <div class="alert alert-success" role="alert" id="alert">
                        رائع! تم اطلاق الدورة بنجاح
                        </div>
                    </div>
                </div>
                <div class="mb-5 row justify-content-center">
                    <div class="col-lg-9 col-12 ">
                        <div class="card p-6" id="basic-info">
                            <div class="card-header">
                                <h5>تفاصيل الدورة</h5>
                            </div>
                            <div class="pt-0 card-body">

                                <div class="row">
                                    <div class="col-6 my-4">
                                        <label for="title">العنوان</label>
                                        <input type="text" name="title" id="title"
                                               class="form-control"
                                               v-model="createCourseForm.title">
                                        <span class="text-danger text-sm"></span>
                                    </div>
                                    <div class="col-6 my-4">
                                        <label for="price">السعر</label>
                                        <input type="text" name="price" id="title"
                                               class="form-control"
                                               v-model="createCourseForm.price">
                                        <span class="text-danger text-sm"></span>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <label for="description">الوصف</label>
                                    <textarea name="description" id="description" rows="5" class="form-control"
                                              v-model="createCourseForm.description">
                                        الوصف
                                    </textarea>
                                </div>
                                <div class="row">
                                    <div class="col-6 my-4">
                                        <label for="from_date">تاريخ بداية الدورة</label>
                                        <input type="text" name="from_date" id="from_date"
                                               placeholder="01-01-2024"
                                               class="form-control"
                                               v-model="createCourseForm.from_date">
                                    </div>

                                    <div class="col-6 my-4">
                                        <label for="to_date">تاريخ نهاية الدورة</label>
                                        <input type="text" name="to_date" id="to_date"
                                               placeholder="01-01-2024"
                                               class="form-control"
                                               v-model="createCourseForm.to_date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 my-4">
                                        <label for="seats_available">عدد المقاعد</label>
                                        <input type="text" name="seats_available" id="seats_available"
                                               placeholder="00"
                                               class="form-control"
                                               v-model="createCourseForm.seats_available">
                                    </div>

                                    <div class="col-6 my-4">
                                        <label for="hours">عدد الساعات</label>
                                        <input type="text" name="hours" id="hours"
                                               placeholder="00"
                                               class="form-control"
                                               v-model="createCourseForm.hours">
                                    </div>
                                </div>
                                <div>
                                    <label class="my-4" for="hours">صورة الدورة</label>
                                    <img src="/img/add-img.png" alt="Logo" class="w-30 tw-self-center">
                                </div>
                                <button type="submit" class="btn-grad-secondary my-6">أطلق الدورة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </main>
    <footer/>
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
export default {
    props: ['user'],
    components: {
        Navbar,
    },
    data() {
        return {
            createCourseForm: this.$inertia.form({
                title: '',
                description: '',
                seats_available: '',
                price: '',
                hours: '',
                from_date: '',
                to_date: '',
            }),
        }
    },
    methods: {
        submitForm(userId) {
            this.createCourseForm.post(route('profile.my-courses.store',
                {
                    user_id: userId
                }
            ));
        }
    }
}
</script>
