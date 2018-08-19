  <a class="navbar-brand" href="index.php"><img src= "{{asset('/img/sections/logo-small.png') }}" alt="logo Akeko"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>

                </button>

            </div>
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">

			  <li class="nav-item">
                      <a href="/demande_ecole" class="nav-link">
                          <p>Demande d'ajout</p>
                      <div class="ripple-container"></div></a>
                  </li>

			      <li class="nav-item">
                      <a href="/profilecole" class="nav-link">
                          <p><font>Ecoles</font></p>
                      <div class="ripple-container"></div></a>
                  </li>


                  <li class="nav-item">
                      <a href="/nousconnaitre" class="nav-link">
                          <p><font>Nous Connaitre</font></p>
                      <div class="ripple-container"></div></a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('contact') }}" class="nav-link">
                          <p><font>Contact</font></p>
                      <div class="ripple-container"></div></a>
                  </li>

                <li class="nav-link">
                      <a href="{{ route('register') }}" class="btn btn-round btn-info">
                        Inscription
                      </a>
                  </li>

                  <li class="nav-link">
                      <a href="{{ route('login') }}" class="btn btn-round  transparent_btn">
                        Connexion
                      </a>
                  </li>


              </ul>
