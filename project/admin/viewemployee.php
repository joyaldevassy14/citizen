<?php require('../config/autoload.php'); ?>

<?php
$dao = new DataAccess();



?>
<?php include('oghead.php'); ?>


<div class="container_gray_bg" id="home_feat_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table border="1" class="table" style="margin-top:100px;">
                    <tr>

                        <th>Challan No</th>
                        <th>Driver Name</th>
                        <th>License</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Rule Broken</th>
                        <th>Vehicle Number</th>
                        <th>Amount</th>
                        <th>EDIT/DELETE</th>


                    </tr>
                    <?php

                    $actions = array(
                        'edit' => array('label' => 'Edit', 'link' => 'editchallen.php', 'params' => array('id' => 'challan_no'), 'attributes' => array('class' => 'btn btn-success')),

                        'delete' => array('label' => 'Delete', 'link' => 'deletedepart.php', 'params' => array('id' => 'challan_no'), 'attributes' => array('class' => 'btn btn-success'))

                    );

                    $config = array(
                        'srno' => true,
                        'hiddenfields' => array('challan_no'),


                    );


                    $join = array();
                    $fields = array('challan_no', 'name', 'lisc_no', 'place', 'date', 'time', 'rule', 'vehicleno', 'amount');

                    $users = $dao->selectAsTable($fields, 'issuechallen', 'status = 1', $join, $actions, $config);

                    echo $users;




                    ?>

                </table>
            </div>





        </div><!-- End row -->
    </div><!-- End container -->
</div><!-- End container_gray_bg -->