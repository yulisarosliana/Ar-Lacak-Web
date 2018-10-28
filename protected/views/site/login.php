<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>



<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'enableClientValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
)); ?>


<div class="login__form">
    <div class="login__row">

        <div class="form-group">
            <a>
                <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                    <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8"/>
                </svg>
                <?php echo $form->textField($model, 'username', array('type' => 'email', 'class' => 'login__input name', 'placeholder' => 'Username', 'required' => '')); ?>
                <?php echo $form->error($model, 'username', array('class' => 'error')); ?>
        </div>
    </div>
    <div class="login__row">
        <div class="form-group">
            <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0"/>
            </svg>
            <?php echo $form->passwordField($model, 'password', array('type' => 'password', 'class' => 'login__input pass', 'placeholder' => 'Password', 'required' => '')); ?>
            <?php echo $form->error($model, 'password', array('class' => 'error')); ?>

        </div>
    </div>
    
    <?php echo CHtml::submitButton('Masuk', array('type' => 'submit', 'class' => 'login__submit')); ?>

    <!-- <button type="button" class="login__submit">Sign in</button> -->
    <!--<p class="login__signup">Belum punya akun? &nbsp;<a href="<?php echo Yii::app()->request->baseUrl ?>/index.php/webUser/create">Buat Akun Baru</a></p>-->
    <p class="login__signup"><br>© Yulisa Rosliana - Sistem Informasi</p>
</div>


<?php $this->endWidget(); ?>           

