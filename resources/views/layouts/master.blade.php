<!DOCTYPE html>
<html>

<head>
    <!-- Your other head content here -->
    <script src=""></script>
</head>
<title> @yield('title') - Amazone</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style type="text/css">
    .ba-none:before,
    .ba-none:after {
        content: none;
    }

    .page-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        /* Semi-transparent background */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        /* Ensure the loader appears above other elements */
    }

    .spinner {
        border: 4px solid rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        border-top: 4px solid #3498db;
        width: 40px;
        height: 40px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* Custom CSS classes for multi-color h4 text */
</style>

<body>
    <!-- Sidebar -->
    @include('partials/menu')

    <div class="main " style="margin-left:25%">
        @yield('content')
    </div>

    @include ('partials/footer');


    {{-- loader --}}
    <div id="page-loader" class="page-loader">
        <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" width="64px" height="64px" viewBox="0 0 128 128"
            xml:space="preserve">
            <path fill="#ab1d1d" fill-opacity="1"
                d="M64.4 16a49 49 0 0 0-50 48 51 51 0 0 0 50 52.2 53 53 0 0 0 54-52c-.7-48-45-55.7-45-55.7s45.3 3.8 49 55.6c.8 32-24.8 59.5-58 60.2-33 .8-61.4-25.7-62-60C1.3 29.8 28.8.6 64.3 0c0 0 8.5 0 8.7 8.4 0 8-8.6 7.6-8.6 7.6z">
                <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64" dur="1800ms"
                    repeatCount="indefinite" />
            </path>
        </svg>

    </div>

</body>

</html>