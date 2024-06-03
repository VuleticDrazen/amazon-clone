<script setup>
import {useForm} from '@inertiajs/vue3';
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const form = useForm({
    country: 'ME',
    street: '',
    flat_number: '',
    city: '',
    postcode: '',
    first_name: '',
    last_name: ''
})

const submit = () => {
    form.post(route('checkout.store'), {
        onFinish: () => route('dashboard')
    })
}
</script>

<template>
        <div class="max-w-[500px] mt-8 mx-auto font-extrabold text-2xl">
            <div>Shipping Address</div>
            <form @submit.prevent="submit">
                <div class="text-[15px] -mb-1.5 font-extrabold">Country</div>
                <select v-model="form.country"
                        name="country"
                        class="w-full border-gray-300 rounded-lg shadow-md py-1 bg-gray-200
                         hover:bg-gray-300 cursor-pointer focus:border-orange-400 focus:ring-orange-400">
                    <option value="ME" selected>Montenegro</option>
                    <option value="UK">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>

                <div class="mt-4">
                    <InputLabel value="First name"/>
                    <TextInput v-model="form.first_name" class="-mb-1.5 block w-full" type="text" required/>
                </div>
                <div class="mt-2">
                    <InputLabel value="Last name"/>
                    <TextInput v-model="form.last_name" class="-mb-1.5 block w-full" type="text" required/>
                </div>
                <div class="mt-2">
                    <div class="flex gap-2">
                        <div class="w-4/5">
                            <InputLabel value="Street address"/>
                            <TextInput v-model="form.street" class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                        <div class="w-1/5">
                            <InputLabel value="Flat number"/>
                            <TextInput v-model="form.flat_number" class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="flex gap-2">
                        <div class="w-full">
                            <InputLabel value="City"/>
                            <TextInput v-model="form.city" class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                        <div class="w-full">
                            <InputLabel value="Postcode"/>
                            <TextInput v-model="form.postcode" class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <button class="bg-yellow-400 text-[14px] shadow-sm rounded-lg font-bold px-3 cursor-pointer">
                        Add address
                    </button>
                </div>
            </form>
        </div>
</template>
