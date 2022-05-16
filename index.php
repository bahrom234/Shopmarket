<?
include 'inc/header.php';
require_once 'bd.php';

?>


<div id="tooplate_slider" class="section_content"><span class="frame"></span>
    <div id="carousel">
        <div class="panel">

            <div class="details_wrapper">

                <div class="details">
                    <?
                    $select = mysqli_query($bd, "SELECT * FROM `indexslider`");
                    $mylanguage = mysqli_fetch_assoc($select);
                    do { ?>
                        <div class="detail">
                            <h2><?= $mylanguage['title'] ?></h2>
                            <p><?= $mylanguage['text'] ?></p>
                            <a href="<?= $mylanguage['href'] ?>" title="Read more" class="slider_more">
                                <?= $mylanguage['hreftext'] ?>
                            </a>
                        </div><!-- /detail -->
                    <? } while ($mylanguage = mysqli_fetch_assoc($select)); ?>
                </div><!-- /details -->

            </div><!-- /details_wrapper -->

        </div><!-- /panel -->

        <a href="javascript:void(0);" class="previous" title="Previous">Previous</a>
        <a href="javascript:void(0);" class="next" title="Next">Next</a>

        <div id="slider-image-frame">
            <div class="backgrounds">
                <?
                $select = mysqli_query($bd, "SELECT * FROM `indexsliderimg`");
                $mylanguage = mysqli_fetch_assoc($select);
                do { ?>
                    <div class="item item_1">
                        <img src="images/slider/<?= $mylanguage['img'] ?>" alt="image" />
                    </div><!-- /item -->
                <? } while ($mylanguage = mysqli_fetch_assoc($select)); ?>
            </div><!-- /backgrounds -->
        </div>
    </div>
    <div class="clear"></div>
</div> <!-- END of slider -->

<div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    <div class="product">
        <form action="bd.php" method="post">
            <h1>New Products</h1>
            <?
            $select = mysqli_query($bd, "SELECT * FROM `indexproduct`");
            $mylanguage = mysqli_fetch_assoc($select);
            do { ?>
                <div class="product_box">
                    <div class="img_box"><span></span>
                        <a href="productdetail.php?id=<?=$mylanguage['id'] ?>">
                            <img src="images/product/<?=$mylanguage['img'] ?>" alt="image" />
                        </a>
                    </div>
                    <h2>
                        <a href="productdetail.php?id=<?=$mylanguage['id'] ?>">
                            <?=$mylanguage['title'] ?>
                        </a>
                    </h2>
                    <p class="price"><?= $mylanguage['price']?></p>
                </div>
            <? } while ($mylanguage = mysqli_fetch_assoc($select)); ?>
        </form>
    </div>
    <div class="clear h20"></div>
    <hr />
    <div class="clear h10"></div>

    <div class="product">
        <h1>Popular Products</h1>

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
<!-- =====================================FOOTER=================================================== -->
<?
include './inc/footer.php';
?>