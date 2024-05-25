@extends('layouts.master')
@section('content')

<div class="content-area py-1">
	<div class="container-fluid">
		<h4>لیست کاربران</h4>
		<ol class="breadcrumb no-bg mb-1">
			<li class="breadcrumb-item"><a href="">افزودن کاربر جدید</a></li>
			<li class="breadcrumb-item"><a href="">لیست کاربران</a></li>
			<li class="breadcrumb-item active">کاربران مسدود شده</li>
		</ol>

		<div class="box box-block bg-white">
			<div class="overflow-x-auto">
				<table class="table table-striped table-bordered dataTable" id="table-3">
					<thead>
						<tr>
							<td style="width: 50px !important; ">عکس</td>
							<th>نام</th>
							<th>نام خانوادگی</th>
							<th>کشور</th>
							<th>شهر</th>
							<th>تاریخ تولد</th>
							<th>شغل</th>
							<th> مدرک</th>
							<th> رشته</th>
							<th> قد</th>
							<th>وزن</th>
							<th>جنسیت</th>
							<th>نمایل جنسی</th>
							<th>حالت مدنی</th>
							<th>هدف</th>
							<th>عملیات</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $user)
							<tr>
								<td  style="width: 50px !important; padding: 2px;">
									<img src="{{ asset('UploadedImages/users/').'/'.$user->profileImage}}"  style="width: 100% !important; ">
								</td>
								<td>{{ $user->name}}</td>
								<td>{{ $user->lastName}}</td>
								<td>{{ $user->country}}</td>
								<td>{{ $user->city}}</td>
								<td>{{ $user->dob}}</td>
								<td>{{ $user->job}}</td>
								<td>{{ $user->degree}}</td>
								<td>{{ $user->field_of_study}}</td>
								<td>{{ $user->height}}</td>
								<td>{{ $user->weight}}</td>
								<td>{{ $user->gender}}</td>
								<td>{{ $user->sexual_desire}}</td>
								<td>{{ $user->marital_status}}</td>
								<td>{{ $user->my_plan}}</td>
								<td style="display: flex; flex-direction: row; justify-content: center;">
									<a href = 'blockUser/{{ $user->id }}'> <i class="fa fa-ban text-warning"></i></a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
