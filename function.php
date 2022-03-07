<?php
/*
membuat fungsi set flashdata yang 
menerima satu parameter untuk
melakukan set terhadap pesan yang 
ingin ditampilkan dengan 
memanfaatkan sebuah session.
*/
function set_flashdata($message)
{
    $_SESSION['pesan'] = $message;
}
/*
membuat fungsi flashdata yang digunakan
untuk menampilkan pesan yang sudah
diset pada fungsi set_flashdata
dan ditampilkan hanya sekali dengan
menghapus session yang dibuat pada
fungsi set_flashdata.
*/
function flashdata()
{
    if (isset($_SESSION['pesan'])) {
        echo $_SESSION['pesan'];
        unset($_SESSION['pesan']);
    }
}
