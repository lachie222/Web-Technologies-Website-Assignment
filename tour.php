<?php
    require_once "queryDb.php";
    if (isset($_GET["event"])) {
        $search = $_GET["event"];
        } else {
        $search = "";
        }
    $events = getEvents($search);
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Tour Dates</title>
            <link rel="stylesheet" type="text/css" href="styles.css"/>
        </head>
        <body>
            <div class="header">
                <a href="index.html"><img src="assets/logo.png" alt="Band Logo"/></a>
                <div class="navbar">
                  <a href="index.html">Home</a>
                  <a href="newreleases.html">New Releases</a>
                  <a class="active" href="tour.php">Tour Dates</a>
                  <a href="merchandise.php">Merchandise</a>
                  <a href="mailinglist.html">Mailing List</a>
                  <a href="contact.html">Contact Us</a>
                </div>
            </div>
            <h1 class="heading2">Upcoming Shows:</h1>
            <div class="tour">
                <form action="tour.php" method="get">
                    <input type="text" id="event" name="event" value="<?= $search?>">
                    <input type="submit" value="Search">
                </form>
                <table>
                    <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Location</th>
                            <th>Date</th>
                            <th>Tickets</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($events as $event)
                            {
                        ?>
                            <tr>
                                <td><?= $event["EVENTNAME"]?></td>
                                <td><?= $event["LOCATION"]?></td>
                                <td><?= $event["DATE"]?></td>
                                <td><a href="https://www.eventbrite.com.au/" class="tickets">Tickets</a></td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
            <footer>Copyright © 2021 Angel Failure</footer>
        </body>