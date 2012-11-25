<?php
/////////////////////////////////////////
//                                     // 
//    Dynamic Signatur Script          //
//                                     //
//         by axi92                    //
//                                     //
/////////////////////////////////////////

Header("Cache-Control: no-cache");
header ("Content-type: image/jpeg"); 
define("BG_IMAGE", "sigback.jpg");  
$name = 'axi92';

// Verbindungsaufbau zur Datenbank
$db_verbindung = mysql_connect("127.0.0.1", "root", "") or die("Verbindung fehlgeschlagen, bitte kontaktieren sie den Webmaster!");
mysql_select_db("samp") or die("Die gew&uuml;nschte Datenbank konnte nicht gefunden werden. Bitte kontaktieren sie den Webmaster!");


$result = mysql_query("SELECT * FROM users WHERE Name = '".mysql_real_escape_string($name)."'");

$row = mysql_fetch_assoc($result);


$level = $row["Level"];
$money_hand = $row['Money'];
$money_bank = $row['Bank'];
$kills = $row['Kills'];
$deaths = $row['Deaths'];
$phone = $row['PhoneNr'];
$playtime = $row['ConnectedTime'];
$frak_member = $row['Member'];
$frak_leader = $row['Leader'];
$geld = $money_bank + $money_hand;

$kd = $kills / $deaths;
$kd = round($kd,2);

// FRAKTIONS DEFINITION ________________________________________
$frak = "Zivilist";
$frak1 = "Parkhouse Drifter";
$frak2 = "Army";
$frak3 = "Medic";
$frak4 = "Medic";
$frak5 = "LCN";
$frak6 = "Yakuza";
$frak7 = "FBI";
$frak8 = "Hitman";
$frak9 = "San News";
$frak10 = "Terroristen";
$frak11 = "Fahrschule";
$frak12 = "Bürgermeister";
$frak13 = "Ordnungsamt";
$frak14 = "LS-PD";
$frak15 = "Wheelman";
$frak16 = "SF-PD";
$frak17 = "Russische Mafia";
$frak18 = "V.L.Aztecas";
$frak19 = "Groove Street";
$frak20 = "Ballas";
$frak21 = "WCC";
$frak22 = "S.F.Rifa";
$frak23 = "Red Soldiers";
$frak24 = "L.S.Vagos";


switch ($frak_member) 
{
    case "-1":
        $member = $frak;
        break;
    case "2":
        $member = $frak2;
        break;
    case "3":
        echo $frak3;
        break;
    case "4":
        $member = $frak4;
        break;
    case "5":
        $member = $frak5;
        break;
    case "6":
        $member = $frak6;
        break;
    case "7":
        $member = $frak7;
        break;
    case "8":
        $member = $frak8;
        break;
    case "9":
        $member = $frak9;
        break;
    case "10":
        $member = $frak10;
        break;
    case "11":
        $member = $frak11;
        break;
    case "12":
        $member = $frak12;
        break;
    case "13":
        $member = $frak13;
        break;
    case "14":
        $member = $frak14;
        break;
    case "15":
        $member = $frak15;
        break;
    case "16":
        $member = $frak16;
        break;
    case "17":
        $member = $frak17;
        break;
    case "18":
        $member = $frak18;
        break;
    case "19":
        $member = $frak19;
        break;
    case "20":
        $member = $frak20;
        break;
    case "21":
        $member = $frak21;
        break;
    case "21":
        $member = $frak21;
        break;
    case "22":
        $member = $frak22;
        break;
    case "23":
        $member = $frak23;
        break;
    case "24":
        $member = $frak24;
        break;
}

if ($frak_leader != 1)
{    
    switch ($frak_leader)
    {
        case "-1":
            $leader = $frak . " Leader";
            break;
        case "2":
            $member = $frak2 . " Leader";
            break;
        case "3":
            $member = $frak3 . " Leader";
            break;
        case "4":
            $member = $frak4 . " Leader";
            break;
        case "5":
            $member = $frak5 . " Leader";
            break;
        case "6":
            $member = $frak6 . " Leader";
            break;
        case "7":
            $member = $frak7 . " Leader";
            break;
        case "8":
            $member = $frak8 . " Leader";
            break;
        case "9":
            $member = $frak9 . " Leader";
            break;
        case "10":
            $member = $frak10 . " Leader";
            break;
        case "11":
            $member = $frak11 . " Leader";
            break;
        case "12":
            $member = $frak12 . " Leader";
            break;
        case "13":
            $member = $frak13 . " Leader";
            break;
        case "14":
            $member = $frak14 . " Leader";
            break;
        case "15":
            $member = $frak15 . " Leader";
            break;
        case "16":
            $member = $frak16 . " Leader";
            break;
        case "17":
            $member = $frak17 . " Leader";
            break;
        case "18":
            $member = $frak18 . " Leader";
            break;
        case "19":
            $member = $frak19 . " Leader";
            break;
        case "20":
            $member = $frak20 . " Leader";
            break;
        case "21":
            $member = $frak21 . " Leader";
            break;
        case "22":
            $member = $frak22 . " Leader";
            break;
        case "23":
            $member = $frak23 . " Leader";
            break;
        case "24":
            $member = $frak24 . " Leader";
            break;
    }
}
elseif ($frak_leader == -1 or $frak_member == -1)
{
    $member = $frak;    
}

$width = 500; // Später die Breite des Rechtecks
$height = 90; // Später die Höhe des Rechtecks
$img = ImageCreate($width, $height); # Hier wird das Bild einer Variable zu gewiesen

$schwarz =  ImageColorAllocate($img, '1', '1', '1');

$text =     ImageColorAllocate($img, '255','255','255');

//$weiß =     ImageColorAllocate($img, '255', '255', '255');   
ImageString ($img, 4, 10, 5, 'Name: ' . $name, $text);
ImageString ($img, 4, 10, 20, 'Level: ' . $level, $text);
ImageString ($img, 4, 10, 35, 'Geld: ' . $geld . '$', $text);
ImageString ($img, 4, 10, 50, 'KD: ' . $kd, $text);
ImageString ($img, 4, 10, 65, 'Number: ' . $phone, $text);

ImageString ($img, 4, 150, 5, 'Fraktion: ' . $member, $text);
ImageJPEG ($img);
?>