const form = document.getElementById('form');
const nama = document.getElementById('nama');
const nim = document.getElementById('nim');
const prodi = document.getElementById('prodi');
const angkatan = document.getElementById('angkatan');
const posisi = document.getElementById('posisi');
const gender = document.getElementById('gender');
const nomorWA = document.getElementById('nomorWA');
const email = document.getElementById('email');



form.addEventListener('submit', e => {
    e.preventDefault();
    if (checkFormValidity()) {
        form.submit();
    }
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const checkFormValidity = () => {
    let isValid = true;

    const namaValue = nama.value.trim();
    const nimValue = nim.value.trim();
    const prodiValue = prodi.value.trim();
    const angkatanValue = angkatan.value.trim();
    const posisiValue = posisi.value.trim();
    const genderValue = gender.value.trim();
    const nomorWAValue = nomorWA.value.trim();
    const emailValue = email.value.trim();

    if (namaValue === '') {
        setError(nama, 'Isikan Nama yang Valid');
        isValid = false;
    } else {
        setSuccess(name);
    }

    if (nimValue === '') {
        setError(nim, 'Isikan NIM yang valid');
        isValid = false;
 
    }

    if (prodiValue === '') {
        setError(prodi, 'Isikan Program Studi');
        isValid = false;
    } 

    if (angkatanValue === '') {
        setError(series, 'Tahun Angkatan Masuk Perkuliahan');
        isValid = false;

    }

    if (posisiValue === '') {
        setError(posisi, 'Isikan Posisi Magang Anda');
        isValid = false;
    }

    if (genderValue === '') {
        setError(gender, 'Isikan sesuai Gender yang Valid');
        isValid = false;
    }

    if (nomorWAValue === '') {
        setError(nomorWA, 'IsikanNomor WhatsApp Anda');
        isValid = false;
    }

    if (emailValue === '') {
        setError(email, 'Isikan Email yang Valid');
        isValid = false;
    }
    
    return isValid;
};
