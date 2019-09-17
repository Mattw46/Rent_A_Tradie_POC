function loadAuctions() {

   var auction = '<div class="col-md-4">.col-md-4' +
                     '<img src="http://placehold.it/200x150">' +

                     '<p class="listing-title"></p>'+
                                             
                     '<p class="listing-title"></p>'+
                                             '<p class="listing-bid">Current Bid: <span class="listing-bid-amount"></span></p>'+

                     '<p class="listing-ends-in">Ends in: <span class="listing-ends-in-amount"></span></p>'+

                     '<p class="listing-total-bids">Total Bids: <span class="listing-total-bids-amount">'+
                                                      '</span></p><form method="GET" action="./job.php">'+
                           '<input type="hidden" name="listing_id" value="/">'+
                           '<button type="submot">Place bid</button>'+
                        '</form>'+
                     '<p></p>'+
                  '</div>'+
                  '</div>';
   //document.getElementById("pagebody").innerHTML += "Hello World";
   //document.getElementById("pagebody").innerHTML += auction;
   alert("Page is loaded");

   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         var myObj = JSON.parse(this.responseText);
         console.log(myObj);
         console.log(myObj.length);
         document.getElementById("pagebody").innerHTML += "TotalBid: " + myObj[0].TotalBid + "<br> image: " + myObj[0].image + "<br>";
         document.getElementById("pagebody").innerHTML += "TotalBid: " + myObj[1].TotalBid + "<br> image: " + myObj[1].image + "<br>";
         document.getElementById("pagebody").innerHTML += "TotalBid: " + myObj[2].TotalBid + "<br> image: " + myObj[2].image + "<br>";
      }
   };
   xmlhttp.open("GET", "API/getAuctions.php", true);
   xmlhttp.send();
}