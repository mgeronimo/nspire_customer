<?php

use Illuminate\Database\Seeder;

class OcZoneTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oc_zone')->delete();
        
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 1,
                'country_id' => 1,
                'name' => 'Badakhshan',
                'code' => 'BDS',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 2,
                'country_id' => 1,
                'name' => 'Badghis',
                'code' => 'BDG',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 3,
                'country_id' => 1,
                'name' => 'Baghlan',
                'code' => 'BGL',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 4,
                'country_id' => 1,
                'name' => 'Balkh',
                'code' => 'BAL',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 5,
                'country_id' => 1,
                'name' => 'Bamian',
                'code' => 'BAM',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 6,
                'country_id' => 1,
                'name' => 'Farah',
                'code' => 'FRA',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 7,
                'country_id' => 1,
                'name' => 'Faryab',
                'code' => 'FYB',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 8,
                'country_id' => 1,
                'name' => 'Ghazni',
                'code' => 'GHA',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 9,
                'country_id' => 1,
                'name' => 'Ghowr',
                'code' => 'GHO',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 10,
                'country_id' => 1,
                'name' => 'Helmand',
                'code' => 'HEL',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 11,
                'country_id' => 1,
                'name' => 'Herat',
                'code' => 'HER',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 12,
                'country_id' => 1,
                'name' => 'Jowzjan',
                'code' => 'JOW',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 13,
                'country_id' => 1,
                'name' => 'Kabul',
                'code' => 'KAB',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 14,
                'country_id' => 1,
                'name' => 'Kandahar',
                'code' => 'KAN',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 15,
                'country_id' => 1,
                'name' => 'Kapisa',
                'code' => 'KAP',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 16,
                'country_id' => 1,
                'name' => 'Khost',
                'code' => 'KHO',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 17,
                'country_id' => 1,
                'name' => 'Konar',
                'code' => 'KNR',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 18,
                'country_id' => 1,
                'name' => 'Kondoz',
                'code' => 'KDZ',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 19,
                'country_id' => 1,
                'name' => 'Laghman',
                'code' => 'LAG',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 20,
                'country_id' => 1,
                'name' => 'Lowgar',
                'code' => 'LOW',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 21,
                'country_id' => 1,
                'name' => 'Nangrahar',
                'code' => 'NAN',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 22,
                'country_id' => 1,
                'name' => 'Nimruz',
                'code' => 'NIM',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 23,
                'country_id' => 1,
                'name' => 'Nurestan',
                'code' => 'NUR',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 24,
                'country_id' => 1,
                'name' => 'Oruzgan',
                'code' => 'ORU',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 25,
                'country_id' => 1,
                'name' => 'Paktia',
                'code' => 'PIA',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 26,
                'country_id' => 1,
                'name' => 'Paktika',
                'code' => 'PKA',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 27,
                'country_id' => 1,
                'name' => 'Parwan',
                'code' => 'PAR',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 28,
                'country_id' => 1,
                'name' => 'Samangan',
                'code' => 'SAM',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 29,
                'country_id' => 1,
                'name' => 'Sar-e Pol',
                'code' => 'SAR',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 30,
                'country_id' => 1,
                'name' => 'Takhar',
                'code' => 'TAK',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 31,
                'country_id' => 1,
                'name' => 'Wardak',
                'code' => 'WAR',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 32,
                'country_id' => 1,
                'name' => 'Zabol',
                'code' => 'ZAB',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 33,
                'country_id' => 2,
                'name' => 'Berat',
                'code' => 'BR',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 34,
                'country_id' => 2,
                'name' => 'Bulqize',
                'code' => 'BU',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 35,
                'country_id' => 2,
                'name' => 'Delvine',
                'code' => 'DL',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 36,
                'country_id' => 2,
                'name' => 'Devoll',
                'code' => 'DV',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 37,
                'country_id' => 2,
                'name' => 'Diber',
                'code' => 'DI',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 38,
                'country_id' => 2,
                'name' => 'Durres',
                'code' => 'DR',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 39,
                'country_id' => 2,
                'name' => 'Elbasan',
                'code' => 'EL',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 40,
                'country_id' => 2,
                'name' => 'Kolonje',
                'code' => 'ER',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 41,
                'country_id' => 2,
                'name' => 'Fier',
                'code' => 'FR',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 42,
                'country_id' => 2,
                'name' => 'Gjirokaster',
                'code' => 'GJ',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 43,
                'country_id' => 2,
                'name' => 'Gramsh',
                'code' => 'GR',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 44,
                'country_id' => 2,
                'name' => 'Has',
                'code' => 'HA',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 45,
                'country_id' => 2,
                'name' => 'Kavaje',
                'code' => 'KA',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 46,
                'country_id' => 2,
                'name' => 'Kurbin',
                'code' => 'KB',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 47,
                'country_id' => 2,
                'name' => 'Kucove',
                'code' => 'KC',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 48,
                'country_id' => 2,
                'name' => 'Korce',
                'code' => 'KO',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 49,
                'country_id' => 2,
                'name' => 'Kruje',
                'code' => 'KR',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 50,
                'country_id' => 2,
                'name' => 'Kukes',
                'code' => 'KU',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 51,
                'country_id' => 2,
                'name' => 'Librazhd',
                'code' => 'LB',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 52,
                'country_id' => 2,
                'name' => 'Lezhe',
                'code' => 'LE',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 53,
                'country_id' => 2,
                'name' => 'Lushnje',
                'code' => 'LU',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 54,
                'country_id' => 2,
                'name' => 'Malesi e Madhe',
                'code' => 'MM',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 55,
                'country_id' => 2,
                'name' => 'Mallakaster',
                'code' => 'MK',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 56,
                'country_id' => 2,
                'name' => 'Mat',
                'code' => 'MT',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 57,
                'country_id' => 2,
                'name' => 'Mirdite',
                'code' => 'MR',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 58,
                'country_id' => 2,
                'name' => 'Peqin',
                'code' => 'PQ',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 59,
                'country_id' => 2,
                'name' => 'Permet',
                'code' => 'PR',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 60,
                'country_id' => 2,
                'name' => 'Pogradec',
                'code' => 'PG',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 61,
                'country_id' => 2,
                'name' => 'Puke',
                'code' => 'PU',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 62,
                'country_id' => 2,
                'name' => 'Shkoder',
                'code' => 'SH',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 63,
                'country_id' => 2,
                'name' => 'Skrapar',
                'code' => 'SK',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 64,
                'country_id' => 2,
                'name' => 'Sarande',
                'code' => 'SR',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 65,
                'country_id' => 2,
                'name' => 'Tepelene',
                'code' => 'TE',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 66,
                'country_id' => 2,
                'name' => 'Tropoje',
                'code' => 'TP',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 67,
                'country_id' => 2,
                'name' => 'Tirane',
                'code' => 'TR',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 68,
                'country_id' => 2,
                'name' => 'Vlore',
                'code' => 'VL',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 69,
                'country_id' => 3,
                'name' => 'Adrar',
                'code' => 'ADR',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 70,
                'country_id' => 3,
                'name' => 'Ain Defla',
                'code' => 'ADE',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 71,
                'country_id' => 3,
                'name' => 'Ain Temouchent',
                'code' => 'ATE',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 72,
                'country_id' => 3,
                'name' => 'Alger',
                'code' => 'ALG',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 73,
                'country_id' => 3,
                'name' => 'Annaba',
                'code' => 'ANN',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 74,
                'country_id' => 3,
                'name' => 'Batna',
                'code' => 'BAT',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 75,
                'country_id' => 3,
                'name' => 'Bechar',
                'code' => 'BEC',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 76,
                'country_id' => 3,
                'name' => 'Bejaia',
                'code' => 'BEJ',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 77,
                'country_id' => 3,
                'name' => 'Biskra',
                'code' => 'BIS',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 78,
                'country_id' => 3,
                'name' => 'Blida',
                'code' => 'BLI',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 79,
                'country_id' => 3,
                'name' => 'Bordj Bou Arreridj',
                'code' => 'BBA',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 80,
                'country_id' => 3,
                'name' => 'Bouira',
                'code' => 'BOA',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 81,
                'country_id' => 3,
                'name' => 'Boumerdes',
                'code' => 'BMD',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 82,
                'country_id' => 3,
                'name' => 'Chlef',
                'code' => 'CHL',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 83,
                'country_id' => 3,
                'name' => 'Constantine',
                'code' => 'CON',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 84,
                'country_id' => 3,
                'name' => 'Djelfa',
                'code' => 'DJE',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 85,
                'country_id' => 3,
                'name' => 'El Bayadh',
                'code' => 'EBA',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 86,
                'country_id' => 3,
                'name' => 'El Oued',
                'code' => 'EOU',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 87,
                'country_id' => 3,
                'name' => 'El Tarf',
                'code' => 'ETA',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 88,
                'country_id' => 3,
                'name' => 'Ghardaia',
                'code' => 'GHA',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 89,
                'country_id' => 3,
                'name' => 'Guelma',
                'code' => 'GUE',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 90,
                'country_id' => 3,
                'name' => 'Illizi',
                'code' => 'ILL',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 91,
                'country_id' => 3,
                'name' => 'Jijel',
                'code' => 'JIJ',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 92,
                'country_id' => 3,
                'name' => 'Khenchela',
                'code' => 'KHE',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 93,
                'country_id' => 3,
                'name' => 'Laghouat',
                'code' => 'LAG',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 94,
                'country_id' => 3,
                'name' => 'Muaskar',
                'code' => 'MUA',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 95,
                'country_id' => 3,
                'name' => 'Medea',
                'code' => 'MED',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 96,
                'country_id' => 3,
                'name' => 'Mila',
                'code' => 'MIL',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 97,
                'country_id' => 3,
                'name' => 'Mostaganem',
                'code' => 'MOS',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 98,
                'country_id' => 3,
                'name' => 'M\'Sila',
                'code' => 'MSI',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 99,
                'country_id' => 3,
                'name' => 'Naama',
                'code' => 'NAA',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 100,
                'country_id' => 3,
                'name' => 'Oran',
                'code' => 'ORA',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 101,
                'country_id' => 3,
                'name' => 'Ouargla',
                'code' => 'OUA',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 102,
                'country_id' => 3,
                'name' => 'Oum el-Bouaghi',
                'code' => 'OEB',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 103,
                'country_id' => 3,
                'name' => 'Relizane',
                'code' => 'REL',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 104,
                'country_id' => 3,
                'name' => 'Saida',
                'code' => 'SAI',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 105,
                'country_id' => 3,
                'name' => 'Setif',
                'code' => 'SET',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 106,
                'country_id' => 3,
                'name' => 'Sidi Bel Abbes',
                'code' => 'SBA',
                'status' => 1,
            ),
            106 => 
            array (
                'zone_id' => 107,
                'country_id' => 3,
                'name' => 'Skikda',
                'code' => 'SKI',
                'status' => 1,
            ),
            107 => 
            array (
                'zone_id' => 108,
                'country_id' => 3,
                'name' => 'Souk Ahras',
                'code' => 'SAH',
                'status' => 1,
            ),
            108 => 
            array (
                'zone_id' => 109,
                'country_id' => 3,
                'name' => 'Tamanghasset',
                'code' => 'TAM',
                'status' => 1,
            ),
            109 => 
            array (
                'zone_id' => 110,
                'country_id' => 3,
                'name' => 'Tebessa',
                'code' => 'TEB',
                'status' => 1,
            ),
            110 => 
            array (
                'zone_id' => 111,
                'country_id' => 3,
                'name' => 'Tiaret',
                'code' => 'TIA',
                'status' => 1,
            ),
            111 => 
            array (
                'zone_id' => 112,
                'country_id' => 3,
                'name' => 'Tindouf',
                'code' => 'TIN',
                'status' => 1,
            ),
            112 => 
            array (
                'zone_id' => 113,
                'country_id' => 3,
                'name' => 'Tipaza',
                'code' => 'TIP',
                'status' => 1,
            ),
            113 => 
            array (
                'zone_id' => 114,
                'country_id' => 3,
                'name' => 'Tissemsilt',
                'code' => 'TIS',
                'status' => 1,
            ),
            114 => 
            array (
                'zone_id' => 115,
                'country_id' => 3,
                'name' => 'Tizi Ouzou',
                'code' => 'TOU',
                'status' => 1,
            ),
            115 => 
            array (
                'zone_id' => 116,
                'country_id' => 3,
                'name' => 'Tlemcen',
                'code' => 'TLE',
                'status' => 1,
            ),
            116 => 
            array (
                'zone_id' => 117,
                'country_id' => 4,
                'name' => 'Eastern',
                'code' => 'E',
                'status' => 1,
            ),
            117 => 
            array (
                'zone_id' => 118,
                'country_id' => 4,
                'name' => 'Manu\'a',
                'code' => 'M',
                'status' => 1,
            ),
            118 => 
            array (
                'zone_id' => 119,
                'country_id' => 4,
                'name' => 'Rose Island',
                'code' => 'R',
                'status' => 1,
            ),
            119 => 
            array (
                'zone_id' => 120,
                'country_id' => 4,
                'name' => 'Swains Island',
                'code' => 'S',
                'status' => 1,
            ),
            120 => 
            array (
                'zone_id' => 121,
                'country_id' => 4,
                'name' => 'Western',
                'code' => 'W',
                'status' => 1,
            ),
            121 => 
            array (
                'zone_id' => 122,
                'country_id' => 5,
                'name' => 'Andorra la Vella',
                'code' => 'ALV',
                'status' => 1,
            ),
            122 => 
            array (
                'zone_id' => 123,
                'country_id' => 5,
                'name' => 'Canillo',
                'code' => 'CAN',
                'status' => 1,
            ),
            123 => 
            array (
                'zone_id' => 124,
                'country_id' => 5,
                'name' => 'Encamp',
                'code' => 'ENC',
                'status' => 1,
            ),
            124 => 
            array (
                'zone_id' => 125,
                'country_id' => 5,
                'name' => 'Escaldes-Engordany',
                'code' => 'ESE',
                'status' => 1,
            ),
            125 => 
            array (
                'zone_id' => 126,
                'country_id' => 5,
                'name' => 'La Massana',
                'code' => 'LMA',
                'status' => 1,
            ),
            126 => 
            array (
                'zone_id' => 127,
                'country_id' => 5,
                'name' => 'Ordino',
                'code' => 'ORD',
                'status' => 1,
            ),
            127 => 
            array (
                'zone_id' => 128,
                'country_id' => 5,
                'name' => 'Sant Julia de Loria',
                'code' => 'SJL',
                'status' => 1,
            ),
            128 => 
            array (
                'zone_id' => 129,
                'country_id' => 6,
                'name' => 'Bengo',
                'code' => 'BGO',
                'status' => 1,
            ),
            129 => 
            array (
                'zone_id' => 130,
                'country_id' => 6,
                'name' => 'Benguela',
                'code' => 'BGU',
                'status' => 1,
            ),
            130 => 
            array (
                'zone_id' => 131,
                'country_id' => 6,
                'name' => 'Bie',
                'code' => 'BIE',
                'status' => 1,
            ),
            131 => 
            array (
                'zone_id' => 132,
                'country_id' => 6,
                'name' => 'Cabinda',
                'code' => 'CAB',
                'status' => 1,
            ),
            132 => 
            array (
                'zone_id' => 133,
                'country_id' => 6,
                'name' => 'Cuando-Cubango',
                'code' => 'CCU',
                'status' => 1,
            ),
            133 => 
            array (
                'zone_id' => 134,
                'country_id' => 6,
                'name' => 'Cuanza Norte',
                'code' => 'CNO',
                'status' => 1,
            ),
            134 => 
            array (
                'zone_id' => 135,
                'country_id' => 6,
                'name' => 'Cuanza Sul',
                'code' => 'CUS',
                'status' => 1,
            ),
            135 => 
            array (
                'zone_id' => 136,
                'country_id' => 6,
                'name' => 'Cunene',
                'code' => 'CNN',
                'status' => 1,
            ),
            136 => 
            array (
                'zone_id' => 137,
                'country_id' => 6,
                'name' => 'Huambo',
                'code' => 'HUA',
                'status' => 1,
            ),
            137 => 
            array (
                'zone_id' => 138,
                'country_id' => 6,
                'name' => 'Huila',
                'code' => 'HUI',
                'status' => 1,
            ),
            138 => 
            array (
                'zone_id' => 139,
                'country_id' => 6,
                'name' => 'Luanda',
                'code' => 'LUA',
                'status' => 1,
            ),
            139 => 
            array (
                'zone_id' => 140,
                'country_id' => 6,
                'name' => 'Lunda Norte',
                'code' => 'LNO',
                'status' => 1,
            ),
            140 => 
            array (
                'zone_id' => 141,
                'country_id' => 6,
                'name' => 'Lunda Sul',
                'code' => 'LSU',
                'status' => 1,
            ),
            141 => 
            array (
                'zone_id' => 142,
                'country_id' => 6,
                'name' => 'Malange',
                'code' => 'MAL',
                'status' => 1,
            ),
            142 => 
            array (
                'zone_id' => 143,
                'country_id' => 6,
                'name' => 'Moxico',
                'code' => 'MOX',
                'status' => 1,
            ),
            143 => 
            array (
                'zone_id' => 144,
                'country_id' => 6,
                'name' => 'Namibe',
                'code' => 'NAM',
                'status' => 1,
            ),
            144 => 
            array (
                'zone_id' => 145,
                'country_id' => 6,
                'name' => 'Uige',
                'code' => 'UIG',
                'status' => 1,
            ),
            145 => 
            array (
                'zone_id' => 146,
                'country_id' => 6,
                'name' => 'Zaire',
                'code' => 'ZAI',
                'status' => 1,
            ),
            146 => 
            array (
                'zone_id' => 147,
                'country_id' => 9,
                'name' => 'Saint George',
                'code' => 'ASG',
                'status' => 1,
            ),
            147 => 
            array (
                'zone_id' => 148,
                'country_id' => 9,
                'name' => 'Saint John',
                'code' => 'ASJ',
                'status' => 1,
            ),
            148 => 
            array (
                'zone_id' => 149,
                'country_id' => 9,
                'name' => 'Saint Mary',
                'code' => 'ASM',
                'status' => 1,
            ),
            149 => 
            array (
                'zone_id' => 150,
                'country_id' => 9,
                'name' => 'Saint Paul',
                'code' => 'ASL',
                'status' => 1,
            ),
            150 => 
            array (
                'zone_id' => 151,
                'country_id' => 9,
                'name' => 'Saint Peter',
                'code' => 'ASR',
                'status' => 1,
            ),
            151 => 
            array (
                'zone_id' => 152,
                'country_id' => 9,
                'name' => 'Saint Philip',
                'code' => 'ASH',
                'status' => 1,
            ),
            152 => 
            array (
                'zone_id' => 153,
                'country_id' => 9,
                'name' => 'Barbuda',
                'code' => 'BAR',
                'status' => 1,
            ),
            153 => 
            array (
                'zone_id' => 154,
                'country_id' => 9,
                'name' => 'Redonda',
                'code' => 'RED',
                'status' => 1,
            ),
            154 => 
            array (
                'zone_id' => 155,
                'country_id' => 10,
                'name' => 'Antartida e Islas del Atlantico',
                'code' => 'AN',
                'status' => 1,
            ),
            155 => 
            array (
                'zone_id' => 156,
                'country_id' => 10,
                'name' => 'Buenos Aires',
                'code' => 'BA',
                'status' => 1,
            ),
            156 => 
            array (
                'zone_id' => 157,
                'country_id' => 10,
                'name' => 'Catamarca',
                'code' => 'CA',
                'status' => 1,
            ),
            157 => 
            array (
                'zone_id' => 158,
                'country_id' => 10,
                'name' => 'Chaco',
                'code' => 'CH',
                'status' => 1,
            ),
            158 => 
            array (
                'zone_id' => 159,
                'country_id' => 10,
                'name' => 'Chubut',
                'code' => 'CU',
                'status' => 1,
            ),
            159 => 
            array (
                'zone_id' => 160,
                'country_id' => 10,
                'name' => 'Cordoba',
                'code' => 'CO',
                'status' => 1,
            ),
            160 => 
            array (
                'zone_id' => 161,
                'country_id' => 10,
                'name' => 'Corrientes',
                'code' => 'CR',
                'status' => 1,
            ),
            161 => 
            array (
                'zone_id' => 162,
                'country_id' => 10,
                'name' => 'Distrito Federal',
                'code' => 'DF',
                'status' => 1,
            ),
            162 => 
            array (
                'zone_id' => 163,
                'country_id' => 10,
                'name' => 'Entre Rios',
                'code' => 'ER',
                'status' => 1,
            ),
            163 => 
            array (
                'zone_id' => 164,
                'country_id' => 10,
                'name' => 'Formosa',
                'code' => 'FO',
                'status' => 1,
            ),
            164 => 
            array (
                'zone_id' => 165,
                'country_id' => 10,
                'name' => 'Jujuy',
                'code' => 'JU',
                'status' => 1,
            ),
            165 => 
            array (
                'zone_id' => 166,
                'country_id' => 10,
                'name' => 'La Pampa',
                'code' => 'LP',
                'status' => 1,
            ),
            166 => 
            array (
                'zone_id' => 167,
                'country_id' => 10,
                'name' => 'La Rioja',
                'code' => 'LR',
                'status' => 1,
            ),
            167 => 
            array (
                'zone_id' => 168,
                'country_id' => 10,
                'name' => 'Mendoza',
                'code' => 'ME',
                'status' => 1,
            ),
            168 => 
            array (
                'zone_id' => 169,
                'country_id' => 10,
                'name' => 'Misiones',
                'code' => 'MI',
                'status' => 1,
            ),
            169 => 
            array (
                'zone_id' => 170,
                'country_id' => 10,
                'name' => 'Neuquen',
                'code' => 'NE',
                'status' => 1,
            ),
            170 => 
            array (
                'zone_id' => 171,
                'country_id' => 10,
                'name' => 'Rio Negro',
                'code' => 'RN',
                'status' => 1,
            ),
            171 => 
            array (
                'zone_id' => 172,
                'country_id' => 10,
                'name' => 'Salta',
                'code' => 'SA',
                'status' => 1,
            ),
            172 => 
            array (
                'zone_id' => 173,
                'country_id' => 10,
                'name' => 'San Juan',
                'code' => 'SJ',
                'status' => 1,
            ),
            173 => 
            array (
                'zone_id' => 174,
                'country_id' => 10,
                'name' => 'San Luis',
                'code' => 'SL',
                'status' => 1,
            ),
            174 => 
            array (
                'zone_id' => 175,
                'country_id' => 10,
                'name' => 'Santa Cruz',
                'code' => 'SC',
                'status' => 1,
            ),
            175 => 
            array (
                'zone_id' => 176,
                'country_id' => 10,
                'name' => 'Santa Fe',
                'code' => 'SF',
                'status' => 1,
            ),
            176 => 
            array (
                'zone_id' => 177,
                'country_id' => 10,
                'name' => 'Santiago del Estero',
                'code' => 'SD',
                'status' => 1,
            ),
            177 => 
            array (
                'zone_id' => 178,
                'country_id' => 10,
                'name' => 'Tierra del Fuego',
                'code' => 'TF',
                'status' => 1,
            ),
            178 => 
            array (
                'zone_id' => 179,
                'country_id' => 10,
                'name' => 'Tucuman',
                'code' => 'TU',
                'status' => 1,
            ),
            179 => 
            array (
                'zone_id' => 180,
                'country_id' => 11,
                'name' => 'Aragatsotn',
                'code' => 'AGT',
                'status' => 1,
            ),
            180 => 
            array (
                'zone_id' => 181,
                'country_id' => 11,
                'name' => 'Ararat',
                'code' => 'ARR',
                'status' => 1,
            ),
            181 => 
            array (
                'zone_id' => 182,
                'country_id' => 11,
                'name' => 'Armavir',
                'code' => 'ARM',
                'status' => 1,
            ),
            182 => 
            array (
                'zone_id' => 183,
                'country_id' => 11,
                'name' => 'Geghark\'unik\'',
                'code' => 'GEG',
                'status' => 1,
            ),
            183 => 
            array (
                'zone_id' => 184,
                'country_id' => 11,
                'name' => 'Kotayk\'',
                'code' => 'KOT',
                'status' => 1,
            ),
            184 => 
            array (
                'zone_id' => 185,
                'country_id' => 11,
                'name' => 'Lorri',
                'code' => 'LOR',
                'status' => 1,
            ),
            185 => 
            array (
                'zone_id' => 186,
                'country_id' => 11,
                'name' => 'Shirak',
                'code' => 'SHI',
                'status' => 1,
            ),
            186 => 
            array (
                'zone_id' => 187,
                'country_id' => 11,
                'name' => 'Syunik\'',
                'code' => 'SYU',
                'status' => 1,
            ),
            187 => 
            array (
                'zone_id' => 188,
                'country_id' => 11,
                'name' => 'Tavush',
                'code' => 'TAV',
                'status' => 1,
            ),
            188 => 
            array (
                'zone_id' => 189,
                'country_id' => 11,
                'name' => 'Vayots\' Dzor',
                'code' => 'VAY',
                'status' => 1,
            ),
            189 => 
            array (
                'zone_id' => 190,
                'country_id' => 11,
                'name' => 'Yerevan',
                'code' => 'YER',
                'status' => 1,
            ),
            190 => 
            array (
                'zone_id' => 191,
                'country_id' => 13,
                'name' => 'Australian Capital Territory',
                'code' => 'ACT',
                'status' => 1,
            ),
            191 => 
            array (
                'zone_id' => 192,
                'country_id' => 13,
                'name' => 'New South Wales',
                'code' => 'NSW',
                'status' => 1,
            ),
            192 => 
            array (
                'zone_id' => 193,
                'country_id' => 13,
                'name' => 'Northern Territory',
                'code' => 'NT',
                'status' => 1,
            ),
            193 => 
            array (
                'zone_id' => 194,
                'country_id' => 13,
                'name' => 'Queensland',
                'code' => 'QLD',
                'status' => 1,
            ),
            194 => 
            array (
                'zone_id' => 195,
                'country_id' => 13,
                'name' => 'South Australia',
                'code' => 'SA',
                'status' => 1,
            ),
            195 => 
            array (
                'zone_id' => 196,
                'country_id' => 13,
                'name' => 'Tasmania',
                'code' => 'TAS',
                'status' => 1,
            ),
            196 => 
            array (
                'zone_id' => 197,
                'country_id' => 13,
                'name' => 'Victoria',
                'code' => 'VIC',
                'status' => 1,
            ),
            197 => 
            array (
                'zone_id' => 198,
                'country_id' => 13,
                'name' => 'Western Australia',
                'code' => 'WA',
                'status' => 1,
            ),
            198 => 
            array (
                'zone_id' => 199,
                'country_id' => 14,
                'name' => 'Burgenland',
                'code' => 'BUR',
                'status' => 1,
            ),
            199 => 
            array (
                'zone_id' => 200,
                'country_id' => 14,
                'name' => 'Kärnten',
                'code' => 'KAR',
                'status' => 1,
            ),
            200 => 
            array (
                'zone_id' => 201,
                'country_id' => 14,
                'name' => 'Nieder&ouml;sterreich',
                'code' => 'NOS',
                'status' => 1,
            ),
            201 => 
            array (
                'zone_id' => 202,
                'country_id' => 14,
                'name' => 'Ober&ouml;sterreich',
                'code' => 'OOS',
                'status' => 1,
            ),
            202 => 
            array (
                'zone_id' => 203,
                'country_id' => 14,
                'name' => 'Salzburg',
                'code' => 'SAL',
                'status' => 1,
            ),
            203 => 
            array (
                'zone_id' => 204,
                'country_id' => 14,
                'name' => 'Steiermark',
                'code' => 'STE',
                'status' => 1,
            ),
            204 => 
            array (
                'zone_id' => 205,
                'country_id' => 14,
                'name' => 'Tirol',
                'code' => 'TIR',
                'status' => 1,
            ),
            205 => 
            array (
                'zone_id' => 206,
                'country_id' => 14,
                'name' => 'Vorarlberg',
                'code' => 'VOR',
                'status' => 1,
            ),
            206 => 
            array (
                'zone_id' => 207,
                'country_id' => 14,
                'name' => 'Wien',
                'code' => 'WIE',
                'status' => 1,
            ),
            207 => 
            array (
                'zone_id' => 208,
                'country_id' => 15,
                'name' => 'Ali Bayramli',
                'code' => 'AB',
                'status' => 1,
            ),
            208 => 
            array (
                'zone_id' => 209,
                'country_id' => 15,
                'name' => 'Abseron',
                'code' => 'ABS',
                'status' => 1,
            ),
            209 => 
            array (
                'zone_id' => 210,
                'country_id' => 15,
                'name' => 'AgcabAdi',
                'code' => 'AGC',
                'status' => 1,
            ),
            210 => 
            array (
                'zone_id' => 211,
                'country_id' => 15,
                'name' => 'Agdam',
                'code' => 'AGM',
                'status' => 1,
            ),
            211 => 
            array (
                'zone_id' => 212,
                'country_id' => 15,
                'name' => 'Agdas',
                'code' => 'AGS',
                'status' => 1,
            ),
            212 => 
            array (
                'zone_id' => 213,
                'country_id' => 15,
                'name' => 'Agstafa',
                'code' => 'AGA',
                'status' => 1,
            ),
            213 => 
            array (
                'zone_id' => 214,
                'country_id' => 15,
                'name' => 'Agsu',
                'code' => 'AGU',
                'status' => 1,
            ),
            214 => 
            array (
                'zone_id' => 215,
                'country_id' => 15,
                'name' => 'Astara',
                'code' => 'AST',
                'status' => 1,
            ),
            215 => 
            array (
                'zone_id' => 216,
                'country_id' => 15,
                'name' => 'Baki',
                'code' => 'BA',
                'status' => 1,
            ),
            216 => 
            array (
                'zone_id' => 217,
                'country_id' => 15,
                'name' => 'BabAk',
                'code' => 'BAB',
                'status' => 1,
            ),
            217 => 
            array (
                'zone_id' => 218,
                'country_id' => 15,
                'name' => 'BalakAn',
                'code' => 'BAL',
                'status' => 1,
            ),
            218 => 
            array (
                'zone_id' => 219,
                'country_id' => 15,
                'name' => 'BArdA',
                'code' => 'BAR',
                'status' => 1,
            ),
            219 => 
            array (
                'zone_id' => 220,
                'country_id' => 15,
                'name' => 'Beylaqan',
                'code' => 'BEY',
                'status' => 1,
            ),
            220 => 
            array (
                'zone_id' => 221,
                'country_id' => 15,
                'name' => 'Bilasuvar',
                'code' => 'BIL',
                'status' => 1,
            ),
            221 => 
            array (
                'zone_id' => 222,
                'country_id' => 15,
                'name' => 'Cabrayil',
                'code' => 'CAB',
                'status' => 1,
            ),
            222 => 
            array (
                'zone_id' => 223,
                'country_id' => 15,
                'name' => 'Calilabab',
                'code' => 'CAL',
                'status' => 1,
            ),
            223 => 
            array (
                'zone_id' => 224,
                'country_id' => 15,
                'name' => 'Culfa',
                'code' => 'CUL',
                'status' => 1,
            ),
            224 => 
            array (
                'zone_id' => 225,
                'country_id' => 15,
                'name' => 'Daskasan',
                'code' => 'DAS',
                'status' => 1,
            ),
            225 => 
            array (
                'zone_id' => 226,
                'country_id' => 15,
                'name' => 'Davaci',
                'code' => 'DAV',
                'status' => 1,
            ),
            226 => 
            array (
                'zone_id' => 227,
                'country_id' => 15,
                'name' => 'Fuzuli',
                'code' => 'FUZ',
                'status' => 1,
            ),
            227 => 
            array (
                'zone_id' => 228,
                'country_id' => 15,
                'name' => 'Ganca',
                'code' => 'GA',
                'status' => 1,
            ),
            228 => 
            array (
                'zone_id' => 229,
                'country_id' => 15,
                'name' => 'Gadabay',
                'code' => 'GAD',
                'status' => 1,
            ),
            229 => 
            array (
                'zone_id' => 230,
                'country_id' => 15,
                'name' => 'Goranboy',
                'code' => 'GOR',
                'status' => 1,
            ),
            230 => 
            array (
                'zone_id' => 231,
                'country_id' => 15,
                'name' => 'Goycay',
                'code' => 'GOY',
                'status' => 1,
            ),
            231 => 
            array (
                'zone_id' => 232,
                'country_id' => 15,
                'name' => 'Haciqabul',
                'code' => 'HAC',
                'status' => 1,
            ),
            232 => 
            array (
                'zone_id' => 233,
                'country_id' => 15,
                'name' => 'Imisli',
                'code' => 'IMI',
                'status' => 1,
            ),
            233 => 
            array (
                'zone_id' => 234,
                'country_id' => 15,
                'name' => 'Ismayilli',
                'code' => 'ISM',
                'status' => 1,
            ),
            234 => 
            array (
                'zone_id' => 235,
                'country_id' => 15,
                'name' => 'Kalbacar',
                'code' => 'KAL',
                'status' => 1,
            ),
            235 => 
            array (
                'zone_id' => 236,
                'country_id' => 15,
                'name' => 'Kurdamir',
                'code' => 'KUR',
                'status' => 1,
            ),
            236 => 
            array (
                'zone_id' => 237,
                'country_id' => 15,
                'name' => 'Lankaran',
                'code' => 'LA',
                'status' => 1,
            ),
            237 => 
            array (
                'zone_id' => 238,
                'country_id' => 15,
                'name' => 'Lacin',
                'code' => 'LAC',
                'status' => 1,
            ),
            238 => 
            array (
                'zone_id' => 239,
                'country_id' => 15,
                'name' => 'Lankaran',
                'code' => 'LAN',
                'status' => 1,
            ),
            239 => 
            array (
                'zone_id' => 240,
                'country_id' => 15,
                'name' => 'Lerik',
                'code' => 'LER',
                'status' => 1,
            ),
            240 => 
            array (
                'zone_id' => 241,
                'country_id' => 15,
                'name' => 'Masalli',
                'code' => 'MAS',
                'status' => 1,
            ),
            241 => 
            array (
                'zone_id' => 242,
                'country_id' => 15,
                'name' => 'Mingacevir',
                'code' => 'MI',
                'status' => 1,
            ),
            242 => 
            array (
                'zone_id' => 243,
                'country_id' => 15,
                'name' => 'Naftalan',
                'code' => 'NA',
                'status' => 1,
            ),
            243 => 
            array (
                'zone_id' => 244,
                'country_id' => 15,
                'name' => 'Neftcala',
                'code' => 'NEF',
                'status' => 1,
            ),
            244 => 
            array (
                'zone_id' => 245,
                'country_id' => 15,
                'name' => 'Oguz',
                'code' => 'OGU',
                'status' => 1,
            ),
            245 => 
            array (
                'zone_id' => 246,
                'country_id' => 15,
                'name' => 'Ordubad',
                'code' => 'ORD',
                'status' => 1,
            ),
            246 => 
            array (
                'zone_id' => 247,
                'country_id' => 15,
                'name' => 'Qabala',
                'code' => 'QAB',
                'status' => 1,
            ),
            247 => 
            array (
                'zone_id' => 248,
                'country_id' => 15,
                'name' => 'Qax',
                'code' => 'QAX',
                'status' => 1,
            ),
            248 => 
            array (
                'zone_id' => 249,
                'country_id' => 15,
                'name' => 'Qazax',
                'code' => 'QAZ',
                'status' => 1,
            ),
            249 => 
            array (
                'zone_id' => 250,
                'country_id' => 15,
                'name' => 'Qobustan',
                'code' => 'QOB',
                'status' => 1,
            ),
            250 => 
            array (
                'zone_id' => 251,
                'country_id' => 15,
                'name' => 'Quba',
                'code' => 'QBA',
                'status' => 1,
            ),
            251 => 
            array (
                'zone_id' => 252,
                'country_id' => 15,
                'name' => 'Qubadli',
                'code' => 'QBI',
                'status' => 1,
            ),
            252 => 
            array (
                'zone_id' => 253,
                'country_id' => 15,
                'name' => 'Qusar',
                'code' => 'QUS',
                'status' => 1,
            ),
            253 => 
            array (
                'zone_id' => 254,
                'country_id' => 15,
                'name' => 'Saki',
                'code' => 'SA',
                'status' => 1,
            ),
            254 => 
            array (
                'zone_id' => 255,
                'country_id' => 15,
                'name' => 'Saatli',
                'code' => 'SAT',
                'status' => 1,
            ),
            255 => 
            array (
                'zone_id' => 256,
                'country_id' => 15,
                'name' => 'Sabirabad',
                'code' => 'SAB',
                'status' => 1,
            ),
            256 => 
            array (
                'zone_id' => 257,
                'country_id' => 15,
                'name' => 'Sadarak',
                'code' => 'SAD',
                'status' => 1,
            ),
            257 => 
            array (
                'zone_id' => 258,
                'country_id' => 15,
                'name' => 'Sahbuz',
                'code' => 'SAH',
                'status' => 1,
            ),
            258 => 
            array (
                'zone_id' => 259,
                'country_id' => 15,
                'name' => 'Saki',
                'code' => 'SAK',
                'status' => 1,
            ),
            259 => 
            array (
                'zone_id' => 260,
                'country_id' => 15,
                'name' => 'Salyan',
                'code' => 'SAL',
                'status' => 1,
            ),
            260 => 
            array (
                'zone_id' => 261,
                'country_id' => 15,
                'name' => 'Sumqayit',
                'code' => 'SM',
                'status' => 1,
            ),
            261 => 
            array (
                'zone_id' => 262,
                'country_id' => 15,
                'name' => 'Samaxi',
                'code' => 'SMI',
                'status' => 1,
            ),
            262 => 
            array (
                'zone_id' => 263,
                'country_id' => 15,
                'name' => 'Samkir',
                'code' => 'SKR',
                'status' => 1,
            ),
            263 => 
            array (
                'zone_id' => 264,
                'country_id' => 15,
                'name' => 'Samux',
                'code' => 'SMX',
                'status' => 1,
            ),
            264 => 
            array (
                'zone_id' => 265,
                'country_id' => 15,
                'name' => 'Sarur',
                'code' => 'SAR',
                'status' => 1,
            ),
            265 => 
            array (
                'zone_id' => 266,
                'country_id' => 15,
                'name' => 'Siyazan',
                'code' => 'SIY',
                'status' => 1,
            ),
            266 => 
            array (
                'zone_id' => 267,
                'country_id' => 15,
                'name' => 'Susa',
                'code' => 'SS',
                'status' => 1,
            ),
            267 => 
            array (
                'zone_id' => 268,
                'country_id' => 15,
                'name' => 'Susa',
                'code' => 'SUS',
                'status' => 1,
            ),
            268 => 
            array (
                'zone_id' => 269,
                'country_id' => 15,
                'name' => 'Tartar',
                'code' => 'TAR',
                'status' => 1,
            ),
            269 => 
            array (
                'zone_id' => 270,
                'country_id' => 15,
                'name' => 'Tovuz',
                'code' => 'TOV',
                'status' => 1,
            ),
            270 => 
            array (
                'zone_id' => 271,
                'country_id' => 15,
                'name' => 'Ucar',
                'code' => 'UCA',
                'status' => 1,
            ),
            271 => 
            array (
                'zone_id' => 272,
                'country_id' => 15,
                'name' => 'Xankandi',
                'code' => 'XA',
                'status' => 1,
            ),
            272 => 
            array (
                'zone_id' => 273,
                'country_id' => 15,
                'name' => 'Xacmaz',
                'code' => 'XAC',
                'status' => 1,
            ),
            273 => 
            array (
                'zone_id' => 274,
                'country_id' => 15,
                'name' => 'Xanlar',
                'code' => 'XAN',
                'status' => 1,
            ),
            274 => 
            array (
                'zone_id' => 275,
                'country_id' => 15,
                'name' => 'Xizi',
                'code' => 'XIZ',
                'status' => 1,
            ),
            275 => 
            array (
                'zone_id' => 276,
                'country_id' => 15,
                'name' => 'Xocali',
                'code' => 'XCI',
                'status' => 1,
            ),
            276 => 
            array (
                'zone_id' => 277,
                'country_id' => 15,
                'name' => 'Xocavand',
                'code' => 'XVD',
                'status' => 1,
            ),
            277 => 
            array (
                'zone_id' => 278,
                'country_id' => 15,
                'name' => 'Yardimli',
                'code' => 'YAR',
                'status' => 1,
            ),
            278 => 
            array (
                'zone_id' => 279,
                'country_id' => 15,
                'name' => 'Yevlax',
                'code' => 'YEV',
                'status' => 1,
            ),
            279 => 
            array (
                'zone_id' => 280,
                'country_id' => 15,
                'name' => 'Zangilan',
                'code' => 'ZAN',
                'status' => 1,
            ),
            280 => 
            array (
                'zone_id' => 281,
                'country_id' => 15,
                'name' => 'Zaqatala',
                'code' => 'ZAQ',
                'status' => 1,
            ),
            281 => 
            array (
                'zone_id' => 282,
                'country_id' => 15,
                'name' => 'Zardab',
                'code' => 'ZAR',
                'status' => 1,
            ),
            282 => 
            array (
                'zone_id' => 283,
                'country_id' => 15,
                'name' => 'Naxcivan',
                'code' => 'NX',
                'status' => 1,
            ),
            283 => 
            array (
                'zone_id' => 284,
                'country_id' => 16,
                'name' => 'Acklins',
                'code' => 'ACK',
                'status' => 1,
            ),
            284 => 
            array (
                'zone_id' => 285,
                'country_id' => 16,
                'name' => 'Berry Islands',
                'code' => 'BER',
                'status' => 1,
            ),
            285 => 
            array (
                'zone_id' => 286,
                'country_id' => 16,
                'name' => 'Bimini',
                'code' => 'BIM',
                'status' => 1,
            ),
            286 => 
            array (
                'zone_id' => 287,
                'country_id' => 16,
                'name' => 'Black Point',
                'code' => 'BLK',
                'status' => 1,
            ),
            287 => 
            array (
                'zone_id' => 288,
                'country_id' => 16,
                'name' => 'Cat Island',
                'code' => 'CAT',
                'status' => 1,
            ),
            288 => 
            array (
                'zone_id' => 289,
                'country_id' => 16,
                'name' => 'Central Abaco',
                'code' => 'CAB',
                'status' => 1,
            ),
            289 => 
            array (
                'zone_id' => 290,
                'country_id' => 16,
                'name' => 'Central Andros',
                'code' => 'CAN',
                'status' => 1,
            ),
            290 => 
            array (
                'zone_id' => 291,
                'country_id' => 16,
                'name' => 'Central Eleuthera',
                'code' => 'CEL',
                'status' => 1,
            ),
            291 => 
            array (
                'zone_id' => 292,
                'country_id' => 16,
                'name' => 'City of Freeport',
                'code' => 'FRE',
                'status' => 1,
            ),
            292 => 
            array (
                'zone_id' => 293,
                'country_id' => 16,
                'name' => 'Crooked Island',
                'code' => 'CRO',
                'status' => 1,
            ),
            293 => 
            array (
                'zone_id' => 294,
                'country_id' => 16,
                'name' => 'East Grand Bahama',
                'code' => 'EGB',
                'status' => 1,
            ),
            294 => 
            array (
                'zone_id' => 295,
                'country_id' => 16,
                'name' => 'Exuma',
                'code' => 'EXU',
                'status' => 1,
            ),
            295 => 
            array (
                'zone_id' => 296,
                'country_id' => 16,
                'name' => 'Grand Cay',
                'code' => 'GRD',
                'status' => 1,
            ),
            296 => 
            array (
                'zone_id' => 297,
                'country_id' => 16,
                'name' => 'Harbour Island',
                'code' => 'HAR',
                'status' => 1,
            ),
            297 => 
            array (
                'zone_id' => 298,
                'country_id' => 16,
                'name' => 'Hope Town',
                'code' => 'HOP',
                'status' => 1,
            ),
            298 => 
            array (
                'zone_id' => 299,
                'country_id' => 16,
                'name' => 'Inagua',
                'code' => 'INA',
                'status' => 1,
            ),
            299 => 
            array (
                'zone_id' => 300,
                'country_id' => 16,
                'name' => 'Long Island',
                'code' => 'LNG',
                'status' => 1,
            ),
            300 => 
            array (
                'zone_id' => 301,
                'country_id' => 16,
                'name' => 'Mangrove Cay',
                'code' => 'MAN',
                'status' => 1,
            ),
            301 => 
            array (
                'zone_id' => 302,
                'country_id' => 16,
                'name' => 'Mayaguana',
                'code' => 'MAY',
                'status' => 1,
            ),
            302 => 
            array (
                'zone_id' => 303,
                'country_id' => 16,
                'name' => 'Moore\'s Island',
                'code' => 'MOO',
                'status' => 1,
            ),
            303 => 
            array (
                'zone_id' => 304,
                'country_id' => 16,
                'name' => 'North Abaco',
                'code' => 'NAB',
                'status' => 1,
            ),
            304 => 
            array (
                'zone_id' => 305,
                'country_id' => 16,
                'name' => 'North Andros',
                'code' => 'NAN',
                'status' => 1,
            ),
            305 => 
            array (
                'zone_id' => 306,
                'country_id' => 16,
                'name' => 'North Eleuthera',
                'code' => 'NEL',
                'status' => 1,
            ),
            306 => 
            array (
                'zone_id' => 307,
                'country_id' => 16,
                'name' => 'Ragged Island',
                'code' => 'RAG',
                'status' => 1,
            ),
            307 => 
            array (
                'zone_id' => 308,
                'country_id' => 16,
                'name' => 'Rum Cay',
                'code' => 'RUM',
                'status' => 1,
            ),
            308 => 
            array (
                'zone_id' => 309,
                'country_id' => 16,
                'name' => 'San Salvador',
                'code' => 'SAL',
                'status' => 1,
            ),
            309 => 
            array (
                'zone_id' => 310,
                'country_id' => 16,
                'name' => 'South Abaco',
                'code' => 'SAB',
                'status' => 1,
            ),
            310 => 
            array (
                'zone_id' => 311,
                'country_id' => 16,
                'name' => 'South Andros',
                'code' => 'SAN',
                'status' => 1,
            ),
            311 => 
            array (
                'zone_id' => 312,
                'country_id' => 16,
                'name' => 'South Eleuthera',
                'code' => 'SEL',
                'status' => 1,
            ),
            312 => 
            array (
                'zone_id' => 313,
                'country_id' => 16,
                'name' => 'Spanish Wells',
                'code' => 'SWE',
                'status' => 1,
            ),
            313 => 
            array (
                'zone_id' => 314,
                'country_id' => 16,
                'name' => 'West Grand Bahama',
                'code' => 'WGB',
                'status' => 1,
            ),
            314 => 
            array (
                'zone_id' => 315,
                'country_id' => 17,
                'name' => 'Capital',
                'code' => 'CAP',
                'status' => 1,
            ),
            315 => 
            array (
                'zone_id' => 316,
                'country_id' => 17,
                'name' => 'Central',
                'code' => 'CEN',
                'status' => 1,
            ),
            316 => 
            array (
                'zone_id' => 317,
                'country_id' => 17,
                'name' => 'Muharraq',
                'code' => 'MUH',
                'status' => 1,
            ),
            317 => 
            array (
                'zone_id' => 318,
                'country_id' => 17,
                'name' => 'Northern',
                'code' => 'NOR',
                'status' => 1,
            ),
            318 => 
            array (
                'zone_id' => 319,
                'country_id' => 17,
                'name' => 'Southern',
                'code' => 'SOU',
                'status' => 1,
            ),
            319 => 
            array (
                'zone_id' => 320,
                'country_id' => 18,
                'name' => 'Barisal',
                'code' => 'BAR',
                'status' => 1,
            ),
            320 => 
            array (
                'zone_id' => 321,
                'country_id' => 18,
                'name' => 'Chittagong',
                'code' => 'CHI',
                'status' => 1,
            ),
            321 => 
            array (
                'zone_id' => 322,
                'country_id' => 18,
                'name' => 'Dhaka',
                'code' => 'DHA',
                'status' => 1,
            ),
            322 => 
            array (
                'zone_id' => 323,
                'country_id' => 18,
                'name' => 'Khulna',
                'code' => 'KHU',
                'status' => 1,
            ),
            323 => 
            array (
                'zone_id' => 324,
                'country_id' => 18,
                'name' => 'Rajshahi',
                'code' => 'RAJ',
                'status' => 1,
            ),
            324 => 
            array (
                'zone_id' => 325,
                'country_id' => 18,
                'name' => 'Sylhet',
                'code' => 'SYL',
                'status' => 1,
            ),
            325 => 
            array (
                'zone_id' => 326,
                'country_id' => 19,
                'name' => 'Christ Church',
                'code' => 'CC',
                'status' => 1,
            ),
            326 => 
            array (
                'zone_id' => 327,
                'country_id' => 19,
                'name' => 'Saint Andrew',
                'code' => 'AND',
                'status' => 1,
            ),
            327 => 
            array (
                'zone_id' => 328,
                'country_id' => 19,
                'name' => 'Saint George',
                'code' => 'GEO',
                'status' => 1,
            ),
            328 => 
            array (
                'zone_id' => 329,
                'country_id' => 19,
                'name' => 'Saint James',
                'code' => 'JAM',
                'status' => 1,
            ),
            329 => 
            array (
                'zone_id' => 330,
                'country_id' => 19,
                'name' => 'Saint John',
                'code' => 'JOH',
                'status' => 1,
            ),
            330 => 
            array (
                'zone_id' => 331,
                'country_id' => 19,
                'name' => 'Saint Joseph',
                'code' => 'JOS',
                'status' => 1,
            ),
            331 => 
            array (
                'zone_id' => 332,
                'country_id' => 19,
                'name' => 'Saint Lucy',
                'code' => 'LUC',
                'status' => 1,
            ),
            332 => 
            array (
                'zone_id' => 333,
                'country_id' => 19,
                'name' => 'Saint Michael',
                'code' => 'MIC',
                'status' => 1,
            ),
            333 => 
            array (
                'zone_id' => 334,
                'country_id' => 19,
                'name' => 'Saint Peter',
                'code' => 'PET',
                'status' => 1,
            ),
            334 => 
            array (
                'zone_id' => 335,
                'country_id' => 19,
                'name' => 'Saint Philip',
                'code' => 'PHI',
                'status' => 1,
            ),
            335 => 
            array (
                'zone_id' => 336,
                'country_id' => 19,
                'name' => 'Saint Thomas',
                'code' => 'THO',
                'status' => 1,
            ),
            336 => 
            array (
                'zone_id' => 337,
                'country_id' => 20,
            'name' => 'Brestskaya (Brest)',
                'code' => 'BR',
                'status' => 1,
            ),
            337 => 
            array (
                'zone_id' => 338,
                'country_id' => 20,
            'name' => 'Homyel\'skaya (Homyel\')',
                'code' => 'HO',
                'status' => 1,
            ),
            338 => 
            array (
                'zone_id' => 339,
                'country_id' => 20,
                'name' => 'Horad Minsk',
                'code' => 'HM',
                'status' => 1,
            ),
            339 => 
            array (
                'zone_id' => 340,
                'country_id' => 20,
            'name' => 'Hrodzyenskaya (Hrodna)',
                'code' => 'HR',
                'status' => 1,
            ),
            340 => 
            array (
                'zone_id' => 341,
                'country_id' => 20,
            'name' => 'Mahilyowskaya (Mahilyow)',
                'code' => 'MA',
                'status' => 1,
            ),
            341 => 
            array (
                'zone_id' => 342,
                'country_id' => 20,
                'name' => 'Minskaya',
                'code' => 'MI',
                'status' => 1,
            ),
            342 => 
            array (
                'zone_id' => 343,
                'country_id' => 20,
            'name' => 'Vitsyebskaya (Vitsyebsk)',
                'code' => 'VI',
                'status' => 1,
            ),
            343 => 
            array (
                'zone_id' => 344,
                'country_id' => 21,
                'name' => 'Antwerpen',
                'code' => 'VAN',
                'status' => 1,
            ),
            344 => 
            array (
                'zone_id' => 345,
                'country_id' => 21,
                'name' => 'Brabant Wallon',
                'code' => 'WBR',
                'status' => 1,
            ),
            345 => 
            array (
                'zone_id' => 346,
                'country_id' => 21,
                'name' => 'Hainaut',
                'code' => 'WHT',
                'status' => 1,
            ),
            346 => 
            array (
                'zone_id' => 347,
                'country_id' => 21,
                'name' => 'Liège',
                'code' => 'WLG',
                'status' => 1,
            ),
            347 => 
            array (
                'zone_id' => 348,
                'country_id' => 21,
                'name' => 'Limburg',
                'code' => 'VLI',
                'status' => 1,
            ),
            348 => 
            array (
                'zone_id' => 349,
                'country_id' => 21,
                'name' => 'Luxembourg',
                'code' => 'WLX',
                'status' => 1,
            ),
            349 => 
            array (
                'zone_id' => 350,
                'country_id' => 21,
                'name' => 'Namur',
                'code' => 'WNA',
                'status' => 1,
            ),
            350 => 
            array (
                'zone_id' => 351,
                'country_id' => 21,
                'name' => 'Oost-Vlaanderen',
                'code' => 'VOV',
                'status' => 1,
            ),
            351 => 
            array (
                'zone_id' => 352,
                'country_id' => 21,
                'name' => 'Vlaams Brabant',
                'code' => 'VBR',
                'status' => 1,
            ),
            352 => 
            array (
                'zone_id' => 353,
                'country_id' => 21,
                'name' => 'West-Vlaanderen',
                'code' => 'VWV',
                'status' => 1,
            ),
            353 => 
            array (
                'zone_id' => 354,
                'country_id' => 22,
                'name' => 'Belize',
                'code' => 'BZ',
                'status' => 1,
            ),
            354 => 
            array (
                'zone_id' => 355,
                'country_id' => 22,
                'name' => 'Cayo',
                'code' => 'CY',
                'status' => 1,
            ),
            355 => 
            array (
                'zone_id' => 356,
                'country_id' => 22,
                'name' => 'Corozal',
                'code' => 'CR',
                'status' => 1,
            ),
            356 => 
            array (
                'zone_id' => 357,
                'country_id' => 22,
                'name' => 'Orange Walk',
                'code' => 'OW',
                'status' => 1,
            ),
            357 => 
            array (
                'zone_id' => 358,
                'country_id' => 22,
                'name' => 'Stann Creek',
                'code' => 'SC',
                'status' => 1,
            ),
            358 => 
            array (
                'zone_id' => 359,
                'country_id' => 22,
                'name' => 'Toledo',
                'code' => 'TO',
                'status' => 1,
            ),
            359 => 
            array (
                'zone_id' => 360,
                'country_id' => 23,
                'name' => 'Alibori',
                'code' => 'AL',
                'status' => 1,
            ),
            360 => 
            array (
                'zone_id' => 361,
                'country_id' => 23,
                'name' => 'Atakora',
                'code' => 'AK',
                'status' => 1,
            ),
            361 => 
            array (
                'zone_id' => 362,
                'country_id' => 23,
                'name' => 'Atlantique',
                'code' => 'AQ',
                'status' => 1,
            ),
            362 => 
            array (
                'zone_id' => 363,
                'country_id' => 23,
                'name' => 'Borgou',
                'code' => 'BO',
                'status' => 1,
            ),
            363 => 
            array (
                'zone_id' => 364,
                'country_id' => 23,
                'name' => 'Collines',
                'code' => 'CO',
                'status' => 1,
            ),
            364 => 
            array (
                'zone_id' => 365,
                'country_id' => 23,
                'name' => 'Donga',
                'code' => 'DO',
                'status' => 1,
            ),
            365 => 
            array (
                'zone_id' => 366,
                'country_id' => 23,
                'name' => 'Kouffo',
                'code' => 'KO',
                'status' => 1,
            ),
            366 => 
            array (
                'zone_id' => 367,
                'country_id' => 23,
                'name' => 'Littoral',
                'code' => 'LI',
                'status' => 1,
            ),
            367 => 
            array (
                'zone_id' => 368,
                'country_id' => 23,
                'name' => 'Mono',
                'code' => 'MO',
                'status' => 1,
            ),
            368 => 
            array (
                'zone_id' => 369,
                'country_id' => 23,
                'name' => 'Oueme',
                'code' => 'OU',
                'status' => 1,
            ),
            369 => 
            array (
                'zone_id' => 370,
                'country_id' => 23,
                'name' => 'Plateau',
                'code' => 'PL',
                'status' => 1,
            ),
            370 => 
            array (
                'zone_id' => 371,
                'country_id' => 23,
                'name' => 'Zou',
                'code' => 'ZO',
                'status' => 1,
            ),
            371 => 
            array (
                'zone_id' => 372,
                'country_id' => 24,
                'name' => 'Devonshire',
                'code' => 'DS',
                'status' => 1,
            ),
            372 => 
            array (
                'zone_id' => 373,
                'country_id' => 24,
                'name' => 'Hamilton City',
                'code' => 'HC',
                'status' => 1,
            ),
            373 => 
            array (
                'zone_id' => 374,
                'country_id' => 24,
                'name' => 'Hamilton',
                'code' => 'HA',
                'status' => 1,
            ),
            374 => 
            array (
                'zone_id' => 375,
                'country_id' => 24,
                'name' => 'Paget',
                'code' => 'PG',
                'status' => 1,
            ),
            375 => 
            array (
                'zone_id' => 376,
                'country_id' => 24,
                'name' => 'Pembroke',
                'code' => 'PB',
                'status' => 1,
            ),
            376 => 
            array (
                'zone_id' => 377,
                'country_id' => 24,
                'name' => 'Saint George City',
                'code' => 'GC',
                'status' => 1,
            ),
            377 => 
            array (
                'zone_id' => 378,
                'country_id' => 24,
                'name' => 'Saint George\'s',
                'code' => 'SG',
                'status' => 1,
            ),
            378 => 
            array (
                'zone_id' => 379,
                'country_id' => 24,
                'name' => 'Sandys',
                'code' => 'SA',
                'status' => 1,
            ),
            379 => 
            array (
                'zone_id' => 380,
                'country_id' => 24,
                'name' => 'Smith\'s',
                'code' => 'SM',
                'status' => 1,
            ),
            380 => 
            array (
                'zone_id' => 381,
                'country_id' => 24,
                'name' => 'Southampton',
                'code' => 'SH',
                'status' => 1,
            ),
            381 => 
            array (
                'zone_id' => 382,
                'country_id' => 24,
                'name' => 'Warwick',
                'code' => 'WA',
                'status' => 1,
            ),
            382 => 
            array (
                'zone_id' => 383,
                'country_id' => 25,
                'name' => 'Bumthang',
                'code' => 'BUM',
                'status' => 1,
            ),
            383 => 
            array (
                'zone_id' => 384,
                'country_id' => 25,
                'name' => 'Chukha',
                'code' => 'CHU',
                'status' => 1,
            ),
            384 => 
            array (
                'zone_id' => 385,
                'country_id' => 25,
                'name' => 'Dagana',
                'code' => 'DAG',
                'status' => 1,
            ),
            385 => 
            array (
                'zone_id' => 386,
                'country_id' => 25,
                'name' => 'Gasa',
                'code' => 'GAS',
                'status' => 1,
            ),
            386 => 
            array (
                'zone_id' => 387,
                'country_id' => 25,
                'name' => 'Haa',
                'code' => 'HAA',
                'status' => 1,
            ),
            387 => 
            array (
                'zone_id' => 388,
                'country_id' => 25,
                'name' => 'Lhuntse',
                'code' => 'LHU',
                'status' => 1,
            ),
            388 => 
            array (
                'zone_id' => 389,
                'country_id' => 25,
                'name' => 'Mongar',
                'code' => 'MON',
                'status' => 1,
            ),
            389 => 
            array (
                'zone_id' => 390,
                'country_id' => 25,
                'name' => 'Paro',
                'code' => 'PAR',
                'status' => 1,
            ),
            390 => 
            array (
                'zone_id' => 391,
                'country_id' => 25,
                'name' => 'Pemagatshel',
                'code' => 'PEM',
                'status' => 1,
            ),
            391 => 
            array (
                'zone_id' => 392,
                'country_id' => 25,
                'name' => 'Punakha',
                'code' => 'PUN',
                'status' => 1,
            ),
            392 => 
            array (
                'zone_id' => 393,
                'country_id' => 25,
                'name' => 'Samdrup Jongkhar',
                'code' => 'SJO',
                'status' => 1,
            ),
            393 => 
            array (
                'zone_id' => 394,
                'country_id' => 25,
                'name' => 'Samtse',
                'code' => 'SAT',
                'status' => 1,
            ),
            394 => 
            array (
                'zone_id' => 395,
                'country_id' => 25,
                'name' => 'Sarpang',
                'code' => 'SAR',
                'status' => 1,
            ),
            395 => 
            array (
                'zone_id' => 396,
                'country_id' => 25,
                'name' => 'Thimphu',
                'code' => 'THI',
                'status' => 1,
            ),
            396 => 
            array (
                'zone_id' => 397,
                'country_id' => 25,
                'name' => 'Trashigang',
                'code' => 'TRG',
                'status' => 1,
            ),
            397 => 
            array (
                'zone_id' => 398,
                'country_id' => 25,
                'name' => 'Trashiyangste',
                'code' => 'TRY',
                'status' => 1,
            ),
            398 => 
            array (
                'zone_id' => 399,
                'country_id' => 25,
                'name' => 'Trongsa',
                'code' => 'TRO',
                'status' => 1,
            ),
            399 => 
            array (
                'zone_id' => 400,
                'country_id' => 25,
                'name' => 'Tsirang',
                'code' => 'TSI',
                'status' => 1,
            ),
            400 => 
            array (
                'zone_id' => 401,
                'country_id' => 25,
                'name' => 'Wangdue Phodrang',
                'code' => 'WPH',
                'status' => 1,
            ),
            401 => 
            array (
                'zone_id' => 402,
                'country_id' => 25,
                'name' => 'Zhemgang',
                'code' => 'ZHE',
                'status' => 1,
            ),
            402 => 
            array (
                'zone_id' => 403,
                'country_id' => 26,
                'name' => 'Beni',
                'code' => 'BEN',
                'status' => 1,
            ),
            403 => 
            array (
                'zone_id' => 404,
                'country_id' => 26,
                'name' => 'Chuquisaca',
                'code' => 'CHU',
                'status' => 1,
            ),
            404 => 
            array (
                'zone_id' => 405,
                'country_id' => 26,
                'name' => 'Cochabamba',
                'code' => 'COC',
                'status' => 1,
            ),
            405 => 
            array (
                'zone_id' => 406,
                'country_id' => 26,
                'name' => 'La Paz',
                'code' => 'LPZ',
                'status' => 1,
            ),
            406 => 
            array (
                'zone_id' => 407,
                'country_id' => 26,
                'name' => 'Oruro',
                'code' => 'ORU',
                'status' => 1,
            ),
            407 => 
            array (
                'zone_id' => 408,
                'country_id' => 26,
                'name' => 'Pando',
                'code' => 'PAN',
                'status' => 1,
            ),
            408 => 
            array (
                'zone_id' => 409,
                'country_id' => 26,
                'name' => 'Potosi',
                'code' => 'POT',
                'status' => 1,
            ),
            409 => 
            array (
                'zone_id' => 410,
                'country_id' => 26,
                'name' => 'Santa Cruz',
                'code' => 'SCZ',
                'status' => 1,
            ),
            410 => 
            array (
                'zone_id' => 411,
                'country_id' => 26,
                'name' => 'Tarija',
                'code' => 'TAR',
                'status' => 1,
            ),
            411 => 
            array (
                'zone_id' => 412,
                'country_id' => 27,
                'name' => 'Brcko district',
                'code' => 'BRO',
                'status' => 1,
            ),
            412 => 
            array (
                'zone_id' => 413,
                'country_id' => 27,
                'name' => 'Unsko-Sanski Kanton',
                'code' => 'FUS',
                'status' => 1,
            ),
            413 => 
            array (
                'zone_id' => 414,
                'country_id' => 27,
                'name' => 'Posavski Kanton',
                'code' => 'FPO',
                'status' => 1,
            ),
            414 => 
            array (
                'zone_id' => 415,
                'country_id' => 27,
                'name' => 'Tuzlanski Kanton',
                'code' => 'FTU',
                'status' => 1,
            ),
            415 => 
            array (
                'zone_id' => 416,
                'country_id' => 27,
                'name' => 'Zenicko-Dobojski Kanton',
                'code' => 'FZE',
                'status' => 1,
            ),
            416 => 
            array (
                'zone_id' => 417,
                'country_id' => 27,
                'name' => 'Bosanskopodrinjski Kanton',
                'code' => 'FBP',
                'status' => 1,
            ),
            417 => 
            array (
                'zone_id' => 418,
                'country_id' => 27,
                'name' => 'Srednjebosanski Kanton',
                'code' => 'FSB',
                'status' => 1,
            ),
            418 => 
            array (
                'zone_id' => 419,
                'country_id' => 27,
                'name' => 'Hercegovacko-neretvanski Kanton',
                'code' => 'FHN',
                'status' => 1,
            ),
            419 => 
            array (
                'zone_id' => 420,
                'country_id' => 27,
                'name' => 'Zapadnohercegovacka Zupanija',
                'code' => 'FZH',
                'status' => 1,
            ),
            420 => 
            array (
                'zone_id' => 421,
                'country_id' => 27,
                'name' => 'Kanton Sarajevo',
                'code' => 'FSA',
                'status' => 1,
            ),
            421 => 
            array (
                'zone_id' => 422,
                'country_id' => 27,
                'name' => 'Zapadnobosanska',
                'code' => 'FZA',
                'status' => 1,
            ),
            422 => 
            array (
                'zone_id' => 423,
                'country_id' => 27,
                'name' => 'Banja Luka',
                'code' => 'SBL',
                'status' => 1,
            ),
            423 => 
            array (
                'zone_id' => 424,
                'country_id' => 27,
                'name' => 'Doboj',
                'code' => 'SDO',
                'status' => 1,
            ),
            424 => 
            array (
                'zone_id' => 425,
                'country_id' => 27,
                'name' => 'Bijeljina',
                'code' => 'SBI',
                'status' => 1,
            ),
            425 => 
            array (
                'zone_id' => 426,
                'country_id' => 27,
                'name' => 'Vlasenica',
                'code' => 'SVL',
                'status' => 1,
            ),
            426 => 
            array (
                'zone_id' => 427,
                'country_id' => 27,
                'name' => 'Sarajevo-Romanija or Sokolac',
                'code' => 'SSR',
                'status' => 1,
            ),
            427 => 
            array (
                'zone_id' => 428,
                'country_id' => 27,
                'name' => 'Foca',
                'code' => 'SFO',
                'status' => 1,
            ),
            428 => 
            array (
                'zone_id' => 429,
                'country_id' => 27,
                'name' => 'Trebinje',
                'code' => 'STR',
                'status' => 1,
            ),
            429 => 
            array (
                'zone_id' => 430,
                'country_id' => 28,
                'name' => 'Central',
                'code' => 'CE',
                'status' => 1,
            ),
            430 => 
            array (
                'zone_id' => 431,
                'country_id' => 28,
                'name' => 'Ghanzi',
                'code' => 'GH',
                'status' => 1,
            ),
            431 => 
            array (
                'zone_id' => 432,
                'country_id' => 28,
                'name' => 'Kgalagadi',
                'code' => 'KD',
                'status' => 1,
            ),
            432 => 
            array (
                'zone_id' => 433,
                'country_id' => 28,
                'name' => 'Kgatleng',
                'code' => 'KT',
                'status' => 1,
            ),
            433 => 
            array (
                'zone_id' => 434,
                'country_id' => 28,
                'name' => 'Kweneng',
                'code' => 'KW',
                'status' => 1,
            ),
            434 => 
            array (
                'zone_id' => 435,
                'country_id' => 28,
                'name' => 'Ngamiland',
                'code' => 'NG',
                'status' => 1,
            ),
            435 => 
            array (
                'zone_id' => 436,
                'country_id' => 28,
                'name' => 'North East',
                'code' => 'NE',
                'status' => 1,
            ),
            436 => 
            array (
                'zone_id' => 437,
                'country_id' => 28,
                'name' => 'North West',
                'code' => 'NW',
                'status' => 1,
            ),
            437 => 
            array (
                'zone_id' => 438,
                'country_id' => 28,
                'name' => 'South East',
                'code' => 'SE',
                'status' => 1,
            ),
            438 => 
            array (
                'zone_id' => 439,
                'country_id' => 28,
                'name' => 'Southern',
                'code' => 'SO',
                'status' => 1,
            ),
            439 => 
            array (
                'zone_id' => 440,
                'country_id' => 30,
                'name' => 'Acre',
                'code' => 'AC',
                'status' => 1,
            ),
            440 => 
            array (
                'zone_id' => 441,
                'country_id' => 30,
                'name' => 'Alagoas',
                'code' => 'AL',
                'status' => 1,
            ),
            441 => 
            array (
                'zone_id' => 442,
                'country_id' => 30,
                'name' => 'Amapá',
                'code' => 'AP',
                'status' => 1,
            ),
            442 => 
            array (
                'zone_id' => 443,
                'country_id' => 30,
                'name' => 'Amazonas',
                'code' => 'AM',
                'status' => 1,
            ),
            443 => 
            array (
                'zone_id' => 444,
                'country_id' => 30,
                'name' => 'Bahia',
                'code' => 'BA',
                'status' => 1,
            ),
            444 => 
            array (
                'zone_id' => 445,
                'country_id' => 30,
                'name' => 'Ceará',
                'code' => 'CE',
                'status' => 1,
            ),
            445 => 
            array (
                'zone_id' => 446,
                'country_id' => 30,
                'name' => 'Distrito Federal',
                'code' => 'DF',
                'status' => 1,
            ),
            446 => 
            array (
                'zone_id' => 447,
                'country_id' => 30,
                'name' => 'Espírito Santo',
                'code' => 'ES',
                'status' => 1,
            ),
            447 => 
            array (
                'zone_id' => 448,
                'country_id' => 30,
                'name' => 'Goiás',
                'code' => 'GO',
                'status' => 1,
            ),
            448 => 
            array (
                'zone_id' => 449,
                'country_id' => 30,
                'name' => 'Maranhão',
                'code' => 'MA',
                'status' => 1,
            ),
            449 => 
            array (
                'zone_id' => 450,
                'country_id' => 30,
                'name' => 'Mato Grosso',
                'code' => 'MT',
                'status' => 1,
            ),
            450 => 
            array (
                'zone_id' => 451,
                'country_id' => 30,
                'name' => 'Mato Grosso do Sul',
                'code' => 'MS',
                'status' => 1,
            ),
            451 => 
            array (
                'zone_id' => 452,
                'country_id' => 30,
                'name' => 'Minas Gerais',
                'code' => 'MG',
                'status' => 1,
            ),
            452 => 
            array (
                'zone_id' => 453,
                'country_id' => 30,
                'name' => 'Pará',
                'code' => 'PA',
                'status' => 1,
            ),
            453 => 
            array (
                'zone_id' => 454,
                'country_id' => 30,
                'name' => 'Paraíba',
                'code' => 'PB',
                'status' => 1,
            ),
            454 => 
            array (
                'zone_id' => 455,
                'country_id' => 30,
                'name' => 'Paraná',
                'code' => 'PR',
                'status' => 1,
            ),
            455 => 
            array (
                'zone_id' => 456,
                'country_id' => 30,
                'name' => 'Pernambuco',
                'code' => 'PE',
                'status' => 1,
            ),
            456 => 
            array (
                'zone_id' => 457,
                'country_id' => 30,
                'name' => 'Piauí',
                'code' => 'PI',
                'status' => 1,
            ),
            457 => 
            array (
                'zone_id' => 458,
                'country_id' => 30,
                'name' => 'Rio de Janeiro',
                'code' => 'RJ',
                'status' => 1,
            ),
            458 => 
            array (
                'zone_id' => 459,
                'country_id' => 30,
                'name' => 'Rio Grande do Norte',
                'code' => 'RN',
                'status' => 1,
            ),
            459 => 
            array (
                'zone_id' => 460,
                'country_id' => 30,
                'name' => 'Rio Grande do Sul',
                'code' => 'RS',
                'status' => 1,
            ),
            460 => 
            array (
                'zone_id' => 461,
                'country_id' => 30,
                'name' => 'Rondônia',
                'code' => 'RO',
                'status' => 1,
            ),
            461 => 
            array (
                'zone_id' => 462,
                'country_id' => 30,
                'name' => 'Roraima',
                'code' => 'RR',
                'status' => 1,
            ),
            462 => 
            array (
                'zone_id' => 463,
                'country_id' => 30,
                'name' => 'Santa Catarina',
                'code' => 'SC',
                'status' => 1,
            ),
            463 => 
            array (
                'zone_id' => 464,
                'country_id' => 30,
                'name' => 'São Paulo',
                'code' => 'SP',
                'status' => 1,
            ),
            464 => 
            array (
                'zone_id' => 465,
                'country_id' => 30,
                'name' => 'Sergipe',
                'code' => 'SE',
                'status' => 1,
            ),
            465 => 
            array (
                'zone_id' => 466,
                'country_id' => 30,
                'name' => 'Tocantins',
                'code' => 'TO',
                'status' => 1,
            ),
            466 => 
            array (
                'zone_id' => 467,
                'country_id' => 31,
                'name' => 'Peros Banhos',
                'code' => 'PB',
                'status' => 1,
            ),
            467 => 
            array (
                'zone_id' => 468,
                'country_id' => 31,
                'name' => 'Salomon Islands',
                'code' => 'SI',
                'status' => 1,
            ),
            468 => 
            array (
                'zone_id' => 469,
                'country_id' => 31,
                'name' => 'Nelsons Island',
                'code' => 'NI',
                'status' => 1,
            ),
            469 => 
            array (
                'zone_id' => 470,
                'country_id' => 31,
                'name' => 'Three Brothers',
                'code' => 'TB',
                'status' => 1,
            ),
            470 => 
            array (
                'zone_id' => 471,
                'country_id' => 31,
                'name' => 'Eagle Islands',
                'code' => 'EA',
                'status' => 1,
            ),
            471 => 
            array (
                'zone_id' => 472,
                'country_id' => 31,
                'name' => 'Danger Island',
                'code' => 'DI',
                'status' => 1,
            ),
            472 => 
            array (
                'zone_id' => 473,
                'country_id' => 31,
                'name' => 'Egmont Islands',
                'code' => 'EG',
                'status' => 1,
            ),
            473 => 
            array (
                'zone_id' => 474,
                'country_id' => 31,
                'name' => 'Diego Garcia',
                'code' => 'DG',
                'status' => 1,
            ),
            474 => 
            array (
                'zone_id' => 475,
                'country_id' => 32,
                'name' => 'Belait',
                'code' => 'BEL',
                'status' => 1,
            ),
            475 => 
            array (
                'zone_id' => 476,
                'country_id' => 32,
                'name' => 'Brunei and Muara',
                'code' => 'BRM',
                'status' => 1,
            ),
            476 => 
            array (
                'zone_id' => 477,
                'country_id' => 32,
                'name' => 'Temburong',
                'code' => 'TEM',
                'status' => 1,
            ),
            477 => 
            array (
                'zone_id' => 478,
                'country_id' => 32,
                'name' => 'Tutong',
                'code' => 'TUT',
                'status' => 1,
            ),
            478 => 
            array (
                'zone_id' => 479,
                'country_id' => 33,
                'name' => 'Blagoevgrad',
                'code' => '',
                'status' => 1,
            ),
            479 => 
            array (
                'zone_id' => 480,
                'country_id' => 33,
                'name' => 'Burgas',
                'code' => '',
                'status' => 1,
            ),
            480 => 
            array (
                'zone_id' => 481,
                'country_id' => 33,
                'name' => 'Dobrich',
                'code' => '',
                'status' => 1,
            ),
            481 => 
            array (
                'zone_id' => 482,
                'country_id' => 33,
                'name' => 'Gabrovo',
                'code' => '',
                'status' => 1,
            ),
            482 => 
            array (
                'zone_id' => 483,
                'country_id' => 33,
                'name' => 'Haskovo',
                'code' => '',
                'status' => 1,
            ),
            483 => 
            array (
                'zone_id' => 484,
                'country_id' => 33,
                'name' => 'Kardjali',
                'code' => '',
                'status' => 1,
            ),
            484 => 
            array (
                'zone_id' => 485,
                'country_id' => 33,
                'name' => 'Kyustendil',
                'code' => '',
                'status' => 1,
            ),
            485 => 
            array (
                'zone_id' => 486,
                'country_id' => 33,
                'name' => 'Lovech',
                'code' => '',
                'status' => 1,
            ),
            486 => 
            array (
                'zone_id' => 487,
                'country_id' => 33,
                'name' => 'Montana',
                'code' => '',
                'status' => 1,
            ),
            487 => 
            array (
                'zone_id' => 488,
                'country_id' => 33,
                'name' => 'Pazardjik',
                'code' => '',
                'status' => 1,
            ),
            488 => 
            array (
                'zone_id' => 489,
                'country_id' => 33,
                'name' => 'Pernik',
                'code' => '',
                'status' => 1,
            ),
            489 => 
            array (
                'zone_id' => 490,
                'country_id' => 33,
                'name' => 'Pleven',
                'code' => '',
                'status' => 1,
            ),
            490 => 
            array (
                'zone_id' => 491,
                'country_id' => 33,
                'name' => 'Plovdiv',
                'code' => '',
                'status' => 1,
            ),
            491 => 
            array (
                'zone_id' => 492,
                'country_id' => 33,
                'name' => 'Razgrad',
                'code' => '',
                'status' => 1,
            ),
            492 => 
            array (
                'zone_id' => 493,
                'country_id' => 33,
                'name' => 'Shumen',
                'code' => '',
                'status' => 1,
            ),
            493 => 
            array (
                'zone_id' => 494,
                'country_id' => 33,
                'name' => 'Silistra',
                'code' => '',
                'status' => 1,
            ),
            494 => 
            array (
                'zone_id' => 495,
                'country_id' => 33,
                'name' => 'Sliven',
                'code' => '',
                'status' => 1,
            ),
            495 => 
            array (
                'zone_id' => 496,
                'country_id' => 33,
                'name' => 'Smolyan',
                'code' => '',
                'status' => 1,
            ),
            496 => 
            array (
                'zone_id' => 497,
                'country_id' => 33,
                'name' => 'Sofia',
                'code' => '',
                'status' => 1,
            ),
            497 => 
            array (
                'zone_id' => 498,
                'country_id' => 33,
                'name' => 'Sofia - town',
                'code' => '',
                'status' => 1,
            ),
            498 => 
            array (
                'zone_id' => 499,
                'country_id' => 33,
                'name' => 'Stara Zagora',
                'code' => '',
                'status' => 1,
            ),
            499 => 
            array (
                'zone_id' => 500,
                'country_id' => 33,
                'name' => 'Targovishte',
                'code' => '',
                'status' => 1,
            ),
        ));
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 501,
                'country_id' => 33,
                'name' => 'Varna',
                'code' => '',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 502,
                'country_id' => 33,
                'name' => 'Veliko Tarnovo',
                'code' => '',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 503,
                'country_id' => 33,
                'name' => 'Vidin',
                'code' => '',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 504,
                'country_id' => 33,
                'name' => 'Vratza',
                'code' => '',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 505,
                'country_id' => 33,
                'name' => 'Yambol',
                'code' => '',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 506,
                'country_id' => 34,
                'name' => 'Bale',
                'code' => 'BAL',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 507,
                'country_id' => 34,
                'name' => 'Bam',
                'code' => 'BAM',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 508,
                'country_id' => 34,
                'name' => 'Banwa',
                'code' => 'BAN',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 509,
                'country_id' => 34,
                'name' => 'Bazega',
                'code' => 'BAZ',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 510,
                'country_id' => 34,
                'name' => 'Bougouriba',
                'code' => 'BOR',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 511,
                'country_id' => 34,
                'name' => 'Boulgou',
                'code' => 'BLG',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 512,
                'country_id' => 34,
                'name' => 'Boulkiemde',
                'code' => 'BOK',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 513,
                'country_id' => 34,
                'name' => 'Comoe',
                'code' => 'COM',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 514,
                'country_id' => 34,
                'name' => 'Ganzourgou',
                'code' => 'GAN',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 515,
                'country_id' => 34,
                'name' => 'Gnagna',
                'code' => 'GNA',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 516,
                'country_id' => 34,
                'name' => 'Gourma',
                'code' => 'GOU',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 517,
                'country_id' => 34,
                'name' => 'Houet',
                'code' => 'HOU',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 518,
                'country_id' => 34,
                'name' => 'Ioba',
                'code' => 'IOA',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 519,
                'country_id' => 34,
                'name' => 'Kadiogo',
                'code' => 'KAD',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 520,
                'country_id' => 34,
                'name' => 'Kenedougou',
                'code' => 'KEN',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 521,
                'country_id' => 34,
                'name' => 'Komondjari',
                'code' => 'KOD',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 522,
                'country_id' => 34,
                'name' => 'Kompienga',
                'code' => 'KOP',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 523,
                'country_id' => 34,
                'name' => 'Kossi',
                'code' => 'KOS',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 524,
                'country_id' => 34,
                'name' => 'Koulpelogo',
                'code' => 'KOL',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 525,
                'country_id' => 34,
                'name' => 'Kouritenga',
                'code' => 'KOT',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 526,
                'country_id' => 34,
                'name' => 'Kourweogo',
                'code' => 'KOW',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 527,
                'country_id' => 34,
                'name' => 'Leraba',
                'code' => 'LER',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 528,
                'country_id' => 34,
                'name' => 'Loroum',
                'code' => 'LOR',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 529,
                'country_id' => 34,
                'name' => 'Mouhoun',
                'code' => 'MOU',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 530,
                'country_id' => 34,
                'name' => 'Nahouri',
                'code' => 'NAH',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 531,
                'country_id' => 34,
                'name' => 'Namentenga',
                'code' => 'NAM',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 532,
                'country_id' => 34,
                'name' => 'Nayala',
                'code' => 'NAY',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 533,
                'country_id' => 34,
                'name' => 'Noumbiel',
                'code' => 'NOU',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 534,
                'country_id' => 34,
                'name' => 'Oubritenga',
                'code' => 'OUB',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 535,
                'country_id' => 34,
                'name' => 'Oudalan',
                'code' => 'OUD',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 536,
                'country_id' => 34,
                'name' => 'Passore',
                'code' => 'PAS',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 537,
                'country_id' => 34,
                'name' => 'Poni',
                'code' => 'PON',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 538,
                'country_id' => 34,
                'name' => 'Sanguie',
                'code' => 'SAG',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 539,
                'country_id' => 34,
                'name' => 'Sanmatenga',
                'code' => 'SAM',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 540,
                'country_id' => 34,
                'name' => 'Seno',
                'code' => 'SEN',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 541,
                'country_id' => 34,
                'name' => 'Sissili',
                'code' => 'SIS',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 542,
                'country_id' => 34,
                'name' => 'Soum',
                'code' => 'SOM',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 543,
                'country_id' => 34,
                'name' => 'Sourou',
                'code' => 'SOR',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 544,
                'country_id' => 34,
                'name' => 'Tapoa',
                'code' => 'TAP',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 545,
                'country_id' => 34,
                'name' => 'Tuy',
                'code' => 'TUY',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 546,
                'country_id' => 34,
                'name' => 'Yagha',
                'code' => 'YAG',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 547,
                'country_id' => 34,
                'name' => 'Yatenga',
                'code' => 'YAT',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 548,
                'country_id' => 34,
                'name' => 'Ziro',
                'code' => 'ZIR',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 549,
                'country_id' => 34,
                'name' => 'Zondoma',
                'code' => 'ZOD',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 550,
                'country_id' => 34,
                'name' => 'Zoundweogo',
                'code' => 'ZOW',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 551,
                'country_id' => 35,
                'name' => 'Bubanza',
                'code' => 'BB',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 552,
                'country_id' => 35,
                'name' => 'Bujumbura',
                'code' => 'BJ',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 553,
                'country_id' => 35,
                'name' => 'Bururi',
                'code' => 'BR',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 554,
                'country_id' => 35,
                'name' => 'Cankuzo',
                'code' => 'CA',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 555,
                'country_id' => 35,
                'name' => 'Cibitoke',
                'code' => 'CI',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 556,
                'country_id' => 35,
                'name' => 'Gitega',
                'code' => 'GI',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 557,
                'country_id' => 35,
                'name' => 'Karuzi',
                'code' => 'KR',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 558,
                'country_id' => 35,
                'name' => 'Kayanza',
                'code' => 'KY',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 559,
                'country_id' => 35,
                'name' => 'Kirundo',
                'code' => 'KI',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 560,
                'country_id' => 35,
                'name' => 'Makamba',
                'code' => 'MA',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 561,
                'country_id' => 35,
                'name' => 'Muramvya',
                'code' => 'MU',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 562,
                'country_id' => 35,
                'name' => 'Muyinga',
                'code' => 'MY',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 563,
                'country_id' => 35,
                'name' => 'Mwaro',
                'code' => 'MW',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 564,
                'country_id' => 35,
                'name' => 'Ngozi',
                'code' => 'NG',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 565,
                'country_id' => 35,
                'name' => 'Rutana',
                'code' => 'RT',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 566,
                'country_id' => 35,
                'name' => 'Ruyigi',
                'code' => 'RY',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 567,
                'country_id' => 36,
                'name' => 'Phnom Penh',
                'code' => 'PP',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 568,
                'country_id' => 36,
            'name' => 'Preah Seihanu (Kompong Som or Sihanoukville)',
                'code' => 'PS',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 569,
                'country_id' => 36,
                'name' => 'Pailin',
                'code' => 'PA',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 570,
                'country_id' => 36,
                'name' => 'Keb',
                'code' => 'KB',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 571,
                'country_id' => 36,
                'name' => 'Banteay Meanchey',
                'code' => 'BM',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 572,
                'country_id' => 36,
                'name' => 'Battambang',
                'code' => 'BA',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 573,
                'country_id' => 36,
                'name' => 'Kampong Cham',
                'code' => 'KM',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 574,
                'country_id' => 36,
                'name' => 'Kampong Chhnang',
                'code' => 'KN',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 575,
                'country_id' => 36,
                'name' => 'Kampong Speu',
                'code' => 'KU',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 576,
                'country_id' => 36,
                'name' => 'Kampong Som',
                'code' => 'KO',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 577,
                'country_id' => 36,
                'name' => 'Kampong Thom',
                'code' => 'KT',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 578,
                'country_id' => 36,
                'name' => 'Kampot',
                'code' => 'KP',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 579,
                'country_id' => 36,
                'name' => 'Kandal',
                'code' => 'KL',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 580,
                'country_id' => 36,
                'name' => 'Kaoh Kong',
                'code' => 'KK',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 581,
                'country_id' => 36,
                'name' => 'Kratie',
                'code' => 'KR',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 582,
                'country_id' => 36,
                'name' => 'Mondul Kiri',
                'code' => 'MK',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 583,
                'country_id' => 36,
                'name' => 'Oddar Meancheay',
                'code' => 'OM',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 584,
                'country_id' => 36,
                'name' => 'Pursat',
                'code' => 'PU',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 585,
                'country_id' => 36,
                'name' => 'Preah Vihear',
                'code' => 'PR',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 586,
                'country_id' => 36,
                'name' => 'Prey Veng',
                'code' => 'PG',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 587,
                'country_id' => 36,
                'name' => 'Ratanak Kiri',
                'code' => 'RK',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 588,
                'country_id' => 36,
                'name' => 'Siemreap',
                'code' => 'SI',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 589,
                'country_id' => 36,
                'name' => 'Stung Treng',
                'code' => 'ST',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 590,
                'country_id' => 36,
                'name' => 'Svay Rieng',
                'code' => 'SR',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 591,
                'country_id' => 36,
                'name' => 'Takeo',
                'code' => 'TK',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 592,
                'country_id' => 37,
            'name' => 'Adamawa (Adamaoua)',
                'code' => 'ADA',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 593,
                'country_id' => 37,
                'name' => 'Centre',
                'code' => 'CEN',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 594,
                'country_id' => 37,
            'name' => 'East (Est)',
                'code' => 'EST',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 595,
                'country_id' => 37,
            'name' => 'Extreme North (Extreme-Nord)',
                'code' => 'EXN',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 596,
                'country_id' => 37,
                'name' => 'Littoral',
                'code' => 'LIT',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 597,
                'country_id' => 37,
            'name' => 'North (Nord)',
                'code' => 'NOR',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 598,
                'country_id' => 37,
            'name' => 'Northwest (Nord-Ouest)',
                'code' => 'NOT',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 599,
                'country_id' => 37,
            'name' => 'West (Ouest)',
                'code' => 'OUE',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 600,
                'country_id' => 37,
            'name' => 'South (Sud)',
                'code' => 'SUD',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 601,
                'country_id' => 37,
            'name' => 'Southwest (Sud-Ouest).',
                'code' => 'SOU',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 602,
                'country_id' => 38,
                'name' => 'Alberta',
                'code' => 'AB',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 603,
                'country_id' => 38,
                'name' => 'British Columbia',
                'code' => 'BC',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 604,
                'country_id' => 38,
                'name' => 'Manitoba',
                'code' => 'MB',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 605,
                'country_id' => 38,
                'name' => 'New Brunswick',
                'code' => 'NB',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 606,
                'country_id' => 38,
                'name' => 'Newfoundland and Labrador',
                'code' => 'NL',
                'status' => 1,
            ),
            106 => 
            array (
                'zone_id' => 607,
                'country_id' => 38,
                'name' => 'Northwest Territories',
                'code' => 'NT',
                'status' => 1,
            ),
            107 => 
            array (
                'zone_id' => 608,
                'country_id' => 38,
                'name' => 'Nova Scotia',
                'code' => 'NS',
                'status' => 1,
            ),
            108 => 
            array (
                'zone_id' => 609,
                'country_id' => 38,
                'name' => 'Nunavut',
                'code' => 'NU',
                'status' => 1,
            ),
            109 => 
            array (
                'zone_id' => 610,
                'country_id' => 38,
                'name' => 'Ontario',
                'code' => 'ON',
                'status' => 1,
            ),
            110 => 
            array (
                'zone_id' => 611,
                'country_id' => 38,
                'name' => 'Prince Edward Island',
                'code' => 'PE',
                'status' => 1,
            ),
            111 => 
            array (
                'zone_id' => 612,
                'country_id' => 38,
                'name' => 'Qu&eacute;bec',
                'code' => 'QC',
                'status' => 1,
            ),
            112 => 
            array (
                'zone_id' => 613,
                'country_id' => 38,
                'name' => 'Saskatchewan',
                'code' => 'SK',
                'status' => 1,
            ),
            113 => 
            array (
                'zone_id' => 614,
                'country_id' => 38,
                'name' => 'Yukon Territory',
                'code' => 'YT',
                'status' => 1,
            ),
            114 => 
            array (
                'zone_id' => 615,
                'country_id' => 39,
                'name' => 'Boa Vista',
                'code' => 'BV',
                'status' => 1,
            ),
            115 => 
            array (
                'zone_id' => 616,
                'country_id' => 39,
                'name' => 'Brava',
                'code' => 'BR',
                'status' => 1,
            ),
            116 => 
            array (
                'zone_id' => 617,
                'country_id' => 39,
                'name' => 'Calheta de Sao Miguel',
                'code' => 'CS',
                'status' => 1,
            ),
            117 => 
            array (
                'zone_id' => 618,
                'country_id' => 39,
                'name' => 'Maio',
                'code' => 'MA',
                'status' => 1,
            ),
            118 => 
            array (
                'zone_id' => 619,
                'country_id' => 39,
                'name' => 'Mosteiros',
                'code' => 'MO',
                'status' => 1,
            ),
            119 => 
            array (
                'zone_id' => 620,
                'country_id' => 39,
                'name' => 'Paul',
                'code' => 'PA',
                'status' => 1,
            ),
            120 => 
            array (
                'zone_id' => 621,
                'country_id' => 39,
                'name' => 'Porto Novo',
                'code' => 'PN',
                'status' => 1,
            ),
            121 => 
            array (
                'zone_id' => 622,
                'country_id' => 39,
                'name' => 'Praia',
                'code' => 'PR',
                'status' => 1,
            ),
            122 => 
            array (
                'zone_id' => 623,
                'country_id' => 39,
                'name' => 'Ribeira Grande',
                'code' => 'RG',
                'status' => 1,
            ),
            123 => 
            array (
                'zone_id' => 624,
                'country_id' => 39,
                'name' => 'Sal',
                'code' => 'SL',
                'status' => 1,
            ),
            124 => 
            array (
                'zone_id' => 625,
                'country_id' => 39,
                'name' => 'Santa Catarina',
                'code' => 'CA',
                'status' => 1,
            ),
            125 => 
            array (
                'zone_id' => 626,
                'country_id' => 39,
                'name' => 'Santa Cruz',
                'code' => 'CR',
                'status' => 1,
            ),
            126 => 
            array (
                'zone_id' => 627,
                'country_id' => 39,
                'name' => 'Sao Domingos',
                'code' => 'SD',
                'status' => 1,
            ),
            127 => 
            array (
                'zone_id' => 628,
                'country_id' => 39,
                'name' => 'Sao Filipe',
                'code' => 'SF',
                'status' => 1,
            ),
            128 => 
            array (
                'zone_id' => 629,
                'country_id' => 39,
                'name' => 'Sao Nicolau',
                'code' => 'SN',
                'status' => 1,
            ),
            129 => 
            array (
                'zone_id' => 630,
                'country_id' => 39,
                'name' => 'Sao Vicente',
                'code' => 'SV',
                'status' => 1,
            ),
            130 => 
            array (
                'zone_id' => 631,
                'country_id' => 39,
                'name' => 'Tarrafal',
                'code' => 'TA',
                'status' => 1,
            ),
            131 => 
            array (
                'zone_id' => 632,
                'country_id' => 40,
                'name' => 'Creek',
                'code' => 'CR',
                'status' => 1,
            ),
            132 => 
            array (
                'zone_id' => 633,
                'country_id' => 40,
                'name' => 'Eastern',
                'code' => 'EA',
                'status' => 1,
            ),
            133 => 
            array (
                'zone_id' => 634,
                'country_id' => 40,
                'name' => 'Midland',
                'code' => 'ML',
                'status' => 1,
            ),
            134 => 
            array (
                'zone_id' => 635,
                'country_id' => 40,
                'name' => 'South Town',
                'code' => 'ST',
                'status' => 1,
            ),
            135 => 
            array (
                'zone_id' => 636,
                'country_id' => 40,
                'name' => 'Spot Bay',
                'code' => 'SP',
                'status' => 1,
            ),
            136 => 
            array (
                'zone_id' => 637,
                'country_id' => 40,
                'name' => 'Stake Bay',
                'code' => 'SK',
                'status' => 1,
            ),
            137 => 
            array (
                'zone_id' => 638,
                'country_id' => 40,
                'name' => 'West End',
                'code' => 'WD',
                'status' => 1,
            ),
            138 => 
            array (
                'zone_id' => 639,
                'country_id' => 40,
                'name' => 'Western',
                'code' => 'WN',
                'status' => 1,
            ),
            139 => 
            array (
                'zone_id' => 640,
                'country_id' => 41,
                'name' => 'Bamingui-Bangoran',
                'code' => 'BBA',
                'status' => 1,
            ),
            140 => 
            array (
                'zone_id' => 641,
                'country_id' => 41,
                'name' => 'Basse-Kotto',
                'code' => 'BKO',
                'status' => 1,
            ),
            141 => 
            array (
                'zone_id' => 642,
                'country_id' => 41,
                'name' => 'Haute-Kotto',
                'code' => 'HKO',
                'status' => 1,
            ),
            142 => 
            array (
                'zone_id' => 643,
                'country_id' => 41,
                'name' => 'Haut-Mbomou',
                'code' => 'HMB',
                'status' => 1,
            ),
            143 => 
            array (
                'zone_id' => 644,
                'country_id' => 41,
                'name' => 'Kemo',
                'code' => 'KEM',
                'status' => 1,
            ),
            144 => 
            array (
                'zone_id' => 645,
                'country_id' => 41,
                'name' => 'Lobaye',
                'code' => 'LOB',
                'status' => 1,
            ),
            145 => 
            array (
                'zone_id' => 646,
                'country_id' => 41,
                'name' => 'Mambere-KadeÔ',
                'code' => 'MKD',
                'status' => 1,
            ),
            146 => 
            array (
                'zone_id' => 647,
                'country_id' => 41,
                'name' => 'Mbomou',
                'code' => 'MBO',
                'status' => 1,
            ),
            147 => 
            array (
                'zone_id' => 648,
                'country_id' => 41,
                'name' => 'Nana-Mambere',
                'code' => 'NMM',
                'status' => 1,
            ),
            148 => 
            array (
                'zone_id' => 649,
                'country_id' => 41,
                'name' => 'Ombella-M\'Poko',
                'code' => 'OMP',
                'status' => 1,
            ),
            149 => 
            array (
                'zone_id' => 650,
                'country_id' => 41,
                'name' => 'Ouaka',
                'code' => 'OUK',
                'status' => 1,
            ),
            150 => 
            array (
                'zone_id' => 651,
                'country_id' => 41,
                'name' => 'Ouham',
                'code' => 'OUH',
                'status' => 1,
            ),
            151 => 
            array (
                'zone_id' => 652,
                'country_id' => 41,
                'name' => 'Ouham-Pende',
                'code' => 'OPE',
                'status' => 1,
            ),
            152 => 
            array (
                'zone_id' => 653,
                'country_id' => 41,
                'name' => 'Vakaga',
                'code' => 'VAK',
                'status' => 1,
            ),
            153 => 
            array (
                'zone_id' => 654,
                'country_id' => 41,
                'name' => 'Nana-Grebizi',
                'code' => 'NGR',
                'status' => 1,
            ),
            154 => 
            array (
                'zone_id' => 655,
                'country_id' => 41,
                'name' => 'Sangha-Mbaere',
                'code' => 'SMB',
                'status' => 1,
            ),
            155 => 
            array (
                'zone_id' => 656,
                'country_id' => 41,
                'name' => 'Bangui',
                'code' => 'BAN',
                'status' => 1,
            ),
            156 => 
            array (
                'zone_id' => 657,
                'country_id' => 42,
                'name' => 'Batha',
                'code' => 'BA',
                'status' => 1,
            ),
            157 => 
            array (
                'zone_id' => 658,
                'country_id' => 42,
                'name' => 'Biltine',
                'code' => 'BI',
                'status' => 1,
            ),
            158 => 
            array (
                'zone_id' => 659,
                'country_id' => 42,
                'name' => 'Borkou-Ennedi-Tibesti',
                'code' => 'BE',
                'status' => 1,
            ),
            159 => 
            array (
                'zone_id' => 660,
                'country_id' => 42,
                'name' => 'Chari-Baguirmi',
                'code' => 'CB',
                'status' => 1,
            ),
            160 => 
            array (
                'zone_id' => 661,
                'country_id' => 42,
                'name' => 'Guera',
                'code' => 'GU',
                'status' => 1,
            ),
            161 => 
            array (
                'zone_id' => 662,
                'country_id' => 42,
                'name' => 'Kanem',
                'code' => 'KA',
                'status' => 1,
            ),
            162 => 
            array (
                'zone_id' => 663,
                'country_id' => 42,
                'name' => 'Lac',
                'code' => 'LA',
                'status' => 1,
            ),
            163 => 
            array (
                'zone_id' => 664,
                'country_id' => 42,
                'name' => 'Logone Occidental',
                'code' => 'LC',
                'status' => 1,
            ),
            164 => 
            array (
                'zone_id' => 665,
                'country_id' => 42,
                'name' => 'Logone Oriental',
                'code' => 'LR',
                'status' => 1,
            ),
            165 => 
            array (
                'zone_id' => 666,
                'country_id' => 42,
                'name' => 'Mayo-Kebbi',
                'code' => 'MK',
                'status' => 1,
            ),
            166 => 
            array (
                'zone_id' => 667,
                'country_id' => 42,
                'name' => 'Moyen-Chari',
                'code' => 'MC',
                'status' => 1,
            ),
            167 => 
            array (
                'zone_id' => 668,
                'country_id' => 42,
                'name' => 'Ouaddai',
                'code' => 'OU',
                'status' => 1,
            ),
            168 => 
            array (
                'zone_id' => 669,
                'country_id' => 42,
                'name' => 'Salamat',
                'code' => 'SA',
                'status' => 1,
            ),
            169 => 
            array (
                'zone_id' => 670,
                'country_id' => 42,
                'name' => 'Tandjile',
                'code' => 'TA',
                'status' => 1,
            ),
            170 => 
            array (
                'zone_id' => 671,
                'country_id' => 43,
                'name' => 'Aisen del General Carlos Ibanez',
                'code' => 'AI',
                'status' => 1,
            ),
            171 => 
            array (
                'zone_id' => 672,
                'country_id' => 43,
                'name' => 'Antofagasta',
                'code' => 'AN',
                'status' => 1,
            ),
            172 => 
            array (
                'zone_id' => 673,
                'country_id' => 43,
                'name' => 'Araucania',
                'code' => 'AR',
                'status' => 1,
            ),
            173 => 
            array (
                'zone_id' => 674,
                'country_id' => 43,
                'name' => 'Atacama',
                'code' => 'AT',
                'status' => 1,
            ),
            174 => 
            array (
                'zone_id' => 675,
                'country_id' => 43,
                'name' => 'Bio-Bio',
                'code' => 'BI',
                'status' => 1,
            ),
            175 => 
            array (
                'zone_id' => 676,
                'country_id' => 43,
                'name' => 'Coquimbo',
                'code' => 'CO',
                'status' => 1,
            ),
            176 => 
            array (
                'zone_id' => 677,
                'country_id' => 43,
                'name' => 'Libertador General Bernardo O\'Higgins',
                'code' => 'LI',
                'status' => 1,
            ),
            177 => 
            array (
                'zone_id' => 678,
                'country_id' => 43,
                'name' => 'Los Lagos',
                'code' => 'LL',
                'status' => 1,
            ),
            178 => 
            array (
                'zone_id' => 679,
                'country_id' => 43,
                'name' => 'Magallanes y de la Antartica Chilena',
                'code' => 'MA',
                'status' => 1,
            ),
            179 => 
            array (
                'zone_id' => 680,
                'country_id' => 43,
                'name' => 'Maule',
                'code' => 'ML',
                'status' => 1,
            ),
            180 => 
            array (
                'zone_id' => 681,
                'country_id' => 43,
                'name' => 'Region Metropolitana',
                'code' => 'RM',
                'status' => 1,
            ),
            181 => 
            array (
                'zone_id' => 682,
                'country_id' => 43,
                'name' => 'Tarapaca',
                'code' => 'TA',
                'status' => 1,
            ),
            182 => 
            array (
                'zone_id' => 683,
                'country_id' => 43,
                'name' => 'Valparaiso',
                'code' => 'VS',
                'status' => 1,
            ),
            183 => 
            array (
                'zone_id' => 684,
                'country_id' => 44,
                'name' => 'Anhui',
                'code' => 'AN',
                'status' => 1,
            ),
            184 => 
            array (
                'zone_id' => 685,
                'country_id' => 44,
                'name' => 'Beijing',
                'code' => 'BE',
                'status' => 1,
            ),
            185 => 
            array (
                'zone_id' => 686,
                'country_id' => 44,
                'name' => 'Chongqing',
                'code' => 'CH',
                'status' => 1,
            ),
            186 => 
            array (
                'zone_id' => 687,
                'country_id' => 44,
                'name' => 'Fujian',
                'code' => 'FU',
                'status' => 1,
            ),
            187 => 
            array (
                'zone_id' => 688,
                'country_id' => 44,
                'name' => 'Gansu',
                'code' => 'GA',
                'status' => 1,
            ),
            188 => 
            array (
                'zone_id' => 689,
                'country_id' => 44,
                'name' => 'Guangdong',
                'code' => 'GU',
                'status' => 1,
            ),
            189 => 
            array (
                'zone_id' => 690,
                'country_id' => 44,
                'name' => 'Guangxi',
                'code' => 'GX',
                'status' => 1,
            ),
            190 => 
            array (
                'zone_id' => 691,
                'country_id' => 44,
                'name' => 'Guizhou',
                'code' => 'GZ',
                'status' => 1,
            ),
            191 => 
            array (
                'zone_id' => 692,
                'country_id' => 44,
                'name' => 'Hainan',
                'code' => 'HA',
                'status' => 1,
            ),
            192 => 
            array (
                'zone_id' => 693,
                'country_id' => 44,
                'name' => 'Hebei',
                'code' => 'HB',
                'status' => 1,
            ),
            193 => 
            array (
                'zone_id' => 694,
                'country_id' => 44,
                'name' => 'Heilongjiang',
                'code' => 'HL',
                'status' => 1,
            ),
            194 => 
            array (
                'zone_id' => 695,
                'country_id' => 44,
                'name' => 'Henan',
                'code' => 'HE',
                'status' => 1,
            ),
            195 => 
            array (
                'zone_id' => 696,
                'country_id' => 44,
                'name' => 'Hong Kong',
                'code' => 'HK',
                'status' => 1,
            ),
            196 => 
            array (
                'zone_id' => 697,
                'country_id' => 44,
                'name' => 'Hubei',
                'code' => 'HU',
                'status' => 1,
            ),
            197 => 
            array (
                'zone_id' => 698,
                'country_id' => 44,
                'name' => 'Hunan',
                'code' => 'HN',
                'status' => 1,
            ),
            198 => 
            array (
                'zone_id' => 699,
                'country_id' => 44,
                'name' => 'Inner Mongolia',
                'code' => 'IM',
                'status' => 1,
            ),
            199 => 
            array (
                'zone_id' => 700,
                'country_id' => 44,
                'name' => 'Jiangsu',
                'code' => 'JI',
                'status' => 1,
            ),
            200 => 
            array (
                'zone_id' => 701,
                'country_id' => 44,
                'name' => 'Jiangxi',
                'code' => 'JX',
                'status' => 1,
            ),
            201 => 
            array (
                'zone_id' => 702,
                'country_id' => 44,
                'name' => 'Jilin',
                'code' => 'JL',
                'status' => 1,
            ),
            202 => 
            array (
                'zone_id' => 703,
                'country_id' => 44,
                'name' => 'Liaoning',
                'code' => 'LI',
                'status' => 1,
            ),
            203 => 
            array (
                'zone_id' => 704,
                'country_id' => 44,
                'name' => 'Macau',
                'code' => 'MA',
                'status' => 1,
            ),
            204 => 
            array (
                'zone_id' => 705,
                'country_id' => 44,
                'name' => 'Ningxia',
                'code' => 'NI',
                'status' => 1,
            ),
            205 => 
            array (
                'zone_id' => 706,
                'country_id' => 44,
                'name' => 'Shaanxi',
                'code' => 'SH',
                'status' => 1,
            ),
            206 => 
            array (
                'zone_id' => 707,
                'country_id' => 44,
                'name' => 'Shandong',
                'code' => 'SA',
                'status' => 1,
            ),
            207 => 
            array (
                'zone_id' => 708,
                'country_id' => 44,
                'name' => 'Shanghai',
                'code' => 'SG',
                'status' => 1,
            ),
            208 => 
            array (
                'zone_id' => 709,
                'country_id' => 44,
                'name' => 'Shanxi',
                'code' => 'SX',
                'status' => 1,
            ),
            209 => 
            array (
                'zone_id' => 710,
                'country_id' => 44,
                'name' => 'Sichuan',
                'code' => 'SI',
                'status' => 1,
            ),
            210 => 
            array (
                'zone_id' => 711,
                'country_id' => 44,
                'name' => 'Tianjin',
                'code' => 'TI',
                'status' => 1,
            ),
            211 => 
            array (
                'zone_id' => 712,
                'country_id' => 44,
                'name' => 'Xinjiang',
                'code' => 'XI',
                'status' => 1,
            ),
            212 => 
            array (
                'zone_id' => 713,
                'country_id' => 44,
                'name' => 'Yunnan',
                'code' => 'YU',
                'status' => 1,
            ),
            213 => 
            array (
                'zone_id' => 714,
                'country_id' => 44,
                'name' => 'Zhejiang',
                'code' => 'ZH',
                'status' => 1,
            ),
            214 => 
            array (
                'zone_id' => 715,
                'country_id' => 46,
                'name' => 'Direction Island',
                'code' => 'D',
                'status' => 1,
            ),
            215 => 
            array (
                'zone_id' => 716,
                'country_id' => 46,
                'name' => 'Home Island',
                'code' => 'H',
                'status' => 1,
            ),
            216 => 
            array (
                'zone_id' => 717,
                'country_id' => 46,
                'name' => 'Horsburgh Island',
                'code' => 'O',
                'status' => 1,
            ),
            217 => 
            array (
                'zone_id' => 718,
                'country_id' => 46,
                'name' => 'South Island',
                'code' => 'S',
                'status' => 1,
            ),
            218 => 
            array (
                'zone_id' => 719,
                'country_id' => 46,
                'name' => 'West Island',
                'code' => 'W',
                'status' => 1,
            ),
            219 => 
            array (
                'zone_id' => 720,
                'country_id' => 47,
                'name' => 'Amazonas',
                'code' => 'AMZ',
                'status' => 1,
            ),
            220 => 
            array (
                'zone_id' => 721,
                'country_id' => 47,
                'name' => 'Antioquia',
                'code' => 'ANT',
                'status' => 1,
            ),
            221 => 
            array (
                'zone_id' => 722,
                'country_id' => 47,
                'name' => 'Arauca',
                'code' => 'ARA',
                'status' => 1,
            ),
            222 => 
            array (
                'zone_id' => 723,
                'country_id' => 47,
                'name' => 'Atlantico',
                'code' => 'ATL',
                'status' => 1,
            ),
            223 => 
            array (
                'zone_id' => 724,
                'country_id' => 47,
                'name' => 'Bogota D.C.',
                'code' => 'BDC',
                'status' => 1,
            ),
            224 => 
            array (
                'zone_id' => 725,
                'country_id' => 47,
                'name' => 'Bolivar',
                'code' => 'BOL',
                'status' => 1,
            ),
            225 => 
            array (
                'zone_id' => 726,
                'country_id' => 47,
                'name' => 'Boyaca',
                'code' => 'BOY',
                'status' => 1,
            ),
            226 => 
            array (
                'zone_id' => 727,
                'country_id' => 47,
                'name' => 'Caldas',
                'code' => 'CAL',
                'status' => 1,
            ),
            227 => 
            array (
                'zone_id' => 728,
                'country_id' => 47,
                'name' => 'Caqueta',
                'code' => 'CAQ',
                'status' => 1,
            ),
            228 => 
            array (
                'zone_id' => 729,
                'country_id' => 47,
                'name' => 'Casanare',
                'code' => 'CAS',
                'status' => 1,
            ),
            229 => 
            array (
                'zone_id' => 730,
                'country_id' => 47,
                'name' => 'Cauca',
                'code' => 'CAU',
                'status' => 1,
            ),
            230 => 
            array (
                'zone_id' => 731,
                'country_id' => 47,
                'name' => 'Cesar',
                'code' => 'CES',
                'status' => 1,
            ),
            231 => 
            array (
                'zone_id' => 732,
                'country_id' => 47,
                'name' => 'Choco',
                'code' => 'CHO',
                'status' => 1,
            ),
            232 => 
            array (
                'zone_id' => 733,
                'country_id' => 47,
                'name' => 'Cordoba',
                'code' => 'COR',
                'status' => 1,
            ),
            233 => 
            array (
                'zone_id' => 734,
                'country_id' => 47,
                'name' => 'Cundinamarca',
                'code' => 'CAM',
                'status' => 1,
            ),
            234 => 
            array (
                'zone_id' => 735,
                'country_id' => 47,
                'name' => 'Guainia',
                'code' => 'GNA',
                'status' => 1,
            ),
            235 => 
            array (
                'zone_id' => 736,
                'country_id' => 47,
                'name' => 'Guajira',
                'code' => 'GJR',
                'status' => 1,
            ),
            236 => 
            array (
                'zone_id' => 737,
                'country_id' => 47,
                'name' => 'Guaviare',
                'code' => 'GVR',
                'status' => 1,
            ),
            237 => 
            array (
                'zone_id' => 738,
                'country_id' => 47,
                'name' => 'Huila',
                'code' => 'HUI',
                'status' => 1,
            ),
            238 => 
            array (
                'zone_id' => 739,
                'country_id' => 47,
                'name' => 'Magdalena',
                'code' => 'MAG',
                'status' => 1,
            ),
            239 => 
            array (
                'zone_id' => 740,
                'country_id' => 47,
                'name' => 'Meta',
                'code' => 'MET',
                'status' => 1,
            ),
            240 => 
            array (
                'zone_id' => 741,
                'country_id' => 47,
                'name' => 'Narino',
                'code' => 'NAR',
                'status' => 1,
            ),
            241 => 
            array (
                'zone_id' => 742,
                'country_id' => 47,
                'name' => 'Norte de Santander',
                'code' => 'NDS',
                'status' => 1,
            ),
            242 => 
            array (
                'zone_id' => 743,
                'country_id' => 47,
                'name' => 'Putumayo',
                'code' => 'PUT',
                'status' => 1,
            ),
            243 => 
            array (
                'zone_id' => 744,
                'country_id' => 47,
                'name' => 'Quindio',
                'code' => 'QUI',
                'status' => 1,
            ),
            244 => 
            array (
                'zone_id' => 745,
                'country_id' => 47,
                'name' => 'Risaralda',
                'code' => 'RIS',
                'status' => 1,
            ),
            245 => 
            array (
                'zone_id' => 746,
                'country_id' => 47,
                'name' => 'San Andres y Providencia',
                'code' => 'SAP',
                'status' => 1,
            ),
            246 => 
            array (
                'zone_id' => 747,
                'country_id' => 47,
                'name' => 'Santander',
                'code' => 'SAN',
                'status' => 1,
            ),
            247 => 
            array (
                'zone_id' => 748,
                'country_id' => 47,
                'name' => 'Sucre',
                'code' => 'SUC',
                'status' => 1,
            ),
            248 => 
            array (
                'zone_id' => 749,
                'country_id' => 47,
                'name' => 'Tolima',
                'code' => 'TOL',
                'status' => 1,
            ),
            249 => 
            array (
                'zone_id' => 750,
                'country_id' => 47,
                'name' => 'Valle del Cauca',
                'code' => 'VDC',
                'status' => 1,
            ),
            250 => 
            array (
                'zone_id' => 751,
                'country_id' => 47,
                'name' => 'Vaupes',
                'code' => 'VAU',
                'status' => 1,
            ),
            251 => 
            array (
                'zone_id' => 752,
                'country_id' => 47,
                'name' => 'Vichada',
                'code' => 'VIC',
                'status' => 1,
            ),
            252 => 
            array (
                'zone_id' => 753,
                'country_id' => 48,
                'name' => 'Grande Comore',
                'code' => 'G',
                'status' => 1,
            ),
            253 => 
            array (
                'zone_id' => 754,
                'country_id' => 48,
                'name' => 'Anjouan',
                'code' => 'A',
                'status' => 1,
            ),
            254 => 
            array (
                'zone_id' => 755,
                'country_id' => 48,
                'name' => 'Moheli',
                'code' => 'M',
                'status' => 1,
            ),
            255 => 
            array (
                'zone_id' => 756,
                'country_id' => 49,
                'name' => 'Bouenza',
                'code' => 'BO',
                'status' => 1,
            ),
            256 => 
            array (
                'zone_id' => 757,
                'country_id' => 49,
                'name' => 'Brazzaville',
                'code' => 'BR',
                'status' => 1,
            ),
            257 => 
            array (
                'zone_id' => 758,
                'country_id' => 49,
                'name' => 'Cuvette',
                'code' => 'CU',
                'status' => 1,
            ),
            258 => 
            array (
                'zone_id' => 759,
                'country_id' => 49,
                'name' => 'Cuvette-Ouest',
                'code' => 'CO',
                'status' => 1,
            ),
            259 => 
            array (
                'zone_id' => 760,
                'country_id' => 49,
                'name' => 'Kouilou',
                'code' => 'KO',
                'status' => 1,
            ),
            260 => 
            array (
                'zone_id' => 761,
                'country_id' => 49,
                'name' => 'Lekoumou',
                'code' => 'LE',
                'status' => 1,
            ),
            261 => 
            array (
                'zone_id' => 762,
                'country_id' => 49,
                'name' => 'Likouala',
                'code' => 'LI',
                'status' => 1,
            ),
            262 => 
            array (
                'zone_id' => 763,
                'country_id' => 49,
                'name' => 'Niari',
                'code' => 'NI',
                'status' => 1,
            ),
            263 => 
            array (
                'zone_id' => 764,
                'country_id' => 49,
                'name' => 'Plateaux',
                'code' => 'PL',
                'status' => 1,
            ),
            264 => 
            array (
                'zone_id' => 765,
                'country_id' => 49,
                'name' => 'Pool',
                'code' => 'PO',
                'status' => 1,
            ),
            265 => 
            array (
                'zone_id' => 766,
                'country_id' => 49,
                'name' => 'Sangha',
                'code' => 'SA',
                'status' => 1,
            ),
            266 => 
            array (
                'zone_id' => 767,
                'country_id' => 50,
                'name' => 'Pukapuka',
                'code' => 'PU',
                'status' => 1,
            ),
            267 => 
            array (
                'zone_id' => 768,
                'country_id' => 50,
                'name' => 'Rakahanga',
                'code' => 'RK',
                'status' => 1,
            ),
            268 => 
            array (
                'zone_id' => 769,
                'country_id' => 50,
                'name' => 'Manihiki',
                'code' => 'MK',
                'status' => 1,
            ),
            269 => 
            array (
                'zone_id' => 770,
                'country_id' => 50,
                'name' => 'Penrhyn',
                'code' => 'PE',
                'status' => 1,
            ),
            270 => 
            array (
                'zone_id' => 771,
                'country_id' => 50,
                'name' => 'Nassau Island',
                'code' => 'NI',
                'status' => 1,
            ),
            271 => 
            array (
                'zone_id' => 772,
                'country_id' => 50,
                'name' => 'Surwarrow',
                'code' => 'SU',
                'status' => 1,
            ),
            272 => 
            array (
                'zone_id' => 773,
                'country_id' => 50,
                'name' => 'Palmerston',
                'code' => 'PA',
                'status' => 1,
            ),
            273 => 
            array (
                'zone_id' => 774,
                'country_id' => 50,
                'name' => 'Aitutaki',
                'code' => 'AI',
                'status' => 1,
            ),
            274 => 
            array (
                'zone_id' => 775,
                'country_id' => 50,
                'name' => 'Manuae',
                'code' => 'MA',
                'status' => 1,
            ),
            275 => 
            array (
                'zone_id' => 776,
                'country_id' => 50,
                'name' => 'Takutea',
                'code' => 'TA',
                'status' => 1,
            ),
            276 => 
            array (
                'zone_id' => 777,
                'country_id' => 50,
                'name' => 'Mitiaro',
                'code' => 'MT',
                'status' => 1,
            ),
            277 => 
            array (
                'zone_id' => 778,
                'country_id' => 50,
                'name' => 'Atiu',
                'code' => 'AT',
                'status' => 1,
            ),
            278 => 
            array (
                'zone_id' => 779,
                'country_id' => 50,
                'name' => 'Mauke',
                'code' => 'MU',
                'status' => 1,
            ),
            279 => 
            array (
                'zone_id' => 780,
                'country_id' => 50,
                'name' => 'Rarotonga',
                'code' => 'RR',
                'status' => 1,
            ),
            280 => 
            array (
                'zone_id' => 781,
                'country_id' => 50,
                'name' => 'Mangaia',
                'code' => 'MG',
                'status' => 1,
            ),
            281 => 
            array (
                'zone_id' => 782,
                'country_id' => 51,
                'name' => 'Alajuela',
                'code' => 'AL',
                'status' => 1,
            ),
            282 => 
            array (
                'zone_id' => 783,
                'country_id' => 51,
                'name' => 'Cartago',
                'code' => 'CA',
                'status' => 1,
            ),
            283 => 
            array (
                'zone_id' => 784,
                'country_id' => 51,
                'name' => 'Guanacaste',
                'code' => 'GU',
                'status' => 1,
            ),
            284 => 
            array (
                'zone_id' => 785,
                'country_id' => 51,
                'name' => 'Heredia',
                'code' => 'HE',
                'status' => 1,
            ),
            285 => 
            array (
                'zone_id' => 786,
                'country_id' => 51,
                'name' => 'Limon',
                'code' => 'LI',
                'status' => 1,
            ),
            286 => 
            array (
                'zone_id' => 787,
                'country_id' => 51,
                'name' => 'Puntarenas',
                'code' => 'PU',
                'status' => 1,
            ),
            287 => 
            array (
                'zone_id' => 788,
                'country_id' => 51,
                'name' => 'San Jose',
                'code' => 'SJ',
                'status' => 1,
            ),
            288 => 
            array (
                'zone_id' => 789,
                'country_id' => 52,
                'name' => 'Abengourou',
                'code' => 'ABE',
                'status' => 1,
            ),
            289 => 
            array (
                'zone_id' => 790,
                'country_id' => 52,
                'name' => 'Abidjan',
                'code' => 'ABI',
                'status' => 1,
            ),
            290 => 
            array (
                'zone_id' => 791,
                'country_id' => 52,
                'name' => 'Aboisso',
                'code' => 'ABO',
                'status' => 1,
            ),
            291 => 
            array (
                'zone_id' => 792,
                'country_id' => 52,
                'name' => 'Adiake',
                'code' => 'ADI',
                'status' => 1,
            ),
            292 => 
            array (
                'zone_id' => 793,
                'country_id' => 52,
                'name' => 'Adzope',
                'code' => 'ADZ',
                'status' => 1,
            ),
            293 => 
            array (
                'zone_id' => 794,
                'country_id' => 52,
                'name' => 'Agboville',
                'code' => 'AGB',
                'status' => 1,
            ),
            294 => 
            array (
                'zone_id' => 795,
                'country_id' => 52,
                'name' => 'Agnibilekrou',
                'code' => 'AGN',
                'status' => 1,
            ),
            295 => 
            array (
                'zone_id' => 796,
                'country_id' => 52,
                'name' => 'Alepe',
                'code' => 'ALE',
                'status' => 1,
            ),
            296 => 
            array (
                'zone_id' => 797,
                'country_id' => 52,
                'name' => 'Bocanda',
                'code' => 'BOC',
                'status' => 1,
            ),
            297 => 
            array (
                'zone_id' => 798,
                'country_id' => 52,
                'name' => 'Bangolo',
                'code' => 'BAN',
                'status' => 1,
            ),
            298 => 
            array (
                'zone_id' => 799,
                'country_id' => 52,
                'name' => 'Beoumi',
                'code' => 'BEO',
                'status' => 1,
            ),
            299 => 
            array (
                'zone_id' => 800,
                'country_id' => 52,
                'name' => 'Biankouma',
                'code' => 'BIA',
                'status' => 1,
            ),
            300 => 
            array (
                'zone_id' => 801,
                'country_id' => 52,
                'name' => 'Bondoukou',
                'code' => 'BDK',
                'status' => 1,
            ),
            301 => 
            array (
                'zone_id' => 802,
                'country_id' => 52,
                'name' => 'Bongouanou',
                'code' => 'BGN',
                'status' => 1,
            ),
            302 => 
            array (
                'zone_id' => 803,
                'country_id' => 52,
                'name' => 'Bouafle',
                'code' => 'BFL',
                'status' => 1,
            ),
            303 => 
            array (
                'zone_id' => 804,
                'country_id' => 52,
                'name' => 'Bouake',
                'code' => 'BKE',
                'status' => 1,
            ),
            304 => 
            array (
                'zone_id' => 805,
                'country_id' => 52,
                'name' => 'Bouna',
                'code' => 'BNA',
                'status' => 1,
            ),
            305 => 
            array (
                'zone_id' => 806,
                'country_id' => 52,
                'name' => 'Boundiali',
                'code' => 'BDL',
                'status' => 1,
            ),
            306 => 
            array (
                'zone_id' => 807,
                'country_id' => 52,
                'name' => 'Dabakala',
                'code' => 'DKL',
                'status' => 1,
            ),
            307 => 
            array (
                'zone_id' => 808,
                'country_id' => 52,
                'name' => 'Dabou',
                'code' => 'DBU',
                'status' => 1,
            ),
            308 => 
            array (
                'zone_id' => 809,
                'country_id' => 52,
                'name' => 'Daloa',
                'code' => 'DAL',
                'status' => 1,
            ),
            309 => 
            array (
                'zone_id' => 810,
                'country_id' => 52,
                'name' => 'Danane',
                'code' => 'DAN',
                'status' => 1,
            ),
            310 => 
            array (
                'zone_id' => 811,
                'country_id' => 52,
                'name' => 'Daoukro',
                'code' => 'DAO',
                'status' => 1,
            ),
            311 => 
            array (
                'zone_id' => 812,
                'country_id' => 52,
                'name' => 'Dimbokro',
                'code' => 'DIM',
                'status' => 1,
            ),
            312 => 
            array (
                'zone_id' => 813,
                'country_id' => 52,
                'name' => 'Divo',
                'code' => 'DIV',
                'status' => 1,
            ),
            313 => 
            array (
                'zone_id' => 814,
                'country_id' => 52,
                'name' => 'Duekoue',
                'code' => 'DUE',
                'status' => 1,
            ),
            314 => 
            array (
                'zone_id' => 815,
                'country_id' => 52,
                'name' => 'Ferkessedougou',
                'code' => 'FER',
                'status' => 1,
            ),
            315 => 
            array (
                'zone_id' => 816,
                'country_id' => 52,
                'name' => 'Gagnoa',
                'code' => 'GAG',
                'status' => 1,
            ),
            316 => 
            array (
                'zone_id' => 817,
                'country_id' => 52,
                'name' => 'Grand-Bassam',
                'code' => 'GBA',
                'status' => 1,
            ),
            317 => 
            array (
                'zone_id' => 818,
                'country_id' => 52,
                'name' => 'Grand-Lahou',
                'code' => 'GLA',
                'status' => 1,
            ),
            318 => 
            array (
                'zone_id' => 819,
                'country_id' => 52,
                'name' => 'Guiglo',
                'code' => 'GUI',
                'status' => 1,
            ),
            319 => 
            array (
                'zone_id' => 820,
                'country_id' => 52,
                'name' => 'Issia',
                'code' => 'ISS',
                'status' => 1,
            ),
            320 => 
            array (
                'zone_id' => 821,
                'country_id' => 52,
                'name' => 'Jacqueville',
                'code' => 'JAC',
                'status' => 1,
            ),
            321 => 
            array (
                'zone_id' => 822,
                'country_id' => 52,
                'name' => 'Katiola',
                'code' => 'KAT',
                'status' => 1,
            ),
            322 => 
            array (
                'zone_id' => 823,
                'country_id' => 52,
                'name' => 'Korhogo',
                'code' => 'KOR',
                'status' => 1,
            ),
            323 => 
            array (
                'zone_id' => 824,
                'country_id' => 52,
                'name' => 'Lakota',
                'code' => 'LAK',
                'status' => 1,
            ),
            324 => 
            array (
                'zone_id' => 825,
                'country_id' => 52,
                'name' => 'Man',
                'code' => 'MAN',
                'status' => 1,
            ),
            325 => 
            array (
                'zone_id' => 826,
                'country_id' => 52,
                'name' => 'Mankono',
                'code' => 'MKN',
                'status' => 1,
            ),
            326 => 
            array (
                'zone_id' => 827,
                'country_id' => 52,
                'name' => 'Mbahiakro',
                'code' => 'MBA',
                'status' => 1,
            ),
            327 => 
            array (
                'zone_id' => 828,
                'country_id' => 52,
                'name' => 'Odienne',
                'code' => 'ODI',
                'status' => 1,
            ),
            328 => 
            array (
                'zone_id' => 829,
                'country_id' => 52,
                'name' => 'Oume',
                'code' => 'OUM',
                'status' => 1,
            ),
            329 => 
            array (
                'zone_id' => 830,
                'country_id' => 52,
                'name' => 'Sakassou',
                'code' => 'SAK',
                'status' => 1,
            ),
            330 => 
            array (
                'zone_id' => 831,
                'country_id' => 52,
                'name' => 'San-Pedro',
                'code' => 'SPE',
                'status' => 1,
            ),
            331 => 
            array (
                'zone_id' => 832,
                'country_id' => 52,
                'name' => 'Sassandra',
                'code' => 'SAS',
                'status' => 1,
            ),
            332 => 
            array (
                'zone_id' => 833,
                'country_id' => 52,
                'name' => 'Seguela',
                'code' => 'SEG',
                'status' => 1,
            ),
            333 => 
            array (
                'zone_id' => 834,
                'country_id' => 52,
                'name' => 'Sinfra',
                'code' => 'SIN',
                'status' => 1,
            ),
            334 => 
            array (
                'zone_id' => 835,
                'country_id' => 52,
                'name' => 'Soubre',
                'code' => 'SOU',
                'status' => 1,
            ),
            335 => 
            array (
                'zone_id' => 836,
                'country_id' => 52,
                'name' => 'Tabou',
                'code' => 'TAB',
                'status' => 1,
            ),
            336 => 
            array (
                'zone_id' => 837,
                'country_id' => 52,
                'name' => 'Tanda',
                'code' => 'TAN',
                'status' => 1,
            ),
            337 => 
            array (
                'zone_id' => 838,
                'country_id' => 52,
                'name' => 'Tiebissou',
                'code' => 'TIE',
                'status' => 1,
            ),
            338 => 
            array (
                'zone_id' => 839,
                'country_id' => 52,
                'name' => 'Tingrela',
                'code' => 'TIN',
                'status' => 1,
            ),
            339 => 
            array (
                'zone_id' => 840,
                'country_id' => 52,
                'name' => 'Tiassale',
                'code' => 'TIA',
                'status' => 1,
            ),
            340 => 
            array (
                'zone_id' => 841,
                'country_id' => 52,
                'name' => 'Touba',
                'code' => 'TBA',
                'status' => 1,
            ),
            341 => 
            array (
                'zone_id' => 842,
                'country_id' => 52,
                'name' => 'Toulepleu',
                'code' => 'TLP',
                'status' => 1,
            ),
            342 => 
            array (
                'zone_id' => 843,
                'country_id' => 52,
                'name' => 'Toumodi',
                'code' => 'TMD',
                'status' => 1,
            ),
            343 => 
            array (
                'zone_id' => 844,
                'country_id' => 52,
                'name' => 'Vavoua',
                'code' => 'VAV',
                'status' => 1,
            ),
            344 => 
            array (
                'zone_id' => 845,
                'country_id' => 52,
                'name' => 'Yamoussoukro',
                'code' => 'YAM',
                'status' => 1,
            ),
            345 => 
            array (
                'zone_id' => 846,
                'country_id' => 52,
                'name' => 'Zuenoula',
                'code' => 'ZUE',
                'status' => 1,
            ),
            346 => 
            array (
                'zone_id' => 847,
                'country_id' => 53,
                'name' => 'Bjelovarsko-bilogorska',
                'code' => 'BB',
                'status' => 1,
            ),
            347 => 
            array (
                'zone_id' => 848,
                'country_id' => 53,
                'name' => 'Grad Zagreb',
                'code' => 'GZ',
                'status' => 1,
            ),
            348 => 
            array (
                'zone_id' => 849,
                'country_id' => 53,
                'name' => 'Dubrovačko-neretvanska',
                'code' => 'DN',
                'status' => 1,
            ),
            349 => 
            array (
                'zone_id' => 850,
                'country_id' => 53,
                'name' => 'Istarska',
                'code' => 'IS',
                'status' => 1,
            ),
            350 => 
            array (
                'zone_id' => 851,
                'country_id' => 53,
                'name' => 'Karlovačka',
                'code' => 'KA',
                'status' => 1,
            ),
            351 => 
            array (
                'zone_id' => 852,
                'country_id' => 53,
                'name' => 'Koprivničko-križevačka',
                'code' => 'KK',
                'status' => 1,
            ),
            352 => 
            array (
                'zone_id' => 853,
                'country_id' => 53,
                'name' => 'Krapinsko-zagorska',
                'code' => 'KZ',
                'status' => 1,
            ),
            353 => 
            array (
                'zone_id' => 854,
                'country_id' => 53,
                'name' => 'Ličko-senjska',
                'code' => 'LS',
                'status' => 1,
            ),
            354 => 
            array (
                'zone_id' => 855,
                'country_id' => 53,
                'name' => 'Međimurska',
                'code' => 'ME',
                'status' => 1,
            ),
            355 => 
            array (
                'zone_id' => 856,
                'country_id' => 53,
                'name' => 'Osječko-baranjska',
                'code' => 'OB',
                'status' => 1,
            ),
            356 => 
            array (
                'zone_id' => 857,
                'country_id' => 53,
                'name' => 'Požeško-slavonska',
                'code' => 'PS',
                'status' => 1,
            ),
            357 => 
            array (
                'zone_id' => 858,
                'country_id' => 53,
                'name' => 'Primorsko-goranska',
                'code' => 'PG',
                'status' => 1,
            ),
            358 => 
            array (
                'zone_id' => 859,
                'country_id' => 53,
                'name' => 'Šibensko-kninska',
                'code' => 'SK',
                'status' => 1,
            ),
            359 => 
            array (
                'zone_id' => 860,
                'country_id' => 53,
                'name' => 'Sisačko-moslavačka',
                'code' => 'SM',
                'status' => 1,
            ),
            360 => 
            array (
                'zone_id' => 861,
                'country_id' => 53,
                'name' => 'Brodsko-posavska',
                'code' => 'BP',
                'status' => 1,
            ),
            361 => 
            array (
                'zone_id' => 862,
                'country_id' => 53,
                'name' => 'Splitsko-dalmatinska',
                'code' => 'SD',
                'status' => 1,
            ),
            362 => 
            array (
                'zone_id' => 863,
                'country_id' => 53,
                'name' => 'Varaždinska',
                'code' => 'VA',
                'status' => 1,
            ),
            363 => 
            array (
                'zone_id' => 864,
                'country_id' => 53,
                'name' => 'Virovitičko-podravska',
                'code' => 'VP',
                'status' => 1,
            ),
            364 => 
            array (
                'zone_id' => 865,
                'country_id' => 53,
                'name' => 'Vukovarsko-srijemska',
                'code' => 'VS',
                'status' => 1,
            ),
            365 => 
            array (
                'zone_id' => 866,
                'country_id' => 53,
                'name' => 'Zadarska',
                'code' => 'ZA',
                'status' => 1,
            ),
            366 => 
            array (
                'zone_id' => 867,
                'country_id' => 53,
                'name' => 'Zagrebačka',
                'code' => 'ZG',
                'status' => 1,
            ),
            367 => 
            array (
                'zone_id' => 868,
                'country_id' => 54,
                'name' => 'Camaguey',
                'code' => 'CA',
                'status' => 1,
            ),
            368 => 
            array (
                'zone_id' => 869,
                'country_id' => 54,
                'name' => 'Ciego de Avila',
                'code' => 'CD',
                'status' => 1,
            ),
            369 => 
            array (
                'zone_id' => 870,
                'country_id' => 54,
                'name' => 'Cienfuegos',
                'code' => 'CI',
                'status' => 1,
            ),
            370 => 
            array (
                'zone_id' => 871,
                'country_id' => 54,
                'name' => 'Ciudad de La Habana',
                'code' => 'CH',
                'status' => 1,
            ),
            371 => 
            array (
                'zone_id' => 872,
                'country_id' => 54,
                'name' => 'Granma',
                'code' => 'GR',
                'status' => 1,
            ),
            372 => 
            array (
                'zone_id' => 873,
                'country_id' => 54,
                'name' => 'Guantanamo',
                'code' => 'GU',
                'status' => 1,
            ),
            373 => 
            array (
                'zone_id' => 874,
                'country_id' => 54,
                'name' => 'Holguin',
                'code' => 'HO',
                'status' => 1,
            ),
            374 => 
            array (
                'zone_id' => 875,
                'country_id' => 54,
                'name' => 'Isla de la Juventud',
                'code' => 'IJ',
                'status' => 1,
            ),
            375 => 
            array (
                'zone_id' => 876,
                'country_id' => 54,
                'name' => 'La Habana',
                'code' => 'LH',
                'status' => 1,
            ),
            376 => 
            array (
                'zone_id' => 877,
                'country_id' => 54,
                'name' => 'Las Tunas',
                'code' => 'LT',
                'status' => 1,
            ),
            377 => 
            array (
                'zone_id' => 878,
                'country_id' => 54,
                'name' => 'Matanzas',
                'code' => 'MA',
                'status' => 1,
            ),
            378 => 
            array (
                'zone_id' => 879,
                'country_id' => 54,
                'name' => 'Pinar del Rio',
                'code' => 'PR',
                'status' => 1,
            ),
            379 => 
            array (
                'zone_id' => 880,
                'country_id' => 54,
                'name' => 'Sancti Spiritus',
                'code' => 'SS',
                'status' => 1,
            ),
            380 => 
            array (
                'zone_id' => 881,
                'country_id' => 54,
                'name' => 'Santiago de Cuba',
                'code' => 'SC',
                'status' => 1,
            ),
            381 => 
            array (
                'zone_id' => 882,
                'country_id' => 54,
                'name' => 'Villa Clara',
                'code' => 'VC',
                'status' => 1,
            ),
            382 => 
            array (
                'zone_id' => 883,
                'country_id' => 55,
                'name' => 'Famagusta',
                'code' => 'F',
                'status' => 1,
            ),
            383 => 
            array (
                'zone_id' => 884,
                'country_id' => 55,
                'name' => 'Kyrenia',
                'code' => 'K',
                'status' => 1,
            ),
            384 => 
            array (
                'zone_id' => 885,
                'country_id' => 55,
                'name' => 'Larnaca',
                'code' => 'A',
                'status' => 1,
            ),
            385 => 
            array (
                'zone_id' => 886,
                'country_id' => 55,
                'name' => 'Limassol',
                'code' => 'I',
                'status' => 1,
            ),
            386 => 
            array (
                'zone_id' => 887,
                'country_id' => 55,
                'name' => 'Nicosia',
                'code' => 'N',
                'status' => 1,
            ),
            387 => 
            array (
                'zone_id' => 888,
                'country_id' => 55,
                'name' => 'Paphos',
                'code' => 'P',
                'status' => 1,
            ),
            388 => 
            array (
                'zone_id' => 889,
                'country_id' => 56,
                'name' => 'Ústecký',
                'code' => 'U',
                'status' => 1,
            ),
            389 => 
            array (
                'zone_id' => 890,
                'country_id' => 56,
                'name' => 'Jihočeský',
                'code' => 'C',
                'status' => 1,
            ),
            390 => 
            array (
                'zone_id' => 891,
                'country_id' => 56,
                'name' => 'Jihomoravský',
                'code' => 'B',
                'status' => 1,
            ),
            391 => 
            array (
                'zone_id' => 892,
                'country_id' => 56,
                'name' => 'Karlovarský',
                'code' => 'K',
                'status' => 1,
            ),
            392 => 
            array (
                'zone_id' => 893,
                'country_id' => 56,
                'name' => 'Královehradecký',
                'code' => 'H',
                'status' => 1,
            ),
            393 => 
            array (
                'zone_id' => 894,
                'country_id' => 56,
                'name' => 'Liberecký',
                'code' => 'L',
                'status' => 1,
            ),
            394 => 
            array (
                'zone_id' => 895,
                'country_id' => 56,
                'name' => 'Moravskoslezský',
                'code' => 'T',
                'status' => 1,
            ),
            395 => 
            array (
                'zone_id' => 896,
                'country_id' => 56,
                'name' => 'Olomoucký',
                'code' => 'M',
                'status' => 1,
            ),
            396 => 
            array (
                'zone_id' => 897,
                'country_id' => 56,
                'name' => 'Pardubický',
                'code' => 'E',
                'status' => 1,
            ),
            397 => 
            array (
                'zone_id' => 898,
                'country_id' => 56,
                'name' => 'Plzeňský',
                'code' => 'P',
                'status' => 1,
            ),
            398 => 
            array (
                'zone_id' => 899,
                'country_id' => 56,
                'name' => 'Praha',
                'code' => 'A',
                'status' => 1,
            ),
            399 => 
            array (
                'zone_id' => 900,
                'country_id' => 56,
                'name' => 'Středočeský',
                'code' => 'S',
                'status' => 1,
            ),
            400 => 
            array (
                'zone_id' => 901,
                'country_id' => 56,
                'name' => 'Vysočina',
                'code' => 'J',
                'status' => 1,
            ),
            401 => 
            array (
                'zone_id' => 902,
                'country_id' => 56,
                'name' => 'Zlínský',
                'code' => 'Z',
                'status' => 1,
            ),
            402 => 
            array (
                'zone_id' => 903,
                'country_id' => 57,
                'name' => 'Arhus',
                'code' => 'AR',
                'status' => 1,
            ),
            403 => 
            array (
                'zone_id' => 904,
                'country_id' => 57,
                'name' => 'Bornholm',
                'code' => 'BH',
                'status' => 1,
            ),
            404 => 
            array (
                'zone_id' => 905,
                'country_id' => 57,
                'name' => 'Copenhagen',
                'code' => 'CO',
                'status' => 1,
            ),
            405 => 
            array (
                'zone_id' => 906,
                'country_id' => 57,
                'name' => 'Faroe Islands',
                'code' => 'FO',
                'status' => 1,
            ),
            406 => 
            array (
                'zone_id' => 907,
                'country_id' => 57,
                'name' => 'Frederiksborg',
                'code' => 'FR',
                'status' => 1,
            ),
            407 => 
            array (
                'zone_id' => 908,
                'country_id' => 57,
                'name' => 'Fyn',
                'code' => 'FY',
                'status' => 1,
            ),
            408 => 
            array (
                'zone_id' => 909,
                'country_id' => 57,
                'name' => 'Kobenhavn',
                'code' => 'KO',
                'status' => 1,
            ),
            409 => 
            array (
                'zone_id' => 910,
                'country_id' => 57,
                'name' => 'Nordjylland',
                'code' => 'NO',
                'status' => 1,
            ),
            410 => 
            array (
                'zone_id' => 911,
                'country_id' => 57,
                'name' => 'Ribe',
                'code' => 'RI',
                'status' => 1,
            ),
            411 => 
            array (
                'zone_id' => 912,
                'country_id' => 57,
                'name' => 'Ringkobing',
                'code' => 'RK',
                'status' => 1,
            ),
            412 => 
            array (
                'zone_id' => 913,
                'country_id' => 57,
                'name' => 'Roskilde',
                'code' => 'RO',
                'status' => 1,
            ),
            413 => 
            array (
                'zone_id' => 914,
                'country_id' => 57,
                'name' => 'Sonderjylland',
                'code' => 'SO',
                'status' => 1,
            ),
            414 => 
            array (
                'zone_id' => 915,
                'country_id' => 57,
                'name' => 'Storstrom',
                'code' => 'ST',
                'status' => 1,
            ),
            415 => 
            array (
                'zone_id' => 916,
                'country_id' => 57,
                'name' => 'Vejle',
                'code' => 'VK',
                'status' => 1,
            ),
            416 => 
            array (
                'zone_id' => 917,
                'country_id' => 57,
                'name' => 'Vestj&aelig;lland',
                'code' => 'VJ',
                'status' => 1,
            ),
            417 => 
            array (
                'zone_id' => 918,
                'country_id' => 57,
                'name' => 'Viborg',
                'code' => 'VB',
                'status' => 1,
            ),
            418 => 
            array (
                'zone_id' => 919,
                'country_id' => 58,
                'name' => '\'Ali Sabih',
                'code' => 'S',
                'status' => 1,
            ),
            419 => 
            array (
                'zone_id' => 920,
                'country_id' => 58,
                'name' => 'Dikhil',
                'code' => 'K',
                'status' => 1,
            ),
            420 => 
            array (
                'zone_id' => 921,
                'country_id' => 58,
                'name' => 'Djibouti',
                'code' => 'J',
                'status' => 1,
            ),
            421 => 
            array (
                'zone_id' => 922,
                'country_id' => 58,
                'name' => 'Obock',
                'code' => 'O',
                'status' => 1,
            ),
            422 => 
            array (
                'zone_id' => 923,
                'country_id' => 58,
                'name' => 'Tadjoura',
                'code' => 'T',
                'status' => 1,
            ),
            423 => 
            array (
                'zone_id' => 924,
                'country_id' => 59,
                'name' => 'Saint Andrew Parish',
                'code' => 'AND',
                'status' => 1,
            ),
            424 => 
            array (
                'zone_id' => 925,
                'country_id' => 59,
                'name' => 'Saint David Parish',
                'code' => 'DAV',
                'status' => 1,
            ),
            425 => 
            array (
                'zone_id' => 926,
                'country_id' => 59,
                'name' => 'Saint George Parish',
                'code' => 'GEO',
                'status' => 1,
            ),
            426 => 
            array (
                'zone_id' => 927,
                'country_id' => 59,
                'name' => 'Saint John Parish',
                'code' => 'JOH',
                'status' => 1,
            ),
            427 => 
            array (
                'zone_id' => 928,
                'country_id' => 59,
                'name' => 'Saint Joseph Parish',
                'code' => 'JOS',
                'status' => 1,
            ),
            428 => 
            array (
                'zone_id' => 929,
                'country_id' => 59,
                'name' => 'Saint Luke Parish',
                'code' => 'LUK',
                'status' => 1,
            ),
            429 => 
            array (
                'zone_id' => 930,
                'country_id' => 59,
                'name' => 'Saint Mark Parish',
                'code' => 'MAR',
                'status' => 1,
            ),
            430 => 
            array (
                'zone_id' => 931,
                'country_id' => 59,
                'name' => 'Saint Patrick Parish',
                'code' => 'PAT',
                'status' => 1,
            ),
            431 => 
            array (
                'zone_id' => 932,
                'country_id' => 59,
                'name' => 'Saint Paul Parish',
                'code' => 'PAU',
                'status' => 1,
            ),
            432 => 
            array (
                'zone_id' => 933,
                'country_id' => 59,
                'name' => 'Saint Peter Parish',
                'code' => 'PET',
                'status' => 1,
            ),
            433 => 
            array (
                'zone_id' => 934,
                'country_id' => 60,
                'name' => 'Distrito Nacional',
                'code' => 'DN',
                'status' => 1,
            ),
            434 => 
            array (
                'zone_id' => 935,
                'country_id' => 60,
                'name' => 'Azua',
                'code' => 'AZ',
                'status' => 1,
            ),
            435 => 
            array (
                'zone_id' => 936,
                'country_id' => 60,
                'name' => 'Baoruco',
                'code' => 'BC',
                'status' => 1,
            ),
            436 => 
            array (
                'zone_id' => 937,
                'country_id' => 60,
                'name' => 'Barahona',
                'code' => 'BH',
                'status' => 1,
            ),
            437 => 
            array (
                'zone_id' => 938,
                'country_id' => 60,
                'name' => 'Dajabon',
                'code' => 'DJ',
                'status' => 1,
            ),
            438 => 
            array (
                'zone_id' => 939,
                'country_id' => 60,
                'name' => 'Duarte',
                'code' => 'DU',
                'status' => 1,
            ),
            439 => 
            array (
                'zone_id' => 940,
                'country_id' => 60,
                'name' => 'Elias Pina',
                'code' => 'EL',
                'status' => 1,
            ),
            440 => 
            array (
                'zone_id' => 941,
                'country_id' => 60,
                'name' => 'El Seybo',
                'code' => 'SY',
                'status' => 1,
            ),
            441 => 
            array (
                'zone_id' => 942,
                'country_id' => 60,
                'name' => 'Espaillat',
                'code' => 'ET',
                'status' => 1,
            ),
            442 => 
            array (
                'zone_id' => 943,
                'country_id' => 60,
                'name' => 'Hato Mayor',
                'code' => 'HM',
                'status' => 1,
            ),
            443 => 
            array (
                'zone_id' => 944,
                'country_id' => 60,
                'name' => 'Independencia',
                'code' => 'IN',
                'status' => 1,
            ),
            444 => 
            array (
                'zone_id' => 945,
                'country_id' => 60,
                'name' => 'La Altagracia',
                'code' => 'AL',
                'status' => 1,
            ),
            445 => 
            array (
                'zone_id' => 946,
                'country_id' => 60,
                'name' => 'La Romana',
                'code' => 'RO',
                'status' => 1,
            ),
            446 => 
            array (
                'zone_id' => 947,
                'country_id' => 60,
                'name' => 'La Vega',
                'code' => 'VE',
                'status' => 1,
            ),
            447 => 
            array (
                'zone_id' => 948,
                'country_id' => 60,
                'name' => 'Maria Trinidad Sanchez',
                'code' => 'MT',
                'status' => 1,
            ),
            448 => 
            array (
                'zone_id' => 949,
                'country_id' => 60,
                'name' => 'Monsenor Nouel',
                'code' => 'MN',
                'status' => 1,
            ),
            449 => 
            array (
                'zone_id' => 950,
                'country_id' => 60,
                'name' => 'Monte Cristi',
                'code' => 'MC',
                'status' => 1,
            ),
            450 => 
            array (
                'zone_id' => 951,
                'country_id' => 60,
                'name' => 'Monte Plata',
                'code' => 'MP',
                'status' => 1,
            ),
            451 => 
            array (
                'zone_id' => 952,
                'country_id' => 60,
                'name' => 'Pedernales',
                'code' => 'PD',
                'status' => 1,
            ),
            452 => 
            array (
                'zone_id' => 953,
                'country_id' => 60,
            'name' => 'Peravia (Bani)',
                'code' => 'PR',
                'status' => 1,
            ),
            453 => 
            array (
                'zone_id' => 954,
                'country_id' => 60,
                'name' => 'Puerto Plata',
                'code' => 'PP',
                'status' => 1,
            ),
            454 => 
            array (
                'zone_id' => 955,
                'country_id' => 60,
                'name' => 'Salcedo',
                'code' => 'SL',
                'status' => 1,
            ),
            455 => 
            array (
                'zone_id' => 956,
                'country_id' => 60,
                'name' => 'Samana',
                'code' => 'SM',
                'status' => 1,
            ),
            456 => 
            array (
                'zone_id' => 957,
                'country_id' => 60,
                'name' => 'Sanchez Ramirez',
                'code' => 'SH',
                'status' => 1,
            ),
            457 => 
            array (
                'zone_id' => 958,
                'country_id' => 60,
                'name' => 'San Cristobal',
                'code' => 'SC',
                'status' => 1,
            ),
            458 => 
            array (
                'zone_id' => 959,
                'country_id' => 60,
                'name' => 'San Jose de Ocoa',
                'code' => 'JO',
                'status' => 1,
            ),
            459 => 
            array (
                'zone_id' => 960,
                'country_id' => 60,
                'name' => 'San Juan',
                'code' => 'SJ',
                'status' => 1,
            ),
            460 => 
            array (
                'zone_id' => 961,
                'country_id' => 60,
                'name' => 'San Pedro de Macoris',
                'code' => 'PM',
                'status' => 1,
            ),
            461 => 
            array (
                'zone_id' => 962,
                'country_id' => 60,
                'name' => 'Santiago',
                'code' => 'SA',
                'status' => 1,
            ),
            462 => 
            array (
                'zone_id' => 963,
                'country_id' => 60,
                'name' => 'Santiago Rodriguez',
                'code' => 'ST',
                'status' => 1,
            ),
            463 => 
            array (
                'zone_id' => 964,
                'country_id' => 60,
                'name' => 'Santo Domingo',
                'code' => 'SD',
                'status' => 1,
            ),
            464 => 
            array (
                'zone_id' => 965,
                'country_id' => 60,
                'name' => 'Valverde',
                'code' => 'VA',
                'status' => 1,
            ),
            465 => 
            array (
                'zone_id' => 966,
                'country_id' => 61,
                'name' => 'Aileu',
                'code' => 'AL',
                'status' => 1,
            ),
            466 => 
            array (
                'zone_id' => 967,
                'country_id' => 61,
                'name' => 'Ainaro',
                'code' => 'AN',
                'status' => 1,
            ),
            467 => 
            array (
                'zone_id' => 968,
                'country_id' => 61,
                'name' => 'Baucau',
                'code' => 'BA',
                'status' => 1,
            ),
            468 => 
            array (
                'zone_id' => 969,
                'country_id' => 61,
                'name' => 'Bobonaro',
                'code' => 'BO',
                'status' => 1,
            ),
            469 => 
            array (
                'zone_id' => 970,
                'country_id' => 61,
                'name' => 'Cova Lima',
                'code' => 'CO',
                'status' => 1,
            ),
            470 => 
            array (
                'zone_id' => 971,
                'country_id' => 61,
                'name' => 'Dili',
                'code' => 'DI',
                'status' => 1,
            ),
            471 => 
            array (
                'zone_id' => 972,
                'country_id' => 61,
                'name' => 'Ermera',
                'code' => 'ER',
                'status' => 1,
            ),
            472 => 
            array (
                'zone_id' => 973,
                'country_id' => 61,
                'name' => 'Lautem',
                'code' => 'LA',
                'status' => 1,
            ),
            473 => 
            array (
                'zone_id' => 974,
                'country_id' => 61,
                'name' => 'Liquica',
                'code' => 'LI',
                'status' => 1,
            ),
            474 => 
            array (
                'zone_id' => 975,
                'country_id' => 61,
                'name' => 'Manatuto',
                'code' => 'MT',
                'status' => 1,
            ),
            475 => 
            array (
                'zone_id' => 976,
                'country_id' => 61,
                'name' => 'Manufahi',
                'code' => 'MF',
                'status' => 1,
            ),
            476 => 
            array (
                'zone_id' => 977,
                'country_id' => 61,
                'name' => 'Oecussi',
                'code' => 'OE',
                'status' => 1,
            ),
            477 => 
            array (
                'zone_id' => 978,
                'country_id' => 61,
                'name' => 'Viqueque',
                'code' => 'VI',
                'status' => 1,
            ),
            478 => 
            array (
                'zone_id' => 979,
                'country_id' => 62,
                'name' => 'Azuay',
                'code' => 'AZU',
                'status' => 1,
            ),
            479 => 
            array (
                'zone_id' => 980,
                'country_id' => 62,
                'name' => 'Bolivar',
                'code' => 'BOL',
                'status' => 1,
            ),
            480 => 
            array (
                'zone_id' => 981,
                'country_id' => 62,
                'name' => 'Ca&ntilde;ar',
                'code' => 'CAN',
                'status' => 1,
            ),
            481 => 
            array (
                'zone_id' => 982,
                'country_id' => 62,
                'name' => 'Carchi',
                'code' => 'CAR',
                'status' => 1,
            ),
            482 => 
            array (
                'zone_id' => 983,
                'country_id' => 62,
                'name' => 'Chimborazo',
                'code' => 'CHI',
                'status' => 1,
            ),
            483 => 
            array (
                'zone_id' => 984,
                'country_id' => 62,
                'name' => 'Cotopaxi',
                'code' => 'COT',
                'status' => 1,
            ),
            484 => 
            array (
                'zone_id' => 985,
                'country_id' => 62,
                'name' => 'El Oro',
                'code' => 'EOR',
                'status' => 1,
            ),
            485 => 
            array (
                'zone_id' => 986,
                'country_id' => 62,
                'name' => 'Esmeraldas',
                'code' => 'ESM',
                'status' => 1,
            ),
            486 => 
            array (
                'zone_id' => 987,
                'country_id' => 62,
                'name' => 'Gal&aacute;pagos',
                'code' => 'GPS',
                'status' => 1,
            ),
            487 => 
            array (
                'zone_id' => 988,
                'country_id' => 62,
                'name' => 'Guayas',
                'code' => 'GUA',
                'status' => 1,
            ),
            488 => 
            array (
                'zone_id' => 989,
                'country_id' => 62,
                'name' => 'Imbabura',
                'code' => 'IMB',
                'status' => 1,
            ),
            489 => 
            array (
                'zone_id' => 990,
                'country_id' => 62,
                'name' => 'Loja',
                'code' => 'LOJ',
                'status' => 1,
            ),
            490 => 
            array (
                'zone_id' => 991,
                'country_id' => 62,
                'name' => 'Los Rios',
                'code' => 'LRO',
                'status' => 1,
            ),
            491 => 
            array (
                'zone_id' => 992,
                'country_id' => 62,
                'name' => 'Manab&iacute;',
                'code' => 'MAN',
                'status' => 1,
            ),
            492 => 
            array (
                'zone_id' => 993,
                'country_id' => 62,
                'name' => 'Morona Santiago',
                'code' => 'MSA',
                'status' => 1,
            ),
            493 => 
            array (
                'zone_id' => 994,
                'country_id' => 62,
                'name' => 'Napo',
                'code' => 'NAP',
                'status' => 1,
            ),
            494 => 
            array (
                'zone_id' => 995,
                'country_id' => 62,
                'name' => 'Orellana',
                'code' => 'ORE',
                'status' => 1,
            ),
            495 => 
            array (
                'zone_id' => 996,
                'country_id' => 62,
                'name' => 'Pastaza',
                'code' => 'PAS',
                'status' => 1,
            ),
            496 => 
            array (
                'zone_id' => 997,
                'country_id' => 62,
                'name' => 'Pichincha',
                'code' => 'PIC',
                'status' => 1,
            ),
            497 => 
            array (
                'zone_id' => 998,
                'country_id' => 62,
                'name' => 'Sucumb&iacute;os',
                'code' => 'SUC',
                'status' => 1,
            ),
            498 => 
            array (
                'zone_id' => 999,
                'country_id' => 62,
                'name' => 'Tungurahua',
                'code' => 'TUN',
                'status' => 1,
            ),
            499 => 
            array (
                'zone_id' => 1000,
                'country_id' => 62,
                'name' => 'Zamora Chinchipe',
                'code' => 'ZCH',
                'status' => 1,
            ),
        ));
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 1001,
                'country_id' => 63,
                'name' => 'Ad Daqahliyah',
                'code' => 'DHY',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 1002,
                'country_id' => 63,
                'name' => 'Al Bahr al Ahmar',
                'code' => 'BAM',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 1003,
                'country_id' => 63,
                'name' => 'Al Buhayrah',
                'code' => 'BHY',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 1004,
                'country_id' => 63,
                'name' => 'Al Fayyum',
                'code' => 'FYM',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 1005,
                'country_id' => 63,
                'name' => 'Al Gharbiyah',
                'code' => 'GBY',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 1006,
                'country_id' => 63,
                'name' => 'Al Iskandariyah',
                'code' => 'IDR',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 1007,
                'country_id' => 63,
                'name' => 'Al Isma\'iliyah',
                'code' => 'IML',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 1008,
                'country_id' => 63,
                'name' => 'Al Jizah',
                'code' => 'JZH',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 1009,
                'country_id' => 63,
                'name' => 'Al Minufiyah',
                'code' => 'MFY',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 1010,
                'country_id' => 63,
                'name' => 'Al Minya',
                'code' => 'MNY',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 1011,
                'country_id' => 63,
                'name' => 'Al Qahirah',
                'code' => 'QHR',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 1012,
                'country_id' => 63,
                'name' => 'Al Qalyubiyah',
                'code' => 'QLY',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 1013,
                'country_id' => 63,
                'name' => 'Al Wadi al Jadid',
                'code' => 'WJD',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 1014,
                'country_id' => 63,
                'name' => 'Ash Sharqiyah',
                'code' => 'SHQ',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 1015,
                'country_id' => 63,
                'name' => 'As Suways',
                'code' => 'SWY',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 1016,
                'country_id' => 63,
                'name' => 'Aswan',
                'code' => 'ASW',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 1017,
                'country_id' => 63,
                'name' => 'Asyut',
                'code' => 'ASY',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 1018,
                'country_id' => 63,
                'name' => 'Bani Suwayf',
                'code' => 'BSW',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 1019,
                'country_id' => 63,
                'name' => 'Bur Sa\'id',
                'code' => 'BSD',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 1020,
                'country_id' => 63,
                'name' => 'Dumyat',
                'code' => 'DMY',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 1021,
                'country_id' => 63,
                'name' => 'Janub Sina\'',
                'code' => 'JNS',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 1022,
                'country_id' => 63,
                'name' => 'Kafr ash Shaykh',
                'code' => 'KSH',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 1023,
                'country_id' => 63,
                'name' => 'Matruh',
                'code' => 'MAT',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 1024,
                'country_id' => 63,
                'name' => 'Qina',
                'code' => 'QIN',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 1025,
                'country_id' => 63,
                'name' => 'Shamal Sina\'',
                'code' => 'SHS',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 1026,
                'country_id' => 63,
                'name' => 'Suhaj',
                'code' => 'SUH',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 1027,
                'country_id' => 64,
                'name' => 'Ahuachapan',
                'code' => 'AH',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 1028,
                'country_id' => 64,
                'name' => 'Cabanas',
                'code' => 'CA',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 1029,
                'country_id' => 64,
                'name' => 'Chalatenango',
                'code' => 'CH',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 1030,
                'country_id' => 64,
                'name' => 'Cuscatlan',
                'code' => 'CU',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 1031,
                'country_id' => 64,
                'name' => 'La Libertad',
                'code' => 'LB',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 1032,
                'country_id' => 64,
                'name' => 'La Paz',
                'code' => 'PZ',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 1033,
                'country_id' => 64,
                'name' => 'La Union',
                'code' => 'UN',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 1034,
                'country_id' => 64,
                'name' => 'Morazan',
                'code' => 'MO',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 1035,
                'country_id' => 64,
                'name' => 'San Miguel',
                'code' => 'SM',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 1036,
                'country_id' => 64,
                'name' => 'San Salvador',
                'code' => 'SS',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 1037,
                'country_id' => 64,
                'name' => 'San Vicente',
                'code' => 'SV',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 1038,
                'country_id' => 64,
                'name' => 'Santa Ana',
                'code' => 'SA',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 1039,
                'country_id' => 64,
                'name' => 'Sonsonate',
                'code' => 'SO',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 1040,
                'country_id' => 64,
                'name' => 'Usulutan',
                'code' => 'US',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 1041,
                'country_id' => 65,
                'name' => 'Provincia Annobon',
                'code' => 'AN',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 1042,
                'country_id' => 65,
                'name' => 'Provincia Bioko Norte',
                'code' => 'BN',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 1043,
                'country_id' => 65,
                'name' => 'Provincia Bioko Sur',
                'code' => 'BS',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 1044,
                'country_id' => 65,
                'name' => 'Provincia Centro Sur',
                'code' => 'CS',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 1045,
                'country_id' => 65,
                'name' => 'Provincia Kie-Ntem',
                'code' => 'KN',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 1046,
                'country_id' => 65,
                'name' => 'Provincia Litoral',
                'code' => 'LI',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 1047,
                'country_id' => 65,
                'name' => 'Provincia Wele-Nzas',
                'code' => 'WN',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 1048,
                'country_id' => 66,
            'name' => 'Central (Maekel)',
                'code' => 'MA',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 1049,
                'country_id' => 66,
            'name' => 'Anseba (Keren)',
                'code' => 'KE',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 1050,
                'country_id' => 66,
            'name' => 'Southern Red Sea (Debub-Keih-Bahri)',
                'code' => 'DK',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 1051,
                'country_id' => 66,
            'name' => 'Northern Red Sea (Semien-Keih-Bahri)',
                'code' => 'SK',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 1052,
                'country_id' => 66,
            'name' => 'Southern (Debub)',
                'code' => 'DE',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 1053,
                'country_id' => 66,
            'name' => 'Gash-Barka (Barentu)',
                'code' => 'BR',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 1054,
                'country_id' => 67,
            'name' => 'Harjumaa (Tallinn)',
                'code' => 'HA',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 1055,
                'country_id' => 67,
            'name' => 'Hiiumaa (Kardla)',
                'code' => 'HI',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 1056,
                'country_id' => 67,
            'name' => 'Ida-Virumaa (Johvi)',
                'code' => 'IV',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 1057,
                'country_id' => 67,
            'name' => 'Jarvamaa (Paide)',
                'code' => 'JA',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 1058,
                'country_id' => 67,
            'name' => 'Jogevamaa (Jogeva)',
                'code' => 'JO',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 1059,
                'country_id' => 67,
            'name' => 'Laane-Virumaa (Rakvere)',
                'code' => 'LV',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 1060,
                'country_id' => 67,
            'name' => 'Laanemaa (Haapsalu)',
                'code' => 'LA',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 1061,
                'country_id' => 67,
            'name' => 'Parnumaa (Parnu)',
                'code' => 'PA',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 1062,
                'country_id' => 67,
            'name' => 'Polvamaa (Polva)',
                'code' => 'PO',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 1063,
                'country_id' => 67,
            'name' => 'Raplamaa (Rapla)',
                'code' => 'RA',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 1064,
                'country_id' => 67,
            'name' => 'Saaremaa (Kuessaare)',
                'code' => 'SA',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 1065,
                'country_id' => 67,
            'name' => 'Tartumaa (Tartu)',
                'code' => 'TA',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 1066,
                'country_id' => 67,
            'name' => 'Valgamaa (Valga)',
                'code' => 'VA',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 1067,
                'country_id' => 67,
            'name' => 'Viljandimaa (Viljandi)',
                'code' => 'VI',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 1068,
                'country_id' => 67,
            'name' => 'Vorumaa (Voru)',
                'code' => 'VO',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 1069,
                'country_id' => 68,
                'name' => 'Afar',
                'code' => 'AF',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 1070,
                'country_id' => 68,
                'name' => 'Amhara',
                'code' => 'AH',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 1071,
                'country_id' => 68,
                'name' => 'Benishangul-Gumaz',
                'code' => 'BG',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 1072,
                'country_id' => 68,
                'name' => 'Gambela',
                'code' => 'GB',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 1073,
                'country_id' => 68,
                'name' => 'Hariai',
                'code' => 'HR',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 1074,
                'country_id' => 68,
                'name' => 'Oromia',
                'code' => 'OR',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 1075,
                'country_id' => 68,
                'name' => 'Somali',
                'code' => 'SM',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 1076,
                'country_id' => 68,
                'name' => 'Southern Nations - Nationalities and Peoples Region',
                'code' => 'SN',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 1077,
                'country_id' => 68,
                'name' => 'Tigray',
                'code' => 'TG',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 1078,
                'country_id' => 68,
                'name' => 'Addis Ababa',
                'code' => 'AA',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 1079,
                'country_id' => 68,
                'name' => 'Dire Dawa',
                'code' => 'DD',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 1080,
                'country_id' => 71,
                'name' => 'Central Division',
                'code' => 'C',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 1081,
                'country_id' => 71,
                'name' => 'Northern Division',
                'code' => 'N',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 1082,
                'country_id' => 71,
                'name' => 'Eastern Division',
                'code' => 'E',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 1083,
                'country_id' => 71,
                'name' => 'Western Division',
                'code' => 'W',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 1084,
                'country_id' => 71,
                'name' => 'Rotuma',
                'code' => 'R',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 1085,
                'country_id' => 72,
                'name' => 'Ahvenanmaan lääni',
                'code' => 'AL',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 1086,
                'country_id' => 72,
                'name' => 'Etelä-Suomen lääni',
                'code' => 'ES',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 1087,
                'country_id' => 72,
                'name' => 'Itä-Suomen lääni',
                'code' => 'IS',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 1088,
                'country_id' => 72,
                'name' => 'Länsi-Suomen lääni',
                'code' => 'LS',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 1089,
                'country_id' => 72,
                'name' => 'Lapin lääni',
                'code' => 'LA',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 1090,
                'country_id' => 72,
                'name' => 'Oulun lääni',
                'code' => 'OU',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 1114,
                'country_id' => 74,
                'name' => 'Ain',
                'code' => '01',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 1115,
                'country_id' => 74,
                'name' => 'Aisne',
                'code' => '02',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 1116,
                'country_id' => 74,
                'name' => 'Allier',
                'code' => '03',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 1117,
                'country_id' => 74,
                'name' => 'Alpes de Haute Provence',
                'code' => '04',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 1118,
                'country_id' => 74,
                'name' => 'Hautes-Alpes',
                'code' => '05',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 1119,
                'country_id' => 74,
                'name' => 'Alpes Maritimes',
                'code' => '06',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 1120,
                'country_id' => 74,
                'name' => 'Ard&egrave;che',
                'code' => '07',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 1121,
                'country_id' => 74,
                'name' => 'Ardennes',
                'code' => '08',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 1122,
                'country_id' => 74,
                'name' => 'Ari&egrave;ge',
                'code' => '09',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 1123,
                'country_id' => 74,
                'name' => 'Aube',
                'code' => '10',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 1124,
                'country_id' => 74,
                'name' => 'Aude',
                'code' => '11',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 1125,
                'country_id' => 74,
                'name' => 'Aveyron',
                'code' => '12',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 1126,
                'country_id' => 74,
                'name' => 'Bouches du Rh&ocirc;ne',
                'code' => '13',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 1127,
                'country_id' => 74,
                'name' => 'Calvados',
                'code' => '14',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 1128,
                'country_id' => 74,
                'name' => 'Cantal',
                'code' => '15',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 1129,
                'country_id' => 74,
                'name' => 'Charente',
                'code' => '16',
                'status' => 1,
            ),
            106 => 
            array (
                'zone_id' => 1130,
                'country_id' => 74,
                'name' => 'Charente Maritime',
                'code' => '17',
                'status' => 1,
            ),
            107 => 
            array (
                'zone_id' => 1131,
                'country_id' => 74,
                'name' => 'Cher',
                'code' => '18',
                'status' => 1,
            ),
            108 => 
            array (
                'zone_id' => 1132,
                'country_id' => 74,
                'name' => 'Corr&egrave;ze',
                'code' => '19',
                'status' => 1,
            ),
            109 => 
            array (
                'zone_id' => 1133,
                'country_id' => 74,
                'name' => 'Corse du Sud',
                'code' => '2A',
                'status' => 1,
            ),
            110 => 
            array (
                'zone_id' => 1134,
                'country_id' => 74,
                'name' => 'Haute Corse',
                'code' => '2B',
                'status' => 1,
            ),
            111 => 
            array (
                'zone_id' => 1135,
                'country_id' => 74,
                'name' => 'C&ocirc;te d&#039;or',
                'code' => '21',
                'status' => 1,
            ),
            112 => 
            array (
                'zone_id' => 1136,
                'country_id' => 74,
                'name' => 'C&ocirc;tes d&#039;Armor',
                'code' => '22',
                'status' => 1,
            ),
            113 => 
            array (
                'zone_id' => 1137,
                'country_id' => 74,
                'name' => 'Creuse',
                'code' => '23',
                'status' => 1,
            ),
            114 => 
            array (
                'zone_id' => 1138,
                'country_id' => 74,
                'name' => 'Dordogne',
                'code' => '24',
                'status' => 1,
            ),
            115 => 
            array (
                'zone_id' => 1139,
                'country_id' => 74,
                'name' => 'Doubs',
                'code' => '25',
                'status' => 1,
            ),
            116 => 
            array (
                'zone_id' => 1140,
                'country_id' => 74,
                'name' => 'Dr&ocirc;me',
                'code' => '26',
                'status' => 1,
            ),
            117 => 
            array (
                'zone_id' => 1141,
                'country_id' => 74,
                'name' => 'Eure',
                'code' => '27',
                'status' => 1,
            ),
            118 => 
            array (
                'zone_id' => 1142,
                'country_id' => 74,
                'name' => 'Eure et Loir',
                'code' => '28',
                'status' => 1,
            ),
            119 => 
            array (
                'zone_id' => 1143,
                'country_id' => 74,
                'name' => 'Finist&egrave;re',
                'code' => '29',
                'status' => 1,
            ),
            120 => 
            array (
                'zone_id' => 1144,
                'country_id' => 74,
                'name' => 'Gard',
                'code' => '30',
                'status' => 1,
            ),
            121 => 
            array (
                'zone_id' => 1145,
                'country_id' => 74,
                'name' => 'Haute Garonne',
                'code' => '31',
                'status' => 1,
            ),
            122 => 
            array (
                'zone_id' => 1146,
                'country_id' => 74,
                'name' => 'Gers',
                'code' => '32',
                'status' => 1,
            ),
            123 => 
            array (
                'zone_id' => 1147,
                'country_id' => 74,
                'name' => 'Gironde',
                'code' => '33',
                'status' => 1,
            ),
            124 => 
            array (
                'zone_id' => 1148,
                'country_id' => 74,
                'name' => 'H&eacute;rault',
                'code' => '34',
                'status' => 1,
            ),
            125 => 
            array (
                'zone_id' => 1149,
                'country_id' => 74,
                'name' => 'Ille et Vilaine',
                'code' => '35',
                'status' => 1,
            ),
            126 => 
            array (
                'zone_id' => 1150,
                'country_id' => 74,
                'name' => 'Indre',
                'code' => '36',
                'status' => 1,
            ),
            127 => 
            array (
                'zone_id' => 1151,
                'country_id' => 74,
                'name' => 'Indre et Loire',
                'code' => '37',
                'status' => 1,
            ),
            128 => 
            array (
                'zone_id' => 1152,
                'country_id' => 74,
                'name' => 'Is&eacute;re',
                'code' => '38',
                'status' => 1,
            ),
            129 => 
            array (
                'zone_id' => 1153,
                'country_id' => 74,
                'name' => 'Jura',
                'code' => '39',
                'status' => 1,
            ),
            130 => 
            array (
                'zone_id' => 1154,
                'country_id' => 74,
                'name' => 'Landes',
                'code' => '40',
                'status' => 1,
            ),
            131 => 
            array (
                'zone_id' => 1155,
                'country_id' => 74,
                'name' => 'Loir et Cher',
                'code' => '41',
                'status' => 1,
            ),
            132 => 
            array (
                'zone_id' => 1156,
                'country_id' => 74,
                'name' => 'Loire',
                'code' => '42',
                'status' => 1,
            ),
            133 => 
            array (
                'zone_id' => 1157,
                'country_id' => 74,
                'name' => 'Haute Loire',
                'code' => '43',
                'status' => 1,
            ),
            134 => 
            array (
                'zone_id' => 1158,
                'country_id' => 74,
                'name' => 'Loire Atlantique',
                'code' => '44',
                'status' => 1,
            ),
            135 => 
            array (
                'zone_id' => 1159,
                'country_id' => 74,
                'name' => 'Loiret',
                'code' => '45',
                'status' => 1,
            ),
            136 => 
            array (
                'zone_id' => 1160,
                'country_id' => 74,
                'name' => 'Lot',
                'code' => '46',
                'status' => 1,
            ),
            137 => 
            array (
                'zone_id' => 1161,
                'country_id' => 74,
                'name' => 'Lot et Garonne',
                'code' => '47',
                'status' => 1,
            ),
            138 => 
            array (
                'zone_id' => 1162,
                'country_id' => 74,
                'name' => 'Loz&egrave;re',
                'code' => '48',
                'status' => 1,
            ),
            139 => 
            array (
                'zone_id' => 1163,
                'country_id' => 74,
                'name' => 'Maine et Loire',
                'code' => '49',
                'status' => 1,
            ),
            140 => 
            array (
                'zone_id' => 1164,
                'country_id' => 74,
                'name' => 'Manche',
                'code' => '50',
                'status' => 1,
            ),
            141 => 
            array (
                'zone_id' => 1165,
                'country_id' => 74,
                'name' => 'Marne',
                'code' => '51',
                'status' => 1,
            ),
            142 => 
            array (
                'zone_id' => 1166,
                'country_id' => 74,
                'name' => 'Haute Marne',
                'code' => '52',
                'status' => 1,
            ),
            143 => 
            array (
                'zone_id' => 1167,
                'country_id' => 74,
                'name' => 'Mayenne',
                'code' => '53',
                'status' => 1,
            ),
            144 => 
            array (
                'zone_id' => 1168,
                'country_id' => 74,
                'name' => 'Meurthe et Moselle',
                'code' => '54',
                'status' => 1,
            ),
            145 => 
            array (
                'zone_id' => 1169,
                'country_id' => 74,
                'name' => 'Meuse',
                'code' => '55',
                'status' => 1,
            ),
            146 => 
            array (
                'zone_id' => 1170,
                'country_id' => 74,
                'name' => 'Morbihan',
                'code' => '56',
                'status' => 1,
            ),
            147 => 
            array (
                'zone_id' => 1171,
                'country_id' => 74,
                'name' => 'Moselle',
                'code' => '57',
                'status' => 1,
            ),
            148 => 
            array (
                'zone_id' => 1172,
                'country_id' => 74,
                'name' => 'Ni&egrave;vre',
                'code' => '58',
                'status' => 1,
            ),
            149 => 
            array (
                'zone_id' => 1173,
                'country_id' => 74,
                'name' => 'Nord',
                'code' => '59',
                'status' => 1,
            ),
            150 => 
            array (
                'zone_id' => 1174,
                'country_id' => 74,
                'name' => 'Oise',
                'code' => '60',
                'status' => 1,
            ),
            151 => 
            array (
                'zone_id' => 1175,
                'country_id' => 74,
                'name' => 'Orne',
                'code' => '61',
                'status' => 1,
            ),
            152 => 
            array (
                'zone_id' => 1176,
                'country_id' => 74,
                'name' => 'Pas de Calais',
                'code' => '62',
                'status' => 1,
            ),
            153 => 
            array (
                'zone_id' => 1177,
                'country_id' => 74,
                'name' => 'Puy de D&ocirc;me',
                'code' => '63',
                'status' => 1,
            ),
            154 => 
            array (
                'zone_id' => 1178,
                'country_id' => 74,
                'name' => 'Pyr&eacute;n&eacute;es Atlantiques',
                'code' => '64',
                'status' => 1,
            ),
            155 => 
            array (
                'zone_id' => 1179,
                'country_id' => 74,
                'name' => 'Hautes Pyr&eacute;n&eacute;es',
                'code' => '65',
                'status' => 1,
            ),
            156 => 
            array (
                'zone_id' => 1180,
                'country_id' => 74,
                'name' => 'Pyr&eacute;n&eacute;es Orientales',
                'code' => '66',
                'status' => 1,
            ),
            157 => 
            array (
                'zone_id' => 1181,
                'country_id' => 74,
                'name' => 'Bas Rhin',
                'code' => '67',
                'status' => 1,
            ),
            158 => 
            array (
                'zone_id' => 1182,
                'country_id' => 74,
                'name' => 'Haut Rhin',
                'code' => '68',
                'status' => 1,
            ),
            159 => 
            array (
                'zone_id' => 1183,
                'country_id' => 74,
                'name' => 'Rh&ocirc;ne',
                'code' => '69',
                'status' => 1,
            ),
            160 => 
            array (
                'zone_id' => 1184,
                'country_id' => 74,
                'name' => 'Haute Sa&ocirc;ne',
                'code' => '70',
                'status' => 1,
            ),
            161 => 
            array (
                'zone_id' => 1185,
                'country_id' => 74,
                'name' => 'Sa&ocirc;ne et Loire',
                'code' => '71',
                'status' => 1,
            ),
            162 => 
            array (
                'zone_id' => 1186,
                'country_id' => 74,
                'name' => 'Sarthe',
                'code' => '72',
                'status' => 1,
            ),
            163 => 
            array (
                'zone_id' => 1187,
                'country_id' => 74,
                'name' => 'Savoie',
                'code' => '73',
                'status' => 1,
            ),
            164 => 
            array (
                'zone_id' => 1188,
                'country_id' => 74,
                'name' => 'Haute Savoie',
                'code' => '74',
                'status' => 1,
            ),
            165 => 
            array (
                'zone_id' => 1189,
                'country_id' => 74,
                'name' => 'Paris',
                'code' => '75',
                'status' => 1,
            ),
            166 => 
            array (
                'zone_id' => 1190,
                'country_id' => 74,
                'name' => 'Seine Maritime',
                'code' => '76',
                'status' => 1,
            ),
            167 => 
            array (
                'zone_id' => 1191,
                'country_id' => 74,
                'name' => 'Seine et Marne',
                'code' => '77',
                'status' => 1,
            ),
            168 => 
            array (
                'zone_id' => 1192,
                'country_id' => 74,
                'name' => 'Yvelines',
                'code' => '78',
                'status' => 1,
            ),
            169 => 
            array (
                'zone_id' => 1193,
                'country_id' => 74,
                'name' => 'Deux S&egrave;vres',
                'code' => '79',
                'status' => 1,
            ),
            170 => 
            array (
                'zone_id' => 1194,
                'country_id' => 74,
                'name' => 'Somme',
                'code' => '80',
                'status' => 1,
            ),
            171 => 
            array (
                'zone_id' => 1195,
                'country_id' => 74,
                'name' => 'Tarn',
                'code' => '81',
                'status' => 1,
            ),
            172 => 
            array (
                'zone_id' => 1196,
                'country_id' => 74,
                'name' => 'Tarn et Garonne',
                'code' => '82',
                'status' => 1,
            ),
            173 => 
            array (
                'zone_id' => 1197,
                'country_id' => 74,
                'name' => 'Var',
                'code' => '83',
                'status' => 1,
            ),
            174 => 
            array (
                'zone_id' => 1198,
                'country_id' => 74,
                'name' => 'Vaucluse',
                'code' => '84',
                'status' => 1,
            ),
            175 => 
            array (
                'zone_id' => 1199,
                'country_id' => 74,
                'name' => 'Vend&eacute;e',
                'code' => '85',
                'status' => 1,
            ),
            176 => 
            array (
                'zone_id' => 1200,
                'country_id' => 74,
                'name' => 'Vienne',
                'code' => '86',
                'status' => 1,
            ),
            177 => 
            array (
                'zone_id' => 1201,
                'country_id' => 74,
                'name' => 'Haute Vienne',
                'code' => '87',
                'status' => 1,
            ),
            178 => 
            array (
                'zone_id' => 1202,
                'country_id' => 74,
                'name' => 'Vosges',
                'code' => '88',
                'status' => 1,
            ),
            179 => 
            array (
                'zone_id' => 1203,
                'country_id' => 74,
                'name' => 'Yonne',
                'code' => '89',
                'status' => 1,
            ),
            180 => 
            array (
                'zone_id' => 1204,
                'country_id' => 74,
                'name' => 'Territoire de Belfort',
                'code' => '90',
                'status' => 1,
            ),
            181 => 
            array (
                'zone_id' => 1205,
                'country_id' => 74,
                'name' => 'Essonne',
                'code' => '91',
                'status' => 1,
            ),
            182 => 
            array (
                'zone_id' => 1206,
                'country_id' => 74,
                'name' => 'Hauts de Seine',
                'code' => '92',
                'status' => 1,
            ),
            183 => 
            array (
                'zone_id' => 1207,
                'country_id' => 74,
                'name' => 'Seine St-Denis',
                'code' => '93',
                'status' => 1,
            ),
            184 => 
            array (
                'zone_id' => 1208,
                'country_id' => 74,
                'name' => 'Val de Marne',
                'code' => '94',
                'status' => 1,
            ),
            185 => 
            array (
                'zone_id' => 1209,
                'country_id' => 74,
                'name' => 'Val d\'Oise',
                'code' => '95',
                'status' => 1,
            ),
            186 => 
            array (
                'zone_id' => 1210,
                'country_id' => 76,
                'name' => 'Archipel des Marquises',
                'code' => 'M',
                'status' => 1,
            ),
            187 => 
            array (
                'zone_id' => 1211,
                'country_id' => 76,
                'name' => 'Archipel des Tuamotu',
                'code' => 'T',
                'status' => 1,
            ),
            188 => 
            array (
                'zone_id' => 1212,
                'country_id' => 76,
                'name' => 'Archipel des Tubuai',
                'code' => 'I',
                'status' => 1,
            ),
            189 => 
            array (
                'zone_id' => 1213,
                'country_id' => 76,
                'name' => 'Iles du Vent',
                'code' => 'V',
                'status' => 1,
            ),
            190 => 
            array (
                'zone_id' => 1214,
                'country_id' => 76,
                'name' => 'Iles Sous-le-Vent',
                'code' => 'S',
                'status' => 1,
            ),
            191 => 
            array (
                'zone_id' => 1215,
                'country_id' => 77,
                'name' => 'Iles Crozet',
                'code' => 'C',
                'status' => 1,
            ),
            192 => 
            array (
                'zone_id' => 1216,
                'country_id' => 77,
                'name' => 'Iles Kerguelen',
                'code' => 'K',
                'status' => 1,
            ),
            193 => 
            array (
                'zone_id' => 1217,
                'country_id' => 77,
                'name' => 'Ile Amsterdam',
                'code' => 'A',
                'status' => 1,
            ),
            194 => 
            array (
                'zone_id' => 1218,
                'country_id' => 77,
                'name' => 'Ile Saint-Paul',
                'code' => 'P',
                'status' => 1,
            ),
            195 => 
            array (
                'zone_id' => 1219,
                'country_id' => 77,
                'name' => 'Adelie Land',
                'code' => 'D',
                'status' => 1,
            ),
            196 => 
            array (
                'zone_id' => 1220,
                'country_id' => 78,
                'name' => 'Estuaire',
                'code' => 'ES',
                'status' => 1,
            ),
            197 => 
            array (
                'zone_id' => 1221,
                'country_id' => 78,
                'name' => 'Haut-Ogooue',
                'code' => 'HO',
                'status' => 1,
            ),
            198 => 
            array (
                'zone_id' => 1222,
                'country_id' => 78,
                'name' => 'Moyen-Ogooue',
                'code' => 'MO',
                'status' => 1,
            ),
            199 => 
            array (
                'zone_id' => 1223,
                'country_id' => 78,
                'name' => 'Ngounie',
                'code' => 'NG',
                'status' => 1,
            ),
            200 => 
            array (
                'zone_id' => 1224,
                'country_id' => 78,
                'name' => 'Nyanga',
                'code' => 'NY',
                'status' => 1,
            ),
            201 => 
            array (
                'zone_id' => 1225,
                'country_id' => 78,
                'name' => 'Ogooue-Ivindo',
                'code' => 'OI',
                'status' => 1,
            ),
            202 => 
            array (
                'zone_id' => 1226,
                'country_id' => 78,
                'name' => 'Ogooue-Lolo',
                'code' => 'OL',
                'status' => 1,
            ),
            203 => 
            array (
                'zone_id' => 1227,
                'country_id' => 78,
                'name' => 'Ogooue-Maritime',
                'code' => 'OM',
                'status' => 1,
            ),
            204 => 
            array (
                'zone_id' => 1228,
                'country_id' => 78,
                'name' => 'Woleu-Ntem',
                'code' => 'WN',
                'status' => 1,
            ),
            205 => 
            array (
                'zone_id' => 1229,
                'country_id' => 79,
                'name' => 'Banjul',
                'code' => 'BJ',
                'status' => 1,
            ),
            206 => 
            array (
                'zone_id' => 1230,
                'country_id' => 79,
                'name' => 'Basse',
                'code' => 'BS',
                'status' => 1,
            ),
            207 => 
            array (
                'zone_id' => 1231,
                'country_id' => 79,
                'name' => 'Brikama',
                'code' => 'BR',
                'status' => 1,
            ),
            208 => 
            array (
                'zone_id' => 1232,
                'country_id' => 79,
                'name' => 'Janjangbure',
                'code' => 'JA',
                'status' => 1,
            ),
            209 => 
            array (
                'zone_id' => 1233,
                'country_id' => 79,
                'name' => 'Kanifeng',
                'code' => 'KA',
                'status' => 1,
            ),
            210 => 
            array (
                'zone_id' => 1234,
                'country_id' => 79,
                'name' => 'Kerewan',
                'code' => 'KE',
                'status' => 1,
            ),
            211 => 
            array (
                'zone_id' => 1235,
                'country_id' => 79,
                'name' => 'Kuntaur',
                'code' => 'KU',
                'status' => 1,
            ),
            212 => 
            array (
                'zone_id' => 1236,
                'country_id' => 79,
                'name' => 'Mansakonko',
                'code' => 'MA',
                'status' => 1,
            ),
            213 => 
            array (
                'zone_id' => 1237,
                'country_id' => 79,
                'name' => 'Lower River',
                'code' => 'LR',
                'status' => 1,
            ),
            214 => 
            array (
                'zone_id' => 1238,
                'country_id' => 79,
                'name' => 'Central River',
                'code' => 'CR',
                'status' => 1,
            ),
            215 => 
            array (
                'zone_id' => 1239,
                'country_id' => 79,
                'name' => 'North Bank',
                'code' => 'NB',
                'status' => 1,
            ),
            216 => 
            array (
                'zone_id' => 1240,
                'country_id' => 79,
                'name' => 'Upper River',
                'code' => 'UR',
                'status' => 1,
            ),
            217 => 
            array (
                'zone_id' => 1241,
                'country_id' => 79,
                'name' => 'Western',
                'code' => 'WE',
                'status' => 1,
            ),
            218 => 
            array (
                'zone_id' => 1242,
                'country_id' => 80,
                'name' => 'Abkhazia',
                'code' => 'AB',
                'status' => 1,
            ),
            219 => 
            array (
                'zone_id' => 1243,
                'country_id' => 80,
                'name' => 'Ajaria',
                'code' => 'AJ',
                'status' => 1,
            ),
            220 => 
            array (
                'zone_id' => 1244,
                'country_id' => 80,
                'name' => 'Tbilisi',
                'code' => 'TB',
                'status' => 1,
            ),
            221 => 
            array (
                'zone_id' => 1245,
                'country_id' => 80,
                'name' => 'Guria',
                'code' => 'GU',
                'status' => 1,
            ),
            222 => 
            array (
                'zone_id' => 1246,
                'country_id' => 80,
                'name' => 'Imereti',
                'code' => 'IM',
                'status' => 1,
            ),
            223 => 
            array (
                'zone_id' => 1247,
                'country_id' => 80,
                'name' => 'Kakheti',
                'code' => 'KA',
                'status' => 1,
            ),
            224 => 
            array (
                'zone_id' => 1248,
                'country_id' => 80,
                'name' => 'Kvemo Kartli',
                'code' => 'KK',
                'status' => 1,
            ),
            225 => 
            array (
                'zone_id' => 1249,
                'country_id' => 80,
                'name' => 'Mtskheta-Mtianeti',
                'code' => 'MM',
                'status' => 1,
            ),
            226 => 
            array (
                'zone_id' => 1250,
                'country_id' => 80,
                'name' => 'Racha Lechkhumi and Kvemo Svanet',
                'code' => 'RL',
                'status' => 1,
            ),
            227 => 
            array (
                'zone_id' => 1251,
                'country_id' => 80,
                'name' => 'Samegrelo-Zemo Svaneti',
                'code' => 'SZ',
                'status' => 1,
            ),
            228 => 
            array (
                'zone_id' => 1252,
                'country_id' => 80,
                'name' => 'Samtskhe-Javakheti',
                'code' => 'SJ',
                'status' => 1,
            ),
            229 => 
            array (
                'zone_id' => 1253,
                'country_id' => 80,
                'name' => 'Shida Kartli',
                'code' => 'SK',
                'status' => 1,
            ),
            230 => 
            array (
                'zone_id' => 1254,
                'country_id' => 81,
                'name' => 'Baden-W&uuml;rttemberg',
                'code' => 'BAW',
                'status' => 1,
            ),
            231 => 
            array (
                'zone_id' => 1255,
                'country_id' => 81,
                'name' => 'Bayern',
                'code' => 'BAY',
                'status' => 1,
            ),
            232 => 
            array (
                'zone_id' => 1256,
                'country_id' => 81,
                'name' => 'Berlin',
                'code' => 'BER',
                'status' => 1,
            ),
            233 => 
            array (
                'zone_id' => 1257,
                'country_id' => 81,
                'name' => 'Brandenburg',
                'code' => 'BRG',
                'status' => 1,
            ),
            234 => 
            array (
                'zone_id' => 1258,
                'country_id' => 81,
                'name' => 'Bremen',
                'code' => 'BRE',
                'status' => 1,
            ),
            235 => 
            array (
                'zone_id' => 1259,
                'country_id' => 81,
                'name' => 'Hamburg',
                'code' => 'HAM',
                'status' => 1,
            ),
            236 => 
            array (
                'zone_id' => 1260,
                'country_id' => 81,
                'name' => 'Hessen',
                'code' => 'HES',
                'status' => 1,
            ),
            237 => 
            array (
                'zone_id' => 1261,
                'country_id' => 81,
                'name' => 'Mecklenburg-Vorpommern',
                'code' => 'MEC',
                'status' => 1,
            ),
            238 => 
            array (
                'zone_id' => 1262,
                'country_id' => 81,
                'name' => 'Niedersachsen',
                'code' => 'NDS',
                'status' => 1,
            ),
            239 => 
            array (
                'zone_id' => 1263,
                'country_id' => 81,
                'name' => 'Nordrhein-Westfalen',
                'code' => 'NRW',
                'status' => 1,
            ),
            240 => 
            array (
                'zone_id' => 1264,
                'country_id' => 81,
                'name' => 'Rheinland-Pfalz',
                'code' => 'RHE',
                'status' => 1,
            ),
            241 => 
            array (
                'zone_id' => 1265,
                'country_id' => 81,
                'name' => 'Saarland',
                'code' => 'SAR',
                'status' => 1,
            ),
            242 => 
            array (
                'zone_id' => 1266,
                'country_id' => 81,
                'name' => 'Sachsen',
                'code' => 'SAS',
                'status' => 1,
            ),
            243 => 
            array (
                'zone_id' => 1267,
                'country_id' => 81,
                'name' => 'Sachsen-Anhalt',
                'code' => 'SAC',
                'status' => 1,
            ),
            244 => 
            array (
                'zone_id' => 1268,
                'country_id' => 81,
                'name' => 'Schleswig-Holstein',
                'code' => 'SCN',
                'status' => 1,
            ),
            245 => 
            array (
                'zone_id' => 1269,
                'country_id' => 81,
                'name' => 'Th&uuml;ringen',
                'code' => 'THE',
                'status' => 1,
            ),
            246 => 
            array (
                'zone_id' => 1270,
                'country_id' => 82,
                'name' => 'Ashanti Region',
                'code' => 'AS',
                'status' => 1,
            ),
            247 => 
            array (
                'zone_id' => 1271,
                'country_id' => 82,
                'name' => 'Brong-Ahafo Region',
                'code' => 'BA',
                'status' => 1,
            ),
            248 => 
            array (
                'zone_id' => 1272,
                'country_id' => 82,
                'name' => 'Central Region',
                'code' => 'CE',
                'status' => 1,
            ),
            249 => 
            array (
                'zone_id' => 1273,
                'country_id' => 82,
                'name' => 'Eastern Region',
                'code' => 'EA',
                'status' => 1,
            ),
            250 => 
            array (
                'zone_id' => 1274,
                'country_id' => 82,
                'name' => 'Greater Accra Region',
                'code' => 'GA',
                'status' => 1,
            ),
            251 => 
            array (
                'zone_id' => 1275,
                'country_id' => 82,
                'name' => 'Northern Region',
                'code' => 'NO',
                'status' => 1,
            ),
            252 => 
            array (
                'zone_id' => 1276,
                'country_id' => 82,
                'name' => 'Upper East Region',
                'code' => 'UE',
                'status' => 1,
            ),
            253 => 
            array (
                'zone_id' => 1277,
                'country_id' => 82,
                'name' => 'Upper West Region',
                'code' => 'UW',
                'status' => 1,
            ),
            254 => 
            array (
                'zone_id' => 1278,
                'country_id' => 82,
                'name' => 'Volta Region',
                'code' => 'VO',
                'status' => 1,
            ),
            255 => 
            array (
                'zone_id' => 1279,
                'country_id' => 82,
                'name' => 'Western Region',
                'code' => 'WE',
                'status' => 1,
            ),
            256 => 
            array (
                'zone_id' => 1280,
                'country_id' => 84,
                'name' => 'Attica',
                'code' => 'AT',
                'status' => 1,
            ),
            257 => 
            array (
                'zone_id' => 1281,
                'country_id' => 84,
                'name' => 'Central Greece',
                'code' => 'CN',
                'status' => 1,
            ),
            258 => 
            array (
                'zone_id' => 1282,
                'country_id' => 84,
                'name' => 'Central Macedonia',
                'code' => 'CM',
                'status' => 1,
            ),
            259 => 
            array (
                'zone_id' => 1283,
                'country_id' => 84,
                'name' => 'Crete',
                'code' => 'CR',
                'status' => 1,
            ),
            260 => 
            array (
                'zone_id' => 1284,
                'country_id' => 84,
                'name' => 'East Macedonia and Thrace',
                'code' => 'EM',
                'status' => 1,
            ),
            261 => 
            array (
                'zone_id' => 1285,
                'country_id' => 84,
                'name' => 'Epirus',
                'code' => 'EP',
                'status' => 1,
            ),
            262 => 
            array (
                'zone_id' => 1286,
                'country_id' => 84,
                'name' => 'Ionian Islands',
                'code' => 'II',
                'status' => 1,
            ),
            263 => 
            array (
                'zone_id' => 1287,
                'country_id' => 84,
                'name' => 'North Aegean',
                'code' => 'NA',
                'status' => 1,
            ),
            264 => 
            array (
                'zone_id' => 1288,
                'country_id' => 84,
                'name' => 'Peloponnesos',
                'code' => 'PP',
                'status' => 1,
            ),
            265 => 
            array (
                'zone_id' => 1289,
                'country_id' => 84,
                'name' => 'South Aegean',
                'code' => 'SA',
                'status' => 1,
            ),
            266 => 
            array (
                'zone_id' => 1290,
                'country_id' => 84,
                'name' => 'Thessaly',
                'code' => 'TH',
                'status' => 1,
            ),
            267 => 
            array (
                'zone_id' => 1291,
                'country_id' => 84,
                'name' => 'West Greece',
                'code' => 'WG',
                'status' => 1,
            ),
            268 => 
            array (
                'zone_id' => 1292,
                'country_id' => 84,
                'name' => 'West Macedonia',
                'code' => 'WM',
                'status' => 1,
            ),
            269 => 
            array (
                'zone_id' => 1293,
                'country_id' => 85,
                'name' => 'Avannaa',
                'code' => 'A',
                'status' => 1,
            ),
            270 => 
            array (
                'zone_id' => 1294,
                'country_id' => 85,
                'name' => 'Tunu',
                'code' => 'T',
                'status' => 1,
            ),
            271 => 
            array (
                'zone_id' => 1295,
                'country_id' => 85,
                'name' => 'Kitaa',
                'code' => 'K',
                'status' => 1,
            ),
            272 => 
            array (
                'zone_id' => 1296,
                'country_id' => 86,
                'name' => 'Saint Andrew',
                'code' => 'A',
                'status' => 1,
            ),
            273 => 
            array (
                'zone_id' => 1297,
                'country_id' => 86,
                'name' => 'Saint David',
                'code' => 'D',
                'status' => 1,
            ),
            274 => 
            array (
                'zone_id' => 1298,
                'country_id' => 86,
                'name' => 'Saint George',
                'code' => 'G',
                'status' => 1,
            ),
            275 => 
            array (
                'zone_id' => 1299,
                'country_id' => 86,
                'name' => 'Saint John',
                'code' => 'J',
                'status' => 1,
            ),
            276 => 
            array (
                'zone_id' => 1300,
                'country_id' => 86,
                'name' => 'Saint Mark',
                'code' => 'M',
                'status' => 1,
            ),
            277 => 
            array (
                'zone_id' => 1301,
                'country_id' => 86,
                'name' => 'Saint Patrick',
                'code' => 'P',
                'status' => 1,
            ),
            278 => 
            array (
                'zone_id' => 1302,
                'country_id' => 86,
                'name' => 'Carriacou',
                'code' => 'C',
                'status' => 1,
            ),
            279 => 
            array (
                'zone_id' => 1303,
                'country_id' => 86,
                'name' => 'Petit Martinique',
                'code' => 'Q',
                'status' => 1,
            ),
            280 => 
            array (
                'zone_id' => 1304,
                'country_id' => 89,
                'name' => 'Alta Verapaz',
                'code' => 'AV',
                'status' => 1,
            ),
            281 => 
            array (
                'zone_id' => 1305,
                'country_id' => 89,
                'name' => 'Baja Verapaz',
                'code' => 'BV',
                'status' => 1,
            ),
            282 => 
            array (
                'zone_id' => 1306,
                'country_id' => 89,
                'name' => 'Chimaltenango',
                'code' => 'CM',
                'status' => 1,
            ),
            283 => 
            array (
                'zone_id' => 1307,
                'country_id' => 89,
                'name' => 'Chiquimula',
                'code' => 'CQ',
                'status' => 1,
            ),
            284 => 
            array (
                'zone_id' => 1308,
                'country_id' => 89,
                'name' => 'El Peten',
                'code' => 'PE',
                'status' => 1,
            ),
            285 => 
            array (
                'zone_id' => 1309,
                'country_id' => 89,
                'name' => 'El Progreso',
                'code' => 'PR',
                'status' => 1,
            ),
            286 => 
            array (
                'zone_id' => 1310,
                'country_id' => 89,
                'name' => 'El Quiche',
                'code' => 'QC',
                'status' => 1,
            ),
            287 => 
            array (
                'zone_id' => 1311,
                'country_id' => 89,
                'name' => 'Escuintla',
                'code' => 'ES',
                'status' => 1,
            ),
            288 => 
            array (
                'zone_id' => 1312,
                'country_id' => 89,
                'name' => 'Guatemala',
                'code' => 'GU',
                'status' => 1,
            ),
            289 => 
            array (
                'zone_id' => 1313,
                'country_id' => 89,
                'name' => 'Huehuetenango',
                'code' => 'HU',
                'status' => 1,
            ),
            290 => 
            array (
                'zone_id' => 1314,
                'country_id' => 89,
                'name' => 'Izabal',
                'code' => 'IZ',
                'status' => 1,
            ),
            291 => 
            array (
                'zone_id' => 1315,
                'country_id' => 89,
                'name' => 'Jalapa',
                'code' => 'JA',
                'status' => 1,
            ),
            292 => 
            array (
                'zone_id' => 1316,
                'country_id' => 89,
                'name' => 'Jutiapa',
                'code' => 'JU',
                'status' => 1,
            ),
            293 => 
            array (
                'zone_id' => 1317,
                'country_id' => 89,
                'name' => 'Quetzaltenango',
                'code' => 'QZ',
                'status' => 1,
            ),
            294 => 
            array (
                'zone_id' => 1318,
                'country_id' => 89,
                'name' => 'Retalhuleu',
                'code' => 'RE',
                'status' => 1,
            ),
            295 => 
            array (
                'zone_id' => 1319,
                'country_id' => 89,
                'name' => 'Sacatepequez',
                'code' => 'ST',
                'status' => 1,
            ),
            296 => 
            array (
                'zone_id' => 1320,
                'country_id' => 89,
                'name' => 'San Marcos',
                'code' => 'SM',
                'status' => 1,
            ),
            297 => 
            array (
                'zone_id' => 1321,
                'country_id' => 89,
                'name' => 'Santa Rosa',
                'code' => 'SR',
                'status' => 1,
            ),
            298 => 
            array (
                'zone_id' => 1322,
                'country_id' => 89,
                'name' => 'Solola',
                'code' => 'SO',
                'status' => 1,
            ),
            299 => 
            array (
                'zone_id' => 1323,
                'country_id' => 89,
                'name' => 'Suchitepequez',
                'code' => 'SU',
                'status' => 1,
            ),
            300 => 
            array (
                'zone_id' => 1324,
                'country_id' => 89,
                'name' => 'Totonicapan',
                'code' => 'TO',
                'status' => 1,
            ),
            301 => 
            array (
                'zone_id' => 1325,
                'country_id' => 89,
                'name' => 'Zacapa',
                'code' => 'ZA',
                'status' => 1,
            ),
            302 => 
            array (
                'zone_id' => 1326,
                'country_id' => 90,
                'name' => 'Conakry',
                'code' => 'CNK',
                'status' => 1,
            ),
            303 => 
            array (
                'zone_id' => 1327,
                'country_id' => 90,
                'name' => 'Beyla',
                'code' => 'BYL',
                'status' => 1,
            ),
            304 => 
            array (
                'zone_id' => 1328,
                'country_id' => 90,
                'name' => 'Boffa',
                'code' => 'BFA',
                'status' => 1,
            ),
            305 => 
            array (
                'zone_id' => 1329,
                'country_id' => 90,
                'name' => 'Boke',
                'code' => 'BOK',
                'status' => 1,
            ),
            306 => 
            array (
                'zone_id' => 1330,
                'country_id' => 90,
                'name' => 'Coyah',
                'code' => 'COY',
                'status' => 1,
            ),
            307 => 
            array (
                'zone_id' => 1331,
                'country_id' => 90,
                'name' => 'Dabola',
                'code' => 'DBL',
                'status' => 1,
            ),
            308 => 
            array (
                'zone_id' => 1332,
                'country_id' => 90,
                'name' => 'Dalaba',
                'code' => 'DLB',
                'status' => 1,
            ),
            309 => 
            array (
                'zone_id' => 1333,
                'country_id' => 90,
                'name' => 'Dinguiraye',
                'code' => 'DGR',
                'status' => 1,
            ),
            310 => 
            array (
                'zone_id' => 1334,
                'country_id' => 90,
                'name' => 'Dubreka',
                'code' => 'DBR',
                'status' => 1,
            ),
            311 => 
            array (
                'zone_id' => 1335,
                'country_id' => 90,
                'name' => 'Faranah',
                'code' => 'FRN',
                'status' => 1,
            ),
            312 => 
            array (
                'zone_id' => 1336,
                'country_id' => 90,
                'name' => 'Forecariah',
                'code' => 'FRC',
                'status' => 1,
            ),
            313 => 
            array (
                'zone_id' => 1337,
                'country_id' => 90,
                'name' => 'Fria',
                'code' => 'FRI',
                'status' => 1,
            ),
            314 => 
            array (
                'zone_id' => 1338,
                'country_id' => 90,
                'name' => 'Gaoual',
                'code' => 'GAO',
                'status' => 1,
            ),
            315 => 
            array (
                'zone_id' => 1339,
                'country_id' => 90,
                'name' => 'Gueckedou',
                'code' => 'GCD',
                'status' => 1,
            ),
            316 => 
            array (
                'zone_id' => 1340,
                'country_id' => 90,
                'name' => 'Kankan',
                'code' => 'KNK',
                'status' => 1,
            ),
            317 => 
            array (
                'zone_id' => 1341,
                'country_id' => 90,
                'name' => 'Kerouane',
                'code' => 'KRN',
                'status' => 1,
            ),
            318 => 
            array (
                'zone_id' => 1342,
                'country_id' => 90,
                'name' => 'Kindia',
                'code' => 'KND',
                'status' => 1,
            ),
            319 => 
            array (
                'zone_id' => 1343,
                'country_id' => 90,
                'name' => 'Kissidougou',
                'code' => 'KSD',
                'status' => 1,
            ),
            320 => 
            array (
                'zone_id' => 1344,
                'country_id' => 90,
                'name' => 'Koubia',
                'code' => 'KBA',
                'status' => 1,
            ),
            321 => 
            array (
                'zone_id' => 1345,
                'country_id' => 90,
                'name' => 'Koundara',
                'code' => 'KDA',
                'status' => 1,
            ),
            322 => 
            array (
                'zone_id' => 1346,
                'country_id' => 90,
                'name' => 'Kouroussa',
                'code' => 'KRA',
                'status' => 1,
            ),
            323 => 
            array (
                'zone_id' => 1347,
                'country_id' => 90,
                'name' => 'Labe',
                'code' => 'LAB',
                'status' => 1,
            ),
            324 => 
            array (
                'zone_id' => 1348,
                'country_id' => 90,
                'name' => 'Lelouma',
                'code' => 'LLM',
                'status' => 1,
            ),
            325 => 
            array (
                'zone_id' => 1349,
                'country_id' => 90,
                'name' => 'Lola',
                'code' => 'LOL',
                'status' => 1,
            ),
            326 => 
            array (
                'zone_id' => 1350,
                'country_id' => 90,
                'name' => 'Macenta',
                'code' => 'MCT',
                'status' => 1,
            ),
            327 => 
            array (
                'zone_id' => 1351,
                'country_id' => 90,
                'name' => 'Mali',
                'code' => 'MAL',
                'status' => 1,
            ),
            328 => 
            array (
                'zone_id' => 1352,
                'country_id' => 90,
                'name' => 'Mamou',
                'code' => 'MAM',
                'status' => 1,
            ),
            329 => 
            array (
                'zone_id' => 1353,
                'country_id' => 90,
                'name' => 'Mandiana',
                'code' => 'MAN',
                'status' => 1,
            ),
            330 => 
            array (
                'zone_id' => 1354,
                'country_id' => 90,
                'name' => 'Nzerekore',
                'code' => 'NZR',
                'status' => 1,
            ),
            331 => 
            array (
                'zone_id' => 1355,
                'country_id' => 90,
                'name' => 'Pita',
                'code' => 'PIT',
                'status' => 1,
            ),
            332 => 
            array (
                'zone_id' => 1356,
                'country_id' => 90,
                'name' => 'Siguiri',
                'code' => 'SIG',
                'status' => 1,
            ),
            333 => 
            array (
                'zone_id' => 1357,
                'country_id' => 90,
                'name' => 'Telimele',
                'code' => 'TLM',
                'status' => 1,
            ),
            334 => 
            array (
                'zone_id' => 1358,
                'country_id' => 90,
                'name' => 'Tougue',
                'code' => 'TOG',
                'status' => 1,
            ),
            335 => 
            array (
                'zone_id' => 1359,
                'country_id' => 90,
                'name' => 'Yomou',
                'code' => 'YOM',
                'status' => 1,
            ),
            336 => 
            array (
                'zone_id' => 1360,
                'country_id' => 91,
                'name' => 'Bafata Region',
                'code' => 'BF',
                'status' => 1,
            ),
            337 => 
            array (
                'zone_id' => 1361,
                'country_id' => 91,
                'name' => 'Biombo Region',
                'code' => 'BB',
                'status' => 1,
            ),
            338 => 
            array (
                'zone_id' => 1362,
                'country_id' => 91,
                'name' => 'Bissau Region',
                'code' => 'BS',
                'status' => 1,
            ),
            339 => 
            array (
                'zone_id' => 1363,
                'country_id' => 91,
                'name' => 'Bolama Region',
                'code' => 'BL',
                'status' => 1,
            ),
            340 => 
            array (
                'zone_id' => 1364,
                'country_id' => 91,
                'name' => 'Cacheu Region',
                'code' => 'CA',
                'status' => 1,
            ),
            341 => 
            array (
                'zone_id' => 1365,
                'country_id' => 91,
                'name' => 'Gabu Region',
                'code' => 'GA',
                'status' => 1,
            ),
            342 => 
            array (
                'zone_id' => 1366,
                'country_id' => 91,
                'name' => 'Oio Region',
                'code' => 'OI',
                'status' => 1,
            ),
            343 => 
            array (
                'zone_id' => 1367,
                'country_id' => 91,
                'name' => 'Quinara Region',
                'code' => 'QU',
                'status' => 1,
            ),
            344 => 
            array (
                'zone_id' => 1368,
                'country_id' => 91,
                'name' => 'Tombali Region',
                'code' => 'TO',
                'status' => 1,
            ),
            345 => 
            array (
                'zone_id' => 1369,
                'country_id' => 92,
                'name' => 'Barima-Waini',
                'code' => 'BW',
                'status' => 1,
            ),
            346 => 
            array (
                'zone_id' => 1370,
                'country_id' => 92,
                'name' => 'Cuyuni-Mazaruni',
                'code' => 'CM',
                'status' => 1,
            ),
            347 => 
            array (
                'zone_id' => 1371,
                'country_id' => 92,
                'name' => 'Demerara-Mahaica',
                'code' => 'DM',
                'status' => 1,
            ),
            348 => 
            array (
                'zone_id' => 1372,
                'country_id' => 92,
                'name' => 'East Berbice-Corentyne',
                'code' => 'EC',
                'status' => 1,
            ),
            349 => 
            array (
                'zone_id' => 1373,
                'country_id' => 92,
                'name' => 'Essequibo Islands-West Demerara',
                'code' => 'EW',
                'status' => 1,
            ),
            350 => 
            array (
                'zone_id' => 1374,
                'country_id' => 92,
                'name' => 'Mahaica-Berbice',
                'code' => 'MB',
                'status' => 1,
            ),
            351 => 
            array (
                'zone_id' => 1375,
                'country_id' => 92,
                'name' => 'Pomeroon-Supenaam',
                'code' => 'PM',
                'status' => 1,
            ),
            352 => 
            array (
                'zone_id' => 1376,
                'country_id' => 92,
                'name' => 'Potaro-Siparuni',
                'code' => 'PI',
                'status' => 1,
            ),
            353 => 
            array (
                'zone_id' => 1377,
                'country_id' => 92,
                'name' => 'Upper Demerara-Berbice',
                'code' => 'UD',
                'status' => 1,
            ),
            354 => 
            array (
                'zone_id' => 1378,
                'country_id' => 92,
                'name' => 'Upper Takutu-Upper Essequibo',
                'code' => 'UT',
                'status' => 1,
            ),
            355 => 
            array (
                'zone_id' => 1379,
                'country_id' => 93,
                'name' => 'Artibonite',
                'code' => 'AR',
                'status' => 1,
            ),
            356 => 
            array (
                'zone_id' => 1380,
                'country_id' => 93,
                'name' => 'Centre',
                'code' => 'CE',
                'status' => 1,
            ),
            357 => 
            array (
                'zone_id' => 1381,
                'country_id' => 93,
                'name' => 'Grand\'Anse',
                'code' => 'GA',
                'status' => 1,
            ),
            358 => 
            array (
                'zone_id' => 1382,
                'country_id' => 93,
                'name' => 'Nord',
                'code' => 'ND',
                'status' => 1,
            ),
            359 => 
            array (
                'zone_id' => 1383,
                'country_id' => 93,
                'name' => 'Nord-Est',
                'code' => 'NE',
                'status' => 1,
            ),
            360 => 
            array (
                'zone_id' => 1384,
                'country_id' => 93,
                'name' => 'Nord-Ouest',
                'code' => 'NO',
                'status' => 1,
            ),
            361 => 
            array (
                'zone_id' => 1385,
                'country_id' => 93,
                'name' => 'Ouest',
                'code' => 'OU',
                'status' => 1,
            ),
            362 => 
            array (
                'zone_id' => 1386,
                'country_id' => 93,
                'name' => 'Sud',
                'code' => 'SD',
                'status' => 1,
            ),
            363 => 
            array (
                'zone_id' => 1387,
                'country_id' => 93,
                'name' => 'Sud-Est',
                'code' => 'SE',
                'status' => 1,
            ),
            364 => 
            array (
                'zone_id' => 1388,
                'country_id' => 94,
                'name' => 'Flat Island',
                'code' => 'F',
                'status' => 1,
            ),
            365 => 
            array (
                'zone_id' => 1389,
                'country_id' => 94,
                'name' => 'McDonald Island',
                'code' => 'M',
                'status' => 1,
            ),
            366 => 
            array (
                'zone_id' => 1390,
                'country_id' => 94,
                'name' => 'Shag Island',
                'code' => 'S',
                'status' => 1,
            ),
            367 => 
            array (
                'zone_id' => 1391,
                'country_id' => 94,
                'name' => 'Heard Island',
                'code' => 'H',
                'status' => 1,
            ),
            368 => 
            array (
                'zone_id' => 1392,
                'country_id' => 95,
                'name' => 'Atlantida',
                'code' => 'AT',
                'status' => 1,
            ),
            369 => 
            array (
                'zone_id' => 1393,
                'country_id' => 95,
                'name' => 'Choluteca',
                'code' => 'CH',
                'status' => 1,
            ),
            370 => 
            array (
                'zone_id' => 1394,
                'country_id' => 95,
                'name' => 'Colon',
                'code' => 'CL',
                'status' => 1,
            ),
            371 => 
            array (
                'zone_id' => 1395,
                'country_id' => 95,
                'name' => 'Comayagua',
                'code' => 'CM',
                'status' => 1,
            ),
            372 => 
            array (
                'zone_id' => 1396,
                'country_id' => 95,
                'name' => 'Copan',
                'code' => 'CP',
                'status' => 1,
            ),
            373 => 
            array (
                'zone_id' => 1397,
                'country_id' => 95,
                'name' => 'Cortes',
                'code' => 'CR',
                'status' => 1,
            ),
            374 => 
            array (
                'zone_id' => 1398,
                'country_id' => 95,
                'name' => 'El Paraiso',
                'code' => 'PA',
                'status' => 1,
            ),
            375 => 
            array (
                'zone_id' => 1399,
                'country_id' => 95,
                'name' => 'Francisco Morazan',
                'code' => 'FM',
                'status' => 1,
            ),
            376 => 
            array (
                'zone_id' => 1400,
                'country_id' => 95,
                'name' => 'Gracias a Dios',
                'code' => 'GD',
                'status' => 1,
            ),
            377 => 
            array (
                'zone_id' => 1401,
                'country_id' => 95,
                'name' => 'Intibuca',
                'code' => 'IN',
                'status' => 1,
            ),
            378 => 
            array (
                'zone_id' => 1402,
                'country_id' => 95,
            'name' => 'Islas de la Bahia (Bay Islands)',
                'code' => 'IB',
                'status' => 1,
            ),
            379 => 
            array (
                'zone_id' => 1403,
                'country_id' => 95,
                'name' => 'La Paz',
                'code' => 'PZ',
                'status' => 1,
            ),
            380 => 
            array (
                'zone_id' => 1404,
                'country_id' => 95,
                'name' => 'Lempira',
                'code' => 'LE',
                'status' => 1,
            ),
            381 => 
            array (
                'zone_id' => 1405,
                'country_id' => 95,
                'name' => 'Ocotepeque',
                'code' => 'OC',
                'status' => 1,
            ),
            382 => 
            array (
                'zone_id' => 1406,
                'country_id' => 95,
                'name' => 'Olancho',
                'code' => 'OL',
                'status' => 1,
            ),
            383 => 
            array (
                'zone_id' => 1407,
                'country_id' => 95,
                'name' => 'Santa Barbara',
                'code' => 'SB',
                'status' => 1,
            ),
            384 => 
            array (
                'zone_id' => 1408,
                'country_id' => 95,
                'name' => 'Valle',
                'code' => 'VA',
                'status' => 1,
            ),
            385 => 
            array (
                'zone_id' => 1409,
                'country_id' => 95,
                'name' => 'Yoro',
                'code' => 'YO',
                'status' => 1,
            ),
            386 => 
            array (
                'zone_id' => 1410,
                'country_id' => 96,
                'name' => 'Central and Western Hong Kong Island',
                'code' => 'HCW',
                'status' => 1,
            ),
            387 => 
            array (
                'zone_id' => 1411,
                'country_id' => 96,
                'name' => 'Eastern Hong Kong Island',
                'code' => 'HEA',
                'status' => 1,
            ),
            388 => 
            array (
                'zone_id' => 1412,
                'country_id' => 96,
                'name' => 'Southern Hong Kong Island',
                'code' => 'HSO',
                'status' => 1,
            ),
            389 => 
            array (
                'zone_id' => 1413,
                'country_id' => 96,
                'name' => 'Wan Chai Hong Kong Island',
                'code' => 'HWC',
                'status' => 1,
            ),
            390 => 
            array (
                'zone_id' => 1414,
                'country_id' => 96,
                'name' => 'Kowloon City Kowloon',
                'code' => 'KKC',
                'status' => 1,
            ),
            391 => 
            array (
                'zone_id' => 1415,
                'country_id' => 96,
                'name' => 'Kwun Tong Kowloon',
                'code' => 'KKT',
                'status' => 1,
            ),
            392 => 
            array (
                'zone_id' => 1416,
                'country_id' => 96,
                'name' => 'Sham Shui Po Kowloon',
                'code' => 'KSS',
                'status' => 1,
            ),
            393 => 
            array (
                'zone_id' => 1417,
                'country_id' => 96,
                'name' => 'Wong Tai Sin Kowloon',
                'code' => 'KWT',
                'status' => 1,
            ),
            394 => 
            array (
                'zone_id' => 1418,
                'country_id' => 96,
                'name' => 'Yau Tsim Mong Kowloon',
                'code' => 'KYT',
                'status' => 1,
            ),
            395 => 
            array (
                'zone_id' => 1419,
                'country_id' => 96,
                'name' => 'Islands New Territories',
                'code' => 'NIS',
                'status' => 1,
            ),
            396 => 
            array (
                'zone_id' => 1420,
                'country_id' => 96,
                'name' => 'Kwai Tsing New Territories',
                'code' => 'NKT',
                'status' => 1,
            ),
            397 => 
            array (
                'zone_id' => 1421,
                'country_id' => 96,
                'name' => 'North New Territories',
                'code' => 'NNO',
                'status' => 1,
            ),
            398 => 
            array (
                'zone_id' => 1422,
                'country_id' => 96,
                'name' => 'Sai Kung New Territories',
                'code' => 'NSK',
                'status' => 1,
            ),
            399 => 
            array (
                'zone_id' => 1423,
                'country_id' => 96,
                'name' => 'Sha Tin New Territories',
                'code' => 'NST',
                'status' => 1,
            ),
            400 => 
            array (
                'zone_id' => 1424,
                'country_id' => 96,
                'name' => 'Tai Po New Territories',
                'code' => 'NTP',
                'status' => 1,
            ),
            401 => 
            array (
                'zone_id' => 1425,
                'country_id' => 96,
                'name' => 'Tsuen Wan New Territories',
                'code' => 'NTW',
                'status' => 1,
            ),
            402 => 
            array (
                'zone_id' => 1426,
                'country_id' => 96,
                'name' => 'Tuen Mun New Territories',
                'code' => 'NTM',
                'status' => 1,
            ),
            403 => 
            array (
                'zone_id' => 1427,
                'country_id' => 96,
                'name' => 'Yuen Long New Territories',
                'code' => 'NYL',
                'status' => 1,
            ),
            404 => 
            array (
                'zone_id' => 1467,
                'country_id' => 98,
                'name' => 'Austurland',
                'code' => 'AL',
                'status' => 1,
            ),
            405 => 
            array (
                'zone_id' => 1468,
                'country_id' => 98,
                'name' => 'Hofuoborgarsvaeoi',
                'code' => 'HF',
                'status' => 1,
            ),
            406 => 
            array (
                'zone_id' => 1469,
                'country_id' => 98,
                'name' => 'Norourland eystra',
                'code' => 'NE',
                'status' => 1,
            ),
            407 => 
            array (
                'zone_id' => 1470,
                'country_id' => 98,
                'name' => 'Norourland vestra',
                'code' => 'NV',
                'status' => 1,
            ),
            408 => 
            array (
                'zone_id' => 1471,
                'country_id' => 98,
                'name' => 'Suourland',
                'code' => 'SL',
                'status' => 1,
            ),
            409 => 
            array (
                'zone_id' => 1472,
                'country_id' => 98,
                'name' => 'Suournes',
                'code' => 'SN',
                'status' => 1,
            ),
            410 => 
            array (
                'zone_id' => 1473,
                'country_id' => 98,
                'name' => 'Vestfiroir',
                'code' => 'VF',
                'status' => 1,
            ),
            411 => 
            array (
                'zone_id' => 1474,
                'country_id' => 98,
                'name' => 'Vesturland',
                'code' => 'VL',
                'status' => 1,
            ),
            412 => 
            array (
                'zone_id' => 1475,
                'country_id' => 99,
                'name' => 'Andaman and Nicobar Islands',
                'code' => 'AN',
                'status' => 1,
            ),
            413 => 
            array (
                'zone_id' => 1476,
                'country_id' => 99,
                'name' => 'Andhra Pradesh',
                'code' => 'AP',
                'status' => 1,
            ),
            414 => 
            array (
                'zone_id' => 1477,
                'country_id' => 99,
                'name' => 'Arunachal Pradesh',
                'code' => 'AR',
                'status' => 1,
            ),
            415 => 
            array (
                'zone_id' => 1478,
                'country_id' => 99,
                'name' => 'Assam',
                'code' => 'AS',
                'status' => 1,
            ),
            416 => 
            array (
                'zone_id' => 1479,
                'country_id' => 99,
                'name' => 'Bihar',
                'code' => 'BI',
                'status' => 1,
            ),
            417 => 
            array (
                'zone_id' => 1480,
                'country_id' => 99,
                'name' => 'Chandigarh',
                'code' => 'CH',
                'status' => 1,
            ),
            418 => 
            array (
                'zone_id' => 1481,
                'country_id' => 99,
                'name' => 'Dadra and Nagar Haveli',
                'code' => 'DA',
                'status' => 1,
            ),
            419 => 
            array (
                'zone_id' => 1482,
                'country_id' => 99,
                'name' => 'Daman and Diu',
                'code' => 'DM',
                'status' => 1,
            ),
            420 => 
            array (
                'zone_id' => 1483,
                'country_id' => 99,
                'name' => 'Delhi',
                'code' => 'DE',
                'status' => 1,
            ),
            421 => 
            array (
                'zone_id' => 1484,
                'country_id' => 99,
                'name' => 'Goa',
                'code' => 'GO',
                'status' => 1,
            ),
            422 => 
            array (
                'zone_id' => 1485,
                'country_id' => 99,
                'name' => 'Gujarat',
                'code' => 'GU',
                'status' => 1,
            ),
            423 => 
            array (
                'zone_id' => 1486,
                'country_id' => 99,
                'name' => 'Haryana',
                'code' => 'HA',
                'status' => 1,
            ),
            424 => 
            array (
                'zone_id' => 1487,
                'country_id' => 99,
                'name' => 'Himachal Pradesh',
                'code' => 'HP',
                'status' => 1,
            ),
            425 => 
            array (
                'zone_id' => 1488,
                'country_id' => 99,
                'name' => 'Jammu and Kashmir',
                'code' => 'JA',
                'status' => 1,
            ),
            426 => 
            array (
                'zone_id' => 1489,
                'country_id' => 99,
                'name' => 'Karnataka',
                'code' => 'KA',
                'status' => 1,
            ),
            427 => 
            array (
                'zone_id' => 1490,
                'country_id' => 99,
                'name' => 'Kerala',
                'code' => 'KE',
                'status' => 1,
            ),
            428 => 
            array (
                'zone_id' => 1491,
                'country_id' => 99,
                'name' => 'Lakshadweep Islands',
                'code' => 'LI',
                'status' => 1,
            ),
            429 => 
            array (
                'zone_id' => 1492,
                'country_id' => 99,
                'name' => 'Madhya Pradesh',
                'code' => 'MP',
                'status' => 1,
            ),
            430 => 
            array (
                'zone_id' => 1493,
                'country_id' => 99,
                'name' => 'Maharashtra',
                'code' => 'MA',
                'status' => 1,
            ),
            431 => 
            array (
                'zone_id' => 1494,
                'country_id' => 99,
                'name' => 'Manipur',
                'code' => 'MN',
                'status' => 1,
            ),
            432 => 
            array (
                'zone_id' => 1495,
                'country_id' => 99,
                'name' => 'Meghalaya',
                'code' => 'ME',
                'status' => 1,
            ),
            433 => 
            array (
                'zone_id' => 1496,
                'country_id' => 99,
                'name' => 'Mizoram',
                'code' => 'MI',
                'status' => 1,
            ),
            434 => 
            array (
                'zone_id' => 1497,
                'country_id' => 99,
                'name' => 'Nagaland',
                'code' => 'NA',
                'status' => 1,
            ),
            435 => 
            array (
                'zone_id' => 1498,
                'country_id' => 99,
                'name' => 'Orissa',
                'code' => 'OR',
                'status' => 1,
            ),
            436 => 
            array (
                'zone_id' => 1499,
                'country_id' => 99,
                'name' => 'Pondicherry',
                'code' => 'PO',
                'status' => 1,
            ),
            437 => 
            array (
                'zone_id' => 1500,
                'country_id' => 99,
                'name' => 'Punjab',
                'code' => 'PU',
                'status' => 1,
            ),
            438 => 
            array (
                'zone_id' => 1501,
                'country_id' => 99,
                'name' => 'Rajasthan',
                'code' => 'RA',
                'status' => 1,
            ),
            439 => 
            array (
                'zone_id' => 1502,
                'country_id' => 99,
                'name' => 'Sikkim',
                'code' => 'SI',
                'status' => 1,
            ),
            440 => 
            array (
                'zone_id' => 1503,
                'country_id' => 99,
                'name' => 'Tamil Nadu',
                'code' => 'TN',
                'status' => 1,
            ),
            441 => 
            array (
                'zone_id' => 1504,
                'country_id' => 99,
                'name' => 'Tripura',
                'code' => 'TR',
                'status' => 1,
            ),
            442 => 
            array (
                'zone_id' => 1505,
                'country_id' => 99,
                'name' => 'Uttar Pradesh',
                'code' => 'UP',
                'status' => 1,
            ),
            443 => 
            array (
                'zone_id' => 1506,
                'country_id' => 99,
                'name' => 'West Bengal',
                'code' => 'WB',
                'status' => 1,
            ),
            444 => 
            array (
                'zone_id' => 1507,
                'country_id' => 100,
                'name' => 'Aceh',
                'code' => 'AC',
                'status' => 1,
            ),
            445 => 
            array (
                'zone_id' => 1508,
                'country_id' => 100,
                'name' => 'Bali',
                'code' => 'BA',
                'status' => 1,
            ),
            446 => 
            array (
                'zone_id' => 1509,
                'country_id' => 100,
                'name' => 'Banten',
                'code' => 'BT',
                'status' => 1,
            ),
            447 => 
            array (
                'zone_id' => 1510,
                'country_id' => 100,
                'name' => 'Bengkulu',
                'code' => 'BE',
                'status' => 1,
            ),
            448 => 
            array (
                'zone_id' => 1511,
                'country_id' => 100,
                'name' => 'BoDeTaBek',
                'code' => 'BD',
                'status' => 1,
            ),
            449 => 
            array (
                'zone_id' => 1512,
                'country_id' => 100,
                'name' => 'Gorontalo',
                'code' => 'GO',
                'status' => 1,
            ),
            450 => 
            array (
                'zone_id' => 1513,
                'country_id' => 100,
                'name' => 'Jakarta Raya',
                'code' => 'JK',
                'status' => 1,
            ),
            451 => 
            array (
                'zone_id' => 1514,
                'country_id' => 100,
                'name' => 'Jambi',
                'code' => 'JA',
                'status' => 1,
            ),
            452 => 
            array (
                'zone_id' => 1515,
                'country_id' => 100,
                'name' => 'Jawa Barat',
                'code' => 'JB',
                'status' => 1,
            ),
            453 => 
            array (
                'zone_id' => 1516,
                'country_id' => 100,
                'name' => 'Jawa Tengah',
                'code' => 'JT',
                'status' => 1,
            ),
            454 => 
            array (
                'zone_id' => 1517,
                'country_id' => 100,
                'name' => 'Jawa Timur',
                'code' => 'JI',
                'status' => 1,
            ),
            455 => 
            array (
                'zone_id' => 1518,
                'country_id' => 100,
                'name' => 'Kalimantan Barat',
                'code' => 'KB',
                'status' => 1,
            ),
            456 => 
            array (
                'zone_id' => 1519,
                'country_id' => 100,
                'name' => 'Kalimantan Selatan',
                'code' => 'KS',
                'status' => 1,
            ),
            457 => 
            array (
                'zone_id' => 1520,
                'country_id' => 100,
                'name' => 'Kalimantan Tengah',
                'code' => 'KT',
                'status' => 1,
            ),
            458 => 
            array (
                'zone_id' => 1521,
                'country_id' => 100,
                'name' => 'Kalimantan Timur',
                'code' => 'KI',
                'status' => 1,
            ),
            459 => 
            array (
                'zone_id' => 1522,
                'country_id' => 100,
                'name' => 'Kepulauan Bangka Belitung',
                'code' => 'BB',
                'status' => 1,
            ),
            460 => 
            array (
                'zone_id' => 1523,
                'country_id' => 100,
                'name' => 'Lampung',
                'code' => 'LA',
                'status' => 1,
            ),
            461 => 
            array (
                'zone_id' => 1524,
                'country_id' => 100,
                'name' => 'Maluku',
                'code' => 'MA',
                'status' => 1,
            ),
            462 => 
            array (
                'zone_id' => 1525,
                'country_id' => 100,
                'name' => 'Maluku Utara',
                'code' => 'MU',
                'status' => 1,
            ),
            463 => 
            array (
                'zone_id' => 1526,
                'country_id' => 100,
                'name' => 'Nusa Tenggara Barat',
                'code' => 'NB',
                'status' => 1,
            ),
            464 => 
            array (
                'zone_id' => 1527,
                'country_id' => 100,
                'name' => 'Nusa Tenggara Timur',
                'code' => 'NT',
                'status' => 1,
            ),
            465 => 
            array (
                'zone_id' => 1528,
                'country_id' => 100,
                'name' => 'Papua',
                'code' => 'PA',
                'status' => 1,
            ),
            466 => 
            array (
                'zone_id' => 1529,
                'country_id' => 100,
                'name' => 'Riau',
                'code' => 'RI',
                'status' => 1,
            ),
            467 => 
            array (
                'zone_id' => 1530,
                'country_id' => 100,
                'name' => 'Sulawesi Selatan',
                'code' => 'SN',
                'status' => 1,
            ),
            468 => 
            array (
                'zone_id' => 1531,
                'country_id' => 100,
                'name' => 'Sulawesi Tengah',
                'code' => 'ST',
                'status' => 1,
            ),
            469 => 
            array (
                'zone_id' => 1532,
                'country_id' => 100,
                'name' => 'Sulawesi Tenggara',
                'code' => 'SG',
                'status' => 1,
            ),
            470 => 
            array (
                'zone_id' => 1533,
                'country_id' => 100,
                'name' => 'Sulawesi Utara',
                'code' => 'SA',
                'status' => 1,
            ),
            471 => 
            array (
                'zone_id' => 1534,
                'country_id' => 100,
                'name' => 'Sumatera Barat',
                'code' => 'SB',
                'status' => 1,
            ),
            472 => 
            array (
                'zone_id' => 1535,
                'country_id' => 100,
                'name' => 'Sumatera Selatan',
                'code' => 'SS',
                'status' => 1,
            ),
            473 => 
            array (
                'zone_id' => 1536,
                'country_id' => 100,
                'name' => 'Sumatera Utara',
                'code' => 'SU',
                'status' => 1,
            ),
            474 => 
            array (
                'zone_id' => 1537,
                'country_id' => 100,
                'name' => 'Yogyakarta',
                'code' => 'YO',
                'status' => 1,
            ),
            475 => 
            array (
                'zone_id' => 1538,
                'country_id' => 101,
                'name' => 'Tehran',
                'code' => 'TEH',
                'status' => 1,
            ),
            476 => 
            array (
                'zone_id' => 1539,
                'country_id' => 101,
                'name' => 'Qom',
                'code' => 'QOM',
                'status' => 1,
            ),
            477 => 
            array (
                'zone_id' => 1540,
                'country_id' => 101,
                'name' => 'Markazi',
                'code' => 'MKZ',
                'status' => 1,
            ),
            478 => 
            array (
                'zone_id' => 1541,
                'country_id' => 101,
                'name' => 'Qazvin',
                'code' => 'QAZ',
                'status' => 1,
            ),
            479 => 
            array (
                'zone_id' => 1542,
                'country_id' => 101,
                'name' => 'Gilan',
                'code' => 'GIL',
                'status' => 1,
            ),
            480 => 
            array (
                'zone_id' => 1543,
                'country_id' => 101,
                'name' => 'Ardabil',
                'code' => 'ARD',
                'status' => 1,
            ),
            481 => 
            array (
                'zone_id' => 1544,
                'country_id' => 101,
                'name' => 'Zanjan',
                'code' => 'ZAN',
                'status' => 1,
            ),
            482 => 
            array (
                'zone_id' => 1545,
                'country_id' => 101,
                'name' => 'East Azarbaijan',
                'code' => 'EAZ',
                'status' => 1,
            ),
            483 => 
            array (
                'zone_id' => 1546,
                'country_id' => 101,
                'name' => 'West Azarbaijan',
                'code' => 'WEZ',
                'status' => 1,
            ),
            484 => 
            array (
                'zone_id' => 1547,
                'country_id' => 101,
                'name' => 'Kurdistan',
                'code' => 'KRD',
                'status' => 1,
            ),
            485 => 
            array (
                'zone_id' => 1548,
                'country_id' => 101,
                'name' => 'Hamadan',
                'code' => 'HMD',
                'status' => 1,
            ),
            486 => 
            array (
                'zone_id' => 1549,
                'country_id' => 101,
                'name' => 'Kermanshah',
                'code' => 'KRM',
                'status' => 1,
            ),
            487 => 
            array (
                'zone_id' => 1550,
                'country_id' => 101,
                'name' => 'Ilam',
                'code' => 'ILM',
                'status' => 1,
            ),
            488 => 
            array (
                'zone_id' => 1551,
                'country_id' => 101,
                'name' => 'Lorestan',
                'code' => 'LRS',
                'status' => 1,
            ),
            489 => 
            array (
                'zone_id' => 1552,
                'country_id' => 101,
                'name' => 'Khuzestan',
                'code' => 'KZT',
                'status' => 1,
            ),
            490 => 
            array (
                'zone_id' => 1553,
                'country_id' => 101,
                'name' => 'Chahar Mahaal and Bakhtiari',
                'code' => 'CMB',
                'status' => 1,
            ),
            491 => 
            array (
                'zone_id' => 1554,
                'country_id' => 101,
                'name' => 'Kohkiluyeh and Buyer Ahmad',
                'code' => 'KBA',
                'status' => 1,
            ),
            492 => 
            array (
                'zone_id' => 1555,
                'country_id' => 101,
                'name' => 'Bushehr',
                'code' => 'BSH',
                'status' => 1,
            ),
            493 => 
            array (
                'zone_id' => 1556,
                'country_id' => 101,
                'name' => 'Fars',
                'code' => 'FAR',
                'status' => 1,
            ),
            494 => 
            array (
                'zone_id' => 1557,
                'country_id' => 101,
                'name' => 'Hormozgan',
                'code' => 'HRM',
                'status' => 1,
            ),
            495 => 
            array (
                'zone_id' => 1558,
                'country_id' => 101,
                'name' => 'Sistan and Baluchistan',
                'code' => 'SBL',
                'status' => 1,
            ),
            496 => 
            array (
                'zone_id' => 1559,
                'country_id' => 101,
                'name' => 'Kerman',
                'code' => 'KRB',
                'status' => 1,
            ),
            497 => 
            array (
                'zone_id' => 1560,
                'country_id' => 101,
                'name' => 'Yazd',
                'code' => 'YZD',
                'status' => 1,
            ),
            498 => 
            array (
                'zone_id' => 1561,
                'country_id' => 101,
                'name' => 'Esfahan',
                'code' => 'EFH',
                'status' => 1,
            ),
            499 => 
            array (
                'zone_id' => 1562,
                'country_id' => 101,
                'name' => 'Semnan',
                'code' => 'SMN',
                'status' => 1,
            ),
        ));
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 1563,
                'country_id' => 101,
                'name' => 'Mazandaran',
                'code' => 'MZD',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 1564,
                'country_id' => 101,
                'name' => 'Golestan',
                'code' => 'GLS',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 1565,
                'country_id' => 101,
                'name' => 'North Khorasan',
                'code' => 'NKH',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 1566,
                'country_id' => 101,
                'name' => 'Razavi Khorasan',
                'code' => 'RKH',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 1567,
                'country_id' => 101,
                'name' => 'South Khorasan',
                'code' => 'SKH',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 1568,
                'country_id' => 102,
                'name' => 'Baghdad',
                'code' => 'BD',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 1569,
                'country_id' => 102,
                'name' => 'Salah ad Din',
                'code' => 'SD',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 1570,
                'country_id' => 102,
                'name' => 'Diyala',
                'code' => 'DY',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 1571,
                'country_id' => 102,
                'name' => 'Wasit',
                'code' => 'WS',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 1572,
                'country_id' => 102,
                'name' => 'Maysan',
                'code' => 'MY',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 1573,
                'country_id' => 102,
                'name' => 'Al Basrah',
                'code' => 'BA',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 1574,
                'country_id' => 102,
                'name' => 'Dhi Qar',
                'code' => 'DQ',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 1575,
                'country_id' => 102,
                'name' => 'Al Muthanna',
                'code' => 'MU',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 1576,
                'country_id' => 102,
                'name' => 'Al Qadisyah',
                'code' => 'QA',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 1577,
                'country_id' => 102,
                'name' => 'Babil',
                'code' => 'BB',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 1578,
                'country_id' => 102,
                'name' => 'Al Karbala',
                'code' => 'KB',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 1579,
                'country_id' => 102,
                'name' => 'An Najaf',
                'code' => 'NJ',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 1580,
                'country_id' => 102,
                'name' => 'Al Anbar',
                'code' => 'AB',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 1581,
                'country_id' => 102,
                'name' => 'Ninawa',
                'code' => 'NN',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 1582,
                'country_id' => 102,
                'name' => 'Dahuk',
                'code' => 'DH',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 1583,
                'country_id' => 102,
                'name' => 'Arbil',
                'code' => 'AL',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 1584,
                'country_id' => 102,
                'name' => 'At Ta\'mim',
                'code' => 'TM',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 1585,
                'country_id' => 102,
                'name' => 'As Sulaymaniyah',
                'code' => 'SL',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 1586,
                'country_id' => 103,
                'name' => 'Carlow',
                'code' => 'CA',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 1587,
                'country_id' => 103,
                'name' => 'Cavan',
                'code' => 'CV',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 1588,
                'country_id' => 103,
                'name' => 'Clare',
                'code' => 'CL',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 1589,
                'country_id' => 103,
                'name' => 'Cork',
                'code' => 'CO',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 1590,
                'country_id' => 103,
                'name' => 'Donegal',
                'code' => 'DO',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 1591,
                'country_id' => 103,
                'name' => 'Dublin',
                'code' => 'DU',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 1592,
                'country_id' => 103,
                'name' => 'Galway',
                'code' => 'GA',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 1593,
                'country_id' => 103,
                'name' => 'Kerry',
                'code' => 'KE',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 1594,
                'country_id' => 103,
                'name' => 'Kildare',
                'code' => 'KI',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 1595,
                'country_id' => 103,
                'name' => 'Kilkenny',
                'code' => 'KL',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 1596,
                'country_id' => 103,
                'name' => 'Laois',
                'code' => 'LA',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 1597,
                'country_id' => 103,
                'name' => 'Leitrim',
                'code' => 'LE',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 1598,
                'country_id' => 103,
                'name' => 'Limerick',
                'code' => 'LI',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 1599,
                'country_id' => 103,
                'name' => 'Longford',
                'code' => 'LO',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 1600,
                'country_id' => 103,
                'name' => 'Louth',
                'code' => 'LU',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 1601,
                'country_id' => 103,
                'name' => 'Mayo',
                'code' => 'MA',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 1602,
                'country_id' => 103,
                'name' => 'Meath',
                'code' => 'ME',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 1603,
                'country_id' => 103,
                'name' => 'Monaghan',
                'code' => 'MO',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 1604,
                'country_id' => 103,
                'name' => 'Offaly',
                'code' => 'OF',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 1605,
                'country_id' => 103,
                'name' => 'Roscommon',
                'code' => 'RO',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 1606,
                'country_id' => 103,
                'name' => 'Sligo',
                'code' => 'SL',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 1607,
                'country_id' => 103,
                'name' => 'Tipperary',
                'code' => 'TI',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 1608,
                'country_id' => 103,
                'name' => 'Waterford',
                'code' => 'WA',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 1609,
                'country_id' => 103,
                'name' => 'Westmeath',
                'code' => 'WE',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 1610,
                'country_id' => 103,
                'name' => 'Wexford',
                'code' => 'WX',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 1611,
                'country_id' => 103,
                'name' => 'Wicklow',
                'code' => 'WI',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 1612,
                'country_id' => 104,
                'name' => 'Be\'er Sheva',
                'code' => 'BS',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 1613,
                'country_id' => 104,
                'name' => 'Bika\'at Hayarden',
                'code' => 'BH',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 1614,
                'country_id' => 104,
                'name' => 'Eilat and Arava',
                'code' => 'EA',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 1615,
                'country_id' => 104,
                'name' => 'Galil',
                'code' => 'GA',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 1616,
                'country_id' => 104,
                'name' => 'Haifa',
                'code' => 'HA',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 1617,
                'country_id' => 104,
                'name' => 'Jehuda Mountains',
                'code' => 'JM',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 1618,
                'country_id' => 104,
                'name' => 'Jerusalem',
                'code' => 'JE',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 1619,
                'country_id' => 104,
                'name' => 'Negev',
                'code' => 'NE',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 1620,
                'country_id' => 104,
                'name' => 'Semaria',
                'code' => 'SE',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 1621,
                'country_id' => 104,
                'name' => 'Sharon',
                'code' => 'SH',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 1622,
                'country_id' => 104,
            'name' => 'Tel Aviv (Gosh Dan)',
                'code' => 'TA',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 1643,
                'country_id' => 106,
                'name' => 'Clarendon Parish',
                'code' => 'CLA',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 1644,
                'country_id' => 106,
                'name' => 'Hanover Parish',
                'code' => 'HAN',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 1645,
                'country_id' => 106,
                'name' => 'Kingston Parish',
                'code' => 'KIN',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 1646,
                'country_id' => 106,
                'name' => 'Manchester Parish',
                'code' => 'MAN',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 1647,
                'country_id' => 106,
                'name' => 'Portland Parish',
                'code' => 'POR',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 1648,
                'country_id' => 106,
                'name' => 'Saint Andrew Parish',
                'code' => 'AND',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 1649,
                'country_id' => 106,
                'name' => 'Saint Ann Parish',
                'code' => 'ANN',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 1650,
                'country_id' => 106,
                'name' => 'Saint Catherine Parish',
                'code' => 'CAT',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 1651,
                'country_id' => 106,
                'name' => 'Saint Elizabeth Parish',
                'code' => 'ELI',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 1652,
                'country_id' => 106,
                'name' => 'Saint James Parish',
                'code' => 'JAM',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 1653,
                'country_id' => 106,
                'name' => 'Saint Mary Parish',
                'code' => 'MAR',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 1654,
                'country_id' => 106,
                'name' => 'Saint Thomas Parish',
                'code' => 'THO',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 1655,
                'country_id' => 106,
                'name' => 'Trelawny Parish',
                'code' => 'TRL',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 1656,
                'country_id' => 106,
                'name' => 'Westmoreland Parish',
                'code' => 'WML',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 1657,
                'country_id' => 107,
                'name' => 'Aichi',
                'code' => 'AI',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 1658,
                'country_id' => 107,
                'name' => 'Akita',
                'code' => 'AK',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 1659,
                'country_id' => 107,
                'name' => 'Aomori',
                'code' => 'AO',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 1660,
                'country_id' => 107,
                'name' => 'Chiba',
                'code' => 'CH',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 1661,
                'country_id' => 107,
                'name' => 'Ehime',
                'code' => 'EH',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 1662,
                'country_id' => 107,
                'name' => 'Fukui',
                'code' => 'FK',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 1663,
                'country_id' => 107,
                'name' => 'Fukuoka',
                'code' => 'FU',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 1664,
                'country_id' => 107,
                'name' => 'Fukushima',
                'code' => 'FS',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 1665,
                'country_id' => 107,
                'name' => 'Gifu',
                'code' => 'GI',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 1666,
                'country_id' => 107,
                'name' => 'Gumma',
                'code' => 'GU',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 1667,
                'country_id' => 107,
                'name' => 'Hiroshima',
                'code' => 'HI',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 1668,
                'country_id' => 107,
                'name' => 'Hokkaido',
                'code' => 'HO',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 1669,
                'country_id' => 107,
                'name' => 'Hyogo',
                'code' => 'HY',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 1670,
                'country_id' => 107,
                'name' => 'Ibaraki',
                'code' => 'IB',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 1671,
                'country_id' => 107,
                'name' => 'Ishikawa',
                'code' => 'IS',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 1672,
                'country_id' => 107,
                'name' => 'Iwate',
                'code' => 'IW',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 1673,
                'country_id' => 107,
                'name' => 'Kagawa',
                'code' => 'KA',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 1674,
                'country_id' => 107,
                'name' => 'Kagoshima',
                'code' => 'KG',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 1675,
                'country_id' => 107,
                'name' => 'Kanagawa',
                'code' => 'KN',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 1676,
                'country_id' => 107,
                'name' => 'Kochi',
                'code' => 'KO',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 1677,
                'country_id' => 107,
                'name' => 'Kumamoto',
                'code' => 'KU',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 1678,
                'country_id' => 107,
                'name' => 'Kyoto',
                'code' => 'KY',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 1679,
                'country_id' => 107,
                'name' => 'Mie',
                'code' => 'MI',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 1680,
                'country_id' => 107,
                'name' => 'Miyagi',
                'code' => 'MY',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 1681,
                'country_id' => 107,
                'name' => 'Miyazaki',
                'code' => 'MZ',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 1682,
                'country_id' => 107,
                'name' => 'Nagano',
                'code' => 'NA',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 1683,
                'country_id' => 107,
                'name' => 'Nagasaki',
                'code' => 'NG',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 1684,
                'country_id' => 107,
                'name' => 'Nara',
                'code' => 'NR',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 1685,
                'country_id' => 107,
                'name' => 'Niigata',
                'code' => 'NI',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 1686,
                'country_id' => 107,
                'name' => 'Oita',
                'code' => 'OI',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 1687,
                'country_id' => 107,
                'name' => 'Okayama',
                'code' => 'OK',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 1688,
                'country_id' => 107,
                'name' => 'Okinawa',
                'code' => 'ON',
                'status' => 1,
            ),
            106 => 
            array (
                'zone_id' => 1689,
                'country_id' => 107,
                'name' => 'Osaka',
                'code' => 'OS',
                'status' => 1,
            ),
            107 => 
            array (
                'zone_id' => 1690,
                'country_id' => 107,
                'name' => 'Saga',
                'code' => 'SA',
                'status' => 1,
            ),
            108 => 
            array (
                'zone_id' => 1691,
                'country_id' => 107,
                'name' => 'Saitama',
                'code' => 'SI',
                'status' => 1,
            ),
            109 => 
            array (
                'zone_id' => 1692,
                'country_id' => 107,
                'name' => 'Shiga',
                'code' => 'SH',
                'status' => 1,
            ),
            110 => 
            array (
                'zone_id' => 1693,
                'country_id' => 107,
                'name' => 'Shimane',
                'code' => 'SM',
                'status' => 1,
            ),
            111 => 
            array (
                'zone_id' => 1694,
                'country_id' => 107,
                'name' => 'Shizuoka',
                'code' => 'SZ',
                'status' => 1,
            ),
            112 => 
            array (
                'zone_id' => 1695,
                'country_id' => 107,
                'name' => 'Tochigi',
                'code' => 'TO',
                'status' => 1,
            ),
            113 => 
            array (
                'zone_id' => 1696,
                'country_id' => 107,
                'name' => 'Tokushima',
                'code' => 'TS',
                'status' => 1,
            ),
            114 => 
            array (
                'zone_id' => 1697,
                'country_id' => 107,
                'name' => 'Tokyo',
                'code' => 'TK',
                'status' => 1,
            ),
            115 => 
            array (
                'zone_id' => 1698,
                'country_id' => 107,
                'name' => 'Tottori',
                'code' => 'TT',
                'status' => 1,
            ),
            116 => 
            array (
                'zone_id' => 1699,
                'country_id' => 107,
                'name' => 'Toyama',
                'code' => 'TY',
                'status' => 1,
            ),
            117 => 
            array (
                'zone_id' => 1700,
                'country_id' => 107,
                'name' => 'Wakayama',
                'code' => 'WA',
                'status' => 1,
            ),
            118 => 
            array (
                'zone_id' => 1701,
                'country_id' => 107,
                'name' => 'Yamagata',
                'code' => 'YA',
                'status' => 1,
            ),
            119 => 
            array (
                'zone_id' => 1702,
                'country_id' => 107,
                'name' => 'Yamaguchi',
                'code' => 'YM',
                'status' => 1,
            ),
            120 => 
            array (
                'zone_id' => 1703,
                'country_id' => 107,
                'name' => 'Yamanashi',
                'code' => 'YN',
                'status' => 1,
            ),
            121 => 
            array (
                'zone_id' => 1704,
                'country_id' => 108,
                'name' => '\'Amman',
                'code' => 'AM',
                'status' => 1,
            ),
            122 => 
            array (
                'zone_id' => 1705,
                'country_id' => 108,
                'name' => 'Ajlun',
                'code' => 'AJ',
                'status' => 1,
            ),
            123 => 
            array (
                'zone_id' => 1706,
                'country_id' => 108,
                'name' => 'Al \'Aqabah',
                'code' => 'AA',
                'status' => 1,
            ),
            124 => 
            array (
                'zone_id' => 1707,
                'country_id' => 108,
                'name' => 'Al Balqa\'',
                'code' => 'AB',
                'status' => 1,
            ),
            125 => 
            array (
                'zone_id' => 1708,
                'country_id' => 108,
                'name' => 'Al Karak',
                'code' => 'AK',
                'status' => 1,
            ),
            126 => 
            array (
                'zone_id' => 1709,
                'country_id' => 108,
                'name' => 'Al Mafraq',
                'code' => 'AL',
                'status' => 1,
            ),
            127 => 
            array (
                'zone_id' => 1710,
                'country_id' => 108,
                'name' => 'At Tafilah',
                'code' => 'AT',
                'status' => 1,
            ),
            128 => 
            array (
                'zone_id' => 1711,
                'country_id' => 108,
                'name' => 'Az Zarqa\'',
                'code' => 'AZ',
                'status' => 1,
            ),
            129 => 
            array (
                'zone_id' => 1712,
                'country_id' => 108,
                'name' => 'Irbid',
                'code' => 'IR',
                'status' => 1,
            ),
            130 => 
            array (
                'zone_id' => 1713,
                'country_id' => 108,
                'name' => 'Jarash',
                'code' => 'JA',
                'status' => 1,
            ),
            131 => 
            array (
                'zone_id' => 1714,
                'country_id' => 108,
                'name' => 'Ma\'an',
                'code' => 'MA',
                'status' => 1,
            ),
            132 => 
            array (
                'zone_id' => 1715,
                'country_id' => 108,
                'name' => 'Madaba',
                'code' => 'MD',
                'status' => 1,
            ),
            133 => 
            array (
                'zone_id' => 1716,
                'country_id' => 109,
                'name' => 'Almaty',
                'code' => 'AL',
                'status' => 1,
            ),
            134 => 
            array (
                'zone_id' => 1717,
                'country_id' => 109,
                'name' => 'Almaty City',
                'code' => 'AC',
                'status' => 1,
            ),
            135 => 
            array (
                'zone_id' => 1718,
                'country_id' => 109,
                'name' => 'Aqmola',
                'code' => 'AM',
                'status' => 1,
            ),
            136 => 
            array (
                'zone_id' => 1719,
                'country_id' => 109,
                'name' => 'Aqtobe',
                'code' => 'AQ',
                'status' => 1,
            ),
            137 => 
            array (
                'zone_id' => 1720,
                'country_id' => 109,
                'name' => 'Astana City',
                'code' => 'AS',
                'status' => 1,
            ),
            138 => 
            array (
                'zone_id' => 1721,
                'country_id' => 109,
                'name' => 'Atyrau',
                'code' => 'AT',
                'status' => 1,
            ),
            139 => 
            array (
                'zone_id' => 1722,
                'country_id' => 109,
                'name' => 'Batys Qazaqstan',
                'code' => 'BA',
                'status' => 1,
            ),
            140 => 
            array (
                'zone_id' => 1723,
                'country_id' => 109,
                'name' => 'Bayqongyr City',
                'code' => 'BY',
                'status' => 1,
            ),
            141 => 
            array (
                'zone_id' => 1724,
                'country_id' => 109,
                'name' => 'Mangghystau',
                'code' => 'MA',
                'status' => 1,
            ),
            142 => 
            array (
                'zone_id' => 1725,
                'country_id' => 109,
                'name' => 'Ongtustik Qazaqstan',
                'code' => 'ON',
                'status' => 1,
            ),
            143 => 
            array (
                'zone_id' => 1726,
                'country_id' => 109,
                'name' => 'Pavlodar',
                'code' => 'PA',
                'status' => 1,
            ),
            144 => 
            array (
                'zone_id' => 1727,
                'country_id' => 109,
                'name' => 'Qaraghandy',
                'code' => 'QA',
                'status' => 1,
            ),
            145 => 
            array (
                'zone_id' => 1728,
                'country_id' => 109,
                'name' => 'Qostanay',
                'code' => 'QO',
                'status' => 1,
            ),
            146 => 
            array (
                'zone_id' => 1729,
                'country_id' => 109,
                'name' => 'Qyzylorda',
                'code' => 'QY',
                'status' => 1,
            ),
            147 => 
            array (
                'zone_id' => 1730,
                'country_id' => 109,
                'name' => 'Shyghys Qazaqstan',
                'code' => 'SH',
                'status' => 1,
            ),
            148 => 
            array (
                'zone_id' => 1731,
                'country_id' => 109,
                'name' => 'Soltustik Qazaqstan',
                'code' => 'SO',
                'status' => 1,
            ),
            149 => 
            array (
                'zone_id' => 1732,
                'country_id' => 109,
                'name' => 'Zhambyl',
                'code' => 'ZH',
                'status' => 1,
            ),
            150 => 
            array (
                'zone_id' => 1733,
                'country_id' => 110,
                'name' => 'Central',
                'code' => 'CE',
                'status' => 1,
            ),
            151 => 
            array (
                'zone_id' => 1734,
                'country_id' => 110,
                'name' => 'Coast',
                'code' => 'CO',
                'status' => 1,
            ),
            152 => 
            array (
                'zone_id' => 1735,
                'country_id' => 110,
                'name' => 'Eastern',
                'code' => 'EA',
                'status' => 1,
            ),
            153 => 
            array (
                'zone_id' => 1736,
                'country_id' => 110,
                'name' => 'Nairobi Area',
                'code' => 'NA',
                'status' => 1,
            ),
            154 => 
            array (
                'zone_id' => 1737,
                'country_id' => 110,
                'name' => 'North Eastern',
                'code' => 'NE',
                'status' => 1,
            ),
            155 => 
            array (
                'zone_id' => 1738,
                'country_id' => 110,
                'name' => 'Nyanza',
                'code' => 'NY',
                'status' => 1,
            ),
            156 => 
            array (
                'zone_id' => 1739,
                'country_id' => 110,
                'name' => 'Rift Valley',
                'code' => 'RV',
                'status' => 1,
            ),
            157 => 
            array (
                'zone_id' => 1740,
                'country_id' => 110,
                'name' => 'Western',
                'code' => 'WE',
                'status' => 1,
            ),
            158 => 
            array (
                'zone_id' => 1741,
                'country_id' => 111,
                'name' => 'Abaiang',
                'code' => 'AG',
                'status' => 1,
            ),
            159 => 
            array (
                'zone_id' => 1742,
                'country_id' => 111,
                'name' => 'Abemama',
                'code' => 'AM',
                'status' => 1,
            ),
            160 => 
            array (
                'zone_id' => 1743,
                'country_id' => 111,
                'name' => 'Aranuka',
                'code' => 'AK',
                'status' => 1,
            ),
            161 => 
            array (
                'zone_id' => 1744,
                'country_id' => 111,
                'name' => 'Arorae',
                'code' => 'AO',
                'status' => 1,
            ),
            162 => 
            array (
                'zone_id' => 1745,
                'country_id' => 111,
                'name' => 'Banaba',
                'code' => 'BA',
                'status' => 1,
            ),
            163 => 
            array (
                'zone_id' => 1746,
                'country_id' => 111,
                'name' => 'Beru',
                'code' => 'BE',
                'status' => 1,
            ),
            164 => 
            array (
                'zone_id' => 1747,
                'country_id' => 111,
                'name' => 'Butaritari',
                'code' => 'bT',
                'status' => 1,
            ),
            165 => 
            array (
                'zone_id' => 1748,
                'country_id' => 111,
                'name' => 'Kanton',
                'code' => 'KA',
                'status' => 1,
            ),
            166 => 
            array (
                'zone_id' => 1749,
                'country_id' => 111,
                'name' => 'Kiritimati',
                'code' => 'KR',
                'status' => 1,
            ),
            167 => 
            array (
                'zone_id' => 1750,
                'country_id' => 111,
                'name' => 'Kuria',
                'code' => 'KU',
                'status' => 1,
            ),
            168 => 
            array (
                'zone_id' => 1751,
                'country_id' => 111,
                'name' => 'Maiana',
                'code' => 'MI',
                'status' => 1,
            ),
            169 => 
            array (
                'zone_id' => 1752,
                'country_id' => 111,
                'name' => 'Makin',
                'code' => 'MN',
                'status' => 1,
            ),
            170 => 
            array (
                'zone_id' => 1753,
                'country_id' => 111,
                'name' => 'Marakei',
                'code' => 'ME',
                'status' => 1,
            ),
            171 => 
            array (
                'zone_id' => 1754,
                'country_id' => 111,
                'name' => 'Nikunau',
                'code' => 'NI',
                'status' => 1,
            ),
            172 => 
            array (
                'zone_id' => 1755,
                'country_id' => 111,
                'name' => 'Nonouti',
                'code' => 'NO',
                'status' => 1,
            ),
            173 => 
            array (
                'zone_id' => 1756,
                'country_id' => 111,
                'name' => 'Onotoa',
                'code' => 'ON',
                'status' => 1,
            ),
            174 => 
            array (
                'zone_id' => 1757,
                'country_id' => 111,
                'name' => 'Tabiteuea',
                'code' => 'TT',
                'status' => 1,
            ),
            175 => 
            array (
                'zone_id' => 1758,
                'country_id' => 111,
                'name' => 'Tabuaeran',
                'code' => 'TR',
                'status' => 1,
            ),
            176 => 
            array (
                'zone_id' => 1759,
                'country_id' => 111,
                'name' => 'Tamana',
                'code' => 'TM',
                'status' => 1,
            ),
            177 => 
            array (
                'zone_id' => 1760,
                'country_id' => 111,
                'name' => 'Tarawa',
                'code' => 'TW',
                'status' => 1,
            ),
            178 => 
            array (
                'zone_id' => 1761,
                'country_id' => 111,
                'name' => 'Teraina',
                'code' => 'TE',
                'status' => 1,
            ),
            179 => 
            array (
                'zone_id' => 1762,
                'country_id' => 112,
                'name' => 'Chagang-do',
                'code' => 'CHA',
                'status' => 1,
            ),
            180 => 
            array (
                'zone_id' => 1763,
                'country_id' => 112,
                'name' => 'Hamgyong-bukto',
                'code' => 'HAB',
                'status' => 1,
            ),
            181 => 
            array (
                'zone_id' => 1764,
                'country_id' => 112,
                'name' => 'Hamgyong-namdo',
                'code' => 'HAN',
                'status' => 1,
            ),
            182 => 
            array (
                'zone_id' => 1765,
                'country_id' => 112,
                'name' => 'Hwanghae-bukto',
                'code' => 'HWB',
                'status' => 1,
            ),
            183 => 
            array (
                'zone_id' => 1766,
                'country_id' => 112,
                'name' => 'Hwanghae-namdo',
                'code' => 'HWN',
                'status' => 1,
            ),
            184 => 
            array (
                'zone_id' => 1767,
                'country_id' => 112,
                'name' => 'Kangwon-do',
                'code' => 'KAN',
                'status' => 1,
            ),
            185 => 
            array (
                'zone_id' => 1768,
                'country_id' => 112,
                'name' => 'P\'yongan-bukto',
                'code' => 'PYB',
                'status' => 1,
            ),
            186 => 
            array (
                'zone_id' => 1769,
                'country_id' => 112,
                'name' => 'P\'yongan-namdo',
                'code' => 'PYN',
                'status' => 1,
            ),
            187 => 
            array (
                'zone_id' => 1770,
                'country_id' => 112,
            'name' => 'Ryanggang-do (Yanggang-do)',
                'code' => 'YAN',
                'status' => 1,
            ),
            188 => 
            array (
                'zone_id' => 1771,
                'country_id' => 112,
                'name' => 'Rason Directly Governed City',
                'code' => 'NAJ',
                'status' => 1,
            ),
            189 => 
            array (
                'zone_id' => 1772,
                'country_id' => 112,
                'name' => 'P\'yongyang Special City',
                'code' => 'PYO',
                'status' => 1,
            ),
            190 => 
            array (
                'zone_id' => 1773,
                'country_id' => 113,
                'name' => 'Ch\'ungch\'ong-bukto',
                'code' => 'CO',
                'status' => 1,
            ),
            191 => 
            array (
                'zone_id' => 1774,
                'country_id' => 113,
                'name' => 'Ch\'ungch\'ong-namdo',
                'code' => 'CH',
                'status' => 1,
            ),
            192 => 
            array (
                'zone_id' => 1775,
                'country_id' => 113,
                'name' => 'Cheju-do',
                'code' => 'CD',
                'status' => 1,
            ),
            193 => 
            array (
                'zone_id' => 1776,
                'country_id' => 113,
                'name' => 'Cholla-bukto',
                'code' => 'CB',
                'status' => 1,
            ),
            194 => 
            array (
                'zone_id' => 1777,
                'country_id' => 113,
                'name' => 'Cholla-namdo',
                'code' => 'CN',
                'status' => 1,
            ),
            195 => 
            array (
                'zone_id' => 1778,
                'country_id' => 113,
                'name' => 'Inch\'on-gwangyoksi',
                'code' => 'IG',
                'status' => 1,
            ),
            196 => 
            array (
                'zone_id' => 1779,
                'country_id' => 113,
                'name' => 'Kangwon-do',
                'code' => 'KA',
                'status' => 1,
            ),
            197 => 
            array (
                'zone_id' => 1780,
                'country_id' => 113,
                'name' => 'Kwangju-gwangyoksi',
                'code' => 'KG',
                'status' => 1,
            ),
            198 => 
            array (
                'zone_id' => 1781,
                'country_id' => 113,
                'name' => 'Kyonggi-do',
                'code' => 'KD',
                'status' => 1,
            ),
            199 => 
            array (
                'zone_id' => 1782,
                'country_id' => 113,
                'name' => 'Kyongsang-bukto',
                'code' => 'KB',
                'status' => 1,
            ),
            200 => 
            array (
                'zone_id' => 1783,
                'country_id' => 113,
                'name' => 'Kyongsang-namdo',
                'code' => 'KN',
                'status' => 1,
            ),
            201 => 
            array (
                'zone_id' => 1784,
                'country_id' => 113,
                'name' => 'Pusan-gwangyoksi',
                'code' => 'PG',
                'status' => 1,
            ),
            202 => 
            array (
                'zone_id' => 1785,
                'country_id' => 113,
                'name' => 'Soul-t\'ukpyolsi',
                'code' => 'SO',
                'status' => 1,
            ),
            203 => 
            array (
                'zone_id' => 1786,
                'country_id' => 113,
                'name' => 'Taegu-gwangyoksi',
                'code' => 'TA',
                'status' => 1,
            ),
            204 => 
            array (
                'zone_id' => 1787,
                'country_id' => 113,
                'name' => 'Taejon-gwangyoksi',
                'code' => 'TG',
                'status' => 1,
            ),
            205 => 
            array (
                'zone_id' => 1788,
                'country_id' => 114,
                'name' => 'Al \'Asimah',
                'code' => 'AL',
                'status' => 1,
            ),
            206 => 
            array (
                'zone_id' => 1789,
                'country_id' => 114,
                'name' => 'Al Ahmadi',
                'code' => 'AA',
                'status' => 1,
            ),
            207 => 
            array (
                'zone_id' => 1790,
                'country_id' => 114,
                'name' => 'Al Farwaniyah',
                'code' => 'AF',
                'status' => 1,
            ),
            208 => 
            array (
                'zone_id' => 1791,
                'country_id' => 114,
                'name' => 'Al Jahra\'',
                'code' => 'AJ',
                'status' => 1,
            ),
            209 => 
            array (
                'zone_id' => 1792,
                'country_id' => 114,
                'name' => 'Hawalli',
                'code' => 'HA',
                'status' => 1,
            ),
            210 => 
            array (
                'zone_id' => 1793,
                'country_id' => 115,
                'name' => 'Bishkek',
                'code' => 'GB',
                'status' => 1,
            ),
            211 => 
            array (
                'zone_id' => 1794,
                'country_id' => 115,
                'name' => 'Batken',
                'code' => 'B',
                'status' => 1,
            ),
            212 => 
            array (
                'zone_id' => 1795,
                'country_id' => 115,
                'name' => 'Chu',
                'code' => 'C',
                'status' => 1,
            ),
            213 => 
            array (
                'zone_id' => 1796,
                'country_id' => 115,
                'name' => 'Jalal-Abad',
                'code' => 'J',
                'status' => 1,
            ),
            214 => 
            array (
                'zone_id' => 1797,
                'country_id' => 115,
                'name' => 'Naryn',
                'code' => 'N',
                'status' => 1,
            ),
            215 => 
            array (
                'zone_id' => 1798,
                'country_id' => 115,
                'name' => 'Osh',
                'code' => 'O',
                'status' => 1,
            ),
            216 => 
            array (
                'zone_id' => 1799,
                'country_id' => 115,
                'name' => 'Talas',
                'code' => 'T',
                'status' => 1,
            ),
            217 => 
            array (
                'zone_id' => 1800,
                'country_id' => 115,
                'name' => 'Ysyk-Kol',
                'code' => 'Y',
                'status' => 1,
            ),
            218 => 
            array (
                'zone_id' => 1801,
                'country_id' => 116,
                'name' => 'Vientiane',
                'code' => 'VT',
                'status' => 1,
            ),
            219 => 
            array (
                'zone_id' => 1802,
                'country_id' => 116,
                'name' => 'Attapu',
                'code' => 'AT',
                'status' => 1,
            ),
            220 => 
            array (
                'zone_id' => 1803,
                'country_id' => 116,
                'name' => 'Bokeo',
                'code' => 'BK',
                'status' => 1,
            ),
            221 => 
            array (
                'zone_id' => 1804,
                'country_id' => 116,
                'name' => 'Bolikhamxai',
                'code' => 'BL',
                'status' => 1,
            ),
            222 => 
            array (
                'zone_id' => 1805,
                'country_id' => 116,
                'name' => 'Champasak',
                'code' => 'CH',
                'status' => 1,
            ),
            223 => 
            array (
                'zone_id' => 1806,
                'country_id' => 116,
                'name' => 'Houaphan',
                'code' => 'HO',
                'status' => 1,
            ),
            224 => 
            array (
                'zone_id' => 1807,
                'country_id' => 116,
                'name' => 'Khammouan',
                'code' => 'KH',
                'status' => 1,
            ),
            225 => 
            array (
                'zone_id' => 1808,
                'country_id' => 116,
                'name' => 'Louang Namtha',
                'code' => 'LM',
                'status' => 1,
            ),
            226 => 
            array (
                'zone_id' => 1809,
                'country_id' => 116,
                'name' => 'Louangphabang',
                'code' => 'LP',
                'status' => 1,
            ),
            227 => 
            array (
                'zone_id' => 1810,
                'country_id' => 116,
                'name' => 'Oudomxai',
                'code' => 'OU',
                'status' => 1,
            ),
            228 => 
            array (
                'zone_id' => 1811,
                'country_id' => 116,
                'name' => 'Phongsali',
                'code' => 'PH',
                'status' => 1,
            ),
            229 => 
            array (
                'zone_id' => 1812,
                'country_id' => 116,
                'name' => 'Salavan',
                'code' => 'SL',
                'status' => 1,
            ),
            230 => 
            array (
                'zone_id' => 1813,
                'country_id' => 116,
                'name' => 'Savannakhet',
                'code' => 'SV',
                'status' => 1,
            ),
            231 => 
            array (
                'zone_id' => 1814,
                'country_id' => 116,
                'name' => 'Vientiane',
                'code' => 'VI',
                'status' => 1,
            ),
            232 => 
            array (
                'zone_id' => 1815,
                'country_id' => 116,
                'name' => 'Xaignabouli',
                'code' => 'XA',
                'status' => 1,
            ),
            233 => 
            array (
                'zone_id' => 1816,
                'country_id' => 116,
                'name' => 'Xekong',
                'code' => 'XE',
                'status' => 1,
            ),
            234 => 
            array (
                'zone_id' => 1817,
                'country_id' => 116,
                'name' => 'Xiangkhoang',
                'code' => 'XI',
                'status' => 1,
            ),
            235 => 
            array (
                'zone_id' => 1818,
                'country_id' => 116,
                'name' => 'Xaisomboun',
                'code' => 'XN',
                'status' => 1,
            ),
            236 => 
            array (
                'zone_id' => 1852,
                'country_id' => 119,
                'name' => 'Berea',
                'code' => 'BE',
                'status' => 1,
            ),
            237 => 
            array (
                'zone_id' => 1853,
                'country_id' => 119,
                'name' => 'Butha-Buthe',
                'code' => 'BB',
                'status' => 1,
            ),
            238 => 
            array (
                'zone_id' => 1854,
                'country_id' => 119,
                'name' => 'Leribe',
                'code' => 'LE',
                'status' => 1,
            ),
            239 => 
            array (
                'zone_id' => 1855,
                'country_id' => 119,
                'name' => 'Mafeteng',
                'code' => 'MF',
                'status' => 1,
            ),
            240 => 
            array (
                'zone_id' => 1856,
                'country_id' => 119,
                'name' => 'Maseru',
                'code' => 'MS',
                'status' => 1,
            ),
            241 => 
            array (
                'zone_id' => 1857,
                'country_id' => 119,
                'name' => 'Mohale\'s Hoek',
                'code' => 'MH',
                'status' => 1,
            ),
            242 => 
            array (
                'zone_id' => 1858,
                'country_id' => 119,
                'name' => 'Mokhotlong',
                'code' => 'MK',
                'status' => 1,
            ),
            243 => 
            array (
                'zone_id' => 1859,
                'country_id' => 119,
                'name' => 'Qacha\'s Nek',
                'code' => 'QN',
                'status' => 1,
            ),
            244 => 
            array (
                'zone_id' => 1860,
                'country_id' => 119,
                'name' => 'Quthing',
                'code' => 'QT',
                'status' => 1,
            ),
            245 => 
            array (
                'zone_id' => 1861,
                'country_id' => 119,
                'name' => 'Thaba-Tseka',
                'code' => 'TT',
                'status' => 1,
            ),
            246 => 
            array (
                'zone_id' => 1862,
                'country_id' => 120,
                'name' => 'Bomi',
                'code' => 'BI',
                'status' => 1,
            ),
            247 => 
            array (
                'zone_id' => 1863,
                'country_id' => 120,
                'name' => 'Bong',
                'code' => 'BG',
                'status' => 1,
            ),
            248 => 
            array (
                'zone_id' => 1864,
                'country_id' => 120,
                'name' => 'Grand Bassa',
                'code' => 'GB',
                'status' => 1,
            ),
            249 => 
            array (
                'zone_id' => 1865,
                'country_id' => 120,
                'name' => 'Grand Cape Mount',
                'code' => 'CM',
                'status' => 1,
            ),
            250 => 
            array (
                'zone_id' => 1866,
                'country_id' => 120,
                'name' => 'Grand Gedeh',
                'code' => 'GG',
                'status' => 1,
            ),
            251 => 
            array (
                'zone_id' => 1867,
                'country_id' => 120,
                'name' => 'Grand Kru',
                'code' => 'GK',
                'status' => 1,
            ),
            252 => 
            array (
                'zone_id' => 1868,
                'country_id' => 120,
                'name' => 'Lofa',
                'code' => 'LO',
                'status' => 1,
            ),
            253 => 
            array (
                'zone_id' => 1869,
                'country_id' => 120,
                'name' => 'Margibi',
                'code' => 'MG',
                'status' => 1,
            ),
            254 => 
            array (
                'zone_id' => 1870,
                'country_id' => 120,
                'name' => 'Maryland',
                'code' => 'ML',
                'status' => 1,
            ),
            255 => 
            array (
                'zone_id' => 1871,
                'country_id' => 120,
                'name' => 'Montserrado',
                'code' => 'MS',
                'status' => 1,
            ),
            256 => 
            array (
                'zone_id' => 1872,
                'country_id' => 120,
                'name' => 'Nimba',
                'code' => 'NB',
                'status' => 1,
            ),
            257 => 
            array (
                'zone_id' => 1873,
                'country_id' => 120,
                'name' => 'River Cess',
                'code' => 'RC',
                'status' => 1,
            ),
            258 => 
            array (
                'zone_id' => 1874,
                'country_id' => 120,
                'name' => 'Sinoe',
                'code' => 'SN',
                'status' => 1,
            ),
            259 => 
            array (
                'zone_id' => 1875,
                'country_id' => 121,
                'name' => 'Ajdabiya',
                'code' => 'AJ',
                'status' => 1,
            ),
            260 => 
            array (
                'zone_id' => 1876,
                'country_id' => 121,
                'name' => 'Al \'Aziziyah',
                'code' => 'AZ',
                'status' => 1,
            ),
            261 => 
            array (
                'zone_id' => 1877,
                'country_id' => 121,
                'name' => 'Al Fatih',
                'code' => 'FA',
                'status' => 1,
            ),
            262 => 
            array (
                'zone_id' => 1878,
                'country_id' => 121,
                'name' => 'Al Jabal al Akhdar',
                'code' => 'JA',
                'status' => 1,
            ),
            263 => 
            array (
                'zone_id' => 1879,
                'country_id' => 121,
                'name' => 'Al Jufrah',
                'code' => 'JU',
                'status' => 1,
            ),
            264 => 
            array (
                'zone_id' => 1880,
                'country_id' => 121,
                'name' => 'Al Khums',
                'code' => 'KH',
                'status' => 1,
            ),
            265 => 
            array (
                'zone_id' => 1881,
                'country_id' => 121,
                'name' => 'Al Kufrah',
                'code' => 'KU',
                'status' => 1,
            ),
            266 => 
            array (
                'zone_id' => 1882,
                'country_id' => 121,
                'name' => 'An Nuqat al Khams',
                'code' => 'NK',
                'status' => 1,
            ),
            267 => 
            array (
                'zone_id' => 1883,
                'country_id' => 121,
                'name' => 'Ash Shati\'',
                'code' => 'AS',
                'status' => 1,
            ),
            268 => 
            array (
                'zone_id' => 1884,
                'country_id' => 121,
                'name' => 'Awbari',
                'code' => 'AW',
                'status' => 1,
            ),
            269 => 
            array (
                'zone_id' => 1885,
                'country_id' => 121,
                'name' => 'Az Zawiyah',
                'code' => 'ZA',
                'status' => 1,
            ),
            270 => 
            array (
                'zone_id' => 1886,
                'country_id' => 121,
                'name' => 'Banghazi',
                'code' => 'BA',
                'status' => 1,
            ),
            271 => 
            array (
                'zone_id' => 1887,
                'country_id' => 121,
                'name' => 'Darnah',
                'code' => 'DA',
                'status' => 1,
            ),
            272 => 
            array (
                'zone_id' => 1888,
                'country_id' => 121,
                'name' => 'Ghadamis',
                'code' => 'GD',
                'status' => 1,
            ),
            273 => 
            array (
                'zone_id' => 1889,
                'country_id' => 121,
                'name' => 'Gharyan',
                'code' => 'GY',
                'status' => 1,
            ),
            274 => 
            array (
                'zone_id' => 1890,
                'country_id' => 121,
                'name' => 'Misratah',
                'code' => 'MI',
                'status' => 1,
            ),
            275 => 
            array (
                'zone_id' => 1891,
                'country_id' => 121,
                'name' => 'Murzuq',
                'code' => 'MZ',
                'status' => 1,
            ),
            276 => 
            array (
                'zone_id' => 1892,
                'country_id' => 121,
                'name' => 'Sabha',
                'code' => 'SB',
                'status' => 1,
            ),
            277 => 
            array (
                'zone_id' => 1893,
                'country_id' => 121,
                'name' => 'Sawfajjin',
                'code' => 'SW',
                'status' => 1,
            ),
            278 => 
            array (
                'zone_id' => 1894,
                'country_id' => 121,
                'name' => 'Surt',
                'code' => 'SU',
                'status' => 1,
            ),
            279 => 
            array (
                'zone_id' => 1895,
                'country_id' => 121,
            'name' => 'Tarabulus (Tripoli)',
                'code' => 'TL',
                'status' => 1,
            ),
            280 => 
            array (
                'zone_id' => 1896,
                'country_id' => 121,
                'name' => 'Tarhunah',
                'code' => 'TH',
                'status' => 1,
            ),
            281 => 
            array (
                'zone_id' => 1897,
                'country_id' => 121,
                'name' => 'Tubruq',
                'code' => 'TU',
                'status' => 1,
            ),
            282 => 
            array (
                'zone_id' => 1898,
                'country_id' => 121,
                'name' => 'Yafran',
                'code' => 'YA',
                'status' => 1,
            ),
            283 => 
            array (
                'zone_id' => 1899,
                'country_id' => 121,
                'name' => 'Zlitan',
                'code' => 'ZL',
                'status' => 1,
            ),
            284 => 
            array (
                'zone_id' => 1900,
                'country_id' => 122,
                'name' => 'Vaduz',
                'code' => 'V',
                'status' => 1,
            ),
            285 => 
            array (
                'zone_id' => 1901,
                'country_id' => 122,
                'name' => 'Schaan',
                'code' => 'A',
                'status' => 1,
            ),
            286 => 
            array (
                'zone_id' => 1902,
                'country_id' => 122,
                'name' => 'Balzers',
                'code' => 'B',
                'status' => 1,
            ),
            287 => 
            array (
                'zone_id' => 1903,
                'country_id' => 122,
                'name' => 'Triesen',
                'code' => 'N',
                'status' => 1,
            ),
            288 => 
            array (
                'zone_id' => 1904,
                'country_id' => 122,
                'name' => 'Eschen',
                'code' => 'E',
                'status' => 1,
            ),
            289 => 
            array (
                'zone_id' => 1905,
                'country_id' => 122,
                'name' => 'Mauren',
                'code' => 'M',
                'status' => 1,
            ),
            290 => 
            array (
                'zone_id' => 1906,
                'country_id' => 122,
                'name' => 'Triesenberg',
                'code' => 'T',
                'status' => 1,
            ),
            291 => 
            array (
                'zone_id' => 1907,
                'country_id' => 122,
                'name' => 'Ruggell',
                'code' => 'R',
                'status' => 1,
            ),
            292 => 
            array (
                'zone_id' => 1908,
                'country_id' => 122,
                'name' => 'Gamprin',
                'code' => 'G',
                'status' => 1,
            ),
            293 => 
            array (
                'zone_id' => 1909,
                'country_id' => 122,
                'name' => 'Schellenberg',
                'code' => 'L',
                'status' => 1,
            ),
            294 => 
            array (
                'zone_id' => 1910,
                'country_id' => 122,
                'name' => 'Planken',
                'code' => 'P',
                'status' => 1,
            ),
            295 => 
            array (
                'zone_id' => 1911,
                'country_id' => 123,
                'name' => 'Alytus',
                'code' => 'AL',
                'status' => 1,
            ),
            296 => 
            array (
                'zone_id' => 1912,
                'country_id' => 123,
                'name' => 'Kaunas',
                'code' => 'KA',
                'status' => 1,
            ),
            297 => 
            array (
                'zone_id' => 1913,
                'country_id' => 123,
                'name' => 'Klaipeda',
                'code' => 'KL',
                'status' => 1,
            ),
            298 => 
            array (
                'zone_id' => 1914,
                'country_id' => 123,
                'name' => 'Marijampole',
                'code' => 'MA',
                'status' => 1,
            ),
            299 => 
            array (
                'zone_id' => 1915,
                'country_id' => 123,
                'name' => 'Panevezys',
                'code' => 'PA',
                'status' => 1,
            ),
            300 => 
            array (
                'zone_id' => 1916,
                'country_id' => 123,
                'name' => 'Siauliai',
                'code' => 'SI',
                'status' => 1,
            ),
            301 => 
            array (
                'zone_id' => 1917,
                'country_id' => 123,
                'name' => 'Taurage',
                'code' => 'TA',
                'status' => 1,
            ),
            302 => 
            array (
                'zone_id' => 1918,
                'country_id' => 123,
                'name' => 'Telsiai',
                'code' => 'TE',
                'status' => 1,
            ),
            303 => 
            array (
                'zone_id' => 1919,
                'country_id' => 123,
                'name' => 'Utena',
                'code' => 'UT',
                'status' => 1,
            ),
            304 => 
            array (
                'zone_id' => 1920,
                'country_id' => 123,
                'name' => 'Vilnius',
                'code' => 'VI',
                'status' => 1,
            ),
            305 => 
            array (
                'zone_id' => 1921,
                'country_id' => 124,
                'name' => 'Diekirch',
                'code' => 'DD',
                'status' => 1,
            ),
            306 => 
            array (
                'zone_id' => 1922,
                'country_id' => 124,
                'name' => 'Clervaux',
                'code' => 'DC',
                'status' => 1,
            ),
            307 => 
            array (
                'zone_id' => 1923,
                'country_id' => 124,
                'name' => 'Redange',
                'code' => 'DR',
                'status' => 1,
            ),
            308 => 
            array (
                'zone_id' => 1924,
                'country_id' => 124,
                'name' => 'Vianden',
                'code' => 'DV',
                'status' => 1,
            ),
            309 => 
            array (
                'zone_id' => 1925,
                'country_id' => 124,
                'name' => 'Wiltz',
                'code' => 'DW',
                'status' => 1,
            ),
            310 => 
            array (
                'zone_id' => 1926,
                'country_id' => 124,
                'name' => 'Grevenmacher',
                'code' => 'GG',
                'status' => 1,
            ),
            311 => 
            array (
                'zone_id' => 1927,
                'country_id' => 124,
                'name' => 'Echternach',
                'code' => 'GE',
                'status' => 1,
            ),
            312 => 
            array (
                'zone_id' => 1928,
                'country_id' => 124,
                'name' => 'Remich',
                'code' => 'GR',
                'status' => 1,
            ),
            313 => 
            array (
                'zone_id' => 1929,
                'country_id' => 124,
                'name' => 'Luxembourg',
                'code' => 'LL',
                'status' => 1,
            ),
            314 => 
            array (
                'zone_id' => 1930,
                'country_id' => 124,
                'name' => 'Capellen',
                'code' => 'LC',
                'status' => 1,
            ),
            315 => 
            array (
                'zone_id' => 1931,
                'country_id' => 124,
                'name' => 'Esch-sur-Alzette',
                'code' => 'LE',
                'status' => 1,
            ),
            316 => 
            array (
                'zone_id' => 1932,
                'country_id' => 124,
                'name' => 'Mersch',
                'code' => 'LM',
                'status' => 1,
            ),
            317 => 
            array (
                'zone_id' => 1933,
                'country_id' => 125,
                'name' => 'Our Lady Fatima Parish',
                'code' => 'OLF',
                'status' => 1,
            ),
            318 => 
            array (
                'zone_id' => 1934,
                'country_id' => 125,
                'name' => 'St. Anthony Parish',
                'code' => 'ANT',
                'status' => 1,
            ),
            319 => 
            array (
                'zone_id' => 1935,
                'country_id' => 125,
                'name' => 'St. Lazarus Parish',
                'code' => 'LAZ',
                'status' => 1,
            ),
            320 => 
            array (
                'zone_id' => 1936,
                'country_id' => 125,
                'name' => 'Cathedral Parish',
                'code' => 'CAT',
                'status' => 1,
            ),
            321 => 
            array (
                'zone_id' => 1937,
                'country_id' => 125,
                'name' => 'St. Lawrence Parish',
                'code' => 'LAW',
                'status' => 1,
            ),
            322 => 
            array (
                'zone_id' => 1938,
                'country_id' => 127,
                'name' => 'Antananarivo',
                'code' => 'AN',
                'status' => 1,
            ),
            323 => 
            array (
                'zone_id' => 1939,
                'country_id' => 127,
                'name' => 'Antsiranana',
                'code' => 'AS',
                'status' => 1,
            ),
            324 => 
            array (
                'zone_id' => 1940,
                'country_id' => 127,
                'name' => 'Fianarantsoa',
                'code' => 'FN',
                'status' => 1,
            ),
            325 => 
            array (
                'zone_id' => 1941,
                'country_id' => 127,
                'name' => 'Mahajanga',
                'code' => 'MJ',
                'status' => 1,
            ),
            326 => 
            array (
                'zone_id' => 1942,
                'country_id' => 127,
                'name' => 'Toamasina',
                'code' => 'TM',
                'status' => 1,
            ),
            327 => 
            array (
                'zone_id' => 1943,
                'country_id' => 127,
                'name' => 'Toliara',
                'code' => 'TL',
                'status' => 1,
            ),
            328 => 
            array (
                'zone_id' => 1944,
                'country_id' => 128,
                'name' => 'Balaka',
                'code' => 'BLK',
                'status' => 1,
            ),
            329 => 
            array (
                'zone_id' => 1945,
                'country_id' => 128,
                'name' => 'Blantyre',
                'code' => 'BLT',
                'status' => 1,
            ),
            330 => 
            array (
                'zone_id' => 1946,
                'country_id' => 128,
                'name' => 'Chikwawa',
                'code' => 'CKW',
                'status' => 1,
            ),
            331 => 
            array (
                'zone_id' => 1947,
                'country_id' => 128,
                'name' => 'Chiradzulu',
                'code' => 'CRD',
                'status' => 1,
            ),
            332 => 
            array (
                'zone_id' => 1948,
                'country_id' => 128,
                'name' => 'Chitipa',
                'code' => 'CTP',
                'status' => 1,
            ),
            333 => 
            array (
                'zone_id' => 1949,
                'country_id' => 128,
                'name' => 'Dedza',
                'code' => 'DDZ',
                'status' => 1,
            ),
            334 => 
            array (
                'zone_id' => 1950,
                'country_id' => 128,
                'name' => 'Dowa',
                'code' => 'DWA',
                'status' => 1,
            ),
            335 => 
            array (
                'zone_id' => 1951,
                'country_id' => 128,
                'name' => 'Karonga',
                'code' => 'KRG',
                'status' => 1,
            ),
            336 => 
            array (
                'zone_id' => 1952,
                'country_id' => 128,
                'name' => 'Kasungu',
                'code' => 'KSG',
                'status' => 1,
            ),
            337 => 
            array (
                'zone_id' => 1953,
                'country_id' => 128,
                'name' => 'Likoma',
                'code' => 'LKM',
                'status' => 1,
            ),
            338 => 
            array (
                'zone_id' => 1954,
                'country_id' => 128,
                'name' => 'Lilongwe',
                'code' => 'LLG',
                'status' => 1,
            ),
            339 => 
            array (
                'zone_id' => 1955,
                'country_id' => 128,
                'name' => 'Machinga',
                'code' => 'MCG',
                'status' => 1,
            ),
            340 => 
            array (
                'zone_id' => 1956,
                'country_id' => 128,
                'name' => 'Mangochi',
                'code' => 'MGC',
                'status' => 1,
            ),
            341 => 
            array (
                'zone_id' => 1957,
                'country_id' => 128,
                'name' => 'Mchinji',
                'code' => 'MCH',
                'status' => 1,
            ),
            342 => 
            array (
                'zone_id' => 1958,
                'country_id' => 128,
                'name' => 'Mulanje',
                'code' => 'MLJ',
                'status' => 1,
            ),
            343 => 
            array (
                'zone_id' => 1959,
                'country_id' => 128,
                'name' => 'Mwanza',
                'code' => 'MWZ',
                'status' => 1,
            ),
            344 => 
            array (
                'zone_id' => 1960,
                'country_id' => 128,
                'name' => 'Mzimba',
                'code' => 'MZM',
                'status' => 1,
            ),
            345 => 
            array (
                'zone_id' => 1961,
                'country_id' => 128,
                'name' => 'Ntcheu',
                'code' => 'NTU',
                'status' => 1,
            ),
            346 => 
            array (
                'zone_id' => 1962,
                'country_id' => 128,
                'name' => 'Nkhata Bay',
                'code' => 'NKB',
                'status' => 1,
            ),
            347 => 
            array (
                'zone_id' => 1963,
                'country_id' => 128,
                'name' => 'Nkhotakota',
                'code' => 'NKH',
                'status' => 1,
            ),
            348 => 
            array (
                'zone_id' => 1964,
                'country_id' => 128,
                'name' => 'Nsanje',
                'code' => 'NSJ',
                'status' => 1,
            ),
            349 => 
            array (
                'zone_id' => 1965,
                'country_id' => 128,
                'name' => 'Ntchisi',
                'code' => 'NTI',
                'status' => 1,
            ),
            350 => 
            array (
                'zone_id' => 1966,
                'country_id' => 128,
                'name' => 'Phalombe',
                'code' => 'PHL',
                'status' => 1,
            ),
            351 => 
            array (
                'zone_id' => 1967,
                'country_id' => 128,
                'name' => 'Rumphi',
                'code' => 'RMP',
                'status' => 1,
            ),
            352 => 
            array (
                'zone_id' => 1968,
                'country_id' => 128,
                'name' => 'Salima',
                'code' => 'SLM',
                'status' => 1,
            ),
            353 => 
            array (
                'zone_id' => 1969,
                'country_id' => 128,
                'name' => 'Thyolo',
                'code' => 'THY',
                'status' => 1,
            ),
            354 => 
            array (
                'zone_id' => 1970,
                'country_id' => 128,
                'name' => 'Zomba',
                'code' => 'ZBA',
                'status' => 1,
            ),
            355 => 
            array (
                'zone_id' => 1971,
                'country_id' => 129,
                'name' => 'Johor',
                'code' => 'MY-01',
                'status' => 1,
            ),
            356 => 
            array (
                'zone_id' => 1972,
                'country_id' => 129,
                'name' => 'Kedah',
                'code' => 'MY-02',
                'status' => 1,
            ),
            357 => 
            array (
                'zone_id' => 1973,
                'country_id' => 129,
                'name' => 'Kelantan',
                'code' => 'MY-03',
                'status' => 1,
            ),
            358 => 
            array (
                'zone_id' => 1974,
                'country_id' => 129,
                'name' => 'Labuan',
                'code' => 'MY-15',
                'status' => 1,
            ),
            359 => 
            array (
                'zone_id' => 1975,
                'country_id' => 129,
                'name' => 'Melaka',
                'code' => 'MY-04',
                'status' => 1,
            ),
            360 => 
            array (
                'zone_id' => 1976,
                'country_id' => 129,
                'name' => 'Negeri Sembilan',
                'code' => 'MY-05',
                'status' => 1,
            ),
            361 => 
            array (
                'zone_id' => 1977,
                'country_id' => 129,
                'name' => 'Pahang',
                'code' => 'MY-06',
                'status' => 1,
            ),
            362 => 
            array (
                'zone_id' => 1978,
                'country_id' => 129,
                'name' => 'Perak',
                'code' => 'MY-08',
                'status' => 1,
            ),
            363 => 
            array (
                'zone_id' => 1979,
                'country_id' => 129,
                'name' => 'Perlis',
                'code' => 'MY-09',
                'status' => 1,
            ),
            364 => 
            array (
                'zone_id' => 1980,
                'country_id' => 129,
                'name' => 'Pulau Pinang',
                'code' => 'MY-07',
                'status' => 1,
            ),
            365 => 
            array (
                'zone_id' => 1981,
                'country_id' => 129,
                'name' => 'Sabah',
                'code' => 'MY-12',
                'status' => 1,
            ),
            366 => 
            array (
                'zone_id' => 1982,
                'country_id' => 129,
                'name' => 'Sarawak',
                'code' => 'MY-13',
                'status' => 1,
            ),
            367 => 
            array (
                'zone_id' => 1983,
                'country_id' => 129,
                'name' => 'Selangor',
                'code' => 'MY-10',
                'status' => 1,
            ),
            368 => 
            array (
                'zone_id' => 1984,
                'country_id' => 129,
                'name' => 'Terengganu',
                'code' => 'MY-11',
                'status' => 1,
            ),
            369 => 
            array (
                'zone_id' => 1985,
                'country_id' => 129,
                'name' => 'Kuala Lumpur',
                'code' => 'MY-14',
                'status' => 1,
            ),
            370 => 
            array (
                'zone_id' => 1986,
                'country_id' => 130,
                'name' => 'Thiladhunmathi Uthuru',
                'code' => 'THU',
                'status' => 1,
            ),
            371 => 
            array (
                'zone_id' => 1987,
                'country_id' => 130,
                'name' => 'Thiladhunmathi Dhekunu',
                'code' => 'THD',
                'status' => 1,
            ),
            372 => 
            array (
                'zone_id' => 1988,
                'country_id' => 130,
                'name' => 'Miladhunmadulu Uthuru',
                'code' => 'MLU',
                'status' => 1,
            ),
            373 => 
            array (
                'zone_id' => 1989,
                'country_id' => 130,
                'name' => 'Miladhunmadulu Dhekunu',
                'code' => 'MLD',
                'status' => 1,
            ),
            374 => 
            array (
                'zone_id' => 1990,
                'country_id' => 130,
                'name' => 'Maalhosmadulu Uthuru',
                'code' => 'MAU',
                'status' => 1,
            ),
            375 => 
            array (
                'zone_id' => 1991,
                'country_id' => 130,
                'name' => 'Maalhosmadulu Dhekunu',
                'code' => 'MAD',
                'status' => 1,
            ),
            376 => 
            array (
                'zone_id' => 1992,
                'country_id' => 130,
                'name' => 'Faadhippolhu',
                'code' => 'FAA',
                'status' => 1,
            ),
            377 => 
            array (
                'zone_id' => 1993,
                'country_id' => 130,
                'name' => 'Male Atoll',
                'code' => 'MAA',
                'status' => 1,
            ),
            378 => 
            array (
                'zone_id' => 1994,
                'country_id' => 130,
                'name' => 'Ari Atoll Uthuru',
                'code' => 'AAU',
                'status' => 1,
            ),
            379 => 
            array (
                'zone_id' => 1995,
                'country_id' => 130,
                'name' => 'Ari Atoll Dheknu',
                'code' => 'AAD',
                'status' => 1,
            ),
            380 => 
            array (
                'zone_id' => 1996,
                'country_id' => 130,
                'name' => 'Felidhe Atoll',
                'code' => 'FEA',
                'status' => 1,
            ),
            381 => 
            array (
                'zone_id' => 1997,
                'country_id' => 130,
                'name' => 'Mulaku Atoll',
                'code' => 'MUA',
                'status' => 1,
            ),
            382 => 
            array (
                'zone_id' => 1998,
                'country_id' => 130,
                'name' => 'Nilandhe Atoll Uthuru',
                'code' => 'NAU',
                'status' => 1,
            ),
            383 => 
            array (
                'zone_id' => 1999,
                'country_id' => 130,
                'name' => 'Nilandhe Atoll Dhekunu',
                'code' => 'NAD',
                'status' => 1,
            ),
            384 => 
            array (
                'zone_id' => 2000,
                'country_id' => 130,
                'name' => 'Kolhumadulu',
                'code' => 'KLH',
                'status' => 1,
            ),
            385 => 
            array (
                'zone_id' => 2001,
                'country_id' => 130,
                'name' => 'Hadhdhunmathi',
                'code' => 'HDH',
                'status' => 1,
            ),
            386 => 
            array (
                'zone_id' => 2002,
                'country_id' => 130,
                'name' => 'Huvadhu Atoll Uthuru',
                'code' => 'HAU',
                'status' => 1,
            ),
            387 => 
            array (
                'zone_id' => 2003,
                'country_id' => 130,
                'name' => 'Huvadhu Atoll Dhekunu',
                'code' => 'HAD',
                'status' => 1,
            ),
            388 => 
            array (
                'zone_id' => 2004,
                'country_id' => 130,
                'name' => 'Fua Mulaku',
                'code' => 'FMU',
                'status' => 1,
            ),
            389 => 
            array (
                'zone_id' => 2005,
                'country_id' => 130,
                'name' => 'Addu',
                'code' => 'ADD',
                'status' => 1,
            ),
            390 => 
            array (
                'zone_id' => 2006,
                'country_id' => 131,
                'name' => 'Gao',
                'code' => 'GA',
                'status' => 1,
            ),
            391 => 
            array (
                'zone_id' => 2007,
                'country_id' => 131,
                'name' => 'Kayes',
                'code' => 'KY',
                'status' => 1,
            ),
            392 => 
            array (
                'zone_id' => 2008,
                'country_id' => 131,
                'name' => 'Kidal',
                'code' => 'KD',
                'status' => 1,
            ),
            393 => 
            array (
                'zone_id' => 2009,
                'country_id' => 131,
                'name' => 'Koulikoro',
                'code' => 'KL',
                'status' => 1,
            ),
            394 => 
            array (
                'zone_id' => 2010,
                'country_id' => 131,
                'name' => 'Mopti',
                'code' => 'MP',
                'status' => 1,
            ),
            395 => 
            array (
                'zone_id' => 2011,
                'country_id' => 131,
                'name' => 'Segou',
                'code' => 'SG',
                'status' => 1,
            ),
            396 => 
            array (
                'zone_id' => 2012,
                'country_id' => 131,
                'name' => 'Sikasso',
                'code' => 'SK',
                'status' => 1,
            ),
            397 => 
            array (
                'zone_id' => 2013,
                'country_id' => 131,
                'name' => 'Tombouctou',
                'code' => 'TB',
                'status' => 1,
            ),
            398 => 
            array (
                'zone_id' => 2014,
                'country_id' => 131,
                'name' => 'Bamako Capital District',
                'code' => 'CD',
                'status' => 1,
            ),
            399 => 
            array (
                'zone_id' => 2015,
                'country_id' => 132,
                'name' => 'Attard',
                'code' => 'ATT',
                'status' => 1,
            ),
            400 => 
            array (
                'zone_id' => 2016,
                'country_id' => 132,
                'name' => 'Balzan',
                'code' => 'BAL',
                'status' => 1,
            ),
            401 => 
            array (
                'zone_id' => 2017,
                'country_id' => 132,
                'name' => 'Birgu',
                'code' => 'BGU',
                'status' => 1,
            ),
            402 => 
            array (
                'zone_id' => 2018,
                'country_id' => 132,
                'name' => 'Birkirkara',
                'code' => 'BKK',
                'status' => 1,
            ),
            403 => 
            array (
                'zone_id' => 2019,
                'country_id' => 132,
                'name' => 'Birzebbuga',
                'code' => 'BRZ',
                'status' => 1,
            ),
            404 => 
            array (
                'zone_id' => 2020,
                'country_id' => 132,
                'name' => 'Bormla',
                'code' => 'BOR',
                'status' => 1,
            ),
            405 => 
            array (
                'zone_id' => 2021,
                'country_id' => 132,
                'name' => 'Dingli',
                'code' => 'DIN',
                'status' => 1,
            ),
            406 => 
            array (
                'zone_id' => 2022,
                'country_id' => 132,
                'name' => 'Fgura',
                'code' => 'FGU',
                'status' => 1,
            ),
            407 => 
            array (
                'zone_id' => 2023,
                'country_id' => 132,
                'name' => 'Floriana',
                'code' => 'FLO',
                'status' => 1,
            ),
            408 => 
            array (
                'zone_id' => 2024,
                'country_id' => 132,
                'name' => 'Gudja',
                'code' => 'GDJ',
                'status' => 1,
            ),
            409 => 
            array (
                'zone_id' => 2025,
                'country_id' => 132,
                'name' => 'Gzira',
                'code' => 'GZR',
                'status' => 1,
            ),
            410 => 
            array (
                'zone_id' => 2026,
                'country_id' => 132,
                'name' => 'Gargur',
                'code' => 'GRG',
                'status' => 1,
            ),
            411 => 
            array (
                'zone_id' => 2027,
                'country_id' => 132,
                'name' => 'Gaxaq',
                'code' => 'GXQ',
                'status' => 1,
            ),
            412 => 
            array (
                'zone_id' => 2028,
                'country_id' => 132,
                'name' => 'Hamrun',
                'code' => 'HMR',
                'status' => 1,
            ),
            413 => 
            array (
                'zone_id' => 2029,
                'country_id' => 132,
                'name' => 'Iklin',
                'code' => 'IKL',
                'status' => 1,
            ),
            414 => 
            array (
                'zone_id' => 2030,
                'country_id' => 132,
                'name' => 'Isla',
                'code' => 'ISL',
                'status' => 1,
            ),
            415 => 
            array (
                'zone_id' => 2031,
                'country_id' => 132,
                'name' => 'Kalkara',
                'code' => 'KLK',
                'status' => 1,
            ),
            416 => 
            array (
                'zone_id' => 2032,
                'country_id' => 132,
                'name' => 'Kirkop',
                'code' => 'KRK',
                'status' => 1,
            ),
            417 => 
            array (
                'zone_id' => 2033,
                'country_id' => 132,
                'name' => 'Lija',
                'code' => 'LIJ',
                'status' => 1,
            ),
            418 => 
            array (
                'zone_id' => 2034,
                'country_id' => 132,
                'name' => 'Luqa',
                'code' => 'LUQ',
                'status' => 1,
            ),
            419 => 
            array (
                'zone_id' => 2035,
                'country_id' => 132,
                'name' => 'Marsa',
                'code' => 'MRS',
                'status' => 1,
            ),
            420 => 
            array (
                'zone_id' => 2036,
                'country_id' => 132,
                'name' => 'Marsaskala',
                'code' => 'MKL',
                'status' => 1,
            ),
            421 => 
            array (
                'zone_id' => 2037,
                'country_id' => 132,
                'name' => 'Marsaxlokk',
                'code' => 'MXL',
                'status' => 1,
            ),
            422 => 
            array (
                'zone_id' => 2038,
                'country_id' => 132,
                'name' => 'Mdina',
                'code' => 'MDN',
                'status' => 1,
            ),
            423 => 
            array (
                'zone_id' => 2039,
                'country_id' => 132,
                'name' => 'Melliea',
                'code' => 'MEL',
                'status' => 1,
            ),
            424 => 
            array (
                'zone_id' => 2040,
                'country_id' => 132,
                'name' => 'Mgarr',
                'code' => 'MGR',
                'status' => 1,
            ),
            425 => 
            array (
                'zone_id' => 2041,
                'country_id' => 132,
                'name' => 'Mosta',
                'code' => 'MST',
                'status' => 1,
            ),
            426 => 
            array (
                'zone_id' => 2042,
                'country_id' => 132,
                'name' => 'Mqabba',
                'code' => 'MQA',
                'status' => 1,
            ),
            427 => 
            array (
                'zone_id' => 2043,
                'country_id' => 132,
                'name' => 'Msida',
                'code' => 'MSI',
                'status' => 1,
            ),
            428 => 
            array (
                'zone_id' => 2044,
                'country_id' => 132,
                'name' => 'Mtarfa',
                'code' => 'MTF',
                'status' => 1,
            ),
            429 => 
            array (
                'zone_id' => 2045,
                'country_id' => 132,
                'name' => 'Naxxar',
                'code' => 'NAX',
                'status' => 1,
            ),
            430 => 
            array (
                'zone_id' => 2046,
                'country_id' => 132,
                'name' => 'Paola',
                'code' => 'PAO',
                'status' => 1,
            ),
            431 => 
            array (
                'zone_id' => 2047,
                'country_id' => 132,
                'name' => 'Pembroke',
                'code' => 'PEM',
                'status' => 1,
            ),
            432 => 
            array (
                'zone_id' => 2048,
                'country_id' => 132,
                'name' => 'Pieta',
                'code' => 'PIE',
                'status' => 1,
            ),
            433 => 
            array (
                'zone_id' => 2049,
                'country_id' => 132,
                'name' => 'Qormi',
                'code' => 'QOR',
                'status' => 1,
            ),
            434 => 
            array (
                'zone_id' => 2050,
                'country_id' => 132,
                'name' => 'Qrendi',
                'code' => 'QRE',
                'status' => 1,
            ),
            435 => 
            array (
                'zone_id' => 2051,
                'country_id' => 132,
                'name' => 'Rabat',
                'code' => 'RAB',
                'status' => 1,
            ),
            436 => 
            array (
                'zone_id' => 2052,
                'country_id' => 132,
                'name' => 'Safi',
                'code' => 'SAF',
                'status' => 1,
            ),
            437 => 
            array (
                'zone_id' => 2053,
                'country_id' => 132,
                'name' => 'San Giljan',
                'code' => 'SGI',
                'status' => 1,
            ),
            438 => 
            array (
                'zone_id' => 2054,
                'country_id' => 132,
                'name' => 'Santa Lucija',
                'code' => 'SLU',
                'status' => 1,
            ),
            439 => 
            array (
                'zone_id' => 2055,
                'country_id' => 132,
                'name' => 'San Pawl il-Bahar',
                'code' => 'SPB',
                'status' => 1,
            ),
            440 => 
            array (
                'zone_id' => 2056,
                'country_id' => 132,
                'name' => 'San Gwann',
                'code' => 'SGW',
                'status' => 1,
            ),
            441 => 
            array (
                'zone_id' => 2057,
                'country_id' => 132,
                'name' => 'Santa Venera',
                'code' => 'SVE',
                'status' => 1,
            ),
            442 => 
            array (
                'zone_id' => 2058,
                'country_id' => 132,
                'name' => 'Siggiewi',
                'code' => 'SIG',
                'status' => 1,
            ),
            443 => 
            array (
                'zone_id' => 2059,
                'country_id' => 132,
                'name' => 'Sliema',
                'code' => 'SLM',
                'status' => 1,
            ),
            444 => 
            array (
                'zone_id' => 2060,
                'country_id' => 132,
                'name' => 'Swieqi',
                'code' => 'SWQ',
                'status' => 1,
            ),
            445 => 
            array (
                'zone_id' => 2061,
                'country_id' => 132,
                'name' => 'Ta Xbiex',
                'code' => 'TXB',
                'status' => 1,
            ),
            446 => 
            array (
                'zone_id' => 2062,
                'country_id' => 132,
                'name' => 'Tarxien',
                'code' => 'TRX',
                'status' => 1,
            ),
            447 => 
            array (
                'zone_id' => 2063,
                'country_id' => 132,
                'name' => 'Valletta',
                'code' => 'VLT',
                'status' => 1,
            ),
            448 => 
            array (
                'zone_id' => 2064,
                'country_id' => 132,
                'name' => 'Xgajra',
                'code' => 'XGJ',
                'status' => 1,
            ),
            449 => 
            array (
                'zone_id' => 2065,
                'country_id' => 132,
                'name' => 'Zabbar',
                'code' => 'ZBR',
                'status' => 1,
            ),
            450 => 
            array (
                'zone_id' => 2066,
                'country_id' => 132,
                'name' => 'Zebbug',
                'code' => 'ZBG',
                'status' => 1,
            ),
            451 => 
            array (
                'zone_id' => 2067,
                'country_id' => 132,
                'name' => 'Zejtun',
                'code' => 'ZJT',
                'status' => 1,
            ),
            452 => 
            array (
                'zone_id' => 2068,
                'country_id' => 132,
                'name' => 'Zurrieq',
                'code' => 'ZRQ',
                'status' => 1,
            ),
            453 => 
            array (
                'zone_id' => 2069,
                'country_id' => 132,
                'name' => 'Fontana',
                'code' => 'FNT',
                'status' => 1,
            ),
            454 => 
            array (
                'zone_id' => 2070,
                'country_id' => 132,
                'name' => 'Ghajnsielem',
                'code' => 'GHJ',
                'status' => 1,
            ),
            455 => 
            array (
                'zone_id' => 2071,
                'country_id' => 132,
                'name' => 'Gharb',
                'code' => 'GHR',
                'status' => 1,
            ),
            456 => 
            array (
                'zone_id' => 2072,
                'country_id' => 132,
                'name' => 'Ghasri',
                'code' => 'GHS',
                'status' => 1,
            ),
            457 => 
            array (
                'zone_id' => 2073,
                'country_id' => 132,
                'name' => 'Kercem',
                'code' => 'KRC',
                'status' => 1,
            ),
            458 => 
            array (
                'zone_id' => 2074,
                'country_id' => 132,
                'name' => 'Munxar',
                'code' => 'MUN',
                'status' => 1,
            ),
            459 => 
            array (
                'zone_id' => 2075,
                'country_id' => 132,
                'name' => 'Nadur',
                'code' => 'NAD',
                'status' => 1,
            ),
            460 => 
            array (
                'zone_id' => 2076,
                'country_id' => 132,
                'name' => 'Qala',
                'code' => 'QAL',
                'status' => 1,
            ),
            461 => 
            array (
                'zone_id' => 2077,
                'country_id' => 132,
                'name' => 'Victoria',
                'code' => 'VIC',
                'status' => 1,
            ),
            462 => 
            array (
                'zone_id' => 2078,
                'country_id' => 132,
                'name' => 'San Lawrenz',
                'code' => 'SLA',
                'status' => 1,
            ),
            463 => 
            array (
                'zone_id' => 2079,
                'country_id' => 132,
                'name' => 'Sannat',
                'code' => 'SNT',
                'status' => 1,
            ),
            464 => 
            array (
                'zone_id' => 2080,
                'country_id' => 132,
                'name' => 'Xagra',
                'code' => 'ZAG',
                'status' => 1,
            ),
            465 => 
            array (
                'zone_id' => 2081,
                'country_id' => 132,
                'name' => 'Xewkija',
                'code' => 'XEW',
                'status' => 1,
            ),
            466 => 
            array (
                'zone_id' => 2082,
                'country_id' => 132,
                'name' => 'Zebbug',
                'code' => 'ZEB',
                'status' => 1,
            ),
            467 => 
            array (
                'zone_id' => 2083,
                'country_id' => 133,
                'name' => 'Ailinginae',
                'code' => 'ALG',
                'status' => 1,
            ),
            468 => 
            array (
                'zone_id' => 2084,
                'country_id' => 133,
                'name' => 'Ailinglaplap',
                'code' => 'ALL',
                'status' => 1,
            ),
            469 => 
            array (
                'zone_id' => 2085,
                'country_id' => 133,
                'name' => 'Ailuk',
                'code' => 'ALK',
                'status' => 1,
            ),
            470 => 
            array (
                'zone_id' => 2086,
                'country_id' => 133,
                'name' => 'Arno',
                'code' => 'ARN',
                'status' => 1,
            ),
            471 => 
            array (
                'zone_id' => 2087,
                'country_id' => 133,
                'name' => 'Aur',
                'code' => 'AUR',
                'status' => 1,
            ),
            472 => 
            array (
                'zone_id' => 2088,
                'country_id' => 133,
                'name' => 'Bikar',
                'code' => 'BKR',
                'status' => 1,
            ),
            473 => 
            array (
                'zone_id' => 2089,
                'country_id' => 133,
                'name' => 'Bikini',
                'code' => 'BKN',
                'status' => 1,
            ),
            474 => 
            array (
                'zone_id' => 2090,
                'country_id' => 133,
                'name' => 'Bokak',
                'code' => 'BKK',
                'status' => 1,
            ),
            475 => 
            array (
                'zone_id' => 2091,
                'country_id' => 133,
                'name' => 'Ebon',
                'code' => 'EBN',
                'status' => 1,
            ),
            476 => 
            array (
                'zone_id' => 2092,
                'country_id' => 133,
                'name' => 'Enewetak',
                'code' => 'ENT',
                'status' => 1,
            ),
            477 => 
            array (
                'zone_id' => 2093,
                'country_id' => 133,
                'name' => 'Erikub',
                'code' => 'EKB',
                'status' => 1,
            ),
            478 => 
            array (
                'zone_id' => 2094,
                'country_id' => 133,
                'name' => 'Jabat',
                'code' => 'JBT',
                'status' => 1,
            ),
            479 => 
            array (
                'zone_id' => 2095,
                'country_id' => 133,
                'name' => 'Jaluit',
                'code' => 'JLT',
                'status' => 1,
            ),
            480 => 
            array (
                'zone_id' => 2096,
                'country_id' => 133,
                'name' => 'Jemo',
                'code' => 'JEM',
                'status' => 1,
            ),
            481 => 
            array (
                'zone_id' => 2097,
                'country_id' => 133,
                'name' => 'Kili',
                'code' => 'KIL',
                'status' => 1,
            ),
            482 => 
            array (
                'zone_id' => 2098,
                'country_id' => 133,
                'name' => 'Kwajalein',
                'code' => 'KWJ',
                'status' => 1,
            ),
            483 => 
            array (
                'zone_id' => 2099,
                'country_id' => 133,
                'name' => 'Lae',
                'code' => 'LAE',
                'status' => 1,
            ),
            484 => 
            array (
                'zone_id' => 2100,
                'country_id' => 133,
                'name' => 'Lib',
                'code' => 'LIB',
                'status' => 1,
            ),
            485 => 
            array (
                'zone_id' => 2101,
                'country_id' => 133,
                'name' => 'Likiep',
                'code' => 'LKP',
                'status' => 1,
            ),
            486 => 
            array (
                'zone_id' => 2102,
                'country_id' => 133,
                'name' => 'Majuro',
                'code' => 'MJR',
                'status' => 1,
            ),
            487 => 
            array (
                'zone_id' => 2103,
                'country_id' => 133,
                'name' => 'Maloelap',
                'code' => 'MLP',
                'status' => 1,
            ),
            488 => 
            array (
                'zone_id' => 2104,
                'country_id' => 133,
                'name' => 'Mejit',
                'code' => 'MJT',
                'status' => 1,
            ),
            489 => 
            array (
                'zone_id' => 2105,
                'country_id' => 133,
                'name' => 'Mili',
                'code' => 'MIL',
                'status' => 1,
            ),
            490 => 
            array (
                'zone_id' => 2106,
                'country_id' => 133,
                'name' => 'Namorik',
                'code' => 'NMK',
                'status' => 1,
            ),
            491 => 
            array (
                'zone_id' => 2107,
                'country_id' => 133,
                'name' => 'Namu',
                'code' => 'NAM',
                'status' => 1,
            ),
            492 => 
            array (
                'zone_id' => 2108,
                'country_id' => 133,
                'name' => 'Rongelap',
                'code' => 'RGL',
                'status' => 1,
            ),
            493 => 
            array (
                'zone_id' => 2109,
                'country_id' => 133,
                'name' => 'Rongrik',
                'code' => 'RGK',
                'status' => 1,
            ),
            494 => 
            array (
                'zone_id' => 2110,
                'country_id' => 133,
                'name' => 'Toke',
                'code' => 'TOK',
                'status' => 1,
            ),
            495 => 
            array (
                'zone_id' => 2111,
                'country_id' => 133,
                'name' => 'Ujae',
                'code' => 'UJA',
                'status' => 1,
            ),
            496 => 
            array (
                'zone_id' => 2112,
                'country_id' => 133,
                'name' => 'Ujelang',
                'code' => 'UJL',
                'status' => 1,
            ),
            497 => 
            array (
                'zone_id' => 2113,
                'country_id' => 133,
                'name' => 'Utirik',
                'code' => 'UTK',
                'status' => 1,
            ),
            498 => 
            array (
                'zone_id' => 2114,
                'country_id' => 133,
                'name' => 'Wotho',
                'code' => 'WTH',
                'status' => 1,
            ),
            499 => 
            array (
                'zone_id' => 2115,
                'country_id' => 133,
                'name' => 'Wotje',
                'code' => 'WTJ',
                'status' => 1,
            ),
        ));
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 2116,
                'country_id' => 135,
                'name' => 'Adrar',
                'code' => 'AD',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 2117,
                'country_id' => 135,
                'name' => 'Assaba',
                'code' => 'AS',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 2118,
                'country_id' => 135,
                'name' => 'Brakna',
                'code' => 'BR',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 2119,
                'country_id' => 135,
                'name' => 'Dakhlet Nouadhibou',
                'code' => 'DN',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 2120,
                'country_id' => 135,
                'name' => 'Gorgol',
                'code' => 'GO',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 2121,
                'country_id' => 135,
                'name' => 'Guidimaka',
                'code' => 'GM',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 2122,
                'country_id' => 135,
                'name' => 'Hodh Ech Chargui',
                'code' => 'HC',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 2123,
                'country_id' => 135,
                'name' => 'Hodh El Gharbi',
                'code' => 'HG',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 2124,
                'country_id' => 135,
                'name' => 'Inchiri',
                'code' => 'IN',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 2125,
                'country_id' => 135,
                'name' => 'Tagant',
                'code' => 'TA',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 2126,
                'country_id' => 135,
                'name' => 'Tiris Zemmour',
                'code' => 'TZ',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 2127,
                'country_id' => 135,
                'name' => 'Trarza',
                'code' => 'TR',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 2128,
                'country_id' => 135,
                'name' => 'Nouakchott',
                'code' => 'NO',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 2129,
                'country_id' => 136,
                'name' => 'Beau Bassin-Rose Hill',
                'code' => 'BR',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 2130,
                'country_id' => 136,
                'name' => 'Curepipe',
                'code' => 'CU',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 2131,
                'country_id' => 136,
                'name' => 'Port Louis',
                'code' => 'PU',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 2132,
                'country_id' => 136,
                'name' => 'Quatre Bornes',
                'code' => 'QB',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 2133,
                'country_id' => 136,
                'name' => 'Vacoas-Phoenix',
                'code' => 'VP',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 2134,
                'country_id' => 136,
                'name' => 'Agalega Islands',
                'code' => 'AG',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 2135,
                'country_id' => 136,
            'name' => 'Cargados Carajos Shoals (Saint Brandon Islands)',
                'code' => 'CC',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 2136,
                'country_id' => 136,
                'name' => 'Rodrigues',
                'code' => 'RO',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 2137,
                'country_id' => 136,
                'name' => 'Black River',
                'code' => 'BL',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 2138,
                'country_id' => 136,
                'name' => 'Flacq',
                'code' => 'FL',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 2139,
                'country_id' => 136,
                'name' => 'Grand Port',
                'code' => 'GP',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 2140,
                'country_id' => 136,
                'name' => 'Moka',
                'code' => 'MO',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 2141,
                'country_id' => 136,
                'name' => 'Pamplemousses',
                'code' => 'PA',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 2142,
                'country_id' => 136,
                'name' => 'Plaines Wilhems',
                'code' => 'PW',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 2143,
                'country_id' => 136,
                'name' => 'Port Louis',
                'code' => 'PL',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 2144,
                'country_id' => 136,
                'name' => 'Riviere du Rempart',
                'code' => 'RR',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 2145,
                'country_id' => 136,
                'name' => 'Savanne',
                'code' => 'SA',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 2146,
                'country_id' => 138,
                'name' => 'Baja California Norte',
                'code' => 'BN',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 2147,
                'country_id' => 138,
                'name' => 'Baja California Sur',
                'code' => 'BS',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 2148,
                'country_id' => 138,
                'name' => 'Campeche',
                'code' => 'CA',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 2149,
                'country_id' => 138,
                'name' => 'Chiapas',
                'code' => 'CI',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 2150,
                'country_id' => 138,
                'name' => 'Chihuahua',
                'code' => 'CH',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 2151,
                'country_id' => 138,
                'name' => 'Coahuila de Zaragoza',
                'code' => 'CZ',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 2152,
                'country_id' => 138,
                'name' => 'Colima',
                'code' => 'CL',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 2153,
                'country_id' => 138,
                'name' => 'Distrito Federal',
                'code' => 'DF',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 2154,
                'country_id' => 138,
                'name' => 'Durango',
                'code' => 'DU',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 2155,
                'country_id' => 138,
                'name' => 'Guanajuato',
                'code' => 'GA',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 2156,
                'country_id' => 138,
                'name' => 'Guerrero',
                'code' => 'GE',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 2157,
                'country_id' => 138,
                'name' => 'Hidalgo',
                'code' => 'HI',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 2158,
                'country_id' => 138,
                'name' => 'Jalisco',
                'code' => 'JA',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 2159,
                'country_id' => 138,
                'name' => 'Mexico',
                'code' => 'ME',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 2160,
                'country_id' => 138,
                'name' => 'Michoacan de Ocampo',
                'code' => 'MI',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 2161,
                'country_id' => 138,
                'name' => 'Morelos',
                'code' => 'MO',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 2162,
                'country_id' => 138,
                'name' => 'Nayarit',
                'code' => 'NA',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 2163,
                'country_id' => 138,
                'name' => 'Nuevo Leon',
                'code' => 'NL',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 2164,
                'country_id' => 138,
                'name' => 'Oaxaca',
                'code' => 'OA',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 2165,
                'country_id' => 138,
                'name' => 'Puebla',
                'code' => 'PU',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 2166,
                'country_id' => 138,
                'name' => 'Queretaro de Arteaga',
                'code' => 'QA',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 2167,
                'country_id' => 138,
                'name' => 'Quintana Roo',
                'code' => 'QR',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 2168,
                'country_id' => 138,
                'name' => 'San Luis Potosi',
                'code' => 'SA',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 2169,
                'country_id' => 138,
                'name' => 'Sinaloa',
                'code' => 'SI',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 2170,
                'country_id' => 138,
                'name' => 'Sonora',
                'code' => 'SO',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 2171,
                'country_id' => 138,
                'name' => 'Tabasco',
                'code' => 'TB',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 2172,
                'country_id' => 138,
                'name' => 'Tamaulipas',
                'code' => 'TM',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 2173,
                'country_id' => 138,
                'name' => 'Tlaxcala',
                'code' => 'TL',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 2174,
                'country_id' => 138,
                'name' => 'Veracruz-Llave',
                'code' => 'VE',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 2175,
                'country_id' => 138,
                'name' => 'Yucatan',
                'code' => 'YU',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 2176,
                'country_id' => 138,
                'name' => 'Zacatecas',
                'code' => 'ZA',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 2177,
                'country_id' => 139,
                'name' => 'Chuuk',
                'code' => 'C',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 2178,
                'country_id' => 139,
                'name' => 'Kosrae',
                'code' => 'K',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 2179,
                'country_id' => 139,
                'name' => 'Pohnpei',
                'code' => 'P',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 2180,
                'country_id' => 139,
                'name' => 'Yap',
                'code' => 'Y',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 2181,
                'country_id' => 140,
                'name' => 'Gagauzia',
                'code' => 'GA',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 2182,
                'country_id' => 140,
                'name' => 'Chisinau',
                'code' => 'CU',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 2183,
                'country_id' => 140,
                'name' => 'Balti',
                'code' => 'BA',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 2184,
                'country_id' => 140,
                'name' => 'Cahul',
                'code' => 'CA',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 2185,
                'country_id' => 140,
                'name' => 'Edinet',
                'code' => 'ED',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 2186,
                'country_id' => 140,
                'name' => 'Lapusna',
                'code' => 'LA',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 2187,
                'country_id' => 140,
                'name' => 'Orhei',
                'code' => 'OR',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 2188,
                'country_id' => 140,
                'name' => 'Soroca',
                'code' => 'SO',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 2189,
                'country_id' => 140,
                'name' => 'Tighina',
                'code' => 'TI',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 2190,
                'country_id' => 140,
                'name' => 'Ungheni',
                'code' => 'UN',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 2191,
                'country_id' => 140,
                'name' => 'St‚nga Nistrului',
                'code' => 'SN',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 2192,
                'country_id' => 141,
                'name' => 'Fontvieille',
                'code' => 'FV',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 2193,
                'country_id' => 141,
                'name' => 'La Condamine',
                'code' => 'LC',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 2194,
                'country_id' => 141,
                'name' => 'Monaco-Ville',
                'code' => 'MV',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 2195,
                'country_id' => 141,
                'name' => 'Monte-Carlo',
                'code' => 'MC',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 2196,
                'country_id' => 142,
                'name' => 'Ulanbaatar',
                'code' => '1',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 2197,
                'country_id' => 142,
                'name' => 'Orhon',
                'code' => '035',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 2198,
                'country_id' => 142,
                'name' => 'Darhan uul',
                'code' => '037',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 2199,
                'country_id' => 142,
                'name' => 'Hentiy',
                'code' => '039',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 2200,
                'country_id' => 142,
                'name' => 'Hovsgol',
                'code' => '041',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 2201,
                'country_id' => 142,
                'name' => 'Hovd',
                'code' => '043',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 2202,
                'country_id' => 142,
                'name' => 'Uvs',
                'code' => '046',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 2203,
                'country_id' => 142,
                'name' => 'Tov',
                'code' => '047',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 2204,
                'country_id' => 142,
                'name' => 'Selenge',
                'code' => '049',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 2205,
                'country_id' => 142,
                'name' => 'Suhbaatar',
                'code' => '051',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 2206,
                'country_id' => 142,
                'name' => 'Omnogovi',
                'code' => '053',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 2207,
                'country_id' => 142,
                'name' => 'Ovorhangay',
                'code' => '055',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 2208,
                'country_id' => 142,
                'name' => 'Dzavhan',
                'code' => '057',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 2209,
                'country_id' => 142,
                'name' => 'DundgovL',
                'code' => '059',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 2210,
                'country_id' => 142,
                'name' => 'Dornod',
                'code' => '061',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 2211,
                'country_id' => 142,
                'name' => 'Dornogov',
                'code' => '063',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 2212,
                'country_id' => 142,
                'name' => 'Govi-Sumber',
                'code' => '064',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 2213,
                'country_id' => 142,
                'name' => 'Govi-Altay',
                'code' => '065',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 2214,
                'country_id' => 142,
                'name' => 'Bulgan',
                'code' => '067',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 2215,
                'country_id' => 142,
                'name' => 'Bayanhongor',
                'code' => '069',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 2216,
                'country_id' => 142,
                'name' => 'Bayan-Olgiy',
                'code' => '071',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 2217,
                'country_id' => 142,
                'name' => 'Arhangay',
                'code' => '073',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 2218,
                'country_id' => 143,
                'name' => 'Saint Anthony',
                'code' => 'A',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 2219,
                'country_id' => 143,
                'name' => 'Saint Georges',
                'code' => 'G',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 2220,
                'country_id' => 143,
                'name' => 'Saint Peter',
                'code' => 'P',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 2221,
                'country_id' => 144,
                'name' => 'Agadir',
                'code' => 'AGD',
                'status' => 1,
            ),
            106 => 
            array (
                'zone_id' => 2222,
                'country_id' => 144,
                'name' => 'Al Hoceima',
                'code' => 'HOC',
                'status' => 1,
            ),
            107 => 
            array (
                'zone_id' => 2223,
                'country_id' => 144,
                'name' => 'Azilal',
                'code' => 'AZI',
                'status' => 1,
            ),
            108 => 
            array (
                'zone_id' => 2224,
                'country_id' => 144,
                'name' => 'Beni Mellal',
                'code' => 'BME',
                'status' => 1,
            ),
            109 => 
            array (
                'zone_id' => 2225,
                'country_id' => 144,
                'name' => 'Ben Slimane',
                'code' => 'BSL',
                'status' => 1,
            ),
            110 => 
            array (
                'zone_id' => 2226,
                'country_id' => 144,
                'name' => 'Boulemane',
                'code' => 'BLM',
                'status' => 1,
            ),
            111 => 
            array (
                'zone_id' => 2227,
                'country_id' => 144,
                'name' => 'Casablanca',
                'code' => 'CBL',
                'status' => 1,
            ),
            112 => 
            array (
                'zone_id' => 2228,
                'country_id' => 144,
                'name' => 'Chaouen',
                'code' => 'CHA',
                'status' => 1,
            ),
            113 => 
            array (
                'zone_id' => 2229,
                'country_id' => 144,
                'name' => 'El Jadida',
                'code' => 'EJA',
                'status' => 1,
            ),
            114 => 
            array (
                'zone_id' => 2230,
                'country_id' => 144,
                'name' => 'El Kelaa des Sraghna',
                'code' => 'EKS',
                'status' => 1,
            ),
            115 => 
            array (
                'zone_id' => 2231,
                'country_id' => 144,
                'name' => 'Er Rachidia',
                'code' => 'ERA',
                'status' => 1,
            ),
            116 => 
            array (
                'zone_id' => 2232,
                'country_id' => 144,
                'name' => 'Essaouira',
                'code' => 'ESS',
                'status' => 1,
            ),
            117 => 
            array (
                'zone_id' => 2233,
                'country_id' => 144,
                'name' => 'Fes',
                'code' => 'FES',
                'status' => 1,
            ),
            118 => 
            array (
                'zone_id' => 2234,
                'country_id' => 144,
                'name' => 'Figuig',
                'code' => 'FIG',
                'status' => 1,
            ),
            119 => 
            array (
                'zone_id' => 2235,
                'country_id' => 144,
                'name' => 'Guelmim',
                'code' => 'GLM',
                'status' => 1,
            ),
            120 => 
            array (
                'zone_id' => 2236,
                'country_id' => 144,
                'name' => 'Ifrane',
                'code' => 'IFR',
                'status' => 1,
            ),
            121 => 
            array (
                'zone_id' => 2237,
                'country_id' => 144,
                'name' => 'Kenitra',
                'code' => 'KEN',
                'status' => 1,
            ),
            122 => 
            array (
                'zone_id' => 2238,
                'country_id' => 144,
                'name' => 'Khemisset',
                'code' => 'KHM',
                'status' => 1,
            ),
            123 => 
            array (
                'zone_id' => 2239,
                'country_id' => 144,
                'name' => 'Khenifra',
                'code' => 'KHN',
                'status' => 1,
            ),
            124 => 
            array (
                'zone_id' => 2240,
                'country_id' => 144,
                'name' => 'Khouribga',
                'code' => 'KHO',
                'status' => 1,
            ),
            125 => 
            array (
                'zone_id' => 2241,
                'country_id' => 144,
                'name' => 'Laayoune',
                'code' => 'LYN',
                'status' => 1,
            ),
            126 => 
            array (
                'zone_id' => 2242,
                'country_id' => 144,
                'name' => 'Larache',
                'code' => 'LAR',
                'status' => 1,
            ),
            127 => 
            array (
                'zone_id' => 2243,
                'country_id' => 144,
                'name' => 'Marrakech',
                'code' => 'MRK',
                'status' => 1,
            ),
            128 => 
            array (
                'zone_id' => 2244,
                'country_id' => 144,
                'name' => 'Meknes',
                'code' => 'MKN',
                'status' => 1,
            ),
            129 => 
            array (
                'zone_id' => 2245,
                'country_id' => 144,
                'name' => 'Nador',
                'code' => 'NAD',
                'status' => 1,
            ),
            130 => 
            array (
                'zone_id' => 2246,
                'country_id' => 144,
                'name' => 'Ouarzazate',
                'code' => 'ORZ',
                'status' => 1,
            ),
            131 => 
            array (
                'zone_id' => 2247,
                'country_id' => 144,
                'name' => 'Oujda',
                'code' => 'OUJ',
                'status' => 1,
            ),
            132 => 
            array (
                'zone_id' => 2248,
                'country_id' => 144,
                'name' => 'Rabat-Sale',
                'code' => 'RSA',
                'status' => 1,
            ),
            133 => 
            array (
                'zone_id' => 2249,
                'country_id' => 144,
                'name' => 'Safi',
                'code' => 'SAF',
                'status' => 1,
            ),
            134 => 
            array (
                'zone_id' => 2250,
                'country_id' => 144,
                'name' => 'Settat',
                'code' => 'SET',
                'status' => 1,
            ),
            135 => 
            array (
                'zone_id' => 2251,
                'country_id' => 144,
                'name' => 'Sidi Kacem',
                'code' => 'SKA',
                'status' => 1,
            ),
            136 => 
            array (
                'zone_id' => 2252,
                'country_id' => 144,
                'name' => 'Tangier',
                'code' => 'TGR',
                'status' => 1,
            ),
            137 => 
            array (
                'zone_id' => 2253,
                'country_id' => 144,
                'name' => 'Tan-Tan',
                'code' => 'TAN',
                'status' => 1,
            ),
            138 => 
            array (
                'zone_id' => 2254,
                'country_id' => 144,
                'name' => 'Taounate',
                'code' => 'TAO',
                'status' => 1,
            ),
            139 => 
            array (
                'zone_id' => 2255,
                'country_id' => 144,
                'name' => 'Taroudannt',
                'code' => 'TRD',
                'status' => 1,
            ),
            140 => 
            array (
                'zone_id' => 2256,
                'country_id' => 144,
                'name' => 'Tata',
                'code' => 'TAT',
                'status' => 1,
            ),
            141 => 
            array (
                'zone_id' => 2257,
                'country_id' => 144,
                'name' => 'Taza',
                'code' => 'TAZ',
                'status' => 1,
            ),
            142 => 
            array (
                'zone_id' => 2258,
                'country_id' => 144,
                'name' => 'Tetouan',
                'code' => 'TET',
                'status' => 1,
            ),
            143 => 
            array (
                'zone_id' => 2259,
                'country_id' => 144,
                'name' => 'Tiznit',
                'code' => 'TIZ',
                'status' => 1,
            ),
            144 => 
            array (
                'zone_id' => 2260,
                'country_id' => 144,
                'name' => 'Ad Dakhla',
                'code' => 'ADK',
                'status' => 1,
            ),
            145 => 
            array (
                'zone_id' => 2261,
                'country_id' => 144,
                'name' => 'Boujdour',
                'code' => 'BJD',
                'status' => 1,
            ),
            146 => 
            array (
                'zone_id' => 2262,
                'country_id' => 144,
                'name' => 'Es Smara',
                'code' => 'ESM',
                'status' => 1,
            ),
            147 => 
            array (
                'zone_id' => 2263,
                'country_id' => 145,
                'name' => 'Cabo Delgado',
                'code' => 'CD',
                'status' => 1,
            ),
            148 => 
            array (
                'zone_id' => 2264,
                'country_id' => 145,
                'name' => 'Gaza',
                'code' => 'GZ',
                'status' => 1,
            ),
            149 => 
            array (
                'zone_id' => 2265,
                'country_id' => 145,
                'name' => 'Inhambane',
                'code' => 'IN',
                'status' => 1,
            ),
            150 => 
            array (
                'zone_id' => 2266,
                'country_id' => 145,
                'name' => 'Manica',
                'code' => 'MN',
                'status' => 1,
            ),
            151 => 
            array (
                'zone_id' => 2267,
                'country_id' => 145,
            'name' => 'Maputo (city)',
                'code' => 'MC',
                'status' => 1,
            ),
            152 => 
            array (
                'zone_id' => 2268,
                'country_id' => 145,
                'name' => 'Maputo',
                'code' => 'MP',
                'status' => 1,
            ),
            153 => 
            array (
                'zone_id' => 2269,
                'country_id' => 145,
                'name' => 'Nampula',
                'code' => 'NA',
                'status' => 1,
            ),
            154 => 
            array (
                'zone_id' => 2270,
                'country_id' => 145,
                'name' => 'Niassa',
                'code' => 'NI',
                'status' => 1,
            ),
            155 => 
            array (
                'zone_id' => 2271,
                'country_id' => 145,
                'name' => 'Sofala',
                'code' => 'SO',
                'status' => 1,
            ),
            156 => 
            array (
                'zone_id' => 2272,
                'country_id' => 145,
                'name' => 'Tete',
                'code' => 'TE',
                'status' => 1,
            ),
            157 => 
            array (
                'zone_id' => 2273,
                'country_id' => 145,
                'name' => 'Zambezia',
                'code' => 'ZA',
                'status' => 1,
            ),
            158 => 
            array (
                'zone_id' => 2274,
                'country_id' => 146,
                'name' => 'Ayeyarwady',
                'code' => 'AY',
                'status' => 1,
            ),
            159 => 
            array (
                'zone_id' => 2275,
                'country_id' => 146,
                'name' => 'Bago',
                'code' => 'BG',
                'status' => 1,
            ),
            160 => 
            array (
                'zone_id' => 2276,
                'country_id' => 146,
                'name' => 'Magway',
                'code' => 'MG',
                'status' => 1,
            ),
            161 => 
            array (
                'zone_id' => 2277,
                'country_id' => 146,
                'name' => 'Mandalay',
                'code' => 'MD',
                'status' => 1,
            ),
            162 => 
            array (
                'zone_id' => 2278,
                'country_id' => 146,
                'name' => 'Sagaing',
                'code' => 'SG',
                'status' => 1,
            ),
            163 => 
            array (
                'zone_id' => 2279,
                'country_id' => 146,
                'name' => 'Tanintharyi',
                'code' => 'TN',
                'status' => 1,
            ),
            164 => 
            array (
                'zone_id' => 2280,
                'country_id' => 146,
                'name' => 'Yangon',
                'code' => 'YG',
                'status' => 1,
            ),
            165 => 
            array (
                'zone_id' => 2281,
                'country_id' => 146,
                'name' => 'Chin State',
                'code' => 'CH',
                'status' => 1,
            ),
            166 => 
            array (
                'zone_id' => 2282,
                'country_id' => 146,
                'name' => 'Kachin State',
                'code' => 'KC',
                'status' => 1,
            ),
            167 => 
            array (
                'zone_id' => 2283,
                'country_id' => 146,
                'name' => 'Kayah State',
                'code' => 'KH',
                'status' => 1,
            ),
            168 => 
            array (
                'zone_id' => 2284,
                'country_id' => 146,
                'name' => 'Kayin State',
                'code' => 'KN',
                'status' => 1,
            ),
            169 => 
            array (
                'zone_id' => 2285,
                'country_id' => 146,
                'name' => 'Mon State',
                'code' => 'MN',
                'status' => 1,
            ),
            170 => 
            array (
                'zone_id' => 2286,
                'country_id' => 146,
                'name' => 'Rakhine State',
                'code' => 'RK',
                'status' => 1,
            ),
            171 => 
            array (
                'zone_id' => 2287,
                'country_id' => 146,
                'name' => 'Shan State',
                'code' => 'SH',
                'status' => 1,
            ),
            172 => 
            array (
                'zone_id' => 2288,
                'country_id' => 147,
                'name' => 'Caprivi',
                'code' => 'CA',
                'status' => 1,
            ),
            173 => 
            array (
                'zone_id' => 2289,
                'country_id' => 147,
                'name' => 'Erongo',
                'code' => 'ER',
                'status' => 1,
            ),
            174 => 
            array (
                'zone_id' => 2290,
                'country_id' => 147,
                'name' => 'Hardap',
                'code' => 'HA',
                'status' => 1,
            ),
            175 => 
            array (
                'zone_id' => 2291,
                'country_id' => 147,
                'name' => 'Karas',
                'code' => 'KR',
                'status' => 1,
            ),
            176 => 
            array (
                'zone_id' => 2292,
                'country_id' => 147,
                'name' => 'Kavango',
                'code' => 'KV',
                'status' => 1,
            ),
            177 => 
            array (
                'zone_id' => 2293,
                'country_id' => 147,
                'name' => 'Khomas',
                'code' => 'KH',
                'status' => 1,
            ),
            178 => 
            array (
                'zone_id' => 2294,
                'country_id' => 147,
                'name' => 'Kunene',
                'code' => 'KU',
                'status' => 1,
            ),
            179 => 
            array (
                'zone_id' => 2295,
                'country_id' => 147,
                'name' => 'Ohangwena',
                'code' => 'OW',
                'status' => 1,
            ),
            180 => 
            array (
                'zone_id' => 2296,
                'country_id' => 147,
                'name' => 'Omaheke',
                'code' => 'OK',
                'status' => 1,
            ),
            181 => 
            array (
                'zone_id' => 2297,
                'country_id' => 147,
                'name' => 'Omusati',
                'code' => 'OT',
                'status' => 1,
            ),
            182 => 
            array (
                'zone_id' => 2298,
                'country_id' => 147,
                'name' => 'Oshana',
                'code' => 'ON',
                'status' => 1,
            ),
            183 => 
            array (
                'zone_id' => 2299,
                'country_id' => 147,
                'name' => 'Oshikoto',
                'code' => 'OO',
                'status' => 1,
            ),
            184 => 
            array (
                'zone_id' => 2300,
                'country_id' => 147,
                'name' => 'Otjozondjupa',
                'code' => 'OJ',
                'status' => 1,
            ),
            185 => 
            array (
                'zone_id' => 2301,
                'country_id' => 148,
                'name' => 'Aiwo',
                'code' => 'AO',
                'status' => 1,
            ),
            186 => 
            array (
                'zone_id' => 2302,
                'country_id' => 148,
                'name' => 'Anabar',
                'code' => 'AA',
                'status' => 1,
            ),
            187 => 
            array (
                'zone_id' => 2303,
                'country_id' => 148,
                'name' => 'Anetan',
                'code' => 'AT',
                'status' => 1,
            ),
            188 => 
            array (
                'zone_id' => 2304,
                'country_id' => 148,
                'name' => 'Anibare',
                'code' => 'AI',
                'status' => 1,
            ),
            189 => 
            array (
                'zone_id' => 2305,
                'country_id' => 148,
                'name' => 'Baiti',
                'code' => 'BA',
                'status' => 1,
            ),
            190 => 
            array (
                'zone_id' => 2306,
                'country_id' => 148,
                'name' => 'Boe',
                'code' => 'BO',
                'status' => 1,
            ),
            191 => 
            array (
                'zone_id' => 2307,
                'country_id' => 148,
                'name' => 'Buada',
                'code' => 'BU',
                'status' => 1,
            ),
            192 => 
            array (
                'zone_id' => 2308,
                'country_id' => 148,
                'name' => 'Denigomodu',
                'code' => 'DE',
                'status' => 1,
            ),
            193 => 
            array (
                'zone_id' => 2309,
                'country_id' => 148,
                'name' => 'Ewa',
                'code' => 'EW',
                'status' => 1,
            ),
            194 => 
            array (
                'zone_id' => 2310,
                'country_id' => 148,
                'name' => 'Ijuw',
                'code' => 'IJ',
                'status' => 1,
            ),
            195 => 
            array (
                'zone_id' => 2311,
                'country_id' => 148,
                'name' => 'Meneng',
                'code' => 'ME',
                'status' => 1,
            ),
            196 => 
            array (
                'zone_id' => 2312,
                'country_id' => 148,
                'name' => 'Nibok',
                'code' => 'NI',
                'status' => 1,
            ),
            197 => 
            array (
                'zone_id' => 2313,
                'country_id' => 148,
                'name' => 'Uaboe',
                'code' => 'UA',
                'status' => 1,
            ),
            198 => 
            array (
                'zone_id' => 2314,
                'country_id' => 148,
                'name' => 'Yaren',
                'code' => 'YA',
                'status' => 1,
            ),
            199 => 
            array (
                'zone_id' => 2315,
                'country_id' => 149,
                'name' => 'Bagmati',
                'code' => 'BA',
                'status' => 1,
            ),
            200 => 
            array (
                'zone_id' => 2316,
                'country_id' => 149,
                'name' => 'Bheri',
                'code' => 'BH',
                'status' => 1,
            ),
            201 => 
            array (
                'zone_id' => 2317,
                'country_id' => 149,
                'name' => 'Dhawalagiri',
                'code' => 'DH',
                'status' => 1,
            ),
            202 => 
            array (
                'zone_id' => 2318,
                'country_id' => 149,
                'name' => 'Gandaki',
                'code' => 'GA',
                'status' => 1,
            ),
            203 => 
            array (
                'zone_id' => 2319,
                'country_id' => 149,
                'name' => 'Janakpur',
                'code' => 'JA',
                'status' => 1,
            ),
            204 => 
            array (
                'zone_id' => 2320,
                'country_id' => 149,
                'name' => 'Karnali',
                'code' => 'KA',
                'status' => 1,
            ),
            205 => 
            array (
                'zone_id' => 2321,
                'country_id' => 149,
                'name' => 'Kosi',
                'code' => 'KO',
                'status' => 1,
            ),
            206 => 
            array (
                'zone_id' => 2322,
                'country_id' => 149,
                'name' => 'Lumbini',
                'code' => 'LU',
                'status' => 1,
            ),
            207 => 
            array (
                'zone_id' => 2323,
                'country_id' => 149,
                'name' => 'Mahakali',
                'code' => 'MA',
                'status' => 1,
            ),
            208 => 
            array (
                'zone_id' => 2324,
                'country_id' => 149,
                'name' => 'Mechi',
                'code' => 'ME',
                'status' => 1,
            ),
            209 => 
            array (
                'zone_id' => 2325,
                'country_id' => 149,
                'name' => 'Narayani',
                'code' => 'NA',
                'status' => 1,
            ),
            210 => 
            array (
                'zone_id' => 2326,
                'country_id' => 149,
                'name' => 'Rapti',
                'code' => 'RA',
                'status' => 1,
            ),
            211 => 
            array (
                'zone_id' => 2327,
                'country_id' => 149,
                'name' => 'Sagarmatha',
                'code' => 'SA',
                'status' => 1,
            ),
            212 => 
            array (
                'zone_id' => 2328,
                'country_id' => 149,
                'name' => 'Seti',
                'code' => 'SE',
                'status' => 1,
            ),
            213 => 
            array (
                'zone_id' => 2329,
                'country_id' => 150,
                'name' => 'Drenthe',
                'code' => 'DR',
                'status' => 1,
            ),
            214 => 
            array (
                'zone_id' => 2330,
                'country_id' => 150,
                'name' => 'Flevoland',
                'code' => 'FL',
                'status' => 1,
            ),
            215 => 
            array (
                'zone_id' => 2331,
                'country_id' => 150,
                'name' => 'Friesland',
                'code' => 'FR',
                'status' => 1,
            ),
            216 => 
            array (
                'zone_id' => 2332,
                'country_id' => 150,
                'name' => 'Gelderland',
                'code' => 'GE',
                'status' => 1,
            ),
            217 => 
            array (
                'zone_id' => 2333,
                'country_id' => 150,
                'name' => 'Groningen',
                'code' => 'GR',
                'status' => 1,
            ),
            218 => 
            array (
                'zone_id' => 2334,
                'country_id' => 150,
                'name' => 'Limburg',
                'code' => 'LI',
                'status' => 1,
            ),
            219 => 
            array (
                'zone_id' => 2335,
                'country_id' => 150,
                'name' => 'Noord Brabant',
                'code' => 'NB',
                'status' => 1,
            ),
            220 => 
            array (
                'zone_id' => 2336,
                'country_id' => 150,
                'name' => 'Noord Holland',
                'code' => 'NH',
                'status' => 1,
            ),
            221 => 
            array (
                'zone_id' => 2337,
                'country_id' => 150,
                'name' => 'Overijssel',
                'code' => 'OV',
                'status' => 1,
            ),
            222 => 
            array (
                'zone_id' => 2338,
                'country_id' => 150,
                'name' => 'Utrecht',
                'code' => 'UT',
                'status' => 1,
            ),
            223 => 
            array (
                'zone_id' => 2339,
                'country_id' => 150,
                'name' => 'Zeeland',
                'code' => 'ZE',
                'status' => 1,
            ),
            224 => 
            array (
                'zone_id' => 2340,
                'country_id' => 150,
                'name' => 'Zuid Holland',
                'code' => 'ZH',
                'status' => 1,
            ),
            225 => 
            array (
                'zone_id' => 2341,
                'country_id' => 152,
                'name' => 'Iles Loyaute',
                'code' => 'L',
                'status' => 1,
            ),
            226 => 
            array (
                'zone_id' => 2342,
                'country_id' => 152,
                'name' => 'Nord',
                'code' => 'N',
                'status' => 1,
            ),
            227 => 
            array (
                'zone_id' => 2343,
                'country_id' => 152,
                'name' => 'Sud',
                'code' => 'S',
                'status' => 1,
            ),
            228 => 
            array (
                'zone_id' => 2344,
                'country_id' => 153,
                'name' => 'Auckland',
                'code' => 'AUK',
                'status' => 1,
            ),
            229 => 
            array (
                'zone_id' => 2345,
                'country_id' => 153,
                'name' => 'Bay of Plenty',
                'code' => 'BOP',
                'status' => 1,
            ),
            230 => 
            array (
                'zone_id' => 2346,
                'country_id' => 153,
                'name' => 'Canterbury',
                'code' => 'CAN',
                'status' => 1,
            ),
            231 => 
            array (
                'zone_id' => 2347,
                'country_id' => 153,
                'name' => 'Coromandel',
                'code' => 'COR',
                'status' => 1,
            ),
            232 => 
            array (
                'zone_id' => 2348,
                'country_id' => 153,
                'name' => 'Gisborne',
                'code' => 'GIS',
                'status' => 1,
            ),
            233 => 
            array (
                'zone_id' => 2349,
                'country_id' => 153,
                'name' => 'Fiordland',
                'code' => 'FIO',
                'status' => 1,
            ),
            234 => 
            array (
                'zone_id' => 2350,
                'country_id' => 153,
                'name' => 'Hawke\'s Bay',
                'code' => 'HKB',
                'status' => 1,
            ),
            235 => 
            array (
                'zone_id' => 2351,
                'country_id' => 153,
                'name' => 'Marlborough',
                'code' => 'MBH',
                'status' => 1,
            ),
            236 => 
            array (
                'zone_id' => 2352,
                'country_id' => 153,
                'name' => 'Manawatu-Wanganui',
                'code' => 'MWT',
                'status' => 1,
            ),
            237 => 
            array (
                'zone_id' => 2353,
                'country_id' => 153,
                'name' => 'Mt Cook-Mackenzie',
                'code' => 'MCM',
                'status' => 1,
            ),
            238 => 
            array (
                'zone_id' => 2354,
                'country_id' => 153,
                'name' => 'Nelson',
                'code' => 'NSN',
                'status' => 1,
            ),
            239 => 
            array (
                'zone_id' => 2355,
                'country_id' => 153,
                'name' => 'Northland',
                'code' => 'NTL',
                'status' => 1,
            ),
            240 => 
            array (
                'zone_id' => 2356,
                'country_id' => 153,
                'name' => 'Otago',
                'code' => 'OTA',
                'status' => 1,
            ),
            241 => 
            array (
                'zone_id' => 2357,
                'country_id' => 153,
                'name' => 'Southland',
                'code' => 'STL',
                'status' => 1,
            ),
            242 => 
            array (
                'zone_id' => 2358,
                'country_id' => 153,
                'name' => 'Taranaki',
                'code' => 'TKI',
                'status' => 1,
            ),
            243 => 
            array (
                'zone_id' => 2359,
                'country_id' => 153,
                'name' => 'Wellington',
                'code' => 'WGN',
                'status' => 1,
            ),
            244 => 
            array (
                'zone_id' => 2360,
                'country_id' => 153,
                'name' => 'Waikato',
                'code' => 'WKO',
                'status' => 1,
            ),
            245 => 
            array (
                'zone_id' => 2361,
                'country_id' => 153,
                'name' => 'Wairarapa',
                'code' => 'WAI',
                'status' => 1,
            ),
            246 => 
            array (
                'zone_id' => 2362,
                'country_id' => 153,
                'name' => 'West Coast',
                'code' => 'WTC',
                'status' => 1,
            ),
            247 => 
            array (
                'zone_id' => 2363,
                'country_id' => 154,
                'name' => 'Atlantico Norte',
                'code' => 'AN',
                'status' => 1,
            ),
            248 => 
            array (
                'zone_id' => 2364,
                'country_id' => 154,
                'name' => 'Atlantico Sur',
                'code' => 'AS',
                'status' => 1,
            ),
            249 => 
            array (
                'zone_id' => 2365,
                'country_id' => 154,
                'name' => 'Boaco',
                'code' => 'BO',
                'status' => 1,
            ),
            250 => 
            array (
                'zone_id' => 2366,
                'country_id' => 154,
                'name' => 'Carazo',
                'code' => 'CA',
                'status' => 1,
            ),
            251 => 
            array (
                'zone_id' => 2367,
                'country_id' => 154,
                'name' => 'Chinandega',
                'code' => 'CI',
                'status' => 1,
            ),
            252 => 
            array (
                'zone_id' => 2368,
                'country_id' => 154,
                'name' => 'Chontales',
                'code' => 'CO',
                'status' => 1,
            ),
            253 => 
            array (
                'zone_id' => 2369,
                'country_id' => 154,
                'name' => 'Esteli',
                'code' => 'ES',
                'status' => 1,
            ),
            254 => 
            array (
                'zone_id' => 2370,
                'country_id' => 154,
                'name' => 'Granada',
                'code' => 'GR',
                'status' => 1,
            ),
            255 => 
            array (
                'zone_id' => 2371,
                'country_id' => 154,
                'name' => 'Jinotega',
                'code' => 'JI',
                'status' => 1,
            ),
            256 => 
            array (
                'zone_id' => 2372,
                'country_id' => 154,
                'name' => 'Leon',
                'code' => 'LE',
                'status' => 1,
            ),
            257 => 
            array (
                'zone_id' => 2373,
                'country_id' => 154,
                'name' => 'Madriz',
                'code' => 'MD',
                'status' => 1,
            ),
            258 => 
            array (
                'zone_id' => 2374,
                'country_id' => 154,
                'name' => 'Managua',
                'code' => 'MN',
                'status' => 1,
            ),
            259 => 
            array (
                'zone_id' => 2375,
                'country_id' => 154,
                'name' => 'Masaya',
                'code' => 'MS',
                'status' => 1,
            ),
            260 => 
            array (
                'zone_id' => 2376,
                'country_id' => 154,
                'name' => 'Matagalpa',
                'code' => 'MT',
                'status' => 1,
            ),
            261 => 
            array (
                'zone_id' => 2377,
                'country_id' => 154,
                'name' => 'Nuevo Segovia',
                'code' => 'NS',
                'status' => 1,
            ),
            262 => 
            array (
                'zone_id' => 2378,
                'country_id' => 154,
                'name' => 'Rio San Juan',
                'code' => 'RS',
                'status' => 1,
            ),
            263 => 
            array (
                'zone_id' => 2379,
                'country_id' => 154,
                'name' => 'Rivas',
                'code' => 'RI',
                'status' => 1,
            ),
            264 => 
            array (
                'zone_id' => 2380,
                'country_id' => 155,
                'name' => 'Agadez',
                'code' => 'AG',
                'status' => 1,
            ),
            265 => 
            array (
                'zone_id' => 2381,
                'country_id' => 155,
                'name' => 'Diffa',
                'code' => 'DF',
                'status' => 1,
            ),
            266 => 
            array (
                'zone_id' => 2382,
                'country_id' => 155,
                'name' => 'Dosso',
                'code' => 'DS',
                'status' => 1,
            ),
            267 => 
            array (
                'zone_id' => 2383,
                'country_id' => 155,
                'name' => 'Maradi',
                'code' => 'MA',
                'status' => 1,
            ),
            268 => 
            array (
                'zone_id' => 2384,
                'country_id' => 155,
                'name' => 'Niamey',
                'code' => 'NM',
                'status' => 1,
            ),
            269 => 
            array (
                'zone_id' => 2385,
                'country_id' => 155,
                'name' => 'Tahoua',
                'code' => 'TH',
                'status' => 1,
            ),
            270 => 
            array (
                'zone_id' => 2386,
                'country_id' => 155,
                'name' => 'Tillaberi',
                'code' => 'TL',
                'status' => 1,
            ),
            271 => 
            array (
                'zone_id' => 2387,
                'country_id' => 155,
                'name' => 'Zinder',
                'code' => 'ZD',
                'status' => 1,
            ),
            272 => 
            array (
                'zone_id' => 2388,
                'country_id' => 156,
                'name' => 'Abia',
                'code' => 'AB',
                'status' => 1,
            ),
            273 => 
            array (
                'zone_id' => 2389,
                'country_id' => 156,
                'name' => 'Abuja Federal Capital Territory',
                'code' => 'CT',
                'status' => 1,
            ),
            274 => 
            array (
                'zone_id' => 2390,
                'country_id' => 156,
                'name' => 'Adamawa',
                'code' => 'AD',
                'status' => 1,
            ),
            275 => 
            array (
                'zone_id' => 2391,
                'country_id' => 156,
                'name' => 'Akwa Ibom',
                'code' => 'AK',
                'status' => 1,
            ),
            276 => 
            array (
                'zone_id' => 2392,
                'country_id' => 156,
                'name' => 'Anambra',
                'code' => 'AN',
                'status' => 1,
            ),
            277 => 
            array (
                'zone_id' => 2393,
                'country_id' => 156,
                'name' => 'Bauchi',
                'code' => 'BC',
                'status' => 1,
            ),
            278 => 
            array (
                'zone_id' => 2394,
                'country_id' => 156,
                'name' => 'Bayelsa',
                'code' => 'BY',
                'status' => 1,
            ),
            279 => 
            array (
                'zone_id' => 2395,
                'country_id' => 156,
                'name' => 'Benue',
                'code' => 'BN',
                'status' => 1,
            ),
            280 => 
            array (
                'zone_id' => 2396,
                'country_id' => 156,
                'name' => 'Borno',
                'code' => 'BO',
                'status' => 1,
            ),
            281 => 
            array (
                'zone_id' => 2397,
                'country_id' => 156,
                'name' => 'Cross River',
                'code' => 'CR',
                'status' => 1,
            ),
            282 => 
            array (
                'zone_id' => 2398,
                'country_id' => 156,
                'name' => 'Delta',
                'code' => 'DE',
                'status' => 1,
            ),
            283 => 
            array (
                'zone_id' => 2399,
                'country_id' => 156,
                'name' => 'Ebonyi',
                'code' => 'EB',
                'status' => 1,
            ),
            284 => 
            array (
                'zone_id' => 2400,
                'country_id' => 156,
                'name' => 'Edo',
                'code' => 'ED',
                'status' => 1,
            ),
            285 => 
            array (
                'zone_id' => 2401,
                'country_id' => 156,
                'name' => 'Ekiti',
                'code' => 'EK',
                'status' => 1,
            ),
            286 => 
            array (
                'zone_id' => 2402,
                'country_id' => 156,
                'name' => 'Enugu',
                'code' => 'EN',
                'status' => 1,
            ),
            287 => 
            array (
                'zone_id' => 2403,
                'country_id' => 156,
                'name' => 'Gombe',
                'code' => 'GO',
                'status' => 1,
            ),
            288 => 
            array (
                'zone_id' => 2404,
                'country_id' => 156,
                'name' => 'Imo',
                'code' => 'IM',
                'status' => 1,
            ),
            289 => 
            array (
                'zone_id' => 2405,
                'country_id' => 156,
                'name' => 'Jigawa',
                'code' => 'JI',
                'status' => 1,
            ),
            290 => 
            array (
                'zone_id' => 2406,
                'country_id' => 156,
                'name' => 'Kaduna',
                'code' => 'KD',
                'status' => 1,
            ),
            291 => 
            array (
                'zone_id' => 2407,
                'country_id' => 156,
                'name' => 'Kano',
                'code' => 'KN',
                'status' => 1,
            ),
            292 => 
            array (
                'zone_id' => 2408,
                'country_id' => 156,
                'name' => 'Katsina',
                'code' => 'KT',
                'status' => 1,
            ),
            293 => 
            array (
                'zone_id' => 2409,
                'country_id' => 156,
                'name' => 'Kebbi',
                'code' => 'KE',
                'status' => 1,
            ),
            294 => 
            array (
                'zone_id' => 2410,
                'country_id' => 156,
                'name' => 'Kogi',
                'code' => 'KO',
                'status' => 1,
            ),
            295 => 
            array (
                'zone_id' => 2411,
                'country_id' => 156,
                'name' => 'Kwara',
                'code' => 'KW',
                'status' => 1,
            ),
            296 => 
            array (
                'zone_id' => 2412,
                'country_id' => 156,
                'name' => 'Lagos',
                'code' => 'LA',
                'status' => 1,
            ),
            297 => 
            array (
                'zone_id' => 2413,
                'country_id' => 156,
                'name' => 'Nassarawa',
                'code' => 'NA',
                'status' => 1,
            ),
            298 => 
            array (
                'zone_id' => 2414,
                'country_id' => 156,
                'name' => 'Niger',
                'code' => 'NI',
                'status' => 1,
            ),
            299 => 
            array (
                'zone_id' => 2415,
                'country_id' => 156,
                'name' => 'Ogun',
                'code' => 'OG',
                'status' => 1,
            ),
            300 => 
            array (
                'zone_id' => 2416,
                'country_id' => 156,
                'name' => 'Ondo',
                'code' => 'ONG',
                'status' => 1,
            ),
            301 => 
            array (
                'zone_id' => 2417,
                'country_id' => 156,
                'name' => 'Osun',
                'code' => 'OS',
                'status' => 1,
            ),
            302 => 
            array (
                'zone_id' => 2418,
                'country_id' => 156,
                'name' => 'Oyo',
                'code' => 'OY',
                'status' => 1,
            ),
            303 => 
            array (
                'zone_id' => 2419,
                'country_id' => 156,
                'name' => 'Plateau',
                'code' => 'PL',
                'status' => 1,
            ),
            304 => 
            array (
                'zone_id' => 2420,
                'country_id' => 156,
                'name' => 'Rivers',
                'code' => 'RI',
                'status' => 1,
            ),
            305 => 
            array (
                'zone_id' => 2421,
                'country_id' => 156,
                'name' => 'Sokoto',
                'code' => 'SO',
                'status' => 1,
            ),
            306 => 
            array (
                'zone_id' => 2422,
                'country_id' => 156,
                'name' => 'Taraba',
                'code' => 'TA',
                'status' => 1,
            ),
            307 => 
            array (
                'zone_id' => 2423,
                'country_id' => 156,
                'name' => 'Yobe',
                'code' => 'YO',
                'status' => 1,
            ),
            308 => 
            array (
                'zone_id' => 2424,
                'country_id' => 156,
                'name' => 'Zamfara',
                'code' => 'ZA',
                'status' => 1,
            ),
            309 => 
            array (
                'zone_id' => 2425,
                'country_id' => 159,
                'name' => 'Northern Islands',
                'code' => 'N',
                'status' => 1,
            ),
            310 => 
            array (
                'zone_id' => 2426,
                'country_id' => 159,
                'name' => 'Rota',
                'code' => 'R',
                'status' => 1,
            ),
            311 => 
            array (
                'zone_id' => 2427,
                'country_id' => 159,
                'name' => 'Saipan',
                'code' => 'S',
                'status' => 1,
            ),
            312 => 
            array (
                'zone_id' => 2428,
                'country_id' => 159,
                'name' => 'Tinian',
                'code' => 'T',
                'status' => 1,
            ),
            313 => 
            array (
                'zone_id' => 2429,
                'country_id' => 160,
                'name' => 'Akershus',
                'code' => 'AK',
                'status' => 1,
            ),
            314 => 
            array (
                'zone_id' => 2430,
                'country_id' => 160,
                'name' => 'Aust-Agder',
                'code' => 'AA',
                'status' => 1,
            ),
            315 => 
            array (
                'zone_id' => 2431,
                'country_id' => 160,
                'name' => 'Buskerud',
                'code' => 'BU',
                'status' => 1,
            ),
            316 => 
            array (
                'zone_id' => 2432,
                'country_id' => 160,
                'name' => 'Finnmark',
                'code' => 'FM',
                'status' => 1,
            ),
            317 => 
            array (
                'zone_id' => 2433,
                'country_id' => 160,
                'name' => 'Hedmark',
                'code' => 'HM',
                'status' => 1,
            ),
            318 => 
            array (
                'zone_id' => 2434,
                'country_id' => 160,
                'name' => 'Hordaland',
                'code' => 'HL',
                'status' => 1,
            ),
            319 => 
            array (
                'zone_id' => 2435,
                'country_id' => 160,
                'name' => 'More og Romdal',
                'code' => 'MR',
                'status' => 1,
            ),
            320 => 
            array (
                'zone_id' => 2436,
                'country_id' => 160,
                'name' => 'Nord-Trondelag',
                'code' => 'NT',
                'status' => 1,
            ),
            321 => 
            array (
                'zone_id' => 2437,
                'country_id' => 160,
                'name' => 'Nordland',
                'code' => 'NL',
                'status' => 1,
            ),
            322 => 
            array (
                'zone_id' => 2438,
                'country_id' => 160,
                'name' => 'Ostfold',
                'code' => 'OF',
                'status' => 1,
            ),
            323 => 
            array (
                'zone_id' => 2439,
                'country_id' => 160,
                'name' => 'Oppland',
                'code' => 'OP',
                'status' => 1,
            ),
            324 => 
            array (
                'zone_id' => 2440,
                'country_id' => 160,
                'name' => 'Oslo',
                'code' => 'OL',
                'status' => 1,
            ),
            325 => 
            array (
                'zone_id' => 2441,
                'country_id' => 160,
                'name' => 'Rogaland',
                'code' => 'RL',
                'status' => 1,
            ),
            326 => 
            array (
                'zone_id' => 2442,
                'country_id' => 160,
                'name' => 'Sor-Trondelag',
                'code' => 'ST',
                'status' => 1,
            ),
            327 => 
            array (
                'zone_id' => 2443,
                'country_id' => 160,
                'name' => 'Sogn og Fjordane',
                'code' => 'SJ',
                'status' => 1,
            ),
            328 => 
            array (
                'zone_id' => 2444,
                'country_id' => 160,
                'name' => 'Svalbard',
                'code' => 'SV',
                'status' => 1,
            ),
            329 => 
            array (
                'zone_id' => 2445,
                'country_id' => 160,
                'name' => 'Telemark',
                'code' => 'TM',
                'status' => 1,
            ),
            330 => 
            array (
                'zone_id' => 2446,
                'country_id' => 160,
                'name' => 'Troms',
                'code' => 'TR',
                'status' => 1,
            ),
            331 => 
            array (
                'zone_id' => 2447,
                'country_id' => 160,
                'name' => 'Vest-Agder',
                'code' => 'VA',
                'status' => 1,
            ),
            332 => 
            array (
                'zone_id' => 2448,
                'country_id' => 160,
                'name' => 'Vestfold',
                'code' => 'VF',
                'status' => 1,
            ),
            333 => 
            array (
                'zone_id' => 2449,
                'country_id' => 161,
                'name' => 'Ad Dakhiliyah',
                'code' => 'DA',
                'status' => 1,
            ),
            334 => 
            array (
                'zone_id' => 2450,
                'country_id' => 161,
                'name' => 'Al Batinah',
                'code' => 'BA',
                'status' => 1,
            ),
            335 => 
            array (
                'zone_id' => 2451,
                'country_id' => 161,
                'name' => 'Al Wusta',
                'code' => 'WU',
                'status' => 1,
            ),
            336 => 
            array (
                'zone_id' => 2452,
                'country_id' => 161,
                'name' => 'Ash Sharqiyah',
                'code' => 'SH',
                'status' => 1,
            ),
            337 => 
            array (
                'zone_id' => 2453,
                'country_id' => 161,
                'name' => 'Az Zahirah',
                'code' => 'ZA',
                'status' => 1,
            ),
            338 => 
            array (
                'zone_id' => 2454,
                'country_id' => 161,
                'name' => 'Masqat',
                'code' => 'MA',
                'status' => 1,
            ),
            339 => 
            array (
                'zone_id' => 2455,
                'country_id' => 161,
                'name' => 'Musandam',
                'code' => 'MU',
                'status' => 1,
            ),
            340 => 
            array (
                'zone_id' => 2456,
                'country_id' => 161,
                'name' => 'Zufar',
                'code' => 'ZU',
                'status' => 1,
            ),
            341 => 
            array (
                'zone_id' => 2457,
                'country_id' => 162,
                'name' => 'Balochistan',
                'code' => 'B',
                'status' => 1,
            ),
            342 => 
            array (
                'zone_id' => 2458,
                'country_id' => 162,
                'name' => 'Federally Administered Tribal Areas',
                'code' => 'T',
                'status' => 1,
            ),
            343 => 
            array (
                'zone_id' => 2459,
                'country_id' => 162,
                'name' => 'Islamabad Capital Territory',
                'code' => 'I',
                'status' => 1,
            ),
            344 => 
            array (
                'zone_id' => 2460,
                'country_id' => 162,
                'name' => 'North-West Frontier',
                'code' => 'N',
                'status' => 1,
            ),
            345 => 
            array (
                'zone_id' => 2461,
                'country_id' => 162,
                'name' => 'Punjab',
                'code' => 'P',
                'status' => 1,
            ),
            346 => 
            array (
                'zone_id' => 2462,
                'country_id' => 162,
                'name' => 'Sindh',
                'code' => 'S',
                'status' => 1,
            ),
            347 => 
            array (
                'zone_id' => 2463,
                'country_id' => 163,
                'name' => 'Aimeliik',
                'code' => 'AM',
                'status' => 1,
            ),
            348 => 
            array (
                'zone_id' => 2464,
                'country_id' => 163,
                'name' => 'Airai',
                'code' => 'AR',
                'status' => 1,
            ),
            349 => 
            array (
                'zone_id' => 2465,
                'country_id' => 163,
                'name' => 'Angaur',
                'code' => 'AN',
                'status' => 1,
            ),
            350 => 
            array (
                'zone_id' => 2466,
                'country_id' => 163,
                'name' => 'Hatohobei',
                'code' => 'HA',
                'status' => 1,
            ),
            351 => 
            array (
                'zone_id' => 2467,
                'country_id' => 163,
                'name' => 'Kayangel',
                'code' => 'KA',
                'status' => 1,
            ),
            352 => 
            array (
                'zone_id' => 2468,
                'country_id' => 163,
                'name' => 'Koror',
                'code' => 'KO',
                'status' => 1,
            ),
            353 => 
            array (
                'zone_id' => 2469,
                'country_id' => 163,
                'name' => 'Melekeok',
                'code' => 'ME',
                'status' => 1,
            ),
            354 => 
            array (
                'zone_id' => 2470,
                'country_id' => 163,
                'name' => 'Ngaraard',
                'code' => 'NA',
                'status' => 1,
            ),
            355 => 
            array (
                'zone_id' => 2471,
                'country_id' => 163,
                'name' => 'Ngarchelong',
                'code' => 'NG',
                'status' => 1,
            ),
            356 => 
            array (
                'zone_id' => 2472,
                'country_id' => 163,
                'name' => 'Ngardmau',
                'code' => 'ND',
                'status' => 1,
            ),
            357 => 
            array (
                'zone_id' => 2473,
                'country_id' => 163,
                'name' => 'Ngatpang',
                'code' => 'NT',
                'status' => 1,
            ),
            358 => 
            array (
                'zone_id' => 2474,
                'country_id' => 163,
                'name' => 'Ngchesar',
                'code' => 'NC',
                'status' => 1,
            ),
            359 => 
            array (
                'zone_id' => 2475,
                'country_id' => 163,
                'name' => 'Ngeremlengui',
                'code' => 'NR',
                'status' => 1,
            ),
            360 => 
            array (
                'zone_id' => 2476,
                'country_id' => 163,
                'name' => 'Ngiwal',
                'code' => 'NW',
                'status' => 1,
            ),
            361 => 
            array (
                'zone_id' => 2477,
                'country_id' => 163,
                'name' => 'Peleliu',
                'code' => 'PE',
                'status' => 1,
            ),
            362 => 
            array (
                'zone_id' => 2478,
                'country_id' => 163,
                'name' => 'Sonsorol',
                'code' => 'SO',
                'status' => 1,
            ),
            363 => 
            array (
                'zone_id' => 2479,
                'country_id' => 164,
                'name' => 'Bocas del Toro',
                'code' => 'BT',
                'status' => 1,
            ),
            364 => 
            array (
                'zone_id' => 2480,
                'country_id' => 164,
                'name' => 'Chiriqui',
                'code' => 'CH',
                'status' => 1,
            ),
            365 => 
            array (
                'zone_id' => 2481,
                'country_id' => 164,
                'name' => 'Cocle',
                'code' => 'CC',
                'status' => 1,
            ),
            366 => 
            array (
                'zone_id' => 2482,
                'country_id' => 164,
                'name' => 'Colon',
                'code' => 'CL',
                'status' => 1,
            ),
            367 => 
            array (
                'zone_id' => 2483,
                'country_id' => 164,
                'name' => 'Darien',
                'code' => 'DA',
                'status' => 1,
            ),
            368 => 
            array (
                'zone_id' => 2484,
                'country_id' => 164,
                'name' => 'Herrera',
                'code' => 'HE',
                'status' => 1,
            ),
            369 => 
            array (
                'zone_id' => 2485,
                'country_id' => 164,
                'name' => 'Los Santos',
                'code' => 'LS',
                'status' => 1,
            ),
            370 => 
            array (
                'zone_id' => 2486,
                'country_id' => 164,
                'name' => 'Panama',
                'code' => 'PA',
                'status' => 1,
            ),
            371 => 
            array (
                'zone_id' => 2487,
                'country_id' => 164,
                'name' => 'San Blas',
                'code' => 'SB',
                'status' => 1,
            ),
            372 => 
            array (
                'zone_id' => 2488,
                'country_id' => 164,
                'name' => 'Veraguas',
                'code' => 'VG',
                'status' => 1,
            ),
            373 => 
            array (
                'zone_id' => 2489,
                'country_id' => 165,
                'name' => 'Bougainville',
                'code' => 'BV',
                'status' => 1,
            ),
            374 => 
            array (
                'zone_id' => 2490,
                'country_id' => 165,
                'name' => 'Central',
                'code' => 'CE',
                'status' => 1,
            ),
            375 => 
            array (
                'zone_id' => 2491,
                'country_id' => 165,
                'name' => 'Chimbu',
                'code' => 'CH',
                'status' => 1,
            ),
            376 => 
            array (
                'zone_id' => 2492,
                'country_id' => 165,
                'name' => 'Eastern Highlands',
                'code' => 'EH',
                'status' => 1,
            ),
            377 => 
            array (
                'zone_id' => 2493,
                'country_id' => 165,
                'name' => 'East New Britain',
                'code' => 'EB',
                'status' => 1,
            ),
            378 => 
            array (
                'zone_id' => 2494,
                'country_id' => 165,
                'name' => 'East Sepik',
                'code' => 'ES',
                'status' => 1,
            ),
            379 => 
            array (
                'zone_id' => 2495,
                'country_id' => 165,
                'name' => 'Enga',
                'code' => 'EN',
                'status' => 1,
            ),
            380 => 
            array (
                'zone_id' => 2496,
                'country_id' => 165,
                'name' => 'Gulf',
                'code' => 'GU',
                'status' => 1,
            ),
            381 => 
            array (
                'zone_id' => 2497,
                'country_id' => 165,
                'name' => 'Madang',
                'code' => 'MD',
                'status' => 1,
            ),
            382 => 
            array (
                'zone_id' => 2498,
                'country_id' => 165,
                'name' => 'Manus',
                'code' => 'MN',
                'status' => 1,
            ),
            383 => 
            array (
                'zone_id' => 2499,
                'country_id' => 165,
                'name' => 'Milne Bay',
                'code' => 'MB',
                'status' => 1,
            ),
            384 => 
            array (
                'zone_id' => 2500,
                'country_id' => 165,
                'name' => 'Morobe',
                'code' => 'MR',
                'status' => 1,
            ),
            385 => 
            array (
                'zone_id' => 2501,
                'country_id' => 165,
                'name' => 'National Capital',
                'code' => 'NC',
                'status' => 1,
            ),
            386 => 
            array (
                'zone_id' => 2502,
                'country_id' => 165,
                'name' => 'New Ireland',
                'code' => 'NI',
                'status' => 1,
            ),
            387 => 
            array (
                'zone_id' => 2503,
                'country_id' => 165,
                'name' => 'Northern',
                'code' => 'NO',
                'status' => 1,
            ),
            388 => 
            array (
                'zone_id' => 2504,
                'country_id' => 165,
                'name' => 'Sandaun',
                'code' => 'SA',
                'status' => 1,
            ),
            389 => 
            array (
                'zone_id' => 2505,
                'country_id' => 165,
                'name' => 'Southern Highlands',
                'code' => 'SH',
                'status' => 1,
            ),
            390 => 
            array (
                'zone_id' => 2506,
                'country_id' => 165,
                'name' => 'Western',
                'code' => 'WE',
                'status' => 1,
            ),
            391 => 
            array (
                'zone_id' => 2507,
                'country_id' => 165,
                'name' => 'Western Highlands',
                'code' => 'WH',
                'status' => 1,
            ),
            392 => 
            array (
                'zone_id' => 2508,
                'country_id' => 165,
                'name' => 'West New Britain',
                'code' => 'WB',
                'status' => 1,
            ),
            393 => 
            array (
                'zone_id' => 2509,
                'country_id' => 166,
                'name' => 'Alto Paraguay',
                'code' => 'AG',
                'status' => 1,
            ),
            394 => 
            array (
                'zone_id' => 2510,
                'country_id' => 166,
                'name' => 'Alto Parana',
                'code' => 'AN',
                'status' => 1,
            ),
            395 => 
            array (
                'zone_id' => 2511,
                'country_id' => 166,
                'name' => 'Amambay',
                'code' => 'AM',
                'status' => 1,
            ),
            396 => 
            array (
                'zone_id' => 2512,
                'country_id' => 166,
                'name' => 'Asuncion',
                'code' => 'AS',
                'status' => 1,
            ),
            397 => 
            array (
                'zone_id' => 2513,
                'country_id' => 166,
                'name' => 'Boqueron',
                'code' => 'BO',
                'status' => 1,
            ),
            398 => 
            array (
                'zone_id' => 2514,
                'country_id' => 166,
                'name' => 'Caaguazu',
                'code' => 'CG',
                'status' => 1,
            ),
            399 => 
            array (
                'zone_id' => 2515,
                'country_id' => 166,
                'name' => 'Caazapa',
                'code' => 'CZ',
                'status' => 1,
            ),
            400 => 
            array (
                'zone_id' => 2516,
                'country_id' => 166,
                'name' => 'Canindeyu',
                'code' => 'CN',
                'status' => 1,
            ),
            401 => 
            array (
                'zone_id' => 2517,
                'country_id' => 166,
                'name' => 'Central',
                'code' => 'CE',
                'status' => 1,
            ),
            402 => 
            array (
                'zone_id' => 2518,
                'country_id' => 166,
                'name' => 'Concepcion',
                'code' => 'CC',
                'status' => 1,
            ),
            403 => 
            array (
                'zone_id' => 2519,
                'country_id' => 166,
                'name' => 'Cordillera',
                'code' => 'CD',
                'status' => 1,
            ),
            404 => 
            array (
                'zone_id' => 2520,
                'country_id' => 166,
                'name' => 'Guaira',
                'code' => 'GU',
                'status' => 1,
            ),
            405 => 
            array (
                'zone_id' => 2521,
                'country_id' => 166,
                'name' => 'Itapua',
                'code' => 'IT',
                'status' => 1,
            ),
            406 => 
            array (
                'zone_id' => 2522,
                'country_id' => 166,
                'name' => 'Misiones',
                'code' => 'MI',
                'status' => 1,
            ),
            407 => 
            array (
                'zone_id' => 2523,
                'country_id' => 166,
                'name' => 'Neembucu',
                'code' => 'NE',
                'status' => 1,
            ),
            408 => 
            array (
                'zone_id' => 2524,
                'country_id' => 166,
                'name' => 'Paraguari',
                'code' => 'PA',
                'status' => 1,
            ),
            409 => 
            array (
                'zone_id' => 2525,
                'country_id' => 166,
                'name' => 'Presidente Hayes',
                'code' => 'PH',
                'status' => 1,
            ),
            410 => 
            array (
                'zone_id' => 2526,
                'country_id' => 166,
                'name' => 'San Pedro',
                'code' => 'SP',
                'status' => 1,
            ),
            411 => 
            array (
                'zone_id' => 2527,
                'country_id' => 167,
                'name' => 'Amazonas',
                'code' => 'AM',
                'status' => 1,
            ),
            412 => 
            array (
                'zone_id' => 2528,
                'country_id' => 167,
                'name' => 'Ancash',
                'code' => 'AN',
                'status' => 1,
            ),
            413 => 
            array (
                'zone_id' => 2529,
                'country_id' => 167,
                'name' => 'Apurimac',
                'code' => 'AP',
                'status' => 1,
            ),
            414 => 
            array (
                'zone_id' => 2530,
                'country_id' => 167,
                'name' => 'Arequipa',
                'code' => 'AR',
                'status' => 1,
            ),
            415 => 
            array (
                'zone_id' => 2531,
                'country_id' => 167,
                'name' => 'Ayacucho',
                'code' => 'AY',
                'status' => 1,
            ),
            416 => 
            array (
                'zone_id' => 2532,
                'country_id' => 167,
                'name' => 'Cajamarca',
                'code' => 'CJ',
                'status' => 1,
            ),
            417 => 
            array (
                'zone_id' => 2533,
                'country_id' => 167,
                'name' => 'Callao',
                'code' => 'CL',
                'status' => 1,
            ),
            418 => 
            array (
                'zone_id' => 2534,
                'country_id' => 167,
                'name' => 'Cusco',
                'code' => 'CU',
                'status' => 1,
            ),
            419 => 
            array (
                'zone_id' => 2535,
                'country_id' => 167,
                'name' => 'Huancavelica',
                'code' => 'HV',
                'status' => 1,
            ),
            420 => 
            array (
                'zone_id' => 2536,
                'country_id' => 167,
                'name' => 'Huanuco',
                'code' => 'HO',
                'status' => 1,
            ),
            421 => 
            array (
                'zone_id' => 2537,
                'country_id' => 167,
                'name' => 'Ica',
                'code' => 'IC',
                'status' => 1,
            ),
            422 => 
            array (
                'zone_id' => 2538,
                'country_id' => 167,
                'name' => 'Junin',
                'code' => 'JU',
                'status' => 1,
            ),
            423 => 
            array (
                'zone_id' => 2539,
                'country_id' => 167,
                'name' => 'La Libertad',
                'code' => 'LD',
                'status' => 1,
            ),
            424 => 
            array (
                'zone_id' => 2540,
                'country_id' => 167,
                'name' => 'Lambayeque',
                'code' => 'LY',
                'status' => 1,
            ),
            425 => 
            array (
                'zone_id' => 2541,
                'country_id' => 167,
                'name' => 'Lima',
                'code' => 'LI',
                'status' => 1,
            ),
            426 => 
            array (
                'zone_id' => 2542,
                'country_id' => 167,
                'name' => 'Loreto',
                'code' => 'LO',
                'status' => 1,
            ),
            427 => 
            array (
                'zone_id' => 2543,
                'country_id' => 167,
                'name' => 'Madre de Dios',
                'code' => 'MD',
                'status' => 1,
            ),
            428 => 
            array (
                'zone_id' => 2544,
                'country_id' => 167,
                'name' => 'Moquegua',
                'code' => 'MO',
                'status' => 1,
            ),
            429 => 
            array (
                'zone_id' => 2545,
                'country_id' => 167,
                'name' => 'Pasco',
                'code' => 'PA',
                'status' => 1,
            ),
            430 => 
            array (
                'zone_id' => 2546,
                'country_id' => 167,
                'name' => 'Piura',
                'code' => 'PI',
                'status' => 1,
            ),
            431 => 
            array (
                'zone_id' => 2547,
                'country_id' => 167,
                'name' => 'Puno',
                'code' => 'PU',
                'status' => 1,
            ),
            432 => 
            array (
                'zone_id' => 2548,
                'country_id' => 167,
                'name' => 'San Martin',
                'code' => 'SM',
                'status' => 1,
            ),
            433 => 
            array (
                'zone_id' => 2549,
                'country_id' => 167,
                'name' => 'Tacna',
                'code' => 'TA',
                'status' => 1,
            ),
            434 => 
            array (
                'zone_id' => 2550,
                'country_id' => 167,
                'name' => 'Tumbes',
                'code' => 'TU',
                'status' => 1,
            ),
            435 => 
            array (
                'zone_id' => 2551,
                'country_id' => 167,
                'name' => 'Ucayali',
                'code' => 'UC',
                'status' => 1,
            ),
            436 => 
            array (
                'zone_id' => 2552,
                'country_id' => 168,
                'name' => 'Abra',
                'code' => 'ABR',
                'status' => 1,
            ),
            437 => 
            array (
                'zone_id' => 2553,
                'country_id' => 168,
                'name' => 'Agusan del Norte',
                'code' => 'ANO',
                'status' => 1,
            ),
            438 => 
            array (
                'zone_id' => 2554,
                'country_id' => 168,
                'name' => 'Agusan del Sur',
                'code' => 'ASU',
                'status' => 1,
            ),
            439 => 
            array (
                'zone_id' => 2555,
                'country_id' => 168,
                'name' => 'Aklan',
                'code' => 'AKL',
                'status' => 1,
            ),
            440 => 
            array (
                'zone_id' => 2556,
                'country_id' => 168,
                'name' => 'Albay',
                'code' => 'ALB',
                'status' => 1,
            ),
            441 => 
            array (
                'zone_id' => 2557,
                'country_id' => 168,
                'name' => 'Antique',
                'code' => 'ANT',
                'status' => 1,
            ),
            442 => 
            array (
                'zone_id' => 2558,
                'country_id' => 168,
                'name' => 'Apayao',
                'code' => 'APY',
                'status' => 1,
            ),
            443 => 
            array (
                'zone_id' => 2559,
                'country_id' => 168,
                'name' => 'Aurora',
                'code' => 'AUR',
                'status' => 1,
            ),
            444 => 
            array (
                'zone_id' => 2560,
                'country_id' => 168,
                'name' => 'Basilan',
                'code' => 'BAS',
                'status' => 1,
            ),
            445 => 
            array (
                'zone_id' => 2561,
                'country_id' => 168,
                'name' => 'Bataan',
                'code' => 'BTA',
                'status' => 1,
            ),
            446 => 
            array (
                'zone_id' => 2562,
                'country_id' => 168,
                'name' => 'Batanes',
                'code' => 'BTE',
                'status' => 1,
            ),
            447 => 
            array (
                'zone_id' => 2563,
                'country_id' => 168,
                'name' => 'Batangas',
                'code' => 'BTG',
                'status' => 1,
            ),
            448 => 
            array (
                'zone_id' => 2564,
                'country_id' => 168,
                'name' => 'Biliran',
                'code' => 'BLR',
                'status' => 1,
            ),
            449 => 
            array (
                'zone_id' => 2565,
                'country_id' => 168,
                'name' => 'Benguet',
                'code' => 'BEN',
                'status' => 1,
            ),
            450 => 
            array (
                'zone_id' => 2566,
                'country_id' => 168,
                'name' => 'Bohol',
                'code' => 'BOL',
                'status' => 1,
            ),
            451 => 
            array (
                'zone_id' => 2567,
                'country_id' => 168,
                'name' => 'Bukidnon',
                'code' => 'BUK',
                'status' => 1,
            ),
            452 => 
            array (
                'zone_id' => 2568,
                'country_id' => 168,
                'name' => 'Bulacan',
                'code' => 'BUL',
                'status' => 1,
            ),
            453 => 
            array (
                'zone_id' => 2569,
                'country_id' => 168,
                'name' => 'Cagayan',
                'code' => 'CAG',
                'status' => 1,
            ),
            454 => 
            array (
                'zone_id' => 2570,
                'country_id' => 168,
                'name' => 'Camarines Norte',
                'code' => 'CNO',
                'status' => 1,
            ),
            455 => 
            array (
                'zone_id' => 2571,
                'country_id' => 168,
                'name' => 'Camarines Sur',
                'code' => 'CSU',
                'status' => 1,
            ),
            456 => 
            array (
                'zone_id' => 2572,
                'country_id' => 168,
                'name' => 'Camiguin',
                'code' => 'CAM',
                'status' => 1,
            ),
            457 => 
            array (
                'zone_id' => 2573,
                'country_id' => 168,
                'name' => 'Capiz',
                'code' => 'CAP',
                'status' => 1,
            ),
            458 => 
            array (
                'zone_id' => 2574,
                'country_id' => 168,
                'name' => 'Catanduanes',
                'code' => 'CAT',
                'status' => 1,
            ),
            459 => 
            array (
                'zone_id' => 2575,
                'country_id' => 168,
                'name' => 'Cavite',
                'code' => 'CAV',
                'status' => 1,
            ),
            460 => 
            array (
                'zone_id' => 2576,
                'country_id' => 168,
                'name' => 'Cebu',
                'code' => 'CEB',
                'status' => 1,
            ),
            461 => 
            array (
                'zone_id' => 2577,
                'country_id' => 168,
                'name' => 'Compostela',
                'code' => 'CMP',
                'status' => 1,
            ),
            462 => 
            array (
                'zone_id' => 2578,
                'country_id' => 168,
                'name' => 'Davao del Norte',
                'code' => 'DNO',
                'status' => 1,
            ),
            463 => 
            array (
                'zone_id' => 2579,
                'country_id' => 168,
                'name' => 'Davao del Sur',
                'code' => 'DSU',
                'status' => 1,
            ),
            464 => 
            array (
                'zone_id' => 2580,
                'country_id' => 168,
                'name' => 'Davao Oriental',
                'code' => 'DOR',
                'status' => 1,
            ),
            465 => 
            array (
                'zone_id' => 2581,
                'country_id' => 168,
                'name' => 'Eastern Samar',
                'code' => 'ESA',
                'status' => 1,
            ),
            466 => 
            array (
                'zone_id' => 2582,
                'country_id' => 168,
                'name' => 'Guimaras',
                'code' => 'GUI',
                'status' => 1,
            ),
            467 => 
            array (
                'zone_id' => 2583,
                'country_id' => 168,
                'name' => 'Ifugao',
                'code' => 'IFU',
                'status' => 1,
            ),
            468 => 
            array (
                'zone_id' => 2584,
                'country_id' => 168,
                'name' => 'Ilocos Norte',
                'code' => 'INO',
                'status' => 1,
            ),
            469 => 
            array (
                'zone_id' => 2585,
                'country_id' => 168,
                'name' => 'Ilocos Sur',
                'code' => 'ISU',
                'status' => 1,
            ),
            470 => 
            array (
                'zone_id' => 2586,
                'country_id' => 168,
                'name' => 'Iloilo',
                'code' => 'ILO',
                'status' => 1,
            ),
            471 => 
            array (
                'zone_id' => 2587,
                'country_id' => 168,
                'name' => 'Isabela',
                'code' => 'ISA',
                'status' => 1,
            ),
            472 => 
            array (
                'zone_id' => 2588,
                'country_id' => 168,
                'name' => 'Kalinga',
                'code' => 'KAL',
                'status' => 1,
            ),
            473 => 
            array (
                'zone_id' => 2589,
                'country_id' => 168,
                'name' => 'Laguna',
                'code' => 'LAG',
                'status' => 1,
            ),
            474 => 
            array (
                'zone_id' => 2590,
                'country_id' => 168,
                'name' => 'Lanao del Norte',
                'code' => 'LNO',
                'status' => 1,
            ),
            475 => 
            array (
                'zone_id' => 2591,
                'country_id' => 168,
                'name' => 'Lanao del Sur',
                'code' => 'LSU',
                'status' => 1,
            ),
            476 => 
            array (
                'zone_id' => 2592,
                'country_id' => 168,
                'name' => 'La Union',
                'code' => 'UNI',
                'status' => 1,
            ),
            477 => 
            array (
                'zone_id' => 2593,
                'country_id' => 168,
                'name' => 'Leyte',
                'code' => 'LEY',
                'status' => 1,
            ),
            478 => 
            array (
                'zone_id' => 2594,
                'country_id' => 168,
                'name' => 'Maguindanao',
                'code' => 'MAG',
                'status' => 1,
            ),
            479 => 
            array (
                'zone_id' => 2595,
                'country_id' => 168,
                'name' => 'Marinduque',
                'code' => 'MRN',
                'status' => 1,
            ),
            480 => 
            array (
                'zone_id' => 2596,
                'country_id' => 168,
                'name' => 'Masbate',
                'code' => 'MSB',
                'status' => 1,
            ),
            481 => 
            array (
                'zone_id' => 2597,
                'country_id' => 168,
                'name' => 'Mindoro Occidental',
                'code' => 'MIC',
                'status' => 1,
            ),
            482 => 
            array (
                'zone_id' => 2598,
                'country_id' => 168,
                'name' => 'Mindoro Oriental',
                'code' => 'MIR',
                'status' => 1,
            ),
            483 => 
            array (
                'zone_id' => 2599,
                'country_id' => 168,
                'name' => 'Misamis Occidental',
                'code' => 'MSC',
                'status' => 1,
            ),
            484 => 
            array (
                'zone_id' => 2600,
                'country_id' => 168,
                'name' => 'Misamis Oriental',
                'code' => 'MOR',
                'status' => 1,
            ),
            485 => 
            array (
                'zone_id' => 2601,
                'country_id' => 168,
                'name' => 'Mountain',
                'code' => 'MOP',
                'status' => 1,
            ),
            486 => 
            array (
                'zone_id' => 2602,
                'country_id' => 168,
                'name' => 'Negros Occidental',
                'code' => 'NOC',
                'status' => 1,
            ),
            487 => 
            array (
                'zone_id' => 2603,
                'country_id' => 168,
                'name' => 'Negros Oriental',
                'code' => 'NOR',
                'status' => 1,
            ),
            488 => 
            array (
                'zone_id' => 2604,
                'country_id' => 168,
                'name' => 'North Cotabato',
                'code' => 'NCT',
                'status' => 1,
            ),
            489 => 
            array (
                'zone_id' => 2605,
                'country_id' => 168,
                'name' => 'Northern Samar',
                'code' => 'NSM',
                'status' => 1,
            ),
            490 => 
            array (
                'zone_id' => 2606,
                'country_id' => 168,
                'name' => 'Nueva Ecija',
                'code' => 'NEC',
                'status' => 1,
            ),
            491 => 
            array (
                'zone_id' => 2607,
                'country_id' => 168,
                'name' => 'Nueva Vizcaya',
                'code' => 'NVZ',
                'status' => 1,
            ),
            492 => 
            array (
                'zone_id' => 2608,
                'country_id' => 168,
                'name' => 'Palawan',
                'code' => 'PLW',
                'status' => 1,
            ),
            493 => 
            array (
                'zone_id' => 2609,
                'country_id' => 168,
                'name' => 'Pampanga',
                'code' => 'PMP',
                'status' => 1,
            ),
            494 => 
            array (
                'zone_id' => 2610,
                'country_id' => 168,
                'name' => 'Pangasinan',
                'code' => 'PNG',
                'status' => 1,
            ),
            495 => 
            array (
                'zone_id' => 2611,
                'country_id' => 168,
                'name' => 'Quezon',
                'code' => 'QZN',
                'status' => 1,
            ),
            496 => 
            array (
                'zone_id' => 2612,
                'country_id' => 168,
                'name' => 'Quirino',
                'code' => 'QRN',
                'status' => 1,
            ),
            497 => 
            array (
                'zone_id' => 2613,
                'country_id' => 168,
                'name' => 'Rizal',
                'code' => 'RIZ',
                'status' => 1,
            ),
            498 => 
            array (
                'zone_id' => 2614,
                'country_id' => 168,
                'name' => 'Romblon',
                'code' => 'ROM',
                'status' => 1,
            ),
            499 => 
            array (
                'zone_id' => 2615,
                'country_id' => 168,
                'name' => 'Samar',
                'code' => 'SMR',
                'status' => 1,
            ),
        ));
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 2616,
                'country_id' => 168,
                'name' => 'Sarangani',
                'code' => 'SRG',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 2617,
                'country_id' => 168,
                'name' => 'Siquijor',
                'code' => 'SQJ',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 2618,
                'country_id' => 168,
                'name' => 'Sorsogon',
                'code' => 'SRS',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 2619,
                'country_id' => 168,
                'name' => 'South Cotabato',
                'code' => 'SCO',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 2620,
                'country_id' => 168,
                'name' => 'Southern Leyte',
                'code' => 'SLE',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 2621,
                'country_id' => 168,
                'name' => 'Sultan Kudarat',
                'code' => 'SKU',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 2622,
                'country_id' => 168,
                'name' => 'Sulu',
                'code' => 'SLU',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 2623,
                'country_id' => 168,
                'name' => 'Surigao del Norte',
                'code' => 'SNO',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 2624,
                'country_id' => 168,
                'name' => 'Surigao del Sur',
                'code' => 'SSU',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 2625,
                'country_id' => 168,
                'name' => 'Tarlac',
                'code' => 'TAR',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 2626,
                'country_id' => 168,
                'name' => 'Tawi-Tawi',
                'code' => 'TAW',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 2627,
                'country_id' => 168,
                'name' => 'Zambales',
                'code' => 'ZBL',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 2628,
                'country_id' => 168,
                'name' => 'Zamboanga del Norte',
                'code' => 'ZNO',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 2629,
                'country_id' => 168,
                'name' => 'Zamboanga del Sur',
                'code' => 'ZSU',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 2630,
                'country_id' => 168,
                'name' => 'Zamboanga Sibugay',
                'code' => 'ZSI',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 2631,
                'country_id' => 170,
                'name' => 'Dolnoslaskie',
                'code' => 'DO',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 2632,
                'country_id' => 170,
                'name' => 'Kujawsko-Pomorskie',
                'code' => 'KP',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 2633,
                'country_id' => 170,
                'name' => 'Lodzkie',
                'code' => 'LO',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 2634,
                'country_id' => 170,
                'name' => 'Lubelskie',
                'code' => 'LL',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 2635,
                'country_id' => 170,
                'name' => 'Lubuskie',
                'code' => 'LU',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 2636,
                'country_id' => 170,
                'name' => 'Malopolskie',
                'code' => 'ML',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 2637,
                'country_id' => 170,
                'name' => 'Mazowieckie',
                'code' => 'MZ',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 2638,
                'country_id' => 170,
                'name' => 'Opolskie',
                'code' => 'OP',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 2639,
                'country_id' => 170,
                'name' => 'Podkarpackie',
                'code' => 'PP',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 2640,
                'country_id' => 170,
                'name' => 'Podlaskie',
                'code' => 'PL',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 2641,
                'country_id' => 170,
                'name' => 'Pomorskie',
                'code' => 'PM',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 2642,
                'country_id' => 170,
                'name' => 'Slaskie',
                'code' => 'SL',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 2643,
                'country_id' => 170,
                'name' => 'Swietokrzyskie',
                'code' => 'SW',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 2644,
                'country_id' => 170,
                'name' => 'Warminsko-Mazurskie',
                'code' => 'WM',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 2645,
                'country_id' => 170,
                'name' => 'Wielkopolskie',
                'code' => 'WP',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 2646,
                'country_id' => 170,
                'name' => 'Zachodniopomorskie',
                'code' => 'ZA',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 2647,
                'country_id' => 198,
                'name' => 'Saint Pierre',
                'code' => 'P',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 2648,
                'country_id' => 198,
                'name' => 'Miquelon',
                'code' => 'M',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 2649,
                'country_id' => 171,
                'name' => 'A&ccedil;ores',
                'code' => 'AC',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 2650,
                'country_id' => 171,
                'name' => 'Aveiro',
                'code' => 'AV',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 2651,
                'country_id' => 171,
                'name' => 'Beja',
                'code' => 'BE',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 2652,
                'country_id' => 171,
                'name' => 'Braga',
                'code' => 'BR',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 2653,
                'country_id' => 171,
                'name' => 'Bragan&ccedil;a',
                'code' => 'BA',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 2654,
                'country_id' => 171,
                'name' => 'Castelo Branco',
                'code' => 'CB',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 2655,
                'country_id' => 171,
                'name' => 'Coimbra',
                'code' => 'CO',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 2656,
                'country_id' => 171,
                'name' => '&Eacute;vora',
                'code' => 'EV',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 2657,
                'country_id' => 171,
                'name' => 'Faro',
                'code' => 'FA',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 2658,
                'country_id' => 171,
                'name' => 'Guarda',
                'code' => 'GU',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 2659,
                'country_id' => 171,
                'name' => 'Leiria',
                'code' => 'LE',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 2660,
                'country_id' => 171,
                'name' => 'Lisboa',
                'code' => 'LI',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 2661,
                'country_id' => 171,
                'name' => 'Madeira',
                'code' => 'ME',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 2662,
                'country_id' => 171,
                'name' => 'Portalegre',
                'code' => 'PO',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 2663,
                'country_id' => 171,
                'name' => 'Porto',
                'code' => 'PR',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 2664,
                'country_id' => 171,
                'name' => 'Santar&eacute;m',
                'code' => 'SA',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 2665,
                'country_id' => 171,
                'name' => 'Set&uacute;bal',
                'code' => 'SE',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 2666,
                'country_id' => 171,
                'name' => 'Viana do Castelo',
                'code' => 'VC',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 2667,
                'country_id' => 171,
                'name' => 'Vila Real',
                'code' => 'VR',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 2668,
                'country_id' => 171,
                'name' => 'Viseu',
                'code' => 'VI',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 2669,
                'country_id' => 173,
                'name' => 'Ad Dawhah',
                'code' => 'DW',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 2670,
                'country_id' => 173,
                'name' => 'Al Ghuwayriyah',
                'code' => 'GW',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 2671,
                'country_id' => 173,
                'name' => 'Al Jumayliyah',
                'code' => 'JM',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 2672,
                'country_id' => 173,
                'name' => 'Al Khawr',
                'code' => 'KR',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 2673,
                'country_id' => 173,
                'name' => 'Al Wakrah',
                'code' => 'WK',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 2674,
                'country_id' => 173,
                'name' => 'Ar Rayyan',
                'code' => 'RN',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 2675,
                'country_id' => 173,
                'name' => 'Jarayan al Batinah',
                'code' => 'JB',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 2676,
                'country_id' => 173,
                'name' => 'Madinat ash Shamal',
                'code' => 'MS',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 2677,
                'country_id' => 173,
                'name' => 'Umm Sa\'id',
                'code' => 'UD',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 2678,
                'country_id' => 173,
                'name' => 'Umm Salal',
                'code' => 'UL',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 2679,
                'country_id' => 175,
                'name' => 'Alba',
                'code' => 'AB',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 2680,
                'country_id' => 175,
                'name' => 'Arad',
                'code' => 'AR',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 2681,
                'country_id' => 175,
                'name' => 'Arges',
                'code' => 'AG',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 2682,
                'country_id' => 175,
                'name' => 'Bacau',
                'code' => 'BC',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 2683,
                'country_id' => 175,
                'name' => 'Bihor',
                'code' => 'BH',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 2684,
                'country_id' => 175,
                'name' => 'Bistrita-Nasaud',
                'code' => 'BN',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 2685,
                'country_id' => 175,
                'name' => 'Botosani',
                'code' => 'BT',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 2686,
                'country_id' => 175,
                'name' => 'Brasov',
                'code' => 'BV',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 2687,
                'country_id' => 175,
                'name' => 'Braila',
                'code' => 'BR',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 2688,
                'country_id' => 175,
                'name' => 'Bucuresti',
                'code' => 'B',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 2689,
                'country_id' => 175,
                'name' => 'Buzau',
                'code' => 'BZ',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 2690,
                'country_id' => 175,
                'name' => 'Caras-Severin',
                'code' => 'CS',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 2691,
                'country_id' => 175,
                'name' => 'Calarasi',
                'code' => 'CL',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 2692,
                'country_id' => 175,
                'name' => 'Cluj',
                'code' => 'CJ',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 2693,
                'country_id' => 175,
                'name' => 'Constanta',
                'code' => 'CT',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 2694,
                'country_id' => 175,
                'name' => 'Covasna',
                'code' => 'CV',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 2695,
                'country_id' => 175,
                'name' => 'Dimbovita',
                'code' => 'DB',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 2696,
                'country_id' => 175,
                'name' => 'Dolj',
                'code' => 'DJ',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 2697,
                'country_id' => 175,
                'name' => 'Galati',
                'code' => 'GL',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 2698,
                'country_id' => 175,
                'name' => 'Giurgiu',
                'code' => 'GR',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 2699,
                'country_id' => 175,
                'name' => 'Gorj',
                'code' => 'GJ',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 2700,
                'country_id' => 175,
                'name' => 'Harghita',
                'code' => 'HR',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 2701,
                'country_id' => 175,
                'name' => 'Hunedoara',
                'code' => 'HD',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 2702,
                'country_id' => 175,
                'name' => 'Ialomita',
                'code' => 'IL',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 2703,
                'country_id' => 175,
                'name' => 'Iasi',
                'code' => 'IS',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 2704,
                'country_id' => 175,
                'name' => 'Ilfov',
                'code' => 'IF',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 2705,
                'country_id' => 175,
                'name' => 'Maramures',
                'code' => 'MM',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 2706,
                'country_id' => 175,
                'name' => 'Mehedinti',
                'code' => 'MH',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 2707,
                'country_id' => 175,
                'name' => 'Mures',
                'code' => 'MS',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 2708,
                'country_id' => 175,
                'name' => 'Neamt',
                'code' => 'NT',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 2709,
                'country_id' => 175,
                'name' => 'Olt',
                'code' => 'OT',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 2710,
                'country_id' => 175,
                'name' => 'Prahova',
                'code' => 'PH',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 2711,
                'country_id' => 175,
                'name' => 'Satu-Mare',
                'code' => 'SM',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 2712,
                'country_id' => 175,
                'name' => 'Salaj',
                'code' => 'SJ',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 2713,
                'country_id' => 175,
                'name' => 'Sibiu',
                'code' => 'SB',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 2714,
                'country_id' => 175,
                'name' => 'Suceava',
                'code' => 'SV',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 2715,
                'country_id' => 175,
                'name' => 'Teleorman',
                'code' => 'TR',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 2716,
                'country_id' => 175,
                'name' => 'Timis',
                'code' => 'TM',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 2717,
                'country_id' => 175,
                'name' => 'Tulcea',
                'code' => 'TL',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 2718,
                'country_id' => 175,
                'name' => 'Vaslui',
                'code' => 'VS',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 2719,
                'country_id' => 175,
                'name' => 'Valcea',
                'code' => 'VL',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 2720,
                'country_id' => 175,
                'name' => 'Vrancea',
                'code' => 'VN',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 2721,
                'country_id' => 176,
                'name' => 'Abakan',
                'code' => 'AB',
                'status' => 1,
            ),
            106 => 
            array (
                'zone_id' => 2722,
                'country_id' => 176,
                'name' => 'Aginskoye',
                'code' => 'AG',
                'status' => 1,
            ),
            107 => 
            array (
                'zone_id' => 2723,
                'country_id' => 176,
                'name' => 'Anadyr',
                'code' => 'AN',
                'status' => 1,
            ),
            108 => 
            array (
                'zone_id' => 2724,
                'country_id' => 176,
                'name' => 'Arkahangelsk',
                'code' => 'AR',
                'status' => 1,
            ),
            109 => 
            array (
                'zone_id' => 2725,
                'country_id' => 176,
                'name' => 'Astrakhan',
                'code' => 'AS',
                'status' => 1,
            ),
            110 => 
            array (
                'zone_id' => 2726,
                'country_id' => 176,
                'name' => 'Barnaul',
                'code' => 'BA',
                'status' => 1,
            ),
            111 => 
            array (
                'zone_id' => 2727,
                'country_id' => 176,
                'name' => 'Belgorod',
                'code' => 'BE',
                'status' => 1,
            ),
            112 => 
            array (
                'zone_id' => 2728,
                'country_id' => 176,
                'name' => 'Birobidzhan',
                'code' => 'BI',
                'status' => 1,
            ),
            113 => 
            array (
                'zone_id' => 2729,
                'country_id' => 176,
                'name' => 'Blagoveshchensk',
                'code' => 'BL',
                'status' => 1,
            ),
            114 => 
            array (
                'zone_id' => 2730,
                'country_id' => 176,
                'name' => 'Bryansk',
                'code' => 'BR',
                'status' => 1,
            ),
            115 => 
            array (
                'zone_id' => 2731,
                'country_id' => 176,
                'name' => 'Cheboksary',
                'code' => 'CH',
                'status' => 1,
            ),
            116 => 
            array (
                'zone_id' => 2732,
                'country_id' => 176,
                'name' => 'Chelyabinsk',
                'code' => 'CL',
                'status' => 1,
            ),
            117 => 
            array (
                'zone_id' => 2733,
                'country_id' => 176,
                'name' => 'Cherkessk',
                'code' => 'CR',
                'status' => 1,
            ),
            118 => 
            array (
                'zone_id' => 2734,
                'country_id' => 176,
                'name' => 'Chita',
                'code' => 'CI',
                'status' => 1,
            ),
            119 => 
            array (
                'zone_id' => 2735,
                'country_id' => 176,
                'name' => 'Dudinka',
                'code' => 'DU',
                'status' => 1,
            ),
            120 => 
            array (
                'zone_id' => 2736,
                'country_id' => 176,
                'name' => 'Elista',
                'code' => 'EL',
                'status' => 1,
            ),
            121 => 
            array (
                'zone_id' => 2737,
                'country_id' => 176,
                'name' => 'Gomo-Altaysk',
                'code' => 'GO',
                'status' => 1,
            ),
            122 => 
            array (
                'zone_id' => 2738,
                'country_id' => 176,
                'name' => 'Gorno-Altaysk',
                'code' => 'GA',
                'status' => 1,
            ),
            123 => 
            array (
                'zone_id' => 2739,
                'country_id' => 176,
                'name' => 'Groznyy',
                'code' => 'GR',
                'status' => 1,
            ),
            124 => 
            array (
                'zone_id' => 2740,
                'country_id' => 176,
                'name' => 'Irkutsk',
                'code' => 'IR',
                'status' => 1,
            ),
            125 => 
            array (
                'zone_id' => 2741,
                'country_id' => 176,
                'name' => 'Ivanovo',
                'code' => 'IV',
                'status' => 1,
            ),
            126 => 
            array (
                'zone_id' => 2742,
                'country_id' => 176,
                'name' => 'Izhevsk',
                'code' => 'IZ',
                'status' => 1,
            ),
            127 => 
            array (
                'zone_id' => 2743,
                'country_id' => 176,
                'name' => 'Kalinigrad',
                'code' => 'KA',
                'status' => 1,
            ),
            128 => 
            array (
                'zone_id' => 2744,
                'country_id' => 176,
                'name' => 'Kaluga',
                'code' => 'KL',
                'status' => 1,
            ),
            129 => 
            array (
                'zone_id' => 2745,
                'country_id' => 176,
                'name' => 'Kasnodar',
                'code' => 'KS',
                'status' => 1,
            ),
            130 => 
            array (
                'zone_id' => 2746,
                'country_id' => 176,
                'name' => 'Kazan',
                'code' => 'KZ',
                'status' => 1,
            ),
            131 => 
            array (
                'zone_id' => 2747,
                'country_id' => 176,
                'name' => 'Kemerovo',
                'code' => 'KE',
                'status' => 1,
            ),
            132 => 
            array (
                'zone_id' => 2748,
                'country_id' => 176,
                'name' => 'Khabarovsk',
                'code' => 'KH',
                'status' => 1,
            ),
            133 => 
            array (
                'zone_id' => 2749,
                'country_id' => 176,
                'name' => 'Khanty-Mansiysk',
                'code' => 'KM',
                'status' => 1,
            ),
            134 => 
            array (
                'zone_id' => 2750,
                'country_id' => 176,
                'name' => 'Kostroma',
                'code' => 'KO',
                'status' => 1,
            ),
            135 => 
            array (
                'zone_id' => 2751,
                'country_id' => 176,
                'name' => 'Krasnodar',
                'code' => 'KR',
                'status' => 1,
            ),
            136 => 
            array (
                'zone_id' => 2752,
                'country_id' => 176,
                'name' => 'Krasnoyarsk',
                'code' => 'KN',
                'status' => 1,
            ),
            137 => 
            array (
                'zone_id' => 2753,
                'country_id' => 176,
                'name' => 'Kudymkar',
                'code' => 'KU',
                'status' => 1,
            ),
            138 => 
            array (
                'zone_id' => 2754,
                'country_id' => 176,
                'name' => 'Kurgan',
                'code' => 'KG',
                'status' => 1,
            ),
            139 => 
            array (
                'zone_id' => 2755,
                'country_id' => 176,
                'name' => 'Kursk',
                'code' => 'KK',
                'status' => 1,
            ),
            140 => 
            array (
                'zone_id' => 2756,
                'country_id' => 176,
                'name' => 'Kyzyl',
                'code' => 'KY',
                'status' => 1,
            ),
            141 => 
            array (
                'zone_id' => 2757,
                'country_id' => 176,
                'name' => 'Lipetsk',
                'code' => 'LI',
                'status' => 1,
            ),
            142 => 
            array (
                'zone_id' => 2758,
                'country_id' => 176,
                'name' => 'Magadan',
                'code' => 'MA',
                'status' => 1,
            ),
            143 => 
            array (
                'zone_id' => 2759,
                'country_id' => 176,
                'name' => 'Makhachkala',
                'code' => 'MK',
                'status' => 1,
            ),
            144 => 
            array (
                'zone_id' => 2760,
                'country_id' => 176,
                'name' => 'Maykop',
                'code' => 'MY',
                'status' => 1,
            ),
            145 => 
            array (
                'zone_id' => 2761,
                'country_id' => 176,
                'name' => 'Moscow',
                'code' => 'MO',
                'status' => 1,
            ),
            146 => 
            array (
                'zone_id' => 2762,
                'country_id' => 176,
                'name' => 'Murmansk',
                'code' => 'MU',
                'status' => 1,
            ),
            147 => 
            array (
                'zone_id' => 2763,
                'country_id' => 176,
                'name' => 'Nalchik',
                'code' => 'NA',
                'status' => 1,
            ),
            148 => 
            array (
                'zone_id' => 2764,
                'country_id' => 176,
                'name' => 'Naryan Mar',
                'code' => 'NR',
                'status' => 1,
            ),
            149 => 
            array (
                'zone_id' => 2765,
                'country_id' => 176,
                'name' => 'Nazran',
                'code' => 'NZ',
                'status' => 1,
            ),
            150 => 
            array (
                'zone_id' => 2766,
                'country_id' => 176,
                'name' => 'Nizhniy Novgorod',
                'code' => 'NI',
                'status' => 1,
            ),
            151 => 
            array (
                'zone_id' => 2767,
                'country_id' => 176,
                'name' => 'Novgorod',
                'code' => 'NO',
                'status' => 1,
            ),
            152 => 
            array (
                'zone_id' => 2768,
                'country_id' => 176,
                'name' => 'Novosibirsk',
                'code' => 'NV',
                'status' => 1,
            ),
            153 => 
            array (
                'zone_id' => 2769,
                'country_id' => 176,
                'name' => 'Omsk',
                'code' => 'OM',
                'status' => 1,
            ),
            154 => 
            array (
                'zone_id' => 2770,
                'country_id' => 176,
                'name' => 'Orel',
                'code' => 'OR',
                'status' => 1,
            ),
            155 => 
            array (
                'zone_id' => 2771,
                'country_id' => 176,
                'name' => 'Orenburg',
                'code' => 'OE',
                'status' => 1,
            ),
            156 => 
            array (
                'zone_id' => 2772,
                'country_id' => 176,
                'name' => 'Palana',
                'code' => 'PA',
                'status' => 1,
            ),
            157 => 
            array (
                'zone_id' => 2773,
                'country_id' => 176,
                'name' => 'Penza',
                'code' => 'PE',
                'status' => 1,
            ),
            158 => 
            array (
                'zone_id' => 2774,
                'country_id' => 176,
                'name' => 'Perm',
                'code' => 'PR',
                'status' => 1,
            ),
            159 => 
            array (
                'zone_id' => 2775,
                'country_id' => 176,
                'name' => 'Petropavlovsk-Kamchatskiy',
                'code' => 'PK',
                'status' => 1,
            ),
            160 => 
            array (
                'zone_id' => 2776,
                'country_id' => 176,
                'name' => 'Petrozavodsk',
                'code' => 'PT',
                'status' => 1,
            ),
            161 => 
            array (
                'zone_id' => 2777,
                'country_id' => 176,
                'name' => 'Pskov',
                'code' => 'PS',
                'status' => 1,
            ),
            162 => 
            array (
                'zone_id' => 2778,
                'country_id' => 176,
                'name' => 'Rostov-na-Donu',
                'code' => 'RO',
                'status' => 1,
            ),
            163 => 
            array (
                'zone_id' => 2779,
                'country_id' => 176,
                'name' => 'Ryazan',
                'code' => 'RY',
                'status' => 1,
            ),
            164 => 
            array (
                'zone_id' => 2780,
                'country_id' => 176,
                'name' => 'Salekhard',
                'code' => 'SL',
                'status' => 1,
            ),
            165 => 
            array (
                'zone_id' => 2781,
                'country_id' => 176,
                'name' => 'Samara',
                'code' => 'SA',
                'status' => 1,
            ),
            166 => 
            array (
                'zone_id' => 2782,
                'country_id' => 176,
                'name' => 'Saransk',
                'code' => 'SR',
                'status' => 1,
            ),
            167 => 
            array (
                'zone_id' => 2783,
                'country_id' => 176,
                'name' => 'Saratov',
                'code' => 'SV',
                'status' => 1,
            ),
            168 => 
            array (
                'zone_id' => 2784,
                'country_id' => 176,
                'name' => 'Smolensk',
                'code' => 'SM',
                'status' => 1,
            ),
            169 => 
            array (
                'zone_id' => 2785,
                'country_id' => 176,
                'name' => 'St. Petersburg',
                'code' => 'SP',
                'status' => 1,
            ),
            170 => 
            array (
                'zone_id' => 2786,
                'country_id' => 176,
                'name' => 'Stavropol',
                'code' => 'ST',
                'status' => 1,
            ),
            171 => 
            array (
                'zone_id' => 2787,
                'country_id' => 176,
                'name' => 'Syktyvkar',
                'code' => 'SY',
                'status' => 1,
            ),
            172 => 
            array (
                'zone_id' => 2788,
                'country_id' => 176,
                'name' => 'Tambov',
                'code' => 'TA',
                'status' => 1,
            ),
            173 => 
            array (
                'zone_id' => 2789,
                'country_id' => 176,
                'name' => 'Tomsk',
                'code' => 'TO',
                'status' => 1,
            ),
            174 => 
            array (
                'zone_id' => 2790,
                'country_id' => 176,
                'name' => 'Tula',
                'code' => 'TU',
                'status' => 1,
            ),
            175 => 
            array (
                'zone_id' => 2791,
                'country_id' => 176,
                'name' => 'Tura',
                'code' => 'TR',
                'status' => 1,
            ),
            176 => 
            array (
                'zone_id' => 2792,
                'country_id' => 176,
                'name' => 'Tver',
                'code' => 'TV',
                'status' => 1,
            ),
            177 => 
            array (
                'zone_id' => 2793,
                'country_id' => 176,
                'name' => 'Tyumen',
                'code' => 'TY',
                'status' => 1,
            ),
            178 => 
            array (
                'zone_id' => 2794,
                'country_id' => 176,
                'name' => 'Ufa',
                'code' => 'UF',
                'status' => 1,
            ),
            179 => 
            array (
                'zone_id' => 2795,
                'country_id' => 176,
                'name' => 'Ul\'yanovsk',
                'code' => 'UL',
                'status' => 1,
            ),
            180 => 
            array (
                'zone_id' => 2796,
                'country_id' => 176,
                'name' => 'Ulan-Ude',
                'code' => 'UU',
                'status' => 1,
            ),
            181 => 
            array (
                'zone_id' => 2797,
                'country_id' => 176,
                'name' => 'Ust\'-Ordynskiy',
                'code' => 'US',
                'status' => 1,
            ),
            182 => 
            array (
                'zone_id' => 2798,
                'country_id' => 176,
                'name' => 'Vladikavkaz',
                'code' => 'VL',
                'status' => 1,
            ),
            183 => 
            array (
                'zone_id' => 2799,
                'country_id' => 176,
                'name' => 'Vladimir',
                'code' => 'VA',
                'status' => 1,
            ),
            184 => 
            array (
                'zone_id' => 2800,
                'country_id' => 176,
                'name' => 'Vladivostok',
                'code' => 'VV',
                'status' => 1,
            ),
            185 => 
            array (
                'zone_id' => 2801,
                'country_id' => 176,
                'name' => 'Volgograd',
                'code' => 'VG',
                'status' => 1,
            ),
            186 => 
            array (
                'zone_id' => 2802,
                'country_id' => 176,
                'name' => 'Vologda',
                'code' => 'VD',
                'status' => 1,
            ),
            187 => 
            array (
                'zone_id' => 2803,
                'country_id' => 176,
                'name' => 'Voronezh',
                'code' => 'VO',
                'status' => 1,
            ),
            188 => 
            array (
                'zone_id' => 2804,
                'country_id' => 176,
                'name' => 'Vyatka',
                'code' => 'VY',
                'status' => 1,
            ),
            189 => 
            array (
                'zone_id' => 2805,
                'country_id' => 176,
                'name' => 'Yakutsk',
                'code' => 'YA',
                'status' => 1,
            ),
            190 => 
            array (
                'zone_id' => 2806,
                'country_id' => 176,
                'name' => 'Yaroslavl',
                'code' => 'YR',
                'status' => 1,
            ),
            191 => 
            array (
                'zone_id' => 2807,
                'country_id' => 176,
                'name' => 'Yekaterinburg',
                'code' => 'YE',
                'status' => 1,
            ),
            192 => 
            array (
                'zone_id' => 2808,
                'country_id' => 176,
                'name' => 'Yoshkar-Ola',
                'code' => 'YO',
                'status' => 1,
            ),
            193 => 
            array (
                'zone_id' => 2809,
                'country_id' => 177,
                'name' => 'Butare',
                'code' => 'BU',
                'status' => 1,
            ),
            194 => 
            array (
                'zone_id' => 2810,
                'country_id' => 177,
                'name' => 'Byumba',
                'code' => 'BY',
                'status' => 1,
            ),
            195 => 
            array (
                'zone_id' => 2811,
                'country_id' => 177,
                'name' => 'Cyangugu',
                'code' => 'CY',
                'status' => 1,
            ),
            196 => 
            array (
                'zone_id' => 2812,
                'country_id' => 177,
                'name' => 'Gikongoro',
                'code' => 'GK',
                'status' => 1,
            ),
            197 => 
            array (
                'zone_id' => 2813,
                'country_id' => 177,
                'name' => 'Gisenyi',
                'code' => 'GS',
                'status' => 1,
            ),
            198 => 
            array (
                'zone_id' => 2814,
                'country_id' => 177,
                'name' => 'Gitarama',
                'code' => 'GT',
                'status' => 1,
            ),
            199 => 
            array (
                'zone_id' => 2815,
                'country_id' => 177,
                'name' => 'Kibungo',
                'code' => 'KG',
                'status' => 1,
            ),
            200 => 
            array (
                'zone_id' => 2816,
                'country_id' => 177,
                'name' => 'Kibuye',
                'code' => 'KY',
                'status' => 1,
            ),
            201 => 
            array (
                'zone_id' => 2817,
                'country_id' => 177,
                'name' => 'Kigali Rurale',
                'code' => 'KR',
                'status' => 1,
            ),
            202 => 
            array (
                'zone_id' => 2818,
                'country_id' => 177,
                'name' => 'Kigali-ville',
                'code' => 'KV',
                'status' => 1,
            ),
            203 => 
            array (
                'zone_id' => 2819,
                'country_id' => 177,
                'name' => 'Ruhengeri',
                'code' => 'RU',
                'status' => 1,
            ),
            204 => 
            array (
                'zone_id' => 2820,
                'country_id' => 177,
                'name' => 'Umutara',
                'code' => 'UM',
                'status' => 1,
            ),
            205 => 
            array (
                'zone_id' => 2821,
                'country_id' => 178,
                'name' => 'Christ Church Nichola Town',
                'code' => 'CCN',
                'status' => 1,
            ),
            206 => 
            array (
                'zone_id' => 2822,
                'country_id' => 178,
                'name' => 'Saint Anne Sandy Point',
                'code' => 'SAS',
                'status' => 1,
            ),
            207 => 
            array (
                'zone_id' => 2823,
                'country_id' => 178,
                'name' => 'Saint George Basseterre',
                'code' => 'SGB',
                'status' => 1,
            ),
            208 => 
            array (
                'zone_id' => 2824,
                'country_id' => 178,
                'name' => 'Saint George Gingerland',
                'code' => 'SGG',
                'status' => 1,
            ),
            209 => 
            array (
                'zone_id' => 2825,
                'country_id' => 178,
                'name' => 'Saint James Windward',
                'code' => 'SJW',
                'status' => 1,
            ),
            210 => 
            array (
                'zone_id' => 2826,
                'country_id' => 178,
                'name' => 'Saint John Capesterre',
                'code' => 'SJC',
                'status' => 1,
            ),
            211 => 
            array (
                'zone_id' => 2827,
                'country_id' => 178,
                'name' => 'Saint John Figtree',
                'code' => 'SJF',
                'status' => 1,
            ),
            212 => 
            array (
                'zone_id' => 2828,
                'country_id' => 178,
                'name' => 'Saint Mary Cayon',
                'code' => 'SMC',
                'status' => 1,
            ),
            213 => 
            array (
                'zone_id' => 2829,
                'country_id' => 178,
                'name' => 'Saint Paul Capesterre',
                'code' => 'CAP',
                'status' => 1,
            ),
            214 => 
            array (
                'zone_id' => 2830,
                'country_id' => 178,
                'name' => 'Saint Paul Charlestown',
                'code' => 'CHA',
                'status' => 1,
            ),
            215 => 
            array (
                'zone_id' => 2831,
                'country_id' => 178,
                'name' => 'Saint Peter Basseterre',
                'code' => 'SPB',
                'status' => 1,
            ),
            216 => 
            array (
                'zone_id' => 2832,
                'country_id' => 178,
                'name' => 'Saint Thomas Lowland',
                'code' => 'STL',
                'status' => 1,
            ),
            217 => 
            array (
                'zone_id' => 2833,
                'country_id' => 178,
                'name' => 'Saint Thomas Middle Island',
                'code' => 'STM',
                'status' => 1,
            ),
            218 => 
            array (
                'zone_id' => 2834,
                'country_id' => 178,
                'name' => 'Trinity Palmetto Point',
                'code' => 'TPP',
                'status' => 1,
            ),
            219 => 
            array (
                'zone_id' => 2835,
                'country_id' => 179,
                'name' => 'Anse-la-Raye',
                'code' => 'AR',
                'status' => 1,
            ),
            220 => 
            array (
                'zone_id' => 2836,
                'country_id' => 179,
                'name' => 'Castries',
                'code' => 'CA',
                'status' => 1,
            ),
            221 => 
            array (
                'zone_id' => 2837,
                'country_id' => 179,
                'name' => 'Choiseul',
                'code' => 'CH',
                'status' => 1,
            ),
            222 => 
            array (
                'zone_id' => 2838,
                'country_id' => 179,
                'name' => 'Dauphin',
                'code' => 'DA',
                'status' => 1,
            ),
            223 => 
            array (
                'zone_id' => 2839,
                'country_id' => 179,
                'name' => 'Dennery',
                'code' => 'DE',
                'status' => 1,
            ),
            224 => 
            array (
                'zone_id' => 2840,
                'country_id' => 179,
                'name' => 'Gros-Islet',
                'code' => 'GI',
                'status' => 1,
            ),
            225 => 
            array (
                'zone_id' => 2841,
                'country_id' => 179,
                'name' => 'Laborie',
                'code' => 'LA',
                'status' => 1,
            ),
            226 => 
            array (
                'zone_id' => 2842,
                'country_id' => 179,
                'name' => 'Micoud',
                'code' => 'MI',
                'status' => 1,
            ),
            227 => 
            array (
                'zone_id' => 2843,
                'country_id' => 179,
                'name' => 'Praslin',
                'code' => 'PR',
                'status' => 1,
            ),
            228 => 
            array (
                'zone_id' => 2844,
                'country_id' => 179,
                'name' => 'Soufriere',
                'code' => 'SO',
                'status' => 1,
            ),
            229 => 
            array (
                'zone_id' => 2845,
                'country_id' => 179,
                'name' => 'Vieux-Fort',
                'code' => 'VF',
                'status' => 1,
            ),
            230 => 
            array (
                'zone_id' => 2846,
                'country_id' => 180,
                'name' => 'Charlotte',
                'code' => 'C',
                'status' => 1,
            ),
            231 => 
            array (
                'zone_id' => 2847,
                'country_id' => 180,
                'name' => 'Grenadines',
                'code' => 'R',
                'status' => 1,
            ),
            232 => 
            array (
                'zone_id' => 2848,
                'country_id' => 180,
                'name' => 'Saint Andrew',
                'code' => 'A',
                'status' => 1,
            ),
            233 => 
            array (
                'zone_id' => 2849,
                'country_id' => 180,
                'name' => 'Saint David',
                'code' => 'D',
                'status' => 1,
            ),
            234 => 
            array (
                'zone_id' => 2850,
                'country_id' => 180,
                'name' => 'Saint George',
                'code' => 'G',
                'status' => 1,
            ),
            235 => 
            array (
                'zone_id' => 2851,
                'country_id' => 180,
                'name' => 'Saint Patrick',
                'code' => 'P',
                'status' => 1,
            ),
            236 => 
            array (
                'zone_id' => 2852,
                'country_id' => 181,
                'name' => 'A\'ana',
                'code' => 'AN',
                'status' => 1,
            ),
            237 => 
            array (
                'zone_id' => 2853,
                'country_id' => 181,
                'name' => 'Aiga-i-le-Tai',
                'code' => 'AI',
                'status' => 1,
            ),
            238 => 
            array (
                'zone_id' => 2854,
                'country_id' => 181,
                'name' => 'Atua',
                'code' => 'AT',
                'status' => 1,
            ),
            239 => 
            array (
                'zone_id' => 2855,
                'country_id' => 181,
                'name' => 'Fa\'asaleleaga',
                'code' => 'FA',
                'status' => 1,
            ),
            240 => 
            array (
                'zone_id' => 2856,
                'country_id' => 181,
                'name' => 'Gaga\'emauga',
                'code' => 'GE',
                'status' => 1,
            ),
            241 => 
            array (
                'zone_id' => 2857,
                'country_id' => 181,
                'name' => 'Gagaifomauga',
                'code' => 'GF',
                'status' => 1,
            ),
            242 => 
            array (
                'zone_id' => 2858,
                'country_id' => 181,
                'name' => 'Palauli',
                'code' => 'PA',
                'status' => 1,
            ),
            243 => 
            array (
                'zone_id' => 2859,
                'country_id' => 181,
                'name' => 'Satupa\'itea',
                'code' => 'SA',
                'status' => 1,
            ),
            244 => 
            array (
                'zone_id' => 2860,
                'country_id' => 181,
                'name' => 'Tuamasaga',
                'code' => 'TU',
                'status' => 1,
            ),
            245 => 
            array (
                'zone_id' => 2861,
                'country_id' => 181,
                'name' => 'Va\'a-o-Fonoti',
                'code' => 'VF',
                'status' => 1,
            ),
            246 => 
            array (
                'zone_id' => 2862,
                'country_id' => 181,
                'name' => 'Vaisigano',
                'code' => 'VS',
                'status' => 1,
            ),
            247 => 
            array (
                'zone_id' => 2863,
                'country_id' => 182,
                'name' => 'Acquaviva',
                'code' => 'AC',
                'status' => 1,
            ),
            248 => 
            array (
                'zone_id' => 2864,
                'country_id' => 182,
                'name' => 'Borgo Maggiore',
                'code' => 'BM',
                'status' => 1,
            ),
            249 => 
            array (
                'zone_id' => 2865,
                'country_id' => 182,
                'name' => 'Chiesanuova',
                'code' => 'CH',
                'status' => 1,
            ),
            250 => 
            array (
                'zone_id' => 2866,
                'country_id' => 182,
                'name' => 'Domagnano',
                'code' => 'DO',
                'status' => 1,
            ),
            251 => 
            array (
                'zone_id' => 2867,
                'country_id' => 182,
                'name' => 'Faetano',
                'code' => 'FA',
                'status' => 1,
            ),
            252 => 
            array (
                'zone_id' => 2868,
                'country_id' => 182,
                'name' => 'Fiorentino',
                'code' => 'FI',
                'status' => 1,
            ),
            253 => 
            array (
                'zone_id' => 2869,
                'country_id' => 182,
                'name' => 'Montegiardino',
                'code' => 'MO',
                'status' => 1,
            ),
            254 => 
            array (
                'zone_id' => 2870,
                'country_id' => 182,
                'name' => 'Citta di San Marino',
                'code' => 'SM',
                'status' => 1,
            ),
            255 => 
            array (
                'zone_id' => 2871,
                'country_id' => 182,
                'name' => 'Serravalle',
                'code' => 'SE',
                'status' => 1,
            ),
            256 => 
            array (
                'zone_id' => 2872,
                'country_id' => 183,
                'name' => 'Sao Tome',
                'code' => 'S',
                'status' => 1,
            ),
            257 => 
            array (
                'zone_id' => 2873,
                'country_id' => 183,
                'name' => 'Principe',
                'code' => 'P',
                'status' => 1,
            ),
            258 => 
            array (
                'zone_id' => 2874,
                'country_id' => 184,
                'name' => 'Al Bahah',
                'code' => 'BH',
                'status' => 1,
            ),
            259 => 
            array (
                'zone_id' => 2875,
                'country_id' => 184,
                'name' => 'Al Hudud ash Shamaliyah',
                'code' => 'HS',
                'status' => 1,
            ),
            260 => 
            array (
                'zone_id' => 2876,
                'country_id' => 184,
                'name' => 'Al Jawf',
                'code' => 'JF',
                'status' => 1,
            ),
            261 => 
            array (
                'zone_id' => 2877,
                'country_id' => 184,
                'name' => 'Al Madinah',
                'code' => 'MD',
                'status' => 1,
            ),
            262 => 
            array (
                'zone_id' => 2878,
                'country_id' => 184,
                'name' => 'Al Qasim',
                'code' => 'QS',
                'status' => 1,
            ),
            263 => 
            array (
                'zone_id' => 2879,
                'country_id' => 184,
                'name' => 'Ar Riyad',
                'code' => 'RD',
                'status' => 1,
            ),
            264 => 
            array (
                'zone_id' => 2880,
                'country_id' => 184,
            'name' => 'Ash Sharqiyah (Eastern)',
                'code' => 'AQ',
                'status' => 1,
            ),
            265 => 
            array (
                'zone_id' => 2881,
                'country_id' => 184,
                'name' => '\'Asir',
                'code' => 'AS',
                'status' => 1,
            ),
            266 => 
            array (
                'zone_id' => 2882,
                'country_id' => 184,
                'name' => 'Ha\'il',
                'code' => 'HL',
                'status' => 1,
            ),
            267 => 
            array (
                'zone_id' => 2883,
                'country_id' => 184,
                'name' => 'Jizan',
                'code' => 'JZ',
                'status' => 1,
            ),
            268 => 
            array (
                'zone_id' => 2884,
                'country_id' => 184,
                'name' => 'Makkah',
                'code' => 'ML',
                'status' => 1,
            ),
            269 => 
            array (
                'zone_id' => 2885,
                'country_id' => 184,
                'name' => 'Najran',
                'code' => 'NR',
                'status' => 1,
            ),
            270 => 
            array (
                'zone_id' => 2886,
                'country_id' => 184,
                'name' => 'Tabuk',
                'code' => 'TB',
                'status' => 1,
            ),
            271 => 
            array (
                'zone_id' => 2887,
                'country_id' => 185,
                'name' => 'Dakar',
                'code' => 'DA',
                'status' => 1,
            ),
            272 => 
            array (
                'zone_id' => 2888,
                'country_id' => 185,
                'name' => 'Diourbel',
                'code' => 'DI',
                'status' => 1,
            ),
            273 => 
            array (
                'zone_id' => 2889,
                'country_id' => 185,
                'name' => 'Fatick',
                'code' => 'FA',
                'status' => 1,
            ),
            274 => 
            array (
                'zone_id' => 2890,
                'country_id' => 185,
                'name' => 'Kaolack',
                'code' => 'KA',
                'status' => 1,
            ),
            275 => 
            array (
                'zone_id' => 2891,
                'country_id' => 185,
                'name' => 'Kolda',
                'code' => 'KO',
                'status' => 1,
            ),
            276 => 
            array (
                'zone_id' => 2892,
                'country_id' => 185,
                'name' => 'Louga',
                'code' => 'LO',
                'status' => 1,
            ),
            277 => 
            array (
                'zone_id' => 2893,
                'country_id' => 185,
                'name' => 'Matam',
                'code' => 'MA',
                'status' => 1,
            ),
            278 => 
            array (
                'zone_id' => 2894,
                'country_id' => 185,
                'name' => 'Saint-Louis',
                'code' => 'SL',
                'status' => 1,
            ),
            279 => 
            array (
                'zone_id' => 2895,
                'country_id' => 185,
                'name' => 'Tambacounda',
                'code' => 'TA',
                'status' => 1,
            ),
            280 => 
            array (
                'zone_id' => 2896,
                'country_id' => 185,
                'name' => 'Thies',
                'code' => 'TH',
                'status' => 1,
            ),
            281 => 
            array (
                'zone_id' => 2897,
                'country_id' => 185,
                'name' => 'Ziguinchor',
                'code' => 'ZI',
                'status' => 1,
            ),
            282 => 
            array (
                'zone_id' => 2898,
                'country_id' => 186,
                'name' => 'Anse aux Pins',
                'code' => 'AP',
                'status' => 1,
            ),
            283 => 
            array (
                'zone_id' => 2899,
                'country_id' => 186,
                'name' => 'Anse Boileau',
                'code' => 'AB',
                'status' => 1,
            ),
            284 => 
            array (
                'zone_id' => 2900,
                'country_id' => 186,
                'name' => 'Anse Etoile',
                'code' => 'AE',
                'status' => 1,
            ),
            285 => 
            array (
                'zone_id' => 2901,
                'country_id' => 186,
                'name' => 'Anse Louis',
                'code' => 'AL',
                'status' => 1,
            ),
            286 => 
            array (
                'zone_id' => 2902,
                'country_id' => 186,
                'name' => 'Anse Royale',
                'code' => 'AR',
                'status' => 1,
            ),
            287 => 
            array (
                'zone_id' => 2903,
                'country_id' => 186,
                'name' => 'Baie Lazare',
                'code' => 'BL',
                'status' => 1,
            ),
            288 => 
            array (
                'zone_id' => 2904,
                'country_id' => 186,
                'name' => 'Baie Sainte Anne',
                'code' => 'BS',
                'status' => 1,
            ),
            289 => 
            array (
                'zone_id' => 2905,
                'country_id' => 186,
                'name' => 'Beau Vallon',
                'code' => 'BV',
                'status' => 1,
            ),
            290 => 
            array (
                'zone_id' => 2906,
                'country_id' => 186,
                'name' => 'Bel Air',
                'code' => 'BA',
                'status' => 1,
            ),
            291 => 
            array (
                'zone_id' => 2907,
                'country_id' => 186,
                'name' => 'Bel Ombre',
                'code' => 'BO',
                'status' => 1,
            ),
            292 => 
            array (
                'zone_id' => 2908,
                'country_id' => 186,
                'name' => 'Cascade',
                'code' => 'CA',
                'status' => 1,
            ),
            293 => 
            array (
                'zone_id' => 2909,
                'country_id' => 186,
                'name' => 'Glacis',
                'code' => 'GL',
                'status' => 1,
            ),
            294 => 
            array (
                'zone_id' => 2910,
                'country_id' => 186,
            'name' => 'Grand\' Anse (on Mahe)',
                'code' => 'GM',
                'status' => 1,
            ),
            295 => 
            array (
                'zone_id' => 2911,
                'country_id' => 186,
            'name' => 'Grand\' Anse (on Praslin)',
                'code' => 'GP',
                'status' => 1,
            ),
            296 => 
            array (
                'zone_id' => 2912,
                'country_id' => 186,
                'name' => 'La Digue',
                'code' => 'DG',
                'status' => 1,
            ),
            297 => 
            array (
                'zone_id' => 2913,
                'country_id' => 186,
                'name' => 'La Riviere Anglaise',
                'code' => 'RA',
                'status' => 1,
            ),
            298 => 
            array (
                'zone_id' => 2914,
                'country_id' => 186,
                'name' => 'Mont Buxton',
                'code' => 'MB',
                'status' => 1,
            ),
            299 => 
            array (
                'zone_id' => 2915,
                'country_id' => 186,
                'name' => 'Mont Fleuri',
                'code' => 'MF',
                'status' => 1,
            ),
            300 => 
            array (
                'zone_id' => 2916,
                'country_id' => 186,
                'name' => 'Plaisance',
                'code' => 'PL',
                'status' => 1,
            ),
            301 => 
            array (
                'zone_id' => 2917,
                'country_id' => 186,
                'name' => 'Pointe La Rue',
                'code' => 'PR',
                'status' => 1,
            ),
            302 => 
            array (
                'zone_id' => 2918,
                'country_id' => 186,
                'name' => 'Port Glaud',
                'code' => 'PG',
                'status' => 1,
            ),
            303 => 
            array (
                'zone_id' => 2919,
                'country_id' => 186,
                'name' => 'Saint Louis',
                'code' => 'SL',
                'status' => 1,
            ),
            304 => 
            array (
                'zone_id' => 2920,
                'country_id' => 186,
                'name' => 'Takamaka',
                'code' => 'TA',
                'status' => 1,
            ),
            305 => 
            array (
                'zone_id' => 2921,
                'country_id' => 187,
                'name' => 'Eastern',
                'code' => 'E',
                'status' => 1,
            ),
            306 => 
            array (
                'zone_id' => 2922,
                'country_id' => 187,
                'name' => 'Northern',
                'code' => 'N',
                'status' => 1,
            ),
            307 => 
            array (
                'zone_id' => 2923,
                'country_id' => 187,
                'name' => 'Southern',
                'code' => 'S',
                'status' => 1,
            ),
            308 => 
            array (
                'zone_id' => 2924,
                'country_id' => 187,
                'name' => 'Western',
                'code' => 'W',
                'status' => 1,
            ),
            309 => 
            array (
                'zone_id' => 2925,
                'country_id' => 189,
                'name' => 'Banskobystrický',
                'code' => 'BA',
                'status' => 1,
            ),
            310 => 
            array (
                'zone_id' => 2926,
                'country_id' => 189,
                'name' => 'Bratislavský',
                'code' => 'BR',
                'status' => 1,
            ),
            311 => 
            array (
                'zone_id' => 2927,
                'country_id' => 189,
                'name' => 'Košický',
                'code' => 'KO',
                'status' => 1,
            ),
            312 => 
            array (
                'zone_id' => 2928,
                'country_id' => 189,
                'name' => 'Nitriansky',
                'code' => 'NI',
                'status' => 1,
            ),
            313 => 
            array (
                'zone_id' => 2929,
                'country_id' => 189,
                'name' => 'Prešovský',
                'code' => 'PR',
                'status' => 1,
            ),
            314 => 
            array (
                'zone_id' => 2930,
                'country_id' => 189,
                'name' => 'Trenčiansky',
                'code' => 'TC',
                'status' => 1,
            ),
            315 => 
            array (
                'zone_id' => 2931,
                'country_id' => 189,
                'name' => 'Trnavský',
                'code' => 'TV',
                'status' => 1,
            ),
            316 => 
            array (
                'zone_id' => 2932,
                'country_id' => 189,
                'name' => 'Žilinský',
                'code' => 'ZI',
                'status' => 1,
            ),
            317 => 
            array (
                'zone_id' => 2933,
                'country_id' => 191,
                'name' => 'Central',
                'code' => 'CE',
                'status' => 1,
            ),
            318 => 
            array (
                'zone_id' => 2934,
                'country_id' => 191,
                'name' => 'Choiseul',
                'code' => 'CH',
                'status' => 1,
            ),
            319 => 
            array (
                'zone_id' => 2935,
                'country_id' => 191,
                'name' => 'Guadalcanal',
                'code' => 'GC',
                'status' => 1,
            ),
            320 => 
            array (
                'zone_id' => 2936,
                'country_id' => 191,
                'name' => 'Honiara',
                'code' => 'HO',
                'status' => 1,
            ),
            321 => 
            array (
                'zone_id' => 2937,
                'country_id' => 191,
                'name' => 'Isabel',
                'code' => 'IS',
                'status' => 1,
            ),
            322 => 
            array (
                'zone_id' => 2938,
                'country_id' => 191,
                'name' => 'Makira',
                'code' => 'MK',
                'status' => 1,
            ),
            323 => 
            array (
                'zone_id' => 2939,
                'country_id' => 191,
                'name' => 'Malaita',
                'code' => 'ML',
                'status' => 1,
            ),
            324 => 
            array (
                'zone_id' => 2940,
                'country_id' => 191,
                'name' => 'Rennell and Bellona',
                'code' => 'RB',
                'status' => 1,
            ),
            325 => 
            array (
                'zone_id' => 2941,
                'country_id' => 191,
                'name' => 'Temotu',
                'code' => 'TM',
                'status' => 1,
            ),
            326 => 
            array (
                'zone_id' => 2942,
                'country_id' => 191,
                'name' => 'Western',
                'code' => 'WE',
                'status' => 1,
            ),
            327 => 
            array (
                'zone_id' => 2943,
                'country_id' => 192,
                'name' => 'Awdal',
                'code' => 'AW',
                'status' => 1,
            ),
            328 => 
            array (
                'zone_id' => 2944,
                'country_id' => 192,
                'name' => 'Bakool',
                'code' => 'BK',
                'status' => 1,
            ),
            329 => 
            array (
                'zone_id' => 2945,
                'country_id' => 192,
                'name' => 'Banaadir',
                'code' => 'BN',
                'status' => 1,
            ),
            330 => 
            array (
                'zone_id' => 2946,
                'country_id' => 192,
                'name' => 'Bari',
                'code' => 'BR',
                'status' => 1,
            ),
            331 => 
            array (
                'zone_id' => 2947,
                'country_id' => 192,
                'name' => 'Bay',
                'code' => 'BY',
                'status' => 1,
            ),
            332 => 
            array (
                'zone_id' => 2948,
                'country_id' => 192,
                'name' => 'Galguduud',
                'code' => 'GA',
                'status' => 1,
            ),
            333 => 
            array (
                'zone_id' => 2949,
                'country_id' => 192,
                'name' => 'Gedo',
                'code' => 'GE',
                'status' => 1,
            ),
            334 => 
            array (
                'zone_id' => 2950,
                'country_id' => 192,
                'name' => 'Hiiraan',
                'code' => 'HI',
                'status' => 1,
            ),
            335 => 
            array (
                'zone_id' => 2951,
                'country_id' => 192,
                'name' => 'Jubbada Dhexe',
                'code' => 'JD',
                'status' => 1,
            ),
            336 => 
            array (
                'zone_id' => 2952,
                'country_id' => 192,
                'name' => 'Jubbada Hoose',
                'code' => 'JH',
                'status' => 1,
            ),
            337 => 
            array (
                'zone_id' => 2953,
                'country_id' => 192,
                'name' => 'Mudug',
                'code' => 'MU',
                'status' => 1,
            ),
            338 => 
            array (
                'zone_id' => 2954,
                'country_id' => 192,
                'name' => 'Nugaal',
                'code' => 'NU',
                'status' => 1,
            ),
            339 => 
            array (
                'zone_id' => 2955,
                'country_id' => 192,
                'name' => 'Sanaag',
                'code' => 'SA',
                'status' => 1,
            ),
            340 => 
            array (
                'zone_id' => 2956,
                'country_id' => 192,
                'name' => 'Shabeellaha Dhexe',
                'code' => 'SD',
                'status' => 1,
            ),
            341 => 
            array (
                'zone_id' => 2957,
                'country_id' => 192,
                'name' => 'Shabeellaha Hoose',
                'code' => 'SH',
                'status' => 1,
            ),
            342 => 
            array (
                'zone_id' => 2958,
                'country_id' => 192,
                'name' => 'Sool',
                'code' => 'SL',
                'status' => 1,
            ),
            343 => 
            array (
                'zone_id' => 2959,
                'country_id' => 192,
                'name' => 'Togdheer',
                'code' => 'TO',
                'status' => 1,
            ),
            344 => 
            array (
                'zone_id' => 2960,
                'country_id' => 192,
                'name' => 'Woqooyi Galbeed',
                'code' => 'WG',
                'status' => 1,
            ),
            345 => 
            array (
                'zone_id' => 2961,
                'country_id' => 193,
                'name' => 'Eastern Cape',
                'code' => 'EC',
                'status' => 1,
            ),
            346 => 
            array (
                'zone_id' => 2962,
                'country_id' => 193,
                'name' => 'Free State',
                'code' => 'FS',
                'status' => 1,
            ),
            347 => 
            array (
                'zone_id' => 2963,
                'country_id' => 193,
                'name' => 'Gauteng',
                'code' => 'GT',
                'status' => 1,
            ),
            348 => 
            array (
                'zone_id' => 2964,
                'country_id' => 193,
                'name' => 'KwaZulu-Natal',
                'code' => 'KN',
                'status' => 1,
            ),
            349 => 
            array (
                'zone_id' => 2965,
                'country_id' => 193,
                'name' => 'Limpopo',
                'code' => 'LP',
                'status' => 1,
            ),
            350 => 
            array (
                'zone_id' => 2966,
                'country_id' => 193,
                'name' => 'Mpumalanga',
                'code' => 'MP',
                'status' => 1,
            ),
            351 => 
            array (
                'zone_id' => 2967,
                'country_id' => 193,
                'name' => 'North West',
                'code' => 'NW',
                'status' => 1,
            ),
            352 => 
            array (
                'zone_id' => 2968,
                'country_id' => 193,
                'name' => 'Northern Cape',
                'code' => 'NC',
                'status' => 1,
            ),
            353 => 
            array (
                'zone_id' => 2969,
                'country_id' => 193,
                'name' => 'Western Cape',
                'code' => 'WC',
                'status' => 1,
            ),
            354 => 
            array (
                'zone_id' => 2970,
                'country_id' => 195,
                'name' => 'La Coru&ntilde;a',
                'code' => 'CA',
                'status' => 1,
            ),
            355 => 
            array (
                'zone_id' => 2971,
                'country_id' => 195,
                'name' => '&Aacute;lava',
                'code' => 'AL',
                'status' => 1,
            ),
            356 => 
            array (
                'zone_id' => 2972,
                'country_id' => 195,
                'name' => 'Albacete',
                'code' => 'AB',
                'status' => 1,
            ),
            357 => 
            array (
                'zone_id' => 2973,
                'country_id' => 195,
                'name' => 'Alicante',
                'code' => 'AC',
                'status' => 1,
            ),
            358 => 
            array (
                'zone_id' => 2974,
                'country_id' => 195,
                'name' => 'Almeria',
                'code' => 'AM',
                'status' => 1,
            ),
            359 => 
            array (
                'zone_id' => 2975,
                'country_id' => 195,
                'name' => 'Asturias',
                'code' => 'AS',
                'status' => 1,
            ),
            360 => 
            array (
                'zone_id' => 2976,
                'country_id' => 195,
                'name' => '&Aacute;vila',
                'code' => 'AV',
                'status' => 1,
            ),
            361 => 
            array (
                'zone_id' => 2977,
                'country_id' => 195,
                'name' => 'Badajoz',
                'code' => 'BJ',
                'status' => 1,
            ),
            362 => 
            array (
                'zone_id' => 2978,
                'country_id' => 195,
                'name' => 'Baleares',
                'code' => 'IB',
                'status' => 1,
            ),
            363 => 
            array (
                'zone_id' => 2979,
                'country_id' => 195,
                'name' => 'Barcelona',
                'code' => 'BA',
                'status' => 1,
            ),
            364 => 
            array (
                'zone_id' => 2980,
                'country_id' => 195,
                'name' => 'Burgos',
                'code' => 'BU',
                'status' => 1,
            ),
            365 => 
            array (
                'zone_id' => 2981,
                'country_id' => 195,
                'name' => 'C&aacute;ceres',
                'code' => 'CC',
                'status' => 1,
            ),
            366 => 
            array (
                'zone_id' => 2982,
                'country_id' => 195,
                'name' => 'C&aacute;diz',
                'code' => 'CZ',
                'status' => 1,
            ),
            367 => 
            array (
                'zone_id' => 2983,
                'country_id' => 195,
                'name' => 'Cantabria',
                'code' => 'CT',
                'status' => 1,
            ),
            368 => 
            array (
                'zone_id' => 2984,
                'country_id' => 195,
                'name' => 'Castell&oacute;n',
                'code' => 'CL',
                'status' => 1,
            ),
            369 => 
            array (
                'zone_id' => 2985,
                'country_id' => 195,
                'name' => 'Ceuta',
                'code' => 'CE',
                'status' => 1,
            ),
            370 => 
            array (
                'zone_id' => 2986,
                'country_id' => 195,
                'name' => 'Ciudad Real',
                'code' => 'CR',
                'status' => 1,
            ),
            371 => 
            array (
                'zone_id' => 2987,
                'country_id' => 195,
                'name' => 'C&oacute;rdoba',
                'code' => 'CD',
                'status' => 1,
            ),
            372 => 
            array (
                'zone_id' => 2988,
                'country_id' => 195,
                'name' => 'Cuenca',
                'code' => 'CU',
                'status' => 1,
            ),
            373 => 
            array (
                'zone_id' => 2989,
                'country_id' => 195,
                'name' => 'Girona',
                'code' => 'GI',
                'status' => 1,
            ),
            374 => 
            array (
                'zone_id' => 2990,
                'country_id' => 195,
                'name' => 'Granada',
                'code' => 'GD',
                'status' => 1,
            ),
            375 => 
            array (
                'zone_id' => 2991,
                'country_id' => 195,
                'name' => 'Guadalajara',
                'code' => 'GJ',
                'status' => 1,
            ),
            376 => 
            array (
                'zone_id' => 2992,
                'country_id' => 195,
                'name' => 'Guip&uacute;zcoa',
                'code' => 'GP',
                'status' => 1,
            ),
            377 => 
            array (
                'zone_id' => 2993,
                'country_id' => 195,
                'name' => 'Huelva',
                'code' => 'HL',
                'status' => 1,
            ),
            378 => 
            array (
                'zone_id' => 2994,
                'country_id' => 195,
                'name' => 'Huesca',
                'code' => 'HS',
                'status' => 1,
            ),
            379 => 
            array (
                'zone_id' => 2995,
                'country_id' => 195,
                'name' => 'Ja&eacute;n',
                'code' => 'JN',
                'status' => 1,
            ),
            380 => 
            array (
                'zone_id' => 2996,
                'country_id' => 195,
                'name' => 'La Rioja',
                'code' => 'RJ',
                'status' => 1,
            ),
            381 => 
            array (
                'zone_id' => 2997,
                'country_id' => 195,
                'name' => 'Las Palmas',
                'code' => 'PM',
                'status' => 1,
            ),
            382 => 
            array (
                'zone_id' => 2998,
                'country_id' => 195,
                'name' => 'Leon',
                'code' => 'LE',
                'status' => 1,
            ),
            383 => 
            array (
                'zone_id' => 2999,
                'country_id' => 195,
                'name' => 'Lleida',
                'code' => 'LL',
                'status' => 1,
            ),
            384 => 
            array (
                'zone_id' => 3000,
                'country_id' => 195,
                'name' => 'Lugo',
                'code' => 'LG',
                'status' => 1,
            ),
            385 => 
            array (
                'zone_id' => 3001,
                'country_id' => 195,
                'name' => 'Madrid',
                'code' => 'MD',
                'status' => 1,
            ),
            386 => 
            array (
                'zone_id' => 3002,
                'country_id' => 195,
                'name' => 'Malaga',
                'code' => 'MA',
                'status' => 1,
            ),
            387 => 
            array (
                'zone_id' => 3003,
                'country_id' => 195,
                'name' => 'Melilla',
                'code' => 'ML',
                'status' => 1,
            ),
            388 => 
            array (
                'zone_id' => 3004,
                'country_id' => 195,
                'name' => 'Murcia',
                'code' => 'MU',
                'status' => 1,
            ),
            389 => 
            array (
                'zone_id' => 3005,
                'country_id' => 195,
                'name' => 'Navarra',
                'code' => 'NV',
                'status' => 1,
            ),
            390 => 
            array (
                'zone_id' => 3006,
                'country_id' => 195,
                'name' => 'Ourense',
                'code' => 'OU',
                'status' => 1,
            ),
            391 => 
            array (
                'zone_id' => 3007,
                'country_id' => 195,
                'name' => 'Palencia',
                'code' => 'PL',
                'status' => 1,
            ),
            392 => 
            array (
                'zone_id' => 3008,
                'country_id' => 195,
                'name' => 'Pontevedra',
                'code' => 'PO',
                'status' => 1,
            ),
            393 => 
            array (
                'zone_id' => 3009,
                'country_id' => 195,
                'name' => 'Salamanca',
                'code' => 'SL',
                'status' => 1,
            ),
            394 => 
            array (
                'zone_id' => 3010,
                'country_id' => 195,
                'name' => 'Santa Cruz de Tenerife',
                'code' => 'SC',
                'status' => 1,
            ),
            395 => 
            array (
                'zone_id' => 3011,
                'country_id' => 195,
                'name' => 'Segovia',
                'code' => 'SG',
                'status' => 1,
            ),
            396 => 
            array (
                'zone_id' => 3012,
                'country_id' => 195,
                'name' => 'Sevilla',
                'code' => 'SV',
                'status' => 1,
            ),
            397 => 
            array (
                'zone_id' => 3013,
                'country_id' => 195,
                'name' => 'Soria',
                'code' => 'SO',
                'status' => 1,
            ),
            398 => 
            array (
                'zone_id' => 3014,
                'country_id' => 195,
                'name' => 'Tarragona',
                'code' => 'TA',
                'status' => 1,
            ),
            399 => 
            array (
                'zone_id' => 3015,
                'country_id' => 195,
                'name' => 'Teruel',
                'code' => 'TE',
                'status' => 1,
            ),
            400 => 
            array (
                'zone_id' => 3016,
                'country_id' => 195,
                'name' => 'Toledo',
                'code' => 'TO',
                'status' => 1,
            ),
            401 => 
            array (
                'zone_id' => 3017,
                'country_id' => 195,
                'name' => 'Valencia',
                'code' => 'VC',
                'status' => 1,
            ),
            402 => 
            array (
                'zone_id' => 3018,
                'country_id' => 195,
                'name' => 'Valladolid',
                'code' => 'VD',
                'status' => 1,
            ),
            403 => 
            array (
                'zone_id' => 3019,
                'country_id' => 195,
                'name' => 'Vizcaya',
                'code' => 'VZ',
                'status' => 1,
            ),
            404 => 
            array (
                'zone_id' => 3020,
                'country_id' => 195,
                'name' => 'Zamora',
                'code' => 'ZM',
                'status' => 1,
            ),
            405 => 
            array (
                'zone_id' => 3021,
                'country_id' => 195,
                'name' => 'Zaragoza',
                'code' => 'ZR',
                'status' => 1,
            ),
            406 => 
            array (
                'zone_id' => 3022,
                'country_id' => 196,
                'name' => 'Central',
                'code' => 'CE',
                'status' => 1,
            ),
            407 => 
            array (
                'zone_id' => 3023,
                'country_id' => 196,
                'name' => 'Eastern',
                'code' => 'EA',
                'status' => 1,
            ),
            408 => 
            array (
                'zone_id' => 3024,
                'country_id' => 196,
                'name' => 'North Central',
                'code' => 'NC',
                'status' => 1,
            ),
            409 => 
            array (
                'zone_id' => 3025,
                'country_id' => 196,
                'name' => 'Northern',
                'code' => 'NO',
                'status' => 1,
            ),
            410 => 
            array (
                'zone_id' => 3026,
                'country_id' => 196,
                'name' => 'North Western',
                'code' => 'NW',
                'status' => 1,
            ),
            411 => 
            array (
                'zone_id' => 3027,
                'country_id' => 196,
                'name' => 'Sabaragamuwa',
                'code' => 'SA',
                'status' => 1,
            ),
            412 => 
            array (
                'zone_id' => 3028,
                'country_id' => 196,
                'name' => 'Southern',
                'code' => 'SO',
                'status' => 1,
            ),
            413 => 
            array (
                'zone_id' => 3029,
                'country_id' => 196,
                'name' => 'Uva',
                'code' => 'UV',
                'status' => 1,
            ),
            414 => 
            array (
                'zone_id' => 3030,
                'country_id' => 196,
                'name' => 'Western',
                'code' => 'WE',
                'status' => 1,
            ),
            415 => 
            array (
                'zone_id' => 3032,
                'country_id' => 197,
                'name' => 'Saint Helena',
                'code' => 'S',
                'status' => 1,
            ),
            416 => 
            array (
                'zone_id' => 3034,
                'country_id' => 199,
                'name' => 'A\'ali an Nil',
                'code' => 'ANL',
                'status' => 1,
            ),
            417 => 
            array (
                'zone_id' => 3035,
                'country_id' => 199,
                'name' => 'Al Bahr al Ahmar',
                'code' => 'BAM',
                'status' => 1,
            ),
            418 => 
            array (
                'zone_id' => 3036,
                'country_id' => 199,
                'name' => 'Al Buhayrat',
                'code' => 'BRT',
                'status' => 1,
            ),
            419 => 
            array (
                'zone_id' => 3037,
                'country_id' => 199,
                'name' => 'Al Jazirah',
                'code' => 'JZR',
                'status' => 1,
            ),
            420 => 
            array (
                'zone_id' => 3038,
                'country_id' => 199,
                'name' => 'Al Khartum',
                'code' => 'KRT',
                'status' => 1,
            ),
            421 => 
            array (
                'zone_id' => 3039,
                'country_id' => 199,
                'name' => 'Al Qadarif',
                'code' => 'QDR',
                'status' => 1,
            ),
            422 => 
            array (
                'zone_id' => 3040,
                'country_id' => 199,
                'name' => 'Al Wahdah',
                'code' => 'WDH',
                'status' => 1,
            ),
            423 => 
            array (
                'zone_id' => 3041,
                'country_id' => 199,
                'name' => 'An Nil al Abyad',
                'code' => 'ANB',
                'status' => 1,
            ),
            424 => 
            array (
                'zone_id' => 3042,
                'country_id' => 199,
                'name' => 'An Nil al Azraq',
                'code' => 'ANZ',
                'status' => 1,
            ),
            425 => 
            array (
                'zone_id' => 3043,
                'country_id' => 199,
                'name' => 'Ash Shamaliyah',
                'code' => 'ASH',
                'status' => 1,
            ),
            426 => 
            array (
                'zone_id' => 3044,
                'country_id' => 199,
                'name' => 'Bahr al Jabal',
                'code' => 'BJA',
                'status' => 1,
            ),
            427 => 
            array (
                'zone_id' => 3045,
                'country_id' => 199,
                'name' => 'Gharb al Istiwa\'iyah',
                'code' => 'GIS',
                'status' => 1,
            ),
            428 => 
            array (
                'zone_id' => 3046,
                'country_id' => 199,
                'name' => 'Gharb Bahr al Ghazal',
                'code' => 'GBG',
                'status' => 1,
            ),
            429 => 
            array (
                'zone_id' => 3047,
                'country_id' => 199,
                'name' => 'Gharb Darfur',
                'code' => 'GDA',
                'status' => 1,
            ),
            430 => 
            array (
                'zone_id' => 3048,
                'country_id' => 199,
                'name' => 'Gharb Kurdufan',
                'code' => 'GKU',
                'status' => 1,
            ),
            431 => 
            array (
                'zone_id' => 3049,
                'country_id' => 199,
                'name' => 'Janub Darfur',
                'code' => 'JDA',
                'status' => 1,
            ),
            432 => 
            array (
                'zone_id' => 3050,
                'country_id' => 199,
                'name' => 'Janub Kurdufan',
                'code' => 'JKU',
                'status' => 1,
            ),
            433 => 
            array (
                'zone_id' => 3051,
                'country_id' => 199,
                'name' => 'Junqali',
                'code' => 'JQL',
                'status' => 1,
            ),
            434 => 
            array (
                'zone_id' => 3052,
                'country_id' => 199,
                'name' => 'Kassala',
                'code' => 'KSL',
                'status' => 1,
            ),
            435 => 
            array (
                'zone_id' => 3053,
                'country_id' => 199,
                'name' => 'Nahr an Nil',
                'code' => 'NNL',
                'status' => 1,
            ),
            436 => 
            array (
                'zone_id' => 3054,
                'country_id' => 199,
                'name' => 'Shamal Bahr al Ghazal',
                'code' => 'SBG',
                'status' => 1,
            ),
            437 => 
            array (
                'zone_id' => 3055,
                'country_id' => 199,
                'name' => 'Shamal Darfur',
                'code' => 'SDA',
                'status' => 1,
            ),
            438 => 
            array (
                'zone_id' => 3056,
                'country_id' => 199,
                'name' => 'Shamal Kurdufan',
                'code' => 'SKU',
                'status' => 1,
            ),
            439 => 
            array (
                'zone_id' => 3057,
                'country_id' => 199,
                'name' => 'Sharq al Istiwa\'iyah',
                'code' => 'SIS',
                'status' => 1,
            ),
            440 => 
            array (
                'zone_id' => 3058,
                'country_id' => 199,
                'name' => 'Sinnar',
                'code' => 'SNR',
                'status' => 1,
            ),
            441 => 
            array (
                'zone_id' => 3059,
                'country_id' => 199,
                'name' => 'Warab',
                'code' => 'WRB',
                'status' => 1,
            ),
            442 => 
            array (
                'zone_id' => 3060,
                'country_id' => 200,
                'name' => 'Brokopondo',
                'code' => 'BR',
                'status' => 1,
            ),
            443 => 
            array (
                'zone_id' => 3061,
                'country_id' => 200,
                'name' => 'Commewijne',
                'code' => 'CM',
                'status' => 1,
            ),
            444 => 
            array (
                'zone_id' => 3062,
                'country_id' => 200,
                'name' => 'Coronie',
                'code' => 'CR',
                'status' => 1,
            ),
            445 => 
            array (
                'zone_id' => 3063,
                'country_id' => 200,
                'name' => 'Marowijne',
                'code' => 'MA',
                'status' => 1,
            ),
            446 => 
            array (
                'zone_id' => 3064,
                'country_id' => 200,
                'name' => 'Nickerie',
                'code' => 'NI',
                'status' => 1,
            ),
            447 => 
            array (
                'zone_id' => 3065,
                'country_id' => 200,
                'name' => 'Para',
                'code' => 'PA',
                'status' => 1,
            ),
            448 => 
            array (
                'zone_id' => 3066,
                'country_id' => 200,
                'name' => 'Paramaribo',
                'code' => 'PM',
                'status' => 1,
            ),
            449 => 
            array (
                'zone_id' => 3067,
                'country_id' => 200,
                'name' => 'Saramacca',
                'code' => 'SA',
                'status' => 1,
            ),
            450 => 
            array (
                'zone_id' => 3068,
                'country_id' => 200,
                'name' => 'Sipaliwini',
                'code' => 'SI',
                'status' => 1,
            ),
            451 => 
            array (
                'zone_id' => 3069,
                'country_id' => 200,
                'name' => 'Wanica',
                'code' => 'WA',
                'status' => 1,
            ),
            452 => 
            array (
                'zone_id' => 3070,
                'country_id' => 202,
                'name' => 'Hhohho',
                'code' => 'H',
                'status' => 1,
            ),
            453 => 
            array (
                'zone_id' => 3071,
                'country_id' => 202,
                'name' => 'Lubombo',
                'code' => 'L',
                'status' => 1,
            ),
            454 => 
            array (
                'zone_id' => 3072,
                'country_id' => 202,
                'name' => 'Manzini',
                'code' => 'M',
                'status' => 1,
            ),
            455 => 
            array (
                'zone_id' => 3073,
                'country_id' => 202,
                'name' => 'Shishelweni',
                'code' => 'S',
                'status' => 1,
            ),
            456 => 
            array (
                'zone_id' => 3074,
                'country_id' => 203,
                'name' => 'Blekinge',
                'code' => 'K',
                'status' => 1,
            ),
            457 => 
            array (
                'zone_id' => 3075,
                'country_id' => 203,
                'name' => 'Dalarna',
                'code' => 'W',
                'status' => 1,
            ),
            458 => 
            array (
                'zone_id' => 3076,
                'country_id' => 203,
                'name' => 'G&auml;vleborg',
                'code' => 'X',
                'status' => 1,
            ),
            459 => 
            array (
                'zone_id' => 3077,
                'country_id' => 203,
                'name' => 'Gotland',
                'code' => 'I',
                'status' => 1,
            ),
            460 => 
            array (
                'zone_id' => 3078,
                'country_id' => 203,
                'name' => 'Halland',
                'code' => 'N',
                'status' => 1,
            ),
            461 => 
            array (
                'zone_id' => 3079,
                'country_id' => 203,
                'name' => 'J&auml;mtland',
                'code' => 'Z',
                'status' => 1,
            ),
            462 => 
            array (
                'zone_id' => 3080,
                'country_id' => 203,
                'name' => 'J&ouml;nk&ouml;ping',
                'code' => 'F',
                'status' => 1,
            ),
            463 => 
            array (
                'zone_id' => 3081,
                'country_id' => 203,
                'name' => 'Kalmar',
                'code' => 'H',
                'status' => 1,
            ),
            464 => 
            array (
                'zone_id' => 3082,
                'country_id' => 203,
                'name' => 'Kronoberg',
                'code' => 'G',
                'status' => 1,
            ),
            465 => 
            array (
                'zone_id' => 3083,
                'country_id' => 203,
                'name' => 'Norrbotten',
                'code' => 'BD',
                'status' => 1,
            ),
            466 => 
            array (
                'zone_id' => 3084,
                'country_id' => 203,
                'name' => '&Ouml;rebro',
                'code' => 'T',
                'status' => 1,
            ),
            467 => 
            array (
                'zone_id' => 3085,
                'country_id' => 203,
                'name' => '&Ouml;sterg&ouml;tland',
                'code' => 'E',
                'status' => 1,
            ),
            468 => 
            array (
                'zone_id' => 3086,
                'country_id' => 203,
                'name' => 'Sk&aring;ne',
                'code' => 'M',
                'status' => 1,
            ),
            469 => 
            array (
                'zone_id' => 3087,
                'country_id' => 203,
                'name' => 'S&ouml;dermanland',
                'code' => 'D',
                'status' => 1,
            ),
            470 => 
            array (
                'zone_id' => 3088,
                'country_id' => 203,
                'name' => 'Stockholm',
                'code' => 'AB',
                'status' => 1,
            ),
            471 => 
            array (
                'zone_id' => 3089,
                'country_id' => 203,
                'name' => 'Uppsala',
                'code' => 'C',
                'status' => 1,
            ),
            472 => 
            array (
                'zone_id' => 3090,
                'country_id' => 203,
                'name' => 'V&auml;rmland',
                'code' => 'S',
                'status' => 1,
            ),
            473 => 
            array (
                'zone_id' => 3091,
                'country_id' => 203,
                'name' => 'V&auml;sterbotten',
                'code' => 'AC',
                'status' => 1,
            ),
            474 => 
            array (
                'zone_id' => 3092,
                'country_id' => 203,
                'name' => 'V&auml;sternorrland',
                'code' => 'Y',
                'status' => 1,
            ),
            475 => 
            array (
                'zone_id' => 3093,
                'country_id' => 203,
                'name' => 'V&auml;stmanland',
                'code' => 'U',
                'status' => 1,
            ),
            476 => 
            array (
                'zone_id' => 3094,
                'country_id' => 203,
                'name' => 'V&auml;stra G&ouml;taland',
                'code' => 'O',
                'status' => 1,
            ),
            477 => 
            array (
                'zone_id' => 3095,
                'country_id' => 204,
                'name' => 'Aargau',
                'code' => 'AG',
                'status' => 1,
            ),
            478 => 
            array (
                'zone_id' => 3096,
                'country_id' => 204,
                'name' => 'Appenzell Ausserrhoden',
                'code' => 'AR',
                'status' => 1,
            ),
            479 => 
            array (
                'zone_id' => 3097,
                'country_id' => 204,
                'name' => 'Appenzell Innerrhoden',
                'code' => 'AI',
                'status' => 1,
            ),
            480 => 
            array (
                'zone_id' => 3098,
                'country_id' => 204,
                'name' => 'Basel-Stadt',
                'code' => 'BS',
                'status' => 1,
            ),
            481 => 
            array (
                'zone_id' => 3099,
                'country_id' => 204,
                'name' => 'Basel-Landschaft',
                'code' => 'BL',
                'status' => 1,
            ),
            482 => 
            array (
                'zone_id' => 3100,
                'country_id' => 204,
                'name' => 'Bern',
                'code' => 'BE',
                'status' => 1,
            ),
            483 => 
            array (
                'zone_id' => 3101,
                'country_id' => 204,
                'name' => 'Fribourg',
                'code' => 'FR',
                'status' => 1,
            ),
            484 => 
            array (
                'zone_id' => 3102,
                'country_id' => 204,
                'name' => 'Gen&egrave;ve',
                'code' => 'GE',
                'status' => 1,
            ),
            485 => 
            array (
                'zone_id' => 3103,
                'country_id' => 204,
                'name' => 'Glarus',
                'code' => 'GL',
                'status' => 1,
            ),
            486 => 
            array (
                'zone_id' => 3104,
                'country_id' => 204,
                'name' => 'Graub&uuml;nden',
                'code' => 'GR',
                'status' => 1,
            ),
            487 => 
            array (
                'zone_id' => 3105,
                'country_id' => 204,
                'name' => 'Jura',
                'code' => 'JU',
                'status' => 1,
            ),
            488 => 
            array (
                'zone_id' => 3106,
                'country_id' => 204,
                'name' => 'Luzern',
                'code' => 'LU',
                'status' => 1,
            ),
            489 => 
            array (
                'zone_id' => 3107,
                'country_id' => 204,
                'name' => 'Neuch&acirc;tel',
                'code' => 'NE',
                'status' => 1,
            ),
            490 => 
            array (
                'zone_id' => 3108,
                'country_id' => 204,
                'name' => 'Nidwald',
                'code' => 'NW',
                'status' => 1,
            ),
            491 => 
            array (
                'zone_id' => 3109,
                'country_id' => 204,
                'name' => 'Obwald',
                'code' => 'OW',
                'status' => 1,
            ),
            492 => 
            array (
                'zone_id' => 3110,
                'country_id' => 204,
                'name' => 'St. Gallen',
                'code' => 'SG',
                'status' => 1,
            ),
            493 => 
            array (
                'zone_id' => 3111,
                'country_id' => 204,
                'name' => 'Schaffhausen',
                'code' => 'SH',
                'status' => 1,
            ),
            494 => 
            array (
                'zone_id' => 3112,
                'country_id' => 204,
                'name' => 'Schwyz',
                'code' => 'SZ',
                'status' => 1,
            ),
            495 => 
            array (
                'zone_id' => 3113,
                'country_id' => 204,
                'name' => 'Solothurn',
                'code' => 'SO',
                'status' => 1,
            ),
            496 => 
            array (
                'zone_id' => 3114,
                'country_id' => 204,
                'name' => 'Thurgau',
                'code' => 'TG',
                'status' => 1,
            ),
            497 => 
            array (
                'zone_id' => 3115,
                'country_id' => 204,
                'name' => 'Ticino',
                'code' => 'TI',
                'status' => 1,
            ),
            498 => 
            array (
                'zone_id' => 3116,
                'country_id' => 204,
                'name' => 'Uri',
                'code' => 'UR',
                'status' => 1,
            ),
            499 => 
            array (
                'zone_id' => 3117,
                'country_id' => 204,
                'name' => 'Valais',
                'code' => 'VS',
                'status' => 1,
            ),
        ));
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 3118,
                'country_id' => 204,
                'name' => 'Vaud',
                'code' => 'VD',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 3119,
                'country_id' => 204,
                'name' => 'Zug',
                'code' => 'ZG',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 3120,
                'country_id' => 204,
                'name' => 'Z&uuml;rich',
                'code' => 'ZH',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 3121,
                'country_id' => 205,
                'name' => 'Al Hasakah',
                'code' => 'HA',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 3122,
                'country_id' => 205,
                'name' => 'Al Ladhiqiyah',
                'code' => 'LA',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 3123,
                'country_id' => 205,
                'name' => 'Al Qunaytirah',
                'code' => 'QU',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 3124,
                'country_id' => 205,
                'name' => 'Ar Raqqah',
                'code' => 'RQ',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 3125,
                'country_id' => 205,
                'name' => 'As Suwayda',
                'code' => 'SU',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 3126,
                'country_id' => 205,
                'name' => 'Dara',
                'code' => 'DA',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 3127,
                'country_id' => 205,
                'name' => 'Dayr az Zawr',
                'code' => 'DZ',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 3128,
                'country_id' => 205,
                'name' => 'Dimashq',
                'code' => 'DI',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 3129,
                'country_id' => 205,
                'name' => 'Halab',
                'code' => 'HL',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 3130,
                'country_id' => 205,
                'name' => 'Hamah',
                'code' => 'HM',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 3131,
                'country_id' => 205,
                'name' => 'Hims',
                'code' => 'HI',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 3132,
                'country_id' => 205,
                'name' => 'Idlib',
                'code' => 'ID',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 3133,
                'country_id' => 205,
                'name' => 'Rif Dimashq',
                'code' => 'RD',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 3134,
                'country_id' => 205,
                'name' => 'Tartus',
                'code' => 'TA',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 3135,
                'country_id' => 206,
                'name' => 'Chang-hua',
                'code' => 'CH',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 3136,
                'country_id' => 206,
                'name' => 'Chia-i',
                'code' => 'CI',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 3137,
                'country_id' => 206,
                'name' => 'Hsin-chu',
                'code' => 'HS',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 3138,
                'country_id' => 206,
                'name' => 'Hua-lien',
                'code' => 'HL',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 3139,
                'country_id' => 206,
                'name' => 'I-lan',
                'code' => 'IL',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 3140,
                'country_id' => 206,
                'name' => 'Kao-hsiung county',
                'code' => 'KH',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 3141,
                'country_id' => 206,
                'name' => 'Kin-men',
                'code' => 'KM',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 3142,
                'country_id' => 206,
                'name' => 'Lien-chiang',
                'code' => 'LC',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 3143,
                'country_id' => 206,
                'name' => 'Miao-li',
                'code' => 'ML',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 3144,
                'country_id' => 206,
                'name' => 'Nan-t\'ou',
                'code' => 'NT',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 3145,
                'country_id' => 206,
                'name' => 'P\'eng-hu',
                'code' => 'PH',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 3146,
                'country_id' => 206,
                'name' => 'P\'ing-tung',
                'code' => 'PT',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 3147,
                'country_id' => 206,
                'name' => 'T\'ai-chung',
                'code' => 'TG',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 3148,
                'country_id' => 206,
                'name' => 'T\'ai-nan',
                'code' => 'TA',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 3149,
                'country_id' => 206,
                'name' => 'T\'ai-pei county',
                'code' => 'TP',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 3150,
                'country_id' => 206,
                'name' => 'T\'ai-tung',
                'code' => 'TT',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 3151,
                'country_id' => 206,
                'name' => 'T\'ao-yuan',
                'code' => 'TY',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 3152,
                'country_id' => 206,
                'name' => 'Yun-lin',
                'code' => 'YL',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 3153,
                'country_id' => 206,
                'name' => 'Chia-i city',
                'code' => 'CC',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 3154,
                'country_id' => 206,
                'name' => 'Chi-lung',
                'code' => 'CL',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 3155,
                'country_id' => 206,
                'name' => 'Hsin-chu',
                'code' => 'HC',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 3156,
                'country_id' => 206,
                'name' => 'T\'ai-chung',
                'code' => 'TH',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 3157,
                'country_id' => 206,
                'name' => 'T\'ai-nan',
                'code' => 'TN',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 3158,
                'country_id' => 206,
                'name' => 'Kao-hsiung city',
                'code' => 'KC',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 3159,
                'country_id' => 206,
                'name' => 'T\'ai-pei city',
                'code' => 'TC',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 3160,
                'country_id' => 207,
                'name' => 'Gorno-Badakhstan',
                'code' => 'GB',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 3161,
                'country_id' => 207,
                'name' => 'Khatlon',
                'code' => 'KT',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 3162,
                'country_id' => 207,
                'name' => 'Sughd',
                'code' => 'SU',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 3163,
                'country_id' => 208,
                'name' => 'Arusha',
                'code' => 'AR',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 3164,
                'country_id' => 208,
                'name' => 'Dar es Salaam',
                'code' => 'DS',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 3165,
                'country_id' => 208,
                'name' => 'Dodoma',
                'code' => 'DO',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 3166,
                'country_id' => 208,
                'name' => 'Iringa',
                'code' => 'IR',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 3167,
                'country_id' => 208,
                'name' => 'Kagera',
                'code' => 'KA',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 3168,
                'country_id' => 208,
                'name' => 'Kigoma',
                'code' => 'KI',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 3169,
                'country_id' => 208,
                'name' => 'Kilimanjaro',
                'code' => 'KJ',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 3170,
                'country_id' => 208,
                'name' => 'Lindi',
                'code' => 'LN',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 3171,
                'country_id' => 208,
                'name' => 'Manyara',
                'code' => 'MY',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 3172,
                'country_id' => 208,
                'name' => 'Mara',
                'code' => 'MR',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 3173,
                'country_id' => 208,
                'name' => 'Mbeya',
                'code' => 'MB',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 3174,
                'country_id' => 208,
                'name' => 'Morogoro',
                'code' => 'MO',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 3175,
                'country_id' => 208,
                'name' => 'Mtwara',
                'code' => 'MT',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 3176,
                'country_id' => 208,
                'name' => 'Mwanza',
                'code' => 'MW',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 3177,
                'country_id' => 208,
                'name' => 'Pemba North',
                'code' => 'PN',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 3178,
                'country_id' => 208,
                'name' => 'Pemba South',
                'code' => 'PS',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 3179,
                'country_id' => 208,
                'name' => 'Pwani',
                'code' => 'PW',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 3180,
                'country_id' => 208,
                'name' => 'Rukwa',
                'code' => 'RK',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 3181,
                'country_id' => 208,
                'name' => 'Ruvuma',
                'code' => 'RV',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 3182,
                'country_id' => 208,
                'name' => 'Shinyanga',
                'code' => 'SH',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 3183,
                'country_id' => 208,
                'name' => 'Singida',
                'code' => 'SI',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 3184,
                'country_id' => 208,
                'name' => 'Tabora',
                'code' => 'TB',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 3185,
                'country_id' => 208,
                'name' => 'Tanga',
                'code' => 'TN',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 3186,
                'country_id' => 208,
                'name' => 'Zanzibar Central/South',
                'code' => 'ZC',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 3187,
                'country_id' => 208,
                'name' => 'Zanzibar North',
                'code' => 'ZN',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 3188,
                'country_id' => 208,
                'name' => 'Zanzibar Urban/West',
                'code' => 'ZU',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 3189,
                'country_id' => 209,
                'name' => 'Amnat Charoen',
                'code' => 'Amnat Charoen',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 3190,
                'country_id' => 209,
                'name' => 'Ang Thong',
                'code' => 'Ang Thong',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 3191,
                'country_id' => 209,
                'name' => 'Ayutthaya',
                'code' => 'Ayutthaya',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 3192,
                'country_id' => 209,
                'name' => 'Bangkok',
                'code' => 'Bangkok',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 3193,
                'country_id' => 209,
                'name' => 'Buriram',
                'code' => 'Buriram',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 3194,
                'country_id' => 209,
                'name' => 'Chachoengsao',
                'code' => 'Chachoengsao',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 3195,
                'country_id' => 209,
                'name' => 'Chai Nat',
                'code' => 'Chai Nat',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 3196,
                'country_id' => 209,
                'name' => 'Chaiyaphum',
                'code' => 'Chaiyaphum',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 3197,
                'country_id' => 209,
                'name' => 'Chanthaburi',
                'code' => 'Chanthaburi',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 3198,
                'country_id' => 209,
                'name' => 'Chiang Mai',
                'code' => 'Chiang Mai',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 3199,
                'country_id' => 209,
                'name' => 'Chiang Rai',
                'code' => 'Chiang Rai',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 3200,
                'country_id' => 209,
                'name' => 'Chon Buri',
                'code' => 'Chon Buri',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 3201,
                'country_id' => 209,
                'name' => 'Chumphon',
                'code' => 'Chumphon',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 3202,
                'country_id' => 209,
                'name' => 'Kalasin',
                'code' => 'Kalasin',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 3203,
                'country_id' => 209,
                'name' => 'Kamphaeng Phet',
                'code' => 'Kamphaeng Phet',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 3204,
                'country_id' => 209,
                'name' => 'Kanchanaburi',
                'code' => 'Kanchanaburi',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 3205,
                'country_id' => 209,
                'name' => 'Khon Kaen',
                'code' => 'Khon Kaen',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 3206,
                'country_id' => 209,
                'name' => 'Krabi',
                'code' => 'Krabi',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 3207,
                'country_id' => 209,
                'name' => 'Lampang',
                'code' => 'Lampang',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 3208,
                'country_id' => 209,
                'name' => 'Lamphun',
                'code' => 'Lamphun',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 3209,
                'country_id' => 209,
                'name' => 'Loei',
                'code' => 'Loei',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 3210,
                'country_id' => 209,
                'name' => 'Lop Buri',
                'code' => 'Lop Buri',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 3211,
                'country_id' => 209,
                'name' => 'Mae Hong Son',
                'code' => 'Mae Hong Son',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 3212,
                'country_id' => 209,
                'name' => 'Maha Sarakham',
                'code' => 'Maha Sarakham',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 3213,
                'country_id' => 209,
                'name' => 'Mukdahan',
                'code' => 'Mukdahan',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 3214,
                'country_id' => 209,
                'name' => 'Nakhon Nayok',
                'code' => 'Nakhon Nayok',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 3215,
                'country_id' => 209,
                'name' => 'Nakhon Pathom',
                'code' => 'Nakhon Pathom',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 3216,
                'country_id' => 209,
                'name' => 'Nakhon Phanom',
                'code' => 'Nakhon Phanom',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 3217,
                'country_id' => 209,
                'name' => 'Nakhon Ratchasima',
                'code' => 'Nakhon Ratchasima',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 3218,
                'country_id' => 209,
                'name' => 'Nakhon Sawan',
                'code' => 'Nakhon Sawan',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 3219,
                'country_id' => 209,
                'name' => 'Nakhon Si Thammarat',
                'code' => 'Nakhon Si Thammarat',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 3220,
                'country_id' => 209,
                'name' => 'Nan',
                'code' => 'Nan',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 3221,
                'country_id' => 209,
                'name' => 'Narathiwat',
                'code' => 'Narathiwat',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 3222,
                'country_id' => 209,
                'name' => 'Nong Bua Lamphu',
                'code' => 'Nong Bua Lamphu',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 3223,
                'country_id' => 209,
                'name' => 'Nong Khai',
                'code' => 'Nong Khai',
                'status' => 1,
            ),
            106 => 
            array (
                'zone_id' => 3224,
                'country_id' => 209,
                'name' => 'Nonthaburi',
                'code' => 'Nonthaburi',
                'status' => 1,
            ),
            107 => 
            array (
                'zone_id' => 3225,
                'country_id' => 209,
                'name' => 'Pathum Thani',
                'code' => 'Pathum Thani',
                'status' => 1,
            ),
            108 => 
            array (
                'zone_id' => 3226,
                'country_id' => 209,
                'name' => 'Pattani',
                'code' => 'Pattani',
                'status' => 1,
            ),
            109 => 
            array (
                'zone_id' => 3227,
                'country_id' => 209,
                'name' => 'Phangnga',
                'code' => 'Phangnga',
                'status' => 1,
            ),
            110 => 
            array (
                'zone_id' => 3228,
                'country_id' => 209,
                'name' => 'Phatthalung',
                'code' => 'Phatthalung',
                'status' => 1,
            ),
            111 => 
            array (
                'zone_id' => 3229,
                'country_id' => 209,
                'name' => 'Phayao',
                'code' => 'Phayao',
                'status' => 1,
            ),
            112 => 
            array (
                'zone_id' => 3230,
                'country_id' => 209,
                'name' => 'Phetchabun',
                'code' => 'Phetchabun',
                'status' => 1,
            ),
            113 => 
            array (
                'zone_id' => 3231,
                'country_id' => 209,
                'name' => 'Phetchaburi',
                'code' => 'Phetchaburi',
                'status' => 1,
            ),
            114 => 
            array (
                'zone_id' => 3232,
                'country_id' => 209,
                'name' => 'Phichit',
                'code' => 'Phichit',
                'status' => 1,
            ),
            115 => 
            array (
                'zone_id' => 3233,
                'country_id' => 209,
                'name' => 'Phitsanulok',
                'code' => 'Phitsanulok',
                'status' => 1,
            ),
            116 => 
            array (
                'zone_id' => 3234,
                'country_id' => 209,
                'name' => 'Phrae',
                'code' => 'Phrae',
                'status' => 1,
            ),
            117 => 
            array (
                'zone_id' => 3235,
                'country_id' => 209,
                'name' => 'Phuket',
                'code' => 'Phuket',
                'status' => 1,
            ),
            118 => 
            array (
                'zone_id' => 3236,
                'country_id' => 209,
                'name' => 'Prachin Buri',
                'code' => 'Prachin Buri',
                'status' => 1,
            ),
            119 => 
            array (
                'zone_id' => 3237,
                'country_id' => 209,
                'name' => 'Prachuap Khiri Khan',
                'code' => 'Prachuap Khiri Khan',
                'status' => 1,
            ),
            120 => 
            array (
                'zone_id' => 3238,
                'country_id' => 209,
                'name' => 'Ranong',
                'code' => 'Ranong',
                'status' => 1,
            ),
            121 => 
            array (
                'zone_id' => 3239,
                'country_id' => 209,
                'name' => 'Ratchaburi',
                'code' => 'Ratchaburi',
                'status' => 1,
            ),
            122 => 
            array (
                'zone_id' => 3240,
                'country_id' => 209,
                'name' => 'Rayong',
                'code' => 'Rayong',
                'status' => 1,
            ),
            123 => 
            array (
                'zone_id' => 3241,
                'country_id' => 209,
                'name' => 'Roi Et',
                'code' => 'Roi Et',
                'status' => 1,
            ),
            124 => 
            array (
                'zone_id' => 3242,
                'country_id' => 209,
                'name' => 'Sa Kaeo',
                'code' => 'Sa Kaeo',
                'status' => 1,
            ),
            125 => 
            array (
                'zone_id' => 3243,
                'country_id' => 209,
                'name' => 'Sakon Nakhon',
                'code' => 'Sakon Nakhon',
                'status' => 1,
            ),
            126 => 
            array (
                'zone_id' => 3244,
                'country_id' => 209,
                'name' => 'Samut Prakan',
                'code' => 'Samut Prakan',
                'status' => 1,
            ),
            127 => 
            array (
                'zone_id' => 3245,
                'country_id' => 209,
                'name' => 'Samut Sakhon',
                'code' => 'Samut Sakhon',
                'status' => 1,
            ),
            128 => 
            array (
                'zone_id' => 3246,
                'country_id' => 209,
                'name' => 'Samut Songkhram',
                'code' => 'Samut Songkhram',
                'status' => 1,
            ),
            129 => 
            array (
                'zone_id' => 3247,
                'country_id' => 209,
                'name' => 'Sara Buri',
                'code' => 'Sara Buri',
                'status' => 1,
            ),
            130 => 
            array (
                'zone_id' => 3248,
                'country_id' => 209,
                'name' => 'Satun',
                'code' => 'Satun',
                'status' => 1,
            ),
            131 => 
            array (
                'zone_id' => 3249,
                'country_id' => 209,
                'name' => 'Sing Buri',
                'code' => 'Sing Buri',
                'status' => 1,
            ),
            132 => 
            array (
                'zone_id' => 3250,
                'country_id' => 209,
                'name' => 'Sisaket',
                'code' => 'Sisaket',
                'status' => 1,
            ),
            133 => 
            array (
                'zone_id' => 3251,
                'country_id' => 209,
                'name' => 'Songkhla',
                'code' => 'Songkhla',
                'status' => 1,
            ),
            134 => 
            array (
                'zone_id' => 3252,
                'country_id' => 209,
                'name' => 'Sukhothai',
                'code' => 'Sukhothai',
                'status' => 1,
            ),
            135 => 
            array (
                'zone_id' => 3253,
                'country_id' => 209,
                'name' => 'Suphan Buri',
                'code' => 'Suphan Buri',
                'status' => 1,
            ),
            136 => 
            array (
                'zone_id' => 3254,
                'country_id' => 209,
                'name' => 'Surat Thani',
                'code' => 'Surat Thani',
                'status' => 1,
            ),
            137 => 
            array (
                'zone_id' => 3255,
                'country_id' => 209,
                'name' => 'Surin',
                'code' => 'Surin',
                'status' => 1,
            ),
            138 => 
            array (
                'zone_id' => 3256,
                'country_id' => 209,
                'name' => 'Tak',
                'code' => 'Tak',
                'status' => 1,
            ),
            139 => 
            array (
                'zone_id' => 3257,
                'country_id' => 209,
                'name' => 'Trang',
                'code' => 'Trang',
                'status' => 1,
            ),
            140 => 
            array (
                'zone_id' => 3258,
                'country_id' => 209,
                'name' => 'Trat',
                'code' => 'Trat',
                'status' => 1,
            ),
            141 => 
            array (
                'zone_id' => 3259,
                'country_id' => 209,
                'name' => 'Ubon Ratchathani',
                'code' => 'Ubon Ratchathani',
                'status' => 1,
            ),
            142 => 
            array (
                'zone_id' => 3260,
                'country_id' => 209,
                'name' => 'Udon Thani',
                'code' => 'Udon Thani',
                'status' => 1,
            ),
            143 => 
            array (
                'zone_id' => 3261,
                'country_id' => 209,
                'name' => 'Uthai Thani',
                'code' => 'Uthai Thani',
                'status' => 1,
            ),
            144 => 
            array (
                'zone_id' => 3262,
                'country_id' => 209,
                'name' => 'Uttaradit',
                'code' => 'Uttaradit',
                'status' => 1,
            ),
            145 => 
            array (
                'zone_id' => 3263,
                'country_id' => 209,
                'name' => 'Yala',
                'code' => 'Yala',
                'status' => 1,
            ),
            146 => 
            array (
                'zone_id' => 3264,
                'country_id' => 209,
                'name' => 'Yasothon',
                'code' => 'Yasothon',
                'status' => 1,
            ),
            147 => 
            array (
                'zone_id' => 3265,
                'country_id' => 210,
                'name' => 'Kara',
                'code' => 'K',
                'status' => 1,
            ),
            148 => 
            array (
                'zone_id' => 3266,
                'country_id' => 210,
                'name' => 'Plateaux',
                'code' => 'P',
                'status' => 1,
            ),
            149 => 
            array (
                'zone_id' => 3267,
                'country_id' => 210,
                'name' => 'Savanes',
                'code' => 'S',
                'status' => 1,
            ),
            150 => 
            array (
                'zone_id' => 3268,
                'country_id' => 210,
                'name' => 'Centrale',
                'code' => 'C',
                'status' => 1,
            ),
            151 => 
            array (
                'zone_id' => 3269,
                'country_id' => 210,
                'name' => 'Maritime',
                'code' => 'M',
                'status' => 1,
            ),
            152 => 
            array (
                'zone_id' => 3270,
                'country_id' => 211,
                'name' => 'Atafu',
                'code' => 'A',
                'status' => 1,
            ),
            153 => 
            array (
                'zone_id' => 3271,
                'country_id' => 211,
                'name' => 'Fakaofo',
                'code' => 'F',
                'status' => 1,
            ),
            154 => 
            array (
                'zone_id' => 3272,
                'country_id' => 211,
                'name' => 'Nukunonu',
                'code' => 'N',
                'status' => 1,
            ),
            155 => 
            array (
                'zone_id' => 3273,
                'country_id' => 212,
                'name' => 'Ha\'apai',
                'code' => 'H',
                'status' => 1,
            ),
            156 => 
            array (
                'zone_id' => 3274,
                'country_id' => 212,
                'name' => 'Tongatapu',
                'code' => 'T',
                'status' => 1,
            ),
            157 => 
            array (
                'zone_id' => 3275,
                'country_id' => 212,
                'name' => 'Vava\'u',
                'code' => 'V',
                'status' => 1,
            ),
            158 => 
            array (
                'zone_id' => 3276,
                'country_id' => 213,
                'name' => 'Couva/Tabaquite/Talparo',
                'code' => 'CT',
                'status' => 1,
            ),
            159 => 
            array (
                'zone_id' => 3277,
                'country_id' => 213,
                'name' => 'Diego Martin',
                'code' => 'DM',
                'status' => 1,
            ),
            160 => 
            array (
                'zone_id' => 3278,
                'country_id' => 213,
                'name' => 'Mayaro/Rio Claro',
                'code' => 'MR',
                'status' => 1,
            ),
            161 => 
            array (
                'zone_id' => 3279,
                'country_id' => 213,
                'name' => 'Penal/Debe',
                'code' => 'PD',
                'status' => 1,
            ),
            162 => 
            array (
                'zone_id' => 3280,
                'country_id' => 213,
                'name' => 'Princes Town',
                'code' => 'PT',
                'status' => 1,
            ),
            163 => 
            array (
                'zone_id' => 3281,
                'country_id' => 213,
                'name' => 'Sangre Grande',
                'code' => 'SG',
                'status' => 1,
            ),
            164 => 
            array (
                'zone_id' => 3282,
                'country_id' => 213,
                'name' => 'San Juan/Laventille',
                'code' => 'SL',
                'status' => 1,
            ),
            165 => 
            array (
                'zone_id' => 3283,
                'country_id' => 213,
                'name' => 'Siparia',
                'code' => 'SI',
                'status' => 1,
            ),
            166 => 
            array (
                'zone_id' => 3284,
                'country_id' => 213,
                'name' => 'Tunapuna/Piarco',
                'code' => 'TP',
                'status' => 1,
            ),
            167 => 
            array (
                'zone_id' => 3285,
                'country_id' => 213,
                'name' => 'Port of Spain',
                'code' => 'PS',
                'status' => 1,
            ),
            168 => 
            array (
                'zone_id' => 3286,
                'country_id' => 213,
                'name' => 'San Fernando',
                'code' => 'SF',
                'status' => 1,
            ),
            169 => 
            array (
                'zone_id' => 3287,
                'country_id' => 213,
                'name' => 'Arima',
                'code' => 'AR',
                'status' => 1,
            ),
            170 => 
            array (
                'zone_id' => 3288,
                'country_id' => 213,
                'name' => 'Point Fortin',
                'code' => 'PF',
                'status' => 1,
            ),
            171 => 
            array (
                'zone_id' => 3289,
                'country_id' => 213,
                'name' => 'Chaguanas',
                'code' => 'CH',
                'status' => 1,
            ),
            172 => 
            array (
                'zone_id' => 3290,
                'country_id' => 213,
                'name' => 'Tobago',
                'code' => 'TO',
                'status' => 1,
            ),
            173 => 
            array (
                'zone_id' => 3291,
                'country_id' => 214,
                'name' => 'Ariana',
                'code' => 'AR',
                'status' => 1,
            ),
            174 => 
            array (
                'zone_id' => 3292,
                'country_id' => 214,
                'name' => 'Beja',
                'code' => 'BJ',
                'status' => 1,
            ),
            175 => 
            array (
                'zone_id' => 3293,
                'country_id' => 214,
                'name' => 'Ben Arous',
                'code' => 'BA',
                'status' => 1,
            ),
            176 => 
            array (
                'zone_id' => 3294,
                'country_id' => 214,
                'name' => 'Bizerte',
                'code' => 'BI',
                'status' => 1,
            ),
            177 => 
            array (
                'zone_id' => 3295,
                'country_id' => 214,
                'name' => 'Gabes',
                'code' => 'GB',
                'status' => 1,
            ),
            178 => 
            array (
                'zone_id' => 3296,
                'country_id' => 214,
                'name' => 'Gafsa',
                'code' => 'GF',
                'status' => 1,
            ),
            179 => 
            array (
                'zone_id' => 3297,
                'country_id' => 214,
                'name' => 'Jendouba',
                'code' => 'JE',
                'status' => 1,
            ),
            180 => 
            array (
                'zone_id' => 3298,
                'country_id' => 214,
                'name' => 'Kairouan',
                'code' => 'KR',
                'status' => 1,
            ),
            181 => 
            array (
                'zone_id' => 3299,
                'country_id' => 214,
                'name' => 'Kasserine',
                'code' => 'KS',
                'status' => 1,
            ),
            182 => 
            array (
                'zone_id' => 3300,
                'country_id' => 214,
                'name' => 'Kebili',
                'code' => 'KB',
                'status' => 1,
            ),
            183 => 
            array (
                'zone_id' => 3301,
                'country_id' => 214,
                'name' => 'Kef',
                'code' => 'KF',
                'status' => 1,
            ),
            184 => 
            array (
                'zone_id' => 3302,
                'country_id' => 214,
                'name' => 'Mahdia',
                'code' => 'MH',
                'status' => 1,
            ),
            185 => 
            array (
                'zone_id' => 3303,
                'country_id' => 214,
                'name' => 'Manouba',
                'code' => 'MN',
                'status' => 1,
            ),
            186 => 
            array (
                'zone_id' => 3304,
                'country_id' => 214,
                'name' => 'Medenine',
                'code' => 'ME',
                'status' => 1,
            ),
            187 => 
            array (
                'zone_id' => 3305,
                'country_id' => 214,
                'name' => 'Monastir',
                'code' => 'MO',
                'status' => 1,
            ),
            188 => 
            array (
                'zone_id' => 3306,
                'country_id' => 214,
                'name' => 'Nabeul',
                'code' => 'NA',
                'status' => 1,
            ),
            189 => 
            array (
                'zone_id' => 3307,
                'country_id' => 214,
                'name' => 'Sfax',
                'code' => 'SF',
                'status' => 1,
            ),
            190 => 
            array (
                'zone_id' => 3308,
                'country_id' => 214,
                'name' => 'Sidi',
                'code' => 'SD',
                'status' => 1,
            ),
            191 => 
            array (
                'zone_id' => 3309,
                'country_id' => 214,
                'name' => 'Siliana',
                'code' => 'SL',
                'status' => 1,
            ),
            192 => 
            array (
                'zone_id' => 3310,
                'country_id' => 214,
                'name' => 'Sousse',
                'code' => 'SO',
                'status' => 1,
            ),
            193 => 
            array (
                'zone_id' => 3311,
                'country_id' => 214,
                'name' => 'Tataouine',
                'code' => 'TA',
                'status' => 1,
            ),
            194 => 
            array (
                'zone_id' => 3312,
                'country_id' => 214,
                'name' => 'Tozeur',
                'code' => 'TO',
                'status' => 1,
            ),
            195 => 
            array (
                'zone_id' => 3313,
                'country_id' => 214,
                'name' => 'Tunis',
                'code' => 'TU',
                'status' => 1,
            ),
            196 => 
            array (
                'zone_id' => 3314,
                'country_id' => 214,
                'name' => 'Zaghouan',
                'code' => 'ZA',
                'status' => 1,
            ),
            197 => 
            array (
                'zone_id' => 3315,
                'country_id' => 215,
                'name' => 'Adana',
                'code' => 'ADA',
                'status' => 1,
            ),
            198 => 
            array (
                'zone_id' => 3316,
                'country_id' => 215,
                'name' => 'Adıyaman',
                'code' => 'ADI',
                'status' => 1,
            ),
            199 => 
            array (
                'zone_id' => 3317,
                'country_id' => 215,
                'name' => 'Afyonkarahisar',
                'code' => 'AFY',
                'status' => 1,
            ),
            200 => 
            array (
                'zone_id' => 3318,
                'country_id' => 215,
                'name' => 'Ağrı',
                'code' => 'AGR',
                'status' => 1,
            ),
            201 => 
            array (
                'zone_id' => 3319,
                'country_id' => 215,
                'name' => 'Aksaray',
                'code' => 'AKS',
                'status' => 1,
            ),
            202 => 
            array (
                'zone_id' => 3320,
                'country_id' => 215,
                'name' => 'Amasya',
                'code' => 'AMA',
                'status' => 1,
            ),
            203 => 
            array (
                'zone_id' => 3321,
                'country_id' => 215,
                'name' => 'Ankara',
                'code' => 'ANK',
                'status' => 1,
            ),
            204 => 
            array (
                'zone_id' => 3322,
                'country_id' => 215,
                'name' => 'Antalya',
                'code' => 'ANT',
                'status' => 1,
            ),
            205 => 
            array (
                'zone_id' => 3323,
                'country_id' => 215,
                'name' => 'Ardahan',
                'code' => 'ARD',
                'status' => 1,
            ),
            206 => 
            array (
                'zone_id' => 3324,
                'country_id' => 215,
                'name' => 'Artvin',
                'code' => 'ART',
                'status' => 1,
            ),
            207 => 
            array (
                'zone_id' => 3325,
                'country_id' => 215,
                'name' => 'Aydın',
                'code' => 'AYI',
                'status' => 1,
            ),
            208 => 
            array (
                'zone_id' => 3326,
                'country_id' => 215,
                'name' => 'Balıkesir',
                'code' => 'BAL',
                'status' => 1,
            ),
            209 => 
            array (
                'zone_id' => 3327,
                'country_id' => 215,
                'name' => 'Bartın',
                'code' => 'BAR',
                'status' => 1,
            ),
            210 => 
            array (
                'zone_id' => 3328,
                'country_id' => 215,
                'name' => 'Batman',
                'code' => 'BAT',
                'status' => 1,
            ),
            211 => 
            array (
                'zone_id' => 3329,
                'country_id' => 215,
                'name' => 'Bayburt',
                'code' => 'BAY',
                'status' => 1,
            ),
            212 => 
            array (
                'zone_id' => 3330,
                'country_id' => 215,
                'name' => 'Bilecik',
                'code' => 'BIL',
                'status' => 1,
            ),
            213 => 
            array (
                'zone_id' => 3331,
                'country_id' => 215,
                'name' => 'Bingöl',
                'code' => 'BIN',
                'status' => 1,
            ),
            214 => 
            array (
                'zone_id' => 3332,
                'country_id' => 215,
                'name' => 'Bitlis',
                'code' => 'BIT',
                'status' => 1,
            ),
            215 => 
            array (
                'zone_id' => 3333,
                'country_id' => 215,
                'name' => 'Bolu',
                'code' => 'BOL',
                'status' => 1,
            ),
            216 => 
            array (
                'zone_id' => 3334,
                'country_id' => 215,
                'name' => 'Burdur',
                'code' => 'BRD',
                'status' => 1,
            ),
            217 => 
            array (
                'zone_id' => 3335,
                'country_id' => 215,
                'name' => 'Bursa',
                'code' => 'BRS',
                'status' => 1,
            ),
            218 => 
            array (
                'zone_id' => 3336,
                'country_id' => 215,
                'name' => 'Çanakkale',
                'code' => 'CKL',
                'status' => 1,
            ),
            219 => 
            array (
                'zone_id' => 3337,
                'country_id' => 215,
                'name' => 'Çankırı',
                'code' => 'CKR',
                'status' => 1,
            ),
            220 => 
            array (
                'zone_id' => 3338,
                'country_id' => 215,
                'name' => 'Çorum',
                'code' => 'COR',
                'status' => 1,
            ),
            221 => 
            array (
                'zone_id' => 3339,
                'country_id' => 215,
                'name' => 'Denizli',
                'code' => 'DEN',
                'status' => 1,
            ),
            222 => 
            array (
                'zone_id' => 3340,
                'country_id' => 215,
                'name' => 'Diyarbakır',
                'code' => 'DIY',
                'status' => 1,
            ),
            223 => 
            array (
                'zone_id' => 3341,
                'country_id' => 215,
                'name' => 'Düzce',
                'code' => 'DUZ',
                'status' => 1,
            ),
            224 => 
            array (
                'zone_id' => 3342,
                'country_id' => 215,
                'name' => 'Edirne',
                'code' => 'EDI',
                'status' => 1,
            ),
            225 => 
            array (
                'zone_id' => 3343,
                'country_id' => 215,
                'name' => 'Elazığ',
                'code' => 'ELA',
                'status' => 1,
            ),
            226 => 
            array (
                'zone_id' => 3344,
                'country_id' => 215,
                'name' => 'Erzincan',
                'code' => 'EZC',
                'status' => 1,
            ),
            227 => 
            array (
                'zone_id' => 3345,
                'country_id' => 215,
                'name' => 'Erzurum',
                'code' => 'EZR',
                'status' => 1,
            ),
            228 => 
            array (
                'zone_id' => 3346,
                'country_id' => 215,
                'name' => 'Eskişehir',
                'code' => 'ESK',
                'status' => 1,
            ),
            229 => 
            array (
                'zone_id' => 3347,
                'country_id' => 215,
                'name' => 'Gaziantep',
                'code' => 'GAZ',
                'status' => 1,
            ),
            230 => 
            array (
                'zone_id' => 3348,
                'country_id' => 215,
                'name' => 'Giresun',
                'code' => 'GIR',
                'status' => 1,
            ),
            231 => 
            array (
                'zone_id' => 3349,
                'country_id' => 215,
                'name' => 'Gümüşhane',
                'code' => 'GMS',
                'status' => 1,
            ),
            232 => 
            array (
                'zone_id' => 3350,
                'country_id' => 215,
                'name' => 'Hakkari',
                'code' => 'HKR',
                'status' => 1,
            ),
            233 => 
            array (
                'zone_id' => 3351,
                'country_id' => 215,
                'name' => 'Hatay',
                'code' => 'HTY',
                'status' => 1,
            ),
            234 => 
            array (
                'zone_id' => 3352,
                'country_id' => 215,
                'name' => 'Iğdır',
                'code' => 'IGD',
                'status' => 1,
            ),
            235 => 
            array (
                'zone_id' => 3353,
                'country_id' => 215,
                'name' => 'Isparta',
                'code' => 'ISP',
                'status' => 1,
            ),
            236 => 
            array (
                'zone_id' => 3354,
                'country_id' => 215,
                'name' => 'İstanbul',
                'code' => 'IST',
                'status' => 1,
            ),
            237 => 
            array (
                'zone_id' => 3355,
                'country_id' => 215,
                'name' => 'İzmir',
                'code' => 'IZM',
                'status' => 1,
            ),
            238 => 
            array (
                'zone_id' => 3356,
                'country_id' => 215,
                'name' => 'Kahramanmaraş',
                'code' => 'KAH',
                'status' => 1,
            ),
            239 => 
            array (
                'zone_id' => 3357,
                'country_id' => 215,
                'name' => 'Karabük',
                'code' => 'KRB',
                'status' => 1,
            ),
            240 => 
            array (
                'zone_id' => 3358,
                'country_id' => 215,
                'name' => 'Karaman',
                'code' => 'KRM',
                'status' => 1,
            ),
            241 => 
            array (
                'zone_id' => 3359,
                'country_id' => 215,
                'name' => 'Kars',
                'code' => 'KRS',
                'status' => 1,
            ),
            242 => 
            array (
                'zone_id' => 3360,
                'country_id' => 215,
                'name' => 'Kastamonu',
                'code' => 'KAS',
                'status' => 1,
            ),
            243 => 
            array (
                'zone_id' => 3361,
                'country_id' => 215,
                'name' => 'Kayseri',
                'code' => 'KAY',
                'status' => 1,
            ),
            244 => 
            array (
                'zone_id' => 3362,
                'country_id' => 215,
                'name' => 'Kilis',
                'code' => 'KLS',
                'status' => 1,
            ),
            245 => 
            array (
                'zone_id' => 3363,
                'country_id' => 215,
                'name' => 'Kırıkkale',
                'code' => 'KRK',
                'status' => 1,
            ),
            246 => 
            array (
                'zone_id' => 3364,
                'country_id' => 215,
                'name' => 'Kırklareli',
                'code' => 'KLR',
                'status' => 1,
            ),
            247 => 
            array (
                'zone_id' => 3365,
                'country_id' => 215,
                'name' => 'Kırşehir',
                'code' => 'KRH',
                'status' => 1,
            ),
            248 => 
            array (
                'zone_id' => 3366,
                'country_id' => 215,
                'name' => 'Kocaeli',
                'code' => 'KOC',
                'status' => 1,
            ),
            249 => 
            array (
                'zone_id' => 3367,
                'country_id' => 215,
                'name' => 'Konya',
                'code' => 'KON',
                'status' => 1,
            ),
            250 => 
            array (
                'zone_id' => 3368,
                'country_id' => 215,
                'name' => 'Kütahya',
                'code' => 'KUT',
                'status' => 1,
            ),
            251 => 
            array (
                'zone_id' => 3369,
                'country_id' => 215,
                'name' => 'Malatya',
                'code' => 'MAL',
                'status' => 1,
            ),
            252 => 
            array (
                'zone_id' => 3370,
                'country_id' => 215,
                'name' => 'Manisa',
                'code' => 'MAN',
                'status' => 1,
            ),
            253 => 
            array (
                'zone_id' => 3371,
                'country_id' => 215,
                'name' => 'Mardin',
                'code' => 'MAR',
                'status' => 1,
            ),
            254 => 
            array (
                'zone_id' => 3372,
                'country_id' => 215,
                'name' => 'Mersin',
                'code' => 'MER',
                'status' => 1,
            ),
            255 => 
            array (
                'zone_id' => 3373,
                'country_id' => 215,
                'name' => 'Muğla',
                'code' => 'MUG',
                'status' => 1,
            ),
            256 => 
            array (
                'zone_id' => 3374,
                'country_id' => 215,
                'name' => 'Muş',
                'code' => 'MUS',
                'status' => 1,
            ),
            257 => 
            array (
                'zone_id' => 3375,
                'country_id' => 215,
                'name' => 'Nevşehir',
                'code' => 'NEV',
                'status' => 1,
            ),
            258 => 
            array (
                'zone_id' => 3376,
                'country_id' => 215,
                'name' => 'Niğde',
                'code' => 'NIG',
                'status' => 1,
            ),
            259 => 
            array (
                'zone_id' => 3377,
                'country_id' => 215,
                'name' => 'Ordu',
                'code' => 'ORD',
                'status' => 1,
            ),
            260 => 
            array (
                'zone_id' => 3378,
                'country_id' => 215,
                'name' => 'Osmaniye',
                'code' => 'OSM',
                'status' => 1,
            ),
            261 => 
            array (
                'zone_id' => 3379,
                'country_id' => 215,
                'name' => 'Rize',
                'code' => 'RIZ',
                'status' => 1,
            ),
            262 => 
            array (
                'zone_id' => 3380,
                'country_id' => 215,
                'name' => 'Sakarya',
                'code' => 'SAK',
                'status' => 1,
            ),
            263 => 
            array (
                'zone_id' => 3381,
                'country_id' => 215,
                'name' => 'Samsun',
                'code' => 'SAM',
                'status' => 1,
            ),
            264 => 
            array (
                'zone_id' => 3382,
                'country_id' => 215,
                'name' => 'Şanlıurfa',
                'code' => 'SAN',
                'status' => 1,
            ),
            265 => 
            array (
                'zone_id' => 3383,
                'country_id' => 215,
                'name' => 'Siirt',
                'code' => 'SII',
                'status' => 1,
            ),
            266 => 
            array (
                'zone_id' => 3384,
                'country_id' => 215,
                'name' => 'Sinop',
                'code' => 'SIN',
                'status' => 1,
            ),
            267 => 
            array (
                'zone_id' => 3385,
                'country_id' => 215,
                'name' => 'Şırnak',
                'code' => 'SIR',
                'status' => 1,
            ),
            268 => 
            array (
                'zone_id' => 3386,
                'country_id' => 215,
                'name' => 'Sivas',
                'code' => 'SIV',
                'status' => 1,
            ),
            269 => 
            array (
                'zone_id' => 3387,
                'country_id' => 215,
                'name' => 'Tekirdağ',
                'code' => 'TEL',
                'status' => 1,
            ),
            270 => 
            array (
                'zone_id' => 3388,
                'country_id' => 215,
                'name' => 'Tokat',
                'code' => 'TOK',
                'status' => 1,
            ),
            271 => 
            array (
                'zone_id' => 3389,
                'country_id' => 215,
                'name' => 'Trabzon',
                'code' => 'TRA',
                'status' => 1,
            ),
            272 => 
            array (
                'zone_id' => 3390,
                'country_id' => 215,
                'name' => 'Tunceli',
                'code' => 'TUN',
                'status' => 1,
            ),
            273 => 
            array (
                'zone_id' => 3391,
                'country_id' => 215,
                'name' => 'Uşak',
                'code' => 'USK',
                'status' => 1,
            ),
            274 => 
            array (
                'zone_id' => 3392,
                'country_id' => 215,
                'name' => 'Van',
                'code' => 'VAN',
                'status' => 1,
            ),
            275 => 
            array (
                'zone_id' => 3393,
                'country_id' => 215,
                'name' => 'Yalova',
                'code' => 'YAL',
                'status' => 1,
            ),
            276 => 
            array (
                'zone_id' => 3394,
                'country_id' => 215,
                'name' => 'Yozgat',
                'code' => 'YOZ',
                'status' => 1,
            ),
            277 => 
            array (
                'zone_id' => 3395,
                'country_id' => 215,
                'name' => 'Zonguldak',
                'code' => 'ZON',
                'status' => 1,
            ),
            278 => 
            array (
                'zone_id' => 3396,
                'country_id' => 216,
                'name' => 'Ahal Welayaty',
                'code' => 'A',
                'status' => 1,
            ),
            279 => 
            array (
                'zone_id' => 3397,
                'country_id' => 216,
                'name' => 'Balkan Welayaty',
                'code' => 'B',
                'status' => 1,
            ),
            280 => 
            array (
                'zone_id' => 3398,
                'country_id' => 216,
                'name' => 'Dashhowuz Welayaty',
                'code' => 'D',
                'status' => 1,
            ),
            281 => 
            array (
                'zone_id' => 3399,
                'country_id' => 216,
                'name' => 'Lebap Welayaty',
                'code' => 'L',
                'status' => 1,
            ),
            282 => 
            array (
                'zone_id' => 3400,
                'country_id' => 216,
                'name' => 'Mary Welayaty',
                'code' => 'M',
                'status' => 1,
            ),
            283 => 
            array (
                'zone_id' => 3401,
                'country_id' => 217,
                'name' => 'Ambergris Cays',
                'code' => 'AC',
                'status' => 1,
            ),
            284 => 
            array (
                'zone_id' => 3402,
                'country_id' => 217,
                'name' => 'Dellis Cay',
                'code' => 'DC',
                'status' => 1,
            ),
            285 => 
            array (
                'zone_id' => 3403,
                'country_id' => 217,
                'name' => 'French Cay',
                'code' => 'FC',
                'status' => 1,
            ),
            286 => 
            array (
                'zone_id' => 3404,
                'country_id' => 217,
                'name' => 'Little Water Cay',
                'code' => 'LW',
                'status' => 1,
            ),
            287 => 
            array (
                'zone_id' => 3405,
                'country_id' => 217,
                'name' => 'Parrot Cay',
                'code' => 'RC',
                'status' => 1,
            ),
            288 => 
            array (
                'zone_id' => 3406,
                'country_id' => 217,
                'name' => 'Pine Cay',
                'code' => 'PN',
                'status' => 1,
            ),
            289 => 
            array (
                'zone_id' => 3407,
                'country_id' => 217,
                'name' => 'Salt Cay',
                'code' => 'SL',
                'status' => 1,
            ),
            290 => 
            array (
                'zone_id' => 3408,
                'country_id' => 217,
                'name' => 'Grand Turk',
                'code' => 'GT',
                'status' => 1,
            ),
            291 => 
            array (
                'zone_id' => 3409,
                'country_id' => 217,
                'name' => 'South Caicos',
                'code' => 'SC',
                'status' => 1,
            ),
            292 => 
            array (
                'zone_id' => 3410,
                'country_id' => 217,
                'name' => 'East Caicos',
                'code' => 'EC',
                'status' => 1,
            ),
            293 => 
            array (
                'zone_id' => 3411,
                'country_id' => 217,
                'name' => 'Middle Caicos',
                'code' => 'MC',
                'status' => 1,
            ),
            294 => 
            array (
                'zone_id' => 3412,
                'country_id' => 217,
                'name' => 'North Caicos',
                'code' => 'NC',
                'status' => 1,
            ),
            295 => 
            array (
                'zone_id' => 3413,
                'country_id' => 217,
                'name' => 'Providenciales',
                'code' => 'PR',
                'status' => 1,
            ),
            296 => 
            array (
                'zone_id' => 3414,
                'country_id' => 217,
                'name' => 'West Caicos',
                'code' => 'WC',
                'status' => 1,
            ),
            297 => 
            array (
                'zone_id' => 3415,
                'country_id' => 218,
                'name' => 'Nanumanga',
                'code' => 'NMG',
                'status' => 1,
            ),
            298 => 
            array (
                'zone_id' => 3416,
                'country_id' => 218,
                'name' => 'Niulakita',
                'code' => 'NLK',
                'status' => 1,
            ),
            299 => 
            array (
                'zone_id' => 3417,
                'country_id' => 218,
                'name' => 'Niutao',
                'code' => 'NTO',
                'status' => 1,
            ),
            300 => 
            array (
                'zone_id' => 3418,
                'country_id' => 218,
                'name' => 'Funafuti',
                'code' => 'FUN',
                'status' => 1,
            ),
            301 => 
            array (
                'zone_id' => 3419,
                'country_id' => 218,
                'name' => 'Nanumea',
                'code' => 'NME',
                'status' => 1,
            ),
            302 => 
            array (
                'zone_id' => 3420,
                'country_id' => 218,
                'name' => 'Nui',
                'code' => 'NUI',
                'status' => 1,
            ),
            303 => 
            array (
                'zone_id' => 3421,
                'country_id' => 218,
                'name' => 'Nukufetau',
                'code' => 'NFT',
                'status' => 1,
            ),
            304 => 
            array (
                'zone_id' => 3422,
                'country_id' => 218,
                'name' => 'Nukulaelae',
                'code' => 'NLL',
                'status' => 1,
            ),
            305 => 
            array (
                'zone_id' => 3423,
                'country_id' => 218,
                'name' => 'Vaitupu',
                'code' => 'VAI',
                'status' => 1,
            ),
            306 => 
            array (
                'zone_id' => 3424,
                'country_id' => 219,
                'name' => 'Kalangala',
                'code' => 'KAL',
                'status' => 1,
            ),
            307 => 
            array (
                'zone_id' => 3425,
                'country_id' => 219,
                'name' => 'Kampala',
                'code' => 'KMP',
                'status' => 1,
            ),
            308 => 
            array (
                'zone_id' => 3426,
                'country_id' => 219,
                'name' => 'Kayunga',
                'code' => 'KAY',
                'status' => 1,
            ),
            309 => 
            array (
                'zone_id' => 3427,
                'country_id' => 219,
                'name' => 'Kiboga',
                'code' => 'KIB',
                'status' => 1,
            ),
            310 => 
            array (
                'zone_id' => 3428,
                'country_id' => 219,
                'name' => 'Luwero',
                'code' => 'LUW',
                'status' => 1,
            ),
            311 => 
            array (
                'zone_id' => 3429,
                'country_id' => 219,
                'name' => 'Masaka',
                'code' => 'MAS',
                'status' => 1,
            ),
            312 => 
            array (
                'zone_id' => 3430,
                'country_id' => 219,
                'name' => 'Mpigi',
                'code' => 'MPI',
                'status' => 1,
            ),
            313 => 
            array (
                'zone_id' => 3431,
                'country_id' => 219,
                'name' => 'Mubende',
                'code' => 'MUB',
                'status' => 1,
            ),
            314 => 
            array (
                'zone_id' => 3432,
                'country_id' => 219,
                'name' => 'Mukono',
                'code' => 'MUK',
                'status' => 1,
            ),
            315 => 
            array (
                'zone_id' => 3433,
                'country_id' => 219,
                'name' => 'Nakasongola',
                'code' => 'NKS',
                'status' => 1,
            ),
            316 => 
            array (
                'zone_id' => 3434,
                'country_id' => 219,
                'name' => 'Rakai',
                'code' => 'RAK',
                'status' => 1,
            ),
            317 => 
            array (
                'zone_id' => 3435,
                'country_id' => 219,
                'name' => 'Sembabule',
                'code' => 'SEM',
                'status' => 1,
            ),
            318 => 
            array (
                'zone_id' => 3436,
                'country_id' => 219,
                'name' => 'Wakiso',
                'code' => 'WAK',
                'status' => 1,
            ),
            319 => 
            array (
                'zone_id' => 3437,
                'country_id' => 219,
                'name' => 'Bugiri',
                'code' => 'BUG',
                'status' => 1,
            ),
            320 => 
            array (
                'zone_id' => 3438,
                'country_id' => 219,
                'name' => 'Busia',
                'code' => 'BUS',
                'status' => 1,
            ),
            321 => 
            array (
                'zone_id' => 3439,
                'country_id' => 219,
                'name' => 'Iganga',
                'code' => 'IGA',
                'status' => 1,
            ),
            322 => 
            array (
                'zone_id' => 3440,
                'country_id' => 219,
                'name' => 'Jinja',
                'code' => 'JIN',
                'status' => 1,
            ),
            323 => 
            array (
                'zone_id' => 3441,
                'country_id' => 219,
                'name' => 'Kaberamaido',
                'code' => 'KAB',
                'status' => 1,
            ),
            324 => 
            array (
                'zone_id' => 3442,
                'country_id' => 219,
                'name' => 'Kamuli',
                'code' => 'KML',
                'status' => 1,
            ),
            325 => 
            array (
                'zone_id' => 3443,
                'country_id' => 219,
                'name' => 'Kapchorwa',
                'code' => 'KPC',
                'status' => 1,
            ),
            326 => 
            array (
                'zone_id' => 3444,
                'country_id' => 219,
                'name' => 'Katakwi',
                'code' => 'KTK',
                'status' => 1,
            ),
            327 => 
            array (
                'zone_id' => 3445,
                'country_id' => 219,
                'name' => 'Kumi',
                'code' => 'KUM',
                'status' => 1,
            ),
            328 => 
            array (
                'zone_id' => 3446,
                'country_id' => 219,
                'name' => 'Mayuge',
                'code' => 'MAY',
                'status' => 1,
            ),
            329 => 
            array (
                'zone_id' => 3447,
                'country_id' => 219,
                'name' => 'Mbale',
                'code' => 'MBA',
                'status' => 1,
            ),
            330 => 
            array (
                'zone_id' => 3448,
                'country_id' => 219,
                'name' => 'Pallisa',
                'code' => 'PAL',
                'status' => 1,
            ),
            331 => 
            array (
                'zone_id' => 3449,
                'country_id' => 219,
                'name' => 'Sironko',
                'code' => 'SIR',
                'status' => 1,
            ),
            332 => 
            array (
                'zone_id' => 3450,
                'country_id' => 219,
                'name' => 'Soroti',
                'code' => 'SOR',
                'status' => 1,
            ),
            333 => 
            array (
                'zone_id' => 3451,
                'country_id' => 219,
                'name' => 'Tororo',
                'code' => 'TOR',
                'status' => 1,
            ),
            334 => 
            array (
                'zone_id' => 3452,
                'country_id' => 219,
                'name' => 'Adjumani',
                'code' => 'ADJ',
                'status' => 1,
            ),
            335 => 
            array (
                'zone_id' => 3453,
                'country_id' => 219,
                'name' => 'Apac',
                'code' => 'APC',
                'status' => 1,
            ),
            336 => 
            array (
                'zone_id' => 3454,
                'country_id' => 219,
                'name' => 'Arua',
                'code' => 'ARU',
                'status' => 1,
            ),
            337 => 
            array (
                'zone_id' => 3455,
                'country_id' => 219,
                'name' => 'Gulu',
                'code' => 'GUL',
                'status' => 1,
            ),
            338 => 
            array (
                'zone_id' => 3456,
                'country_id' => 219,
                'name' => 'Kitgum',
                'code' => 'KIT',
                'status' => 1,
            ),
            339 => 
            array (
                'zone_id' => 3457,
                'country_id' => 219,
                'name' => 'Kotido',
                'code' => 'KOT',
                'status' => 1,
            ),
            340 => 
            array (
                'zone_id' => 3458,
                'country_id' => 219,
                'name' => 'Lira',
                'code' => 'LIR',
                'status' => 1,
            ),
            341 => 
            array (
                'zone_id' => 3459,
                'country_id' => 219,
                'name' => 'Moroto',
                'code' => 'MRT',
                'status' => 1,
            ),
            342 => 
            array (
                'zone_id' => 3460,
                'country_id' => 219,
                'name' => 'Moyo',
                'code' => 'MOY',
                'status' => 1,
            ),
            343 => 
            array (
                'zone_id' => 3461,
                'country_id' => 219,
                'name' => 'Nakapiripirit',
                'code' => 'NAK',
                'status' => 1,
            ),
            344 => 
            array (
                'zone_id' => 3462,
                'country_id' => 219,
                'name' => 'Nebbi',
                'code' => 'NEB',
                'status' => 1,
            ),
            345 => 
            array (
                'zone_id' => 3463,
                'country_id' => 219,
                'name' => 'Pader',
                'code' => 'PAD',
                'status' => 1,
            ),
            346 => 
            array (
                'zone_id' => 3464,
                'country_id' => 219,
                'name' => 'Yumbe',
                'code' => 'YUM',
                'status' => 1,
            ),
            347 => 
            array (
                'zone_id' => 3465,
                'country_id' => 219,
                'name' => 'Bundibugyo',
                'code' => 'BUN',
                'status' => 1,
            ),
            348 => 
            array (
                'zone_id' => 3466,
                'country_id' => 219,
                'name' => 'Bushenyi',
                'code' => 'BSH',
                'status' => 1,
            ),
            349 => 
            array (
                'zone_id' => 3467,
                'country_id' => 219,
                'name' => 'Hoima',
                'code' => 'HOI',
                'status' => 1,
            ),
            350 => 
            array (
                'zone_id' => 3468,
                'country_id' => 219,
                'name' => 'Kabale',
                'code' => 'KBL',
                'status' => 1,
            ),
            351 => 
            array (
                'zone_id' => 3469,
                'country_id' => 219,
                'name' => 'Kabarole',
                'code' => 'KAR',
                'status' => 1,
            ),
            352 => 
            array (
                'zone_id' => 3470,
                'country_id' => 219,
                'name' => 'Kamwenge',
                'code' => 'KAM',
                'status' => 1,
            ),
            353 => 
            array (
                'zone_id' => 3471,
                'country_id' => 219,
                'name' => 'Kanungu',
                'code' => 'KAN',
                'status' => 1,
            ),
            354 => 
            array (
                'zone_id' => 3472,
                'country_id' => 219,
                'name' => 'Kasese',
                'code' => 'KAS',
                'status' => 1,
            ),
            355 => 
            array (
                'zone_id' => 3473,
                'country_id' => 219,
                'name' => 'Kibaale',
                'code' => 'KBA',
                'status' => 1,
            ),
            356 => 
            array (
                'zone_id' => 3474,
                'country_id' => 219,
                'name' => 'Kisoro',
                'code' => 'KIS',
                'status' => 1,
            ),
            357 => 
            array (
                'zone_id' => 3475,
                'country_id' => 219,
                'name' => 'Kyenjojo',
                'code' => 'KYE',
                'status' => 1,
            ),
            358 => 
            array (
                'zone_id' => 3476,
                'country_id' => 219,
                'name' => 'Masindi',
                'code' => 'MSN',
                'status' => 1,
            ),
            359 => 
            array (
                'zone_id' => 3477,
                'country_id' => 219,
                'name' => 'Mbarara',
                'code' => 'MBR',
                'status' => 1,
            ),
            360 => 
            array (
                'zone_id' => 3478,
                'country_id' => 219,
                'name' => 'Ntungamo',
                'code' => 'NTU',
                'status' => 1,
            ),
            361 => 
            array (
                'zone_id' => 3479,
                'country_id' => 219,
                'name' => 'Rukungiri',
                'code' => 'RUK',
                'status' => 1,
            ),
            362 => 
            array (
                'zone_id' => 3480,
                'country_id' => 220,
                'name' => 'Cherkas\'ka Oblast\'',
                'code' => '71',
                'status' => 1,
            ),
            363 => 
            array (
                'zone_id' => 3481,
                'country_id' => 220,
                'name' => 'Chernihivs\'ka Oblast\'',
                'code' => '74',
                'status' => 1,
            ),
            364 => 
            array (
                'zone_id' => 3482,
                'country_id' => 220,
                'name' => 'Chernivets\'ka Oblast\'',
                'code' => '77',
                'status' => 1,
            ),
            365 => 
            array (
                'zone_id' => 3483,
                'country_id' => 220,
                'name' => 'Crimea',
                'code' => '43',
                'status' => 1,
            ),
            366 => 
            array (
                'zone_id' => 3484,
                'country_id' => 220,
                'name' => 'Dnipropetrovs\'ka Oblast\'',
                'code' => '12',
                'status' => 1,
            ),
            367 => 
            array (
                'zone_id' => 3485,
                'country_id' => 220,
                'name' => 'Donets\'ka Oblast\'',
                'code' => '14',
                'status' => 1,
            ),
            368 => 
            array (
                'zone_id' => 3486,
                'country_id' => 220,
                'name' => 'Ivano-Frankivs\'ka Oblast\'',
                'code' => '26',
                'status' => 1,
            ),
            369 => 
            array (
                'zone_id' => 3487,
                'country_id' => 220,
                'name' => 'Khersons\'ka Oblast\'',
                'code' => '65',
                'status' => 1,
            ),
            370 => 
            array (
                'zone_id' => 3488,
                'country_id' => 220,
                'name' => 'Khmel\'nyts\'ka Oblast\'',
                'code' => '68',
                'status' => 1,
            ),
            371 => 
            array (
                'zone_id' => 3489,
                'country_id' => 220,
                'name' => 'Kirovohrads\'ka Oblast\'',
                'code' => '35',
                'status' => 1,
            ),
            372 => 
            array (
                'zone_id' => 3490,
                'country_id' => 220,
                'name' => 'Kyiv',
                'code' => '30',
                'status' => 1,
            ),
            373 => 
            array (
                'zone_id' => 3491,
                'country_id' => 220,
                'name' => 'Kyivs\'ka Oblast\'',
                'code' => '32',
                'status' => 1,
            ),
            374 => 
            array (
                'zone_id' => 3492,
                'country_id' => 220,
                'name' => 'Luhans\'ka Oblast\'',
                'code' => '09',
                'status' => 1,
            ),
            375 => 
            array (
                'zone_id' => 3493,
                'country_id' => 220,
                'name' => 'L\'vivs\'ka Oblast\'',
                'code' => '46',
                'status' => 1,
            ),
            376 => 
            array (
                'zone_id' => 3494,
                'country_id' => 220,
                'name' => 'Mykolayivs\'ka Oblast\'',
                'code' => '48',
                'status' => 1,
            ),
            377 => 
            array (
                'zone_id' => 3495,
                'country_id' => 220,
                'name' => 'Odes\'ka Oblast\'',
                'code' => '51',
                'status' => 1,
            ),
            378 => 
            array (
                'zone_id' => 3496,
                'country_id' => 220,
                'name' => 'Poltavs\'ka Oblast\'',
                'code' => '53',
                'status' => 1,
            ),
            379 => 
            array (
                'zone_id' => 3497,
                'country_id' => 220,
                'name' => 'Rivnens\'ka Oblast\'',
                'code' => '56',
                'status' => 1,
            ),
            380 => 
            array (
                'zone_id' => 3498,
                'country_id' => 220,
                'name' => 'Sevastopol\'',
                'code' => '40',
                'status' => 1,
            ),
            381 => 
            array (
                'zone_id' => 3499,
                'country_id' => 220,
                'name' => 'Sums\'ka Oblast\'',
                'code' => '59',
                'status' => 1,
            ),
            382 => 
            array (
                'zone_id' => 3500,
                'country_id' => 220,
                'name' => 'Ternopil\'s\'ka Oblast\'',
                'code' => '61',
                'status' => 1,
            ),
            383 => 
            array (
                'zone_id' => 3501,
                'country_id' => 220,
                'name' => 'Vinnyts\'ka Oblast\'',
                'code' => '05',
                'status' => 1,
            ),
            384 => 
            array (
                'zone_id' => 3502,
                'country_id' => 220,
                'name' => 'Volyns\'ka Oblast\'',
                'code' => '07',
                'status' => 1,
            ),
            385 => 
            array (
                'zone_id' => 3503,
                'country_id' => 220,
                'name' => 'Zakarpats\'ka Oblast\'',
                'code' => '21',
                'status' => 1,
            ),
            386 => 
            array (
                'zone_id' => 3504,
                'country_id' => 220,
                'name' => 'Zaporiz\'ka Oblast\'',
                'code' => '23',
                'status' => 1,
            ),
            387 => 
            array (
                'zone_id' => 3505,
                'country_id' => 220,
                'name' => 'Zhytomyrs\'ka oblast\'',
                'code' => '18',
                'status' => 1,
            ),
            388 => 
            array (
                'zone_id' => 3506,
                'country_id' => 221,
                'name' => 'Abu Dhabi',
                'code' => 'ADH',
                'status' => 1,
            ),
            389 => 
            array (
                'zone_id' => 3507,
                'country_id' => 221,
                'name' => '\'Ajman',
                'code' => 'AJ',
                'status' => 1,
            ),
            390 => 
            array (
                'zone_id' => 3508,
                'country_id' => 221,
                'name' => 'Al Fujayrah',
                'code' => 'FU',
                'status' => 1,
            ),
            391 => 
            array (
                'zone_id' => 3509,
                'country_id' => 221,
                'name' => 'Ash Shariqah',
                'code' => 'SH',
                'status' => 1,
            ),
            392 => 
            array (
                'zone_id' => 3510,
                'country_id' => 221,
                'name' => 'Dubai',
                'code' => 'DU',
                'status' => 1,
            ),
            393 => 
            array (
                'zone_id' => 3511,
                'country_id' => 221,
                'name' => 'R\'as al Khaymah',
                'code' => 'RK',
                'status' => 1,
            ),
            394 => 
            array (
                'zone_id' => 3512,
                'country_id' => 221,
                'name' => 'Umm al Qaywayn',
                'code' => 'UQ',
                'status' => 1,
            ),
            395 => 
            array (
                'zone_id' => 3513,
                'country_id' => 222,
                'name' => 'Aberdeen',
                'code' => 'ABN',
                'status' => 1,
            ),
            396 => 
            array (
                'zone_id' => 3514,
                'country_id' => 222,
                'name' => 'Aberdeenshire',
                'code' => 'ABNS',
                'status' => 1,
            ),
            397 => 
            array (
                'zone_id' => 3515,
                'country_id' => 222,
                'name' => 'Anglesey',
                'code' => 'ANG',
                'status' => 1,
            ),
            398 => 
            array (
                'zone_id' => 3516,
                'country_id' => 222,
                'name' => 'Angus',
                'code' => 'AGS',
                'status' => 1,
            ),
            399 => 
            array (
                'zone_id' => 3517,
                'country_id' => 222,
                'name' => 'Argyll and Bute',
                'code' => 'ARY',
                'status' => 1,
            ),
            400 => 
            array (
                'zone_id' => 3518,
                'country_id' => 222,
                'name' => 'Bedfordshire',
                'code' => 'BEDS',
                'status' => 1,
            ),
            401 => 
            array (
                'zone_id' => 3519,
                'country_id' => 222,
                'name' => 'Berkshire',
                'code' => 'BERKS',
                'status' => 1,
            ),
            402 => 
            array (
                'zone_id' => 3520,
                'country_id' => 222,
                'name' => 'Blaenau Gwent',
                'code' => 'BLA',
                'status' => 1,
            ),
            403 => 
            array (
                'zone_id' => 3521,
                'country_id' => 222,
                'name' => 'Bridgend',
                'code' => 'BRI',
                'status' => 1,
            ),
            404 => 
            array (
                'zone_id' => 3522,
                'country_id' => 222,
                'name' => 'Bristol',
                'code' => 'BSTL',
                'status' => 1,
            ),
            405 => 
            array (
                'zone_id' => 3523,
                'country_id' => 222,
                'name' => 'Buckinghamshire',
                'code' => 'BUCKS',
                'status' => 1,
            ),
            406 => 
            array (
                'zone_id' => 3524,
                'country_id' => 222,
                'name' => 'Caerphilly',
                'code' => 'CAE',
                'status' => 1,
            ),
            407 => 
            array (
                'zone_id' => 3525,
                'country_id' => 222,
                'name' => 'Cambridgeshire',
                'code' => 'CAMBS',
                'status' => 1,
            ),
            408 => 
            array (
                'zone_id' => 3526,
                'country_id' => 222,
                'name' => 'Cardiff',
                'code' => 'CDF',
                'status' => 1,
            ),
            409 => 
            array (
                'zone_id' => 3527,
                'country_id' => 222,
                'name' => 'Carmarthenshire',
                'code' => 'CARM',
                'status' => 1,
            ),
            410 => 
            array (
                'zone_id' => 3528,
                'country_id' => 222,
                'name' => 'Ceredigion',
                'code' => 'CDGN',
                'status' => 1,
            ),
            411 => 
            array (
                'zone_id' => 3529,
                'country_id' => 222,
                'name' => 'Cheshire',
                'code' => 'CHES',
                'status' => 1,
            ),
            412 => 
            array (
                'zone_id' => 3530,
                'country_id' => 222,
                'name' => 'Clackmannanshire',
                'code' => 'CLACK',
                'status' => 1,
            ),
            413 => 
            array (
                'zone_id' => 3531,
                'country_id' => 222,
                'name' => 'Conwy',
                'code' => 'CON',
                'status' => 1,
            ),
            414 => 
            array (
                'zone_id' => 3532,
                'country_id' => 222,
                'name' => 'Cornwall',
                'code' => 'CORN',
                'status' => 1,
            ),
            415 => 
            array (
                'zone_id' => 3533,
                'country_id' => 222,
                'name' => 'Denbighshire',
                'code' => 'DNBG',
                'status' => 1,
            ),
            416 => 
            array (
                'zone_id' => 3534,
                'country_id' => 222,
                'name' => 'Derbyshire',
                'code' => 'DERBY',
                'status' => 1,
            ),
            417 => 
            array (
                'zone_id' => 3535,
                'country_id' => 222,
                'name' => 'Devon',
                'code' => 'DVN',
                'status' => 1,
            ),
            418 => 
            array (
                'zone_id' => 3536,
                'country_id' => 222,
                'name' => 'Dorset',
                'code' => 'DOR',
                'status' => 1,
            ),
            419 => 
            array (
                'zone_id' => 3537,
                'country_id' => 222,
                'name' => 'Dumfries and Galloway',
                'code' => 'DGL',
                'status' => 1,
            ),
            420 => 
            array (
                'zone_id' => 3538,
                'country_id' => 222,
                'name' => 'Dundee',
                'code' => 'DUND',
                'status' => 1,
            ),
            421 => 
            array (
                'zone_id' => 3539,
                'country_id' => 222,
                'name' => 'Durham',
                'code' => 'DHM',
                'status' => 1,
            ),
            422 => 
            array (
                'zone_id' => 3540,
                'country_id' => 222,
                'name' => 'East Ayrshire',
                'code' => 'ARYE',
                'status' => 1,
            ),
            423 => 
            array (
                'zone_id' => 3541,
                'country_id' => 222,
                'name' => 'East Dunbartonshire',
                'code' => 'DUNBE',
                'status' => 1,
            ),
            424 => 
            array (
                'zone_id' => 3542,
                'country_id' => 222,
                'name' => 'East Lothian',
                'code' => 'LOTE',
                'status' => 1,
            ),
            425 => 
            array (
                'zone_id' => 3543,
                'country_id' => 222,
                'name' => 'East Renfrewshire',
                'code' => 'RENE',
                'status' => 1,
            ),
            426 => 
            array (
                'zone_id' => 3544,
                'country_id' => 222,
                'name' => 'East Riding of Yorkshire',
                'code' => 'ERYS',
                'status' => 1,
            ),
            427 => 
            array (
                'zone_id' => 3545,
                'country_id' => 222,
                'name' => 'East Sussex',
                'code' => 'SXE',
                'status' => 1,
            ),
            428 => 
            array (
                'zone_id' => 3546,
                'country_id' => 222,
                'name' => 'Edinburgh',
                'code' => 'EDIN',
                'status' => 1,
            ),
            429 => 
            array (
                'zone_id' => 3547,
                'country_id' => 222,
                'name' => 'Essex',
                'code' => 'ESX',
                'status' => 1,
            ),
            430 => 
            array (
                'zone_id' => 3548,
                'country_id' => 222,
                'name' => 'Falkirk',
                'code' => 'FALK',
                'status' => 1,
            ),
            431 => 
            array (
                'zone_id' => 3549,
                'country_id' => 222,
                'name' => 'Fife',
                'code' => 'FFE',
                'status' => 1,
            ),
            432 => 
            array (
                'zone_id' => 3550,
                'country_id' => 222,
                'name' => 'Flintshire',
                'code' => 'FLINT',
                'status' => 1,
            ),
            433 => 
            array (
                'zone_id' => 3551,
                'country_id' => 222,
                'name' => 'Glasgow',
                'code' => 'GLAS',
                'status' => 1,
            ),
            434 => 
            array (
                'zone_id' => 3552,
                'country_id' => 222,
                'name' => 'Gloucestershire',
                'code' => 'GLOS',
                'status' => 1,
            ),
            435 => 
            array (
                'zone_id' => 3553,
                'country_id' => 222,
                'name' => 'Greater London',
                'code' => 'LDN',
                'status' => 1,
            ),
            436 => 
            array (
                'zone_id' => 3554,
                'country_id' => 222,
                'name' => 'Greater Manchester',
                'code' => 'MCH',
                'status' => 1,
            ),
            437 => 
            array (
                'zone_id' => 3555,
                'country_id' => 222,
                'name' => 'Gwynedd',
                'code' => 'GDD',
                'status' => 1,
            ),
            438 => 
            array (
                'zone_id' => 3556,
                'country_id' => 222,
                'name' => 'Hampshire',
                'code' => 'HANTS',
                'status' => 1,
            ),
            439 => 
            array (
                'zone_id' => 3557,
                'country_id' => 222,
                'name' => 'Herefordshire',
                'code' => 'HWR',
                'status' => 1,
            ),
            440 => 
            array (
                'zone_id' => 3558,
                'country_id' => 222,
                'name' => 'Hertfordshire',
                'code' => 'HERTS',
                'status' => 1,
            ),
            441 => 
            array (
                'zone_id' => 3559,
                'country_id' => 222,
                'name' => 'Highlands',
                'code' => 'HLD',
                'status' => 1,
            ),
            442 => 
            array (
                'zone_id' => 3560,
                'country_id' => 222,
                'name' => 'Inverclyde',
                'code' => 'IVER',
                'status' => 1,
            ),
            443 => 
            array (
                'zone_id' => 3561,
                'country_id' => 222,
                'name' => 'Isle of Wight',
                'code' => 'IOW',
                'status' => 1,
            ),
            444 => 
            array (
                'zone_id' => 3562,
                'country_id' => 222,
                'name' => 'Kent',
                'code' => 'KNT',
                'status' => 1,
            ),
            445 => 
            array (
                'zone_id' => 3563,
                'country_id' => 222,
                'name' => 'Lancashire',
                'code' => 'LANCS',
                'status' => 1,
            ),
            446 => 
            array (
                'zone_id' => 3564,
                'country_id' => 222,
                'name' => 'Leicestershire',
                'code' => 'LEICS',
                'status' => 1,
            ),
            447 => 
            array (
                'zone_id' => 3565,
                'country_id' => 222,
                'name' => 'Lincolnshire',
                'code' => 'LINCS',
                'status' => 1,
            ),
            448 => 
            array (
                'zone_id' => 3566,
                'country_id' => 222,
                'name' => 'Merseyside',
                'code' => 'MSY',
                'status' => 1,
            ),
            449 => 
            array (
                'zone_id' => 3567,
                'country_id' => 222,
                'name' => 'Merthyr Tydfil',
                'code' => 'MERT',
                'status' => 1,
            ),
            450 => 
            array (
                'zone_id' => 3568,
                'country_id' => 222,
                'name' => 'Midlothian',
                'code' => 'MLOT',
                'status' => 1,
            ),
            451 => 
            array (
                'zone_id' => 3569,
                'country_id' => 222,
                'name' => 'Monmouthshire',
                'code' => 'MMOUTH',
                'status' => 1,
            ),
            452 => 
            array (
                'zone_id' => 3570,
                'country_id' => 222,
                'name' => 'Moray',
                'code' => 'MORAY',
                'status' => 1,
            ),
            453 => 
            array (
                'zone_id' => 3571,
                'country_id' => 222,
                'name' => 'Neath Port Talbot',
                'code' => 'NPRTAL',
                'status' => 1,
            ),
            454 => 
            array (
                'zone_id' => 3572,
                'country_id' => 222,
                'name' => 'Newport',
                'code' => 'NEWPT',
                'status' => 1,
            ),
            455 => 
            array (
                'zone_id' => 3573,
                'country_id' => 222,
                'name' => 'Norfolk',
                'code' => 'NOR',
                'status' => 1,
            ),
            456 => 
            array (
                'zone_id' => 3574,
                'country_id' => 222,
                'name' => 'North Ayrshire',
                'code' => 'ARYN',
                'status' => 1,
            ),
            457 => 
            array (
                'zone_id' => 3575,
                'country_id' => 222,
                'name' => 'North Lanarkshire',
                'code' => 'LANN',
                'status' => 1,
            ),
            458 => 
            array (
                'zone_id' => 3576,
                'country_id' => 222,
                'name' => 'North Yorkshire',
                'code' => 'YSN',
                'status' => 1,
            ),
            459 => 
            array (
                'zone_id' => 3577,
                'country_id' => 222,
                'name' => 'Northamptonshire',
                'code' => 'NHM',
                'status' => 1,
            ),
            460 => 
            array (
                'zone_id' => 3578,
                'country_id' => 222,
                'name' => 'Northumberland',
                'code' => 'NLD',
                'status' => 1,
            ),
            461 => 
            array (
                'zone_id' => 3579,
                'country_id' => 222,
                'name' => 'Nottinghamshire',
                'code' => 'NOT',
                'status' => 1,
            ),
            462 => 
            array (
                'zone_id' => 3580,
                'country_id' => 222,
                'name' => 'Orkney Islands',
                'code' => 'ORK',
                'status' => 1,
            ),
            463 => 
            array (
                'zone_id' => 3581,
                'country_id' => 222,
                'name' => 'Oxfordshire',
                'code' => 'OFE',
                'status' => 1,
            ),
            464 => 
            array (
                'zone_id' => 3582,
                'country_id' => 222,
                'name' => 'Pembrokeshire',
                'code' => 'PEM',
                'status' => 1,
            ),
            465 => 
            array (
                'zone_id' => 3583,
                'country_id' => 222,
                'name' => 'Perth and Kinross',
                'code' => 'PERTH',
                'status' => 1,
            ),
            466 => 
            array (
                'zone_id' => 3584,
                'country_id' => 222,
                'name' => 'Powys',
                'code' => 'PWS',
                'status' => 1,
            ),
            467 => 
            array (
                'zone_id' => 3585,
                'country_id' => 222,
                'name' => 'Renfrewshire',
                'code' => 'REN',
                'status' => 1,
            ),
            468 => 
            array (
                'zone_id' => 3586,
                'country_id' => 222,
                'name' => 'Rhondda Cynon Taff',
                'code' => 'RHON',
                'status' => 1,
            ),
            469 => 
            array (
                'zone_id' => 3587,
                'country_id' => 222,
                'name' => 'Rutland',
                'code' => 'RUT',
                'status' => 1,
            ),
            470 => 
            array (
                'zone_id' => 3588,
                'country_id' => 222,
                'name' => 'Scottish Borders',
                'code' => 'BOR',
                'status' => 1,
            ),
            471 => 
            array (
                'zone_id' => 3589,
                'country_id' => 222,
                'name' => 'Shetland Islands',
                'code' => 'SHET',
                'status' => 1,
            ),
            472 => 
            array (
                'zone_id' => 3590,
                'country_id' => 222,
                'name' => 'Shropshire',
                'code' => 'SPE',
                'status' => 1,
            ),
            473 => 
            array (
                'zone_id' => 3591,
                'country_id' => 222,
                'name' => 'Somerset',
                'code' => 'SOM',
                'status' => 1,
            ),
            474 => 
            array (
                'zone_id' => 3592,
                'country_id' => 222,
                'name' => 'South Ayrshire',
                'code' => 'ARYS',
                'status' => 1,
            ),
            475 => 
            array (
                'zone_id' => 3593,
                'country_id' => 222,
                'name' => 'South Lanarkshire',
                'code' => 'LANS',
                'status' => 1,
            ),
            476 => 
            array (
                'zone_id' => 3594,
                'country_id' => 222,
                'name' => 'South Yorkshire',
                'code' => 'YSS',
                'status' => 1,
            ),
            477 => 
            array (
                'zone_id' => 3595,
                'country_id' => 222,
                'name' => 'Staffordshire',
                'code' => 'SFD',
                'status' => 1,
            ),
            478 => 
            array (
                'zone_id' => 3596,
                'country_id' => 222,
                'name' => 'Stirling',
                'code' => 'STIR',
                'status' => 1,
            ),
            479 => 
            array (
                'zone_id' => 3597,
                'country_id' => 222,
                'name' => 'Suffolk',
                'code' => 'SFK',
                'status' => 1,
            ),
            480 => 
            array (
                'zone_id' => 3598,
                'country_id' => 222,
                'name' => 'Surrey',
                'code' => 'SRY',
                'status' => 1,
            ),
            481 => 
            array (
                'zone_id' => 3599,
                'country_id' => 222,
                'name' => 'Swansea',
                'code' => 'SWAN',
                'status' => 1,
            ),
            482 => 
            array (
                'zone_id' => 3600,
                'country_id' => 222,
                'name' => 'Torfaen',
                'code' => 'TORF',
                'status' => 1,
            ),
            483 => 
            array (
                'zone_id' => 3601,
                'country_id' => 222,
                'name' => 'Tyne and Wear',
                'code' => 'TWR',
                'status' => 1,
            ),
            484 => 
            array (
                'zone_id' => 3602,
                'country_id' => 222,
                'name' => 'Vale of Glamorgan',
                'code' => 'VGLAM',
                'status' => 1,
            ),
            485 => 
            array (
                'zone_id' => 3603,
                'country_id' => 222,
                'name' => 'Warwickshire',
                'code' => 'WARKS',
                'status' => 1,
            ),
            486 => 
            array (
                'zone_id' => 3604,
                'country_id' => 222,
                'name' => 'West Dunbartonshire',
                'code' => 'WDUN',
                'status' => 1,
            ),
            487 => 
            array (
                'zone_id' => 3605,
                'country_id' => 222,
                'name' => 'West Lothian',
                'code' => 'WLOT',
                'status' => 1,
            ),
            488 => 
            array (
                'zone_id' => 3606,
                'country_id' => 222,
                'name' => 'West Midlands',
                'code' => 'WMD',
                'status' => 1,
            ),
            489 => 
            array (
                'zone_id' => 3607,
                'country_id' => 222,
                'name' => 'West Sussex',
                'code' => 'SXW',
                'status' => 1,
            ),
            490 => 
            array (
                'zone_id' => 3608,
                'country_id' => 222,
                'name' => 'West Yorkshire',
                'code' => 'YSW',
                'status' => 1,
            ),
            491 => 
            array (
                'zone_id' => 3609,
                'country_id' => 222,
                'name' => 'Western Isles',
                'code' => 'WIL',
                'status' => 1,
            ),
            492 => 
            array (
                'zone_id' => 3610,
                'country_id' => 222,
                'name' => 'Wiltshire',
                'code' => 'WLT',
                'status' => 1,
            ),
            493 => 
            array (
                'zone_id' => 3611,
                'country_id' => 222,
                'name' => 'Worcestershire',
                'code' => 'WORCS',
                'status' => 1,
            ),
            494 => 
            array (
                'zone_id' => 3612,
                'country_id' => 222,
                'name' => 'Wrexham',
                'code' => 'WRX',
                'status' => 1,
            ),
            495 => 
            array (
                'zone_id' => 3613,
                'country_id' => 223,
                'name' => 'Alabama',
                'code' => 'AL',
                'status' => 1,
            ),
            496 => 
            array (
                'zone_id' => 3614,
                'country_id' => 223,
                'name' => 'Alaska',
                'code' => 'AK',
                'status' => 1,
            ),
            497 => 
            array (
                'zone_id' => 3615,
                'country_id' => 223,
                'name' => 'American Samoa',
                'code' => 'AS',
                'status' => 1,
            ),
            498 => 
            array (
                'zone_id' => 3616,
                'country_id' => 223,
                'name' => 'Arizona',
                'code' => 'AZ',
                'status' => 1,
            ),
            499 => 
            array (
                'zone_id' => 3617,
                'country_id' => 223,
                'name' => 'Arkansas',
                'code' => 'AR',
                'status' => 1,
            ),
        ));
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 3618,
                'country_id' => 223,
                'name' => 'Armed Forces Africa',
                'code' => 'AF',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 3619,
                'country_id' => 223,
                'name' => 'Armed Forces Americas',
                'code' => 'AA',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 3620,
                'country_id' => 223,
                'name' => 'Armed Forces Canada',
                'code' => 'AC',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 3621,
                'country_id' => 223,
                'name' => 'Armed Forces Europe',
                'code' => 'AE',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 3622,
                'country_id' => 223,
                'name' => 'Armed Forces Middle East',
                'code' => 'AM',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 3623,
                'country_id' => 223,
                'name' => 'Armed Forces Pacific',
                'code' => 'AP',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 3624,
                'country_id' => 223,
                'name' => 'California',
                'code' => 'CA',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 3625,
                'country_id' => 223,
                'name' => 'Colorado',
                'code' => 'CO',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 3626,
                'country_id' => 223,
                'name' => 'Connecticut',
                'code' => 'CT',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 3627,
                'country_id' => 223,
                'name' => 'Delaware',
                'code' => 'DE',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 3628,
                'country_id' => 223,
                'name' => 'District of Columbia',
                'code' => 'DC',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 3629,
                'country_id' => 223,
                'name' => 'Federated States Of Micronesia',
                'code' => 'FM',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 3630,
                'country_id' => 223,
                'name' => 'Florida',
                'code' => 'FL',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 3631,
                'country_id' => 223,
                'name' => 'Georgia',
                'code' => 'GA',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 3632,
                'country_id' => 223,
                'name' => 'Guam',
                'code' => 'GU',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 3633,
                'country_id' => 223,
                'name' => 'Hawaii',
                'code' => 'HI',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 3634,
                'country_id' => 223,
                'name' => 'Idaho',
                'code' => 'ID',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 3635,
                'country_id' => 223,
                'name' => 'Illinois',
                'code' => 'IL',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 3636,
                'country_id' => 223,
                'name' => 'Indiana',
                'code' => 'IN',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 3637,
                'country_id' => 223,
                'name' => 'Iowa',
                'code' => 'IA',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 3638,
                'country_id' => 223,
                'name' => 'Kansas',
                'code' => 'KS',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 3639,
                'country_id' => 223,
                'name' => 'Kentucky',
                'code' => 'KY',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 3640,
                'country_id' => 223,
                'name' => 'Louisiana',
                'code' => 'LA',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 3641,
                'country_id' => 223,
                'name' => 'Maine',
                'code' => 'ME',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 3642,
                'country_id' => 223,
                'name' => 'Marshall Islands',
                'code' => 'MH',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 3643,
                'country_id' => 223,
                'name' => 'Maryland',
                'code' => 'MD',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 3644,
                'country_id' => 223,
                'name' => 'Massachusetts',
                'code' => 'MA',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 3645,
                'country_id' => 223,
                'name' => 'Michigan',
                'code' => 'MI',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 3646,
                'country_id' => 223,
                'name' => 'Minnesota',
                'code' => 'MN',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 3647,
                'country_id' => 223,
                'name' => 'Mississippi',
                'code' => 'MS',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 3648,
                'country_id' => 223,
                'name' => 'Missouri',
                'code' => 'MO',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 3649,
                'country_id' => 223,
                'name' => 'Montana',
                'code' => 'MT',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 3650,
                'country_id' => 223,
                'name' => 'Nebraska',
                'code' => 'NE',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 3651,
                'country_id' => 223,
                'name' => 'Nevada',
                'code' => 'NV',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 3652,
                'country_id' => 223,
                'name' => 'New Hampshire',
                'code' => 'NH',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 3653,
                'country_id' => 223,
                'name' => 'New Jersey',
                'code' => 'NJ',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 3654,
                'country_id' => 223,
                'name' => 'New Mexico',
                'code' => 'NM',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 3655,
                'country_id' => 223,
                'name' => 'New York',
                'code' => 'NY',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 3656,
                'country_id' => 223,
                'name' => 'North Carolina',
                'code' => 'NC',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 3657,
                'country_id' => 223,
                'name' => 'North Dakota',
                'code' => 'ND',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 3658,
                'country_id' => 223,
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 3659,
                'country_id' => 223,
                'name' => 'Ohio',
                'code' => 'OH',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 3660,
                'country_id' => 223,
                'name' => 'Oklahoma',
                'code' => 'OK',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 3661,
                'country_id' => 223,
                'name' => 'Oregon',
                'code' => 'OR',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 3662,
                'country_id' => 223,
                'name' => 'Palau',
                'code' => 'PW',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 3663,
                'country_id' => 223,
                'name' => 'Pennsylvania',
                'code' => 'PA',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 3664,
                'country_id' => 223,
                'name' => 'Puerto Rico',
                'code' => 'PR',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 3665,
                'country_id' => 223,
                'name' => 'Rhode Island',
                'code' => 'RI',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 3666,
                'country_id' => 223,
                'name' => 'South Carolina',
                'code' => 'SC',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 3667,
                'country_id' => 223,
                'name' => 'South Dakota',
                'code' => 'SD',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 3668,
                'country_id' => 223,
                'name' => 'Tennessee',
                'code' => 'TN',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 3669,
                'country_id' => 223,
                'name' => 'Texas',
                'code' => 'TX',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 3670,
                'country_id' => 223,
                'name' => 'Utah',
                'code' => 'UT',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 3671,
                'country_id' => 223,
                'name' => 'Vermont',
                'code' => 'VT',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 3672,
                'country_id' => 223,
                'name' => 'Virgin Islands',
                'code' => 'VI',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 3673,
                'country_id' => 223,
                'name' => 'Virginia',
                'code' => 'VA',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 3674,
                'country_id' => 223,
                'name' => 'Washington',
                'code' => 'WA',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 3675,
                'country_id' => 223,
                'name' => 'West Virginia',
                'code' => 'WV',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 3676,
                'country_id' => 223,
                'name' => 'Wisconsin',
                'code' => 'WI',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 3677,
                'country_id' => 223,
                'name' => 'Wyoming',
                'code' => 'WY',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 3678,
                'country_id' => 224,
                'name' => 'Baker Island',
                'code' => 'BI',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 3679,
                'country_id' => 224,
                'name' => 'Howland Island',
                'code' => 'HI',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 3680,
                'country_id' => 224,
                'name' => 'Jarvis Island',
                'code' => 'JI',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 3681,
                'country_id' => 224,
                'name' => 'Johnston Atoll',
                'code' => 'JA',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 3682,
                'country_id' => 224,
                'name' => 'Kingman Reef',
                'code' => 'KR',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 3683,
                'country_id' => 224,
                'name' => 'Midway Atoll',
                'code' => 'MA',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 3684,
                'country_id' => 224,
                'name' => 'Navassa Island',
                'code' => 'NI',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 3685,
                'country_id' => 224,
                'name' => 'Palmyra Atoll',
                'code' => 'PA',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 3686,
                'country_id' => 224,
                'name' => 'Wake Island',
                'code' => 'WI',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 3687,
                'country_id' => 225,
                'name' => 'Artigas',
                'code' => 'AR',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 3688,
                'country_id' => 225,
                'name' => 'Canelones',
                'code' => 'CA',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 3689,
                'country_id' => 225,
                'name' => 'Cerro Largo',
                'code' => 'CL',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 3690,
                'country_id' => 225,
                'name' => 'Colonia',
                'code' => 'CO',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 3691,
                'country_id' => 225,
                'name' => 'Durazno',
                'code' => 'DU',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 3692,
                'country_id' => 225,
                'name' => 'Flores',
                'code' => 'FS',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 3693,
                'country_id' => 225,
                'name' => 'Florida',
                'code' => 'FA',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 3694,
                'country_id' => 225,
                'name' => 'Lavalleja',
                'code' => 'LA',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 3695,
                'country_id' => 225,
                'name' => 'Maldonado',
                'code' => 'MA',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 3696,
                'country_id' => 225,
                'name' => 'Montevideo',
                'code' => 'MO',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 3697,
                'country_id' => 225,
                'name' => 'Paysandu',
                'code' => 'PA',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 3698,
                'country_id' => 225,
                'name' => 'Rio Negro',
                'code' => 'RN',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 3699,
                'country_id' => 225,
                'name' => 'Rivera',
                'code' => 'RV',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 3700,
                'country_id' => 225,
                'name' => 'Rocha',
                'code' => 'RO',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 3701,
                'country_id' => 225,
                'name' => 'Salto',
                'code' => 'SL',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 3702,
                'country_id' => 225,
                'name' => 'San Jose',
                'code' => 'SJ',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 3703,
                'country_id' => 225,
                'name' => 'Soriano',
                'code' => 'SO',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 3704,
                'country_id' => 225,
                'name' => 'Tacuarembo',
                'code' => 'TA',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 3705,
                'country_id' => 225,
                'name' => 'Treinta y Tres',
                'code' => 'TT',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 3706,
                'country_id' => 226,
                'name' => 'Andijon',
                'code' => 'AN',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 3707,
                'country_id' => 226,
                'name' => 'Buxoro',
                'code' => 'BU',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 3708,
                'country_id' => 226,
                'name' => 'Farg\'ona',
                'code' => 'FA',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 3709,
                'country_id' => 226,
                'name' => 'Jizzax',
                'code' => 'JI',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 3710,
                'country_id' => 226,
                'name' => 'Namangan',
                'code' => 'NG',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 3711,
                'country_id' => 226,
                'name' => 'Navoiy',
                'code' => 'NW',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 3712,
                'country_id' => 226,
                'name' => 'Qashqadaryo',
                'code' => 'QA',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 3713,
                'country_id' => 226,
                'name' => 'Qoraqalpog\'iston Republikasi',
                'code' => 'QR',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 3714,
                'country_id' => 226,
                'name' => 'Samarqand',
                'code' => 'SA',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 3715,
                'country_id' => 226,
                'name' => 'Sirdaryo',
                'code' => 'SI',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 3716,
                'country_id' => 226,
                'name' => 'Surxondaryo',
                'code' => 'SU',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 3717,
                'country_id' => 226,
                'name' => 'Toshkent City',
                'code' => 'TK',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 3718,
                'country_id' => 226,
                'name' => 'Toshkent Region',
                'code' => 'TO',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 3719,
                'country_id' => 226,
                'name' => 'Xorazm',
                'code' => 'XO',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 3720,
                'country_id' => 227,
                'name' => 'Malampa',
                'code' => 'MA',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 3721,
                'country_id' => 227,
                'name' => 'Penama',
                'code' => 'PE',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 3722,
                'country_id' => 227,
                'name' => 'Sanma',
                'code' => 'SA',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 3723,
                'country_id' => 227,
                'name' => 'Shefa',
                'code' => 'SH',
                'status' => 1,
            ),
            106 => 
            array (
                'zone_id' => 3724,
                'country_id' => 227,
                'name' => 'Tafea',
                'code' => 'TA',
                'status' => 1,
            ),
            107 => 
            array (
                'zone_id' => 3725,
                'country_id' => 227,
                'name' => 'Torba',
                'code' => 'TO',
                'status' => 1,
            ),
            108 => 
            array (
                'zone_id' => 3726,
                'country_id' => 229,
                'name' => 'Amazonas',
                'code' => 'AM',
                'status' => 1,
            ),
            109 => 
            array (
                'zone_id' => 3727,
                'country_id' => 229,
                'name' => 'Anzoategui',
                'code' => 'AN',
                'status' => 1,
            ),
            110 => 
            array (
                'zone_id' => 3728,
                'country_id' => 229,
                'name' => 'Apure',
                'code' => 'AP',
                'status' => 1,
            ),
            111 => 
            array (
                'zone_id' => 3729,
                'country_id' => 229,
                'name' => 'Aragua',
                'code' => 'AR',
                'status' => 1,
            ),
            112 => 
            array (
                'zone_id' => 3730,
                'country_id' => 229,
                'name' => 'Barinas',
                'code' => 'BA',
                'status' => 1,
            ),
            113 => 
            array (
                'zone_id' => 3731,
                'country_id' => 229,
                'name' => 'Bolivar',
                'code' => 'BO',
                'status' => 1,
            ),
            114 => 
            array (
                'zone_id' => 3732,
                'country_id' => 229,
                'name' => 'Carabobo',
                'code' => 'CA',
                'status' => 1,
            ),
            115 => 
            array (
                'zone_id' => 3733,
                'country_id' => 229,
                'name' => 'Cojedes',
                'code' => 'CO',
                'status' => 1,
            ),
            116 => 
            array (
                'zone_id' => 3734,
                'country_id' => 229,
                'name' => 'Delta Amacuro',
                'code' => 'DA',
                'status' => 1,
            ),
            117 => 
            array (
                'zone_id' => 3735,
                'country_id' => 229,
                'name' => 'Dependencias Federales',
                'code' => 'DF',
                'status' => 1,
            ),
            118 => 
            array (
                'zone_id' => 3736,
                'country_id' => 229,
                'name' => 'Distrito Federal',
                'code' => 'DI',
                'status' => 1,
            ),
            119 => 
            array (
                'zone_id' => 3737,
                'country_id' => 229,
                'name' => 'Falcon',
                'code' => 'FA',
                'status' => 1,
            ),
            120 => 
            array (
                'zone_id' => 3738,
                'country_id' => 229,
                'name' => 'Guarico',
                'code' => 'GU',
                'status' => 1,
            ),
            121 => 
            array (
                'zone_id' => 3739,
                'country_id' => 229,
                'name' => 'Lara',
                'code' => 'LA',
                'status' => 1,
            ),
            122 => 
            array (
                'zone_id' => 3740,
                'country_id' => 229,
                'name' => 'Merida',
                'code' => 'ME',
                'status' => 1,
            ),
            123 => 
            array (
                'zone_id' => 3741,
                'country_id' => 229,
                'name' => 'Miranda',
                'code' => 'MI',
                'status' => 1,
            ),
            124 => 
            array (
                'zone_id' => 3742,
                'country_id' => 229,
                'name' => 'Monagas',
                'code' => 'MO',
                'status' => 1,
            ),
            125 => 
            array (
                'zone_id' => 3743,
                'country_id' => 229,
                'name' => 'Nueva Esparta',
                'code' => 'NE',
                'status' => 1,
            ),
            126 => 
            array (
                'zone_id' => 3744,
                'country_id' => 229,
                'name' => 'Portuguesa',
                'code' => 'PO',
                'status' => 1,
            ),
            127 => 
            array (
                'zone_id' => 3745,
                'country_id' => 229,
                'name' => 'Sucre',
                'code' => 'SU',
                'status' => 1,
            ),
            128 => 
            array (
                'zone_id' => 3746,
                'country_id' => 229,
                'name' => 'Tachira',
                'code' => 'TA',
                'status' => 1,
            ),
            129 => 
            array (
                'zone_id' => 3747,
                'country_id' => 229,
                'name' => 'Trujillo',
                'code' => 'TR',
                'status' => 1,
            ),
            130 => 
            array (
                'zone_id' => 3748,
                'country_id' => 229,
                'name' => 'Vargas',
                'code' => 'VA',
                'status' => 1,
            ),
            131 => 
            array (
                'zone_id' => 3749,
                'country_id' => 229,
                'name' => 'Yaracuy',
                'code' => 'YA',
                'status' => 1,
            ),
            132 => 
            array (
                'zone_id' => 3750,
                'country_id' => 229,
                'name' => 'Zulia',
                'code' => 'ZU',
                'status' => 1,
            ),
            133 => 
            array (
                'zone_id' => 3751,
                'country_id' => 230,
                'name' => 'An Giang',
                'code' => 'AG',
                'status' => 1,
            ),
            134 => 
            array (
                'zone_id' => 3752,
                'country_id' => 230,
                'name' => 'Bac Giang',
                'code' => 'BG',
                'status' => 1,
            ),
            135 => 
            array (
                'zone_id' => 3753,
                'country_id' => 230,
                'name' => 'Bac Kan',
                'code' => 'BK',
                'status' => 1,
            ),
            136 => 
            array (
                'zone_id' => 3754,
                'country_id' => 230,
                'name' => 'Bac Lieu',
                'code' => 'BL',
                'status' => 1,
            ),
            137 => 
            array (
                'zone_id' => 3755,
                'country_id' => 230,
                'name' => 'Bac Ninh',
                'code' => 'BC',
                'status' => 1,
            ),
            138 => 
            array (
                'zone_id' => 3756,
                'country_id' => 230,
                'name' => 'Ba Ria-Vung Tau',
                'code' => 'BR',
                'status' => 1,
            ),
            139 => 
            array (
                'zone_id' => 3757,
                'country_id' => 230,
                'name' => 'Ben Tre',
                'code' => 'BN',
                'status' => 1,
            ),
            140 => 
            array (
                'zone_id' => 3758,
                'country_id' => 230,
                'name' => 'Binh Dinh',
                'code' => 'BH',
                'status' => 1,
            ),
            141 => 
            array (
                'zone_id' => 3759,
                'country_id' => 230,
                'name' => 'Binh Duong',
                'code' => 'BU',
                'status' => 1,
            ),
            142 => 
            array (
                'zone_id' => 3760,
                'country_id' => 230,
                'name' => 'Binh Phuoc',
                'code' => 'BP',
                'status' => 1,
            ),
            143 => 
            array (
                'zone_id' => 3761,
                'country_id' => 230,
                'name' => 'Binh Thuan',
                'code' => 'BT',
                'status' => 1,
            ),
            144 => 
            array (
                'zone_id' => 3762,
                'country_id' => 230,
                'name' => 'Ca Mau',
                'code' => 'CM',
                'status' => 1,
            ),
            145 => 
            array (
                'zone_id' => 3763,
                'country_id' => 230,
                'name' => 'Can Tho',
                'code' => 'CT',
                'status' => 1,
            ),
            146 => 
            array (
                'zone_id' => 3764,
                'country_id' => 230,
                'name' => 'Cao Bang',
                'code' => 'CB',
                'status' => 1,
            ),
            147 => 
            array (
                'zone_id' => 3765,
                'country_id' => 230,
                'name' => 'Dak Lak',
                'code' => 'DL',
                'status' => 1,
            ),
            148 => 
            array (
                'zone_id' => 3766,
                'country_id' => 230,
                'name' => 'Dak Nong',
                'code' => 'DG',
                'status' => 1,
            ),
            149 => 
            array (
                'zone_id' => 3767,
                'country_id' => 230,
                'name' => 'Da Nang',
                'code' => 'DN',
                'status' => 1,
            ),
            150 => 
            array (
                'zone_id' => 3768,
                'country_id' => 230,
                'name' => 'Dien Bien',
                'code' => 'DB',
                'status' => 1,
            ),
            151 => 
            array (
                'zone_id' => 3769,
                'country_id' => 230,
                'name' => 'Dong Nai',
                'code' => 'DI',
                'status' => 1,
            ),
            152 => 
            array (
                'zone_id' => 3770,
                'country_id' => 230,
                'name' => 'Dong Thap',
                'code' => 'DT',
                'status' => 1,
            ),
            153 => 
            array (
                'zone_id' => 3771,
                'country_id' => 230,
                'name' => 'Gia Lai',
                'code' => 'GL',
                'status' => 1,
            ),
            154 => 
            array (
                'zone_id' => 3772,
                'country_id' => 230,
                'name' => 'Ha Giang',
                'code' => 'HG',
                'status' => 1,
            ),
            155 => 
            array (
                'zone_id' => 3773,
                'country_id' => 230,
                'name' => 'Hai Duong',
                'code' => 'HD',
                'status' => 1,
            ),
            156 => 
            array (
                'zone_id' => 3774,
                'country_id' => 230,
                'name' => 'Hai Phong',
                'code' => 'HP',
                'status' => 1,
            ),
            157 => 
            array (
                'zone_id' => 3775,
                'country_id' => 230,
                'name' => 'Ha Nam',
                'code' => 'HM',
                'status' => 1,
            ),
            158 => 
            array (
                'zone_id' => 3776,
                'country_id' => 230,
                'name' => 'Ha Noi',
                'code' => 'HI',
                'status' => 1,
            ),
            159 => 
            array (
                'zone_id' => 3777,
                'country_id' => 230,
                'name' => 'Ha Tay',
                'code' => 'HT',
                'status' => 1,
            ),
            160 => 
            array (
                'zone_id' => 3778,
                'country_id' => 230,
                'name' => 'Ha Tinh',
                'code' => 'HH',
                'status' => 1,
            ),
            161 => 
            array (
                'zone_id' => 3779,
                'country_id' => 230,
                'name' => 'Hoa Binh',
                'code' => 'HB',
                'status' => 1,
            ),
            162 => 
            array (
                'zone_id' => 3780,
                'country_id' => 230,
                'name' => 'Ho Chi Minh City',
                'code' => 'HC',
                'status' => 1,
            ),
            163 => 
            array (
                'zone_id' => 3781,
                'country_id' => 230,
                'name' => 'Hau Giang',
                'code' => 'HU',
                'status' => 1,
            ),
            164 => 
            array (
                'zone_id' => 3782,
                'country_id' => 230,
                'name' => 'Hung Yen',
                'code' => 'HY',
                'status' => 1,
            ),
            165 => 
            array (
                'zone_id' => 3783,
                'country_id' => 232,
                'name' => 'Saint Croix',
                'code' => 'C',
                'status' => 1,
            ),
            166 => 
            array (
                'zone_id' => 3784,
                'country_id' => 232,
                'name' => 'Saint John',
                'code' => 'J',
                'status' => 1,
            ),
            167 => 
            array (
                'zone_id' => 3785,
                'country_id' => 232,
                'name' => 'Saint Thomas',
                'code' => 'T',
                'status' => 1,
            ),
            168 => 
            array (
                'zone_id' => 3786,
                'country_id' => 233,
                'name' => 'Alo',
                'code' => 'A',
                'status' => 1,
            ),
            169 => 
            array (
                'zone_id' => 3787,
                'country_id' => 233,
                'name' => 'Sigave',
                'code' => 'S',
                'status' => 1,
            ),
            170 => 
            array (
                'zone_id' => 3788,
                'country_id' => 233,
                'name' => 'Wallis',
                'code' => 'W',
                'status' => 1,
            ),
            171 => 
            array (
                'zone_id' => 3789,
                'country_id' => 235,
                'name' => 'Abyan',
                'code' => 'AB',
                'status' => 1,
            ),
            172 => 
            array (
                'zone_id' => 3790,
                'country_id' => 235,
                'name' => 'Adan',
                'code' => 'AD',
                'status' => 1,
            ),
            173 => 
            array (
                'zone_id' => 3791,
                'country_id' => 235,
                'name' => 'Amran',
                'code' => 'AM',
                'status' => 1,
            ),
            174 => 
            array (
                'zone_id' => 3792,
                'country_id' => 235,
                'name' => 'Al Bayda',
                'code' => 'BA',
                'status' => 1,
            ),
            175 => 
            array (
                'zone_id' => 3793,
                'country_id' => 235,
                'name' => 'Ad Dali',
                'code' => 'DA',
                'status' => 1,
            ),
            176 => 
            array (
                'zone_id' => 3794,
                'country_id' => 235,
                'name' => 'Dhamar',
                'code' => 'DH',
                'status' => 1,
            ),
            177 => 
            array (
                'zone_id' => 3795,
                'country_id' => 235,
                'name' => 'Hadramawt',
                'code' => 'HD',
                'status' => 1,
            ),
            178 => 
            array (
                'zone_id' => 3796,
                'country_id' => 235,
                'name' => 'Hajjah',
                'code' => 'HJ',
                'status' => 1,
            ),
            179 => 
            array (
                'zone_id' => 3797,
                'country_id' => 235,
                'name' => 'Al Hudaydah',
                'code' => 'HU',
                'status' => 1,
            ),
            180 => 
            array (
                'zone_id' => 3798,
                'country_id' => 235,
                'name' => 'Ibb',
                'code' => 'IB',
                'status' => 1,
            ),
            181 => 
            array (
                'zone_id' => 3799,
                'country_id' => 235,
                'name' => 'Al Jawf',
                'code' => 'JA',
                'status' => 1,
            ),
            182 => 
            array (
                'zone_id' => 3800,
                'country_id' => 235,
                'name' => 'Lahij',
                'code' => 'LA',
                'status' => 1,
            ),
            183 => 
            array (
                'zone_id' => 3801,
                'country_id' => 235,
                'name' => 'Ma\'rib',
                'code' => 'MA',
                'status' => 1,
            ),
            184 => 
            array (
                'zone_id' => 3802,
                'country_id' => 235,
                'name' => 'Al Mahrah',
                'code' => 'MR',
                'status' => 1,
            ),
            185 => 
            array (
                'zone_id' => 3803,
                'country_id' => 235,
                'name' => 'Al Mahwit',
                'code' => 'MW',
                'status' => 1,
            ),
            186 => 
            array (
                'zone_id' => 3804,
                'country_id' => 235,
                'name' => 'Sa\'dah',
                'code' => 'SD',
                'status' => 1,
            ),
            187 => 
            array (
                'zone_id' => 3805,
                'country_id' => 235,
                'name' => 'San\'a',
                'code' => 'SN',
                'status' => 1,
            ),
            188 => 
            array (
                'zone_id' => 3806,
                'country_id' => 235,
                'name' => 'Shabwah',
                'code' => 'SH',
                'status' => 1,
            ),
            189 => 
            array (
                'zone_id' => 3807,
                'country_id' => 235,
                'name' => 'Ta\'izz',
                'code' => 'TA',
                'status' => 1,
            ),
            190 => 
            array (
                'zone_id' => 3812,
                'country_id' => 237,
                'name' => 'Bas-Congo',
                'code' => 'BC',
                'status' => 1,
            ),
            191 => 
            array (
                'zone_id' => 3813,
                'country_id' => 237,
                'name' => 'Bandundu',
                'code' => 'BN',
                'status' => 1,
            ),
            192 => 
            array (
                'zone_id' => 3814,
                'country_id' => 237,
                'name' => 'Equateur',
                'code' => 'EQ',
                'status' => 1,
            ),
            193 => 
            array (
                'zone_id' => 3815,
                'country_id' => 237,
                'name' => 'Katanga',
                'code' => 'KA',
                'status' => 1,
            ),
            194 => 
            array (
                'zone_id' => 3816,
                'country_id' => 237,
                'name' => 'Kasai-Oriental',
                'code' => 'KE',
                'status' => 1,
            ),
            195 => 
            array (
                'zone_id' => 3817,
                'country_id' => 237,
                'name' => 'Kinshasa',
                'code' => 'KN',
                'status' => 1,
            ),
            196 => 
            array (
                'zone_id' => 3818,
                'country_id' => 237,
                'name' => 'Kasai-Occidental',
                'code' => 'KW',
                'status' => 1,
            ),
            197 => 
            array (
                'zone_id' => 3819,
                'country_id' => 237,
                'name' => 'Maniema',
                'code' => 'MA',
                'status' => 1,
            ),
            198 => 
            array (
                'zone_id' => 3820,
                'country_id' => 237,
                'name' => 'Nord-Kivu',
                'code' => 'NK',
                'status' => 1,
            ),
            199 => 
            array (
                'zone_id' => 3821,
                'country_id' => 237,
                'name' => 'Orientale',
                'code' => 'OR',
                'status' => 1,
            ),
            200 => 
            array (
                'zone_id' => 3822,
                'country_id' => 237,
                'name' => 'Sud-Kivu',
                'code' => 'SK',
                'status' => 1,
            ),
            201 => 
            array (
                'zone_id' => 3823,
                'country_id' => 238,
                'name' => 'Central',
                'code' => 'CE',
                'status' => 1,
            ),
            202 => 
            array (
                'zone_id' => 3824,
                'country_id' => 238,
                'name' => 'Copperbelt',
                'code' => 'CB',
                'status' => 1,
            ),
            203 => 
            array (
                'zone_id' => 3825,
                'country_id' => 238,
                'name' => 'Eastern',
                'code' => 'EA',
                'status' => 1,
            ),
            204 => 
            array (
                'zone_id' => 3826,
                'country_id' => 238,
                'name' => 'Luapula',
                'code' => 'LP',
                'status' => 1,
            ),
            205 => 
            array (
                'zone_id' => 3827,
                'country_id' => 238,
                'name' => 'Lusaka',
                'code' => 'LK',
                'status' => 1,
            ),
            206 => 
            array (
                'zone_id' => 3828,
                'country_id' => 238,
                'name' => 'Northern',
                'code' => 'NO',
                'status' => 1,
            ),
            207 => 
            array (
                'zone_id' => 3829,
                'country_id' => 238,
                'name' => 'North-Western',
                'code' => 'NW',
                'status' => 1,
            ),
            208 => 
            array (
                'zone_id' => 3830,
                'country_id' => 238,
                'name' => 'Southern',
                'code' => 'SO',
                'status' => 1,
            ),
            209 => 
            array (
                'zone_id' => 3831,
                'country_id' => 238,
                'name' => 'Western',
                'code' => 'WE',
                'status' => 1,
            ),
            210 => 
            array (
                'zone_id' => 3832,
                'country_id' => 239,
                'name' => 'Bulawayo',
                'code' => 'BU',
                'status' => 1,
            ),
            211 => 
            array (
                'zone_id' => 3833,
                'country_id' => 239,
                'name' => 'Harare',
                'code' => 'HA',
                'status' => 1,
            ),
            212 => 
            array (
                'zone_id' => 3834,
                'country_id' => 239,
                'name' => 'Manicaland',
                'code' => 'ML',
                'status' => 1,
            ),
            213 => 
            array (
                'zone_id' => 3835,
                'country_id' => 239,
                'name' => 'Mashonaland Central',
                'code' => 'MC',
                'status' => 1,
            ),
            214 => 
            array (
                'zone_id' => 3836,
                'country_id' => 239,
                'name' => 'Mashonaland East',
                'code' => 'ME',
                'status' => 1,
            ),
            215 => 
            array (
                'zone_id' => 3837,
                'country_id' => 239,
                'name' => 'Mashonaland West',
                'code' => 'MW',
                'status' => 1,
            ),
            216 => 
            array (
                'zone_id' => 3838,
                'country_id' => 239,
                'name' => 'Masvingo',
                'code' => 'MV',
                'status' => 1,
            ),
            217 => 
            array (
                'zone_id' => 3839,
                'country_id' => 239,
                'name' => 'Matabeleland North',
                'code' => 'MN',
                'status' => 1,
            ),
            218 => 
            array (
                'zone_id' => 3840,
                'country_id' => 239,
                'name' => 'Matabeleland South',
                'code' => 'MS',
                'status' => 1,
            ),
            219 => 
            array (
                'zone_id' => 3841,
                'country_id' => 239,
                'name' => 'Midlands',
                'code' => 'MD',
                'status' => 1,
            ),
            220 => 
            array (
                'zone_id' => 3842,
                'country_id' => 105,
                'name' => 'Agrigento',
                'code' => 'AG',
                'status' => 1,
            ),
            221 => 
            array (
                'zone_id' => 3843,
                'country_id' => 105,
                'name' => 'Alessandria',
                'code' => 'AL',
                'status' => 1,
            ),
            222 => 
            array (
                'zone_id' => 3844,
                'country_id' => 105,
                'name' => 'Ancona',
                'code' => 'AN',
                'status' => 1,
            ),
            223 => 
            array (
                'zone_id' => 3845,
                'country_id' => 105,
                'name' => 'Aosta',
                'code' => 'AO',
                'status' => 1,
            ),
            224 => 
            array (
                'zone_id' => 3846,
                'country_id' => 105,
                'name' => 'Arezzo',
                'code' => 'AR',
                'status' => 1,
            ),
            225 => 
            array (
                'zone_id' => 3847,
                'country_id' => 105,
                'name' => 'Ascoli Piceno',
                'code' => 'AP',
                'status' => 1,
            ),
            226 => 
            array (
                'zone_id' => 3848,
                'country_id' => 105,
                'name' => 'Asti',
                'code' => 'AT',
                'status' => 1,
            ),
            227 => 
            array (
                'zone_id' => 3849,
                'country_id' => 105,
                'name' => 'Avellino',
                'code' => 'AV',
                'status' => 1,
            ),
            228 => 
            array (
                'zone_id' => 3850,
                'country_id' => 105,
                'name' => 'Bari',
                'code' => 'BA',
                'status' => 1,
            ),
            229 => 
            array (
                'zone_id' => 3851,
                'country_id' => 105,
                'name' => 'Belluno',
                'code' => 'BL',
                'status' => 1,
            ),
            230 => 
            array (
                'zone_id' => 3852,
                'country_id' => 105,
                'name' => 'Benevento',
                'code' => 'BN',
                'status' => 1,
            ),
            231 => 
            array (
                'zone_id' => 3853,
                'country_id' => 105,
                'name' => 'Bergamo',
                'code' => 'BG',
                'status' => 1,
            ),
            232 => 
            array (
                'zone_id' => 3854,
                'country_id' => 105,
                'name' => 'Biella',
                'code' => 'BI',
                'status' => 1,
            ),
            233 => 
            array (
                'zone_id' => 3855,
                'country_id' => 105,
                'name' => 'Bologna',
                'code' => 'BO',
                'status' => 1,
            ),
            234 => 
            array (
                'zone_id' => 3856,
                'country_id' => 105,
                'name' => 'Bolzano',
                'code' => 'BZ',
                'status' => 1,
            ),
            235 => 
            array (
                'zone_id' => 3857,
                'country_id' => 105,
                'name' => 'Brescia',
                'code' => 'BS',
                'status' => 1,
            ),
            236 => 
            array (
                'zone_id' => 3858,
                'country_id' => 105,
                'name' => 'Brindisi',
                'code' => 'BR',
                'status' => 1,
            ),
            237 => 
            array (
                'zone_id' => 3859,
                'country_id' => 105,
                'name' => 'Cagliari',
                'code' => 'CA',
                'status' => 1,
            ),
            238 => 
            array (
                'zone_id' => 3860,
                'country_id' => 105,
                'name' => 'Caltanissetta',
                'code' => 'CL',
                'status' => 1,
            ),
            239 => 
            array (
                'zone_id' => 3861,
                'country_id' => 105,
                'name' => 'Campobasso',
                'code' => 'CB',
                'status' => 1,
            ),
            240 => 
            array (
                'zone_id' => 3862,
                'country_id' => 105,
                'name' => 'Carbonia-Iglesias',
                'code' => 'CI',
                'status' => 1,
            ),
            241 => 
            array (
                'zone_id' => 3863,
                'country_id' => 105,
                'name' => 'Caserta',
                'code' => 'CE',
                'status' => 1,
            ),
            242 => 
            array (
                'zone_id' => 3864,
                'country_id' => 105,
                'name' => 'Catania',
                'code' => 'CT',
                'status' => 1,
            ),
            243 => 
            array (
                'zone_id' => 3865,
                'country_id' => 105,
                'name' => 'Catanzaro',
                'code' => 'CZ',
                'status' => 1,
            ),
            244 => 
            array (
                'zone_id' => 3866,
                'country_id' => 105,
                'name' => 'Chieti',
                'code' => 'CH',
                'status' => 1,
            ),
            245 => 
            array (
                'zone_id' => 3867,
                'country_id' => 105,
                'name' => 'Como',
                'code' => 'CO',
                'status' => 1,
            ),
            246 => 
            array (
                'zone_id' => 3868,
                'country_id' => 105,
                'name' => 'Cosenza',
                'code' => 'CS',
                'status' => 1,
            ),
            247 => 
            array (
                'zone_id' => 3869,
                'country_id' => 105,
                'name' => 'Cremona',
                'code' => 'CR',
                'status' => 1,
            ),
            248 => 
            array (
                'zone_id' => 3870,
                'country_id' => 105,
                'name' => 'Crotone',
                'code' => 'KR',
                'status' => 1,
            ),
            249 => 
            array (
                'zone_id' => 3871,
                'country_id' => 105,
                'name' => 'Cuneo',
                'code' => 'CN',
                'status' => 1,
            ),
            250 => 
            array (
                'zone_id' => 3872,
                'country_id' => 105,
                'name' => 'Enna',
                'code' => 'EN',
                'status' => 1,
            ),
            251 => 
            array (
                'zone_id' => 3873,
                'country_id' => 105,
                'name' => 'Ferrara',
                'code' => 'FE',
                'status' => 1,
            ),
            252 => 
            array (
                'zone_id' => 3874,
                'country_id' => 105,
                'name' => 'Firenze',
                'code' => 'FI',
                'status' => 1,
            ),
            253 => 
            array (
                'zone_id' => 3875,
                'country_id' => 105,
                'name' => 'Foggia',
                'code' => 'FG',
                'status' => 1,
            ),
            254 => 
            array (
                'zone_id' => 3876,
                'country_id' => 105,
                'name' => 'Forli-Cesena',
                'code' => 'FC',
                'status' => 1,
            ),
            255 => 
            array (
                'zone_id' => 3877,
                'country_id' => 105,
                'name' => 'Frosinone',
                'code' => 'FR',
                'status' => 1,
            ),
            256 => 
            array (
                'zone_id' => 3878,
                'country_id' => 105,
                'name' => 'Genova',
                'code' => 'GE',
                'status' => 1,
            ),
            257 => 
            array (
                'zone_id' => 3879,
                'country_id' => 105,
                'name' => 'Gorizia',
                'code' => 'GO',
                'status' => 1,
            ),
            258 => 
            array (
                'zone_id' => 3880,
                'country_id' => 105,
                'name' => 'Grosseto',
                'code' => 'GR',
                'status' => 1,
            ),
            259 => 
            array (
                'zone_id' => 3881,
                'country_id' => 105,
                'name' => 'Imperia',
                'code' => 'IM',
                'status' => 1,
            ),
            260 => 
            array (
                'zone_id' => 3882,
                'country_id' => 105,
                'name' => 'Isernia',
                'code' => 'IS',
                'status' => 1,
            ),
            261 => 
            array (
                'zone_id' => 3883,
                'country_id' => 105,
                'name' => 'L&#39;Aquila',
                'code' => 'AQ',
                'status' => 1,
            ),
            262 => 
            array (
                'zone_id' => 3884,
                'country_id' => 105,
                'name' => 'La Spezia',
                'code' => 'SP',
                'status' => 1,
            ),
            263 => 
            array (
                'zone_id' => 3885,
                'country_id' => 105,
                'name' => 'Latina',
                'code' => 'LT',
                'status' => 1,
            ),
            264 => 
            array (
                'zone_id' => 3886,
                'country_id' => 105,
                'name' => 'Lecce',
                'code' => 'LE',
                'status' => 1,
            ),
            265 => 
            array (
                'zone_id' => 3887,
                'country_id' => 105,
                'name' => 'Lecco',
                'code' => 'LC',
                'status' => 1,
            ),
            266 => 
            array (
                'zone_id' => 3888,
                'country_id' => 105,
                'name' => 'Livorno',
                'code' => 'LI',
                'status' => 1,
            ),
            267 => 
            array (
                'zone_id' => 3889,
                'country_id' => 105,
                'name' => 'Lodi',
                'code' => 'LO',
                'status' => 1,
            ),
            268 => 
            array (
                'zone_id' => 3890,
                'country_id' => 105,
                'name' => 'Lucca',
                'code' => 'LU',
                'status' => 1,
            ),
            269 => 
            array (
                'zone_id' => 3891,
                'country_id' => 105,
                'name' => 'Macerata',
                'code' => 'MC',
                'status' => 1,
            ),
            270 => 
            array (
                'zone_id' => 3892,
                'country_id' => 105,
                'name' => 'Mantova',
                'code' => 'MN',
                'status' => 1,
            ),
            271 => 
            array (
                'zone_id' => 3893,
                'country_id' => 105,
                'name' => 'Massa-Carrara',
                'code' => 'MS',
                'status' => 1,
            ),
            272 => 
            array (
                'zone_id' => 3894,
                'country_id' => 105,
                'name' => 'Matera',
                'code' => 'MT',
                'status' => 1,
            ),
            273 => 
            array (
                'zone_id' => 3895,
                'country_id' => 105,
                'name' => 'Medio Campidano',
                'code' => 'VS',
                'status' => 1,
            ),
            274 => 
            array (
                'zone_id' => 3896,
                'country_id' => 105,
                'name' => 'Messina',
                'code' => 'ME',
                'status' => 1,
            ),
            275 => 
            array (
                'zone_id' => 3897,
                'country_id' => 105,
                'name' => 'Milano',
                'code' => 'MI',
                'status' => 1,
            ),
            276 => 
            array (
                'zone_id' => 3898,
                'country_id' => 105,
                'name' => 'Modena',
                'code' => 'MO',
                'status' => 1,
            ),
            277 => 
            array (
                'zone_id' => 3899,
                'country_id' => 105,
                'name' => 'Napoli',
                'code' => 'NA',
                'status' => 1,
            ),
            278 => 
            array (
                'zone_id' => 3900,
                'country_id' => 105,
                'name' => 'Novara',
                'code' => 'NO',
                'status' => 1,
            ),
            279 => 
            array (
                'zone_id' => 3901,
                'country_id' => 105,
                'name' => 'Nuoro',
                'code' => 'NU',
                'status' => 1,
            ),
            280 => 
            array (
                'zone_id' => 3902,
                'country_id' => 105,
                'name' => 'Ogliastra',
                'code' => 'OG',
                'status' => 1,
            ),
            281 => 
            array (
                'zone_id' => 3903,
                'country_id' => 105,
                'name' => 'Olbia-Tempio',
                'code' => 'OT',
                'status' => 1,
            ),
            282 => 
            array (
                'zone_id' => 3904,
                'country_id' => 105,
                'name' => 'Oristano',
                'code' => 'OR',
                'status' => 1,
            ),
            283 => 
            array (
                'zone_id' => 3905,
                'country_id' => 105,
                'name' => 'Padova',
                'code' => 'PD',
                'status' => 1,
            ),
            284 => 
            array (
                'zone_id' => 3906,
                'country_id' => 105,
                'name' => 'Palermo',
                'code' => 'PA',
                'status' => 1,
            ),
            285 => 
            array (
                'zone_id' => 3907,
                'country_id' => 105,
                'name' => 'Parma',
                'code' => 'PR',
                'status' => 1,
            ),
            286 => 
            array (
                'zone_id' => 3908,
                'country_id' => 105,
                'name' => 'Pavia',
                'code' => 'PV',
                'status' => 1,
            ),
            287 => 
            array (
                'zone_id' => 3909,
                'country_id' => 105,
                'name' => 'Perugia',
                'code' => 'PG',
                'status' => 1,
            ),
            288 => 
            array (
                'zone_id' => 3910,
                'country_id' => 105,
                'name' => 'Pesaro e Urbino',
                'code' => 'PU',
                'status' => 1,
            ),
            289 => 
            array (
                'zone_id' => 3911,
                'country_id' => 105,
                'name' => 'Pescara',
                'code' => 'PE',
                'status' => 1,
            ),
            290 => 
            array (
                'zone_id' => 3912,
                'country_id' => 105,
                'name' => 'Piacenza',
                'code' => 'PC',
                'status' => 1,
            ),
            291 => 
            array (
                'zone_id' => 3913,
                'country_id' => 105,
                'name' => 'Pisa',
                'code' => 'PI',
                'status' => 1,
            ),
            292 => 
            array (
                'zone_id' => 3914,
                'country_id' => 105,
                'name' => 'Pistoia',
                'code' => 'PT',
                'status' => 1,
            ),
            293 => 
            array (
                'zone_id' => 3915,
                'country_id' => 105,
                'name' => 'Pordenone',
                'code' => 'PN',
                'status' => 1,
            ),
            294 => 
            array (
                'zone_id' => 3916,
                'country_id' => 105,
                'name' => 'Potenza',
                'code' => 'PZ',
                'status' => 1,
            ),
            295 => 
            array (
                'zone_id' => 3917,
                'country_id' => 105,
                'name' => 'Prato',
                'code' => 'PO',
                'status' => 1,
            ),
            296 => 
            array (
                'zone_id' => 3918,
                'country_id' => 105,
                'name' => 'Ragusa',
                'code' => 'RG',
                'status' => 1,
            ),
            297 => 
            array (
                'zone_id' => 3919,
                'country_id' => 105,
                'name' => 'Ravenna',
                'code' => 'RA',
                'status' => 1,
            ),
            298 => 
            array (
                'zone_id' => 3920,
                'country_id' => 105,
                'name' => 'Reggio Calabria',
                'code' => 'RC',
                'status' => 1,
            ),
            299 => 
            array (
                'zone_id' => 3921,
                'country_id' => 105,
                'name' => 'Reggio Emilia',
                'code' => 'RE',
                'status' => 1,
            ),
            300 => 
            array (
                'zone_id' => 3922,
                'country_id' => 105,
                'name' => 'Rieti',
                'code' => 'RI',
                'status' => 1,
            ),
            301 => 
            array (
                'zone_id' => 3923,
                'country_id' => 105,
                'name' => 'Rimini',
                'code' => 'RN',
                'status' => 1,
            ),
            302 => 
            array (
                'zone_id' => 3924,
                'country_id' => 105,
                'name' => 'Roma',
                'code' => 'RM',
                'status' => 1,
            ),
            303 => 
            array (
                'zone_id' => 3925,
                'country_id' => 105,
                'name' => 'Rovigo',
                'code' => 'RO',
                'status' => 1,
            ),
            304 => 
            array (
                'zone_id' => 3926,
                'country_id' => 105,
                'name' => 'Salerno',
                'code' => 'SA',
                'status' => 1,
            ),
            305 => 
            array (
                'zone_id' => 3927,
                'country_id' => 105,
                'name' => 'Sassari',
                'code' => 'SS',
                'status' => 1,
            ),
            306 => 
            array (
                'zone_id' => 3928,
                'country_id' => 105,
                'name' => 'Savona',
                'code' => 'SV',
                'status' => 1,
            ),
            307 => 
            array (
                'zone_id' => 3929,
                'country_id' => 105,
                'name' => 'Siena',
                'code' => 'SI',
                'status' => 1,
            ),
            308 => 
            array (
                'zone_id' => 3930,
                'country_id' => 105,
                'name' => 'Siracusa',
                'code' => 'SR',
                'status' => 1,
            ),
            309 => 
            array (
                'zone_id' => 3931,
                'country_id' => 105,
                'name' => 'Sondrio',
                'code' => 'SO',
                'status' => 1,
            ),
            310 => 
            array (
                'zone_id' => 3932,
                'country_id' => 105,
                'name' => 'Taranto',
                'code' => 'TA',
                'status' => 1,
            ),
            311 => 
            array (
                'zone_id' => 3933,
                'country_id' => 105,
                'name' => 'Teramo',
                'code' => 'TE',
                'status' => 1,
            ),
            312 => 
            array (
                'zone_id' => 3934,
                'country_id' => 105,
                'name' => 'Terni',
                'code' => 'TR',
                'status' => 1,
            ),
            313 => 
            array (
                'zone_id' => 3935,
                'country_id' => 105,
                'name' => 'Torino',
                'code' => 'TO',
                'status' => 1,
            ),
            314 => 
            array (
                'zone_id' => 3936,
                'country_id' => 105,
                'name' => 'Trapani',
                'code' => 'TP',
                'status' => 1,
            ),
            315 => 
            array (
                'zone_id' => 3937,
                'country_id' => 105,
                'name' => 'Trento',
                'code' => 'TN',
                'status' => 1,
            ),
            316 => 
            array (
                'zone_id' => 3938,
                'country_id' => 105,
                'name' => 'Treviso',
                'code' => 'TV',
                'status' => 1,
            ),
            317 => 
            array (
                'zone_id' => 3939,
                'country_id' => 105,
                'name' => 'Trieste',
                'code' => 'TS',
                'status' => 1,
            ),
            318 => 
            array (
                'zone_id' => 3940,
                'country_id' => 105,
                'name' => 'Udine',
                'code' => 'UD',
                'status' => 1,
            ),
            319 => 
            array (
                'zone_id' => 3941,
                'country_id' => 105,
                'name' => 'Varese',
                'code' => 'VA',
                'status' => 1,
            ),
            320 => 
            array (
                'zone_id' => 3942,
                'country_id' => 105,
                'name' => 'Venezia',
                'code' => 'VE',
                'status' => 1,
            ),
            321 => 
            array (
                'zone_id' => 3943,
                'country_id' => 105,
                'name' => 'Verbano-Cusio-Ossola',
                'code' => 'VB',
                'status' => 1,
            ),
            322 => 
            array (
                'zone_id' => 3944,
                'country_id' => 105,
                'name' => 'Vercelli',
                'code' => 'VC',
                'status' => 1,
            ),
            323 => 
            array (
                'zone_id' => 3945,
                'country_id' => 105,
                'name' => 'Verona',
                'code' => 'VR',
                'status' => 1,
            ),
            324 => 
            array (
                'zone_id' => 3946,
                'country_id' => 105,
                'name' => 'Vibo Valentia',
                'code' => 'VV',
                'status' => 1,
            ),
            325 => 
            array (
                'zone_id' => 3947,
                'country_id' => 105,
                'name' => 'Vicenza',
                'code' => 'VI',
                'status' => 1,
            ),
            326 => 
            array (
                'zone_id' => 3948,
                'country_id' => 105,
                'name' => 'Viterbo',
                'code' => 'VT',
                'status' => 1,
            ),
            327 => 
            array (
                'zone_id' => 3949,
                'country_id' => 222,
                'name' => 'County Antrim',
                'code' => 'ANT',
                'status' => 1,
            ),
            328 => 
            array (
                'zone_id' => 3950,
                'country_id' => 222,
                'name' => 'County Armagh',
                'code' => 'ARM',
                'status' => 1,
            ),
            329 => 
            array (
                'zone_id' => 3951,
                'country_id' => 222,
                'name' => 'County Down',
                'code' => 'DOW',
                'status' => 1,
            ),
            330 => 
            array (
                'zone_id' => 3952,
                'country_id' => 222,
                'name' => 'County Fermanagh',
                'code' => 'FER',
                'status' => 1,
            ),
            331 => 
            array (
                'zone_id' => 3953,
                'country_id' => 222,
                'name' => 'County Londonderry',
                'code' => 'LDY',
                'status' => 1,
            ),
            332 => 
            array (
                'zone_id' => 3954,
                'country_id' => 222,
                'name' => 'County Tyrone',
                'code' => 'TYR',
                'status' => 1,
            ),
            333 => 
            array (
                'zone_id' => 3955,
                'country_id' => 222,
                'name' => 'Cumbria',
                'code' => 'CMA',
                'status' => 1,
            ),
            334 => 
            array (
                'zone_id' => 3956,
                'country_id' => 190,
                'name' => 'Pomurska',
                'code' => '1',
                'status' => 1,
            ),
            335 => 
            array (
                'zone_id' => 3957,
                'country_id' => 190,
                'name' => 'Podravska',
                'code' => '2',
                'status' => 1,
            ),
            336 => 
            array (
                'zone_id' => 3958,
                'country_id' => 190,
                'name' => 'Koroška',
                'code' => '3',
                'status' => 1,
            ),
            337 => 
            array (
                'zone_id' => 3959,
                'country_id' => 190,
                'name' => 'Savinjska',
                'code' => '4',
                'status' => 1,
            ),
            338 => 
            array (
                'zone_id' => 3960,
                'country_id' => 190,
                'name' => 'Zasavska',
                'code' => '5',
                'status' => 1,
            ),
            339 => 
            array (
                'zone_id' => 3961,
                'country_id' => 190,
                'name' => 'Spodnjeposavska',
                'code' => '6',
                'status' => 1,
            ),
            340 => 
            array (
                'zone_id' => 3962,
                'country_id' => 190,
                'name' => 'Jugovzhodna Slovenija',
                'code' => '7',
                'status' => 1,
            ),
            341 => 
            array (
                'zone_id' => 3963,
                'country_id' => 190,
                'name' => 'Osrednjeslovenska',
                'code' => '8',
                'status' => 1,
            ),
            342 => 
            array (
                'zone_id' => 3964,
                'country_id' => 190,
                'name' => 'Gorenjska',
                'code' => '9',
                'status' => 1,
            ),
            343 => 
            array (
                'zone_id' => 3965,
                'country_id' => 190,
                'name' => 'Notranjsko-kraška',
                'code' => '10',
                'status' => 1,
            ),
            344 => 
            array (
                'zone_id' => 3966,
                'country_id' => 190,
                'name' => 'Goriška',
                'code' => '11',
                'status' => 1,
            ),
            345 => 
            array (
                'zone_id' => 3967,
                'country_id' => 190,
                'name' => 'Obalno-kraška',
                'code' => '12',
                'status' => 1,
            ),
            346 => 
            array (
                'zone_id' => 3968,
                'country_id' => 33,
                'name' => 'Ruse',
                'code' => '',
                'status' => 1,
            ),
            347 => 
            array (
                'zone_id' => 3969,
                'country_id' => 101,
                'name' => 'Alborz',
                'code' => 'ALB',
                'status' => 1,
            ),
            348 => 
            array (
                'zone_id' => 3970,
                'country_id' => 21,
                'name' => 'Brussels-Capital Region',
                'code' => 'BRU',
                'status' => 1,
            ),
            349 => 
            array (
                'zone_id' => 3971,
                'country_id' => 138,
                'name' => 'Aguascalientes',
                'code' => 'AG',
                'status' => 1,
            ),
            350 => 
            array (
                'zone_id' => 3973,
                'country_id' => 242,
                'name' => 'Andrijevica',
                'code' => '01',
                'status' => 1,
            ),
            351 => 
            array (
                'zone_id' => 3974,
                'country_id' => 242,
                'name' => 'Bar',
                'code' => '02',
                'status' => 1,
            ),
            352 => 
            array (
                'zone_id' => 3975,
                'country_id' => 242,
                'name' => 'Berane',
                'code' => '03',
                'status' => 1,
            ),
            353 => 
            array (
                'zone_id' => 3976,
                'country_id' => 242,
                'name' => 'Bijelo Polje',
                'code' => '04',
                'status' => 1,
            ),
            354 => 
            array (
                'zone_id' => 3977,
                'country_id' => 242,
                'name' => 'Budva',
                'code' => '05',
                'status' => 1,
            ),
            355 => 
            array (
                'zone_id' => 3978,
                'country_id' => 242,
                'name' => 'Cetinje',
                'code' => '06',
                'status' => 1,
            ),
            356 => 
            array (
                'zone_id' => 3979,
                'country_id' => 242,
                'name' => 'Danilovgrad',
                'code' => '07',
                'status' => 1,
            ),
            357 => 
            array (
                'zone_id' => 3980,
                'country_id' => 242,
                'name' => 'Herceg-Novi',
                'code' => '08',
                'status' => 1,
            ),
            358 => 
            array (
                'zone_id' => 3981,
                'country_id' => 242,
                'name' => 'Kolašin',
                'code' => '09',
                'status' => 1,
            ),
            359 => 
            array (
                'zone_id' => 3982,
                'country_id' => 242,
                'name' => 'Kotor',
                'code' => '10',
                'status' => 1,
            ),
            360 => 
            array (
                'zone_id' => 3983,
                'country_id' => 242,
                'name' => 'Mojkovac',
                'code' => '11',
                'status' => 1,
            ),
            361 => 
            array (
                'zone_id' => 3984,
                'country_id' => 242,
                'name' => 'Nikšić',
                'code' => '12',
                'status' => 1,
            ),
            362 => 
            array (
                'zone_id' => 3985,
                'country_id' => 242,
                'name' => 'Plav',
                'code' => '13',
                'status' => 1,
            ),
            363 => 
            array (
                'zone_id' => 3986,
                'country_id' => 242,
                'name' => 'Pljevlja',
                'code' => '14',
                'status' => 1,
            ),
            364 => 
            array (
                'zone_id' => 3987,
                'country_id' => 242,
                'name' => 'Plužine',
                'code' => '15',
                'status' => 1,
            ),
            365 => 
            array (
                'zone_id' => 3988,
                'country_id' => 242,
                'name' => 'Podgorica',
                'code' => '16',
                'status' => 1,
            ),
            366 => 
            array (
                'zone_id' => 3989,
                'country_id' => 242,
                'name' => 'Rožaje',
                'code' => '17',
                'status' => 1,
            ),
            367 => 
            array (
                'zone_id' => 3990,
                'country_id' => 242,
                'name' => 'Šavnik',
                'code' => '18',
                'status' => 1,
            ),
            368 => 
            array (
                'zone_id' => 3991,
                'country_id' => 242,
                'name' => 'Tivat',
                'code' => '19',
                'status' => 1,
            ),
            369 => 
            array (
                'zone_id' => 3992,
                'country_id' => 242,
                'name' => 'Ulcinj',
                'code' => '20',
                'status' => 1,
            ),
            370 => 
            array (
                'zone_id' => 3993,
                'country_id' => 242,
                'name' => 'Žabljak',
                'code' => '21',
                'status' => 1,
            ),
            371 => 
            array (
                'zone_id' => 3994,
                'country_id' => 243,
                'name' => 'Belgrade',
                'code' => '00',
                'status' => 1,
            ),
            372 => 
            array (
                'zone_id' => 3995,
                'country_id' => 243,
                'name' => 'North Bačka',
                'code' => '01',
                'status' => 1,
            ),
            373 => 
            array (
                'zone_id' => 3996,
                'country_id' => 243,
                'name' => 'Central Banat',
                'code' => '02',
                'status' => 1,
            ),
            374 => 
            array (
                'zone_id' => 3997,
                'country_id' => 243,
                'name' => 'North Banat',
                'code' => '03',
                'status' => 1,
            ),
            375 => 
            array (
                'zone_id' => 3998,
                'country_id' => 243,
                'name' => 'South Banat',
                'code' => '04',
                'status' => 1,
            ),
            376 => 
            array (
                'zone_id' => 3999,
                'country_id' => 243,
                'name' => 'West Bačka',
                'code' => '05',
                'status' => 1,
            ),
            377 => 
            array (
                'zone_id' => 4000,
                'country_id' => 243,
                'name' => 'South Bačka',
                'code' => '06',
                'status' => 1,
            ),
            378 => 
            array (
                'zone_id' => 4001,
                'country_id' => 243,
                'name' => 'Srem',
                'code' => '07',
                'status' => 1,
            ),
            379 => 
            array (
                'zone_id' => 4002,
                'country_id' => 243,
                'name' => 'Mačva',
                'code' => '08',
                'status' => 1,
            ),
            380 => 
            array (
                'zone_id' => 4003,
                'country_id' => 243,
                'name' => 'Kolubara',
                'code' => '09',
                'status' => 1,
            ),
            381 => 
            array (
                'zone_id' => 4004,
                'country_id' => 243,
                'name' => 'Podunavlje',
                'code' => '10',
                'status' => 1,
            ),
            382 => 
            array (
                'zone_id' => 4005,
                'country_id' => 243,
                'name' => 'Braničevo',
                'code' => '11',
                'status' => 1,
            ),
            383 => 
            array (
                'zone_id' => 4006,
                'country_id' => 243,
                'name' => 'Šumadija',
                'code' => '12',
                'status' => 1,
            ),
            384 => 
            array (
                'zone_id' => 4007,
                'country_id' => 243,
                'name' => 'Pomoravlje',
                'code' => '13',
                'status' => 1,
            ),
            385 => 
            array (
                'zone_id' => 4008,
                'country_id' => 243,
                'name' => 'Bor',
                'code' => '14',
                'status' => 1,
            ),
            386 => 
            array (
                'zone_id' => 4009,
                'country_id' => 243,
                'name' => 'Zaječar',
                'code' => '15',
                'status' => 1,
            ),
            387 => 
            array (
                'zone_id' => 4010,
                'country_id' => 243,
                'name' => 'Zlatibor',
                'code' => '16',
                'status' => 1,
            ),
            388 => 
            array (
                'zone_id' => 4011,
                'country_id' => 243,
                'name' => 'Moravica',
                'code' => '17',
                'status' => 1,
            ),
            389 => 
            array (
                'zone_id' => 4012,
                'country_id' => 243,
                'name' => 'Raška',
                'code' => '18',
                'status' => 1,
            ),
            390 => 
            array (
                'zone_id' => 4013,
                'country_id' => 243,
                'name' => 'Rasina',
                'code' => '19',
                'status' => 1,
            ),
            391 => 
            array (
                'zone_id' => 4014,
                'country_id' => 243,
                'name' => 'Nišava',
                'code' => '20',
                'status' => 1,
            ),
            392 => 
            array (
                'zone_id' => 4015,
                'country_id' => 243,
                'name' => 'Toplica',
                'code' => '21',
                'status' => 1,
            ),
            393 => 
            array (
                'zone_id' => 4016,
                'country_id' => 243,
                'name' => 'Pirot',
                'code' => '22',
                'status' => 1,
            ),
            394 => 
            array (
                'zone_id' => 4017,
                'country_id' => 243,
                'name' => 'Jablanica',
                'code' => '23',
                'status' => 1,
            ),
            395 => 
            array (
                'zone_id' => 4018,
                'country_id' => 243,
                'name' => 'Pčinja',
                'code' => '24',
                'status' => 1,
            ),
            396 => 
            array (
                'zone_id' => 4020,
                'country_id' => 245,
                'name' => 'Bonaire',
                'code' => 'BO',
                'status' => 1,
            ),
            397 => 
            array (
                'zone_id' => 4021,
                'country_id' => 245,
                'name' => 'Saba',
                'code' => 'SA',
                'status' => 1,
            ),
            398 => 
            array (
                'zone_id' => 4022,
                'country_id' => 245,
                'name' => 'Sint Eustatius',
                'code' => 'SE',
                'status' => 1,
            ),
            399 => 
            array (
                'zone_id' => 4023,
                'country_id' => 248,
                'name' => 'Central Equatoria',
                'code' => 'EC',
                'status' => 1,
            ),
            400 => 
            array (
                'zone_id' => 4024,
                'country_id' => 248,
                'name' => 'Eastern Equatoria',
                'code' => 'EE',
                'status' => 1,
            ),
            401 => 
            array (
                'zone_id' => 4025,
                'country_id' => 248,
                'name' => 'Jonglei',
                'code' => 'JG',
                'status' => 1,
            ),
            402 => 
            array (
                'zone_id' => 4026,
                'country_id' => 248,
                'name' => 'Lakes',
                'code' => 'LK',
                'status' => 1,
            ),
            403 => 
            array (
                'zone_id' => 4027,
                'country_id' => 248,
                'name' => 'Northern Bahr el-Ghazal',
                'code' => 'BN',
                'status' => 1,
            ),
            404 => 
            array (
                'zone_id' => 4028,
                'country_id' => 248,
                'name' => 'Unity',
                'code' => 'UY',
                'status' => 1,
            ),
            405 => 
            array (
                'zone_id' => 4029,
                'country_id' => 248,
                'name' => 'Upper Nile',
                'code' => 'NU',
                'status' => 1,
            ),
            406 => 
            array (
                'zone_id' => 4030,
                'country_id' => 248,
                'name' => 'Warrap',
                'code' => 'WR',
                'status' => 1,
            ),
            407 => 
            array (
                'zone_id' => 4031,
                'country_id' => 248,
                'name' => 'Western Bahr el-Ghazal',
                'code' => 'BW',
                'status' => 1,
            ),
            408 => 
            array (
                'zone_id' => 4032,
                'country_id' => 248,
                'name' => 'Western Equatoria',
                'code' => 'EW',
                'status' => 1,
            ),
            409 => 
            array (
                'zone_id' => 4035,
                'country_id' => 129,
                'name' => 'Putrajaya',
                'code' => 'MY-16',
                'status' => 1,
            ),
            410 => 
            array (
                'zone_id' => 4036,
                'country_id' => 117,
                'name' => 'Ainaži, Salacgrīvas novads',
                'code' => '0661405',
                'status' => 1,
            ),
            411 => 
            array (
                'zone_id' => 4037,
                'country_id' => 117,
                'name' => 'Aizkraukle, Aizkraukles novads',
                'code' => '0320201',
                'status' => 1,
            ),
            412 => 
            array (
                'zone_id' => 4038,
                'country_id' => 117,
                'name' => 'Aizkraukles novads',
                'code' => '0320200',
                'status' => 1,
            ),
            413 => 
            array (
                'zone_id' => 4039,
                'country_id' => 117,
                'name' => 'Aizpute, Aizputes novads',
                'code' => '0640605',
                'status' => 1,
            ),
            414 => 
            array (
                'zone_id' => 4040,
                'country_id' => 117,
                'name' => 'Aizputes novads',
                'code' => '0640600',
                'status' => 1,
            ),
            415 => 
            array (
                'zone_id' => 4041,
                'country_id' => 117,
                'name' => 'Aknīste, Aknīstes novads',
                'code' => '0560805',
                'status' => 1,
            ),
            416 => 
            array (
                'zone_id' => 4042,
                'country_id' => 117,
                'name' => 'Aknīstes novads',
                'code' => '0560800',
                'status' => 1,
            ),
            417 => 
            array (
                'zone_id' => 4043,
                'country_id' => 117,
                'name' => 'Aloja, Alojas novads',
                'code' => '0661007',
                'status' => 1,
            ),
            418 => 
            array (
                'zone_id' => 4044,
                'country_id' => 117,
                'name' => 'Alojas novads',
                'code' => '0661000',
                'status' => 1,
            ),
            419 => 
            array (
                'zone_id' => 4045,
                'country_id' => 117,
                'name' => 'Alsungas novads',
                'code' => '0624200',
                'status' => 1,
            ),
            420 => 
            array (
                'zone_id' => 4046,
                'country_id' => 117,
                'name' => 'Alūksne, Alūksnes novads',
                'code' => '0360201',
                'status' => 1,
            ),
            421 => 
            array (
                'zone_id' => 4047,
                'country_id' => 117,
                'name' => 'Alūksnes novads',
                'code' => '0360200',
                'status' => 1,
            ),
            422 => 
            array (
                'zone_id' => 4048,
                'country_id' => 117,
                'name' => 'Amatas novads',
                'code' => '0424701',
                'status' => 1,
            ),
            423 => 
            array (
                'zone_id' => 4049,
                'country_id' => 117,
                'name' => 'Ape, Apes novads',
                'code' => '0360805',
                'status' => 1,
            ),
            424 => 
            array (
                'zone_id' => 4050,
                'country_id' => 117,
                'name' => 'Apes novads',
                'code' => '0360800',
                'status' => 1,
            ),
            425 => 
            array (
                'zone_id' => 4051,
                'country_id' => 117,
                'name' => 'Auce, Auces novads',
                'code' => '0460805',
                'status' => 1,
            ),
            426 => 
            array (
                'zone_id' => 4052,
                'country_id' => 117,
                'name' => 'Auces novads',
                'code' => '0460800',
                'status' => 1,
            ),
            427 => 
            array (
                'zone_id' => 4053,
                'country_id' => 117,
                'name' => 'Ādažu novads',
                'code' => '0804400',
                'status' => 1,
            ),
            428 => 
            array (
                'zone_id' => 4054,
                'country_id' => 117,
                'name' => 'Babītes novads',
                'code' => '0804900',
                'status' => 1,
            ),
            429 => 
            array (
                'zone_id' => 4055,
                'country_id' => 117,
                'name' => 'Baldone, Baldones novads',
                'code' => '0800605',
                'status' => 1,
            ),
            430 => 
            array (
                'zone_id' => 4056,
                'country_id' => 117,
                'name' => 'Baldones novads',
                'code' => '0800600',
                'status' => 1,
            ),
            431 => 
            array (
                'zone_id' => 4057,
                'country_id' => 117,
                'name' => 'Baloži, Ķekavas novads',
                'code' => '0800807',
                'status' => 1,
            ),
            432 => 
            array (
                'zone_id' => 4058,
                'country_id' => 117,
                'name' => 'Baltinavas novads',
                'code' => '0384400',
                'status' => 1,
            ),
            433 => 
            array (
                'zone_id' => 4059,
                'country_id' => 117,
                'name' => 'Balvi, Balvu novads',
                'code' => '0380201',
                'status' => 1,
            ),
            434 => 
            array (
                'zone_id' => 4060,
                'country_id' => 117,
                'name' => 'Balvu novads',
                'code' => '0380200',
                'status' => 1,
            ),
            435 => 
            array (
                'zone_id' => 4061,
                'country_id' => 117,
                'name' => 'Bauska, Bauskas novads',
                'code' => '0400201',
                'status' => 1,
            ),
            436 => 
            array (
                'zone_id' => 4062,
                'country_id' => 117,
                'name' => 'Bauskas novads',
                'code' => '0400200',
                'status' => 1,
            ),
            437 => 
            array (
                'zone_id' => 4063,
                'country_id' => 117,
                'name' => 'Beverīnas novads',
                'code' => '0964700',
                'status' => 1,
            ),
            438 => 
            array (
                'zone_id' => 4064,
                'country_id' => 117,
                'name' => 'Brocēni, Brocēnu novads',
                'code' => '0840605',
                'status' => 1,
            ),
            439 => 
            array (
                'zone_id' => 4065,
                'country_id' => 117,
                'name' => 'Brocēnu novads',
                'code' => '0840601',
                'status' => 1,
            ),
            440 => 
            array (
                'zone_id' => 4066,
                'country_id' => 117,
                'name' => 'Burtnieku novads',
                'code' => '0967101',
                'status' => 1,
            ),
            441 => 
            array (
                'zone_id' => 4067,
                'country_id' => 117,
                'name' => 'Carnikavas novads',
                'code' => '0805200',
                'status' => 1,
            ),
            442 => 
            array (
                'zone_id' => 4068,
                'country_id' => 117,
                'name' => 'Cesvaine, Cesvaines novads',
                'code' => '0700807',
                'status' => 1,
            ),
            443 => 
            array (
                'zone_id' => 4069,
                'country_id' => 117,
                'name' => 'Cesvaines novads',
                'code' => '0700800',
                'status' => 1,
            ),
            444 => 
            array (
                'zone_id' => 4070,
                'country_id' => 117,
                'name' => 'Cēsis, Cēsu novads',
                'code' => '0420201',
                'status' => 1,
            ),
            445 => 
            array (
                'zone_id' => 4071,
                'country_id' => 117,
                'name' => 'Cēsu novads',
                'code' => '0420200',
                'status' => 1,
            ),
            446 => 
            array (
                'zone_id' => 4072,
                'country_id' => 117,
                'name' => 'Ciblas novads',
                'code' => '0684901',
                'status' => 1,
            ),
            447 => 
            array (
                'zone_id' => 4073,
                'country_id' => 117,
                'name' => 'Dagda, Dagdas novads',
                'code' => '0601009',
                'status' => 1,
            ),
            448 => 
            array (
                'zone_id' => 4074,
                'country_id' => 117,
                'name' => 'Dagdas novads',
                'code' => '0601000',
                'status' => 1,
            ),
            449 => 
            array (
                'zone_id' => 4075,
                'country_id' => 117,
                'name' => 'Daugavpils',
                'code' => '0050000',
                'status' => 1,
            ),
            450 => 
            array (
                'zone_id' => 4076,
                'country_id' => 117,
                'name' => 'Daugavpils novads',
                'code' => '0440200',
                'status' => 1,
            ),
            451 => 
            array (
                'zone_id' => 4077,
                'country_id' => 117,
                'name' => 'Dobele, Dobeles novads',
                'code' => '0460201',
                'status' => 1,
            ),
            452 => 
            array (
                'zone_id' => 4078,
                'country_id' => 117,
                'name' => 'Dobeles novads',
                'code' => '0460200',
                'status' => 1,
            ),
            453 => 
            array (
                'zone_id' => 4079,
                'country_id' => 117,
                'name' => 'Dundagas novads',
                'code' => '0885100',
                'status' => 1,
            ),
            454 => 
            array (
                'zone_id' => 4080,
                'country_id' => 117,
                'name' => 'Durbe, Durbes novads',
                'code' => '0640807',
                'status' => 1,
            ),
            455 => 
            array (
                'zone_id' => 4081,
                'country_id' => 117,
                'name' => 'Durbes novads',
                'code' => '0640801',
                'status' => 1,
            ),
            456 => 
            array (
                'zone_id' => 4082,
                'country_id' => 117,
                'name' => 'Engures novads',
                'code' => '0905100',
                'status' => 1,
            ),
            457 => 
            array (
                'zone_id' => 4083,
                'country_id' => 117,
                'name' => 'Ērgļu novads',
                'code' => '0705500',
                'status' => 1,
            ),
            458 => 
            array (
                'zone_id' => 4084,
                'country_id' => 117,
                'name' => 'Garkalnes novads',
                'code' => '0806000',
                'status' => 1,
            ),
            459 => 
            array (
                'zone_id' => 4085,
                'country_id' => 117,
                'name' => 'Grobiņa, Grobiņas novads',
                'code' => '0641009',
                'status' => 1,
            ),
            460 => 
            array (
                'zone_id' => 4086,
                'country_id' => 117,
                'name' => 'Grobiņas novads',
                'code' => '0641000',
                'status' => 1,
            ),
            461 => 
            array (
                'zone_id' => 4087,
                'country_id' => 117,
                'name' => 'Gulbene, Gulbenes novads',
                'code' => '0500201',
                'status' => 1,
            ),
            462 => 
            array (
                'zone_id' => 4088,
                'country_id' => 117,
                'name' => 'Gulbenes novads',
                'code' => '0500200',
                'status' => 1,
            ),
            463 => 
            array (
                'zone_id' => 4089,
                'country_id' => 117,
                'name' => 'Iecavas novads',
                'code' => '0406400',
                'status' => 1,
            ),
            464 => 
            array (
                'zone_id' => 4090,
                'country_id' => 117,
                'name' => 'Ikšķile, Ikšķiles novads',
                'code' => '0740605',
                'status' => 1,
            ),
            465 => 
            array (
                'zone_id' => 4091,
                'country_id' => 117,
                'name' => 'Ikšķiles novads',
                'code' => '0740600',
                'status' => 1,
            ),
            466 => 
            array (
                'zone_id' => 4092,
                'country_id' => 117,
                'name' => 'Ilūkste, Ilūkstes novads',
                'code' => '0440807',
                'status' => 1,
            ),
            467 => 
            array (
                'zone_id' => 4093,
                'country_id' => 117,
                'name' => 'Ilūkstes novads',
                'code' => '0440801',
                'status' => 1,
            ),
            468 => 
            array (
                'zone_id' => 4094,
                'country_id' => 117,
                'name' => 'Inčukalna novads',
                'code' => '0801800',
                'status' => 1,
            ),
            469 => 
            array (
                'zone_id' => 4095,
                'country_id' => 117,
                'name' => 'Jaunjelgava, Jaunjelgavas novads',
                'code' => '0321007',
                'status' => 1,
            ),
            470 => 
            array (
                'zone_id' => 4096,
                'country_id' => 117,
                'name' => 'Jaunjelgavas novads',
                'code' => '0321000',
                'status' => 1,
            ),
            471 => 
            array (
                'zone_id' => 4097,
                'country_id' => 117,
                'name' => 'Jaunpiebalgas novads',
                'code' => '0425700',
                'status' => 1,
            ),
            472 => 
            array (
                'zone_id' => 4098,
                'country_id' => 117,
                'name' => 'Jaunpils novads',
                'code' => '0905700',
                'status' => 1,
            ),
            473 => 
            array (
                'zone_id' => 4099,
                'country_id' => 117,
                'name' => 'Jelgava',
                'code' => '0090000',
                'status' => 1,
            ),
            474 => 
            array (
                'zone_id' => 4100,
                'country_id' => 117,
                'name' => 'Jelgavas novads',
                'code' => '0540200',
                'status' => 1,
            ),
            475 => 
            array (
                'zone_id' => 4101,
                'country_id' => 117,
                'name' => 'Jēkabpils',
                'code' => '0110000',
                'status' => 1,
            ),
            476 => 
            array (
                'zone_id' => 4102,
                'country_id' => 117,
                'name' => 'Jēkabpils novads',
                'code' => '0560200',
                'status' => 1,
            ),
            477 => 
            array (
                'zone_id' => 4103,
                'country_id' => 117,
                'name' => 'Jūrmala',
                'code' => '0130000',
                'status' => 1,
            ),
            478 => 
            array (
                'zone_id' => 4104,
                'country_id' => 117,
                'name' => 'Kalnciems, Jelgavas novads',
                'code' => '0540211',
                'status' => 1,
            ),
            479 => 
            array (
                'zone_id' => 4105,
                'country_id' => 117,
                'name' => 'Kandava, Kandavas novads',
                'code' => '0901211',
                'status' => 1,
            ),
            480 => 
            array (
                'zone_id' => 4106,
                'country_id' => 117,
                'name' => 'Kandavas novads',
                'code' => '0901201',
                'status' => 1,
            ),
            481 => 
            array (
                'zone_id' => 4107,
                'country_id' => 117,
                'name' => 'Kārsava, Kārsavas novads',
                'code' => '0681009',
                'status' => 1,
            ),
            482 => 
            array (
                'zone_id' => 4108,
                'country_id' => 117,
                'name' => 'Kārsavas novads',
                'code' => '0681000',
                'status' => 1,
            ),
            483 => 
            array (
                'zone_id' => 4109,
                'country_id' => 117,
            'name' => 'Kocēnu novads ,bij. Valmieras)',
            'code' => '0960200',
            'status' => 1,
        ),
        484 => 
        array (
            'zone_id' => 4110,
            'country_id' => 117,
            'name' => 'Kokneses novads',
            'code' => '0326100',
            'status' => 1,
        ),
        485 => 
        array (
            'zone_id' => 4111,
            'country_id' => 117,
            'name' => 'Krāslava, Krāslavas novads',
            'code' => '0600201',
            'status' => 1,
        ),
        486 => 
        array (
            'zone_id' => 4112,
            'country_id' => 117,
            'name' => 'Krāslavas novads',
            'code' => '0600202',
            'status' => 1,
        ),
        487 => 
        array (
            'zone_id' => 4113,
            'country_id' => 117,
            'name' => 'Krimuldas novads',
            'code' => '0806900',
            'status' => 1,
        ),
        488 => 
        array (
            'zone_id' => 4114,
            'country_id' => 117,
            'name' => 'Krustpils novads',
            'code' => '0566900',
            'status' => 1,
        ),
        489 => 
        array (
            'zone_id' => 4115,
            'country_id' => 117,
            'name' => 'Kuldīga, Kuldīgas novads',
            'code' => '0620201',
            'status' => 1,
        ),
        490 => 
        array (
            'zone_id' => 4116,
            'country_id' => 117,
            'name' => 'Kuldīgas novads',
            'code' => '0620200',
            'status' => 1,
        ),
        491 => 
        array (
            'zone_id' => 4117,
            'country_id' => 117,
            'name' => 'Ķeguma novads',
            'code' => '0741001',
            'status' => 1,
        ),
        492 => 
        array (
            'zone_id' => 4118,
            'country_id' => 117,
            'name' => 'Ķegums, Ķeguma novads',
            'code' => '0741009',
            'status' => 1,
        ),
        493 => 
        array (
            'zone_id' => 4119,
            'country_id' => 117,
            'name' => 'Ķekavas novads',
            'code' => '0800800',
            'status' => 1,
        ),
        494 => 
        array (
            'zone_id' => 4120,
            'country_id' => 117,
            'name' => 'Lielvārde, Lielvārdes novads',
            'code' => '0741413',
            'status' => 1,
        ),
        495 => 
        array (
            'zone_id' => 4121,
            'country_id' => 117,
            'name' => 'Lielvārdes novads',
            'code' => '0741401',
            'status' => 1,
        ),
        496 => 
        array (
            'zone_id' => 4122,
            'country_id' => 117,
            'name' => 'Liepāja',
            'code' => '0170000',
            'status' => 1,
        ),
        497 => 
        array (
            'zone_id' => 4123,
            'country_id' => 117,
            'name' => 'Limbaži, Limbažu novads',
            'code' => '0660201',
            'status' => 1,
        ),
        498 => 
        array (
            'zone_id' => 4124,
            'country_id' => 117,
            'name' => 'Limbažu novads',
            'code' => '0660200',
            'status' => 1,
        ),
        499 => 
        array (
            'zone_id' => 4125,
            'country_id' => 117,
            'name' => 'Līgatne, Līgatnes novads',
            'code' => '0421211',
            'status' => 1,
        ),
    ));
        \DB::table('oc_zone')->insert(array (
            0 => 
            array (
                'zone_id' => 4126,
                'country_id' => 117,
                'name' => 'Līgatnes novads',
                'code' => '0421200',
                'status' => 1,
            ),
            1 => 
            array (
                'zone_id' => 4127,
                'country_id' => 117,
                'name' => 'Līvāni, Līvānu novads',
                'code' => '0761211',
                'status' => 1,
            ),
            2 => 
            array (
                'zone_id' => 4128,
                'country_id' => 117,
                'name' => 'Līvānu novads',
                'code' => '0761201',
                'status' => 1,
            ),
            3 => 
            array (
                'zone_id' => 4129,
                'country_id' => 117,
                'name' => 'Lubāna, Lubānas novads',
                'code' => '0701413',
                'status' => 1,
            ),
            4 => 
            array (
                'zone_id' => 4130,
                'country_id' => 117,
                'name' => 'Lubānas novads',
                'code' => '0701400',
                'status' => 1,
            ),
            5 => 
            array (
                'zone_id' => 4131,
                'country_id' => 117,
                'name' => 'Ludza, Ludzas novads',
                'code' => '0680201',
                'status' => 1,
            ),
            6 => 
            array (
                'zone_id' => 4132,
                'country_id' => 117,
                'name' => 'Ludzas novads',
                'code' => '0680200',
                'status' => 1,
            ),
            7 => 
            array (
                'zone_id' => 4133,
                'country_id' => 117,
                'name' => 'Madona, Madonas novads',
                'code' => '0700201',
                'status' => 1,
            ),
            8 => 
            array (
                'zone_id' => 4134,
                'country_id' => 117,
                'name' => 'Madonas novads',
                'code' => '0700200',
                'status' => 1,
            ),
            9 => 
            array (
                'zone_id' => 4135,
                'country_id' => 117,
                'name' => 'Mazsalaca, Mazsalacas novads',
                'code' => '0961011',
                'status' => 1,
            ),
            10 => 
            array (
                'zone_id' => 4136,
                'country_id' => 117,
                'name' => 'Mazsalacas novads',
                'code' => '0961000',
                'status' => 1,
            ),
            11 => 
            array (
                'zone_id' => 4137,
                'country_id' => 117,
                'name' => 'Mālpils novads',
                'code' => '0807400',
                'status' => 1,
            ),
            12 => 
            array (
                'zone_id' => 4138,
                'country_id' => 117,
                'name' => 'Mārupes novads',
                'code' => '0807600',
                'status' => 1,
            ),
            13 => 
            array (
                'zone_id' => 4139,
                'country_id' => 117,
                'name' => 'Mērsraga novads',
                'code' => '0887600',
                'status' => 1,
            ),
            14 => 
            array (
                'zone_id' => 4140,
                'country_id' => 117,
                'name' => 'Naukšēnu novads',
                'code' => '0967300',
                'status' => 1,
            ),
            15 => 
            array (
                'zone_id' => 4141,
                'country_id' => 117,
                'name' => 'Neretas novads',
                'code' => '0327100',
                'status' => 1,
            ),
            16 => 
            array (
                'zone_id' => 4142,
                'country_id' => 117,
                'name' => 'Nīcas novads',
                'code' => '0647900',
                'status' => 1,
            ),
            17 => 
            array (
                'zone_id' => 4143,
                'country_id' => 117,
                'name' => 'Ogre, Ogres novads',
                'code' => '0740201',
                'status' => 1,
            ),
            18 => 
            array (
                'zone_id' => 4144,
                'country_id' => 117,
                'name' => 'Ogres novads',
                'code' => '0740202',
                'status' => 1,
            ),
            19 => 
            array (
                'zone_id' => 4145,
                'country_id' => 117,
                'name' => 'Olaine, Olaines novads',
                'code' => '0801009',
                'status' => 1,
            ),
            20 => 
            array (
                'zone_id' => 4146,
                'country_id' => 117,
                'name' => 'Olaines novads',
                'code' => '0801000',
                'status' => 1,
            ),
            21 => 
            array (
                'zone_id' => 4147,
                'country_id' => 117,
                'name' => 'Ozolnieku novads',
                'code' => '0546701',
                'status' => 1,
            ),
            22 => 
            array (
                'zone_id' => 4148,
                'country_id' => 117,
                'name' => 'Pārgaujas novads',
                'code' => '0427500',
                'status' => 1,
            ),
            23 => 
            array (
                'zone_id' => 4149,
                'country_id' => 117,
                'name' => 'Pāvilosta, Pāvilostas novads',
                'code' => '0641413',
                'status' => 1,
            ),
            24 => 
            array (
                'zone_id' => 4150,
                'country_id' => 117,
                'name' => 'Pāvilostas novads',
                'code' => '0641401',
                'status' => 1,
            ),
            25 => 
            array (
                'zone_id' => 4151,
                'country_id' => 117,
                'name' => 'Piltene, Ventspils novads',
                'code' => '0980213',
                'status' => 1,
            ),
            26 => 
            array (
                'zone_id' => 4152,
                'country_id' => 117,
                'name' => 'Pļaviņas, Pļaviņu novads',
                'code' => '0321413',
                'status' => 1,
            ),
            27 => 
            array (
                'zone_id' => 4153,
                'country_id' => 117,
                'name' => 'Pļaviņu novads',
                'code' => '0321400',
                'status' => 1,
            ),
            28 => 
            array (
                'zone_id' => 4154,
                'country_id' => 117,
                'name' => 'Preiļi, Preiļu novads',
                'code' => '0760201',
                'status' => 1,
            ),
            29 => 
            array (
                'zone_id' => 4155,
                'country_id' => 117,
                'name' => 'Preiļu novads',
                'code' => '0760202',
                'status' => 1,
            ),
            30 => 
            array (
                'zone_id' => 4156,
                'country_id' => 117,
                'name' => 'Priekule, Priekules novads',
                'code' => '0641615',
                'status' => 1,
            ),
            31 => 
            array (
                'zone_id' => 4157,
                'country_id' => 117,
                'name' => 'Priekules novads',
                'code' => '0641600',
                'status' => 1,
            ),
            32 => 
            array (
                'zone_id' => 4158,
                'country_id' => 117,
                'name' => 'Priekuļu novads',
                'code' => '0427300',
                'status' => 1,
            ),
            33 => 
            array (
                'zone_id' => 4159,
                'country_id' => 117,
                'name' => 'Raunas novads',
                'code' => '0427700',
                'status' => 1,
            ),
            34 => 
            array (
                'zone_id' => 4160,
                'country_id' => 117,
                'name' => 'Rēzekne',
                'code' => '0210000',
                'status' => 1,
            ),
            35 => 
            array (
                'zone_id' => 4161,
                'country_id' => 117,
                'name' => 'Rēzeknes novads',
                'code' => '0780200',
                'status' => 1,
            ),
            36 => 
            array (
                'zone_id' => 4162,
                'country_id' => 117,
                'name' => 'Riebiņu novads',
                'code' => '0766300',
                'status' => 1,
            ),
            37 => 
            array (
                'zone_id' => 4163,
                'country_id' => 117,
                'name' => 'Rīga',
                'code' => '0010000',
                'status' => 1,
            ),
            38 => 
            array (
                'zone_id' => 4164,
                'country_id' => 117,
                'name' => 'Rojas novads',
                'code' => '0888300',
                'status' => 1,
            ),
            39 => 
            array (
                'zone_id' => 4165,
                'country_id' => 117,
                'name' => 'Ropažu novads',
                'code' => '0808400',
                'status' => 1,
            ),
            40 => 
            array (
                'zone_id' => 4166,
                'country_id' => 117,
                'name' => 'Rucavas novads',
                'code' => '0648500',
                'status' => 1,
            ),
            41 => 
            array (
                'zone_id' => 4167,
                'country_id' => 117,
                'name' => 'Rugāju novads',
                'code' => '0387500',
                'status' => 1,
            ),
            42 => 
            array (
                'zone_id' => 4168,
                'country_id' => 117,
                'name' => 'Rundāles novads',
                'code' => '0407700',
                'status' => 1,
            ),
            43 => 
            array (
                'zone_id' => 4169,
                'country_id' => 117,
                'name' => 'Rūjiena, Rūjienas novads',
                'code' => '0961615',
                'status' => 1,
            ),
            44 => 
            array (
                'zone_id' => 4170,
                'country_id' => 117,
                'name' => 'Rūjienas novads',
                'code' => '0961600',
                'status' => 1,
            ),
            45 => 
            array (
                'zone_id' => 4171,
                'country_id' => 117,
                'name' => 'Sabile, Talsu novads',
                'code' => '0880213',
                'status' => 1,
            ),
            46 => 
            array (
                'zone_id' => 4172,
                'country_id' => 117,
                'name' => 'Salacgrīva, Salacgrīvas novads',
                'code' => '0661415',
                'status' => 1,
            ),
            47 => 
            array (
                'zone_id' => 4173,
                'country_id' => 117,
                'name' => 'Salacgrīvas novads',
                'code' => '0661400',
                'status' => 1,
            ),
            48 => 
            array (
                'zone_id' => 4174,
                'country_id' => 117,
                'name' => 'Salas novads',
                'code' => '0568700',
                'status' => 1,
            ),
            49 => 
            array (
                'zone_id' => 4175,
                'country_id' => 117,
                'name' => 'Salaspils novads',
                'code' => '0801200',
                'status' => 1,
            ),
            50 => 
            array (
                'zone_id' => 4176,
                'country_id' => 117,
                'name' => 'Salaspils, Salaspils novads',
                'code' => '0801211',
                'status' => 1,
            ),
            51 => 
            array (
                'zone_id' => 4177,
                'country_id' => 117,
                'name' => 'Saldus novads',
                'code' => '0840200',
                'status' => 1,
            ),
            52 => 
            array (
                'zone_id' => 4178,
                'country_id' => 117,
                'name' => 'Saldus, Saldus novads',
                'code' => '0840201',
                'status' => 1,
            ),
            53 => 
            array (
                'zone_id' => 4179,
                'country_id' => 117,
                'name' => 'Saulkrasti, Saulkrastu novads',
                'code' => '0801413',
                'status' => 1,
            ),
            54 => 
            array (
                'zone_id' => 4180,
                'country_id' => 117,
                'name' => 'Saulkrastu novads',
                'code' => '0801400',
                'status' => 1,
            ),
            55 => 
            array (
                'zone_id' => 4181,
                'country_id' => 117,
                'name' => 'Seda, Strenču novads',
                'code' => '0941813',
                'status' => 1,
            ),
            56 => 
            array (
                'zone_id' => 4182,
                'country_id' => 117,
                'name' => 'Sējas novads',
                'code' => '0809200',
                'status' => 1,
            ),
            57 => 
            array (
                'zone_id' => 4183,
                'country_id' => 117,
                'name' => 'Sigulda, Siguldas novads',
                'code' => '0801615',
                'status' => 1,
            ),
            58 => 
            array (
                'zone_id' => 4184,
                'country_id' => 117,
                'name' => 'Siguldas novads',
                'code' => '0801601',
                'status' => 1,
            ),
            59 => 
            array (
                'zone_id' => 4185,
                'country_id' => 117,
                'name' => 'Skrīveru novads',
                'code' => '0328200',
                'status' => 1,
            ),
            60 => 
            array (
                'zone_id' => 4186,
                'country_id' => 117,
                'name' => 'Skrunda, Skrundas novads',
                'code' => '0621209',
                'status' => 1,
            ),
            61 => 
            array (
                'zone_id' => 4187,
                'country_id' => 117,
                'name' => 'Skrundas novads',
                'code' => '0621200',
                'status' => 1,
            ),
            62 => 
            array (
                'zone_id' => 4188,
                'country_id' => 117,
                'name' => 'Smiltene, Smiltenes novads',
                'code' => '0941615',
                'status' => 1,
            ),
            63 => 
            array (
                'zone_id' => 4189,
                'country_id' => 117,
                'name' => 'Smiltenes novads',
                'code' => '0941600',
                'status' => 1,
            ),
            64 => 
            array (
                'zone_id' => 4190,
                'country_id' => 117,
                'name' => 'Staicele, Alojas novads',
                'code' => '0661017',
                'status' => 1,
            ),
            65 => 
            array (
                'zone_id' => 4191,
                'country_id' => 117,
                'name' => 'Stende, Talsu novads',
                'code' => '0880215',
                'status' => 1,
            ),
            66 => 
            array (
                'zone_id' => 4192,
                'country_id' => 117,
                'name' => 'Stopiņu novads',
                'code' => '0809600',
                'status' => 1,
            ),
            67 => 
            array (
                'zone_id' => 4193,
                'country_id' => 117,
                'name' => 'Strenči, Strenču novads',
                'code' => '0941817',
                'status' => 1,
            ),
            68 => 
            array (
                'zone_id' => 4194,
                'country_id' => 117,
                'name' => 'Strenču novads',
                'code' => '0941800',
                'status' => 1,
            ),
            69 => 
            array (
                'zone_id' => 4195,
                'country_id' => 117,
                'name' => 'Subate, Ilūkstes novads',
                'code' => '0440815',
                'status' => 1,
            ),
            70 => 
            array (
                'zone_id' => 4196,
                'country_id' => 117,
                'name' => 'Talsi, Talsu novads',
                'code' => '0880201',
                'status' => 1,
            ),
            71 => 
            array (
                'zone_id' => 4197,
                'country_id' => 117,
                'name' => 'Talsu novads',
                'code' => '0880200',
                'status' => 1,
            ),
            72 => 
            array (
                'zone_id' => 4198,
                'country_id' => 117,
                'name' => 'Tērvetes novads',
                'code' => '0468900',
                'status' => 1,
            ),
            73 => 
            array (
                'zone_id' => 4199,
                'country_id' => 117,
                'name' => 'Tukuma novads',
                'code' => '0900200',
                'status' => 1,
            ),
            74 => 
            array (
                'zone_id' => 4200,
                'country_id' => 117,
                'name' => 'Tukums, Tukuma novads',
                'code' => '0900201',
                'status' => 1,
            ),
            75 => 
            array (
                'zone_id' => 4201,
                'country_id' => 117,
                'name' => 'Vaiņodes novads',
                'code' => '0649300',
                'status' => 1,
            ),
            76 => 
            array (
                'zone_id' => 4202,
                'country_id' => 117,
                'name' => 'Valdemārpils, Talsu novads',
                'code' => '0880217',
                'status' => 1,
            ),
            77 => 
            array (
                'zone_id' => 4203,
                'country_id' => 117,
                'name' => 'Valka, Valkas novads',
                'code' => '0940201',
                'status' => 1,
            ),
            78 => 
            array (
                'zone_id' => 4204,
                'country_id' => 117,
                'name' => 'Valkas novads',
                'code' => '0940200',
                'status' => 1,
            ),
            79 => 
            array (
                'zone_id' => 4205,
                'country_id' => 117,
                'name' => 'Valmiera',
                'code' => '0250000',
                'status' => 1,
            ),
            80 => 
            array (
                'zone_id' => 4206,
                'country_id' => 117,
                'name' => 'Vangaži, Inčukalna novads',
                'code' => '0801817',
                'status' => 1,
            ),
            81 => 
            array (
                'zone_id' => 4207,
                'country_id' => 117,
                'name' => 'Varakļāni, Varakļānu novads',
                'code' => '0701817',
                'status' => 1,
            ),
            82 => 
            array (
                'zone_id' => 4208,
                'country_id' => 117,
                'name' => 'Varakļānu novads',
                'code' => '0701800',
                'status' => 1,
            ),
            83 => 
            array (
                'zone_id' => 4209,
                'country_id' => 117,
                'name' => 'Vārkavas novads',
                'code' => '0769101',
                'status' => 1,
            ),
            84 => 
            array (
                'zone_id' => 4210,
                'country_id' => 117,
                'name' => 'Vecpiebalgas novads',
                'code' => '0429300',
                'status' => 1,
            ),
            85 => 
            array (
                'zone_id' => 4211,
                'country_id' => 117,
                'name' => 'Vecumnieku novads',
                'code' => '0409500',
                'status' => 1,
            ),
            86 => 
            array (
                'zone_id' => 4212,
                'country_id' => 117,
                'name' => 'Ventspils',
                'code' => '0270000',
                'status' => 1,
            ),
            87 => 
            array (
                'zone_id' => 4213,
                'country_id' => 117,
                'name' => 'Ventspils novads',
                'code' => '0980200',
                'status' => 1,
            ),
            88 => 
            array (
                'zone_id' => 4214,
                'country_id' => 117,
                'name' => 'Viesīte, Viesītes novads',
                'code' => '0561815',
                'status' => 1,
            ),
            89 => 
            array (
                'zone_id' => 4215,
                'country_id' => 117,
                'name' => 'Viesītes novads',
                'code' => '0561800',
                'status' => 1,
            ),
            90 => 
            array (
                'zone_id' => 4216,
                'country_id' => 117,
                'name' => 'Viļaka, Viļakas novads',
                'code' => '0381615',
                'status' => 1,
            ),
            91 => 
            array (
                'zone_id' => 4217,
                'country_id' => 117,
                'name' => 'Viļakas novads',
                'code' => '0381600',
                'status' => 1,
            ),
            92 => 
            array (
                'zone_id' => 4218,
                'country_id' => 117,
                'name' => 'Viļāni, Viļānu novads',
                'code' => '0781817',
                'status' => 1,
            ),
            93 => 
            array (
                'zone_id' => 4219,
                'country_id' => 117,
                'name' => 'Viļānu novads',
                'code' => '0781800',
                'status' => 1,
            ),
            94 => 
            array (
                'zone_id' => 4220,
                'country_id' => 117,
                'name' => 'Zilupe, Zilupes novads',
                'code' => '0681817',
                'status' => 1,
            ),
            95 => 
            array (
                'zone_id' => 4221,
                'country_id' => 117,
                'name' => 'Zilupes novads',
                'code' => '0681801',
                'status' => 1,
            ),
            96 => 
            array (
                'zone_id' => 4222,
                'country_id' => 43,
                'name' => 'Arica y Parinacota',
                'code' => 'AP',
                'status' => 1,
            ),
            97 => 
            array (
                'zone_id' => 4223,
                'country_id' => 43,
                'name' => 'Los Rios',
                'code' => 'LR',
                'status' => 1,
            ),
            98 => 
            array (
                'zone_id' => 4224,
                'country_id' => 220,
                'name' => 'Kharkivs\'ka Oblast\'',
                'code' => '63',
                'status' => 1,
            ),
            99 => 
            array (
                'zone_id' => 4225,
                'country_id' => 118,
                'name' => 'Beirut',
                'code' => 'LB-BR',
                'status' => 1,
            ),
            100 => 
            array (
                'zone_id' => 4226,
                'country_id' => 118,
                'name' => 'Bekaa',
                'code' => 'LB-BE',
                'status' => 1,
            ),
            101 => 
            array (
                'zone_id' => 4227,
                'country_id' => 118,
                'name' => 'Mount Lebanon',
                'code' => 'LB-ML',
                'status' => 1,
            ),
            102 => 
            array (
                'zone_id' => 4228,
                'country_id' => 118,
                'name' => 'Nabatieh',
                'code' => 'LB-NB',
                'status' => 1,
            ),
            103 => 
            array (
                'zone_id' => 4229,
                'country_id' => 118,
                'name' => 'North',
                'code' => 'LB-NR',
                'status' => 1,
            ),
            104 => 
            array (
                'zone_id' => 4230,
                'country_id' => 118,
                'name' => 'South',
                'code' => 'LB-ST',
                'status' => 1,
            ),
            105 => 
            array (
                'zone_id' => 4231,
                'country_id' => 168,
                'name' => 'Metro Manila',
                'code' => 'NCR',
                'status' => 1,
            ),
        ));
        
        
    }
}
