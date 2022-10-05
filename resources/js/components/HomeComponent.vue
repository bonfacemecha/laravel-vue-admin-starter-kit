<template>
  <main>
    <div class="grey-bg container-fluid">
      <section id="minimal-statistics">
        <div class="row">
          <div class="col-12 mt-4">
            <h4 class="text-uppercase fw-bolder">Dashboard</h4>
            <p>At a Glance</p>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card shadow borderless">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="danger">{{getApplications.length}}</h3>
                      <span>Total Applications</span>
                    </div>
                    <div class="align-self-center">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="36"
                        height="36"
                        fill="currentColor"
                        class="bi text-danger bi-binoculars"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M3 2.5A1.5 1.5 0 0 1 4.5 1h1A1.5 1.5 0 0 1 7 2.5V5h2V2.5A1.5 1.5 0 0 1 10.5 1h1A1.5 1.5 0 0 1 13 2.5v2.382a.5.5 0 0 0 .276.447l.895.447A1.5 1.5 0 0 1 15 7.118V14.5a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 14.5v-3a.5.5 0 0 1 .146-.354l.854-.853V9.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v.793l.854.853A.5.5 0 0 1 7 11.5v3A1.5 1.5 0 0 1 5.5 16h-3A1.5 1.5 0 0 1 1 14.5V7.118a1.5 1.5 0 0 1 .83-1.342l.894-.447A.5.5 0 0 0 3 4.882V2.5zM4.5 2a.5.5 0 0 0-.5.5V3h2v-.5a.5.5 0 0 0-.5-.5h-1zM6 4H4v.882a1.5 1.5 0 0 1-.83 1.342l-.894.447A.5.5 0 0 0 2 7.118V13h4v-1.293l-.854-.853A.5.5 0 0 1 5 10.5v-1A1.5 1.5 0 0 1 6.5 8h3A1.5 1.5 0 0 1 11 9.5v1a.5.5 0 0 1-.146.354l-.854.853V13h4V7.118a.5.5 0 0 0-.276-.447l-.895-.447A1.5 1.5 0 0 1 12 4.882V4h-2v1.5a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V4zm4-1h2v-.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5V3zm4 11h-4v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14zm-8 0H2v.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5V14z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card shadow borderless">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">156</h3>
                      <span>Total Candidates</span>
                    </div>
                    <div class="align-self-center">
                      <!-- <i class="icon-user success font-large-2 float-right"></i> -->
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="36"
                        height="36"
                        fill="currentColor"
                        class="bi bi-people"
                        viewBox="0 0 16 16"
                      >
                        <path
                          d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card shadow borderless">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="warning">89</h3>
                      <span>Processed Applications</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-pie-chart warning font-large-2 float-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12">
            <div class="card shadow borderless">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="primary">4</h3>
                      <span>Portal Admins</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-support primary font-large-2 float-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Page content-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8">
          <div class="card shadow borderless bg-white mt-4">
            <div class="card-body">
              <h5 class="my-4 fw-bolder">Recent Applications</h5>
          <div>
            <b-table headVariant="dark" :fields="fields" :per-page="perPage" :items="getApplications"></b-table>
          </div>
          <div class="justify-content-center d-flex">
            <router-link class="btn btn-outline-secondary rounded-pill px-5" :to="{ name: 'applications'}">View all</router-link>
          </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <h5 class="my-4 fw-bolder">How/Where did you hear about Good Kenyan?(%)</h5>
          <!-- <BarChart /> -->
          <PieChart />
        </div>
      </div>
    </div>
  </main>
</template>
  
  <script>
import BarChart from "./BarChart";
import PieChart from "./PieChart";

import { mapActions, mapGetters } from "vuex";
export default {
  name: "Dashboard",
  data() {
    return {
      perPage: 8,
      fields: [
          {
            key: 'name',
            sortable: true
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
        ]
    };
  },

  mounted() {
this.fetchApplications();
  },

  methods: {
...mapActions(['fetchApplications']),
  },
  computed: {
    ...mapGetters(['getApplications'])
  },

  components: { BarChart, PieChart }
};
</script>
  