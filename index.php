<?php
$GLOBALS['gender'] = "";
$GLOBALS['first_name'] = "";
$GLOBALS['last_name'] = "";
$GLOBALS['email'] = "";

//    first name validation
function first_name_validation() {
    if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        if ($first_name == "") {
            return 'can not be empty';
            echo '<br>';
        } else {




            if (strlen($first_name) < 2) {
                return 'is too short';
                echo '<br>';
            } else {
                if (is_numeric(substr($first_name, 0, 1)) || substr($first_name, 0, 1) == '.' || substr($first_name, 0, 1) == '-') {
                    return 'First character can not be numeric or character';
                    echo '<br>';
                } else {



                    $first_name_array = str_split($first_name, 1);

                    foreach ($first_name_array as $value) {

                        if ($value == 'a' || $value == 'b' || $value == 'c' || $value == 'd' || $value == 'e' || $value == 'f' || $value == 'g' || $value == 'h' || $value == 'i' || $value == 'j' || $value == 'k' || $value == 'l' || $value == 'm' || $value == 'n' || $value == 'o' || $value == 'p' || $value == 'q' || $value == 'r' || $value == 's' || $value == 't' || $value == 'u' || $value == 'v' || $value == 'w' || $value == 'x' || $value == 'y' || $value == 'z' || $value == 'A' || $value == 'B' || $value == 'C' || $value == 'D' || $value == 'E' || $value == 'F' || $value == 'G' || $value == 'H' || $value == 'I' || $value == 'J' || $value == 'K' || $value == 'L' || $value == 'M' || $value == 'N' || $value == 'O' || $value == 'P' || $value == 'Q' || $value == 'R' || $value == 'S' || $value == 'T' || $value == 'U' || $value == 'V' || $value == 'W' || $value == 'X' || $value == 'Y' || $value == 'Z' || $value == '.' || $value == '-') {
                            
                        } else {
                            return 'Invalid character';
                            echo '<br>';
                            break;
                        }
                    }
                }
            }
        }
    } else {
        return "";
    }
}

//    last name validation
function last_name_validation() {
    if (isset($_POST['submit'])) {
        $last_name = $_POST['last_name'];
        if ($last_name == "") {
            return 'can not be empty';
            echo '<br>';
        } else {

            if (strlen($last_name) < 2) {
                return 'is too short';
                echo '<br>';
            } else {
                if (is_numeric(substr($last_name, 0, 1)) || substr($last_name, 0, 1) == '.' || substr($last_name, 0, 1) == '-') {
                    return 'Last character can not be numeric or character';
                    echo '<br>';
                } else {

                    $last_name_array = str_split($last_name, 1);

                    foreach ($last_name_array as $value) {

                        if ($value == 'a' || $value == 'b' || $value == 'c' || $value == 'd' || $value == 'e' || $value == 'f' || $value == 'g' || $value == 'h' || $value == 'i' || $value == 'j' || $value == 'k' || $value == 'l' || $value == 'm' || $value == 'n' || $value == 'o' || $value == 'p' || $value == 'q' || $value == 'r' || $value == 's' || $value == 't' || $value == 'u' || $value == 'v' || $value == 'w' || $value == 'x' || $value == 'y' || $value == 'z' || $value == 'A' || $value == 'B' || $value == 'C' || $value == 'D' || $value == 'E' || $value == 'F' || $value == 'G' || $value == 'H' || $value == 'I' || $value == 'J' || $value == 'K' || $value == 'L' || $value == 'M' || $value == 'N' || $value == 'O' || $value == 'P' || $value == 'Q' || $value == 'R' || $value == 'S' || $value == 'T' || $value == 'U' || $value == 'V' || $value == 'W' || $value == 'X' || $value == 'Y' || $value == 'Z' || $value == '.' || $value == '-') {
                            
                        } else {
                            return 'Invalid character';
                            echo '<br>';
                            break;
                        }
                    }
                }
            }
        }
    } else {
        return "";
    }
}

