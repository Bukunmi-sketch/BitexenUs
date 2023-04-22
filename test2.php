<?php 
    require "./database/connect.php";
    if (isset($_POST['submit'])) {  
        foreach ($_FILES["img"]["name"] as $key => $value) {
            $img = $_FILES["img"]["name"][$key];
            $tempname = $_FILES["img"]["tmp_name"][$key];
            $folder = "./images/new/$img";
            $ext = pathinfo($img, PATHINFO_EXTENSION);
            $time = time().'.';
            $ext_string = '.'.$ext;
            $new_name = $time.''.$ext;
            
            $x = str_replace("$ext_string", $new_name, $folder);
            if (move_uploaded_file($tempname, $x)) {
                echo "sucee";
            }else {
                echo "error <br>";
            }
        }
}
            // $folder = "$website_url/images/new/home.png";
            // $ext = 'jpeg';
            // $new = time().'.'.$ext;
            // echo $new = str_replace(".", $new, $folder);

?>

<form action="" method="post" enctype="multipart/form-data">

    <!-- <input type="file" name='img'> -->
    <input type="file" name='img[]' multiple>
    <input type="file" name='img[]' multiple>
    <button type="submit" name='submit'>click</button>

</form>