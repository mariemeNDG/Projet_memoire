<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IncubateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $incubateurs = [
            [
                'nom' => 'Station F',
                'adresse' => '5 Parvis Alan Turing, 75013 Paris',
                'telephone' => '0144800100',
                'secteur' => 'Technologie, IA, Fintech',
                'description' => 'Le plus grand campus de startups au monde, hébergeant plus de 1000 startups.',
                'photo' => 'station-f.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Numa',
                'adresse' => '39 Rue du Caire, 75002 Paris',
                'telephone' => '0140267060',
                'secteur' => 'Numérique, Innovation',
                'description' => 'Lieu emblématique de l\'innovation numérique à Paris depuis 2008.',
                'photo' => 'numa.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'AgroParisTech Innovation',
                'adresse' => '16 Rue Claude Bernard, 75005 Paris',
                'telephone' => '0144153600',
                'secteur' => 'Agroalimentaire, Biotech',
                'description' => 'Incubateur spécialisé dans les innovations agroalimentaires et biotechnologiques.',
                'photo' => 'agroparistech.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Paris&Co - HealthTech',
                'adresse' => '6 Rue de la Fontaine au Roi, 75011 Paris',
                'telephone' => '0153826300',
                'secteur' => 'Santé, Medtech',
                'description' => 'Programme d\'incubation dédié aux startups de la santé et des technologies médicales.',
                'photo' => 'paris-co-health.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Le Village by CA Paris',
                'adresse' => '55 Avenue des Champs-Élysées, 75008 Paris',
                'telephone' => '0142567000',
                'secteur' => 'Fintech, Retail, Smart City',
                'description' => 'Incubateur du Crédit Agricole soutenant les startups à fort potentiel.',
                'photo' => 'village-ca.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Impulse Partners',
                'adresse' => '15 Rue de la Fontaine au Roi, 75011 Paris',
                'telephone' => '0184360500',
                'secteur' => 'Deep Tech, Industrie',
                'description' => 'Accélérateur de startups industrielles et deeptech.',
                'photo' => 'impulse.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'HEC Paris Incubator',
                'adresse' => '1 Rue de la Libération, 78350 Jouy-en-Josas',
                'telephone' => '0139677070',
                'secteur' => 'Diversifié',
                'description' => 'Incubateur de la prestigieuse école HEC Paris pour entrepreneurs ambitieux.',
                'photo' => 'hec-incubator.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'EPITA I-Lab',
                'adresse' => '14-16 Rue Voltaire, 94270 Le Kremlin-Bicêtre',
                'telephone' => '0144800100',
                'secteur' => 'Informatique, Cybersécurité',
                'description' => 'Incubateur technologique de l\'EPITA spécialisé dans les projets IT innovants.',
                'photo' => 'epita-ilab.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Bpifrance Le Hub',
                'adresse' => '6-8 Boulevard Haussmann, 75009 Paris',
                'telephone' => '0170537575',
                'secteur' => 'Scale-up, Growth',
                'description' => 'Programme d\'accélération pour startups en phase de scale-up.',
                'photo' => 'bpifrance-hub.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nom' => 'Plug and Play Paris',
                'adresse' => '72 Rue du Faubourg Saint-Honoré, 75008 Paris',
                'telephone' => '0186502400',
                'secteur' => 'Corporate Innovation',
                'description' => 'Plateforme d\'innovation connectant startups et grandes entreprises.',
                'photo' => 'plug-play.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('incubateurs')->insert($incubateurs);
    }
}
