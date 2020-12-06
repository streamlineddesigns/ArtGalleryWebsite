<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 text-center">
                <jet-nav-link :href="route('images.index', folder)">
                    Go Back
                </jet-nav-link>
                <img :src="img_src" :alt="img_src" style="max-width: 100%;height:auto;">
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
            img_src:String,
            folder:String,
        },

        components: {
            AppLayout,
            JetNavLink,
        },
    }
</script>