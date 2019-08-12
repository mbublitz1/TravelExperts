<!--            Contact Section - Sumit & John-->

<h3>Get In Touch</h3>
<div class="contact pgrow">
    <div class="col span-1-of-3">
        <i class="fas fa-envelope-open-text fa-3x"></i><br><br>
        <p><strong>EMAIL:</strong></p>
        <br>

        <!-- <p>Calgary Branch</p>Senior Agent<p>janet.delton@travelexperts.com</p><br>
        <p>Okatoks Branch</p>Senior Agent<p>jane.merrill@travelexperts.com</p> -->

        <?php
          $query = "SELECT * FROM agents
          INNER JOIN agencies ON agencies.AgencyId = agents.AgencyId";
          $res = $conn->query($query);

          while ($row = $res->fetch_assoc()) {
            echo $row['AgncyCity'];
            echo "<br><br>";
            while ($row = $res->fetch_assoc()) {
              echo $row['AgtFirstName'] . " " . $row['AgtLastName'];
              echo "<br>";
              echo $row['AgtEmail'];
              echo $row['AgencyId'];
              echo "<br><br><br>";
            }
          }

          // while ($row = $resAgt->fetch_assoc()) {
          //     echo $row['AgtFirstName'] . "\n";
          //     echo $row['AgtLastName'] . "\n";
          //     echo "<br>";
          // }
        ?>

    </div>
    <div class="col span-1-of-3">
        <i class="fas fa-phone-square-alt fa-3x"></i><br><br>
        <p><B>PHONE:</B></p><br><p>Calgary<br> Travel Expert<p> (403) 271-9873</p> <br><p>FAX</p>(403) 271-9872</p>
        <br><p>Okatoks</p> Travel Expert<p> (403) 563-2381</p> <br><p>FAX</p>(403) 563-2382</p>
    </div>
    <div class="col span-1-of-3">
        <i class="fas fa-map-marker-alt fa-3x"></i><br><br>
        <p><B>ADDRESS:</B></p><br>Travel Expert<p>1155 8th Ave SW</p> Calgary, AB <p>T2P 1N3</p><br>
        Travel Expert<p>110 Main Street</p> Okotoks, AB <p>T7R 3J5</p>
    </div>
</div>
