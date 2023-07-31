<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import PlusIcon from "vue-material-design-icons/Plus.vue"
import InputLabel from "@/Components/InputLabel.vue";

</script>

<template>
    <Head title="Address"/>

    <MainLayout>
        <div class="max-w-[500px] mt-8 mx-auto font-extrabold text-2xl">
            <div>Add a new Address</div>
            <form>
                <div class="text-[15px] -mb-1.5 font-extrabold">Country</div>
                <select name="country"
                        class="w-full border-gray-300 rounded-lg shadow-md py-1 bg-gray-200
                         hover:bg-gray-300 cursor-pointer focus:border-orange-400 focus:ring-orange-400">
                    <option value="ME" selected>Montenegro</option>
                    <option value="UK">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>

                <div class="mt-4">
                    <InputLabel class="-mb-1.5" value="First name"/>
                    <TextInput class="-mb-1.5 block w-full" type="text" required/>
                </div>
                <div class="mt-2">
                    <InputLabel class="-mb-1.5" value="Last name"/>
                    <TextInput class="-mb-1.5 block w-full" type="text" required/>
                </div>
                <div class="mt-2">
                    <div class="flex gap-2">
                        <div class="w-4/5">
                            <InputLabel class="-mb-1.5" value="Street address"/>
                            <TextInput class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                        <div class="w-1/5">
                            <InputLabel class="-mb-1.5" value="Flat number"/>
                            <TextInput class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="flex gap-2">
                        <div class="w-full">
                            <InputLabel class="-mb-1.5" value="City"/>
                            <TextInput class="-mb-1.5 block w-full" type="text" required/>
                        </div>
                        <div class="w-full">
                            <InputLabel class="-mb-1.5" value="Postcode"/>
                            <TextInput class="-mb-1.5 block w-full" type="text" required/>
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
    </MainLayout>

</template>
