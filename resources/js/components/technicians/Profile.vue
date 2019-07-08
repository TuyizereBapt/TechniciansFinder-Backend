<template>
    <div class="main-content">
        <!-- NAV TABS -->
        <ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
            <li class="active">
                <a href="page-profile.html#profile-tab" data-toggle="tab"><i class="fa fa-user"></i>Profile</a>
            </li>
            <li>
                <a href="page-profile.html#activity-tab" data-toggle="tab"><i class="fa fa-rss"></i> Recent Work</a>
            </li>
            <li>
                <a href="page-profile.html#settings-tab" data-toggle="tab"><i class="fa fa-gear"></i> Settings</a>
            </li>
        </ul>
        <!-- END NAV TABS -->
        <div class="tab-content profile-page">
            <!-- PROFILE TAB CONTENT -->
            <div class="tab-pane profile active" id="profile-tab">
                <div class="row">
                    <div class="col-md-3">
                        <div class="user-info-left">
                            <img src="/assets/img/profile-avatar.png" alt="Profile Picture"/>
                            <h2>Jonathan Smith <i class="fa fa-circle green-font online-icon"></i>
                                <sup class="sr-only">online</sup>
                            </h2>
                            <div class="contact">
                                <a href="page-profile.html#" class="btn btn-block btn-custom-primary">
                                    <i class="fa fa-envelope-o"></i> Send Message
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="user-info-right">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="basic-info">
                                        <h3><i class="fa fa-square"></i> Basic Information</h3>
                                        <p class="data-row">
                                            <span class="data-name">Birth Date</span>
                                            <span class="data-value">Nov 20, 1988</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">Gender</span>
                                            <span class="data-value">Male</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">Marital Status</span>
                                            <span class="data-value">Single</span>
                                        </p>
                                    </div>
                                    <div class="contact_info">
                                        <h3><i class="fa fa-square"></i> Contact Information</h3>
                                        <p class="data-row">
                                            <span class="data-name">Email</span>
                                            <span class="data-value">me@jonasmith.com</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">Phone</span>
                                            <span class="data-value">(1800) 221 - 876543</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">Address</span>
                                            <span class="data-value">Riverside City 66, 80123 Denver<br/>Colorado</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contact_info">
                                        <h3><i class="fa fa-square"></i> Location Information</h3>
                                        <p class="data-row">
                                            <span class="data-name">Province</span>
                                            <span class="data-value">Kigali City</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">District</span>
                                            <span class="data-value">Nyarugenge</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">Sector</span>
                                            <span class="data-value">Nyarugenge</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">Cell</span>
                                            <span class="data-value">Nyarugenge</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">Village</span>
                                            <span class="data-value">Nyarugenge</span>
                                        </p>
                                        <p class="data-row">
                                            <span class="data-name">Work Place</span>
                                            <span class="data-value">Nyarugenge</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PROFILE TAB CONTENT -->
            <!-- ACTIVITY TAB CONTENT -->
            <div class="tab-pane activity" id="activity-tab">
                <ul class="list-unstyled activity-list">
                    <li>
                        <i class="fa fa-shopping-cart activity-icon pull-left"></i>
                        <div class="details">
                            <h5>Job Title</h5>
                            <p>
                                Alan turing Alan turing Alan turing Alan turing
                                Alan turing Alan turing Description
                            </p>
                            <div class="bottom-section">
                                <span>Price: 5000</span>
                                <span>Starts on: June 21, 2019</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- END ACTIVITY TAB CONTENT -->
            <!-- SETTINGS TAB CONTENT -->
            <div class="tab-pane settings" id="settings-tab">
                <form class="form-horizontal" role="form">
                    <div class="row">
                        <div class="col-md-8">
                            <fieldset>
                                <h3><i class="fa fa-square"></i> Change Password</h3>
                                <div class="form-group">
                                    <label for="old-password" class="col-sm-3 control-label">Old Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" id="old-password" name="old-password"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-3 control-label">New Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2" class="col-sm-3 control-label">Repeat Password</label>
                                    <div class="col-sm-8">
                                        <input type="password" id="password2" name="password2" class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                <a href="#" class="btn btn-custom-primary">
                                    <i class="fa fa-check-circle"></i> Save Changes
                                </a>
                            </p>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-8">
                            <fieldset>
                                <h3><i class="fa fa-square"></i> Change Picture</h3>
                                <div class="form-group">
                                    <label for="old-password" class="col-sm-3 control-label">Profile picture</label>
                                    <div class="col-sm-8">
                                        <input type="file" id="profile-picture" name="profile-picture"
                                               class="form-control">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <p class="text-center">
                                <a href="#" class="btn btn-custom-primary">
                                    <i class="fa fa-check-circle"></i> Save Changes
                                </a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END SETTINGS TAB CONTENT -->
        </div>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                technician: {
                    f_name: '',
                    l_name: '',
                    birth_date: '',
                    sex: '',
                    phone: '',
                    email: '',
                    province: '',
                    district: '',
                    sector: '',
                    cell: '',
                    village: '',
                    marital_status: '',
                    work_place_lat: '',
                    work_place_long: '',
                    image: null,
                }
            }
        }
    }
</script>
<style lang="scss">

    .activity-list {
        li {
            display: flex;
            .details {
                margin-left: 4px;
                a {
                    display: block;
                }
                .bottom-section{
                    display: flex;
                    span{
                        background-color: #7D939A;
                        color: whitesmoke;
                        border-radius: 8px;
                        padding: 4px 8px;
                        display: block;
                        margin-right: 4px;
                    }
                }
            }
        }
    }
</style>