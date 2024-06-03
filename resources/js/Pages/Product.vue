<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {computed} from "vue";
import MapMarketOutlineIcon from "vue-material-design-icons/MapMarkerAccountOutline.vue";

import { useCartStore } from "@/store/cart";
import { storeToRefs } from "pinia";

const cartStore = useCartStore()
const { cart } = storeToRefs(cartStore)

const props = defineProps({ product: Object });
// const { product } = toRefs(props.product);


const addToCart = (product) => {
    cart.value.push(product)
}

const isAlreadyInCart = computed(()=>{
    let res = cart.value.find( c => c.id === props.product.id)
    return !!res;

})
</script>

<template>
    <Head title="Product"/>

    <MainLayout>
        <div class="max-w-[1200px] mt-16 mx-auto flex gap-4 justify-between">
            <div class="w-2/5">
                <img :src="product.image" alt="">
            </div>
            <div class="w-2/5">
                <div class="text-xl font-extrabold border-b border-b-gray-300 mb-2 pb-2">{{product.title}}</div>
                <div>
                    <div class="text-lg font-extrabold m-1">About this item</div>
                    <div class="">{{product.description}}</div>
                </div>
            </div>
            <div class="w-1/5">
                <div class="border border-gray-300 rounded-lg">
                    <div class="my-3 mx-6 mb-5">
                        <div class="flex items-center justify-between pt-2">
                            <div class="text-red-600 text-sm font-bold">{{product.price}} €</div>
                            <button
                                :disabled="isAlreadyInCart"
                                @click="addToCart(product)"
                                class="bg-yellow-400 px-2 font-bold text-sm rounded-lg border shadow-md cursor-pointer">
                                <span v-if="isAlreadyInCart">Item added</span>
                                <span v-else>Add to cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
