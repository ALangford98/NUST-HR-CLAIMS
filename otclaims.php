<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" 
    charset="UTF-8">
    <title>Claim For Overtime</title>
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
    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    </style>
    <script>
        submitForms = function() {
            document.forms["form1"].submit();
            document.forms["form2"].submit();
            document.forms["form3"].submit();
            document.forms["form4"].submit();
                    }
                    
    </script>
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
    $date = $date1 = $date2 = $date3 = $date4 = $NameOfC = "";

    
    $NameOfC = test_input($_POST["fname"]);
    $date1 = test_input($_POST["date"]);
    $date1 = test_input($_POST["date1"]);
    $date2 = test_input($_POST["date2"]);
    $date3 = test_input($_POST["date3"]);
    $date4 = test_input($_POST["date4"]);
    $nameofclaimant=test_input($_POST["nameofclaimant"]);
$personnelnumber=test_input($_POST["personnelnumber"]);
$department=test_input($_POST["department"]);
$reasonforovertime=test_input($_POST["reasonforovertime"]);
$claimantsignature=test_input($_POST["claimantsignature"]);
$supervisorsignature=test_input($_POST["supervisorsignature"]);
$hodsignature=test_input($_POST["hodsignature"]);
$payrollofficer=test_input($_POST["payrollofficer"]);
$A1=test_input($_POST["A1"]);
$B1=test_input($_POST["B1"]);
$C1=test_input($_POST["C1"]);
$D1=test_input($_POST["D1"]);
$officeuse=test_input($_POST["officeuse"]);
$B2=test_input($_POST["B2"]);
$C2=test_input($_POST["C2"]);
$D2=test_input($_POST["D2"]);
$officeuse2=test_input($_POST["officeuse2"]);
$money1=test_input($_POST["money1"]);
$money2=test_input($_POST["money2"]);
$A2=test_input($_POST["A2"]);
$C3=test_input($_POST["C3"]);
$D3=test_input($_POST["D3"]);
$officeuse3=test_input($_POST["officeuse3"]);
$money3=test_input($_POST["money3"]);
$money4=test_input($_POST["money4"]);
$A3=test_input($_POST["A3"]);
$B3=test_input($_POST["B3"]);
$D4=test_input($_POST["D4"]);

$money5=test_input($_POST["money5"]);
$money6=test_input($_POST["money6"]);
$B4=test_input($_POST["B4"]);
$C4=test_input($_POST["C4"]);
$money7=test_input($_POST["money7"]);
$money8=test_input($_POST["money8"]);
$date6 =test_input($_POST["date6"]);
$date7 = test_input($_POST["date7"]);
$date8 = test_input($_POST["date8"]);
$date9 =test_input($_POST["date9"]);
$date10=test_input($_POST["date10"]);
$date11 = test_input($_POST["date11"]);
$date12 = test_input($_POST["date12 "]);
$date13 = test_input($_POST["date13"]);
$date14 = test_input($_POST["date14"]);
$date15 =test_input($_POST["date15"]);
$A4=test_input($_POST["A4"]);
$A5=test_input($_POST["A5"]);
$A6=test_input($_POST["A6"]);
$A7=test_input($_POST["A7"]);
$A8=test_input($_POST["A8"]);
$A9=test_input($_POST["A9"]);
$A10=test_input($_POST["A10"]);
$A11=test_input($_POST["$A11"]);
$A12=test_input($_POST["A12"]);
$A13=test_input($_POST["A13"]);
$A14=test_input($_POST["A14"]);
$B5=test_input($_POST["B5"]);
$B4=test_input($_POST["B4"]);
$B6=test_input($_POST["B6"]);
$B7=test_input($_POST["B7"]);
$B8=test_input($_POST["B8"]);
$B9=test_input($_POST["B9"]);
$B10=test_input($_POST["B10"]);
$B11=test_input($_POST["B11"]);
$B12=test_input($_POST["B12"]);
$B13=test_input($_POST["B13"]);
$B14=test_input($_POST["B14"]);
$C5=test_input($_POST["C5"]);
$C6=test_input($_POST["C6"]);
$C7=test_input($_POST["C7"]);
$C8=test_input($_POST["C8"]);
$C9=test_input($_POST["C9"]);
$C10=test_input($_POST["C10"]);
$C11=test_input($_POST["C11"]);
$C12=test_input($_POST["C12"]);
$C13=test_input($_POST["C13"]);
$C14=test_input($_POST["C14"]);
$C15=test_input($_POST["C15"]);

