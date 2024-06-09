<script setup>
import {Link} from '@inertiajs/vue3';
import {toRefs} from "vue";

const props = defineProps({ product: Object });
const product = toRefs(props.product);
console.log('123')
console.log(props)
</script>

<template>
    <div class="border-gray-300 border rounded-md bg-white p-1.5">
        <Link :href="route('products.show', {product: this.product})" class="w-full">
            <img class="rounded-md object-fill h-[300px]" :src="product.cover_image.value" alt="">
            <div class="text-left">
                <div class="text-[16px] text-gray-900 font-extrabold cursor-pointer">
                    {{ product.title.value }}
                </div>
                <span>{{ product.description.value.substring(0, 80) }}...</span>

                <div class="flex justify-between items-center">
                    <div class="text-2xl p-1 font-semibold w-full text-left">{{ product.price.value }} €</div>
                </div>
                <div class="flex justify-between items-center">
                </div>
                <div class="flex justify-between items-center">
                    <img src="/images/STARS.png" alt="starts" width="80">
                </div>
            </div>
        </Link>
    </div>
</template>
