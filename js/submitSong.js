function addSong(){
    var box = $('#name');
    
    var songName = box.val().trim();
    
    if(songName.length > 0){
        jQuery.ajax({
            type: "POST",
            url: 'http://yangelloeverafter.us/php/addsong.php',
            dataType: 'json',
            data: {songname: songName},
            success: function (){
                box.val("");
                box.attr("placeholder", "Thanks! Care to add another?");
            }
        });
    }
}