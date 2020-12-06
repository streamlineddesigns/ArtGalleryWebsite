<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <!-- Container -->
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="text-center">
                        <h2 class="header-text">View {{folder}} Images</h2>
                    </div>
                    <div class="float-left">
                        <a class="btn btn-primary back-button" :href="route('dashboard')" title="Back"> <i class="fas fa-backward"></i> </a>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-success plus-button" :href="route('images.create', folder)" title="Upload Image"> <i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 text-center">
                    <jet-nav-link v-for="file in files" v-bind:key="file" :href="route('images.show', {foldername:folder, filename: file.split('/')[1] })">
                        <img :src="`../../uploads/${file}`" :alt="file" v-bind:key="folder" style="max-width: 200px;height:auto;">
                    </jet-nav-link>
                </div>
            </div>

        </div>
        <!-- /Container -->

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