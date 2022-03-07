<?php
// membuka session
session_start();
// menghubungkan file function.php
require_once 'function.php';
// membuat variavel untuk dilakukan pengecekan
$username = 'admin';
$password = 'admin';

// tangakp nilai dari inputan kedalam variabel
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user == "" || $pass == "") {
    // $_SESSION['pesan'] = "Username atau password tidak boleh kosong";
    set_flashdata('Username atau password tidak boleh kosong');
    header('location:index.php');
} else {
    // lakukan pengecekan terhadap inputan
    if ($user == $username && $pass == $password) {
        /*jika username dan password benar
    arahakan ke halaman dashboard*/
        $_SESSION['username'] = $user;
        $_SESSION['email'] = 'admin@gmail.com';
        header('location:dashboard.php');
    } else {
        /*jika username dan password salah
    arahkan ke halaman login lagi yaitu index.php
    */
        set_flashdata('Username atau password salah');
        header('location:index.php');
    }
}
