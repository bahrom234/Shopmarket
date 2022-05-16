<?
include './inc/header.php'
?>


<div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>

    <div id="content">
        <h2>FAQs</h2>

        <?
        $select = mysqli_query($bd, "SELECT * FROM `faqstext`");
        $mylanguage = mysqli_fetch_assoc($select);
        do { ?>
            <h5><?= $mylanguage['title'] ?></h5>
            <p><?= $mylanguage['text'] ?>
                <a href="<?= $mylanguage['href'] ?>">
                    <?= $mylanguage['hreftext'] ?>
                </a>
            </p>
            <hr />
        <? } while ($mylanguage = mysqli_fetch_assoc($select)); ?>

        <p>&nbsp;</p>
        <h5>Thank you for shopping with us!</h5>
        <p>&nbsp;</p>
        <div class="cleaner h40"></div>
    </div> <!-- END of content -->

    <div id="sidebar">
        <div class="sidebar_section sidebar_section_bg">
            <h3>Popular Products</h3>
            <ul class="sidebar_link_list popular_products">
                <?
                $select = mysqli_query($bd, "SELECT * FROM `faqsproduct`");
                $mylanguage = mysqli_fetch_assoc($select);
                do { ?>
                    <li>
                        <img src="images/product/<?= $mylanguage['img'] ?>" align="image" />
                        <span class="title">
                            <a href="<?= $mylanguage['href'] ?>"><?= $mylanguage['title'] ?></a>
                        </span>
                        <span class="price"><?= $mylanguage['price'] ?></span>
                        <span class="clear"></span>
                    </li>
                <? } while ($mylanguage = mysqli_fetch_assoc($select)); ?>
            </ul>
        </div>
    </div> <!-- END of sidebar -->




    <div class="clear"></div>
</div> <!-- END of main -->

</div> <!-- END of wrapper -->

<?
include './inc/footer.php';
?>