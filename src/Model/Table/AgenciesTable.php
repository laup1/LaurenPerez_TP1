<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agencies Model
 *
 * @property \App\Model\Table\FilesTable|\Cake\ORM\Association\BelongsToMany $Files
 * @property \App\Model\Table\TagsTable|\Cake\ORM\Association\BelongsToMany $Tags
 *
 * @method \App\Model\Entity\Agency get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agency newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agency[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agency|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agency|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agency patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agency[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agency findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AgenciesTable extends Table
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

        $this->setTable('agencies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Files', [
            'foreignKey' => 'agency_id',
            'targetForeignKey' => 'file_id',
            'joinTable' => 'agencies_files'
        ]);
        $this->belongsToMany('Tags', [
            'foreignKey' => 'agency_id',
            'targetForeignKey' => 'tag_id',
            'joinTable' => 'agencies_tags'
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
            ->scalar('agencie_details')
            ->maxLength('agencie_details', 255)
            ->requirePresence('agencie_details', 'create')
            ->notEmpty('agencie_details');

        return $validator;
    }
}
