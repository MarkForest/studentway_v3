<?php
/**
 * Created by PhpStorm.
 * User: march
 * Date: 24.10.2018
 * Time: 13:07
 */

namespace app\controllers;


use app\models\tour\TourAboutUniversityBlock;
use app\models\tour\TourAboutUsBlock;
use app\models\tour\TourContactBlock;
use app\models\tour\TourFirstBlock;
use app\models\tour\TourFooterBlock;
use app\models\tour\TourHaveQuestionsBlock;
use app\models\tour\TourInfoBlock;
use app\models\tour\TourOurServicesBlock;
use app\models\tour\TourPricesBlock;
use app\models\tour\TourQuestionsBlock;
use app\models\tour\TourReviewBlock;
use Yii;
use app\models\tour\TourHead;
use app\models\tour\TourHeadMenus;
use yii\web\Controller;

class TourController extends Controller
{
    public $layout = '/tours';

    /**
     * @param int $id
     * @return string
     */
    public function actionIndex($id=1){
        //head
        $tour_head=TourHead::findOne(['id'=>$id]);
        $tour_head_menus=TourHeadMenus::find(['tour_head_id'=>$id])->all();
        //first block
        $tour_first_block=TourFirstBlock::findOne(['id'=>$id]);
        //info block
        $tour_info_block=TourInfoBlock::findOne(['id'=>$id]);
        //about university
        $tour_about_university_block = TourAboutUniversityBlock::findOne(['id'=>$id]);
        //our services
        $tour_our_services_block = TourOurServicesBlock::findOne(['id'=>$id]);
        //about us
        $tour_about_us_block = TourAboutUsBlock::findOne(['id'=>$id]);
        //questions
        $tour_questions_block = TourQuestionsBlock::findOne(['id'=>$id]);
        //have questions
        $tour_have_questions_block = TourHaveQuestionsBlock::findOne(['id'=>$id]);
        //review
        $tour_review_block = TourReviewBlock::findOne(['id'=>$id]);
        //prices
        $tour_prices_block = TourPricesBlock::findOne(['id'=>$id]);
        //contact
        $tour_contact_block = TourContactBlock::findOne(['id'=>$id]);
        //footer
        $tour_footer_block = TourFooterBlock::findOne(['id'=>$id]);
        $this->view->params['footer'] = $tour_footer_block;
        return $this->render('index', [
            'tour_head'=>$tour_head,
            'tour_head_menus'=>$tour_head_menus,
            'tour_first_block'=>$tour_first_block,
            'tour_info_block'=>$tour_info_block,
            'tour_about_university_block'=>$tour_about_university_block,
            'tour_our_services_block'=>$tour_our_services_block,
            'tour_about_us_block'=>$tour_about_us_block,
            'tour_questions_block'=>$tour_questions_block,
            'tour_have_questions_block'=>$tour_have_questions_block,
            'tour_review_block'=>$tour_review_block,
            'tour_prices_block'=>$tour_prices_block,
            'tour_contact_block'=>$tour_contact_block,
            'tour_footer_block'=>$tour_footer_block,
        ]);
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