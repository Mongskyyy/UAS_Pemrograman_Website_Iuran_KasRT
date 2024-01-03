<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>

<body>
    <div id="container">
        <header>
            <h1>Iuran Kas RT Kelompok 7</h1>
        </header>
        <nav>
            <ul>
                <li><a href="<?= base_url('/data_warga'); ?>">Data Warga</a></li>
                <li><a href="<?= base_url('/iuran'); ?>">Kas Warga</a></li>
                <li><a href="<?= base_url('/laporan'); ?>">Laporan Kas</a></li>
                </li>
                <li><a href="<?= base_url('/user/login'); ?>">Login</a></li>
            </ul>
        </nav>