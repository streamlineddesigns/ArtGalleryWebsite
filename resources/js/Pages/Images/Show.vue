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
                        <a class="btn btn-primary back-button" :href="route('images.index', folder)" title="Back"> <i class="fas fa-backward"></i> </a>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-danger plus-button" href="" title="Upload Image"> <i class="fas fa-trash fa-lg trash-button"></i></a>
                    </div>
                </div>
            </div>

            <div>
                <div class="d-flex justify-content-center align-items-center text-center">
                    <img :src="img_src" :alt="img_src" style="max-width: 100%;height:auto;">
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
            img_src:String,
            folder:String,
        },

        components: {
            AppLayout,
            JetNavLink,
        },
    }
</script>