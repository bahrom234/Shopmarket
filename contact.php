<?
include './inc/header.php'
?>

<div id="tooplate_main">
    <span class="main_border main_border_t"></span>
    <span class="main_border main_border_b"></span>

    <div class="col col_1">
        <h1 class="wpadding">Contact</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at velit vel dolor vehicula lobortis ut in
            massa. Maecenas ut tortor vel est elementum pretium. Integer sagittis bibendum convallis.
        </p>
    </div>
    <div class="col col_2">

        <div id="contact_form">
            <h2>Write your message</h2>
            <form method="post" name="contact" action="#">
                <label for="author">Name:</label> <input type="text" id="author" name="author" class="input_field" />
                <label for="email">Email:</label> <input type="text" id="email" name="email" class="input_field" />
                <label for="subject">Subject:</label> <input type="text" id="subject" name="email" class="input_field" />
                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                <input type="submit" name="Submit" value="Submit" class="submit_btn" />
            </form>
        </div>
    </div>

    <div class="col col_2">
        <h2>Our Address</h2>

        <div class="col_4">
            <?
            $select = mysqli_query($bd, "SELECT * FROM `contact`");
            $mylanguage = mysqli_fetch_assoc($select);
            do { ?>
                <h5><?= $mylanguage['title'] ?></h5>
                <?= $mylanguage['text'] ?>
            <? } while ($mylanguage = mysqli_fetch_assoc($select)); ?>
            Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>
        </div>

        <div class="clear h30"></div>
        <div class="img_border img_border_b">
            <iframe width="421" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=1&amp;sll=35.101934,-95.712891&amp;sspn=61.425057,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;ll=40.771133,-73.974187&amp;spn=0.057126,0.132093&amp;t=m&amp;z=14&amp;output=embed"></iframe>
        </div>
        <br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=1&amp;sll=35.101934,-95.712891&amp;sspn=61.425057,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;ll=40.771133,-73.974187&amp;spn=0.057126,0.132093&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
    </div>

    <div class="clear"></div>

    <div class="clear"></div>
</div> <!-- END of main -->

</div> <!-- END of wrapper -->

<?
include './inc/footer.php';
?>