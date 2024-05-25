@extends('layouts.master')
@section('content')
<div class="content-area pb-1">
	<div class="profile-header mb-1">
		<div class="profile-header-cover img-cover" style="background-image: url(img/photos-1/4.jpg);"></div>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<div class="card profile-card">
					<div class="profile-avatar">
						<img src="{{ asset('UploadedImages/users/').'/'.Auth::user()->profileImage }}" alt="">
					</div>
					<div class="card-block">
						<h4 class="mb-0-25">{{ Auth::user()->name }}</h4>
					</div>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>
								{{Auth::user()->bio}}
							</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#" >
							<i class="ti-worlds mr-0-5"></i>
							<span>شماره تماس:</span>
							<span style="direction: ltr; text-align: left">{{Auth::user()->phone}}</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>نام کاربری:</span>
							<span>{{Auth::user()->email}}</span>
						</a>
					</ul>
					<ul class="list-group">
						<a class="list-group-item" href="#">
							<i class="ti-worlds mr-0-5"></i>
							<span>آدرس:</span>
							<span>{{Auth::user()->country}}</span>
						</a>
					</ul>
				</div>
				<!-- Who to follow Start-->
				@include('profile.test')
				<!-- Who to follow End-->
			</div>

			<div class="col-sm-2 col-md-9" style="padding-left: 32px; padding-right: 0px">
				<div class="card mb-0 col-sm-9"></br>
					@include('layouts.errors')
					<ul class="nav nav-tabs nav-tabs-2 profile-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#personalInfo" role="tab">ویرایش اطلاعات</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#change-profile-picture" role="tab">تغییر عکس</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#change-password" role="tab">تغییر گذرواژه</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#my-posts" role="tab">دلنوشته ها</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#my-ads" role="tab">آگاهی ها</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="personalInfo" role="tabpanel">
							@include('profile.personalInfo')
						</div>
						<div class="tab-pane card-block" id="change-profile-picture" role="tabpanel">
							@include('profile.change-profile-picture')
						</div>
						<div class="tab-pane card-block" id="change-password" role="tabpanel">
							@include('profile.change-password')
						</div>
						<div class="tab-pane card-block" id="my-posts" role="tabpanel">
							@include('profile.my-posts')
						</div>
						<div class="tab-pane card-block" id="my-ads" role="tabpanel">
							@include('profile.my-ads')
						</div>
					</div>
				</div>
				</div>
			</div>
	</div>
</div>
@endsection
