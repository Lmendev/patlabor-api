<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        //echo url('/');

        DB::table('characters')->insert([
            'name' => 'Noa Izumi',
            'birthplace' => 'Tomakomai, Hokkaido, Japan',
            'nationality' => 'Japanese',
            'gender' => 'female',
            'occupation' => 'Labors pilot',
            'rank' => 'officer',
            'affiliation' => 'Section 2 Division 2 Team 1',
            'image' => url('/')."/images/characters/1.jpg",
            'description' => 'Noa is somewhat impulsive, albeit not nearly as much as Ohta. Noa is arguably the best pilot in Division 2, although both Clancy and Kumagami have shown extreme talent as well but seldom pilot. She has a natural affinity for labors like pets and named the Ingram unit "Alphonse", a name previously held by a pet dog and a pet cat. As the main character of the action, she gets 110% out of the labors much to the amazement of her colleagues.'
        ]);

        DB::table('characters')->insert([
            'name' => 'Asuma Shinohara',
            'age' => 21,
            'birthplace' => '',
            'nationality' => 'Japanese',
            'gender' => 'male',
            'occupation' => 'Labors pilot',
            'rank' => 'officer',
            'affiliation' => 'Section 2 Division 2 Team 1',
            'image' => url('/')."/images/characters/2.jpg",
            'description' => "Son of the head of Shinohara Heavy Industries, the company that makes 90% of the labors in the world. After a falling out with his father, Asuma joined the police force and specifically requested to be assigned to the labor units (in the OVA he claims that his father didn't think he was responsible enough to join the company and he rebelled and joined the police force but his father used his connections to get him assigned to SV2 where he would still work with them). Smart, honest to a fault, and sometimes a bit hot-headed, Asuma is a very good officer, although he's often used by Goto as a lackey. Noa and Hiromi's commanding officer in the field, he has a soft spot for the former. Goto recognizes Asuma has some talent in diverse fields, as can be seen in various places throughout the series. He is also a highly skilled labor pilot, certainly better than Ohta."
        ]);
        
        DB::table('characters')->insert([
            'name' => 'Kiichi Goto',
            'birthplace' => 'Taito Ward, Tokyo, Japan',
            'nationality' => 'Japanese',
            'gender' => 'male',
            'occupation' => '',
            'rank' => 'captain',
            'affiliation' => 'Section 2 Division 2',
            'image' => url('/')."/images/characters/3.jpg",
            'description' => "Captain Goto seems quite laid back, even apathetic, but is in fact an extremely capable and politically savvy police officer; not only is his strategic awareness quite acute, Goto is as subtle and manipulative as any given situation requires. Hence he got the nickname \"Razor Goto\" in the police. It was rumored that because of these traits, the top officials in the police force assigned him to SV.2 for fear he might ruffle too many feathers. True to form, however, Goto is on top of most events long before most others are even aware of what's going on. It can also be noted within him that a small sadistic streak exists, in that he enjoys the suffering of his team members on letting them do all the detective work where he already knew what they are sent out to discover; much to the chagrin of his subordinates who loathe this quality. Goto is a heavy smoker, has athlete's foot and can often be seen wearing traditional Japanese wooden sandals around the office. It is very strongly implied that Kiichi has a crush on Shinobu, which seems completely unrequited."
        ]);

        //labors

        DB::table('labors')->insert([
            'name' => 'Ingram AV-98',
            'unit_type' => 'Police Patrol Labor',
            'release_date' => '3 de Abril de 1998',
            'Manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
            'affiliation' => 'Section 2 Division 2',
            'image' => url('/')."/images/labors/1.jpg",
            'description' => "The Ingram AV-98 (AV stands for 'Advanced Vehicle') was developed specially for the police force to combat Labor crime. It is styled in a way to look menacing. The main unit comes with two weapons; an electric baton (or stun stick, a weapon that can stop Labors with high powered electric currents) which is stored under it's shield in it's left arm, and a 37mm revolver cannon, stored in it's left leg. A 90mm riot gun was also developed by the mechanics at the SV2 for the Ingram. The Second Division of the SV2 use these Labors. Ota's AV-98 (Unit 2) has a customised head which is very different to the standard issue. Unit 3 (the spare Labor) also has a customised head. In 'Patlabor 2 the movie', Unit 3 was developed as an experimental anti-electronic warfare Labor by Shinohara Heavy Industries, and it's head is equipped with ECM (Electronic Counter Measures) jamming pod."
        ]);
    }
}
