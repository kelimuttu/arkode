function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#cover-image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function hapus_games(id){
    var konfirmasi = confirm('Apakah anda yakin ingin menghapus game ini?');
    if(konfirmasi===true){
        $.post('/dashboard/games/hapus/'+id, function(data) {
            window.location.href = "";
        });
    }
}

function hapus_slider(id){
    var konfirmasi = confirm('Apakah anda yakin ingin menghapus slider ini?');
    if(konfirmasi===true){
        $.post('/dashboard/intro/hapus/'+id, function(data) {
            window.location.href = "";
        });
    }
}

function hapus_modul(id){
    var konfirmasi = confirm('Apakah anda yakin ingin menghapus modul ini?');
    if(konfirmasi===true){
        $.post(base_url+'/modules/delete/'+id, function(data) {
            window.location.href = "";
        });
    }
}

$(document).ready(function() {
    $('#input_file').change(function(event) {
        readURL(this);
    });
});