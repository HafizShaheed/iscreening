@extends('admin.includes.master')



@section('addStyle')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
<style>
  .file-upload {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: 200px;
    border: 2px dashed #ccc;
    border-radius: 5px;
    cursor: pointer;
  }

  .file-input {
    display: none;
  }

  .file-label {
    font-size: 1rem;
    font-weight: 600;
  }

  .file-label i {
    margin-bottom: 8px;
    font-size: 2rem;
  }

  .file-input:hover + .file-label,
  .file-input:active + .file-label {
    background-color: #f5f5f5;
  }
</style>

@endsection
@section('content')

<!-- <div class="row">
    <div class="card">
        <div class="card-body justify-content-end">
            <div class="col-12">
                <div class="row justify-content-start">
                    <div class="col-xl-2 col-sm-2 col-2 mt-4 mt-md-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="JavaScript:void(0)" id="click-Firm-Background"
                                class="btn btn-secondary btn-sm">Firm Background</a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-2 col-2 mt-4 mt-md-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="JavaScript:void(0)" id="click-On-Ground-Verification"
                                class="btn btn-secondary btn-sm">On Ground Verification</a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-2 col-2 mt-4 mt-md-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="JavaScript:void(0)" id="click-Court-Checks" class="btn btn-secondary btn-sm">Court
                                Checks</a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-2 col-2 mt-4 mt-md-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="JavaScript:void(0)" id="click-Financials"
                                class="btn btn-secondary btn-sm">Financials</a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-2 col-2 mt-4 mt-md-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="JavaScript:void(0)" class="btn btn-secondary btn-sm">Business Intelligence</a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-2 col-2 mt-4 mt-md-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="JavaScript:void(0)" class="btn btn-secondary btn-sm">Tax Return and Credit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="row justify-content-start">
                    <div class="col-xl-2 col-sm-2 col-2 mt-4 mt-md-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="JavaScript:void(0)" class="btn btn-secondary btn-sm">Market Reputation</a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-2 col-2 mt-4 mt-md-0">
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="JavaScript:void(0)" class="btn btn-secondary btn-sm">Key Observation</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="row">
    <div class="card">
        <div class="card-body justify-content-center">
            <div class="d-flex flex-row flex-nowrap">
                <a href="JavaScript:void(0)" id="click-Firm-Background"
                    class="btn btn-secondary report-tab-active border-round-tab  btn-sm mx-1 p-lg-3">Firm Background</a>
                <a href="JavaScript:void(0)" id="click-On-Ground-Verification"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">On Ground Verification</a>
                <a href="JavaScript:void(0)" id="click-Court-Checks" class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Court
                    Checks</a>
                <a href="JavaScript:void(0)" id="click-Financials"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Financials</a>
                <a href="JavaScript:void(0)" id="click-Business-Intelligence"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Business Intelligence</a>
                <a href="JavaScript:void(0)" id="click-Tax-Return-and-Credit"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Tax Return and Credit</a>
                <a href="JavaScript:void(0)" id="click-Market-Reputation" class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Market Reputation</a>
                <a href="JavaScript:void(0)" id="click-Key-Observation" class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Key Observation</a>
                <!-- Add similar code for other buttons as needed -->
            </div>
        </div>
    </div>
</div>


<!-- Firm Background form start -->

