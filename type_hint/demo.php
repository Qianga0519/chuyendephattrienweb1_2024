<?php

declare(strict_types=1);

require_once 'ClassA.php';
require_once 'ClassB.php';
require_once 'ClassC.php';
require_once 'InterfaceI.php';


class Demo
{
    public function typeAReturnA(): A
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeAReturnB(): A
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeAReturnC(): A
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeAReturnI(): A
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeAReturnnNull(): A
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }


    public function typeBReturnA(): B
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeBReturnB(): B
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeBReturnC(): B
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeBReturnI(): B
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeBReturnnNull(): B
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }

    public function typeCReturnA(): C
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeCReturnB(): C
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeCReturnC(): C
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeCReturnI(): C
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeCReturnnNull(): C
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    //
    public function typeIReturnA(): I
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeIReturnB(): I
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeIReturnC(): I
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeIReturnI(): I
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeIReturnnNull(): I
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
    //
    public function typeNullReturnA(): null
    {
        echo __FUNCTION__ . "<br>";
        return new A();
    }
    public function typeNullReturnB(): null
    {
        echo __FUNCTION__ . "<br>";
        return new B();
    }
    public function typeNullReturnC(): null
    {
        echo __FUNCTION__ . "<br>";
        return new C();
    }
    public function typeNullReturnI(): null
    {
        echo __FUNCTION__ . "<br>";
        return new I();
    }
    public function typeNullReturnnNull(): null
    {
        echo __FUNCTION__ . "<br>";
        return null;
    }
}

// Khởi tạo đối tượng Demo

$demo = new Demo();
$methods = [
    'typeAReturnA', 'typeAReturnB', 'typeAReturnC', 'typeAReturnI', 'typeAReturnnNull',
    'typeBReturnA', 'typeBReturnB', 'typeBReturnC', 'typeBReturnI', 'typeBReturnnNull',
    'typeCReturnA', 'typeCReturnB', 'typeCReturnC', 'typeCReturnI', 'typeCReturnnNull',
    'typeIReturnA', 'typeIReturnB', 'typeIReturnC', 'typeIReturnI', 'typeIReturnnNull',
    'typeNullReturnA', 'typeNullReturnB', 'typeNullReturnC', 'typeNullReturnI', 'typeNullReturnnNull'
];
echo "<table border='1'>
<tr>
    <th>Method Name</th>
    <th>Result</th>
</tr>";
foreach ($methods as $method) {
    try {
        // Gọi phương thức
        $result = $demo->$method();

        // Kiểm tra kết quả
        if ($result === null) {
            $resultDisplay = 'Returned null';
        } else {
            $resultDisplay = 'Returned an object of class ' . get_class($result);
        }
    } catch (Throwable $e) {
        // Nếu có lỗi xảy ra, in ra false
        $resultDisplay = 'Error: false';
    }

    // Thêm hàng vào bảng kết quả
    echo "<tr>
            <td>{$method}</td>
            <td>{$resultDisplay}</td>
          </tr>";
}

echo "</table>";