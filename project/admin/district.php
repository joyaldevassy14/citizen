<?php

require('../config/autoload.php');
include("oghead.php");

$file = new FileUpload();
$elements = array(
    "name" => "", "lisc_no" => "", "place" => "", "date" => "", "time" => "", "rule" => "", "vehicleno" => "", "amount" => ""
);


$form = new FormAssist($elements, $_POST);



$dao = new DataAccess();

$labels = array('name' => "Driver Name", 'lisc_no' => "License", 'place' => "Place", 'date' => "Date", 'time' => "Time", 'rule' => "Rule Broken", 'vehicleno' => "Vehicle Number", 'amount' => "Amount");

$rules = array(
    "name" => array("required" => true, "minlength" => 1, "maxlength" => 30, "alphaonly" => true),
    "lisc_no" => array("required" => true, "minlength" => 3, "maxlength" => 30),
    "place" => array("required" => true, "minlength" => 3, "maxlength" => 30, "alphaonly" => true),
    "date" => array("required" => true, "minlength" => 3, "maxlength" => 30),
    "time" => array("required" => true, "minlength" => 3, "maxlength" => 30),
    "rule" => array("required" => true, "minlength" => 2, "maxlength" => 30, "alphaspaceonly" => true),
    "vehicleno" => array("required" => true, "minlength" => 2, "maxlength" => 30),
    "amount" => array("required" => true, "minlength" => 3, "maxlength" => 30, "integeronly" => true)




);


$validator = new FormValidator($rules, $labels);

if (isset($_POST["btn_insert"])) {

    if ($validator->validate($_POST)) {



        $data = array(


            'name' => $_POST['name'],
            'lisc_no' => $_POST['lisc_no'],
            'place' => $_POST['place'],
            'date' => $_POST['date'],
            'time' => $_POST['time'],
            'rule' => $_POST['rule'],
            'vehicleno' => $_POST['vehicleno'],
            'amount' => $_POST['amount'],





        );
        print_r($data);
        if ($dao->insert($data, "issuechallen")) {
            echo "<script> alert('New record created successfully');</script> ";
        } else {
            $msg = "Registration failed";
        } ?>


<?php

    } else
        echo $file->errors();
}




?>
<html>

<head>
</head>

<body>

    <form action="" method="POST" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-6">
                Driver Name:

                <?= $form->textBox('name', array('class' => 'form-control')); ?>
                <?= $validator->error('name'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                License Number:

                <?= $form->textBox('lisc_no', array('class' => 'form-control')); ?>
                <?= $validator->error('lisc_no'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Place:

                <?= $form->textBox('place', array('class' => 'form-control')); ?>
                <?= $validator->error('place'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Date:

                <?= $form->inputbox('date', array('class' => 'form-control'), "date"); ?>
                <span style="color-red;"><?= $validator->error('date'); ?></span>
                <?= $validator->error('date'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Time:

                <?= $form->textBox('time', array('class' => 'form-control')); ?>
                <?= $validator->error('time'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Rule Broken:

                <?= $form->textBox('rule', array('class' => 'form-control')); ?>
                <?= $validator->error('rule'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Vehicle Registration Number:

                <?= $form->textBox('vehicleno', array('class' => 'form-control')); ?>
                <?= $validator->error('vehicleno'); ?>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                Amount Isuued as Fine:

                <?= $form->textBox('amount', array('class' => 'form-control')); ?>
                <?= $validator->error('amount'); ?>



                <center><br><br><button type="submit" name="btn_insert">Submit</button><br></center>
            </div>
        </div>
    </form>


</body>

</html>