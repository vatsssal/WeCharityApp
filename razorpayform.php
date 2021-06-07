<?php session_start();
$user_id=$_SESSION['user_id'];
include'connect.php'; 
$rs=$_REQUEST['rs'];
$charity_id=$_REQUEST['charity_id'];
?>
 <form method="POST" action="https://api.razorpay.com/v1/checkout/embedded">
				<input type="hidden" name="key_id" value="rzp_test_tB0N3KreyNLVpg">
				  <input type="hidden" name="charity_id" value="<?php echo $charity_id; ?>">
				  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
				  <input type="hidden" name="rs" value="<?php echo $rs*100; ?>">

				  <input type="hidden" name="callback_url" value="pay_php.php">
				  <input type="hidden" name="cancel_url" value="<?php echo $site_url; ?>/Cancel/<?php echo $sql3; ?>">
				  <button type="submit" id="btnsubmit" style="display:none;">Submit</button>
				</form>