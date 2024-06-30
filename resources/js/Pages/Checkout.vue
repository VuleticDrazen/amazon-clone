<script setup>
import {Head, Link, useForm} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import {computed, ref} from "vue";

import {useCartStore} from "@/store/cart";
import {storeToRefs} from "pinia";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import Modal from "@/Components/Modal.vue";

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

const form = useForm({
    street: '',
    flat_number: '',
    city: '',
    phone_number: '',
    note: '',
    first_name: '',
    last_name: '',
    email: '',
    order: cart.value.map(item => ({
            ad_id: item.id,
            ad_title: item.title,
            price: item.price,
            quantity: item.amount,
            // unit: item.unit,
            seller: {
                id: item.user_id,
                name: item.user_name,
                email: item.user_email,
                city: item.city,
                address: item.address,
                phone: item.phone_number,
            },

        })
    )

})

const isSubmitted = ref(false)
const message = ref({text: '', success: true})


async function sendOrder(page = 1) {
    const response = await axios.post(route('checkout.store'), form.data());
    isSubmitted.value = true;
    message.value.text = response.data.message
    if (response.status !== 200) {
        message.value.success = false
    }
}

function closeModal() {
    isSubmitted.value = false;
    cartStore.emptyCart();
    location.replace('/')
}
</script>

<template>
    <Head title="Porudžbina"/>

    <MainLayout>
        <div class="flex max-w-[1250px] mx-auto pt-4">
            <div class="w-2/3">
                <div class=" border-b border-b-gray-300 w-[calc(100%-100px)] pb-4 pl-4 mb-6">
                    <div class="px-4 font-semibold">
                        <div class="max-w-[500px] mt-8 mx-auto font-extrabold text-2xl">
                            <div>Podaci za dostavu</div>
                            <form @submit.prevent="sendOrder">
                                <div class="mt-4">
                                    <InputLabel value="Ime*"/>
                                    <TextInput v-model="form.first_name" class="-mb-1.5 block w-full" type="text"
                                               required/>
                                </div>
                                <div class="mt-2">
                                    <InputLabel value="Prezime*"/>
                                    <TextInput v-model="form.last_name" class="-mb-1.5 block w-full" type="text"
                                               required/>
                                </div>
                                <div class="mt-2">
                                    <InputLabel value="Email*"/>
                                    <TextInput v-model="form.email" class="-mb-1.5 block w-full" type="email" required/>
                                </div>
                                <div class="mt-2">
                                    <div class="flex gap-2">
                                        <div class="w-4/5">
                                            <InputLabel value="Ulica*"/>
                                            <TextInput v-model="form.street" class="-mb-1.5 block w-full" type="text"
                                                       required/>
                                        </div>
                                        <div class="w-1/5">
                                            <InputLabel value="Broj"/>
                                            <TextInput v-model="form.flat_number" class="-mb-1.5 block w-full"
                                                       type="text"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <div class="flex gap-2">
                                        <div class="w-full">
                                            <InputLabel value="Grad*"/>
                                            <TextInput v-model="form.city" class="-mb-1.5 block w-full" type="text"
                                                       required/>
                                        </div>
                                        <div class="w-full">
                                            <InputLabel value="Kontakt telefon*"/>
                                            <TextInput v-model="form.phone_number" class="-mb-1.5 block w-full"
                                                       type="text"
                                                       required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <InputLabel value="Komentar"/>
                                    <TextInput v-model="form.note" class="-mb-1.5 block w-full" type="text"/>
                                </div>
                                <div class="mt-6">
                                    <button
                                        class="bg-yellow-400 text-[14px] shadow-sm rounded-lg font-bold px-3 cursor-pointer">
                                        Potvrdi
                                    </button>
                                </div>
                            </form>
                        </div>
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
        <Modal :show="isSubmitted">
            <div class="w-1/2 p-4 mx-auto text-center h-72">
                <p class="pt-16 font-extrabold text-[18px]" :class="message.success ? 'text-green-300' : 'text-red-200'"
                >{{ message.text }}</p>
                <button
                    @click="closeModal"
                    class="bg-yellow-400 mt-12 h-[45px] w-[128px] text-[14px] shadow-sm rounded-lg font-bold px-3 cursor-pointer">
                    Zatvori
                </button>
            </div>
        </Modal>
    </MainLayout>
</template>
