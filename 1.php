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
$geld = number_format($money_bank + $money_hand ,0,'','.');
$kd = $kills / $deaths;
$kd = round($kd,2);
$job = $row['Job'];
$rank = $row['Rank'];



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

// JOB DEFINITION ________________________________________
$job_name0 = "Arbeitslos";
$job_name1 = "Detektiv";
$job_name2 = "Anwalt";
$job_name3 = "Hure";
$job_name4 = "Drogendealer";
$job_name5 = "Autodieb";
$job_name6 = "Hacker";
$job_name7 = "KFZ-Mechaniker";
$job_name8 = "Bodyguard";
$job_name9 = "Waffenhändler";
$job_name10 = "Bauer";
$job_name11 = "Hotdog-Verkäufer";
$job_name12 = "Boxer";
$job_name13 = "Arbeitslos";
$job_name14 = "Tuner";
$job_name15 = "Arbeitslos";
$job_name16 = "Trucker";
$job_name17 = "Arbeitslos";

switch ($job)
{
    case "0":
        $job = $job_name0;
        break;
    case "1":
        $job = $job_name1;
        break;
    case "2":
        $job = $job_name2;
        break;
    case "3":
        $job = $job_name3;
        break;
    case "4":
        $job = $job_name4;
        break;
    case "5":
        $job = $job_name5;
        break;
    case "6":
        $job = $job_name6;
        break;
    case "7":
        $job = $job_name7;
        break;
    case "8":
        $job = $job_name8;
        break;
    case "9":
        $job = $job_name9;
        break;
    case "10":
        $job = $job_name10;
        break;
    case "11":
        $job = $job_name11;
        break;   
    case "12":
        $job = $job_name12;
        break;
    case "13":
        $job = $job_name13;
        break;
    case "14":
        $job = $job_name14;
        break;
    case "15":
        $job = $job_name15;
        break;
    case "16":
        $job = $job_name16;
        break;
    case "17":
        $job = $job_name17;
        break; 
}

switch ($frak_member) 
{
    case "-1":
        $member = $frak . " Rang: " . $rank;
        break;
    case "2":
        $member = $frak2 . " Rang: " . $rank;
        break;
    case "3":
        $member = $frak3 . " Rang: " . $rank;
        break;
    case "4":
        $member = $frak4 . " Rang: " . $rank;
        break;
    case "5":
        $member = $frak5 . " Rang: " . $rank;
        break;
    case "6":
        $member = $frak6 . " Rang: " . $rank;
        break;
    case "7":
        $member = $frak7 . " Rang: " . $rank;
        break;
    case "8":
        $member = $frak8 . " Rang: " . $rank;
        break;
    case "9":
        $member = $frak9 . " Rang: " . $rank;
        break;
    case "10":
        $member = $frak10 . " Rang: " . $rank;
        break;
    case "11":
        $member = $frak11 . " Rang: " . $rank;
        break;
    case "12":
        $member = $frak12 . " Rang: " . $rank;
        break;
    case "13":
        $member = $frak13 . " Rang: " . $rank;
        break;
    case "14":
        $member = $frak14 . " Rang: " . $rank;
        break;
    case "15":
        $member = $frak15 . " Rang: " . $rank;
        break;
    case "16":
        $member = $frak16 . " Rang: " . $rank;
        break;
    case "17":
        $member = $frak17 . " Rang: " . $rank;
        break;
    case "18":
        $member = $frak18 . " Rang: " . $rank;
        break;
    case "19":
        $member = $frak19 . " Rang: " . $rank;
        break;
    case "20":
        $member = $frak20 . " Rang: " . $rank;
        break;
    case "21":
        $member = $frak21 . " Rang: " . $rank;
        break;
    case "21":
        $member = $frak21 . " Rang: " . $rank;
        break;
    case "22":
        $member = $frak22 . " Rang: " . $rank;
        break;
    case "23":
        $member = $frak23 . " Rang: " . $rank;
        break;
    case "24":
        $member = $frak24 . " Rang: " . $rank;
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

ImageString ($img, 4, 180, 5, '' . $member, $text);
ImageString ($img, 4, 180, 20, 'Job: ' . $job, $text);
ImageJPEG ($img);
?>