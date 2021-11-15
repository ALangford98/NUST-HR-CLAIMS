<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"
     charset="UTF-8">
    <title>NUST PART-TIME CLAIM FOR ACADEMIC STAFF</title>
    <style>
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
        background: rgba(255,255,255,.1);
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
        color:#8a97a0;
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
        grid-column: 1 / span 2;;
    }

    form label {
        display: block;
        margin-bottom: 2.5px;
    }

    form p {
        margin-bottom: 1px;
    }

    output{
        border: 1px solid #000;
        padding: 0.09em;
    }

    .Submit {
        background: lightgrey;
        width: 200%;
        border: 0;
    }

    @media print {
    html, body {
        width: 210mm;
        height: 297mm;
        -webkit-print-color-adjust: exact; 
  }
}

    .contain2 {
        width: 210mm;
        height: 297mm;
        margin: 0 auto;
        background: white;
        padding: 0;
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

<body>
    <?php
     /**
      * Php version 8
      *
      * @category Description
      * @package  PHP
      * @author   Ross De Almeida <Ross@gmail.com>
      * @license  http://localhost:4000/php/adviceform.php Advice Form
      * @link     http://localhost:4000/php/adviceform.php
      * Define variables and set to empty values 
      */
    $nameANDsurname = $highestqualification = $budgetallocation = $personnelnumber 
        = $tarrifperhour  = $identitynumber = $payeno = $address = $telno 
            = $hoursclaimed = $course = $department = $claimantsignature = $date 
                = $signaturehod = $date1 = $signaturedean = $date2 = $processedpayrol
                    = $date3 = $faculty = $department1 = $coursename = $coursecode 
                        = $group = $nameoflecturer = $signature = $staffnr = $date4 
                            = "";

    
    $nameANDsurname = test_input($_POST["nameANDsurname"]);
    $highestqualification = test_input($_POST["highestqualification"]);
    $budgetallocation = test_input($_POST["budgetallocation"]);
    $personnelnumber = test_input($_POST["personnelnumber"]);
    $salaryNPA = test_input($_POST["salaryNPA"]);

    $tarrifperhour = test_input($_POST["tarrifperhour"]);
    $identitynumber = test_input($_POST["identitynumber"]);
    $payeno = test_input($_POST["payeno"]);
    $address = test_input($_POST["address"]);

    $telno = test_input($_POST["telno"]);
    $hoursclaimed = test_input($_POST["hoursclaimed"]);
    $course = test_input($_POST["course"]);
    $department = test_input($_POST["department"]);
    $claimantsignature = test_input($_POST["claimantsignature"]);

    $date = test_input($_POST["date"]);
    $signaturehod = test_input($_POST["signaturehod"]);
    $date1 = test_input($_POST["date1"]);
    $signaturedean = test_input($_POST["signaturedean"]);
    $date2 = test_input($_POST["date2"]);
    $processedpayrol = test_input($_POST["processedpayrol"]);

    $date3 = test_input($_POST["date3"]);
    $faculty = test_input($_POST["faculty"]);
    $department1 = test_input($_POST["department1"]);
    $coursename = test_input($_POST["coursename"]);
    $coursecode = test_input($_POST["coursecode"]);
    $group = test_input($_POST["group"]);
    $nameoflecturer = test_input($_POST["nameoflecturer"]);
    $signature = test_input($_POST["signature"]);
    $staffnr = test_input($_POST["staffnr"]);
    $date4 = test_input($_POST["date4"]);

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
        <img src="logo.jpg" alt="NUST HEADER" 
            style = "width:770px; 
                    height:100px";> 
            <h1>
                <center>
                CLAIM FOR REMUNERATION BY PART-TIME LECTURERS 
                / ACADEMIC STAFF MEMBERS
                </center>
            </h1>
            <form method="post" action="AcademicStaffC2.php">

                <P></P>
                <p>
                <h1>PARTICULAR'S OF CLAIMANT (select one):?</h1>
                <select name="formGender"><br>
                    <option value="">Select...</option>
                    <option value="M">Prof.</option>
                    <option value="F">Dr.</option>
                    <option value="F">Mr.</option>
                    <option value="F">Ms.</option>
                </select>

                </p>
                <P></P>
                <P>
                    <label for="">Name & Surname</label>
                    <input type="text" name="nameANDsurname">
                </P>
                <P></P>
                <p>
                    <label for="">Highest qualification:</label>
                    <input type="text" name="highestqualification">
                </p>
                <p>
                    <label for="">Budget allocation:</label>
                    <input type="text" name="budgetallocation">
                </p>
                <P></P>
                <P></P>
                <p>
                    <label for="">Personnel number:</label>
                    <input type="text" name="personnelnumber">
                </p>
                <p>
                    <label for="">Tarrif per hour:</label>
                    <input type="text" name="tarrifperhour">
                </p>
                <P></P>
                <P></P>
                <p>
                    <label for="">Identity / Passport number:</label>
                    <input type="text" name="identitynumber">
                </p>
                <p>
                    <label for="">Paye No.:</label>
                    <input type="text" name="payeno">
                </p>
                <P></P>
                <P></P>
                <p>
                    <label for="">Address:</label>
                    <input type="text" name="address">
                </p>
                <p>
                    <label for="">Tel No.:</label>
                    <input type="text" name="telno"><br><br>
                </p>
                <P></P>
                <p>
                <h1>Level of training offered(select one):?</h1>
                <select name="formGender"><br>
                    <option value="">Select...</option>
                    <option value="M">Part-time</option>
                    <option value="F">Full-time</option>
                    <option value="F">Extra-curricular</option>
                </select>

                </p>
                <P></P>
                <p>
                    <label for="" style="font-size: 13px; font-weight: bold;">
                    PARTICULARS OF CLAIM</label>

                </p>
                <P></P>
                <p>
                    <label for="" style="font-size: 10px; font-weight: bold;">
                    HR - TOTAL HOURS CLAIMED:<input
                            type="text" name="hoursclaimed">
                        <br><br>
                </p>
                <P></P>
                <p>
                    <label>Course/Post:</label>
                    <input type="text" name="course">

                </p>
                <p>
                    <label>Faculty/Department:
                    <input type="text" name="department">

                </p>
                <P><br><br><br></P>
            </form>
            <center>
            <table style="font-size: 10px; white-space:nowrap">
                <tr>
                    <th colspan="2">Date</th>
                    <th>Lecture/Tutorial/Admin</th>
                    <th>Consultation</th>
                    <th>Dep./Board Meeting</th>
                    <th>Time (From - To)</th>
                    <th>Hours</th>
                    <th>N$</th>
                    <th>C</th>
                    <th>FOR OFFICE USE</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><input type="text" name = "date01"></td>
                    <td><input type="text" name = "lecture01"></td>
                    <td><input type="text" name = "consultation01"></td>
                    <td><input type="text" name = "dep01"></td>
                    <td><input type="text" name = "time01"></td>
                    <td><input type="text" name = "hours01"></td>
                    <td><input type="text" name = "money01"></td>
                    <td><input type="text" name = "c01"></td>
                    <td><input type="text" name = "officeuse01"></td>

                </tr>
                <tr>
                    <td>2</td>
                    <td><input type="text" name = "date02"></td>
                    <td><input type="text" name = "lecture02"></td>
                    <td><input type="text" name = "consultation02"></td>
                    <td><input type="text" name = "dep02"></td>
                    <td><input type="text" name = "time02"></td>
                    <td><input type="text" name = "hours02"></td>
                    <td><input type="text" name = "money02"></td>
                    <td><input type="text" name = "c02"></td>
                    <td><input type="text" name = "officeuse02"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" name = "date03"></td>
                    <td><input type="text" name = "lecture03"></td>
                    <td><input type="text" name = "consultation03"></td>
                    <td><input type="text" name = "dep03"></td>
                    <td><input type="text" name = "time03"></td>
                    <td><input type="text" name = "hours03"></td>
                    <td><input type="text" name = "money03"></td>
                    <td><input type="text" name = "c03"></td>
                    <td><input type="text" name = "officeuse03"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><input type="text" name = "date04"></td>
                    <td><input type="text" name = "lecture04"></td>
                    <td><input type="text" name = "consultation04"></td>
                    <td><input type="text" name = "dep04"></td>
                    <td><input type="text" name = "time04"></td>
                    <td><input type="text" name = "hours04"></td>
                    <td><input type="text" name = "money04"></td>
                    <td><input type="text" name = "c04"></td>
                    <td><input type="text" name = "officeuse04"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><input type="text" name = "date05"></td>
                    <td><input type="text" name = "lecture05"></td>
                    <td><input type="text" name = "consultation05"></td>
                    <td><input type="text" name = "dep05"></td>
                    <td><input type="text" name = "time05"></td>
                    <td><input type="text" name = "hours05"></td>
                    <td><input type="text" name = "money05"></td>
                    <td><input type="text" name = "c05"></td>
                    <td><input type="text" name = "officeuse05"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><input type="text" name = "date06"></td>
                    <td><input type="text" name = "lecture06"></td>
                    <td><input type="text" name = "consultation06"></td>
                    <td><input type="text" name = "dep06"></td>
                    <td><input type="text" name = "time06"></td>
                    <td><input type="text" name = "hours06"></td>
                    <td><input type="text" name = "money06"></td>
                    <td><input type="text" name = "c06"></td>
                    <td><input type="text" name = "officeuse06"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><input type="text" name = "date07"></td>
                    <td><input type="text" name = "lecture07"></td>
                    <td><input type="text" name = "consultation07"></td>
                    <td><input type="text" name = "dep07"></td>
                    <td><input type="text" name = "time07"></td>
                    <td><input type="text" name = "hours07"></td>
                    <td><input type="text" name = "money07"></td>
                    <td><input type="text" name = "c07"></td>
                    <td><input type="text" name = "officeuse07"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><input type="text" name = "date08"></td>
                    <td><input type="text" name = "lecture08"></td>
                    <td><input type="text" name = "consultation08"></td>
                    <td><input type="text" name = "dep08"></td>
                    <td><input type="text" name = "time08"></td>
                    <td><input type="text" name = "hours08"></td>
                    <td><input type="text" name = "money08"></td>
                    <td><input type="text" name = "c08"></td>
                    <td><input type="text" name = "officeuse08"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><input type="text" name = "date09"></td>
                    <td><input type="text" name = "lecture09"></td>
                    <td><input type="text" name = "consultation09"></td>
                    <td><input type="text" name = "dep09"></td>
                    <td><input type="text" name = "time09"></td>
                    <td><input type="text" name = "hours09"></td>
                    <td><input type="text" name = "money09"></td>
                    <td><input type="text" name = "c09"></td>
                    <td><input type="text" name = "officeuse09"></td>
                </tr>
                
            </table>
            </center>

            <form method="post" action="AcademicStaffC2.php">
                <p>
                    <label for="">Claimant's signature</label>
                    <input type="text" name="claimantsignature">
                </p>
                <p>
                    <label for="">Date</label>
                    <input type="text" name="date">
                </p>


                <p>
                    <label for="">Signature of Head of Department</label>
                    <input type="text" name="signaturehod">
                </p>
                <p>
                    <label for="">Date</label>
                    <input type="text" name="date1">
                </p>

                <p>
                    <label for="">Signature of Dean/Registrar</label>
                    <input type="text" name="signaturedean">
                </p>
                <p>
                    <label for="">Date</label>
                    <input type="text" name="date2">
                </p>

                <p>
                    <label for="">Processed by Payroll Department</label>
                    <input type="text" name="processedpayrol">
                </p>
                <p>
                    <label for="">Date</label>
                    <input type="text" name="date3">
                </p>


                <p></p>
                <p> </p>
                <p>
                    <label style="font-size: 10px;">
                        <b>VERY IMPORTANT:</b> 
                        Claims older than 3 months will not be honoured.
                    </label><br>

                    <label style="font-size: 10px;">
                    *Kindly specify (mark with x) 
                    whether you lectured, tutored, had a meeting or did consulting
                    </label>
                </p>

            </form>
        </div>
</body>

<body>
    <div class="contain">
        <div class="form">
        <img src="logo.jpg" alt="NUST HEADER" 
            style = "width:770px; 
                    height:100px";> 
            <h1>
                <center>CLASS ATTENDANCE SHEET</center>
            </h1>
            <form method="post" action="AcademicStaffC2.php">
                <p>
                <label for="">Faculty</label>
                <input type="text" name="faculty">
                </p>
                <p>
                <label for="">Department</label>
                <input type="text" name="department">
                </p>
                <p>
                    <label for="">COURSE NAME</label>
                    <input type="text" name="coursename">
                </p>
                <p>
                    <label for="">COURSE CODE</label>
                    <input type="text" name="coursecode">
                </p>
                <p>
                    <label for="">GROUP</label>
                    <input type="text" name="group">
                </p>
                
            </form>
            <br><br><br>
            <center>
            <table style="font-size: 10px; white-space:nowrap">

                <tr>
                    <th rowspan="3">NR.</th>
                    <th rowspan="3">STUDENT SURNAME & INITIALS</th>
                    <th>STUDENT NR ↓

                </tr>
                <tr>
                    <td>DATE</td>
                    <td><input type="text" name = "date10"></td>
                    <td><input type="text" name = "date11"></td>
                    <td><input type="text" name = "date12"></td>
                    <td><input type="text" name = "date13"></td>
                    <td><input type="text" name = "date14"></td>
                    <td><input type="text" name = "date15"></td>
                    <td><input type="text" name = "date16"></td>
                    <td><input type="text" name = "date17"></td>
                    <td><input type="text" name = "date18"></td>

                </tr>
                <tr>
                    <td>TIME</td>
                    <td><input type="text" name = "$time01"></td>
                    <td><input type="text" name = "$time02"></td>
                    <td><input type="text" name = "$time03"></td>
                    <td><input type="text" name = "$time04"></td>
                    <td><input type="text" name = "$time05"></td>
                    <td><input type="text" name = "$time06"></td>
                    <td><input type="text" name = "$time07"></td>
                    <td><input type="text" name = "$time08"></td>
                    <td><input type="text" name = "$time09"></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><input type="text" name = "name01"></td>
                    <td><input type="text" name = "stnumber01"></td>
                    <td><input type="text" name = "signature01"></td>
                    <td><input type="text" name = "signature01"></td>
                    <td><input type="text" name = "signature01"></td>
                    <td><input type="text" name = "signature01"></td>
                    <td><input type="text" name = "signature01"></td>
                    <td><input type="text" name = "signature01"></td>
                    <td><input type="text" name = "signature01"></td>
                    <td><input type="text" name = "signature01"></td>
                    <td><input type="text" name = "signature01"></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><input type="text" name = "name02"></td>
                    <td><input type="text" name = "stnumber02"></td>
                    <td><input type="text" name = "signature02"></td>
                    <td><input type="text" name = "signature02"></td>
                    <td><input type="text" name = "signature02"></td>
                    <td><input type="text" name = "signature02"></td>
                    <td><input type="text" name = "signature02"></td>
                    <td><input type="text" name = "signature02"></td>
                    <td><input type="text" name = "signature02"></td>
                    <td><input type="text" name = "signature02"></td>
                    <td><input type="text" name = "signature02"></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><input type="text" name = "name03"></td>
                    <td><input type="text" name = "stnumber03"></td>
                    <td><input type="text" name = "signature03"></td>
                    <td><input type="text" name = "signature03"></td>
                    <td><input type="text" name = "signature03"></td>
                    <td><input type="text" name = "signature03"></td>
                    <td><input type="text" name = "signature03"></td>
                    <td><input type="text" name = "signature03"></td>
                    <td><input type="text" name = "signature03"></td>
                    <td><input type="text" name = "signature03"></td>
                    <td><input type="text" name = "signature03"></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><input type="text" name = "name04"></td>
                    <td><input type="text" name = "stnumber04"></td>
                    <td><input type="text" name = "signature04"></td>
                    <td><input type="text" name = "signature04"></td>
                    <td><input type="text" name = "signature04"></td>
                    <td><input type="text" name = "signature04"></td>
                    <td><input type="text" name = "signature04"></td>
                    <td><input type="text" name = "signature04"></td>
                    <td><input type="text" name = "signature04"></td>
                    <td><input type="text" name = "signature04"></td>
                    <td><input type="text" name = "signature04"></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><input type="text" name = "name05"></td>
                    <td><input type="text" name = "stnumber05"></td>
                    <td><input type="text" name = "signature05"></td>
                    <td><input type="text" name = "signature05"></td>
                    <td><input type="text" name = "signature05"></td>
                    <td><input type="text" name = "signature05"></td>
                    <td><input type="text" name = "signature05"></td>
                    <td><input type="text" name = "signature05"></td>
                    <td><input type="text" name = "signature05"></td>
                    <td><input type="text" name = "signature05"></td>
                    <td><input type="text" name = "signature05"></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><input type="text" name = "name06"></td>
                    <td><input type="text" name = "stnumber06"></td>
                    <td><input type="text" name = "signature06"></td>
                    <td><input type="text" name = "signature06"></td>
                    <td><input type="text" name = "signature06"></td>
                    <td><input type="text" name = "signature06"></td>
                    <td><input type="text" name = "signature06"></td>
                    <td><input type="text" name = "signature06"></td>
                    <td><input type="text" name = "signature06"></td>
                    <td><input type="text" name = "signature06"></td>
                    <td><input type="text" name = "signature06"></td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><input type="text" name = "name07"></td>
                    <td><input type="text" name = "stnumber07"></td>
                    <td><input type="text" name = "signature07"></td>
                    <td><input type="text" name = "signature07"></td>
                    <td><input type="text" name = "signature07"></td>
                    <td><input type="text" name = "signature07"></td>
                    <td><input type="text" name = "signature07"></td>
                    <td><input type="text" name = "signature07"></td>
                    <td><input type="text" name = "signature07"></td>
                    <td><input type="text" name = "signature07"></td>
                    <td><input type="text" name = "signature07"></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><input type="text" name = "name08"></td>
                    <td><input type="text" name = "stnumber08"></td>
                    <td><input type="text" name = "signature08"></td>
                    <td><input type="text" name = "signature08"></td>
                    <td><input type="text" name = "signature08"></td>
                    <td><input type="text" name = "signature08"></td>
                    <td><input type="text" name = "signature08"></td>
                    <td><input type="text" name = "signature08"></td>
                    <td><input type="text" name = "signature08"></td>
                    <td><input type="text" name = "signature08"></td>
                    <td><input type="text" name = "signature08"></td>
                </tr>
            </table>
            </center>
            <form method="post" action="AcademicStaffC2.php">

                <p>
                    <label for="">NAME OF LECTURER</label>
                    <input type="text" name="nameoflecturer">
                </p>
                <p>
                    <label for="">SIGNATURE</label>
                    <input type="text" name="Signature">
                </p>


                <p>
                    <label for="">STAFF NR</label>
                    <input type="text" name="staffnr">
                </p>
                <p>
                    <label for="">Date</label>
                    <input type="date" name="date4">
                </p><br>
                <p></p>
                <p>
                    <label style="font-size: 10px;">
                        <b>NOTE:</b> Claims will only be settled if the attendance 
                        sheet is complicated and attached to the claim
                        form.
                    </label>
                </p>
                <p> </p>
                    <input class= "submitbutton" type="submit" 
                    name="submit" value="Submit">
            </form>
        </div>
        
        </form>
    </div>
</body>