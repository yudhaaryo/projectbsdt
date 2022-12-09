<!DOCTYPE html>
<html lang="en">

<head>
@include('layouts.partials.header')

@stack('before-style')
@include('layouts.partials.style')
@stack('after-style')
<link rel="stylesheet" href="/css/style.css">


</head>

<body id="page-top" class="0verflow-hidden">
    @include('layouts.partials.navbar')
    <div id="content-wrapper" class="d-flex flex-row">
        <div class="container-fluid">

        <div id="content" style="min-width:90vw;">

            @yield('content')
        </div>
        </div>
    </div>


@include('layouts.partials.script')



</body>

</html>
