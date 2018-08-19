<!DOCTYPE html>
<html lang="fr">
    <head>
        @yield('headeremail')
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
       @yield('bodyemail')
       <br/><br/><br/><br/><br/><br/><br/>
       <script src="//code.jquery.com/jquery.js"></script>
       @include('flashy::message')
   </body>
      @include('Layouts.global_page.footer')

</html>
