<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'logo' => 'uploads/contact/logo.png',
            'name_firm' => 'ООО "Природные ресурсы"',
            'slogan' => 'Санитарная и экологическая безопасность в области градостроительной деятельности,охраны труда и эксплуатации действующих объектов.',
            'adress' => 'г. Екатеринбург, ул. Куйбышева, 55, оф. 202',
            'work_time' => 'ПН-ПТ 9:00 - 18:00',
            'tel_work' => '+7 (343) 363-65-63',
            'tel_mob' => '+7 (343) 363-65-63',
            'email' => 'presurseco@mail.ru',
            'main_text' => 'Текст на главной',
        ];
    }
}
