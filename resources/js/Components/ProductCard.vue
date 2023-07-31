<script setup>
import {Link} from '@inertiajs/vue3';
import {toRefs} from "vue";

const props = defineProps({ product: Object });
const product = toRefs(props.product);
</script>

<template>
    <div class="border-gray-300 border rounded-md bg-white p-1.5">
        <Link :href="route('products.show', {product: this.product})" class="w-full">
            <img class="rounded-md" :src="product.image.value" alt="">
            <div class="text-left">
                <div class="text-[16px] text-gray-900 font-extrabold cursor-pointer">
                    {{ product.title }}
                </div>
                <div class="flex justify-between items-center">
                    <div class="text-2xl p-1 font-semibold w-full text-left">${{ product.price }}</div>
                    <img src="/images/logo/PRIME_LOGO.png" alt="prime" width="80">
                </div>
                <div class="flex justify-between items-center">
                    <div class="text-md p-1 font-semibold w-full text-left">In stock</div>
                </div>
                <div class="flex justify-between items-center">
                    <img src="/images/STARS.png" alt="starts" width="80">
                </div>
            </div>
        </Link>
    </div>
</template>