<div class="row" id="Firm-Background">
    <div class="card">
        <div class="card-body justify-content-start">
            <form id="firm-step-form">

                <!-- firm background 1 step end -->
                <div class="firm-step" id="firm-step-1">
                    <h4 class="card-title">Firm Background<br>
                        <span style="color:darkgray; font-size:12px;"> Basic Information </span>
                    </h4>
                    <div class="row">
                        <div class="col-xl-4 mb-3">
                                <label class="form-label">Client Name<span
                                                class="text-danger">*</span></label>
                                <select class="default-select style-1 form-control">
                                    <option data-display="Select">Sony</option>
                                    <option value="html">Hero Honda</option>
                                    <option value="css">Bajaj</option>
                                    <option value="javascript">ABC</option>
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Incorporation Year</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label class="form-label">Form of Entity<span
                                    class="text-danger">*</span></label>
                            <select class="default-select style-1 form-control">
                                <option data-display="Select"> Private Limited Company</option>
                                <option value="html">Sole Proprietorship</option>
                                <option value="css">Limited Liability Partnership</option>
                                <option value="javascript">Partnership Firm</option>
                                <option value="javascript">One Person Company</option>
                            </select>
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">No of Directors</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Industry</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Website</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">City</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">State</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Pincode</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Business Details</label>
                            <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>

                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="button" class="btn btn report-tab-active" id="firm-next-1">Next</button>
                        </div>


                    </div>
                </div>
                <!-- firm background 1 step end -->
                <!-- firm background 2 step start ========================-->
                <div class="firm-step" id="firm-step-2">
                    <h4 class="card-title">Firm Background<br>
                        <span style="color:darkgray; font-size:12px;">Registrations/Compliance </span>
                    </h4>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">License Name</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">License No</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateIssuance1" class="form-label">Date of Issuance</label>
                            <input type="date" class="form-control" id="dateIssuance1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateExpiry1" class="form-label">Date of Expiry</label>
                            <input type="date" class="form-control" id="dateExpiry1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">License Name</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">License No</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateIssuance1" class="form-label">Date of Issuance</label>
                            <input type="date" class="form-control" id="dateIssuance1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateExpiry1" class="form-label">Date of Expiry</label>
                            <input type="date" class="form-control" id="dateExpiry1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">License Name</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">License No</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateIssuance1" class="form-label">Date of Issuance</label>
                            <input type="date" class="form-control" id="dateIssuance1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateExpiry1" class="form-label">Date of Expiry</label>
                            <input type="date" class="form-control" id="dateExpiry1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">License Name</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">License No</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateIssuance1" class="form-label">Date of Issuance</label>
                            <input type="date" class="form-control" id="dateIssuance1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateExpiry1" class="form-label">Date of Expiry</label>
                            <input type="date" class="form-control" id="dateExpiry1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">License Name</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">License No</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateIssuance1" class="form-label">Date of Issuance</label>
                            <input type="date" class="form-control" id="dateIssuance1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateExpiry1" class="form-label">Date of Expiry</label>
                            <input type="date" class="form-control" id="dateExpiry1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">License Name</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">License No</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateIssuance1" class="form-label">Date of Issuance</label>
                            <input type="date" class="form-control" id="dateIssuance1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateExpiry1" class="form-label">Date of Expiry</label>
                            <input type="date" class="form-control" id="dateExpiry1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">License Name</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">License No</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateIssuance1" class="form-label">Date of Issuance</label>
                            <input type="date" class="form-control" id="dateIssuance1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateExpiry1" class="form-label">Date of Expiry</label>
                            <input type="date" class="form-control" id="dateExpiry1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">License Name</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">License No</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateIssuance1" class="form-label">Date of Issuance</label>
                            <input type="date" class="form-control" id="dateIssuance1">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="dateExpiry1" class="form-label">Date of Expiry</label>
                            <input type="date" class="form-control" id="dateExpiry1">
                        </div>
                    </div>
                    <!-- Repeat the above code block for additional rows -->

                    <!-- OFAC Check -->
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="ofacCheck" class="form-label">OFAC Check</label>
                            <input type="text" class="form-control" id="ofacCheck" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="ofacCheck" class="form-label">Regulatory Score </label>
                            <input type="text" class="form-control" id="ofacCheck" placeholder="">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="exampleFormControlInput3" class="form-label"></label>
                            <div class="dz-default dlab-message upload-img mb-3">
                                <div class="fallback">
                                    <input name="file" type="file" class="form-control" id="exampleFormControlInput3"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="firm-prev-2">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="firm-next-2">Next</button>
                        </div>
                    </div>

                </div>
                <!-- firm background 2 step end ========================-->
                <!-- firm background 3 step start ========================-->
                <div class="firm-step" id="firm-step-3">
                    <h4 class="card-title">Firm Background<br>
                        <span style="color:darkgray; font-size:12px;">Director/Proprietor/Partner Details </span>
                    </h4>
                    <div class="row">
                        <div class="col-xl-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="pan" class="form-label">PAN</label>
                            <input type="text" class="form-control" id="pan">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="aadhar" class="form-label">Aadhar</label>
                            <input type="text" class="form-control" id="aadhar">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="appointmentDate" class="form-label">Date of Appointment</label>
                            <input type="date" class="form-control" id="appointmentDate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mb-3">
                            <label for="educationalBackground" class="form-label">Educational Background</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-6 mb-3">
                            <label for="creditScore" class="form-label">Credit Score</label>
                            <input type="text" class="form-control" id="creditScore">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">

                            <button type="button" class="btn btn report-tab-unactive" id="firm-prev-3">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="firm-next-3">Next</button>
                        </div>
                    </div>

                </div>
                <!-- firm background 3 step end ========================-->
                <!-- firm background 4 step start ========================-->
                <div class="firm-step" id="firm-step-4">
                    <h4 class="card-title">Firm Background<br>
                        <span style="color:darkgray; font-size:12px;">Directorship Check</span>
                    </h4>
                    <div class="row">
                        <!-- =========== Director1 ============ -->

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>


                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 1</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <!-- =========== Director1 ============ -->

                        <!-- =========== Director2 ============ -->

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>


                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 2</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <!-- =========== Director2 ============ -->
                        <!-- =========== Director3 ============ -->

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>


                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Director 3</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">CIN</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Company Status</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Appointment
                                Date</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business of the
                                Entity</label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput99" class="form-label">Business Conflict
                            </label>
                            <input type="text" class="form-control" id="exampleFormControlInput99">
                        </div>

                        <!-- =========== Director3 ============ -->
                        <div class="row">
                            <div class="col-xl-6 d-flex justify-content-start">

                                <button type="button" class="btn btn report-tab-unactive" id="firm-prev-4">Previous</button>
                            </div>
                            <div class="col-xl-6 d-flex justify-content-end">

                                <button type="button" class="btn btn report-tab-active" id="firm-submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- firm background 4 step end ========================-->


            </form>
        </div>
    </div>
