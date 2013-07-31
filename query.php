<html>

<head>

<style>

ul
{
list-style-type:none;
margin:none;
padding-right:5px;
padding-left:5px;

}

h1
{
margin-left:50px;
}

h1.border
{
border-style:solid;
border-width:5px;
width:110px;
}

a
{
display:inline;
width:100px;

}

body{
    background-image:url(image.jpeg);
	background-repeat:no-repeat;
	background-size:cover;}
</style>
</head>


<body>

<?php
try {

 $objDb = new PDO('mysql:host=localhost;dbname=airquality', 'RASHMI', '9990157767');
 $objDb->exec('SET CHARACTER SET utf8');

 $sql = "SELECT DISTINCT STATE 
  FROM `air8910`";
 $statement = $objDb->query($sql);
 $list = $statement->fetchAll(PDO::FETCH_ASSOC);

 } catch(PDOException $e) {
 echo 'There was a problem';
 }

 ?>    






<form action="" method="post">

	<select name="state" id="state" class="update">
        <option value="">Select State</option>
        <?php if (!empty($list)) { ?>
            <?php foreach($list as $row) { ?>
                <option value="<?php echo $row['STATE']; ?>">
                    <?php echo $row['STATE']; ?>
                </option>
            <?php } ?>
        <?php } ?>
    </select>	

	<select name="CITY" id="CITY" class="update">
	    <option value="">Select CITY</option>
	</select>

</form>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
<script src="ajax.js" type="text/javascript"></script>
  
</body>
</html>
