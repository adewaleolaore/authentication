<?php include_once('inc/header.php');

// Define variables and initialize with empty values
$firstname = $lastname = $email = $password = "";
$firstname_err = $lastname_err = $email_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST") { 

    //var_dump($_POST); exit;

    //validate firstname & lastname
    if(empty(trim($_POST["firstname"]))) {
        $firstname_err = "Please enter your firstname";
    } else {
        $firstname = trim($_POST["firstname"]);
    }

    if(empty(trim($_POST["lastname"]))) {
        $lastname_err = "Please enter your lastname";
    } else {
        $lastname = trim($_POST["lastname"]);
    }
 
    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter your email address.";
    } else {
        $email = trim($_POST["email"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Check input errors before inserting in database
    if (empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($password_err)) {
                
        $stmt = $mysqli->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("ssss", $param_firstname, $param_lastname, $param_email, $param_password);
        
        // Set parameters
        $param_firstname = $firstname;
        $param_lastname = $lastname;
        $param_email = $email;
        $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
        
        // Attempt to execute the prepared statement
        $stmt->execute();

        // Redirect to login page
        header("location: login.php");
        echo "User created successfully.";

        // Close statement
        $stmt->close();
    }
    
    // Close connection
    $mysqli->close();
}
?>

<main class="form-signin">
  <form action="register.php" method="POST">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please register</h1>

    <div class="form-floating">
      <input type="text" name="firstname" class="form-control <?php echo (!empty($firstname_err)) ? 'is-invalid' : ''; ?>" id="floatingInput" placeholder="John" value="<?php echo $firstname; ?>">
      <label for="floatingInput">Firstname</label>
      <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
    </div>
    <div class="form-floating">
      <input type="text" name="lastname" class="form-control <?php echo (!empty($lastname_err)) ? 'is-invalid' : ''; ?>" id="floatingInput" placeholder="Doe" value="<?php echo $lastname; ?>">
      <label for="floatingInput">Lastname</label>
      <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
    </div>
    <div class="form-floating">
      <input type="email" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" id="floatingInput" placeholder="name@example.com" value="<?php echo $email; ?>">
      <label for="floatingInput">Email address</label>
      <span class="invalid-feedback"><?php echo $email_err; ?></span>
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword" placeholder="Password" value="<?php echo $password; ?>">
      <label for="floatingPassword">Password</label>
      <span class="invalid-feedback"><?php echo $password_err; ?></span>
    </div>

 <!--    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> -->
    <input type="submit" class="w-100 btn btn-lg btn-primary" value="Register">
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>

<?php include_once('inc/footer.php'); ?>