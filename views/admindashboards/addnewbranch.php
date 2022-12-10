<?php
    session_start();
    if(!isset($_COOKIE['logstatus'])){
        header('location:../login.php');
    }
    if(isset($_SESSION['insertbrancherr'])){
        echo $_SESSION['insertbrancherr'];
        unset($_SESSION['insertbrancherr']);
    }
    if(isset($_SESSION['insertbranch'])){
        echo $_SESSION['insertbranch'];
        unset($_SESSION['insertbranch']);
    }
    if(isset($_SESSION['addValid'])){
        echo $_SESSION['addValid'];
        unset($_SESSION['addValid']);
    }
?>
<?php?>
<html>
    <head>
        <title>Admin Dashboard</title>
        <script src="../dashboard.js"></script>
    </head>
    <body>
        <table border="4" width="100%" height="100%">
            <tr>
                <td>
                    <table height="100%" width="100%">
                        <tr height="70px">
                            <td>
                                <a href="admindashboard.php"><h2><i>Smart Hostel</i></h2></a>
                            </td>
                            <td align="right"> <h4>Welcome, <?php echo $_SESSION['user']['username']?></h4></td>
                            <td align="right">
                                <a href="../../controllers/logout.php"><img src="../../assets/image/logout-icon.jpg" width="35" height="35" align="center"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="100%">
                        <tr>
                            <td width="30%">
                                <form method="post" action="../../controllers/adminsection/adminselection.php">
                                    <fieldset>
                                        <table>
                                            <tr align="left">
                                                <td>
                                                    <select name="employeemanagement" onchange="change1()" id='emp1'>
                                                        <option value="addemployee">Employee Management</option>
                                                        <option value="addemployee">Add Employee</option>
                                                        <option value="employeedetails">Employee Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="usermanagement" onchange="change2()" id='emp2'>
                                                        <option value="">User Management</option>
                                                        <option value="adduser">Add User</option>
                                                        <option value="userdetails">User Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="facilityAndServices" onchange="change3()" id='emp3'>
                                                        <option value="">Facility & Services</option>
                                                        <option value="addnewfacility">Add new Facility</option>
                                                        <option value="facilitydetails">Show All Facilities</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="branch" onchange="change4()" id='emp4'>
                                                        <option value="">Branch</option>
                                                        <option value="addnewbranch">Add new branch</option>
                                                        <option value="branchdetails">Branch Details</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="room" onchange="change5()" id='emp5'>
                                                        <option value="">Room</option>
                                                        <option value="addnewroom">Add new room</option>
                                                        <option value="roomdetails">Update Facility</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr align="left">
                                                <td>
                                                    <select name="accounts" onchange="change6()" id='emp6'>
                                                        <option value="">Accounts</option>
                                                        <option value="totalrevenue">Total Revenue</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                            <td align="center">
                                <form method="post" action="../../controllers/adminsection/addbranchval.php">
                                    <fieldset>
                                        <legend>Add New Branch</legend>
                                        <table>
                                            <tr>
                                                <td><input type="text" name="branchname" placeholder="Branch Name"/></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <fieldset>
                                                        <legend>Address</legend>
                                                        <input type="text" name="houseno" placeholder="House No."/>
                                                        <input type="text" name="roadno" placeholder="Road No."/>
                                                        <input type="text" name="area" placeholder="Area"/>
                                                        <input type="text" name="city" placeholder="City"/>
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <fieldset>
                                                        <legend>Available Packages</legend>
                                                        <input type="checkbox" name="economy" value="Yes">Economy
                                                        <input type="checkbox" name="businessclass" value="Yes">Business Class
                                                        <input type="checkbox" name="firstclass" value="Yes">First Class
                                                    </fieldset>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <select name="branchtype">
                                                        <option value="">Select Type</option>
                                                        <option value="Male">Male</option>
                                                        <option value="roomdetails">Female</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center">
                                                    <input type="submit" name="insert" value="ADD" >
                                                    <input type="reset" name="insert" value="Reset" >
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>