<?php require_once('includes/session.php');
      require_once('includes/conn.php');
       require_once('check.php');
    //   header('Content-disposition: attachment; filename=registerationform.pdf');
    //   header('Content-type: application/pdf');
    //   readfile('registerationform.pdf');
      
?>
<!DOCTYPE html>
<html>
<body>
<?php
                    $id = $_GET['id'];
                    $query=mysqli_query($mysqli,"select * from `reports` where id = $id");
                     while($row=mysqli_fetch_array($query))
                      
                        {
                          
                          ?>
<p>
    <strong>Sample Format of Alarm Sheet (Missing Person)</strong>
</p>
<p>
    Republic of the Philippines
</p>
<p>
    Department of the Interior and Local Government
</p>
<p>
    PHILIPPINE NATIONAL POLICE
</p>
<p>
    ______________________________________
</p>
<p>
    _______________________
</p>
<p>
    <strong>MISSING/WANTED PERSON ALARM SHEET</strong>
</p>
<p>
    <strong></strong>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="783">
    <tbody>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;1. ALARM ID.&nbsp;&nbsp;&nbsp;<?php echo $row['id'];?></div>
                </p>
            </td>
            <td width="519" colspan="4" valign="top">
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;2.NATURE OF ALARM</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;[/] MISSING</div>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;3. PLACE WHERE LAST SEEN</div><br>
                    &nbsp;&nbsp;<?php echo $row['lastloc'];?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;4. DATE/TIME</div><br>
                    &nbsp;&nbsp;<?php echo $row['filed_date'];?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;5. NAME OF SUBJECT</div><br>
                    &nbsp;&nbsp;<?php echo $row['fullname'];?>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;6. ALIAS (ES)</div><br>
                    &nbsp;&nbsp;<?php echo $row['alias'];?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;7. ADDRESS</div><br>
                    &nbsp;&nbsp;<?php echo $row['address'];?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="537" colspan="4" valign="top">
                <p>
                    <div class="fhead">&nbsp;8. DESCRIPTION:</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;SEX:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['gender'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;NATIONALITY:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['race'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;AGE:&nbsp;&nbsp;&nbsp;&nbsp;</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;COMPLEXION:&nbsp;&nbsp;&nbsp;&nbsp;</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;HEIGHT:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['height'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;WEIGHT:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['weight'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;BUILD:&nbsp;&nbsp;&nbsp;&nbsp;
                </p></div>
                <p>
                    <div class="fhead">&nbsp;HAIR:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['hairstate'];?>&nbsp;<?php echo $row['haircolor'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;PECULIARITIES:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['defect'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;OTHER IDENTIFICATION DATA:&nbsp;&nbsp;&nbsp;&nbsp;</div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;9. PHOTO</div><img src="assets/image/missing_person/<?php echo $row["recentphoto"]; ?>" alt="Avatar" style="width:100%" class="photo">
                </p>
            </td>
        </tr>
        <tr>
            <td width="783" colspan="5" valign="top">
                <p>
                    <div class="fhead">&nbsp;10 ADDITIONAL INFO ON SUBJECT<br>
                    &nbsp;&nbsp;<?php echo $row['others'];?></div>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;11.COMPLAINANT/INFORMANT</div><br>
                    &nbsp;&nbsp;<?php echo $row['comp_name'];?>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;12. ADDRESS</div><br>
                    &nbsp;&nbsp;<?php echo $row['comp_address'];?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;13. TEL NO.</div><br>
                    &nbsp;&nbsp;<?php echo $row['phone'];?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p align="left">
                    <div class="fhead">&nbsp;14. RELATIONSHIP OF &nbsp;COMPLAINANT/INFORMANT TO &nbsp;SUBJECT</div><br>
                    &nbsp;&nbsp;<?php echo $row['relation'];?>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p align="left">
                    <div class="fhead">&nbsp;15. REPORTED TO OTHER AGENCY</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;[ ] YES [ ] NO</div>
                </p>
                <p align="left">
                    <div class="fhead">&nbsp;If yes, what &nbsp;agency&nbsp;<?php echo $row['agency'];?></div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;16. DATE/TIME REPORTED</div><br>
                    &nbsp;&nbsp;<?php echo $row['filed_date'];?>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p>
    <strong></strong>
</p>
<?php
                          }
                          
                          $mysqli->close();
                         ?>

<button onclick="window.print()">Print this page</button>

</body>


</html>