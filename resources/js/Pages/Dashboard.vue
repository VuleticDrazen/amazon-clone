<script setup>
import {Head} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import 'vue3-carousel/dist/carousel.css'
import {Carousel, Navigation, Slide} from "vue3-carousel";
</script>

<template>
    <Head title="Dashboard"/>

    <MainLayout>
        <Carousel :items-to-show="1" :wrap-around="true">
            <Slide v-for="slide in 10" :key="slide">
                <div class="carousel__item">
                    <img src="https://via.placeholder.com/3000x1200.png/004466?text=Testing" alt="">
                </div>
            </Slide>

            <template #addons>
                <Navigation/>
            </template>
        </Carousel>
        <div class="relative -mt-[300px]">
            <div class="flex relative z-10 m-4">
                <div class="bg-white p-2 mx-2 text-md w-full text-center">
                    You are on Amazon clone
                    <span class="underline text-teal-600 cursor-pointer">Click here to buy me a coffee</span>
                </div>
            </div>
            <div class="grid grid-cols-3 m-4 z-10 relative">
                <div class="p-1.5 flex">
                    <div class="bg-white p-5">
                        <div class="text-2xl font-extrabold flex">Computers</div>
                        <div class="flex">
                            <img class="object-fill" src="https://via.placeholder.com/1097x756.png/" alt="">
                        </div>
                        <div class="pt-3 -mb-2 text-teal-800 font-bold hover:underline hover:text-red-400 cursor-pointer">
                            See more
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
<style>
.carousel__item{
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel__prev,
.carousel__next {
    width: 40px;
    height: 200px;
    color: rgb(196,196,196);
    margin-top: -100px;
    border: transparent;
}

.carousel__prev:hover,
.carousel__next:hover {
    width: 40px;
    height: 200px;
    color: rgb(212,212,212);
    margin-top: -100px;
    border: 3px solid rgb(217,217,217);
}

</style>
