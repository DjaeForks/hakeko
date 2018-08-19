<!DOCTYPE html>
<html lang="fr">

<head>
       @yield('headpayement')
</head>

<body class="login-page ">
 <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
     <div class="container">
         <div class="navbar-translate">
      
        </div>
     </div>
 </nav>
       @yield('bodypayement')
       <script src="//code.jquery.com/jquery.js"></script>
       @include('flashy::message')
</body>

      @include('Layouts.global_page.footer')
</html>
