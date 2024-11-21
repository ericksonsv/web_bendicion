<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Erickson Suero',
            'email' => 'ericksuero@gmail.com',
        ]);
        
        User::factory()->create([
            'name' => 'Felix Abreu',
            'email' => 'fabreu@mb-rd.org',
        ]);

        DB::table('link_categories')->insert([
            ['name' => 'Agendas Red Bendición'],
            ['name' => 'Calendarios Red Bendición'],
            ['name' => 'Documentos Red Bendición'],
        ]);

        DB::table('links')->insert([
            [
                'link_category_id' => 1,
                'name' => 'Agenda Red Bendición Noviembre 2024',
                'link' => 'https://www.dropbox.com/scl/fo/vyk9w6xpojgtyxnvvn69s/AM--P7gfN78RTbtSpOCpXJ4?dl=0&e=1&preview=Agenda+Rb++NOVIEMBRE+2024.docx&rlkey=ixsjqkd2un7dqf5mx8uzqko3c&st=3ulynk8e',
            ],
            [
                'link_category_id' => 1,
                'name' => 'Agenda Red Bendición 2024',
                'link' => 'https://www.dropbox.com/scl/fo/vyk9w6xpojgtyxnvvn69s/AM--P7gfN78RTbtSpOCpXJ4?dl=0&e=1&preview=Agenda+Rb+2024.docx&rlkey=ixsjqkd2un7dqf5mx8uzqko3c&st=3ulynk8e',
            ],
            [
                'link_category_id' => 2,
                'name' => 'Calendario 2024',
                'link' => 'https://www.dropbox.com/scl/fo/3hxbb24ut86mewy7gi7yi/AJHy9Eoqon2s6DP_S_8RIY0?dl=0&e=1&preview=CALENDARIO++2024.docx&rlkey=gbl91v76xac0sm3ws1jynb4cs&st=awlcghy1',
            ],
            [
                'link_category_id' => 2,
                'name' => 'Calendario 2025',
                'link' => 'https://www.dropbox.com/scl/fo/3hxbb24ut86mewy7gi7yi/AJHy9Eoqon2s6DP_S_8RIY0?dl=0&e=1&preview=CALENDARIO++2025.docx&rlkey=gbl91v76xac0sm3ws1jynb4cs&st=awlcghy1',
            ],
            [
                'link_category_id' => 3,
                'name' => 'Documentos Oficiales MB',
                'link' => 'https://www.dropbox.com/scl/fo/xz5wl4x4f8v79yoqg7o5q/AGdydoaDcyLrrhporrGR3iQ/DOCUMENTOS%20OFICIALES%20MB?dl=0&rlkey=hvhyxbyijqtegiq1510vw20u2&subfolder_nav_tracking=1',
            ],
            [
                'link_category_id' => 3,
                'name' => 'Documentos Oficiales RB',
                'link' => 'https://www.dropbox.com/scl/fo/xz5wl4x4f8v79yoqg7o5q/AENe7DqE5cvpmO34QRbGB7k/DOCUMENTOS%20OFICIALES%20RB?dl=0&rlkey=hvhyxbyijqtegiq1510vw20u2&subfolder_nav_tracking=1',
            ],
        ]);
    }
}
