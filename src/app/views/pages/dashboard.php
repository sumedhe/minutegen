<!-- Dashboard section -->
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Dashboard view</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  </head>

  <body>
    <div class="container">
      <!--upper row containing 3 cards begins-->
      <div class="row">
        <!--first column of upper row begins-->
        <div class="col-1">
          <!--card1 begins-->
          <div class="card1">
            <div class="row">
              <!--left column of card1 containing meeting number-->
              <div class="number-side">
                <div class="number">
                  <img src="four.png" alt="Fourth meeting">

                </div>

              </div>
              <!--right column of card2 containing meeting status-->
              <div class="status-side">
                <div class="status">
                  <h1>Holding</h1>

                </div>

              </div>

            </div>

          </div>
          <!--card1 ends-->

        </div>
        <!--first column of upper row ends-->
        <!--second(middle) column of upper row begins-->
        <div class="col-1">
          <!--card2 begins-->
          <div class="card2">
            <div class="row">
              <!--left column of card2 containing meeting number-->
              <div class="number-side">
                <div class="number">
                  <img src="two.png" alt="Second meeting">

                </div>

              </div>
              <!--right column of card2 containing meeting status-->
              <div class="status-side">
                <div class="status">
                  <h1>Awaiting</h1>

                </div>

              </div>

            </div>

          </div>
          <!--card2 ends-->

        </div>
        <!--second column of upper row ends-->
        <!--third column of upper row begins-->
        <div class="col-1">
          <!--card3 begins-->
          <div class="card3">
            <div class="row">
              <div class="number-side">
                <div class="number">
                  <img src="five.png" alt="Fifth meeting">

                </div>

              </div>
              <div class="status-side">
                <div class="status">
                  <h1>Pending</h1>

                </div>

              </div>

            </div>

          </div>
          <!--card3 ends-->

        </div>
        <!--third column of upper row ends-->
      </div>
      <!--upper row ends-->
      <!--below row begins-->
      <div class="row">
        <!--left column of below row begins -->
        <div class="col-2">
          <!--meeting details card begins-->
          <div class="meeting-card">
            <!--meeting details card header-->
            <div class="header">
              <h4>Next meeting details</h4>

            </div>
            <!--card content on meeting details-->
            <div class="content">
              <ul>
                <li>Date :</li>
                <p>15.03.2017</p>
                <li>Time :</li>
                <p>At 2pm</p>
                <li>Matters to be discussed :</li>
                <p>Student matters <br>Staff matters <br>Examination matters. <br></p>
              </ul>

            </div>

          </div>
          <!--meeting details card ends-->

        </div>
        <!--left coulmn of below row ends-->
        <!--right column of below row begins-->
        <div class="col-1">
          <!--meeting notification card begins-->
          <div class="notification-card">
            <!--notification card header-->
            <div class="header">
              <h4>Notifications</h4>

            </div>
            <!--notification card vertical menu-->
            <div class="vertical-menu">
              <a href="#">129.3.4 matter closed.</a>
              <a href="#">139.2.5 matter rejected.</a>
              <a href="#">130.3.5 matter opened.</a>
              <a href="#">120.5.7 matter rejected.</a>
              <a href="#">135.6.5 matter opened.</a>
              <a href="#">140.3.6 matter opened.</a>

            </div>

          </div>
          <!--meeting notifcication card ends-->

        </div>
        <!--right column of below row ends-->

      </div>
      <!--below row ends-->

    </div>
  </body>

</html>
