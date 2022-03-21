<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <input name="suite" type="hidden" id="suite">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="container_">
                    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="bigthumb" src=<?= $data['image']?> alt="">
                            </div>

                            <div class="carousel-item">
                                <img class="bigthumb" src=<?= $value['link']?> alt="">
                            </div>
                        </div>
                        <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev"><span
                                class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précedent</span></a>
                        <a href="#carousel" class="carousel-control-next" role="button" data-slide="next"><span
                                class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span></a>
                    </div>

                    <script>
                    $('.caroussel').carousel({
                        pause: "null"
                    })
                    </script>

                </div>
            </div>
        </div>
    </div>
</div>