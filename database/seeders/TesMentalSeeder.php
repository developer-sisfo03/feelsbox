<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tesMental;

class TesMentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        tesMental::create([
            'nomor_soal' => '1',
            'soal' => 'Sakit Kepala',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '2',
            'soal' => 'Kurang nafsu makan',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '3',
            'soal' => 'Tidur tidak nyenyak',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '4',
            'soal' => 'Mudah takut',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '5',
            'soal' => 'Cemas, tegang, khawatir',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '6',
            'soal' => 'Tangan gemetar',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '7',
            'soal' => 'Pencernaan terganggu',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '8',
            'soal' => 'Sulit berpikir jernih',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '9',
            'soal' => 'Tidak merasa bahagia',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '10',
            'soal' => 'Lebih sering menangis',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '11',
            'soal' => 'Sulit menikmati kegiatan',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '12',
            'soal' => 'Sulit meangambil keputusan',
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '13',
            'soal' => 'Pekerjaan sehari-hari terganggu',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '14',
            'soal' => 'Tidak mampu berperan aktif dalam kehidupan',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '15',
            'soal' => 'Kehilangan gairah/minat',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '16',
            'soal' => 'Merasa tidak berharga',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '17',
            'soal' => 'Berpikir untuk bunuh diri',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '18',
            'soal' => 'Selalu merasa lelah',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '19',
            'soal' => 'Merasa tak nyaman diperut',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '20',
            'soal' => 'Mudah lelah',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '21',
            'soal' => 'Minum alkohol/NAPZA',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '22',
            'soal' => 'Merasa ada yang akan mencelakai',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '23',
            'soal' => 'Merasa ada yang menganggu pikiran',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '24',
            'soal' => 'Mendengar suara yang tidak terdengar oleh orang lain',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '25',
            'soal' => 'Mimpi musibah atau seakan mengalami kembali',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '26',
            'soal' => 'Menghindari kegiatan/tempat/orang/pikiran yang mengingatkan musibah',         
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '27',
            'soal' => 'Kurang tertarik pada teman/kegiatan sehari-hari',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '28',
            'soal' => 'Sedih apabila mengingat musibah tersebut',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '29',
            'soal' => 'Sulit mengeluarkan/menghayati perasaan',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-awareness',
        ]);

        tesMental::create([
            'nomor_soal' => '30',
            'soal' => 'Sedih dan murung hampir setiap waktu',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '31',
            'soal' => 'Kehilangan minat dan kesenangan hampir seluruh kegiatan',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '32',
            'soal' => 'Tidak berharga, mudah lelah dan aktivitas menurun',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '33',
            'soal' => 'Gangguan pola makan',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '34',
            'soal' => 'Gangguan tidur',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '35',
            'soal' => 'Gelisah atau lamban',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '36',
            'soal' => 'Percaya diri dan harga diri menurun',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '37',
            'soal' => 'Sulit konsentrasi dan mengambil keputusan',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '38',
            'soal' => 'Merasa bersalah, tidak berguna dan putus asa',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '39',
            'soal' => 'Berpikir tentang kematian atau bunuh diri',            
            'opsi_1' => 'Ya',
            'opsi_2' => 'Tidak',
            'indikator' => 'self-diagnose',
        ]);

        tesMental::create([
            'nomor_soal' => '40',
            'soal' => 'Apakah kamu mengalami sedih yang berkepenjangan?',            
            'opsi_1' => 'Saya tidak merasa sedih',
            'opsi_2' => 'Saya merasa sedih',
            'opsi_3' => 'Saya sedih sepanjang waktu dan tidak dapat menghilangkannya',
            'opsi_4' => ' Saya begitu sedih sehingga merasa tidak tahan lagi',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '41',
            'soal' => 'Apa kamu merasa berkecil hati terhadap masa depan?',
            'opsi_1' => '(0) Saya tidak merasa berkecil hati',
            'opsi_2' => '(1) Saya merasa berkecil hati',
            'opsi_3' => '(2) Saya merasa tidak ada sesuatu yang saya nantikan',
            'opsi_4' => '(3) Saya merasa tidak ada harapan dan segala sesuatu tak dapat diperbaiki',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '42',
            'soal' => 'Apakah kamu merasa gagal?',
            'opsi_1' => '(0) Saya tidak merasa gagal',
            'opsi_2' => '(1) Saya merasa lebih banyak mengalami kegagalan dari rata-rata orang lain',
            'opsi_3' => '(2) Kalau meninjau kembali kehidupan saya, yang dapat dilihat hanyalah kegagalan',
            'opsi_4' => '(3) Saya merasa gagal total',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '43',
            'soal' => 'Apakah kamu mendapatkan suatu kepuasan/kenikmatan dari apa yang kamu lakukan?',
            'opsi_1' => '(0) Saya mendapatkan kepuasan sebanyak yang biasa saya lakukan',
            'opsi_2' => '(1) Saya tidak menikmati hal-hal seperti dulu',
            'opsi_3' => '(2) Saya tidak mendapatkan kepuasan nyata dari apapun lagi',
            'opsi_4' => '(3) Saya tidak puas/bosan dengan semuanya',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '44',
            'soal' => 'Apa kamu merasa sangat bersalah akan sesuatu?',
            'opsi_1' => '(0) Saya tidak merasa sangat bersalah',
            'opsi_2' => '(1) Saya terkadang merasa bersalah',
            'opsi_3' => '(2) Saya sering merasa bersalah',
            'opsi_4' => '(3) Saya selalu merasa bersalah sepanjang waktu',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '45',
            'soal' => 'Apa kamu merasa kondisi yang kamu alami saat ini merupakan hukuman untuk kamu?',
            'opsi_1' => '(0) Saya tidak merasa sedang dihukum',
            'opsi_2' => '(1) Saya merasa bahwa saya mungkin dihukum',
            'opsi_3' => '(2) Saya mengharapkan agar saya dihukum',
            'opsi_4' => '(3) Saya merasa bahwa saya sedang dihukum',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '46',
            'soal' => 'Apakah kamu pernah menyalahkan diri sendiri?',
            'opsi_1' => '(0) Saya tidak merasa lebih buruk dari orang lain',
            'opsi_2' => '(1) Saya selalu mencela diri sendiri karena kelemahan/kekeliruan saya',
            'opsi_3' => '(2) Saya menyalahkan diri sendiri sepanjang waktu atas kesalahan sendiri sepanjang waktu',
            'opsi_4' => '(3) Saya menyalahkan diri sendiri sepanjang waktu atas semua hal buruk yang terjadi',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '47',
            'soal' => 'Apakah kamu pernah menyalahkan orang lain?',
            'opsi_1' => '(0) Saya tidak pernah menyalahkan orang lain',
            'opsi_2' => '(1) Saya pernah menyalahkan orang lain karena kelemahan/kekeliruan saya',
            'opsi_3' => '(2) Saya pernah menyalahkan orang lain sepanjang waktu atas kesalahan saya',
            'opsi_4' => '(3) Saya pernah menyalahkan orang lain sepanjang waktu atas semua hal buruk yang terjadi',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '48',
            'soal' => 'Apa kamu merasa kecewa dengan diri sendiri?',
            'opsi_1' => '(0) Saya tidak kecewa',
            'opsi_2' => '(1) Saya kecewa',
            'opsi_3' => '(2) Saya merasa jijik terhadap diri sendiri',
            'opsi_4' => '(3) Saya membenci diri sendiri',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '49',
            'soal' => 'Apa kamu pernah berpikiran untuk bunuh diri?',
            'opsi_1' => '(0) Saya tidak mempunyai pikiran seperti itu',
            'opsi_2' => '(1) Saya pernah berpikiran, tapi tidak akan melakukannya',
            'opsi_3' => '(2) Saya ingin bunuh diri',
            'opsi_4' => '(3) Saya akan bunuh diri jika ada kesempatan',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '50',
            'soal' => 'Apa kamu sering menangis?',
            'opsi_1' => '(0) Saya tidak menangis lebih dari biasanya',
            'opsi_2' => '(1) Saya lebih banyak menangis dari biasanya',
            'opsi_3' => '(2) Saya menangis sepanjang waktu',
            'opsi_4' => '(3) Saya biasanya dapat menangis, tetapi sekarang sudah tidak dapat menangis walaupun ingin menangis',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '51',
            'soal' => 'Apa kamu mudah marah?',
            'opsi_1' => '(0) Saya tidak merasa lebih mudah marah dari sebelumnya',
            'opsi_2' => '(1) Saya lebih mudah marah/jengkel dari biasanya',
            'opsi_3' => '(2) Saya sekarang merasa jengkel sepanjang waktu',
            'opsi_4' => '(3) Saya tidak jengkel oleh hal-hal yang biasanya menjengkelkan',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '52',
            'soal' => 'Apakah kamu senang bergaul?',
            'opsi_1' => '(0) Saya masih senang bergaul dengan orang lain',
            'opsi_2' => '(1) Saya kurang berminat pada orang lain dibandingkan biasanya',
            'opsi_3' => '(2) Saya kehilangan sebagian besar minat pada orang lain',
            'opsi_4' => '(3) Saya kehilangan seluruh minat pada orang lain',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '53',
            'soal' => 'Apakah kamu dapat mengambil keputusan dengan baik?',
            'opsi_1' => '(0) Saya mengambil keputusan dengan sama baiknya seperti sebelumnya',
            'opsi_2' => '(1) Saya lebih banyak menunda keputusan dari biasanya',
            'opsi_3' => '(2) Saya mempunyai kesulitan yang lebih besar dari sebelumnya',
            'opsi_4' => '(3) Saya sama sekali tidak dapat mengambil keputusan',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '54',
            'soal' => 'Apakah kamu merasa ada yang berubah dari penampilanmu?',
            'opsi_1' => '(0) Saya tidak merasa lebih buruk dari sebelumnya',
            'opsi_2' => '(1) Saya cemas, jangan-jangan saya sudah tidak tua dan tidak menarik',
            'opsi_3' => '(2) Saya merasa ada perubahan dalam penampilan sehingga tidak menarik',
            'opsi_4' => '(3) Saya yakin terlihat buruk',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '55',
            'soal' => 'Apakah kamu dapat bekerja dengan baik?',
            'opsi_1' => '(0) Saya dapat bekerja dengan baik seperti sebelumnya',
            'opsi_2' => '(1) Saya membutuhkan usaha keras untuk memulai mengerjakan sesuatu',
            'opsi_3' => '(2) Saya harus memaksakan diri untuk mengerjakan sesuatu',
            'opsi_4' => '(3) Saya sama sekali tidak dapat mengerjakan apa-apa',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '56',
            'soal' => 'Apa kamu dapat tidur dengan nyenyak?',
            'opsi_1' => '(0) Saya dapat tidur nyenyak seperti biasanya',
            'opsi_2' => '(1) Saya tidak dapat tidur nyenyak seperti biasanya',
            'opsi_3' => '(2) Saya bangun lebih awal dari biasanya dan sulit untuk tidur kembali',
            'opsi_4' => '(3) Saya bangun beberapa jam lebih awal dari biasanya dan tidak bisa tidur kembali',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '57',
            'soal' => 'Apa kamu mudah lelah?',
            'opsi_1' => '(0) Saya tidak lebih lelah dari biasanya',
            'opsi_2' => '(1) Saya lebih mudah lelah dari biasanya',
            'opsi_3' => '(2) Saya hampir selalu merasa lelah dalam mengerjakan sesuatu',
            'opsi_4' => '(3) Saya merasa terlalu lelah untuk mengerjakan apa saja',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '58',
            'soal' => 'Apakah nafsu makanmu berkurang?',
            'opsi_1' => '(0) Masih seperti biasanya',
            'opsi_2' => '(1) Tidak sebesar biasanya',
            'opsi_3' => '(2) Nafsu makan jauh lebih berkurang',
            'opsi_4' => '(3) Tidak mempunyai nafsu makan sama sekali',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '59',
            'soal' => 'Apakah berat badanmu menurun?',
            'opsi_1' => '(0) Saya tidak banyak kehilangan berat badan',
            'opsi_2' => '(1) Kehilangan berat badan >2.5 kg',
            'opsi_3' => '(2) Kehilangan berat badan >5 kg',
            'opsi_4' => '(3) Kehilangan berat badan >7.5 kg',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        tesMental::create([
            'nomor_soal' => '60',
            'soal' => 'Apa kamu mencemaskan kesehatan fisikmu?',
            'opsi_1' => '(0) Saya tidak cemas',
            'opsi_2' => '(1) Saya mencemaskan kesehatan fisik saya; rasa nyeri seperti sakit perut/sembelit',
            'opsi_3' => '(2) Saya sangat cemas sehingga sulit memikirkan hal lainnya',
            'opsi_4' => '(3) Saya begitu cemas sehingga tak dapat berpikir hal lain',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

        // Apakah gairah seksualmu menurun?
        tesMental::create([
            'nomor_soal' => '61',
            'soal' => 'Apakah gairah seksualmu menurun?',
            'opsi_1' => '(0) Saya merasa tidak ada perubahan',
            'opsi_2' => '(1) Saya kurang berminat dibandingkan biasanya',
            'opsi_3' => '(2) Sekarang, saya sangat kurang berminat',
            'opsi_4' => '(3) Saya sama sekali kehilangan minat',
            'point_1' => '0',
            'point_2' => '1',
            'point_3' => '2',
            'point_4' => '3',
            'indikator' => 'BDI',
        ]);

    }
}