$D5=test_input($_POST["D5"]);
$D6=test_input($_POST["D6"]);
$D7=test_input($_POST["D7"]);
$D8=test_input($_POST["D8"]);
$D9=test_input($_POST["D9"]);
$D10=test_input($_POST["D10"]);
$D11=test_input($_POST["D11"]);
$D12=test_input($_POST["D12"]);
$D13=test_input($_POST["D13"]);
$D14=test_input($_POST["D14"]);
$D15=test_input($_POST["D15"]);

$officeuse3=test_input($_POST["officeuse3"]);
$officeuse4=test_input($_POST["officeuse4"]);
$officeuse5=test_input($_POST["officeuse5"]);
$officeuse6=test_input($_POST["officeuse6"]);
$officeuse7=test_input($_POST["officeuse7"]);
$officeuse8=test_input($_POST["officeuse8"]);

$money9=test_input($_POST["money9"]);
$money10=test_input($_POST["money10"]);
$money11=test_input($_POST["money11"]);
$money12=test_input($_POST["money12"]);
$money13=test_input($_POST["money13"]);
$money14=test_input($_POST["money14"]);
$money15=test_input($_POST["money15"]);
$money16=test_input($_POST["money16"]);
$money17=test_input($_POST["money17"]);
$money18=test_input($_POST["money18"]);
$money19=test_input($_POST["money19"]);
$money20=test_input($_POST["money20"]);
$money21=test_input($_POST["money21"]);

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
                <center>CLAIM FOR OVERTIME WORK</center>
            </h1>
            <form name = "form1" method="post" action="otclaims2.php">
                <P>
                    <label for="name">Name of claimant: </label>
                    <input type="text" id="fname" name="fname">
                </P>

                <p>
                    <label for="number">Personnel Number:</label>
                    <input type="text" id="num" name="num">
                </p>

                <p>
                    <label for="dept">Department:</label>
                    <input type="text" id="deptmnt" name="deptmnt">
                </p>

                <P>
                <label for="dte">Date:</label>
                <input type="date" id="dte" name="dte">
                </P>

                <p>
                <label for="dtefrom">Claim from date:</label>
                <input type="date" id="dtefrom" name="dtefrom">
                </p>

                <P>
                <label for="dtefrom">Claim to date:</label>
                <input type="date" id="dteto" name="dteto">
                </P>

                </form>
            <center>
                <table style=""font-size: 10px; white-space:nowrap">
    <tbody>
        <tr>
            <td colspan="3" style="width: 133pt;border: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>PARTICULARS OF CLAIM</span></p>
            </td>
            <td style="width: 49.6pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>A</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>MON-SAT</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>DAY-EVEN</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>HOURS</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>07:00-20:00</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>(X1.5)</span></p>
            </td>
            <td style="width: 49.6pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>B</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>MON-SAT</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>EVEN-DAY</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>HOURS</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>20:00-07:00</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>(X1.56)</span></p>
            </td>
            <td style="width: 56.7pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>C</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>SUN&amp;PUB</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>HOLIDAYS</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>HOURS</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>07:00-20:00</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>(X2.00)</span></p>
            </td>
            <td style="width: 63.8pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>D</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>SUN&amp;PUB</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>HOLIDAYS</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>EVEN-DAY</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>20:00-07:00</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;text-align:center;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>(X2.12)</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>FOR OFFICE USE</span></p>
            </td>
            <td style="width: 26.95pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: 1pt solid windowtext;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-image: initial;border-left: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp; &nbsp;</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>DATE</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>TIME</span></p>
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>FROM-TO</span></p>
            </td>
            <td><input type="text" value = "" style = "background-color: white"></td> 
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>N$</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>N$</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>1</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>14/09/2021</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>18h00 &ndash; 20h00</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>2</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>HOURLY RATE</span></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>2</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>15/09/2021</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>20h00 &ndash; 22h00</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>2</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>3</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>19/09/2021</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>14h00 &ndash; 16h00</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>2</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>No. of hours in Ax1.5x rate</span></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>4</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>19/09/2021</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>18h00 &ndash; 20h00</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>2</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>-</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>2</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>No. of hours in Bx1.56x rate</span></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>5</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>No. of hours in Cx2.00x rate</span></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>6</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>No. of hours in Dx2.12x rate</span></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>7</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><strong><em><span style='font-size:12px;font-family:"Calibri","sans-serif";'>Total amount owed</span></em></strong></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>8</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><strong><em><span style='font-size:12px;font-family:"Calibri","sans-serif";'>LESS PAYE</span></em></strong></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>9</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border-top: none;border-bottom: none;border-left: none;border-image: initial;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><strong><em><span style='font-size:12px;font-family:"Calibri","sans-serif";'>NETT</span></em></strong></p>
            </td>
            <td style="width: 26.95pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>10</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 26.95pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>11</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 26.95pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>12</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 26.95pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>13</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 26.95pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td style="width: 33.75pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>14</span></p>
            </td>
            <td style="width: 42.55pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 26.95pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="width: 133pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><strong><span style='font-size:12px;font-family:"Calibri","sans-serif";'>TOTAL HOURS WORKED</span></strong></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 49.6pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 56.7pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 63.8pt;border-top: none;border-left: none;border-bottom: 1pt solid windowtext;border-right: 1pt solid windowtext;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:12px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 14.2pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 127.55pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 26.95pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
            <td style="width: 24pt;border: none;padding: 0in 5.4pt;vertical-align: top;">
                <p style='margin:0in;margin-bottom:.0001pt;font-size:16px;font-family:"Cambria","serif";margin-left:7.1pt;'><span style='font-size:15px;font-family:"Calibri","sans-serif";'>&nbsp;</span></p>
            </td>
        </tr>
    </tbody>
