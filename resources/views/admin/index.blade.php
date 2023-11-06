@extends('admin.includes.master')
@section('title', 'Dashboard')
@section('addStyle')
<style>
.ct-chart .ct-series.ct-series-b .ct-slice-donut {
    stroke: #000000;
}

.ct-chart .ct-series.ct-series-a .ct-slice-donut {
    stroke: #9da09e;
}
</style>
@endsection
@section('content')


<div class="row">

    <div class="col-4">
        <div class="">
            <div class="card-header d-flex justify-content-start">
                         <div>
                            <a class="btn  btn-lg report-tab-active"
                                href="#" role="button"  data-bs-toggle="modal" data-bs-target="#Add-Client-Modal">
                                Add a Client +</a>

                        </div>



            </div>



        </div>
    </div>
    <div class="col-4">
        <div class="">
            <div class="card-header d-flex justify-content-start">
                         <div>
                            <a class="btn  btn-lg report-tab-active"
                                href="#" role="button"  data-bs-toggle="modal" data-bs-target="#Add-Third-party-Modal" >
                                Add a Thirdparty +</a>

                        </div>
            </div>



        </div>
    </div>
    <div class="col-4">
        <div class="">
            <div class="card-header d-flex justify-content-start">
                         <div>
                            <a class="btn  btn-lg report-tab-active"
                                href="#" role="button"  data-bs-toggle="modal" data-bs-target="#Add-team-user-Modal">
                                Add a Team User +</a>

                        </div>
            </div>



        </div>
    </div>
</div>






@endsection

@section('modal')

    <!--  Add a Client  Modal start -->
    <div class="modal fade" id="Add-Client-Modal">
        <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Add a Client</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                 
                        <div class="card-body justify-content-start">
                            <form>
                                <div class="row">
                                    <div class=" col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">
                                        <!-- <div class=" justify-content-center align-items-center">
                
                                            <label>Company Logo</label>
                                            <div class="dz-default dlab-message upload-img mb-3">
                                                <form action="#" class="dropzone">
                                                    <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667"
                                                            stroke="#DADADA" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple>
                
                                                    </div>
                                                </form>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class=" col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">
                
                                        <div class="row">
                
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Company Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Username<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput3" class="form-label">Company Email<span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput88" class="form-label">Industry,<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput88" placeholder="">
                                            </div>
                                          
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">POC<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Location<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Password<span
                                                        class="text-danger">*</span></label>
                                                <input type="password" class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>
                
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Confirm Password<span
                                                        class="text-danger">*</span></label>
                                                <input type="password" class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>
                                        </div>
                                       
                
                                    </div>
                
                
                
                                </div>
                
                            </form>
                
                       
                
                
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light report-tab-unactive" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn report-tab-active">Save changes</button>
                </div>
            </div>
        </div>
    </div>
      <!--  Add a Client  Modal end -->

        <!--  Add thirdParty  Modal start -->
    <div class="modal fade" id="Add-Third-party-Modal">
        <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> Add a Third Party</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                 
                        <div class="card-body justify-content-start">
                            <form>
                                <div class="row">
                                    <div class=" col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">
                                        <!-- <div class=" justify-content-center align-items-center">
                
                                            <label>Company Logo</label>
                                            <div class="dz-default dlab-message upload-img mb-3">
                                                <form action="#" class="dropzone">
                                                    <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667"
                                                            stroke="#DADADA" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple>
                
                                                    </div>
                                                </form>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class=" col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">
                
                                        <div class="row">
                
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Third Party Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            
                                            <div class="col-xl-6 mb-3">
                                                <label class="form-label">Client Name<span
                                                    class="text-danger">*</span></label>
                                                <select class="default-select style-1 form-control">
                                                    <option data-display="Select">Sony</option>
                                                    <option value="html">Hero Honda</option>
                                                    <option value="css">Bajaj</option>
                                                    <option value="javascript">ABC</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-xl-6 mb-3">
                                                <label class="form-label">Address<span class="text-danger">*</span></label>
                                                <textarea rows="1" class="form-control"></textarea>
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput88" class="form-label">Department<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput88" placeholder="">
                                            </div>
                                          
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">POC<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">Location<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Email<span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>
                
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Phone Number<span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>
                                        </div>
                                       
                
                                    </div>
                
                
                
                                </div>
                
                            </form>
                
                       
                
                
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light report-tab-unactive" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn report-tab-active">Save changes</button>
                </div>
            </div>
        </div>
    </div>
      <!--  Add thirdParty  Modal end -->

    <!--  Add  Add a Team User Modal start -->
    <div class="modal fade" id="Add-team-user-Modal">
        <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">  Add a Team User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                 
                        <div class="card-body justify-content-start">
                            <form>
                                <div class="row">
                                    <div class=" col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">
                                        <!-- <div class=" justify-content-center align-items-center">
                
                                            <label>Company Logo</label>
                                            <div class="dz-default dlab-message upload-img mb-3">
                                                <form action="#" class="dropzone">
                                                    <svg width="41" height="40" viewBox="0 0 41 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M20.5 20V35" stroke="#DADADA" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M34.4833 30.6501C36.1088 29.7638 37.393 28.3615 38.1331 26.6644C38.8731 24.9673 39.027 23.0721 38.5703 21.2779C38.1136 19.4836 37.0724 17.8926 35.6111 16.7558C34.1497 15.619 32.3514 15.0013 30.4999 15.0001H28.3999C27.8955 13.0488 26.9552 11.2373 25.6498 9.70171C24.3445 8.16614 22.708 6.94647 20.8634 6.1344C19.0189 5.32233 17.0142 4.93899 15.0001 5.01319C12.9861 5.0874 11.015 5.61722 9.23523 6.56283C7.45541 7.50844 5.91312 8.84523 4.7243 10.4727C3.53549 12.1002 2.73108 13.9759 2.37157 15.959C2.01205 17.9421 2.10678 19.9809 2.64862 21.9222C3.19047 23.8634 4.16534 25.6565 5.49994 27.1667"
                                                            stroke="#DADADA" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M27.1666 26.6667L20.4999 20L13.8333 26.6667" stroke="#DADADA"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple>
                
                                                    </div>
                                                </form>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class=" col-xl-12 col-sm-12 col-12 mt-4 mt-md-0">
                
                                        <div class="row">
                
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput2" class="form-label">User Name<span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
                                            </div>
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Email<span
                                                        class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>
                                            
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Password<span
                                                        class="text-danger">*</span></label>
                                                <input type="password" class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>
                
                                            <div class="col-xl-6 mb-3">
                                                <label for="exampleFormControlInput4" class="form-label">Confirm Password<span
                                                        class="text-danger">*</span></label>
                                                <input type="password" class="form-control" id="exampleFormControlInput4"
                                                    placeholder="">
                                            </div>
                                          
                                            
                                        </div>
                                       
                
                                    </div>
                
                
                
                                </div>
                
                            </form>
                
                       
                
                
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light report-tab-unactive" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn report-tab-active">Save changes</button>
                </div>
            </div>
        </div>
    </div>
      <!--  Add  Add a Team User Modal end -->
@endsection

@section('addScript')

@endsection
