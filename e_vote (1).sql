-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2019 pada 15.26
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_vote`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(14, 'asd', 'as', 1),
(15, 'asdasd', 'asdasd', 1),
(16, 'sds', 'sds', 1),
(17, 'ss', 'ss', 1),
(18, 'haaa', 'haah', 1),
(19, 'as', 'as', 1),
(20, 'as', 'as', 1),
(21, 'asasas', 'asasa', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `quiz`
--

CREATE TABLE `quiz` (
  `id_soal` varchar(255) NOT NULL,
  `que` text NOT NULL,
  `option1` varchar(222) NOT NULL,
  `option2` varchar(222) NOT NULL,
  `option3` varchar(222) NOT NULL,
  `option4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quiz`
--

INSERT INTO `quiz` (`id_soal`, `que`, `option1`, `option2`, `option3`, `option4`, `ans`, `userans`) VALUES
('SO001', 'Betapa aku mencintaimu', 'lebih dari', 'yang kau mau', 'betapa aku', 'menyanyangimu', 'menyanyangimu', NULL),
('SO002', 'cek satu', 'cek ', 'cekkk', 'cekk', 'cik', 'cek', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` varchar(20) NOT NULL,
  `username` varchar(35) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `id_jbtn` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `fullname`, `id_jbtn`, `password`) VALUES
