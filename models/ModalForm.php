<?php
/**
 * Created by PhpStorm.
 * User: vladimir
 * Date: 16.11.2018
 * Time: 18:10
 */

namespace app\models;


use yii\base\Model;

class ModalForm extends Model
{
    public $name;
    public $phone_number;
    public function rules()
    {
        return [
            [['name', 'phone_number'], 'required'],
            ['name', 'string'],
            ['phone_number', 'number']
        ];
    }
}