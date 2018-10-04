<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AgenciesFiles Model
 *
 * @property \App\Model\Table\AgenciesTable|\Cake\ORM\Association\BelongsTo $Agencies
 * @property \App\Model\Table\FilesTable|\Cake\ORM\Association\BelongsTo $Files
 *
 * @method \App\Model\Entity\AgenciesFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\AgenciesFile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AgenciesFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AgenciesFile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AgenciesFile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AgenciesFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AgenciesFile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AgenciesFile findOrCreate($search, callable $callback = null, $options = [])
 */
class AgenciesFilesTable extends Table
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

        $this->setTable('agencies_files');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Agencies', [
            'foreignKey' => 'agencie_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Files', [
            'foreignKey' => 'file_id',
            'joinType' => 'INNER'
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

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['agencie_id'], 'Agencies'));
        $rules->add($rules->existsIn(['file_id'], 'Files'));

        return $rules;
    }
}
