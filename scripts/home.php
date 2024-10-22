<?php
defined('CONTROL') or die('Acesso invalido');

$api = new ApiConsumer();
$countries = $api->get_all_countries();

?>


<div class="container mt-5">

    <div class="row">
        <div class="col text-center">
            <h3>Lista de Paises do Mundo</h3>
            <hr>
        </div>
    </div>

    <div class = "row justify-content-center"> 

        <div class="col-4">
            <p>Lista de Países</p>
            <select id="select_country" class="form-select">
                <option value="">Selecionar um País</option>
                <?php foreach($countries as $country) : ?>
                    <option value="<?= $country ?>"><?= $country ?></option>
                <?php endforeach; ?>
            </select>

        </div>


    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded', () => {
            
        const select_country = document.querySelector("#select_country");
        select_country.addEventListener('change', () => {
            const country = select_country.value;
            window.location.href = `?route=country&country_name=${country}`
            });
    })

</script>

