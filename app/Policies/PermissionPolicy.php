<?php

namespace App\Policies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\HandlesAuthorization;
use Flags\Flags;

class PermissionPolicy
{
    use HandlesAuthorization;

        public function __construct($page)
        {
            $this->setUser(Auth::user());
            $this->populateAuth($page);
        }

    protected function setUser($auser)
    {
        $this->user = $auser;
    }

    protected  function getUser()
    {
        return $this->user;
    }

    protected  function  populateAuth($page):void
    {
        if($this->getUser()->empresa!='lowcost')
        {
            $flags = (Flags::getFlags());
            $userFlags = $flags[$this->getUser()->level];
            $crudFlags = Flags::getCrud();
            $crudFlags = $crudFlags[$this->getUser()->level];
            $this->generateAuthPerPage($userFlags[$page]);
            $this->generateCrudAuth($crudFlags);
        }
    }

    protected  function generateAuthPerPage($auths):void
    {
        foreach ($auths as $k=> $v)
        {
            switch($k)
            {
                case 'inventario':
                    $this->setHasInventario(boolval($v));
                break;
                case 'chamadas':
                    $this->setHasChamadas(boolval($v));
                break;
                case 'tracking':
                    $this->setHasTraking(boolval($v));
                break;
                case 'contato':
                    $this->setHasContato(boolval($v));
                break;
            }

        }

    }

    protected function generateCrudAuth($auths):void
    {
       # var_dump($auths); exit;
        foreach ($auths as $k=> $v)
        {
            switch($k)
            {
                case 'create':
                    $this->setCanCreate(boolval($v));
                break;
                case 'select':
                    $this->setCanSelect(boolval($v));
                break;
                case 'update':
                    $this->setCanUpdate(boolval($v));
                break;
                case 'delete':
                    $this->setCanDelete(boolval($v));
                break;
            }
        }
    }

    public function getHasInventario():bool{
        return $this->hasInventario;
    }

    public function setHasInventario($hasInventario):void
    {
        $this->hasInventario = $hasInventario;
    }
    public function getHasTraking():bool
    {
        return $this->hasTraking;
    }

    public function setHasTraking($hasTraking):void{
        $this->hasTraking = $hasTraking;
    }

    public function getHasChamadas():bool{
        return $this->hasChamadas;
    }

    public function setHasChamadas($hasChamadas):void{
        $this->hasChamadas = $hasChamadas;
    }

    public function getHasContato():bool{
        return $this->hasContato;
    }

    public function setHasContato($hasContato):void{
        $this->hasContato = $hasContato;
    }

    public function getCanCreate():bool{
        return $this->canCreate;
    }

    public function setCanCreate($canCreate):void{
        $this->canCreate = $canCreate;
    }

    public function getCanUpdate():bool{
        return $this->canUpdate;
    }

    public function setCanUpdate($canUpdate):void{
        $this->canUpdate = $canUpdate;
    }

    public function getCanDelete():bool{
        return $this->canDelete;
    }

    public function setCanDelete($canDelete):void{
        $this->canDelete = $canDelete;
    }

    public function getCanSelect():bool{
        return $this->canSelect;
    }

    public function setCanSelect($canSelect):void{
        $this->canSelect = $canSelect;
    }


    private $hasTraking;
    private $hasChamadas;
    private $hasInventario;
    private $hasContato;
    private $canCreate;
    private $canUpdate;
    private $canDelete;
    private $canSelect;
    private $user;
}
