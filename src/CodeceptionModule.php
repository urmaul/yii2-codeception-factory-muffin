<?php

namespace urmaul\yii2\FactoryMuffin;

use League\FactoryMuffin\Factory;
use League\FactoryMuffin\Facade as FactoryMuffin;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class CodeceptionModule extends ParentModule
{
    /**
     * @var Factory FactoryMuffin instance.
     */
    protected $factory;
    
    public function _initialize()
    {
        $this->factory = FactoryMuffin::reset();
    }
    
    /**
     * Creates and saves in db an instance of the model.
     *
     * This object will be generated with mock attributes.
     *
     * @param string $model The model class name.
     * @param array  $attr  The model attributes.
     *
     * @return \yii\base\Model
     */
    public function create($model, $attr = array())
    {
        return $this->factory->create($model, $attr);
    }
    
    /**
     * Return an instance of the model.
     *
     * This does not save it in the database. Use create for that.
     *
     * @param string $model The model class name.
     * @param array  $attr  The model attributes.
     *
     * @return \yii\base\Model
     */
    public function instance($model, $attr = array())
    {
        return $this->factory->instance($model, $attr);
    }
    
    public function deleteSaved()
    {
        $this->factory->deleteSaved();
    }
}
