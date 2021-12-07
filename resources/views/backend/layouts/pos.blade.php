@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Point of Sale </h3>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <form action="" method="" class="form-horizontal form-label-left"
                            novalidate>


                            <span class="section">POS</span>
                            @csrf

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product name
                                    
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="ProductName" name="name" required="required"
                                         class="form-control col-md-7 col-xs-12">
                                       


                                        <option value=""></option>

                                        
                                    </select>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Quantity 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="quantity" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="quantity"
                                        placeholder="Enter quantity" type="text">
                                </div>
                            </div>









                            




                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">save</button>
                                   
                                </div>
                            </div>
                        </form>
                        <br>
                        <br>
                        
                        <table class="table">
                            
                            <thead>
                                <tr>
                                    
                                <th>SL</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Sub total</th>
                                    <!-- <th>Action</th> -->
                                    

                                </tr>
                            </thead>
                            

                            
                        </table>
                        <br>
                        <br>
                        <br>
                        
                        
                        <form action="" method="" class="form-horizontal form-label-left"
                            novalidate>


                            
                            @csrf

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date
                                    
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <input required type="date" value="{{ date('d-m-y') }}"
                                        min="{{ date('d-m-y') }}" class="form-control"
                                        id="purchase_date" name="sale_date">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Customer 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="CustomerName" name="name" required="required"
                                         class="form-control col-md-7 col-xs-12">
                                       


                                        <option value=""></option>

                                        
                                    </select>
                                </div>
                                
                            </div>









                            




                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">submit</button>
                                   
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
