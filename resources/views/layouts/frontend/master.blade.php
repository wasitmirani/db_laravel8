<!-- Meta -->
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
		<!-- <link rel="stylesheet" href="/assets/css/all.min.css"> -->
		<link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('/assets/css/fancybox.css')}}">
		<link rel="stylesheet" href="{{asset('/assets/css/slick.min.css')}}">
		<link rel="stylesheet" href="{{asset('/assets/css/slick-theme.css')}}">
<!-- Meta -->
<title>{{config('app.name')}}</title>
</head>
<body>
<!-- Header -->
    @component('layouts.frontend.components.header')
    @endcomponent
<!-- Header -->
    @yield('content')
<!-- Footer -->
@component('layouts.frontend.components.footer')

@endcomponent
<!-- Footer -->
<!-- Footer Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>

<!-- <script src="assets/js/slim.min.js" ></script> -->
<script src="{{asset('/assets/js/custom.js')}}"></script>
<script src="{{asset('/assets/js/fancybox.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Option 2: jQuery, Popper.js')}}, and Bootstrap JS -->
<script src="{{asset('/assets/js/popper.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('/assets/js/slick.min.js')}}"></script>
</body>
</html>
<!-- Footer Script -->
