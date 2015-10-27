<body>
<center>
    <?php


    if(isset($_POST['height'])){
        $val1 = $_POST['height'];
    }else {
        echo "Vul iets in!";
    }
    if(isset($_POST['weight'])){
        $val2 = $_POST['weight'];
    }else {
        echo "Vul iets in!";
    }
    echo "Jouw BMI is: ".$val2/($val1*$val1);
    ?>
    <a href="index.html"><p>terug</p></a>
</body>
