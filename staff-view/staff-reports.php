<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Announcements</title>
	
    <?php
    include("../shared-html/header-links-loggedin.html");
    ?>
	<script src="../node_modules/chart.js/dist/Chart.bundle.min.js"></script>
</head>
<body>
<?php
    require("../shared-html/staffnav.html");
    if(!$_SESSION['userID']){
        header('Location: ../loginpage.php');
    }
    ?>
    <?php
    require("../shared-html/staffnav.html");
    ?>
    <div class="container-fluid staff-content">

    	<div class="container-fluid mx-auto my-5" style="width:20rem">
    		<div class="dropdown">
			  <button class="btn btn-primary dropdown-toggle" type="button" id="servicesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    Select Report
			  </button>
			  <div class="dropdown-menu" aria-labelledby="servicesDropdown">
			    <button class="dropdown-item" onclick="showMarriage()">Monthly Marriages</button>
			    <button class="dropdown-item" onclick="showServiceShare()">Percentage Of Services</button>
			    <button class="dropdown-item" onclick=" ">Chart 4</button>
			  </div>
			</div>
    	</div>

		<div class="container">
        <canvas id="chartLoc"></canvas>
    </div>
    <script>
        var chartSpace = document.getElementById('chartLoc');
        
        function showMarriage(){
                var populationChart = new Chart(chartSpace,{
                type: 'bar',
                data:{
                    labels:['January','February','March','April','May'],
                    datasets:[{
                        label:'Marriages',
                        data:[
                            52,
                            28,
                            30,
                            40,
                            50
                        ],
                        backgroundColor:['blue','green','violet','cyan','red']
                    }]
                },
                options:{
                    title:{
                        display:true,
                        text:'Marriages by Month',
                        fontSize:55
                    },
                    legend:{
                        display:false,
                        position:'right',
                        labels:{
                            fontColor:'black'
                        }
                    }
                },
            });
        }
       
        function showServiceShare(){
                var populationChart = new Chart(chartSpace,{
                type: 'pie',
                data:{
                    labels:["Marriages","Baptisms","Confirmations","Funerals","Blah"],
                    datasets:[{
                        data:[
                            52,
                            28,
                            30,
                            40,
                            50
                        ],
                        backgroundColor:['blue','green','violet','cyan','red']
                    }]
                },
                options:{
                    title:{
                        display:true,
                        text:'Church Services Reserved',
                        fontSize:55
                    },
                    legend:{
                        display:true,
                        position:'right',
                        labels:{
                            fontColor:'black'
                        }
                    }
                },
            });
        }


    </script>
    	
    </div>
	
</body>
</html>