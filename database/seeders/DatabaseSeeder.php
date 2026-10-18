<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Project::query()->delete();

        $projects = [
            [
                'title_uz' => 'Tunika-Shop - Onlayn Savdo Platformasi',
                'title_en' => 'Tunika-Shop - E-commerce Platform',
                'description_uz' => 'Foydalanuvchilarga qulay va tezkor xarid qilish imkonini beruvchi zamonaviy onlayn do\'kon. Platforma tovarlarni boshqarish, mahsulotlar katalogi va xaridorlar uchun...',
                'description_en' => 'Modern online store providing users with convenient and fast shopping experience. Managing goods, product catalog...',
                'technologies' => 'PHP, Laravel, MySQL, JavaScript, Bootstrap',
                'project_url' => '#',
                'image' => null,
            ],
            [
                'title_uz' => 'Catalog-Z - Zamonaviy Media Galereya Platformasi',
                'title_en' => 'Catalog-Z - Modern Media Gallery Platform',
                'description_uz' => 'Foydalanuvchilarga sifatli foto va video kontentlarni qulay tarzda ko\'rib chiqish imkonini beruvchi media platforma. Loyiha yuqori unumdorlikka ega bo\'lib,...',
                'description_en' => 'Media platform allowing users to conveniently view high quality photo and video content...',
                'technologies' => 'PHP, Laravel, Bootstrap 5, SQLite, Docker, Render Cloud',
                'project_url' => '#',
                'image' => null,
            ],
            [
                'title_uz' => 'Qora-Ko\'l O\'quv Markazi',
                'title_en' => 'Qora-Ko\'l Education Center',
                'description_uz' => 'O\'quv markazi faoliyatini raqamlashtirish, kurslar haqida ma\'lumot berish va o\'quvchilarni onlayn ro\'yxatdan o\'tkazish uchun yaratilgan zamonaviy veb-platforma....',
                'description_en' => 'Modern web platform created to digitize educational center activities and online registration...',
                'technologies' => 'HTML, CSS, JavaScript, GitHub Pages',
                'project_url' => '#',
                'image' => null,
            ],
            [
                'title_uz' => 'Texno-Bozor - Texno Market',
                'title_en' => 'Texno-Bozor - Tech Market',
                'description_uz' => 'Zamonaviy maishiy texnika, smartfonlar va gadjetlar savdosi uchun mo\'ljallangan internet-do\'kon loyihasi. Unda mahsulotlarni filtrlash, savatchaga qo\'shish va...',
                'description_en' => 'Online store project for household appliances, smartphones and gadgets sales...',
                'technologies' => 'HTML, CSS, JavaScript, React',
                'project_url' => '#',
                'image' => null,
            ],
            [
                'title_uz' => 'Bog_db - Aqlli Bog\' Boshqaruv Tizimi',
                'title_en' => 'Bog_db - Smart Garden Management System',
                'description_uz' => 'Bog\' hududlarini boshqarish, ekinlar va resurslarni tizimli nazorat qilish uchun yaratilgan backend va ma\'lumotlar bazasi loyihasi. Loyiha to\'liq optimallashtirilgan bo\'lib,...',
                'description_en' => 'Backend and database project created for systematic management of garden areas and resources...',
                'technologies' => 'PHP, MySQL, HTML, CSS, GitHub Pages, Custom Domain',
                'project_url' => '#',
                'image' => null,
            ],
            [
                'title_uz' => 'VueCinema',
                'title_en' => 'VueCinema',
                'description_uz' => 'Onlayn kinoteatr va filmlar platformasining veb-talqini. Foydalanuvchilar eng so\'nggi filmlarni qidirishi, janrlar bo\'yicha saralashi va ular haqida batafsil ma\'lumotlarni...',
                'description_en' => 'Web version of online cinema and movie platform. Users can search latest movies...',
                'technologies' => 'Vue.js, JavaScript, Tailwind CSS, REST API',
                'project_url' => '#',
                'image' => null,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}