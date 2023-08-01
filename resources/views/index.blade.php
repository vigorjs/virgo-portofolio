<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$title}} | Virgo's Portofolio</title>

  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" type="image/x-icon" href="https://nicodwin.website/assets/common/img/favicon/default.png">
  {{-- <link href="{{asset('template/assets/img/favicon.png')}}" rel="icon"> --}}
  <link href="{{asset('template/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  @stack('before-styles')

  @include('includes.indexstyle')

  @stack('after-styles')


  <!-- =======================================================
  * Template Name: MyResume
  * Updated: Jun 13 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    @include('layouts.sidenavbar')

  </header><!-- End Header -->

  @include('sections.hero')

  <main id="main">

  @include('sections.about')

  {{-- @include('sections.facts') --}}

  @include('sections.skills')

  @include('sections.resume')

  @include('sections.portofolio')

  {{-- @include('sections.services') --}}

  {{-- @include('sections.testimonials') --}}

  @include('sections.contact')

  </main><!-- End #main -->

  @include('includes.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @stack('before-scripts')

  @include('includes.indexscript')

  @stack('after-scripts')

</body>

</html>
