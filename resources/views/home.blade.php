<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('images/tower1.png')}}">
    <title>{{config('app.name', 'Tacom.bj')}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div>
        <div>
            <nav class="fixed-top navbar navbar-expand-lg bg-dark">
                <a class="navbar-brand text-light p-2" href={{route('home')}}>
                    <img src={{asset('images/logo150w.png')}} alt="">
                </a>
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link text-light" href={{route('home')}}>Accueil</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#apropos">A propos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-light" href="#contact">Contact</a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>

        <div>
            <img class="w-100" src={{asset('images/1.jfif')}} alt="">
        </div>

        <div id="apropos" class="row section-1">
            <div class="col-4"></div>
            <div class="col-4 content-1">
                <h1 class="text-center who">Qui Sommes-nous?</h1>
                <p class="text-center mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Soluta adipisci nisi aliquam illo ratione possimus sed odio 
                    voluptatem architecto ut quisquam perspiciatis dolores saepe, 
                    dolor reprehenderit temporibus sequi! Molestiae, ipsam.</p>
            </div>
            <!--<div class="col-3 p-4 targetimg">
                <img class="w-100" src={{asset('images/4.png')}} alt="">
            </div>-->
            <div class="col-4"></div>
        </div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner bg-dark text-white">
                <div class="carousel-item active" data-bs-interval="10000">
                    <h2 class="text-center mt-4 testi">Temoignages</h4>
                    <P class="lorem text-center mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</P>
                    <p class="text-center">Lorem ipsum dolor</p>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <h2 class="text-center mt-4">Temoignages</h4>
                    <P class="lorem text-center mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</P>
                    <p class="text-center">Lorem ipsum dolor</p>
                </div>
                <div class="carousel-item">
                    <h2 class="text-center mt-4">Temoignages</h4>
                    <P class="lorem text-center mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</P> 
                    <p class="text-center">Lorem ipsum dolor</p>             
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="row">
              <div class="col">
                <h2 class="who m-4">Gestion optimisee de campagnes de marketing</h2>
              </div>
              <div class="row">
                <div class="col-4"></div>
                <div class="col-4"><img class="w-100 h-100" src={{asset('images/2.jfif')}} alt=""></div>
                <div class="col-4"></div>
              </div>
            </div>
            <div class="row m-4">
              <div class="col">
                <h4 class="who m-4">Desktop</h2>
                <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col">
                <h4 class="who m-4">Mobile</h2>
                <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col">
                <h4 class="who m-4">Tablets</h2>
                <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
        </div>
        <div id="services" class="text-center bg-dark text-white">
            <div class="row text-center">
                <h2 class="who mt-4">Que faisons-nous?</h2>
            </div>
            <div class="row">
              <div class="col">
                <i class="fa-solid fa-magnifying-glass fa-5x m-4"></i>
                <h4 class="who">SEO</h4>
                <p class="text-center break-word m-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col">
                <i class="fa-solid fa-mobile fa-5x m-4"></i>                
                <h4 class="who">Mobile</h4>
                <p class="text-center break-word m-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col">
                <i class="fa-solid fa-envelope fa-5x m-4"></i>                
                <h4 class="who">Email</h4>
                <p class="text-center break-word m-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <i class="fa-solid fa-chart-line fa-5x m-4"></i>                
                <h4 class="who">SEM</h4>
                <p class="text-center break-word m-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col">
                <i class="fa-regular fa-handshake fa-5x m-4"></i>                
                <h4 class="who">Social</h4>
                <p class="text-center break-word m-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col">
                <i class="fa-solid fa-video fa-5x m-4"></i>                
                <h4 class="who">Video</h4>
                <p class="text-center break-word m-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
          <div id="contact" class="text-center">
            <div class="row">
              <div class="col">
                <h3 class="who text-center m-4">Contact</h3>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h3 class="text-end m-4">Tacom.bj</h3>
                <p class="text-end m-4">Adresse : Cotonou, Benin</p>
                <p class="text-end m-4"><i class="fa-solid fa-phone">: +229 99 99 99 99</i></p>          
            </div>
              <div class="col">
                <h3 class="who text-start mt-4">Ecrivez-nous</h3>
                <p class="text-start mt-4">Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div>

        <footer class="pied bg-dark">
            <p class="who">Copyright</p>
          </footer>


    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>