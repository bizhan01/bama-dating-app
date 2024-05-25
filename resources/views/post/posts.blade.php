@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">
      <div class="col-md-3"></div>
      <div class="col-md-4">
        @include('post.postList')
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>
@endsection