</div>
<!-- Firm Background form end -->

<!-- On Ground Verificationform start -->

<div class="row" id="On-Ground-Verification">
    <div class="card">
        <div class="card-header justify-content-start">
            <h4 class="card-title">On-Ground Verification
            </h4>

        </div>
        <div class="card-body justify-content-start">
            <form id="onGround-step-form">
                <!-- firm background 1 step end -->
                <div class="onGround-step" id="onGround-step-1">
                    <div class="row">
                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Adrress Details</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>

                        <div class="col-xl-12 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Address Visit Findings</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>

                        <div class="row">
                            <div class="col-xl-3  mb-3">
                                <label for="ofacCheck" class="form-label">On-Ground Verification Score</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-9  mb-3">
                                <label for="exampleFormControlInput3" class="form-label">Upload Picture</label>
                                <div class="dz-default dlab-message upload-img mb-3">
                                    <div class="fallback">
                                        <input name="file" type="file" class="form-control"
                                            id="exampleFormControlInput3" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="button" class="btn btn report-tab-active" id="submit-onGround">submit</button>
                        </div>


                    </div>
                </div>
                <!-- firm background 1 step end -->
            </form>
        </div>
    </div>
</div>

<!-- On Ground Verificationform end -->


<!-- Court Checks form start -->

<div class="row" id="Court-Checks">
    <div class="card">
        <div class="card-body justify-content-start">
            <form id="court-step-form">
                <!-- Court Checks 1 step end -->
                <div class="court-step" id="court-step-1">
                    <h4 class="card-title">Court Checks<br>
                    <span style="color:darkgray; font-size:12px;"> Court Check of Directors </span>
                    </h4>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jurisdiction </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Record</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jurisdiction </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Record</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jurisdiction </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Record</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jurisdiction </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Record</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Jurisdiction </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Record</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>

                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="button" class="btn btn report-tab-active" id="court-next-1">Next</button>
                        </div>


                    </div>
                </div>
                <!-- Court Checks 1 step end -->
                <!-- Court Checks 2 step start ========================-->
                <div class="court-step" id="court-step-2">
                     <h4 class="card-title">Court Checks<br>
                    <span style="color:darkgray; font-size:12px;"> Court check of Company </span>
                    </h4>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Jurisdiction</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="licenseNo1" class="form-label">Record</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Jurisdiction</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="licenseNo1" class="form-label">Record</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Jurisdiction</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="licenseNo1" class="form-label">Record</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Jurisdiction</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="licenseNo1" class="form-label">Record</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Jurisdiction</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-4 mb-3">
                            <label for="licenseNo1" class="form-label">Record</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Subject Matter</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                    </div>
                    <!-- Repeat the above code block for additional rows -->

                    <!-- OFAC Check -->


                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="court-prev-2">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn-primary" id="court-next-2">Next</button>
                        </div>
                    </div>

                </div>
                <!-- Court Checks 2 step end ========================-->
                <!-- Court Checks 3 step start ========================-->
                <div class="court-step" id="court-step-3">
                    <h4 class="card-title">Court Checks<br>
                    <span style="color:darkgray; font-size:12px;"> Court Check of Directors </span>
                    </h4>
                    <div class="row">
                        <div class="col-xl-4 mb-3">
                            <label for="educationalBackground" class="form-label">Legal Score</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">

                            <button type="button" class="btn btn report-tab-unactive" id="court-prev-3">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="court-submit">Submit</button>

                        </div>
                    </div>

                </div>
                <!-- Court Checks 3 step end ========================-->
            </form>
        </div>
    </div>
</div>

<!-- Court Checks form end -->

<!-- Financials form start -->

