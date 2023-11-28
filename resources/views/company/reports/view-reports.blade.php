@extends('company.includes.master')

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
    <div class="card">
        <div class="card-body justify-content-center">
            <div class="d-flex flex-row flex-nowrap">
                <a href="JavaScript:void(0)" id="click-Firm-Background"
                    class="btn btn-secondary report-tab-active border-round-tab  btn-sm mx-1 p-lg-3">Firm Background</a>
                <a href="JavaScript:void(0)" id="click-On-Ground-Verification"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">On Ground
                    Verification</a>
                <a href="JavaScript:void(0)" id="click-Court-Checks"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Court
                    Checks</a>
                <a href="JavaScript:void(0)" id="click-Financials"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Financials</a>
                <a href="JavaScript:void(0)" id="click-Business-Intelligence"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Business
                    Intelligence</a>
                <a href="JavaScript:void(0)" id="click-Tax-Return-and-Credit"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Tax Return and
                    Credit</a>
                <a href="JavaScript:void(0)" id="click-Market-Reputation"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Market
                    Reputation</a>
                <a href="JavaScript:void(0)" id="click-Key-Observation"
                    class="btn btn-secondary report-tab-unactive border-round-tab btn-sm mx-1 p-lg-3">Key
                    Observation</a>
                <!-- Add similar code for other buttons as needed -->
            </div>
        </div>
    </div>
</div>

