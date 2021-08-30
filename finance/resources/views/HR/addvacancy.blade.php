@include('header')

@include('navbar')
 
@include('HR.sidebar')

 

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Add Vacancy</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item">Vacance</li>
                        <li class="breadcrumb-item active">add Vacancy</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row-clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Add Vacancy</h2>
                    </div>
                    <div class="body">
                        <form action="" method="POST">
                            <div class="form-group row mb-3">
                                <label for="vacancytitle" class="col-sm-2 col-form-label">Vacancy Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="vacancytitle" placeholder="Vacancy Title">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="jobtitle" class="col-sm-2 col-form-label">Job Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="jobtitle" placeholder="Job Title">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="dateposted" class="col-sm-2 col-form-label">Date Posted</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="dateposted">
                                </div>
                                <label for="deadline" class="col-md-auto col-form-label">Deadline</label>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="deadline">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-4">
                                   <select name="status" class="form-control" id="status">
                                       <option value="null">Choose..</option>
                                       <option value="new">NEW</option>
                                       <option value="publish">PUBLISH</option>
                                   </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="vdetails" class="col-sm-2 col-form-label">Vacancy Details</label>
                                <div class="col-sm-4">
                                    <textarea name="vdetails" class="form-control" id="vdetails" cols="05" rows="05"></textarea>
                                </div>
                                <label for="#applicants" class="col-md-auto col-form-label mb-3">No. of Applicants</label>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" id="deadline">
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="submit" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('footer')