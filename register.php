<form action="php-bouncer.php" method="post">
    <div id="form" class="pgrow signup-form">
        <div class="gridcol span-1-of-3">
            <img id="registerbtn" src="img/Register-Now.png" alt="Register here">

        </div>
        <div class="gridcol span-1-of-3 signup-page">
            <label for="CustFirstName">First Name:</label>
            <input type="text" name="CustFirstName" required>
            <label for="CustLastName">Last Name:</label>
            <input type="text" name="CustLastName" required>
            <label for="CustAddress">Address:</label>
            <input type="text" name="CustAddress" required>
            <label for="CustCity">City:</label>
            <input type="text" name="CustCity" required>
            <label for="CustProv">Prov:</label>
            <input type="text" name="CustProv" required>
            <label for="CustPostal">Postal Code:</label>
            <input type="text" name="CustPostal">
            <label for="CustCountry">Country:</label>
            <input type="text" name="CustCountry">
        </div>
        <div class="gridcol span-1-of-3">
            <label for="CustHomePhone">Home No:</label>
            <input type="text" name="CustHomePhone" required>
            <label for="CustBusPhone">Business No:</label>
            <input type="text" name="CustBusPhone">
            <label for="CustEmail">Email:</label>
            <input type="text" name="CustEmail" required>
            <input type="Submit" name="Submit" value="Submit">
        </div>
    </div>
</form>
