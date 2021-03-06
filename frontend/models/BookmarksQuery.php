<?php

namespace frontend\models;

/**
 * This is the ActiveQuery class for [[Bookmark]].
 *
 * @see Bookmark
 */
class BookmarksQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Bookmark[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Bookmark|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
