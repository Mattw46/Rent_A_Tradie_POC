function loadAuctions() {
   
   //alert("Page is loaded");

   var xmlhttp = new XMLHttpRequest();
   xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         var myObj = JSON.parse(this.responseText);
         console.log(myObj);
         console.log(myObj.length);

         for (var i = 0; i < myObj.length; i++) {
            document.getElementById("pagebody").innerHTML += createAuction(myObj[i]);
         }

         /*document.getElementById("pagebody").innerHTML += createAuction(myObj[0]);
         
         document.getElementById("pagebody").innerHTML += "ID: " + myObj[0].id + " Title: " + myObj[0].Title + " Description: " + 
            myObj[0].Description + " CurrentBid: " + myObj[0].CurrentBid + " TotalBid: " + myObj[0].TotalBid + "<br> image: " + 
            myObj[0].image + "<br>";
         document.getElementById("pagebody").innerHTML += "ID: " + myObj[1].id + " Title: " + myObj[1].Title + " Description: " + 
            myObj[1].Description + " CurrentBid: " + myObj[1].CurrentBid + " TotalBid: " + myObj[1].TotalBid + "<br> image: " + 
            myObj[1].image + "<br>";
         document.getElementById("pagebody").innerHTML += "ID: " + myObj[2].id + " Title: " + myObj[2].Title + " Description: " + 
            myObj[2].Description + " CurrentBid: " + myObj[2].CurrentBid + " TotalBid: " + myObj[2].TotalBid + "<br> image: " + 
            myObj[2].image + "<br>";*/
      }
   };
   xmlhttp.open("GET", "API/getAuctions.php", true);
   xmlhttp.send();

;}

/* Takes array element and returns result as HTML element */
function createAuction(auctionData) {
   var auction = `<div class="col-md-4">` +
                  `<img src="${auctionData.image}">` +
                  `<p class="listing-title">${auctionData.Title}</p>` +                                            
                  `<p class="listing-description">${auctionData.Description}</p>` +
                  `<p class="listing-bid">Current Bid: <span class="listing-bid-amount">${auctionData.CurrentBid}</span></p>` +
                  `<p class="listing-ends-in">Ends in: <span class="listing-ends-in-amount">${auctionData.EndsIn}</span></p>` +
                  `<p class="listing-total-bids">Total Bids: <span class="listing-total-bids-amount">${auctionData.TotalBid}` +
                  `</span></p><form method="GET" action="./job.php">` +
                           `<input type="hidden" name="listing_id" value="${auctionData.id}">` +
                           `<input type="" name="amount" value=""><br><br>` +
                           `<button type="submit">Place bid</button>` +
                           `</form>` +
                           `<p></p>` +
                           `</div>` +
                  `</div>`;

   return auction;

}