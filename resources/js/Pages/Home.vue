<template>
    <div class="body_bg">
        <!--::header part start::-->
        <Header/>
        <!-- Header part end-->

        <Main />

        <!--::footer_part start::-->
        <Footer/>
        <!--::footer_part end::-->
    </div>
</template>
<script setup>
import {baseUrl} from "../Helpers/Path.js";
import Header from "../Layouts/Partials/Header.vue";
import Footer from "../Layouts/Partials/Footer.vue";
import Main from "@/Layouts/Main.vue";
</script>
