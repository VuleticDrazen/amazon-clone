<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {computed} from "vue";

import {useCartStore} from "@/store/cart";
import {storeToRefs} from "pinia";

const cartStore = useCartStore()
const {cart} = storeToRefs(cartStore)

const removeFromCart = (id) => {
    cartStore.removeProductFromCart(id)
}

const total = computed(() => {
    let total = 0
    cart.value.forEach(c => {
        total += c.price
    })
    if (total > 0) {
        return total.toFixed(2)
    }
    return 0
})

const totalWithoutDot = () => {
    let num = String(total.value).split('.').join('')
    return Number(num)
}

</script>

<template>
    <Head title="Cart"/>

    <MainLayout>
        <div class="flex gap-4"></div>
        <div class="w-full bg-white p-4 mt-4">
            <div class="border-b">
                <div class="text-[27px] font-semibold">Shopping Cart</div>
                <div class="text-sm w-full flex justify-end items-center font-semibold">Price</div>
            </div>

            <div v-if="!cart.length" class="text-center font-bold text-2xl py-20">
                Your Cart is empty
            </div>

            <div v-else class="flex border-b" v-for="product in cart" :key="product">
                <img :src="product.image" class="h-[180px] mt-4 mb-4" :alt="product.title">
                <div class="flex justify-between mb-4">
                    <div class="pl-8 py-10 relative">
                        <div class="text-gray-900 pb-2 -mt-4 font-bold text-[18px]">{{ product.title }}</div>
                        <span>{{ product.description.substring(0, 180) }}...</span>
                        <div class="text-teal-600 py-2">In Stock</div>
                        <div class="text-teal-600 absolute bottom-0 mb-4 flex items-center">
                            <div @click="removeFromCart(product.id)"
                                 class="text-sm hover:underline cursor-pointer">
                                Delete
                            </div>
                        </div>
                    </div>

                    <div class="py-10 justify-end">
                        <div class="font-bold pl-20">${{ product.price }}</div>
                    </div>
                </div>

                <div class="font-extrabold pt-4 text-[18px] text-right"> Subtotal (Items: {{ cart.length }}):
                    ${{ total }}
                </div>
            </div>
            <div class="bg-white w-[350px] p-4 mt-4 h-48">
                <div class="text-sm text-green-700">
                    Welcome to Agro Shop! Free delivery on your first order to MNE.
                    Select this option at checkout.
                </div>
                <div class="font-extrabold pt-4 text-[18px]"> Subtotal (Items: {{ cart.length }}): ${{ total }}</div>
                <Link :disabled="Number(total) === 0.00"
                      :class="Number(total) === 0.00 ? 'bg-gray-400' : 'bg-yellow-400 hover:bg-yellow-500'"
                      as="button"
                      :href="route('checkout.index', { total: totalWithoutDot(), total_decimal: total, items: cart})"
                      class="block mt-4 w-full text-center py-1 font-bold text-sm shadow-sm border rounded-lg cursor-pointer">
                    Proceed to Checkout
                </Link>
            </div>
        </div>
    </MainLayout>
</template>
