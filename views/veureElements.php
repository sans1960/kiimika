<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Elements</title>
  </head>
  <body>
  <h1 class="text-center">Elements</h1>

<div class="container">
<div class="row">
<div class="col-lg-12">
 <table class="table">
 <thead>
 <tr>
  <th >Número Atómic</th>
  <th>Element</th>
  <th>Masa Atómica</th>
  <th>Simbol</th>
  
  <th>Acció</th>
  
 
</tr>
 </thead>
 <tbody>
            <?php foreach ($elem as $ele) { ?>
            <tr>
                <td><?php echo $ele['atomicnumber']; ?></td>
                <td><?php echo $ele['element']; ?></td>
                <td><?php echo $ele['atomicmass']; ?></td>
                <td><?php echo $ele['symbol']; ?></td>
                
                <td><a href="veureElementController.php?id=<?php echo $ele['ID'];?>" class="btn btn-success">veure</a></td>
               
           
            </tr>
            <?php } ?>
        </tbody>
 </table>
</div>
</div>
</div>
<hr>
<div class="row mt-5">
<div class="col-md-4 mx-auto">
<ul class="list-group">
<li class="list-group-item text-center"><a href="../index.html" class="btn btn-warning btn-block">inici</a></li>

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