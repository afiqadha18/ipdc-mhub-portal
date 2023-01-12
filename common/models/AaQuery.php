<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Aa]].
 *
 * @see Aa
 */
class AaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Aa[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Aa|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
