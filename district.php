<?php
session_start();

//open connection
$ch = curl_init();

$url = 'https://api.sandbox.slcedu.org/api/rest/v1/educationOrganizations?organizationCategories=Local%20Education%20Agency&sortBy=nameOfInstitutionsortOrder=ascending';

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
$json = json_decode($result);

curl_close($ch);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
	<link type="text/css" rel="stylesheet" href="style.css" charset="utf-8" />
</head>
<body>
	<h1>District View</h1>
    <div class = "cookie-crumb">District</div>
    <div class = "content-container">
		<?php
		$totalEntities = 1;
		
        foreach ($json as $student) {?>
            <a class = "element<?php echo ($totalEntities % 2 == 0 ? " even" : ""); ?>" href="schools.php?id=<?php echo $student->id; ?>"><img src="images/district.png" title="Click here to view my schools"><br /><?php echo $student->nameOfInstitution; ?></a>
		<?php $totalEntities++; } ?>
    </div>
</body>
</html>