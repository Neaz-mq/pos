@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Purchase</h3>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <form action="" method="" class="form-horizontal form-label-left"
                            novalidate>


                            <span class="section">Add purchase</span>
                            @csrf

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product name
                                    
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="name"
                                        placeholder="Enter product name"  type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">Buy price
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="price" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="price"
                                        placeholder="Enter price" type="text">
                                </div>
                            </div>









                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Quantity
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="quantity" name="quantity" 
                                        placeholder="Enter quantity"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    
                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>

                            <br>
                        <br>
                        
                        <table class="table">
                            
                            <thead>
                                <tr>
                                    
                                <th>SL</th>
                                    <th scope="col">Product name</th>
                                    <th scope="col">Buy price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Sub total</th>
                                    <!-- <th>Action</th> -->
                                    

                                </tr>
                            </thead>
                            

                            
                        </table>
<br>
<br>
<br>


                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Purchase date
                                    
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" id="date" name="purchase_date"
                                         data-validate-length-range="8,20"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Challan No
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="number" name="number" 
                                       
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Supplier
                                    
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="SupplierName" name="name" 
                                         class="form-control col-md-7 col-xs-12">
                                       


                                        <option value=""></option>

                                        
                                    </select>
                                </div>
                            </div>





                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    
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
