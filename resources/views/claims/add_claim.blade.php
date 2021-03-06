@extends('layouts.admin')

@section('title', 'New Claim')

@section('sidebar')
	@include('layouts.sidemenu')
@stop

@section('content')
<script type="text/javascript">
    $(document).ready(function(){
        $('#veh_tab').hide();
        //Enabling the Uploading files Section
        //files();
    });
</script>

<style type="text/css">
    br{
        padding-top: 100px;
    }
</style>
<!-- Container -->
<div class="col-md-8">
    <form class="form-horizontal" method="POST" action="{{route('save_claim')}}" id="save_form">
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <div class="row" style="padding-top: 10px;">
            <div class="well well-sm pull-right" style="text-align: center;">
                <strong>CLAIM No.</strong> <input type="text" class="form-control" name="claim_no" value="{{$claim_id}}">
            </div>
        </div>
        <hr>
    <div>
          <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" >
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Client</a></li>
            <li role="presentation"><a href="#negparty" aria-controls="negparty" role="tab" data-toggle="tab">Negligent Party</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Claim</a></li>
            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Insurance</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Files</a></li>
            <li id="veh_tab" role="presentation"><a href="#vehicle" aria-controls="vehicle" role="tab" data-toggle="tab">Vehicle</a></li>
        </ul>
        <div class="tab-content">
        <!-- ************************************* Client Start ************************************** -->
            <div role="tabpanel" class="tab-pane active" id="home">
                <br>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" id="c_detail" name="c_id">
                                <option value="">Select Client</option>
                                @foreach($client as $clients)
                                <option value="{{$clients->id}}">{{$clients->lname}}, {{$clients->fname}}</option>
                                @endforeach
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><a href="{{route('new_client_form')}}"><i class="glyphicon glyphicon-plus"></i></a></span>
                        </div>
                        <div class="col-md-6 fade">
                            <div class="input-group">
                                <input type="text" name="c_id" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Firstname</label>
                        <input type="text" class="form-control" id="c_fname" name="c_fname" value="">
                    </div><div class="col-md-6" >
                        <label>Lastname</label>
                        <input type="text" class="form-control" id="c_lname" name="c_lname" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>DOB</label>
                        <input type="date" class="form-control" id="c_dob" name="c_dob" value="">
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <label>TRN</label>
                            <input type="text" class="form-control" id="ins_trn" name="ins_trn" value="">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Telephone (Mobile)</label>
                        <input type="number" class="form-control" id="c_mobile" name="c_mobile" value="">
                    </div>
                    <div class="col-md-6" >
                        <label>Telephone (Fixed)</label>
                        <input type="text" class="form-control" id="c_fixed" name="c_fixed" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12" >
                        <label>Address</label>
                        <textarea class="form-control" cols="15" rows="6" name="c_address" id="c_address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Parish</label>
                        <input type="text" class="form-control" id="c_parish" name="c_parish" value="">
                    </div>
                    <div class="col-md-6" >
                        <label>Occupation</label>
                        <input type="text" class="form-control" id="c_occ" name="c_occ" value="">
                    </div>
                </div>
            </div>
        <!-- ************************************* Client Stop **************************************** -->
        <!-- ************************************* NegParty Tab Start ************************************** -->
            <div role="tabpanel" class="tab-pane" id="negparty">
                <br>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="neg_pty_id" id="neg_pty_detail">
                                <option value="0">Select Client</option>
                               @foreach($client as $clients)
                                <option value="{{$clients->id}}">{{$clients->lname}}, {{$clients->fname}}</option>
                                @endforeach
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><a href="{{route('new_client_form')}}"><i class="glyphicon glyphicon-plus"></i></a></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon">TRN</span>
                            <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1" name="neg_pty_trn" id="neg_pty_trn" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Firstname</label>
                        <input type="text" class="form-control" id="neg_pty_fname" name="neg_pty_fname" value="">
                    </div>
                    <div class="col-md-6" >
                        <label>Lastname</label>
                        <input type="text" class="form-control" id="neg_pty_lname" name="neg_pty_lname" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>DOB</label>
                        <input type="date" class="form-control" name="neg_pty_dob" id="neg_pty_dob" value="">
                    </div>
                    <div class="col-md-6" >
                        <label>Telephone (Mobile)</label>
                        <input type="number" class="form-control" name="neg_pty_mobile" id="neg_pty_mobile" value="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Occupation</label>
                        <input type="text" class="form-control" name="neg_pty_occ" id="neg_pty_occ" value="">
                    </div>
                    <div class="col-md-6" >
                        <label>Telephone (Fixed)</label>
                        <input type="number" class="form-control" name="neg_pty_fixed" value="" id="neg_pty_fixed" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12" >
                        <label>Address</label>
                        <textarea class="form-control" cols="15" rows="6" name="neg_pty_address" id="neg_pty_address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Parish</label>
                        <input type="text" class="form-control" name="neg_pty_parish" value="" id="neg_pty_parish">
                    </div>
                    <div class="col-md-6" >
                        <label>Occupation</label>
                        <input type="text" class="form-control" id="c_occ" name="c_occ" value="">
                    </div>
                </div>
            </div>
        <!-- ********************************* Negligent Party Stop **************************************** -->
        <!-- ************************************* Insurance Tab Start ************************************** -->
            <div role="tabpanel" class="tab-pane" id="messages">
            <label><h4>Client</h4></label>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="insurance_co" id="insurance_co">
                                <option value="">Insurance Company</option>
                                @foreach($insCo as $ins)
                                <option value="{{$ins->id}}">{{$ins->name}}</option>
                                @endforeach
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><a href="#" data-toggle="modal" data-target="#dialog-form" data-whatever="@request"><i class="glyphicon glyphicon-plus"></i></a></span>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="insurance_br" id="insurance_br">
                                <option value="">Select Branch</option>
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-plus"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Policy Type</label>
                        <select class="form-control" name="insurance_pol_type">
                            <option value="1">Comprehensive</option>
                            <option value="2">Third Party</option>
                            <option value="3">Act</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Policy Number</label>
                        <input type="text" class="form-control" placeholder="Policy #" name="policy_no" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Policy Start Date</label>
                        <input type="date" class="form-control" name="pol_s_date">
                    </div>
                    <div class="col-md-6">
                        <label>Policy End Date</label>
                        <input type="date" class="form-control" name="pol_e_date">
                    </div>
                </div>
                <strong><h4>Negligent Party</h4></strong>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="negparty_insurance_co" id="negparty_insurance_co">
                                <option>Insurance Company</option>
                                @foreach($insCo as $ins)
                                    <option value="{{$ins->id}}">{{$ins->name}}</option>
                                @endforeach
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-plus"></i></span>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="negparty_insurance_br" id="negparty_insurance_br">
                                <option value="">Select Branch</option>
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-plus"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Policy Type</label>
                        <select class="form-control" name="negparty_insurance_pol_type">
                            <option value="1">Comprehensive</option>
                            <option value="2">Third Party</option>
                            <option value="3">Act</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Policy Number</label>
                        <input type="text" class="form-control" placeholder="Policy #" name="negparty_policy_no" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Policy Start Date</label>
                        <input type="date" class="form-control" name="negparty_s_date">
                    </div>
                    <div class="col-md-6">
                        <label>Policy End Date</label>
                        <input type="date" class="form-control" name="negparty_e_date">
                    </div>
                </div>
            </div>
        <!-- ************************************* Insurance Tab Stop ************************************** -->
        <!-- ************************************* Claim Tab Start ************************************** -->
            <div role="tabpanel" class="tab-pane" id="profile">
            <br>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Claim Type</label>
                         <select class="form-control" name="claim_type" id="claim_type">
                            <option value="Personal Injury">Personal Injury</option>
                            <option value="Vehicular Accident">Vehicular Accident</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6" >
                        <label>Area</label>
                        <input type="text" class="form-control" name="acc_area">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Accident Date</label>
                        <input type="date" class="form-control" name="acc_date">
                    </div>
                    <div class="col-md-3" >
                        <label>Time</label>
                        <input type="time" class="form-control" name="acc_time">
                    </div>
                    <div class="col-md-3" >
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value=1>Open</option>
                            <option value=2>Pending</option>
                            <option value=3>Closed</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12" >
                        <label>Accident Detail</label>
                        <textarea cols="15" rows="6" class="form-control"  name="acc_detail"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Parish</label>
                        <select class="form-control" name="acc_parish">
                            <option value=1>Select Client</option>
                            <option value=2>Option 2</option>
                            <option value=3>Option 3</option>
                        </select>
                    </div>
                    <div class="col-md-6" >
                        <label>Police Station</label>
                        <input type="text" class="form-control" name="station_id">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6" >
                        <label>Officer</label>
                        <input type="text" name="inv_off" class="form-control">
                    </div>
                </div>
            </div>
        <!-- ************************************* Claim Tab Stop ******************************************* -->
        <!-- ************************************* Insurance Tab Start ************************************** -->
        <div role="tabpanel" class="tab-pane" id="messages">
            <label><h4>Client</h4></label>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="insurance_co" id="insurance_co">
                                <option value="">Insurance Company</option>
                                @foreach($insCo as $ins)
                                <option value="{{$ins->id}}">{{$ins->name}}</option>
                                @endforeach
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><a href="#" data-toggle="modal" data-target="#dialog-form" data-whatever="@request"><i class="glyphicon glyphicon-plus"></i></a></span>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="insurance_br" id="insurance_br">
                                <option value="">Select Branch</option>
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-plus"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Policy Type</label>
                        <select class="form-control" name="insurance_pol_type">
                            <option value="1">Comprehensive</option>
                            <option value="2">Third Party</option>
                            <option value="3">Act</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Policy Number</label>
                        <input type="text" class="form-control" placeholder="Policy #" name="policy_no" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Policy Start Date</label>
                        <input type="date" class="form-control" name="pol_s_date">
                    </div>
                    <div class="col-md-6">
                        <label>Policy End Date</label>
                        <input type="date" class="form-control" name="pol_e_date">
                    </div>
                </div>
                <strong><h4>Negligent Party</h4></strong>
                <div class="form-group">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="negparty_insurance_co" id="negparty_insurance_co">
                                <option>Insurance Company</option>
                                @foreach($insCo as $ins)
                                    <option value="{{$ins->id}}">{{$ins->name}}</option>
                                @endforeach
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-plus"></i></span>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control" name="negparty_insurance_br" id="negparty_insurance_br">
                                <option value="">Select Branch</option>
                            </select>
                            <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-plus"></i></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Policy Type</label>
                        <select class="form-control" name="negparty_insurance_pol_type">
                            <option value="1">Comprehensive</option>
                            <option value="2">Third Party</option>
                            <option value="3">Act</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Policy Number</label>
                        <input type="text" class="form-control" placeholder="Policy #" name="negparty_policy_no" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label>Policy Start Date</label>
                        <input type="date" class="form-control" name="negparty_s_date">
                    </div>
                    <div class="col-md-6">
                        <label>Policy End Date</label>
                        <input type="date" class="form-control" name="negparty_e_date">
                    </div>
                </div>
            </div>
        <!-- ************************************* Insurance Tab Stop ************************************** -->
            <div role="tabpanel" class="tab-pane" id="settings">
                <br>
                <div class="form-group">
                    <div class="col-md-8">
                        <textarea rows="8" cols="15" class="form-control">Add files</textarea>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('file_form',['claimID'=>$claim_id])}}"><img src="{{URL::asset('images\add_icon_48.png')}}" /></a>
                    </div>
                </div>
               
            </div>
            <!-- ************************************* Files Tab Stop ************************************** -->
            <!-- ************************************* Vehicle Tab Start ************************************** -->
            <div role="tabpanel" class="tab-pane" id="vehicle">
                <br>
                <h1>Vehicle</h1>
               
            </div>
            <!-- ************************************* Vehicle Tab Stop ************************************** -->
        </div>
    </div>
        <div class="form-group" >
            <div class="col-md-12">
                <div class="pull-right" >
                    <input type="image" onclick="submitForm();" src="{{URL::asset('images\save_icon_48.png')}}">
                </div>
            </div>
        </div>
    </form>
