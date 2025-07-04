  <!-------------Testimonios--------------->

<section id="testimonios" class="bg bg-light py-5">

<div class="container">

<h2 class="text-center mb-4 f_hangover">Testimonios</h2>



<div class="row">

<?php foreach ($res12 as $r):?>
<div class="col-md-6">

<div class="card mb-4 w-100">

<div class="card-body">

<p class="card-text l_Med"><?php echo $r->comentario ;?></p>
<div class="card-footer text-muted">
<?php echo $r->nombreT ;?>
</div>
</div>

</div>


</div>
<?php endforeach;?>

</div>


</div>
<!------------------------------------------>
</section>
