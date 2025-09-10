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

const objectBuah = {
    value: "Apel",
    value1: "Pisang",
    value2: "Jeruk",
    value3: "Melon"
}
console.log(objectBuah);
console.log(objectBuah.value);
console.log(objectBuah.value2);

function submitForm(event) {
    event.preventDefault();
    const form = document.getElementById("contact-form");

    const name = document.getElementsByClassName("form-name");
    console.log(name);
    const nameValue = name.name.value;
    console.log(nameValue);
    // if (nameValue == "" || nameValue == null || nameValue == undefined || nameValue == NaN || nameValue == false || nameValue == 0) {
    //     alert("Nama tidak boleh kosong");
    //     return
    // }
    let email = document.getElementById("email");
    console.log(email);
    let emailValue = email.value;
    console.log(emailValue);
    // if (!emailValue) {
    //     alert("Email tidak boleh kosong");
    //     return
    // }

    if (!emailValue && !nameValue) {
        alert("Email dan Nama tidak boleh kosong");
        return
    }
    let subject = document.getElementById("subject");
    console.log(subject);
    let subjectValue = subject.value;
    console.log(subjectValue);
    let subjectClasslist = subject.classList;
    subjectClasslist.add("required-red");
    console.log(subjectClasslist);
    for (let index = 0; index < subjectClasslist.length; index++) {
        const element = subjectClasslist[index];
        console.log(element);
    }

    let message = document.getElementById("message");
    console.log(message);
    const messageValue = message.value;
    console.log(messageValue);
    let collaboratively = document.getElementsByClassName("form-collaboratively");
    console.log(collaboratively);
    const collaborativelyValue = collaboratively.collaboratively.checked;
    console.log(collaborativelyValue);

    const contact = {
        name: nameValue,
        email: emailValue,
        subject: subjectValue,
        message: messageValue,
        collaboratively: collaborativelyValue
    }
    console.log(contact);
    const jsonContact = JSON.stringify(contact);
    console.log(jsonContact);

    localStorage.setItem("contact", jsonContact);

    form.reset();

    alert("Name: " + nameValue + "\nEmail: " + emailValue + "\nSubject: " + subjectValue + "\nMessage: " + messageValue + "\nCollaboratively: " + collaborativelyValue);

}

function getContactData() {
    const contact = localStorage.getItem("contact");
    console.log(contact);
    const contactValue = JSON.parse(contact);
    console.log(contactValue);
    const name = document.getElementsByClassName("form-name");
    console.log(name);
    name.name.value = contactValue.name;
    const email = document.getElementById("email");
    console.log(email);
    email.value = contactValue.email;
    const subject = document.getElementById("subject");
    console.log(subject);
    subject.value = contactValue.subject;
    const message = document.getElementById("message");
    console.log(message);
    message.value = contactValue.message;
    const collaboratively = document.getElementsByClassName("form-collaboratively");
    console.log(collaboratively);
    collaboratively.collaboratively.checked = contactValue.collaboratively;
}

function toggleTheme() {
    const body = document.body;
    console.log(body);
    body.classList.toggle("dark-mode");

    const headerElements = document.getElementsByTagName("header");
    console.log(headerElements);
    for (let index = 0; index < headerElements.length; index++) {
        const element = headerElements[index];
        console.log(element);
        element.classList.toggle("dark-mode");
    }

}