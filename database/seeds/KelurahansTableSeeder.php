<?php

use Illuminate\Database\Seeder;

class KelurahansTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $kelurahan = [
      ['nama' => 'Sungai Musang', 'kecamatan_id' => 1],
      ['nama' => 'Bakambat', 'kecamatan_id' => 1],
      ['nama' => 'Labat Muara', 'kecamatan_id' => 1],
      ['nama' => 'Tanipah', 'kecamatan_id' => 1],
      ['nama' => 'Pemurus', 'kecamatan_id' => 1],
      ['nama' => 'Bunipah', 'kecamatan_id' => 1],
      ['nama' => 'Simpang Warga Dalam', 'kecamatan_id' => 1],
      ['nama' => 'Pulantan', 'kecamatan_id' => 1],
      ['nama' => 'Aluh-Aluh Besar', 'kecamatan_id' => 1],
      ['nama' => 'Simpang Warga', 'kecamatan_id' => 1],
      ['nama' => 'Balimau', 'kecamatan_id' => 1],
      ['nama' => 'Aluh Aluh Kecil', 'kecamatan_id' => 1],
      ['nama' => 'Aluh Aluh Kecil Muara', 'kecamatan_id' => 1],
      ['nama' => 'Podok', 'kecamatan_id' => 1],
      ['nama' => 'Terapu', 'kecamatan_id' => 1],
      ['nama' => 'Kuin Besar', 'kecamatan_id' => 1],
      ['nama' => 'Handil Bujur', 'kecamatan_id' => 1],
      ['nama' => 'Handil Baru', 'kecamatan_id' => 1],
      ['nama' => 'Kuin Kecil', 'kecamatan_id' => 1],
      ['nama' => 'Pindahan Baru', 'kecamatan_id' => 2],
      ['nama' => 'Haur Kuning', 'kecamatan_id' => 2],
      ['nama' => 'Selat Makmur', 'kecamatan_id' => 2],
      ['nama' => 'Kampung Baru', 'kecamatan_id' => 2],
      ['nama' => 'Tambak Padi', 'kecamatan_id' => 2],
      ['nama' => 'Lawahan', 'kecamatan_id' => 2],
      ['nama' => 'Babirik', 'kecamatan_id' => 2],
      ['nama' => 'Jambu Raya', 'kecamatan_id' => 2],
      ['nama' => 'Handil Purai', 'kecamatan_id' => 2],
      ['nama' => 'Muara Halayung', 'kecamatan_id' => 2],
      ['nama' => 'Jambu Burung', 'kecamatan_id' => 2],
      ['nama' => 'Rumpiang', 'kecamatan_id' => 2],
      ['nama' => 'Sungai Kupang', 'kecamatan_id' => 3],
      ['nama' => 'Keladan Baru', 'kecamatan_id' => 3],
      ['nama' => 'Guntung Ujung', 'kecamatan_id' => 3],
      ['nama' => 'Guntung Papuyu', 'kecamatan_id' => 3],
      ['nama' => 'Makmur', 'kecamatan_id' => 3],
      ['nama' => 'Tambak Sirang Darat', 'kecamatan_id' => 3],
      ['nama' => 'Tambak Sirang Baru', 'kecamatan_id' => 3],
      ['nama' => 'Tambak Sirang Laut', 'kecamatan_id' => 3],
      ['nama' => 'Malintang', 'kecamatan_id' => 3],
      ['nama' => 'Malintang Baru', 'kecamatan_id' => 3],
      ['nama' => 'Kayu Bawang', 'kecamatan_id' => 3],
      ['nama' => 'Gambut', 'kecamatan_id' => 3],
      ['nama' => 'Banyu Hirang', 'kecamatan_id' => 3],
      ['nama' => 'Gambut Barat', 'kecamatan_id' => 3],
      ['nama' => 'Tatah Pemangkih Laut', 'kecamatan_id' => 4],
      ['nama' => 'Tatah Belayung Baru', 'kecamatan_id' => 4],
      ['nama' => 'Pasar Kemis', 'kecamatan_id' => 4],
      ['nama' => 'Banua Hanyar', 'kecamatan_id' => 4],
      ['nama' => 'Mekar Raya', 'kecamatan_id' => 4],
      ['nama' => 'Sungai Lakum', 'kecamatan_id' => 4],
      ['nama' => 'Mandar Sari', 'kecamatan_id' => 4],
      ['nama' => 'Manarap Baru', 'kecamatan_id' => 4],
      ['nama' => 'Manarap Tengah', 'kecamatan_id' => 4],
      ['nama' => 'Manarap Lama', 'kecamatan_id' => 4],
      ['nama' => 'Simpang Empat', 'kecamatan_id' => 4],
      ['nama' => 'Kertak Hanyar Ii', 'kecamatan_id' => 4],
      ['nama' => 'Kertak Hanyar I', 'kecamatan_id' => 4],
      ['nama' => 'Tatah Bangkal', 'kecamatan_id' => 5],
      ['nama' => 'Tatah Bangkaltengah', 'kecamatan_id' => 5],
      ['nama' => 'Layap Baru', 'kecamatan_id' => 5],
      ['nama' => 'Tampang Awang', 'kecamatan_id' => 5],
      ['nama' => 'Tatah Pemangkih Darat', 'kecamatan_id' => 5],
      ['nama' => 'Pemangkih Baru', 'kecamatan_id' => 5],
      ['nama' => 'Jaruju Laut', 'kecamatan_id' => 5],
      ['nama' => 'Tatah Jaruju', 'kecamatan_id' => 5],
      ['nama' => 'Tatah Pemangkih Tengah', 'kecamatan_id' => 5],
      ['nama' => 'Taibah Raya', 'kecamatan_id' => 5],
      ['nama' => 'Tatah Layap', 'kecamatan_id' => 5],
      ['nama' => 'Mekar Sari', 'kecamatan_id' => 5],
      ['nama' => 'Pandan Sari', 'kecamatan_id' => 5],
      ['nama' => 'Sungai Lulut', 'kecamatan_id' => 6],
      ['nama' => 'Gudang Hirang', 'kecamatan_id' => 6],
      ['nama' => 'Pematang Panjang', 'kecamatan_id' => 6],
      ['nama' => 'Gudang Tengah', 'kecamatan_id' => 6],
      ['nama' => 'Abumbun Jaya', 'kecamatan_id' => 6],
      ['nama' => 'Sungai Tabuk Kota', 'kecamatan_id' => 6],
      ['nama' => 'Sungai Tabuk Keramat', 'kecamatan_id' => 6],
      ['nama' => 'Pemakuan', 'kecamatan_id' => 6],
      ['nama' => 'Sungai Pinang Lama', 'kecamatan_id' => 6],
      ['nama' => 'Lok Baintan', 'kecamatan_id' => 6],
      ['nama' => 'Sungai Bakung', 'kecamatan_id' => 6],
      ['nama' => 'Sungai Tandipah', 'kecamatan_id' => 6],
      ['nama' => 'Paku Alam', 'kecamatan_id' => 6],
      ['nama' => 'Lok Baintan Dalam', 'kecamatan_id' => 6],
      ['nama' => 'Sungai Pinang Baru', 'kecamatan_id' => 6],
      ['nama' => 'Pembantanan', 'kecamatan_id' => 6],
      ['nama' => 'Lokbuntar', 'kecamatan_id' => 6],
      ['nama' => 'Pejambuan', 'kecamatan_id' => 6],
      ['nama' => 'Sungai Bangkal', 'kecamatan_id' => 6],
      ['nama' => 'Keliling Benteng Ilir', 'kecamatan_id' => 6],
      ['nama' => 'Tajau Landung', 'kecamatan_id' => 6],
      ['nama' => 'Cindai Alus', 'kecamatan_id' => 7],
      ['nama' => 'Sungai Sipai', 'kecamatan_id' => 7],
      ['nama' => 'Sungai Paring', 'kecamatan_id' => 7],
      ['nama' => 'Jawa', 'kecamatan_id' => 7],
      ['nama' => 'Tanjung Rema Darat', 'kecamatan_id' => 7],
      ['nama' => 'Indra Sari', 'kecamatan_id' => 7],
      ['nama' => 'Labuan Tabu', 'kecamatan_id' => 7],
      ['nama' => 'Bincau', 'kecamatan_id' => 7],
      ['nama' => 'Tambak Baru', 'kecamatan_id' => 7],
      ['nama' => 'Bincau Muara', 'kecamatan_id' => 7],
      ['nama' => 'Tunggul Irang', 'kecamatan_id' => 7],
      ['nama' => 'Tunggul Irang Ulu', 'kecamatan_id' => 7],
      ['nama' => 'Tanjung Rema', 'kecamatan_id' => 7],
      ['nama' => 'Jawa Laut', 'kecamatan_id' => 7],
      ['nama' => 'Tunggul Irang Ilir', 'kecamatan_id' => 7],
      ['nama' => 'Murung Keraton', 'kecamatan_id' => 7],
      ['nama' => 'Keraton', 'kecamatan_id' => 7],
      ['nama' => 'Pasayangan Utara', 'kecamatan_id' => 7],
      ['nama' => 'Pasayangan Selatan', 'kecamatan_id' => 7],
      ['nama' => 'Pasayangan Barat', 'kecamatan_id' => 7],
      ['nama' => 'Pesayangan', 'kecamatan_id' => 7],
      ['nama' => 'Murung Kenanga', 'kecamatan_id' => 7],
      ['nama' => 'Tambak Baru Ilir', 'kecamatan_id' => 7],
      ['nama' => 'Tambak Baru Ulu', 'kecamatan_id' => 7],
      ['nama' => 'Tungkaran', 'kecamatan_id' => 7],
      ['nama' => 'Sekumpul', 'kecamatan_id' => 7],
      ['nama' => 'Antasan Senor Ilir', 'kecamatan_id' => 8],
      ['nama' => 'Antasan Senor', 'kecamatan_id' => 8],
      ['nama' => 'Tambak Anyar Ilir', 'kecamatan_id' => 8],
      ['nama' => 'Tambak Anyar', 'kecamatan_id' => 8],
      ['nama' => 'Tambak Anyar Ulu', 'kecamatan_id' => 8],
      ['nama' => 'Pematang Baru', 'kecamatan_id' => 8],
      ['nama' => 'Melayu Ulu', 'kecamatan_id' => 8],
      ['nama' => 'Mekar', 'kecamatan_id' => 8],
      ['nama' => 'Pekauman Ulu', 'kecamatan_id' => 8],
      ['nama' => 'Pekauman', 'kecamatan_id' => 8],
      ['nama' => 'Pekauman Dalam', 'kecamatan_id' => 8],
      ['nama' => 'Keramat Baru', 'kecamatan_id' => 8],
      ['nama' => 'Keramat', 'kecamatan_id' => 8],
      ['nama' => 'Melayu Tengah', 'kecamatan_id' => 8],
      ['nama' => 'Melayu Ilir', 'kecamatan_id' => 8],
      ['nama' => 'Dalam Pagar Ulu', 'kecamatan_id' => 8],
      ['nama' => 'Akar Baru', 'kecamatan_id' => 8],
      ['nama' => 'Akar Bagantung Ulu', 'kecamatan_id' => 8],
      ['nama' => 'Dalam Pagar', 'kecamatan_id' => 8],
      ['nama' => 'Sungai Kitano', 'kecamatan_id' => 8],
      ['nama' => 'Penggalaman', 'kecamatan_id' => 9],
      ['nama' => 'Sungai Batang', 'kecamatan_id' => 9],
      ['nama' => 'Telok Selong Ulu', 'kecamatan_id' => 9],
      ['nama' => 'Telok Selong', 'kecamatan_id' => 9],
      ['nama' => 'Tangkas', 'kecamatan_id' => 9],
      ['nama' => 'Sungai Batang Ilir', 'kecamatan_id' => 9],
      ['nama' => 'Sungai Rangas Ulu', 'kecamatan_id' => 9],
      ['nama' => 'Sungai Rangas Hambuku', 'kecamatan_id' => 9],
      ['nama' => 'Sungai Rangas Tengah', 'kecamatan_id' => 9],
      ['nama' => 'Sungai Rangas', 'kecamatan_id' => 9],
      ['nama' => 'Keliling Benteng Ulu', 'kecamatan_id' => 9],
      ['nama' => 'Keliling Benteng Tengah', 'kecamatan_id' => 9],
      ['nama' => 'Antasan Sutun', 'kecamatan_id' => 9],
      ['nama' => 'Pingaran Ilir', 'kecamatan_id' => 10],
      ['nama' => 'Pingaran Ulu', 'kecamatan_id' => 10],
      ['nama' => 'Banua Anyar Danau Salak', 'kecamatan_id' => 10],
      ['nama' => 'Astambul Seberang', 'kecamatan_id' => 10],
      ['nama' => 'Astambul', 'kecamatan_id' => 10],
      ['nama' => 'Jati', 'kecamatan_id' => 10],
      ['nama' => 'Danau Salak', 'kecamatan_id' => 10],
      ['nama' => 'Pasar Jati', 'kecamatan_id' => 10],
      ['nama' => 'Sungai Alat', 'kecamatan_id' => 10],
      ['nama' => 'Sungai Tuan Ulu', 'kecamatan_id' => 10],
      ['nama' => 'Sungai Tuan Ilir', 'kecamatan_id' => 10],
      ['nama' => 'Benua Anyar', 'kecamatan_id' => 10],
      ['nama' => 'Tambangan', 'kecamatan_id' => 10],
      ['nama' => 'Kelampaian Ilir', 'kecamatan_id' => 10],
      ['nama' => 'Munggu Raya', 'kecamatan_id' => 10],
      ['nama' => 'Kalampayan', 'kecamatan_id' => 10],
      ['nama' => 'Kalampayan Ulu', 'kecamatan_id' => 10],
      ['nama' => 'Limamar', 'kecamatan_id' => 10],
      ['nama' => 'Lokgabang', 'kecamatan_id' => 10],
      ['nama' => 'Kaliukan', 'kecamatan_id' => 10],
      ['nama' => 'Tambak Danau', 'kecamatan_id' => 10],
      ['nama' => 'Pematang Hambawang', 'kecamatan_id' => 10],
      ['nama' => 'Kiram', 'kecamatan_id' => 11],
      ['nama' => 'Mandi Angin Barat', 'kecamatan_id' => 11],
      ['nama' => 'Mandi Angin Timur', 'kecamatan_id' => 11],
      ['nama' => 'Awang Bangkal Barat', 'kecamatan_id' => 11],
      ['nama' => 'Awang Bangkal Timur', 'kecamatan_id' => 11],
      ['nama' => 'Mandi Kapau Timur', 'kecamatan_id' => 11],
      ['nama' => 'Mandi Kapau Barat', 'kecamatan_id' => 11],
      ['nama' => 'Pulau Nyiur', 'kecamatan_id' => 11],
      ['nama' => 'Sungai Asam', 'kecamatan_id' => 11],
      ['nama' => 'Sungai Alang', 'kecamatan_id' => 11],
      ['nama' => 'Sungai Landas', 'kecamatan_id' => 11],
      ['nama' => 'Padang Panjang', 'kecamatan_id' => 11],
      ['nama' => 'Penyambaran', 'kecamatan_id' => 11],
      ['nama' => 'Lihung', 'kecamatan_id' => 11],
      ['nama' => 'Karang Intan', 'kecamatan_id' => 11],
      ['nama' => 'Pasar Lama', 'kecamatan_id' => 11],
      ['nama' => 'Pandak Daun', 'kecamatan_id' => 11],
      ['nama' => 'Jingah Habang Ulu', 'kecamatan_id' => 11],
      ['nama' => 'Jingah Habang Ilir', 'kecamatan_id' => 11],
      ['nama' => 'Sungai Arfat', 'kecamatan_id' => 11],
      ['nama' => 'Mali Mali', 'kecamatan_id' => 11],
      ['nama' => 'Loktangga', 'kecamatan_id' => 11],
      ['nama' => 'Sungai Besar', 'kecamatan_id' => 11],
      ['nama' => 'Bi\'Ih', 'kecamatan_id' => 11],
      ['nama' => 'Balau', 'kecamatan_id' => 11],
      ['nama' => 'Abirau', 'kecamatan_id' => 11],
      ['nama' => 'Belangian', 'kecamatan_id' => 12],
      ['nama' => 'Paau', 'kecamatan_id' => 12],
      ['nama' => 'Kalaan', 'kecamatan_id' => 12],
      ['nama' => 'Tiwingan Baru', 'kecamatan_id' => 12],
      ['nama' => 'Aranio', 'kecamatan_id' => 12],
      ['nama' => 'Tiwingan Lama', 'kecamatan_id' => 12],
      ['nama' => 'Benua Riam', 'kecamatan_id' => 12],
      ['nama' => 'Artain', 'kecamatan_id' => 12],
      ['nama' => 'Bunglai', 'kecamatan_id' => 12],
      ['nama' => 'Apuai', 'kecamatan_id' => 12],
      ['nama' => 'Rantau Bujur', 'kecamatan_id' => 12],
      ['nama' => 'Rantau Balai', 'kecamatan_id' => 12],
      ['nama' => 'Hakim Makmur', 'kecamatan_id' => 13],
      ['nama' => 'Kahelaan', 'kecamatan_id' => 13],
      ['nama' => 'Sumber Baru', 'kecamatan_id' => 13],
      ['nama' => 'Sumber Harapan', 'kecamatan_id' => 13],
      ['nama' => 'Kupang Rejo', 'kecamatan_id' => 13],
      ['nama' => 'Sungai Pinang', 'kecamatan_id' => 13],
      ['nama' => 'Pakutik', 'kecamatan_id' => 13],
      ['nama' => 'Rantau Nangka', 'kecamatan_id' => 13],
      ['nama' => 'Rantau Bakula', 'kecamatan_id' => 13],
      ['nama' => 'Belimbing Lama', 'kecamatan_id' => 13],
      ['nama' => 'Belimbing Baru', 'kecamatan_id' => 13],
      ['nama' => 'Angkipih', 'kecamatan_id' => 14],
      ['nama' => 'Remo', 'kecamatan_id' => 14],
      ['nama' => 'Paramasan Bawah', 'kecamatan_id' => 14],
      ['nama' => 'Paramasan Atas', 'kecamatan_id' => 14],
      ['nama' => 'Maniapun', 'kecamatan_id' => 15],
      ['nama' => 'Lobang Baru', 'kecamatan_id' => 15],
      ['nama' => 'Loktunggul', 'kecamatan_id' => 15],
      ['nama' => 'Kertak Empat', 'kecamatan_id' => 15],
      ['nama' => 'Pengaron', 'kecamatan_id' => 15],
      ['nama' => 'Benteng', 'kecamatan_id' => 15],
      ['nama' => 'Lumpangi', 'kecamatan_id' => 15],
      ['nama' => 'Ati`Im', 'kecamatan_id' => 15],
      ['nama' => 'Alimukim', 'kecamatan_id' => 15],
      ['nama' => 'Antaraku', 'kecamatan_id' => 15],
      ['nama' => 'Panyiuran', 'kecamatan_id' => 15],
      ['nama' => 'Mangkauk', 'kecamatan_id' => 15],
      ['nama' => 'Madurejo', 'kecamatan_id' => 16],
      ['nama' => 'Batu Tanam', 'kecamatan_id' => 16],
      ['nama' => 'Gunung Batu', 'kecamatan_id' => 16],
      ['nama' => 'Baliangin', 'kecamatan_id' => 16],
      ['nama' => 'Batang Banyu', 'kecamatan_id' => 16],
      ['nama' => 'Sungai Lurus', 'kecamatan_id' => 16],
      ['nama' => 'Pasar Baru', 'kecamatan_id' => 16],
      ['nama' => 'Baru', 'kecamatan_id' => 17],
      ['nama' => 'Gunung Ulin', 'kecamatan_id' => 17],
      ['nama' => 'Sungai Jati', 'kecamatan_id' => 17],
      ['nama' => 'Takuti', 'kecamatan_id' => 17],
      ['nama' => 'Tanah Abang', 'kecamatan_id' => 17],
      ['nama' => 'Bawahan Pasar', 'kecamatan_id' => 17],
      ['nama' => 'Surian', 'kecamatan_id' => 17],
      ['nama' => 'Pematang Danau', 'kecamatan_id' => 17],
      ['nama' => 'Pasiraman', 'kecamatan_id' => 17],
      ['nama' => 'Bawahan Selan', 'kecamatan_id' => 17],
      ['nama' => 'Bawahan Seberang', 'kecamatan_id' => 17],
      ['nama' => 'Mangka Lawat', 'kecamatan_id' => 17],
      ['nama' => 'Mataraman', 'kecamatan_id' => 17],
      ['nama' => 'Simpang Tiga', 'kecamatan_id' => 17],
      ['nama' => 'Lok Tamu', 'kecamatan_id' => 17],
      ['nama' => 'Tanah Intan', 'kecamatan_id' => 18],
      ['nama' => 'Sungai Tabuk', 'kecamatan_id' => 18],
      ['nama' => 'Lokcantung', 'kecamatan_id' => 18],
      ['nama' => 'Cabi', 'kecamatan_id' => 18],
      ['nama' => 'Simpang Empat', 'kecamatan_id' => 18],
      ['nama' => 'Sungai Raya', 'kecamatan_id' => 18],
      ['nama' => 'Lawiran', 'kecamatan_id' => 18],
      ['nama' => 'Sungai Langsat', 'kecamatan_id' => 18],
      ['nama' => 'Paring Tali', 'kecamatan_id' => 18],
      ['nama' => 'Batu Balian', 'kecamatan_id' => 18],
      ['nama' => 'Sungkai', 'kecamatan_id' => 18],
      ['nama' => 'Pasar Lama', 'kecamatan_id' => 18],
      ['nama' => 'Sungkai Baru', 'kecamatan_id' => 18],
      ['nama' => 'Berkat Mulya', 'kecamatan_id' => 18],
      ['nama' => 'Paku', 'kecamatan_id' => 18],
      ['nama' => 'Keramat Mina', 'kecamatan_id' => 18],
      ['nama' => 'Cinta Puri', 'kecamatan_id' => 18],
      ['nama' => 'Surian', 'kecamatan_id' => 18],
      ['nama' => 'Simpang Lima', 'kecamatan_id' => 18],
      ['nama' => 'Sindang Jaya', 'kecamatan_id' => 18],
      ['nama' => 'Karya Makmur', 'kecamatan_id' => 18],
      ['nama' => 'Makmur Karya', 'kecamatan_id' => 18],
      ['nama' => 'Alalak Padang', 'kecamatan_id' => 18],
      ['nama' => 'Benua Anyar', 'kecamatan_id' => 18],
      ['nama' => 'Garis Hanyar', 'kecamatan_id' => 18],
      ['nama' => 'Sumber Sari', 'kecamatan_id' => 18],
      ['nama' => 'Telaga Baru', 'kecamatan_id' => 19],
      ['nama' => 'Loktanah', 'kecamatan_id' => 19],
      ['nama' => 'Rantau Bujur', 'kecamatan_id' => 19],
      ['nama' => 'Rampah', 'kecamatan_id' => 19],
    ];
    if (!DB::table('kelurahans')->count()) {
      DB::table('kelurahans')->insert($kelurahan);
    }
  }
}
