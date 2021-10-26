<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  


  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
  <title>Vtech</title>

   

</head>

<body>

  <!--Navbar-->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">

<class class="container-fluid">

  <a class="navbar-brand"> <img src="logovtech.png" alt="" height="50px" width="50px"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="accueil.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Films</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Séries</a>
      </li>


    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit"> <img src="loupe.png" alt="" height="30px"
          width="30px"></button>
    </form>
  </div>
</class>
</div>
</nav>

  <!--Fin Navbar-->

  <!--Caroussel-->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="dune-affiche.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <!--Fin Carousssel-->

  <!--Affiches-->

  <div class="row mx-auto d-flex justify-content-around ">
    


    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "faconnier974", "vtech");

    // Check connection
    if ($link === false) {
      die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Attempt select query execution
    $sql = "SELECT * FROM employees";
    if ($result = mysqli_query($link, $sql)) {
      if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_array($result)) {
          echo "<div class=\"col-3 \">\n";
          echo "      <div class=\"card border-0\">\n";
          echo "        <div class=\"card-body\">\n";
          echo "          <img class=\"affiche\" src=\"jjk.png\" style=\"width: 15rem;\" alt=\"\">\n";
          echo "          <div class=\"wrap\">\n";
          echo "            <a href=\"details.php\"></a>\n";
          echo "            <h1 class=\"titre\">".$row["name"]."</h1>\n";
          echo "          </div>\n";
          echo "        </div>\n";
          echo "      </div>\n";
          echo "    </div>";
        }

        // Free result set
        mysqli_free_result($result);
      } else {
        echo "No records matching your query were found.";
      }
    } else {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }

    // Close connection
    mysqli_close($link);


    ?>
  </div>








  

</body>

</html>