<div class="row" id="Financials">
    <div class="card">
        <div class="card-header justify-content-start">
            <h4 class="card-title">Financials<br>
                <span style="color:darkgray; font-size:12px;"> Charges on the Entity </span>
            </h4>


        </div>
        <div class="card-body justify-content-start">

            <form id="Financials-step-form">
                <!-- Financials 1 step end -->
                <div class="Financials-step" id="Financials-step-1">
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Charged Property </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Charged Property </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Charged Property </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Name </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Amount</label>
                            <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Charged Property </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>


                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="button" class="btn btn report-tab-active" id="Financials-next-1">Next</button>
                        </div>


                    </div>
                </div>
                <!-- Financials 1 step end -->
                <!-- Financials part 1 FY1 to FY5 start -->
                <!-- Financials 2 step start ========================-->
                <div class="Financials-step" id="Financials-step-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Revenue</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Net Profit</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Total Assets</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current Assets</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Current Liabilities</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Average Inventory</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Sales</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Equity/Share Capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Sundry Debtors</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Sundry Creditors</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Loans and Advances</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Cash and Cash Equivalents</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Overall Financial Score</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-2">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-2">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 2 step end ========================-->
                <!--Financials 3 step start ========================-->
                <div class="Financials-step" id="Financials-step-3">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Revenue</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Net Profit</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Total Assets</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current Assets</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Current Liabilities</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Average Inventory</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Sales</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Equity/Share Capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Sundry Debtors</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Sundry Creditors</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Loans and Advances</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Cash and Cash Equivalents</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Overall Financial Score</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-3">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-3">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 3 step end ========================-->
                <!--Financials 4 step start ========================-->
                <div class="Financials-step" id="Financials-step-4">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Revenue</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Net Profit</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Total Assets</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current Assets</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Current Liabilities</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Average Inventory</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Sales</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Equity/Share Capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Sundry Debtors</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Sundry Creditors</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Loans and Advances</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Cash and Cash Equivalents</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Overall Financial Score</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-4">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-4">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 4 step end ========================-->
                <!--Financials 5 step start ========================-->
                <div class="Financials-step" id="Financials-step-5">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="javascript:void(0)">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="javascript:void(0)">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Revenue</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Net Profit</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Total Assets</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current Assets</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Current Liabilities</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Average Inventory</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Sales</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Equity/Share Capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Sundry Debtors</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Sundry Creditors</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Loans and Advances</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Cash and Cash Equivalents</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Overall Financial Score</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-5">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-5">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 5 step end ========================-->
                <!--Financials 6 step start ========================-->
                <div class="Financials-step" id="Financials-step-6">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Revenue</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Net Profit</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Working capital</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Total Assets</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current Assets</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Current Liabilities</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Average Inventory</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Sales</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Equity/Share Capital</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Sundry Debtors</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Sundry Creditors</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Loans and Advances</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Cash and Cash Equivalents</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Overall Financial Score</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-6">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-6">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 6 step end ========================-->
                <!-- Financials part 1 FY1 to FY5 end -->

                <!-- Financials part 2 FY1 to FY5 end -->
                <!--Financials 7 step start ========================-->
                <div class="Financials-step" id="Financials-step-7">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Solvency Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt to Equity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Asset Turnover Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Absolute Liquidity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Proprietary Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Springate S Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Receivable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Payable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Taffler Z-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Zmijewski X-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-7">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-7">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 7 step end ========================-->
                <!--Financials 8 step start ========================-->
                <div class="Financials-step" id="Financials-step-8">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Solvency Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt to Equity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Asset Turnover Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Absolute Liquidity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Proprietary Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Springate S Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Receivable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Payable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Taffler Z-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Zmijewski X-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-8">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-8">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 8 step end ========================-->
                <!--Financials 9 step start ========================-->
                <div class="Financials-step" id="Financials-step-9">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Solvency Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt to Equity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Asset Turnover Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Absolute Liquidity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Proprietary Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Springate S Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Receivable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Payable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Taffler Z-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Zmijewski X-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-9">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-9">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 9 step end ========================-->
                <!--Financials 10 step start ========================-->
                <div class="Financials-step" id="Financials-step-10">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Solvency Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt to Equity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Asset Turnover Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Absolute Liquidity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Proprietary Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Springate S Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Receivable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Payable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Taffler Z-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Zmijewski X-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-10">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-next-10">Next</button>
                        </div>
                    </div>

                </div>
                <!--Financials 10 step end ========================-->
                <!--Financials 11 step start ========================-->
                <div class="Financials-step" id="Financials-step-11">
                    <ul class="nav nav-pills">
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY1</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY2</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY3</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:darkgray" aria-current="page"
                                href="#">FY4</a>
                        </li>
                        <li class="nav-item mb-2 mr-1 p-2">
                            <a class="nav-link" style="color:white;background-color:#6d3b7a" aria-current="page"
                                href="#">FY5</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Current ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Solvency Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Debt to Equity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Asset Turnover Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Absolute Liquidity Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Proprietary Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Net Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Gross Profit Ratio</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                        <div class="col-xl-3 mb-3">
                            <label for="licenseNo1" class="form-label">Analysis</label>
                            <input type="text" class="form-control" id="licenseNo1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Springate S Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Receivable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Trade Payable Days</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Taffler Z-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 mb-3">
                            <label for="licenseName1" class="form-label">Zmijewski X-Score</label>
                            <input type="text" class="form-control" id="licenseName1" placeholder="">
                        </div>
                    </div>

                    <!-- Navigation buttons -->

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">
                            <button type="button" class="btn btn report-tab-unactive" id="Financials-prev-11">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active" id="Financials-submit">Submit</button>
                        </div>
                    </div>

                </div>
                <!--Financials 11 step end ========================-->
                <!-- Financials part 2 FY1 to FY5 end -->


            </form>
        </div>
    </div>
