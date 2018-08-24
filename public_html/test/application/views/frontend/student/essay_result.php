<div style="margin-left: 5%;margin-right: 5%;background: darkgray;color: white;padding-left: 1%;font-style: oblique;">You Wrote: <?php echo $topic['answer']; ?></div>


    <Span style="
          margin-left: 5%;
          font-size: 17px !important;
          margin-right: 1%;
          color: red;" id="totalmistake"> Total Mistake:</Span>
    <span style="

          font-size: 17px !important;
          margin-right: 1%;
          color: red;" id="errorpercent"> Error Percent:</span>
    <span style="
    font-size: 17px !important;
    color: green;
" id="wordcount"> Total Words:</span>
    <span style="
    font-size: 17px !important;
    margin-left: 1%;
    color: green;
" id="totalmarks"> Total Marks: </span>

<div class="feedback" style="
    padding-left: 5%;
">

</div>
<script>
   var s1=<?php echo json_encode($topic['answer']); ?>;

    s1 = s1.replace(/(^\s*)|(\s*$)/gi,"");
    s1 = s1.replace(/[ ]{2,}/gi," ");
    s1 = s1.replace(/\n /,"\n");
    document.getElementById("wordcount").innerHTML ="Total Words: " + s1.split(' ').length;
   var s11 =<?php echo $topic['evaluation']; ?>;
   console.log(s11);
    document.getElementById("totalmistake").innerHTML ="Total Mistake: " + s11.error_grammar_count_total;
    document.getElementById("errorpercent").innerHTML ="Error Percent: " + s11.error_grammar_percent;
    var total_marks = 25*(100-parseInt(s11.error_grammar_percent))/100;
   document.getElementById("totalmarks").innerHTML ="Total Marks: " + total_marks+"/30";
    if(<?php echo $topic['generated']; ?>==1)
    {
        var json1 =<?php echo $topic['evaluation']; ?>;


        for (var i = 0; json1.check_grammar_feedback.length; i++) {
            var div = document.createElement('div');

            var html1 = "<br><span style='font-size:20px;'>" + i + ":</span> " + "<div style='color: green;font-style: italic;'><b>Sentence: </b>" + json1.check_grammar_feedback[i]["context"] + "</div><div style='color:red; font-size:18px;font-weight: bold;'><b> Error Place: </b>" + json1.check_grammar_feedback[i]["error_grammar"] + "</div><div style='font-size: 18px;'><b>Feedback Grammer:</b>" + json1.check_grammar_feedback[i]["feedback_grammar"] + "</div> ";
            div.innerHTML = html1;
            var feedback1 = document.getElementsByClassName("feedback");
            feedback1[0].appendChild(div);

        }
    }
    else {

        alert("not generated");
        $.ajax({
            url: "https://virtualwritingtutor.com/API/checkgrammar.php",
            data: { signature: authHeader },
            type: "GET",
            beforeSend: function(xhr){xhr.setRequestHeader('X-Test-Header', 'test-value');},
            success: function() { alert('Success!' + authHeader); }
        });
    }

    </script>
