<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.partials.header')
	@yield('styles') 
</head>
<body>
	
    <div id="app">
    	@include('frontend.partials.navbar')

	    {{-- @yield('content') --}}
	    <router-view></router-view>

	    @include('frontend.partials.footer_content')
    </div>

	@include('frontend.partials.footer')
	<script type="text/javascript">
		window.baseurl = '{{ url('/') }}/';
	</script>
	@yield('scripts')
  	
</body>
</html>