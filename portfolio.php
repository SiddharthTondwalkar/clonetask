<?php
include('header.php')
?>


<section>

    <div>
        <div class="title-bg d-flex align-items-center justify-content-center">
            <h1>Portfolio</h1>
        </div><br><br>


        <section class="container ">
    <div class="text-center portfolio-head">
        <ul class="d-flex justify-content-center">
            <li> All</li> <br> &nbsp;&nbsp;
            <li>Fashion</li>&nbsp;&nbsp;
            <li>Portrait</li>&nbsp;&nbsp;
            <li>Studio</li>
        </ul>
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php for ($i = 0; $i < 15; $i++) { ?>
        <div class="card  text-white col mx-auto" style="width: 18rem;">
          <img src="https://picsum.photos/200" class="card-img" alt="...">
        </div>

      <?php } ?>
    </div><br>
    <div class=" col-2 mx-auto ">
      <button type="button" class="btn btn-dark ">Load more</button>
    </div>
  </section>

</section>

<?php
include('footer.php')
?>