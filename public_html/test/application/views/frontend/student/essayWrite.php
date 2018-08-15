


<div style="
    padding-left: 10%;
    font-size: 20px;
">
    Topic:

    <?php
    echo $topic['topic'];

    ?></div>

<form action="student/essay_evalution">

    <div style="
    padding-bottom: 1px;
    padding-left: 10%;
    font-size: 19px;
    font-weight: bold;
    color: lightblue;
"> Write here:</div><br>
    <input type="hidden" value=<?php
    echo $essayId;

    ?> name="essayId" />
    <input align="top" type="text" name="answer" style="
    width: 80%;
    height: 500px;
    margin-left: 10%;
    align: top;
    padding-top: 250px;
">
    <br><br>
    <input type="submit" style="
    text-align: center;
    margin-left: 46%;
    margin-bottom: 10px;
    width: 7%;
    background: green;
    color: beige;
">
</form>
