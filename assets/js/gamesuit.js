var tanya =true;
while(tanya){
  //Menangkap Pilihan Player
  
  var p =prompt('pilih: Batu, Gunting, Kertas' )

  //menangkap Pilihan computer
  //membangkitkan bilangan random
  var comp = Math.random();
  console.log(comp);


  if(comp <0.34) {
    comp = 'Batu';
  }else if(comp >= 0.34 && comp < 0.67) {
    comp = 'Gunting';
  }else{
    comp ='kertas';
  }

  var hasil ='';
  //menentukan rules
  if(p == comp) {
    hasil='Seri!';
  }else if( p =='Batu') {
    // if (comp =='gunting') {
    // hasil ='Menang';
    // } else {
    // hasil ='Kalah!';
    // }
    hasil = ( comp == 'Gunting' ) ? 'Menang!' : 'Kalah!';
  } else if ( p == 'Gunting') {
    hasil = ( comp == 'Batu') ? 'Kalah!' : 'Menang!';
  } else if ( p == 'Kertas') {
    hasil = ( comp == 'Gunting') ? 'Kalah!' : 'Menang!';
} else if ( p == 'Batu') {
    hasil = ( comp == 'Gunting') ? 'Menang!' : 'Kalah!';
  } else {
    hasil='memasukan pilihan yang salah!';
  }

  //tampilkan hasilnya
  alert ('kamu memilih' + p +'dan komputer memilih'+ comp +'\nMaka hasilnya : kamu' + hasil);

  tanya  = confirm ('lagi?');
}
alert ('terimakasih sudah bermain.');

