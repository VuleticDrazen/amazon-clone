<script setup>
import {Head} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";

</script>

<template>
    <Head title="Category"/>

    <MainLayout>
        <div class="w-full p-1 pt-2 mb-6">
            <div class="text-[27px] font-extrabold">{{$page.props.category_name}}</div>
            <div class="text-sm font-bold">
                Shop home entertainment
            </div>
        </div>

        <div class="border border-gray-300 text-sm rounded-lg py-4 px-10 mb-4">
            1-{{$page.props.products.length}} of over {{$page.props.products.length}} results for {{$page.props.category_name}}
        </div>

    </MainLayout>
</template>
