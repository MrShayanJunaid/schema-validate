<?php
$xml = new DOMDocument();
$xml->load("index.xml");
if ($xml->schemaValidate("session.xsd")){
    echo "This XML is Valid";
}
else{
    echo "This XML is not Valid";
}