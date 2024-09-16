<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title') HACM - Hulondalo Annual Cardiovascular Meeting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="HACM - Hulondalo Annual Cardiovascular Meeting" name="description" />
    <meta content="Holistic Approach Of Cardiovascular Care : From Pediatric To Adult. 2nd Hulondalo Cardiovascular Meeting 2024. Program at Galance: 3 Symposium, 3 Workshop, GP Case Sharing, Modereted Poster." name="Aiminnur" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    @include('layouts.head-css')
</head>

<body>

    @yield('content')

    @include('layouts.vendor-scripts')
</body>

</html>
