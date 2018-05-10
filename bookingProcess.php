<?php
session_start();
  if (isset($_POST['bookButton'])){
    
    $date = $_POST["date"];
    $time1 = (int)substr($_POST["time1"],0,2);
    $time2 = (int)substr($_POST["time2"],0,2);
    $numberofguests = $_POST["numberofguests"];
    $request = $_POST["request"];
    echo $time1;
    echo $time2."<br>";
    $userid = $_SESSION["user_id"];
    $restid = $_SESSION['rest_id'];
    $restname = $_SESSION['rest_name'];
    if($date == "" || $time1 == "" || $time2 == "" || $numberofguests == "" ){
      echo "<script type='text/javascript'>alert('Please fill in the missing fields.');window.location.replace(\"registrationPage.php\");</script>";
    }
    else{
      //get restaurant details
      include("connection.php");
      $query = "SELECT * FROM restaurant WHERE rest_id='$restid'";
      $result = mysqli_query($con,$query);
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

        $opentime = $row["rest_opentime"];
        // echo $row[rest_opentime];
        $closetime = $row["rest_closetime"]; 
        // echo $row['rest_closetime']; 
        $seats = $row["rest_seats"];
        // echo $row["rest_seats"];
      }


      //get the current booking statuses of that restaurant
      $query = "SELECT * FROM booking WHERE rest_id='$restid' AND book_date='$date'";
      $result = mysqli_query($con,$query);
      $book = 1;//can book
      $booked = 0;//number of people booked in that period
      //date has past already
      $localdate = date('Y-m-d');
      if($localdate>=$date){
        echo "failed";
        echo "<script type='text/javascript'>alert('date has pasted already');window.location.replace(\"bookingPage.php?restid=$restid&restname=$restname\");</script>";
      }

      //time out of range
      if($time1<$opentime||$time2>$closetime){
        $book=0;
        echo "failed";
        echo "<script type='text/javascript'>alert('Time is out of range');window.location.replace(\"bookingPage.php?restid=$restid&restname=$restname\");</script>";
      }
      while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo "here ".$row['book_time1']." ".$row['book_time2']."<br>";

        if(($time1>=$row['book_time1']&&$time1<=$row['book_time2'])||($time2>=$row['book_time1']&&$time2<=$row['book_time2'])){//booking time is already occupied
          $booked = $booked+$row['book_size'];
          //echo "inside ";
          
        }
      }
      echo "\n\n\n".$booked."\n\n\n";
      if($booked+$numberofguests>$seats){//with this booking, the number of people exceeds max seaat number
        echo "<br> seats ".$booked." ".$numberofguests." ".$seats."<br>"; 
        $book=0;
      }
      if($book==0){
        echo "failed";
        echo "<script type='text/javascript'>alert('Time is not avaliable');window.location.replace(\"bookingPage.php?restid=$restid&restname=$restname\");</script>";
        
      }
      else if($book==1){
        //no problems
        mysqli_query($con,"
        INSERT INTO
        booking(book_size,book_date,book_time1,book_time2,rest_id,user_id)
        VALUES('$numberofguests','$date','$time1','$time2','$restid','$userid')");
        echo "successss";
        echo "<script type='text/javascript'>alert('Booked success');window.location.replace(\"profile.php\");</script>";
      }
    }
    mysqli_close($con);
  }
?>
