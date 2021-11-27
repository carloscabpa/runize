<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class AdminContainer extends Container
{
    private $parameters;
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'prestashop\\module\\prestashopfacebook\\adapter\\configurationadapter' => 'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter',
            'prestashop\\module\\prestashopfacebook\\adapter\\toolsadapter' => 'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter',
            'prestashop\\module\\prestashopfacebook\\api\\eventsubscriber\\accountsuspendedsubscriber' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber',
            'prestashop\\module\\prestashopfacebook\\api\\facebookcategoryclient' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookCategoryClient',
            'prestashop\\module\\prestashopfacebook\\api\\facebookclient' => 'PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient',
            'prestashop\\module\\prestashopfacebook\\buffer\\templatebuffer' => 'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer',
            'prestashop\\module\\prestashopfacebook\\config\\env' => 'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env',
            'prestashop\\module\\prestashopfacebook\\database\\installer' => 'PrestaShop\\Module\\PrestashopFacebook\\Database\\Installer',
            'prestashop\\module\\prestashopfacebook\\database\\uninstaller' => 'PrestaShop\\Module\\PrestashopFacebook\\Database\\Uninstaller',
            'prestashop\\module\\prestashopfacebook\\dispatcher\\eventdispatcher' => 'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher',
            'prestashop\\module\\prestashopfacebook\\factory\\facebookessentialsapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\factory\\googlecategoryessentialsapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\GoogleCategoryEssentialsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\factory\\psapiclientfactory' => 'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory',
            'prestashop\\module\\prestashopfacebook\\handler\\apiconversionhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\categorymatchhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\configurationhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\errorhandler\\errorhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\eventbusproducthandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\messengerhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\pixelhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler',
            'prestashop\\module\\prestashopfacebook\\handler\\prevalidationscanrefreshhandler' => 'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler',
            'prestashop\\module\\prestashopfacebook\\manager\\fbefeaturemanager' => 'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager',
            'prestashop\\module\\prestashopfacebook\\presenter\\moduleupgradepresenter' => 'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter',
            'prestashop\\module\\prestashopfacebook\\provider\\accesstokenprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\eventdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\facebookdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\fbedataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\fbefeaturedataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\googlecategoryproviderinterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface',
            'prestashop\\module\\prestashopfacebook\\provider\\multishopdataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscancacheprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\prevalidationscandataprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'prestashop\\module\\prestashopfacebook\\provider\\productavailabilityproviderinterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface',
            'prestashop\\module\\prestashopfacebook\\provider\\productsyncreportprovider' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider',
            'prestashop\\module\\prestashopfacebook\\repository\\googlecategoryrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\productrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\serverinformationrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\shoprepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository',
            'prestashop\\module\\prestashopfacebook\\repository\\tabrepository' => 'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository',
            'prestashop\\module\\ps_facebook\\tracker\\segment' => 'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment',
            'prestashop\\module\\ps_facebook\\translations\\psfacebooktranslations' => 'PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations',
            'prestashop\\psaccountsinstaller\\installer\\facade\\psaccounts' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts',
            'prestashop\\psaccountsinstaller\\installer\\installer' => 'PrestaShop\\PsAccountsInstaller\\Installer\\Installer',
            'ps_metrics.graphql.dataloaders.setproducttouradvanceddone' => 'ps_metrics.graphql.dataloaders.setProductTourAdvancedDone',
            'ps_metrics.graphql.dataloaders.setproducttourfreedone' => 'ps_metrics.graphql.dataloaders.setProductTourFreeDone',
        ];
        $this->methodMap = [
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => 'getAccountSuspendedSubscriberService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookCategoryClient' => 'getFacebookCategoryClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient' => 'getFacebookClientService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => 'getConfigurationAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => 'getToolsAdapterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => 'getTemplateBufferService',
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => 'getEnvService',
            'PrestaShop\\Module\\PrestashopFacebook\\Database\\Installer' => 'getInstallerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Database\\Uninstaller' => 'getUninstallerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher' => 'getEventDispatcherService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory' => 'getFacebookEssentialsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\GoogleCategoryEssentialsApiClientFactory' => 'getGoogleCategoryEssentialsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory' => 'getPsApiClientFactoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler' => 'getApiConversionHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler' => 'getCategoryMatchHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler' => 'getConfigurationHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler' => 'getErrorHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler' => 'getEventBusProductHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler' => 'getMessengerHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler' => 'getPixelHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler' => 'getPrevalidationScanRefreshHandlerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager' => 'getFbeFeatureManagerService',
            'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter' => 'getModuleUpgradePresenterService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider' => 'getAccessTokenProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider' => 'getEventDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider' => 'getFacebookDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider' => 'getFbeDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider' => 'getFbeFeatureDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider' => 'getGoogleCategoryProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider' => 'getMultishopDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider' => 'getPrevalidationScanCacheProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider' => 'getPrevalidationScanDataProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider' => 'getProductAvailabilityProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider' => 'getProductSyncReportProviderService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository' => 'getGoogleCategoryRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository' => 'getProductRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository' => 'getServerInformationRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository' => 'getShopRepositoryService',
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository' => 'getTabRepositoryService',
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => 'getSegmentService',
            'PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations' => 'getPsFacebookTranslationsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => 'getPsAccountsService',
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => 'getInstaller2Service',
            'annotation_reader' => 'getAnnotationReaderService',
            'context.static' => 'getContext_StaticService',
            'doctrine' => 'getDoctrineService',
            'doctrine.cache_clear_metadata_command' => 'getDoctrine_CacheClearMetadataCommandService',
            'doctrine.cache_clear_query_cache_command' => 'getDoctrine_CacheClearQueryCacheCommandService',
            'doctrine.cache_clear_result_command' => 'getDoctrine_CacheClearResultCommandService',
            'doctrine.cache_collection_region_command' => 'getDoctrine_CacheCollectionRegionCommandService',
            'doctrine.clear_entity_region_command' => 'getDoctrine_ClearEntityRegionCommandService',
            'doctrine.clear_query_region_command' => 'getDoctrine_ClearQueryRegionCommandService',
            'doctrine.database_create_command' => 'getDoctrine_DatabaseCreateCommandService',
            'doctrine.database_drop_command' => 'getDoctrine_DatabaseDropCommandService',
            'doctrine.database_import_command' => 'getDoctrine_DatabaseImportCommandService',
            'doctrine.dbal.connection_factory' => 'getDoctrine_Dbal_ConnectionFactoryService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.ensure_production_settings_command' => 'getDoctrine_EnsureProductionSettingsCommandService',
            'doctrine.generate_entities_command' => 'getDoctrine_GenerateEntitiesCommandService',
            'doctrine.mapping_convert_command' => 'getDoctrine_MappingConvertCommandService',
            'doctrine.mapping_import_command' => 'getDoctrine_MappingImportCommandService',
            'doctrine.mapping_info_command' => 'getDoctrine_MappingInfoCommandService',
            'doctrine.orm.default_entity_listener_resolver' => 'getDoctrine_Orm_DefaultEntityListenerResolverService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'doctrine.orm.default_entity_manager.property_info_extractor' => 'getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService',
            'doctrine.orm.default_listeners.attach_entity_listeners' => 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService',
            'doctrine.orm.default_manager_configurator' => 'getDoctrine_Orm_DefaultManagerConfiguratorService',
            'doctrine.orm.validator.unique' => 'getDoctrine_Orm_Validator_UniqueService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'doctrine.query_dql_command' => 'getDoctrine_QueryDqlCommandService',
            'doctrine.query_sql_command' => 'getDoctrine_QuerySqlCommandService',
            'doctrine.schema_create_command' => 'getDoctrine_SchemaCreateCommandService',
            'doctrine.schema_drop_command' => 'getDoctrine_SchemaDropCommandService',
            'doctrine.schema_update_command' => 'getDoctrine_SchemaUpdateCommandService',
            'doctrine.schema_validate_command' => 'getDoctrine_SchemaValidateCommandService',
            'doctrine_cache.contains_command' => 'getDoctrineCache_ContainsCommandService',
            'doctrine_cache.delete_command' => 'getDoctrineCache_DeleteCommandService',
            'doctrine_cache.flush_command' => 'getDoctrineCache_FlushCommandService',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => 'getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService',
            'doctrine_cache.stats_command' => 'getDoctrineCache_StatsCommandService',
            'filesystem' => 'getFilesystemService',
            'finder' => 'getFinderService',
            'form.type.entity' => 'getForm_Type_EntityService',
            'form.type_guesser.doctrine' => 'getForm_TypeGuesser_DoctrineService',
            'hashing' => 'getHashingService',
            'hook_configurator' => 'getHookConfiguratorService',
            'hook_provider' => 'getHookProviderService',
            'hook_repository' => 'getHookRepositoryService',
            'prestashop.adapter.data_provider.currency' => 'getPrestashop_Adapter_DataProvider_CurrencyService',
            'prestashop.adapter.environment' => 'getPrestashop_Adapter_EnvironmentService',
            'prestashop.adapter.legacy.configuration' => 'getPrestashop_Adapter_Legacy_ConfigurationService',
            'prestashop.adapter.legacy.context' => 'getPrestashop_Adapter_Legacy_ContextService',
            'prestashop.adapter.tools' => 'getPrestashop_Adapter_ToolsService',
            'prestashop.core.localization.cache.adapter' => 'getPrestashop_Core_Localization_Cache_AdapterService',
            'prestashop.core.localization.cldr.cache.adapter' => 'getPrestashop_Core_Localization_Cldr_Cache_AdapterService',
            'prestashop.core.localization.cldr.datalayer.locale_cache' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService',
            'prestashop.core.localization.cldr.datalayer.locale_reference' => 'getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService',
            'prestashop.core.localization.cldr.locale_data_source' => 'getPrestashop_Core_Localization_Cldr_LocaleDataSourceService',
            'prestashop.core.localization.cldr.locale_repository' => 'getPrestashop_Core_Localization_Cldr_LocaleRepositoryService',
            'prestashop.core.localization.cldr.reader' => 'getPrestashop_Core_Localization_Cldr_ReaderService',
            'prestashop.core.localization.currency.datasource' => 'getPrestashop_Core_Localization_Currency_DatasourceService',
            'prestashop.core.localization.currency.middleware.cache' => 'getPrestashop_Core_Localization_Currency_Middleware_CacheService',
            'prestashop.core.localization.currency.middleware.database' => 'getPrestashop_Core_Localization_Currency_Middleware_DatabaseService',
            'prestashop.core.localization.currency.middleware.installed' => 'getPrestashop_Core_Localization_Currency_Middleware_InstalledService',
            'prestashop.core.localization.currency.middleware.reference' => 'getPrestashop_Core_Localization_Currency_Middleware_ReferenceService',
            'prestashop.core.localization.currency.repository' => 'getPrestashop_Core_Localization_Currency_RepositoryService',
            'prestashop.core.localization.locale.repository' => 'getPrestashop_Core_Localization_Locale_RepositoryService',
            'prestashop.database.naming_strategy' => 'getPrestashop_Database_NamingStrategyService',
            'ps_accounts.facade' => 'getPsAccounts_FacadeService',
            'ps_accounts.installer' => 'getPsAccounts_InstallerService',
            'ps_checkout.adapter.language' => 'getPsCheckout_Adapter_LanguageService',
            'ps_checkout.api.firebase.auth' => 'getPsCheckout_Api_Firebase_AuthService',
            'ps_checkout.api.firebase.auth.factory' => 'getPsCheckout_Api_Firebase_Auth_FactoryService',
            'ps_checkout.api.psx.client' => 'getPsCheckout_Api_Psx_ClientService',
            'ps_checkout.api.psx.onboarding' => 'getPsCheckout_Api_Psx_OnboardingService',
            'ps_checkout.builder.payload.onboarding' => 'getPsCheckout_Builder_Payload_OnboardingService',
            'ps_checkout.cache.directory' => 'getPsCheckout_Cache_DirectoryService',
            'ps_checkout.cache.paypal.merchant_integration' => 'getPsCheckout_Cache_Paypal_MerchantIntegrationService',
            'ps_checkout.cache.paypal.order' => 'getPsCheckout_Cache_Paypal_OrderService',
            'ps_checkout.configuration' => 'getPsCheckout_ConfigurationService',
            'ps_checkout.configuration.options.resolver' => 'getPsCheckout_Configuration_Options_ResolverService',
            'ps_checkout.context.prestashop' => 'getPsCheckout_Context_PrestashopService',
            'ps_checkout.context.shop' => 'getPsCheckout_Context_ShopService',
            'ps_checkout.customer' => 'getPsCheckout_CustomerService',
            'ps_checkout.env.segmentenv' => 'getPsCheckout_Env_SegmentenvService',
            'ps_checkout.env.sentry' => 'getPsCheckout_Env_SentryService',
            'ps_checkout.express_checkout.configuration' => 'getPsCheckout_ExpressCheckout_ConfigurationService',
            'ps_checkout.funding_source.collection' => 'getPsCheckout_FundingSource_CollectionService',
            'ps_checkout.funding_source.collection.builder' => 'getPsCheckout_FundingSource_Collection_BuilderService',
            'ps_checkout.funding_source.configuration' => 'getPsCheckout_FundingSource_ConfigurationService',
            'ps_checkout.funding_source.configuration.repository' => 'getPsCheckout_FundingSource_Configuration_RepositoryService',
            'ps_checkout.funding_source.eligibility_constraint' => 'getPsCheckout_FundingSource_EligibilityConstraintService',
            'ps_checkout.funding_source.entity' => 'getPsCheckout_FundingSource_EntityService',
            'ps_checkout.funding_source.presenter' => 'getPsCheckout_FundingSource_PresenterService',
            'ps_checkout.funding_source.provider' => 'getPsCheckout_FundingSource_ProviderService',
            'ps_checkout.funding_source.translation' => 'getPsCheckout_FundingSource_TranslationService',
            'ps_checkout.handler.exception' => 'getPsCheckout_Handler_ExceptionService',
            'ps_checkout.logger' => 'getPsCheckout_LoggerService',
            'ps_checkout.logger.configuration' => 'getPsCheckout_Logger_ConfigurationService',
            'ps_checkout.logger.directory' => 'getPsCheckout_Logger_DirectoryService',
            'ps_checkout.logger.factory' => 'getPsCheckout_Logger_FactoryService',
            'ps_checkout.logger.file.finder' => 'getPsCheckout_Logger_File_FinderService',
            'ps_checkout.logger.file.reader' => 'getPsCheckout_Logger_File_ReaderService',
            'ps_checkout.logger.filename' => 'getPsCheckout_Logger_FilenameService',
            'ps_checkout.logger.handler' => 'getPsCheckout_Logger_HandlerService',
            'ps_checkout.logger.handler.factory' => 'getPsCheckout_Logger_Handler_FactoryService',
            'ps_checkout.manager.shopuuid' => 'getPsCheckout_Manager_ShopuuidService',
            'ps_checkout.merchant' => 'getPsCheckout_MerchantService',
            'ps_checkout.module' => 'getPsCheckout_ModuleService',
            'ps_checkout.pay_in_4x.configuration' => 'getPsCheckout_PayIn4x_ConfigurationService',
            'ps_checkout.paypal.configuration' => 'getPsCheckout_Paypal_ConfigurationService',
            'ps_checkout.paypal.provider.merchant_integration' => 'getPsCheckout_Paypal_Provider_MerchantIntegrationService',
            'ps_checkout.paypal.provider.order' => 'getPsCheckout_Paypal_Provider_OrderService',
            'ps_checkout.persistent.configuration' => 'getPsCheckout_Persistent_ConfigurationService',
            'ps_checkout.presenter.order.pending' => 'getPsCheckout_Presenter_Order_PendingService',
            'ps_checkout.presenter.transaction' => 'getPsCheckout_Presenter_TransactionService',
            'ps_checkout.repository.country' => 'getPsCheckout_Repository_CountryService',
            'ps_checkout.repository.order' => 'getPsCheckout_Repository_OrderService',
            'ps_checkout.repository.orderpayment' => 'getPsCheckout_Repository_OrderpaymentService',
            'ps_checkout.repository.paypal.account' => 'getPsCheckout_Repository_Paypal_AccountService',
            'ps_checkout.repository.paypal.code' => 'getPsCheckout_Repository_Paypal_CodeService',
            'ps_checkout.repository.prestashop.account' => 'getPsCheckout_Repository_Prestashop_AccountService',
            'ps_checkout.repository.pscheckoutcart' => 'getPsCheckout_Repository_PscheckoutcartService',
            'ps_checkout.sdk.paypal.linkbuilder' => 'getPsCheckout_Sdk_Paypal_LinkbuilderService',
            'ps_checkout.segment.tracker' => 'getPsCheckout_Segment_TrackerService',
            'ps_checkout.shop.provider' => 'getPsCheckout_Shop_ProviderService',
            'ps_checkout.step.live' => 'getPsCheckout_Step_LiveService',
            'ps_checkout.step.value' => 'getPsCheckout_Step_ValueService',
            'ps_checkout.store.module.configuration' => 'getPsCheckout_Store_Module_ConfigurationService',
            'ps_checkout.store.module.context' => 'getPsCheckout_Store_Module_ContextService',
            'ps_checkout.store.module.firebase' => 'getPsCheckout_Store_Module_FirebaseService',
            'ps_checkout.store.module.paypal' => 'getPsCheckout_Store_Module_PaypalService',
            'ps_checkout.store.module.psx' => 'getPsCheckout_Store_Module_PsxService',
            'ps_checkout.store.store' => 'getPsCheckout_Store_StoreService',
            'ps_checkout.translations.translations' => 'getPsCheckout_Translations_TranslationsService',
            'ps_checkout.updater.paypal.account' => 'getPsCheckout_Updater_Paypal_AccountService',
            'ps_checkout.validator.front_controller' => 'getPsCheckout_Validator_FrontControllerService',
            'ps_checkout.validator.merchant' => 'getPsCheckout_Validator_MerchantService',
            'ps_facebook' => 'getPsFacebookService',
            'ps_facebook.cache' => 'getPsFacebook_CacheService',
            'ps_facebook.context' => 'getPsFacebook_ContextService',
            'ps_facebook.controller' => 'getPsFacebook_ControllerService',
            'ps_facebook.cookie' => 'getPsFacebook_CookieService',
            'ps_facebook.currency' => 'getPsFacebook_CurrencyService',
            'ps_facebook.language' => 'getPsFacebook_LanguageService',
            'ps_facebook.link' => 'getPsFacebook_LinkService',
            'ps_facebook.shop' => 'getPsFacebook_ShopService',
            'ps_facebook.smarty' => 'getPsFacebook_SmartyService',
            'ps_metrics.adapter.link' => 'getPsMetrics_Adapter_LinkService',
            'ps_metrics.adapter.logger' => 'getPsMetrics_Adapter_LoggerService',
            'ps_metrics.api.analytics' => 'getPsMetrics_Api_AnalyticsService',
            'ps_metrics.api.client.analytics' => 'getPsMetrics_Api_Client_AnalyticsService',
            'ps_metrics.api.client.factory' => 'getPsMetrics_Api_Client_FactoryService',
            'ps_metrics.api.client.http' => 'getPsMetrics_Api_Client_HttpService',
            'ps_metrics.api.http' => 'getPsMetrics_Api_HttpService',
            'ps_metrics.api.manager' => 'getPsMetrics_Api_ManagerService',
            'ps_metrics.cache.data' => 'getPsMetrics_Cache_DataService',
            'ps_metrics.cache.specificdirectory' => 'getPsMetrics_Cache_SpecificdirectoryService',
            'ps_metrics.context.prestashop' => 'getPsMetrics_Context_PrestashopService',
            'ps_metrics.data.tipscards' => 'getPsMetrics_Data_TipscardsService',
            'ps_metrics.env.analytics' => 'getPsMetrics_Env_AnalyticsService',
            'ps_metrics.env.cache' => 'getPsMetrics_Env_CacheService',
            'ps_metrics.env.segment' => 'getPsMetrics_Env_SegmentService',
            'ps_metrics.graphql.dataloaders' => 'getPsMetrics_Graphql_DataloadersService',
            'ps_metrics.graphql.dataloaders.avgsessions' => 'getPsMetrics_Graphql_Dataloaders_AvgsessionsService',
            'ps_metrics.graphql.dataloaders.bouncerate' => 'getPsMetrics_Graphql_Dataloaders_BouncerateService',
            'ps_metrics.graphql.dataloaders.cartabandonedaverage' => 'getPsMetrics_Graphql_Dataloaders_CartabandonedaverageService',
            'ps_metrics.graphql.dataloaders.conversionrate' => 'getPsMetrics_Graphql_Dataloaders_ConversionrateService',
            'ps_metrics.graphql.dataloaders.engagementrate' => 'getPsMetrics_Graphql_Dataloaders_EngagementrateService',
            'ps_metrics.graphql.dataloaders.factory' => 'getPsMetrics_Graphql_Dataloaders_FactoryService',
            'ps_metrics.graphql.dataloaders.orderaverage' => 'getPsMetrics_Graphql_Dataloaders_OrderaverageService',
            'ps_metrics.graphql.dataloaders.orderaveragegroupbydate' => 'getPsMetrics_Graphql_Dataloaders_OrderaveragegroupbydateService',
            'ps_metrics.graphql.dataloaders.ordergroupbycustomer' => 'getPsMetrics_Graphql_Dataloaders_OrdergroupbycustomerService',
            'ps_metrics.graphql.dataloaders.ordersum' => 'getPsMetrics_Graphql_Dataloaders_OrdersumService',
            'ps_metrics.graphql.dataloaders.ordersumgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_OrdersumgroupbydateService',
            'ps_metrics.graphql.dataloaders.ordersumgroupbysource' => 'getPsMetrics_Graphql_Dataloaders_OrdersumgroupbysourceService',
            'ps_metrics.graphql.dataloaders.producttopseller' => 'getPsMetrics_Graphql_Dataloaders_ProducttopsellerService',
            'ps_metrics.graphql.dataloaders.revenuegross' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbycategoriesService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydateService',
            'ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution' => 'getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydistributionService',
            'ps_metrics.graphql.dataloaders.sessions' => 'getPsMetrics_Graphql_Dataloaders_SessionsService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbycategory' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbycategoryService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbydate' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbydateService',
            'ps_metrics.graphql.dataloaders.sessionsgroupbyhour' => 'getPsMetrics_Graphql_Dataloaders_SessionsgroupbyhourService',
            'ps_metrics.graphql.dataloaders.setProductTourAdvancedDone' => 'getPsMetrics_Graphql_Dataloaders_SetProductTourAdvancedDoneService',
            'ps_metrics.graphql.dataloaders.setProductTourFreeDone' => 'getPsMetrics_Graphql_Dataloaders_SetProductTourFreeDoneService',
            'ps_metrics.graphql.dataloaders.tipscards' => 'getPsMetrics_Graphql_Dataloaders_TipscardsService',
            'ps_metrics.graphql.dataloaders.uniqueusers' => 'getPsMetrics_Graphql_Dataloaders_UniqueusersService',
            'ps_metrics.handler.guzzleapi' => 'getPsMetrics_Handler_GuzzleapiService',
            'ps_metrics.helper.api' => 'getPsMetrics_Helper_ApiService',
            'ps_metrics.helper.data' => 'getPsMetrics_Helper_DataService',
            'ps_metrics.helper.db' => 'getPsMetrics_Helper_DbService',
            'ps_metrics.helper.json' => 'getPsMetrics_Helper_JsonService',
            'ps_metrics.helper.module' => 'getPsMetrics_Helper_ModuleService',
            'ps_metrics.helper.number' => 'getPsMetrics_Helper_NumberService',
            'ps_metrics.helper.segment' => 'getPsMetrics_Helper_SegmentService',
            'ps_metrics.helper.shop' => 'getPsMetrics_Helper_ShopService',
            'ps_metrics.helper.tools' => 'getPsMetrics_Helper_ToolsService',
            'ps_metrics.kpi.configuration' => 'getPsMetrics_Kpi_ConfigurationService',
            'ps_metrics.kpi.conversion' => 'getPsMetrics_Kpi_ConversionService',
            'ps_metrics.kpi.kpi' => 'getPsMetrics_Kpi_KpiService',
            'ps_metrics.kpi.manager' => 'getPsMetrics_Kpi_ManagerService',
            'ps_metrics.kpi.orders' => 'getPsMetrics_Kpi_OrdersService',
            'ps_metrics.kpi.revenues' => 'getPsMetrics_Kpi_RevenuesService',
            'ps_metrics.kpi.strategyinterface' => 'getPsMetrics_Kpi_StrategyinterfaceService',
            'ps_metrics.kpi.total' => 'getPsMetrics_Kpi_TotalService',
            'ps_metrics.kpi.visits' => 'getPsMetrics_Kpi_VisitsService',
            'ps_metrics.middleware' => 'getPsMetrics_MiddlewareService',
            'ps_metrics.middleware.log' => 'getPsMetrics_Middleware_LogService',
            'ps_metrics.middleware.response' => 'getPsMetrics_Middleware_ResponseService',
            'ps_metrics.middleware.response.default' => 'getPsMetrics_Middleware_Response_DefaultService',
            'ps_metrics.middleware.sentry' => 'getPsMetrics_Middleware_SentryService',
            'ps_metrics.module' => 'getPsMetrics_ModuleService',
            'ps_metrics.module.dashboard.modules' => 'getPsMetrics_Module_Dashboard_ModulesService',
            'ps_metrics.module.gainstaller' => 'getPsMetrics_Module_GainstallerService',
            'ps_metrics.module.install' => 'getPsMetrics_Module_InstallService',
            'ps_metrics.module.uninstall' => 'getPsMetrics_Module_UninstallService',
            'ps_metrics.presenter.store.context' => 'getPsMetrics_Presenter_Store_ContextService',
            'ps_metrics.presenter.store.dashboard' => 'getPsMetrics_Presenter_Store_DashboardService',
            'ps_metrics.presenter.store.settings' => 'getPsMetrics_Presenter_Store_SettingsService',
            'ps_metrics.presenter.store.store' => 'getPsMetrics_Presenter_Store_StoreService',
            'ps_metrics.provider.analyticsaccountslist' => 'getPsMetrics_Provider_AnalyticsaccountslistService',
            'ps_metrics.provider.googletag' => 'getPsMetrics_Provider_GoogletagService',
            'ps_metrics.provider.shops' => 'getPsMetrics_Provider_ShopsService',
            'ps_metrics.repository.configuration' => 'getPsMetrics_Repository_ConfigurationService',
            'ps_metrics.repository.hookmodule' => 'getPsMetrics_Repository_HookmoduleService',
            'ps_metrics.repository.orders' => 'getPsMetrics_Repository_OrdersService',
            'ps_metrics.repository.payment' => 'getPsMetrics_Repository_PaymentService',
            'ps_metrics.tracker.segment' => 'getPsMetrics_Tracker_SegmentService',
            'ps_metrics.translation.dashboard' => 'getPsMetrics_Translation_DashboardService',
            'ps_metrics.translation.settings' => 'getPsMetrics_Translation_SettingsService',
            'ps_metrics.validation.processselectaccountanalytics' => 'getPsMetrics_Validation_ProcessselectaccountanalyticsService',
            'ps_metrics.validation.retrievedata' => 'getPsMetrics_Validation_RetrievedataService',
            'theme_manager' => 'getThemeManagerService',
            'theme_validator' => 'getThemeValidatorService',
        ];
        $this->privates = [
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookCategoryClient' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Database\\Installer' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Database\\Uninstaller' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\GoogleCategoryEssentialsApiClientFactory' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository' => true,
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => true,
            'PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations' => true,
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => true,
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => true,
            'annotation_reader' => true,
            'context.static' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'filesystem' => true,
            'finder' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'hook_configurator' => true,
            'hook_provider' => true,
            'hook_repository' => true,
            'prestashop.database.naming_strategy' => true,
            'ps_facebook' => true,
            'ps_facebook.cache' => true,
            'ps_facebook.context' => true,
            'ps_facebook.controller' => true,
            'ps_facebook.cookie' => true,
            'ps_facebook.currency' => true,
            'ps_facebook.language' => true,
            'ps_facebook.link' => true,
            'ps_facebook.shop' => true,
            'ps_facebook.smarty' => true,
            'ps_metrics.module' => true,
            'theme_manager' => true,
            'theme_validator' => true,
        ];
        $this->aliases = [
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider',
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => 'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'prestashop.core.localization.cldr.datalayer.top_layer' => 'prestashop.core.localization.cldr.datalayer.locale_cache',
            'prestashop.core.localization.currency.middleware.top_layer' => 'prestashop.core.localization.currency.middleware.cache',
        ];
    }

    public function getRemovedIds()
    {
        return [
            'Doctrine\\Common\\Persistence\\ManagerRegistry' => true,
            'Doctrine\\Common\\Persistence\\ObjectManager' => true,
            'Doctrine\\DBAL\\Connection' => true,
            'Doctrine\\DBAL\\Driver\\Connection' => true,
            'Doctrine\\ORM\\EntityManagerInterface' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookCategoryClient' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Config\\Env' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Database\\Installer' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Database\\Uninstaller' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\GoogleCategoryEssentialsApiClientFactory' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProviderInterface' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProviderInterface' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository' => true,
            'PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository' => true,
            'PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment' => true,
            'PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations' => true,
            'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => true,
            'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Bridge\\Doctrine\\RegistryInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'annotation_reader' => true,
            'context.static' => true,
            'data_collector.doctrine' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection' => true,
            'doctrine.dbal.connection.configuration' => true,
            'doctrine.dbal.connection.event_manager' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.default_connection.configuration' => true,
            'doctrine.dbal.default_connection.event_manager' => true,
            'doctrine.dbal.event_manager' => true,
            'doctrine.dbal.logger' => true,
            'doctrine.dbal.logger.chain' => true,
            'doctrine.dbal.logger.profiling' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.configuration' => true,
            'doctrine.orm.container_repository_factory' => true,
            'doctrine.orm.default_configuration' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.event_manager' => true,
            'doctrine.orm.default_entity_manager.metadata_factory' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.default_metadata_driver' => true,
            'doctrine.orm.entity_manager.abstract' => true,
            'doctrine.orm.listeners.resolve_target_entity' => true,
            'doctrine.orm.manager_configurator.abstract' => true,
            'doctrine.orm.metadata.annotation_reader' => true,
            'doctrine.orm.naming_strategy.default' => true,
            'doctrine.orm.naming_strategy.underscore' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.quote_strategy.ansi' => true,
            'doctrine.orm.quote_strategy.default' => true,
            'doctrine.orm.security.user.provider' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine.twig.doctrine_extension' => true,
            'doctrine_cache.abstract.apc' => true,
            'doctrine_cache.abstract.apcu' => true,
            'doctrine_cache.abstract.array' => true,
            'doctrine_cache.abstract.chain' => true,
            'doctrine_cache.abstract.couchbase' => true,
            'doctrine_cache.abstract.file_system' => true,
            'doctrine_cache.abstract.memcache' => true,
            'doctrine_cache.abstract.memcached' => true,
            'doctrine_cache.abstract.mongodb' => true,
            'doctrine_cache.abstract.php_file' => true,
            'doctrine_cache.abstract.predis' => true,
            'doctrine_cache.abstract.redis' => true,
            'doctrine_cache.abstract.riak' => true,
            'doctrine_cache.abstract.sqlite3' => true,
            'doctrine_cache.abstract.void' => true,
            'doctrine_cache.abstract.wincache' => true,
            'doctrine_cache.abstract.xcache' => true,
            'doctrine_cache.abstract.zenddata' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.stats_command' => true,
            'filesystem' => true,
            'finder' => true,
            'form.type.entity' => true,
            'form.type_guesser.doctrine' => true,
            'hashing' => true,
            'hook_configurator' => true,
            'hook_provider' => true,
            'hook_repository' => true,
            'prestashop.database.naming_strategy' => true,
            'ps_facebook' => true,
            'ps_facebook.cache' => true,
            'ps_facebook.context' => true,
            'ps_facebook.controller' => true,
            'ps_facebook.cookie' => true,
            'ps_facebook.currency' => true,
            'ps_facebook.language' => true,
            'ps_facebook.link' => true,
            'ps_facebook.shop' => true,
            'ps_facebook.smarty' => true,
            'ps_metrics.module' => true,
            'theme_manager' => true,
            'theme_validator' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        return $this->services['doctrine.dbal.default_connection'] = ${($_ = isset($this->services['doctrine.dbal.connection_factory']) ? $this->services['doctrine.dbal.connection_factory'] : ($this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]))) && false ?: '_'}->createConnection(['driver' => 'pdo_mysql', 'host' => 'db5005856751.hosting-data.io', 'port' => '', 'dbname' => 'dbs4911267', 'user' => 'dbu1233964', 'password' => 'hX4Z]C3/{!V:u}qj', 'charset' => 'UTF8', 'driverOptions' => [1002 => 'SET sql_mode=(SELECT REPLACE(@@sql_mode,\'ONLY_FULL_GROUP_BY\',\'\'))'], 'serverVersion' => 5.1, 'defaultTableOptions' => []], new \Doctrine\DBAL\Configuration(), new \Symfony\Bridge\Doctrine\ContainerAwareEventManager($this), ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();

        $c = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : ($this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader())) && false ?: '_'}, [0 => '/homepages/34/d802225033/htdocs/runize.es/modules/ps_checkout/src/Entity']);
        $c->addExcludePaths([0 => '/homepages/34/d802225033/htdocs/runize.es/modules/ps_checkout/src/Entity/index.php']);

        $b->addDriver($c, 'PrestaShop\\Module\\PrestashopCheckout\\Entity');

        $a->setEntityNamespaces([]);
        $a->setMetadataCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()) && false ?: '_'});
        $a->setQueryCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_query_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()) && false ?: '_'});
        $a->setResultCacheImpl(${($_ = isset($this->services['doctrine_cache.providers.doctrine.orm.default_result_cache']) ? $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] : $this->getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()) && false ?: '_'});
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir('/homepages/34/d802225033/htdocs/runize.es/var/cache/prod//doctrine/orm/Proxies');
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(false);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(${($_ = isset($this->services['prestashop.database.naming_strategy']) ? $this->services['prestashop.database.naming_strategy'] : ($this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_'))) && false ?: '_'});
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(${($_ = isset($this->services['doctrine.orm.default_entity_listener_resolver']) ? $this->services['doctrine.orm.default_entity_listener_resolver'] : ($this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this))) && false ?: '_'});
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\ServiceLocator([])));
        $a->addCustomStringFunction('regexp', 'DoctrineExtensions\\Query\\Mysql\\Regexp');
        $a->addEntityNamespace('ModulepsCheckout', 'PrestaShop\\Module\\PrestashopCheckout\\Entity');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, $a);

        ${($_ = isset($this->services['doctrine.orm.default_manager_configurator']) ? $this->services['doctrine.orm.default_manager_configurator'] : ($this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))) && false ?: '_'}->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_metadata_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_metadata_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_f94c31d9f597e52e3346744851eb44b9d5d57250d7aa7537c70a3126ce69ccff');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_query_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_query_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_f94c31d9f597e52e3346744851eb44b9d5d57250d7aa7537c70a3126ce69ccff');

        return $instance;
    }

    /**
     * Gets the public 'doctrine_cache.providers.doctrine.orm.default_result_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\ArrayCache
     */
    protected function getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService()
    {
        $this->services['doctrine_cache.providers.doctrine.orm.default_result_cache'] = $instance = new \Doctrine\Common\Cache\ArrayCache();

        $instance->setNamespace('sf_orm_default_f94c31d9f597e52e3346744851eb44b9d5d57250d7aa7537c70a3126ce69ccff');

        return $instance;
    }

    /**
     * Gets the public 'prestashop.adapter.data_provider.currency' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider
     */
    protected function getPrestashop_Adapter_DataProvider_CurrencyService()
    {
        return $this->services['prestashop.adapter.data_provider.currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration())) && false ?: '_'}, ((${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop) ? (${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->id) : (null)));
    }

    /**
     * Gets the public 'prestashop.adapter.environment' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Environment
     */
    protected function getPrestashop_Adapter_EnvironmentService()
    {
        return $this->services['prestashop.adapter.environment'] = new \PrestaShop\PrestaShop\Adapter\Environment(false);
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.configuration' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Configuration
     */
    protected function getPrestashop_Adapter_Legacy_ConfigurationService()
    {
        return $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration();
    }

    /**
     * Gets the public 'prestashop.adapter.legacy.context' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\LegacyContext
     */
    protected function getPrestashop_Adapter_Legacy_ContextService()
    {
        return $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext('/mails/themes', ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.adapter.tools' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Tools
     */
    protected function getPrestashop_Adapter_ToolsService()
    {
        return $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools();
    }

    /**
     * Gets the public 'prestashop.core.localization.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getPrestashop_Core_Localization_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.cache.adapter' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    protected function getPrestashop_Core_Localization_Cldr_Cache_AdapterService()
    {
        return $this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/homepages/34/d802225033/htdocs/runize.es/var/cache/prod//localization');
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()
    {
        $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleCache(${($_ = isset($this->services['prestashop.core.localization.cldr.cache.adapter']) ? $this->services['prestashop.core.localization.cldr.cache.adapter'] : ($this->services['prestashop.core.localization.cldr.cache.adapter'] = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('CLDR', 0, '/homepages/34/d802225033/htdocs/runize.es/var/cache/prod//localization'))) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_reference']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.datalayer.locale_reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference
     */
    protected function getPrestashop_Core_Localization_Cldr_Datalayer_LocaleReferenceService()
    {
        return $this->services['prestashop.core.localization.cldr.datalayer.locale_reference'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\DataLayer\LocaleReference(${($_ = isset($this->services['prestashop.core.localization.cldr.reader']) ? $this->services['prestashop.core.localization.cldr.reader'] : ($this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader())) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_data_source' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_data_source'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleDataSource(${($_ = isset($this->services['prestashop.core.localization.cldr.datalayer.locale_cache']) ? $this->services['prestashop.core.localization.cldr.datalayer.locale_cache'] : $this->getPrestashop_Core_Localization_Cldr_Datalayer_LocaleCacheService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.locale_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository
     */
    protected function getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()
    {
        return $this->services['prestashop.core.localization.cldr.locale_repository'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\LocaleRepository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_data_source']) ? $this->services['prestashop.core.localization.cldr.locale_data_source'] : $this->getPrestashop_Core_Localization_Cldr_LocaleDataSourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.cldr.reader' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader
     */
    protected function getPrestashop_Core_Localization_Cldr_ReaderService()
    {
        return $this->services['prestashop.core.localization.cldr.reader'] = new \PrestaShop\PrestaShop\Core\Localization\CLDR\Reader();
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.datasource' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource
     */
    protected function getPrestashop_Core_Localization_Currency_DatasourceService()
    {
        return $this->services['prestashop.core.localization.currency.datasource'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\CurrencyDataSource(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.cache']) ? $this->services['prestashop.core.localization.currency.middleware.cache'] : $this->getPrestashop_Core_Localization_Currency_Middleware_CacheService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.middleware.installed']) ? $this->services['prestashop.core.localization.currency.middleware.installed'] : $this->getPrestashop_Core_Localization_Currency_Middleware_InstalledService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.cache' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_CacheService()
    {
        $this->services['prestashop.core.localization.currency.middleware.cache'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyCache(${($_ = isset($this->services['prestashop.core.localization.cache.adapter']) ? $this->services['prestashop.core.localization.cache.adapter'] : ($this->services['prestashop.core.localization.cache.adapter'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter())) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.database']) ? $this->services['prestashop.core.localization.currency.middleware.database'] : $this->getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.database' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_DatabaseService()
    {
        $this->services['prestashop.core.localization.currency.middleware.database'] = $instance = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyDatabase(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});

        $instance->setLowerLayer(${($_ = isset($this->services['prestashop.core.localization.currency.middleware.reference']) ? $this->services['prestashop.core.localization.currency.middleware.reference'] : $this->getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.installed' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_InstalledService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.installed'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyInstalled(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.middleware.reference' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference
     */
    protected function getPrestashop_Core_Localization_Currency_Middleware_ReferenceService()
    {
        return $this->services['prestashop.core.localization.currency.middleware.reference'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\DataLayer\CurrencyReference(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.currency.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Currency\Repository
     */
    protected function getPrestashop_Core_Localization_Currency_RepositoryService()
    {
        return $this->services['prestashop.core.localization.currency.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Currency\Repository(${($_ = isset($this->services['prestashop.core.localization.currency.datasource']) ? $this->services['prestashop.core.localization.currency.datasource'] : $this->getPrestashop_Core_Localization_Currency_DatasourceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'prestashop.core.localization.locale.repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Localization\Locale\Repository
     */
    protected function getPrestashop_Core_Localization_Locale_RepositoryService()
    {
        return $this->services['prestashop.core.localization.locale.repository'] = new \PrestaShop\PrestaShop\Core\Localization\Locale\Repository(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->getPrestashop_Core_Localization_Cldr_LocaleRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.currency.repository']) ? $this->services['prestashop.core.localization.currency.repository'] : $this->getPrestashop_Core_Localization_Currency_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_accounts.facade' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccounts_FacadeService()
    {
        return $this->services['ps_accounts.facade'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['ps_accounts.installer']) ? $this->services['ps_accounts.installer'] : ($this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0'))) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_accounts.installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getPsAccounts_InstallerService()
    {
        return $this->services['ps_accounts.installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('5.0');
    }

    /**
     * Gets the public 'ps_checkout.adapter.language' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter
     */
    protected function getPsCheckout_Adapter_LanguageService()
    {
        return $this->services['ps_checkout.adapter.language'] = new \PrestaShop\Module\PrestashopCheckout\Adapter\LanguageAdapter(${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.api.firebase.auth' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth
     */
    protected function getPsCheckout_Api_Firebase_AuthService()
    {
        return $this->services['ps_checkout.api.firebase.auth'] = new \PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth();
    }

    /**
     * Gets the public 'ps_checkout.api.firebase.auth.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Api\Firebase\AuthFactory
     */
    protected function getPsCheckout_Api_Firebase_Auth_FactoryService()
    {
        return $this->services['ps_checkout.api.firebase.auth.factory'] = new \PrestaShop\Module\PrestashopCheckout\Api\Firebase\AuthFactory(${($_ = isset($this->services['ps_checkout.api.firebase.auth']) ? $this->services['ps_checkout.api.firebase.auth'] : ($this->services['ps_checkout.api.firebase.auth'] = new \PrestaShop\Module\PrestashopCheckout\Api\Firebase\Auth())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.persistent.configuration']) ? $this->services['ps_checkout.persistent.configuration'] : $this->getPsCheckout_Persistent_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.api.psx.client' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Api\Psx\Client\PsxClient
     */
    protected function getPsCheckout_Api_Psx_ClientService()
    {
        return $this->services['ps_checkout.api.psx.client'] = new \PrestaShop\Module\PrestashopCheckout\Api\Psx\Client\PsxClient();
    }

    /**
     * Gets the public 'ps_checkout.api.psx.onboarding' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Api\Psx\Onboarding
     */
    protected function getPsCheckout_Api_Psx_OnboardingService()
    {
        return $this->services['ps_checkout.api.psx.onboarding'] = new \PrestaShop\Module\PrestashopCheckout\Api\Psx\Onboarding();
    }

    /**
     * Gets the public 'ps_checkout.builder.payload.onboarding' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\Payload\OnboardingPayloadBuilder
     */
    protected function getPsCheckout_Builder_Payload_OnboardingService()
    {
        return $this->services['ps_checkout.builder.payload.onboarding'] = new \PrestaShop\Module\PrestashopCheckout\Builder\Payload\OnboardingPayloadBuilder(${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.adapter.language']) ? $this->services['ps_checkout.adapter.language'] : $this->getPsCheckout_Adapter_LanguageService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.cache.directory' shared service.
     *
     * @return \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider
     */
    protected function getPsCheckout_Cache_DirectoryService()
    {
        return $this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.6.9', '/homepages/34/d802225033/htdocs/runize.es', false);
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.merchant_integration' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\FilesystemCache
     */
    protected function getPsCheckout_Cache_Paypal_MerchantIntegrationService()
    {
        return $this->services['ps_checkout.cache.paypal.merchant_integration'] = new \Symfony\Component\Cache\Simple\FilesystemCache('merchant-integration', 86400, ${($_ = isset($this->services['ps_checkout.cache.directory']) ? $this->services['ps_checkout.cache.directory'] : ($this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.6.9', '/homepages/34/d802225033/htdocs/runize.es', false))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the public 'ps_checkout.cache.paypal.order' shared service.
     *
     * @return \Symfony\Component\Cache\Simple\FilesystemCache
     */
    protected function getPsCheckout_Cache_Paypal_OrderService()
    {
        return $this->services['ps_checkout.cache.paypal.order'] = new \Symfony\Component\Cache\Simple\FilesystemCache('paypal-orders', 3600, ${($_ = isset($this->services['ps_checkout.cache.directory']) ? $this->services['ps_checkout.cache.directory'] : ($this->services['ps_checkout.cache.directory'] = new \PrestaShop\ModuleLibCacheDirectoryProvider\Cache\CacheDirectoryProvider('1.7.6.9', '/homepages/34/d802225033/htdocs/runize.es', false))) && false ?: '_'}->getPath());
    }

    /**
     * Gets the public 'ps_checkout.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration
     */
    protected function getPsCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfiguration(${($_ = isset($this->services['ps_checkout.configuration.options.resolver']) ? $this->services['ps_checkout.configuration.options.resolver'] : $this->getPsCheckout_Configuration_Options_ResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.configuration.options.resolver' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver
     */
    protected function getPsCheckout_Configuration_Options_ResolverService()
    {
        return $this->services['ps_checkout.configuration.options.resolver'] = new \PrestaShop\Module\PrestashopCheckout\Configuration\PrestaShopConfigurationOptionsResolver(${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}->getIdentifier());
    }

    /**
     * Gets the public 'ps_checkout.context.prestashop' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext
     */
    protected function getPsCheckout_Context_PrestashopService()
    {
        return $this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext();
    }

    /**
     * Gets the public 'ps_checkout.context.shop' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopContext
     */
    protected function getPsCheckout_Context_ShopService()
    {
        return $this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext();
    }

    /**
     * Gets the public 'ps_checkout.customer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Customer
     */
    protected function getPsCheckout_CustomerService()
    {
        return $this->services['ps_checkout.customer'] = new \PrestaShop\Module\PrestashopCheckout\Customer(${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.env.segmentenv' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv
     */
    protected function getPsCheckout_Env_SegmentenvService()
    {
        return $this->services['ps_checkout.env.segmentenv'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv();
    }

    /**
     * Gets the public 'ps_checkout.env.sentry' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv
     */
    protected function getPsCheckout_Env_SentryService()
    {
        return $this->services['ps_checkout.env.sentry'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv();
    }

    /**
     * Gets the public 'ps_checkout.express_checkout.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration
     */
    protected function getPsCheckout_ExpressCheckout_ConfigurationService()
    {
        return $this->services['ps_checkout.express_checkout.configuration'] = new \PrestaShop\Module\PrestashopCheckout\ExpressCheckout\ExpressCheckoutConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.collection' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection
     */
    protected function getPsCheckout_FundingSource_CollectionService()
    {
        return $this->services['ps_checkout.funding_source.collection'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollection(${($_ = isset($this->services['ps_checkout.funding_source.collection.builder']) ? $this->services['ps_checkout.funding_source.collection.builder'] : $this->getPsCheckout_FundingSource_Collection_BuilderService()) && false ?: '_'}->create());
    }

    /**
     * Gets the public 'ps_checkout.funding_source.collection.builder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder
     */
    protected function getPsCheckout_FundingSource_Collection_BuilderService()
    {
        return $this->services['ps_checkout.funding_source.collection.builder'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceCollectionBuilder(${($_ = isset($this->services['ps_checkout.funding_source.configuration']) ? $this->services['ps_checkout.funding_source.configuration'] : $this->getPsCheckout_FundingSource_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.eligibility_constraint']) ? $this->services['ps_checkout.funding_source.eligibility_constraint'] : ($this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration
     */
    protected function getPsCheckout_FundingSource_ConfigurationService()
    {
        return $this->services['ps_checkout.funding_source.configuration'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfiguration(${($_ = isset($this->services['ps_checkout.funding_source.configuration.repository']) ? $this->services['ps_checkout.funding_source.configuration.repository'] : $this->getPsCheckout_FundingSource_Configuration_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.configuration.repository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository
     */
    protected function getPsCheckout_FundingSource_Configuration_RepositoryService()
    {
        return $this->services['ps_checkout.funding_source.configuration.repository'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceConfigurationRepository(${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.eligibility_constraint' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint
     */
    protected function getPsCheckout_FundingSource_EligibilityConstraintService()
    {
        return $this->services['ps_checkout.funding_source.eligibility_constraint'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEligibilityConstraint();
    }

    /**
     * Gets the public 'ps_checkout.funding_source.entity' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity
     */
    protected function getPsCheckout_FundingSource_EntityService()
    {
        return $this->services['ps_checkout.funding_source.entity'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceEntity();
    }

    /**
     * Gets the public 'ps_checkout.funding_source.presenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter
     */
    protected function getPsCheckout_FundingSource_PresenterService()
    {
        return $this->services['ps_checkout.funding_source.presenter'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourcePresenter(${($_ = isset($this->services['ps_checkout.funding_source.translation']) ? $this->services['ps_checkout.funding_source.translation'] : $this->getPsCheckout_FundingSource_TranslationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.country']) ? $this->services['ps_checkout.repository.country'] : ($this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.provider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider
     */
    protected function getPsCheckout_FundingSource_ProviderService()
    {
        return $this->services['ps_checkout.funding_source.provider'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceProvider(${($_ = isset($this->services['ps_checkout.funding_source.collection.builder']) ? $this->services['ps_checkout.funding_source.collection.builder'] : $this->getPsCheckout_FundingSource_Collection_BuilderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.presenter']) ? $this->services['ps_checkout.funding_source.presenter'] : $this->getPsCheckout_FundingSource_PresenterService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.funding_source.translation' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider
     */
    protected function getPsCheckout_FundingSource_TranslationService()
    {
        return $this->services['ps_checkout.funding_source.translation'] = new \PrestaShop\Module\PrestashopCheckout\FundingSource\FundingSourceTranslationProvider(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.handler.exception' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Handler\ExceptionHandler
     */
    protected function getPsCheckout_Handler_ExceptionService()
    {
        return $this->services['ps_checkout.handler.exception'] = new \PrestaShop\Module\PrestashopCheckout\Handler\ExceptionHandler(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.env.sentry']) ? $this->services['ps_checkout.env.sentry'] : ($this->services['ps_checkout.env.sentry'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SentryEnv())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger' shared service.
     *
     * @return \Psr\Log\LoggerInterface
     */
    protected function getPsCheckout_LoggerService()
    {
        return $this->services['ps_checkout.logger'] = ${($_ = isset($this->services['ps_checkout.logger.factory']) ? $this->services['ps_checkout.logger.factory'] : $this->getPsCheckout_Logger_FactoryService()) && false ?: '_'}->build(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.6.9', '/homepages/34/d802225033/htdocs/runize.es'))) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration
     */
    protected function getPsCheckout_Logger_ConfigurationService()
    {
        return $this->services['ps_checkout.logger.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.directory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory
     */
    protected function getPsCheckout_Logger_DirectoryService()
    {
        return $this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.6.9', '/homepages/34/d802225033/htdocs/runize.es');
    }

    /**
     * Gets the public 'ps_checkout.logger.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory
     */
    protected function getPsCheckout_Logger_FactoryService()
    {
        return $this->services['ps_checkout.logger.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFactory(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.logger.handler']) ? $this->services['ps_checkout.logger.handler'] : $this->getPsCheckout_Logger_HandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.file.finder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder
     */
    protected function getPsCheckout_Logger_File_FinderService()
    {
        return $this->services['ps_checkout.logger.file.finder'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileFinder(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.6.9', '/homepages/34/d802225033/htdocs/runize.es'))) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.logger.filename']) ? $this->services['ps_checkout.logger.filename'] : $this->getPsCheckout_Logger_FilenameService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.logger.file.reader' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader
     */
    protected function getPsCheckout_Logger_File_ReaderService()
    {
        return $this->services['ps_checkout.logger.file.reader'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFileReader();
    }

    /**
     * Gets the public 'ps_checkout.logger.filename' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename
     */
    protected function getPsCheckout_Logger_FilenameService()
    {
        return $this->services['ps_checkout.logger.filename'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerFilename(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'}->getIdentifier());
    }

    /**
     * Gets the public 'ps_checkout.logger.handler' shared service.
     *
     * @return \Monolog\Handler\HandlerInterface
     */
    protected function getPsCheckout_Logger_HandlerService()
    {
        return $this->services['ps_checkout.logger.handler'] = ${($_ = isset($this->services['ps_checkout.logger.handler.factory']) ? $this->services['ps_checkout.logger.handler.factory'] : $this->getPsCheckout_Logger_Handler_FactoryService()) && false ?: '_'}->build();
    }

    /**
     * Gets the public 'ps_checkout.logger.handler.factory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory
     */
    protected function getPsCheckout_Logger_Handler_FactoryService()
    {
        return $this->services['ps_checkout.logger.handler.factory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerHandlerFactory(${($_ = isset($this->services['ps_checkout.logger.directory']) ? $this->services['ps_checkout.logger.directory'] : ($this->services['ps_checkout.logger.directory'] = new \PrestaShop\Module\PrestashopCheckout\Logger\LoggerDirectory('1.7.6.9', '/homepages/34/d802225033/htdocs/runize.es'))) && false ?: '_'}->getPath(), ${($_ = isset($this->services['ps_checkout.logger.filename']) ? $this->services['ps_checkout.logger.filename'] : $this->getPsCheckout_Logger_FilenameService()) && false ?: '_'}->get(), ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->getPsCheckout_Logger_ConfigurationService()) && false ?: '_'}->getMaxFiles(), ${($_ = isset($this->services['ps_checkout.logger.configuration']) ? $this->services['ps_checkout.logger.configuration'] : $this->getPsCheckout_Logger_ConfigurationService()) && false ?: '_'}->getLevel());
    }

    /**
     * Gets the public 'ps_checkout.manager.shopuuid' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\ShopUuidManager
     */
    protected function getPsCheckout_Manager_ShopuuidService()
    {
        return $this->services['ps_checkout.manager.shopuuid'] = new \PrestaShop\Module\PrestashopCheckout\ShopUuidManager();
    }

    /**
     * Gets the public 'ps_checkout.merchant' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Merchant
     */
    protected function getPsCheckout_MerchantService()
    {
        return $this->services['ps_checkout.merchant'] = new \PrestaShop\Module\PrestashopCheckout\Merchant();
    }

    /**
     * Gets the public 'ps_checkout.module' shared service.
     *
     * @return \Ps_checkout
     */
    protected function getPsCheckout_ModuleService()
    {
        return $this->services['ps_checkout.module'] = \Module::getInstanceByName('ps_checkout');
    }

    /**
     * Gets the public 'ps_checkout.pay_in_4x.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayIn4XConfiguration
     */
    protected function getPsCheckout_PayIn4x_ConfigurationService()
    {
        return $this->services['ps_checkout.pay_in_4x.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalPayIn4XConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.customer']) ? $this->services['ps_checkout.customer'] : $this->getPsCheckout_CustomerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.merchant']) ? $this->services['ps_checkout.merchant'] : ($this->services['ps_checkout.merchant'] = new \PrestaShop\Module\PrestashopCheckout\Merchant())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.paypal.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration
     */
    protected function getPsCheckout_Paypal_ConfigurationService()
    {
        return $this->services['ps_checkout.paypal.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.paypal.code']) ? $this->services['ps_checkout.repository.paypal.code'] : ($this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.paypal.provider.merchant_integration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalMerchantIntegrationProvider
     */
    protected function getPsCheckout_Paypal_Provider_MerchantIntegrationService()
    {
        return $this->services['ps_checkout.paypal.provider.merchant_integration'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalMerchantIntegrationProvider(${($_ = isset($this->services['ps_checkout.cache.paypal.merchant_integration']) ? $this->services['ps_checkout.cache.paypal.merchant_integration'] : $this->getPsCheckout_Cache_Paypal_MerchantIntegrationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.paypal.provider.order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider
     */
    protected function getPsCheckout_Paypal_Provider_OrderService()
    {
        return $this->services['ps_checkout.paypal.provider.order'] = new \PrestaShop\Module\PrestashopCheckout\PayPal\PayPalOrderProvider(${($_ = isset($this->services['ps_checkout.cache.paypal.order']) ? $this->services['ps_checkout.cache.paypal.order'] : $this->getPsCheckout_Cache_Paypal_OrderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.persistent.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\PersistentConfiguration
     */
    protected function getPsCheckout_Persistent_ConfigurationService()
    {
        return $this->services['ps_checkout.persistent.configuration'] = new \PrestaShop\Module\PrestashopCheckout\PersistentConfiguration(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.presenter.order.pending' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Order\OrderPendingPresenter
     */
    protected function getPsCheckout_Presenter_Order_PendingService()
    {
        return $this->services['ps_checkout.presenter.order.pending'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Order\OrderPendingPresenter();
    }

    /**
     * Gets the public 'ps_checkout.presenter.transaction' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Transaction\TransactionPresenter
     */
    protected function getPsCheckout_Presenter_TransactionService()
    {
        return $this->services['ps_checkout.presenter.transaction'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Transaction\TransactionPresenter();
    }

    /**
     * Gets the public 'ps_checkout.repository.country' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository
     */
    protected function getPsCheckout_Repository_CountryService()
    {
        return $this->services['ps_checkout.repository.country'] = new \PrestaShop\Module\PrestashopCheckout\Repository\CountryRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.order' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\OrderRepository
     */
    protected function getPsCheckout_Repository_OrderService()
    {
        return $this->services['ps_checkout.repository.order'] = new \PrestaShop\Module\PrestashopCheckout\Repository\OrderRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.orderpayment' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\OrderPaymentRepository
     */
    protected function getPsCheckout_Repository_OrderpaymentService()
    {
        return $this->services['ps_checkout.repository.orderpayment'] = new \PrestaShop\Module\PrestashopCheckout\Repository\OrderPaymentRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.paypal.account' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PaypalAccountRepository
     */
    protected function getPsCheckout_Repository_Paypal_AccountService()
    {
        return $this->services['ps_checkout.repository.paypal.account'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PaypalAccountRepository(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.repository.paypal.code' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository
     */
    protected function getPsCheckout_Repository_Paypal_CodeService()
    {
        return $this->services['ps_checkout.repository.paypal.code'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PayPalCodeRepository();
    }

    /**
     * Gets the public 'ps_checkout.repository.prestashop.account' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository
     */
    protected function getPsCheckout_Repository_Prestashop_AccountService()
    {
        return $this->services['ps_checkout.repository.prestashop.account'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsAccountRepository(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.repository.pscheckoutcart' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository
     */
    protected function getPsCheckout_Repository_PscheckoutcartService()
    {
        return $this->services['ps_checkout.repository.pscheckoutcart'] = new \PrestaShop\Module\PrestashopCheckout\Repository\PsCheckoutCartRepository();
    }

    /**
     * Gets the public 'ps_checkout.sdk.paypal.linkbuilder' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder
     */
    protected function getPsCheckout_Sdk_Paypal_LinkbuilderService()
    {
        return $this->services['ps_checkout.sdk.paypal.linkbuilder'] = new \PrestaShop\Module\PrestashopCheckout\Builder\PayPalSdkLink\PayPalSdkLinkBuilder(${($_ = isset($this->services['ps_checkout.repository.paypal.account']) ? $this->services['ps_checkout.repository.paypal.account'] : $this->getPsCheckout_Repository_Paypal_AccountService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.pay_in_4x.configuration']) ? $this->services['ps_checkout.pay_in_4x.configuration'] : $this->getPsCheckout_PayIn4x_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.configuration.repository']) ? $this->services['ps_checkout.funding_source.configuration.repository'] : $this->getPsCheckout_FundingSource_Configuration_RepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.segment.tracker' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Segment\SegmentTracker
     */
    protected function getPsCheckout_Segment_TrackerService()
    {
        return $this->services['ps_checkout.segment.tracker'] = new \PrestaShop\Module\PrestashopCheckout\Segment\SegmentTracker(${($_ = isset($this->services['ps_checkout.env.segmentenv']) ? $this->services['ps_checkout.env.segmentenv'] : ($this->services['ps_checkout.env.segmentenv'] = new \PrestaShop\Module\PrestashopCheckout\Environment\SegmentEnv())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.manager.shopuuid']) ? $this->services['ps_checkout.manager.shopuuid'] : ($this->services['ps_checkout.manager.shopuuid'] = new \PrestaShop\Module\PrestashopCheckout\ShopUuidManager())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.shop.provider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider
     */
    protected function getPsCheckout_Shop_ProviderService()
    {
        return $this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider();
    }

    /**
     * Gets the public 'ps_checkout.step.live' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep
     */
    protected function getPsCheckout_Step_LiveService()
    {
        return $this->services['ps_checkout.step.live'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\LiveStep(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.step.value' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner
     */
    protected function getPsCheckout_Step_ValueService()
    {
        return $this->services['ps_checkout.step.value'] = new \PrestaShop\Module\PrestashopCheckout\OnBoarding\Step\ValueBanner(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.configuration' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule
     */
    protected function getPsCheckout_Store_Module_ConfigurationService()
    {
        return $this->services['ps_checkout.store.module.configuration'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ConfigurationModule(${($_ = isset($this->services['ps_checkout.pay_in_4x.configuration']) ? $this->services['ps_checkout.pay_in_4x.configuration'] : $this->getPsCheckout_PayIn4x_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.express_checkout.configuration']) ? $this->services['ps_checkout.express_checkout.configuration'] : $this->getPsCheckout_ExpressCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.funding_source.provider']) ? $this->services['ps_checkout.funding_source.provider'] : $this->getPsCheckout_FundingSource_ProviderService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.context' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule
     */
    protected function getPsCheckout_Store_Module_ContextService()
    {
        return $this->services['ps_checkout.store.module.context'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\ContextModule(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->name, ${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'}->module_key, ${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.configuration']) ? $this->services['ps_checkout.paypal.configuration'] : $this->getPsCheckout_Paypal_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.step.live']) ? $this->services['ps_checkout.step.live'] : $this->getPsCheckout_Step_LiveService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.step.value']) ? $this->services['ps_checkout.step.value'] : $this->getPsCheckout_Step_ValueService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.translations.translations']) ? $this->services['ps_checkout.translations.translations'] : $this->getPsCheckout_Translations_TranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.shop']) ? $this->services['ps_checkout.context.shop'] : ($this->services['ps_checkout.context.shop'] = new \PrestaShop\Module\PrestashopCheckout\ShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.shop.provider']) ? $this->services['ps_checkout.shop.provider'] : ($this->services['ps_checkout.shop.provider'] = new \PrestaShop\Module\PrestashopCheckout\Shop\ShopProvider())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.firebase' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\FirebaseModule
     */
    protected function getPsCheckout_Store_Module_FirebaseService()
    {
        return $this->services['ps_checkout.store.module.firebase'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\FirebaseModule(${($_ = isset($this->services['ps_checkout.configuration']) ? $this->services['ps_checkout.configuration'] : $this->getPsCheckout_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.paypal' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule
     */
    protected function getPsCheckout_Store_Module_PaypalService()
    {
        return $this->services['ps_checkout.store.module.paypal'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PaypalModule(${($_ = isset($this->services['ps_checkout.repository.paypal.account']) ? $this->services['ps_checkout.repository.paypal.account'] : $this->getPsCheckout_Repository_Paypal_AccountService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.module.psx' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PsxModule
     */
    protected function getPsCheckout_Store_Module_PsxService()
    {
        return $this->services['ps_checkout.store.module.psx'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\Modules\PsxModule(${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.store.store' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter
     */
    protected function getPsCheckout_Store_StoreService()
    {
        return $this->services['ps_checkout.store.store'] = new \PrestaShop\Module\PrestashopCheckout\Presenter\Store\StorePresenter([0 => ${($_ = isset($this->services['ps_checkout.store.module.context']) ? $this->services['ps_checkout.store.module.context'] : $this->getPsCheckout_Store_Module_ContextService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['ps_checkout.store.module.firebase']) ? $this->services['ps_checkout.store.module.firebase'] : $this->getPsCheckout_Store_Module_FirebaseService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['ps_checkout.store.module.paypal']) ? $this->services['ps_checkout.store.module.paypal'] : $this->getPsCheckout_Store_Module_PaypalService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['ps_checkout.store.module.psx']) ? $this->services['ps_checkout.store.module.psx'] : $this->getPsCheckout_Store_Module_PsxService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['ps_checkout.store.module.configuration']) ? $this->services['ps_checkout.store.module.configuration'] : $this->getPsCheckout_Store_Module_ConfigurationService()) && false ?: '_'}]);
    }

    /**
     * Gets the public 'ps_checkout.translations.translations' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Translations\Translations
     */
    protected function getPsCheckout_Translations_TranslationsService()
    {
        return $this->services['ps_checkout.translations.translations'] = new \PrestaShop\Module\PrestashopCheckout\Translations\Translations(${($_ = isset($this->services['ps_checkout.module']) ? $this->services['ps_checkout.module'] : $this->getPsCheckout_ModuleService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.updater.paypal.account' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Updater\PaypalAccountUpdater
     */
    protected function getPsCheckout_Updater_Paypal_AccountService()
    {
        return $this->services['ps_checkout.updater.paypal.account'] = new \PrestaShop\Module\PrestashopCheckout\Updater\PaypalAccountUpdater(${($_ = isset($this->services['ps_checkout.persistent.configuration']) ? $this->services['ps_checkout.persistent.configuration'] : $this->getPsCheckout_Persistent_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.paypal.provider.merchant_integration']) ? $this->services['ps_checkout.paypal.provider.merchant_integration'] : $this->getPsCheckout_Paypal_Provider_MerchantIntegrationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.validator.front_controller' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator
     */
    protected function getPsCheckout_Validator_FrontControllerService()
    {
        return $this->services['ps_checkout.validator.front_controller'] = new \PrestaShop\Module\PrestashopCheckout\Validator\FrontControllerValidator(${($_ = isset($this->services['ps_checkout.validator.merchant']) ? $this->services['ps_checkout.validator.merchant'] : $this->getPsCheckout_Validator_MerchantService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.express_checkout.configuration']) ? $this->services['ps_checkout.express_checkout.configuration'] : $this->getPsCheckout_ExpressCheckout_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.pay_in_4x.configuration']) ? $this->services['ps_checkout.pay_in_4x.configuration'] : $this->getPsCheckout_PayIn4x_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_checkout.validator.merchant' shared service.
     *
     * @return \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator
     */
    protected function getPsCheckout_Validator_MerchantService()
    {
        return $this->services['ps_checkout.validator.merchant'] = new \PrestaShop\Module\PrestashopCheckout\Validator\MerchantValidator(${($_ = isset($this->services['ps_checkout.repository.paypal.account']) ? $this->services['ps_checkout.repository.paypal.account'] : $this->getPsCheckout_Repository_Paypal_AccountService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.repository.prestashop.account']) ? $this->services['ps_checkout.repository.prestashop.account'] : $this->getPsCheckout_Repository_Prestashop_AccountService()) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.context.prestashop']) ? $this->services['ps_checkout.context.prestashop'] : ($this->services['ps_checkout.context.prestashop'] = new \PrestaShop\Module\PrestashopCheckout\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_checkout.manager.shopuuid']) ? $this->services['ps_checkout.manager.shopuuid'] : ($this->services['ps_checkout.manager.shopuuid'] = new \PrestaShop\Module\PrestashopCheckout\ShopUuidManager())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.adapter.link' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Adapter\LinkAdapter
     */
    protected function getPsMetrics_Adapter_LinkService()
    {
        return $this->services['ps_metrics.adapter.link'] = new \PrestaShop\Module\Ps_metrics\Adapter\LinkAdapter(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.tools']) ? $this->services['ps_metrics.helper.tools'] : ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.adapter.logger' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter
     */
    protected function getPsMetrics_Adapter_LoggerService()
    {
        return $this->services['ps_metrics.adapter.logger'] = new \PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter();
    }

    /**
     * Gets the public 'ps_metrics.api.analytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\AnalyticsApi
     */
    protected function getPsMetrics_Api_AnalyticsService()
    {
        return $this->services['ps_metrics.api.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\AnalyticsApi(${($_ = isset($this->services['ps_metrics.api.client.analytics']) ? $this->services['ps_metrics.api.client.analytics'] : $this->getPsMetrics_Api_Client_AnalyticsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.env.analytics']) ? $this->services['ps_metrics.env.analytics'] : ($this->services['ps_metrics.env.analytics'] = new \PrestaShop\Module\Ps_metrics\Environment\AnalyticsEnv())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.json']) ? $this->services['ps_metrics.helper.json'] : $this->getPsMetrics_Helper_JsonService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.api.client.analytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient
     */
    protected function getPsMetrics_Api_Client_AnalyticsService()
    {
        return $this->services['ps_metrics.api.client.analytics'] = new \PrestaShop\Module\Ps_metrics\Api\Client\AnalyticsClient(${($_ = isset($this->services['ps_accounts.facade']) ? $this->services['ps_accounts.facade'] : $this->getPsAccounts_FacadeService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.response.default']) ? $this->services['ps_metrics.middleware.response.default'] : $this->getPsMetrics_Middleware_Response_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.log']) ? $this->services['ps_metrics.middleware.log'] : $this->getPsMetrics_Middleware_LogService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.sentry']) ? $this->services['ps_metrics.middleware.sentry'] : ($this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.response']) ? $this->services['ps_metrics.middleware.response'] : ($this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.handler.guzzleapi']) ? $this->services['ps_metrics.handler.guzzleapi'] : ($this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.api.client.factory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\ClientManager
     */
    protected function getPsMetrics_Api_Client_FactoryService()
    {
        return $this->services['ps_metrics.api.client.factory'] = new \PrestaShop\Module\Ps_metrics\Api\Client\ClientManager(${($_ = isset($this->services['ps_metrics.middleware.response.default']) ? $this->services['ps_metrics.middleware.response.default'] : $this->getPsMetrics_Middleware_Response_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.log']) ? $this->services['ps_metrics.middleware.log'] : $this->getPsMetrics_Middleware_LogService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.sentry']) ? $this->services['ps_metrics.middleware.sentry'] : ($this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.response']) ? $this->services['ps_metrics.middleware.response'] : ($this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.handler.guzzleapi']) ? $this->services['ps_metrics.handler.guzzleapi'] : ($this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.api.client.http' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\Client\HttpClient
     */
    protected function getPsMetrics_Api_Client_HttpService()
    {
        return $this->services['ps_metrics.api.client.http'] = new \PrestaShop\Module\Ps_metrics\Api\Client\HttpClient(${($_ = isset($this->services['ps_metrics.middleware.response.default']) ? $this->services['ps_metrics.middleware.response.default'] : $this->getPsMetrics_Middleware_Response_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.log']) ? $this->services['ps_metrics.middleware.log'] : $this->getPsMetrics_Middleware_LogService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.sentry']) ? $this->services['ps_metrics.middleware.sentry'] : ($this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.middleware.response']) ? $this->services['ps_metrics.middleware.response'] : ($this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.handler.guzzleapi']) ? $this->services['ps_metrics.handler.guzzleapi'] : ($this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.api.http' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\HttpApi
     */
    protected function getPsMetrics_Api_HttpService()
    {
        return $this->services['ps_metrics.api.http'] = new \PrestaShop\Module\Ps_metrics\Api\HttpApi(${($_ = isset($this->services['ps_metrics.api.client.http']) ? $this->services['ps_metrics.api.client.http'] : $this->getPsMetrics_Api_Client_HttpService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.api.manager' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Api\ApiManager
     */
    protected function getPsMetrics_Api_ManagerService()
    {
        return $this->services['ps_metrics.api.manager'] = new \PrestaShop\Module\Ps_metrics\Api\ApiManager();
    }

    /**
     * Gets the public 'ps_metrics.cache.data' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Cache\DataCache
     */
    protected function getPsMetrics_Cache_DataService()
    {
        return $this->services['ps_metrics.cache.data'] = new \PrestaShop\Module\Ps_metrics\Cache\DataCache(${($_ = isset($this->services['ps_metrics.cache.specificdirectory']) ? $this->services['ps_metrics.cache.specificdirectory'] : ($this->services['ps_metrics.cache.specificdirectory'] = new \PrestaShop\Module\Ps_metrics\Cache\DirectoryCache())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.env.cache']) ? $this->services['ps_metrics.env.cache'] : ($this->services['ps_metrics.env.cache'] = new \PrestaShop\Module\Ps_metrics\Environment\CacheEnv())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.json']) ? $this->services['ps_metrics.helper.json'] : $this->getPsMetrics_Helper_JsonService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.adapter.logger']) ? $this->services['ps_metrics.adapter.logger'] : ($this->services['ps_metrics.adapter.logger'] = new \PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.cache.specificdirectory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Cache\DirectoryCache
     */
    protected function getPsMetrics_Cache_SpecificdirectoryService()
    {
        return $this->services['ps_metrics.cache.specificdirectory'] = new \PrestaShop\Module\Ps_metrics\Cache\DirectoryCache();
    }

    /**
     * Gets the public 'ps_metrics.context.prestashop' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext
     */
    protected function getPsMetrics_Context_PrestashopService()
    {
        return $this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext();
    }

    /**
     * Gets the public 'ps_metrics.data.tipscards' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Data\TipsCardsData
     */
    protected function getPsMetrics_Data_TipscardsService()
    {
        return $this->services['ps_metrics.data.tipscards'] = new \PrestaShop\Module\Ps_metrics\Data\TipsCardsData(${($_ = isset($this->services['ps_metrics.api.analytics']) ? $this->services['ps_metrics.api.analytics'] : $this->getPsMetrics_Api_AnalyticsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.env.analytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\AnalyticsEnv
     */
    protected function getPsMetrics_Env_AnalyticsService()
    {
        return $this->services['ps_metrics.env.analytics'] = new \PrestaShop\Module\Ps_metrics\Environment\AnalyticsEnv();
    }

    /**
     * Gets the public 'ps_metrics.env.cache' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\CacheEnv
     */
    protected function getPsMetrics_Env_CacheService()
    {
        return $this->services['ps_metrics.env.cache'] = new \PrestaShop\Module\Ps_metrics\Environment\CacheEnv();
    }

    /**
     * Gets the public 'ps_metrics.env.segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Environment\SegmentEnv
     */
    protected function getPsMetrics_Env_SegmentService()
    {
        return $this->services['ps_metrics.env.segment'] = new \PrestaShop\Module\Ps_metrics\Environment\SegmentEnv();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaders
     */
    protected function getPsMetrics_Graphql_DataloadersService()
    {
        return $this->services['ps_metrics.graphql.dataloaders'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaders(${($_ = isset($this->services['ps_metrics.cache.data']) ? $this->services['ps_metrics.cache.data'] : $this->getPsMetrics_Cache_DataService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.json']) ? $this->services['ps_metrics.helper.json'] : $this->getPsMetrics_Helper_JsonService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.avgsessions' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\AvgSessionsDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_AvgsessionsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.avgsessions'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\AvgSessionsDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.bouncerate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\BounceRateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_BouncerateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.bouncerate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\BounceRateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.cartabandonedaverage' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\CartAbandonedAverageDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_CartabandonedaverageService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.cartabandonedaverage'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\CartAbandonedAverageDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.conversionrate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ConversionRateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_ConversionrateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.conversionrate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ConversionRateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.engagementrate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\EngagementRateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_EngagementrateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.engagementrate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\EngagementRateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.factory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaderFactory
     */
    protected function getPsMetrics_Graphql_Dataloaders_FactoryService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.factory'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\DataLoaderFactory();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.orderaverage' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrderaverageService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.orderaverage'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.orderaveragegroupbydate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageGroupByDateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrderaveragegroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.orderaveragegroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderAverageGroupByDateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.ordergroupbycustomer' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderGroupByCustomerDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdergroupbycustomerService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordergroupbycustomer'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderGroupByCustomerDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.ordersum' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersum'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.ordersumgroupbydate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupByDateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersumgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupByDateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.ordersumgroupbysource' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupBySourceDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_OrdersumgroupbysourceService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.ordersumgroupbysource'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\OrderSumGroupBySourceDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.producttopseller' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ProductTopSellerDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_ProducttopsellerService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.producttopseller'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\ProductTopSellerDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.revenuegross' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegross'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByCategoriesDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbycategoriesService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbycategories'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByCategoriesDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.revenuegrossgroupbydate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByDateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\RevenueGrossGroupByDateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\revenueGrossGroupByDistributionDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_RevenuegrossgroupbydistributionService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.revenuegrossgroupbydistribution'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\revenueGrossGroupByDistributionDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.sessions' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessions'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.sessionsgroupbycategory' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByCategoryDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbycategoryService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbycategory'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByCategoryDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.sessionsgroupbydate' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByDateDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbydateService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbydate'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByDateDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.sessionsgroupbyhour' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByHourDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SessionsgroupbyhourService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.sessionsgroupbyhour'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SessionsGroupByHourDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.setProductTourAdvancedDone' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourAdvancedDoneDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SetProductTourAdvancedDoneService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.setProductTourAdvancedDone'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourAdvancedDoneDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.setProductTourFreeDone' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourFreeDoneDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_SetProductTourFreeDoneService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.setProductTourFreeDone'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\SetProductTourFreeDoneDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.tipscards' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\TipsCardsDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_TipscardsService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.tipscards'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\TipsCardsDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.graphql.dataloaders.uniqueusers' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\UniqueUsersDataLoaders
     */
    protected function getPsMetrics_Graphql_Dataloaders_UniqueusersService()
    {
        return $this->services['ps_metrics.graphql.dataloaders.uniqueusers'] = new \PrestaShop\Module\Ps_metrics\GraphQL\DataLoaders\UniqueUsersDataLoaders();
    }

    /**
     * Gets the public 'ps_metrics.handler.guzzleapi' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler
     */
    protected function getPsMetrics_Handler_GuzzleapiService()
    {
        return $this->services['ps_metrics.handler.guzzleapi'] = new \PrestaShop\Module\Ps_metrics\Handler\GuzzleApiResponseExceptionHandler();
    }

    /**
     * Gets the public 'ps_metrics.helper.api' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ApiHelper
     */
    protected function getPsMetrics_Helper_ApiService()
    {
        return $this->services['ps_metrics.helper.api'] = new \PrestaShop\Module\Ps_metrics\Helper\ApiHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.data' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\DataHelper
     */
    protected function getPsMetrics_Helper_DataService()
    {
        return $this->services['ps_metrics.helper.data'] = new \PrestaShop\Module\Ps_metrics\Helper\DataHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.db' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\DbHelper
     */
    protected function getPsMetrics_Helper_DbService()
    {
        return $this->services['ps_metrics.helper.db'] = new \PrestaShop\Module\Ps_metrics\Helper\DbHelper(${($_ = isset($this->services['ps_metrics.cache.data']) ? $this->services['ps_metrics.cache.data'] : $this->getPsMetrics_Cache_DataService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.helper.json' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\JsonHelper
     */
    protected function getPsMetrics_Helper_JsonService()
    {
        return $this->services['ps_metrics.helper.json'] = new \PrestaShop\Module\Ps_metrics\Helper\JsonHelper(${($_ = isset($this->services['ps_metrics.adapter.logger']) ? $this->services['ps_metrics.adapter.logger'] : ($this->services['ps_metrics.adapter.logger'] = new \PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.helper.module' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper
     */
    protected function getPsMetrics_Helper_ModuleService()
    {
        return $this->services['ps_metrics.helper.module'] = new \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.number' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\NumberHelper
     */
    protected function getPsMetrics_Helper_NumberService()
    {
        return $this->services['ps_metrics.helper.number'] = new \PrestaShop\Module\Ps_metrics\Helper\NumberHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\SegmentHelper
     */
    protected function getPsMetrics_Helper_SegmentService()
    {
        return $this->services['ps_metrics.helper.segment'] = new \PrestaShop\Module\Ps_metrics\Helper\SegmentHelper(${($_ = isset($this->services['ps_metrics.env.segment']) ? $this->services['ps_metrics.env.segment'] : ($this->services['ps_metrics.env.segment'] = new \PrestaShop\Module\Ps_metrics\Environment\SegmentEnv())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.helper.shop' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ShopHelper
     */
    protected function getPsMetrics_Helper_ShopService()
    {
        return $this->services['ps_metrics.helper.shop'] = new \PrestaShop\Module\Ps_metrics\Helper\ShopHelper();
    }

    /**
     * Gets the public 'ps_metrics.helper.tools' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper
     */
    protected function getPsMetrics_Helper_ToolsService()
    {
        return $this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper();
    }

    /**
     * Gets the public 'ps_metrics.kpi.configuration' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration
     */
    protected function getPsMetrics_Kpi_ConfigurationService()
    {
        return $this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration();
    }

    /**
     * Gets the public 'ps_metrics.kpi.conversion' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\ConversionKpi
     */
    protected function getPsMetrics_Kpi_ConversionService()
    {
        return $this->services['ps_metrics.kpi.conversion'] = new \PrestaShop\Module\Ps_metrics\Kpi\ConversionKpi(${($_ = isset($this->services['ps_metrics.kpi.configuration']) ? $this->services['ps_metrics.kpi.configuration'] : ($this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.number']) ? $this->services['ps_metrics.helper.number'] : ($this->services['ps_metrics.helper.number'] = new \PrestaShop\Module\Ps_metrics\Helper\NumberHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->getPsMetrics_Repository_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.kpi.visits']) ? $this->services['ps_metrics.kpi.visits'] : $this->getPsMetrics_Kpi_VisitsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.kpi.orders']) ? $this->services['ps_metrics.kpi.orders'] : $this->getPsMetrics_Kpi_OrdersService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.kpi.revenues']) ? $this->services['ps_metrics.kpi.revenues'] : $this->getPsMetrics_Kpi_RevenuesService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.kpi.kpi' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\Kpi
     */
    protected function getPsMetrics_Kpi_KpiService()
    {
        return $this->services['ps_metrics.kpi.kpi'] = new \PrestaShop\Module\Ps_metrics\Kpi\Kpi(${($_ = isset($this->services['ps_metrics.kpi.configuration']) ? $this->services['ps_metrics.kpi.configuration'] : ($this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.kpi.manager' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\KpiManager
     */
    protected function getPsMetrics_Kpi_ManagerService()
    {
        return $this->services['ps_metrics.kpi.manager'] = new \PrestaShop\Module\Ps_metrics\Kpi\KpiManager(${($_ = isset($this->services['ps_metrics.kpi.configuration']) ? $this->services['ps_metrics.kpi.configuration'] : ($this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.kpi.orders' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\OrdersKpi
     */
    protected function getPsMetrics_Kpi_OrdersService()
    {
        return $this->services['ps_metrics.kpi.orders'] = new \PrestaShop\Module\Ps_metrics\Kpi\OrdersKpi(${($_ = isset($this->services['ps_metrics.kpi.configuration']) ? $this->services['ps_metrics.kpi.configuration'] : ($this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.data']) ? $this->services['ps_metrics.helper.data'] : ($this->services['ps_metrics.helper.data'] = new \PrestaShop\Module\Ps_metrics\Helper\DataHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.orders']) ? $this->services['ps_metrics.repository.orders'] : $this->getPsMetrics_Repository_OrdersService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.number']) ? $this->services['ps_metrics.helper.number'] : ($this->services['ps_metrics.helper.number'] = new \PrestaShop\Module\Ps_metrics\Helper\NumberHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.kpi.revenues']) ? $this->services['ps_metrics.kpi.revenues'] : $this->getPsMetrics_Kpi_RevenuesService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.payment']) ? $this->services['ps_metrics.repository.payment'] : ($this->services['ps_metrics.repository.payment'] = new \PrestaShop\Module\Ps_metrics\Repository\PaymentRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.kpi.revenues' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\RevenuesKpi
     */
    protected function getPsMetrics_Kpi_RevenuesService()
    {
        return $this->services['ps_metrics.kpi.revenues'] = new \PrestaShop\Module\Ps_metrics\Kpi\RevenuesKpi(${($_ = isset($this->services['ps_metrics.kpi.configuration']) ? $this->services['ps_metrics.kpi.configuration'] : ($this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.data']) ? $this->services['ps_metrics.helper.data'] : ($this->services['ps_metrics.helper.data'] = new \PrestaShop\Module\Ps_metrics\Helper\DataHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.orders']) ? $this->services['ps_metrics.repository.orders'] : $this->getPsMetrics_Repository_OrdersService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.kpi.strategyinterface' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\KpiStrategyInterface
     */
    protected function getPsMetrics_Kpi_StrategyinterfaceService()
    {
        return $this->services['ps_metrics.kpi.strategyinterface'] = new \PrestaShop\Module\Ps_metrics\Kpi\KpiStrategyInterface();
    }

    /**
     * Gets the public 'ps_metrics.kpi.total' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\TotalKpi
     */
    protected function getPsMetrics_Kpi_TotalService()
    {
        return $this->services['ps_metrics.kpi.total'] = new \PrestaShop\Module\Ps_metrics\Kpi\TotalKpi(${($_ = isset($this->services['ps_metrics.kpi.configuration']) ? $this->services['ps_metrics.kpi.configuration'] : ($this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.kpi.visits']) ? $this->services['ps_metrics.kpi.visits'] : $this->getPsMetrics_Kpi_VisitsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.kpi.orders']) ? $this->services['ps_metrics.kpi.orders'] : $this->getPsMetrics_Kpi_OrdersService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.kpi.revenues']) ? $this->services['ps_metrics.kpi.revenues'] : $this->getPsMetrics_Kpi_RevenuesService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.kpi.visits' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Kpi\VisitsKpi
     */
    protected function getPsMetrics_Kpi_VisitsService()
    {
        return $this->services['ps_metrics.kpi.visits'] = new \PrestaShop\Module\Ps_metrics\Kpi\VisitsKpi(${($_ = isset($this->services['ps_metrics.kpi.configuration']) ? $this->services['ps_metrics.kpi.configuration'] : ($this->services['ps_metrics.kpi.configuration'] = new \PrestaShop\Module\Ps_metrics\Kpi\Configuration\KpiConfiguration())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.data']) ? $this->services['ps_metrics.helper.data'] : ($this->services['ps_metrics.helper.data'] = new \PrestaShop\Module\Ps_metrics\Helper\DataHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.cache.data']) ? $this->services['ps_metrics.cache.data'] : $this->getPsMetrics_Cache_DataService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->getPsMetrics_Repository_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.api.analytics']) ? $this->services['ps_metrics.api.analytics'] : $this->getPsMetrics_Api_AnalyticsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.middleware' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\Middleware
     */
    protected function getPsMetrics_MiddlewareService()
    {
        return $this->services['ps_metrics.middleware'] = new \PrestaShop\Module\Ps_metrics\Middleware\Middleware();
    }

    /**
     * Gets the public 'ps_metrics.middleware.log' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\LogMiddleware
     */
    protected function getPsMetrics_Middleware_LogService()
    {
        return $this->services['ps_metrics.middleware.log'] = new \PrestaShop\Module\Ps_metrics\Middleware\LogMiddleware(${($_ = isset($this->services['ps_metrics.adapter.logger']) ? $this->services['ps_metrics.adapter.logger'] : ($this->services['ps_metrics.adapter.logger'] = new \PrestaShop\Module\Ps_metrics\Adapter\LoggerAdapter())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.middleware.response' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware
     */
    protected function getPsMetrics_Middleware_ResponseService()
    {
        return $this->services['ps_metrics.middleware.response'] = new \PrestaShop\Module\Ps_metrics\Middleware\ResponseMiddleware();
    }

    /**
     * Gets the public 'ps_metrics.middleware.response.default' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\CheckResponseMiddleware
     */
    protected function getPsMetrics_Middleware_Response_DefaultService()
    {
        return $this->services['ps_metrics.middleware.response.default'] = new \PrestaShop\Module\Ps_metrics\Middleware\CheckResponseMiddleware(${($_ = isset($this->services['ps_metrics.helper.json']) ? $this->services['ps_metrics.helper.json'] : $this->getPsMetrics_Helper_JsonService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.middleware.sentry' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware
     */
    protected function getPsMetrics_Middleware_SentryService()
    {
        return $this->services['ps_metrics.middleware.sentry'] = new \PrestaShop\Module\Ps_metrics\Middleware\SentryMiddleware();
    }

    /**
     * Gets the public 'ps_metrics.module.dashboard.modules' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\DashboardModules
     */
    protected function getPsMetrics_Module_Dashboard_ModulesService()
    {
        return $this->services['ps_metrics.module.dashboard.modules'] = new \PrestaShop\Module\Ps_metrics\Module\DashboardModules(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->getPsMetrics_Repository_ConfigurationService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.module.gainstaller' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\GAInstaller
     */
    protected function getPsMetrics_Module_GainstallerService()
    {
        return $this->services['ps_metrics.module.gainstaller'] = new \PrestaShop\Module\Ps_metrics\Module\GAInstaller(${($_ = isset($this->services['ps_metrics.adapter.link']) ? $this->services['ps_metrics.adapter.link'] : $this->getPsMetrics_Adapter_LinkService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.module']) ? $this->services['ps_metrics.helper.module'] : ($this->services['ps_metrics.helper.module'] = new \PrestaShop\Module\Ps_metrics\Helper\ModuleHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.tools']) ? $this->services['ps_metrics.helper.tools'] : ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.module.install' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Install
     */
    protected function getPsMetrics_Module_InstallService()
    {
        return $this->services['ps_metrics.module.install'] = new \PrestaShop\Module\Ps_metrics\Module\Install(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->getPsMetrics_Repository_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.hookmodule']) ? $this->services['ps_metrics.repository.hookmodule'] : ($this->services['ps_metrics.repository.hookmodule'] = new \PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.module.uninstall' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Module\Uninstall
     */
    protected function getPsMetrics_Module_UninstallService()
    {
        return $this->services['ps_metrics.module.uninstall'] = new \PrestaShop\Module\Ps_metrics\Module\Uninstall(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.facade']) ? $this->services['ps_accounts.facade'] : $this->getPsAccounts_FacadeService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->getPsMetrics_Repository_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.api.analytics']) ? $this->services['ps_metrics.api.analytics'] : $this->getPsMetrics_Api_AnalyticsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.presenter.store.context' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Context\ContextPresenter
     */
    protected function getPsMetrics_Presenter_Store_ContextService()
    {
        return $this->services['ps_metrics.presenter.store.context'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Context\ContextPresenter(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_accounts.facade']) ? $this->services['ps_accounts.facade'] : $this->getPsAccounts_FacadeService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.adapter.link']) ? $this->services['ps_metrics.adapter.link'] : $this->getPsMetrics_Adapter_LinkService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->getPsMetrics_Repository_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.provider.shops']) ? $this->services['ps_metrics.provider.shops'] : $this->getPsMetrics_Provider_ShopsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.module.dashboard.modules']) ? $this->services['ps_metrics.module.dashboard.modules'] : $this->getPsMetrics_Module_Dashboard_ModulesService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.provider.analyticsaccountslist']) ? $this->services['ps_metrics.provider.analyticsaccountslist'] : $this->getPsMetrics_Provider_AnalyticsaccountslistService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.api.http']) ? $this->services['ps_metrics.api.http'] : $this->getPsMetrics_Api_HttpService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.tools']) ? $this->services['ps_metrics.helper.tools'] : ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.db']) ? $this->services['ps_metrics.helper.db'] : $this->getPsMetrics_Helper_DbService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.presenter.store.dashboard' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Dashboard\DashboardPresenter
     */
    protected function getPsMetrics_Presenter_Store_DashboardService()
    {
        return $this->services['ps_metrics.presenter.store.dashboard'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Dashboard\DashboardPresenter(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.translation.dashboard']) ? $this->services['ps_metrics.translation.dashboard'] : $this->getPsMetrics_Translation_DashboardService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.adapter.link']) ? $this->services['ps_metrics.adapter.link'] : $this->getPsMetrics_Adapter_LinkService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.presenter.store.settings' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\Settings\SettingsPresenter
     */
    protected function getPsMetrics_Presenter_Store_SettingsService()
    {
        return $this->services['ps_metrics.presenter.store.settings'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\Settings\SettingsPresenter(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.translation.settings']) ? $this->services['ps_metrics.translation.settings'] : $this->getPsMetrics_Translation_SettingsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.adapter.link']) ? $this->services['ps_metrics.adapter.link'] : $this->getPsMetrics_Adapter_LinkService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->getPsMetrics_Repository_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.provider.shops']) ? $this->services['ps_metrics.provider.shops'] : $this->getPsMetrics_Provider_ShopsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.provider.analyticsaccountslist']) ? $this->services['ps_metrics.provider.analyticsaccountslist'] : $this->getPsMetrics_Provider_AnalyticsaccountslistService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.provider.googletag']) ? $this->services['ps_metrics.provider.googletag'] : $this->getPsMetrics_Provider_GoogletagService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.module.gainstaller']) ? $this->services['ps_metrics.module.gainstaller'] : $this->getPsMetrics_Module_GainstallerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.api.http']) ? $this->services['ps_metrics.api.http'] : $this->getPsMetrics_Api_HttpService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.presenter.store.store' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Presenter\Store\StorePresenter
     */
    protected function getPsMetrics_Presenter_Store_StoreService()
    {
        return $this->services['ps_metrics.presenter.store.store'] = new \PrestaShop\Module\Ps_metrics\Presenter\Store\StorePresenter(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.presenter.store.context']) ? $this->services['ps_metrics.presenter.store.context'] : $this->getPsMetrics_Presenter_Store_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.presenter.store.dashboard']) ? $this->services['ps_metrics.presenter.store.dashboard'] : $this->getPsMetrics_Presenter_Store_DashboardService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.presenter.store.settings']) ? $this->services['ps_metrics.presenter.store.settings'] : $this->getPsMetrics_Presenter_Store_SettingsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.provider.analyticsaccountslist' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider
     */
    protected function getPsMetrics_Provider_AnalyticsaccountslistService()
    {
        return $this->services['ps_metrics.provider.analyticsaccountslist'] = new \PrestaShop\Module\Ps_metrics\Provider\AnalyticsAccountsListProvider(${($_ = isset($this->services['ps_metrics.repository.configuration']) ? $this->services['ps_metrics.repository.configuration'] : $this->getPsMetrics_Repository_ConfigurationService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.json']) ? $this->services['ps_metrics.helper.json'] : $this->getPsMetrics_Helper_JsonService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.api.analytics']) ? $this->services['ps_metrics.api.analytics'] : $this->getPsMetrics_Api_AnalyticsService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.provider.googletag' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\GoogleTagProvider
     */
    protected function getPsMetrics_Provider_GoogletagService()
    {
        return $this->services['ps_metrics.provider.googletag'] = new \PrestaShop\Module\Ps_metrics\Provider\GoogleTagProvider(${($_ = isset($this->services['ps_metrics.api.http']) ? $this->services['ps_metrics.api.http'] : $this->getPsMetrics_Api_HttpService()) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.provider.shops' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Provider\ShopsProvider
     */
    protected function getPsMetrics_Provider_ShopsService()
    {
        return $this->services['ps_metrics.provider.shops'] = new \PrestaShop\Module\Ps_metrics\Provider\ShopsProvider(${($_ = isset($this->services['ps_metrics.helper.tools']) ? $this->services['ps_metrics.helper.tools'] : ($this->services['ps_metrics.helper.tools'] = new \PrestaShop\Module\Ps_metrics\Helper\ToolsHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.shop']) ? $this->services['ps_metrics.helper.shop'] : ($this->services['ps_metrics.helper.shop'] = new \PrestaShop\Module\Ps_metrics\Helper\ShopHelper())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.repository.configuration' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository
     */
    protected function getPsMetrics_Repository_ConfigurationService()
    {
        return $this->services['ps_metrics.repository.configuration'] = new \PrestaShop\Module\Ps_metrics\Repository\ConfigurationRepository(${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.repository.hookmodule' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository
     */
    protected function getPsMetrics_Repository_HookmoduleService()
    {
        return $this->services['ps_metrics.repository.hookmodule'] = new \PrestaShop\Module\Ps_metrics\Repository\HookModuleRepository();
    }

    /**
     * Gets the public 'ps_metrics.repository.orders' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\OrdersRepository
     */
    protected function getPsMetrics_Repository_OrdersService()
    {
        return $this->services['ps_metrics.repository.orders'] = new \PrestaShop\Module\Ps_metrics\Repository\OrdersRepository(${($_ = isset($this->services['ps_metrics.helper.db']) ? $this->services['ps_metrics.helper.db'] : $this->getPsMetrics_Helper_DbService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.shop']) ? $this->services['ps_metrics.helper.shop'] : ($this->services['ps_metrics.helper.shop'] = new \PrestaShop\Module\Ps_metrics\Helper\ShopHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'ps_metrics.repository.payment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Repository\PaymentRepository
     */
    protected function getPsMetrics_Repository_PaymentService()
    {
        return $this->services['ps_metrics.repository.payment'] = new \PrestaShop\Module\Ps_metrics\Repository\PaymentRepository();
    }

    /**
     * Gets the public 'ps_metrics.tracker.segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Tracker\Segment
     */
    protected function getPsMetrics_Tracker_SegmentService()
    {
        return $this->services['ps_metrics.tracker.segment'] = new \PrestaShop\Module\Ps_metrics\Tracker\Segment(${($_ = isset($this->services['ps_metrics.env.segment']) ? $this->services['ps_metrics.env.segment'] : ($this->services['ps_metrics.env.segment'] = new \PrestaShop\Module\Ps_metrics\Environment\SegmentEnv())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.segment']) ? $this->services['ps_metrics.helper.segment'] : $this->getPsMetrics_Helper_SegmentService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.shop']) ? $this->services['ps_metrics.helper.shop'] : ($this->services['ps_metrics.helper.shop'] = new \PrestaShop\Module\Ps_metrics\Helper\ShopHelper())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.translation.dashboard' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Translation\DashboardTranslation
     */
    protected function getPsMetrics_Translation_DashboardService()
    {
        return $this->services['ps_metrics.translation.dashboard'] = new \PrestaShop\Module\Ps_metrics\Translation\DashboardTranslation(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.translation.settings' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Translation\SettingsTranslation
     */
    protected function getPsMetrics_Translation_SettingsService()
    {
        return $this->services['ps_metrics.translation.settings'] = new \PrestaShop\Module\Ps_metrics\Translation\SettingsTranslation(${($_ = isset($this->services['ps_metrics.module']) ? $this->services['ps_metrics.module'] : $this->getPsMetrics_ModuleService()) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.context.prestashop']) ? $this->services['ps_metrics.context.prestashop'] : ($this->services['ps_metrics.context.prestashop'] = new \PrestaShop\Module\Ps_metrics\Context\PrestaShopContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'ps_metrics.validation.processselectaccountanalytics' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Validation\SelectAccountAnalytics
     */
    protected function getPsMetrics_Validation_ProcessselectaccountanalyticsService()
    {
        return $this->services['ps_metrics.validation.processselectaccountanalytics'] = new \PrestaShop\Module\Ps_metrics\Validation\SelectAccountAnalytics();
    }

    /**
     * Gets the public 'ps_metrics.validation.retrievedata' shared service.
     *
     * @return \PrestaShop\Module\Ps_metrics\Validation\RetrieveData
     */
    protected function getPsMetrics_Validation_RetrievedataService()
    {
        return $this->services['ps_metrics.validation.retrievedata'] = new \PrestaShop\Module\Ps_metrics\Validation\RetrieveData();
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber
     */
    protected function getAccountSuspendedSubscriberService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] = new \PrestaShop\Module\PrestashopFacebook\API\EventSubscriber\AccountSuspendedSubscriber(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\API\FacebookCategoryClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\FacebookCategoryClient
     */
    protected function getFacebookCategoryClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookCategoryClient'] = new \PrestaShop\Module\PrestashopFacebook\API\FacebookCategoryClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\GoogleCategoryEssentialsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\GoogleCategoryEssentialsApiClientFactory'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\GoogleCategoryEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\GoogleCategoryEssentialsApiClientFactory())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\API\FacebookClient' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\API\FacebookClient
     */
    protected function getFacebookClientService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient'] = new \PrestaShop\Module\PrestashopFacebook\API\FacebookClient(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] : $this->getAccessTokenProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] : $this->getConfigurationHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter
     */
    protected function getConfigurationAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ConfigurationAdapter(${($_ = isset($this->services['ps_facebook.shop']) ? $this->services['ps_facebook.shop'] : $this->getPsFacebook_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter
     */
    protected function getToolsAdapterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter();
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer
     */
    protected function getTemplateBufferService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Buffer\\TemplateBuffer'] = new \PrestaShop\Module\PrestashopFacebook\Buffer\TemplateBuffer();
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Config\Env' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Config\Env
     */
    protected function getEnvService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env();
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Database\Installer' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Database\Installer
     */
    protected function getInstallerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Database\\Installer'] = new \PrestaShop\Module\PrestashopFacebook\Database\Installer(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment']) ? $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] : $this->getSegmentService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Database\Uninstaller' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Database\Uninstaller
     */
    protected function getUninstallerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Database\\Uninstaller'] = new \PrestaShop\Module\PrestashopFacebook\Database\Uninstaller(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment']) ? $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] : $this->getSegmentService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher
     */
    protected function getEventDispatcherService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Dispatcher\\EventDispatcher'] = new \PrestaShop\Module\PrestashopFacebook\Dispatcher\EventDispatcher(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] : $this->getApiConversionHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] : $this->getPixelHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] : $this->getEventDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory
     */
    protected function getFacebookEssentialsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\FacebookEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\FacebookEssentialsApiClientFactory();
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Factory\GoogleCategoryEssentialsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\GoogleCategoryEssentialsApiClientFactory
     */
    protected function getGoogleCategoryEssentialsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\GoogleCategoryEssentialsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\GoogleCategoryEssentialsApiClientFactory();
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory
     */
    protected function getPsApiClientFactoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] = new \PrestaShop\Module\PrestashopFacebook\Factory\PsApiClientFactory(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\EventSubscriber\\AccountSuspendedSubscriber'] : $this->getAccountSuspendedSubscriberService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler
     */
    protected function getApiConversionHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ApiConversionHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ApiConversionHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler
     */
    protected function getCategoryMatchHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\CategoryMatchHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\CategoryMatchHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler
     */
    protected function getConfigurationHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ConfigurationHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ConfigurationHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler
     */
    protected function getErrorHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\ErrorHandler\ErrorHandler(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler
     */
    protected function getEventBusProductHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\EventBusProductHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\EventBusProductHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : $this->getProductRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations']) ? $this->services['PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations'] : $this->getPsFacebookTranslationsService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler
     */
    protected function getMessengerHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\MessengerHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\MessengerHandler(${($_ = isset($this->services['ps_facebook.language']) ? $this->services['ps_facebook.language'] : $this->getPsFacebook_LanguageService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler
     */
    protected function getPixelHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PixelHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PixelHandler(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler
     */
    protected function getPrevalidationScanRefreshHandlerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\PrevalidationScanRefreshHandler'] = new \PrestaShop\Module\PrestashopFacebook\Handler\PrevalidationScanRefreshHandler(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] : $this->getPrevalidationScanCacheProviderService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : $this->getProductRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.shop']) ? $this->services['ps_facebook.shop'] : $this->getPsFacebook_ShopService()) && false ?: '_'}->id);
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager
     */
    protected function getFbeFeatureManagerService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Manager\\FbeFeatureManager'] = new \PrestaShop\Module\PrestashopFacebook\Manager\FbeFeatureManager(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter
     */
    protected function getModuleUpgradePresenterService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Presenter\\ModuleUpgradePresenter'] = new \PrestaShop\Module\PrestashopFacebook\Presenter\ModuleUpgradePresenter(${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider
     */
    protected function getAccessTokenProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\AccessTokenProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\AccessTokenProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.controller']) ? $this->services['ps_facebook.controller'] : $this->getPsFacebook_ControllerService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider
     */
    protected function getEventDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\EventDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\EventDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ToolsAdapter'] = new \PrestaShop\Module\PrestashopFacebook\Adapter\ToolsAdapter())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] : $this->getProductRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] : $this->getGoogleCategoryProviderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider
     */
    protected function getFacebookDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FacebookDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FacebookDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider
     */
    protected function getFbeDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider
     */
    protected function getFbeFeatureDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\FbeFeatureDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\FbeFeatureDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\API\\FacebookClient'] : $this->getFacebookClientService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider
     */
    protected function getGoogleCategoryProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\GoogleCategoryProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\GoogleCategoryProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] : $this->getGoogleCategoryRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider
     */
    protected function getMultishopDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\MultishopDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\MultishopDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment']) ? $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] : $this->getSegmentService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider
     */
    protected function getPrevalidationScanCacheProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanCacheProvider(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.cache']) ? $this->services['ps_facebook.cache'] : $this->getPsFacebook_CacheService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider
     */
    protected function getPrevalidationScanDataProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanDataProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\PrevalidationScanDataProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\PrevalidationScanCacheProvider'] : $this->getPrevalidationScanCacheProviderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider
     */
    protected function getProductAvailabilityProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductAvailabilityProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductAvailabilityProvider();
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider
     */
    protected function getProductSyncReportProviderService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Provider\\ProductSyncReportProvider'] = new \PrestaShop\Module\PrestashopFacebook\Provider\ProductSyncReportProvider(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Factory\\PsApiClientFactory'] : $this->getPsApiClientFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Handler\\ErrorHandler\\ErrorHandler'] : $this->getErrorHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository
     */
    protected function getGoogleCategoryRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\GoogleCategoryRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\GoogleCategoryRepository(${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository
     */
    protected function getProductRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository(${($_ = isset($this->services['PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations']) ? $this->services['PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations'] : $this->getPsFacebookTranslationsService()) && false ?: '_'}, ${($_ = isset($this->services['ps_facebook.language']) ? $this->services['ps_facebook.language'] : $this->getPsFacebook_LanguageService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository
     */
    protected function getServerInformationRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ServerInformationRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ServerInformationRepository(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository
     */
    protected function getShopRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ShopRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ShopRepository();
    }

    /**
     * Gets the private 'PrestaShop\Module\PrestashopFacebook\Repository\TabRepository' shared service.
     *
     * @return \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository
     */
    protected function getTabRepositoryService()
    {
        return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\TabRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\TabRepository();
    }

    /**
     * Gets the private 'PrestaShop\Module\Ps_facebook\Tracker\Segment' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Tracker\Segment
     */
    protected function getSegmentService()
    {
        return $this->services['PrestaShop\\Module\\Ps_facebook\\Tracker\\Segment'] = new \PrestaShop\Module\Ps_facebook\Tracker\Segment(${($_ = isset($this->services['ps_facebook.context']) ? $this->services['ps_facebook.context'] : $this->getPsFacebook_ContextService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] : ($this->services['PrestaShop\\Module\\PrestashopFacebook\\Config\\Env'] = new \PrestaShop\Module\PrestashopFacebook\Config\Env())) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter']) ? $this->services['PrestaShop\\Module\\PrestashopFacebook\\Adapter\\ConfigurationAdapter'] : $this->getConfigurationAdapterService()) && false ?: '_'}, ${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] : $this->getPsAccountsService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\Module\Ps_facebook\Translations\PsFacebookTranslations' shared service.
     *
     * @return \PrestaShop\Module\Ps_facebook\Translations\PsFacebookTranslations
     */
    protected function getPsFacebookTranslationsService()
    {
        return $this->services['PrestaShop\\Module\\Ps_facebook\\Translations\\PsFacebookTranslations'] = new \PrestaShop\Module\Ps_facebook\Translations\PsFacebookTranslations(${($_ = isset($this->services['ps_facebook']) ? $this->services['ps_facebook'] : $this->getPsFacebookService()) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts
     */
    protected function getPsAccountsService()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts'] = new \PrestaShop\PsAccountsInstaller\Installer\Facade\PsAccounts(${($_ = isset($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer']) ? $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] : ($this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0'))) && false ?: '_'});
    }

    /**
     * Gets the private 'PrestaShop\PsAccountsInstaller\Installer\Installer' shared service.
     *
     * @return \PrestaShop\PsAccountsInstaller\Installer\Installer
     */
    protected function getInstaller2Service()
    {
        return $this->services['PrestaShop\\PsAccountsInstaller\\Installer\\Installer'] = new \PrestaShop\PsAccountsInstaller\Installer\Installer('3.0.0');
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\AnnotationReader();
    }

    /**
     * Gets the private 'context.static' shared service.
     *
     * @return \Context
     */
    protected function getContext_StaticService()
    {
        return $this->services['context.static'] = new \Context();
    }

    /**
     * Gets the private 'doctrine.cache_clear_metadata_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearMetadataCommandService()
    {
        return $this->services['doctrine.cache_clear_metadata_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_query_cache_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearQueryCacheCommandService()
    {
        return $this->services['doctrine.cache_clear_query_cache_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_clear_result_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand
     */
    protected function getDoctrine_CacheClearResultCommandService()
    {
        return $this->services['doctrine.cache_clear_result_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.cache_collection_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand
     */
    protected function getDoctrine_CacheCollectionRegionCommandService()
    {
        return $this->services['doctrine.cache_collection_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_entity_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearEntityRegionCommandService()
    {
        return $this->services['doctrine.clear_entity_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.clear_query_region_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand
     */
    protected function getDoctrine_ClearQueryRegionCommandService()
    {
        return $this->services['doctrine.clear_query_region_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.database_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseCreateCommandService()
    {
        return $this->services['doctrine.database_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand
     */
    protected function getDoctrine_DatabaseDropCommandService()
    {
        return $this->services['doctrine.database_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.database_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand
     */
    protected function getDoctrine_DatabaseImportCommandService()
    {
        return $this->services['doctrine.database_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.dbal.connection_factory' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ConnectionFactory
     */
    protected function getDoctrine_Dbal_ConnectionFactoryService()
    {
        return $this->services['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([]);
    }

    /**
     * Gets the private 'doctrine.ensure_production_settings_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand
     */
    protected function getDoctrine_EnsureProductionSettingsCommandService()
    {
        return $this->services['doctrine.ensure_production_settings_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.generate_entities_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand
     */
    protected function getDoctrine_GenerateEntitiesCommandService()
    {
        return $this->services['doctrine.generate_entities_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.mapping_convert_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand
     */
    protected function getDoctrine_MappingConvertCommandService()
    {
        return $this->services['doctrine.mapping_convert_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.mapping_import_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand
     */
    protected function getDoctrine_MappingImportCommandService()
    {
        return $this->services['doctrine.mapping_import_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, []);
    }

    /**
     * Gets the private 'doctrine.mapping_info_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand
     */
    protected function getDoctrine_MappingInfoCommandService()
    {
        return $this->services['doctrine.mapping_info_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_listener_resolver' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver
     */
    protected function getDoctrine_Orm_DefaultEntityListenerResolverService()
    {
        return $this->services['doctrine.orm.default_entity_listener_resolver'] = new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerAwareEntityListenerResolver($this);
    }

    /**
     * Gets the private 'doctrine.orm.default_entity_manager.property_info_extractor' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor
     */
    protected function getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService()
    {
        return $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] = new \Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor(${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}->getMetadataFactory());
    }

    /**
     * Gets the private 'doctrine.orm.default_listeners.attach_entity_listeners' shared service.
     *
     * @return \Doctrine\ORM\Tools\AttachEntityListenersListener
     */
    protected function getDoctrine_Orm_DefaultListeners_AttachEntityListenersService()
    {
        return $this->services['doctrine.orm.default_listeners.attach_entity_listeners'] = new \Doctrine\ORM\Tools\AttachEntityListenersListener();
    }

    /**
     * Gets the private 'doctrine.orm.default_manager_configurator' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator
     */
    protected function getDoctrine_Orm_DefaultManagerConfiguratorService()
    {
        return $this->services['doctrine.orm.default_manager_configurator'] = new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []);
    }

    /**
     * Gets the private 'doctrine.orm.validator.unique' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator
     */
    protected function getDoctrine_Orm_Validator_UniqueService()
    {
        return $this->services['doctrine.orm.validator.unique'] = new \Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'doctrine.query_dql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand
     */
    protected function getDoctrine_QueryDqlCommandService()
    {
        return $this->services['doctrine.query_dql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.query_sql_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand
     */
    protected function getDoctrine_QuerySqlCommandService()
    {
        return $this->services['doctrine.query_sql_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_create_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaCreateCommandService()
    {
        return $this->services['doctrine.schema_create_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_drop_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaDropCommandService()
    {
        return $this->services['doctrine.schema_drop_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_update_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand
     */
    protected function getDoctrine_SchemaUpdateCommandService()
    {
        return $this->services['doctrine.schema_update_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand();
    }

    /**
     * Gets the private 'doctrine.schema_validate_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand
     */
    protected function getDoctrine_SchemaValidateCommandService()
    {
        return $this->services['doctrine.schema_validate_command'] = new \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand();
    }

    /**
     * Gets the private 'doctrine_cache.contains_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand
     */
    protected function getDoctrineCache_ContainsCommandService()
    {
        return $this->services['doctrine_cache.contains_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\ContainsCommand();
    }

    /**
     * Gets the private 'doctrine_cache.delete_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand
     */
    protected function getDoctrineCache_DeleteCommandService()
    {
        return $this->services['doctrine_cache.delete_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\DeleteCommand();
    }

    /**
     * Gets the private 'doctrine_cache.flush_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand
     */
    protected function getDoctrineCache_FlushCommandService()
    {
        return $this->services['doctrine_cache.flush_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\FlushCommand();
    }

    /**
     * Gets the private 'doctrine_cache.stats_command' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand
     */
    protected function getDoctrineCache_StatsCommandService()
    {
        return $this->services['doctrine_cache.stats_command'] = new \Doctrine\Bundle\DoctrineCacheBundle\Command\StatsCommand();
    }

    /**
     * Gets the private 'filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getFilesystemService()
    {
        return $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    /**
     * Gets the private 'finder' shared service.
     *
     * @return \Symfony\Component\Finder\Finder
     */
    protected function getFinderService()
    {
        return $this->services['finder'] = new \Symfony\Component\Finder\Finder();
    }

    /**
     * Gets the private 'form.type.entity' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\Type\EntityType
     */
    protected function getForm_Type_EntityService()
    {
        return $this->services['form.type.entity'] = new \Symfony\Bridge\Doctrine\Form\Type\EntityType(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'form.type_guesser.doctrine' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser
     */
    protected function getForm_TypeGuesser_DoctrineService()
    {
        return $this->services['form.type_guesser.doctrine'] = new \Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hashing' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Crypto\Hashing
     */
    protected function getHashingService()
    {
        return $this->services['hashing'] = new \PrestaShop\PrestaShop\Core\Crypto\Hashing();
    }

    /**
     * Gets the private 'hook_configurator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\HookConfigurator
     */
    protected function getHookConfiguratorService()
    {
        return $this->services['hook_configurator'] = new \PrestaShop\PrestaShop\Core\Module\HookConfigurator(${($_ = isset($this->services['hook_repository']) ? $this->services['hook_repository'] : $this->getHookRepositoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'hook_provider' shared service.
     *
     * @return \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider
     */
    protected function getHookProviderService()
    {
        return $this->services['hook_provider'] = new \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider();
    }

    /**
     * Gets the private 'hook_repository' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Module\HookRepository
     */
    protected function getHookRepositoryService()
    {
        return $this->services['hook_repository'] = new \PrestaShop\PrestaShop\Core\Module\HookRepository(${($_ = isset($this->services['hook_provider']) ? $this->services['hook_provider'] : ($this->services['hook_provider'] = new \PrestaShop\PrestaShop\Adapter\Hook\HookInformationProvider())) && false ?: '_'}, ${($_ = isset($this->services['shop']) ? $this->services['shop'] : $this->get('shop')) && false ?: '_'}, ${($_ = isset($this->services['db']) ? $this->services['db'] : $this->get('db')) && false ?: '_'});
    }

    /**
     * Gets the private 'prestashop.database.naming_strategy' shared service.
     *
     * @return \PrestaShopBundle\Service\Database\DoctrineNamingStrategy
     */
    protected function getPrestashop_Database_NamingStrategyService()
    {
        return $this->services['prestashop.database.naming_strategy'] = new \PrestaShopBundle\Service\Database\DoctrineNamingStrategy('ps_');
    }

    /**
     * Gets the private 'ps_facebook' shared service.
     *
     * @return \Ps_facebook
     */
    protected function getPsFacebookService()
    {
        return $this->services['ps_facebook'] = \Module::getInstanceByName('ps_facebook');
    }

    /**
     * Gets the private 'ps_facebook.cache' shared service.
     *
     * @return \string
     */
    protected function getPsFacebook_CacheService()
    {
        return $this->services['ps_facebook.cache'] = \PrestaShop\Module\PrestashopFacebook\Factory\CacheFactory::getCachePath();
    }

    /**
     * Gets the private 'ps_facebook.context' shared service.
     *
     * @return \Context
     */
    protected function getPsFacebook_ContextService()
    {
        return $this->services['ps_facebook.context'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getContext();
    }

    /**
     * Gets the private 'ps_facebook.controller' shared service.
     *
     * @return \Controller
     */
    protected function getPsFacebook_ControllerService()
    {
        return $this->services['ps_facebook.controller'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getController();
    }

    /**
     * Gets the private 'ps_facebook.cookie' shared service.
     *
     * @return \Cookie
     */
    protected function getPsFacebook_CookieService()
    {
        return $this->services['ps_facebook.cookie'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCookie();
    }

    /**
     * Gets the private 'ps_facebook.currency' shared service.
     *
     * @return \Currency
     */
    protected function getPsFacebook_CurrencyService()
    {
        return $this->services['ps_facebook.currency'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getCurrency();
    }

    /**
     * Gets the private 'ps_facebook.language' shared service.
     *
     * @return \Language
     */
    protected function getPsFacebook_LanguageService()
    {
        return $this->services['ps_facebook.language'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLanguage();
    }

    /**
     * Gets the private 'ps_facebook.link' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_LinkService()
    {
        return $this->services['ps_facebook.link'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getLink();
    }

    /**
     * Gets the private 'ps_facebook.shop' shared service.
     *
     * @return \Shop
     */
    protected function getPsFacebook_ShopService()
    {
        return $this->services['ps_facebook.shop'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getShop();
    }

    /**
     * Gets the private 'ps_facebook.smarty' shared service.
     *
     * @return \Smarty
     */
    protected function getPsFacebook_SmartyService()
    {
        return $this->services['ps_facebook.smarty'] = \PrestaShop\Module\PrestashopFacebook\Factory\ContextFactory::getSmarty();
    }

    /**
     * Gets the private 'ps_metrics.module' shared service.
     *
     * @return \Ps_metrics
     */
    protected function getPsMetrics_ModuleService()
    {
        return $this->services['ps_metrics.module'] = \Module::getInstanceByName('ps_metrics');
    }

    /**
     * Gets the private 'theme_manager' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager
     */
    protected function getThemeManagerService()
    {
        return $this->services['theme_manager'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeManager(${($_ = isset($this->services['shop']) ? $this->services['shop'] : $this->get('shop')) && false ?: '_'}, ${($_ = isset($this->services['configuration']) ? $this->services['configuration'] : $this->get('configuration')) && false ?: '_'}, ${($_ = isset($this->services['theme_validator']) ? $this->services['theme_validator'] : ($this->services['theme_validator'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeValidator())) && false ?: '_'}, ${($_ = isset($this->services['employee']) ? $this->services['employee'] : $this->get('employee')) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : ($this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'}, ${($_ = isset($this->services['finder']) ? $this->services['finder'] : ($this->services['finder'] = new \Symfony\Component\Finder\Finder())) && false ?: '_'}, ${($_ = isset($this->services['hook_configurator']) ? $this->services['hook_configurator'] : $this->getHookConfiguratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'theme_validator' shared service.
     *
     * @return \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeValidator
     */
    protected function getThemeValidatorService()
    {
        return $this->services['theme_validator'] = new \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeValidator();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'database_host' => 'db5005856751.hosting-data.io',
            'database_port' => '',
            'database_name' => 'dbs4911267',
            'database_user' => 'dbu1233964',
            'database_password' => 'hX4Z]C3/{!V:u}qj',
            'database_prefix' => 'ps_',
            'database_engine' => 'InnoDB',
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'JrBYONoqMjCaGhFrn09tkUs8G0k00FOHRkunMSEKp7W5m1qJhIFVdf9G',
            'ps_caching' => 'CacheMemcache',
            'ps_cache_enable' => false,
            'ps_creation_date' => '2021-11-21',
            'locale' => 'es-ES',
            'use_debug_toolbar' => true,
            'cookie_key' => 'xLBXq31sktu5NqHvVskP0pvKZKrHSzMogLXHxyAnkdeas87xOpmjmFbt',
            'cookie_iv' => 'u7cH28d2',
            'new_cookie_key' => 'def000003135a38f46cbbae185700eb4850e776494bc1a06beddbf0121ad63ccc1c8c7c1a183ff5fe2c887b51c92aae5a7b92594c7215d328ec0cc262722db925e8675fb',
            'cache.driver' => 'array',
            'kernel.bundles' => [

            ],
            'kernel.root_dir' => '/homepages/34/d802225033/htdocs/runize.es/app/',
            'kernel.name' => 'app',
            'kernel.debug' => false,
            'kernel.environment' => 'prod',
            'kernel.cache_dir' => '/homepages/34/d802225033/htdocs/runize.es/var/cache/prod/',
            'kernel.active_modules' => [
                0 => 'contactform',
                1 => 'dashactivity',
                2 => 'dashtrends',
                3 => 'dashgoals',
                4 => 'dashproducts',
                5 => 'graphnvd3',
                6 => 'gridhtml',
                7 => 'gsitemap',
                8 => 'ps_banner',
                9 => 'ps_categorytree',
                10 => 'ps_checkpayment',
                11 => 'ps_contactinfo',
                12 => 'ps_currencyselector',
                13 => 'ps_customeraccountlinks',
                14 => 'ps_customersignin',
                15 => 'ps_customtext',
                16 => 'ps_emailsubscription',
                17 => 'ps_faviconnotificationbo',
                18 => 'ps_featuredproducts',
                19 => 'ps_imageslider',
                20 => 'ps_languageselector',
                21 => 'ps_linklist',
                22 => 'ps_mainmenu',
                23 => 'ps_searchbar',
                24 => 'ps_sharebuttons',
                25 => 'ps_shoppingcart',
                26 => 'ps_socialfollow',
                27 => 'ps_themecusto',
                28 => 'ps_wirepayment',
                29 => 'pagesnotfound',
                30 => 'sekeywords',
                31 => 'statsbestcategories',
                32 => 'statsbestcustomers',
                33 => 'statsbestproducts',
                34 => 'statsbestsuppliers',
                35 => 'statsbestvouchers',
                36 => 'statscarrier',
                37 => 'statscatalog',
                38 => 'statscheckup',
                39 => 'statsdata',
                40 => 'statsequipment',
                41 => 'statsforecast',
                42 => 'statslive',
                43 => 'statsnewsletter',
                44 => 'statsorigin',
                45 => 'statspersonalinfos',
                46 => 'statsproduct',
                47 => 'statsregistrations',
                48 => 'statssales',
                49 => 'statssearch',
                50 => 'statsstock',
                51 => 'statsvisits',
                52 => 'welcome',
                53 => 'gamification',
                54 => 'psaddonsconnect',
                55 => 'psgdpr',
                56 => 'ps_mbo',
                57 => 'ps_buybuttonlite',
                58 => 'ps_checkout',
                59 => 'ps_metrics',
                60 => 'ps_facebook',
                61 => 'blockreassurance',
                62 => 'ps_facetedsearch',
                63 => 'novthemeconfig',
                64 => 'jscomposer',
                65 => 'novmanagevcaddons',
                66 => 'novadvancedsearch',
                67 => 'novblocktags',
                68 => 'novblockwishlist',
                69 => 'novloginsocial',
                70 => 'novlookbook',
                71 => 'novmegamenu',
                72 => 'novproductcomments',
                73 => 'novtestimonials',
                74 => 'novverticalmenu',
                75 => 'smartblog',
                76 => 'smartblogsearch',
                77 => 'smartblogrecentposts',
                78 => 'smartblogtag',
                79 => 'revsliderprestashop',
                80 => 'smartblogaddthisbutton',
                81 => 'smartblogarchive',
                82 => 'smartblogcategories',
                83 => 'smartblogfeed',
                84 => 'smartbloglatestcomments',
                85 => 'smartblogpopularposts',
                86 => 'holded',
            ],
            'ps_cache_dir' => '/homepages/34/d802225033/htdocs/runize.es/var/cache/prod/',
            'mail_themes_uri' => '/mails/themes',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [

            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => false,
            'doctrine.orm.proxy_dir' => '/homepages/34/d802225033/htdocs/runize.es/var/cache/prod//doctrine/orm/Proxies',
            'doctrine.orm.proxy_namespace' => 'Proxies',
        ];
    }
}
