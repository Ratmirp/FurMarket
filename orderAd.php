<?
    $connect = mysqli_connect('127.0.0.1','root','', 'furmarket');

    $insert = "INSERT INTO ADS (text, user_id, price) VALUES ('{$_GET['text']}', '{$_GET['user_id']}', '{$_GET['price']}')";
    mysqli_query($connect, $insert);
    header("Location: index.php");
?>