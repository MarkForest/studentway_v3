<?php
use app\models\IFourthListPhoto;
use app\models\ISeventhListPhoto;
use app\models\ISixthListPhoto;
use app\models\IThirdListPhoto;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Admin|Images'
?>


<div class="container" style="padding-top: 100px">
    <!--    Первый блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Главная</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <h2 class="page-header">
                        <i class="icon-arrow-down-circle"> Задний фон</i>
                    </h2>
                </div>
<!--                --><?php //foreach($home_list as $list):?>
<!--                    <div class="col-md-3">-->
<!--                        <div class="thumbnail text-center">-->
<!--                            <img class="img-responsive" src="/institute/images/--><?//= $list->photo ?><!--" alt="Photo">-->
<!--                            <br>-->
<!--                            --><?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list->id,'t'=>'home','reg'=>$reg]]) ?>
<!--                            --><?//= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
<!--                            <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>-->
<!--                            --><?php //ActiveForm::end() ?>
<!--                        </div>-->
<!--                    </div>-->
<!--                --><?php //endforeach?>
            </div>
        </div>
    </div>
    <!--    Второй блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Второй блок</h2>
            </div>
            <div class="panel-body">
                <div class="col-md-3">
                    <div class="thumbnail text-center">
<!--                        <img class="img-responsive" src="/institute/images/--><?//= $second->photo ?><!--" alt="photo">-->
                        <br>
<!--                        --><?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$second->id,'t'=>'second','reg'=>$reg]]) ?>
<!--                        --><?//= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
<!--                        <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>-->
<!--                        --><?php //ActiveForm::end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    Третий блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Третий блок</h2>
            </div>
            <div class="panel-body">
<!--                --><?php //foreach($third_list as $list):?>
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                    <h2 class="page-header">-->
<!--                        <i class="icon-arrow-down-circle"> --><?//=$list->header_ru?><!--</i>-->
<!--                    </h2>-->
<!--                        </div>-->
<!--                    --><?php //foreach(IThirdListPhoto::find()->where(['iThird_list_id'=>$list->id])->all() as $list_photo):?>
<!--                        <div class="col-md-3">-->
<!--                            <div class="thumbnail text-center">-->
<!--                                <img class="img-responsive" src="/institute/images/--><?//= $list_photo->photo ?><!--" alt="photo">-->
<!--                                <br>-->
<!--                                --><?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list_photo->id,'t'=>'third','reg'=>$reg]]) ?>
<!--                                --><?//= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
<!--                                <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>-->
<!--                                --><?php //ActiveForm::end() ?>
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //endforeach?>
<!--                    </div>-->
<!--                --><?php //endforeach?>
            </div>
        </div>
    </div>

    <!--    Четвертый блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Четвертый блок</h2>
            </div>
            <div class="panel-body">
<!--                --><?php //foreach($fourth_list as $list):?>
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <h2 class="page-header">-->
<!--                                <i class="icon-arrow-down-circle"> --><?//=$list->title_ru?><!--</i>-->
<!--                            </h2>-->
<!--                        </div>-->
<!--                        --><?php //foreach(IFourthListPhoto::find()->where(['iFourth_list_id'=>$list->id])->all() as $list_photo):?>
<!--                            <div class="col-md-3">-->
<!--                                <div class="thumbnail text-center">-->
<!--                                    <img class="img-responsive" src="/institute/images/--><?//= $list_photo->photo ?><!--" alt="photo">-->
<!--                                    <br>-->
<!--                                    --><?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list_photo->id,'t'=>'fourth','reg'=>$reg]]) ?>
<!--                                    --><?//= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
<!--                                    <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>-->
<!--                                    --><?php //ActiveForm::end() ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //endforeach?>
<!--                    </div>-->
<!--                --><?php //endforeach?>
            </div>
        </div>
    </div>

    <!--    Шестой блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Шестой блок</h2>
            </div>
            <div class="panel-body">
<!--                --><?php //foreach($sixth_list as $list):?>
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <h2 class="page-header">-->
<!--                                <i class="icon-arrow-down-circle"> --><?//=$list->header_ru?><!--</i>-->
<!--                            </h2>-->
<!--                        </div>-->
<!--                        --><?php //foreach(ISixthListPhoto::find()->where(['iSixth_list_id'=>$list->id])->all() as $list_photo):?>
<!--                            <div class="col-md-3">-->
<!--                                <div class="thumbnail text-center">-->
<!--                                    <img class="img-responsive" src="/institute/images/--><?//= $list_photo->photo ?><!--" alt="photo">-->
<!--                                    <br>-->
<!--                                    --><?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list_photo->id,'t'=>'sixth','reg'=>$reg]]) ?>
<!--                                    --><?//= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
<!--                                    <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>-->
<!--                                    --><?php //ActiveForm::end() ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //endforeach?>
<!--                    </div>-->
<!--                --><?php //endforeach?>
            </div>
        </div>
    </div>


    <!--    Седьмой блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Седьмой блок</h2>
            </div>
            <div class="panel-body">
<!--                --><?php //foreach($seventh_list as $list):?>
<!--                    <div class="row">-->
<!--                        <div class="col-md-12">-->
<!--                            <h2 class="page-header">-->
<!--                                <i class="icon-arrow-down-circle"> --><?//=$list->name_ru?><!--</i>-->
<!--                            </h2>-->
<!--                        </div>-->
<!--                        --><?php //foreach(ISeventhListPhoto::find()->where(['iSeventh_list_id'=>$list->id])->all() as $list_photo):?>
<!--                            <div class="col-md-3">-->
<!--                                <div class="thumbnail text-center">-->
<!--                                    <img class="img-responsive" src="/institute/images/--><?//= $list_photo->photo ?><!--" alt="photo">-->
<!--                                    <br>-->
<!--                                    --><?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$list_photo->id,'t'=>'seventh','reg'=>$reg]]) ?>
<!--                                    --><?//= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
<!--                                    <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>-->
<!--                                    --><?php //ActiveForm::end() ?>
<!--                                </div>-->
<!--                            </div>-->
<!--                        --><?php //endforeach?>
<!--                    </div>-->
<!--                --><?php //endforeach?>
            </div>
        </div>
    </div>

    <!--    Восьмой блок-->
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2>Восьмой блок</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="page-header">
                            <i class="icon-arrow-down-circle"> Задний фон</i>
                        </h2>
                    </div>
                    <div class="col-md-3">
                        <div class="thumbnail text-center">
                            <img class="img-responsive" src="/institute/images/<?= $eighth->photo_back ?>" alt="photo">
                            <br>
<!--                            --><?php //$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data',],'action'=>['image-institutes','id'=>$eighth->id,'t'=>'eighth','reg'=>$reg]]) ?>
<!--                            --><?//= $form->field($model, 'imageFile')->fileInput()->label(false) ?>
<!--                            <button type="submit" class="btn btn-primary"><i class="icon-reload"></i> Заменить</button>-->
<!--                            --><?php //ActiveForm::end() ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