</div>
<div class="col-md-4">
	<div class="thumbnail">
        <img src="http://placehold.it/320x150" alt="">
        <div class="caption">
        	<h4 class="pull-right">$24.99</h4>
            <h4><a href="#">First Product</a></h4>
            <p>See more snippets like this online store item at <a target="_blank" href="#">Bootsnipp - http://bootsnipp.com</a>.</p>
        </div>
        <div class="ratings">
        	<p class="pull-right">15 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
    </div>
    <div class="thumbnail">
        <img src="http://placehold.it/320x150" alt="">
        <div class="caption">
            <h4 class="pull-right">$24.99</h4>
            <h4><a href="#">First Product</a></h4>
            <p>See more snippets like this online store item at <a target="_blank" href="#">Bootsnipp - http://bootsnipp.com</a>.</p>
        </div>
        <div class="ratings">
            <p class="pull-right">15 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
    </div>
</div>

<!-- ============================================= Modal Form Start================================= -->
      <!--  <div id="upload-form" title="Upload Files" class="modal fade">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Attach Files</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" name="file_form" id="upload-form" action="{{--route('upload_files')--}}" enctype="multipart/form-data">
                            <div class="form-group" >
                                <div class="col-md-12">
                                    <label for="cfiles">Select Files</label>
                                    <input type="file" class="form-control" id="doc">
                                    <input type="text" name="bulb" value="New Bilb" class="form-control" />
                                </div>
                                <progress id="prog" value="0" max="100" style="display: none;"></progress>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12" style="text-align: center">
                                    <input data-dismiss="modal" type="button" id="upload-file" class="btn btn-primary" value="Upload">  
                                </div>
                            </div>  
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
<!-- ============================================= Modal Form End================================= -->
<script type="text/javascript">
$veh_tab = 0;

