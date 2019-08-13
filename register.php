<form action="php-bouncer.php" method="post">
    <div id="form" class="pgrow signup-form">
        <div class="gridcol span-1-of-3">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
          ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum.</p>
<!--            <p>Please register with our system in order to start booking trips.</p>-->
<!---->
<!--            --><?php
//              $sql = "SELECT AgncyCity FROM agencies";
//              $result = $conn->query($sql);
//
//              echo "<select name='AgncyCity'>";
//              while($row = $result->fetch_assoc()) {
//                  echo "<option value=$row[AgncyCity]>
//                    $row[AgncyCity]
//                  </option>";
//                }
//              echo "</select>";
//            ?>

        </div>
        <div class="gridcol span-1-of-3 signup-page">
            <label for="CustFirstName">First Name:</label>
            <input type="text" name="CustFirstName">
            <label for="CustLastName">Last Name:</label>
            <input type="text" name="CustLastName">
            <label for="CustAddress">Address:</label>
            <input type="text" name="CustAddress">
            <label for="CustCity">City:</label>
            <input type="text" name="CustCity">
            <label for="CustProv">Prov:</label>
            <input type="text" name="CustProv">
            <label for="CustPostal">Postal Code:</label>
            <input type="text" name="CustPostal">
            <label for="CustCountry">Country:</label>
            <input type="text" name="CustCountry">
        </div>
        <div class="gridcol span-1-of-3">
            <label for="CustHomePhone">Home No:</label>
            <input type="text" name="CustHomePhone">
            <label for="CustBusPhone">Business No:</label>
            <input type="text" name="CustBusPhone">
            <label for="CustEmail">Email:</label>
            <input type="text" name="CustEmail">
            <input type="Submit" name="Submit" value="Submit">
        </div>
    </div>
</form>
