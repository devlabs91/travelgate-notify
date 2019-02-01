<?php 

namespace Devlabs91\TravelgateNotify\Services;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\BaseTypesHandler;
use GoetasWebservices\Xsd\XsdToPhpRuntime\Jms\Handler\XmlSchemaDateHandler;

use Devlabs91\TravelgateNotify\Models\Ota\OTAHotelResRS;
use Devlabs91\TravelgateNotify\Models\Ota\OTAHotelResNotifRS;
use Devlabs91\TravelgateNotify\Models\Ota\ErrorType;
use Devlabs91\TravelgateNotify\Models\Ota\SuccessType;

class OTAHotelResRSService {
    
    protected $username;
    protected $password;
    protected $authenticated;
    
    protected $serializer;
    protected $content;
    
    /** @var OTAHotelResRS */
    public $request;
    
    /** @var OTAHotelResNotifRS */
    public $response;
    
    public function __construct( $username, $password ) {
        $this->username = $username;
        $this->password = $password;
        $this->authenticated = false;
        
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__.'/../Metadata/Ota', 'Devlabs91\TravelgateNotify\Models\Ota');
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler());
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler());
        });
            
        $this->serializer = $serializerBuilder->build();
    }

    public function getRequest() {
        return $this->request;
    }
    
    public function getResponseAsString( OTAHotelResNotifRS $response ) {
        $string = $this->serializer->serialize( $response, 'xml' );
        return $string;
    }
    
    public function authenticate( $username, $password ) {
        if( $username && $this->username == $username && $password && $this->password == $password ) {
            $this->authenticated = true;
        }
    }
    
    public function handle( $content ) {
        
        $response = new OTAHotelResNotifRS();
        
        if(!$this->username || !$this->password) {
            $error = new ErrorType( 'Channel is not configured' );$error->setShortText( 'HotelCode not found' );$error->setCode( '10' );$response->setErrors( [ $error ] );
            return $response;
        }
        
        if(!$this->authenticated) {
            $error = new ErrorType( 'Username/Password missmatch' );$error->setShortText( 'POS credentials not found' );$error->setCode( '38' );$response->setErrors( [ $error ] );
            return $response;
        }
        
        $matches = null;$oTA_HotelResRS = null;
        if ( preg_match_all( '/^(\<\?xml.*\?>)$/imsDU', $content, $matches ) ) {
            $xmlString = $matches[0][0];
            $content = str_replace($xmlString, '<?xml version="1.0" encoding="utf-8"?>', $content);
            $oTA_HotelResRS = $this->serializer->deserialize( $content, 'Devlabs91\TravelgateNotify\Models\Ota\OTAHotelResRS', 'xml');
        }
        
        if(!$oTA_HotelResRS || !$oTA_HotelResRS instanceof OTAHotelResRS ) {
            $error = new ErrorType( 'Unable to parse request.' );$error->setShortText( 'Unexpected error' );$error->setCode( '-1' );$response->setErrors( [ $error ] );
            return $response;
        }
        
        $this->request = $oTA_HotelResRS;
        
        return $response;
    }
    
}