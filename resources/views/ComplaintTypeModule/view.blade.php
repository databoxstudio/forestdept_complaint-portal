@extends('layouts.app')



@section('content')
<div class="page-content">

<div class="row">
<div class="col-md-12 stretch-card">
<div class="card">
<div class="card-body">
@if (count($errors) > 0)

<div class = "alert alert-danger">

<ul>

@foreach ($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

</div>

@endif


@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message') }}
</div>
@endif
<h6 class="card-title">Add Customer's Measurement</h6>
<form class="forms-sample" action="{{route('complaintsModule.save')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="row">
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">Customer First Name</label>
        <input type="text" class="form-control" id="first_name" name="first_name" value="{{$measurement->first_name}}" autocomplete="off" placeholder="Customer First Name" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">Customer Last Name</label>
        <input type="text" class="form-control" id="last_name" name="last_name" value="{{$measurement->last_name}}" autocomplete="off" placeholder="Customer Last Name" disabled="disabled">
    </div>
</div><!-- Col -->

 <div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">Customer Contact Number</label>
        <input type="text" class="form-control" id="phone_number"  name="phone_number" value="{{$measurement->phone_number}}" autocomplete="off" placeholder="Phone Number" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">Customer Email</label>
        <input type="email" class="form-control" id="email"  name="email" value="{{$measurement->email}}" autocomplete="off" placeholder="Email" disabled="disabled">
    </div>
</div><!-- Col -->

  <div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">Reference By</label>
        <input type="text" class="form-control" id="reference_by" name="reference_by" value="{{$measurement->reference_by}}" autocomplete="off" placeholder="Reference By" disabled="disabled">
    </div>
</div><!-- Col -->

     <div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">Image</label>
        <img src="{{$measurement->profile_image}}" class="form-control">
    </div>
</div><!-- Col -->

    



</div><!-- Row -->




<div class="row">
<h6 class="card-title">Address</h6>
    </div>
<div class="row">

<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label"> Address Line 1</label>
       <input type="text" class="form-control" id="local_address_line_1"  value="{{$measurement->local_address_line_1}}" name="local_address_line_1" autocomplete="off" placeholder="Address Line 1" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label"> Address Line 2</label>
        <input type="text" class="form-control" id="local_address_line_2" value="{{$measurement->local_address_line_2}}" name="local_address_line_2" autocomplete="off" placeholder="Address Line 2" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">Country</label>
       
       
      <input type="text" class="form-control" id="local_address_country" value="{{$measurement->local_address_country}}" name="local_address_country" autocomplete="off" placeholder="Country" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">State</label>
       
       
        <input type="text" class="form-control" id="local_address_state" value="{{$measurement->local_address_state}}" name="local_address_state" autocomplete="off" placeholder="State" disabled="disabled">
    
    </div>
</div><!-- Col -->
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">City</label>
        <input type="text" class="form-control" id="local_address_city" value="{{$measurement->local_address_city}}" name="local_address_city" autocomplete="off" placeholder="City" disabled="disabled">


        
    </div>
</div><!-- Col -->
<div class="col-sm-4">
    <div class="form-group">
        <label class="control-label">Pincode</label>
        <input type="number" class="form-control" id="local_address_pincode" value="{{$measurement->local_address_pincode}}" name="local_address_pincode" autocomplete="off" placeholder="Pincode" disabled="disabled">
    </div>
</div><!-- Col -->
</div><!-- Row -->

<div class="row">
<h6 class="card-title">Measurement</h6>
    </div>



    <div class="row">

 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Delivery Date</label>
        <input type="text" class="form-control" id="delivery_date" name="delivery_date" value="{{$measurement->delivery_date}}" autocomplete="off" placeholder="Delivery Date" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"/ disabled="disabled">
    </div>
</div><!-- Col -->

 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Measurement Date</label>
        <input type="text" class="form-control" id="measurement_date"  name="measurement_date" value="{{$measurement->measurement_date}}" autocomplete="off" placeholder="Measurement Date" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"/ disabled="disabled">
    </div>
</div><!-- Col -->

</div><!-- Row -->
<div class="row">


<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label"> General Length</label>
       <input type="text" class="form-control" id="general_length"  name="general_length" value="{{$measurement->general_length}}" autocomplete="off" placeholder="General Length" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Shoulder/Teera </label>
        <input type="text" class="form-control" id="shoulder"  name="shoulder" value="{{$measurement->shoulder}}" autocomplete="off" placeholder="Shoulder" disabled="disabled">
    </div>
</div><!-- Col -->

<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Knee Length </label>
        <input type="text" class="form-control" id="knee_length"  name="knee_length" value="{{$measurement->knee_length}}" autocomplete="off" placeholder="Knee Length" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Front Across </label>
        <input type="text" class="form-control" id="front_across"  name="front_across" value="{{$measurement->front_across}}" autocomplete="off" placeholder="Pincode" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Ankle Length </label>
        <input type="text" class="form-control" id="ankle_length"  name="ankle_length" value="{{$measurement->ankle_length}}" autocomplete="off" placeholder="Ankle Length" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Back Across </label>
        <input type="text" class="form-control" id="back_across"  name="back_across" value="{{$measurement->back_across}}" autocomplete="off" placeholder="Back Across" disabled="disabled">
    </div>
</div><!-- Col -->
  <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Full Length </label>
        <input type="text" class="form-control" id="full_length"  name="full_length" value="{{$measurement->full_length}}" autocomplete="off" placeholder="Full Length" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label"> Front Neck</label>
        <input type="text" class="form-control" id="front_neck"  name="front_neck" value="{{$measurement->front_neck}}" autocomplete="off" placeholder="Front Neck" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Upper Chest </label>
        <input type="text" class="form-control" id="upper_chest"  name="upper_chest" value="{{$measurement->upper_chest}}" autocomplete="off" placeholder="Upper Chest" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Back Neck</label>
          <input type="text" class="form-control" id="back_neck"  name="back_neck" value="{{$measurement->back_neck}}" autocomplete="off" placeholder="Back Neck" disabled="disabled">
         
    </div>
</div><!-- Col -->

 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Chest </label>
        <input type="text" class="form-control" id="chest"  name="chest" value="{{$measurement->chest}}" autocomplete="off" placeholder="Chest" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Full Sleeve + Muri </label>
        <input type="text" class="form-control" id="full_sleeve_muri"  name="full_sleeve_muri" value="{{$measurement->full_sleeve_muri}}" autocomplete="off" placeholder="Full Sleeve + Muri" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Under Chest/Waist </label>
        <input type="text" class="form-control" id="chest"  name="under_chest_waist" value="{{$measurement->under_chest_waist}}" autocomplete="off" placeholder="Under Chest/Waist" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Sleeve + Muri </label>
        <input type="text" class="form-control" id="sleeve_muri"  name="sleeve_muri" value="{{$measurement->sleeve_muri}}" autocomplete="off" placeholder="Sleeve + Muri" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Stomach/Low Waist </label>
        <input type="text" class="form-control" id="low_waist"  name="low_waist" value="{{$measurement->low_waist}}" autocomplete="off" placeholder="Low Waist" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Elbow Sleeve + Muri</label>
        <input type="text" class="form-control" id="elbow_sleeve_muri"  name="elbow_sleeve_muri" value="{{$measurement->elbow_sleeve_muri}}" autocomplete="off" placeholder="Elbow Sleeve + Muri" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Hip </label>
        <input type="text" class="form-control" id="hip"  name="hip" value="{{$measurement->hip}}" autocomplete="off" placeholder="Hip" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Sleeve + Muri </label>
        <input type="text" class="form-control" id="sleeve_muri_2"  name="sleeve_muri_2" value="{{$measurement->sleeve_muri_2}}" autocomplete="off" placeholder="Sleeve + Muri" disabled="disabled">
    </div>
</div><!-- Col -->
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Dart Point </label>
        <input type="text" class="form-control" id="dart_point"  name="dart_point" value="{{$measurement->dart_point}}" autocomplete="off" placeholder="Dart Point" disabled="disabled">
    </div>
</div><!-- Col -->

<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label"> Arm Hole</label>
       <input type="text" class="form-control" id="arm_hole"  name="arm_hole" value="{{$measurement->arm_hole}}" autocomplete="off" placeholder="Arm Hole" disabled="disabled">
    </div>
</div><!-- Col -->

<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Shoulder To Waist </label>
        <input type="text" class="form-control" id="shoulder_to_waist"  name="shoulder_to_waist" value="{{$measurement->delivery_date}}" autocomplete="off" placeholder="Shoulder To Waist" disabled="disabled">
    </div>
</div><!-- Col -->
</div>
<div class="row">
<h6 class="card-title">Bottom from Naval/Low Waist</h6>
</div>

<div class="row">



  <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Ankle Length</label>
        <input type="text" class="form-control" id="ankle"  name="ankle" value="{{$measurement->ankle}}" autocomplete="off" placeholder="Ankle" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Thigh </label>
        <input type="text" class="form-control" id="upper_thigh"  name="upper_thigh" value="{{$measurement->upper_thigh}}" autocomplete="off" placeholder="Upper Thigh" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Pant Length </label>
        <input type="text" class="form-control" id="pant_waist"  name="pant_waist" value="{{$measurement->pant_waist}}" autocomplete="off" placeholder="Pant Waist" disabled="disabled">
    </div>
</div><!-- Col -->
  <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Calf </label>
        <input type="text" class="form-control" id="calf"  name="calf" value="{{$measurement->calf}}" autocomplete="off" placeholder="Calf" disabled="disabled">
    </div>
</div><!-- Col -->



<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Salwar Length </label>
        <input type="text" class="form-control" id="salwar_length"  name="salwar_length" value="{{$measurement->salwar_length}}" autocomplete="off" placeholder="Salwar Length" disabled="disabled">
    </div>
</div><!-- Col -->
 

<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Knee </label>
        <input type="text" class="form-control" id="knee"  name="knee" value="{{$measurement->knee}}" autocomplete="off" placeholder="Knee" disabled="disabled">
    </div>
</div><!-- Col -->
 
<div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Shrara Length</label>
        <input type="text" class="form-control" id="shrara_length"  name="shrara_length" value="{{$measurement->shrara_length}}" autocomplete="off" placeholder="Shrara Length" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Muri</label>
        <input type="text" class="form-control" id="muri"  name="muri" value="{{$measurement->muri}}" autocomplete="off" placeholder="Muri" disabled="disabled">
    </div>
</div><!-- Col -->
   <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Lehnga Length </label>
        <input type="text" class="form-control" id="lehnga_length"  name="lehnga_length" value="{{$measurement->lehnga_length}}" autocomplete="off" placeholder="Lehnga Length" disabled="disabled">
    </div>
</div><!-- Col -->

   <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Heels </label>
        <input type="text" class="form-control" id="heels"  name="heels" value="{{$measurement->heels}}" autocomplete="off" placeholder="Heels" disabled="disabled">
    </div>
</div><!-- Col -->
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Paint Waist </label>
        <input type="text" class="form-control" id="waist"  name="waist" value="{{$measurement->waist}}" autocomplete="off" placeholder="Waist" disabled="disabled">
    </div>
</div><!-- Col -->
    <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Lehnga Waist </label>
        <input type="text" class="form-control" id="lehnga_waist"  name="lehnga_waist" value="{{$measurement->lehnga_waist}}" autocomplete="off" placeholder="Lehnga Waist" disabled="disabled">
    </div>
</div><!-- Col -->
</div>
<div class="row">
<h6 class="card-title">Blouse</h6>
</div>


<div class="row">
 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Blouse Length </label>
        <input type="text" class="form-control" id="blouse_length"  name="blouse_length" value="{{$measurement->blouse_length}}" autocomplete="off" placeholder="Blouse Length" disabled="disabled">
    </div>
</div><!-- Col -->
    <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">F.N. </label>
        <input type="text" class="form-control" id="f_n"  name="f_n" value="{{$measurement->f_n}}" autocomplete="off" placeholder="F.N." disabled="disabled">
    </div>
</div><!-- Col -->

 <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">Peticoat Length </label>
        <input type="text" class="form-control" id="peticoat_length"  name="peticoat_length" value="{{$measurement->peticoat_length}}" autocomplete="off" placeholder="Peticoat Length" disabled="disabled">
    </div>
</div><!-- Col -->
    <div class="col-sm-6">
    <div class="form-group">
        <label class="control-label">B.N. </label>
        <input type="text" class="form-control" id="b_n"  name="b_n" value="{{$measurement->b_n}}" autocomplete="off" placeholder="B.N." disabled="disabled">
    </div>
</div><!-- Col -->




 




 
 







</div><!-- Row -->


<a class="btn btn-light" href="{{route('customersModule.customers')}}">Back</a>
<button type="submit" class="btn btn-primary mr-2">Create Customer</button>
</form>
</div>
</div>
</div>
</div>



</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$( function() {
$( "#delivery_date" ).datepicker({
minDate: 0,
dateFormat: 'dd-mm-yy'
});




$( "#measurement_date" ).datepicker({
minDate: 0,
dateFormat: 'dd-mm-yy',
});



} );
</script>


@endsection
