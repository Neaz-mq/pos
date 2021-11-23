@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Manage products</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Manage products</span>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Sale price</th>
                                    <th scope="col">Product description</th>
                                    <th scope="col">Product Category</th>
                                    <th scope="col">Availability</th>
                                    <!-- <th>Action</th> -->
                                    

                                </tr>
                            </thead>

                            <tbody>
                            @foreach ($product as $products)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $products->name}}</td>
                                    <td>{{ $products->price}}</td>
                                    <td>{{ $products->description}}</td>
                                    <td>{{ $products->category->name}}</td>
                                    <td>{{ $products->availabilty}}</td>
                                    

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
