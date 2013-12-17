<?php 
function distance($lat1, $lon1, $lat2, $lon2) {
  $R = 6371;
  $dLat = deg2rad($lat1 - $lat2);
  $dLon = deg2rad($lon1 - $lon2);
  $lat1 = deg2rad($lat1);
  $lat2 = deg2rad($lat2);  
  $a = sin($dLat/2) * sin($dLat/2) + sin($dLon/2) * sin($dLon/2) * cos($lat1) * cos($lat2);
  $c = 2 * atan2(sqrt($a), sqrt(1-$a));
  $distance = $R * $c;
  $dist = $distance;
  return $distance;  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css" />

<script src="less-1.3.0.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>




</head>
<body>
<script>


$(document).ready(function() {
  var currenttemp = $('.currenttemp').html();
  $('.temp').each(function() {
    var var_temp = $(this).html();
    if (var_temp > currenttemp) {
      $(this).addClass('hotter');
    } else if (var_temp < currenttemp) {
      $(this).addClass('colder');
    }
  })
  .append('&deg;');
  $('.currenttemp').append('&deg;');
  });
</script>
    

<?php
if ($_GET["zip"]) {

  include 'icons.php';

  //Initialize the Soap object
  $client = new SoapClient("http://graphical.weather.gov/xml/SOAP_server/ndfdXMLserver.php?wsdl", array("trace" => 1, "exception" => 0));
  
  //Get the LatLong data from the zip code
  $zip = $_GET["zip"];  
  $result = (string)$client->LatLonListZipCode($zip);
  $xml = simplexml_load_string($result);
  $latlong = $xml->latLonList;

  $exploded = explode(",", $latlong);
  $ourLat = (double)$exploded[0];
  $ourLong = (double)$exploded[1];
  
  
  //Find Closest Weather Station
  $file = "stations.xml";
  $stationsxml = simplexml_load_file($file);
  $stationArray = $stationsxml->xpath('//station');
  $nearestStation;
  $nearestDistance = 99999999999999;
  $dist;
  foreach($stationArray as $station) {
    $lat = (double)$station->latitude;
    $long = (double)$station->longitude;
  
    $d = distance($lat, $long, $ourLat, $ourLong);
    if ($d <= $nearestDistance) {
      $nearestDistance = $d;
      $nearestStation = $station;
    }
  }
  
  //Get Closest Stations Current Weather
  $currentWeatherUrl = "http://www.weather.gov/xml/current_obs/".$nearestStation->station_id.".xml";
  $currentWeatherXml = simplexml_load_file($currentWeatherUrl);
  $currentWeatherArray = $currentWeatherXml->xpath('//current_observation');
  $currentWeatherArray[0]->temp_f;                                        //Current Weather Temp
  $currentWeatherArray[0]->observation_time;                                    //Latest Observation Time
  $nearestStation->station_name;                                          //Location of Observation
  
  
  //Get the current date and get the day five days from now
  $startDate =  date("Y-m-d")."T00:00:00";
  $endDate = date("Y-m-d", mktime(0, 0, 0, date("m")  , date("d")+4, date("Y")))."T23:59:59";
  
  //choose what weather data we want
  $xmlDocument = '<weatherParameters xmlns:dwml="http://www.weather.gov/forecasts/xml/DWMLgen/schema/DWML.xsd">
<maxt xsi:type="xsd:boolean">true</maxt>
<mint xsi:type="xsd:boolean">true</mint>
<temp xsi:type="xsd:boolean">true</temp>
</weatherParameters>';
  $xmlvar = new SoapVar($xmlDocument,XSD_ANYXML);
  
  //Properly form the request for SOAP
  $paramLatLon = new SoapParam($latlong, "listLatLong");
  $paramProduct = new SoapParam('time-series', "product");
  $paramStartDate = new SoapParam($startDate, "startDate");
  $paramEndDate = new SoapParam($endDate, "endDate");
  $paramNumDays = new SoapParam(8, "numDays");
  $paramUnits = new SoapParam('e', "units");
  $paramFormat = new SoapParam('24 hourly', "format");
  $paramWeatherInfo = new SoapParam($xmlvar, "weatherParameters");
  
  //Make the Weather Request
  $weatherHourly = $client->NDFDgenLatLonList($paramLatLon, $paramProduct, $paramStartDate, $paramEndDate, $paramUnits, $paramWeatherInfo);
  $weatherDaily = $client->NDFDgenByDayLatLonList($paramLatLon, $paramStartDate, $paramNumDays, $paramUnits, $paramFormat);
    //var_dump(htmlspecialchars($weatherHourly));
  //Turn the SOAP Objects into XML
  $weatherHourly = simplexml_load_string($weatherHourly);
  $weatherDaily = simplexml_load_string($weatherDaily);
  
  

  //Finally, we have our weather data let's get it ready by Day
  $highTempArray = $weatherDaily->xpath('//temperature[@type="maximum"]/value');              //High Temp Daily
  $lowTempArray = $weatherDaily->xpath('//temperature[@type="minimum"]/value');              //Low Temp Daily
  $typeArray = $weatherDaily->xpath('//weather/weather-conditions');                    //Weather Conditions Daily
  
  
  //And now by hour
  $TimeFormat = $weatherHourly->xpath('//temperature[@type="hourly"]');
  $TimeFormat = $TimeFormat[0]->attributes();
  $TimeFormat = (string)$TimeFormat['time-layout'];
  $hourlyTempArray = $weatherHourly->xpath('//temperature[@type="hourly"]/value');   //Hourly Temps Array
  $hourlyTempTime = $weatherHourly->xpath('//data/time-layout[3]/start-valid-time');
  
  
  //Connect Weather Conditions to Icons


  
  
  //Display!!!!!!!!
  
  
  for($i = 0; $i < 1; $i++) {
    $hightemp = $highTempArray[$i];
    $lowtemp = $lowTempArray[$i];
    $type = $typeArray[$i]->attributes(); 
    $summary = (string)$type['weather-summary'];
    
    //Monday, Tues, Wed
    $thisDay  = date(l, mktime(0, 0, 0, date("m")  , date("d")+$i, date("Y")));
  
  ?>
<div id="topbar"></div>  
<div id="wrapper">
  
<div id="todayweather">


<div class="col-l">
<img src="img/<?= $arrayicons[$summary]?>">
</div>
<div class="col-r">
<div id="todayinfo">
<div class="align-left"><p id="topdate"><?=$thisDay;?></p><p id="topyear"><?= date('F d, Y'); ?></p></div>
<div class="align-right"><p id = "toptemp"><span class="temp"><?=$hightemp;?></span> high</p><p id = "toptemp"><span class="temp"><?=$lowtemp;?></span> low</p></div>
<div class="clear"></div>
<div class="currenttemp"><?= $currentWeatherArray[0]->temp_f;?></div>
<div class="labels"><?= $summary; ?></div>

</div>
</div>
<div class="clear"></div>

</div>
<div class="divider"></div>

<?
  }
  
  $day_static = date('d');
  ?><div class="hourlytempcontainer"><?
  for($i = 0; $i < 20; $i++) {
    $hour = DateTime::createFromFormat('Y-m-d\TH:i:sP', $hourlyTempTime[$i]);
    if ($hour->format('d') !== $day_static) {
      $newday = $hour->format('D, M d');
      $day_static = $hour->format('d');
    } else {
      $newday = NULL;
    }
    
    if ($newday) {
    ?>
      <div class = "hourly newday">
      <p class = "hourlytemp temp"><?=$hourlyTempArray[$i]?></p>
      <p class = "hourlytime"><?=$hour->format('g a')?></p>
      <p class = "hourlyday"><?=$newday?></p>
      </div>
    <?
    } else { 
    ?>
      <div class = "hourly">
      <p class = "hourlytemp temp"><?=$hourlyTempArray[$i]?></p>
      <p class = "hourlytime"><?=$hour->format('g a')?></p>
      </div>
    <?
    }
    
      
      
  
    
  }
  ?><div class="clear-both"></div></div>
  <div class="divider" style="background-position:0px -25px;"></div>
  <div class="bottom">
  
  <?

  for($i = 1; $i < 6; $i++) {
  $hightemp = $highTempArray[$i];
  $lowtemp = $lowTempArray[$i];
  $type = $typeArray[$i]->attributes(); 
  $summary = (string)$type['weather-summary'];
  
  //Monday, Tues, Wed
  $thisDay  = date(l, mktime(0, 0, 0, date("m")  , date("d")+$i, date("Y")));
?>

<div class="bottombox">
<p class="day"><?=$thisDay;?></p>
<img width="150" height="166" src="img/<?=$arrayicons[$summary]?>">
<p><?=$summary;?><br/>
<p class="bottomtemp hourlytemp"><span class="hotter"><?=$hightemp;?></span>&deg; / <span class="colder"><?=$lowtemp;?></span>&deg;</p>
</div>

<?}?>
</div>
<div class="clear"></div>
  
  
<?  
} else {
?>

<div class="enter">
  <img src="http://alexsciuto.com/weather/img/sun.png" height="138" width="125">
  <div id="caption"><p>Weather.com. WeatherUnderground.com. They're all chock full of advertisements and way too much information. Here's your refreshing antidote to all that. Just today's weather's highs and lows. An hourly forecast. And a five-day forecast. </p><p>Simple? You bet.</p></div>
<form action="index.php" method="get">
  <div class="input">
    <input type="text" class="in well" name="zip" placeholder="Zip Code"><br/>
    <button type="submit" class="btn btn-large btn-primary">Get the Weather</button>
    <p id="note"><em>Data courtesy of the United States Government</em></p>
  </div>
</form>
</div>

<?
  }
  
   ?>
   </div>
</body>
</html>

