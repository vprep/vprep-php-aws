<?php
echo $topic['id'];
echo $topic['essay_writing_id'];
echo $topic['user_id'];
echo $topic['answer'];

?>


topic:
Answer: <?php echo $topic['answer']; ?>

<div class="feedback" style="
    padding-left: 5%;
">

</div>>
<script>

    var json1=<?php echo $topic['evaluation']; ?>

    for(var i=0;json1.check_grammar_feedback.length;i++){
        var div = document.createElement('div');

        var html1="<br>"+i+": "+"<div><b>Sentence:</b>"+json1.check_grammar_feedback[i]["context"]+"</div><div><b> Error Place:</b>"+json1.check_grammar_feedback[i]["error_grammar"]+"</div><div><b>Feedback Grammer:</b>"+json1.check_grammar_feedback[i]["feedback_grammar"]+"</div><div><b>Grammer Suggestion</b> "+json1.check_grammar_feedback[i]["feedback_grammar_suggestion"]+"</div>";
        div.innerHTML=html1;
       var  feedback1 =document.getElementsByClassName("feedback");
        feedback1[0].appendChild(div);

    }

    </script>
