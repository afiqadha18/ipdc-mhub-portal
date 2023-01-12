<?php

namespace backend\controllers;

use common\models\Aa;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AaController implements the CRUD actions for Aa model.
 */
class AaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Aa models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Aa::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'aa_id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Aa model.
     * @param int $aa_id Aa ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($aa_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($aa_id),
        ]);
    }

    /**
     * Creates a new Aa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Aa();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'aa_id' => $model->aa_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Aa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $aa_id Aa ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($aa_id)
    {
        $model = $this->findModel($aa_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'aa_id' => $model->aa_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Aa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $aa_id Aa ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($aa_id)
    {
        $this->findModel($aa_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Aa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $aa_id Aa ID
     * @return Aa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($aa_id)
    {
        if (($model = Aa::findOne(['aa_id' => $aa_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
