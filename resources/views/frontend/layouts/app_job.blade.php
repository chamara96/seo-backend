<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name', 'Laravel Starter') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    @include('frontend.includes.meta_job')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')

    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+Bengali+UI&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">

    <link rel="stylesheet" href="/css/menu_new.css">

    <link rel="stylesheet" href="/css/editable.css">

    @stack('after-styles')

</head>

{{-- <body class="{{isset($body_class) ? $body_class : ''}} sidebar-collapse"> --}}
<body>

    {{-- new header --}}
    <header>
        <div id="mobile_head" class="fixed-top pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="bg-dark p-4">
                    <h5 class="text-white h4">SEO</h5>
                    <table class="table table-sm">
                        <tbody>
                            <tr>
                                <td><a href="index.html">Home</a></td>
                                <td><a href="#tw-about">About Us</a></td>
                            </tr>
                            <tr>
                                <td><a href="../merchant/index.html">Buisness Owner</a></td>
                                <td><a href="#tw-blog">Career</a></td>
                            </tr>
                            <tr>
                                <td><a href="#tw-features">Features</a></td>
                                <td><a href="#tw-contact">Contact Us</a></td>
                            </tr>
                            <!--tr>
                           <td><a href="#work-process">Industries</a></td>
                           <td><a href="#tw-footer">Contact Us</a></td>
                        </tr-->
                        </tbody>
                    </table>
                    <!-- <span class="text-muted">Toggleable via the navbar brand.</span> -->
                </div>
            </div>
            <nav class=" navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>

        <!-- mobile view center logo -->
        <div id="logo_img_div_mobi" style="text-align: center;z-index: 105;position: fixed;  left: 40%;">
            <a style="padding: 0;" href="/"><img id="logo_img_xxx" class="shadowfilter" src="/css/center_logo_new.png" alt=""></a>
        </div>
        <!-- ------------------------ -->

        <!-- desktop view center logo -->
        <div id="logo_img_div_desk" style="text-align: center;z-index: 105;position: fixed; left: 47%;">
            <a style="padding: 0;" href="/"><img id="logo_img_xxx" class="shadowfilter" src="/css/center_logo_new.png" alt=""></a>
        </div>
        <!-- ----------------------- -->


        <nav style="z-index: 100;" id="newheader2" class="menu">
            <ul class="nav-menu nav-center">

                <li class="menu-item"><a href="index.html"><u>Home</u></a></li>
                <li class="menu-item"><a href="../"><u>Buisness Owner</u></a></li>
                <li class="menu-item" id="sec-02"><a href="#tw-features"><u>Features</u></a>
                   <ul>

                      <li><a href="feature1.html">Earn Money for Using Social Media</a></li>
                      <li><a href="feature2.html">Earn Cash For Window Shopping</a></li>
                      <li><a href="feature3.html">Earn cash for Shopping
                         </a></li>
                      <li><a href="feature4.html">Earn Cash when your friends earn Cash
                         </a></li>
                      <li><a href="feature5.html">Find Unconditional Cash Vouchers
                         </a></li>
                      <li><a href="feature6.html">Find Offers near you
                         </a></li>
                      <li><a href="feature7.html">Find Stores near you
                         </a></li>
                      <li><a href="feature8.html">Follow your merchant
                         </a></li>
                      <li><a href="feature9.html">Price request
                         </a></li>
                      <li><a href="feature10.html">Fun with Augmented Reality</a></li>



                   </ul>
                </li>
                <!--li class="menu-item" id="sec-03"><a href="#tw-service"><u>Services</u></a></li-->
                <li class="menu-item" id="sec-05"><a href="#tw-industries"><u>Industries</u></a></li>


                <li style="visibility: hidden;" class="menu-item"><a href="#">&nbsp;</a></li>

                <li class="menu-item"><a href="../about.html"><u>About Us</u></a>
                   <!-- <ul class="sub-234">
                          <li><a href="#">Sub Nav Link</a></li>
                          <li><a href="#">Sub Nav Link</a> </li>
                          <li><a href="#">Sub Nav Link</a></li>
                          <li><a href="#">Sub Nav Link</a>
                              <ul>
                                  <li><a href="#">Sub Sub Nav Link</a></li>
                                  <li><a href="#">Sub Sub Nav Link</a></li>
                                  <li><a href="#">Sub Sub Nav Link</a></li>
                              </ul>
                          </li>
                      </ul> -->
                </li>
                <li class="menu-item" id="sec-06"><a href="#tw-blog"><u>Blog</u></a></li>

                <li class="menu-item" id="sec-03"><a href="#tw-blog"><u>Career</u></a></li>
                <li class="menu-item" id="sec-04"><a href="#tw-contact"><u>Contact Us</u></a></li>
                <!--li class="menu-item" id="sec-08"><a href="#tw-contact"><u>Contact Us</u></a></li-->
             </ul>
        </nav>
        
    </header>
    {{-- new header --}}
    <!-- Header Block -->
    <!-- Remove @ mark  include('frontend.includes.header_job') -->
    <!-- / Header Block -->

    <div class="wrapper">

        @yield('content')

        <!-- Footer block -->
        <!-- remove footer -->
        <!-- / Footer block -->
    </div>
</body>

<!-- Scripts -->
@stack('before-scripts')

<script src="{{ mix('js/frontend.js') }}"></script>

@stack('after-scripts')

</html>
