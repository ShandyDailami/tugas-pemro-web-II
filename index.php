<?php
$teas = [
  [
    "img" => "baimundan tea.JPG",
    "name" => "Baimudan tea",
    "price" => 20000,
    "desc" => "Aromatic, Smooth, Floral, Subtle."
  ],
  [
    "img" => "chamomile tea.jpg",
    "name" => "Chamomile tea",
    "price" => 10000,
    "desc" => "Calming, Floral, Soothing, Relaxing."
  ],
  [
    "img" => "dianhong tea.jpg",
    "name" => "Dianhong tea",
    "price" => 40000,
    "desc" => "Rich, Malty, Sweet, Robust, Smooth."
  ],
  [
    "img" => "green tea.jpg",
    "name" => "Green tea",
    "price" => 60000,
    "desc" => "Refreshing, Earthy, Light, Antioxidant."
  ],
  [
    "img" => "pappermint tea.jpg",
    "name" => "Pappermint tea",
    "price" => 11000,
    "desc" => "Refreshing, Cooling, Aromatic, Digestive."
  ],
  [
    "img" => "white tea.jpg",
    "name" => "White tea",
    "price" => 20000,
    "desc" => "Delicate, Subtle, Floral, Light, Refreshing."
  ],
];
function intToIdr($money)
{
  return 'Rp' . number_format($money, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tea - Home Page</title>
  <link rel="icon" href="img/blacktea.png" type="image/x-icon">
  <link rel="stylesheet" href="index.css">
</head>

<body>
  <main>
    <nav>
      <h1 class="brand">Tea.</h1>
      <h1>Herbal Tea</h1>
      <div class="profile">
        <img src="img/profile.jpg" alt="">
        <p id="profileName"></p>
        <button id="btn"></button>
      </div>
    </nav>
    <div class="card-container">
      <?php foreach ($teas as $tea): ?>
        <div class="card">
          <img src="img/<?= $tea["img"]; ?>" alt="">
          <div class="card-desc">
            <p>
              <?= $tea["name"]; ?>
            </p>
            <p>
              <?= intToIdr($tea["price"]); ?>/pack
            </p>
            <p>
              <?= $tea["desc"]; ?>
            </p>
            <button>Buy</button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </main>
  <?php
  if (isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "<script>
          document.querySelector('#profileName').innerHTML = '$name'
          document.querySelector('#btn').innerHTML = 'Logout'
          </script>";
  } else {
    $name = 'Guest';
    echo "<script>
          document.querySelector('#profileName').innerHTML = '$name'
              document.querySelector('#btn').innerHTML = 'Sign Up'
            </script>";
  }
  ?>
  <script>
    const regisBtn = document.getElementById("btn")
    regisBtn.addEventListener("click", () => {
      if (regisBtn.innerHTML == 'Logout') {
        setTimeout(() => {
          alert('Logout Success')
          window.location.href = 'index.php';
        }, 500);
      } else {
        setTimeout(() => {
          window.location.href = "signup.php"
        }, 500);
      }
    })
  </script>
</body>

</html>