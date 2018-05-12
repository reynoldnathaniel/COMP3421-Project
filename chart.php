<?php
include("header.php");
echo "<script>var rest_id = $_SESSION[rest_id];</script>";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Restaurant</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Date Picker -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <style type="text/css">
      #register-box{
          height: auto;
      }
  </style>

</head>

<body class="colorlib-light-grey">
  <br>
  <center><a href="staffHomepage.php"><h1>Homepage Staff</h1></a></center><br>

  <center>
    <div id="gender"></div><br>
  </center>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  // Load google charts
function bubbleSort(a,b)
{
    var swapped;
    do {
        swapped = false;
        for (var i=0; i < a.length-1; i++) {
            if (a[i] < a[i+1]) {
                var temp = a[i];
                a[i] = a[i+1];
                a[i+1] = temp;
                var temp1 = b[i];
                b[i] = b[i+1];
                b[i+1] = temp1;
                swapped = true;
            }
        }
    } while (swapped);
}
  google.charts.load('current', {'packages':['corechart']});
    // Draw the chart and set the chart values
  function drawChartGender() {

    var text;
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        var data = new google.visualization.DataTable();
        text = this.responseText;
        var countUsers = text.split(" ").length;
        var userSplit = text.split(" ");
        data.addColumn('string', 'Browser');
        data.addColumn('number', 'Number of Booking');
        var row;
        var res = [];
        var male=[];
        var maleName = "Male";
        male.push(maleName);
        male.push(0);
        var female=[];
        var femaleName = "Female";
        female.push(femaleName);
        female.push(0);
        for(var i = 0; i < countUsers; i++){
          var insideSplit = userSplit[i].split("_");
          var book_date = insideSplit[0];
          var book_time1 = insideSplit[1];
          var book_time2 = insideSplit[2];
          var user_gender = insideSplit[3];
          var user_DOB = insideSplit[4];
          if(user_gender == "Male"){
            male[1]++;
          }
          else if(user_gender == "Female"){
            female[1]++;
          }
        }
        var temp = [];
        temp.push(male);
        temp.push(female);
        res.push(temp);
        data.addRows([
          male,
          female
          ]);
        // Set chart options
        var options = {'title':'Male and Female Booking', 'width':600, 'height':600};

        // Instantiate and draw the chart.
        var chart = new google.visualization.BarChart(document.getElementById('gender'));
        chart.draw(data, options);
      }
    };
    xhttp.open("GET", "getChart.php?board=hello&rest_id="+rest_id, false);
    xhttp.send(); 
    
  }
  google.charts.setOnLoadCallback(drawChartGender);
</script>
</body>
</html>