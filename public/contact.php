
<?php

session_start();

include '../includes/functions.php';
//include fucntion
$firstName = getSubmissionFromSession('first_name');
$lastName = getSubmissionFromSession('last_name');
$email = getSubmissionFromSession('email');

$showSubmissionData = shouldShowSubmissionData();

$firstNameError = getErrorMessageFromSession('first_name');
$lastNameError = getErrorMessageFromSession('last_name');
$emailError = getErrorMessageFromSession('email');
$emailstatus = getErrorMessageFromSession('emailstatus');
$_SESSION['errors'] = [];
$_SESSION['submission'] = [];

?>
<?php include '../includes/partials/header.php'; ?>
        <?php include '../includes/partials/navigation.php'; ?>

        <form method="POST" action="../includes/submit.php">
    <!--_________HERO START_________ -->
 <img
 src="../includes/images/tai_banner.jpg"
 alt="Nature"
 class="responsive hero1"
 width="600"
 height="400"
/>
<!--_________HERO END_________ -->
        <div class="container mb-30">
        <div class="form-row col-md-6 mx-auto">
            <h1>Say Hi? I'll email you.</h1>
                <div class="form-group col-md-12">
                    <label for="first_name">Name</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" required placeholder="First Name" value="<?php echo $firstName; ?>">
                          <span style="color: red">
                              <?php echo $firstNameError; ?>
                        </span> 
                </div>  
                <div class="form-group col-md-12">
                    <label for="last_name">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" required placeholder="Last Name" value="<?php echo $lastName; ?>">
                          <span style="color: red">
                              <?php echo $lastNameError; ?>
                        </span> 
                </div> 
                <div class="form-group col-md-12">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" required placeholder="Email Address" value="<?php echo $email; ?>">
                          <span style="color: red">
                              <?php echo $emailError; ?>
                        </span> 
                </div> 
                <button type="submit" class="btn btn-primary">Submit</button>
                <span style="color: green">
                              <?php echo $emailstatus; ?>
                        </span> 
                </div>
            </form> 
</div>
       
            

        <?php include '../includes/partials/footer.php'; ?>