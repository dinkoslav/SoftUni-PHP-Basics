<!DOCTYPE html>
<html>
<head>
    <style>
        #sign{
            color: white;
            text-decoration: none;
            background-color: orange;
            border: 1px solid black;
            padding: 2px;
        }
        td{
            padding: 5px;
        }
        td:first-child a{
            color: black;
            padding-right: 20px ;
            position: relative;
        }
        table tr:nth-child(odd) td{
            background-color: #CCC;
        }
        #head td{
            background-color: blue; !important;
            color: white;
        }
        tr td:last-child{
            text-align: center;
            padding: 0 10px;
        }
        div{
            width: 200px;
            border:1px solid black;
            padding: 10px;
            position: absolute;
            visibility: hidden;
            top:30px;
            left:150px;
            background-color: white;
        }
        #info p{
            text-align: justify;
        }
        p#name{
            margin-top: 0;
        }
        #info span{
            text-decoration: underline;
            float: left;
            color: darkslategrey;
            padding-left: 10px;
            margin-right: 10px;
        }
    </style>
    <script>
        function getPos(id){
            document.getElementById(id).style.visibility = 'visible';
        }

        function stopTracking(id){
            document.getElementById(id).style.visibility = 'hidden';
        }
    </script>
</head>
<body>
    <form method="get">
        <textarea name="input" cols="100" rows="20"></textarea><br>
        Sort by:
        <select name="sort">
            <option value="date">Date</option>
            <option value="name">Name</option>
        </select>
        Order by:
        <select name="order">
            <option value="desc">Descending</option>
            <option value="asc">Ascending</option>
        </select>
        <input type="submit" value="Submit">
    </form>
<?php
    if(isset($_GET['input']) && isset($_GET['sort']) && isset($_GET['order'])){
        $matcher = '/(.*)\n+/';
        $namematcher = '/(\w*\s*\,*\.*)+[^-]/';
        $lectormatcher = '/(-)(\w+ \w+)(-)/';
        $timematcher = '/(-)(\d+-\d+-\d+ \d+:\d+)/';
        $infomatcher = '/(\d+ )([\D+]+\n)/';
        $sort = $_GET['sort'];
        $order = $_GET['order'];
        $check = preg_match_all($matcher,$_GET['input'], $senteces );
        $infoNum = 0;
        foreach($senteces[0] as $sentece){
            $check = preg_match($namematcher,$sentece, $name);
            $check = preg_match_all($lectormatcher,$sentece, $lector );
            $check = preg_match($timematcher,$sentece, $time );
            $check = preg_match($infomatcher,$sentece, $info );
            $seminars[] = array('name' =>$name[0], 'lector' =>$lector[2][0], 'date'=>strtotime($time[2]), 'time'=>$time[2], 'info' =>$info[2]);
        }
        foreach ($seminars as $key => $row) {
            $sortKey[$key]  = $row[$sort];
        }
        if ($order == 'asc') {
            array_multisort($sortKey, SORT_ASC, $seminars);
        } else {
            array_multisort($sortKey, SORT_DESC, $seminars);
        }
?>
<table>
    <thead id="head"><td><strong>Seminar name</strong></td><td><strong>Date</strong></td><td><strong>Participate</strong></td></thead>
<?php
    foreach($seminars as $key => $row){
        $infoNum++;
?>
    <tr><td><a href="#" onmousemove="getPos(<?php echo $infoNum ?>)" onmouseout="stopTracking(<?php echo $infoNum ?>)">
                <div id="<?php echo $infoNum ?>">
                    <span>Lecturer: </span>
                    <p id="name"><?php echo $row['lector']?></p>
                    <span>Details: </span>
                    <p><?php echo $row['info']?></p>
                </div><?php echo $row['name']?>
            </a></td><td><?php echo $row['time']?></td><td><a id="sign" href="#">SIGN UP</a></td></tr>

<?php
    }
?>
</table>
<?php
    }
?>
</body>
</html>

