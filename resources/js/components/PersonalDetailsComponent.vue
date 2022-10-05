<template>
    <main>
        <div class="grey-bg container-fluid">
            <section id="minimal-statistics">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <h4 class="text-uppercase fw-bolder">Mwanzo Program</h4>
                    </div>
                </div>
            </section>
        </div>
        <!-- Page content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card shadow borderless bg-white mt-4">
                        <div class="card-body py-4">
                            <form action="" method="post">
                                <h5 class="fw-bold py-3">Registration Form</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" v-model="getRegister.email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" v-model="getRegister.name" class="form-control" id="floatingInput" placeholder="name@example.com" />
                                            <label for="floatingInput">Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <b-form-datepicker id="example-datepicker"  v-model="getRegister.dob" class="pb-0 pt-4"></b-form-datepicker>
                                            <label for="example-datepicker">Date of Birth</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" v-model="getRegister.phone_number" class="form-control" id="floatingInput" placeholder="name@example.com" />
                                            <label for="floatingInput">Phone Number</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" v-model="getRegister.describe_yourself" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>
                                            <label for="floatingTextarea2">Describe yourself</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" v-model="getRegister.pastor_name_contact" class="form-control" id="floatingInput" placeholder="name@example.com" />
                                            <label for="floatingInput">Parent/Guardian Contact</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" v-model="getRegister.parent_guardian_contact" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Pastor/Sheikh Name & Number</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control"  v-model="getRegister.residency" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Where do you live? With Who?</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control"  v-model="getRegister.family_info" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px;"></textarea>
                                            <label for="floatingTextarea2">Tell us about the members of your family</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div>
                                            <b-button block variant="secondary" @click="submitForm" size="lg">Submit Form</b-button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex';
    export default {
        name: "PersonalDetails",
        data() {
            return {
            };
        },
        methods: {
            ...mapActions(['submitForm'])
        },
        computed: {
            ...mapGetters(['getRegister'])
        },
        components: {

        },
    };
</script>
