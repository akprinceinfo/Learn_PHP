
<?php 

    $conn = mysqli_connect('localhost','root','','crud')or die(mysqli_error());

    $file = "info.json";

    $data = file_get_contents($file);

    $array = json_decode($data , true);

    foreach($array as $value){
        $pname = $value['pname'];
        $pdes = $value['pdes'];
        $price = $value['price'];


        $sql = "INSERT INTO products (pname,pdes,price) VALUES ('$pname','$pdes','$price')";
        mysqli_query($conn,$sql);

    }

    if($sql){
        echo "Data Insert Success";
    }else{
        echo "failed";
    }

?>

<?php 


?>