<script setup>
import {Head} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {computed, ref} from "vue";
import {useCartStore} from "@/store/cart";
import {storeToRefs} from "pinia";

const cartStore = useCartStore();
const {cart} = storeToRefs(cartStore);

const props = defineProps({ product: Object });
const amount = ref(1);
const currentImageIndex = ref(0); // Index of the current image being displayed

const addToCart = (product) => {
    cart.value.push({ ...product, amount: amount.value }); // Add amount to the product
};

const isAlreadyInCart = computed(() => {
    return !!cart.value.find(c => c.id === props.product.id);
});

const allImages = computed(() => {
    return [props.product.cover_image, ...props.product.additional_images];
});

const currentImage = computed(() => {
    return allImages.value[currentImageIndex.value];
});

const nextImage = () => {
    if (currentImageIndex.value < allImages.value.length - 1) {
        currentImageIndex.value++;
    } else {
        currentImageIndex.value = 0; // Loop back to the first image
    }
};

const prevImage = () => {
    if (currentImageIndex.value > 0) {
        currentImageIndex.value--;
    } else {
        currentImageIndex.value = allImages.value.length - 1; // Loop back to the last image
    }
};

const isCurrentImage = (index) => {
    return currentImageIndex.value === index;
};
</script>

<template>
    <Head title="Product" />

    <MainLayout>
        <div class="max-w-[1200px] mt-16 mx-auto flex gap-4 justify-between">
            <div class="w-2/5 relative group">
                <div class="relative w-full h-96 mb-4 overflow-hidden">
                    <img :src="currentImage" alt="Product Image" class="absolute top-1/2 left-1/2 w-full h-full object-contain transform -translate-x-1/2 -translate-y-1/2">
                </div>
                <div class="absolute inset-y-0 left-0 flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <button @click="prevImage" class="bg-gray-300 p-2 rounded-full shadow-md">
                        &#9664; <!-- Left arrow -->
                    </button>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <button @click="nextImage" class="bg-gray-300 p-2 rounded-full shadow-md">
                        &#9654; <!-- Right arrow -->
                    </button>
                </div>
                <div class="flex mt-2">
                    <div
                        v-for="(image, index) in allImages"
                        :key="index"
                        :class="['w-1/5 mr-2 relative h-24 overflow-hidden', { 'opacity-50': !isCurrentImage(index) }]"
                        @click="currentImageIndex = index">
                        <img :src="image" alt="Product Thumbnail" class="absolute top-1/2 left-1/2 w-full h-full object-contain transform -translate-x-1/2 -translate-y-1/2 cursor-pointer">
                    </div>
                </div>
            </div>
            <div class="w-2/5">
                <div class="text-xl font-extrabold border-b border-b-gray-300 mb-2 pb-2">{{ product.title }}</div>
                <div>
                    <div>{{ product.description }}</div>
                </div>
            </div>
            <div class="w-1/5">
                <div class="border border-gray-300 rounded-lg p-4">
                    <div class="text-red-600 text-sm font-bold mb-2">Cijena: {{ product.price }} €</div>
                    <div class="flex items-center mb-4">
                        <input type="number" v-model="amount" min="1" class="border rounded px-2 py-1 w-16 mr-2" />
                        <button
                            :disabled="isAlreadyInCart"
                            @click="addToCart(product)"
                            class="bg-yellow-400 px-4 py-2 font-bold text-sm rounded-lg border shadow-md cursor-pointer">
                            <span v-if="isAlreadyInCart">Dodato u korpu</span>
                            <span v-else>Dodaj u korpu</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>


