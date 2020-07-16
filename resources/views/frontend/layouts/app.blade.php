<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.partials.header')
  @yield('styles') 
</head>
<body>
	
    @include('frontend.partials.navbar')

    @yield('content')

    @include('frontend.partials.footer_content')

	@include('frontend.partials.footer')

	@yield('scripts')
  
</body>
</html>