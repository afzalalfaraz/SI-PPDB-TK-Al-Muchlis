<!DOCTYPE html>
<html lang="en">

<head>
    <title>TK Al-Muchlis</title>
    @include('part.head')
</head>

<body>
    <div class="container-xxl bg-white p-0">
        
        @yield('content')

        @include('part.footer')
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('preschool-website-template/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('preschool-website-template/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('preschool-website-template/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('preschool-website-template/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('preschool-website-template/js/main.js') }}"></script>

</html>
