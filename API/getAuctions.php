<?php
/** create dummy JSON data to develop and test ajax functionality 
 * EndsIn is in hours
*/

$auction1->id = 1;
$auction1->Title = "Mow Lawn";
$auction1->Description = "Mow large yard";
$auction1->CurrentBid = "50.00";
$auction1->EndsIn = "2";
$auction1->TotalBid = 6;
$auction1->image = "http://placehold.it/200x150";
$auction2->id = 2;
$auction2->Title = "Change light bulb";
$auction2->Description = "Change 6 light bulbs";
$auction2->CurrentBid = "20.00";
$auction2->EndsIn = "5";
$auction2->TotalBid = 6;
$auction2->image = "http://placehold.it/200x150";
$auction3->id = 3;
$auction3->Title = "Unclog drain";
$auction3->Description = "Blocked drain needs unclogging";
$auction3->CurrentBid = "45.00";
$auction3->EndsIn = "4";
$auction3->TotalBid = 6;
$auction3->image = "http://placehold.it/200x150";
$auctionList = array($auction1,$auction2,$auction3);

$JSONlist = json_encode($auctionList);
echo $JSONlist;
?>