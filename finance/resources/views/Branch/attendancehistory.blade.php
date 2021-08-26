@include('header')

@include('navbar')
 
@include('Branch.sidebar')


<div id="main-content" class="profilepage_2 blog-page">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Finances</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Employee</li>
                        <li class="breadcrumb-item active">attendance History</li>
                    </ul>
                </div>  
            </div>
        </div>

        <!-- Main content goes here -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Days Attended</th>
                                        <th>Days Missed</th>
                                        <th>Over Time (Hours)</th>
                                        <th>Under Time (Hours)</th>
                                        <th>Leave Time (Days)</th>
                                        <th>Total Working Hours</th>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Days Attended</th>
                                        <th>Days Missed</th>
                                        <th>Over Time (Hours)</th>
                                        <th>Under Time (Hours)</th>
                                        <th>Leave Time (Days)</th>
                                        <th>Total Working Hours</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>98489</td>
                                        <td>Amani Sanare</td>
                                        <td>286</td>
                                        <td>14</td>
                                        <td>249</td>
                                        <td>10</td>
                                        <td>65</td>
                                        <td>3,099</td>
                                    </tr>
                                    <tr>
                                        <td>98489</td>
                                        <td>Amani Sanare</td>
                                        <td>286</td>
                                        <td>14</td>
                                        <td>249</td>
                                        <td>10</td>
                                        <td>65</td>
                                        <td>3,099</td>
                                    </tr>
                                    <tr>
                                        <td>98489</td>
                                        <td>Amani Sanare</td>
                                        <td>286</td>
                                        <td>14</td>
                                        <td>249</td>
                                        <td>10</td>
                                        <td>65</td>
                                        <td>3,099</td>
                                    </tr>
                                    <tr>
                                        <td>98489</td>
                                        <td>Amani Sanare</td>
                                        <td>286</td>
                                        <td>14</td>
                                        <td>249</td>
                                        <td>10</td>
                                        <td>65</td>
                                        <td>3,099</td>
                                    </tr>
                                    <tr>
                                        <td>98489</td>
                                        <td>Amani Sanare</td>
                                        <td>286</td>
                                        <td>14</td>
                                        <td>249</td>
                                        <td>10</td>
                                        <td>65</td>
                                        <td>3,099</td>
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