<script>
  function printData() {
    var divToPrint = document.getElementById("printTable");
    newWin = window.open("");
    newWin.document.write(divToPrint.outerHTML);
    newWin.print();
    newWin.close();
  }
</script>

<?php
//session_start();

use PSpell\Config;

include("dbcon.php");
require('config/autoload.php');
$dao = new DataAccess();
?>
<div class="row">
  <div class="col-md-12">
    <div class="table-responsive">
      <table border="1" id="printTable" style="width:100%">
        <thead>

          <center>You Have Made The Payment Sucessfully Please Retain This Bill....Drive Safely! </center>
          <tr>
            <th colspan="5">Payment Receipt</th>

          </tr>
          <tr>
            <th>Name</th>
            <th>License Number</th>
            <th>Vehicle No</th>
            <th>Amount</th>
            <th>Rule</th>
          </tr>

        </thead>
        <tbody>

          <?php
          $name = $_SESSION['email'];



          $sql = "SELECT * FROM issuechallen WHERE status=1 and name='$name'";
          $result = $conn->query($sql);








          if ($result->num_rows > 0) {


            // output data of each row
            while ($row = $result->fetch_assoc()) {


              echo "
              <tr> 
              <td> " . $row["name"] . "</td>
               <td> " . $row["lisc_no"] . "</td>
                <td> " . $row["vehicleno"] . "</td>
                 <td>" . $row["amount"] . "</td>
                   <td>" . $row["rule"] . "</td> 
                    </tr>";
            }
          }


          ?>







      </table>



      <?php


      $sql11 = " UPDATE issuechallen SET status=3 WHERE status=1 and name='$name'";

      if ($conn->query($sql11) === TRUE) {
        echo "<script> alert('Payment Sucessfully');</script> ";
      }
      ?>
      <br /><br />
      <center>Payment Made On The Date:<?php echo  date("Y/m/d"); ?></center><br><br><br><br>


      <center><a href="/Customer Index/index.html">HOME</a><br><br>
        <input type="button" onclick="printData();" value="PRINT" />

      </center>
    </div>
  </div>
</div>

</form>