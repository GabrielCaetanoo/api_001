<?php
defined('CONTROL') or die('Acesso invalido');

$api = new ApiConsumer();
$countries = $api->get_all_countries();
?>


<!-- <div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h3>Consumir API com PHP Puro</h3>
        </div>
    </div>
</div> -->
<pre>
    <?php
    print_r($countries); 
    ?>
</pre>