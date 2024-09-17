<?php

namespace Flags;
class Flags
{
    public static function getFlags()
    {
        return  [

            'admin'=>[
                'inventario'=> ['listar'=>1, 'chamado'=>1],
                'dashboard' => ['inventario'=>1,'chamadas'=>1,'tracking'=>1,'contato'=>1],
                'user-profile'=>['inventario'=>1,'chamadas'=>1,'tracking'=>1,'contato'=>1],
            ],
            9 =>[
                'inventario'=> ['listar'=>1],
                'dashboard' => ['inventario'=>0,'chamadas'=>1,'tracking'=>0,'contato'=>1],
                'user-profile'=>['inventario'=>1,'chamadas'=>1,'tracking'=>1,'contato'=>1],
            ],
            8=>[
                'inventario'=> ['listar'=>1, 'chamado'=>1,'troca'=>0],
                'dashboard' => ['inventario'=>1,'chamadas'=>1,'tracking'=>0,'contato'=>1],
                'user-profile'=>['inventario'=>1,'chamadas'=>1,'tracking'=>0,'contato'=>1],
            ]
        ];

    }



    public static function  getCrud()
    {
        return [
            'admin'=>['create'=>1,'update'=>1,'delete'=>0,'select'=>1],
                  9=>['create'=>0,'update'=>0,'delete'=>0,'select'=>1],
                  8=>['create'=>0,'update'=>0,'delete'=>0,'select'=>1],
                  7=>['create'=>0,'update'=>0,'delete'=>1,'select'=>1],
        ];
    }
}
