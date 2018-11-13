
<?php

$no1=0;
 $servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from tablename order by column desc";
$result = $conn->query($sql);
    ?>
	


<html style="height: 100%;">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title>Project Name</title>
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
     
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css">
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.0/bootstrap-table.min.css'>
<link rel='stylesheet prefetch' href='https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css'>
      <link rel="stylesheet" href="css/paystyle.css">
      <link rel="stylesheet" type="text/css" href="css/new.css">
   </head>
   <body class="" style="position: relative; min-height: 100%; top: 0px;">
      <nav class="navbar">
         <div class="col-sm-4 col-xs-4"><a href="/"><img class="nav-logo" style="float:left" src=""></a></div>
         <div class="col-sm-4 col-xs-4 text-center"><a class="brand-logo" href="index.html">Project Name</a></div>
         <div class="col-sm-4 col-xs-4"></div>
      </nav>
      <div class="container">
      <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="home.php">Home</a></li><li class="breadcrumb-item active" aria-current="page">Page1</li></ol></nav>
      <h1 class="text-center">Heading</h1>
      <div class="container text-center">
         
                                        
                                                                 
									       
                                    <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
      <th>Col1</th>
      <th>Col2</th>
      <th>Col3</th>
      <th>Col4</th>
      <th>Col5</th>
      <th>Col6 </th>
      <th>Col7</th>
      <th>Col8</th>
     <th>Col9</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
      <th>Col1</th>
      <th>Col2</th>
      <th>Col3</th>
      <th>Col4</th>
      <th>Col5</th>
      <th>Col6 </th>
      <th>Col7</th>
      <th>Col8</th>
     <th>Col9</th>
            </tr>
        </tfoot>
 
         <tbody>
    <?php
      if( mysqli_num_rows( $result )==0 ){
        //echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $result ) ){
          echo "<tr><td>{$row['col1']}</td><td>{$row['col2']}</td><td>{$row['col3']}</td><td>{$row['col3']}</td><td>{$row['col4']}</td><td>{$row['col5']}</td><td>{$row['col6']}</td><td>{$row['col7']}</td><td>{$row['col8']}</td></tr>\n";
        }
      }
    ?>
  </tbody>
    </table>


			
         </div>
      </div>
      <footer class="footer"></footer>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script><script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script> -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js'></script>
<script  src="js/pay.js"></script>
   </body>
</html>