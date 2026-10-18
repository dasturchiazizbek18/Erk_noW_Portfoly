<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();

        Project::create([
            'title' => 'Tunika-Shop - Onlayn Savdo Platformasi',
            'description' => 'Foydalanuvchilarga qulay va tezkor xarid qilish imkonini beruvchi zamonaviy onlayn do\'kon. Platforma tovarlarni boshqarish, mahsulotlar katalogi va xaridorlar uchun...',
            'tags' => 'PHP, Laravel, MySQL, JavaScript, Bootstrap',
            'link' => '#',
        ]);

        Project::create([
            'title' => 'Catalog-Z - Zamonaviy Media Galereya Platformasi',
            'description' => 'Foydalanuvchilarga sifatli foto va video kontentlarni qulay tarzda ko\'rib chiqish imkonini beruvchi media platforma. Loyiha yuqori unumdorlikka ega bo\'lib,...',
            'tags' => 'PHP, Laravel, Bootstrap 5, SQLite, Docker, Render Cloud',
            'link' => '#',
        ]);

        Project::create([
            'title' => 'Qora-Ko\'l O\'quv Markazi',
            'description' => 'O\'quv markazi faoliyatini raqamlashtirish, kurslar haqida ma\'lumot berish va o\'quvchilarni onlayn ro\'yxatdan o\'tkazish uchun yaratilgan zamonaviy veb-platforma....',
            'tags' => 'HTML, CSS, JavaScript, GitHub Pages',
            'link' => '#',
        ]);

        Project::create([
            'title' => 'Texno-Bozor - Texno Market',
            'description' => 'Zamonaviy maishiy texnika, smartfonlar va gadjetlar savdosi uchun mo\'ljallangan internet-do\'kon loyihasi. Unda mahsulotlarni filtrlash, savatchaga qo\'shish va...',
            'tags' => 'HTML, CSS, JavaScript, React',
            'link' => '#',
        ]);

        Project::create([
            'title' => 'Bog_db - Aqlli Bog\' Boshqaruv Tizimi',
            'description' => 'Bog\' hududlarini boshqarish, ekinlar va resurslarni tizimli nazorat qilish uchun yaratilgan backend va ma\'lumotlar bazasi loyihasi. Loyiha to\'liq optimallashtirilgan bo\'lib,...',
            'tags' => 'PHP, MySQL, HTML, CSS, GitHub Pages, Custom Domain',
            'link' => '#',
        ]);

        Project::create([
            'title' => 'VueCinema',
            'description' => 'Onlayn kinoteatr va filmlar platformasining veb-talqini. Foydalanuvchilar eng so\'nggi filmlarni qidirishi, janrlar bo\'yicha saralashi va ular haqida batafsil ma\'lumotlarni...',
            'tags' => 'Vue.js, JavaScript, Tailwind CSS, REST API',
            'link' => '#',
        ]);
    }
}