<?php
/**
 * Created by PhpStorm.
 * Date: 2018-11-27
 * Time: 12:00 PM
 * coupon_promo_backend.php
 */

//require "database1.php";
require "Database.php";

	session_start();

	if(!isset($_SESSION["username"])){
        echo("<script>window.alert('You must login to the backend first.');</script>");
		header("Location: /login/");
		exit();
	}

	$db = new Database();
	$conn = $db->get_db_connection();

	if(isset($_POST['new_status'])){
        $query1 = ' UPDATE coupon SET status="'.$_POST['new_status'].'" WHERE coupon_code="'.$_POST['coupon_code'].'"';

        if (mysqli_query($conn, $query1)) {
            echo "<script>alert('The status of this coupon has successfully updated to:  ".$_POST['new_status']." !');</script>" ;
        } else {
            echo "<script>console.log('Error updating record: ".mysqli_error($conn)."');</script>" ;
        }

    }elseif(isset($_POST['new_type'])){
        $query1 = ' UPDATE coupon SET `type`="'.$_POST['new_type'].'" WHERE coupon_code="'.$_POST['coupon_code'].'"';

        if (mysqli_query($conn, $query1)) {
            echo "<script>alert('The type of this coupon has successfully updated to:  ".$_POST['new_type']." !');</script>" ;
        } else {
            echo "<script>console.log('Error updating record: ".mysqli_error($conn)."');</script>" ;
        }
    }

    if(isset($_GET['txt_coupon_code'])&&(($_GET['txt_coupon_code'])!="")){
        $query = "SELECT * FROM coupon WHERE coupon_code='".$_GET['txt_coupon_code']."';";
    }
    else {
        $query = "SELECT * FROM coupon ORDER BY time_generated DESC;";
    }


	// First we will check the user name
//	$query = "SELECT * FROM coupon ORDER BY time_generated DESC;";
	$result_set = mysqli_query($conn,$query) or die(mysql_error());

	$coupons = array();
	while($row = $result_set -> fetch_assoc()){
		$coupons[] = $row;
	}


    $db->close_db_connection();

?>

<!DOCTYPE HTML>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Coupon Promo Backend</title>

	<!-- Bootstrap v3.3.7 Stylesheet -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<!-- Google OpenFont -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<!-- FontAwesome v4.7.0 -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

	<!-- Slick Slider CSS -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
	<!-- Custom Stylesheet -->
	<link href="../css/system_coupon_promo_backend.css" type="text/css" rel="stylesheet" />
</head>
<body class="fadein subpage">

<script>

    function edit_status(coupon_code,status) {
        let xmlhttp;
        let postdata = "coupon_code="+coupon_code+"&status="+status;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("status_"+coupon_code).innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("POST","ajax-coupon_promo_backend.php?",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.setRequestHeader("Content-length", postdata.length);
        xmlhttp.send(postdata);
    }

    function edit_type(coupon_code,type){
        let xmlhttp;
        let postdata = "coupon_code="+coupon_code+"&type="+type;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("type_"+coupon_code).innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("POST","ajax-coupon_promo_backend.php?",true);
        xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        xmlhttp.setRequestHeader("Content-length", postdata.length);
        xmlhttp.send(postdata);
    }

</script>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<img src="../login/assets/images/logo-ch.lee.jpg" alt="Ch.Lee Logo" />
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="text-center">
						<img src="../login/assets/images/logo.png" alt="AGT Electric Car Logo" />
						<span class="version">version: alpha 1.0.1</span>
					</div>
				</div>
			</div>

            <form name="form_search" method="get" action="" >
                <div class="row form-group">
                    <div class="col-sm-1">
                        <h4>Search:</h4>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" id="txt_coupon_code" name="txt_coupon_code" class="form-control" value="<?php /*echo $temp_key;*/ ?>" autocomplete="off" onkeyup=""
                            placeholder="Enter a coupon code to see if it exists..."
                        />
                    </div>
                    <div class="col-sm-2">
                        <input type="submit" class="form-control" value="Search"/>
                    </div>
                </div>
            </form>

			<hr />
			<div class="row">
				<div class="col-lg-12">
					<table class="table table-bordered table-striped" id="client-table">
						<tbody>
							<tr>
								<th>Coupon Code</th>
								<th>Email</th>
								<th>Status</th>
								<th>Type</th>
								<th>Time Generated</th>
                                <th>Email Consent</th>
                            </tr>

							<?php

								foreach($coupons as $coupon){

									$coupon_code = $coupon['coupon_code'];
									$email = $coupon['email'];
									$status = $coupon['status'];
									$type = $coupon['type'];
									$time_generated = $coupon['time_generated'];
                                    $consent = $coupon['email_consent'];
									if($consent == true){
										$consent_display = "<span><i class=\"fa fa-check fa-fw\"></i></span>";
									} else {
										$consent_display = "<span><i class=\"fa fa-times fa-fw\"></i></span>";
									}



									echo <<<TEMP
									<tr>
										<td>{$coupon_code}</td>
										<td>{$email}</td>
										<td id="status_{$coupon_code}"
                                                ondblclick="edit_status('{$coupon_code}','{$status}')"
                                                <!--onblur="changed()-->">
                                            {$status}
                                        </td>
										<td id="type_{$coupon_code}" ondblclick="edit_type('{$coupon_code}','{$type}')">
                                            {$type}
                                        </td>
										<td>{$time_generated}</td>
										<td>{$consent_display}</td>
									</tr>
TEMP;
								}
							?>


						</tbody>
					</table>
                    <h4 id="lbl_msg" style="color: white;<?php echo (count($coupons)!=0)?'display:none':''?>">Zero result returned...</h4>
                    <p>
                        Note: Double click on cells in "Status" column or "Type" column to activate editing.
                    </p>
                </div>
            </div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					&copy; <?php echo date('Y');?> Channel Lee Media - All Right Reserved | 162 King William Street, Hamtilon, ON, Canada L8R 3N9
				</div>
			</div>
		</div>
	</footer>


	<!-- Google jQuery v3.2.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap v3.3.7 JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Slick JavaScript -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>