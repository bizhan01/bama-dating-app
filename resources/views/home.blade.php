@if(auth()->user()->userType == 1 && auth()->user()->status == 1)
	@include('adminDashborad')
@elseif(auth()->user()->userType == 2 && auth()->user()->status == 1)
	@include('normalUser')
@else
	  @include('blocked')
@endif
