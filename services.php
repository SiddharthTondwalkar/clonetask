<?php
include('header.php')
?>


<section>

    <div>
        <div class="title-bg d-flex align-items-center justify-content-center">
            <h1>Services</h1>
        </div>

    </div><br><br>
    <!-- About services -->
    <section class="container">
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-4">
            <?php for ($t = 0; $t < 6; $t++) { ?>
                <div class="col">

                    <div class="card services_card m-auto" style="width: 18rem;">
                        <svg xmlns="http://www.w3.org/2000/svg " width="70" height="90" fill="currentColor" class="bi bi-camera mx-auto" viewBox="0 0 16 16">
                            <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z" />
                            <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                        </svg>
                        <!-- <img src="https://picsum.photos/100" class="card-img-top" alt="..."> -->
                        <div class="card-body ">
                            <h5 class="card-title">Natural Photos</h5>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, nesciunt rerum? Iusto distinctio libero dolorem aliquam? Minus, officiis temporibus esse mollitia neque autem at aspernatur aliquam! Vitae fugit animi totam.</p>
                            <a href="#" class="btn btn-primary ">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div><br><br>
    </section>



</section>
<section class="services_card">
    <div class="container">
        <div class=" owl-carousel review-carousel ">
            <?php for ($t = 0; $t < 6; $t++) { ?>
                <div class=" iteam m-auto" style="width: 18rem;">
                    <img src="https://picsum.photos/100" class="card-img" alt="...">
                    <!-- <div class="card-body"> -->
                    <h5 class="card-title text-center">John Westrock</h5>
                    <p class=" text-start">Shutter is amazing! So creative. But more importantly FUN!. <br>He has a great sense of humor and made our day that much better!! </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                    </svg>
                    <!-- </div> -->
                </div>
            <?php } ?>
        </div>
    </div>
</section><br><br>

<?php
include('footer.php')
?>