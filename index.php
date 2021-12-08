<?php
include("header.php");
?>
<main class="main ">

  <div class="owl-carousel owl-theme">
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
        Hey, thanks for stopping by. My name’s Thomas William and I’m a Art Director & Photographer based in the San Francisco where I make cool things for agencies and brands around globe. If you like my work then contact me.<br><br>
      </div>
      <div class="col-6">
        <h6>ABOUT COMPANY</h6>
        <h2>ABOUT SHUTTER</h2>
        Hey, thanks for stopping by. My name’s Thomas William and I’m a Art Director & Photographer based in the San Francisco where I make cool things for agencies and brands around globe. If you like my work then contact me.
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
        <div class="card bg-dark text-white col m-auto" style="width: 18rem;">
          <img src="https://picsum.photos/200" class="card-img" alt="..."> &nbsp;
        </div>
        <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
      <?php } ?>
    </div><br>
    <div class=" col-2 mx-auto ">
      <button type="button" class="btn btn-dark ">Load more</button>
    </div>
  </section>

  <section class=" mt-5 bg-info">
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
include("footer.php");
?>