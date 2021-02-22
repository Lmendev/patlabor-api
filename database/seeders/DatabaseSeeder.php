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
            [
                'name' => 'Noa Izumi',
                'age' => null,
                'birthplace' => 'Tomakomai, Hokkaido, Japan',
                'nationality' => 'Japanese',
                'gender' => 'female',
                'occupation' => 'labors pilot',
                'rank' => 'officer',
                'affiliation' => 'Section 2 Division 2 Team 1',
                'image' => url('/')."/images/characters/1.jpg",
                'description' => 'Noa is somewhat impulsive, albeit not nearly as much as Ohta. Noa is arguably the best pilot in Division 2, although both Clancy and Kumagami have shown extreme talent as well but seldom pilot. She has a natural affinity for labors like pets and named the Ingram unit "Alphonse", a name previously held by a pet dog and a pet cat. As the main character of the action, she gets 110% out of the labors much to the amazement of her colleagues.'
            ], [
                'name' => 'Asuma Shinohara',
                'age' => 21,
                'birthplace' => '',
                'nationality' => 'Japanese',
                'gender' => 'male',
                'occupation' => 'labors pilot',
                'rank' => 'officer',
                'affiliation' => 'Section 2 Division 2 Team 1',
                'image' => url('/')."/images/characters/2.jpg",
                'description' => "Son of the head of Shinohara Heavy Industries, the company that makes 90% of the labors in the world. After a falling out with his father, Asuma joined the police force and specifically requested to be assigned to the labor units (in the OVA he claims that his father didn't think he was responsible enough to join the company and he rebelled and joined the police force but his father used his connections to get him assigned to SV2 where he would still work with them). Smart, honest to a fault, and sometimes a bit hot-headed, Asuma is a very good officer, although he's often used by Goto as a lackey. Noa and Hiromi's commanding officer in the field, he has a soft spot for the former. Goto recognizes Asuma has some talent in diverse fields, as can be seen in various places throughout the series. He is also a highly skilled labor pilot, certainly better than Ohta."
            ], [
                'name' => 'Kiichi Goto',
                'age' => null,
                'birthplace' => 'Taito Ward, Tokyo, Japan',
                'nationality' => 'Japanese',
                'gender' => 'male',
                'occupation' => '',
                'rank' => 'captain',
                'affiliation' => 'Section 2 Division 2',
                'image' => url('/')."/images/characters/3.jpg",
                'description' => "Captain Goto seems quite laid back, even apathetic, but is in fact an extremely capable and politically savvy police officer; not only is his strategic awareness quite acute, Goto is as subtle and manipulative as any given situation requires. Hence he got the nickname \"Razor Goto\" in the police. It was rumored that because of these traits, the top officials in the police force assigned him to SV.2 for fear he might ruffle too many feathers. True to form, however, Goto is on top of most events long before most others are even aware of what's going on. It can also be noted within him that a small sadistic streak exists, in that he enjoys the suffering of his team members on letting them do all the detective work where he already knew what they are sent out to discover; much to the chagrin of his subordinates who loathe this quality. Goto is a heavy smoker, has athlete's foot and can often be seen wearing traditional Japanese wooden sandals around the office. It is very strongly implied that Kiichi has a crush on Shinobu, which seems completely unrequited."
            ], [
                'name' => 'Isao Ota',
                'age' => 26,
                'birthplace' => 'Kamaishi, Iwate Prefecture, Japan',
                'nationality' => 'Japanese',
                'gender' => 'male',
                'occupation' => 'labors pilot',
                'rank' => 'officer',
                'affiliation' => 'Section 2 Division 2 Team 2',
                'image' => url('/')."/images/characters/4.jpg",
                'description' => "The gun-loving pilot of Unit 2. With a look and attitude better suited for the Marines than a police force, Ohta is comically gung-ho and expects the rest of Section 2 to perform to his standards. He's very brash and often will charge into a situation without thinking it through. In spite of his loud, obnoxious, and often overconfident personality, Ohta's a good cop and is a stand up guy. He is extremely gun-happy, but tends to hit anything other than the target in combat. However, on the firing range where the targets are unmanned and he can remain calm, his accuracy is essentially perfect"
            ], [
                'name' => 'Kanuka Clancy',
                'age' => 21,
                'birthplace' => 'Oahu, Hawaii, United States',
                'nationality' => 'American - Japanese',
                'gender' => 'female',
                'occupation' => 'labors pilot',
                'rank' => 'lieutenant',
                'affiliation' => 'Section 2 Division 2 Team 2',
                'image' => url('/')."/images/characters/5.jpg",
                'description' => "A temporary member of Section 2, on assignment from the NYPD. Sent to observe a labor unit with the purpose of helping build one for New York City. Highly capable in all duties. Her piloting skills are better than Ohta's, but was assigned to backup duty since acclimating the Labor to a temporary officer would be a poor decision. (Also, keeping Ohta in line is not a job for an idiot). Much like Nagumo, Kanuka is very by-the-book. She is usually all business and sometimes cold to the members of SV.2 with the exception of Noa. Kanuka was born in Hawaii but apparently moved to New York later on. When she travels back to New York, she stops in Hawaii to see her grandmother whom she loves dearly. Kanuka's piloting skills are to be feared."
            ], [
                'name' => 'Hiromi Yamazaki',
                'age' => 23,
                'birthplace' => 'Okinawa, Okinawa Prefecture, Japan',
                'nationality' => 'Japanese',
                'gender' => 'male',
                'occupation' => 'transporter truck driver',
                'rank' => 'officer',
                'affiliation' => 'Section 2 Division 2 Team 1',
                'image' => url('/')."/images/characters/6.jpg",
                'description' => "He is soft spoken and kind hearted. He wanted to join his father as a fisherman but easily gets seasick. He later joined the police force and eventually made it over to SV.2. Yamazaki's too large to fit in a labor's cockpit, so he is designated as the carrier driver for Unit 1. When not on duty he tends to SV.2's vegetable garden where his green fingers can be seen. He's extremely strong, as demonstrated in Movie 1 and 2 where Yamazaki mans the massive anti-labor rifle borrowed from the Narashino Parachute Labor team (apparently an M82 anti-material rifle). He shows the same strength in the TV series when he and Ohta fire the Ingram's Revolver pistol without the aid of a Labor, at the Schaft 'Griffon'."
            ]
        ]);

        //labors

        DB::table('labors')->insert([
            'name' => 'Ingram AV-98',
            'unit_type' => 'Police Patrol Labor',
            'release_date' => '3 de Abril de 1998',
            'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
            'affiliation' => 'Section 2 Division 2',
            'image' => url('/')."/images/labors/1.jpg",
            'description' => "The Ingram AV-98 (AV stands for 'Advanced Vehicle') was developed specially for the police force to combat Labor crime. It is styled in a way to look menacing. The main unit comes with two weapons; an electric baton (or stun stick, a weapon that can stop Labors with high powered electric currents) which is stored under it's shield in it's left arm, and a 37mm revolver cannon, stored in it's left leg. A 90mm riot gun was also developed by the mechanics at the SV2 for the Ingram. The Second Division of the SV2 use these Labors. Ota's AV-98 (Unit 2) has a customised head which is very different to the standard issue. Unit 3 (the spare Labor) also has a customised head. In 'Patlabor 2 the movie', Unit 3 was developed as an experimental anti-electronic warfare Labor by Shinohara Heavy Industries, and it's head is equipped with ECM (Electronic Counter Measures) jamming pod."
        ]);
    }
}
