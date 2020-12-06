<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 text-center">
                <jet-nav-link v-for="file in files" v-bind:key="file" :href="route('images.show', {foldername:folder, filename: file.split('/')[1] })">
                    <img :src="`../../uploads/${file}`" :alt="file" v-bind:key="folder" style="max-width: 200px;height:auto;">
                </jet-nav-link>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '../../Layouts/AppLayout'
    import JetNavLink from '../../Jetstream/NavLink'

    export default {
        props: {
            sessions:Object,
            files:Array,
            folder:String,
        },

        components: {
            AppLayout,
            JetNavLink,
        },

    }
</script>