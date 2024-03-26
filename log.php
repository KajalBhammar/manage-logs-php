<?php
if (isset($_SESSION['sesEmail'])) {
$userId = $_SESSION["sesUserId"];
}

if (!isset($_SESSION['start_time'])) {
    $_SESSION['start_time'] = time();
}

// Calculate the time spent on the current page
$time_spent = time() - $_SESSION['start_time'];

// Get current page URL 
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$currentURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . $_SERVER['QUERY_STRING'];

// Get server related info 
$user_ip_address = $_SERVER['REMOTE_ADDR'];
$referrer_url = !empty($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
$user_agent = $_SERVER['HTTP_USER_AGENT'];

$REQUEST_TIME = $_SERVER['REQUEST_TIME'];
$requesttime = date("Y-m-d H:i:s", $REQUEST_TIME);

// Insert visitor log into database 

$sql = "INSERT INTO logs (page_url, referrer_url, user_ip_address, user_agent, created,userid,time_spent) VALUES (?,?,?,?,NOW(),?,?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssssss", $currentURL, $referrer_url, $user_ip_address, $user_agent,$userId,$time_spent );
$insert = $stmt->execute();


$_SESSION['start_time'] = time();
?>
