<div style="text-align:center;margin-top:4%;">

<button class="button-add-new-student students">
Students
</button>

<button class="button-add-new-student profs">

Profs
</button>







<div style="
    position: relative;
    top: 72px;
    left: 42.3%;
">
<a href="http://test.vprep.in/educational/add_new_student_only">
    <img src="http://test.vprep.in/assets/frontend/images/plus-button.png" alt="bottle" class="thumbnails">
</a>
</div>
<table>
<th>
<tr>
<td>
Sr No.
</td>
<td>
Roll No.
</td>
<td>
Name
</td>
<td>
Username
</td>
<td>
Branch
</td>
<td>
Group/Batch
</td>
<td>
Sub Group(If any)
</td>
<td>
Email-id
</td>
<td>
Status
</td>
</tr>
<?php
														 
foreach($student as $key=>$val): ?>
<tr>
                                                            <td><?php echo $key+1; ?></td>
                                                            <td class="text-left"><?php  echo $val['roll_no'];?></td>
                                                            <td class="text-left"><?php  echo $val['name'];?></td>
                                                            <td class="text-left"><?php  echo $val['username'];?></td>
                                                            <td class="text-left"><?php  echo $val['branch'];?></td>
                                                            <td class="text-left"><?php  echo $val['group'];?></td>
                                                            <td class="text-left"><?php  echo $val['sub_group'];?></td>
                                                            <td class="text-left"><?php  echo $val['email'];?></td>
                                                            <td class="text-left"><?php  echo $val['is_active'];?></td>
                                                            <tr>
                                                            <?php endforeach; ?>




</th>


</table>







</div>

<style>
.button-add-new-student{
width:9%;
padding-top:11px;
padding-bottom:11px;
margin-right:1%
text-align:center;


}
.profs{
background:#3b5998;
color:white;

}

.students{
background:#8cc63f;
color:white;

}
table, th, td {
   border: 1px solid black;
}
td{
width:4%;
}
table{
text-align:center;
margin-top:5%;
margin-left: 5%;
margin-right: 5%;
background:white;
}
body{
background:#E8EEFC;

}
td {
    padding-top: 15px;
    padding-bottom: 15px;
    text-align:center !important;
}



</style>