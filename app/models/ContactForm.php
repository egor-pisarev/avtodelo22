<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $phone;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name','phone'], 'required'],
            // email has to be a valid email address
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom(['site@avtodelo22.ru' => 'robot'])
                ->setSubject('Запрос на диагностику')
                ->setTextBody('С сайта пришел запрос на диагностику от '.$this->name.' Телефон: '.$this->phone)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}
