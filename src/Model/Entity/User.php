<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $agencie_id
 * @property int $code_id
 * @property \Cake\I18n\FrozenDate $created
 * @property \Cake\I18n\FrozenDate $modified
 * @property string $username
 * @property string $email
 * @property string $password
 *
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\Code $code
 * @property \App\Model\Entity\Invoice[] $invoices
 */
class User extends Entity
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
        'code_id' => true,
        'created' => true,
        'modified' => true,
        'username' => true,
        'email' => true,
        'password' => true,
        'agency' => true,
        'code' => true,
        'invoices' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
