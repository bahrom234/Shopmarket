<?
include './inc/header.php'
?>

<div id="tooplate_main"><span class="main_border main_border_t"></span><span class="main_border main_border_b"></span>
    <div class="col col_1">
        <h1>Checkout</h1>

        <h3>BILLING DETAILS </h3>
    </div>
    <div class="col col_2">
        <label>Enter your full name as it is on the credit card:<label>
                <input name="fullname" type="text" id="fullname" style="width:300px;" />
                <label>Address:</label>
                <input name="address" type="text" id="address" style="width:300px;" />
                <label>City:</label>
                <input name="city" type="text" id="city" style="width:300px;" />
                <label>Country:</label>
                <input name="country" type="text" id="country" style="width:300px;" />

    </div>

    <div class="col col_2">
        <label>E-MAIL</label>
        <input name="email" type="text" id="email" style="width:300px;" />
        <label>PHONE</label>
        <span style="font-size:10px; display: block;">Please, specify your reachable phone number. YOU MAY BE GIVEN
            A CALL TO VERIFY AND COMPLETE THE ORDER.</span>
        <input name="phone" type="text" id="phone" style="width:300px;" />
    </div>

    <hr />

    <div class="col col_1">
        <h3>SHOPPING CARD</h3>
        <h4>TOTAL: <strong>$140</strong></h4>
        <p><input type="checkbox" />I have accepted the Terms of Use.</p>
        <p><a href="#"><img src="images/1311260370_paypal-straight.png" alt="paypal" /></a>&nbsp;Recommended if you have 
        a PayPal account. Fastest delivery time.
    </p>
    </div>
    <div class="clear"></div>
</div> <!-- END of main -->

</div> <!-- END of wrapper -->

<?
include './inc/footer.php';
?>