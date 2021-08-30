@include('header')

@include('navbar')
 
@include('HR.sidebar')



<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Vacance List</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Vacance</li>
                        <li class="breadcrumb-item active">Vacance List</li>
                    </ul>
                </div>            
            </div>

         <div class="row clearfix">
             <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Vacance List</h2>
                <!--    <ul class="header-dropdown">
                            <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addcontact">Add New</a></li>
                        </ul> -->
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>
                                            <label class="fancy-checkbox">
                                                <input class="select-all" type="checkbox" name="checkbox">
                                                <span></span>
                                            </label>
                                        </th>
                                        <th>Vacance</th>
                                        <th>Job Title</th>
                                        <th>Date Posted</th>
                                        <th>Deadline Date</th>
                                        <th>Status</th>
                                        <th>Vacancy Details</th>
                                        <th>No. of Applicants</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="width45">
                                        <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                        </label>
                                        <td><span>Developer</span></td>
                                        <td><span>Front End Developer</span></td>
                                        <td><span>09/08/2021</span></td>
                                        <td><span>10/08/2021</span></td>
                                        <td><span>PUBLISHED</span></td>
                                        <td>
                                            <h6>All application must</h6>
                                            <span> be done in the portal</span>
                                        </td>
                                        <td>30</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="width45">
                                        <label class="fancy-checkbox">
                                                <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                <span></span>
                                        </label>
                                        <td><span>Driver</span></td>
                                        <td><span>Truck Driver</span></td>
                                        <td><span>07/08/2021</span></td>
                                        <td><span>12/08/2021</span></td>
                                        <td><span>NEW</span></td>
                                        <td>
                                            <h6>All applicants should</h6>
                                            <span>attach their CV</span>
                                        </td>
                                        <td>23</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
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