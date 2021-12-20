<?php
session_start();
 $link= mysqli_connect("localhost","root","","npl");
        
  //failed to connect to database
  if(mysqli_connect_error())
  {
    die ("Database Connection Error");
  }                                

      
        $query = "SELECT * FROM `list` WHERE completed=1 ORDER BY `team_went`";

  $result = mysqli_query($link, $query);

    $delimiter = ",";
    $filename = "npl-result.csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array( 'Name', 'Year','Team', 'Pool', 'Specialization','Total Point');
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
    
    
	if($row['team_went']=='0')
	$team="Mighty Wizard";
elseif($row['team_went']=='1')
	$team="Invincible Warriors";
elseif($row['team_went']=='2')
	$team="Fiery Falcons";
elseif($row['team_went']=='3')
	$team="Super Spartans";
elseif($row['team_went']=='4')
    $team="Deadly Dragons";
elseif($row['team_went']=='5')
    $team="Storm Riders";



        $lineData = array(strtoupper($row['name']), $year, $team, $row['pool'], $spec, $row['points']);
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