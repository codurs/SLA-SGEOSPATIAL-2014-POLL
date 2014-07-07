<?php

class OptionsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('options')->delete();

        $options = array(array('title' => 'PopCorn DeveloperRAYCGeo-DudeNUS-0313', 'description' => 'How can we make information about businesses (e.g. business hours, types of business, rates for different types of business, location) in the community more accessible to all Singaporeans?', 'poll_id' => 1), array('title' => 'Infocomm & Network EngineeringLayo', 'description' => 'How can we reach out to the volunteers in our community for social welfare programmes and volunteering opportunities?', 'poll_id' => 1), array('title' => 'APEXSAINTS', 'description' => 'How can we encourage our community to be more active in creating a better living environment (for e.g. report various issues such as clogged drain and spoilt lift to the relevant agencies)?', 'poll_id' => 1), array('title' => 'Financial Business InformaticsTeam Spatiality', 'description' => '', 'poll_id' => 1), array('title' => 'Earthbound', 'description' => '', 'poll_id' => 1), array('title' => 'Team Geonovation', 'description' => '', 'poll_id' => 1), array('title' => 'YOLO', 'description' => '', 'poll_id' => 1), array('title' => 'Fantastic', 'description' => '', 'poll_id' => 1), array('title' => 'Team Innovate', 'description' => '', 'poll_id' => 1), array('title' => 'Team DMSDDTX', 'description' => '', 'poll_id' => 1), array('title' => 'ALSThe JoggersEpsilonTeam AAA', 'description' => '', 'poll_id' => 1), array('title' => '103 East', 'description' => '', 'poll_id' => 1), array('title' => 'Gneiss GuysMantis', 'description' => '', 'poll_id' => 1), array('title' => 'Team Fabulous', 'description' => '', 'poll_id' => 1), array('title' => 'LKZ', 'description' => '', 'poll_id' => 1), array('title' => 'RGIS', 'description' => '', 'poll_id' => 1), array('title' => 'Team NUS High', 'description' => '', 'poll_id' => 1), array('title' => 'Leagues of Republic', 'description' => '', 'poll_id' => 1), array('title' => 'Team Geonovation', 'description' => '', 'poll_id' => 1), array('title' => 'Map Our Lives', 'description' => '', 'poll_id' => 1), array('title' => '#TeamKMRedDot', 'description' => '', 'poll_id' => 1));

        \Option::insert($options);
    }

}