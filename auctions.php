<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Rent A Tradie</title>
  </head>
  <body onload="loadAuctions()">
    <!-- header -->
    <!--div class="jumbotron text-center">
      <h1>My First Bootstrap Page</h1>
      <p>Resize this responsive page to see the effect!</p> 
    </div>-->
    <!-- End Header -->
    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Rent A Tradie</h1>
        <!--<p>Resize this responsive page to see the effect!</p> -->
      </div>
    <!-- Nav section -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="loggedout.php">Log Out</a><!-- loggedout.php is temporary -->
            </li>   
          </ul>
        </div> 
        
      </nav>
    <!-- End Nav Section -->

    <!-- Body -->
    <script>
      /*function loadAuctions() {
        //console.log("Hello world");
        console.log("pageloaded");
        //document.getElementById("content").innerHTML = "Hello World";
        document.getElementById("pagebody").innerHTML += "Hello World";
        alert("Page is loaded");
      }*/

      
      </script>
    <div class="container">
      <div class="row">
        <div class="col-sm-2" style="min-width: 130px;">
          <h3>Categories</h3>
          <p>Lorem ipsum dolor..</p>
        </div>
        
        <div class="col-sm-10" style="text-align: center;">
          <h3>Column 2</h3>
          <p>Lorem ipsum dolor..</p>
          <!-- auctions go inside here -->
          <div class="row" id="pagebody">
              <!--<div class="col-md-4">.col-md-4
                  <img src="http://placehold.it/200x150">

                  <p class="listing-title"></p>
                                          
                  <p class="listing-title"></p>
                                          <p class="listing-bid">Current Bid: <span class="listing-bid-amount"></span></p>
               
                  <p class="listing-ends-in">Ends in: <span class="listing-ends-in-amount"></span></p>

                  <p class="listing-total-bids">Total Bids: <span class="listing-total-bids-amount">
                                                   </span></p><form method="GET" action="">
                          <input type="hidden" name="listing_id" value="/">
                          <button type="submit">Place bid</button>
                      </form>
                  <p></p>
              </div>
              <div class="col-md-4">.col-md-4
                  <img src="http://placehold.it/200x150">

                  <p class="listing-title"></p>
                                          
                  <p class="listing-title"></p>
                                          <p class="listing-bid">Current Bid: <span class="listing-bid-amount"></span></p>
               
                  <p class="listing-ends-in">Ends in: <span class="listing-ends-in-amount"></span></p>

                  <p class="listing-total-bids">Total Bids: <span class="listing-total-bids-amount">
                                                   </span></p><form method="GET" action="./job.php">
                          <input type="hidden" name="listing_id" value="/">
                          <button type="submot">Place bid</button>
                      </form>
                  <p></p>
              </div>
              <div class="col-md-4">.col-md-4
                  <img src="http://placehold.it/200x150">

                  <p class="listing-title"></p>
                                          
                  <p class="listing-title"></p>
                                          <p class="listing-bid">Current Bid: <span class="listing-bid-amount"></span></p>
               
                  <p class="listing-ends-in">Ends in: <span class="listing-ends-in-amount"></span></p>

                  <p class="listing-total-bids">Total Bids: <span class="listing-total-bids-amount">
                                                   </span></p><form method="GET" action="./job.php">
                          <input type="hidden" name="listing_id" value="/">
                          <button type="submot">Place bid</button>
                      </form>
                  <p></p>
              </div>
              <div class="col-md-4">.col-md-4
                  <img src="http://placehold.it/200x150">

                  <p class="listing-title"></p>
                                          
                  <p class="listing-title"></p>
                                          <p class="listing-bid">Current Bid: <span class="listing-bid-amount"></span></p>
               
                  <p class="listing-ends-in">Ends in: <span class="listing-ends-in-amount"></span></p>

                  <p class="listing-total-bids">Total Bids: <span class="listing-total-bids-amount">
                                                   </span></p><form method="GET" action="./job.php">
                          <input type="hidden" name="listing_id" value="/">
                          <button type="submot">Place bid</button>
                      </form>
                  <p></p>
              </div>-->
            </div>
            <!-- End of Auctions -->
          
        
      </div>
    </div>
    <!-- End Body -->
    
    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>This is a proof of concept for Rent A Tradie.</p>
        <p>This service helps link tradies to clients who need work done</p>
        <p>Source is hosted on <a href="https://github.com/Mattw46/Rent_A_Tradie_POC">Github</a></p>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="js/auctions.js" type="text/javascript"></script>
    
  </body>
</html>