<!-- firm background tab start -->
    <div class="col-xl-12" id="tab-Firm-Background">
        <div class="card dz-card">

                <div class="tab-content" id="myTabContent">
                    <div class="card-header flex-wrap border-0" id="default-tab">
                        <h4 class="card-title">Firm Background<br>
                        </h4>


                    </div>
                    <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0">
                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Basic-Information"> Basic Information Registration/Licenses Director Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Registrations-Licenses">
                                            Registrations/Licenses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Director-Details"> Director Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Directorship-Check-Business-Conflict-Check"></i> Directorship Check Business Conflict Check</a>
                                    </li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Basic-Information" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="table-responsive">
                                                <table class="table primary-table-bordered">
                                                    <thead class="thead-primary">
                                                        <tr>



                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Incorporation Year</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-8">{{ $FirmBackground->incorporation_year }}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Directors</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">Ms. Cherry Banga</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Form of Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $FirmBackground->form_of_entity }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Industry</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $FirmBackground->industry }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Address</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $FirmBackground->address }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Business Details</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $FirmBackground->business_details }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Registrations-Licenses">
                                        <div class="pt-4">
                                            <div class="table-responsive">
                                                <table class="table primary-table-bordered">
                                                    <thead class="thead-primary">
                                                        <tr>



                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">License Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">License No.</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Date of Issuance</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Expiry Date</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_name_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_no_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_issuance_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_expiry_1}}</td>
                                                        </tr>
                                                        <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_name_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_no_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_issuance_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_expiry_2}}</td>
                                                        </tr>
                                                        <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_name_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_no_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_issuance_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_expiry_3}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_name_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_no_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_issuance_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_expiry_4}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_name_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_no_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_issuance_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_expiry_5}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_name_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_no_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_issuance_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_expiry_6}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_name_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_no_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_issuance_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_expiry_7}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_name_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->license_no_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_issuance_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{$License->date_of_expiry_8}}</td>
                                                        </tr>


                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4 text-start">Ofac Check</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4 text-start">{{$FirmBackground->ofac_check}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4 align-items-end"><a href="{{ URL::to('/company/report/firm_file_download'.'/'.base64_encode($FirmBackground->id)) }}" class="download-license-btn">Download Licenses</a></td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Director-Details">
                                        <div class="pt-4">
                                            <div class="table-responsive">
                                                <table class="table primary-table-bordered">
                                                    <thead class="thead-primary">
                                                        <tr>



                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-8">{{ $FirmBackground->name }}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">PAN</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $FirmBackground->pan }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">AADHAR</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $FirmBackground->aadhar }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Educational Background</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $FirmBackground->educational_background }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Credit Score</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $FirmBackground->credit_score }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Directorship-Check-Business-Conflict-Check">
                                        <div class="pt-4">
                                            <div class="table-responsive">
                                                <table class="table primary-table-bordered">
                                                    <thead class="thead-primary">
                                                        <tr>



                                                        </tr>



                                                    </thead>
                                                    <tbody>
                                                        @if (!empty($FirstDirectorsFirm->director_name_1_1))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$FirstDirectorsFirm->director_name_1_1}}</th>
                                                        </tr>

                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$FirstDirectorsFirm->company_name_1_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$FirstDirectorsFirm->cin_1_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->company_status_1_1}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->appointment_date_1_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_of_entity_1_1}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_conflict_1_1}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_1_2))

                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$FirstDirectorsFirm->director_name_1_2}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$FirstDirectorsFirm->company_name_1_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$FirstDirectorsFirm->cin_1_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->company_status_1_2}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->appointment_date_1_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_of_entity_1_2}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_conflict_1_2}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_1_3))

                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$FirstDirectorsFirm->director_name_1_3}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$FirstDirectorsFirm->company_name_1_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$FirstDirectorsFirm->cin_1_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->company_status_1_3}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->appointment_date_1_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_of_entity_1_3}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_conflict_1_3}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_1_4))

                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$FirstDirectorsFirm->director_name_1_4}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$FirstDirectorsFirm->company_name_1_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$FirstDirectorsFirm->cin_1_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->company_status_1_4}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->appointment_date_1_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_of_entity_1_4}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_conflict_1_4}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_1_5))


                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$FirstDirectorsFirm->director_name_1_5}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$FirstDirectorsFirm->company_name_1_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$FirstDirectorsFirm->cin_1_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->company_status_1_5}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->appointment_date_1_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_of_entity_1_5}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_conflict_1_5}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_1_6))

                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$FirstDirectorsFirm->director_name_1_6}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$FirstDirectorsFirm->company_name_1_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$FirstDirectorsFirm->cin_1_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->company_status_1_6}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->appointment_date_1_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_of_entity_1_6}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_conflict_1_6}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_1_7))

                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$FirstDirectorsFirm->director_name_1_7}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$FirstDirectorsFirm->company_name_1_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$FirstDirectorsFirm->cin_1_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->company_status_1_7}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->appointment_date_1_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_of_entity_1_7}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_conflict_1_7}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_1_8))


                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$FirstDirectorsFirm->director_name_1_8}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$FirstDirectorsFirm->company_name_1_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$FirstDirectorsFirm->cin_1_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->company_status_1_8}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->appointment_date_1_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_of_entity_1_8}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$FirstDirectorsFirm->business_conflict_1_8}}</td>
                                                        </tr>

                                                        @endif



                                                <!-----------------===========================================    second director      ============================================================  -->

                                                @if (!empty($FirstDirectorsFirm->director_name_2_1))
                                                            <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (2)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$SecondDirectorsFirm->director_name_2_1}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$SecondDirectorsFirm->company_name_2_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$SecondDirectorsFirm->cin_2_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->company_status_2_1}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->appointment_date_2_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_of_entity_2_1}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_conflict_2_1}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_2_2))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (2)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$SecondDirectorsFirm->director_name_2_2}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$SecondDirectorsFirm->company_name_2_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$SecondDirectorsFirm->cin_2_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->company_status_2_2}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->appointment_date_2_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_of_entity_2_2}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_conflict_2_2}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_2_3))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (2)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$SecondDirectorsFirm->director_name_2_3}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$SecondDirectorsFirm->company_name_2_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$SecondDirectorsFirm->cin_2_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->company_status_2_3}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->appointment_date_2_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_of_entity_2_3}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_conflict_2_3}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_2_4))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (2)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$SecondDirectorsFirm->director_name_2_4}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$SecondDirectorsFirm->company_name_2_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$SecondDirectorsFirm->cin_2_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->company_status_2_4}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->appointment_date_2_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_of_entity_2_4}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_conflict_2_4}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_2_5))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (2)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$SecondDirectorsFirm->director_name_2_5}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$SecondDirectorsFirm->company_name_2_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$SecondDirectorsFirm->cin_2_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->company_status_2_5}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->appointment_date_2_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_of_entity_2_5}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_conflict_2_5}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_2_6))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (2)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$SecondDirectorsFirm->director_name_2_6}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$SecondDirectorsFirm->company_name_2_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$SecondDirectorsFirm->cin_2_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->company_status_2_6}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->appointment_date_2_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_of_entity_2_6}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_conflict_2_6}}</td>
                                                        </tr>
                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_2_7))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (2)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$SecondDirectorsFirm->director_name_2_7}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$SecondDirectorsFirm->company_name_2_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$SecondDirectorsFirm->cin_2_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->company_status_2_7}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->appointment_date_2_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_of_entity_2_7}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_conflict_2_7}}</td>
                                                        </tr>

                                                        @endif

                                                        @if (!empty($FirstDirectorsFirm->director_name_2_8))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (2)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$SecondDirectorsFirm->director_name_2_8}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$SecondDirectorsFirm->company_name_2_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$SecondDirectorsFirm->cin_2_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->company_status_2_8}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->appointment_date_2_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_of_entity_2_8}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$SecondDirectorsFirm->business_conflict_2_8}}</td>
                                                        </tr>


                                                        @endif

                                            <!-----------------===========================================    third director      ============================================================  -->
                                            @if (!empty($FirstDirectorsFirm->director_name_3_1))

                                                            <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (3)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$ThirdDirectorsFirm->director_name_3_1}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$ThirdDirectorsFirm->company_name_3_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$ThirdDirectorsFirm->cin_3_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->company_status_3_1}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->appointment_date_3_1}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_of_entity_3_1}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_conflict_3_1}}</td>
                                                        </tr>
                                                        @endif
                                                        @if (!empty($FirstDirectorsFirm->director_name_3_2))

                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (3)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$ThirdDirectorsFirm->director_name_3_2}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$ThirdDirectorsFirm->company_name_3_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$ThirdDirectorsFirm->cin_3_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->company_status_3_2}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->appointment_date_3_2}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_of_entity_3_2}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_conflict_3_2}}</td>
                                                        </tr>
                                                        @endif
                                                        @if (!empty($FirstDirectorsFirm->director_name_3_3))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (3)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$ThirdDirectorsFirm->director_name_3_3}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$ThirdDirectorsFirm->company_name_3_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$ThirdDirectorsFirm->cin_3_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->company_status_3_3}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->appointment_date_3_3}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_of_entity_3_3}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_conflict_3_3}}</td>
                                                        </tr>
                                                        @endif
                                                        @if (!empty($FirstDirectorsFirm->director_name_3_4))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (3)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$ThirdDirectorsFirm->director_name_3_4}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$ThirdDirectorsFirm->company_name_3_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$ThirdDirectorsFirm->cin_3_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->company_status_3_4}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->appointment_date_3_4}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_of_entity_3_4}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_conflict_3_4}}</td>
                                                        </tr>
                                                        @endif
                                                        @if (!empty($FirstDirectorsFirm->director_name_3_5))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (3)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$ThirdDirectorsFirm->director_name_3_5}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$ThirdDirectorsFirm->company_name_3_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$ThirdDirectorsFirm->cin_3_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->company_status_3_5}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->appointment_date_3_5}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_of_entity_3_5}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_conflict_3_5}}</td>
                                                        </tr>
                                                        @endif
                                                        @if (!empty($FirstDirectorsFirm->director_name_3_6))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (3)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$ThirdDirectorsFirm->director_name_3_6}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$ThirdDirectorsFirm->company_name_3_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$ThirdDirectorsFirm->cin_3_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->company_status_3_6}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->appointment_date_3_6}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_of_entity_3_6}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_conflict_3_6}}</td>
                                                        </tr>
                                                        @endif
                                                        @if (!empty($FirstDirectorsFirm->director_name_3_7))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (3)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$ThirdDirectorsFirm->director_name_3_7}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$ThirdDirectorsFirm->company_name_3_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$ThirdDirectorsFirm->cin_3_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->company_status_3_7}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->appointment_date_3_7}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_of_entity_3_7}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_conflict_3_7}}</td>
                                                        </tr>

                                                        @endif
                                                        @if (!empty($FirstDirectorsFirm->director_name_3_8))
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="2" class="col-md-4">Director's Name (3)</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col"  colspan="4" class="col-md-8">{{$ThirdDirectorsFirm->director_name_3_8}}</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);" colspan="1"  class="col-md-2">Company Name</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">CIN</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Company Status</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Appointment Date</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business of the Entity</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">Business Conflict</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1">{{$ThirdDirectorsFirm->company_name_3_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"   class="col-md-1"> {{$ThirdDirectorsFirm->cin_3_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->company_status_3_8}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->appointment_date_3_8}}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_of_entity_3_8}}</td>

                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{$ThirdDirectorsFirm->business_conflict_3_8}}</td>
                                                        </tr>

                                                        @endif

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

        </div>
    </div>
<!-- firm background tab End -->
<!-- on ground verification tab start -->
    <div class="col-xl-12" id="tab-On-Ground-Verification">
        <div class="card dz-card">

            <div class="tab-content" id="myTabContent">
                <div class="card-header flex-wrap border-0" id="default-tab">



                </div>
                <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body pt-0">
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#ON-GROUND VERIFICATION "> Basic Information Registration/Licenses Director Details</a>
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="ON-GROUND VERIFICATION " role="tabpanel">
                                    <div class="pt-4">
                                        <div class="table-responsive">
                                            <table class="table primary-table-bordered">
                                                <thead class="thead-primary">


                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Particular</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-8">Details</th>

                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Address</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{$OnGroundVerification->address_details}} </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Address Visit Findings</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{$OnGroundVerification->address_visit_findings}}</td>
                                                    </tr>

                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4 text-start">ON-GROUND VERIFICATION SCORE = {{$OnGroundVerification->on_ground_verification_score}}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4 align-items-end"><a href="{{ URL::to('/panel/report/onGround_file_download'.'/'. base64_encode($OnGroundVerification->id)) }}" class="download-license-btn">Download field visit Image</a></td>

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

    </div>
    </div>
