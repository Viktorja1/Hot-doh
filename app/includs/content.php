<?php include(ROOT_PATH . '/DB/connection.php'); ?>
<?php include(ROOT_PATH . '/includs/functions.php'); ?>
<?php
$foods = getAllFoods();
?>
<body>

<div class="container">
    <!-- content -->



        <?php foreach ($foods as $food): ?>
               <div class="content">
                <div class="imgs">
                <img src="<?php echo BASE_URL . $food['img']; ?>" class="imgs" alt="">
                <h3><?php echo $food['title'] ?></h3>
                <span><?php echo $food['price'] ?></span>
                <hr>
                <span><?php echo $food['text'] ?></span>
<button id="edit" type="button" name="edit">Edit</button>

            </div>
        <?php endforeach ?>
    </div>
    <!-- // content -->
</div>
<!-- // container -->

</body>