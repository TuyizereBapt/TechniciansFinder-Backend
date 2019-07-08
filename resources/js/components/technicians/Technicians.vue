<template>
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><i class="fa fa-table"></i> All</h3>
        </div>
        <div class="widget-content">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Birthdate</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Sex</th>
                        <th>Province</th>
                        <th>District</th>
                        <th>Sector</th>
                        <th>Work Place</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(technician,index) in technicians" :key="technician.id">
                        <td>{{technician.f_name}}</td>
                        <td>{{technician.l_name}}</td>
                        <td>{{technician.birth_date}}</td>
                        <td>{{technician.email}}</td>
                        <td>{{technician.phone}}</td>
                        <td>{{technician.sex}}</td>
                        <td>{{technician.province}}</td>
                        <td>{{technician.district}}</td>
                        <td>{{technician.sector}}</td>
                        <td>{{technician.work_place}}</td>
                        <td>{{technician.work_place_lat}}</td>
                        <td>{{technician.work_place_long}}</td>
                        <td>
                            <a href="" class="btn btn-primary btn-xs">
                                <i class="fa fa-edit"></i> Update
                            </a>
                            <a href="" class="btn btn-danger btn-xs"
                               @click.prevent="deleteTechnician(technician,index)">
                                <i class="fa fa-close"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <tr v-if="technicians.length===0">
                        <td colspan="13" class="text-center text-black-50">No data available</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <loading :active.sync="operation.inProgress"
                 :can-cancel="false"
                 :is-full-page="true"
                 :background-color="operation.loader.backgroundColor"
                 :loader="operation.loader.type"
                 :color="operation.loader.color"/>
    </div>
</template>
<script>
    import Loading from 'vue-loading-overlay';
    import 'vue-loading-overlay/dist/vue-loading.css';

    export default{
        name: 'technicians',
        components:{
            Loading
        },
        mounted(){
            this.showLoader()
            axios.get('/api/technicians').then(({data}) => {
                this.technicians = data
            }).catch((error) => {
                console.log('Error occurred', error.response)
                alert('An error occurred while fetching data from server')
            }).finally(()=>{
                this.hideLoader()
            })
        },
        data(){
            return {
                technicians: [],
                operation: {
                    inProgress: true,
                    isFetch: false,
                    loader: {
                        backgroundColor: '#fff',
                        color: '#001c46',
                        type: 'spinner' //Possible values: dots, spinner
                    },
                    response: {
                        failed: false,
                        message: '',
                    }
                },
            }
        },
        methods: {
            deleteTechnician(technician, index){
                this.showLoader()
                axios.delete('/api/technicians/' + technician.id).then(() => {
                    this.technicians.splice(index, 1)
                }).catch((error) => {
                    console.log('Error occurred', error.response)
                    alert('An error occurred while deleting the technician. Try again later')
                }).finally(()=>{
                    this.hideLoader()
                })
            },
            updateTechnician(){

            },
            showLoader(){
                this.operation.inProgress = true
            },
            hideLoader(){
                this.operation.inProgress = false
            }
        }
    }
</script>
<style lang="scss">

</style>