<!-- on ground verification tab End -->
<!-- court check tab start -->
    <div class="col-xl-12" id="tab-Court-Checks">
        <div class="card dz-card">

            <div class="tab-content" id="myTabContent">
                <div class="card-header flex-wrap border-0" id="default-tab">



                </div>
                <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body pt-0">
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#Court-check-of-directors">Court check of directors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#Court-Check-Of-Company">
                                        Court Check Of Company</a>
                                </li>


                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="Court-check-of-directors" role="tabpanel">
                                    <div class="pt-4">
                                        <div class="table-responsive">
                                            <table class="table primary-table-bordered">
                                                <thead class="thead-primary">


                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_1 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_jurisdiction_1 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_record_1 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_subject_matter_1 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_2 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_jurisdiction_2 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_record_2 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_subject_matter_2 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_3 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_jurisdiction_3 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_record_3 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_subject_matter_3 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_4 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_jurisdiction_4 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_record_4 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_subject_matter_4 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_5 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_jurisdiction_5 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_record_5 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->director_subject_matter_5 }}</td>
                                                    </tr>



                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">LEGAL SCORE = {{ $CourtCheck->legal_score }}</td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Court-Check-Of-Company">
                                    <div class="pt-4">
                                        <div class="table-responsive">
                                            <table class="table primary-table-bordered">
                                                <thead class="thead-primary">


                                                </thead>
                                                <tbody>
                                                <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_1 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_jurisdiction_1 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_record_1 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_subject_matter_1 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_2 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_jurisdiction_2 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_record_2 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_subject_matter_2 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_3 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_jurisdiction_3 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_record_3 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_subject_matter_3 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_4 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_jurisdiction_4 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_record_4 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_subject_matter_4 }}</td>
                                                    </tr>

                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" colspan="2" scope="col" class="col-md-8">{{ $CourtCheck->director_name_5 }}</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Jurisdiction</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Record</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">Subject Matter</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_jurisdiction_5 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_record_5 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">{{ $CourtCheck->company_subject_matter_5 }}</td>
                                                    </tr>


                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">LEGAL SCORE =  {{ $CourtCheck->legal_score }}</td>

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

         </div>
    </div>
<!-- court check tab End -->
<!-- Financials tab start -->
    <div class="col-xl-12" id="tab-Financials">
        <div class="card dz-card">

            <div class="tab-content" id="myTabContent">
                <div class="card-header flex-wrap border-0" id="default-tab">
                    <h4 class="card-title">Financials<br>

                    </h4>


                </div>
                <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                    <div class="card-body pt-0">
                        <!-- Nav tabs -->
                        <div class="default-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#ChargesontheEntityFinancialFindingsRatioAnalysis"> Charges on the Entity Financial Findings Ratio Analysis</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#Financial-Findings"> Financial Findings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#Ratio-Analysis"> Ratio Analysis</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="ChargesontheEntityFinancialFindingsRatioAnalysis" role="tabpanel">
                                    <div class="pt-4">
                                        <div class="table-responsive">
                                            <table class="table primary-table-bordered">
                                                <thead class="thead-primary">
                                                </thead>
                                                <tbody>
                                                <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Status</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Amount</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Charged Property</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">  {{ $Financial->name_1 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->status_1 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->amount_1 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->charged_property_1 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Status</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Amount</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Charged Property</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">  {{ $Financial->name_2 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->status_2 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->amount_2 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->charged_property_2 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Status</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Amount</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Charged Property</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">  {{ $Financial->name_3 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->status_3 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->amount_3 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->charged_property_3 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Name</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Status</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Amount</th>
                                                        <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-3">Charged Property</th>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">  {{ $Financial->name_4 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->status_4 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->amount_4 }}</td>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-3">{{ $Financial->charged_property_4 }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">FINANCIAL SCORE = ????</td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="Financial-Findings">
                                    <div class="pt-4">
                                        <div class="table-responsive">
                                            <div class="row">

                                                <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                                                    <div class="card">
                                                        <h4
                                                            class="card-title mb-4 d-flex justify-content-center align-items-center">
                                                            Financials Findinds Analysis</h4>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <canvas id="barChart_1"></canvas>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Ratio-Analysis">
                                    <div class="pt-4">
                                        <div class="table-responsive">
                                            <div class="row">

                                                <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                                                    <div class="card">
                                                        <h4
                                                            class="card-title mb-4 d-flex justify-content-center align-items-center">
                                                            Financials Ratio Analysis</h4>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <canvas id="barChart_financialRation"></canvas>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

         </div>
    </div>
<!-- Financials tab End -->
<!-- Business-Intelligence tab start -->
    <div class="col-xl-12" id="tab-Business-Intelligence">
         <div class="card dz-card">

                <div class="tab-content" id="myTabContent">
                    <div class="card-header flex-wrap border-0" id="default-tab">
                        <h4 class="card-title">Business Intelligence<br>

                        </h4>


                    </div>
                    <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0">
                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Business-Intelligence "> Business Intelligence </a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Business-Intelligence " role="tabpanel">
                                        <div class="pt-4">
                                            <div class="table-responsive">
                                                <div class="row">

                                                    <div class="col-xl-4 col-sm-4 col-4 mt-4 mt-md-0">
                                                        <div class="card">
                                                            <h4
                                                                class="card-title mb-4 d-flex justify-content-center align-items-center">
                                                                Business Intelligence</h4>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <canvas id="barChart_businessIntelligence"></canvas>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
<!-- Business-Intelligence tab End -->
<!--Tax-Return-and-Credit tab start -->
    <div class="col-xl-12" id="tab-Tax-Return-and-Credit">
       <div class="card dz-card">

                <div class="tab-content" id="myTabContent">
                    <div class="card-header flex-wrap border-0" id="default-tab">
                        <h4 class="card-title">Tax Return & Credit<br>

                        </h4>


                    </div>
                    <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0">
                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Tax-Return">Tax Return</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#Credit-History">
                                            Credit History</a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Tax-Return" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="table-responsive">
                                                <table class="table primary-table-bordered">
                                                    <thead class="thead-primary">
                                                        <tr>



                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-4">Year</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-8">Tax Paid</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">FY 1</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $TaxReurnCredit->tax_fy1 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">FY 2</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $TaxReurnCredit->tax_fy2 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">FY 3</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $TaxReurnCredit->tax_fy3 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">FY 4</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $TaxReurnCredit->tax_fy4 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">FY 5</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">{{ $TaxReurnCredit->tax_fy5 }}</td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Credit-History">
                                        <div class="pt-4">
                                            <div class="table-responsive">
                                                <table class="table primary-table-bordered">
                                                    <thead class="thead-primary">


                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-2">Director Name</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-1">Credit Score</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-1">Outstanding Amount</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-2">No. of Loans</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-2">Solvency</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-2">Payment History</th>
                                                            <th style="background-color: #5a595a; color: white;" scope="col" class="col-md-2">Credit Dependency</th>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->name_1 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->credit_score_1 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->outstanding_amount_1 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->num_of_loans_1 }} </td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->solvency_1 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->payment_history_1 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->credit_dependency_1 }} </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->name_2 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->credit_score_2 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->outstanding_amount_2 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->num_of_loans_2 }} </td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->solvency_2 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->payment_history_2 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->credit_dependency_2 }} </td>
                                                        </tr> <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->name_3 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->credit_score_3 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->outstanding_amount_3 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->num_of_loans_3 }} </td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->solvency_3 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->payment_history_3 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->credit_dependency_3 }} </td>
                                                        </tr> <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->name_4 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->credit_score_4 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->outstanding_amount_4 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-1">{{ $TaxReurnCredit->num_of_loans_4 }} </td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->solvency_4 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->payment_history_4 }}</td>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-2">{{ $TaxReurnCredit->credit_dependency_4 }} </td>
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

        </div>
    </div>
