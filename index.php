<?php
$msg=" ";
if($handle=opendir('.'))
{while(false!=($file=readdir($handle)))
     {if(($file!=".") && ($file!="..") && ($file!=$msg))
          {		$imgFileType = pathinfo($file,PATHINFO_EXTENSION);
if($imgFileType=='jpg'||$imgFileType=='jpeg'||$imgFileType=='png')
{$msg.='<div class="gridblock"><img src="'.$file.'" style="Width:50px; height:50px;"><a href="'.$file.'">'.$file.'</a><br><br></div>';}

Elseif($imgFileType=='ogg'||$imgFileType=='mp4'||$imgFileType=='mp2')
{ $msg.='<div class="gridblock"><video id="myvideo" style="Width:50px; height:50px;">
  <source src="'.$file.'" ></video><a href="'.$file.'">'.$file.'</a><br><br></div>';
}

Else {$msg.='<div class="gridblock"><img src="https://atlas-content-cdn.pixelsquid.com/assets/902286518528251024/jpeg-600/H01.jpg?modifiedAt=1" style="Width:50px; height:50px;"><a href="'.$file.'">'.$file.'</a><br><br></div>';
}
           }
      }
}
closedir($handle);
?>
<!doctype html>
<html>
<head>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<title> dir php</title>
</head>
<body>
<h2> list of file in directory</h2>
<p>list of files</p>
<div class="grid">
<p><?php echo $msg;
?></p>
</div>
<script src="js.js"></script>
</body>
</html>