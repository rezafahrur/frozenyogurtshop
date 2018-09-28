var sound = document.getElementById("notif");
sound.play();
$.amaran({
    'theme': 'colorful',
    'content': {
        bgcolor: '#E82424',
        color: '#fff',
        message: '<i class="fas fa-check"></i> &nbsp&nbsp <b>Data Blog Berhasil Dihapus</b>'
    },
    'resetTimeout': true,
    'closeOnClick': true,
    'cssanimationIn': 'bounceInUp',
    'cssanimationOut': 'zoomOutDown',
    'position': 'bottom right'
});
