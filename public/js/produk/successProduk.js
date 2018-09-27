var sound = document.getElementById("notif");
sound.play();
$.amaran({
    'theme': 'colorful',
    'content': {
        bgcolor: '#3B87B3',
        color: '#fff',
        message: '<i class="fas fa-check"></i> &nbsp&nbsp <b>Data Produk Berhasil Ditambah</b>'
    },
    'resetTimeout': true,
    'closeOnClick': true,
    'cssanimationIn': 'bounceInUp',
    'cssanimationOut': 'zoomOutDown',
    'position': 'bottom right'
});
