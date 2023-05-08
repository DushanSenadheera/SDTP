<?php

if (mysqli_num_rows($result) > 0) {

    $userRecord = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $userRecord = $row;
    }
    echo json_encode(
        array(
            "success" => true,
            "userData" => $userRecord[0],
        )
    );
} else {
    echo json_encode(array("success" => false));
}




if($resultOfQuery->num_rows>0)
{ 
  $userRecord=array();
  echo $userRecord;
  while($rowFound=$resultOfQuery->fetch_assoc())
  {
    $userRecord=$rowFound;
  }
  echo json_encode(array(
    "success"=>true,
    "userData"=>$userRecord[0],
    )
);




}
else
{
  echo json_encode(array("successerer"=>false));
}


?>