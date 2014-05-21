<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facebook like Tag Friends</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

 
    
 <script type="text/javascript">
$(document).ready(function()
{

var start=/@/ig;
var word=/@(\w+)/ig;

$("#contentbox").live("keyup",function() 
{
var content=$(this).text();
var go= content.match(start);
var name= content.match(word);
var dataString = 'searchword='+ name;

if(go.length>0)
{
$("#msgbox").slideDown('show');
$("#display").slideUp('show');
$("#msgbox").html("Type the name of someone or something...");
if(name.length>0)
{
$.ajax({
type: "POST",
url: "boxsearch.php",
data: dataString,
cache: false,
success: function(html)
{
$("#msgbox").hide();
$("#display").html(html).show();
}
});

}
}
return false();
});

$(".addname").live("click",function() 
{
var username=$(this).attr('title');
var old=$("#contentbox").html();
var content=old.replace(word,""); 
$("#contentbox").html(content);
var E="<a class='red' contenteditable='false' href='#' >"+username+"</a>";
$("#contentbox").append(E);
$("#display").hide();
$("#msgbox").hide();
$("#contentbox").focus();
});

});
</script>
<style>
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:12px;
}
#contentbox
{
width:458px; height:50px;
border:solid 2px #333;
font-family:Arial, Helvetica, sans-serif;
font-size:14px;
margin-bottom:6px;
text-align:left;
}
.img
{
float:left; width:150px; margin-right:10px;
text-align:center;
}
#msgbox
{
border:solid 1px #dedede;padding:5px;
display:none;background-color:#f2f2f2
}
.red
{
color:#cc0000;
font-weight:bold;
}
 a
{
text-decoration:none;
}
a:hover
{
text-decoration:none;
}
#display
{
display:none;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:hidden;
}
.display_box
{
padding:4px; border-top:solid 1px #dedede; font-size:12px; height:30px;
}

.display_box:hover
{
background:#3b5998;
color:#FFFFFF;
}
.display_box a
{
color:#333;
}
.display_box a:hover
{
color:#fff;
}
#container
{
margin:50px; padding:10px; width:460px
}
.image
{
width:25px; float:left; margin-right:6px
}

</style>
</head>

<body>
<h3>Tutorial link <a href="http://9lessons.info">Click Here</a></h3>
<h2>Eg: 9lessons blog @sri</h2>
<div id="xxx"></div>
<div id="container">
<div id="contentbox" contenteditable="true"> 
</div>
<div id='display'>
</div>
<div id="msgbox">
</div>
</div>
<a href="#" class='addname' title='<?php echo $fname; ?>&nbsp;<?php echo $lname; ?>'>
<?php echo $fname; ?>&nbsp;<?php echo $lname; ?> </a>

</body>
</html>
