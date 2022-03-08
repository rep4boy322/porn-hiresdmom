<!DOCTYPE html>
<html>
<head>
<title> Page Title </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="folder/favicon.ico" rel="icon" sizes="16x16" type="image/png" />
<html lang="ru">
<style>
   body {
    background: #c7b39b url(https://64.media.tumblr.com/17bbf43ea451026144931f960aa6ef23/fc470e90851b26ff-9e/s540x810/e381b8b2c883183f5b99cd8432bdb7d1bfd5f82c.gifv); /* Цвет фона и путь к файлу */
    color: #fff; /* Цвет текста */
        -moz-background-size: 100%; /* Firefox 3.6+ */
    -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
    -o-background-size: 100%; /* Opera 9.6+ */
    background-size: 100%; /* Современные браузеры */
   }
  </style>
</head>
<meta charset="UTF-8" />
<body>

<h1><h3 style="background-color:#00008B">ТЫ ПОЙМАЛ СКАМ ДОЛБОЕБ</h3></h1>
<h3> <h3 style="background-color:#FFFF00">ХВХВХВХВХВАХХВХАХВХАХВАХВХАХВХАВХАХВХАХВАХВХ</h3>


<iframe width="300" height="200" src="https://www.youtube.com/embed/8Qt6kzjPr3Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<h2 style="background-color:#FF4321">сайт делал чтоб ловить 
москалей и через скам дудосить их айпи пока сплю удачи
пофорсить СЕТЕВУЮ ПАУТИНУ ебанатик.
======================================================================================================
PC.__МОЛИСЬ ЧТОБ Я ЕЩЕ ТВОЙ АЙПИ НА ГРУПУ В ТГ НА 500 ЧЕЛОВЕК
НЕ СКИНУЛ(ГДЕ СИДЯТ ОНЛИ IT чат которые ддосят сепаров и кладут
сайты по типу роскосмоса где и я приложил участие, если ты думаешь
что анонимы это тупо люди которые не паляться
и поэтому их тяжело выследить , (это не так анонимус это валонтеры с кучи стран у нас
есть дискорд канал IT со всего блядь мира которые тоже способствуют класть сайты именно
по этому нас тяжело вычислить ебанатик , и тебе эта ифна нихуя не дасст ибо ты москаль)
======================================================================================================

Также если вдруг ты думал что ТВОЙ ДОЛБОЕБ НА ТРОНЕ С ЧИК ЧИРЫКОМ И ОБЕЗЬЯНОЙ СИЛЬНАЯ АРМИЯ
я тебе напомню что сбербанка акции сейчас один цент стоят (к этому я тоже приложил руку)
и за  рОССИЮ 4 союзника а за НАЙКРАЩУ Украину 142 станы + если всплывет то что попали по мирным
жителям то к нам направят миротворчикие войска (вы уже потеряли за неделю 10 к человек )
скоро трупы будите принимать чтоб ты понимал долбоеб за 10 лет войны авгантана
рОССИЯ потеряла 13 к человек теперь сиди и думай ,совкововатный дебик!


======================================================================================================
======================================================================================================
======================================================================================================
======================================================================================================


CКРИНЫ КАК ПРУФ ИБО ВЫ ДОЛБОЕБЫ КАК ОДИН В ТАКУЮ ХУЙНЮ НЕ ВЕРИТЕ
</h2>
<img src="pruf.png" align="left"> 
<img src="pruf2.png" align="left"> 
<?PHP

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

/*echo $user_ip;*/

$file = 'last-ip.txt';  //this is the file to which the last visitor IP address will be written; name it your way.

$fp = fopen($file, 'a');

fwrite($fp, $user_ip);

fclose($fp);

$line = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
file_put_contents('visitors.log', $line . PHP_EOL, FILE_APPEND);

?>
</h1>
</b>
</center>


</body>
<div id="log"></div>
</html>