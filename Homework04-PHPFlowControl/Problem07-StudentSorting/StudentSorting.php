<!DOCTYPE html>
<html>
<head>	
	<style>
		#main-form thead td{
			border-bottom: 1px solid black;
			border-top: 1px solid black;
			background-color: #FFF !important;
		}
		#main-form td:first-child{
			border-left: 1px solid black;
		}
		#main-form td:last-child{
			border-right: 1px solid black;
		}
		#main-form tr:nth-child(odd) td{
			background-color: #CCC;
		}
		#main-form tr:last-child td{
			border-bottom: 1px solid black;
		}
		a{
			text-decoration:none;
		}
        #output{
            margin-top: 10px;
        }
		#output tr:first-child td{
			background-color: #0000FF;
			color:white;
		}
	</style>
	<script>
		var nextId = 0;
		function addInput() {
			nextId++;
			var inputTr = document.createElement("tr");
			inputTr.setAttribute("id", "row" + nextId);
			inputTr.innerHTML =
				"<td><input type=\"text\" name=\"fname[]\"/></td>" +
					"<td><input type=\"text\" name=\"lname[]\"/></td>" +
					"<td><input type=\"email\" name=\"email[]\"/></td>" +
					"<td>" +
					"<input type=\"number\" name=\"score[]\"/>"+
					"<a href=\"javascript:removeElement('row" + nextId + "')\"><input type=\"button\" value=\"-\"></a>" +
				"</td>";
			document.getElementById('main-form').appendChild(inputTr);
    	}
		function removeElement(id) {
			var inputTr = document.getElementById(id);
			document.getElementById('main-form').removeChild(inputTr);
    	}
	</script>
</head>
<body>
	<form method="get">
		<table id="main-form" cellspacing="0" cellpadding="2">
			<thead><td>First name:</td><td>Second name:</td><td>Email:</td><td>Exam score:</td></thead>
			<script>addInput();</script>
		</table>
		<a href="javascript:addInput()"><input type="button" value="+"></a>
		Sort by: 
		<select name="sort">
			<option value="fn">First name</option>
			<option value="ln">Last name</option>
			<option value="em">Email</option>
			<option value="es">Exam score</option>
		</select>
		Order: 
		<select name="order">
			<option value="desc">Descending</option>
			<option value="asc">Ascending</option>
		</select>
		<input type="submit" name="submit" value="Submit"/>
	</form>
<?php
	if(isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['email']) && isset($_GET['score'])){
		$fnames = $_GET['fname'];
		$lnames = $_GET['lname'];
		$emails = $_GET['email'];
		$scores = $_GET['score'];
		$data = array();
		$sum = 0;
		$count = 0;
		$sort = $_GET['sort'];
		$order = $_GET['order'];
        $avgscore = 0;
		
		for($i = 0; $i < count($fnames); $i++){
			$data[] = array($fnames[$i], $lnames[$i],$emails[$i], $scores[$i]);
			$sum += $scores[$i];
			$count++;
		}

        $avgscore = $sum/$count;

		if($sort == "fn"){
			if($order == "desc"){
                usort($data, function ($a, $b){
                    return strnatcmp($b[0], $a[0]);
                });
			}
			else if($order == "asc"){
				usort($data, function ($a, $b){
                    return strnatcmp($a[0], $b[0]);
					});
			}
		}
		else if($sort == "ln"){
            if($order == "desc"){
                usort($data, function ($a, $b){
                    return strnatcmp($b[1], $a[1]);
                });
            }
            else if($order == "asc"){
                usort($data, function ($a, $b){
                    return strnatcmp($a[1], $b[1]);
                });
            }
		}
		else if($sort == "em"){
            if($order == "desc"){
                usort($data, function ($a, $b){
                    return strnatcmp($b[2], $a[2]);
                });
            }
            else if($order == "asc"){
                usort($data, function ($a, $b){
                    return strnatcmp($a[2], $b[2]);
                });
            }
		}
		else if($sort == "es"){
            if($order == "desc"){
                usort($data, function ($a, $b){
                    return strnatcmp($b[3], $a[3]);
                });
            }
            else if($order == "asc"){
                usort($data, function ($a, $b){
                    return strnatcmp($a[3], $b[3]);
                });
            }
		}
		
		echo "<table id='output' border='1' cellpadding='2' cellspacing='0'";
		echo "<tr><td><strong>First name</strong></td><td><strong>Last name</strong></td><td><strong>Email</strong></td><td><strong>Score</strong></td></tr>";
		foreach($data as $key => $value){
			echo "<tr><td>$value[0]</td><td>$value[1]</td><td>$value[2]</td><td>$value[3]</td></tr>";
		}
        echo "<tr><td colspan='3'><strong>Average Score:</strong></td><td><strong>$avgscore</strong></td></tr>";
        echo "</table>";
	}
?>
</body>
</html>