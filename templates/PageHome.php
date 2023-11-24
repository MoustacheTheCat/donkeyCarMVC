<?php $pageTitle = "Donkey Car"; ?>

<?php ob_start(); ?>

<div class="row">
    <div class="col-md-12 mt-5">
        <h2 class="text-center">Choose your destination</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-12  mt-5">
        <p class="text-center">Filter your destination by a city or a country</p>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>