('AD004', 'birril', 'Birril Febrian', '1', '$2y$10$OEeI5AAGdh7asfN/coTnAeSCR7EXUNVACBu7VRDXhxMwGZhYIx2B.'),
('AD005', 'agung', 'Agung hehee', '1', '$2y$10$MkwY.RLxOzmb2b7AVY0W.eNg6Iv8.nKc9.TO8Lo9wxHqDWLjHc/lK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jabatan`
--

CREATE TABLE `t_jabatan` (
  `id_jbtn` varchar(20) NOT NULL,
  `jabatan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jabatan`
--

INSERT INTO `t_jabatan` (`id_jbtn`, `jabatan`) VALUES
('1', 'Admin'),
('2', 'Anggota OSis'),
('3', 'Ketua Osis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kandidat`
--

CREATE TABLE `t_kandidat` (
  `id_kandidat` smallint(4) NOT NULL,
  `nama_calon` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` varchar(255) NOT NULL,
  `suara` smallint(4) NOT NULL DEFAULT '0',
  `periode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kandidat`
--

INSERT INTO `t_kandidat` (`id_kandidat`, `nama_calon`, `foto`, `visi`, `misi`, `suara`, `periode`) VALUES
(1, 'Afakih Apadaya', '0.18776000 1572930477.jpg', 'asdas', 'asdas', 6, '2019/2020'),
(2, 'Birril Febriana', '0.92396900 1572930492.png', 'asdas', 'asd', 6, '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kelas`
--

CREATE TABLE `t_kelas` (
  `id_kelas` varchar(3) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kelas`
--

INSERT INTO `t_kelas` (`id_kelas`, `nama_kelas`) VALUES
('K01', 'X - TKJ'),
('K02', 'X - TKR'),
('K03', 'XII-MIPA 1'),
('K04', 'XI-MIPA 1'),
('K05', 'X-MIPA 1'),
('K06', 'X-MIPA 2'),
('K07', 'XI-MIPA 2'),
('K08', 'XII-MIPA 2'),
('K09', 'X-IPS 1'),
('K10', 'XI-IPS 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pemilih`
--

CREATE TABLE `t_pemilih` (
  `nis` varchar(10) NOT NULL,
  `periode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pemilih`
--

INSERT INTO `t_pemilih` (`nis`, `periode`) VALUES
('2155', '2016/2017'),
('2155', '2019/2020'),
('1234', '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_soal`
--

CREATE TABLE `t_soal` (
  `no` int(11) NOT NULL,
  `soal` text NOT NULL,
  `a` varchar(1000) NOT NULL,
  `b` varchar(1000) NOT NULL,
  `c` varchar(1000) NOT NULL,
  `d` varchar(1000) NOT NULL,
  `kunci` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_soal`
--

INSERT INTO `t_soal` (`no`, `soal`, `a`, `b`, `c`, `d`, `kunci`) VALUES
(1, 'Siapa presiden pertama Indonesia', 'Soekarno', 'Suharto', 'Ki Hajar Dewantara', 'Megawati Soekarno Puteri', 'Soekarno'),
(2, 'Apa kepanjangan dari NKRI', 'Negara Kesatuan Rakyat Indonesia', 'Negara Kesatuan Republik Indonesia', 'Negara Kedaulatan Republik Indonesia', 'Negara Kekeluargaan Rakyat Indonesia', 'Negara Kesatuan Republik Indonesia'),
(3, '2 + 2 = ', '10:3', '8:4', '(2:2)x(2*2)', '7:3', '(2:2)x(2*2)'),
(4, 'UPI merupakan singkatan dari', 'Universitas Padahal IKIP', 'Universitas Pendidikan Indonesia', 'Universitas Pelawak Internasional', 'Semua Benar', 'Universitas Pendidikan Indonesia'),
(5, 'Siapa nama ayah Arum Yuniarsih', 'Ruman', 'Jajang', 'Dedi', 'Sarbini', 'Ruman'),
(6, 'Malaikat pencabut nyawa adalah malaikat', 'Izroil', 'Jibril', 'Mikail', 'Isrofil', 'Izroil'),
(7, 'asdasdasdasdas', 'd', 'd', 'd', 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(4) NOT NULL,
  `fullname` varchar(16) DEFAULT NULL,
  `id_kelas` varchar(3) DEFAULT NULL,
  `id_jbtn` varchar(10) NOT NULL,
  `jk` varchar(1) DEFAULT NULL,
  `pemilih` varchar(1) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_user`
--

INSERT INTO `t_user` (`id_user`, `fullname`, `id_kelas`, `id_jbtn`, `jk`, `pemilih`, `password`) VALUES
(1234, 'Fakih Burungliar', 'K02', '3', 'L', 'Y', '$2y$10$iMf2Wz5Kug0CXaTkOM/cQ.EDy2Ecb4zHZS3nsEA5pv49ULzyEmOCu'),
(2111, 'Birril Febriana', 'K01', '#', 'L', 'Y', '$2y$10$nBALS/mY93Br8Vwod7tXquZr0UYkyWLWVIEnGeKiYa5S5NZ18CmEm'),
(2121, 'Lulung Buaya Dar', 'K01', '2', 'L', NULL, '$2y$10$.OA1ZwoLy6i/5hyeeqjHTeHW1un9FWmn6MVO.IWjWxv0VukxwN.OW'),
(2132, 'Najwa Matahari', 'K01', '2', 'P', NULL, '$2y$10$fObUvZcKepk92fnS96idr.K69sY25eE7tKm/rL2TQ9J94VmveCafW'),
(2155, 'A. Jazuli Utsman', 'K01', '#', 'L', 'Y', '$2y$10$8mLVOdsXEuw6rOieichivuXsUceAqqX3rT27arohI5gWHATociVBy'),
(2156, 'Zuli', 'K01', '3', 'P', 'Y', '123'),
(3214, 'Obay Makanan', 'K01', '1', 'L', NULL, '$2y$10$8Fj3fgrbtRm9V7MBwVdLHOMS.dLuAafbkURpzVgOpuC.kaHzRuRyS'),
(4212, 'Afakih Apadaya', 'K01', '2', 'L', NULL, '$2y$10$Jm0favsOXhYirEqXcPgBLuE90IKQNNT49ieREJha10sIS4sQirFPK'),
(4321, 'Fani burungsangk', 'K02', '2', 'P', NULL, '$2y$10$lfrQtKXbHqDnAdfeu5Sgk.xsYaTQW8dV9iM7mO559SQZIyDq9RUn2'),
(9821, 'Agung Mukadua', 'K01', '2', 'P', NULL, '$2y$10$foumV7493K.Gg1Bt0MMUReJzohUB57Uduh7LGpc8aVRhAHwBfq.BW');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indeks untuk tabel `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `t_kandidat`
--
ALTER TABLE `t_kandidat`
  ADD PRIMARY KEY (`id_kandidat`);

--
-- Indeks untuk tabel `t_kelas`
--
ALTER TABLE `t_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `t_soal`
--
ALTER TABLE `t_soal`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `t_kandidat`
--
ALTER TABLE `t_kandidat`
  MODIFY `id_kandidat` smallint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `t_soal`
--
ALTER TABLE `t_soal`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
