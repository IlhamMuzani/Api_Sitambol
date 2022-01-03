<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kecamatan;
use App\Models\Kelurahan;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'ilham',
            'email' => 'ilham@gmail.com',
            'password' => 'ilham12345',
        ]);

        User::create([
            'name' => 'labib',
            'email' => 'labib@gmail.com',
            'password' => 'labib12345',
        ]);

        User::create([
            'name' => 'edo',
            'email' => 'edo@gmail.com',
            'password' => 'edo12345',
        ]);

        //Kecamatan

        Kecamatan::create([
            'nama' => 'Margadana',
        ]);

        Kecamatan::create([
            'nama' => 'Tegal Barat',
        ]);

        Kecamatan::create([
            'nama' => 'Tegal Selatan',
        ]);

        Kecamatan::create([
            'nama' => 'Tegal Timur',
        ]);

        Kecamatan::create([
            'nama' => 'Adiwerna',
        ]);

        Kecamatan::create([
            'nama' => 'Balapulang',
        ]);

        Kecamatan::create([
            'nama' => 'Bojong',
        ]);

        Kecamatan::create([
            'nama' => 'Bumijawa',
        ]);

        Kecamatan::create([
            'nama' => 'Dukuhturi',
        ]);

        Kecamatan::create([
            'nama' => 'Dukuhwaru',
        ]);

        Kecamatan::create([
            'nama' => 'Jatinegara',
        ]);

        Kecamatan::create([
            'nama' => 'Kedungbanteng',
        ]);

        Kecamatan::create([
            'nama' => 'Kramat',
        ]);

        Kecamatan::create([
            'nama' => 'Lebaksiu',
        ]);

        Kecamatan::create([
            'nama' => 'Margasari',
        ]);

        Kecamatan::create([
            'nama' => 'Pagerbarang',
        ]);

        Kecamatan::create([
            'nama' => 'Pangkah',
        ]);

        Kecamatan::create([
            'nama' => 'Slawi',
        ]);

        Kecamatan::create([
            'nama' => 'Suradadi',
        ]);

        Kecamatan::create([
            'nama' => 'Talang',
        ]);

        Kecamatan::create([
            'nama' => 'Tarub',
        ]);

        Kecamatan::create([
            'nama' => 'Warureja',
        ]);

        //Kelurahan Margadana

        Kelurahan::create([
            'kecamatan_id' => '1',
            'nama' => 'Cabawan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '1',
            'nama' => 'Kaligangsa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '1',
            'nama' => 'Kaliyamat Kulon'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '1',
            'nama' => 'Krandon'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '1',
            'nama' => 'Margadana'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '1',
            'nama' => 'Pesurungan Lor'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '1',
            'nama' => 'Sumurpanggang'
        ]);

        //Kelurahan Tegal Barat

        Kelurahan::create([
            'kecamatan_id' => '2',
            'nama' => 'Debong Lor'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '2',
            'nama' => 'Kemandungan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '2',
            'nama' => 'Kranton'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '2',
            'nama' => 'Muarareja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '2',
            'nama' => 'Pekauman'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '2',
            'nama' => 'Pesurungan Kidul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '2',
            'nama' => 'Tegalsari'
        ]);

        //Kecamatan Tegal Selatan

        Kelurahan::create([
            'kecamatan_id' => '3',
            'nama' => 'Bandung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '3',
            'nama' => 'Debong Kidul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '3',
            'nama' => 'Debong Tengah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '3',
            'nama' => 'Kaliyamat Wetan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '3',
            'nama' => 'Keturen'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '3',
            'nama' => 'Randugunting'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '3',
            'nama' => 'Tunon'
        ]);

        //Kecamatan Tegal Timur

        Kelurahan::create([
            'kecamatan_id' => '4',
            'nama' => 'Kejambon'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '4',
            'nama' => 'Mangkukusuman'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '4',
            'nama' => 'Mintaragen'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '4',
            'nama' => 'Panggung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '4',
            'nama' => 'Slerok'
        ]);

        //Kecamatan Adiwerna

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Adiwerna'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Bersole'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Gumalar'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Harjosari Kidul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Harjosari Lor'
        ]);
        
        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Kalimati'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Kaliwadas'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Kedungsukun'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Lemahduwur'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Lumingser'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Pagedangan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Pagiyanten'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Pecangakan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Pedeslohor'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Penarukan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Pesarean'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Tembok Benjaran'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Tembok Kidul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Tembok Lor'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Tembok Luwung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '5',
            'nama' => 'Ujurungsi'
        ]);

        //Kecamatan Balapulang

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Balapulang Kulon'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Balapulang Wetan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Banjar Anyar'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Batuagung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Bukateja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Cenggini'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Cibunar'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Colongok'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Danaraja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Danawarih'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Harjawinangun'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Kalibakung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Kaliwungu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Karangjambu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Pagerwangi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Pamiritan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Sangkanjaya'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Sesepan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Tembongwah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '6',
            'nama' => 'Weringin Jenggot'
        ]);

        //Kecamatan Bojong

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Batuyana'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Bojong'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Buniwah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Cikura'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Danasari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Dukuhtengah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Gunungjati'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Kajenengan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Kalijambu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Karangmulyo'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Kedawung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Lengkong'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Pucang Luwuk'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Rembul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Sangkanayu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Suniarsih'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '7',
            'nama' => 'Tuwel'
        ]);

        //Kecamatan Bumijawa

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Batumirah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Begawat'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Bumijawa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Carul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Cawitali'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Cempaka'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Cintamanik'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Dukuh Benda'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Guci'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Gunung Agung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Jejeg'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Muncanglarang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Pagerkasih'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Sigedong'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Sokasari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Sokatengah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Sumbaga'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Traju'
        ]);

        //Kecamatan Dukuhturi

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Bandasari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Debong Wetan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Dukuhturi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Grogol'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Kademangaran'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Karanganyar'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Kepandean'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Ketanggungan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Kupu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Lawatan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Pagongan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Pekauman Kulon'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Pengabean'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Pengarasan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Pepedan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Sidakaton'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Sidapurna'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '9',
            'nama' => 'Sutapranan'
        ]);

        //Kecamatan Dukuhwaru

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Blubuk'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Bulakpacing'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '8',
            'nama' => 'Dukuhwaru'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Gumayun'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Kabunan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Kalisoka'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Pedagangan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Selapura'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Sindang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '10',
            'nama' => 'Slarang Lor'
        ]);

        //Kecamatan Jatinegara

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Argatawang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Capar'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Cerih'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Dukuhbangsa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Gantungan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Jatinegara'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Kedungwungu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Lebakwangi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Lembahsari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Luwijawa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Mokaha'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Padasari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Penyalahan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Setail'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Sumbarang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'Tamansari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '11',
            'nama' => 'WotGalih'
        ]);

        //Kecamatan KedungBanteng

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'Dukuhjati Wetan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'Karanganyar'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'karangmalang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'Kebandingan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'kedungbanteng'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'Margamulya'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'Penujah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'Semedo'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'Sumingkir'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '12',
            'nama' => 'Tonggara'
        ]);

        //Kecamatan Kramat

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Babakan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Bangungalih'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Bongkok'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Dinuk'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Jatilawang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Kemantran'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Kemuning'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Kepunduhan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Kertaharja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Kertayasa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Ketileng'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Kramat'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Maribaya'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Mejasem Barat'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Mejasem Timur'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Munjungagung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Padaharja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Plumbungan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Tanjungharja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '13',
            'nama' => 'Dampyak'
        ]);

        //Kecamatan Lebaksiu

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Balaradin'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Dukuhdamu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Dukuhlo'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Jatimulyo'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Kajen'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Kambangan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Kesuben'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Lebak Goak'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Lebaksiu Kidul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Lebaksiu Lor'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Pendawa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Slarang Kidul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Tegalandong'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Timbangreja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '14',
            'nama' => 'Yamansari'
        ]);

        //Kecamatan Margasari

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Danaraja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Dukuh Tengah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Jatilaba'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Jembayat'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Kaligayam'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Kalisalak'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Larangdawa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Marga Ayu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Margasari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Pakulaut'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Prupuk Selatan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Prupuk Utara'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '15',
            'nama' => 'Wanasari'
        ]);

        //Kecamatan Pagerbarang

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Jatiwangi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Karanganyar'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Kedungsugih'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Kertaharja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Mulyoharjo'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Pagerbarang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Pesarean'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Rajegwesi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Randusari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Semboja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Sido Mulyo'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Srengseng'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '16',
            'nama' => 'Surokidul'
        ]);

        //Kecamatan Pangkah

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Balamoa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Bedug'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Bogares Kidul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Curug'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Depok'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Dermasandi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Dermasuci'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Dukuhjati Kidul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Dukuhsembung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Grobog Kulon'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Grobog Wetan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Jenggawur'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Kalikangkung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Kendalserut'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Paketiban'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Pangkah'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Pecabean'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Pener'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Penusupan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Purbayasa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Rancawiru'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '17',
            'nama' => 'Talok'
        ]);

        //Kecamatan Slawi

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Dukuhsalam'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Dukuhwringin'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Kalisapu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Slawi Kulon'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Trayeman'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Kagok'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Kudaile'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Pakembaran'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Procot'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '18',
            'nama' => 'Slawi Wetan'
        ]);

        //Kecamatan Suradadi

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Bojongsana'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Gembongdadi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Harjasari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Jatibogor'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Jatimulya'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Karangmulya'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Karangwuluh'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Kertasari'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Purwahamba'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Sidaharja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '19',
            'nama' => 'Suradadi'
        ]);

        //Kecamatan Talang

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Bengle'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Cangkring'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Dawuhan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Dukuhmalang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Gembong Kulon'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Getaskerep'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Kajen'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Kaladawa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Kaligayam'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Kebasen'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Langgen'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Pacul'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Pasangan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Pegirkan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Pekiringan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Pesayangan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Talang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Tegalwangi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '20',
            'nama' => 'Wangandawa'
        ]);

        //Kecamatan Tarub

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Brekat'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Bulakwaru'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Bumuharja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Jatirawa'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Kabukan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Kalijambe'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Karangjati'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Karangmangu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Kedokansayang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Kedungbungkus'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Kemanganggungan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Kesadikan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Kesamiran'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Lebeteng'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Mangunsaren'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Margapadang'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Mindaka'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Purbasana'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Setu'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '21',
            'nama' => 'Tarub'
        ]);

        //Kecamatan Warureja

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Banjaragung'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Banjarturi'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Demangharja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Kedungjati'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Kedungkelor'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Kedayakan'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Kreman'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Rangimulya'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Sidamulya'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Sigentong'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Sukareja'
        ]);

        Kelurahan::create([
            'kecamatan_id' => '22',
            'nama' => 'Warureja'
        ]);
    }
}
