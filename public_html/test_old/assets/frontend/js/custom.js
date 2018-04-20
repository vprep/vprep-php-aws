
$('#question').on('click','a',function(e){
    e.preventDefault();
    e.stopPropagation();
    // get post data
    var pdata = $('#ol_exam_form').serializeArray();
    // push page number on post data
    pdata.push({ name: "page", value: $(this).attr('data-page-num') });
    //pdata={'page':$(this).attr('data-page-num')};
    // post url 
    var url=base_url + 'start_exam/'+$(this).attr('data-exam-id');
    jQuery.post(url, pdata).done(function(data) {
        $("#question").html(data);
    });
});


