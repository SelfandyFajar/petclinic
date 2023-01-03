-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 09.26
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petclinic`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `doctors_210032`
--

CREATE TABLE `doctors_210032` (
  `doctor_id_210032` int(11) NOT NULL,
  `doctor_name_210032` varchar(50) NOT NULL,
  `doctor_gender_210032` varchar(6) NOT NULL,
  `doctor_address_210032` varchar(100) NOT NULL,
  `doctor_phone_210032` varchar(15) NOT NULL,
  `doctor_photo_210032` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `doctors_210032`
--

INSERT INTO `doctors_210032` (`doctor_id_210032`, `doctor_name_210032`, `doctor_gender_210032`, `doctor_address_210032`, `doctor_phone_210032`, `doctor_photo_210032`) VALUES
(2, 'Jamal', 'Male', ' Bandung', '0897264234', 'jonas.jpg'),
(3, 'Siti', 'Female', ' Bekasi', ' 0898235433', 'default.png'),
(4, 'Jonas', 'Male', ' Belgia', ' 23746238543', 'default.png'),
(6, 'sam', 'Male', ' inggris\r\n', ' 189372468326', 'virtualisation.webp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medicals_210032`
--

CREATE TABLE `medicals_210032` (
  `mr_id_210032` int(11) NOT NULL,
  `mr_date_210032` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pet_id_210032` int(11) NOT NULL,
  `doctor_id_210032` int(11) NOT NULL,
  `symptom_210032` varchar(255) NOT NULL,
  `diagnose_210032` varchar(255) NOT NULL,
  `treatment_210032` varchar(255) NOT NULL,
  `cost_210032` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `medicals_210032`
--

INSERT INTO `medicals_210032` (`mr_id_210032`, `mr_date_210032`, `pet_id_210032`, `doctor_id_210032`, `symptom_210032`, `diagnose_210032`, `treatment_210032`, `cost_210032`) VALUES
(1, '2023-01-01 15:11:18', 11, 6, 'Gatal', 'Jamuran', 'salep', 30),
(2, '2023-01-01 15:51:32', 9, 4, 'Mencret', 'keracunan', 'suntik', 30000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pets_210032`
--

CREATE TABLE `pets_210032` (
  `pet_id_210032` int(11) NOT NULL,
  `pet_name_210032` varchar(30) NOT NULL,
  `pet_type_210032` varchar(30) NOT NULL,
  `pet_gender_210032` varchar(6) NOT NULL,
  `pet_age_210032` int(11) NOT NULL,
  `pet_owner_210032` varchar(50) NOT NULL,
  `pet_address_210032` varchar(100) NOT NULL,
  `pet_phone_210032` varchar(15) NOT NULL,
  `pet_photo_210032` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pets_210032`
--

INSERT INTO `pets_210032` (`pet_id_210032`, `pet_name_210032`, `pet_type_210032`, `pet_gender_210032`, `pet_age_210032`, `pet_owner_210032`, `pet_address_210032`, `pet_phone_210032`, `pet_photo_210032`) VALUES
(8, 'odang', 'Reptil', 'Male', 16, ' Selfandy', ' Bandung', ' 0982346324', 'reptil.jpg'),
(9, 'Cookie', 'Cat', 'Female', 3, ' Lesti', ' Jakarta', ' 0828973426', 'kucing.jpg'),
(11, 'ash', 'Cat', 'Male', 8, ' Selfandy', ' Bandung', ' 0897264237', 'licensed-image (1).jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_210066`
--

CREATE TABLE `users_210066` (
  `userid_210066` int(11) NOT NULL,
  `username_210066` varchar(100) NOT NULL,
  `password_210066` varchar(255) NOT NULL,
  `usertype_210066` varchar(15) NOT NULL,
  `fullname_210066` varchar(100) NOT NULL,
  `photo_210066` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_210066`
--

INSERT INTO `users_210066` (`userid_210066`, `username_210066`, `password_210066`, `usertype_210066`, `fullname_210066`, `photo_210066`) VALUES
(2, 'rofi', '$2y$10$Mef8uJbPPAxOwLxWBV9Bl.w.0OttCCuhJQcq1TIoT6najrVRHB482', 'Manager', 'rofiariansyahh', 'IMG_7814.JPG'),
(4, 'Ujang', '$2y$10$cjEcAEHHoEd2pwLQoxETw.yBlUDnz9HOcVwAVLUJ1m/CcaVWa00DO', 'Staff', ' Ujang Usep', 'default'),
(5, 'Rofi', ' $2y$10$B2uLmnbyeeUAJVb0bgWzGu6mRBE9BDCBqvBgaIixURkGUPGLU0Zei', ' Manager', ' rofiariansyah', 'default'),
(6, 'jon', '$2y$10$eRlqMUNvqcssUHtrng.jaeo0KOBiZm7KH0rPE2tDIB6t7HsS7Z/3y', ' Manager', ' Jamal', 'default.png'),
(7, 'ikan', ' $2y$10$M1KpPo/b2VBuYJHsjb6fQOgtknlVOi8ZZjRbrfNkSzidcd2ozhXWS', ' Manager', ' Cookiess', 'default.png'),
(8, 'selfandy', '$2y$10$N.elkEiUmijQFvQ4yUWcTeWr0.VPAwytYknuP.3zR0Wsk49kty8k.', 'Manager', 'Selfandy Fajar', 'licensed-image (1).jpeg'),
(9, 'azam', '$2y$10$g2qWJ8flQtijIwj5Mvfu2u9gxYUi/jxRmCmRwrid9dqbSZNCV/1aG', 'Staff', ' azammm', '49 Best Mens Haircuts 2021_ The Definitive Guide (Pick A New Look).jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `doctors_210032`
--
ALTER TABLE `doctors_210032`
  ADD PRIMARY KEY (`doctor_id_210032`);

--
-- Indeks untuk tabel `medicals_210032`
--
ALTER TABLE `medicals_210032`
  ADD PRIMARY KEY (`mr_id_210032`),
  ADD KEY `pet_id_210032` (`pet_id_210032`),
  ADD KEY `doctor_id_210032` (`doctor_id_210032`);

--
-- Indeks untuk tabel `pets_210032`
--
ALTER TABLE `pets_210032`
  ADD PRIMARY KEY (`pet_id_210032`);

--
-- Indeks untuk tabel `users_210066`
--
ALTER TABLE `users_210066`
  ADD PRIMARY KEY (`userid_210066`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `doctors_210032`
--
ALTER TABLE `doctors_210032`
  MODIFY `doctor_id_210032` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `medicals_210032`
--
ALTER TABLE `medicals_210032`
  MODIFY `mr_id_210032` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pets_210032`
--
ALTER TABLE `pets_210032`
  MODIFY `pet_id_210032` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users_210066`
--
ALTER TABLE `users_210066`
  MODIFY `userid_210066` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `medicals_210032`
--
ALTER TABLE `medicals_210032`
  ADD CONSTRAINT `medicals_210032_ibfk_1` FOREIGN KEY (`pet_id_210032`) REFERENCES `pets_210032` (`pet_id_210032`),
  ADD CONSTRAINT `medicals_210032_ibfk_2` FOREIGN KEY (`doctor_id_210032`) REFERENCES `doctors_210032` (`doctor_id_210032`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
