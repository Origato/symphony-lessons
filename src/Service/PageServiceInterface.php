<?php
/**
 * Created by PhpStorm.
 * User: shiro
 * Date: 22.10.18
 * Time: 15:50
 */

namespace App\Service;

use App\Model\HomePage;
use App\Model\ContactsPage;

interface PageServiceInterface
{
     public function getData(): HomePage;

     public function getContacts(): ContactsPage;
}