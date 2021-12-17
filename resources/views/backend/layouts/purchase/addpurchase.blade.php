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

                        <form action="{{route('purchasedetails.post')}}" method="post"
                            class="form-horizontal form-label-left" novalidate>


                            <span class="section">Add purchase</span>
                            @csrf

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product name

                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="ProductName" name="name"
                                        class="form-control col-md-7 col-xs-12">



                                        @foreach ($products as $product)


                                        <option value="{{$product->id}}">{{$product->name}}</option>

                                        @endforeach

                                    </select>
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
                                    <input type="number" id="number" name="quantity"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">

                                    <button id="send" type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                        </form>

                        <br>
                        <br>
                        <br>
                        <br>

                        <form action="{{route('purchasedetails.post')}}" method="post"
                            class="form-horizontal form-label-left" novalidate>
                            @csrf
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th>Sl.</th>
                                        <th scope="col">Product name</th>
                                        <th scope="col">Buy price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Sub total</th>
                                    </tr>
                                </thead>
                                @php
                                $subtotal = 0;
                                @endphp
                                <tbody>
                                    @foreach ($purchases as $purchase)
                                    <tr>
                                        @php
                                        $quantity = $purchase->quantity;
                                        $price = $purchase->unit_price;
                                        $subtotal = $price * $quantity;

                                        @endphp

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$purchase->product->name}}</td>
                                        <td>{{$purchase->unit_price}}</td>
                                        <td>{{$purchase->quantity}}</td>
                                        <td>{{$subtotal}}</td>


                                    </tr>
                                    @endforeach

                                </tbody>

                            </table>

                            <br>
                            
                        </form>
                        <br>
                        <br>
                        <br>
                        <br>
                        <form action="{{route('purchasehistory.post')}}" method="post" class="form-horizontal form-label-left" novalidate>
                            @csrf
                           
                            
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Challan No
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="number" id="number" name="number"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Supplier
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select type="text" id="SupplierName" name="name"
                                        class="form-control col-md-7 col-xs-12">



                                        @foreach ($suppliers as $supplier)


                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>

                                        @endforeach



                                    </select>
                                </div>
                                
                            </div>
                           
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Purchase date
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" id="date" name="date" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
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
    @endsection
