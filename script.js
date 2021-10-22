let html = document.querySelector('html');
let Kalimat = document.getElementById('quotes');
let angkaN = document.getElementById('angka');
let submit = document.getElementById('Tombol');
let facResult = document.getElementById('hasil');
let temaNya = document.getElementById('warna-tema');
let awalTema = temaNya.value;
let namaHari = document.getElementById('hari');
let awalKata = namaHari.value;

let hariLucu = {
    Senin: "Selamat Hari Senin, untuk kamu yang ngangenin",
    Selasa: "Selamat Hari Selasa, untuk kamu yang sedang larut dalam rasa",
    Rabu: "Selamat Hari Rabu, untuk kamu yang sedang dalam kelabu",
    Kamis: "Selamat Hari Kamis, untuk kamu yang manis",
    Jumat: "Selamat Hari Jum'at, Untuk kamu yang lagi patah semangat",
    Sabtu: "Selamat Hari Sabtu, untuk kamu yang mencintai dalam bisu",
    Minggu: "Selamat Hari Minggu, Dari aku yang rindu"
};

let TemaNew = (theme) => {
    switch (theme) {
        case 'hitam':
            html.classList = 'hitam';
            break;
        case 'putih':
            html.classList = 'putih';
            break;
        case 'campur1' :
            html.classList = 'campur1';
        default:
            break;
    }
}

let QuoteNew = (key) => {
    if (Object.keys(hariLucu).includes(key)) {
        Kalimat.textContent = hariLucu[key];
    }
    else {
    }
}

let hitung = (nilai) => {
    let n = 1;
    for (let i = 2; i <= nilai; i++) {
        n *= i;
    }
    return n;
}


TemaNew(awalTema);
QuoteNew(awalKata);

temaNya.addEventListener('change', () => {
awalTema = temaNya.value;
TemaNew(awalTema);
});

namaHari.addEventListener('change', () => {
awalKata = namaHari.value;
QuoteNew(awalKata);
});



submit.addEventListener('click', () => {
    let number = angkaN.value;
    let result = hitung(number);

    let newContent = `faktorial dari ${number} = ${result}`;

    facResult.textContent = newContent;
});