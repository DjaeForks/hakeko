<!DOCTYPE html>

<html lang="en">
    <head>
          @yield('headconnaitre')
    </head>
    <body class="profile-page ">
      <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
          <div class="container">
             <div class="navbar-translate">
                   @include('Layouts.global_page.menu')
             </div>
         </div>
     </nav>


         @yield('bodyconnaitre')

   </body>
       @include('Layouts.global_page.footer')
</html>
