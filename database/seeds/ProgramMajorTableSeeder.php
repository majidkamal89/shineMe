<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramMajorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $programMajorArray = array(
            [
                'heading_1' => 'discover your future majors',
                'heading_2' => 'with our orientation program',
                'step_1' => 'orientation session by experts',
                'step_2' => 'orientation materials',
                'step_3' => 'certificates of participation',
                'button_text' => 'Join Us </br> Now',
                'type' => 0,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'heading_1' => 'discover your future majors',
                'heading_2' => 'SELECT UP TO 2 MAJORS',
                'text' => 'Undergo 50 minutes in-class orientation session by a field expert for each major with description of the courses taken and be able to have a Q&A session with the expert.',
                'text_2' => 'Be able to have a Q&A session with the expert.',
                'step_1' => 'BUSINESS',
                'step_2' => 'MEDECINE',
                'button_text' => 'Discover <br> Now',
                'type' => 1,
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]
        );
        foreach($programMajorArray as $key => $data) {
            $major_id = DB::table('program_majors')->insertGetId($data);
            if($data['type'] == 0){
                $major_type0 = array(
                    [
                        'program_id' => $major_id,
                        'heading_1' => 'Orientation session by experts',
                        'heading_2' => 'Majors including',
                        'description' => '
                        <ul class="k-categories servicein-desc">
                            <li>Financial Accounting:<p>Study of the preperationg of financial reports.</p></li>
                            <li>Principles of Marketing: <p> Introduction to values and difficulties of marketing goods and services.</p></li>
                            <li>Operations & Production Management: <p>Understanding of strategic decisions for operating a company in manufacturing
                                    or service sectors.</p></li>
                        </ul>',
                        'title_1' => '1. Financial Accounting',
                        'content_1' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                        translation by H. Rackham.',
                        'title_2' => '2. Principles Of Marketing',
                        'content_2' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                    Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                translation by H. Rackham.',
                        'title_3' => '3. Operations & Production Management',
                        'content_3' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                    translation by H. Rackham.',
                        'banner_image' => 'front_end/img/testim-baner.jpg',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'program_id' => $major_id,
                        'heading_1' => 'Orientation materials',
                        'heading_2' => 'Majors including',
                        'description' => '
                        <ul class="k-categories servicein-desc">
                            <li>Zoology:<p>Study of the vertebrates with regard to their systematics, ecology, and behavior.</p></li>
                            <li>Genetics: <p> Study of the organization, expression and evolution of hereditary elements.</p></li>
                            <li>Human Gross Anatomy: <p>Introduction to anatomic and medical terminology, form, structure and function.</p></li>
                            <li>Medical Genetics:<p>Introduction to the fundamental concepts in human genetics.</p></li>
                        </ul>',
                        'title_1' => '1. Financial Accounting',
                        'content_1' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                        translation by H. Rackham.',
                        'title_2' => '2. Principles Of Marketing',
                        'content_2' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                    Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                translation by H. Rackham.',
                        'title_3' => '3. Operations & Production Management',
                        'content_3' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                    translation by H. Rackham.',
                        'banner_image' => 'front_end/img/services4.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'program_id' => $major_id,
                        'heading_1' => 'Certificates of participation',
                        'heading_2' => 'Majors including',
                        'description' => '
                        <ul class="k-categories servicein-desc">
                            <li>Zoology:<p>Study of the vertebrates with regard to their systematics, ecology, and behavior.</p></li>
                            <li>Genetics: <p> Study of the organization, expression and evolution of hereditary elements.</p></li>
                            <li>Human Gross Anatomy: <p>Introduction to anatomic and medical terminology, form, structure and function.</p></li>
                            <li>Medical Genetics:<p>Introduction to the fundamental concepts in human genetics.</p></li>
                        </ul>',
                        'title_1' => '1. Financial Accounting',
                        'content_1' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                        translation by H. Rackham.',
                        'title_2' => '2. Principles Of Marketing',
                        'content_2' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                    Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                translation by H. Rackham.',
                        'title_3' => '3. Operations & Production Management',
                        'content_3' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                    translation by H. Rackham.',
                        'banner_image' => 'front_end/img/services4.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ]
                );
                foreach($major_type0 as $item_0){
                    DB::table('program_major_lists')->insert($item_0);
                }
            } else {
                $major_type1 = array(
                    [
                        'program_id' => $major_id,
                        'heading_1' => 'Bussiness',
                        'heading_2' => 'Majors including',
                        'description' => '
                        <ul class="k-categories servicein-desc">
                            <li>Financial Accounting:<p>Study of the preperationg of financial reports.</p></li>
                            <li>Principles of Marketing: <p> Introduction to values and difficulties of marketing goods and services.</p></li>
                            <li>Operations & Production Management: <p>Understanding of strategic decisions for operating a company in manufacturing
                                    or service sectors.</p></li>
                        </ul>',
                        'title_1' => '1. Financial Accounting',
                        'content_1' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                        translation by H. Rackham.',
                        'title_2' => '2. Principles Of Marketing',
                        'content_2' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                    Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                translation by H. Rackham.',
                        'title_3' => '3. Operations & Production Management',
                        'content_3' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                    translation by H. Rackham.',
                        'banner_image' => 'front_end/img/testim-baner.jpg',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ],
                    [
                        'program_id' => $major_id,
                        'heading_1' => 'Medicine',
                        'heading_2' => 'Majors including',
                        'description' => '
                        <ul class="k-categories servicein-desc">
                            <li>Zoology:<p>Study of the vertebrates with regard to their systematics, ecology, and behavior.</p></li>
                            <li>Genetics: <p> Study of the organization, expression and evolution of hereditary elements.</p></li>
                            <li>Human Gross Anatomy: <p>Introduction to anatomic and medical terminology, form, structure and function.</p></li>
                            <li>Medical Genetics:<p>Introduction to the fundamental concepts in human genetics.</p></li>
                        </ul>',
                        'title_1' => '1. Financial Accounting',
                        'content_1' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                        translation by H. Rackham.',
                        'title_2' => '2. Principles Of Marketing',
                        'content_2' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem
                    Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                    <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                translation by H. Rackham.',
                        'title_3' => '3. Operations & Production Management',
                        'content_3' => '
                        Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                        <br/>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914
                    translation by H. Rackham.',
                        'banner_image' => 'front_end/img/services4.png',
                        'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                        'updated_at' => DB::raw('CURRENT_TIMESTAMP')
                    ]
                );
                foreach($major_type1 as $item_1){
                    DB::table('program_major_lists')->insert($item_1);
                }
            }
        }
    }
}
