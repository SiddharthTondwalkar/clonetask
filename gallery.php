<?php
include('header.php')
?><br><br>

<section>

        <section class="container ">
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php for ($i = 0; $i < 20; $i++) { ?>
        <div class="card  text-white col mx-auto" style="width: 18rem;">
          <img src="https://picsum.photos/200" class="card-img" alt="...">
        </div>

      <?php } ?>
    </div><br>
  </section>

</section>

<?php
include('footer.php')
?>