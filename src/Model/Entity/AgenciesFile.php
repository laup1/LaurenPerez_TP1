<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AgenciesFile Entity
 *
 * @property int $id
 * @property int $agencie_id
 * @property int $file_id
 *
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\File $file
 */
class AgenciesFile extends Entity
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
        'agencie_id' => true,
        'file_id' => true,
        'agency' => true,
        'file' => true
    ];
}
