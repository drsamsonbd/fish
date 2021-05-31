<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="icon" href="<%= BASE_URL %>favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>FMIS - Hospital Beluran Financial Management Information System</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Vue.js ID
      gtag('config', 'UA-118965717-7');
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

  </head>

  <!-- BODY options, add following classes to body to change options

  // Header options
  1. '.header-fixed'					- Fixed Header

  // Brand options
  1. '.brand-minimized'       - Minimized brand (Only symbol)

  // Sidebar options
  1. '.sidebar-fixed'					- Fixed Sidebar
  2. '.sidebar-hidden'				- Hidden Sidebar
  3. '.sidebar-off-canvas'		- Off Canvas Sidebar
  4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
  5. '.sidebar-compact'			  - Compact Sidebar

  // Aside options
  1. '.aside-menu-fixed'			- Fixed Aside Menu
  2. '.aside-menu-hidden'			- Hidden Aside Menu
  3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

  // Breadcrumb options
  1. '.breadcrumb-fixed'			- Fixed Breadcrumb

  // Footer options
  1. '.footer-fixed'					- Fixed footer

  -->

  <body>
    <noscript>
      <strong>We're sorry but this app doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
    </noscript>
    <div id="app"></div>
    <!-- built files will be auto injected -->

    <script src="{{ asset('js/app.js') }}"></script>

  </body>
</html>
