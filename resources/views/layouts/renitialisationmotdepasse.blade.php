<!DOCTYPE html>
<html lang="fr">
    <head>
        @yield('headrrenitialisation')
    </head>
      <br/><br/><br/>
    <body class="signup-page ">
      <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
          <div class="container">
             <div class="navbar-translate">
                   @include('Layouts.global_page.menu')
             </div>
         </div>
    </nav>
       @yield('bodyrenitialisation')
       <br/><br/><br/><br/><br/><br/><br/>
       
    </body>
      @include('Layouts.global_page.footer')

</html>
