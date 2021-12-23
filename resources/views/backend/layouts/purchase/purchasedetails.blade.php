@extends('backend.master')
@section('content')

@php
    $total=0;
@endphp
                    
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
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Unit price</th>                         
                                    <th scope="col">Sub total</th>
                                    <!-- <th scope="col">Received by</th> -->

                                    <!-- <th>Action</th> -->


                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($details as $detail)

                            @php
                            
                            $total=$detail->sub_total+ $total;
                            @endphp
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$detail->product->name}}</td>
                                    <td>{{$detail->qty}}</td>
                                    <td>{{$detail->unit_price}}</td>
                                    <td>{{$detail->sub_total}}</td>
                                    
                                   


                                </tr>
                                @endforeach

                            </tbody> 
                            
                        </table>
                        
                        <h2><td>Total: {{$total}} TK</td></h2>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
