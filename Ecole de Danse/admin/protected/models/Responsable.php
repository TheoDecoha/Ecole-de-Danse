<?php

/**
 * This is the model class for table "responsable".
 *
 * The followings are the available columns in table 'responsable':
 * @property integer $id
 * @property string $email
 * @property string $nom
 * @property string $prenom
 * @property string $mdp
 * @property string $adresse
 * @property string $ville
 * @property integer $cp
 * @property string $telephone
 * @property string $tel_portable
 *
 * The followings are the available model relations:
 * @property Enfants[] $enfants
 */
class Responsable extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'responsable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('email, nom, prenom, mdp, adresse, ville, cp, telephone, tel_portable', 'required'),
			array('cp', 'numerical', 'integerOnly'=>true),
			array('email, nom, prenom, mdp', 'length', 'max'=>32),
			array('adresse, ville', 'length', 'max'=>64),
			array('telephone, tel_portable', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, email, nom, prenom, mdp, adresse, ville, cp, telephone, tel_portable', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'enfants' => array(self::HAS_MANY, 'Enfants', 'parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'email' => 'Email',
			'nom' => 'Nom',
			'prenom' => 'Prenom',
			'mdp' => 'Mdp',
			'adresse' => 'Adresse',
			'ville' => 'Ville',
			'cp' => 'Cp',
			'telephone' => 'Telephone',
			'tel_portable' => 'Tel Portable',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('prenom',$this->prenom,true);
		$criteria->compare('mdp',$this->mdp,true);
		$criteria->compare('adresse',$this->adresse,true);
		$criteria->compare('ville',$this->ville,true);
		$criteria->compare('cp',$this->cp);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('tel_portable',$this->tel_portable,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Responsable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
