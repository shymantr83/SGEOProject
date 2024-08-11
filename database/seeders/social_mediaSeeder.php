<?php

namespace Database\Seeders;

use App\Models\social_media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class social_mediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // social_media::create(['whatsapp'=>"01012804721", 'facebook'=>null, 'linkedin'=>"https://www.linkedin.com/in/mechahmedradwan?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app", 'company_id'=>1]);
        // social_media::create(['whatsapp'=>"+4401628947666", 'facebook'=>"https://www.facebook.com/mechahmedradwan0?mibextid=ZbWKwL", 'linkedin'=>"https://www.linkedin.com/in/mechahmedradwan?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app", 'company_id'=>2]);
        // social_media::create(['whatsapp'=>"01026666600", 'facebook'=>"https://www.facebook.com/webpioneer.company", 'linkedin'=>null, 'company_id'=>3]);
        // social_media::create(['whatsapp'=>'01289533661', 'facebook'=>'https://www.facebook.com/mechahmedradwan0?mibextid=ZbWKwL', 'linkedin'=>null, 'company_id'=>4,]);
        // social_media::create(['whatsapp'=>" 45 252 050", 'facebook'=>"https://www.facebook.com/mechahmedradwan0?mibextid=ZbWKwL", 'linkedin'=>null, 'company_id'=>5,]);
        // social_media::create(['whatsapp'=>'01016688861', 'facebook'=>null, 'linkedin'=>null, 'company_id'=>6,]);

        // social_media::create(['whatsapp'=>"(54-11) 4327-4960", 'facebook'=>"https://www.facebook.com/AecomTechnologyCorporation", 'linkedin'=>null, 'company_id'=>7]);
         //social_media::create(['whatsapp'=>"+4401656947876", 'facebook'=>"https://www.facebook.com/skidmoreowingsandmerrill", 'linkedin'=>null, 'company_id'=>8]);
         social_media::create(['whatsapp'=>"+4400000047876", 'facebook'=>"https://www.facebook.com/TestFit.io/", 'linkedin'=>"https://www.linkedin.com/company/testfits/", 'company_id'=>9]);
         social_media::create(['whatsapp'=>"+201001019377", 'facebook'=>"https://www.facebook.com/MCVBusesOfficial%20", 'linkedin'=>"https://www.linkedin.com/company/2352288/admin/", 'company_id'=>10]);
         social_media::create(['whatsapp'=>"+201101019319", 'facebook'=>null, 'linkedin'=>null, 'company_id'=>11]);
         social_media::create(['whatsapp'=>"+4255004447876", 'facebook'=>null, 'linkedin'=>"https://www.linkedin.com/company/bernhard-llc", 'company_id'=>12]);

    }
}
