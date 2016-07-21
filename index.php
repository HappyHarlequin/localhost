<?php
 $regCheck = "/(<p class=\"price price-primary\"><a href=\")(.*)(\">)(.*)(&nbsp)(.*)(<a href)/";



 $string = file_get_contents('http://catalog.onliner.by/mobile/apple/apple_iphone5s16/prices?region=minsk&currency=byr');
preg_match_all($regCheck, $string, $result);
print_r($result);
/*foreach ($result as $item) {
 $result2 =
}*/