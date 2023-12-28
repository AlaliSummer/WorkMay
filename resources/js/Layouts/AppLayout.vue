<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Navbar from "@/Components/Navbar.vue";
import ProfileNavbar from "@/Components/ProfileNavbar.vue";

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    router.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>
        <ProfileNavbar/>
        <Head :title="title" />

        <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
            <div class="pt-7 pb-6 bg-cover"
                 style="background-image: url('/img/header-blue-purple.jpg'); background-position: bottom;">
            </div>
            <div class="container">
                <div class="card card-body py-2 bg-transparent shadow-none">
                    <div class="row">
                        <div class="col-auto">
                            <div
                                class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
                                <img src="/img/Windows_10_Default_Profile_Picture.svg.png" alt="profile_image" class="w-100">
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h3 class="mb-0 font-weight-bold">
                                    {{ $page.props.auth.user.name }}
                                </h3>
                                <p class="mb-0">
                                    {{ $page.props.auth.user.email }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Banner />

        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