<!--Tax-Return-and-Credit tab End -->
<!-- Market-Reputation tab start -->
    <div class="col-xl-12" id="tab-Market-Reputation">
        <div class="card dz-card">

                <div class="tab-content" id="myTabContent">
                    <div class="card-header flex-wrap border-0" id="default-tab">
                        <h4 class="card-title">Market Reputation<br>

                        </h4>


                    </div>
                    <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card-body pt-0">
                            <!-- Nav tabs -->
                            <div class="default-tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#Market-Reputation">Market Reputation</a>
                                    </li>


                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="Market-Reputation" role="tabpanel">
                                        <div class="pt-4">
                                            <div class="table-responsive">
                                                <table class="table primary-table-bordered">
                                                    <thead class="thead-primary">


                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-8">
                                                                <embed src="{{URL::to('public/admin/assets/imgs/MarketReputations/') .'/'.$MarketReputation->file_path_market_reputations}}" width="500" height="550" type="application/pdf">

                                                            </td>
                                                            <th style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);"  class="col-md-4">MARKET REPUTATION SCORE = {{ $MarketReputation->market_reputation_score }}</th>
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

        </div>
    </div>
<!-- Market-Reputation tab End -->
<!--click-Key-Observation tab start -->
<div class="col-xl-12" id="tab-Key-Observation">
    <div class="card dz-card">

        <div class="tab-content" id="myTabContent">
            <div class="card-header flex-wrap border-0" id="default-tab">
                <h4 class="card-title">Key Observation<br>

                </h4>


            </div>
            <div class="tab-pane fade show active" id="DefaultTab" role="tabpanel" aria-labelledby="home-tab">
                <div class="card-body pt-0">
                    <!-- Nav tabs -->
                    <div class="default-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#Key-Observation"> Key
                                    Observation</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Key-Observation" role="tabpanel">
                                <div class="pt-4">

                                    <div class="row">
                                        <div class="col-xl-5 mt-6">
                                            <p for="educationalBackground" class="text-start">
                                                {{ $KeyObservation->key_observation }}</p>
                                        </div>
                                        <div class="col-xl-5 mb-6">
                                            <p for="educationalBackground" class="text-center mt-20"> OVERALL RISK SCORE =
                                                {{ $KeyObservation->overall_risk_score }}</p>
                                        </div>

                                        <div  class="col-xl-2 mb-3">





                                <canvas id="doughnut_chart"></canvas>


                                        </div>

                                    </div>



                                    <div class="row">
                                        <div class="col-xl-6 mb-3">
                                            <b for="educationalBackground" class="text-start">Recommendations</b>
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <p for="educationalBackground" class=""></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 mb-3">
                                            <p for="educationalBackground" class="text-start">

                                                {{ $KeyObservation->key_recommendations }}
                                            </p>

                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <p for="educationalBackground" class="text-center"><a
                                                    href="{{ URL::to('/panel/report/generate_pdf_of_reports'.'/'.$getThirdPartyForID->id) }}"
                                                    class="download-license-btn">Download Licenses</a></p>
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--click-Key-Observation tab End -->















@endsection

@section('addScript')
<script>
    var financialRationGrapFY = @json($financialrationGrapFY);
    var financialFindingsGrapFY = @json($financialFindingsGrapFY);
    var businessInteligenceGrapFY = @json($businessInteligenceGrapFY);
    var finalValueforGraKeyObservation =@json($finalValueforGraKeyObservation);

    // Your external JavaScript file
    // Include this script before your external JS that uses financialRationGrapFY
    </script>
 <script>
    $(document).ready(function() {


        $('#click-Firm-Background').on('click', function() {
            $('#tab-Firm-Background').show();
            $('#tab-On-Ground-Verification').hide();
            $('#tab-Court-Checks').hide();
            $('#tab-Financials').hide();
            $('#tab-Business-Intelligence').hide();
            $('#tab-Tax-Return-and-Credit').hide();
            $('#tab-Market-Reputation').hide();
            $('#tab-Key-Observation').hide();

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
            $('#tab-Firm-Background').hide();
            $('#tab-On-Ground-Verification').show();
            $('#tab-Court-Checks').hide();
            $('#tab-Financials').hide();
            $('#tab-Business-Intelligence').hide();
            $('#tab-Tax-Return-and-Credit').hide();
            $('#tab-Market-Reputation').hide();
            $('#tab-Key-Observation').hide();

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
            $('#tab-Firm-Background').hide();
            $('#tab-On-Ground-Verification').hide();
            $('#tab-Court-Checks').show();
            $('#tab-Financials').hide();
            $('#tab-Business-Intelligence').hide();
            $('#tab-Tax-Return-and-Credit').hide();
            $('#tab-Market-Reputation').hide();
            $('#tab-Key-Observation').hide();

            $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
            $('#click-Court-Checks').addClass('report-tab-active').removeClass('report-tab-unactive');
            $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');
        });
        $('#click-Financials').on('click', function() {
            $('#tab-Firm-Background').hide();
            $('#tab-On-Ground-Verification').hide();
            $('#tab-Court-Checks').hide();
            $('#tab-Financials').show();
            $('#tab-Business-Intelligence').hide();
            $('#tab-Tax-Return-and-Credit').hide();
            $('#tab-Market-Reputation').hide();
            $('#tab-Key-Observation').hide();



            $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
            $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Financials").addClass('report-tab-active').removeClass('report-tab-unactive');
            $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');


        });
        $('#click-Business-Intelligence').on('click', function() {
            $('#tab-Firm-Background').hide();
            $('#tab-On-Ground-Verification').hide();
            $('#tab-Court-Checks').hide();
            $('#tab-Financials').hide();
            $('#tab-Business-Intelligence').show();
            $('#tab-Tax-Return-and-Credit').hide();
            $('#tab-Market-Reputation').hide();
            $('#tab-Key-Observation').hide();
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
            $('#tab-Firm-Background').hide();
            $('#tab-On-Ground-Verification').hide();
            $('#tab-Court-Checks').hide();
            $('#tab-Financials').hide();
            $('#tab-Business-Intelligence').hide();
            $('#tab-Tax-Return-and-Credit').show();
            $('#tab-Market-Reputation').hide();
            $('#tab-Key-Observation').hide();

             $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
            $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Tax-Return-and-Credit").addClass('report-tab-active').removeClass('report-tab-unactive');
            $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Key-Observation").addClass('report-tab-unactive').removeClass('report-tab-active');

        });
        $('#click-Market-Reputation').on('click', function() {
            $('#tab-Firm-Background').hide();
            $('#tab-On-Ground-Verification').hide();
            $('#tab-Court-Checks').hide();
            $('#tab-Financials').hide();
            $('#tab-Business-Intelligence').hide();
            $('#tab-Tax-Return-and-Credit').hide();
            $('#tab-Market-Reputation').show();
            $('#tab-Key-Observation').hide();

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
            $('#tab-Firm-Background').hide();
            $('#tab-On-Ground-Verification').hide();
            $('#tab-Court-Checks').hide();
            $('#tab-Financials').hide();
            $('#tab-Business-Intelligence').hide();
            $('#tab-Tax-Return-and-Credit').hide();
            $('#tab-Market-Reputation').hide();
            $('#tab-Key-Observation').show();

             $('#click-Firm-Background').addClass('report-tab-unactive').removeClass('report-tab-active');
            $('#click-Court-Checks').addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-On-Ground-Verification").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Financials").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Business-Intelligence").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Tax-Return-and-Credit").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Market-Reputation").addClass('report-tab-unactive').removeClass('report-tab-active');
            $("#click-Key-Observation").addClass('report-tab-active').removeClass('report-tab-unactive');

        });



        const hidetabExceptFir = () =>{
            $('#tab-Firm-Background').show();
            $('#tab-On-Ground-Verification').hide();
            $('#tab-Court-Checks').hide();
            $('#tab-Financials').hide();
            $('#tab-Business-Intelligence').hide();
            $('#tab-Tax-Return-and-Credit').hide();
            $('#tab-Market-Reputation').hide();
            $('#tab-Key-Observation').hide();
        }


        hidetabExceptFir();
    });
