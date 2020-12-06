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
                        <h2 class="header-text">Upload {{folder}} Images</h2>
                    </div>
                    <div class="float-left">
                        <a class="btn btn-primary back-button" :href="route('images.index', folder)" title="Back"> <i class="fas fa-backward"></i> </a>
                    </div>
                </div>
            </div>

            <div>
                <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 text-center">
                    <form @submit.prevent="submit(folder)">
                        <!-- <input ref="image" type="file" @change="onFileChange"> -->

                        <div class="custom-file">
                            <input ref="image" type="file" @change="onFileChange" class="custom-file-input" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>

                        <button type="submit" class="btn btn-primary my-5 float-right">Submit</button>
                    </form>
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
            folder:String,
            errors: Object,
        },
        components: {
            AppLayout,
            JetNavLink,
        },
        data() {
            return {
                form: new FormData(),
            }
        },
        methods: {
            onFileChange() {
                const files = this.$refs.image.files;
                this.form.append('logo', files[0]);
            },
            submit(foldername) {
                var uri = "/images/" + foldername;
                this.$inertia.post(uri, this.form);
            },
        },
    }
</script>