</div>

<!-- Financials form end -->


<!-- Business Intelligence start -->

<div class="row" id="Business-Intelligence">
    <div class="card">
        <div class="card-header justify-content-start">
            <h4 class="card-title">Business Intelligence
            </h4>

        </div>
        <div class="card-body justify-content-start">
            <form id="Business-Intelligence-step-form">
                <!-- firm background 1 step end -->
                <div class="Business-Intelligence-step" id="Business-Intelligence-step-1">
                    <div class="row">

                        <div class="row">
                            <div class="col-xl-2  mb-3">
                                <label for="ofacCheck" class="form-label">FY1</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-2  mb-3">
                                <label for="ofacCheck" class="form-label">FY2</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-2  mb-3">
                                <label for="ofacCheck" class="form-label">FY3</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-2  mb-3">
                                <label for="ofacCheck" class="form-label">FY4</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-2  mb-3">
                                <label for="ofacCheck" class="form-label">FY5</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Operating Efficiency ratio</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Analysis</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Inventory Turnover Ratio</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Analysis</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Days sales in Inventory</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Analysis</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Accounts Payable Turnover Ratio</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Analysis</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4  mb-3">
                                <label for="ofacCheck" class="form-label">Efficiency Score</label>
                                <input type="text" class="form-control" id="ofacCheck" placeholder="">
                            </div>

                        </div>



                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="button" class="btn btn report-tab-active"
                                id="submit-Business-Intelligence">submit</button>
                        </div>


                    </div>
                </div>
                <!-- firm background 1 step end -->



            </form>
        </div>
    </div>
</div>

<!-- Business Intelligence end -->


<!-- Tax Return and Credit form start -->

<div class="row" id="Tax-Return-and-Credit">
    <div class="card">
        <div class="card-header justify-content-start">
            <h4 class="card-title">Tax Return and Credit<br>
                <span style="color:darkgray; font-size:12px;"> Tax Returns</span>
            </h4>

        </div>
        <div class="card-body justify-content-start">
            <form id="Tax-Return-and-Credit-step-form">
                <!-- Tax Return and Credit 1 step end -->
                <div class="Tax-Return-and-Credit-step" id="Tax-Return-and-Credit-step-1">
                    <div class="row">
                        <div class="row">
                            <div class="col-xl-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">FY1 </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-xl-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">FY2 </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">FY3 </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="col-xl-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">FY4 </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4 mb-3">
                                <label for="exampleFormControlInput1" class="form-label">FY5 </label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                            </div>

                        </div>




                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="button" class="btn btn report-tab-active"
                                id="Tax-Return-and-Credit-next-1">Next</button>
                        </div>


                    </div>
                </div>
                <!-- Tax Return and Credit 1 step end -->
                <!-- Tax Return and Credit 2 step start ========================-->
                <div class="Tax-Return-and-Credit-step" id="Tax-Return-and-Credit-step-2">

                    <div class="row">
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Name</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-1 mb-3">
                            <label for="educationalBackground" class="form-label">Credit Score</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-1 mb-3">
                            <label for="educationalBackground" class="form-label">No. of Loans</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Outstanding Amount</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Solvency</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Payment History</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Credit Dependency</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Name</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-1 mb-3">
                            <label for="educationalBackground" class="form-label">Credit Score</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-1 mb-3">
                            <label for="educationalBackground" class="form-label">No. of Loans</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Outstanding Amount</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Solvency</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Payment History</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Credit Dependency</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Name</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-1 mb-3">
                            <label for="educationalBackground" class="form-label">Credit Score</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-1 mb-3">
                            <label for="educationalBackground" class="form-label">No. of Loans</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Outstanding Amount</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Solvency</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Payment History</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Credit Dependency</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Name</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-1 mb-3">
                            <label for="educationalBackground" class="form-label">Credit Score</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-1 mb-3">
                            <label for="educationalBackground" class="form-label">No. of Loans</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Outstanding Amount</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Solvency</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Payment History</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Credit Dependency</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Overall Credit History Score</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">

                            <button type="button" class="btn btn report-tab-unactive"
                                id="Tax-Return-and-Credit-prev-2">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active"
                                id="Tax-Return-and-Credit-submit">Submit</button>

                        </div>
                    </div>

                </div>
                <!-- Tax Return and Credit 2 step end ========================-->

            </form>
        </div>
    </div>
