<script setup>
import {ref} from 'vue';
import {Link} from '@inertiajs/vue3';
import MapMarketOutlineIcon from 'vue-material-design-icons/MapMarkerAccountOutline.vue'
import MenuDownIcon from 'vue-material-design-icons/MenuDown.vue'
import MagnifyIcon from 'vue-material-design-icons/Magnify.vue'
import CartMinusIcon from 'vue-material-design-icons/CartMinus.vue'
import MenuIcon from 'vue-material-design-icons/Menu.vue'

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="min-w-[1150px] bg-gray-100 h-full">
        <div class="flex items-center bg-gray-900 h-[60px] py-2 fixed z-50 w-full min-w-[1150px]">

            <div class="flex">
                <Link
                    class="text-white h-[50px] p-2 pt-3 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    Amazon
                </Link>
            </div>

            <div class="text-white h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                <div class="flex items-center justify-center">
                    <MapMarketOutlineIcon class="pt-2 -ml-1" fill-color="#f5f5f5"/>
                    <div>
                        <div class="text-[13px] text-gray-300 font-extrabold">
                            <div>Delivery to Drazen</div>
                        </div>
                        <div class="text-[15px] text-white -mt-1.5 font-extrabold">
                            <div>Podgorica, MNE</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex grow items-center h-[45px] px-1">
                <div class="flex items-center justify-center bg-gray-100 border-r-gray-300 font-extrabold text-[11px] w-[60px] h-[40px] rounded-l-md cursor-pointer">
                    <div class="pt-[3px]">
                        All
                    </div>
                    <MenuDownIcon fill-color="#5E5E5E" :size="20" class="-mr-2"/>
                </div>
                <input class="block w-full border-none border-transparent focus:border-transparent focus:ring-0"
                       type="text">
                <div class="cursor-pointer bg-orange-300 p-[5px] px-2 rounded-r-md">
                    <MagnifyIcon :size="30"/>
                </div>
            </div>
            <div class="flex">
                <div class="h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <div class="items-center flex justify-center mt-2.5 px-1">
                        <img src="https://via.placeholder.com/35x20" alt="">
                        <div class="text-[15px] text-white -mt-2 -mr-0.5 font-extrabold">
                            EN
                        </div>
                            <MenuDownIcon fill-color="#C2C2C2" :size="20" class="-mr-4 -mt-1.5 pr-1"/>
                    </div>
                </div>

                <div class="h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <div class="flex items-center justify-center">
                        <div>
                            <div class="text-white text-[12px] font-extrabold">
                                Hello
                                <span>Sign in</span>
                            </div>
                            <div class="items-center flex">
                                <div class="text-[15px] text-white -mt-1.5 font-extrabold">
                                    Account & list
                                </div>
                                <MenuDownIcon fill-color="#C2C2C2" :size="20" class="-mr-4 -mt-1 pr-1"/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <div class="flex items-center justify-center">
                        <div>
                            <div class="text-white text-[12px] font-extrabold">
                                Returns
                            </div>
                            <div class="items-center flex">
                                <div class="text-[15px] text-white -mt-1.5 font-extrabold">
                                    & orders
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative h-[50px] p-2 border-[1px] border-gray-900 rounded-sm hover:border-[1px] hover:border-gray-100 cursor-pointer">
                    <span class="absolute text-center right-[21px] w-[14px] -top-0 rounded-full text-[20px]">
                        <div class="text-orange-400 font-extrabold bg-gray-900 h-[16px]">
                            0
                        </div>
                    </span>
                    <div class="flex items-center justify-center">
                        <CartMinusIcon fill-color="#FCFCFC" :size="40" class="-mt-0.5"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between bg-[#232f3e] h-[38px] mt-[60px] w-full min-w-[1150px] fixed z-40">
            <div class="flex">
                <div class="flex h-[30px] border-[1px] border-[#232f3e] rounded-sm hover:border-gray-100 hover:border-[1px] cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <MenuIcon fill-color="#F5F5F5" :size="26" class="mr-0.5"/>
                        <div class="text-white text-[14px] font-extrabold">All</div>
                    </div>
                </div>
                <div class="flex h-[30px] border-[1px] border-[#232f3e] rounded-sm hover:border-gray-100 hover:border-[1px] cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-white text-[14px] font-extrabold">Today's Deals</div>
                    </div>
                </div>
                <div class="flex h-[30px] border-[1px] border-[#232f3e] rounded-sm hover:border-gray-100 hover:border-[1px] cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-white text-[14px] font-extrabold">Gift Cards</div>
                    </div>
                </div>
                <div class="flex h-[30px] border-[1px] border-[#232f3e] rounded-sm hover:border-gray-100 hover:border-[1px] cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-white text-[14px] font-extrabold">Buy Again</div>
                    </div>
                </div>
                <div class="flex h-[30px] border-[1px] border-[#232f3e] rounded-sm hover:border-gray-100 hover:border-[1px] cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-white text-[14px] font-extrabold">Customer Service</div>
                    </div>
                </div>
                <div class="flex h-[30px] border-[1px] border-[#232f3e] rounded-sm hover:border-gray-100 hover:border-[1px] cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-white text-[14px] font-extrabold">Drazen's Amazon.com</div>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="flex h-[30px] border-[1px] border-[#232f3e] rounded-sm hover:border-gray-100 hover:border-[1px] cursor-pointer">
                    <div class="flex items-center justify-between px-2">
                        <div class="text-white text-[14px] font-extrabold">Holiday Fashion Deals</div>
                    </div>
                </div>
            </div>
        </div>

        <main class="max-w-[1500px] mx-auto">
            <div class="pt-[98px]"></div>
            <slot />
        </main>

        <div class="w-full bg-white mt-10">
            <div class="max-w-[1500px] mx-auto">
                <div class="text-[23px] pt-4 font-extrabold">
                    Recommended based on your shopping trends
                </div>
                <div class="flex justify-center items-stretch">
                    <div class="p-4 text-center mx-auto">
                        <div class="w-[158px] h-[150px] overflow-hidden">
                            <img src="https://via.placeholder.com/158x150" alt="">
                        </div>
                        <div class="w-[160px] text-[12px] py-2 text-teal-600 font-extrabold hover:text-red-600 cursor-pointer">
                            This is the test title
                        </div>
                        <div class="flex justify-start">
                            <div class="text-xs font-extrabold text-red-600 w-full text-left">$99.99</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-[#232F3E]">
            <div class="bg-[#37475A] hover:bg-gray-600 w-full p-3.5 cursor-pointer text-white font-extrabold text-center">
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
                    <li class="hover:underline cursor-pointer"> Top Up Your Account</li>
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
