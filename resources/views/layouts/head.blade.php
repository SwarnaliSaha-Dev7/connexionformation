<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
{{-- <title>Connexion Formation</title> --}}
<title>@yield('title')</title>
<!-- FAVICON LINKS -->
<link rel="icon" href="{{ asset('assets/images/favicon.webp') }}" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }} " type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/fancybox.min.css') }} " type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" type="text/css">
@if (!Route::is('homePage'))
<link rel="stylesheet" href="{{ asset('assets/css/innerbody.css') }}" type="text/css">
@endif
<link rel="stylesheet" href="{{ asset('assets/css/homeBody.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" type="text/css">
