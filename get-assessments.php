<?php
session_start();

//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] . "/studentAssessments/assessments";

$token = $_SESSION['access_token'];
$code = $_SESSION['code'];
$auth = sprintf('Authorization: bearer %s', $token);
$headers = array(
  'Content-Type: application/vnd.slc+json',
  'Accept: application/vnd.slc+json',
  $auth);
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

//execute post
$result = curl_exec($ch);
$json_assessment = json_decode($result);

curl_close($ch);

$totalEntities = 1;
?>
<div class = "content-container" style = "width: 750px;">
	<?php foreach ($json_assessment as $student) {?>
		<a class = "element<?php echo ($totalEntities % 2 == 0 ? " even" : ""); ?>" href="#"><img src="images/test.png" title="Click here to view my classes"><br /><?php echo $student->academicSubject; ?></a>
	<?php $totalEntities++; } ?>
</div>