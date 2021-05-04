<?php include_once('inc/header.php'); ?>

<main class="form-signin">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Set New Password</h1>

    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password">
      <label for="floatingInput">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password Confirm">
      <label for="floatingPassword">Password Confirm</label>
    </div>

    <input class="w-100 btn btn-lg btn-primary" type="submit" value="Reset Password">
    <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
  </form>
</main>

<?php include_once('inc/footer.php'); ?>