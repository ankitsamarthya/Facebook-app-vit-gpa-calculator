<?php

require 'facebook.php';
$facebook=new Facebook(array(
    'appId' => 'cb50a7534ed9d6f9a3f6e82011d0d120',
    'secret' => 'b914b54101d1fa9892af18ffe761c157',
    'cookie' => true,
));

$session=$facebook->getSession();
$c1=$_GET['c1'];
$c2=$_GET['c2'];
$c3=$_GET['c3'];
$c4=$_GET['c4'];
$c5=$_GET['c5'];
$c6=$_GET['c6'];
$c7=$_GET['c7'];
$c8=$_GET['c8'];
$c9=$_GET['c9'];
$g1=$_GET['g1'];
$g2=$_GET['g2'];
$g3=$_GET['g3'];
$g4=$_GET['g4'];
$g5=$_GET['g5'];
$g6=$_GET['g6'];
$g7=$_GET['g7'];
$g8=$_GET['g8'];
$g9=$_GET['g9'];
if(empty($c1)||$c1<0||$c1>5)
{
    $c1=0;
}
if(empty($c2)||$c2<0||$c2>5)
{
    $c2=0;
}
if(empty($c3)||$c3<0||$c3>5)
{
    $c3=0;
}
if(empty($c4)||$c4<0||$c4>5)
{
    $c4=0;
}
if(empty($c5)||$c5<0||$c5>5)
{
    $c5=0;
}
if(empty($c6)||$c6<0||$c6>5)
{
    $c6=0;
}
if(empty($c7)||$c7<0||$c7>5)
{
    $c7=0;
}
if(empty($c8)||$c8<0||$c8>5)
{
    $c8=0;
}
if(empty($c9)||$c9<0||$c9>5)
{
    $c9=0;
}
if(empty($g1)||$g1=="")
{
    $g1=0;
}
else
{
    if($g1=="A" || $g1=="a")
    { $g1=9; }
    elseif($g1=="S" || $g1=="s")
    {
        $g1=10;
    }
    elseif($g1=="B" || $g1=="b")
    {
        $g1=8;
    }
    elseif($g1=="C" || $g1=="c")
    {
        $g1=7;
    }
    elseif($g1=="D" || $g1=="d")
    {
        $g1=6;
    }
    elseif($g1=="E" || $g1=="e")
    {
        $g1=5;
    }
    elseif($g1=="F" || $g1=="f")
    {
        $g1=4;
    }
    else
    {
        $g1=0;
    }
}
if(empty($g2)||$g2=="")
{
    $g2=0;
}
else
{
    if($g2=="A" || $g2=="a")
    { $g2=9; }
    elseif($g2=="S" || $g2=="s")
    {
        $g2=10;
    }
    elseif($g2=="B" || $g2=="b")
    {
        $g2=8;
    }
    elseif($g2=="C" || $g2=="c")
    {
        $g2=7;
    }
    elseif($g2=="D" || $g2=="d")
    {
        $g2=6;
    }
    elseif($g2=="E" || $g2=="e")
    {
        $g2=5;
    }
    elseif($g2=="F" || $g2=="f")
    {
        $g2=4;
    }
    else
    {
        $g2=0;
    }
}
if(empty($g3)||$g3=="")
{
    $g3=0;
}
else
{
    if($g3=="A" || $g3=="a")
    { $g3=9; }
    elseif($g3=="S" || $g3=="s")
    {
        $g3=10;
    }
    elseif($g3=="B" || $g3=="b")
    {
        $g3=8;
    }
    elseif($g3=="C" || $g3=="c")
    {
        $g3=7;
    }
    elseif($g3=="D" || $g3=="d")
    {
        $g3=6;
    }
    elseif($g3=="E" || $g3=="e")
    {
        $g3=5;
    }
    elseif($g3=="F" || $g3=="f")
    {
        $g3=4;
    }
    else
    {
        $g3=0;
    }
}
if(empty($g4)||$g4=="")
{
    $g4=0;
}
else
{
    if($g4=="A" || $g4=="a")
    { $g4=9; }
    elseif($g4=="S" || $g4=="s")
    {
        $g4=10;
    }
    elseif($g4=="B" || $g4=="b")
    {
        $g4=8;
    }
    elseif($g4=="C" || $g4=="c")
    {
        $g4=7;
    }
    elseif($g4=="D" || $g4=="d")
    {
        $g4=6;
    }
    elseif($g4=="E" || $g4=="e")
    {
        $g4=5;
    }
    elseif($g4=="F" || $g4=="f")
    {
        $g4=4;
    }
    else
    {
        $g4=0;
    }
}
if(empty($g5)||$g5=="")
{
    $g5=0;
}
else
{
    if($g5=="A" || $g5=="a")
    { $g5=9; }
    elseif($g5=="S" || $g5=="s")
    {
        $g5=10;
    }
    elseif($g5=="B" || $g5=="b")
    {
        $g5=8;
    }
    elseif($g5=="C" || $g5=="c")
    {
        $g5=7;
    }
    elseif($g5=="D" || $g5=="d")
    {
        $g5=6;
    }
    elseif($g5=="E" || $g5=="e")
    {
        $g5=5;
    }
    elseif($g5=="F" || $g5=="f")
    {
        $g5=4;
    }
    else
    {
        $g5=0;
    }
}
if(empty($g6)||$g6=="")
{
    $g6=0;
}
else
{
    if($g6=="A" || $g6=="a")
    { $g6=9; }
    elseif($g6=="S" || $g6=="s")
    {
        $g6=10;
    }
    elseif($g6=="B" || $g6=="b")
    {
        $g6=8;
    }
    elseif($g6=="C" || $g6=="c")
    {
        $g6=7;
    }
    elseif($g6=="D" || $g6=="d")
    {
        $g6=6;
    }
    elseif($g6=="E" || $g6=="e")
    {
        $g6=5;
    }
    elseif($g6=="F" || $g6=="f")
    {
        $g6=4;
    }
    else
    {
        $g6=0;
    }
}
if(empty($g7)||$g7=="")
{
    $g7=0;
}
else
{
    if($g7=="A" || $g7=="a")
    { $g7=9; }
    elseif($g7=="S" || $g7=="s")
    {
        $g7=10;
    }
    elseif($g7=="B" || $g7=="b")
    {
        $g7=8;
    }
    elseif($g7=="C" || $g7=="c")
    {
        $g7=7;
    }
    elseif($g7=="D" || $g7=="d")
    {
        $g7=6;
    }
    elseif($g7=="E" || $g7=="e")
    {
        $g7=5;
    }
    elseif($g7=="F" || $g7=="f")
    {
        $g7=4;
    }
    else
    {
        $g7=0;
    }
}
if(empty($g8)||$g8=="")
{
    $g8=0;
}
else
{
    if($g8=="A" || $g8=="a")
    { $g8=9; }
    elseif($g8=="S" || $g8=="s")
    {
        $g8=10;
    }
    elseif($g8=="B" || $g8=="b")
    {
        $g8=8;
    }
    elseif($g8=="C" || $g8=="c")
    {
        $g8=7;
    }
    elseif($g8=="D" || $g8=="d")
    {
        $g8=6;
    }
    elseif($g8=="E" || $g8=="e")
    {
        $g8=5;
    }
    elseif($g8=="F" || $g8=="f")
    {
        $g8=4;
    }
    else
    {
        $g8=0;
    }
}
if(empty($g9)||$g9=="")
{
    $g9=0;
}
else
{
    if($g9=="A" || $g9=="a")
    { $g9=9; }
    elseif($g9=="S" || $g9=="s")
    {
        $g9=10;
    }
    elseif($g9=="B" || $g9=="b")
    {
        $g9=8;
    }
    elseif($g9=="C" || $g9=="c")
    {
        $g9=7;
    }
    elseif($g9=="D" || $g9=="d")
    {
        $g9=6;
    }
    elseif($g9=="E" || $g9=="e")
    {
        $g9=5;
    }
    elseif($g9=="F" || $g9=="f")
    {
        $g9=4;
    }
    else
    {
        $g9=0;
    }
}
$tot=$c1+$c2+$c3+$c4+$c5+$c6+$c7+$c8+$c9;
$cgpa = ($c1*$g1+$c2*$g2+$c3*$g3+$c4*$g4+$c5*$g5+$c6*$g6+$c7*$g7+$c8*$g8+$c9*$g9)/$tot;
$wallstr = "My GPA is ".$cgpa;
if($cgpa>=9.0)
{
    $appstr="You are now a 9 pointer. Your GPA is ".$cgpa;
}
else{
    $appstr="You should do some hardwork to become a 9 pointer. Your GPA is ".$cgpa;
}
$name = "CGPA Calculator";
if($cgpa>=9){
    $des="Congratulation!!! Its Party Time. Keep It Up In Future.";
    $cap="You Are a 9 Pointer.";
}
elseif($cgpa<9 && $cgpa>=8){
    $des="Not Bad!!! You Need To Make Little More Efforts To Get To 9.";
    $cap="You Are a 8 Pointer.";
}
elseif($cgpa<8 && $cgpa>=7){
    $des="Its Satisfactory!!! But You Should Make Some More Efforts To Make It 8 And Then 9.";
    $cap="You Are a 7 Pointer.";
}
elseif($cgpa<7 && $cgpa>=6){
    $des="Not So Good!!! You Have To Spend More Time For Your Studies, So Stop Watching So Much Movies And Get To Studies.";
    $cap="You Are a 6 Pointer.";
}
elseif($cgpa<6 && $cgpa>=5){
    $des="Thank God!!! You Just Passed This Semester, So You Need To Do Some Hardwork.";
    $cap="You Are a 5 Pointer.";
}
else
{
    $des="You Probably Failed In Some Subjects This Semester, So Get Ready For Supplementary.";
    $cap="You Got Less Than 5 GPA.";
}


?>
<html>
    <head>
        <style>
            body{
                font-family:'Lucida Grande', Verdana, Arial, sans-serif;
                font-size:'small';
            }
            h1 a {
                text-decoration:none;
                color:#3b5998;
            
            }
            h1 a:hover {
                text-decoration:underline;
            }
        </style>
    </head>
    <body>
        <div id="fb-root"></div>
        <h1><font color=darkblue>Calculate Your GPA</font></h1>
        <p><br/><br/>
            <?php echo $appstr ?>
        </p>
        <form method="get" action="http://www.facebook.com/dialog/feed" target="_parent">
            <input type="hidden" value="http:///grades.jpg" name="picture" />
            <input type="hidden" value="<?php echo $wallstr ?>" name="message" />
            <input type="hidden" value="<?php echo $cap ?>" name="caption" />
            <input type="hidden" value="<?php echo $des ?>" name="description" />
            <input type="hidden" value="<?php echo $name ?>" name="name" />
            <input type="hidden" value="cb50a7534ed9d6f9a3f6e82011d0d120" name="app_id" />
            <input type="hidden" value="http://www.facebook.com" name="redirect_uri" />
            <input type="submit" value="Share On Your Wall" />
        </form>
    </body>
</html>
            