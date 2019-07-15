<!DOCTYPE html>
<html lang="en">
 <head>
   @include('Layout.Partials.head')
 </head>
 <body class="layout-boxed sidebar-mini skin-red-light" style="height: auto; min-height: 100%;">
<div class=" wrapper" style="overflow:hidden; height:auto; min-height: 100%">

   <!-- <body class="skin-blue layout-top-nav"> -->
@include('Layout.Partials.header')
@include('Layout.Partials.sidebarleft')
<div class="content-wrapper" style="min-height: 902.8px;">
  @yield('content')
</div>
@include('Layout.Partials.footer')
</div>

  @include('Layout.Partials.footer-scripts')
 </body>
</html>
