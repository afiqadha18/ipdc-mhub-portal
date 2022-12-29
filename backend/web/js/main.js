// $(function(){
//     alert ("IPDC mHub");
// });

$(function(){
    //create user modal pop-up
    $('#btnCreateUser').click(function(){
        $('#modalCreateUser').modal('show')
        .find('#modalCreateUserContent')
        .load($(this).attr('value'));
    });
});