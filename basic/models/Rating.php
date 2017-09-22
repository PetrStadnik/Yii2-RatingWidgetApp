<?php
namespace app\models;


use Yii;
use yii\base\Model;
use yii\bootstrap\ActiveForm;
//use kartik\widgets\StarRating;
use kartik\rating\StarRating;
use yii\db\ActiveRecord;
 



class Rating extends ActiveRecord 
{ 
    
    public $prumer;

    //pravidla pro odeslání formuláře (hodnocení)
      public function rules()
    {
           
        return [
            [['rating'], 'required']
            
        ];
    }
   
}   