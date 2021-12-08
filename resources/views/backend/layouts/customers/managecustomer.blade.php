@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Manage Customers</h3>



        </div>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Manage Customers</span>
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone number</th>
                                    <th>Action</th>
                                    
                                    

                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                <td>{{ $loop->iteration }}</td>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->address}}</td>
                                    <td>{{$customer->telephone}}</td>
                                    
                                    <td>
                                        <a href=""><i class="fa fa-pencil-square-o" style="font-size:24px"></i></a>
                                        <a href=""><i class="fa fa-close" style="font-size:24px;color:red"></i></a>
                                    </td> 

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
