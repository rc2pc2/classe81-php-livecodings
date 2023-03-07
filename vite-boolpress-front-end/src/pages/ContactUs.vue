<template lang="">
    <div>
        <h2 class="mb-5">
            Contact us
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ContactForm />
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ContactForm from '../components/ContactForm.vue';


export default {
    name: 'ContactUs',
    components: {
        ContactForm
    }
}
</script>
<style lang="">

</style>