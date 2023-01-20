<?php

namespace slvler\helpmate;

class QwertyHelperCommand extends QwertyHelper
{

    public function getClassFunctionList(){
        $class_methods = get_class_methods(new QwertyHelper());
        foreach ($class_methods as $method_name) {
            echo "$method_name\n";
        }
    }

    public function getList(){
       return $this->getClassFunctionList();
    }

}
