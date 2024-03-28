<?php
  $drugs = [
    [
      "img"=>"baimundan tea.JPG", 
      "name"=>"Baimudan tea", 
      "price"=>20000, 
      "desc"=>"Aromatic, Smooth, Floral, Subtle, Delightful."
    ],
    [
      "img"=>"chamomile tea.jpg", 
      "name"=>"Chamomile tea", 
      "price"=>10000, 
      "desc"=>"Calming, Floral, Soothing, Relaxing, Fragrant."
    ],
    [
      "img"=>"dianhong tea.jpg", 
      "name"=>"Dianhong tea", 
      "price"=>40000, 
      "desc"=>"Rich, Malty, Sweet, Robust, Smooth."
    ],
    [
      "img"=>"green tea.jpg", 
      "name"=>"Green tea", 
      "price"=>60000, 
      "desc"=>"Refreshing, Earthy, Light, Antioxidant-rich, Grassy."
    ],
    [
      "img"=>"pappermint tea.jpg", 
      "name"=>"Pappermint tea", 
      "price"=>11000, 
      "desc"=>"Refreshing, Cooling, Aromatic, Digestive, Invigorating."
    ],
    [
      "img"=>"white tea.jpg", 
      "name"=>"White tea", 
      "price"=>20000, 
      "desc"=>"Delicate, Subtle, Floral, Light, Refreshing."
    ],
  ];
  function intToIdr($money) {
    return 'Rp' . number_format($money, 0, ',', '.');
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Herbal Tea - Home Page</title>
  <link rel="icon" href="img/blacktea.png" type="image/x-icon">
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }
    body {
      width: 100%;
      height: 98vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #eee;
    }
    .content {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    .card-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      width: 75%;
      gap: 20px;
    }
    .card {
      width: 250px;
      height: 250px;
      background: white;
      border: 1px solid #c4c4c4;
      border-radius: 5px;
      transition: all .3s ease;
    }
    .card:hover {
      box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.5);
      transform: translate(0, -3px);
    }
    .card img {
      width: 250px;
      height: 150px;
      border-radius: 5px 5px 0 0;
    }
    .card-desc {
      padding: 0 13px;
    }
    .card-desc p:nth-child(1) {
      font-weight: 700;
    }
    .card-desc p:nth-child(2) {
      padding: 1px 0;
      font-weight: 400;
      color: #999;
      font-weight: 500;
      font-size: 0.9rem;
    }
    .card-desc p:nth-child(3) {
      font-weight: 400;
      color: #aaa;
      font-size: 0.7rem;
    }
    </style>
</head>
<body>
  <div class="content">
    <h1>Herbal Tea</h1>
    <div class="card-container">
    <?php foreach($drugs as $drug) : ?>
      <div class="card">
        <img src="img/<?= $drug["img"]; ?>" alt="">
        <div class="card-desc">
          <p><?= $drug["name"]; ?></p>
          <p><?= intToIdr($drug["price"]); ?>/pack</p>
          <p><?= $drug["desc"]; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
</body>
</html>