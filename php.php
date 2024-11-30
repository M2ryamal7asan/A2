<?php

//Data Retrieval//
$url="https://data.gov.bh/explore/dataset/01-statistics-of-students-nationalities_updated/table/?disjunctive.year&disjunctive.semester&disjunctive.the_programs&sort=number_of_students";
$response=file_get_contents($url);
echo $response;
$Sdata=json_decode($response,true);
echo $response;

// cheacking,  for errors when its accure//
if (!$Sdata|| !isset($Sdata["results"])){

    die("error fetching the data..")
}

$records = $Sdata["results"];
print_r($records)

//having the info for the students //
   foreach($records as $student){

          echo $student["Year"];
          echo$student["Semester"];
          echo$student["The Programs"];
          echo$student["Nationality"];
          echo$student["Colleges"];
          echo$student["Number of Students"];

}


?>