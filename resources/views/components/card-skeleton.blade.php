<div>
    <div class="row">
        @for ($i = 0; $i < 12; $i++)
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <a class="block block-rounded p-2" id="card-link" target="_blank">
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="">
                            <div class="skeleton skeleton-text" style="height: 20px; width: 160px;"></div>
                            <div class="skeleton skeleton-text" style="height: 10px; width: 140px;"></div>
                        </div>


                        <div class="card__header header__title" id="card-title">
                            <div class="skeleton skeleton-text" style="height: 30px; width: 30px; border-radius: 50%;">
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endfor
    </div>
</div>