</table>
</center>

            <form name = "form2" method="post" action="otclaims2.php">

                <p>
                <label for="ot">REASON FOR OVERTIME:</label>
                <textarea name="comment" rows="5" cols="40"></textarea>
                </p>

                <P>

                </P>

                <p>
                <label for="sign">Claimant's Signature:</label>
                <input type="text" id="sign" name="sign">
                </p>
                
                <p>
                <label for="dateee">Date:</label>
                <input type="date" id="dateee" name="dateee">
                </p>
                
                <p>
                <label for="sign">Signature of Supervisor:</label>
                <input type="text" id="sign" name="sign">
                </p>

                <p>
                <label for="dateee">Date:</label>
                <input type="date" id="dateee" name="dateee">
                </p>

                <p>
                <label for="sign">Signature - HOD/Line Manager:</label>
                <input type="text" id="sign" name="sign">
                </p>

                <p>
                <label for="dateee">Date:</label>
                <input type="date"  name="date">
                </p>

                <p>
                <label for="sign">Approved -Payroll Officer:</label>
                <input type="text" id="sign" name="sign">
                </p>

                <p>
                <label for="dateee">Date:</label>
                <input type="date" id="dateee" name="dateee">
                </p>
                <p> </p>
                
            </form>  
    
        </div>
    </div>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<input class= "submitbutton" type="submit" 
name="submit" value="Submit" onclick="submitForms()">
</html>