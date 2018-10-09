<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Codes Model
 *
 * @property |\Cake\ORM\Association\HasMany $Agencies
 *
 * @method \App\Model\Entity\Code get($primaryKey, $options = [])
 * @method \App\Model\Entity\Code newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Code[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Code|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Code|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Code patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Code[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Code findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CodesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('codes');
        $this->setDisplayField('code_description');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Agencies', [
            'foreignKey' => 'code_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('code_description')
            ->maxLength('code_description', 255)
            ->requirePresence('code_description', 'create')
            ->notEmpty('code_description');

        return $validator;
    }
}
