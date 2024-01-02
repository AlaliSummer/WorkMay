<script setup>
import { Head,Link } from '@inertiajs/vue3';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';

defineProps({
    terms: String,
});
</script>

<template>
    <Head title="Terms of Service" />

    <div class="mx-5">
        <div dir="ltr" class="mx-auto mt-5" style="max-width:700px;">
            <div class="tw-flex tw-justify-between">
                <div>
                    <Link href="/" class="tw-text-gray-800 hover:text-indigo-500">Home / الرئيسية</Link>
                    <h1>Terms of Service</h1>
                    <p>Last updated: 2023-02-01</p>
                </div>
                <div style="width:65px;">
                    <AuthenticationCardLogo />
                </div>
            </div>
            <p>Accepting our Terms and Conditions is necessary to access and benefit from our Services.</p>

            <p>These terms and conditions of use apply to the Workmay website and fall under the domain </p>

            <p>By using the site, you agree to these terms; If you do not agree to this, do not use the Site.</p>

            <p>Workmay reserves the right, at its sole discretion, to change, modify, add or remove portions of these Terms at any time. It is your responsibility to check these Terms periodically for changes. Your continued use of the Site following the posting of changes will mean that you accept and agree to the changes. As long as you comply with these Terms, Workmay grants you a non-exclusive, non-transferable, limited privilege to enter and use the Site.</p>

            <p>Workmay offers online features, products, and services through the Site that may contain additional guidelines, terms, and agreements. If these terms are inconsistent with additional guidelines, terms or agreements, those additional guidelines, terms or agreements will control.</p>

            <p>Any dispute or complaint resulting from or related to your use of the site will be subject to the laws in force in the Kingdom of Saudi Arabia.</p>

            <p>If you pay for one of our products or services on the website, all the data we request from you will be provided directly to the company providing the payment service through a secure connection.</p>
            <p>The cardholder has the right to keep a copy of the completed transaction and a copy of the merchant’s policies and conditions.</p>

            <p> We accept electronic payments using credit and debit cards from Visa and MasterCard, and in Saudi Riyal (or other currencies as agreed upon).</p>


            <h2>Copyrights</h2>
            <p>All content included in or made available through the Site, such as text, graphics, logos, button icons, images, videos, audio clips, documents, and data is the property of Workmay.</p>

            <h2>Trademarks</h2>
            <p>In addition, graphics, logos, page headers, button icons, scripts, product names, product model numbers, and names of services included in or made available through the Site are trademarks of Clarastars LLC in the Kingdom of Saudi Arabia or of the manufacturers whose products Workmay sells. Clarastars LLC trademarks may not be used in connection with any product or service other than Workmay, in any manner that is likely to cause confusion, or in any manner that disparages or discredits Workmay.</p>
        </div>
    </div>
</template>
