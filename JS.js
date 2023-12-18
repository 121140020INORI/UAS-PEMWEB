// Fungsi untuk menetapkan cookie
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// Fungsi untuk mendapatkan nilai cookie berdasarkan nama
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Fungsi untuk menghapus cookie berdasarkan nama
function deleteCookie(name) {
    document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/";
}

// Fungsi untuk menyimpan data ke localStorage
function saveToLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

// Fungsi untuk mendapatkan data dari localStorage berdasarkan key
function getFromLocalStorage(key) {
    return localStorage.getItem(key);
}

// Fungsi untuk menghapus data dari localStorage berdasarkan key
function removeFromLocalStorage(key) {
    localStorage.removeItem(key);
}

// Contoh penggunaan
setCookie("exampleCookie", "Hello, Cookie!", 7); // Menetapkan cookie dengan nama 'exampleCookie' dan nilai 'Hello, Cookie!' selama 7 hari
var cookieValue = getCookie("exampleCookie"); // Mendapatkan nilai cookie 'exampleCookie'
console.log("Cookie Value:", cookieValue);

saveToLocalStorage("exampleLocalStorage", "Hello, Local Storage!"); // Menyimpan data ke localStorage dengan key 'exampleLocalStorage'
var localStorageValue = getFromLocalStorage("exampleLocalStorage"); // Mendapatkan data dari localStorage berdasarkan key 'exampleLocalStorage'
console.log("Local Storage Value:", localStorageValue);

deleteCookie("exampleCookie"); // Menghapus cookie dengan nama 'exampleCookie'
removeFromLocalStorage("exampleLocalStorage"); // Menghapus data dari localStorage dengan key 'exampleLocalStorage'
