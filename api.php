<?php
    require __DIR__ . '/config/supportedMimeTypes.php';
    require __DIR__ . '/vendor/autoload.php';
    require __DIR__ . '/includes/request.php';
    
    //GET accept headers
    $httpAcceptHeader = $_SERVER['HTTP_ACCEPT'];
    if($httpAcceptHeader){
        $mimeType = \Bitworking\Mimeparse::bestMatch($supportedTypes, $httpAcceptHeader);
        echo "MIME: $mimeType \n"; //TODO: save the Mime Type we are going to respond with in an object reponse if null set default mime type
    }
    
    //SET reponse type
    
    //GET request
    var_dump($_SERVER);
    try{
        $request = new request($_SERVER['REQUEST_METHOD'], $_SERVER['PATH_INFO']);
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    
    //Paese request

    //Create bussines logic

    //Get response

    //Format response to response type

    //Return response
    echo "type: " . $request->getMethod() . "\n";
    echo "function: " . print_r($request->getFunction(),true) . "\n";