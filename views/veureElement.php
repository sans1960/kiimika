<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Element</title>
  </head>
  <body>
    <h1 class="text-center mt-5"><?php echo $row['element'];?></h1>
    <div class="row">
        <div class="col-lg-12">
        <div class="card text-center">
  <div class="card-header">
    <h1><?php echo $row['symbol'];?></h1>
  </div>
  <div class="card-body">
      <div class="row">
          <div class="col-md-4">
          <p class="card-text font-weight-bold mr-3">Número atómic    <span class="ml-3"> <?php echo $row['atomicnumber'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Masa atómica    <span class="ml-3"> <?php echo $row['atomicmass'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Electronegativitat    <span class="ml-3"> <?php echo $row['electronegativity'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Energia d'ionització    <span class="ml-3"> <?php echo $row['firstionization'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Densitat    <span class="ml-3"> <?php echo $row['density'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Punt de fusió    <span class="ml-3"> <?php echo $row['meltingpoint'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Punt d'ebullició    <span class="ml-3"> <?php echo $row['boilingpoint'];?></span></p>
         
          </div>
          <div class="col-md-4">
          <p class="card-text font-weight-bold mr-3">Número neutrons    <span class="ml-3"> <?php echo $row['numberofneutrons'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Número electrons    <span class="ml-3"> <?php echo $row['numberofelectrons'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Número protons    <span class="ml-3"> <?php echo $row['numberofprotons'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Radi atómic    <span class="ml-3"> <?php echo $row['atomicradius'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Nombre d'isótopos    <span class="ml-3"> <?php echo $row['numberofisotopes'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Calor espesific    <span class="ml-3"> <?php echo $row['specificheat'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Orbites    <span class="ml-3"> <?php echo $row['numberofshells'];?></span></p>
          </div>
          <div class="col-md-4">
          <p class="card-text font-weight-bold mr-3">Periode    <span class="ml-3"> <?php echo $row['period'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Grup    <span class="ml-3"> <?php echo $row['groupnumber'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Fase    <span class="ml-3"> <?php echo $row['phase'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Tipus    <span class="ml-3"> <?php echo $row['type'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Descobridor    <span class="ml-3"> <?php echo $row['discoverer'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Any    <span class="ml-3"> <?php echo $row['year'];?></span></p>
          <p class="card-text font-weight-bold mr-3">Valencies    <span class="ml-3"> <?php echo $row['numberofvalence'];?></span></p>
          </div>
          </div>
      </div>
    
    
    
  </div>

</div>
        </div>
    </div>
    <div class="row mt-5">
<div class="col-md-4 mx-auto">
<ul class="list-group">
<li class="list-group-item"><a href="../index.html"class="btn btn-warning btn-block">inici</a></li>

</ul>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>