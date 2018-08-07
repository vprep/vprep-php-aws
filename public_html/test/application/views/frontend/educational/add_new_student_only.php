<div style="text-align: center;
    padding-top: 5%;
    text-decoration: underline;
    font-weight: bold;
    padding-bottom: 1%;
    font-size: 15px;color:black;">Add Bulk Student</div>

<a href='http://test.vprep.in/assets/frontend/images/sample-student-upload.xlsx' target="_blank"><button style="float: right;
    float: right;
    margin-left: 1%;
    margin-right: 1%;
    background: #FDDC8E;
    margin-top: 1%;
    padding-top: .75%;
    position: relative;
    top: -50px;
    padding-left: 1%;
    padding-right: 1%;
    padding-bottom: .75%;
    font-size: 15px;
    font-weight: bold;">Download Sample Excel</button></a>


<form action="http://test.vprep.in/educational/save_student_new" id="save_student_new1" name="save_student_new1" method="post" accept-charset="utf-8">
                            
<input type="hidden" name="id" value="">
							<input id="regname" type="hidden" name="current_institute" value="admin 01" class="form-control form-input">
							<input type="hidden" name="password" value="united">
							<input type="hidden" name="prepairing_for" value="">
							<input type="hidden" name="roll_no" value="kjdfhjdkjdk">
							<input type="hidden" name="year_of_adm" value="2016">
							<input type="hidden" name="branch" value="cs">
							<input type="hidden" name="group" value="a1">
							<input type="hidden" name="sub_group" value="a2">
							<input type="hidden" name="name" value="a2">
							<input type="hidden" name="email" value="nirajrtort114@gmail.com">
							<input type="hidden" name="course_name" value="b.tech">	
											   
                          
                           
                            </form>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/xlsx/0.7.7/xlsx.core.min.js"></script>
<script>
   function handleFile(e) {
     //Get the files from Upload control
        var files = e.target.files;
        var i, f;
     //Loop through files
        for (i = 0, f = files[i]; i != files.length; ++i) {
            var reader = new FileReader();
            var name = f.name;
            reader.onload = function (e) {
                var data = e.target.result;

                var result;
                var workbook = XLSX.read(data, { type: 'binary' });

                var sheet_name_list = workbook.SheetNames;
                sheet_name_list.forEach(function (y) { /* iterate through sheets */
                    //Convert the cell value to Json
  var roa = XLSX.utils.sheet_to_json(workbook.Sheets[y]);
                    if (roa.length > 0) {
                       
                        result = roa;
                    }
                });
               //Get the first column first cell value
                for(var ii=0; ii<result.length;ii++){
                console.log("here");
                document.save_student_new1.roll_no.value=result[ii].Roll_no;
                document.save_student_new1.name.value=result[ii].Name;
                document.save_student_new1.year_of_adm.value=result[ii].Year_of_admission;
                document.save_student_new1.branch.value=result[ii].branch;
                document.save_student_new1.group.value=result[ii].group;
                document.save_student_new1.sub_group.value=result[ii].sub_group;
                document.save_student_new1.email.value=result[ii].email_id;
                $("#save_student_new1").submit();
                
                
                
                
                }
            };
            reader.readAsArrayBuffer(f);
        }
    }

  //Change event to dropdownlist
  $(document).ready(function(){
    $('#files').change(handleFile);
  });
</script>

<div style="text-align:center;">
<label id="#bb"> Enter Your File
    <input type="file" id="files" name="files"/>
    </label>
    </div>
    
    <style>
    label{
    padding: 10px;
    background: #86bc42; 
    display: table;
    color: #fff;
    position: relative;
    left: 46.5%;
    cursor:pointer;
     }



input[type="file"] {
    display: none;
}
    </style>
    
    
    <div style="text-align: center;
    padding-top: 10%;
    text-decoration: underline;
    font-weight: bold;
    padding-bottom: 1%;
    font-size: 15px;
    color:black;">Add Single Student</div>
    
    <div style="text-align: center;margin-top:.5%;">
    
    
    
    <form action="http://test.vprep.in/educational/save_student_new" id="save_student_new2" name="save_student_new2" method="post" accept-charset="utf-8">
                            
<input type="hidden" name="id" value="">
							<input id="regname" type="hidden" name="current_institute" value="admin 01" class="form-control form-input">
							<input type="hidden" name="password" value="united">
							<input  type="hidden"name="prepairing_for" value="" placeholder="">
							<input type="submit" id="search" name="submit" alt="search" value="">
							<input type="text" class="inputForm" name="roll_no" placeholder="roll_no">
							<input type="text" class="inputForm" name="year_of_adm" placeholder="year_of_admission">
							<input type="text" class="inputForm" name="branch" placeholder="branch">
							<input type="text" class="inputForm" name="group" placeholder="group">
							<input type="text" class="inputForm" name="sub_group" placeholder="sub-group">
							<input type="text" class="inputForm" name="name" placeholder="name">
							<input type="text" class="inputForm" name="email" placeholder="email">
							<input type="hidden" name="course_name" value="b.tech">	
											   
                          
                           
                            </form>
    
    
    
    
    
    </div>
    <style>
    input[type="text"]{
      border-radius:5px;
      -moz-border-radius:5px;
      
          -webkit-border-radius: 6px;
        width: 9%;
    margin-right: 2%;
    padding-top: 9px;
    padding-bottom: 9px;
    }
    input#search    {
background:url(http://test.vprep.in/assets/frontend/images/button.png);
background-repeat: no-repeat;
width:40px;
position: relative;
    top: 5px;

border: 0;
margin-top:5px;
}
input::placeholder {
  color: grey;
  text-align:center;
  font-size:9px;
}
body{
background:#E8EEFC;

}
 </style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    