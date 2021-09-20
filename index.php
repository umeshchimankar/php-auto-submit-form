<!DOCTYPE html>
<html lang="en">    
<head>
<meta charset="UTF-8">    
<title>Add Record Form</title>
</head>

<body>
<!-- <form action="insert.php" method="post"> -->
<!-- <form name="index.php" id="index.php" action="insert.php" method="POST"> -->
<form name="myForm" id="myForm" target="_myFrame" action="insert.php" method="POST">
   
    <p>
        <label for="nodeID">nodeID:</label>
        <input type="text" name="nodeID" id="nodeID">    
    </p>

    <p>
        <label for="sensorID">sensorID:</label>
        <input type="text" name="sensorID" id="sensorID">    
    </p>

    <p>    
        <label for="paraID">paraID:</label>
        <input type="text" name="paraID" id="paraID">    
    </p>

    <p>    
        <label for="paravalue">paravalue:</label>
        <input type="text" name="paravalue" id="paravalue">    
    </p>

    <p>    
        <label for="timestamp">timestamp:</label>
        <input type="text" name="timestamp" id="timestamp">    
    </p>

    <p>
        <input name="test" value="test" />
    </p>
    <p>
        <input type="submit" value="Submit" />
    </p>
</form>


<script type="text/javascript">
    window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 100);

        function submitform(){
          alert('test');
          document.forms["myForm"].submit();
        }

        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
        }
    }
</script>




</body>
</html>
