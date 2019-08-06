<?php
/** create dummy JSON data to develop and test ajax functionality */

$auction1->CurrentBid = "";
$auction1->EndsIn = "";
$auction1->TotalBid = 6;
$auction1->image = "http://placehold.it/200x150";
$auction2->CurrentBid = "";
$auction2->EndsIn = "";
$auction2->TotalBid = 6;
$auction2->image = "http://placehold.it/200x150";
$auction3->CurrentBid = "";
$auction3->EndsIn = "";
$auction3->TotalBid = 6;
$auction3->image = "http://placehold.it/200x150";
$auctionList = array($auction1,$auction2,$auction3);

$JSONlist = json_encode($auctionList);
echo $JSONlist;
?>