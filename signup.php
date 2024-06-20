<?php
$name = $phone = $address = $gender = $email = $password = $confirmPassword = '';
$nameError = $phoneError = $addressError = $genderError = $emailError = $passwordError = $confirmPasswordError = '';
function testing($data)
{
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
  $name = testing($_POST['name']);
  $phone = testing($_POST['phone']);
  $address = testing($_POST['address']);
  $gender = testing(isset($_POST['gender']) ? $_POST['gender'] : '');
  $email = testing($_POST['email']);
  $password = testing($_POST['password']);
  $confirmPassword = testing($_POST['confirmPassword']);

  if (empty($name) || empty($phone) || empty($address) || empty($gender) || empty($email) || empty($password) || empty($confirmPassword)) {
    $nameError = empty($name) ? ' * Name is required' : '';
    $phoneError = empty($phone) ? ' * Phone is required' : '';
    $addressError = empty($address) ? ' * Address is required' : '';
    $genderError = empty($gender) ? ' * Gender is required' : '';
    $emailError = empty($email) ? ' * Email is required' : '';
    $passwordError = empty($password) ? ' * Password is required' : '';
    $confirmPasswordError = empty($confirmPassword) ? ' * Confirm your password' : '';
  } elseif($password != $confirmPassword) {
    echo "<script>
      alert('wrong password confirmation')
    </script>";
  } else {
    header("Location: index.php?name=$name");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/blacktea.png" type="image/x-icon">
  <title>Tea - Sign Up</title>
  <link rel="stylesheet" href="signup.css">
</head>

<body>
  <aside>
    <img src="img/blacktea.png" alt="">
  </aside>
  <main>
    <div class="card">
      <nav>
        <h1>Create new account.</h1>
        <a href="index.php">
          &times;
        </a>
      </nav>
      <form action="signup.php" method="post">
        <div class="top">
          <div class="left">
            <label for="name">Name</label><span class="nameError error" id="nameError">
              <?= $nameError ?>
            </span><br>
            <input type="text" name="name" id="name" value="<?= $name ?>"><br>
            <div class="gender">
              <label for="gender">Gender</label><span class="name error"><?= $genderError ?></span>
              <select name="gender" id="gender">
                <option disabled selected>Select Gender</option>
                <option value="male" <?= ($gender == 'male') ? 'selected' : '' ?>>Male</option>
                <option value="female" <?= ($gender == 'female') ? 'selected' : '' ?>>Female</option>
              </select>
            </div>
          </div>
          <div class="right">
            <label for="number">Phone</label><span class="error">
              <?= $phoneError ?>
            </span><br>
            <input type="tel" name="phone" id="number" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
              value="<?= $phone ?>"><br>

            <label for="address">Address</label><span class="error">
              <?= $addressError ?>
            </span><br>
            <input type="text" name="address" id="address" value="<?= $address ?>"><br>
          </div>
        </div>
        <div class="bottom">
          <label for="email">Email</label><span class="error">
            <?= $emailError ?>
          </span><br>
          <input type="email" name="email" id="email" value="<?= $email ?>"><br>

          <label for="password">Password</label><span class="error">
            <?= $passwordError ?>
          </span><br>
          <input type="password" name="password" id="password"><br>

          <label for="confirmPassword">Confirm Password</label><span class="error">
            <?= $confirmPasswordError ?>
          </span><br>
          <input type="password" name="confirmPassword" id="confirmPassword" onkeyup="checkPassword()"><br>
          <div id="passwordCheck"></div>

          <button type="submit" name="submit" id="submit">Sign Up</button>
          <p>Do you have account? <a href="">Sign In</a></p>
        </div>
      </form>
    </div>
  </main>
  <script>
    const password = document.getElementById("password")
    const confirmPassword = document.getElementById("confirmPassword")
    const passwordCheck = document.getElementById("passwordCheck")
    const checkPassword = () => {
      if (password.value === confirmPassword.value) {
        passwordCheck.innerHTML = "password match"
        passwordCheck.style.color = "green"
      } else {
        passwordCheck.innerHTML = "password not match"
        passwordCheck.style.color = "red"
      }
    }
  </script>
</body>

</html>