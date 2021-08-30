@include('header')

@include('navbar')
 
@include('HR.sidebar')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Report Invoice</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Reports</li>
                        <li class="breadcrumb-item active">Report Invoice</li>
                    </ul>
                </div>   
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">                        
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th>Clients</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#KP-0218</td>
                                        <td>ORYX LTD</td>
                                        <td>07 August, 2021</td>
                                        <td>Cheque</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>400,0000</td>
                                    </tr>
                                    <tr>
                                        <td>#KP-0218</td>
                                        <td>ORYX LTD</td>
                                        <td>07 August, 2021</td>
                                        <td>Cheque</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>5,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>#KP-0218</td>
                                        <td>ORYX LTD</td>
                                        <td>07 August, 2021</td>
                                        <td>Cheque</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>5,000,000</td>
                                    </tr>
                                    <tr>
                                        <td>#KP-0218</td>
                                        <td>ORYX LTD</td>
                                        <td>07 August, 2021</td>
                                        <td>Cheque</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>400,0000</td>
                                    </tr>
                                    <tr>
                                        <td>#KP-0218</td>
                                        <td>ORYX LTD</td>
                                        <td>07 August, 2021</td>
                                        <td>Cheque</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>400,0000</td>
                                    </tr>
                                    <tr>
                                        <td>#KP-0218</td>
                                        <td>ORYX LTD</td>
                                        <td>07 August, 2021</td>
                                        <td>Cheque</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>400,0000</td>
                                    </tr>
                                    <tr>
                                        <td>#KP-0218</td>
                                        <td>ORYX LTD</td>
                                        <td>07 August, 2021</td>
                                        <td>Cheque</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>400,0000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




@include('footer')