/*$('#upload-file').on('click', function(){
    
    var form = document.getElementById('upload-form');
    form.submit();
    //console.log($('#doc').val());
    $.ajax({
        type:"GET",
        url:("{{route('upload')}}"),
        data: new FormData(.serialize()),
        contentType:false,
        enctype:"multipart/form",
        processData:false,
        beforeSend:function(){
            $('#prog').show();
            $('#prog').attr('value', '0');
        },
        uploadProgress:function(event, position, total, percentComplete){
            $('#prog').attr('value', percentComplete);
        },
        success:function(data){
            console.log(data);
        }
    });

});*/
    function submitForm(){
       var form = document.getElementById('save_form');
       form.submit();
    };

    function submitInsurance(){
        var form = document.getElementById('ins_form');
        form.submit();
    }

    $('#c_detail').on('change', function(){ //Get the client information
        $user_id = $('#c_detail').val();
        if($user_id != ""){
            $.ajax({
                type: "GET",
                url:("{{route('get_user_detail')}}"),
                data:{uid:$user_id},
                success:function(my_data){
                    $('#c_fname').val(my_data.fname);
                    $('#c_lname').val(my_data.lname);
                    $('#c_dob').val(my_data.DOB);
                    $('#ins_trn').val(my_data.trn);
                    $('#c_mobile').val(my_data.tel_d);
                    $('#c_fixed').val(my_data.tel_l);
                    $('#c_address').val(my_data.address1);
                    $('#c_parish').val(my_data.parish_id);
                    $('#c_occ').val(my_data.occ_id);
                    //alert($user_id);
                }
            });
        }
    });
    $('#neg_pty_detail').on('change', function(){ //Get the Negligent Party information
        $user_id = $('#neg_pty_detail').val();

        if($user_id != ""){
            $.ajax({
                type: "GET",
                url:("{{route('get_user_detail')}}"),
                data:{uid:$user_id},
                success:function(my_data){
                    $('#neg_pty_fname').val(my_data.fname);
                    $('#neg_pty_lname').val(my_data.lname);
                    $('#neg_pty_dob').val(my_data.DOB);
                    $('#neg_pty_trn').val(my_data.trn);
                    $('#neg_pty_mobile').val(my_data.tel_d);
                    $('#neg_pty_fixed').val(my_data.tel_l);
                    $('#neg_pty_address').val(my_data.address1);
                    $('#neg_pty_parish').val(my_data.parish_id);
                    $('#neg_pty_occ').val(my_data.occ_id);
                }
            });
        }
    });

    $('#insurance_co').on('change', function(){ //Client Insurance Company Branch selector
        $ins = $('#insurance_co').val();
        $branch = $('#insurance_br');
        if($ins != ""){
             $.ajax({
                type: "GET",
                url:("{{route('get_ins_branch')}}"),
                data:{id:$ins},
                success:function(my_data){
                    $branch.empty();
                    $.each(my_data, function(i, item){
                        $branch.append('<option value="' + item.id + '">'+ item.name +'</option>');
                    });
                }
            });
        }
    }); 
    $('#negparty_insurance_co').on('change', function(){ //Neligent Party Insurance Branch selector
        $ins = $('#negparty_insurance_co').val();
        $branch = $('#negparty_insurance_br');
        //alert($ins);
        if($ins != ""){
             $.ajax({
                type: "GET",
                url:("{{route('get_ins_branch')}}"),
                data:{id:$ins},
                success:function(my_data){
                    console.log(my_data);
                    $branch.empty();
                    $.each(my_data, function(i, item){
                        $branch.append('<option value="' + item.id + '">'+ item.name + '</option>');
                    });
                }
            });
        }
    });

    $('#claim_type').on('change', function(){
        $opt = $('#claim_type').val();
        //alert($('#claim_type').val());
        if($veh_tab == 0 && $opt == "Vehicular Accident"){
            $('#veh_tab').show();
        }else{
            $('#veh_tab').hide();
        }
    });
</script>
@endsection