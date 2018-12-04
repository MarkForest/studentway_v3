<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 24.10.2018
 * Time: 13:07
 */

namespace app\controllers;


use app\models\ModalForm;
use yii\web\Controller;

class TourController extends Controller
{
    public $layout = 'tours';
    public function actionIndex(){
        return $this->render('index',[]);
    }
    public function actionModalForm()
    {
        $form = new ModalForm();
        return $this->render('form',compact('form'));
    }

    public function actionVenskiyUniversitet(){
        return $this->render('venskiy-universitet',[]);
    }
    public function actionVenskiyTechnicheskiyUniversitet(){
        return $this->render('venskiy-technicheskiy-universitet',[]);
    }

    public function actionVenskiiUniversitetEkonomikiIBiznesa(){
        return $this->render('venskii-universitet-ekonomiki-i-biznesa',[]);
    }

    public function actionVenskijAgrarnyijUniversitet(){
        return $this->render('venskij-agrarnyij-universitet',[]);
    }

    public function actionVenskyyMedytsynskyyUnyversytet(){
        return $this->render('venskyy-medytsynskyy-unyversytet',[]);
    }

    public function actionVidenskijVeterinarnijUniversite(){
        return $this->render('videnskij-veterinarnij-universite',[]);
    }

    public function actionVenskiyUniversitetPrikladnyNauk(){
        return $this->render('venskiy-universitet-prikladnyh-nauk',[]);
    }

    public function actionCoursiNemeckogoVAvstii(){
        return $this->render('coursi-nemeckogo-v-avstii',[]);
    }
}