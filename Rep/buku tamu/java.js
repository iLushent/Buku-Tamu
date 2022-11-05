document.addEventListener('DOMContentLoaded',
function(){
    let ketik = new TypeIt('#typing', {})
    for(let i=1;i<100;i++){
       ketik.type('Wifi Kencang').pause(1000).delete(14).type('Lapangan Luas').pause(1000).delete(14).type('Ada Kolam Renang').pause(1000).delete(18)
       .type('Gedung Luas').pause(1000).delete(12)

    }
    ketik.go()
      
})