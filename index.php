<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>        
        <!--<img width="992" height="558" src="http://192.168.10.167/Streaming/channels/1/picture">-->
        <?php
        
        $db = new mysqli('localhost','root','','test') or die('Unable to Connect');
        $dot = date("Y-m-d H:i:s");
        $timestamp = date("YmdHis");
        // put your code here
//        $site = 'http://admin:admin12345@192.168.10.167/Streaming/channels/2/picture';
//        $site = 'http://admin:admin12345@192.168.0.110/cgi-bin/snapshot.cgi?1';
        $site = 'http://zpcdo:zpcl1234@41.175.9.202/cgi-bin/snapshot.cgi?1';
        $homepage = file_get_contents($site);
        $filename = "CPPlus_IMG_$timestamp.jpg";
        $handle = fopen($filename,"w");
        fwrite($handle,$homepage);
        echo "Success";
        
        $content = base64_encode( $homepage );
        $db->query("INSERT INTO cam_images (name, content, dot) VALUES ('$filename', '$content', '$dot')");                                                              
        echo '<img src="data:image/mjpeg;base64,'. $content .'"/>';
        
        fclose($handle);
        ?>
    </body>
</html>