var sound = document.getElementById("notif");
sound.play();
$.amaran({
    'theme': 'colorful',
    'content': {
        bgcolor: '#E69515',
        color: '#fff',
        message: '<i class="fas fa-check"></i> &nbsp&nbsp <b>Kategori Produk Berhasil Diubah</b>'
    },
    'resetTimeout': true,
    'closeOnClick': true,
    'cssanimationIn': 'bounceInUp',
    'cssanimationOut': 'zoomOutDown',
    'position': 'bottom right'
});