</div>

<!-- Tax Return and Credit form end -->

<!-- Market-Reputation form start -->

<div class="row" id="Market-Reputation">
    <div class="card">
        <div class="card-header justify-content-start">
            <h4 class="card-title">Market Reputation
            </h4>

        </div>
        <div class="card-body justify-content-start">
            <form id="onGround-step-form">
                <!-- firm background 1 step end -->
                <div class="Market-Reputation-step" id="Market-Reputation-step-1">
                    <div class="row">


                        <div class="row">
                            <div class="file-upload">
                                <input type="file" id="fileInput" class="file-input" accept="image/*" />
                                <label for="fileInput" class="file-label">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    Drag & Drop or Click to Upload
                                </label>
                            </div>

                        </div>



                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="button" class="btn btn report-tab-active" id="submit-Market-Reputation">submit</button>
                        </div>


                    </div>
                </div>
                <!-- firm background 1 step end -->
            </form>
        </div>
    </div>
</div>

<!-- Market-Reputation form end -->


<!-- Key Observation form start -->

<div class="row" id="Key-Observation">
    <div class="card">
        <div class="card-header justify-content-start">
            <h4 class="card-title">Key-Observation<br>
                <span style="color:darkgray; font-size:12px;"> Overall Risk Score</span>
            </h4>

        </div>
        <div class="card-body justify-content-start">
            <form id="Key-Observation-step-form">
                <!-- Tax Return and Credit 1 step end -->
                <div class="Key-Observation-step" id="Key-Observation-step-1">
                    <div class="row">
                        <div class="row">
                            <div class="col-xl-3 mb-3">
                            </div>
                            <div class="col-xl-6 mb-3">
                            <h1 class="form-label">Overall Risk Score</h1>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                            <div class="col-xl-3 mb-3">
                            </div>
                        </div>




                        <div class="col-xl-12 d-flex justify-content-end">
                            <button type="button" class="btn btn report-tab-active"
                                id="Key-Observation-next-1">Next</button>
                        </div>


                    </div>
                </div>
                <!-- Key-Observation 1 step end -->
                <!-- Key-Observation 2 step start ========================-->
                <div class="Key-Observation-step" id="Key-Observation-step-2">

                    <div class="row">
                        <div class="col-xl-2 mb-3">
                            <label for="educationalBackground" class="form-label">Observations</label>
                            <input type="text" class="form-control" id="educationalBackground">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 mb-3">

                            <label class="form-label">Recommendations</label>
                                <textarea rows="4" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-6 d-flex justify-content-start">

                            <button type="button" class="btn btn report-tab-unactive"
                                id="Key-Observation-prev-2">Previous</button>
                        </div>
                        <div class="col-xl-6 d-flex justify-content-end">

                            <button type="button" class="btn btn report-tab-active"
                                id="Key-Observation-submit">Submit</button>

                        </div>
                    </div>

                </div>
                <!-- Key-Observation 2 step end ========================-->

            </form>
        </div>
    </div>
</div>

<!-- Key Observation form end -->



@endsection

@section('addScript')

