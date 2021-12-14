@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Manage Purchase</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Manage Purchase</span>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Product name</th>
                                    <th scope="col">Challan No</th>
                                    <th scope="col">Supplier</th>
                                    
                                    <th scope="col">Unit price</th>
                                    <th scope="col">Quantity</th>


                                    
                                    <th scope="col">Sub total</th>
                                    
                                    <th scope="col">Date</th>
                                    <!-- <th scope="col">Received by</th> -->

                                    <!-- <th>Action</th> -->


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
                                    <td>{{ $purchase->product->name}}</td>
                                    <td>{{ $purchase->challan_no}}</td>
                                    <td>{{ $purchase->supplier->name}}</td>
                                    <td>{{ $purchase->unit_price}}</td>
                                    <td>{{ $purchase->quantity}}</td>
                                    <td>{{ $subtotal}}</td>
                                    <td>{{ $purchase->date}}</td>
                                    
                                   
                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
