@extends('backend.master')
@section('content')
<div class="" role="">
    <div class="">
        <div class="page-title">
            <h3>Report</h3>



        </div>
        <br>
        <br>
        <br>
        <form action="#" method="get">
            <div class="row book-form">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <span class="section">Select Date</span>
                    <input type="date" name="from_date" placeholder="Date" required="">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12"><br><br>
                    <button type="submit" class="btn btn-style btn-primary w-100 px-2">Search
                    </button>



                    <button class="btn btn-primary" onclick="printDiv('printableArea')">
                        <i class="fa fa-print"></i> Print
                    </button>


                </div>

            </div>

        </form>

        <div class="clearfix"></div>
        <br>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="x_content">

                        <table class="table">
                            <span class="section">Sales report</span>
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Challan No</th>
                                    <th scope="col">Supplier </th>
                                    <th scope="col">Total Price</th>



                                </tr>
                            </thead>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
