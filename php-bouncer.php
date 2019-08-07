<HTML>

<HEAD>
  <TITLE>Your Form Values</TITLE>
</HEAD>

<BODY>
  <?PHP
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "travelexperts";

  $custFirstName = $_POST['CustFirstName'];
  $custLastName = $_POST['CustLastName'];
  $custAddress = $_POST['CustAddress'];
  $custCity = $_POST['CustCity'];
  $custProv = $_POST['CustProv'];
  $custPostal = $_POST['CustPostal'];
  $custCountry = $_POST['CustCountry'];
  $custHomePhone = $_POST['CustHomePhone'];
  $custBusPhone = $_POST['CustBusPhone'];
  $custEmail = $_POST['CustEmail'];

  $conn = new mysqli($server, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO customers (
    CustFirstName,
    CustLastName,
    CustAddress,
    CustCity,
    CustProv,
    CustPostal,
    CustCountry,
    CustHomePhone,
    CustBusPhone,
    CustEmail
  ) VALUES (
    '$custFirstName',
    '$custLastName',
    '$custAddress',
    '$custCity',
    '$custProv',
    '$custPostal',
    '$custCountry',
    '$custHomePhone',
    '$custBusPhone',
    '$custEmail'
  )";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

   print("<h1>Your form sent the following values:</h1>");
   print("<table border='1'><tr><th>FIELDNAME</th><th>VALUE</th></tr>");
      foreach (array_keys($_POST) as $name)
      {
         print("<tr><td>$name</td><td>$_POST[$name]</td></tr>");
      }
   print("</table>");
?>
</BODY>

</HTML>
