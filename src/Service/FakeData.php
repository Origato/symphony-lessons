<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 22.10.18
 * Time: 15:32
 */

namespace App\Service;

use App\Model\{
    HomePage,
    ContactsPage
};

final class FakeData implements PageServiceInterface
{
    public function getData(): HomePage
    {
        $faker = \Faker\Factory::create();
        return new HomePage(
            'News Portal',
            $faker->words(20, true),
            'Contacts',
            'Suggest news'
        );
    }

    public function getContacts(): ContactsPage
    {
        $faker = \Faker\Factory::create();
        return new ContactsPage(
            $faker->firstNameMale,
            $faker->freeEmail,
            $faker->text(400),
            'Отправить'
        );
    }
}