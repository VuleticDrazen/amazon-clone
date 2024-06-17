<script setup>
import {useForm} from '@inertiajs/vue3';
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const form = useForm({
    street: '',
    flat_number: '',
    city: '',
    postcode: '',
    first_name: '',
    last_name: '',
    email: ''
})

const submit = () => {
    form.post(route('checkout.store'), {
        onFinish: () => route('dashboard')
    }, () => {
    })
}
</script>

<template>
        <div class="max-w-[500px] mt-8 mx-auto font-extrabold text-2xl">
            <div>Podaci za dostavu</div>
            <form @submit.prevent="submit">
                <div class="mt-4">
                    <InputLabel value="Ime"/>
                    <TextInput v-model="form.first_name" class="-mb-1.5 block w-full" type="text" required/>
                </div>
                <div class="mt-2">
                    <InputLabel value="Prezime"/>
                    <TextInput v-model="form.last_name" class="-mb-1.5 block w-full" type="text" required/>
                </div>
                <div class="mt-2">
                    <InputLabel value="Email"/>
                    <TextInput v-model="form.email" class="-mb-1.5 block w-full" type="email" required/>
                </div>
                <div class="mt-2">
                    <div class="flex gap-2">
                        <div class="w-4/5">
                            <InputLabel value="Ulica"/>
                            <TextInput v-model="form.street" class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                        <div class="w-1/5">
                            <InputLabel value="Broj"/>
                            <TextInput v-model="form.flat_number" class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="flex gap-2">
                        <div class="w-full">
                            <InputLabel value="Grad"/>
                            <TextInput v-model="form.city" class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                        <div class="w-full">
                            <InputLabel value="Poštanski broj"/>
                            <TextInput v-model="form.postcode" class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button class="bg-yellow-400 text-[14px] shadow-sm rounded-lg font-bold px-3 cursor-pointer">
                        Potvrdi
                    </button>
                </div>
            </form>
        </div>
</template>
