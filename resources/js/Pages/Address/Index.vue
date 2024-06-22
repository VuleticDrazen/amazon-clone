<script setup>
import {Head, Link} from '@inertiajs/vue3';
import MainLayout from "@/Layouts/MainLayout.vue";
import PlusIcon from "vue-material-design-icons/Plus.vue"


</script>

<template>
    <Head title="Address"/>

    <MainLayout>
        <div class="max-w-[1000px] mx-auto text-3xl mb-10 mt-12">
            Your address
        </div>

        <div class="max-w-[1000px] mx-auto flex gap-2 h-[270px]">
            <div class="border border-dotted border-gray-400 rounded-md w-1/3" v-if="!$page.props.auth.address">
                <Link :href="route('address.create')" v-if="!$page.props.auth.address">
                    <div class="grid h-full place-items-center cursor-pointer">
                        <div class="text-center">
                            <div class="justify-center flex">
                                <PlusIcon :size="50"/>
                            </div>
                            <div class="font-bold text-2xl">Add address</div>
                        </div>
                    </div>
                </Link>
                <div v-else class="grid h-full place-items-center">
                    <div class="text-center">
                        <div class="font-bold text-2xl">
                            Address is added
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="$page.props.auth.address" class="relative border border-gray-400 rounded-md w-1/3 shadow-md">
                <div
                    class="flex items-center justify-start p-3 text-gray-600 font-extrabold border-b border-b-gray-400">
                    Default: <img class="h-3 mt-1.5 ml-2" src="/images/logo/AMAZON_LOGO_DARK.png">
                </div>
                <div class="text-sm font-extrabold px-4 pt-4">
                    {{ $page.props.auth.user.full_name }}
                </div>
                <div class="text-sm px-4">
                    <div>{{ $page.props.auth.address?.street }}</div>
                    <div>{{ $page.props.auth.address?.flat_number }}</div>
                    <div>{{ $page.props.auth.address?.phone_number }}</div>
                    <div>{{ $page.props.auth.address?.city }}</div>
                    <div>{{ $page.props.auth.address?.country }}</div>
                </div>
                <div class="px-4 absolute bottom-0 pb-4">
                    <Link v-if="$page.props.auth.address" :href="route('address.destroy', {address: $page.props.auth.address.id})"
                          method="delete"
                          class="text-teal-600 text-sm font-extrabold hover:underline hover:text-red-600"
                    >
                        Remove
                    </Link>
                </div>
            </div>
        </div>
    </MainLayout>

</template>
