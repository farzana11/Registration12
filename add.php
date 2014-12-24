<?php
$track  = $_POST['track'];
$firstName = $_POST['firstName'];
$lastName  = $_POST['lastName'];
$fatherName  = $_POST['fatherName'];
$motherName  = $_POST['motherName'];
$phoneNumber  = $_POST['phoneNumber'];
$emailAddress  = $_POST['emailAddress'];
$alternativeEmailAddress  = $_POST['alternativeEmailAddress'];
$nationalIdNumber  = $_POST['NationalIdNumber'];
$birthCertificateNo  = $_POST['birthCertificateNo'];
$presentAddress  = $_POST['presentAddress'];
$permanentAddress  = $_POST['permanentAddress'];
$village  = $_POST['village'];
$postOffice  = $_POST['postOffice'];
$policeStation  = $_POST['policeStation'];
$district  = $_POST['district'];
$educationalQualification  = $_POST['educationQualification'];
$university  = $_POST['university'];
$subject  = $_POST['subject'];
$result  = $_POST['result'];
$passingYear  = $_POST['passingYear'];
$careerObjective  = $_POST['careerObjective'];
$jobExperience  = $_POST['jobExperience'];


$link = mysqli_connect("localhost",
    "root",
    "apple777",
    "students");

$query = "INSERT INTO `students`.`users` (
`first_name`, `last_name`, `father_name`, `mother_name`, `phone_number`, `email_address`, `alternative_email`, `national_id_number`, `birth_certificate_no`, `present_address`, `permanent_address`, `village`, `post_office`, `thana`, `district`, `education_qualification`, `university`, `subject`, `result`, `passing_year`, `career_objective`, `job_experience`
)
VALUES (
    '$firstName', '$lastName' , '$fatherName' , '$motherName' , '$phoneNumber' , '$emailAddress' , '$alternativeEmailAddress' , '$nationalIdNumber' , '$birthCertificateNo' , '$presentAddress' , '$permanentAddress' , '$village' , '$postOffice' , '$policeStation' , '$district' , '$educationalQualification' , '$university' , '$subject' , '$result' , '$passingYear','$careerObjective' , '$jobExperience'
 )";

mysqli_query($link, $query);
header('location:list.php');
?>
