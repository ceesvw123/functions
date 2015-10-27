<body>
<center>
    <?php


    if(isset($_POST['euro'])){
        $val = $_POST['euro'];
        echo "De gemeten waarde voor de euro naar dollar bedraagt :".$val*1.1014."$";
    }else {
        echo "Vul iets in!";
    }
    ?>
    <a href="index.html"><p>terug</p></a>
</body>
