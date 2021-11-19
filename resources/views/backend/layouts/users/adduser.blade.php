@extends('backend.master')
@section('content')
<div class="" role="">
<div class="">
 <div class="page-title">
    <div class="title_left">
     <h3>Create Employee</h3>
        </div>


</div>
<div class="clearfix"></div>

 <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">

      <div class="x_content">

        <form class="form-horizontal form-label-left" novalidate>


         <span class="section">Employee Info</span>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">User Name
                    <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="firstName" class="form-control col-md-7 col-xs-12"
                              data-validate-length-range="6" data-validate-words="2" name="firstName"
                             placeholder="user name" required="required" type="text">
                        </div>
                    </div>

                    <div class="item form-group">
                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">Full Name <span
                            class="required">*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="lastName" class="form-control col-md-7 col-xs-12"
                             data-validate-length-range="6" data-validate-words="2" name="lastName"
                                 placeholder="full name" required="required" type="text">
                             </div>
                        </div>





                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="designation">Type
                         <span class="required">*</span>
                        </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select id="designation" name="designation">
                                        <option value="2">Manager</option>
                                        <option value="3">Seller</option>
                                    </select>
                                </div>
                            </div>



                     <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span
                             class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="address" name="address" data-validate-linked="address"
                                 required="required" placeholder="address"
                                 class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Phone
                             Number<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <input type="tel" id="telephone" name="phone" required="required"
                                 data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                         </div>
                            </div>

                    <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="password" type="password" name="password" data-validate-length="6,8"
                                     class="form-control col-md-7 col-xs-12" required="required">
                            </div>
                        </div>



                    <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                 <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
