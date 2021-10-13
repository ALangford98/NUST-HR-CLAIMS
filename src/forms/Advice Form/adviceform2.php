<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" 
    content="width=device-width, initial-scale=1" charset="UTF-8">
    <title>Advice Form</title>
    <style>
    * {
        box-sizing: border-box;
    }

    .contain2 {
        max-width: 1170px;
        height: 297mm;
        width: 210mm;
        padding: 1em;
        margin: auto;
        border: 1px solid black;
        padding: 10px;

    }

    div {
        font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;
        font-size: 85.25%;
    }

    h1 {
        font-size: 120.25%;
    }

    h3 {
        margin: 0;
        margin-bottom: 1rem;
        font-size: 90.25%;
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

    output {
        border: 1px solid #000;
        padding: 0.09em;
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
     * @license  http://localhost:4000/php/adviceform.php Advice Form
     * @link     http://localhost:4000/php/adviceform.php
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
     * <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>
     */
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
            echo <<<END
            <div class="contain2">
            <div class="form">
            <h1><center>NOTICE OF APPOINTMENT/AMENDMENTS/RESIGNATION</center></h1>
            <form method="post" action=">
                <p>
                    <label for="">Advice Number: <br>$adviiceNum</label>
                </p>
                <p> <br>
                    <label for="">Personnel Member: <br>$persMember</label>
                </P>
                <p><br>
                    <label for="">Personnel Number: <br> $persNum </label>
                </p>
                <p><br>
                    <label for="">Date of Implementation: <br> $dateOfImple</label>
                    <br><br>
                </p>    
                <p>
                    <h3>APPOINTMENTS/AMENDMENTS:</h3> 
                    <br><label for=""> ADDENDUMS: </label>
                </p>
                <p><br>
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
                <label for="">Salary Notch Per Annum<br>$salaryNPA</label>
                </p>
                <p>
                <label for="">Salary TCOE</label>
                    $salaryTCOE
                </p>
                <p><br>
                    <label for="">Housing Allowance</label>
                    $housingAllow
                </p>
                <p><br>
                    <label for="">Rental Allowance</label>
                    $rentalAllow
                </p>
                <p></p>
                <p></p>
                <p><br>
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
                    $identification
                </p>
                <p>
                    <label for="">Amount</label>
                    $amount1
                </p>
                <p>
                    <label for="">Deductions</label>
                    $decuctions
                </p>
                <p>
                    <label for="">Amount</label>
                    $amount2
                </p>
                <p> </p>
                <p>
                    <h4>RESIGNATION</h4><br>
                    <label for=""> ADDENDUMS: </label>
                </p>
                <p><br>
                    <label>Payment for Benefits Form</label>
                    <center><input type="checkbox"></center>
                    
                    <label >Resignation Letter</label>
                    <center><input type="checkbox"></center>
                </p>
                <p> </p>
                <p>
                    <label for="">DOB: </label>
                    $DOB
                </p>
                <p> <br><br> </p>
                <p>
                    <label for="">Leave Credit: Day(s)</label>
                    $leaveCredit
                </p>
                <p>
                    <label for="">Pro-rata bonus: Day(s)</label>
                    $proData
                </p>
                <p> </p>
                <p> </p>
                <p><br>
                    <label for="">Deduction(s) regarding departmental debt: </label>
                    $deductDebt
                </p>
                <p> </p>
                <p> <br>
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
                    $otherSpecify
                </p>
                <p> </p>
                <p><br></p>
                <p>
                    <h3>HUMAN RESOURCES DEPARTMENT</h3> <br>
                </p>
                <p> </p>
                <p>
                    <label for="">Compiled By:</label>
                    $compiledBy
                    <br>
                    <label for="">Approved By:</label>
                    $approvedBy
                </p>
                <p>
                    <label for="">Date:</label>
                    $date1
                    <br>
                    <label for="">Date:</label>
                    $date2
                </p><br>
                <p>
                    <h3>FINANCE DEPARTMENT</h3> <br>
                </p>
                <p> </p>
                <p>
                    <label for="">Compiled By:</label>
                    $compiledBy2
                    <br>
                    <label for="">Approved By:</label>
                    $approvedBy2
                </p>
                <p>
                    <label for="">Date:</label>
                    $date3
                    <br>
                    <label for="">Date:</label>
                    $date4
                </p>
                <br>
                <p> </p>
            </form>
            </div>
            </div>
            \n
            END;
    ?>
    <div>
        <center>
            <input type="submit" name="submit" value="Go back" 
            onclick="history.back()">
        </center>
    </div>
</body>
</html>