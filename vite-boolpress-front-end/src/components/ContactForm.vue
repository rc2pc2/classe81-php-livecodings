<template >
    <section class="contact-form">
        <div class="form-input">


            <div class="alert alert-success mb-3" v-if="success">
                <p>
                    Your message has been sent succesfully!
                </p>
            </div>


            <div class="mb-4">
                <label for="contact_name" class="form-label">
                    Name
                </label>
                <small v-for="error in errors.name" class="is-invalid d-block text-danger ">
                    {{ error }}
                </small>
                <input type="text" class="form-control" id="contact_name" placeholder="Insert your name" v-model="name">
            </div>



            <div class="mb-4">

                <label for="contact_email" class="form-label">
                    Email
                </label>

                <small v-for="error in errors.email" class="is-invalid d-block text-danger ">
                    {{ error }}
                </small>

                <input type="text" class="form-control" id="contact_email" placeholder="Insert your email" v-model="email">
            </div>

            <div class="mb-4">
                <label for="contact_message" class="form-label">
                    Message:
                </label>

                <small v-for="error in errors.message" class="is-invalid d-block text-danger ">
                    {{ error }}
                </small>

                <textarea class="form-control" id="contact_message" rows="10" name="message" v-model="message"></textarea>
            </div>


            <div class="mb-4">
                <button class="btn btn-primary" @click.prevent="sendContactForm">
                    Send contact form
                </button>
            </div>
        </div>
    </section>
</template>
<script>
import axios from 'axios';

export default {
    name: 'ContactForm',
    data() {
        return {
            name: '',
            email: '',
            message: '',
            success: false,
            loading : false,
            errors : {},
            apiAddress: 'http://127.0.0.1:8000/api/',
        }
    },
    props: { },
    methods: {
        sendContactForm(){
            this.success = false;
            // invio il form
            this.loading = true;
            console.warn(this.name, this.email, this.message);

            const formData = {
                name : this.name,
                email: this.email,
                message: this.message,
            };

            axios.post(`${this.apiAddress}contact-us`, formData ).then((response) => {
                this.success = response.data.success;
                // console.warn(this.success);

                if (this.success){
                    this.name = "";
                    this.email = "";
                    this.message = "";
                } else {
                    this.errors = response.data.errors;
                    console.warn(this.errors  );
                }

                this.loading = false;
                //  se è andata bene fai a
                // altrimenti fai b
            })
        }
    },

}
</script>
<style lang="">

</style>