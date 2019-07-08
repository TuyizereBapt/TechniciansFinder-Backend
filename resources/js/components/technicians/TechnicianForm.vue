<template>
    <div>
        <div class="widget">
            <div class="widget-header">
                <h3><i class="fa fa-edit"></i> Basic Info</h3></div>
            <div class="widget-content">
                <form class="form-horizontal" role="form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="fname" class="control-label sr-only">First name</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.f_name" type="text" class="form-control" id="fname" placeholder="First Name">
                                        <span class="input-group-addon"><i class="fa">FN</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="lname" class="control-label sr-only">Las name</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.l_name" type="text" class="form-control" id="lname" placeholder="Last Name">
                                        <span class="input-group-addon"><i class="fa">LN</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="control-label sr-only">Email</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.email" type="email" class="form-control" id="email" placeholder="Email">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="birthDate" class="control-label sr-only">Birth date</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.birth_date" type="text" class="form-control" id="birthDate" placeholder="Birth date">
                                        <span class="input-group-addon"><i class="fa">BD</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone" class="control-label sr-only">Phone</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.phone" type="text" class="form-control" id="phone" placeholder="Phone">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="sex" class="control-label sr-only">Sex</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.sex" type="text" class="form-control" id="sex" placeholder="Sex">
                                        <span class="input-group-addon"><i class="fa">BD</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget">
            <div class="widget-header">
                <h3><i class="fa fa-edit"></i> Location Info</h3>
            </div>
            <div class="widget-content">
                <form class="form-horizontal" role="form">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="province" class="control-label sr-only">Province</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.province" type="text" class="form-control" id="province" placeholder="Province">
                                        <span class="input-group-addon"><i class="fa">FN</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="district" class="control-label sr-only">District</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.district" type="text" class="form-control" id="district" placeholder="District">
                                        <span class="input-group-addon"><i class="fa">LN</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="sector" class="control-label sr-only">Sector</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.sector" type="text" class="form-control" id="sector" placeholder="Sector">
                                        <span class="input-group-addon"><i class="fa ">SE</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="cell" class="control-label sr-only">Cell</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.cell" type="text" class="form-control" id="cell" placeholder="Cell">
                                        <span class="input-group-addon"><i class="fa">CE</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="village" class="control-label sr-only">Village</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.village" type="text" class="form-control" id="village" placeholder="Village">
                                        <span class="input-group-addon"><i class="fa">VI</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="widget">
            <div class="widget-header">
                <h3><i class="fa fa-edit"></i> Work place</h3>
            </div>
            <div class="widget-content">
                <form class="form-horizontal" role="form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="adress" class="control-label sr-only">Address</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.work_place" type="text" class="form-control" id="adress" placeholder="Address">
                                        <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="latitude" class="control-label sr-only">Latitude</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.work_place_lat" type="text" class="form-control" id="latitude" placeholder="Latitude">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="longitude" class="control-label sr-only">Longitude</label>
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <input v-model="category.work_place_long" type="text" class="form-control" id="longitude" placeholder="Longitude">
                                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-check-circle"></i> Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<script>

    export default{
        data(){
            return {
                category: {
                    f_name: '',
                    l_name: '',
                    birth_date: '',
                    sex: '',
                    marital_status: '',
                    email: '',
                    phone: '',
                    province: '',
                    district: '',
                    sector: '',
                    cell: '',
                    village: '',
                    work_place: '',
                    work_place_lat: '',
                    work_place_long: '',
                }
            }
        }
    }
</script>