<!DOCTYPE html>
<html lang="en">

<head>
    @include('BackEnd.Layout.common-head')
</head>
<body class="g-sidenav-show  bg-gray-200">
    @include('BackEnd.Layout.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
         @include('BackEnd.Layout.header')
         @section('main-content')
         @show
         @include('BackEnd.Layout.footer')
         </main>
         
        @include('BackEnd.Layout.common-end')
        @stack('custom-scripts')

</body>

</html>