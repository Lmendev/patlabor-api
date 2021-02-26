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
        // Load initial Characters information

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
                'occupation' => 'Captain of Division 2',
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
            ], [
                'name' => 'Takeo Kumagami',
                'age' => null,
                'birthplace' => 'Nishinomiya, Hyogo, Japan',
                'nationality' => 'Japanese',
                'gender' => 'female',
                'occupation' => 'labors pilot',
                'rank' => 'officer',
                'affiliation' => 'Section 2 Division 2 Team 2',
                'image' => url('/')."/images/characters/7.jpg",
                'description' => "Joined Section 2 shortly after Clancy's tenure ended, she takes Clancy's place as backup to Unit 2. She trained with the Hong Kong Police Force before getting assigned to the Ministry of Foreign Affairs. She was then offered a position with Interpol but ended up choosing the Special Vehicles department to continue her career. Calm and confident, Kumagami attends to her duties as effectively as Clancy did, but has different ideas about how to go about it. She practices martial arts and can be seen tossing Ohta and the rest of the Division 2 team around in sparring matches when not in the field. Kumagami's only weakness seems to be a fear of the supernatural. She is easily spooked and prone to fainting if scared sufficiently."
            ], [
                'name' => 'Mikiyasu Shinshi',
                'age' => 29,
                'birthplace' => null,
                'nationality' => 'Japanese',
                'gender' => 'male',
                'occupation' => 'transporter truck driver',
                'rank' => 'officer',
                'affiliation' => 'Section 2 Division 2 Team 2',
                'image' => url('/')."/images/characters/8.jpg",
                'description' => "Shinshi is the driver for the second carrier. He was born Fujieda, Shizuoka Prefecture and is 29 at the start of the series. He was originally Ota's backup in the TV series and original OVA series until Kanuka replaced him. He is a quite introverted man, but can become surprisingly violent if provoked enough. He is also the rather henpecked husband of Tamiko, who is rather possessive of him. Shinshi is the only married member of the team. Kazunori Ito said in an interview he named the character after a friend he goes scuba diving with."
            ], [
                'name' => 'Shinobu Nagumo',
                'age' => null,
                'birthplace' => 'Setagaya Ward, Tokyo, Japan',
                'nationality' => 'Japanese',
                'gender' => 'female',
                'occupation' => 'Captain of Division 1',
                'rank' => 'captain',
                'affiliation' => 'Section 2 Division 1',
                'image' => url('/')."/images/characters/9.jpg",
                'description' => "She is a professional, competent police officer, highly regarded by everyone in the police force - basically the exact opposite of Captain Kiichi Goto. Nagumo is a by-the-book style captain (as opposed to Goto who will often use somewhat unconventional methods to meet a goal); she always keeps her mind on the job and never loses her cool. Often she talks back to her superiors when she disagrees with an order, and this is probably why she remains at the SV2 rather being promoted to another job more worthy of her skills. Despite her conventional mentality, or because of it, she is always there to lend a hand whenever Division 2 needs it. She shares an office with Goto, which means she sees a lot of Goto's layabout act – and also is able to tell that Goto is a much more skilled police officer than he looks (their professional relationship might best be described as 'interesting'). It is also implied that Shinobu might have feelings for Kiichi."
            ], [
                'name' => 'Tsutomu Gomioka',
                'age' => null,
                'birthplace' => null,
                'nationality' => 'Japanese',
                'gender' => 'male',
                'occupation' => 'labors pilot',
                'rank' => 'officer',
                'affiliation' => 'Section 2 Division 1 Team 2',
                'image' => url('/')."/images/characters/10.jpg",
                'description' => "One of the labor pilots for Division 1, and much like his commanding officer, he's very by-the-book. A good pilot, although his coworkers in Division 2 seem to have more talent. He only appears in the TV series. At the end of the series he becomes captain of the newly-formed Division 3"
            ], [
                'name' => 'Seitaroh Sakaki',
                'age' => null,
                'birthplace' => null,
                'nationality' => 'Japanese',
                'gender' => 'male',
                'occupation' => 'labors mechanic',
                'rank' => 'chief mechanic',
                'affiliation' => 'Section 2 Mechanics',
                'image' => url('/')."/images/characters/11.jpg",
                'description' => "Leader of the labor mechanics that service SV.2. Gruff and loud, Sakaki doesn't like it when Division 2 brings back their labors in less than perfect condition. Threatens to throw all his mechanics into the sea when they don't perform up to his expectations. Sakaki has been a mechanic for most of his life but admits he finds it difficult to keep up with the ever advancing march of technology in the world."
            ], [
                'name' => 'Shigeo Shiba',
                'age' => null,
                'birthplace' => null,
                'nationality' => 'Japanese',
                'gender' => 'male',
                'occupation' => 'labors mechanic',
                'rank' => 'chief mechanic',
                'affiliation' => 'Section 2 Mechanics',
                'image' => url('/')."/images/characters/12.jpg",
                'description' => "Second in command to Sakaki, and eventually replaces him when he retires. A total gearhead, he loves his job--probably a little too much, as he can be very hard to relax when he gets fired up. Shige is good friends with Asuma Shinohara."
            ]
        ]);

        // Load initial Labors information

        DB::table('labors')->insert([
            [
                'name' => 'Ingram AV-98',
                'unit_type' => 'Police Patrol Labor',
                'release_date' => 'April 1998',
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Special vehicles section two',
                'image' => url('/')."/images/labors/1.jpg",
                'description' => "The Ingram AV-98 (AV stands for 'Advanced Vehicle') was developed specially for the police force to combat Labor crime. It is styled in a way to look menacing. The main unit comes with two weapons; an electric baton (or stun stick, a weapon that can stop Labors with high powered electric currents) which is stored under it's shield in it's left arm, and a 37mm revolver cannon, stored in it's left leg. A 90mm riot gun was also developed by the mechanics at the SV2 for the Ingram. The Second Division of the SV2 use these Labors. Ota's AV-98 (Unit 2) has a customised head which is very different to the standard issue. Unit 3 (the spare Labor) also has a customised head. In 'Patlabor 2 the movie', Unit 3 was developed as an experimental anti-electronic warfare Labor by Shinohara Heavy Industries, and it's head is equipped with ECM (Electronic Counter Measures) jamming pod."
            ], [
                'name' => 'MPL-96 Askua-96',
                'unit_type' => 'Police Patrol Labor',
                'release_date' => 'October 1996',
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Special vehicles section one',
                'image' => url('/')."/images/labors/2.jpg",
                'description' => "Based upon an old construction Labor, the Asuka-SSL-96 Taisyo. The term MPL stands for 'Main Police Labor'. This Labor was modified to create the first Patrol Labor. Though the only real modification was the addition of a light unit, police siren and a paint job. The first unit of the SV2 in the original OVA, and second unit in the first episode of the TV series used these Labors. They are fairly clunky and weren't much use against many criminal Labors."
            ], [
                'name' => "AV-X0 (AV-2) Type X-0 'Zero'",
                'unit_type' => 'Police Patrol Labor',
                'release_date' => 'September 1999',
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Special vehicles section one',
                'image' => url('/')."/images/labors/3.jpg",
                'description' => "Essentially the AV-98 Ingram on steroids, this Patrol Labor is much more stronger than the Ingram and can lift a small construction Labor up with one hand a break it in to two. This Labor was designed with hand to hand combat in mind. In 'Patlabor the movie', Kanuka Clancy pilots the Labor while it is infected with the Babel Virus. Shinohara have also produced a version for the New York Police Department called the AV-02 Clash Buster which comes with a 44mm cannon, but this Labor does not appear in the anime."
            ], [
                'name' => "MPL-97S Python",
                'unit_type' => 'Police Patrol Labor',
                'release_date' => 'November 1997',
                'manufacturer' => 'Manabe Heavy Industries',
                'affiliation' => 'Special vehicles section one',
                'image' => url('/')."/images/labors/4.jpg",
                'description' => "Used by Division 1 in the TV series. This Labor may not be as good as the Ingram, but is still effective against most construction Labors. The term MPL stands for 'Main Police Labor'."
            ], [
                'name' => "AV-0 Peacemaker (Zero)",
                'unit_type' => 'Police Patrol Labor',
                'release_date' => 'September 1999',
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Special vehicles section one',
                'image' => url('/')."/images/labors/5.jpg",
                'description' => "The AV-0 is shinohara industries final variant of the 'Ingram', and is expected to be the replacement of the model. It has already replaced the 'Python' units of section one. It is equipped mainly with the same equipment as the 'Ingram', police equipment, however there are major changes in the softwere and engineering of the unit. It is equipped with a nervous system that enables the robot to operate even when the pilot has lost conscience as it learns the movements of its pilots and copies them perfectly. It is also stronger and faster than 'Ingram' as it is able to operate with more eficiency, although unlike the Ingram it relies more on its superior technology than the abilities pilot himself which can be seen as a weakness as well as a strength, for example the Peacemaker system prevents it from going into battle near a civilian building. It has however been proved that it is not a match for the 'Griffon' and it's confrontation with it ends with the Peacemaker units of section one badly damaged. It is also known that this model is going to be delivered to the NYPD for its police labor unit."
            ], [
                'name' => "AV-02 Variant",
                'unit_type' => 'Police Patrol Labor',
                'release_date' => '2002',
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Special vehicles section two',
                'image' => url('/')."/images/labors/6.jpg",
                'description' => "Very little is known about this model, due to its brief appearance. Judging from its design, this model appears to be based on the Ingram and the AV-X0 , with several functional enhancements added. Since it is the successor to the Ingram, it must be superior in some respects. The AV-02 Variant features a similar design, including the lights on its shoulders. It probably has good self-balance and a wide range of sensors located on its head."
            ], [
                'name' => "Type 99 Road Runner",
                'unit_type' => 'Traffic Control Work',
                'release_date' => '2002',
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Tokyo Metropolitan Police',
                'image' => url('/')."/images/labors/7.jpg",
                'description' => "It is a traffic control task that can overcome any traffic jam thanks to its wheels and extendable legs. In its vehicle mode it resembles a car. When the legs are extended it goes into Labor mode, in which it can literally ride on other vehicles and manipulate objects with its retractable arms."
            ], [
                'name' => "MPL97AV-T (97-AV)",
                'unit_type' => 'Training Police Patrol Labor',
                'release_date' => null,
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Special vehicles section',
                'image' => url('/')."/images/labors/8.jpg",
                'description' => "It was developed by Shinohara Heavy Industries to be a Training Task for cadets who aspire to pilot Patlabors."
            ], [
                'name' => "AV-98T Dauphan",
                'unit_type' => 'Training Police Patrol Labor',
                'release_date' => null,
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Special vehicles section',
                'image' => url('/')."/images/labors/9.jpg",
                'description' => "Training Labor seen in the TV episode 'Kanuka Has Arrived'"
            ], [
                'name' => "AV-02T Lehrer",
                'unit_type' => 'Training Police Patrol Labor',
                'release_date' => null,
                'manufacturer' => 'Shinohara Heavy Industries, Hachioji Factory',
                'affiliation' => 'Special vehicles section',
                'image' => url('/')."/images/labors/10.jpg",
                'description' => "Training Labor seen only in 'Patlabor 2 the movie'"
            ]
        ]);
    }
}
