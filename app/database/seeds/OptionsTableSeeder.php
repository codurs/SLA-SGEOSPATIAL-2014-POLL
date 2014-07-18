<?php

class OptionsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('options')->delete();

        $options = array(   array('title' => 'PopCorn Developer', 'description' => 'Challenge 1A (Application)\nWe maintain a database of useful information related to businesses and share it using web services that return the data in a mobile app friendly format. The data will be visualised on a map for users. We have also set up a Content Management System to manage the data easily.', 'poll_id' => 1,  'school' => 'NYP', 'image' => 'https://www.dropbox.com/s/seew8tureja2620/PopCorn%20Developer_NYP.jpg?dl=1'),
                            array('title' => 'RAYC', 'description' => 'Challenge 1A (Analysis)\nWe conducted an analysis to find out which part of the community was lacking certain facilities.', 'poll_id' => 1,  'school' => 'TEMASEK POLYTECHNIC', 'image' => 'https://www.dropbox.com/s/mqnw1hqo5vubgo5/Team%20RAYC.png?dl=1'),

                            array('title' => 'Geo-Dude', 'description' => 'We seek to provide a platform where potential volunteers can conveniently access and find out more about the various activities they can volunteer for. As such, we have created an app that allows interested residents who download it to be better connected to Siglap’s community leaders.', 'poll_id' => 1,  'school' => 'Hwa Chong Junior College', 'image' => 'https://www.dropbox.com/s/8n81yh6y5wlo0h8/Geo-Dude_HwaChongJC.jpg?dl=1'),

                            array('title' => 'NUS-0313', 'description' => 'We analyzed the current infrastructural constraint experienced by the disabled in Pasir Ris New Town. Our group seeks to enhance the mobility for the disabled in accessing different amenities and services', 'poll_id' => 1,  'school' => 'National University of Singapore', 'image' => 'https://www.dropbox.com/s/qddu1j7276s7t1f/NUS_0313.jpg?dl=1'),
                            array('title' => 'Infocomm & Network Engineering', 'description' => '', 'poll_id' => 1,  'school' => 'TEMASEK POLYTECHNIC', 'image' => 'http://www.idm.sg/wp-content/uploads/2010/08/tp1.bmp?dl=1'),

                            array('title' => 'Layo', 'description' => 'Challenge 2B (Analysis)\nHow can we better reach out to those in need of assistance?', 'poll_id' => 1,  'school' => 'ITE COLLEGE EAST', 'image' => 'https://www.dropbox.com/s/gt2vfrb84859bhs/Team%20Layo_ITEEast.jpg?dl=1'),

                            array('title' => 'APEX', 'description' => 'Challenge 2C (Analysis)\nHow can we help the residents in the community better understand the history and heritage of Pasir Ris?', 'poll_id' => 1,  'school' => 'Temasek Junior College', 'image' => 'https://www.dropbox.com/s/8a22qwipj57lqvz/Team%20APEX_Temasek%20JC.JPG?dl=1'),

                            array('title' => 'SAINTS', 'description' => 'Challenge 3A (Analysis)\nHow can we motivate and encourage our mobile senior citizens who are living alone to participate in our activities?', 'poll_id' => 1,  'school' => 'St. Andrew\'s Junior College', 'image' => 'https://www.dropbox.com/s/q2p5jxexoeou94p/Saints_StAndrewJC.jpg?dl=1'),
                            array('title' => 'Financial Business Informatics', 'description' => 'Challenge 3A (Analysis)\nHow can we motivate and encourage our mobile senior citizens who are living alone to participate in our activities?', 'poll_id' => 1,  'school' => 'TEMASEK POLYTECHNIC', 'image' => 'https://www.dropbox.com/s/gudcmvdb0c5islo/FinancialBusinessInformatics_Temasek%20Poly.jpg?dl=1'),

                            array('title' => 'Team Spatiality', 'description' => 'Challenge 3B (Analysis)\nHow can we extend our social services and assistance to the senior citizens living in our community? What are the means for us to connect/check-up on these seniors especially those who are living alone?', 'poll_id' => 1,  'school' => 'Hwa Chong Junior College', 'image' => 'https://www.dropbox.com/s/jyp2izizkj568jn/Team_Spatiality.jpg?dl=1'),

                            array('title' => 'Earthbound', 'description' => 'Challenge 3E (Analysis)\nWe were tasked to map out the Moulmein-Little India area where its well-known places attract many visitors. With such a rich culture, this area has many hidden gems therefore mapping out these places would help users know the area a little better.', 'poll_id' => 1,  'school' => 'Singapore Polytechnic', 'image' => 'https://www.dropbox.com/s/q50c4c65a937mbv/EARTHBOUND_SP.jpg?dl=1'),

                            array('title' => 'Team Geonovation', 'description' => 'Challenge 4B (Application)\nWhatsUp is the very first township application in Singapore which provides up-to-date information to residents on upcoming events, latest town development works and public services. Making use of geospatial data. WhatsUp also notifies residents when events are happening nearby. As such, residents will no longer miss out on anything!', 'poll_id' => 1,  'school' => 'NYP', 'image' => 'http://mysbm.nyp.edu.sg/ASC/images/nyp-logo-hor-300.jpg'),

                            array('title' => 'YOLO', 'description' => 'Challenge 5D (Analysis)/nIn order to encourage a healthy lifestyle, we identified cycling routes for Woodlands CC to organize cycling events and mapped our walking paths from school to MRT stations to encourage students to walk. ', 'poll_id' => 1,  'school' => 'Republic Polytechnic', 'image' => 'https://www.dropbox.com/s/qeyxndhrfh1k89e/Updated%20Team%20Yolo.JPG?dl=1'),

                            array('title' => 'Fantastic', 'description' => 'Challenge 5E (Application)\nMobile users will be able to locate exercise facilities near them at their convenience.This will also motivate users to exercise by rewarding them with points.', 'poll_id' => 1,  'school' => 'ITE college west', 'image' => 'http://www.siemens-certifications.com/content/0/6/7/1923/5567/1700_IT_COLLEGE_West_logo.jpg'),
                            array('title' => 'Team Innovate', 'description' => 'Challenge 5E (Analysis)\nWe wanted to promote healthy living amongst working adults through encouraging exercise and healthy eating. We used maps and data to increase the accessibility for working adults to make healthy living choices such as walking from home to the nearest MRT station.', 'poll_id' => 1,  'school' => 'Innova Junior College', 'image' => 'https://www.dropbox.com/s/yi5kldqymkusa6t/Team%20Innovate.jpg?dl=1'),

                            array('title' => 'DTX', 'description' => 'Challenge 5H (Application)\nWe have developed an innovative navigation mobile app that allows communities to locate amenities within Woodlands and receive rewards by participating in events.', 'poll_id' => 1,  'school' => 'NYP', 'image' => 'https://www.dropbox.com/s/p2vfmfp11lpoix8/Team_DTX_NYP.PNG?dl=1'),

                            array('title' => 'ALS', 'description' => 'Challenge 6A (Analysis & Aplication)\nHow can we help residents in the community find out more information about our Volunteer Welfare Organisations (VWOs) and encourage them to participate more actively in community involvement programmes?', 'poll_id' => 18,  'school' => 'NYP', 'image' => 'http://mysbm.nyp.edu.sg/ASC/images/nyp-logo-hor-300.jpg'),
                            array('title' => 'The Joggers', 'description' => 'Challenge 6A (Analysis)\nWe mapped out VWOs in the Nee Soon area, allowing people to find out more about them and be more informed about the events they are organizing, thus encouraging participation', 'poll_id' => 1,  'school' => 'Raffles Institution', 'image' => 'https://www.dropbox.com/s/ownwkdlv0imv6f1/Jogger%20rjc%206a.jpeg?dl=1'),

                            array('title' => 'Epsilon', 'description' => 'Challenge 6B (Analysis)\nWe created a comprehensible and easily accessible map that shows the communal spaces in the Nee Soon community, especially for the elderly residents. Our analysis also uncovered a number of underutilised spaces which our personalized map will highlight as places suitable for communal bonding.', 'poll_id' => 1,  'school' => 'National Junior College', 'image' => 'https://www.dropbox.com/s/cu8xpw5fle8ib6f/Team%20Episilon%20USE%20THIS.png?dl=1'),
                            array('title' => 'Team AAA', 'description' => 'Challenge 6B (Analysis)\nWe used ArcGIS together with Google Calendar for the residents to make appointments for the available open space within the GRC. The information collected from the residents can be used for future planning and development purposes.', 'poll_id' => 1,  'school' => 'Republic Polytechnic', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AAA0L9DgbEJejo1kWqA9nnj5a/Analysis%28PolyITE%29/Tean%20AAA.jpg?dl=1'),

                            array('title' => '103 East', 'description' => 'Challenge 6C (Analysis)\nWe assessed wheelchair accessibilty in the Chong Pang area, through the generation of a wheelchair- traversable network dataset.', 'poll_id' => 1,  'school' => 'NUS', 'image' => 'https://www.dropbox.com/s/bmynfopcueo765q/team%20103e.JPG?dl=1'),

                            array('title' => 'Gneiss Guys', 'description' => 'Challenge 7B (Analysis)\nOur project is to analyze data pertaining to the emergency preparedness of residents of Thomson Community fire hazards so that it may be used to derive targeted solutions to benefit the community. ', 'poll_id' => 1,  'school' => 'Raffles Institution', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AAC0XgrxpKzfjbbNSblANgi-a/Analysis%28JC%29/Gneiss%20Guys_RafflesInst.JPG?dl=1'),

                            array('title' => 'Mantis', 'description' => 'Challenge 7C (Application)\nHow well do you know Singapore? We want to encourage citizens to learn more about the different places of interest in Singapore. There are existing blogs, articles and write-ups about these areas, scattered all over the Internet. We aim to unify the information channels into one map where everyone can explore.', 'poll_id' => 1,  'school' => 'Singapore Polytechnic', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AADy5lkVVN3-SjgtIb42MkQfa/Application%28Open%29/Mantis_SP.jpg?dl=1'),
                            array('title' => 'Team Fabulous', 'description' => 'Challenge 7C (Analysis)\nHow can we get people to experience and understand the rich heritage and modern quirks of the Bishan, Toa Payoh and Thomson estates?', 'poll_id' => 1,  'school' => 'Raffles Institution', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AACR-so-hm-L_YdpBpGDVvS4a/Analysis%28JC%29/Team_Fabulous_RafflesInstitute.JPG?dl=1'),

                            array('title' => 'LKZ', 'description' => 'Challenge 8A (Application)\nWe have created an application to make the resident aware of all the events that are organized by Yuhua Community Centre. Our application is convenient and easy to use. We listed all the various categories so that they could just check an available event and find out more detail on the particular event. ', 'poll_id' => 1,  'school' => 'ITE college west', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AAA8-H3aq86U97dgQnG-QCOza/Application%28Open%29/Team_LKZ.jpg?dl=1'),

                            array('title' => 'RGIS', 'description' => 'Challenge 8C (Application & Analysis)\nWe analysed Passion Card data to test if there are any spatial patterns between event types in the community and participant’s place of residence.', 'poll_id' => 1,  'school' => 'SMU', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AADX1575nvAH6wxEZS7DzcLRa/Analysis%28Uni%29/rgis%20smu.jpg?dl=1'),
                            array('title' => 'Team NUS High', 'description' => 'Challenge 8C (Analysis)\nThe objective of our map is to show the spatial pattern of the profiles of the participants living in the different blocks in Yuhua.', 'poll_id' => 1,  'school' => 'NUS HIGH SCHOOL OF MATHEMATICS AND SCIENCE', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AAAuCtetJEw3oGqIGoQTWgg2a/Analysis%28JC%29/NUS%20High%20Team%201%20Group%20Photo.jpg?dl=1'),
                            array('title' => 'Leagues of Republic', 'description' => 'Challenge 8C (Analysis)\nOur objective is to discover the spatial pattern of residents who attended events in the community.', 'poll_id' => 1,  'school' => 'Republic Polytechnic', 'image' => 'http://upload.wikimedia.org/wikipedia/commons/8/80/Republic_Polytechnic_Logo.jpg'),

                            array('title' => 'Team Geonovation', 'description' => 'Challenge 9B (Analysis)\nUnderstanding local traffic conditions', 'poll_id' => 1,  'school' => 'NYP', 'image' => 'http://mysbm.nyp.edu.sg/ASC/images/nyp-logo-hor-300.jpg?dl=1'),

                            array('title' => 'Map Our Lives', 'description' => 'Challenge 9B (Applicaion)\nWe are creating a web application to help the Radin Mas community better understand local traffic conditions. We wish to help reduce the number of drivers parking their vehicles illegally and causing road congestions and inconvenience for bus services in the community.', 'poll_id' => 1,  'school' => 'NYP', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AADACapwMU6PLsBtdfrLc1LBa/Application%28Open%29/Map%20Our%20Lives_NYP.jpg?dl=1'),

                            array('title' => '#TeamKM', 'description' => 'Challenge 9C (Application)\nHow can we use GIS to encourage community bonding?', 'poll_id' => 1,  'school' => 'NYP', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AACVsp0HIQrP8Xc7tAPz22sPa/Application%28Open%29/%23TeamKM_NYP.jpg?dl=1'),

                            array('title' => 'RedDot', 'description' => 'Challenge 9B (Application)\nHow can we use GIS to encourage community bonding?', 'poll_id' => 1,  'school' => 'NYP', 'image' => 'https://www.dropbox.com/sh/hizvbrdj7fo5g3x/AAB1Sogek0Sl3N1KjbwSwDiGa/Application%28Open%29/RedDot_NYP.JPG?dl=1'),


                            array('title' => 'St Nicks 3T', 'description' => 'Secondary school students are often described as having a ‘bottomless pit’ when as an appetite. We would like to investigate if this holds true to our classmates and whether there exist any variations within our class. Our map shows the hunger level of the people in our class. The theme of our map is an ice-cream parlour.  Through a survey, we compiled the frequency of their meals and what their meals comprises of. We used different colours and shape and size of ice-creams to represent the type, amount and frequency of the meals they eat.', 'poll_id' =>1 ,  'school' => 'CHIJ St Nicholas Girls School', 'image' => 'https://www.dropbox.com/s/5c8zvc4ykxwi8x8/StNicks3T_CHIJST.JPG?dl=1'),
                            array('title' => 'Bolsheviks Party', 'description' => 'The objective of our project is to find out whether the MOE assigns teacher by how close they live is affected by what school they are assigned to and whether students choose their school by how close they live. We are finding data by asking our teachers and schoolmates for their street address and putting it up on the application. So far, we have around 50 findings', 'poll_id' =>1 ,  'school' => 'Beatty Secondary School', 'image' => 'https://www.dropbox.com/s/2lwkdflsdteaicc/BolsheviksParty_BeattySec.jpg?dl=1'),
                            array('title' => 'Rice Planters', 'description' => 'For this competition, our objective was to map out and tabulate people living in a particular area and their mode of transportation to school from that area. First of all, we gathered data from our schoolmates, asking them which is the nearest MRT station from their home as an estimation of where they live. After which, we also asked them their mode of transportation to school. In total, there are 58 people who have participated in this survey.As a result, we found out that most people take buses to school and people living nearer to the school mostly walk while people living further either takes MRT, bus or both to school.', 'poll_id' =>1 ,  'school' => 'Beatty Secondary School', 'image' => 'https://www.dropbox.com/s/zhmsk4olbljafcm/RicePlanter_BeattySec.jpg?dl=1'),
                            array('title' => 'The Montfortians', 'description' => 'We are doing this project because we want to show the different selling price of canned drinks at shops that are near our school compound.  This idea came about during a brainstorm session, when we were trying to think of a map that will be useful to our own students.  As many of us live near the school and we would often like to buy a drink from the nearby stalls after school & especially after some sports games, it would be useful for us to know which shops near us offer lower-priced drinks.  We based our data on six drinks that we have chosen – Pokka Japanese Green Tea, Pokka Jasmine Green Tea, Pokka Sport Water Isotonic Drink, Yeo\'s H2O Original, 100 Plus and Yeo\'s Chrysanthemum Tea.  These six were chosen as they have lower Sugar levels (between 6g to 6.5g per 100ml).  As such, our map is titled ‘MSSCHILLED’ which stands for ‘Montfort Secondary School Chilled-Healthy-Inexpensive–Long-Lasting-Economical-Drinks’ We created a Google Form and used that to help us collate the data as the team distributed the blocks to gather our data.  We have indicated the prices of drinks in different stalls by stars. The number 3 represents the shops that offer the drinks at lowest price.  The number 2 represents the shops that offer the same drinks at an average price. The number 1 represents the shops that offer the same drinks at the highest price. We have tried our best to cover all the shops in our school\'s neighbourhood', 'poll_id' =>1 ,  'school' => 'Montfort Secondary School', 'image' => 'https://www.dropbox.com/s/mh2gxio7xiq4unk/The_Montfortians.jpg?dl=1'),
                            array('title' => 'SG Creators', 'description' => 'Our project is about our planet Earth. The objective of this project is to show that we, humans, can do something to save Mother Earth. There is time to make this positive change. The methods we used are similar to a pop up storybook. In the midst of our map creation, we looked up on the various ways to create pop-ups. We hope our map can inspire youths to make a difference', 'poll_id' =>1 ,  'school' => 'Juying Secondary School', 'image' => 'https://www.dropbox.com/s/6y33g0mwqux1m8d/SG%20Creator_Juying.JPG?dl=1'),
                            array('title' => 'Alpha', 'description' => 'Our group aims to promote the popular destinations in Singapore. Before we started on this project, we interviewed tourists about their geographical imagination of the beautiful places in Singapore. To our astonishment, most of them were spoilt for choice and felt that Singapore has too many famous beautiful landmarks. Hence, we decided to do a survey on the places that are worth visiting. We included MRT Stations, bus interchange and some other information which may aid tourists in reaching their destination. We hope that this creative map will amaze everyone.', 'poll_id' =>1 ,  'school' => 'Juying Secondary School', 'image' => 'https://www.dropbox.com/s/wpq31rt1z1b2p59/Alpha_Juying.JPG?dl=1'),
                            array('title' => 'Majestic', 'description' => 'Our group has chosen the topic of transportation for our map. Our map will include all the information required for a traveller in Singapore, whether they are tourists or normal Singaporeans. It will include all the MRT stations, gas stations, ERPs, bus routes, and other related facilities. I think it will be useful for people because they can find the fastest route to their destination.', 'poll_id' =>1 ,  'school' => 'Juying Secondary School', 'image' => 'https://www.dropbox.com/s/bycv1xg2hhiz3hl/Majestic_Juying.JPG?dl=1'),
                            array('title' => 'Punggol Sec', 'description' => 'Places of worship and visitorship', 'poll_id' =>1 ,  'school' => 'Punggol Sec School', 'image' => 'http://swt3.vatitude.com/qql/slot/u365/Abouts%20PSS/Crest/image014.png?dl=1'),
                            array('title' => '3Excellence', 'description' => 'When we set out to create something new, we might as well make it the best in its field and create an impact on people. With this mindset, we took the bold step of breathing life into our map - where it breaks the boundaries of a 2 dimensional piece of paper and morphs into a physical 3 dimensional form. To achieve this, we used the EsriMaps program to print out the Marina Bay Area, and spent an incredible amount of time moulding clay into roads, bridges and buildings. It is a map with amazing textures and details, bringing great delight into people\"s lives. ', 'poll_id' =>1 ,  'school' => 'River Valley High School', 'image' => 'https://www.dropbox.com/s/s176l5axjqud8ay/3Excellence_RiverValleyHigh.jpg?dl=1'),
                            array('title' => 'SWAGling', 'description' => 'This map named \'football fans unite\' is based on the idea of the world cup which took place over the June holidays and also during the first few weeks of July. This map provides a base map for football fans to know where to watch football if they did not subscribe to the channels. We first found out the address of the different community centres and Mcdonalds which telecasts the match live. We also located the Mrt stations to see whether the community centres and Mcdonalds were accessible. Then we inserted the data set into Arcgis to come out with the map. We hope that this map will benefit the football fans so that it will be more convenient for them to locate places in future. If there are any changes in infrastructure between the 4 years, these changes can be done on this map easily.', 'poll_id' =>1 ,  'school' => 'River Valley High School', 'image' => 'https://www.dropbox.com/s/t77itc726afxpwm/SWAGling_RiverValleyHigh.jpeg?dl=1'),
                            array('title' => 'Team 1', 'description' => 'Tourist attractions in Singapore', 'poll_id' =>1 ,  'school' => 'Bukit Panjang Govt High School', 'image' => 'https://www.dropbox.com/s/o35zb2y7ey1cs2x/Team1_BukitPanjangHigh.jpg?dl=1'),


        );

        \Option::insert($options);
    }

}