//    email validation
function email_validation() {
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        if ($email == "") {
            return 'can not be empty';
            echo '<br>';
        } else {
            $email_array = str_split($email, 1);
            $email_explode = explode('@', $email);
            if (strlen($email) < 10) {
                return 'is too short';
                echo '<br>';
            } elseif (!in_array('@', $email_array)) {
                return '@ symbol missing';
            } elseif (strlen($email_explode[0]) < 5) {
                return 'you must write smth before @ symbol';
                echo '<br>';
            } elseif (substr($email, -3, 1) == '.' || substr($email, -4, 1) == '.') {


                if (is_numeric(substr($email, 0, 1)) || substr($email, 0, 1) == '.' || substr($email, 0, 1) == '-') {
                    return 'Last character can not be numeric or character';
                    echo '<br>';
                } else {
                    foreach ($email_array as $value) {

                        if ($value == 'a' || $value == 'b' || $value == 'c' || $value == 'd' || $value == 'e' || $value == 'f' || $value == 'g' || $value == 'h' || $value == 'i' || $value == 'j' || $value == 'k' || $value == 'l' || $value == 'm' || $value == 'n' || $value == 'o' || $value == 'p' || $value == 'q' || $value == 'r' || $value == 's' || $value == 't' || $value == 'u' || $value == 'v' || $value == 'w' || $value == 'x' || $value == 'y' || $value == 'z' || $value == 'A' || $value == 'B' || $value == 'C' || $value == 'D' || $value == 'E' || $value == 'F' || $value == 'G' || $value == 'H' || $value == 'I' || $value == 'J' || $value == 'K' || $value == 'L' || $value == 'M' || $value == 'N' || $value == 'O' || $value == 'P' || $value == 'Q' || $value == 'R' || $value == 'S' || $value == 'T' || $value == 'U' || $value == 'V' || $value == 'W' || $value == 'X' || $value == 'Y' || $value == 'Z' || $value == '.' || $value == '-' || $value == '0' || $value == '1' || $value == '2' || $value == '3' || $value == '4' || $value == '5' || $value == '6' || $value == '7' || $value == '8' || $value == '9' || $value == '@' || $value == '_') {
                            
                        } else {
                            return 'Invalid character';
                            echo '<br>';
                        }
                    }
                }
            } else {
                return 'must be under a domain, for example .com or .net etc ';
                echo '<br>';
            }
        }
    }
}

//gender validation
function gender_validation() {
    if (isset($_POST['submit'])) {

        if (!isset($_POST['gender'])) {
            return 'One option must be selected';
            echo '<br>';
        } else {
            $GLOBALS['gender'] = $_POST['gender'];
        }
    } else {

        return "";
    }
}

//password validation
function password_validation() {
    if (isset($_POST['submit'])) {
        if ($_POST['password'] == "" || $_POST['confirm_password'] == "") {
            return 'You must enter and confirm password';
            echo '<br>';
        } else {
            if ($_POST['password'] != $_POST['confirm_password']) {
                return 'password does not match';
                echo '<br>';
            }
        }
    } else {
        return "";
    }
}

//phone number validation
function phone_validation() {
    if (isset($_POST['submit'])) {
        if ($_POST['phone'] == "") {
            return 'can not be empty';
            echo '<br>';
        } else {
            $phone_array = str_split($_POST['phone'], 1);
            foreach ($phone_array as $value) {
                if ($value == '+' || $value == '0' || $value == '1' || $value == '2' || $value == '3' || $value == '4' || $value == '5' || $value == '6' || $value == '7' || $value == '8' || $value == '9') {
                    if (strlen($_POST['phone']) < 12) {
                        return 'too short';
                        echo '<br>';
                        break;
                    }
                } else {
                    return 'invalid character used';
                    echo '<br>';
                    break;
                }
            }
        }
    }
}

