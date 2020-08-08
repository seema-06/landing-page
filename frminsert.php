<?Php
include('connection.php');
 


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// connect form to database 
$camp_id="vcnow_ephra_b1";


$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['location'];
$company=$_POST['company'];
$designation=$_POST['designation'];
$experience=$_POST['experience'];
$utm_source=$_POST['utm_source'];
$utm_content=$_POST['utm_content'];
$utm_campaign=$_POST['utm_campaign'];
$calling_status="Yet To Call";

$ip=$_SERVER['REMOTE_ADDR'];

$lead_status="";
$date=date("d-m-Y",time());
$time=date("Y:m:d H:i:s",time());

$_SESSION["name"] = $name;

//echo $name;
//validation

if(trim($name)=='' || trim($email)=='' || trim($contact)=='' || trim($city)=='' || trim($company)==''|| trim($designation)=='' || trim($experience)==''){
	echo "2";
}
else{
// insert data
$sql = "INSERT INTO campaign (name, email, contact, city, company, designation, experience, ip, time, utm_source, utm_content, utm_campaign,camp_id,date,calling_status,lead_status) VALUES ( '".$name."', '".$email."', '".$contact."', '".$city."', '".$company."', '".$designation."', '".$experience."','".$ip."', '".$time."', '".$utm_source."', '".$utm_content."', '".$utm_campaign."','".$camp_id."' ,'".$date."','".$calling_status."','".$lead_status."')";

// echo $sql;
$sql_res=mysqli_query($conn,$sql);

	
$subject = "Accelerate Growth with IIM AHMEDABAD Senior Management Programme (Batch 04)";

$message = "
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>LMS</title>
</head>

<body style='margin:0; padding:0; font-family:Verdana, Geneva, sans-serif; font-size:14px; color:#50772a;'>
<div style='width:80%; margin:0 auto; margin-top:3%;'>

<div>
<p style='line-height:24px;'>Dear ".$name.",</p>

<p style='line-height:24px;'>Thank you for your enquiry on the IIM Ahmedabad Senior Management Programme.
Our academic advisors will reach you shortly to provide better insight on the programme.</p>

<p style='line-height:24px;'> <strong>At IIMA, innovation lies at the base of every programme and the aim is to cater the best, to the
best, from the best.</strong></p>
<p style='line-height:24px;'>IIM Ahmedabad (IIMA) has been consistently ranked as the premier management school in the
country by several national agencies. IIMA programmes are also ranked highly in several
international rankings. In 2008, IIMA became the first management school in the country to be
awarded EQUIS (European Quality Improvement System) accreditation by the EFMD (European
Foundation for Management Development).</p>

</div>

<div>
<h3>OBJECTIVES</h3>

<ul style='list-style:disc;'>
<li style='line-height:24px;'>The Programme is open to experienced employees who have proven themselves and look
forward to leadership roles soon. It seeks to further organizational effectiveness and
excellence in performance through the development of human resources. It builds upon the
experience of the participants, enhancing their effectiveness in leading their organization.</li>
<li style='line-height:24px;'>Programme provides unique perspectives on best practices in managing teams, handling
adversity, and defining one’s own personal leadership style.</li>
<li style='line-height:24px;'>Programme develops the skills required to take strategic and managerial decisions necessary
in Senior Management roles.</li>
</ul>
</div>

<div>
<h3>PROGRAMME USP’s</h3>

<ul style='list-style:disc;'>
<li style='line-height:24px;'>Academically rigorous. It inculcates reflection and self-study of concepts through intense
collective 360-degree learning.</li>
<li style='line-height:24px;'>Opportunity to network and learn from the fellow participants who are achievers with their
rich experience and diversified backgrounds.</li>
<li style='line-height:24px;'>3 visits to IIMA campus of 4 days each, to constitute 12 days of in campus learning.
</li>
<li style='line-height:24px;'>ertification from a premier institution.</li>
<li style='line-height:24px;'>Learning from some of the best faculty. IIMA pedagogy of bringing problem situations to the
classroom through cases.</li>
<li style='line-height:24px;'>Successful candidates will be Awarded with IIMA Alumni Status.</li>
</ul>
</div>

<div>
<h3>PROGRAMME DURATION</h3>
<p style='line-height:24px; font-size:14px;'>12 Months (Including 12 days of Campus Immersion through 3 visits)</p>
</div>

<div>
<h3>PEDAGOGY</h3>
<p style='line-height:24px;'>The pedagogy consists of a judicious blend of lectures, discussions and real life cases delivered in a
highly interactive way that builds on the multi-disciplinary and multi-domain experience of
participants. The case study methodology of IIMA makes it an enriching experience for the
participants as they ‘learn-unlearn-relearn’.</p>
</div>

<div>
<h3>PROGRAM FEES</h3>
<p style='line-height:24px;'>INR 5.10 LACS + GST payable in 4 easy installments</p>
</div>

<div>
<h3>HOW TO APPLY</h3>
<p style='line-height:24px;'>Interested applicants may apply by clicking the APPLY NOW tab below:<br />
<a style='line-height:24px;color:#009'  href='http://vcrvcnow.in/STUDENT-REG/registration-ahmedabad.php' target='_blank'> http://vcrvcnow.in/STUDENT-REG/registration-ahmedabad.php</a></p>
<p style='line-height:24px;'>Watch a YouTube Video with student feedback on IIMA Senior Management programme <br />
<a style='line-height:24px;color:#009'  href='https://youtu.be/518eVu0Sx4A' target='_blank'> https://youtu.be/518eVu0Sx4A</a></p>
<p style='line-height:24px;'>Seats are limited for this programme; hence you may apply at the earliest.</p>
</div><br />

<div style='margin-bottom:3%;'>
<p style='line-height:24px; '>With Regards,</p>
<p style='line-height:24px; '>IIMA – VCNow Team</p>
</div>

</div>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: noreply@vcnow.in' . "\r\n";

// mail($email,$subject,$message,$headers);

  


	echo "1";

	}




?>
