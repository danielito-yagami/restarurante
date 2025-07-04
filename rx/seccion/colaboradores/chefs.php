


<section id="chefs" class="container mt-4">

<div class="row">

<h2 class="f_hangover l_Grd text-center">Nuestros Chefs</h2>
<!---- 3 elementos --->



<?php foreach ($resC as $chef): ?>

<!---Inicio del Foreach para obtener los datos de los chefs--->

<div class="col-md-4">
<!---Parte Card --->
<div class="card">


<img class="card-img-top" src="./img/colaboradores/<?php echo $chef->img;?>" alt="chef1" width="300px" height="400px">

<div class="card-body bg bg-dark white">

<h5 class="card-title"><?php echo $chef->nombreC; ?></h5>

<p class="card-text">
<?php echo $chef->descripcion; ?>
</p>
</div>

<div class="social-icons mt-3">

<a class="iconosX l_Grd me-2" href="<?php echo $chef->linkInsta;?>"><i class="fab fa-instagram"></i></a>
<a class="iconosX l_Grd me-2" href="<?php echo $chef->linkLink;?>"><i class="fab fa-facebook"></i></a>
<a class="iconosX l_Grd me-2" href="<?php echo $chef->linkFace;?>"><i class="fab fa-linkedin"></i></a>


</div>

</div>
<!----Fin del card -->

</div>

<?php endforeach; ?>
<!----Fin 3 elementos --->

</div>

</section>

