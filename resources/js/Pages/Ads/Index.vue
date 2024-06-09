<script setup>
import {Head, router} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {computed} from "vue";
import ProductCard from "@/Components/ProductCard.vue";

const { products, search } = defineProps({ products: Object, search: String });

const currentPage = computed(() => products.meta.current_page);
const lastPage = computed(() => products.meta.last_page);
const nextPageUrl = computed(() => products.links.next);
const prevPageUrl = computed(() => products.links.prev);

console.log(12345)
console.log(currentPage)
console.log(lastPage)

function goToPage(page) {
    router.get(route('products.index', { page }));
}
</script>

<template>
    <Head title="Product"/>

    <MainLayout>
        <div v-if="search" class="text-lg font-bold mb-4 mt-2 bg-gray-200 border rounded">
            Rezultati pretrage za: "{{ search }}"
        </div>
        <div class="grid grid-cols-3 gap-1">
            <div class="m-1" v-for="product in products.data" :key="product.id">
                <ProductCard :product="product"/>
            </div>
        </div>

        <!-- Pagination Controls -->
        <div v-if="products.data.length"
            class="flex justify-between items-center mt-4">
            <button
                :disabled="!prevPageUrl"
                @click="goToPage(currentPage - 1)"
                class="px-4 py-2 bg-gray-200 rounded disabled:opacity-50 disabled:cursor-not-allowed"
            >
                Prethodna
            </button>

            <div class="text-sm">
                Stranica {{ currentPage }} of {{ lastPage }}
            </div>

            <button
                :disabled="!nextPageUrl"
                @click="goToPage(currentPage + 1)"
                class="px-4 py-2 bg-gray-200 rounded disabled:opacity-50 disabled:cursor-not-allowed"
            >
                Sledeća
            </button>
        </div>
    </MainLayout>
</template>
