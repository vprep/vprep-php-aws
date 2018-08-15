<?php
echo $topic['id'];
echo $topic['essay_writing_id'];
echo $topic['user_id'];
echo $topic['answer'];

?>


topic:
Answer: <?php echo $topic['answer']; ?>

<div class="feedback">

</div>>
<script>

    var json1=<?php echo $topic['evaluation']; ?>

    for(var i=0;json1.check_grammar_feedback.length;i++){
        var div = document.createElement('div');

        var html1=json1.check_grammar_feedback[i]["context"]+" "+json1.check_grammar_feedback[i]["error_grammar"]+" "+json1.check_grammar_feedback[i]["feedback_grammar"]+json1.check_grammar_feedback[i]["feedback_grammar_suggestion"];
        div.innerHTML=html1;
       var  feedback1 =document.getElementsByClassName("feedback");
        feedback1.appendChild(div);

    }

    </script>
