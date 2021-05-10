<!DOCTYPE html>
<html lang="en">
  <head>
    @include("web.v1.layouts.partials.head")
  </head>

  <body>
  <!--Main Wrapper-->
  <div class="wrapper">
      @include("web.v1.layouts.partials.header")
      
      @if(View::exists('web.v1.layouts.partials.nav'))
          @include("web.v1.layouts.partials.nav")
      @endif

          <!-- top navigation -->
          @if(View::exists('web.v1.layouts.partials.topnav'))
            @include("web.v1.layouts.partials.topnav")
          @endif
          <!-- /top navigation -->

          <!-- page content -->
          @yield('content')
          <!-- /page content -->

  </div>
        <!-- footer content -->
        @include("web.v1.layouts.partials.footer")
        <!-- /footer content -->
     
    @if(View::exists('web.v1.layouts.partials.footermodals'))
      @include("web.v1.layouts.partials.footermodals")
    @endif

    @include("web.v1.layouts.partials.footerscripts")
  </body>
</html>