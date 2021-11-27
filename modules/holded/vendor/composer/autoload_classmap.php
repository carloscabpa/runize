<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Holded\\Prestashop\\Adapters\\OrderAdapter' => $baseDir . '/src/Adapters/OrderAdapter.php',
    'Holded\\Prestashop\\Adapters\\ProductAdapter' => $baseDir . '/src/Adapters/ProductAdapter.php',
    'Holded\\Prestashop\\Controllers\\ExportProductsController' => $baseDir . '/src/Controllers/ExportProductsController.php',
    'Holded\\Prestashop\\Controllers\\HealthController' => $baseDir . '/src/Controllers/HealthController.php',
    'Holded\\Prestashop\\Controllers\\UpdateStockController' => $baseDir . '/src/Controllers/UpdateStockController.php',
    'Holded\\Prestashop\\DTOs\\Order\\Order' => $baseDir . '/src/DTOs/Order/Order.php',
    'Holded\\Prestashop\\Holded' => $baseDir . '/src/Holded.php',
    'Holded\\Prestashop\\Hooks\\Hooks' => $baseDir . '/src/Hooks/Hooks.php',
    'Holded\\Prestashop\\Services\\AbstractService' => $baseDir . '/src/Services/AbstractService.php',
    'Holded\\Prestashop\\Services\\OrderService' => $baseDir . '/src/Services/OrderService.php',
    'Holded\\Prestashop\\Services\\ProductService' => $baseDir . '/src/Services/ProductService.php',
    'Holded\\Prestashop\\Services\\ShopService' => $baseDir . '/src/Services/ShopService.php',
    'Holded\\Prestashop\\Traits\\DisplayTrait' => $baseDir . '/src/Traits/DisplayTrait.php',
    'Holded\\Prestashop\\Traits\\ProcessFormTrait' => $baseDir . '/src/Traits/ProcessFormTrait.php',
    'Holded\\Prestashop\\Traits\\SQLTrait' => $baseDir . '/src/Traits/SQLTrait.php',
    'Holded\\SDK\\Clients\\OrdersClient' => $baseDir . '/sdk/Clients/OrdersClient.php',
    'Holded\\SDK\\Clients\\ProductsClient' => $baseDir . '/sdk/Clients/ProductsClient.php',
    'Holded\\SDK\\Clients\\ShopsClient' => $baseDir . '/sdk/Clients/ShopsClient.php',
    'Holded\\SDK\\DTOs\\Order\\Item' => $baseDir . '/sdk/DTOs/Order/Item.php',
    'Holded\\SDK\\DTOs\\Order\\Order' => $baseDir . '/sdk/DTOs/Order/Order.php',
    'Holded\\SDK\\DTOs\\Product\\Option' => $baseDir . '/sdk/DTOs/Product/Option.php',
    'Holded\\SDK\\DTOs\\Product\\Options' => $baseDir . '/sdk/DTOs/Product/Options.php',
    'Holded\\SDK\\DTOs\\Product\\Product' => $baseDir . '/sdk/DTOs/Product/Product.php',
    'Holded\\SDK\\DTOs\\Product\\Variation' => $baseDir . '/sdk/DTOs/Product/Variation.php',
    'Holded\\SDK\\DTOs\\Shop\\Shop' => $baseDir . '/sdk/DTOs/Shop/Shop.php',
    'Holded\\SDK\\DTOs\\Tax\\Tax' => $baseDir . '/sdk/DTOs/Tax/Tax.php',
    'Holded\\SDK\\Holded' => $baseDir . '/sdk/Holded.php',
    'Holded\\SDK\\Loggers\\ProductLogger' => $baseDir . '/sdk/Loggers/ProductLogger.php',
    'Holded\\SDK\\Loggers\\ProductLoggerInterface' => $baseDir . '/sdk/Loggers/ProductLoggerInterface.php',
    'Holded\\SDK\\Repositories\\AbstractRepository' => $baseDir . '/sdk/Repositories/AbstractRepository.php',
    'Holded\\SDK\\Repositories\\Orders\\OrderRepository' => $baseDir . '/sdk/Repositories/Orders/OrderRepository.php',
    'Holded\\SDK\\Repositories\\Products\\ProductRepository' => $baseDir . '/sdk/Repositories/Products/ProductRepository.php',
    'Holded\\SDK\\Repositories\\Shops\\ShopRepository' => $baseDir . '/sdk/Repositories/Shops/ShopRepository.php',
    'Holded\\SDK\\Services\\HTTP\\Client' => $baseDir . '/sdk/Services/HTTP/Client.php',
    'JsonException' => $vendorDir . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/DummyTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
    'Symfony\\Component\\HttpClient\\CachingHttpClient' => $vendorDir . '/symfony/http-client/CachingHttpClient.php',
    'Symfony\\Component\\HttpClient\\Chunk\\DataChunk' => $vendorDir . '/symfony/http-client/Chunk/DataChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\ErrorChunk' => $vendorDir . '/symfony/http-client/Chunk/ErrorChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\FirstChunk' => $vendorDir . '/symfony/http-client/Chunk/FirstChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\InformationalChunk' => $vendorDir . '/symfony/http-client/Chunk/InformationalChunk.php',
    'Symfony\\Component\\HttpClient\\Chunk\\LastChunk' => $vendorDir . '/symfony/http-client/Chunk/LastChunk.php',
    'Symfony\\Component\\HttpClient\\CurlHttpClient' => $vendorDir . '/symfony/http-client/CurlHttpClient.php',
    'Symfony\\Component\\HttpClient\\DataCollector\\HttpClientDataCollector' => $vendorDir . '/symfony/http-client/DataCollector/HttpClientDataCollector.php',
    'Symfony\\Component\\HttpClient\\DependencyInjection\\HttpClientPass' => $vendorDir . '/symfony/http-client/DependencyInjection/HttpClientPass.php',
    'Symfony\\Component\\HttpClient\\Exception\\ClientException' => $vendorDir . '/symfony/http-client/Exception/ClientException.php',
    'Symfony\\Component\\HttpClient\\Exception\\HttpExceptionTrait' => $vendorDir . '/symfony/http-client/Exception/HttpExceptionTrait.php',
    'Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException' => $vendorDir . '/symfony/http-client/Exception/InvalidArgumentException.php',
    'Symfony\\Component\\HttpClient\\Exception\\JsonException' => $vendorDir . '/symfony/http-client/Exception/JsonException.php',
    'Symfony\\Component\\HttpClient\\Exception\\RedirectionException' => $vendorDir . '/symfony/http-client/Exception/RedirectionException.php',
    'Symfony\\Component\\HttpClient\\Exception\\ServerException' => $vendorDir . '/symfony/http-client/Exception/ServerException.php',
    'Symfony\\Component\\HttpClient\\Exception\\TransportException' => $vendorDir . '/symfony/http-client/Exception/TransportException.php',
    'Symfony\\Component\\HttpClient\\HttpClient' => $vendorDir . '/symfony/http-client/HttpClient.php',
    'Symfony\\Component\\HttpClient\\HttpClientTrait' => $vendorDir . '/symfony/http-client/HttpClientTrait.php',
    'Symfony\\Component\\HttpClient\\HttpOptions' => $vendorDir . '/symfony/http-client/HttpOptions.php',
    'Symfony\\Component\\HttpClient\\HttplugClient' => $vendorDir . '/symfony/http-client/HttplugClient.php',
    'Symfony\\Component\\HttpClient\\Internal\\Canary' => $vendorDir . '/symfony/http-client/Internal/Canary.php',
    'Symfony\\Component\\HttpClient\\Internal\\ClientState' => $vendorDir . '/symfony/http-client/Internal/ClientState.php',
    'Symfony\\Component\\HttpClient\\Internal\\CurlClientState' => $vendorDir . '/symfony/http-client/Internal/CurlClientState.php',
    'Symfony\\Component\\HttpClient\\Internal\\DnsCache' => $vendorDir . '/symfony/http-client/Internal/DnsCache.php',
    'Symfony\\Component\\HttpClient\\Internal\\HttplugWaitLoop' => $vendorDir . '/symfony/http-client/Internal/HttplugWaitLoop.php',
    'Symfony\\Component\\HttpClient\\Internal\\NativeClientState' => $vendorDir . '/symfony/http-client/Internal/NativeClientState.php',
    'Symfony\\Component\\HttpClient\\Internal\\PushedResponse' => $vendorDir . '/symfony/http-client/Internal/PushedResponse.php',
    'Symfony\\Component\\HttpClient\\MockHttpClient' => $vendorDir . '/symfony/http-client/MockHttpClient.php',
    'Symfony\\Component\\HttpClient\\NativeHttpClient' => $vendorDir . '/symfony/http-client/NativeHttpClient.php',
    'Symfony\\Component\\HttpClient\\Psr18Client' => $vendorDir . '/symfony/http-client/Psr18Client.php',
    'Symfony\\Component\\HttpClient\\Response\\CurlResponse' => $vendorDir . '/symfony/http-client/Response/CurlResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\HttplugPromise' => $vendorDir . '/symfony/http-client/Response/HttplugPromise.php',
    'Symfony\\Component\\HttpClient\\Response\\MockResponse' => $vendorDir . '/symfony/http-client/Response/MockResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\NativeResponse' => $vendorDir . '/symfony/http-client/Response/NativeResponse.php',
    'Symfony\\Component\\HttpClient\\Response\\ResponseStream' => $vendorDir . '/symfony/http-client/Response/ResponseStream.php',
    'Symfony\\Component\\HttpClient\\Response\\ResponseTrait' => $vendorDir . '/symfony/http-client/Response/ResponseTrait.php',
    'Symfony\\Component\\HttpClient\\Response\\StreamWrapper' => $vendorDir . '/symfony/http-client/Response/StreamWrapper.php',
    'Symfony\\Component\\HttpClient\\ScopingHttpClient' => $vendorDir . '/symfony/http-client/ScopingHttpClient.php',
    'Symfony\\Component\\HttpClient\\TraceableHttpClient' => $vendorDir . '/symfony/http-client/TraceableHttpClient.php',
    'Symfony\\Contracts\\HttpClient\\ChunkInterface' => $vendorDir . '/symfony/http-client-contracts/ChunkInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\ClientExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/ClientExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\DecodingExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/DecodingExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\ExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/ExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\HttpExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/HttpExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\RedirectionExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/RedirectionExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\ServerExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/ServerExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\Exception\\TransportExceptionInterface' => $vendorDir . '/symfony/http-client-contracts/Exception/TransportExceptionInterface.php',
    'Symfony\\Contracts\\HttpClient\\HttpClientInterface' => $vendorDir . '/symfony/http-client-contracts/HttpClientInterface.php',
    'Symfony\\Contracts\\HttpClient\\ResponseInterface' => $vendorDir . '/symfony/http-client-contracts/ResponseInterface.php',
    'Symfony\\Contracts\\HttpClient\\ResponseStreamInterface' => $vendorDir . '/symfony/http-client-contracts/ResponseStreamInterface.php',
    'Symfony\\Contracts\\HttpClient\\Test\\HttpClientTestCase' => $vendorDir . '/symfony/http-client-contracts/Test/HttpClientTestCase.php',
    'Symfony\\Contracts\\HttpClient\\Test\\TestHttpServer' => $vendorDir . '/symfony/http-client-contracts/Test/TestHttpServer.php',
    'Symfony\\Contracts\\Service\\ResetInterface' => $vendorDir . '/symfony/service-contracts/ResetInterface.php',
    'Symfony\\Contracts\\Service\\ServiceLocatorTrait' => $vendorDir . '/symfony/service-contracts/ServiceLocatorTrait.php',
    'Symfony\\Contracts\\Service\\ServiceProviderInterface' => $vendorDir . '/symfony/service-contracts/ServiceProviderInterface.php',
    'Symfony\\Contracts\\Service\\ServiceSubscriberInterface' => $vendorDir . '/symfony/service-contracts/ServiceSubscriberInterface.php',
    'Symfony\\Contracts\\Service\\ServiceSubscriberTrait' => $vendorDir . '/symfony/service-contracts/ServiceSubscriberTrait.php',
    'Symfony\\Contracts\\Service\\Test\\ServiceLocatorTest' => $vendorDir . '/symfony/service-contracts/Test/ServiceLocatorTest.php',
    'Symfony\\Polyfill\\Php73\\Php73' => $vendorDir . '/symfony/polyfill-php73/Php73.php',
);
