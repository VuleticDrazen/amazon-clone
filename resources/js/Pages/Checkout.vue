<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {computed} from "vue";

import {useCartStore} from "@/store/cart";
import {storeToRefs} from "pinia";
import Add from "@/Pages/Address/Add.vue";

const cartStore = useCartStore()
const {cart} = storeToRefs(cartStore)


const total = computed(() => {
    let total = 0
    cart.value.forEach(c => {
        total += parseFloat(c.price) * c.amount
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
    <Head title="Porudžbina"/>

    <MainLayout>
        <div class="flex max-w-[1250px] mx-auto pt-4">
            <div class="w-2/3">
                <div class=" border-b border-b-gray-300 w-[calc(100%-100px)] pb-4 pl-4 mb-6">
                    <div class="px-4 font-semibold">
                       <Add/>
                    </div>
                </div>
            </div>
            <div class="w-1/3">
                <div class=" border-b border-b-gray-300 w-[calc(100%-10px)] pb-4 mb-6 pt-8">
                    <div class="px-4">
                        <div class="pt-4 text-[14px] text-center">
                            Nakon što unesete potrebne podatke i potvrdite porudžbinu,
                            na Vašu email adresu će stići potvrda o Vašoj porudžbini sa daljim
                            uputstvima.
                        </div>
                    </div>
                </div>
                <div class=" border-b border-b-gray-300 w-[calc(100%-10px)] pb-4 mb-6">
                    <div class="px-4 font-semibold">
                        <div class="font-extrabold pt-4 text-[18px] text-center"> Ukupno proizvoda : {{ cart.length }}
                        </div>
                        <div class="font-extrabold pt-4 text-[18px] text-center"> Za plaćanje {{ total }} €
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
