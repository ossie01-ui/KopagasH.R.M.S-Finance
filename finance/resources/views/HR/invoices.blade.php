@include('header')

@include('navbar')
 
@include('HR.sidebar')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Invoices</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Accounts</li>
                        <li class="breadcrumb-item active">Invoices</li>
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
                                        
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Paid by</th>
                                        <th>Status</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#LA-0218</td>
                                        <td>vPro Infoweb LLC.</td>
                                        <td>21 July,2021</td>
                                        <td>NMB Bank</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>400000</td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0220</td>
                                        <td>BT Technology</td>
                                        <td>25 July, 2021</td>
                                        <td>Matercard</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>500000</td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0222</td>
                                        <td>Core Infoweb Pvt.</td>
                                        <td>12 July, 2021</td>
                                        <td>Cash</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>1000000</td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0312</td>
                                        <td>AUR Tech LLC.</td>
                                        <td>13 July, 2021</td>
                                        <td>NMB BANK</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>500000</td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0389</td>
                                        <td>WrapTheme Pvt.</td>
                                        <td>27 July, 2021</td>
                                        <td>Visa card</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>10000000</td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0218</td>
                                        <td>vPro Infoweb LLC.</td>
                                        <td>07 JUly, 2021</td>
                                        <td> Cash</td>
                                        <td><span class="badge badge-success">Approved</span></td>
                                        <td>300000</td>
                                    </tr>
                                    <tr>
                                        <td>#LA-0220</td>
                                        <td>BT Technology</td>
                                        <td>25 July, 2021</td>
                                        <td> Mastercard</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>500000</td>
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