<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CLAIM FOR REMUNERATION BY PART-TIME ADMINISTRATIVE STAFF</title>
    <style type="text/css">
    * {
        box-sizing: border-box;
    }

    body {
        background: grey;
        height: 100%;
        width: 230mm;
        margin: 0 auto;
        padding: 0;
    }

    .contain {
        width: 210mm;
        height: 297mm;
        margin: 0 auto;
        background: white;
        padding: 0;
    }

    div {
        font-family: Roboto, 'Segoe UI', Tahoma, sans-serif;
        background: white;
    }

    h1 {
        font-size: 100.25%;
    }

    h3 {
        margin: 0;
        margin-bottom: 1rem;
        font-size: 90.25%;
    }

    /** text area space */
    input,
    textarea {
        width: 90%;
        margin-bottom: 1px;
        font-family: 'Gill Sans', 'Gill Sans MT',
            Calibri, 'Trebuchet MS', sans-serif;
        background: rgba(255, 255, 255, .1);
        border: none;
        border-radius: 4px;
        font-size: 15px;
        margin: 0;
        outline: 0;
        padding: 7.5px;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        background-color: #e8eeef;
        color: #8a97a0;
    }

    form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 1px;
        margin-top: 0.5cm;
        margin-bottom: 2.54cm;
        margin-right: 0.1cm;
        margin-left: 0.1cm;

        padding: 10px 20px;

        margin: 10px auto;
        padding: 20px;
        border-radius: 8px;
        font-family: 'Gill Sans', 'Gill Sans MT',
            Calibri, 'Trebuchet MS', sans-serif;
        font-size: 80%;
    }

    .submitbutton {
        grid-column: 1 / span 2;
    }

    .address {
        grid-column: 1 / span 2;
    }

    form label {
        display: block;
        margin-bottom: 2.5px;
    }

    form p {
        margin-bottom: 1px;
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

    @media print {

        html,
        body {
            width: 210mm;
            height: 297mm;
            -webkit-print-color-adjust: exact;
        }
    }

    table {
        margin-top: -80px;
        width: 750px;
        border-collapse: collapse;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }

    th,
    td {
        padding: 5px;
    }
    </style>
</head>
<?php
    /**
     * Php version 8
     *
     * @category Description
     * @package  PHP
     * @author   Alfred K Immanuel <alfredimmanuel0@gmail.com>
     * @license  http://localhost:4000/php/adviceform.php Advice Form
     * @link     http://localhost:4000/php/adviceform.php
     * Define variables and set to empty values 
     */
     $title= $firstname= $lastname= $personnelnumber= $highestqualification= $budgetallocation $IdentityPassportNumber= $Tariffperhourday= $Address= $PAYENumber $TelNumber $HRTOTALHOURSCLAIMED= $FacultyDepartment= $Position= $ClaimantSignature= $Date= $SignatureofSupervisor= $Date1= $SignatureofDirectorHead= $Date2= $ProcessedbyPayroll= $Date3  ="";

     $title = test_input ($_POST["title"]);
    $firstname =test_input ($_POST["firstname"]);
    $lastname = test_input($_POST["lastname"]);
    $personnelnumber = test_input($_POST["personnelnumber"]);
    $highestqualification = test_input ($_POST["highestqualification"]);
    $budgetallocation = test_input ($_POST["budgetallocation"]);
    $IdentityPassportNumber = test_input ($_POST["IdentityPassportNumber"]);
    $Tariffperhourday = test_input($_POST["Tariffperhourday"]);
    $Address = test_input ($_POST["Address"]);
    $PAYENumber = test_input ($_POST["PAYENumber"]);
    $TelNumber = test_input ($_POST["TelNumber"]);
    $HRTOTALHOURSCLAIMED = test_input ($_POST["HRTOTALHOURSCLAIMED"]);
    $FacultyDepartment = test_input ($_POST["FacultyDepartment"]);
    $Position = test_input ($_POST["Position"]);
    $ClaimantSignature = test_input ($_POST["ClaimantSignature"]);
    $Date = test_input ($_POST["Date"]);
    $SignatureofSupervisor = test_input ($_POST["SignatureofSupervisor"]);
    $Date1 = test_input ($_POST["Date1"]);
    $SignatureofDirectorHead = test_input ($_POST["SignatureofDirectorHead"]);
    $Date2 = test_input ($_POST["Date2"]);
    $ProcessedbyPayroll = test_input ($_POST["ProcessedbyPayroll"]);
    $Date3 = test_input ($_POST["Date3"]);

    

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
<div class="contain">
<div class="form">
    <img src="logo.jpg" alt="NUST HEADER" style="width:770px; 
            height:100px" ;>
    <h1>
        <center>CLAIM FOR REMUNERATION BY PART-TIME ADMINISTRATIVE STAFF</center>
    </h1>
    <form method="post" action="AdminSF2.php">
        <P>
            <label for="">Particular's of Claimant (select one):?</label>
            <select id="tite" value="$title" disabled>
                <option value="Choose">Choose</option>
                <option value="Dr">Dr</option>
                <option value="Mr">Mr</option>
                <option value="Ms">Ms</option>
            </select>
        </P>
        <P></P>
        <p>
            <label for="firstname">Name & Surname</label>
            <input type="text" value="$firstname" required disabled>
        </p>
        <p>
            <label for="personnelnumber">Personnel Number</label>
            <input type="text" value="$personnelnumber" required disabled>
        </p>
        <p>
            <label for="highestqualification:">Highest qualification: </label>
            <input type="text" value="$highestqualification:" required disabled>
        </p>
        <P>
            <label for="budgetallocation">Budget Allocation.: </label>
            <input type="text" value="$budgetallocation" required disabled>
        </P>
        <P>
            <label for="IdentityPassportNumber">Identity / Passport Number: </label>
            <input type="text" value="$IdentityPassportNumber" required disabled>
        </P>
        <P>
            <label for="Tariffperhourday">Tariff per hour/day: </label>
            <input type="text" value="$Tariffperhourday " required diabled>
        </P>
        <P>
            <label for="Address">Address: </label>
            <textarea value="$Address" rows="5" cols="40"></textarea disabled>
        </P>
        <P>
            <label for="PAYENumber">PAYE Number: </label>
            <input type="text" value="$PAYENumber" required diabled>
        </P>
        <P>
            <label for="TelNumber">Tel. Number(s): </label>
            <input type="number" value="$TelNumber" required disabled>
        </P><br>
        <p></p>
        <P>
        <h3>PARTICULARS OF CLAIM </h3>
        </P>
        <P>
            <label for="HRTOTALHOURSCLAIMED">HR - TOTAL HOURS CLAIMED:</label>
            <input type="number" value="$HRTOTALHOURSCLAIMED " required disabled>
        </P><br>
        <P>
            <label for="FacultyDepartment">Faculty /Department:</label>
            <input type="text" value="$FacultyDepartment" required disabled>
        </P>
        <P>
            <label for="Position">Position: </label>
            <input type="text" value="$Position: " required disabled>
        </p>
    </form>
    <br><br><br>
    <center>
        <table style="font-size: 10px; white-space:nowrap">
            <tr>
                <th colspan="2">Date</th>
                <th>Time From - To</th>
                <th>Hours</th>
                <th>N$</th>
                <th>FOR OFFICE USE</th>
            </tr>
            <tr>
                <td>1</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>

            </tr>
            <tr>
                <td>2</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
            <tr>
                <td>3</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
            <tr>
                <td>4</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
            <tr>
                <td>5</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
            <tr>
                <td>6</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
            <tr>
                <td>7</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
            <tr>
                <td>8</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
            <tr>
                <td>9</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
            <tr>
                <td>10</td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
                <td><input type="text" style = "background-color: white"></td>
            </tr>
        </table>
    </center>

    <form method="post" action="AdminSF2.php">
        <P>
            <label for="ClaimantSignature">Claimant’s Signature:
            </label>
            <input type="text" value="$ClaimantSignature" required diabled>
        </P>
        <P>
            <label for="Date">Date: </label>
            <input type="date" value="$Date" required disabled>
        </P>
        <P>
            <label for="SignatureofSupervisor">Signature of
                Supervisor: </label>
            <input type="text" value="$SignatureofSupervisor" required disabled>
        </P>
        <P>
            <label for="Date">Date: </label>
            <input type="date" value="$Date1" required disabled>
        </P>
        <P>
            <label for="SignatureofDirectorHead">Signature
                of Director/Head: </label>
            <input type="text" value="$SignatureofDirectorHead" required disabled>
        </P>
        <P>
            <label for="Date">Date: </label>
            <input type="date" value="$Date2" required disabled>
        </P>
        <P>
            <label for="ProcessedbyPayroll">Processed
                by Payroll: </label>
            <input type="text" value="$ProcessedbyPayroll" required disabled>
        </P>
        <P>
            <label for="Date">Date: </label>
            <input type="date" value="$Date3" required disabled>
        </P>
        <p>
            <label style="font-size: 10px;">
                <b>VERY IMPORTANT:</b>
                Claims older than 3
                months will not be
                honoured.
            </label><br>

            <label style="font-size: 10px;">
                *Kindly specify (mark
                with x)
                whether you lectured,
                tutored, had a meeting
                or did consulting
            </label>
        </p>
        <input class="submitbutton" type="submit" name="submit" value="Submit">

    </form>

</div>
</div>
    \n
END;
?>
<input type="submit" name="submit" value="Go back" onclick="history.back()">
</body>

</html>