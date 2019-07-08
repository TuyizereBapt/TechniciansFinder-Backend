<template>
    <div class="widget">
        <div class="widget-header">
            <h3><i class="fa fa-edit"></i> Basic Info</h3></div>
        <div class="widget-content">
            <form class="form-horizontal" role="form">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="fname" class="control-label sr-only">First name</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="fname"
                                           placeholder="First Name">
                                    <span class="input-group-addon"><i class="fa">FN</i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lname" class="control-label sr-only">Las name</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="lname"
                                           placeholder="Last Name">
                                    <span class="input-group-addon"><i class="fa">LN</i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label sr-only">Email</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="email" class="form-control" id="email"
                                           placeholder="Email">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="birthDate" class="control-label sr-only">Birth date</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="birthDate"
                                           placeholder="Birth date">
                                    <span class="input-group-addon"><i class="fa">BD</i></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label sr-only">Phone</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="phone"
                                           placeholder="Phone">
                                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label sr-only">Sex</label>
                            <div class="col-sm-12">
                                <div class="input-group">
                                    <textarea name="description" class="form-control" style="width: 100%!important;" id="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
    export default{}
</script>