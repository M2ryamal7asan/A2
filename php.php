<?php

//Data Retrieval//
$url="https://data.gov.bh/explore/dataset/01-statistics-of-students-nationalities_updated/table/?disjunctive.year&disjunctive.semester&disjunctive.the_programs&sort=number_of_students";
$response=file_get_contents($url);

$Sdata=json_decode($response,true);

// cheacking,  for errors when its accure//
if (!$Sdata|| !isset($Sdata["records"])){

    die("error fetching the data..")
}

$data = $Sdata["records"]; 


//having the Data and information about the  students //

   foreach($data as $student){

        $Year[]= $student["Year"];
          $Semester[]=$student["Semester"];
            $The_Program[]= $student["The Program"];
               $Nationality[]=$student["Nationality"];
                 $Colleges[]=$student["Colleges"];
                    $Number_of_Students[]=$student["Number of Students"];

}


?>




