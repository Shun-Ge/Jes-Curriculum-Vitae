<?php
/**
 * 设计模式 - 装饰者模式
 *  1 - 装饰者模式采用继承和引用的方式，减少继承，动态增加类的功能
 *  2 - 抽象构件(Component)角色：定义接口，用于接收类新增的功能。
 *  3 - 具体构件(Concrete Component)角色：没有装饰过的裸类。
 *  4 - 装饰(Decorator)角色：抽象装饰器，用于将具体装饰器调度。
 *  5 - 具体装饰(Concrete Decorator)角色：增添装饰作用。
 *
 * Created by PhpStorm.
 * User: JesBrian
 * Date: 2018-06-02
 * Time: 17:06
 */

// 构件接口角色
interface IComponent
{
    public function operation();
}

// 原基础具体构件
class ConcreteComponent implements IComponent
{
    public function operation()
    {
        echo 'Base 555 ';
    }
}


// 抽象装饰角色
abstract class Decorator implements IComponent
{
    protected $component;

    public function __construct(IComponent $component)
    {
        $this->component = $component;
    }

    public function operation()
    {
        // TODO: Implement operation() method.
        $this->component->operation();
    }
}

// 具体装饰 A
class ConcreteDecoratorA extends Decorator
{
    public function __construct(IComponent $component)
    {
        parent::__construct($component);
    }

    public function operation()
    {
        parent::operation(); // TODO: Change the autogenerated stub
        $this->addOperationA(); // 专属类添加操作
    }

    public function addOperationA()
    {
        echo 'Decorator 666 ';
    }
}

// 具体装饰类 B
class ConcreteDecoratorB extends Decorator
{

    public function __construct(IComponent $component)
    {
        parent::__construct($component);
    }

    public function operation()
    {
        parent::operation(); // TODO: Change the autogenerated stub
        $this->addOperationB(); // 专属类添加操作
    }

    public function addOperationB()
    {
        echo 'Decorator 888 ';
    }
}

$component = new ConcreteComponent();
$decoratorA = new ConcreteDecoratorA($component);
$decoratorB = new ConcreteDecoratorB($decoratorA);

$decoratorA->operation();
echo PHP_EOL;
$decoratorB->operation();
