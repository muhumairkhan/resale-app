$(document).ready(function (){

    $('#edit-profile-data').click(function (){
        $('#profile-data-table').hide('slow');
        $('#profile-data-edit-form').show('slow');
    });

    $('#cancel-profile-edit').click(function (){
        $('#profile-data-table').show('slow');
        $('#profile-data-edit-form').hide('slow');
    });
});
