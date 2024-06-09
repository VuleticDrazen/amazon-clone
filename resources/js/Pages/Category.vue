<script setup>
import {Head} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import ProductCard from "@/Components/ProductCard.vue";

console.log('CATEGORY.vue')
</script>

<template>
    <Head title="Category"/>

    <MainLayout>
        <div class="border border-gray-300 mt-6 text-sm rounded-lg py-4 px-10 mb-4 mx-1">
            Ukupno {{$page.props.products.length}} oglasa iz kategorije {{$page.props.category_name}}
        </div>

        <div class="grid grid-cols-3 gap-1">
            <div class="m-1" v-for="product in $page.props.products" :key="product">
                <ProductCard :product="product"/>
            </div>
        </div>

    </MainLayout>
</template>
