<template>
    <main>
        <div class="grey-bg container-fluid">
            <section id="minimal-statistics">
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <h5 class="text-uppercase fw-bolder">Applications</h5>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-end">
                        <router-link class="btn-secondary btn rounded-pill  pb-2" :to="{name: 'form-registrations'}" >
                           <span class="px-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi mx-1 bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                            Register
                           </span>
                        </router-link>
                        <b-button pill variant="secondary px-3" size="sm">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi mx-2 bi-cloud-download-fill" viewBox="0 0 16 16">
                              <path
                                  fill-rule="evenodd"
                                  d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.5a.5.5 0 0 1 1 0V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0zm-.354 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V11h-1v3.293l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"
                              />
                          </svg>
                          Download Report
                      </b-button>
                    </div>
                </div>
            </section>
        </div>
        <!-- Page content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card shadow borderless bg-white mt-4">
                        <div class="card-body">
                            <b-row class="py-4">
                                <b-col sm="3" class="my-1">
                                    <b-form-group label="Per page" label-for="per-page-select" label-cols-sm="6" label-cols-md="4" label-cols-lg="3" label-align-sm="right" class="mb-0" label-size="sm">
                                        <b-form-select size="sm" id="per-page-select" v-model="perPage" :options="pageOptions"></b-form-select>
                                    </b-form-group>
                                </b-col>
                                <b-col sm="3" class="my-1"></b-col>
                                <b-col sm="6" class="my-1">
                                    <b-form-group label="Filter" label-for="filter-input" label-cols-sm="3" label-align-sm="right" class="mb-0" label-size="sm">
                                        <b-input-group>
                                            <b-form-input size="sm" id="filter-input" v-model="filter" type="search" placeholder="Type to Search"></b-form-input>
                                        </b-input-group>
                                    </b-form-group>
                                </b-col>
                            </b-row>
                            <div>
                                <b-table headVariant="dark" id="my-table" :current-page="currentPage" :filter="filter" :per-page="perPage" :fields="fields"  :items="getApplications">
                                
                                </b-table>
                            </div>
                            <div class="justify-content-end d-flex">
                                <b-pagination v-model="currentPage" :total-rows="rows" :per-page="perPage" first-number last-number aria-controls="my-table"></b-pagination>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  </template>
  
  <script>
    import { mapActions, mapGetters } from "vuex";

    export default {
        name: "Reports",
        data() {
            return {
                perPage: 5,
                pageOptions: [5, 10, 15, { value: 100, text: "Show a lot" }],
                filter: null,
                currentPage: 1,
                fields: [
          {
            key: 'name',
            sortable: false
          },
          {
            key: 'residency',
            sortable: false
          },
          {
            key: 'dob',
            label: 'Date of Birth',
            sortable: false
          },
        ],
            };
        },
        mounted() {
this.fetchApplications();
  },
  methods: {
...mapActions(['fetchApplications']),
  },
        computed: {
            ...mapGetters(['getApplications']),
            rows() {
                return this.getApplications.length;
            },
        },
        components: {},
    };
  </script>
  