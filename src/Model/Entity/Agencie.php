<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agency Entity
 *
 * @property int $id
 * @property string $agencie_details
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 * @property int $user_id
 * @property int $code_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Code $code
 * @property \App\Model\Entity\File[] $files
 * @property \App\Model\Entity\Tag[] $tags
 */
class Agency extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'agencie_details' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'code_id' => true,
        'user' => true,
        'code' => true,
        'files' => true,
        'tags' => true,
         'subcategory_id' => true
    ];
}
