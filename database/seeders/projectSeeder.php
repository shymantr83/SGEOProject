<?php

namespace Database\Seeders;

use App\Models\project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        project::create(['name'=>'Canva', 'description'=>"تسهّل إنشاء التصميمات الاحترافية ومشاركتها", 'image1'=>"2-1.jpg", 'company_id'=>"1"]);
        project::create(['name'=>'Alibaba', 'description'=>"Our Mission To make it easy to do business anywhere", 'image1'=>"2-2.jpg", 'company_id'=>"1"]);
        project::create(['name'=>'WPS', 'description'=>"WPS Office is a free and all-in-one Office suite, highly compatible with MS Office Word, Excel, and PPT. Can be downloaded online and free", 'image1'=>"2-3.jpg", 'company_id'=>"2"]);
        project::create(['name'=>'Kahoot!', 'description'=>"Kahoot! is a game-based learning platform that brings engagement and fun to 1+ billion players every year at school, at work, and at home.", 'image1'=>"2-4.jpg", 'company_id'=>"2"]);
        project::create(['name'=>'YouCut', 'description'=>"YouCut Video Editor App is a newly introduced video editing tool that provides some exciting video editing features.", 'image1'=>"2-5.jpg", 'company_id'=>"3"]);
        project::create(['name'=>'Snapchat', 'description'=>"Snapchat: Share the moment Chat, send Snaps, explore Stories & Lenses on desktop, or download the app for mobile! Connect & create with friends, wherever you are.", 'image1'=>"2-6.jpg", 'company_id'=>"3"]);
        project::create(['name'=>'Robotics Project', 'description'=>"An amazing robot with specific functions, such as obstacle avoidance, line following, or autonomous navigation.", 'image1'=>"5-1.jpg", 'company_id'=>"4"]);
        project::create(['name'=>'Smart home automation system', 'description'=>"This is a system that allows users to control lights, appliances, and security systems in their homes using a smartphone app or voice commands. With IoT (Internet of Things) devices and wireless communication protocols.", 'image1'=>"5-2.jpg", 'company_id'=>"4"]);
        project::create(['name'=>'Renewable energy system', 'description'=>"A small-scale renewable energy system, such as solar panels or wind turbines, with a battery storage system.", 'image1'=>"5-3.jpg", 'company_id'=>"5"]);
        project::create(['name'=>'Electric car charger', 'description'=>"An electric vehicle (EV) charger, taking into account factors such as fast charging, compatibility with different electric vehicle models, and smart charging features.", 'image1'=>"5-4.jpg", 'company_id'=>"5"]);
        project::create(['name'=>'Biomedical devices', 'description'=>"A project related to medical devices, such as a portable ECG machine, blood glucose meter, or prosthetic with advanced control systems", 'image1'=>"5-5.jpg", 'company_id'=>"6"]);
        project::create(['name'=>'Wireless power tranfer', 'description'=>"A system that can transmit power wirelessly over a short distance.", 'image1'=>"5-6.jpg", 'company_id'=>"6"]);
        project::create(['name'=>'Entertainment city', 'description'=>"A wonderful design for an entertainment city that attracts residents with a picturesque, convenient and comfortable design.", 'image1'=>"3-1.jpg", 'company_id'=>"7"]);
        project::create(['name'=>'Big cities', 'description'=>"Designing large cities suitable to be the capital of the country", 'image1'=>"3-2.jpg", 'company_id'=>"7"]);
        project::create(['name'=>'Hospital', 'description'=>"Design of a hospital consisting of six places in a way suitable for all patients", 'image1'=>"3-3.jpg", 'company_id'=>"8"]);
        project::create(['name'=>'Designs for cities', 'description'=>"Urban planning for residential, industrial, entertainment cities and squares", 'image1'=>"3-4.jpg", 'company_id'=>"8"]);
        project::create(['name'=>'School design', 'description'=>"Design educational schools in a serious and organized manner", 'image1'=>"3-5.jpg", 'company_id'=>"9"]);
        project::create(['name'=>'Park design', 'description'=>"We creatively design an attractive park for tourists", 'image1'=>"3-6.jpg", 'company_id'=>"9"]);
        project::create(['name'=>'Development of biodiesel for diesel engines.', 'description'=>"Biodiesel is a cleaner alternative to burning petroleum-based diesel fuel, because it produces fewer emissions of greenhouse gases and air pollutants.", 'image1'=>"6-1.jpg", 'company_id'=>"10"]);
        project::create(['name'=>'Mechanical elevator without electricity.', 'description'=>"mechanical elevators operate by a mechanical system that relies on mechanical structures such as ropes, pulleys, and weights to raise and lower the elevator.", 'image1'=>"6-2.jpg", 'company_id'=>"10"]);
        project::create(['name'=>'Power generation using automobile speed breakers with automobile street lighting system.', 'description'=>"This type of power generation is an innovative and sustainable idea to utilize road traffic to generate electrical energy and operate street lighting systems.", 'image1'=>"6-3.jpg", 'company_id'=>"11"]);
        project::create(['name'=>'Manufacture of TiC/B carbon nanofibers to enhance the properties of aluminum.', 'description'=>"Carbon nanofibers are considered advanced materials of great importance in the field of engineering and technology. Carbon nanofibers are characterized by their high strength, being up to 10 times stronger than steel.", 'image1'=>"6-4.jpg", 'company_id'=>"11"]);
        project::create(['name'=>'Desalination with a microwave heating source', 'description'=>"Microwaves represent an alternative energy saving method for chemical reactions.", 'image1'=>"6-5.jpg", 'company_id'=>"12"]);
        project::create(['name'=>'Design a remote-controlled car to remove nuclear contamination', 'description'=>"Designing a driverless electric car capable of eliminating pollution left behind by other vehicles while driving, leaving clean air behind.", 'image1'=>"6-6.jpg", 'company_id'=>"12"]);
        project::create(['name'=>'Crossroads', 'description'=>" Road and infrastructure projects Preparation of major projects, including road and infrastructure projects, transportation and traffic - road networks - sanitation - water - irrigation - fire fighting works.", 'image1'=>"1-1.jpg", 'company_id'=>"13"]);
        project::create(['name'=>'Valek wheel', 'description'=>"The Valek wheel,is constantly evolving without stopping, and in recent times, it produces new and advanced construction materials that meet the ever-increasing requirements of society.", 'image1'=>"1-2.jpg", 'company_id'=>"13"]);
        project::create(['name'=>'Bridges', 'description'=>"Durable bridge design with an attractive design and suitable for all cars.", 'image1'=>"1-3.jpg", 'company_id'=>"14"]);
        project::create(['name'=>'House design', 'description'=>"Professionally design your dream home.", 'image1'=>"1-4.jpg", 'company_id'=>"14"]);
        project::create(['name'=>'Constellations', 'description'=>"Designing residential towers and industrial towers with a creative and special design.", 'image1'=>"1-5.jpg", 'company_id'=>"15"]);
        project::create(['name'=>'Roads design', 'description'=>"Wonderful designs for pedestrian and car roads", 'image1'=>"1-6.jpg", 'company_id'=>"15"]);
        project::create(['name'=>'Natural views', 'description'=>"Landscape architecture", 'image1'=>"4-1.jpg", 'company_id'=>"16"]);
        project::create(['name'=>'Building development', 'description'=>" Developing the administration building, College of Engineering, redistributing administrative units and offices in accordance with sustainability standards, recycling, purifying and reusing water to irrigate gardens and trees.", 'image1'=>"4-2.jpg", 'company_id'=>"16"]);
        project::create(['name'=>'The National Museum', 'description'=>"Design of a museum of national heritage and traditional industries ", 'image1'=>"4-3.jpg", 'company_id'=>"17"]);
        project::create(['name'=>'Student center', 'description'=>"Design the student center at the University of Babylon, This design reflects the Babylonian style in all its design, planning and social details.", 'image1'=>"4-4.jpg", 'company_id'=>"17"]);
        project::create(['name'=>'Sports stadium', 'description'=>"A professional and attractive sports stadium design with stunning gardens.", 'image1'=>"4-5.jpg", 'company_id'=>"18"]);
        project::create(['name'=>'Mosques', 'description'=>"Architectural design for mosques in a professional and organized manner", 'image1'=>"4-6.jpg", 'company_id'=>"18"]);
    }
}
