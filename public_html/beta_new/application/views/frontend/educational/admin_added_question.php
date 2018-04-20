<form name="save_test_questions"  id="save_test_questions" charset="UTF-8" enctype="multipart/form-data" ;="">
<div class="adding_dropdown_in_one_line form-group">
   <label class="pull-left">Choose Admin</label>
   <select name="admin_id" class="form-control">
      <option value="" selected="selected">Choose Admin</option>
      <option value="1">Admin01</option>
      <option value="2">Admin02</option>
      <option value="3">Admin03</option>
      
   </select>
</div>

<div class="adding_dropdown_in_one_line form-group">
   <label class="pull-left">Choose time</label>
   <select name="admin_time" class="form-control">
      <option value="" selected="selected">Choose time</option>
      <option value="1">Today</option>
      <option value="2">Yesterday</option>
      <option value="3">Day before Yesterday</option>
      
   </select>
</div>
<button name="save" type="button" onclick="getNumQuestions()" class="adding_dropdown_in_one_line_button" value="save_add" class="btn btn-success btn-lg custom-margin-5">Find Question</button>
</form>

<div id="loading-gif" style="display:none; margin-left:500px; margin-top:200px;">
<img class="_3QcZOBs-_0PFoUjz21NMOt" src="http://test.vprep.in/assets/frontend/images/logo/Blocks.gif" width="60" height="60" loop="infinite" alt="Mashable loading GIF">

</div>
<div id="show_num_id" style="margin-top:200px;"></div>

<script>
function getNumQuestions(){
$("#loading-gif").show();
$("#show_num_id").hide();
options = $("#show_num_id");
		$.ajax({
		type: 'POST',
		url: '<?php echo base_url('educational/admin_added_question_num');?>',
		data: $('#save_test_questions').serialize(),
		dataType: 'text',
		timeout: 30000,
		success: function(responseMess) {
		
		 
                console.log(responseMess);
		
		 		 
		
		options.html(responseMess);
		$("#loading-gif").hide();
		$("#show_num_id").show();
		

		},
		error: function(request, status, err) {
		        $("#loading-gif").hide();

			if(status == "timeout") {

				alert('Oops !! There might me network error, please try one more time !!');
			}

		 }
	});




}

</script>


<style>
.adding_dropdown_in_one_line{
width:25%;
margin-left:5%;
margin-top:5%;
float:left;

}
.adding_dropdown_in_one_line_button{

    margin-left: 5%;
    margin-top: 7.3%;
    float: left;
    background: #3b5998;
    color: white;

}
.middle_margin{
margin-left:30%;
margin-top:30px;
}
</style>