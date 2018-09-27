//buat datatables tabel kategori
$(document).ready(function () {
  var tableKategori =
      $("#kategori").DataTable({
          autoWidth: true,
          order: [
              [0, "asc"]
          ],
          responsive: true,
          deferRender: true,
          language: {
              sEmptyTable: "Tidak ada data kategori yang tersedia pada tabel ini",
              sProcessing: "Sedang memproses...",
              sLengthMenu: "Tampilkan _MENU_ Data Kategori",
              sZeroRecords: "Tidak ditemukan Data Kategori yang sesuai",
              sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Kategori",
              sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Kategori",
              sInfoFiltered: "(disaring dari _MAX_ Data Kategori keseluruhan)",
              sInfoPostFix: "",
              sSearch: "Cari Kategori:",
              sUrl: "",
              oPaginate: {
                  sFirst: "Pertama",
                  sPrevious: "Sebelumnya",
                  sNext: "Selanjutnya",
                  sLast: "Terakhir"
              }
          }
      });
});

//buat datatables tabel Produk
$(document).ready(function () {
  var tableProduk =
      $("#produk").DataTable({
          autoWidth: true,
          order: [
              [0, "asc"]
          ],
          responsive: true,
          deferRender: true,
          language: {
              sEmptyTable: "Tidak ada data produk yang tersedia pada tabel ini",
              sProcessing: "Sedang memproses...",
              sLengthMenu: "Tampilkan _MENU_ Data Produk",
              sZeroRecords: "Tidak ditemukan Data Produk yang sesuai",
              sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Produk",
              sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Produk",
              sInfoFiltered: "(disaring dari _MAX_ Data Produk Keseluruhan)",
              sInfoPostFix: "",
              sSearch: "Cari Produk:",
              sUrl: "",
              oPaginate: {
                  sFirst: "Pertama",
                  sPrevious: "Sebelumnya",
                  sNext: "Selanjutnya",
                  sLast: "Terakhir"
              }
          }
      });
});

//buat datatables tabel Blog
$(document).ready(function () {
  var tableBlog =
      $("#blog").DataTable({
          autoWidth: true,
          order: [
              [0, "asc"]
          ],
          responsive: true,
          deferRender: true,
          language: {
              sEmptyTable: "Tidak ada data blog yang tersedia pada tabel ini",
              sProcessing: "Sedang memproses...",
              sLengthMenu: "Tampilkan _MENU_ Data Blog",
              sZeroRecords: "Tidak ditemukan Data Blog yang sesuai",
              sInfo: "Menampilkan _START_ sampai _END_ dari _TOTAL_ Data Blog",
              sInfoEmpty: "Menampilkan 0 sampai 0 dari 0 Data Blog",
              sInfoFiltered: "(disaring dari _MAX_ Data Blog keseluruhan)",
              sInfoPostFix: "",
              sSearch: "Cari Blog:",
              sUrl: "",
              oPaginate: {
                  sFirst: "Pertama",
                  sPrevious: "Sebelumnya",
                  sNext: "Selanjutnya",
                  sLast: "Terakhir"
              }
          }
      });
});