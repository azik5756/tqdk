<?php
    $conn=new mysqli('localhost','root','','aviasiya');
    $target='files/'.$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],$target);
    $info=file_get_contents($target);
    $s_cevab1=substr($info,0,30);
    $s_cevab2=substr($info,30,30);
    $s_cevab3=substr($info,60,30);
    $sec=$_POST['as'];
    $hansi_imt=$conn->query("SELECT * FROM `tqdk` WHERE id='$sec'");
    $hansi_fit=$hansi_imt->fetch_assoc();
    $cevablar=$hansi_fit['cevab'];
    $d_cevab1=substr($cevablar,0,30);
    $d_cevab2=substr($cevablar,30,30);
    $d_cevab3=substr($cevablar,60,30);
    $inc=0;
    $plus_m='';
    $qiymet=array();
    $sehv=array();
    for($i=0;$i<strlen($info);$i++)
    {
        if($info[$i]==$cevablar[$i])
        {
            $inc++;
            $plus_m=$plus_m.'+';
        }
        else
        {
            $plus_m=$plus_m.'-';
        }
        if($i==30)
        {
            $qiymet[0]=$inc;
            $inc=0;
        }
        if($i==60)
        {
            $qiymet[1]=$inc;
            $inc=0;
        }
        if($i==89)
        {
            $qiymet[2]=$inc;
            $inc=0;
        }
    }
    
    $plus1=substr($plus_m,0,30);
    $plus2=substr($plus_m,30,30);
    $plus3=substr($plus_m,60,30);
    $bal=$qiymet[0]+$qiymet[1]+$qiymet[2];
    $sehv[0]=30-$qiymet[0];
    $sehv[1]=30-$qiymet[1];
    $sehv[2]=30-$qiymet[2];
    $unci=$sehv[0]+$sehv[1]+$sehv[2];
    $faiz=array();
    $faiz[0]=$qiymet[0]*100/30;
    $faiz[1]=$qiymet[1]*100/30;
    $faiz[2]=$qiymet[2]*100/30;
    $mfi=$bal*100/90;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            margin: 5px;
        }
        th, td {
            padding: 5px;
            text-align: center;    
        
        }
        th{
            width: 40%;
        }
        p{
            padding: 5px;
            margin: 5px;
        }
        td{
            text-align: left;
        }
        h2{
            text-align: center;
        }
        
        </style>
        </head>
        <body>
        
        <h2>Imtahan neticesi</h2>
        <table style="width:100%">
            <tr>
    
              
            </tr>
            <tr>
              <th rowspan="3">
                <p>Ad:<?php echo $_POST['name']; ?></p>
                <p>Soyad:<?php echo $_POST['surname']; ?></p>
                <p> Is nomresi:<?php echo $_POST['is_num']; ?></p>
                <p> Mekteb:<?php echo $_POST['mekteb']; ?></p>
                <p> Sinif:<?php echo $_POST['sinif']; ?></p>
                <p>Qrup:<?php echo $_POST['qrup']; ?></p>
                <p>Bal:<?php echo $bal; ?></p>
            </th>
              <td>Cografiya <div style="display:flex;flex-direction:row;"><div style="width:20%;">Sagirdin cavablari:</div><div style="width:80%;"><?php echo $s_cevab1; ?></div></div>
              <div style="display:flex;flex-direction:row;"><div style="width:20%;">Dogru cavablar:</div><div style="width:80%;"><?php echo $d_cevab1; ?></div></div>
              <div style="display:flex;flex-direction:row;"><div style="width:20%;"></div><div style="width:80%;font-size:27px;"><?php echo $plus1; ?></div></div></td>

            </td>
              
            </tr>
            <tr>
              <td>Riyaziyyat
                <div style="display:flex;flex-direction:row;"><div style="width:20%;">Sagirdin cavablari:</div><div style="width:80%;"><?php echo $s_cevab2; ?></div></div> 
                <div style="display:flex;flex-direction:row;"><div style="width:20%;">Dogru cavablar:</div><div style="width:80%;"><?php echo $d_cevab2; ?></div></div>
                <div style="display:flex;flex-direction:row;"><div style="width:20%;"></div><div style="width:80%;font-size:27px;"><?php echo $plus2; ?></div></div></td>
  
            </td>
            </tr>
            <tr>
                <td>Tarix
                    <div style="display:flex;flex-direction:row;"><div style="width:20%;">Sagirdin cavablari:</div><div style="width:80%;"><?php echo $s_cevab3; ?></div></div>
                    <div style="display:flex;flex-direction:row;"><div style="width:20%;">Dogru cavablar:</div><div style="width:80%;"><?php echo $d_cevab3; ?></div></div>
                    <div style="display:flex;flex-direction:row;"><div style="width:20%;"></div><div style="width:80%;font-size:27px;"><?php echo $plus3; ?></div></div></td>

                </td>
              </tr></Table>
              <Table style="width: 100%" >
<tr>
    <td>/</td><td>Cografiya</td>
<td>Riyaziyyat</td>
<td>Tarix</td>
<td>Cemi</td>
<tr>
    <td>Sual sayi</td>
    <td>30</td>
    <td>30</td>
    <td>30</td>
    <td>90</td>
</tr><tr>
        <td>Dogru</td>
        <td><?php echo $qiymet[0]; ?></td>
        <td><?php echo $qiymet[1]; ?></td>
        <td><?php echo $qiymet[2]; ?></td>
        <td><?php echo $bal; ?></td>
    </tr>
    <td>Sehv</td>
    <td><?php echo $sehv[0]; ?></td>
    <td><?php echo $sehv[1]; ?></td>
    <td><?php echo $sehv[2]; ?></td>
    <td><?php echo $unci; ?></td>
</tr>
</tr>
<td>Xalis</td>
<td>30</td>
<td>30</td>
<td>30</td>
<td>90</td>
</tr>
</tr>
<td>Ugur</td>
<td><?php echo round($faiz[0],1).'%'; ?></td>
<td><?php echo round($faiz[1],1).'%'; ?></td>
<td><?php echo round($faiz[2],1).'%'; ?></td>
<td><?php echo round($mfi,1).'%'; ?></td>
</tr>

          </table>
        
</body>
</html>