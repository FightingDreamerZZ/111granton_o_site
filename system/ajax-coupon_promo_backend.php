<?php
/**
 * Created by PhpStorm.
 * Date: 2018-11-27
 * Time: 3:57 PM
 */

$coupon_code = $_POST['coupon_code'];
if(isset($_POST['status'])){
    $field = 'status';
    $old_status = $_POST['status'];
}
elseif (isset($_POST['type'])){
    $field = 'type';
    $old_type = $_POST['type'];
}

?>
<script>
    //function load() {
    //    document.getElementById("select_status").value = "<?php //echo $old_status;?>//";
    //}
</script>

<form name="form1" method="post">

    <?php

        if($field == 'status'){
        echo <<<TEMP
                <select name="new_status"
                    id="select_status"
                    style="color:#000">
                    <option value="" selected disabled>--Please select a status--</option>
                    <option value="generated"
                            title="The coupon has just been automatically generated, and haven't been used yet.">
                        Generated</option>
                    <option value="redeemed"
                            title="The coupon has been redeemed. It cannot be used again.">Redeemed</option>
                </select>
    
TEMP;
        }
        elseif ($field == 'type'){
            echo <<<TEMP
                <select name="new_type"
                    id="select_type"
                    style="color:#000">
                    <option value="" selected disabled>--Please select a type--</option>
                    <option value="N/A"
                            title="">
                            N/A</option>
                    <option value="buy_new"
                            title="">
                        Buying new cart</option>
                    <option value="trade_in"
                            title="">
                            Trade in old cart</option>
                </select>
    
TEMP;
        }
    ?>

	<input type="submit" style="color:#000" name="submit" value="Submit"/>

    <input type="text" style="display:none;" name="coupon_code" value = "<?php echo $coupon_code; ?>" autocomplete="off"/>
<!--    <input type="text" style="display:none;" name="appli" value = "--><?php //echo $appli;?><!--" autocomplete="off"/>-->
<!--    <input type="text" style="display:none;" name="field" value = "--><?php //echo $field;?><!--" autocomplete="off  "/>-->
<!--    <input type="text" style="display:none;" name="user" value = "--><?php //echo $user_of_cart;?><!--" autocomplete="off"/>-->
</form>