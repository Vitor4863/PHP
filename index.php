<!DOCTYPE html>
<html lang="Pt-Br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="estilo.css">

  <title>AengusTV</title>
</head>
<body>
  <!--Barra De Navegação-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">AengusTV</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Filmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Series</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Ação</a></li>
            <li><a class="dropdown-item" href="#">Aventura</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
          </ul>
        </li>
        <a href="./includes/form.php"><button type="button" class="btn btn-danger">Cadastrar Agora</button></a>
        
   
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--fim da Barra de navegação-->

<!--Começo do Carroseu-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/tq.jpg" class="d-block w-100" alt="..." width="100px" height="800px">
    </div>
    <div class="carousel-item">
      <img src="./img/tr.jpg" class="d-block w-100" alt="..." width="100px" height="800px">
    </div>
    <div class="carousel-item">
      <img src="./img/pb.jpeg" class="d-block w-100" alt="..." width="100px" height="800px">
    </div>
    <div class="carousel-item">
      <img src="./img/fr.jpg" class="d-block w-100" alt="..." width="100px" height="800px">
    </div>
    <div class="carousel-item">
      <img src="./img/the-batman.png" class="d-block w-100" alt="..." width="100px" height="800px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!--Fim do Carroseu-->

   <!--Catalago-->

   <div class="container-cards">
    
   <h5 class="container-cards-title">Filmes</h5>
   <div class="container-cards-scrolling">
     <div class="container-cards-item">
       <a href="pg.php">
     <img src="./img/the-batman.png" class="d-block w-100" alt="...">
     </div>
     </a>
     <div class="container-cards-item">
     <a href="ph.php">
     <img src="./img/hm1.jpg" class="d-block w-100" alt="...">
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/OIP.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/troi.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/matrix.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/kg.jpg" class="d-block w-100" alt="..." >
     </a>
     </div>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/28.jpg" class="d-block w-100" alt="..." >
     </a>
     </div>

   </div>
   </div>



   <div class="container-cards">
    
   <h5 class="container-cards-title">Series</h5>
   <div class="container-cards-scrolling">
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/tr.jpg" class="d-block w-100" alt="...">
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/tq.jpg" class="d-block w-100" alt="...">
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/pb.jpeg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/got.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/bad.jpg" class="d-block w-100" alt="..." >
     </a>
     </div>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/espartacus.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>

     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/34.jpeg" class="d-block w-100" alt="..." >
     </div>
     </a>

   </div>
   </div>


   <div class="container-cards">
    
   <h5 class="container-cards-title">Desenhos</h5>
   <div class="container-cards-scrolling">
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/cavaleiro.jpg" class="d-block w-100" alt="...">
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/dt.jpg" class="d-block w-100" alt="...">
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/castle.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/cv.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/scob.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/fm.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>
     <div class="container-cards-item">
     <a href="https://www.netflix.com/br/">
     <img src="./img/lb.jpg" class="d-block w-100" alt="..." >
     </div>
     </a>

   </div>
   </div>
   <!--fim Do Catalago-->
  
     <!--Começo do rodapé-->
   <div class="container">
<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
</html>