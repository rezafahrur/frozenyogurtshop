var sound = document.getElementById("notif");
sound.play();
$.amaran({
    'theme': 'colorful',
    'content': {
        bgcolor: '#00A65A',
        color: '#fff',
        message: '<i class="fas fa-check"></i> &nbsp&nbsp <b>Data Blog Berhasil Ditambah</b>'
    },
    'resetTimeout': true,
    'closeOnClick': true,
    'cssanimationIn': 'bounceInUp',
    'cssanimationOut': 'zoomOutDown',
    'position': 'bottom right'
});
