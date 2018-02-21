<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArray = array(
            [
                'page_name' => 'Home',
                'slug' => '/',
                'page_sequence' => 0,
                'file_name' => 'index',
                'future_major_program' => 1,
                'meta_description' => 'Share text and photos with your friends and have fun',
                'meta_keywords' => 'sharing, sharing text, text, sharing photo, photo',
                'meta_property' => 'Shine me',
                'status' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'page_name' => 'About Us',
                'slug' => 'about-us',
                'page_sequence' => 1,
                'file_name' => 'about-us',
                'title_1' => 'We help students choose the right major through our Bridge of Organized Knowledge Program',
                'content_1' => 'SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
</br></br> Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions .',
                'title_2' => 'WHO WE ARE',
                'content_2' => '
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </br></br>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.
                </br></br>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure.
                </br></br>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil).</p>',
                'title_3' => 'Mission',
                'content_3' => '
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </br></br>t has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages...
',
                'title_4' => 'Vission',
                'content_4' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </br></br>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages...
',
                'meta_description' => 'Share text and photos with your friends and have fun',
                'meta_keywords' => 'sharing, sharing text, text, sharing photo, photo',
                'meta_property' => 'About Us',
                'status' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'page_name' => 'General Message',
                'slug' => 'general-message',
                'page_sequence' => 2,
                'file_name' => 'general-message',
                'future_major' => 1,
                'title_1' => 'General Manager Word',
                'content_1' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.
                </br></br>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
                </br></br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, Content here.',
                'title_2' => 'WHY SHOULD YOU CARE ABOUT CHOOSING THE RIGHT MAJOR?',
                'content_2' => 'Education is the foundation of a shiny and prosperous future; whether individually or as part of a growing community. Based on the national conventional wisdom that the future belongs to educated person, parents tent to attempt the impossible to help their children attain higher education. If you ask the youth and their parents about their choices, you wil encounter complete loss and lack of direction. Rare are the answers that are clear and focused.
                </br></br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.
                </br></br>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia...',
                'meta_description' => 'Share text and photos with your friends and have fun',
                'meta_keywords' => 'sharing, sharing text, text, sharing photo, photo',
                'meta_property' => 'General Message',
                'status' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'page_name' => 'Our Team',
                'slug' => 'our-team',
                'page_sequence' => 3,
                'file_name' => 'our-team',
                'content_1' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </br></br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.
                </br></br>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                ',
                'title_2' => 'Shine Team',
                'content_2' => 'As a SHINE team, our daily journey of life involves listening to our youth, their parents and teachers about their anxiousness and complaints resulting from the following:
                <ul class="our-team-ul">
                    <li>All parents want to try their best to help their children achieve the best future possible.</li>
                    <li>Most of our students do not know what to major in.
                        Most of our students and their families wait till the last minute to start thinking about their future.</li>
                    <li>Most of the carer counseling and university open days do not provide adequate and customized orientation for the students. Also, most orientations are not conducted by experts and do not involve explaining all the courses within the major.
                    </li>
                    <li>Most students lack the required skills to venture into a new life stage, such as: leadership skills,communication skills, financial skills,
                        and IT skills.</li>

                </ul>',

                'meta_description' => 'Share text and photos with your friends and have fun',
                'meta_keywords' => 'sharing, sharing text, text, sharing photo, photo',
                'meta_property' => 'Our Team',
                'status' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'page_name' => 'Our Services',
                'slug' => 'services',
                'page_sequence' => 4,
                'file_name' => 'services',
                'meta_description' => 'Share text and photos with your friends and have fun',
                'meta_keywords' => 'sharing, sharing text, text, sharing photo, photo',
                'meta_property' => 'Our Services',
                'status' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'page_name' => 'News & Events',
                'slug' => 'news-events',
                'page_sequence' => 5,
                'file_name' => 'news-events',
                'content_1' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                </br></br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.',
                'meta_description' => 'Share text and photos with your friends and have fun',
                'meta_keywords' => 'sharing, sharing text, text, sharing photo, photo',
                'meta_property' => 'News & Events',
                'status' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'page_name' => 'Contact US',
                'slug' => 'contact-us',
                'page_sequence' => 6,
                'file_name' => 'contact-us',
                'title_1' => 'LOCATION',
                'content_1' => 'Kesserwan, Lebanon',
                'title_2' => 'CALL US',
                'content_2' => '+961 71 092 611  |  +961 71 092 611',
                'title_3' => 'MAIL US',
                'content_3' => 'info@shinemideast.com',
                'title_4' => 'VISIT US',
                'content_4' => 'http://shinemideast.com',
                'company_address' => 'Lebanon, Balouneh J5 Str. Angelina Bld.',
                'contact_us_form' => 1,
                'meta_description' => 'Share text and photos with your friends and have fun',
                'meta_keywords' => 'sharing, sharing text, text, sharing photo, photo',
                'meta_property' => 'Contact US',
                'status' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
        );

        foreach($dataArray as $key => $data) {
            $result = DB::table('pages')->insertGetId($data);

            if($data['page_sequence'] == 0) {
                $homeSliderArray = array(
                    [
                        'page_id' => $result,
                        'heading_1' => 'right major',
                        'heading_2' => 'choice for you',
                        'text' => 'It Provides answers to the schools, teachers, students and their <br/> parents on how to face various educational challenges..',
                        'image' => 'front_end/img/home-banner.jpg',
                        'type' => 0,
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'right major',
                        'heading_2' => 'choice for you',
                        'text' => 'It Provides answers to the schools, teachers, students and their <br/> parents on how to face various educational challenges..',
                        'image' => 'front_end/img/2.jpg',
                        'type' => 0,
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'right major',
                        'heading_2' => 'choice for you',
                        'text' => 'It Provides answers to the schools, teachers, students and their <br/> parents on how to face various educational challenges..',
                        'image' => 'front_end/img/3.jpg',
                        'type' => 0,
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ]
                );
                foreach($homeSliderArray as $slider){
                    DB::table('sliders')->insert($slider);
                }
            }
            if($data['page_sequence'] == 3) {
                $teamSliderArray = array(
                    [
                        'page_id' => $result,
                        'heading_1' => 'Member Name Goes Here',
                        'image' => 'front_end/img/team_1.jpg',
                        'type' => 1,
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'Member Name Goes Here',
                        'image' => 'front_end/img/team_2.jpg',
                        'type' => 1,
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'Member Name Goes Here',
                        'image' => 'front_end/img/team_3.jpg',
                        'type' => 1,
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'Member Name Goes Here',
                        'image' => 'front_end/img/team_4.jpg',
                        'type' => 1,
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'Member Name Goes Here',
                        'image' => 'front_end/img/team_5.jpg',
                        'type' => 1,
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ]
                );
                foreach($teamSliderArray as $teamSlider){
                    DB::table('sliders')->insert($teamSlider);
                }
            }

            if($data['page_sequence'] == 4){
                $service_array = array(
                    [
                        'page_id' => $result,
                        'heading_1' => 'Student Orientation',
                        'heading_2' => 'Bridge of Organized Knowledge (B.O.O.K)',
                        'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.
                        </br></br>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
                        ',
                        'detail_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </br></br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </br></br>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.
                        </br></br>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock',
                        'banner_image' => 'front_end/img/testim-baner.jpg',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'Student Orientation & INCUBATION',
                        'heading_2' => 'Bridge of Organized Knowledge (B.O.O.K)',
                        'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.
                        </br></br>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
                        ',
                        'detail_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </br></br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </br></br>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.
                        </br></br>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock',
                        'banner_image' => 'front_end/img/services2.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'LIFE SKILLS',
                        'heading_2' => 'Bridge of Organized Knowledge (B.O.O.K)',
                        'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.
                        </br></br>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
                        ',
                        'detail_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </br></br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </br></br>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.
                        </br></br>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock',
                        'banner_image' => 'front_end/img/testim-baner.jpg',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading_1' => 'TRAINING',
                        'heading_2' => 'Bridge of Organized Knowledge (B.O.O.K)',
                        'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.
                        </br></br>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.
                        ',
                        'detail_description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </br></br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </br></br>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.
                        </br></br>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock',
                        'banner_image' => 'front_end/img/services4.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ]
                );
                foreach($service_array as $service){
                    DB::table('services')->insert($service);
                }
            }

            if($data['page_sequence'] == 5){
                $newsArray = array(
                    [
                        'page_id' => $result,
                        'heading' => 'Title of the News Goes Here',
                        'description' => 'SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
                        </br>Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
                        </br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                        'detail_description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.
                        </br>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </br>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                        </br>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
                        ',
                        'banner_image' => 'front_end/img/news-left-img.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading' => 'Title of the News Goes Here',
                        'description' => 'SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
                        </br>Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
                        </br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                        'detail_description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.
                        </br>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </br>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                        </br>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
                        ',
                        'banner_image' => 'front_end/img/news-left-img.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading' => 'Title of the News Goes Here',
                        'description' => 'SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
                        </br>Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
                        </br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                        'detail_description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.
                        </br>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </br>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                        </br>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
                        ',
                        'banner_image' => 'front_end/img/news-left-img.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'page_id' => $result,
                        'heading' => 'Title of the News Goes Here',
                        'description' => 'SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
                        </br>Our main goal is to help students choose the right major through our Bridge of Organized Knowledge (B.O.O.K) program, and to become your partners in total education solutions SHINE ME is a specialized educational consulting institution established in 2017. It provides answers to the schools, teachers, students and their parents on how to face various educational challenges.
                        </br>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </br>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.',
                        'detail_description' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        </br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.
                        </br>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.
                        </br>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                        </br>"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.
                        </br>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
                        ',
                        'banner_image' => 'front_end/img/news-left-img.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ]
                );
                foreach($newsArray as $news){
                    DB::table('news_events')->insert($news);
                }

            }
        }
    }
}
