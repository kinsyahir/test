<?php

use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subject new \App\Subject([
        	'subject_title' => 'Harry Potter',
        	'subject_desc' => 'syok baik',
        	'subject_price' => 89,
        	'subject_image' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855690.jpg'
        ]);
        $subject->save();


        $subject new \App\Subject([
        	'subject_title' => 'Harry Potter',
        	'subject_desc' => 'syok baik',
        	'subject_price' => 89,
        	'subject_image' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855690.jpg'
        ]);
        $subject->save();

    
    	$subject new \App\Subject([
        	'subject_title' => 'Harry Potter',
        	'subject_desc' => 'syok baik',
        	'subject_price' => 89,
        	'subject_image' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855690.jpg'
        ]);
        $subject->save();

    
    	$subject new \App\Subject([
        	'subject_title' => 'Harry Potter',
        	'subject_desc' => 'syok baik',
        	'subject_price' => 89,
        	'subject_image' => 'https://cdn.waterstones.com/bookjackets/large/9781/4088/9781408855690.jpg'
        ]);
        $subject->save();
    
    }
}
