<?php

use Illuminate\Database\Seeder;
use App\Models\{
    User,
    Course,
    Wish,
    Enrollment,
    Notification,
    Section,
    Lesson,
    Report,
    Answer,
    Newsletter,
    UserSocial,
    Bookmark,
    CourseCurrency,
    CourseRequirement,
    InstructorCourse,
    Topic,
    Comment,
    Category,
    CourseLevel,
    Currency,
    Language,
    Release,
    Social,
    Status,
    Type,
    Video
};

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->count(30)->create();
        Course::factory()->count(5)->create();
        Wish::factory()->count(20)->create();
        Enrollment::factory()->count(50)->create();
        Notification::factory()->count(50)->create();
        Section::factory()->count(20)->create();
        Lesson::factory()->count(50)->create();
        Report::factory()->count(5000)->create();
        Answer::factory()->count(50)->create();
        Newsletter::factory()->count(50)->create();
        UserSocial::factory()->count(30)->create();
        Bookmark::factory()->count(50)->create();
        CourseCurrency::factory()->count(20)->create();
        CourseRequirement::factory()->count(30)->create();
        InstructorCourse::factory()->count(30)->create();
        Topic::factory()->count(10)->create();
        Comment::factory()->count(50)->create();
        Category::factory()->count(50)->create();
        CourseLevel::factory()->count(50)->create();
        Currency::factory()->count(50)->create();
        Language::factory()->count(50)->create();
        Release::factory()->count(50)->create();
        Social::factory()->count(50)->create();
        Status::factory()->count(50)->create();
        Type::factory()->count(50)->create();
        Video::factory()->count(50)->create();
    }
}