<!DOCTYPE html>
<html lang="fr">


<head>
  @yield('headerc')
</head>

<body class="sections-page  section-white ">
    <nav class="navbar    fixed-top  navbar-expand-lg bg-dark" color-on-scroll="100" id="sectionsNav">
        <div class="container">
           <div class="navbar-translate">
                 @include('Layouts.global_page.menu')
           </div>
       </div>
  </nav>

       @yield('bodyc')
    
</body>

    @include('Layouts.global_page.footer')

</html>
