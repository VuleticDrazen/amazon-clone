<script setup>
import {Head} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {computed, ref} from "vue";

import {useCartStore} from "@/store/cart";
import {storeToRefs} from "pinia";

const cartStore = useCartStore()
const {cart} = storeToRefs(cartStore)

const props = defineProps({product: Object});
const amount = ref(1);
const addToCart = (product) => {
    cart.value.push({...product, amount: amount.value}); // Add amount to the product
}

const isAlreadyInCart = computed(() => {
    let res = cart.value.find(c => c.id === props.product.id)
    return !!res;

})
</script>

<template>
    <Head title="Product" />

    <MainLayout>
        <div class="max-w-[1200px] mt-16 mx-auto flex gap-4 justify-between">
            <div class="w-2/5">
                <img :src="product.cover_image" alt="">
            </div>
            <div class="w-2/5">
                <div class="text-xl font-extrabold border-b border-b-gray-300 mb-2 pb-2">{{ product.title }}</div>
                <div>
                    <div class="">{{ product.description }}</div>
                </div>
            </div>
            <div class="w-1/5">
                <div class="border border-gray-300 rounded-lg p-4">
                    <div class="text-red-600 text-sm font-bold mb-2">{{ product.price }}</div>
                    <div class="flex items-center mb-4">
                        <input type="number" v-model="amount" min="1" class="border rounded px-2 py-1 w-16 mr-2" />
                        <button
                            :disabled="isAlreadyInCart"
                            @click="addToCart(product)"
                            class="bg-yellow-400 px-4 py-2 font-bold text-sm rounded-lg border shadow-md cursor-pointer">
                            <span v-if="isAlreadyInCart">Item added</span>
                            <span v-else>Add to cart</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>


