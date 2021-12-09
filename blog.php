<?php
include('header.php')
?>

<section>
<div>
        <div class="title-bg d-flex flex-column  align-items-center justify-content-center">
            <h1>Blog</h1>
            <br><p>Build stunning layout of news with Shutter</p>
        </div><br><br>
        <section class="container ">
    </div>
    <?php for ($t = 0; $t < 9; $t++) { ?>
    <div class="card-group mx-5" style="width: 40rem;">
  <div class="card" >
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="card" >
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<?php }?>
  
</div>
  </section>

</section>

<?php
include('footer.php')
?>