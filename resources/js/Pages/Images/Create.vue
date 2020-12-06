<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8 text-center">
                <form @submit.prevent="submit(folder)">
                    <input ref="image" type="file" @change="onFileChange">
                    <button type="submit">Submit</button>
                </form>
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