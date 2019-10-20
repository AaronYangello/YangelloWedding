function addSong(){
    var box = $('#name');
    var songName = box.val().trim();
    
    if(songName.length > 0){
        jQuery.ajax({
            type: "POST",
            url: '../php/addsong.php',
            dataType: 'json',
            data: {songname: songName},
            success: function (obj, textstatus){
                box.val("");
                console.log("Success!");
            }
        });
    }
}