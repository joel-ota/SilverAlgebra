<?php

include 'vendor/autoload.php';

set_exception_handler(function(Throwable $ex){
    var_dump($ex);
    die();
});

use App\Math\Geometry\Circle;
use App\Math\Geometry\Exception\RadiusException;


throw new RadiusException();

try {
    try {
        $geometryCircle = new Circle('foo');
    } catch (RadiusException | TypeError $e) {
        echo "Radius must be a number greater than 0\n";
        echo $e->getMessage(), "\n";

        return;
    } catch (\Throwable $th) {
        echo "Exception happened while instancing a circle\n";
        throw $th;
    }

    return;
} catch (\Throwable $th) {
    echo "Error!\n";

    return;
} finally {
    echo "Finally\n";
}

var_dump($geometryCircle->getExtent());
