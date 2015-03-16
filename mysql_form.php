<!doctype html>
<?php
    require_once('mysql_connect.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>mysql form</title>
</head>
<body>

<?php
    if(isset($_POST['submit_button']) && $_POST['submit_button']=='submit')
    {
        //print_r($_POST);
        $animal_insert_query = 
            "INSERT INTO animal_list 
                SET name='$_POST[animal_name]',
                habitat='$_POST[animal_habitat]'";
        $animal_insert_result = mysqli_query($CONN,$animal_insert_query);
        if(mysqli_affected_rows($CONN)==1)
        {
            print("Animal inserted<br>");
        }
        else
        {
            print("Something happened, your animal didn't make it<br>");
        }
        //print("<br>query = $animal_insert_query");
    }
?>

<form action="mysql_form.php" method="post">
    <input name="animal_name" placeholder="Animal Name" type="text">
    <input name="animal_habitat" placeholder="Where does it live?" type="text">
    <button type="submit" name="submit_button" value="submit">Submit</button>
</form>

<?php
    
    //$CONN
    $query = "SELECT * FROM animal_list";
    $result = mysqli_query($CONN,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($animal_row = mysqli_fetch_assoc($result))
        {
            print($animal_row['name'].' in '.$animal_row['habitat'].'<br>');
        }
    }
?>


    
    
    
    
    
    
    
    
</body>
</html>