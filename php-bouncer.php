<!-- JOHN -->

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
    echo "<script type='text/javascript'>
    setTimeout(function () {
      window.location.href = 'index.php';
    }, 2000);
    </script>";
    echo "Form successfully submitted";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error .
    "<br><br><br><br>
    Please contact the local administrtor.";
  }

  $conn->close();
?>
