<!DOCTYPE html>

<html lang="en">
    <head>
          @yield('headcox')
    </head>
    <body class="login-page ">
      <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
          <div class="container">
             <div class="navbar-translate">
                   @include('Layouts.global_page.menu')
             </div>
         </div>
     </nav>
    @yield('bodycox')
  </body>
       @include('Layouts.global_page.footer')
</html>
