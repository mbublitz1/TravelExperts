<!--            Contact Section - Sumit & John-->

<h3>Get In Touch</h3>
<div class="contact pgrow">
    <div class="gridcol span-1-of-3">
        <em class="fas fa-phone-square-alt fa-3x"></em><br><br>
        <p><strong>PHONE:</strong></p>
        <br>
        <p><strong>Calgary</strong></p>
        <br>

        <?php
        $query = "SELECT AgncyCity, AgncyPhone, AgncyFax FROM agencies
        WHERE AgncyCity = 'Calgary'
        ORDER BY AgncyCity";
        $res = $conn->query($query);

        while ($row = $res->fetch_assoc()) {
          echo "<p>Phone:</p>";
          echo preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $row['AgncyPhone']);
          echo "<br><br>";
          echo "<p>Fax:</p>";
          echo preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $row['AgncyFax']);
          echo "<br><br><br>";
        }
          ?>

          <p><strong>Okotoks</strong></p>
          <br>

          <?php
          $query = "SELECT AgncyCity, AgncyPhone, AgncyFax FROM agencies
          WHERE AgncyCity = 'Okotoks'
          ORDER BY AgncyCity";
          $res = $conn->query($query);

          while ($row = $res->fetch_assoc()) {
            echo "<p>Phone:</p>";
            echo preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $row['AgncyPhone']);
            echo "<br><br>";
            echo "<p>Fax:</p>";
            echo preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $row['AgncyFax']);
            echo "<br><br><br>";
          }
            ?>


    </div>
    <div class="gridcol span-1-of-3">
        <em class="fas fa-envelope-open-text fa-3x"></em><br><br>
        <p><strong>EMAIL:</strong></p>
        <br>
        <p><strong>Calgary</strong></p>
        <br>

        <?php
          $query = "SELECT * FROM agents
          INNER JOIN agencies ON agencies.AgencyId = agents.AgencyId
          WHERE AgncyCity = 'Calgary' AND AgtPosition = 'Senior Agent'
          ORDER BY agencies.AgncyCity, agents.AgtFirstName";
          $res = $conn->query($query);

          while ($row = $res->fetch_assoc()) {
            echo $row['AgtFirstName'] . " " . $row['AgtLastName'];
            echo "<br>";
            echo $row['AgtPosition'];
            echo "<br>";
            echo "<a href=\"mailto:" . $row['AgtEmail'] . "\">" . $row['AgtEmail'] . "</a>";
            echo "<br><br><br>";
          }
        ?>

        <p><strong>Okotoks</strong></p>
        <br>

        <?php
          $query = "SELECT * FROM agents
          INNER JOIN agencies ON agencies.AgencyId = agents.AgencyId
          WHERE AgncyCity = 'Okotoks' AND AgtPosition = 'Senior Agent'
          ORDER BY agencies.AgncyCity, agents.AgtFirstName";
          $res = $conn->query($query);

          while ($row = $res->fetch_assoc()) {
            echo $row['AgtFirstName'] . " " . $row['AgtLastName'];
            echo "<br>";
            echo $row['AgtPosition'];
            echo "<br>";
            echo "<a href=\"mailto:" . $row['AgtEmail'] . "\">" . $row['AgtEmail'] . "</a>";
            echo "<br><br><br>";
          }
        ?>

    </div>

    <div class="gridcol span-1-of-3">
        <em class="fas fa-map-marker-alt fa-3x"></em><br><br>
        <p><strong>ADDRESS:</strong></p>
        <br>
        <p><strong>Okotoks</strong></p>
        <br>

        <?php
        $query = "SELECT AgncyAddress, AgncyCity, AgncyProv, AgncyCountry, AgncyPostal  FROM agencies
        WHERE AgncyCity = 'Calgary'
        ORDER BY AgncyCity";
        $res = $conn->query($query);

        while ($row = $res->fetch_assoc()) {
          echo $row['AgncyAddress'];
          echo "<br>";
          echo $row['AgncyCity'] . ", " . $row['AgncyProv'] . ", " . $row['AgncyCountry'];
          echo "<br>";
          echo $row['AgncyPostal'];
          echo "<br><br><br>";
        }
          ?>

          <p><strong>Okotoks</strong></p>
          <br>

          <?php
          $query = "SELECT AgncyAddress, AgncyCity, AgncyProv, AgncyCountry, AgncyPostal  FROM agencies
          WHERE AgncyCity = 'Okotoks'
          ORDER BY AgncyCity";
          $res = $conn->query($query);

          while ($row = $res->fetch_assoc()) {
            echo $row['AgncyAddress'];
            echo "<br>";
            echo $row['AgncyCity'] . ", " . $row['AgncyProv'] . ", " . $row['AgncyCountry'];
            echo "<br>";
            echo $row['AgncyPostal'];
            echo "<br><br><br>";
          }
            ?>

    </div>
</div>
