<?
include './inc/header.php';
?>


<div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    <div class="product">
        <h1>Products</h1>
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

    <hr />

    <div class="pagging">
        <?
        $select = mysqli_query($bd, "SELECT * FROM `productpage`");
        $mylanguage = mysqli_fetch_assoc($select);
        do { ?>
        <ul>
            <li><a href="<?= $mylanguage['href']?>" target="_parent"><?= $mylanguage['text'] ?></a></li>
        </ul>
        <?}while($mylanguage = mysqli_fetch_assoc($select));?>
        <div class="clear"></div>
    </div>


    <div class="clear"></div>
</div> <!-- END of main -->

</div> <!-- END of wrapper -->

<?
include './inc/footer.php';
?>