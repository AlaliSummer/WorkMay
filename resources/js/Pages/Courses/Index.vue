<template>
    <Navbar></Navbar>
    <main class="main-content max-height-vh-100 h-100">
        <div class="pt-5 pb-6 bg-cover" style="background-image: url('/img/header-blue-purple.jpg')"></div>
        <div class="container my-3 py-3">
            <div class="row mt-n6 mb-6">
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24"
                                     fill="currentColor">
                                    <path
                                        d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                                    <path fill-rule="evenodd"
                                          d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z"
                                          clip-rule="evenodd" />
                                    <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">{{ $t('words.eng-courses') }}</p>
                            <h3 class="mb-0 font-weight-bold">{{ $t('words.eng') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                     viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d=" M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                                <path
                                    d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">{{ $t('words.management-courses') }}</p>
                            <h3 class="mb-0 font-weight-bold">{{ $t('words.management') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                     viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">{{ $t('words.art-courses') }}</p>
                            <h3 class="mb-0 font-weight-bold">{{ $t('words.art') }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card blur border border-white mb-4 shadow-xs">
                        <div class="card-body p-4">
                            <div
                                class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19"
                                     viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                                    <path fill-rule="evenodd"
                                          d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="text-sm mb-1">{{ $t('words.music-courses') }}</p>
                            <h3 class="mb-0 font-weight-bold">{{ $t('words.music') }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal mb-4 dark">
            <div class="row">
                <div class="col-md-4">
                    <h6 class="text-2xl font-weight-semibold mb-1">{{ $t('words.up-coming-courses') }}</h6>
                </div>
                <div class="col-md-8 mb-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow-xs border mb-4">
                                <div class="card-body py-0">
                                    <div class="row">
                                        <div class="col-4 pe-1">
                                            <div class="chart">
                                                <canvas id="chart-doughnut-info" class="chart-canvas"
                                                        height="150"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-8 my-auto">
                                            <div class="d-flex">
                                                <div>
                                                    <h4 class="font-weight-semibold text-lg mb-4">Primary Wallet</h4>
                                                    <p class="text-sm mb-1">Current Balance</p>
                                                    <h3 class="mb-0 font-weight-bold">$20,450.80</h3>
                                                </div>
                                                <div class="ms-auto text-end d-flex flex-column">
                                                    <div class="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                             height="24" viewBox="0 0 24 24" fill="currentColor"
                                                             class="ms-auto cursor-pointer dropdown-toggle"
                                                             data-bs-toggle="dropdown" aria-expanded="false">
                                                            <path fill-rule="evenodd"
                                                                  d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                                                                  clip-rule="evenodd" />
                                                        </svg>
                                                        <ul class="dropdown-menu dropdown-menu-end me-n4">
                                                            <li><a class="dropdown-item" href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Another
                                                                action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else
                                                                here</a></li>
                                                        </ul>
                                                    </div>
                                                    <span
                                                        class="badge badge-sm border border-success text-success bg-success border-radius-sm mt-auto mb-2">
                                                        <svg width="9" height="9" viewBox="0 0 10 9"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z"
                                                                fill="#67C23A" />
                                                        </svg>
                                                        10.5%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow-xs border mb-4">
                                <div class="card-body py-0">
                                    <div class="row">
                                        <div class="col-4 pe-1">
                                            <div class="chart">
                                                <canvas id="chart-doughnut-dark" class="chart-canvas"
                                                        height="150"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-8 my-auto">
                                            <div class="d-flex">
                                                <div>
                                                    <h4 class="font-weight-semibold text-lg mb-4">Secondary Wallet</h4>
                                                    <p class="text-sm mb-1">Current Balance</p>
                                                    <h3 class="mb-0 font-weight-bold">$10,250.60</h3>
                                                </div>
                                                <div class="ms-auto text-end d-flex flex-column">
                                                    <div class="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                             height="24" viewBox="0 0 24 24" fill="currentColor"
                                                             class="ms-auto cursor-pointer dropdown-toggle"
                                                             data-bs-toggle="dropdown" aria-expanded="false">
                                                            <path fill-rule="evenodd"
                                                                  d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                                                                  clip-rule="evenodd" />
                                                        </svg>
                                                        <ul class="dropdown-menu dropdown-menu-end me-n4">
                                                            <li><a class="dropdown-item" href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Another
                                                                action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else
                                                                here</a></li>
                                                        </ul>
                                                    </div>
                                                    <span
                                                        class="badge badge-sm border border-success text-success bg-success border-radius-sm mt-auto mb-2">
                                                        <svg width="9" height="9" viewBox="0 0 10 9"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z"
                                                                fill="#67C23A" />
                                                        </svg>
                                                        33.8%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="horizontal mb-4 dark">
            <div class="row">
                <div class="col-md-4">
                    <h6 class="text-2xl font-weight-semibold mb-1">{{ $t('words.previous-courses') }}</h6>
                </div>
                <div class="col-md-8 mb-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow-xs border mb-4">
                                <div class="card-body py-0">
                                    <div class="row">
                                        <div class="col-4 pe-1">
                                            <div class="chart">
                                                <canvas id="chart-doughnut-info" class="chart-canvas"
                                                        height="150"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-8 my-auto">
                                            <div class="d-flex">
                                                <div>
                                                    <h4 class="font-weight-semibold text-lg mb-4">Primary Wallet</h4>
                                                    <p class="text-sm mb-1">Current Balance</p>
                                                    <h3 class="mb-0 font-weight-bold">$20,450.80</h3>
                                                </div>
                                                <div class="ms-auto text-end d-flex flex-column">
                                                    <div class="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                             height="24" viewBox="0 0 24 24" fill="currentColor"
                                                             class="ms-auto cursor-pointer dropdown-toggle"
                                                             data-bs-toggle="dropdown" aria-expanded="false">
                                                            <path fill-rule="evenodd"
                                                                  d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                                                                  clip-rule="evenodd" />
                                                        </svg>
                                                        <ul class="dropdown-menu dropdown-menu-end me-n4">
                                                            <li><a class="dropdown-item" href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Another
                                                                action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else
                                                                here</a></li>
                                                        </ul>
                                                    </div>
                                                    <span
                                                        class="badge badge-sm border border-success text-success bg-success border-radius-sm mt-auto mb-2">
                                                        <svg width="9" height="9" viewBox="0 0 10 9"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z"
                                                                fill="#67C23A" />
                                                        </svg>
                                                        10.5%
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow-xs border mb-4">
                                <div class="card-body py-0">
                                    <div class="row">
                                        <div class="col-4 pe-1">
                                            <div class="chart">
                                                <canvas id="chart-doughnut-dark" class="chart-canvas"
                                                        height="150"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-8 my-auto">
                                            <div class="d-flex">
                                                <div>
                                                    <h4 class="font-weight-semibold text-lg mb-4">Secondary Wallet</h4>
                                                    <p class="text-sm mb-1">Current Balance</p>
                                                    <h3 class="mb-0 font-weight-bold">$10,250.60</h3>
                                                </div>
                                                <div class="ms-auto text-end d-flex flex-column">
                                                    <div class="dropdown">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                             height="24" viewBox="0 0 24 24" fill="currentColor"
                                                             class="ms-auto cursor-pointer dropdown-toggle"
                                                             data-bs-toggle="dropdown" aria-expanded="false">
                                                            <path fill-rule="evenodd"
                                                                  d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z"
                                                                  clip-rule="evenodd" />
                                                        </svg>
                                                        <ul class="dropdown-menu dropdown-menu-end me-n4">
                                                            <li><a class="dropdown-item" href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Another
                                                                action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something else
                                                                here</a></li>
                                                        </ul>
                                                    </div>
                                                    <span
                                                        class="badge badge-sm border border-success text-success bg-success border-radius-sm mt-auto mb-2">
                                                        <svg width="9" height="9" viewBox="0 0 10 9"
                                                             fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z"
                                                                fill="#67C23A" />
                                                        </svg>
                                                        33.8%
                                                    </span>
                                                </div>
                                            </div>
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

    <Footer class="pt-12 px-10"></Footer>
</template>
<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";
export default {
    components: {Footer, Navbar}
}
</script>
