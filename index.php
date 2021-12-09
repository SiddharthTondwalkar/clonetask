<?php
include('header.php')
?>

<main class="main ">

  <div class="first-carousel owl-carousel owl-theme" id="first-carousel">
    <?php for ($c = 0; $c < 10; $c++) { ?>
      <div class="item "><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTahYztqJn-1cjF8_3FztlqjHyyMrQn7AYtkQ&usqp=CAU" alt="" class="w-100 h-25"></div>
    <?php } ?>
    <!-- <div class="item"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTahYztqJn-1cjF8_3FztlqjHyyMrQn7AYtkQ&usqp=CAU" alt="" class="w-100 h-25"></div> -->
  </div>
  <div class="container">
    <div class="profile ">
      <img src="img/p2.jfif" alt="" class="img">
    </div>

    <div class="row ">
      <div class="col-6 line left">
        <h6 class="">ABOUT ME</h6>
        <h2>THOMAS WILLIAM</h2>
        Hey, thanks for stopping by. My name’s Thomas William and Im a Art Director & Photographer based in the San Francisco where I make cool things for agencies and brands around globe. If you like my work then contact me.<br><br>
      </div>
      <div class="col-6">
        <h6>ABOUT COMPANY</h6>
        <h2>ABOUT SHUTTER</h2>
        Hey, thanks for stopping by. My name’s Thomas William and Im a Art Director & Photographer based in the San Francisco where I make cool things for agencies and brands around globe. If you like my work then contact me.
      </div>
    </div>
  </div><br><br>

  <!-- PORTFOLIOS OUR PHOTOGRAPHS -->
  <section class="container ">
    <div class="text-center ">
      <h6>PORTFOLIOS</h6>
      <h1>OUR PHOTOGRAPHS</h1><br><br>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php for ($i = 0; $i < 9; $i++) { ?>
        <div class="card  text-white col mx-auto" style="width: 18rem;">
          <img src="https://picsum.photos/200" class="card-img" alt="...">
        </div>

      <?php } ?>
    </div><br>
    <div class=" col-2 mx-auto ">
      <button type="button" class="btn btn-dark ">Load more</button>
    </div>
  </section><br><br>

  <section class="  services_card">
    <div class="container">
      <div class="first-carousel owl-carousel ">
        <?php for ($t = 0; $t < 3; $t++) { ?>
          <div class=" iteam m-auto " style="width: 16rem;">
            <img src="https://picsum.photos/100" class="img" alt="...">
            <!-- <div class="card-body"> -->
            <h5 class=" text-center">John Westrock</h5>
            <p class=" text-start">Shutter is amazing! So creative. But more importantly FUN!. <br>He has a great sense of humor and made our day that much better!! </p>
            <!-- </div> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
              <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
              <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
            </svg>
          </div>
        <?php } ?>
      </div>
    </div>
  </section><br><br>
  <!-- blog -->
  <section class="container">
    <h6 class="text-center">Blog Post</h6>
    <h2 class="text-center">Latest News</h2>
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 g-4">
      <?php for ($t = 0; $t < 3; $t++) { ?>
        <div class="col">

          <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/100" class="card-img-top" alt="...">
            <div class="card-body">
              <h6>JULY 22,2020</h6>
              <h5 class="card-title">Photo trip to amsterdam</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, nesciunt rerum? Iusto distinctio libero dolorem aliquam? Minus, officiis temporibus esse mollitia neque autem at aspernatur aliquam! Vitae fugit animi totam.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
</main>

<?php
include('footer.php')
?>