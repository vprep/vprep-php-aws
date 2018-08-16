topic:
<div style="padding-left:5%;padding-right: 5%">Answer: <?php echo $topic['answer']; ?></div>

<div class="feedback" style="
    padding-left: 5%;
">

</div>
<script>

    var json1=<?php echo $topic['evaluation']; ?>

    for(var i=0;json1.check_grammar_feedback.length;i++){
        var div = document.createElement('div');

        var html1="<br>"+i+": "+"<div style='color: green;font-style: italic;'><b>Sentence: </b>"+json1.check_grammar_feedback[i]["context"]+"</div><div style='color:red; font-size:18px;font-weight: bold;'><b> Error Place: </b>"+json1.check_grammar_feedback[i]["error_grammar"]+"</div><div style='font-size: 18px;'><b>Feedback Grammer:</b>"+json1.check_grammar_feedback[i]["feedback_grammar"]+"</div> ";
        div.innerHTML=html1;
       var  feedback1 =document.getElementsByClassName("feedback");
        feedback1[0].appendChild(div);

    }

    </script>
