<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />

  <!-- plugins -->

  @include('layouts.partials.css')

  <!--Favicon-->
  @include('layouts.partials.icon')


  <meta property="og:title" content="Reader | Hugo Personal Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>
  <!-- navigation -->
  @include('layouts.partials.nav')
  <!-- /navigation -->

  <!-- start of banner -->
  <div class="banner text-center">
    @yield('banner')
  </div>
  <!-- end of banner -->


  <section class="section-sm">
    <div class="container">
      @yield('content')
    </div>
  </section>

  @include('layouts.partials.footer')

  @include('layouts.partials.js')
</body>

</html>