<?php
   if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    $extensions= array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    
    if($file_size > 2097152) {
       $errors[]='File size must be less than 2 MB';
    }
    
    if(empty($errors)==true) {
       move_uploaded_file($file_tmp,"img_upload/".$file_name);
       //echo "Success";
    }else{
       print_r($errors);
    }
 }

$id = $_POST['id'];
$name = $_POST['name'];
$title = $_POST['title'];
$title = str_replace("'", " i", $title);
(string)$date = $_POST['date'];
$content = $_POST['content'];


$page_title = str_replace(" ", "_", $title);
$page_name = str_replace(" ", "_", $name);


(string)$file_path = "./img_upload/".$file_name;

// Create the file handler
//$file = fopen("filename", "r+");
// Seek to the end
//fseek($file, SEEK_END, 0);
// Get and save that position
//$filesize = ftell($file);
// Seek to half the length of the file
//fseek($file, SEEK_SET, $filesize / 2);
// Write your data
//fwrite($file, "Data");
// Close the file handler
//fclose($file);

/*<a class='page_container zi2'  style='padding: 25px;' href='./{$page_title}_{$page_name}_{$date}.html'>
        <div>
            {$title} - {$name}, {$date}
        </div>
</a>
$myfile = fopen("index.php", "r+") or die("Unable to open file!");
fseek($myfile, SEEK_SET, 1145);
fwrite($myfile, $text);
fclose($myfile);
*/

$text = "
<div class='zi2 column large4 medium4 small12' style='margin-bottom: 16px;'>
<a class='tab' href='articles/{$page_title}_{$page_name}_{$date}.html'>
    <div>
        <img class='thumb' src='{$file_path}'>
        <br><br>
        <span style='font-size: 28px; font-weight: 500'>{$title}</span> 
        <br> 
        {$name}, {$date}
    </div>
</a>
</div>
";



if($file=fopen('index.php','r+'))
{
//echo 'File opened';
$switch=0; //This variable will indicate whether the string has has been found.
$back=0; //This counts the number of characters to move back after reaching eof.
}
while(!feof($file))
{
$string=fgets($file);
if($switch==1)
{
$back+=strlen($string);
$modstring=$modstring.$string;
}
if(strpos($string,"<p style='display: none'>After This</p>")!==FALSE)
{
//echo 'String found';
$switch=1;
$string=fgets($file);
$modstring=$text.$string;
$back+=strlen($string);
}
}
$back*=-1;
fseek($file,$back,SEEK_END);
fwrite($file,$modstring);
fclose($file);

(string)$file_path = "../img_upload/".$file_name;

$text = "
<head>
<title>REVA News</title>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<script src='https://fluentdesignforweb.github.io/fluent.js'></script>
<link href='https://fluentdesignforweb.github.io/fluent.css' type='text/css' rel='stylesheet'>
<link href='https://shivendrasaurav.github.io/Fluent-Design-For-Web/Icons/css/fluent-icons.css' type='text/css' rel='stylesheet'>
<link href='../customstyles.css' type='text/css' rel='stylesheet'>
</head>
<body>
    <div id='body'>
    <div class='primary_inverted column large10 medium10 small12 center zi2'>

    <a class='pivot_button' style='font-size: 28px;' href='../index.php'>
        <img src='../logo_reva.png' style='width: 40px; height: 40px; margin: -10px; margin-left: 5px;'/>
        <!--&nbsp;&nbsp;&nbsp;&nbsp;REVA NEWS-->
    </a>
    <button class='pivot_button right' onclick='openside1();'>
        <i class='ms-Icon ms-Icon--GlobalNavButton' aria-hidden='true' style='font-size: 16px;'></i>
    </button>

    </div>
    <br><br><br><br>
    
    <div class='page_container column large10 center'>
        <h3>{$title}</h3>
        <br>
        <img class='large8 medium8 small10 center' src='{$file_path}'>
        <br>
        <h6>{$name}<br>{$date}</h6>
        <br>
        <p>{$content}</p>
    </div>
    <br><br>
    <div class='primary_inverted column large10 medium10 small12 center'>
        
        <br>
        <div class='column large6 medium6 small12'>
            <a href='https://reva.edu.in/' style='color: #FFF'>REVA University</a><br>
            <a href='https://race.reva.edu.in/' style='color: #FFF'>REVA Academy for Corporate Excellence</a><br>
        </div>
                    
        <div class='column large6 medium6 small12'>
            <a href='../aboutus.html' style='color: #FFF'>About REVA News</a><br>
            <a href='../contact.html' style='color: #FFF'>Contact REVA News</a><br>
        </div>

        <hr>
        <span>This website is built on <a style='color: #FFF;' href='https://fluentdesignforweb.github.io'>Fluent Design For Web</a></span>
        <span class='right'>&copy; REVA News 2019</span>
        
        <br><br>

    </div>
    </div>

    <div class='sidepanel_container' id='side1'>
        <div class='sidepanel_content zi3 right' id='modct1'>
            <button class='primary_red right ta_center mod_close_btn' onclick='closeside1();'>X</button>
            <br><br><br><br>
            <div class='page_container'>
                <a href='../index.php'><div class='large12 panel_item'>Home</div></a>
                <a href='https://news.google.com/?hl=en-IN&gl=IN&ceid=IN:en'><div class='large12 panel_item'>G News</div></a>
                <a href='aboutus.html'><div class='large12 panel_item'>About Us</div></a>
                <a href='contact.html'><div class='large12 panel_item'>Contact Us</div></a>
            </div>
            </div>
        </div>
    </div>
</body>
";


$myfile = fopen("./articles/{$page_title}_{$page_name}_{$date}.html", "w") or die("Unable to open file!");
fwrite($myfile, $text);
fclose($myfile);

?>

<html>
    <head>

        <title>REVA News Uploader</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://fluentdesignforweb.github.io/fluent.js"></script>
        <link href="https://fluentdesignforweb.github.io/fluent.css" type="text/css" rel="stylesheet">
        <link href="https://shivendrasaurav.github.io/Fluent-Design-For-Web/Icons/css/icons.css" type="text/css" rel="stylesheet">
        <link href="customstyles.css" type="text/css" rel="stylesheet">        

    </head>
    <body>
        <div class="page_container large10 medium10 small12 center">
        <div class="pivot_container"><br>
            <img src="logo_reva.png" style="width: 50px; height: 50px; margin: -10px">&nbsp;&nbsp; <span style="color: #000; font-size: 32px;">REVA News</span>
        </div><br>
            <h4>
                Hi, <?php echo($name)?>
            </h4>
            <h6>
                Your article has been published, this is a preview of it, go to home page to find the link to your article
            </h6>
        </div>
        <br><br>
        <div class="page_container large10 medium10 small12 zi2">
            <br><br>
        <?php echo($text) ?>
        </div><br><br>
        <div class="page_container large10 medium10 small12 center">
            <button style="background: rgb(231, 120, 23); color: #FFF;" onclick="window.open('index.php');">Proceed To Home</button>
        </div>
    </body>
</html>