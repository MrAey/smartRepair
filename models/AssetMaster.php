<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asset_master".
 *
 * @property integer $code
 * @property string $sap_code
 * @property string $budget_year
 * @property string $regis_date
 * @property string $aname
 * @property string $dept
 * @property string $positions
 * @property string $floorno
 * @property string $roomno
 * @property string $groupid
 * @property string $catagory
 * @property string $brand
 * @property string $asize
 * @property string $model
 * @property string $serial_no
 * @property string $price
 * @property string $pur_date
 * @property string $doc_no
 * @property string $pur_docno
 * @property string $receive_date
 * @property string $bud_id
 * @property string $asset_note
 * @property string $pict_path
 * @property string $a_status
 */
class AssetMaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asset_master';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['regis_date', 'pur_date', 'receive_date'], 'safe'],
            [['price'], 'number'],
            [['asset_note'], 'string'],
            [['sap_code', 'positions', 'brand', 'asize', 'model', 'pict_path'], 'string', 'max' => 50],
            [['budget_year'], 'string', 'max' => 4],
            [['aname'], 'string', 'max' => 150],
            [['dept'], 'string', 'max' => 8],
            [['floorno'], 'string', 'max' => 20],
            [['roomno'], 'string', 'max' => 60],
            [['groupid'], 'string', 'max' => 3],
            [['catagory'], 'string', 'max' => 5],
            [['serial_no', 'pur_docno'], 'string', 'max' => 30],
            [['doc_no'], 'string', 'max' => 100],
            [['bud_id', 'a_status'], 'string', 'max' => 2],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'sap_code' => 'Sap Code',
            'budget_year' => 'Budget Year',
            'regis_date' => 'Regis Date',
            'aname' => 'Aname',
            'dept' => 'Dept',
            'positions' => 'Positions',
            'floorno' => 'Floorno',
            'roomno' => 'Roomno',
            'groupid' => 'Groupid',
            'catagory' => 'Catagory',
            'brand' => 'Brand',
            'asize' => 'Asize',
            'model' => 'Model',
            'serial_no' => 'Serial No',
            'price' => 'Price',
            'pur_date' => 'Pur Date',
            'doc_no' => 'Doc No',
            'pur_docno' => 'Pur Docno',
            'receive_date' => 'Receive Date',
            'bud_id' => 'Bud ID',
            'asset_note' => 'Asset Note',
            'pict_path' => 'Pict Path',
            'a_status' => 'A Status',
        ];
    }
}
