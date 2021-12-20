<?php
session_start();
 $link= mysqli_connect("localhost","root","","npl");
        
  //failed to connect to database
  if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  }                                

      
        $query = "SELECT * FROM `list`  ORDER BY `pool`";

  $result = mysqli_query($link, $query);

    $delimiter = ",";
    $filename = "npl-ordered.csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
      $fields = array( 'Name', 'Year', 'Specialization','Phone No.','Pool');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
   foreach($result as $row ){
       if($row['year']=='0')
	$year="1st";
else if($row['year']=='1')
	$year="2nd";
else if($row['year']=='2')
	$year="3rd";
else if($row['year']=='3')
	$year="M.Tech";
	if($row['style']=='0')
	$spec="Batting";
else if($row['style']=='1')
	$spec="Balling";
else if($row['style']=='2')
	$spec="Wicket Keeping";
else if($row['style']=='3')
    $spec="All Rounder";
    


        $lineData = array(strtoupper($row['name']), $year, $spec, $row['phone'],$row['pool']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);

exit;

?>