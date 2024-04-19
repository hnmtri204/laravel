<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}">
    <title>@yield('title')</title>
</head>

<body>
    <div class="container">
        @include('admin.inc.sidebar')
        <!-- Main Content -->
        <main>
            <h1>Dashboard</h1> 
            <!-- <div class="showlogin" id="loginDiv"></div> -->
            <!-- Analyses -->
            <div class="analyse">
                @yield('content')
            </div>
            <!-- End of Analyses -->
            <!-- New Users Section -->
            <div class="chart-container " style="max-width: 600px; max-height: 350px;">
                <canvas id="myChart"></canvas>
            </div>
            <!-- End of Recent Orders -->
        </main>
        <!-- End of Main Content -->

    </div>
</body>
</html>