//date validation
function date_validation() {
    if (isset($_POST['submit'])) {
        if ($_POST['day'] == 'Day') {
            return 'you must select a day';
            echo '<br>';
        } elseif ($_POST['month'] == 'Month') {
            return 'you must select a month';
            echo '<br>';
        } elseif ($_POST['year'] == 'Year') {
            return 'you must select a year';
            echo '<br>';
        }
    } else {
        return "";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Reg_Form</title>
    </head>
    <body>
    <center>
        <form method="post" action="#">
            <fieldset>

                <table width="700px">
                    <tr>
                        <td colspan="3"><img src="logo.jpg"></td>

                    </tr>

                    <tr>
                        <td colspan="3"><h2 style="">Create your Google Account</h2></td>
                    </tr>

                    <tr>
                        <td width="300px">
                            <label>First Name:</label> <br> 
                            <?php
                            $st1 = first_name_validation();
                            if ($st1 != "") {
                                echo "<span style='color: red;'>" . $st1 . "</span>" . '<br>';
                            }
                            ?>
                            <input style="width: 250px; height: 25px;" type="text" name="first_name" placeholder="First Name" value="<?php
                            if (isset($_POST['first_name'])) {
                                echo $_POST['first_name'];
                            }
                            ?>"> 
                        </td>

                        <td width="300px">
                            <label>Last Name:</label> <br> 
                            <?php
                            $st1 = last_name_validation();
                            if ($st1 != "") {
                                echo "<span style='color: red;'>" . $st1 . "</span>" . '<br>';
                            }
                            ?>
                            <input style="width: 250px; height: 25px;" type="text" name="last_name" placeholder="Last Name" value="<?php
                            if (isset($_POST['last_name'])) {
                                echo $_POST['last_name'];
                            }
                            ?>"> 
                        </td>

                        <td></td>
                    </tr>

                    <tr>
                        <td>
                            <label>Email:</label> <br>  
                            <?php
                            $st2 = email_validation();
                            if ($st2 != "") {
                                echo "<span style='color: red'>" . $st2 . "</span>" . '<br>';
                            }
                            ?>
                            <input style="width: 250px; height: 25px;" type="text" name="email" placeholder="Email" value="<?php
                            if (isset($_POST['email'])) {
                                echo $_POST['email'];
                            }
                            ?>"> 
                        </td>
                        <td> <label>Phone:</label> <br> 
                            <?php
                            $st2 = phone_validation();
                            if ($st2 != "") {
                                echo "<span style='color: red'>" . $st2 . "</span>" . '<br>';
                            }
                            ?>
                            <input style="width: 250px; height: 25px;" type="text" name="phone" placeholder="Phone" value="<?php
                            if (isset($_POST['phone'])) {
                                echo $_POST['phone'];
                            }
                            ?>"> 
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label>Password:</label> <br>  
                            <?php
                            $st = password_validation();
                            if ($st != "") {
                                echo "<span style='color: red;'>" . $st . "</span>" . '<br>';
                            }
                            ?>
                            <input style="width: 250px; height: 25px;" type="password" name="password" placeholder="password" value="<?php
                            if (isset($_POST['password'])) {
                                echo $_POST['password'];
                            }
                            ?>"> 
                        </td>
                        <td>
                            <label>Confirm Password:</label> <br>  
                            <input style="width: 250px; height: 25px;" type="password" name="confirm_password" placeholder="confirm password" value="<?php
                            if (isset($_POST['confirm_password'])) {
                                echo $_POST['confirm_password'];
                            }
                            ?>"> 
                        </td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>
                            <?php echo $gender; ?>
                            <label>Gender:</label> <br>  
                            <?php
                            $st2 = gender_validation();
                            if ($st2 != "") {
                                echo "<span style='color: red'>" . $st2 . "</span>" . '<br>';
                            }
                            ?>
                            <input  type="radio" name="gender" value='Male' <?php
                            if ($gender == 'Male') {
                                echo 'checked';
                            }
                            ?> > Male
                            <input  type="radio" name="gender" value='Female' selected <?php
                            if ($gender == 'Female') {
                                echo 'checked';
                            }
                            ?>> Female

                        </td>
                        <td>
                            <label>Date Of Birth:</label> <br>
                            <?php
                            $st = date_validation();
                            if ($st != "") {
                                echo "<span style='color: red;'>" . $st . "</span>" . '<br>';
                            }
                            ?>
                            <select name="day">
                                <option>Day</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '1') {
                                        echo 'selected';
                                    }
                                }
                                ?>>1</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '2') {
                                        echo 'selected';
                                    }
                                }
                                ?> >2</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '3') {
                                        echo 'selected';
                                    }
                                }
                                ?> >3</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '4') {
                                        echo 'selected';
                                    }
                                }
                                ?> >4</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '5') {
                                        echo 'selected';
                                    }
                                }
                                ?> >5</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '6') {
                                        echo 'selected';
                                    }
                                }
                                ?> >6</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '7') {
                                        echo 'selected';
                                    }
                                }
                                ?> >7</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '8') {
                                        echo 'selected';
                                    }
                                }
                                ?> >8</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '9') {
                                        echo 'selected';
                                    }
                                }
                                ?>>9</option>
                                <option <?php
                                if (isset($_POST['day'])) {
                                    if ($_POST['day'] == '10') {
                                        echo 'selected';
                                    }
                                }
                                ?>>10</option>
                            </select>

                            <select name="month">
                                <option>Month</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Jan') {
                                        echo 'selected';
                                    }
                                }
                                ?>>Jan</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Feb') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Feb</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Mar') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Mar</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Apr') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Apr</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'May') {
                                        echo 'selected';
                                    }
                                }
                                ?> >May</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Jun') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Jun</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Jul') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Jul</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Aug') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Aug</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Sep') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Sep</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Oct') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Oct</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Nov') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Nov</option>
                                <option <?php
                                if (isset($_POST['month'])) {
                                    if ($_POST['month'] == 'Dec') {
                                        echo 'selected';
                                    }
                                }
                                ?> >Dec</option>
                            </select>

                            <select name="year">
                                <option>Year</option>
                                <option <?php
                                if (isset($_POST['year'])) {
                                    if ($_POST['year'] == '2008') {
                                        echo 'selected';
                                    }
                                }
                                ?> >2008</option>
                                <option <?php
                                if (isset($_POST['year'])) {
                                    if ($_POST['year'] == '2008') {
                                        echo 'selected';
                                    }
                                }
                                ?> >2007</option>
                                <option <?php
                                if (isset($_POST['year'])) {
                                    if ($_POST['year'] == '2007') {
                                        echo 'selected';
                                    }
                                }
                                ?> >2006</option>
                                <option <?php
                                if (isset($_POST['year'])) {
                                    if ($_POST['year'] == '2006') {
                                        echo 'selected';
                                    }
                                }
                                ?> >2005</option>
                                <option <?php
                                if (isset($_POST['year'])) {
                                    if ($_POST['year'] == '2005') {
                                        echo 'selected';
                                    }
                                }
                                ?> >2004</option>
                                <option <?php
                                if (isset($_POST['year'])) {
                                    if ($_POST['year'] == '2004') {
                                        echo 'selected';
                                    }
                                }
                                ?> >2003</option>
                                <option <?php
                                if (isset($_POST['year'])) {
                                    if ($_POST['year'] == '2003') {
                                        echo 'selected';
                                    }
                                }
                                ?> >2008</option>

                            </select>


                        </td>



                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <a href="">Click here to Sign In</a>
                        </td>
                        <td>
                            <input type="submit" name="submit" value="Confirm">
                        </td>
                        <td></td>
                    </tr>




                </table>
            </fieldset>
        </form>
    </center>




