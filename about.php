<?
include './inc/header.php'
?>

<div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
            
        <?
        $select = mysqli_query($bd, "SELECT * FROM `abouttextone`");
        $mylanguage = mysqli_fetch_assoc($select);
        do{?>
        <div class="col col_2">
            <h3><?= $mylanguage['title'] ?></h3>
            <p><?= $mylanguage['text'] ?></p>
            <p><?= $mylanguage['textSecond'] ?></p>
        </div><?}while($mylanguage = mysqli_fetch_assoc($select));?>

    <hr />

   
    <?
    $select = mysqli_query($bd, "SELECT * FROM `abouttextsecond`");
    $mylanguage = mysqli_fetch_assoc($select);
    do{?> 
    <div class="col col_3">
        <h3><?=$mylanguage['title']?></h3>
        <?=$mylanguage['text']?>
    </div>
    <?}while($mylanguage = mysqli_fetch_assoc($select));?>
    <hr />

    <div class="col col_32">
        <h3></h3>
    </div>

    <?
    $select = mysqli_query($bd, "SELECT * FROM `abouttextthree`");
    $mylanguage = mysqli_fetch_assoc($select);
    do{?> 
    <div class="col col_32">
        <h3><?=$mylanguage['title']?></h3>
        <?=$mylanguage['text']?>
    </div>
    <?}while($mylanguage = mysqli_fetch_assoc($select));?>
    <hr />

    <div class="clear"></div>
</div> <!-- END of main -->

</div> <!-- END of wrapper -->

<?
include './inc/footer.php';
?>