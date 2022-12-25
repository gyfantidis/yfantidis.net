
    <?php
    require 'phpFiles/connectDB.php';
    session_start();
    //Εισαγωγή δεδομένων από την φόρμα
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message =$_POST['message'];

    $question = "INSERT INTO
    messages (name, email, message)
    VALUES ('$name', '$email', '$message')";

    if ($mysqli->query($question) === true) {
        echo '  <script language="javascript" type="text/javascript">
                if (!alert ("Thanks for the message!! '.$name.' στις '.$email.'")) {
                    history.go (-1);
                                  }
                                  </script>';
                          exit();
                      } else { //Αν η εγγραφή αποτύχει εξαιτίας ενός σφάλματος.
                          echo '  <script language="javascript" type="text/javascript">
                                  if (!alert ("Error! ' . $mysqli->error . '")) {
                                      history.go (-1);
                                  }
                                  </script>';
                      }





    $mysqli->close(); //Κλείσιμο σύνδεσης με ΒΔ.
?>
