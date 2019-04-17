<?php 
session_start();

if (!isset($_SESSION['name'])){
  header("Location: index.php")
;}
?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
      <?php 
      echo '<h3> you have '. $_SESSION['Pecan nuts'].' Pecan nuts </h3><br>';
      echo '<h3> you have '. $_SESSION['Chocolate chips'].' Chocolate chips </h3><br>';
      echo '<h3> you have '. $_SESSION['Chocolate cookies'].' Chocolate cookie </h3><br>';
      echo '<h3> you have '. $_SESSION['M&MS'].' M&MS </h3><br>';
      echo '<br>';
      echo "<a href='#'><h3> Order Now ! </h3></a>"
      ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
