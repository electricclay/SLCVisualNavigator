<?php
session_start();

//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] ;

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
$json_main = json_decode($result);
//var_dump($json);
curl_close($ch);

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

//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] . "/studentParentAssociations/parents";

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
$json_parents = json_decode($result);

curl_close($ch);

//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] . "/studentDisciplineIncidentAssociations/disciplineIncidents";

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
$json_discipline = json_decode($result);

curl_close($ch);

//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] . "/studentCohortAssociations/cohorts";

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
$json_cohorts = json_decode($result);

curl_close($ch);

//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] . "/reportCards";

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
$json_reportcards = json_decode($result);

curl_close($ch);

//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] . "/courseTranscripts/courses";

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
$json_courses = json_decode($result);

curl_close($ch);


//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] . "/studentSectionAssociations/sections";

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
$json_sections = json_decode($result);

curl_close($ch);

//open connection
$ch = curl_init();
$url = 'https://api.sandbox.slcedu.org/api/rest/v1/students/' . $_GET['id'] . "/attendances";

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
$json_attendance = json_decode($result);

curl_close($ch);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
	<link type="text/css" rel="stylesheet" href="style.css" charset="utf-8" />
    <link href="/load/interface/css/pop-up-window.css" rel="stylesheet" type="text/css">
    <link href="/load/interface/css/style-sheet.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/load/interface/javascript/jquery.js"></script>
	<script type="text/javascript" src="/load/interface/javascript/jqueryui.js"></script>
    <script type="text/javascript" src="/load/interface/javascript/pop-up-window.js"></script>
</head>
<body>
	<div class = "AJAXLoader"><div class = "AJAXLoaderMessage">Loading<br><br><img src = "../interface/images/ajax-loader.gif"></div></div>
    <div class = "popUpWindow">
      <div class = "popUpWindowBody"> 
        <div class = "popUpWindowHeader"> 
          <div class = "popUpWindowHeaderLeft"></div>
          <div class = "popUpWindowHeaderCenter"></div>
          <div class = "popUpWindowHeaderRight"></div>
        </div>
        <div class = "popUpWindowContent"></div>
        <div class = "popUpWindowSubmission"></div>
        <div class = "popUpWindowClose"></div>
      </div>
    </div>
	<h1>Student View</h1>
    <div class = "cookie-crumb"><a href = "district.php">District</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href = "schools.php?id=<?php echo $_SESSION['districtID']; ?>">School</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href = "section.php?id=<?php echo $_SESSION['schoolID']; ?>">Classroom</a>&nbsp;&nbsp;>&nbsp;&nbsp;Student</div>
    <div>
      <table width="600" border="0" cellspacing="0" cellpadding="2">
        <tr>
          <td height="105" align="center"><a class = "get-assessments" href="get-assessments.php?id=<?php echo $_GET['id']; ?>"><img src="images/test.png" width="43" height="50" border="0"></a><br />Assessments (<?php echo (isset($json_assessments->code) != true ? sizeof($json_assessment) : "0"); ?>)</td>
          <td align="center"><a href="#"><img src="images/parents.png" width="36" height="36" border="0"></a><br />Parents (<?php echo (isset($json_parents->code) != true ? sizeof($json_parents) : "0"); ?>)</td>
          <td align="center"><a href="#"><img src="images/discipline.png" width="50" height="45" border="0"></a><br />Discipline (<?php echo (isset($json_discipline->code) != true ? sizeof($json_discipline) : "0"); ?>)</td>
        </tr>
        <tr>
          <td height="109" align="center"><img src="images/groups.png" width="43" height="50" border="0"></a><br />Groups (<?php echo (isset($json_cohorts->code) != true ? sizeof($json_cohorts) : "0"); ?>)</td>
          <td align="center" style = "border: 1px solid #e4e4e4;"><img src="images/<?php echo ($json_main->sex=='Male' ? "boy" : "girl"); ?>.png" title="Click here to view my classes"><br /><?php echo $json_main->name->firstName . " "  . $json_main->name->lastSurname; ?></td>
          <td align="center"><img src="images/reportcard.png" width="43" height="50" border="0"></a><br />Report Cards (<?php echo (isset($json_reportcards->code) != true ? sizeof($json_reportcards) : "0"); ?>)</td>
        </tr>
        <tr>
          <td align="center"><img src="images/course.png" width="43" height="50" border="0"></a><br />Courses (<?php echo (isset($json_courses->code) != true ? sizeof($json_courses) : "0"); ?>)</td>
          <td align="center"><img src="images/classroom.png" width="43" height="50" border="0"></a><br />Classrooms (<?php echo (isset($json_sections->code) != true ? sizeof($json_sections) : "0"); ?>)</td>
          <td align="center"><img src="images/attendance.png" width="43" height="50" border="0"></a><br />Attendance (<?php echo (isset($json_attendance->code) != true ? sizeof($json_attendance) : "0"); ?>)</td>
        </tr>
      </table>
      <br />
    </div>
    <script type="text/javascript">
		$(".get-assessments").click(function(e) {
			e.preventDefault();
			
			$.ajax({
				url: $(this).attr("href"),
				dataType: "html",
				timeout: 60000,
				success: function(data) {
					$(".popUpWindowContent").html(data);
					setPopUpWindow("Student Assessments", 800, null);
				}
			});
		});
	</script>
</body>
</html>