<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" 
    charset="UTF-8">
    <title>Advice Form</title>
    <style>
        
    * {
        box-sizing: border-box;
    }

    .contain {
        max-width: 1170px;
        height:297mm;
        width:210mm;
        padding: 1em;
        margin: auto;
        border: 1px solid black;
        padding: 10px;
    }
    
    body {
        font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;
        font-size: 61.25%;
    }

    h1 {
        font-size: 120.25%;
    }

    h3 {
        margin: 0;
        margin-bottom: 1rem;
        font-size:90.25%;
    }

    input,
    textarea {
        width: 90%;
        border: 0.1px solid #000;
    }

    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 1px;
        margin-top: 0.5cm;
        margin-bottom: 2.54cm;
        margin-right: 0.1cm;
        margin-left: 0.1cm;
    }

    form label {
        display: block;
    }

    form p {
        margin: 0;
    }

    /** page grid */
    .full-width {
        grid-column: 1 / 3;
    }

    /** text area space */
    input,
    textarea {
        padding: 0.2em;
    }

    .Submit {
        background: lightgrey;
        width: 200%;
        border: 0;
    }
    </style>
</head>
<body>
    <?php
     /**
      * Php version 8
      *
      * @category Description
      * @package  PHP
      * @author   Vilho Nguno <vilhonguno@gmail.com>
      * @license  http://localhost:4000/php/af.php Advice Form
      * @link     http://localhost:4000/php/af.php
      * Define variables and set to empty values 
      */
    $adviceNR = $persNum = $persMember = $dateOfImple = $salaryNPA 
        = $salaryTCOE = $housingAllow = $rentalAllow = $identification 
            = $decuctions = $amount1 = $amount2 = $leaveCredit = $proData 
                = $DOB = $deductDebt = $otherSpecify = $date1 = $date2 = $date3 
                    = $date4 = $compiledBy = $approvedBy = $compiledBy2 
                        = $approvedBy2 = "";

    
    $persMember = test_input($_POST["persMember"]);
    $persNum = test_input($_POST["persNum"]);
    $adviceNR = test_input($_POST["adviceNR"]);
    $dateOfImple = test_input($_POST["dateOfImple"]);
    $salaryNPA = test_input($_POST["salaryNPA"]);

    $salaryTCOE = test_input($_POST["salaryTCOE"]);
    $housingAllow = test_input($_POST["housingAllow"]);
    $rentalAllow = test_input($_POST["rentalAllow"]);
    $identification = test_input($_POST["identification"]);

    $decuctions = test_input($_POST["decuctions"]);
    $amount1 = test_input($_POST["amount1"]);
    $amount2 = test_input($_POST["amount2"]);
    $leaveCredit = test_input($_POST["leaveCredit"]);
    $proData = test_input($_POST["proData"]);

    $DOB = test_input($_POST["DOB"]);
    $deductDebt = test_input($_POST["deductDebt"]);
    $otherSpecify = test_input($_POST["otherSpecify"]);
    $date1 = test_input($_POST["date1"]);
    $date2 = test_input($_POST["date2"]);
    $date3 = test_input($_POST["date3"]);

    $date4 = test_input($_POST["date4"]);
    $compiledBy = test_input($_POST["compiledBy"]);
    $approvedBy = test_input($_POST["approvedBy"]);
    $compiledBy2 = test_input($_POST["compiledBy2"]);
    $approvedBy2 = test_input($_POST["approvedBy2"]);

    /**
     * Undocumented function
     *
     * @param string $data yes
     * 
     * @return string
     */
    function Test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="contain">
        <div class="form">
            <h1><center>NOTICE OF APPOINTMENT/AMENDMENTS/RESIGNATION</center></h1>
            <form method="post" action="
            <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                <p>
                    <label for="">Personnel Member</label>
                    <input type="text" name="persMember" 
                    value="<?php echo $persMember;?>">
                </p>
                <p>
                    <label for="">Personnel Number</label>
                    <input type="text" name="persNum">
                </p>
                <p>
                    <label for="">Date of Implementation</label>
                    <input type="date" name="dateOfImple">
                    <br><br>
                </p>    
                <p>
                    <h3>APPOINTMENTS/AMENDMENTS:</h3> <br>
                        <label for=""> ADDENDUMS: </label>
                </p>
                <p>
                    <label>Applicant to pay salary into bank account</label>
                    <center><input type="checkbox"></center>
                    
                    <label >PAYE 2 form</label>
                    <center><input type="checkbox"></center>
                    
                    <label >Housing/Rental Agreement</label>
                    <center><input type="checkbox"></center>

                    <label >Medical form </label>
                    <center><input type="checkbox"></center>
                    
                    <label >Social Security form </label>
                    <center><input type="checkbox"></center>

                    <label >Pension Form </label>
                    <center><input type="checkbox"></center>
                </p>
                <p><br></p>
                <p>
                <label for="">Salary Notch Per Annum</label>
                    <input type="text" name="salaryNPA">
                </p>
                <p>
                <label for="">Salary TCOE</label>
                    <input type="text" name="salaryTCOE">
                </p>
                <p>
                    <label for="">Housing Allowance</label>
                    <input type="text" name="housingAllow">
                </p>
                <p>
                    <label for="">Rental Allowance</label>
                    <input type="text" name="rentalAllow">
                </p>
                <p></p>
                <p> </p>
                <p>
                    <label >38% of Basic Salary </label>
                    <center><input type="checkbox"></center>
                    <label >TCOE</label>
                    <center><input type="checkbox"></center>
                </p>
                <p>
                    
                </p>
                <p> </p>
                <p>
                    <h4>Allowances </h4>
                </p>
                <p>
                    <label for="">Identification</label>
                    <input type="text" name=identification>
                </p>
                <p>
                    <label for="">Amount</label>
                    <input type="text" name="amount1">
                </p>
                <p>
                    <label for="">Deductions</label>
                    <input type="text" name=decuctions>
                </p>
                <p>
                    <label for="">Amount</label>
                    <input type="text" name="amount2">
                </p>
                <p> </p>
                <p>
                    <h4>RESIGNATION</h4> <br>
                    <label for=""> ADDENDUMS: </label>
                </p>
                <p>
                    <label>Payment for Benefits Form</label>
                    <center><input type="checkbox"></center>
                    
                    <label >Resignation Letter</label>
                    <center><input type="checkbox"></center>
                </p>
                <p> </p>
                <p>
                    <label for="">DOB</label>
                    <input type="date" name="DOB">
                </p>
                <p> <br><br> </p>
                <p>
                    <label for="">Leave Credit: Day(s)</label>
                    <input type="text" name="leaveCredit">
                </p>
                <p>
                    <label for="">Pro-rata bonus: Day(s)</label>
                    <input type="text" name="proData">
                </p>
                <p> </p>
                <p> </p>
                <p>
                    <label for="">Deduction(s) regarding departmental debt: </label>
                    <input type="text" name="deductDebt">
                </p>
                <p> </p>
                <p> 
                    <label>Housing Deduction</label>
                    <center><input type="checkbox"></center>
                    
                    <label >Unpaid Leave</label>
                    <center><input type="checkbox"></center>
                    
                    <label >Other (specify)</label>
                    <center><input type="checkbox"></center>
                </p>
                <p> </p>
                <p>
                    <label for=""></label>
                    <input type="text" name="otherSpecify">
                </p>
                <p> </p>
                <p><br></p>
                <p>
                    <h3>HUMAN RESOURCES DEPARTMENT</h3> <br>
                </p>
                <p> </p>
                <p>
                    <label for="">Compiled By:</label>
                    <input type="text" name="compiledBy">

                    <label for="">Approved By:</label>
                    <input type="text" name="approvedBy">
                </p>
                <p>
                    <label for="">Date:</label>
                    <input type="date" name="date">

                    <label for="">Date:</label>
                    <input type="date" name="date2">
                </p>
                    <h3>FINANCE DEPARTMENT</h3> <br>
                </p>
                <p> </p>
                <p>
                    <label for="">Compiled By:</label>
                    <input type="text" name="compiledBy2">

                    <label for="">Approved By:</label>
                    <input type="text" name="approvedBy2">
                </p>
                <p>
                    <label for="">Date:</label>
                    <input type="date" name="date3">

                    <label for="">Date:</label>
                    <input type="date" name="date4">
                </p>
                <br>
                <p> </p>
            <center>
                <input type="submit" name="submit" value="Submit">
            </center>
            </form>

            <?php
            echo "<h2>Your Input:</h2>";
            echo $adviceNR; 
            echo "<br>";
            echo $persNum;
            echo "<br>";
            echo $persMember;
            echo "<br>";
            echo $dateOfImple;
            echo "<br>";
            echo $salaryNPA ;
            echo "<br>";
            echo $salaryTCOE;
            echo "<br>";
            echo $housingAllow;
            echo "<br>";
            echo $rentalAllow;
            echo "<br>";
            echo $identification ;
            echo "<br>";
            echo $decuctions;
            echo "<br>";
            echo $amount1;
            echo "<br>";
            echo $amount2;
            echo "<br>";
            echo $leaveCredit;
            echo "<br>";
            echo $proData ;
            echo "<br>";
            echo $DOB ;
            echo "<br>";
            echo $deductDebt ;
            echo "<br>";
            echo $otherSpecify ;
            echo "<br>";
            echo $date1 ;
            echo "<br>";
            echo $date2 ;
            echo "<br>";
            echo $date3 ;
            echo "<br>";
            echo $date4 ;
            echo "<br>";
            echo $compiledBy;
            echo "<br>";
            echo $approvedBy;
            echo "<br>";
            echo $compiledBy2;
            echo "<br>";
            echo $approvedBy2;
            echo "<br>";
            ?>
        </div>
    </div>
</body>
</html>