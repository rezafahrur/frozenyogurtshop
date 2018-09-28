var sound = document.getElementById("errorSound");
sound.play();
$.amaran({
    'theme': 'colorful',
    'content': {
        bgcolor: '#E82424',
        color: '#fff',
        message: '<i class="fas fa-times"></i> &nbsp&nbsp <b>Ada yang Salah, Mohon Periksa Kembali</b>'
    },
    'resetTimeout': true,
    'closeOnClick': true,
    'cssanimationIn': 'bounceInUp',
    'cssanimationOut': 'zoomOutDown',
    'position': 'bottom right'
});
