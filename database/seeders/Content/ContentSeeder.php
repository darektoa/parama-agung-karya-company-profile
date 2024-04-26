<?php

namespace Database\Seeders\Content;

use App\Models\Content\{Content, Directory};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $homeHeroContents = [
            [
                'name'      => 'Hero Background',
                'codename'  => 'homeHeroBackground',
                'text'      => null,
                'order'     => 1,
            ],
            [
                'name'      => 'Title',
                'codename'  => 'homeHeroTitle',
                'text'      => 'PT Parama Agung Karya',
                'order'     => 2,
            ],
            [
                'name'      => 'Description',
                'codename'  => 'homeHeroDescription',
                'text'      => 'Mengerjakan dan menyediakan bahan bangunan civil dan konstruksi, perawatan gedung/bangunan, dan elektrikal',
                'order'     => 3,
            ],
            [
                'name'      => 'Featured Card 1',
                'codename'  => 'homeHeroFeaturedCard1',
                'text'      => 'Civil & Konstruksi',
                'order'     => 4,
            ],
            [
                'name'      => 'Featured Card 2',
                'codename'  => 'homeHeroFeaturedCard2',
                'text'      => 'Perawatan Bangunan',
                'order'     => 5,
            ],
            [
                'name'      => 'Featured Card 3',
                'codename'  => 'homeHeroFeaturedCard3',
                'text'      => 'Elektrikal',
                'order'     => 6,
            ]
        ];

        $homeServicesContents = [
            [
                'name'      => 'Title',
                'codename'  => 'homeServicesTitle',
                'text'      => 'Layanan Kami',
                'order'     => 1,
            ],
            [
                'name'      => 'Service Title 1',
                'codename'  => 'homeServiceTitle1',
                'text'      => 'Civil Dan Konstruksi',
                'order'     => 2,
            ],
            [
                'name'      => 'Service Description 1',
                'codename'  => 'homeServiceDescription1',
                'text'      => 'Mengerjakan pekerjaan serta menyediakan bahan bangunan civil dan konstruksi dari mulai design layout perancangan bentuk dan bangunan serta pelaksanaan.',
                'order'     => 3,
            ],
            [
                'name'      => 'Service Title 2',
                'codename'  => 'homeServiceTitle2',
                'text'      => 'Perawatan Bangunan',
                'order'     => 4,
            ],
            [
                'name'      => 'Service Description 2',
                'codename'  => 'homeServiceDescription2',
                'text'      => 'Menyediakan dan pengadaan material sesuai dengan kebutuhan, tenaga kerja baik sistem kerja borongan maupun harian.',
                'order'     => 5,
            ],
            [
                'name'      => 'Service Title 3',
                'codename'  => 'homeServiceTitle3',
                'text'      => 'Elektrikal',
                'order'     => 6,
            ],
            [
                'name'      => 'Service Description 3',
                'codename'  => 'homeServiceDescription3',
                'text'      => 'Menyediakan dan pengadaan material pemasangan sesuai dengan kebutuhan',
                'order'     => 7,
            ],
        ];
        
        $aboutBannerContents = [
            [
                'name'      => 'Banner About',
                'codename'  => 'aboutBannerBackground',
                'text'      => null,
                'order'     => 1,
            ],
        ];
        
        $aboutOverviewContents = [
            [
                'name'      => 'Title Overview',
                'codename'  => 'aboutOverviewTitle',
                'text'      => 'PT Parama Agung Karya',
                'order'     => 1,
            ],
            [
                'name'      => 'Description Overview',
                'codename'  => 'aboutOverviewDescription',
                'text'      => "
                    Puji Syukur kami panjatkan kepada Tuhan Yang Maha Kuasa, karena atas berkat, rahmat, kasih saying, dan izin-Nya, kami dapat memperkenalkan PT. Parama Agung Karya melalui web Company Profile.\n
                    PT. Parama Agung Karya merupakan Perusahaan Swasta, yang bergerak di bidang konstruksi dan non-konstruksi seperti furniture hal tersebut merupakan komitmen kami terhadap pengguna jasa.\n 
                    PT. Parama Agung Karya membantu dalam pekerjaan-pekerjaan anda, yang sesuai dengan keahlian kami.\n",
                'order'     => 2,
            ],
        ];

        $aboutOurVisionsContents = [
            [
                'name'      => 'Title Our Vision',
                'codename'  => 'aboutOurVisionsTitle',
                'text'      => 'Visi Kami',
                'order'     => 1,
            ],
            [
                'name'      => 'Description Our Vision',
                'codename'  => 'aboutOurVisionsDescription',
                'text'      => 'Terbentuknya Sistem Kerja Yang Adaptif, Professional Serta Menjunjung Tinggi Nilai-Nilai Loyalitas Dan Independen',
                'order'     => 2,
            ],
        ];

        $aboutOurMissionsContents = [
            [
                'name'      => 'Title Our Missions',
                'codename'  => 'aboutOurMissionsTitle',
                'text'      => 'Misi Kami',
                'order'     => 1,
            ],
            [
                'name'      => 'Title Mission 1',
                'codename'  => 'aboutMissionTitle1',
                'text'      => 'Memperluas Jaringan',
                'order'     => 2,
            ],
            [
                'name'      => 'Description Mission 1',
                'codename'  => 'aboutMissionDescription1',
                'text'      => 'Mengembangkan jaringan dan memperluas hubungan kerjasama dengan mitra pemerintah dan swasta.',
                'order'     => 3,
            ],
            [
                'name'      => 'Title Mission 2',
                'codename'  => 'aboutMissionTitle2',
                'text'      => 'Membangun Kebersamaan',
                'order'     => 4,
            ],
            [
                'name'      => 'Description Mission 2',
                'codename'  => 'aboutMissionDescription2',
                'text'      => 'Mengembangkan jaringan dan memperluas hubungan kerjasama dengan mitra pemerintah dan swasta.',
                'order'     => 5,
            ],
            [
                'name'      => 'Title Mission 3',
                'codename'  => 'aboutMissionTitle3',
                'text'      => 'Menguatkan Kerjasama',
                'order'     => 4,
            ],
            [
                'name'      => 'Description Mission 3',
                'codename'  => 'aboutMissionDescription3',
                'text'      => 'Menguatkan hubungan kerjasama dengan semangat loyalitas.',
                'order'     => 5,
            ],
        ];

        $contactBannerContents = [
            [
                'name'      => 'Banner Contact',
                'codename'  => 'contactBannerBackground',
                'text'      => null,
                'order'     => 1,
            ],
        ];
        
        $contactContactContents = [
            [
                'name'      => 'Title',
                'codename'  => 'contactTitle',
                'text'      => 'Kontak Kami',
                'order'     => 1,
            ],
            [
                'name'      => 'Description',
                'codename'  => 'contactDescription',
                'text'      => 'Hubungi Kami Dan Mari Mulai Percakapan. Kami Siap Mendengarkan Dan Membantu Anda Di Setiap Langkah.',
                'order'     => 2,
            ],
            [
                'name'      => 'Link Map Location',
                'codename'  => 'contactMapLocation',
                'text'      => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8803506775944!2d106.79408177546998!3d-6.279457193709387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1952c92652d%3A0x12b969e291ff64b0!2sJl.%20RS.%20Fatmawati%20Raya%20No.1%2C%20RT.11%2FRW.7%2C%20Gandaria%20Sel.%2C%20Kec.%20Cilandak%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012420!5e0!3m2!1sid!2sid!4v1713520921520!5m2!1sid!2sid',
                'order'     => 4,
            ],
            [
                'name'      => 'Email',
                'codename'  => 'contactEmail',
                'text'      => 'ptparamaagungkarya@gmail.com',
                'order'     => 5,
            ],
            [
                'name'      => 'Telphone',
                'codename'  => 'contactTelphone',
                'text'      => '021-22705111',
                'order'     => 6,
            ],
            [
                'name'      => 'Office Location',
                'codename'  => 'contactOfficeLocation',
                'text'      => 'Jl. RS. Fatmawati No. 1, Kelurahan Gandaria Selatan, Kecamatan Cilandak Jakarta Selatan 12420',
                'order'     => 7,
            ],
        ];
        

        foreach($homeHeroContents as $content) {
            Directory::where('codename', 'hero')
                ->first()
                ->contents()
                ->create($content);
        }

        foreach($homeServicesContents as $content) {
            Directory::where('codename', 'services')
                ->first()
                ->contents()
                ->create($content);
        }

        foreach($aboutBannerContents as $content) {
            Directory::where('codename', 'bannerAbout')
                ->first()
                ->contents()
                ->create($content);
        }

        foreach($aboutOverviewContents as $content) {
            Directory::where('codename', 'overview')
                ->first()
                ->contents()
                ->create($content);
        }

        foreach($aboutOurVisionsContents as $content) {
            Directory::where('codename', 'ourVisions')
                ->first()
                ->contents()
                ->create($content);
        }

        foreach($aboutOurMissionsContents as $content) {
            Directory::where('codename', 'ourMissions')
                ->first()
                ->contents()
                ->create($content);
        }

        foreach($contactBannerContents as $content) {
            Directory::where('codename', 'bannerContact')
                ->first()
                ->contents()
                ->create($content);
        }

        foreach($contactContactContents as $content) {
            Directory::where('codename', 'contact')
                ->first()
                ->contents()
                ->create($content);
        }
    }
}
