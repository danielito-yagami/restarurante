<section id="menu"class="mt-4 container">



<h2 class="text-center l_Grd f_hangover">Menu (nuestra recomendacion)</h2>
<br>

<div class="row cols-1 row-cols-md-4 g-4">

<?php foreach($comidas as $re):?>
<!--------------------elemento -------->
<div class="col d-flex">

<div class="card imgIcono">
<?php if($re->foto =="foto.jpg" || $re->foto== ""):?>
    <img class="card-img-top"src="./img/comidadefecto.jpg?>" alt="Hamburguesa sencilla" height="190px">

<?php else : ?>
    <img class="card-img-top"src="./img/menu/<?php echo $re->foto; ?>" alt="Hamburguesa sencilla"height="190px">

<?php endif;?>
<div class="card-body bg bg-dark">

<!---titulo ---->

<!------Texto de la carta ----->

<h5 class="card-title white f_Madfool l_Grd text-center"><?php echo $re->nombre; ?></h5>
<p class="card-text small white"><strong>Ingredientes: </strong><?php echo $re->ingredientes; ?></p>
<p class="card-text text-center white f_hangover l_Med"><strong>Precio: </strong><?php echo $re->precio; ?></p>

</div>

</div>

</div>

<?php endforeach;?>
<!----------------Fin de elemento ---------->



</div>

</section>