<?
include './inc/header.php';
include 'bd.php';
?>


<div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
        <div class="product">
            <?
            $id = $_GET['id'];
            $baza = mysqli_query($bd, "SELECT * FROM `productone` WHERE `id`='$id'");
            $row = mysqli_fetch_assoc($baza);
            do{?>
            <div class="col col_2 product_preview">
                <img src="images/product/<?= $row['img'] ?>" class=" left" alt="image" />
                <div class="clear"></div>
            </div>
            <div class="col col_2 product_detail">
                <h1><?= $row['title'] ?></h1>
                <p><?= $row['text'] ?></p>
                <div class="clear h20"></div>
                <p class="price"><?= $row['price'] ?><span>Avaliability: <strong>In stock</strong></span></p>
                <div class="clear h20"></div>
                <p class="add_to_cart">Quantity <input type="text" value="" style="width: 20px; text-align: right" /></p>
            </div>
            <div class="clear"></div>
            <form action="post.php" method="post">
                <input type="text" name="id" value="<?= $row['id'] ?>">
                <input type="text" name="img" value="<?= $row['img'] ?>">
                <input type="text" name="title" value="<?= $row['title'] ?>">
                <input type="text" name="text" value="<?= $row['text'] ?>">
                <input type="text" name="price" value="<?= $row['price'] ?>">
                <input type="submit" value="Add to Cart" name="po">
            </form>
            <?}while ($row = mysqli_fetch_assoc($baza));?>
        </div>
    <hr />

    <div class="product">
        <h2>Recommended Products</h2>
        <?
        $select = mysqli_query($bd, "SELECT * FROM `indexproduct`");
        $mylanguage = mysqli_fetch_assoc($select);
        do { ?>
            <div class="product_box">
                <div class="img_box"><span></span>
                    <a href="<?= $mylanguage['href'] ?>"><img src="images/product/<?= $mylanguage['img'] ?>" alt="image" /></a>
                </div>
                <h2>
                    <a href="<?= $mylanguage['hrefsecond'] ?>">
                        <?= $mylanguage['title'] ?>
                    </a>
                </h2>
                <p class="price"><?= $mylanguage['price'] ?></p>
            </div>
        <? } while ($mylanguage = mysqli_fetch_assoc($select)); ?>
    </div>



    <div class="clear"></div>   
</div> <!-- END of main -->

</div> <!-- END of wrapper -->

<?
include './inc/footer.php';
?>  