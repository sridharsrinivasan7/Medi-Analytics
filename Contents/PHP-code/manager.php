<?php

 $conn = new mysqli("localhost", "root", "Tiger","ITMD523");
 if($conn->connect_error)
 {
  echo "Connection error";
 }
 $query1 = "select healthid, count(age) as AGE20To30 from patientdetails where age > 20 and Age <30 group by healthid";
 $result = $conn->query($query1);

?>

<?php
 $query2 = "select healthid, count(age) as AGE30TO40 from patientdetails where age > 30 and Age <40 group by healthid";
 $result2 = $conn->query($query2);
 
 $query3 = "select healthid, count(age) as AGE40TO60 from patientdetails where age > 40 and Age < 60 group by healthid";
 $result3 = $conn->query($query3);

 $query4 = "select POB, count(healthid) as MAX from patientdetails where healthid=(select max(healthid) from patientdetails) group by POB";
 $result4 = $conn->query($query4);
?>

<html>
  <head>
<title> Analytics Chart </title>
<form name="form" action = "Page1.html" method = "post">
<input type ="submit" name= "submit" value = "Logout"/>
</form>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart1);
      google.charts.setOnLoadCallback(drawChart2);
      google.charts.setOnLoadCallback(drawGraph);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['HealthID', 'Age'],
          <?php
         while($row=$result->fetch_assoc())
         {
           echo "['".$row['healthid']."',".$row['AGE20To30']."],";
         }
?>
        ]);

        var options = {
          title: 'Health issues among Age groups from 20 to 30'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      function drawChart1() {

        var data = google.visualization.arrayToDataTable([
          ['HealthID', 'Age'],
          <?php
         while($row=$result2->fetch_assoc())
         {
           echo "['".$row['healthid']."',".$row['AGE30TO40']."],";
         }
?>
        ]);

        var options = {
          title: 'Health issues among Age groups from 30 to 40'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));

        chart.draw(data, options);
      }
      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['HealthID', 'Age'],
          <?php
         while($row=$result3->fetch_assoc())
         {
           echo "['".$row['healthid']."',".$row['AGE40TO60']."],";
         }
?>
        ]);

        var options = {
          title: 'Health issues among Age groups from 40 to 60'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
      }


      function drawGraph() {

        var data = google.visualization.arrayToDataTable([
          ['POB', 'People'],
          <?php
         while($row=$result4->fetch_assoc())
         {
           echo "['".$row['POB']."',".$row['MAX']."],";
         }
?>
        ]);

        var barchart_options = {title:'With 48 records, showing the count of people with all the illness based on a country ',
                       width:700,
                       height:500,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('bargraph'));
        barchart.draw(data, barchart_options);
      }



    </script>
  </head>
  <body>
<table class="columns">
      <tr>
    <td><div id="piechart" style="width: 900px; height: 500px;"></div></td>
    <td><div id="piechart1" style="width: 900px; height: 500px;"></div></td></tr>
<tr><td><div id="piechart2" style="width: 900px; height: 500px;"></div></td>
    <td><div id="bargraph" style="width: 900px; height: 500px;"></div></td>
<table>
<tr>
<center>
<td> 1 diabetes </td>
<td> 2 shortsight </td>
<td> 3 cholesterol </td>
<td> 4 diabetes & shortsight </td>
<td> 5 shortsight & cholesterol </td>
<td> 6 diabetes & shortsight</td>
<td> 7 diabetes,shortsight & cholesterol </td>
</table>
</body>
</html>

