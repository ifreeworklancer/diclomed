<!-- Recommendation section -->
<section class="recommendation-section section-padding">
    <div class="container">
        <h3 class="section-title text-center"><?= $recommendation['title']; ?></h3>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <?= $recommendation['description']; ?>
            </div>
        </div>
        <div class="text-center">
            <a href="https://shop.av.zp.ua/tovar/diklomed-krem-gel-5-tuba-50ml-stm/" class="btn btn-primary"><?= $btn_order; ?></a>
            <a class="btn btn-default" href="docs/instruction.txt" download>
                <img src="images/icons/download-1.svg">
                <?= $btn_instruction; ?>
            </a>
        </div>
    </div>
</section>