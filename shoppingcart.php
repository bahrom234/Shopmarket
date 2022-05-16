<?
    include './inc/header.php'
?>
   
    <div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    
    <div id="content">
    	<h1>Items in Cart</h1>
    	
        <table width="580px" cols="0" cellspacing="0" cellpadding="5">
          <tr bgcolor="#ddd">
            <?
            $select = mysqli_query($bd, "SELECT * FROM `shopheader`");
            $mylanguage = mysqli_fetch_assoc($select);
            do{?>
                <th width="220" align="left"><?= $mylanguage['title'] ?>    </th> 
            <?}while($mylanguage = mysqli_fetch_assoc($select));?>
                <th width="90"></th>
                
          </tr>
            <?
            $select = mysqli_query($bd, "SELECT * FROM `shopcart`");
            $mylanguage = mysqli_fetch_assoc($select);
            do{?>
            <tr>
                <td><img src="images/product/<?=$mylanguage['img']?>" alt="image" /></td> 
                <td><?=$mylanguage['title']?></td> 
                <td align="center"><input type="text" value="1" style="width: 20px; text-align: right" /> </td>
                <td align="right"><?=$mylanguage['price']?> </td> 
                <td align="right"><?=$mylanguage['priced']?></td>
                <td align="center">
                    <a href="#">
                        <img src="images/<?=$mylanguage['removeimg']?>" alt="remove"/><br />
                        <?=$mylanguage['remove']?>
                    </a> 
                </td>
            </tr>
            <?}while($mylanguage = mysqli_fetch_assoc($select));?>
            <tr>
                <td colspan="3"style="background: url(images/tooplate_h2.png) repeat" align="right"  height="30px">Have you modified your basket? Please click here to <a href="shoppingcart.html"><strong>Update</strong></a>&nbsp;&nbsp;</td>
                <td align="right" style="background: url(images/tooplate_h2.png) repeat; font-weight:bold"> Total </td>
                <td align="right" style="background: url(images/tooplate_h2.png) repeat; font-weight:bold">$140 </td>
                <td style="background: url(images/tooplate_h2.png) repeat; font-weight:bold"> </td>
            </tr>
        </table>
        <p class="right"><a href="checkout.php" class="button">checkout</a></p>
            
        
		</div>
        
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
        </div>
        <div class="clear"></div>
    </div> <!-- END of main -->

</div> <!-- END of wrapper -->

<?
    include './inc/footer.php'; 
?>