$("#closeProduk").click(function () {
  $.amaran({
      'theme': 'colorful',
      'content': {
          bgcolor: '#3B87B3',
          color: '#fff',
          message: '<b>Data Produk ditutup</b><br> refresh halaman jika ingin melihat kembali'
      },
      'resetTimeout': true,
      'closeOnClick': true,
      'cssanimationIn': 'bounceInRight',
      'cssanimationOut': 'zoomOutRight',
      'position': 'bottom right'
  });
  var sound = document.getElementById("notif");
  sound.play();
});

$("#closeKategori").click(function () {
  $.amaran({
      'theme': 'colorful',
      'content': {
          bgcolor: '#E69515',
          color: '#fff',
          message: '<b>Data Kategori ditutup</b><br> refresh halaman jika ingin melihat kembali'
      },
      'resetTimeout': true,
      'closeOnClick': true,
      'cssanimationIn': 'bounceInRight',
      'cssanimationOut': 'zoomOutRight',
      'position': 'bottom right'
  });
  var sound = document.getElementById("notif");
  sound.play();
});

$("#closeBlog").click(function () {
  $.amaran({
      'theme': 'colorful',
      'content': {
          bgcolor: '#3B87B3',
          color: '#fff',
          message: '<b>Data Blog ditutup</b><br> refresh halaman jika ingin melihat kembali'
      },
      'resetTimeout': true,
      'closeOnClick': true,
      'cssanimationIn': 'bounceInRight',
      'cssanimationOut': 'zoomOutRight',
      'position': 'bottom right'
  });
  var sound = document.getElementById("notif");
  sound.play();
});

//maksimalkan tabel data produk
$("#maxProduk").click(function () {
  var clicks = $(this).data('clicks');
  if (clicks) {
      $('#dataTabelProduk').addClass('col-md-6').removeClass('col-md-12');
  } else {
      $('#dataTabelProduk').addClass('col-md-12').removeClass('col-md-6');
  }
  $(this).data("clicks", !clicks);
});

//maksimalkan tabel data kategori
$("#maxKategori").click(function () {
  var clicks = $(this).data('clicks');
  if (clicks) {
      $('#dataTabelKategori').addClass('col-md-6').removeClass('col-md-12');
  } else {
      $('#dataTabelKategori').addClass('col-md-12').removeClass('col-md-6');
  }
  $(this).data("clicks", !clicks);
});

//tambah suara di form
$(".addForm").click(function () {
  var sound = document.getElementById("addSound");
  sound.play();
});