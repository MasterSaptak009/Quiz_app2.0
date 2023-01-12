<?php

$GLOBALS['hotsaddr']="localhost";
$GLOBALS['usernm']="root";
$GLOBALS['userpasswordstr']="";
//$GLOBALS['dbnm']="";







if(isset($_POST['Sending_data'] ))
{

   

    $parameters=json_decode($_POST['Sending_data']);
    

	$Person_nm=$parameters->Person_nm;
    $Person_scr=$parameters->Person_scr;
    
    $temp= array('outmsg'=>'outSide the try block' );

   // $temp= array('fname' => $fname . 'from backend','lname' => $lname  . 'from backend' );
    try{
        $conn=mysqli_connect($GLOBALS['hotsaddr'],$GLOBALS['usernm'],$GLOBALS['userpasswordstr'],'qz');
        $temp= array('outmsg'=>'Connection success' );
	if($conn)
	{
         
        $sql = "INSERT INTO plears VALUES (null,'".$Person_nm."',".$Person_scr.")";
        //$sql="insert into mcqs values(12,'kl','l','k','j','o',2)";
       $abc= mysqli_query($conn, $sql);
        $temp= array('outmsg'=>' Your Score inserted in db Successfully' );
   
	}
	else
	{
        
        }

    }
    catch(Exception $e){

    }
    
    echo json_encode( $temp );

}

function get_top10(){

$conn=mysqli_connect($GLOBALS['hotsaddr'],$GLOBALS['usernm'],$GLOBALS['userpasswordstr'],'qz');
	if(!$conn)
	{
		
			$temp = array('msg' =>"connection error");
		mysqli_close($conn);

		echo json_encode( $temp );	
	}  
	else
	{      
		$rarray=mysqli_query($conn,"select * from plears  ORDER BY score DSEC");
		$rows=mysqli_num_rows($rarray);
		
		$temp = array('rows' =>$rows );

		for ($i=1; $i<=$rows ; $i++) 
		{ 
		
			$dataarray=mysqli_fetch_array($rarray);


   
			 $temp["c".$i]['P_name']=$dataarray["P_name"] ;
     	
     		 $temp["c".$i]['sc']= $dataarray["score"] ;


      }

			mysqli_close($conn);

		echo json_encode( $temp );	
	}



}
if(isset($_POST['give_h'] ))
{
  get_top10();
}






?>