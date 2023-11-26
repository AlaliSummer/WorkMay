<template>
    <footer class="footer p-5">
        <div class="row align-items-center justify-content-lg-between ">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-m text-muted text-lg-start">
                    Copyright
                    ©
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="" class="nav-link text-m text-muted"
                           target="_blank">{{ $t('words.home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/courses" class="nav-link text-m text-muted"
                           target="_blank">{{ $t('words.courses') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/about" class="nav-link text-m text-muted"
                           target="_blank">{{ $t('words.about') }}</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://localhost/contact" class="nav-link text-m pe-0 text-muted"
                           target="_blank">{{ $t('words.contact') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</template>
