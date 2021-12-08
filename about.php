<?php
include("header.php");
?>
<section class="container">
    <main>

        <div class=" ">
            <h1 class="text-center mt-5 ">About us <h1>
                    <p class="text-center">
                        "We're a highly organised and motivated professional<br>
                        photographer with a wealth of experience in a range of <br>
                        photographic styles and services."
                    </p>
        </div>
        <!-- About services -->
        <section class="container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-4">
                <?php for ($t = 0; $t < 3; $t++) { ?>
                    <div class="col">

                        <div class="card m-auto" style="width: 18rem;">
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


        <section class="">
            <h6 class="text-center">Our Team</h6>
            <h2 class="text-center">Photographers</h2>
            <div class="row row-cols-1 row-cols-md-4 row-cols-lg-4 g-4">
                <?php for ($t = 0; $t < 4; $t++) { ?>
                    <div class="col">

                        <div class="card" style="width: 16rem;">
                            <img src="https://picsum.photos/100" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Angelina Rose </h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, nesciunt rerum? Iusto distinctio libero dolorem aliquam? Minus.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div><br><br>
        </section>
        </main>
</section>
        <section >
            <div class="container">
                <div class="owl-carousel ">
                    <?php for ($t = 0; $t < 3; $t++) { ?>
                        <div class=" iteam m-auto" style="width: 18rem;">
                            <img src="https://picsum.photos/100" class="card-img" alt="...">
                            <!-- <div class="card-body"> -->
                            <h5 class="card-title text-center">John Westrock</h5>
                            <p class=" text-start">Shutter is amazing! So creative. But more importantly FUN!. <br>He has a great sense of humor and made our day that much better!! </p>
                            <!-- </div> -->
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section><br><br>


<?php
include("footer.php");
?>