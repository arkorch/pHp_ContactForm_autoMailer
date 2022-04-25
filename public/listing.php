<?php include '../includes/partials/header.php'; ?>
        <?php include '../includes/partials/navigation.php'; ?>
 <!--_________HERO START_________ -->
 <img
 src="../includes/images/tai_banner.jpg"
 alt="Nature"
 class="responsive hero1"
 width="600"
 height="400"
/>
<!--_________HERO END_________ -->
<br><br><br>
 <!--Gates-->
 <?php
 //listings displayed in array
 $portfolio=array
 (
 array("Ahmedabad Re-design","../includes/images/caro2.jpg","Ahmedabad is known as the city of gates. Such grand gateways were used to restrict access in the walled city and acted as iconic entrances to welcome visitors. The forms of the arches are at the root of the re-branding exercise."),
 array("TailorBird App","../includes/images/TailorBird Document_Page_24.jpg","Ahmedabad is known as the city of gates. Such grand gateways were used to restrict access in the walled city and acted as iconic entrances to welcome visitors. The forms of the arches are at the root of the re-branding exercise. "),
 array("Windermere Brewery","../includes/images/lap_mockup.png","Ahmedabad is known as the city of gates. Such grand gateways were used to restrict access in the walled city and acted as iconic entrances to welcome visitors. The forms of the arches are at the root of the re-branding exercise. ")
 );
 ?>

 <div class="container">
 <div class="row">
  <div class="col-sm-8 first-column">
    <img src="<?php echo $portfolio[0][1] ?>" class="responsive img-rounded" />
  </div>
  <div class="col-sm-4 second-column">
    <h4><?php echo $portfolio[0][0] ?></h4>
    <p>
    <?php echo $portfolio[0][2] ?>
    </p>
  </div>
  <br><br>
 </div>
  <div class="row">
    <div class="col-sm-8 first-column">
      <img src="<?php echo $portfolio[1][1] ?>" class="responsive img-rounded" />
    </div>

    <div class="col-sm-4 second-column">
    <h4><?php echo $portfolio[1][0] ?></h4>
      <p>
      <?php echo $portfolio[1][2] ?>
      </p>
    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-8 first-column">
        <img src="<?php echo $portfolio[2][1] ?>" class="responsive img-rounded" />
      </div>
      <div class="col-sm-4 second-column">
      <h4><?php echo $portfolio[2][0] ?></h4>
        <p>
        <?php echo $portfolio[2][2] ?>
        </p>
      </div>
</div>
</div>
 </div>

<br><br><br>
<?php include '../includes/partials/footer.php'; ?>