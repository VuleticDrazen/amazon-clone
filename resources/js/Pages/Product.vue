<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {toRefs} from "vue";
import MapMarketOutlineIcon from "vue-material-design-icons/MapMarkerAccountOutline.vue";

const props = defineProps({product: Object});
const product = toRefs(props.product);
</script>

<template>
    <Head title="Product"/>

    <MainLayout>
        <div class="max-w-[1200px] mt-16 mx-auto flex gap-4 justify-between">
            <div class="w-2/5">
                <img :src="product.image.value">
            </div>
            <div class="w-2/5">
                <div class="text-xl font-extrabold border-b border-b-gray-300 mb-2 pb-2">{{ product.title }}</div>
                <div>
                    <div class="text-lg font-extrabold m-1">About this item</div>
                    <div class="">{{ product.description }}</div>
                </div>
            </div>
            <div class="w-1/5">
                <div class="border border-gray-300 rounded-lg">
                    <div class="my-2 mx-3 mb-2">
                        <div class="flex items-center justify-center border-b border-gray-300 pb-1">
                            <Link v-if="$page.props.auth.user"
                                  :href="route('address.index')"
                                  class="flex items-center text-xs font-extrabold text-teal-600 hover:text-red-600 cursor-pointer">
                                <MapMarketOutlineIcon :size="17"/>
                                Delivery to {{ $page.props.auth.user.full_name }} - {{ $page.props.auth.user.postcode }}
                            </Link>
                            <Link v-else
                                  :href="route('login')"
                                  class="flex items-center text-xs font-extrabold text-teal-600 hover:text-red-600 cursor-pointer">
                                Sign in
                            </Link>
                        </div>
                        <div class="flex items-center justify-between pt-2">
                            <div class="text-red-600 text-sm font-bold">{{ product.price }}</div>
                            <button
                                class="bg-yellow-400 px-2 font-bold text-sm rounded-lg border shadow-md cursor-pointer">
                                <!--                                <span>Item added</span>-->
                                <span>Add to cart</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
