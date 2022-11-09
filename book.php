<?php
include "connection/connect.php";
session_start();
$sql = "SELECT * FROM book";
$result = $conn->query($sql);

echo "<pre>";
var_dump($result->fetch_assoc());
echo "</pre>";

$wishlist = isset($_SESSION['wishlist']) ? $_SESSION['wishlist'] : [];
echo "<pre>";
print_r($wishlist);
echo "</pre>";

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <?php foreach ($result as $key => $value) { ?>
        <?php if ($value['id'] === $wishlist) { ?>
          <div class="col-lg-3">
            <div class="card" style="width: 16rem;">
              <img src="<?= $value['image'] ?>" class="card-img" alt="...">
              <div class="card-body">
                <h5 class="card-title">
                  <?= $value['name'] ?>
                </h5>
                <p class="card-text">
                  <?= $value['price'] ?>
                </p>
                <a href="wishlist-process.php?id=<?= $value['id'] ?>" class="btn btn-warning">Wishlist</a>
                <a href="" class=" btn btn-danger">Add to cart</a>
              </div>
            </div>
          </div>
        <?php } ?>

      <?php } ?>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>