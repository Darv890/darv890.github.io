// let nama = "Praba";
// const umur = 25;
// var kota = "Bali";
// console.log(nama, umur, kota);

// nama = "pendy";
// umur = 16;
// console.log(nama, umur);

let nama = "pendy";
console.log(typeof nama)
let umur = 16;
console.log(typeof umur)
let tinggi = 1.70;
console.log(typeof tinggi)
let aktif = true;
console.log(typeof aktif)
let datakosong = "";
console.log(typeof datakosong)
let data = null;
console.log(typeof data)
let belumisi;
console.log(typeof belumisi)

let a = 5;
let b = 2;

let hasil = a + b;
console.log(hasil);

let nilai = 75;
console.log("---- if else ----");
if (nilai >= 75) {
    console.log("Lulus");
} else {
    console.log("Tidak lulus");
}
console.log(nilai >= 75);
console.log(nilai <= 75);
console.log(nilai == 75);
console.log(nilai != 75);
console.log(nilai === "75");
console.log(nilai !== 75);
console.log(nilai == "75");
console.log("---- if else ----");

console.log("---- switch case ----");
switch (nilai) {
    case 100:
        console.log("Sangat baik");
        break;
    case 75:
        console.log("Baik");
        break;
    case 50:
        console.log("Cukup");
        break;
    default:
        console.log("Tidak lulus");
        break;
}
console.log("---- switch case ----");

console.log("---- for while ----");
for (let i = 1; i < 5; i++) {
    console.log("Angka ke-" + i);
}
console.log("-----");
for (let i = 1; i <= 5; i++) {
    console.log("Angka ke-" + i);
}
console.log("-----");
let i = 1;
while (i <= 5) {
    console.log(i);
    i++;
}
console.log("-----");
console.log("---- for while ----");

console.log("---- function ----");
function sapa2(nama) {
    return nama;
}
const sapa = sapa2("Pendy");
console.log(sapa);

function calculator(a, b, operator) {
    switch (operator) {
        case "+":
            return a + b;
        case "-":
            return a - b;
        case "*":
            return a * b;
        case "/":
            return a / b;
        default:
            return "Operator tidak valid";
    }
}

console.log(calculator(1, 2, "+"));
console.log(calculator(1, 2, "-"));
console.log(calculator(1, 2, "*"));
console.log(calculator(1, 2, "/"));
console.log(calculator(1, 2, "%"));
console.log("---- function ----");

let buah = ["Apel", "Pisang", "Jeruk"];
console.log(buah);
console.log(buah[1]);
console.log(buah.length);
let buah1 = new Array("Apel", "Pisang", "Jeruk", "Melon");
console.log(buah1);
buah1.push("Mangga");
console.log(buah1);
console.log(buah1.length);

for (let index = 0; index < buah.length; index++) {
    const element = buah[index];
    console.log(element);
}

for (let index = 0; index < buah1.length; index++) {
    const element = buah1[index];
    console.log(element);
}