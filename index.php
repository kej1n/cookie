<?php 
session_start();
?>

<?php
if (!isset($_GET['add_to_cart'])){
 $_SESSION['Pecan nuts']=0;
 $_SESSION['Chocolate chips']=0;
 $_SESSION['Chocolate cookies']=0;
 $_SESSION['M&MS']=0;
} 

if (isset($_GET['add_to_cart'])){
  if($_GET['add_to_cart']==46){
    $_SESSION['Pecan nuts'] = $_SESSION['Pecan nuts'] + 1;
  }
  if($_GET['add_to_cart']==36){
    $_SESSION['Chocolate chips'] = $_SESSION['Chocolate chips'] + 1;
  }
  if($_GET['add_to_cart']==58){
    $_SESSION['Chocolate cookies'] = $_SESSION['Chocolate cookies'] + 1;
  }
  if($_GET['add_to_cart']==32){
    $_SESSION['M&MS'] =  $_SESSION['M&MS'] + 1;
  }
}

?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=46" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a> <?php if (isset($_SESSION['Pecan nuts'])){echo '<h3> total : '. $_SESSION['Pecan nuts']. '</h3>';}
          else{
            echo '<h3>0</h3>';
          } ?>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=36" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a> <?php if(isset($_SESSION['Chocolate chips'])){echo '<h3> total : '. $_SESSION['Chocolate chips']. '</h3>';}
          else{
            echo '<h3>0</h3>';
          } ?>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=58" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><?php if(isset($_SESSION['Chocolate cookies'])){echo '<h3> total : '. $_SESSION['Chocolate cookies']. '</h3>';}
          else{
            echo '<h3>0</h3>';
          } ?>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=32" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a><?php if(isset($_SESSION['M&MS'])){echo '<h3> total : '. $_SESSION['M&MS']. '</h3>' ;}
          else{
            echo '<h3>0</h3>';
          } ?>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
