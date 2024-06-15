<script setup>
import { ref } from 'vue';
import { Link, router } from '@inertiajs/vue3';
import MagnifyIcon from 'vue-material-design-icons/Magnify.vue';
import CartMinusIcon from 'vue-material-design-icons/CartMinus.vue';
import { useCartStore } from "@/store/cart";

const cartStore = useCartStore();
const searchQuery = ref('');

const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};

const search = () => {
    router.get(route('products.index'), { search: searchQuery.value });
};
</script>

<template>
    <div class="min-w-[1150px] bg-gray-100 h-full">
        <div class="flex items-center bg-green-100 bg-shadow-100 h-[90px] border-grey-500 border-[1px] py-2 fixed z-50 w-full min-w-[1150px]">
            <div class="inline-flex items-center bg-white h-[50px] p-2 border-[1px] border-white-900 hover:border-gray-100 rounded-lg ml-2">
                <Link :href="route('dashboard')" class="flex items-center">
                    <img src="/images/logo/AGRO_TRADE.svg" alt="AgroTrade" width="50" class="mr-2">
                    <div>
                        <div class="text-[12px] text-gray-800 font-extrabold">
                            Online platforma za kupovinu
                        </div>
                        <div class="text-[14px] text-black -mt-1.5 font-extrabold">
                            Domaćih poljoprivrednih proizvoda
                        </div>
                    </div>
                </Link>
            </div>

            <div class="flex grow items-center h-[50px] px-5" id="searchBar">
                <div
                    class="flex items-center justify-center bg-gray-100 border-r-white-900 border-[1px] font-extrabold text-[11px] w-[60px] h-[50px] rounded-l-lg cursor-pointer">
                    Pretraga
                </div>
                <input v-model="searchQuery" @keydown.enter="search" class="block w-full border-none h-[49px] focus:ring-0"
                       type="text" placeholder="...">
                <div @click="search" class="cursor-pointer bg-orange-300 p-[10px] h-[49px] px-2 rounded-r-lg">
                    <MagnifyIcon :size="30"/>
                </div>
            </div>

            <div class="flex">
                <Link :href="route('cart.index')" class="relative bg-white h-[50px] p-2 border-[1px] border-gray-200 rounded-lg hover:border-gray-100 cursor-pointer flex items-center mr-12">
                    <div class="ml-2 text-black text-[15px] font-extrabold">
                        Korpa
                    </div>
                    <span class="absolute text-center right-[24px] w-[16px] -top-0 rounded-full text-[18px]">
                        <div class="text-red-600 bg-white font-extrabold h-[18px]">
                            {{ cartStore.cart.length }}
                        </div>
                    </span>
                    <div class="flex items-center justify-center">
                        <CartMinusIcon fill-color="#0000030" :size="48" class="-mt-0.5"/>
                    </div>
                </Link>
            </div>
        </div>

        <main class="max-w-[1500px] mx-auto">
            <div class="pt-[90px]"></div>
            <slot/>
        </main>

        <div class="w-full bg-white mt-10 overflow-x-scroll">
            <div class="max-w-[1500px] mx-auto">
                <div class="text-[23px] pt-4 font-extrabold">
                    Preporučeni oglasi
                </div>
                <div class="flex justify-center items-stretch">
                    <div v-for="product in $page.props.random_products" :key="product.id"
                         class="p-4 text-center mx-auto">
                        <Link :href="route('products.show', { product: product.id })" class="flex h-[120px] w-[180px]">
                            <img :src="product.cover_image" alt="" class="object-fill">
                        </Link>
                        <Link :href="route('products.show', { product: product.id })"
                              class="text-[14px] py-2 text-teal-600 font-bold hover:text-red-600 cursor-pointer">
                            {{ product.title.substring(0, 40) }}<span v-if="product.title.length > 40">...</span>
                        </Link>
                        <div class="flex justify-start">
                            <div class="text-s font-extrabold text-red-600 w-full text-center">
                                {{ product.price }} €
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-[#232F3E]">
            <div @click="scrollToTop"
                 class="bg-[#37475A] hover:bg-gray-600 w-full p-3.5 cursor-pointer text-white font-extrabold text-center">
                Vrati na vrh
            </div>
            <div class="flex items-stretch justify-between max-w-[1000px] mx-auto p-10 text-white">
                <ul>
                    <li class="font-extrabold border-b border-white">Aplikacija za plasman poljoprivrednih proizoda</li>
                    <li class="hover:underline">Master rad Nikole Ostojića</li>
                </ul>
                <div class="w-60"></div>
                <ul>
                    <li class="font-extrabold border-b border-white">Ova aplikacija je razvijena kao dio master rada na temu:</li>
                    <li class="hover:underline">"Primjena koncepta mikroservisne arhitekture i kontejnerizacije u web aplikaciji za plasman poljoprivrednih proizvoda".</li>
                </ul>
                <div class="w-60"></div>
                <ul>
                    <li class="font-extrabold border-b border-white">Autor: Nikola Ostojić</li>
                    <li class="hover:underline border-b border-white">Master studije, Studije Primijenog računarstva</li>
                    <li class="hover:underline border-b border-white">Elektrotehnički fakultet, Podgorica</li>
                    <li class="hover:underline">© 2024 Nikola Ostojić. Sva prava zadržana.</li>
                </ul>
            </div>
        </footer>
    </div>
</template>
