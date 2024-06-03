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
        <div class="flex items-center bg-gray-900 h-[90px] py-2 fixed z-50 w-full min-w-[1150px]">
            <div class="flex">
                <div class="text-white h-[50px] p-2 border-[1px] border-gray-900 rounded-sm">
                    <img src="/images/logo/AGRO_TRADE.svg" alt="AgroTrade" width="50">
                </div>
            </div>

            <div class="text-white h-[50px] p-2 border-[1px] border-gray-900 hover:border-gray-100 rounded-sm">
                <Link :href="route('dashboard')">
                    <div class="flex items-center justify-center">
                        <div>
                            <div class="text-[12px] text-gray-300 font-extrabold">
                                Online platforma za kupovinu
                            </div>
                            <div class="text-[14px] text-white -mt-1.5 font-extrabold">
                                Domaćih poljoprivrednih proizvoda
                            </div>
                        </div>
                    </div>
                </Link>
            </div>

            <div class="flex grow items-center h-[45px] px-5" id="searchBar">
                <div class="flex items-center justify-center bg-gray-100 border-r-gray-300 font-extrabold text-[11px] w-[60px] h-[40px] rounded-l-md cursor-pointer">
                    Pretraga
                </div>
                <input v-model="searchQuery" @keydown.enter="search" class="block w-full border-none focus:ring-0" type="text" placeholder="...">
                <div @click="search" class="cursor-pointer bg-orange-300 p-[5px] px-2 rounded-r-md">
                    <MagnifyIcon :size="30"/>
                </div>
            </div>

            <div class="flex">
                <div class="h-[50px] p-2 mr-12 border-[1px] border-gray-900 rounded-sm hover:border-gray-100 cursor-pointer">
                    <div class="flex items-center justify-center">
                        <div>
                            <div class="text-white text-[12px] font-extrabold">
                                Returns
                            </div>
                            <div class="text-[15px] text-white -mt-1.5 font-extrabold">
                                & orders
                            </div>
                        </div>
                    </div>
                </div>

                <Link :href="route('cart.index')" class="relative h-[50px] p-2 right-[36px] border-[1px] border-gray-900 rounded-sm hover:border-gray-100 cursor-pointer">
                    <span class="absolute text-center right-[21px] w-[14px] -top-0 rounded-full text-[18px]">
                        <div class="text-orange-400 font-extrabold bg-gray-900 h-[16px]">
                            {{ cartStore.cart.length }}
                        </div>
                    </span>
                    <div class="flex items-center justify-center">
                        <CartMinusIcon fill-color="#FCFCFC" :size="40" class="-mt-0.5"/>
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
                    <div v-for="product in $page.props.random_products" :key="product.id" class="p-4 text-center mx-auto">
                        <Link :href="route('products.show', { product: product.id })">
                            <img :src="product.cover_image" alt="">
                        </Link>
                        <Link :href="route('products.show', { product: product.id })" class="text-[14px] py-2 text-teal-600 font-bold hover:text-red-600 cursor-pointer">
                            {{ product.title.substring(0, 40) }}<span v-if="product.title.length > 40">...</span>
                        </Link>
                        <div class="flex justify-start">
                            <div class="text-s font-extrabold text-red-600 w-full text-center">
                                ${{ product.price }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-[#232F3E]">
            <div @click="scrollToTop" class="bg-[#37475A] hover:bg-gray-600 w-full p-3.5 cursor-pointer text-white font-extrabold text-center">
                Back to top
            </div>
            <div class="flex items-stretch justify-between max-w-[1000px] mx-auto p-10 text-white">
                <ul>
                    <li class="font-extrabold text-lg">Get to Know Us</li>
                    <li class="hover:underline cursor-pointer">Careers</li>
                    <li class="hover:underline cursor-pointer">About Amazon</li>
                    <li class="hover:underline cursor-pointer">Investor Relations</li>
                    <li class="hover:underline cursor-pointer">Amazon Devices</li>
                    <li class="hover:underline cursor-pointer">Amazon Science</li>
                </ul>
                <div class="w-20"></div>
                <ul>
                    <li class="font-extrabold text-lg">Make Money with Us</li>
                    <li class="hover:underline cursor-pointer">Sell products on Amazon</li>
                    <li class="hover:underline cursor-pointer">Sell on Amazon Business</li>
                    <li class="hover:underline cursor-pointer">Sell apps on amazon</li>
                    <li class="hover:underline cursor-pointer">Become an Affiliate</li>
                    <li class="hover:underline cursor-pointer">Advertise Your Products</li>
                    <li class="hover:underline cursor-pointer">Self-Publish with Us</li>
                    <li class="hover:underline cursor-pointer">Host an Amazon Hub</li>
                </ul>
                <div class="w-20"></div>
                <ul>
                    <li class="font-extrabold text-lg">Amazon Payment Methods</li>
                    <li class="hover:underline cursor-pointer">Amazon.de Visa Card</li>
                    <li class="hover:underline cursor-pointer">Shop with points</li>
                    <li class="hover:underline cursor-pointer">Credit Card</li>
                    <li class="hover:underline cursor-pointer">Gift Cards</li>
                    <li class="hover:underline cursor-pointer">Payment by Invoice</li>
                    <li class="hover:underline cursor-pointer">Direct Debit</li>
                    <li class="hover:underline cursor-pointer">Amazon Currency Converter</li>
                    <li class="hover:underline cursor-pointer">Top Up Your Account</li>
                </ul>
                <div class="w-20"></div>
                <ul>
                    <li class="font-extrabold text-lg">Let Us Help You</li>
                    <li class="hover:underline cursor-pointer">COVID-19 and Amazon</li>
                    <li class="hover:underline cursor-pointer">Track Packages or View Orders</li>
                    <li class="hover:underline cursor-pointer">Delivery Rates & Policies</li>
                    <li class="hover:underline cursor-pointer">Returns & Replacements</li>
                    <li class="hover:underline cursor-pointer">Recycling (including disposal of electrical and electronic equipment)</li>
                    <li class="hover:underline cursor-pointer">Manage Your Content and Devices</li>
                    <li class="hover:underline cursor-pointer">Amazon Mobile App</li>
                    <li class="hover:underline cursor-pointer">Amazon Assistant</li>
                    <li class="hover:underline cursor-pointer">Customer Service</li>
                    <li class="hover:underline cursor-pointer">Cancel Vodafone contracts</li>
                    <li class="hover:underline cursor-pointer">Accessibility</li>
                </ul>
            </div>
        </footer>
    </div>
</template>
