<?php
session_start();

//open connection
$ch = curl_init();

$_SESSION['schoolID'] = $_GET['id'];
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/schools/' . $_GET['id'] . '/sections';

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
	<h1>Classroom View</h1>
    <div class = "cookie-crumb"><a href = "district.php">District</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href = "schools.php?id=<?php echo $_SESSION['districtID']; ?>">School</a>&nbsp;&nbsp;>&nbsp;&nbsp;Classroom</div>
    <div class = "content-container">
		<?php
		$totalEntities = 1;
		
        foreach ($json as $student) {?>
            <a class = "element<?php echo ($totalEntities % 2 == 0 ? " even" : ""); ?>" href="student.php?id=<?php echo $student->id; ?>"><img src="images/classroom.png" title="Click here to view my classes"><br /><?php echo $student->uniqueSectionCode; ?></a>
		<?php $totalEntities++; } ?>
    </div>
</body>
</html>
