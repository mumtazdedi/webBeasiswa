//event pada saat link diklik
$('.page-scroll').on('click', function (e) {

     //ambil isi href
     var tujuan = $(this).attr('href');
     // tangkap elemen ybs
     var elemenTujuan = $(tujuan);


     //pindahkan scroll
     $('html, body').animate({
          scrollTop: elemenTujuan.offset().top - 70
     }, 1000, "easeInOutCubic");


     e.preventDefault();
});