</script>

<script>

(function($) {
  "use strict"


	/* function draw() {

	} */

 var dlabSparkLine = function(){
	let draw = Chart.controllers.line.__super__.draw; //draw shadow

	var screenWidth = $(window).width();

	var barChart1 = function(){
		if(jQuery('#barChart_1').length > 0 ){
			const barChart_1 = document.getElementById("barChart_1").getContext('2d');

			barChart_1.height = 100;

			new Chart(barChart_1, {
                type: 'bar',
                data: {
                    defaultFontFamily: 'Poppins',
                    labels: ["FY1", "FY2", "FY3", "FY4", "FY5"],
                    datasets: [
                        {
                            label: "Financials Findinds Analysis",
                            data: financialFindingsGrapFY,
                            borderColor: '#fff',
                            borderWidth: "0",
                            // Use an array of colors for each bar
                            backgroundColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)'],                        }
                    ]
                },
                options: {
                    legend: false,
                    scales: {
                        yAxes: [{
                            show: false,
                            ticks: {
                                beginAtZero: true,
                                color: '#888',
                                fontColor:'#888'
                            },
                            gridLines:{
                                color:"rgba(255, 255, 255, 0.1)",
                                offsetGridLines: true,
                            }
                        }],
                        xAxes: [{
                            barPercentage: 0.5,
                            ticks:{
                                fontColor: '#888',
                            },
                            gridLines:{
                                color:"rgba(255, 255, 255, 0.1)"
                            }
                        }]
                    }
                }
			});
		}
	}
    var barChart1financialRatio = function(){
        if(jQuery('#barChart_financialRation').length > 0 ){
            const barChart_financialRation = document.getElementById("barChart_financialRation").getContext('2d');

            barChart_financialRation.height = 100;

            new Chart(barChart_financialRation, {
                type: 'bar',
                data: {
                    defaultFontFamily: 'Poppins',
                    labels: ["FY1", "FY2", "FY3", "FY4", "FY5"],
                    datasets: [
                        {
                            label: "Financials Ratio Analysis",
                            data: financialRationGrapFY,
                            borderColor: '#fff',
                            borderWidth: "0",
                            // Use an array of colors for each bar
                            backgroundColor: ['rgba(255, 0, 0, 1)', 'rgba(0, 255, 0, 1)', 'rgba(0, 0, 255, 1)', 'rgba(255, 255, 0, 1)', 'rgba(255, 0, 255, 1)', 'rgba(0, 255, 255, 1)'],
                        }
                    ]
                },
                options: {
                    legend: false,
                    scales: {
                        yAxes: [{
                            show: false,
                            ticks: {
                                beginAtZero: true,
                                color: '#888',
                                fontColor:'#888'
                            },
                            gridLines:{
                                color:"rgba(255, 255, 255, 0.1)",
                                offsetGridLines: true,
                            }
                        }],
                        xAxes: [{
                            barPercentage: 0.5,
                            ticks:{
                                fontColor: '#888',
                            },
                            gridLines:{
                                color:"rgba(255, 255, 255, 0.1)"
                            }
                        }]
                    }
                }
            });
        }
    }


    var barChart1businessIntelligenc = function(){
        if(jQuery('#barChart_businessIntelligence').length > 0 ){
            const barChart_businessIntelligence = document.getElementById("barChart_businessIntelligence").getContext('2d');

            barChart_businessIntelligence.height = 100;

            new Chart(barChart_businessIntelligence, {
                type: 'bar',
                data: {
                    defaultFontFamily: 'Poppins',
                    labels: businessInteligenceGrapFY,
                    datasets: [
                        {
                            label: "Business Intelligence",
                            data: [2,4,5,1,4],
                            borderColor: '#fff',
                            borderWidth: "0",
                            // Use an array of colors for each bar
                            backgroundColor: ['rgba(255, 112, 67, 1)', 'rgba(80, 195, 87, 1)', 'rgba(79, 135, 232, 1)', 'rgba(255, 206, 84, 1)', 'rgba(239, 83, 80, 1)', 'rgba(33, 150, 243, 1)'],                        }
                    ]
                },
                options: {
                    legend: false,
                    scales: {
                        yAxes: [{
                            show: false,
                            ticks: {
                                beginAtZero: true,
                                color: '#888',
                                fontColor:'#888'
                            },
                            gridLines:{
                                color:"rgba(255, 255, 255, 0.1)",
                                offsetGridLines: true,
                            }
                        }],
                        xAxes: [{
                            barPercentage: 0.5,
                            ticks:{
                                fontColor: '#888',
                            },
                            gridLines:{
                                color:"rgba(255, 255, 255, 0.1)"
                            }
                        }]
                    }
                }
            });
        }
    }



	var barChart2 = function(){
		if(jQuery('#barChart_2').length > 0 ){

		//gradient bar chart
			const barChart_2 = document.getElementById("barChart_2").getContext('2d');
			//generate gradient
			const barChart_2gradientStroke = barChart_2.createLinearGradient(0, 0, 0, 250);
			barChart_2gradientStroke.addColorStop(0, "rgba(44, 44, 44, 1)");
			barChart_2gradientStroke.addColorStop(1, "rgba(44, 44, 44, 0.5)");

			barChart_2.height = 100;

			new Chart(barChart_2, {
				type: 'bar',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [65, 59, 80, 81, 56, 55, 40],
							borderColor: barChart_2gradientStroke,
							borderWidth: "0",
							backgroundColor: barChart_2gradientStroke,
							hoverBackgroundColor: barChart_2gradientStroke
						}
					]
				},
				options: {
					legend: false,
					scales: {
						yAxes: [{
							//display:0,
							ticks: {
								beginAtZero: true,
								fontColor:	'#888',

							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}],
						xAxes: [{
							// Change here
							barPercentage: 0.5,
							ticks: {
								fontColor:	'#888',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}]
					}
				}
			});
		}
	}

	var barChart3 = function(){
		//stalked bar chart
		if(jQuery('#barChart_3').length > 0 ){
			const barChart_3 = document.getElementById("barChart_3").getContext('2d');
			//generate gradient
			const barChart_3gradientStroke = barChart_3.createLinearGradient(50, 100, 50, 50);
			barChart_3gradientStroke.addColorStop(0, "rgba(44, 44, 44, 1)");
			barChart_3gradientStroke.addColorStop(1, "rgba(44, 44, 44, 0.5)");

			const barChart_3gradientStroke2 = barChart_3.createLinearGradient(50, 100, 50, 50);
			barChart_3gradientStroke2.addColorStop(0, "rgba(98, 126, 234, 1)");
			barChart_3gradientStroke2.addColorStop(1, "rgba(98, 126, 234, 1)");

			const barChart_3gradientStroke3 = barChart_3.createLinearGradient(50, 100, 50, 50);
			barChart_3gradientStroke3.addColorStop(0, "rgba(238, 60, 60, 1)");
			barChart_3gradientStroke3.addColorStop(1, "rgba(238, 60, 60, 1)");

			barChart_3.height = 100;

			let barChartData = {
				defaultFontFamily: 'Poppins',
				labels: ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'],
				datasets: [{
					label: 'Red',
					backgroundColor: barChart_3gradientStroke,
					hoverBackgroundColor: barChart_3gradientStroke,
					data: [
						'12',
						'12',
						'12',
						'12',
						'12',
						'12',
						'12'
					]
				}, {
					label: 'Green',
					backgroundColor: barChart_3gradientStroke2,
					hoverBackgroundColor: barChart_3gradientStroke2,
					data: [
						'12',
						'12',
						'12',
						'12',
						'12',
						'12',
						'12'
					]
				}, {
					label: 'Blue',
					backgroundColor: barChart_3gradientStroke3,
					hoverBackgroundColor: barChart_3gradientStroke3,
					data: [
						'12',
						'12',
						'12',
						'12',
						'12',
						'12',
						'12'
					]
				}]

			};

			new Chart(barChart_3, {
				type: 'bar',
				data: barChartData,
				options: {
					legend: {
						display: false
					},
					title: {
						display: false
					},
					tooltips: {
						mode: 'index',
						intersect: false
					},
					responsive: true,
					scales: {
						xAxes: [{
							//display:0,
							stacked: true,
							ticks: {
								fontColor:	'#888',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}],
						yAxes: [{
							//display:0,
							stacked: true,
							ticks: {
								fontColor:	'#888',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}]
					}
				}
			});
		}
	}
	var lineChart1 = function(){


		if(jQuery('#lineChart_1').length > 0 ){


		//basic line chart
			const lineChart_1 = document.getElementById("lineChart_1").getContext('2d');

			Chart.controllers.line = Chart.controllers.line.extend({
				draw: function () {
					draw.apply(this, arguments);
					let nk = this.chart.chart.ctx;
					let _stroke = nk.stroke;
					nk.stroke = function () {
						nk.save();
						nk.shadowColor = 'rgba(255, 0, 0, .2)';
						nk.shadowBlur = 10;
						nk.shadowOffsetX = 0;
						nk.shadowOffsetY = 10;
						_stroke.apply(this, arguments)
						nk.restore();
					}
				}
			});

			lineChart_1.height = 100;

			new Chart(lineChart_1, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Febr", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [25, 20, 60, 41, 66, 45, 80],
							borderColor: 'rgba(44, 44, 44, 1)',
							borderWidth: "2",
							backgroundColor: 'transparent',
							pointBackgroundColor: 'rgba(44, 44, 44, 1)'
						}
					]
				},
				options: {
					legend: false,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								max: 100,
								min: 0,
								stepSize: 20,
								padding: 10,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}],
						xAxes: [{
							ticks: {
								padding: 5,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}]
					}
				}
			});

		}
	}

	var lineChart2 = function(){
		//gradient line chart
		if(jQuery('#lineChart_2').length > 0 ){

			const lineChart_2 = document.getElementById("lineChart_2").getContext('2d');
			//generate gradient
			const lineChart_2gradientStroke = lineChart_2.createLinearGradient(500, 0, 100, 0);
			lineChart_2gradientStroke.addColorStop(0, "rgba(44, 44, 44, 1)");
			lineChart_2gradientStroke.addColorStop(1, "rgba(44, 44, 44, 0.5)");

			Chart.controllers.line = Chart.controllers.line.extend({
				draw: function () {
					draw.apply(this, arguments);
					let nk = this.chart.chart.ctx;
					let _stroke = nk.stroke;
					nk.stroke = function () {
						nk.save();
						nk.shadowColor = 'rgba(0, 0, 128, .2)';
						nk.shadowBlur = 10;
						nk.shadowOffsetX = 0;
						nk.shadowOffsetY = 10;
						_stroke.apply(this, arguments)
						nk.restore();
					}
				}
			});

			lineChart_2.height = 100;

			new Chart(lineChart_2, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [25, 20, 60, 41, 66, 45, 80],
							borderColor: lineChart_2gradientStroke,
							borderWidth: "2",
							backgroundColor: 'transparent',
							pointBackgroundColor: 'rgba(44, 44, 44, 0.5)'
						}
					]
				},
				options: {
					legend: false,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								max: 100,
								min: 0,
								stepSize: 20,
								padding: 10,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}],
						xAxes: [{
							ticks: {
								padding: 5,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}]
					}
				}
			});
		}
	}
	var lineChart3 = function(){
		//dual line chart
		if(jQuery('#lineChart_3').length > 0 ){
			const lineChart_3 = document.getElementById("lineChart_3").getContext('2d');
			//generate gradient
			const lineChart_3gradientStroke1 = lineChart_3.createLinearGradient(500, 0, 100, 0);
			lineChart_3gradientStroke1.addColorStop(0, "rgba(44, 44, 44, 1)");
			lineChart_3gradientStroke1.addColorStop(1, "rgba(44, 44, 44, 0.5)");

			const lineChart_3gradientStroke2 = lineChart_3.createLinearGradient(500, 0, 100, 0);
			lineChart_3gradientStroke2.addColorStop(0, "rgba(255, 92, 0, 1)");
			lineChart_3gradientStroke2.addColorStop(1, "rgba(255, 92, 0, 1)");

			Chart.controllers.line = Chart.controllers.line.extend({
				draw: function () {
					draw.apply(this, arguments);
					let nk = this.chart.chart.ctx;
					let _stroke = nk.stroke;
					nk.stroke = function () {
						nk.save();
						nk.shadowColor = 'rgba(0, 0, 0, 0)';
						nk.shadowBlur = 10;
						nk.shadowOffsetX = 0;
						nk.shadowOffsetY = 10;
						_stroke.apply(this, arguments)
						nk.restore();
					}
				}
			});

			lineChart_3.height = 100;

			new Chart(lineChart_3, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [25, 20, 60, 41, 66, 45, 80],
							borderColor: lineChart_3gradientStroke1,
							borderWidth: "2",
							backgroundColor: 'transparent',
							pointBackgroundColor: 'rgba(44, 44, 44, 0.5)'
						}, {
							label: "My First dataset",
							data: [5, 20, 15, 41, 35, 65, 80],
							borderColor: lineChart_3gradientStroke2,
							borderWidth: "2",
							backgroundColor: 'transparent',
							pointBackgroundColor: 'rgba(254, 176, 25, 1)'
						}
					]
				},
				options: {
					legend: false,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								max: 100,
								min: 0,
								stepSize: 20,
								padding: 10,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}],
						xAxes: [{
							ticks: {
								padding: 5,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}]
					}
				}
			});
		}
	}
	var lineChart03 = function(){
		//dual line chart
		if(jQuery('#lineChart_3Kk').length > 0 ){
			const lineChart_3Kk = document.getElementById("lineChart_3Kk").getContext('2d');
			//generate gradient

			Chart.controllers.line = Chart.controllers.line.extend({
				draw: function () {
					draw.apply(this, arguments);
					let nk = this.chart.chart.ctx;
					let _stroke = nk.stroke;
					nk.stroke = function () {
						nk.save();
						nk.shadowColor = 'rgba(0, 0, 0, 0)';
						nk.shadowBlur = 10;
						nk.shadowOffsetX = 0;
						nk.shadowOffsetY = 10;
						_stroke.apply(this, arguments)
						nk.restore();
					}
				}
			});

			lineChart_3Kk.height = 100;

			new Chart(lineChart_3Kk, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [90, 60, 80, 50, 60, 55, 80],
							borderColor: 'rgba(58,122,254,1)',
							borderWidth: "3",
							backgroundColor: 'rgba(0,0,0,0)',
							pointBackgroundColor: 'rgba(0, 0, 0, 0)'
						}
					]
				},
				options: {
					legend: false,
					elements: {
							point:{
								radius: 0
							}
					},
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								max: 100,
								min: 0,
								stepSize: 20,
								padding: 10,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							},
							borderWidth:3,
							display:false,
							lineTension:0.4,
						}],
						xAxes: [{
							ticks: {
								padding: 5,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}

						}]
					}
				}
			});
		}

	}
	var areaChart1 = function(){
		//basic area chart
		if(jQuery('#areaChart_1').length > 0 ){
			const areaChart_1 = document.getElementById("areaChart_1").getContext('2d');

			areaChart_1.height = 100;

			new Chart(areaChart_1, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [25, 20, 60, 41, 66, 45, 80],
							borderColor: 'rgba(0, 0, 1128, .3)',
							borderWidth: "1",
							backgroundColor: 'rgba(44, 44, 44,1)',
							pointBackgroundColor: 'rgba(0, 0, 1128, .3)'
						}
					]
				},
				options: {
					legend: false,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								max: 100,
								min: 0,
								stepSize: 20,
								padding: 10,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}],
						xAxes: [{
							ticks: {
								padding: 5,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}]
					}
				}
			});
		}
	}
	var areaChart2 = function(){
		//gradient area chart
		if(jQuery('#areaChart_2').length > 0 ){
			const areaChart_2 = document.getElementById("areaChart_2").getContext('2d');
			//generate gradient
			const areaChart_2gradientStroke = areaChart_2.createLinearGradient(0, 1, 0, 500);
			areaChart_2gradientStroke.addColorStop(0, "rgba(238, 60, 60, 0.2)");
			areaChart_2gradientStroke.addColorStop(1, "rgba(238, 60, 60, 0)");

			areaChart_2.height = 100;

			new Chart(areaChart_2, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [25, 20, 60, 41, 66, 45, 80],
							borderColor: "#ff2625",
							borderWidth: "4",
							backgroundColor: areaChart_2gradientStroke
						}
					]
				},
				options: {
					legend: false,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								max: 100,
								min: 0,
								stepSize: 20,
								padding: 5,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}],
						xAxes: [{
							ticks: {
								padding: 5,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}]
					}
				}
			});
		}
	}

	var areaChart3 = function(){
		//gradient area chart
		if(jQuery('#areaChart_3').length > 0 ){
			const areaChart_3 = document.getElementById("areaChart_3").getContext('2d');

			areaChart_3.height = 100;

			new Chart(areaChart_3, {
				type: 'line',
				data: {
					defaultFontFamily: 'Poppins',
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
					datasets: [
						{
							label: "My First dataset",
							data: [25, 20, 60, 41, 66, 45, 80],
							borderColor: 'rgb(44, 44, 44)',
							borderWidth: "1",
							backgroundColor: 'rgba(44, 44, 44,1)'
						},
						{
							label: "My First dataset",
							data: [5, 25, 20, 41, 36, 75, 70],
							borderColor: 'rgb(255, 92, 0)',
							borderWidth: "1",
							backgroundColor: 'rgba(255, 92, 0, .5)'
						}
					]
				},
				options: {
					legend: false,
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true,
								max: 100,
								min: 0,
								stepSize: 20,
								padding: 10,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}],
						xAxes: [{
							ticks: {
								padding: 5,
								fontColor:	'#ffffff',
							},
							gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
						}]
					}
				}
			});
		}
	}

	var radarChart = function(){
		if(jQuery('#radar_chart').length > 0 ){
			//radar chart
			const radar_chart = document.getElementById("radar_chart").getContext('2d');

			const radar_chartgradientStroke1 = radar_chart.createLinearGradient(500, 0, 100, 0);
			radar_chartgradientStroke1.addColorStop(0, "rgba(54, 185, 216, .5)");
			radar_chartgradientStroke1.addColorStop(1, "rgba(75, 255, 162, .5)");

			const radar_chartgradientStroke2 = radar_chart.createLinearGradient(500, 0, 100, 0);
			radar_chartgradientStroke2.addColorStop(0, "rgba(68, 0, 235, .5");
			radar_chartgradientStroke2.addColorStop(1, "rgba(68, 236, 245, .5");

			// radar_chart.height = 100;
			new Chart(radar_chart, {
				type: 'radar',
				data: {
					defaultFontFamily: 'Poppins',
					labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
					datasets: [
						{
							label: "My First dataset",
							data: [65, 59, 66, 45, 56, 55, 40],
							borderColor: '#ffff',
							borderWidth: "1",
							backgroundColor: radar_chartgradientStroke2
						},
						{
							label: "My Second dataset",
							data: [28, 12, 40, 19, 63, 27, 87],
							borderColor: '#ffff',
							borderWidth: "1",
							backgroundColor: radar_chartgradientStroke1
						}
					]
				},
				options: {
					legend: false,
					//maintainAspectRatio: false,
					scale: {
						ticks: {
							beginAtZero: true,
							fontColor:'#ffffff',
						},
						gridLines:{
								color:"rgba(255, 255, 255, 0.1)"
							}
					}
				}
			});
		}
	}
	var pieChart = function(){
		//pie chart
		if(jQuery('#pie_chart').length > 0 ){
			//pie chart
			const pie_chart = document.getElementById("pie_chart").getContext('2d');
			// pie_chart.height = 100;
			new Chart(pie_chart, {
				type: 'pie',
				data: {
					defaultFontFamily: 'Poppins',
					datasets: [{
						data: [45, 25, 20, 10],
						borderWidth: 0,
						backgroundColor: [
							"rgba(44, 44, 44, .9)",
							"rgba(44, 44, 44, .7)",
							"rgba(44, 44, 44,1)",
							"rgba(0,0,0,0.07)"
						],
						hoverBackgroundColor: [
							"rgba(44, 44, 44, .9)",
							"rgba(44, 44, 44, .7)",
							"rgba(44, 44, 44,1)",
							"rgba(0,0,0,0.07)"
						]

					}],
					labels: [
						"one",
						"two",
						"three",
						"four"
					]
				},
				options: {
					responsive: true,
					legend: false,
					//maintainAspectRatio: false
				}
			});
		}
	}
    var doughnutChart = function(){
		if(jQuery('#doughnut_chart').length > 0 ){
			//doughut chart
			const doughnut_chart = document.getElementById("doughnut_chart").getContext('2d');
			doughnut_chart.height = 100;
			new Chart(doughnut_chart, {
				type: 'doughnut',
				data: {
					weight: 5,
					defaultFontFamily: 'Poppins',
					datasets: [{
						data: finalValueforGraKeyObservation,
						borderWidth: 3,
						borderColor: "rgba(255,255,255,1)",
						backgroundColor: [
							"rgba(98, 126, 234, 1)",


						],
						hoverBackgroundColor: [
							"rgba(98, 126, 234, .9)",

						]

					}],
					labels: [
					    "Score",
					    "Out of",


					]
				},
				options: {
					weight: 19,

                     cutoutPercentage: 80,
                rotation: 1 * Math.PI,
                circumference: 1 * Math.PI,
                responsive: true,
					// maintainAspectRatio: false
				}
			});
		}
	}


    // // Doughnut Chart Function
    // var doughnutChartall = function (elementId, dataValues, label1, label2) {
    //     if (jQuery('#' + elementId).length > 0) {
    //         const doughnut_chart = document.getElementById(elementId).getContext('2d');
    //         new Chart(doughnut_chart, {
    //             type: 'doughnut',
    //             data: {
    //                 weight: 10,
    //                 defaultFontFamily: 'Poppins',
    //                 datasets: [{
    //                     data: dataValues,
    //                     borderWidth: 3,
    //                     borderColor: "rgba(255,255,255,1)",
    //                     backgroundColor: [
    //                         "rgba(44, 44, 44, 1)",
    //                         "rgba(98, 126, 234, 1)",
    //                     ],
    //                     hoverBackgroundColor: [
    //                         "rgba(44, 44, 44, 0.9)",
    //                         "rgba(98, 126, 234, .9)",
    //                     ]
    //                 }],
    //                 labels: [
	// 					label1,
    //                     label2,
	// 				]
    //             },
    //             options: {
    //                 weight: 10,
    //                 cutoutPercentage: 60,
    //                 responsive: true,
    //                 maintainAspectRatio: false
    //             }
    //         });
    //     }
    // }



    // Example usage for a data value of 35 and label "Example"


    // // Call the function for each section
    // doughnutChartall("doughnut_chart_1", dougGraphHighRisk, "High Risk", "Over All Risk");
    // doughnutChartall("doughnut_chart_2", dougGraphMediumRisk, "Medium Risk", "Over All Risk");
    // doughnutChartall("doughnut_chart_3", dougGraphLowRisk, "Low Risk", "Over All Risk");

	var polarChart = function(){
		if(jQuery('#polar_chart').length > 0 ){
			//polar chart
			const polar_chart = document.getElementById("polar_chart").getContext('2d');
			// polar_chart.height = 100;
			new Chart(polar_chart, {
				type: 'polarArea',
				data: {
					defaultFontFamily: 'Poppins',
					datasets: [{
						data: [15, 18, 9, 6, 19],
						borderWidth: 0,
						backgroundColor: [
							"rgba(44, 44, 44, 1)",
							"rgba(98, 126, 234, 1)",
							"rgba(238, 60, 60, 1)",
							"rgba(54, 147, 255, 1)",
							"rgba(255, 92, 0, 1)"
						]

					}]
				},
				options: {
					responsive: true,
					//maintainAspectRatio: false
				}
			});

		}
	}



	/* Function ============ */
	return {
		init:function(){
		},


		load:function(){
			barChart1();
            barChart1financialRatio();
            barChart1businessIntelligenc();
            // doughnutChartall();
			barChart2();
			barChart3();
			lineChart1();
			lineChart2();
			lineChart3();
			lineChart03();
			areaChart1();
			areaChart2();
			areaChart3();
			radarChart();
			pieChart();
			doughnutChart();
			polarChart();
		},

		resize:function(){
			// barChart1();
			// barChart2();
			// barChart3();
			// lineChart1();
			// lineChart2();
			// lineChart3();
			// lineChart03();
			// areaChart1();
			// areaChart2();
			// areaChart3();
			// radarChart();
			// pieChart();
			// doughnutChart();
			// polarChart();
		}
	}

}();

jQuery(document).ready(function(){
});

jQuery(window).on('load',function(){
	dlabSparkLine.load();
});

jQuery(window).on('resize',function(){
	//dlabSparkLine.resize();
	setTimeout(function(){ dlabSparkLine.resize(); }, 1000);
});

})(jQuery);
</script>


@endsection