<script>
$(document).ready(function() {
    var currentfirmStep = 1;
    $(".firm-step").hide();
    $("#firm-step-1").show();

    // Function to navigate to the next step
    function firmnextStep() {
        $(".firm-step").hide();
        currentfirmStep++;
        $("#firm-step-" + currentfirmStep).show();
    }

    // Function to navigate to the previous step
    function firmprevStep() {
        $(".firm-step").hide();
        currentfirmStep--;
        $("#firm-step-" + currentfirmStep).show();
    }

    // Event listeners for "Next" and "Previous" buttons
    $("#firm-next-1").on("click", firmnextStep);
    $("#firm-prev-2").on("click", firmprevStep);
    $("#firm-next-2").on("click", firmnextStep);
    $("#firm-prev-3").on("click", firmprevStep);
    $("#firm-next-3").on("click", firmnextStep);
    $("#firm-prev-4").on("click", firmprevStep);
    $("#firm-next-4").on("click", firmnextStep);
    $("#firm-prev-5").on("click", firmprevStep);



    $('#click-Firm-Background').on('click', function() {
        $('#Firm-Background').show();
        $('#Court-Checks').hide();
        $("#On-Ground-Verification").hide();
        $("#Financials").hide();
        $("#Business-Intelligence").hide();
        $("#Tax-Return-and-Credit").hide();
        $("#Market-Reputation").hide();
        $("#Key-Observation").hide();

        $('#click-Firm-Background').addClass('report-tab-active').removeClass('report-tab-unactive');
        $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');






    });

    $('#click-On-Ground-Verification').on('click', function() {
        $('#Firm-Background').hide();
        $('#Court-Checks').hide();
        $("#On-Ground-Verification").show();
        $("#Financials").hide();
        $("#Business-Intelligence").hide();
        $("#Tax-Return-and-Credit").hide();
        $("#Market-Reputation").hide();
        $("#Key-Observation").hide();

        $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
        $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-On-Ground-Verification").addClass('report-tab-active').removeClass('report-tab-unactive');
        $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');

    });


    $('#click-Court-Checks').on('click', function() {
        $('#Firm-Background').hide();
        $('#Court-Checks').show();
        $("#On-Ground-Verification").hide();
        $("#Financials").hide();
        $("#Business-Intelligence").hide();
        $("#Tax-Return-and-Credit").hide();
        $("#Market-Reputation").hide();
        $("#Key-Observation").hide();

        $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
        $('#click-Court-Checks').addClass('report-tab-active').removeClass('report-tab-unactive');
        $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');

    });



    var CourtcurrentStep = 1;
    $(".court-step").hide();
    $("#court-step-1").show();

    // Function to navigate to the next step
    function courtnextStep() {
        $(".court-step").hide();
        CourtcurrentStep++;
        $("#court-step-" + CourtcurrentStep).show();
    }

    // Function to navigate to the previous step
    function courtprevStep() {
        $(".court-step").hide();
        CourtcurrentStep--;
        $("#court-step-" + CourtcurrentStep).show();
    }

    // Event listeners for "Next" and "Previous" buttons
    $("#court-next-1").on("click", courtnextStep);
    $("#court-prev-2").on("click", courtprevStep);
    $("#court-next-2").on("click", courtnextStep);
    $("#court-prev-3").on("click", courtprevStep);
    $("#court-next-3").on("click", courtnextStep);
    $("#court-prev-4").on("click", courtprevStep);
    $("#court-next-4").on("click", courtnextStep);
    $("#court-prev-5").on("click", courtprevStep);


    $('#click-Financials').on('click', function() {
        $('#Firm-Background').hide();
        $('#Court-Checks').hide();
        $("#On-Ground-Verification").hide();
        $("#Financials").show();
        $("#Business-Intelligence").hide();
        $("#Tax-Return-and-Credit").hide();
        $("#Market-Reputation").hide();
        $("#Key-Observation").hide();

        $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
        $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Financials").addClass('report-tab-active').removeClass('report-tab-unactive');
        $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');


    });

    var FinancialscurrentStep = 1;
    $(".Financials-step").hide();
    $("#Financials-step-1").show();

    // Function to navigate to the next step
    function FinancialsnextStep() {
        $(".Financials-step").hide();
        FinancialscurrentStep++;
        $("#Financials-step-" + FinancialscurrentStep).show();
    }

    // Function to navigate to the previous step
    function FinancialsprevStep() {
        $(".Financials-step").hide();
        FinancialscurrentStep--;
        $("#Financials-step-" + FinancialscurrentStep).show();
    }

    // Event listeners for "Next" and "Previous" buttons
    $("#Financials-next-1").on("click", FinancialsnextStep);
    $("#Financials-prev-2").on("click", FinancialsprevStep);
    $("#Financials-next-2").on("click", FinancialsnextStep);
    $("#Financials-prev-3").on("click", FinancialsprevStep);
    $("#Financials-next-3").on("click", FinancialsnextStep);
    $("#Financials-prev-4").on("click", FinancialsprevStep);
    $("#Financials-next-4").on("click", FinancialsnextStep);
    $("#Financials-prev-5").on("click", FinancialsprevStep);
    $("#Financials-next-5").on("click", FinancialsnextStep);
    $("#Financials-prev-6").on("click", FinancialsprevStep);
    $("#Financials-next-6").on("click", FinancialsnextStep);
    $("#Financials-prev-7").on("click", FinancialsprevStep);
    $("#Financials-next-7").on("click", FinancialsnextStep);
    $("#Financials-prev-8").on("click", FinancialsprevStep);
    $("#Financials-next-8").on("click", FinancialsnextStep);
    $("#Financials-prev-9").on("click", FinancialsprevStep);
    $("#Financials-next-9").on("click", FinancialsnextStep);
    $("#Financials-prev-10").on("click", FinancialsprevStep);
    $("#Financials-next-10").on("click", FinancialsnextStep);
    $("#Financials-prev-11").on("click", FinancialsprevStep);



    $('#click-Business-Intelligence').on('click', function() {
        $('#Firm-Background').hide();
        $('#Court-Checks').hide();
        $("#On-Ground-Verification").hide();
        $("#Financials").hide();
        $("#Business-Intelligence").show();
        $("#Tax-Return-and-Credit").hide();
        $("#Market-Reputation").hide();
        $("#Key-Observation").hide();

        $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
        $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Business-Intelligence").addClass('report-tab-active').removeClass('report-tab-unactive');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');


    });

    $('#click-Tax-Return-and-Credit').on('click', function() {
        $('#Firm-Background').hide();
        $('#Court-Checks').hide();
        $("#On-Ground-Verification").hide();
        $("#Financials").hide();
        $("#Business-Intelligence").hide();
        $("#Tax-Return-and-Credit").show();
        $("#Market-Reputation").hide();
        $("#Key-Observation").hide();

        $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
        $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-active').removeClass('report-tab-unactive');
        $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');



    });




    var TaxReturnandCreditcurrentStep = 1;
    $(".Tax-Return-and-Credit-step").hide();
    $("#Tax-Return-and-Credit-step-1").show();

    // Function to navigate to the next step
    function TaxReturnandCreditnextStep() {
        $(".Tax-Return-and-Credit-step").hide();
        TaxReturnandCreditcurrentStep++;
        $("#Tax-Return-and-Credit-step-" + TaxReturnandCreditcurrentStep).show();
    }

    // Function to navigate to the previous step
    function TaxReturnandCreditprevStep() {
        $(".Tax-Return-and-Credit-step").hide();
        TaxReturnandCreditcurrentStep--;
        $("#Tax-Return-and-Credit-step-" + TaxReturnandCreditcurrentStep).show();
    }

    // Event listeners for "Next" and "Previous" buttons
    $("#Tax-Return-and-Credit-next-1").on("click", TaxReturnandCreditnextStep);
    $("#Tax-Return-and-Credit-prev-2").on("click", TaxReturnandCreditprevStep);
    $("#Tax-Return-and-Credit-next-2").on("click", TaxReturnandCreditnextStep);



    $('#click-Market-Reputation').on('click', function() {
        $('#Firm-Background').hide();
        $('#Court-Checks').hide();
        $("#On-Ground-Verification").hide();
        $("#Financials").hide();
        $("#Business-Intelligence").hide();
        $("#Tax-Return-and-Credit").hide();
        $("#Market-Reputation").show();
        $("#Key-Observation").hide();

        $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
        $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Market-Reputation").addClass('report-tab-active').removeClass('report-tab-unactive');
        $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');


    });

    $('#click-Key-Observation').on('click', function() {
        $('#Firm-Background').hide();
        $('#Court-Checks').hide();
        $("#On-Ground-Verification").hide();
        $("#Financials").hide();
        $("#Business-Intelligence").hide();
        $("#Tax-Return-and-Credit").hide();
        $("#Market-Reputation").hide();
        $("#Key-Observation").show();

        $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
        $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
        $('#click-Key-Observation').toggleClass('report-tab-active report-tab-unactive');

        // $("#click-Key-Observation").removeClass('report-tab-unactive');
        // $("#click-Key-Observation").addClass('report-tab-active');


    });

    var KeyObservationcurrentStep = 1;
    $(".Key-Observation-step").hide();
    $("#Key-Observation-step-1").show();

    // Function to navigate to the next step
    function KeyObservationcurrentStepnextStep() {
        $(".Key-Observation-step").hide();
        KeyObservationcurrentStep++;
        $("#Key-Observation-step-" + KeyObservationcurrentStep).show();
    }

    // Function to navigate to the previous step
    function KeyObservationcurrentStepprevStep() {
        $(".Key-Observation-step").hide();
        KeyObservationcurrentStep--;
        $("#Key-Observation-step-" + KeyObservationcurrentStep).show();
    }

    // Event listeners for "Next" and "Previous" buttons
    $("#Key-Observation-next-1").on("click", KeyObservationcurrentStepnextStep);
    $("#Key-Observation-prev-2").on("click", KeyObservationcurrentStepprevStep);
    $("#Key-Observation-next-2").on("click", KeyObservationcurrentStepnextStep);


    function allFormHideStaringAfter() {
        $('#Firm-Background').show();
        $('#Court-Checks').hide();
        $("#On-Ground-Verification").hide();
        $("#Financials").hide();
        $("#Business-Intelligence").hide();
        $("#Tax-Return-and-Credit").hide();
        $("#Market-Reputation").hide();
        $("#Key-Observation").hide();

        $('#click-Firm-Background').addClass('report-tab-active').removeClass('report-tab-unactive');
        $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
        $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');
    }

    allFormHideStaringAfter()

});
</script>



@endsection
