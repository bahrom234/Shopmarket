
<div id="tooplate_bottom_wrapper">
    <div id="tooplate_bottom">
        <div class="col col_4">
            <h4>Information</h4>
            <ul class="list_bullet">
                <?
                $select = mysqli_query($bd, "SELECT * FROM `footerPartOne`");
                $mylanguage=mysqli_fetch_assoc($select);
                do{?>
                <li><a href="<?=$mylanguage['href']?>"><?=$mylanguage['text']?></a></li> 
                <?}while( $mylanguage=mysqli_fetch_assoc($select));?>   
            </ul>
        </div>
        <div class="col col_4">
            <h4>Services &amp; Support</h4>
            <ul class="list_bullet">
                <?
                $select = mysqli_query($bd, "SELECT * FROM `footerPartTwo`");
                $mylanguage=mysqli_fetch_assoc($select);
                do{?>
                <li><a href="<?=$mylanguage['href']?>"><?=$mylanguage['text']?></a></li> 
                <?}while( $mylanguage=mysqli_fetch_assoc($select));?> 
            </ul>
        </div>
        <div class="col col_4 twitter">
            <h4>Pages</h4>
            <ul class="list_bullet"> 
                <?  
                    $select = mysqli_query($bd, "SELECT * FROM `footerPartThree`");
                    $mylanguage=mysqli_fetch_assoc($select);
                    do{
                ?>
                <li><a href="<?=$mylanguage['href']?>"><?=$mylanguage['text']?></a></li> 
                <?}while($mylanguage=mysqli_fetch_assoc($select));?> 
            </ul>


        </div>
        <div class="col col_4">
            <h4>Newsletter</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <div id="tooplate_newsletter">
                <form action="#" method="get">
                    <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <div class="clear h30"></div>
            <?  
            $select = mysqli_query($bd, "SELECT * FROM `footerimges`");
            $mylanguage=mysqli_fetch_assoc($select);
            do{?>           
            <a href="<?=$mylanguage['href']?>"><img src="images/<?=$mylanguage['img']?>" alt="Facebook" /></a>
            <?}while($mylanguage=mysqli_fetch_assoc($select));?> 
        </div>
      
        <div class="col col_4">
            <h4>Login Admin</h4>
            <p>Admin - PHP</p>
            <div>
                <form action="post.php" method="post">
                <input type="email" placeholder="Add Email" name="email"><br><br>
                <input type="password" placeholder="Password" name="password"><br><br>
                <input type="submit" name="login" value="Sign up" 
                        style="width: 100px; 
                        height:40px;
                        background-color:brown;
                        border:1px brown solid;
                        color:white;">
                </form>
            </div>
        </div> 

        <div class="col col_4">
            <h4>Login User</h4>
            <div>
                <form action="post.php" method="post">
                <input type="text" name="name" placeholder="Enter name"><br><br>
                <input type="email" placeholder="Add Email" name="email"><br><br>
                <input type="password" placeholder="Password" name="password"><br><br>
                <input type="submit" name="user" value="Sign up" 
                        style="width: 100px; 
                        height:40px;
                        background-color:brown;
                        border:1px brown solid;
                        color:white;">
                </form>
            </div>
        </div> 

        <div style="display:block;">
            <button style="width: 100px; height:40px; background-color:brown; border:1px brown solid; color:white;" data-modal>
               <a href="shoppingcart.php">Shop Cart</a> 
            </button>
        </div>    
        <div class="clear"></div>
    </div> <!-- END of bottom -->
</div> <!-- END of bottom wrapper -->

<div id="tooplate_footer_wrapper">
    <div id="tooplate_footer">
        Copyright © 2048 Your Company Name

        - Designed by <a href="http://www.tooplate.com">Tooplate</a>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->

</body>

</html>