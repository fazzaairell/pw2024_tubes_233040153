const btn = document.querySelector('.btn');
const keyowrd = document.querySelector('.form-control');
const container = document.querySelector('.container');

// event ketika kita menuliskan keyword
keyowrd.addEventListener('keyup', function() {
// ajax
// xmlhttprequest
const xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
    if(xhr.readyState == 4 && xhr.status == 200) {
        console.log(xhr.responseText);
    }
};

xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyowrd.value);
    xhr.send();
});


