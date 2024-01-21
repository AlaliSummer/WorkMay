<template>
    <navbar/>
    <main>
        <div class="container">
            <div class="px-5 py-4 container-fluid ">
                <form @submit.prevent="submitForm(user.id)">
                <div class="h-100">
                    <h4 class="text-2xl font-weight-semibold pt-6 pb-4" >تقدم بطلب لفتح حساب مدرب</h4>
                </div>
                <hr class="horizontal mb-4 dark mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        <div class="alert alert-danger" role="alert" id="alert">
                          حدث خطأ
                        </div>
                        <div class="alert alert-success" role="alert" id="alert">
                        تم ارسال طلبك بنجاح
                        </div>
                    </div>
                </div>
                <div class="mb-5 row justify-content-center">
                    <div class="col-lg-9 col-12 ">
                        <div class="card p-6" id="basic-info">
                            <div class="pt-0 card-body">
                                <div class="row">
                                    <div class="col-6 my-4">
                                        <label for="identity_number">الهوية الوطنية</label>
                                        <input type="text" name="identity_number" id="identity_number"
                                               placeholder="1010101010"
                                               class="form-control"
                                               v-model="createInstructorForm.identity_number">
                                        <span class="text-danger text-sm"></span>
                                    </div>
                                    <div class="col-6 my-4">
                                        <label for="phone">رقم الجوال</label>
                                        <input type="text" name="phone" id="phone"
                                               placeholder="966550000000"
                                               class="form-control"
                                               v-model="createInstructorForm.phone">
                                        <span class="text-danger text-sm"></span>
                                    </div>
                                </div>
                                <button  class="btn-grad-secondary my-6" :class="{ 'opacity-25': createInstructorForm.processing }" :disabled="createInstructorForm.processing">
                                    ارسال الطلب
                                </button>
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
            createInstructorForm: this.$inertia.form({
                identity_number: '',
                phone: '',
            }),
        }
    },
    methods: {
        submitForm(userId) {
            this.createInstructorForm.post(route('profile.my-courses.instructor.store',
                {
                    user_id: userId
                }
            ));
        }
    }
}
</script>
