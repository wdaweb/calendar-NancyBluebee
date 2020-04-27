<?php
// 某年
$year=$_GET['y']?$_GET{'y'}:date('Y',time());

// 某月
$month=$_GET['m']?$_GET['m']:date('m',time());

// 本月總天數
$days=date('t',strtotime("{$year}-{$month}-1"));

// 本月1號是周幾
$week=date('w',strtotime("{$year}-{$month}-1"));

// 真正的第一天
$first=1-$week;

echo $first;

//月數大於12月年+1，月變成1月
if($month>=12){
    //下一年和下一月
    $nextYear=$year+1;
    $nextMonth=1;
}else{
    //下一年和下一月
    $nextYear=$year;
    $nextMonth=$month+1;
}
//月數小於1月份時，則年-1，月變成12月
if($month<=1){
    //下一年和下一月
    $prevYear=$year-1;
    $prevMonth=12;
}else{
    //下一年和下一月
    $prevYear=$year;
    $prevMonth=$month-1;
}
?>


<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
   
    <title>萬年曆</title>
    <style>
    body {
    animation: colorchange 20s infinite; 
   -webkit-animation: colorchange 20s infinite;; /* Chrome and Safari */
    font-family: 'Microsoft JhengHei', '微軟正黑體', 'Open Sans', 'sans-serif';
   font-weight: 300;
   line-height: 1.42em;
  
  }

  @keyframes colorchange
  {
    0%   {background: #FFEC94;}
    25%  {background: #FFAEAE;}
    50%  {background: #FFF0AA;}
    75%  {background: #B0E57C;}
    100% {background: #B4D8E7;}
  }

  @-webkit-keyframes colorchange /* Safari and Chrome - necessary duplicate */
  {
    0%   {background: #FFEC94;}
    25%  {background: #FFAEAE;}
    50%  {background: #FFF0AA;}
    75%  {background: #B0E57C;}
    100% {background: #B4D8E7;}
    }
    h1,h2{
        text-align: center;
    }
    h1{
        color: #555;
    }
    a{
        color: #99f;
    }
    table.TB_COLLAPSE {
  width:100%;
  border-collapse:collapse;
    }
    table.TB_COLLAPSE caption {
    padding:10px;
    font-size:24px;
    background-color:#AD0000;
    }
    table.TB_COLLAPSE thead th {
    padding:5px 0px;
    color:#fff;
    background-color:#915957;
    }
    table.TB_COLLAPSE tbody td {
    padding:5px 0px;
    color:#555;
    text-align:center;
    background-color:#fff;
    border-bottom:1px solid #915957;
    }
    table.TB_COLLAPSE tfoot td {
    padding:5px 0px;
    text-align:center;
    background-color:#4C0085;
    }
    .TB_COLLAPSE .selected {
        background: #FF2D2D;
    }

    .TB_COLLAPSE tr:hover {
    background-color: #FF8000;
    -webkit-box-shadow: 0 6px 6px -6px #0E1119;
        -moz-box-shadow: 0 6px 6px -6px #0E1119;
                box-shadow: 0 6px 6px -6px #0E1119;
    }

    .TB_COLLAPSE td:hover {
    background-color: #FF8000;
    color: #AE0000;
    font-weight: bold;
    
    box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
    transform: translate3d(6px, -6px, 0);
    
    transition-delay: 0s;
        transition-duration: 0.4s;
        transition-property: all;
    transition-timing-function: line;
    }
    </style>
</head>
<body>
<table class="TB_COLLAPSE" cellspacing="0">
  <caption>萬年曆設計<?php echo $year ?>年-<?php echo $month ?>月</caption>
  <thead>
    <tr>
    
            <th style ='color:#FF0000'>週日</th>
            <th>週一</th>
            <th>週二</th>
            <th>週三</th>
            <th>週四</th>
            <th>週五</th>
            <th style ='color:#009100'>週六</th>
    </tr>
    </thead>
       <?php 
       for($i=$first;$i<=$days;){
            echo '<tr>';
            for($j=0;$j<7;$j++){
                if($i<=$days && $i>=1){
                    echo "<td>{$i}</td>";
                }else{
                    echo "<td>&nbsp;</td>";
                }
                $i++;
            }
            echo '</tr>';

       }
       ?>
    </table>
    <div style="text-align:center;">
    <h3>
        <a href="simple3.php?y=<?php echo $prevYear ?>&m=<?php echo $prevMonth ?>">上一月&nbsp;&nbsp;</a>
        <a href="simple3.php?y=<?php echo $nextYear ?>&m=<?php echo $nextMonth ?>">下一月</a>
    </h3>
    </div>
</body>
</html>