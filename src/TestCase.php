<?php

namespace urmaul\yii2\FactoryMuffin;

/**
 * @inheritdoc
 */
class TestCase extends \yii\codeception\TestCase
{
    /**
     * @var \Codeception\Actor
     */
    protected $tester;

    /**
     * @inheritdoc
     */
    protected function tearDown()
    {
        $this->tester->deleteSaved();
        parent::tearDown();
    }
}
