<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">AengusTV</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

      </div>
      <a href="index.php"><button type="button" class="btn btn-warning">Home</button></a>
    </div>
  </nav>
  <footer class="fixed-bottom text-center text-light text-uppercase navbar-expend-lg bg-dark">
              <span>2022 - Todos os direitos reservados.</span>

            </footer>

</body>
</html>
<?php
     require_once("conecta2.php");


    $query = $conecta->prepare("SELECT * FROM tb_Filmes");
    $query->execute();

    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    

    foreach($resultado as $index){

        echo (
            "
            <table class='table'>
            
            
            ");
        
        foreach( $index as $key => $value){
            echo "<td>"  . $value . "</td>";
            
        }
        

    echo("
    
    
    </table>
    
    ");

        

    }

?>
