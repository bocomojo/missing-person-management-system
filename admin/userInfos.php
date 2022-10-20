<div class="modal fade" id="samstrover<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Employee Information</h4></center>
                </div>
             <?php
                    $pro=mysqli_query($mysqli,"select * from requests where id='".$row['id']."'");
                    $prow=mysqli_fetch_array($pro);
                ?>
                <div class="row">
                     <p class="text-center">Employee Id: <?php echo $prow['id'];?></p>
                    <div class="col-md-4">
                    </div>
                     <div class="col-md-4"></div>
                </div>
                <form >
                <div class="modal-body">
     
                    
                    <center>                       
<p>
    <div class="fhead"><strong>MISSING PERSON ALARM SHEET</strong></div>
</p>
<p>
    <strong></strong>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="783">
    <tbody>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;1. ALARM NO.&nbsp;&nbsp;&nbsp;<?php echo $a;?></div>
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
                    <div class="fhead">&nbsp;[ ] MISSING</div>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;3. PLACE WHERE LAST SEEN</div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;4. DATE/TIME</div>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;5. NAME OF SUBJECT</div>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;6. ALIAS (ES)</div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;7. ADDRESS</div>
                </p>
            </td>
        </tr>
        <tr>
            <td width="537" colspan="4" valign="top">
                <p>
                    <div class="fhead">&nbsp;8. DESCRIPTION:</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;SEX</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;NATIONALITY</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;AGE</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;COMPLEXION</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;HEIGHT</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;WEIGHT</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;BUILD</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;HAIR</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;PECULIARITIES</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;OTHER IDENTIFICATION DATA</div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;9. PHOTO</div>
                </p>
            </td>
        </tr>
        <tr>
            <td width="783" colspan="5" valign="top">
                <p>
                    <div class="fhead">&nbsp;10 ADDITIONAL INFO ON SUBJECT</div>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;11.COMPLAINANT/INFORMANT</div>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;12. ADDRESS</div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;13. TEL NO.</div>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p align="left">
                    <div class="fhead">&nbsp;14. RELATIONSHIP OF &nbsp;COMPLAINANT/INFORMANT TO &nbsp;SUBJECT</div>
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
                    <div class="fhead">&nbsp;If yes, what &nbsp;agency________________</div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;16. DATE/TIME REPORTED</div>
                </p>
            </td>
        </tr>
    </tbody>

</table>
</center>
                    </div> 
                 <div class="line"></div>
                </div>
               
                 </form>
            </div>
        </div>
    </div>
