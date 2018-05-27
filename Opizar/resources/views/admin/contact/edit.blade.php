@extends('admin.index')
@section('content')
	<section class="content-header">
	            <div class="box-header with-border">
	              <h2 class="box-title">Edit contact</h2>
	              <p>Description some help information?</p>
		           	 @if ($errors->any())
					    <div class="callout callout-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
	            </div>
	        </section>
	        <section class="content">
            <div class="box-body"">
            	
		        <!-- buttons for language transitions Begin -->
            	<div class="form-group" id="lang-buttons"><button  data-lang='lang-en' class="btn btn-primary " >EN</button><button  data-lang='lang-fr' class="btn" >FR</button><button  data-lang='lang-jp' class="btn" >JP</button></div>
            	<!-- buttons for language transitions End-->
	            <form method="post" action="" enctype="multipart/form-data" >
	            {{ csrf_field() }}
	            	<div class="parent_form">
	            	<!-- lang-en Begin -->
		            <div class="lang-en">
		            	<div class="form-group @if ($errors->has('phone_number')) has-error @endif">
				            <label>Phone number</label>
				            <input type="text" class="form-control" name="phone_number" value="@if(old('phone_number')){{old('phone_number')}}@else{{ $contact->phone_number }} @endif" placeholder="Phone number">
			            </div>
			            <div class="form-group @if ($errors->has('main_mail')) has-error @endif">
				            <label>Main mail</label>
				            <input type="text" class="form-control" name="main_mail" value="@if(old('main_mail')){{old('main_mail')}}@else{{$contact->main_mail}} @endif" placeholder="Main mail">
			            </div>
			            <div class="form-group @if ($errors->has('footer_mail')) has-error @endif">
				            <label>Footer mail</label>
				            <input type="text" class="form-control" name="footer_mail" value="@if(old('footer_mail')){{old('footer_mail')}} @else {{ $contact->footer_mail }} @endif" placeholder="Footer mail">
			            </div>

			            <div class="form-group 	@if ($errors->has('ltd_name')) has-error @endif">
				            <label>Name</label>
				            <input type="text" class="form-control" name="ltd_name" value="@if(old('ltd_name')){{old('ltd_name')}} @else {{ $contact->ltd_name }} @endif" placeholder="Name">
			            </div>
		            
			            <div class="form-group @if ($errors->has('country')) has-error @endif">
				            <label>Country</label>
				            <input type="text" class="form-control" name="country" value="@if(old('country')){{ old('country')}} @else {{ $contact->country }} @endif" placeholder="Country">
			            </div>

			             <div class="form-group @if ($errors->has('address')) has-error @endif">
				            <label>Address</label>
				            <input type="text" class="form-control" name="address" value="@if(old('address')){{ old('address')}} @else {{ $contact->address }} @endif" placeholder="Address">
			            </div>
			         
					</div>
				    <!-- lang-en END -->

		            <!-- lang-fr Begin -->
		            <div class="lang-fr myhidde">
		            	<div class="form-group 	@if ($errors->has('ltd_name_fr')) has-error @endif">
				            <label>name-fr</label>
				            <input type="text" class="form-control" name="ltd_name_fr" value="@if(old('ltd_name_fr')){{ old('ltd_name_fr')}} @else {{ $contact_fr->ltd_name }} @endif" placeholder="Name">
			            </div>

			            <div class="form-group @if ($errors->has('country_fr')) has-error @endif">
				            <label>Country-fr</label>
				            <input type="text" class="form-control" name="country_fr" value="@if(old('country_fr')){{ old('country_fr')}} @else {{ $contact_fr->country }} @endif" placeholder="Country">
			            </div>

			             <div class="form-group @if ($errors->has('address_fr')) has-error @endif">
				            <label>Address-fr</label>
				            <input type="text" class="form-control" name="address_fr" value="@if(old('address_fr')){{ old('address_fr')}} @else {{ $contact_fr->address }} @endif" placeholder="Address">
			            </div>
		            </div>
		             <!-- lang-fr End -->

		             <!-- lang-jp Begin -->
		            <div class="lang-jp myhidde">
						<div class="form-group 	@if ($errors->has('ltd_name_jp')) has-error @endif">
				            <label>name-jp</label>
				            <input type="text" class="form-control" name="ltd_name_jp" value="@if(old('ltd_name_jp')){{ old('ltd_name_jp')}} @else {{ $contact_jp->ltd_name }} @endif" placeholder="Name">
			            </div>

			            <div class="form-group @if ($errors->has('country_jp')) has-error @endif">
				            <label>Country-fr</label>
				            <input type="text" class="form-control" name="country_jp" value="@if(old('country_jp')){{ old('country_jp')}} @else {{ $contact_jp->country }} @endif" placeholder="Country">
			            </div>

			             <div class="form-group @if ($errors->has('address_jp')) has-error @endif">
				            <label>Address-fr</label>
				            <input type="text" class="form-control" name="address_jp" value="@if(old('address_jp')){{ old('address_jp')}} @else {{ $contact_jp->address }} @endif" placeholder="Address">
			            </div>	            
		            </div>
		            <!-- lang-fr End -->
		            </div>
		            <div class="form-group">
		                <button type="submit" class="btn btn-primary btn-block">Edit</button>
		            </div>
		        
	            </form>

            </div>
            <!-- /.box-body -->
  		</section>
@endsection
@section('footer')