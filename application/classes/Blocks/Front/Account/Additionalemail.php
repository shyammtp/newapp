<?php defined('SYSPATH') OR die('No direct script access.');

class Blocks_Front_Account_Additionalemail extends Blocks_Front_Abstract
{
    public function getEmails()
    {
        return App::model('user/email')->setUserId($this->getUsers()->getUserId())->getEmails();
    }

}
