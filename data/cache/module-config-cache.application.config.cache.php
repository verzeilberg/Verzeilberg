<?php
return array (
  'service_manager' => 
  array (
    'factories' => 
    array (
      'Zend\\Mail\\Protocol\\SmtpPluginManager' => 'Zend\\Mail\\Protocol\\SmtpPluginManagerFactory',
      'SerializerAdapterManager' => 'Zend\\Serializer\\AdapterPluginManagerFactory',
      'Zend\\Session\\Config\\ConfigInterface' => 'Zend\\Session\\Service\\SessionConfigFactory',
      'Zend\\Session\\ManagerInterface' => 'Zend\\Session\\Service\\SessionManagerFactory',
      'Zend\\Session\\Storage\\StorageInterface' => 'Zend\\Session\\Service\\StorageFactory',
      'FormAnnotationBuilder' => 'Zend\\Form\\Annotation\\AnnotationBuilderFactory',
      'FormElementManager' => 'Zend\\Form\\FormElementManagerFactory',
      'Zend\\Router\\Http\\TreeRouteStack' => 'Zend\\Router\\Http\\HttpRouterFactory',
      'Zend\\Router\\RoutePluginManager' => 'Zend\\Router\\RoutePluginManagerFactory',
      'Zend\\Router\\RouteStackInterface' => 'Zend\\Router\\RouterFactory',
      'Zend\\Validator\\ValidatorPluginManager' => 'Zend\\Validator\\ValidatorPluginManagerFactory',
      'doctrine.cli' => 'DoctrineModule\\Service\\CliFactory',
      'Doctrine\\ORM\\EntityManager' => 'DoctrineORMModule\\Service\\EntityManagerAliasCompatFactory',
      'ConsoleAdapter' => 'Zend\\Mvc\\Console\\Service\\ConsoleAdapterFactory',
      'ConsoleExceptionStrategy' => 'Zend\\Mvc\\Console\\Service\\ConsoleExceptionStrategyFactory',
      'ConsoleRouteNotFoundStrategy' => 'Zend\\Mvc\\Console\\Service\\ConsoleRouteNotFoundStrategyFactory',
      'ConsoleRouter' => 'Zend\\Mvc\\Console\\Router\\ConsoleRouterFactory',
      'ConsoleViewManager' => 'Zend\\Mvc\\Console\\Service\\ConsoleViewManagerFactory',
      'Zend\\Mvc\\Console\\View\\DefaultRenderingStrategy' => 'Zend\\Mvc\\Console\\Service\\DefaultRenderingStrategyFactory',
      'Zend\\Mvc\\Console\\View\\Renderer' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Cache\\PatternPluginManager' => 'Zend\\Cache\\Service\\PatternPluginManagerFactory',
      'Zend\\Cache\\Storage\\AdapterPluginManager' => 'Zend\\Cache\\Service\\StorageAdapterPluginManagerFactory',
      'Zend\\Cache\\Storage\\PluginManager' => 'Zend\\Cache\\Service\\StoragePluginManagerFactory',
      'Zend\\Paginator\\AdapterPluginManager' => 'Zend\\Paginator\\AdapterPluginManagerFactory',
      'Zend\\Paginator\\ScrollingStylePluginManager' => 'Zend\\Paginator\\ScrollingStylePluginManagerFactory',
      'Zend\\I18n\\Translator\\TranslatorInterface' => 'Zend\\I18n\\Translator\\TranslatorServiceFactory',
      'Zend\\I18n\\Translator\\LoaderPluginManager' => 'Zend\\I18n\\Translator\\LoaderPluginManagerFactory',
      'Zend\\InputFilter\\InputFilterPluginManager' => 'Zend\\InputFilter\\InputFilterPluginManagerFactory',
      'Zend\\Filter\\FilterPluginManager' => 'Zend\\Filter\\FilterPluginManagerFactory',
      'Zend\\Hydrator\\HydratorPluginManager' => 'Zend\\Hydrator\\HydratorPluginManagerFactory',
      'Zend\\Authentication\\AuthenticationService' => 'User\\Service\\Factory\\AuthenticationServiceFactory',
      'User\\Service\\AuthAdapter' => 'User\\Service\\Factory\\AuthAdapterFactory',
      'User\\Service\\AuthManager' => 'User\\Service\\Factory\\AuthManagerFactory',
      'User\\Service\\PermissionManager' => 'User\\Service\\Factory\\PermissionManagerFactory',
      'User\\Service\\RbacManager' => 'User\\Service\\Factory\\RbacManagerFactory',
      'User\\Service\\RoleManager' => 'User\\Service\\Factory\\RoleManagerFactory',
      'User\\Service\\UserManager' => 'User\\Service\\Factory\\UserManagerFactory',
      'User\\Service\\TokenManager' => 'User\\Service\\Factory\\TokenManagerFactory',
      'AssetManager\\Service\\AssetManager' => 'AssetManager\\Service\\AssetManagerServiceFactory',
      'AssetManager\\Service\\AssetFilterManager' => 'AssetManager\\Service\\AssetFilterManagerServiceFactory',
      'AssetManager\\Service\\AssetCacheManager' => 'AssetManager\\Service\\AssetCacheManagerServiceFactory',
      'AssetManager\\Resolver\\AggregateResolver' => 'AssetManager\\Service\\AggregateResolverServiceFactory',
      'AssetManager\\Resolver\\MapResolver' => 'AssetManager\\Service\\MapResolverServiceFactory',
      'AssetManager\\Resolver\\PathStackResolver' => 'AssetManager\\Service\\PathStackResolverServiceFactory',
      'AssetManager\\Resolver\\PrioritizedPathsResolver' => 'AssetManager\\Service\\PrioritizedPathsResolverServiceFactory',
      'AssetManager\\Resolver\\CollectionResolver' => 'AssetManager\\Service\\CollectionResolverServiceFactory',
      'AssetManager\\Resolver\\ConcatResolver' => 'AssetManager\\Service\\ConcatResolverServiceFactory',
      'AssetManager\\Resolver\\AliasPathStackResolver' => 'AssetManager\\Service\\AliasPathStackResolverServiceFactory',
      'Application\\Service\\NavManager' => 'Application\\Service\\Factory\\NavManagerFactory',
      'Application\\Service\\BeheerNavManager' => 'Application\\Service\\Factory\\BeheerNavManagerFactory',
      'Application\\Service\\RbacAssertionManager' => 'Application\\Service\\Factory\\RbacAssertionManagerFactory',
    ),
    'abstract_factories' => 
    array (
      0 => 'Zend\\Session\\Service\\ContainerAbstractServiceFactory',
      1 => 'Zend\\Form\\FormAbstractServiceFactory',
      'DoctrineModule' => 'DoctrineModule\\ServiceFactory\\AbstractDoctrineServiceFactory',
      2 => 'Zend\\Cache\\Service\\StorageCacheAbstractServiceFactory',
    ),
    'aliases' => 
    array (
      'Zend\\Session\\SessionManager' => 'Zend\\Session\\ManagerInterface',
      'Zend\\Form\\Annotation\\FormAnnotationBuilder' => 'FormAnnotationBuilder',
      'Zend\\Form\\Annotation\\AnnotationBuilder' => 'FormAnnotationBuilder',
      'Zend\\Form\\FormElementManager' => 'FormElementManager',
      'HttpRouter' => 'Zend\\Router\\Http\\TreeRouteStack',
      'router' => 'Zend\\Router\\RouteStackInterface',
      'Router' => 'Zend\\Router\\RouteStackInterface',
      'RoutePluginManager' => 'Zend\\Router\\RoutePluginManager',
      'ValidatorManager' => 'Zend\\Validator\\ValidatorPluginManager',
      'console' => 'ConsoleAdapter',
      'Console' => 'ConsoleAdapter',
      'ConsoleDefaultRenderingStrategy' => 'Zend\\Mvc\\Console\\View\\DefaultRenderingStrategy',
      'ConsoleRenderer' => 'Zend\\Mvc\\Console\\View\\Renderer',
      'TranslatorPluginManager' => 'Zend\\I18n\\Translator\\LoaderPluginManager',
      'InputFilterManager' => 'Zend\\InputFilter\\InputFilterPluginManager',
      'FilterManager' => 'Zend\\Filter\\FilterPluginManager',
      'HydratorManager' => 'Zend\\Hydrator\\HydratorPluginManager',
      'mime_resolver' => 'AssetManager\\Service\\MimeResolver',
      'AssetManager\\Service\\AggregateResolver' => 'AssetManager\\Resolver\\AggregateResolver',
    ),
    'invokables' => 
    array (
      'DoctrineModule\\Authentication\\Storage\\Session' => 'Zend\\Authentication\\Storage\\Session',
      'doctrine.dbal_cmd.runsql' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\RunSqlCommand',
      'doctrine.dbal_cmd.import' => 'Doctrine\\DBAL\\Tools\\Console\\Command\\ImportCommand',
      'doctrine.orm_cmd.clear_cache_metadata' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\MetadataCommand',
      'doctrine.orm_cmd.clear_cache_result' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\ResultCommand',
      'doctrine.orm_cmd.clear_cache_query' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ClearCache\\QueryCommand',
      'doctrine.orm_cmd.schema_tool_create' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\CreateCommand',
      'doctrine.orm_cmd.schema_tool_update' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\UpdateCommand',
      'doctrine.orm_cmd.schema_tool_drop' => 'Doctrine\\ORM\\Tools\\Console\\Command\\SchemaTool\\DropCommand',
      'doctrine.orm_cmd.convert_d1_schema' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ConvertDoctrine1SchemaCommand',
      'doctrine.orm_cmd.generate_entities' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateEntitiesCommand',
      'doctrine.orm_cmd.generate_proxies' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateProxiesCommand',
      'doctrine.orm_cmd.convert_mapping' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ConvertMappingCommand',
      'doctrine.orm_cmd.run_dql' => 'Doctrine\\ORM\\Tools\\Console\\Command\\RunDqlCommand',
      'doctrine.orm_cmd.validate_schema' => 'Doctrine\\ORM\\Tools\\Console\\Command\\ValidateSchemaCommand',
      'doctrine.orm_cmd.info' => 'Doctrine\\ORM\\Tools\\Console\\Command\\InfoCommand',
      'doctrine.orm_cmd.ensure_production_settings' => 'Doctrine\\ORM\\Tools\\Console\\Command\\EnsureProductionSettingsCommand',
      'doctrine.orm_cmd.generate_repositories' => 'Doctrine\\ORM\\Tools\\Console\\Command\\GenerateRepositoriesCommand',
      'Twitter\\Service\\twitterServiceInterface' => 'Twitter\\Service\\twitterService',
      'Twitter\\Service\\twitterOathServiceInterface' => 'Twitter\\Service\\twitterOathService',
      'Blog\\Service\\blogServiceInterface' => 'Blog\\Service\\blogService',
      'Blog\\Service\\categoryServiceInterface' => 'Blog\\Service\\categoryService',
      'Blog\\Service\\commentServiceInterface' => 'Blog\\Service\\commentService',
      'Agenda\\Agenda\\Service\\AgendaServiceInterface' => 'Agenda\\Agenda\\Service\\AgendaService',
      'Email\\Service\\contactServiceInterface' => 'Email\\Service\\contactService',
      'Email\\Service\\emailReaderServiceInterface' => 'Email\\Service\\emailReaderService',
      'UploadFiles\\Service\\uploadfilesServiceInterface' => 'UploadFiles\\Service\\uploadfilesService',
      'UploadImages\\Service\\cropImageServiceInterface' => 'UploadImages\\Service\\cropImageService',
      'UploadImages\\Service\\rotateImageServiceInterface' => 'UploadImages\\Service\\rotateImageService',
      'UploadImages\\Service\\imageServiceInterface' => 'UploadImages\\Service\\imageService',
      'YouTube\\Service\\youTubeServiceInterface' => 'YouTube\\Service\\youTubeService',
      'Contact\\Service\\contactServiceInterface' => 'Contact\\Service\\contactService',
      'Search\\Service\\searchServiceInterface' => 'Search\\Service\\searchService',
      'Event\\Service\\eventServiceInterface' => 'Event\\Service\\eventService',
      'Event\\Service\\eventCategoryServiceInterface' => 'Event\\Service\\eventCategoryService',
      'CheckList\\Entity\\CheckList\\checkListServiceInterface' => 'CheckList\\Service\\checkListService',
      'CheckList\\Entity\\CheckList\\checkListFieldServiceInterface' => 'CheckList\\Service\\checkListFieldService',
      'CheckList\\Entity\\CheckList\\checkListAnswerServiceInterface' => 'CheckList\\Service\\checkListAnswerService',
      'CheckList\\Entity\\CheckList\\givenAnswerServiceInterface' => 'CheckList\\Service\\givenAnswerService',
      'AssetManager\\Service\\MimeResolver' => 'AssetManager\\Service\\MimeResolver',
      'Application\\Service\\beheerServiceInterface' => 'Application\\Service\\beheerService',
      'Application\\Service\\defaultServiceInterface' => 'Application\\Service\\defaultService',
    ),
    'delegators' => 
    array (
      'ControllerManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ControllerManagerDelegatorFactory',
      ),
      'Request' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleRequestDelegatorFactory',
      ),
      'Response' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleResponseDelegatorFactory',
      ),
      'Zend\\Router\\RouteStackInterface' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Router\\ConsoleRouterDelegatorFactory',
      ),
      'Zend\\Mvc\\SendResponseListener' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleResponseSenderDelegatorFactory',
      ),
      'ViewHelperManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ConsoleViewHelperManagerDelegatorFactory',
      ),
      'ViewManager' => 
      array (
        0 => 'Zend\\Mvc\\Console\\Service\\ViewManagerDelegatorFactory',
      ),
    ),
  ),
  'controller_plugins' => 
  array (
    'aliases' => 
    array (
      'fileprg' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'FilePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'filePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'filepostredirectget' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'Zend\\Mvc\\Controller\\Plugin\\FilePostRedirectGet' => 'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet',
      'flashmessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'flashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'Zend\\Mvc\\Controller\\Plugin\\FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger',
      'identity' => 'Zend\\Mvc\\Plugin\\Identity\\Identity',
      'Identity' => 'Zend\\Mvc\\Plugin\\Identity\\Identity',
      'Zend\\Mvc\\Controller\\Plugin\\Identity' => 'Zend\\Mvc\\Plugin\\Identity\\Identity',
      'prg' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'PostRedirectGet' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'postRedirectGet' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'postredirectget' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'Zend\\Mvc\\Controller\\Plugin\\PostRedirectGet' => 'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet',
      'CreateConsoleNotFoundModel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'createConsoleNotFoundModel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'createconsolenotfoundmodel' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'Zend\\Mvc\\Controller\\Plugin\\CreateConsoleNotFoundModel::class' => 'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel',
      'access' => 'User\\Controller\\Plugin\\AccessPlugin',
      'currentUser' => 'User\\Controller\\Plugin\\CurrentUserPlugin',
    ),
    'factories' => 
    array (
      'Zend\\Mvc\\Plugin\\FilePrg\\FilePostRedirectGet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Mvc\\Plugin\\FlashMessenger\\FlashMessenger' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Mvc\\Plugin\\Identity\\Identity' => 'Zend\\Mvc\\Plugin\\Identity\\IdentityFactory',
      'Zend\\Mvc\\Plugin\\Prg\\PostRedirectGet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Mvc\\Console\\Controller\\Plugin\\CreateConsoleNotFoundModel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'User\\Controller\\Plugin\\AccessPlugin' => 'User\\Controller\\Plugin\\Factory\\AccessPluginFactory',
      'User\\Controller\\Plugin\\CurrentUserPlugin' => 'User\\Controller\\Plugin\\Factory\\CurrentUserPluginFactory',
    ),
  ),
  'view_helpers' => 
  array (
    'aliases' => 
    array (
      'flashmessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'flashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger',
      'form' => 'Zend\\Form\\View\\Helper\\Form',
      'Form' => 'Zend\\Form\\View\\Helper\\Form',
      'formbutton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'form_button' => 'Zend\\Form\\View\\Helper\\FormButton',
      'formButton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'FormButton' => 'Zend\\Form\\View\\Helper\\FormButton',
      'formcaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'form_captcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'formCaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'FormCaptcha' => 'Zend\\Form\\View\\Helper\\FormCaptcha',
      'captchadumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha_dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captcha/dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'CaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'formcaptchadumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'form_captcha_dumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'formCaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'FormCaptchaDumb' => 'Zend\\Form\\View\\Helper\\Captcha\\Dumb',
      'captchafiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha/figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captcha_figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'CaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'formcaptchafiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'form_captcha_figlet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'formCaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'FormCaptchaFiglet' => 'Zend\\Form\\View\\Helper\\Captcha\\Figlet',
      'captchaimage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcha/image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcha_image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'CaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'formcaptchaimage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'form_captcha_image' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'formCaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'FormCaptchaImage' => 'Zend\\Form\\View\\Helper\\Captcha\\Image',
      'captcharecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha/recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captcha_recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'captchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'CaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcaptcharecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'form_captcha_recaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formCaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'FormCaptchaRecaptcha' => 'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha',
      'formcheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'form_checkbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'formCheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'FormCheckbox' => 'Zend\\Form\\View\\Helper\\FormCheckbox',
      'formcollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'form_collection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'formCollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'FormCollection' => 'Zend\\Form\\View\\Helper\\FormCollection',
      'formcolor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'form_color' => 'Zend\\Form\\View\\Helper\\FormColor',
      'formColor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'FormColor' => 'Zend\\Form\\View\\Helper\\FormColor',
      'formdate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'form_date' => 'Zend\\Form\\View\\Helper\\FormDate',
      'formDate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'FormDate' => 'Zend\\Form\\View\\Helper\\FormDate',
      'formdatetime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'form_date_time' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'formDateTime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'FormDateTime' => 'Zend\\Form\\View\\Helper\\FormDateTime',
      'formdatetimelocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'form_date_time_local' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'formDateTimeLocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'FormDateTimeLocal' => 'Zend\\Form\\View\\Helper\\FormDateTimeLocal',
      'formdatetimeselect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'form_date_time_select' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'formDateTimeSelect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'FormDateTimeSelect' => 'Zend\\Form\\View\\Helper\\FormDateTimeSelect',
      'formdateselect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'form_date_select' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'formDateSelect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'FormDateSelect' => 'Zend\\Form\\View\\Helper\\FormDateSelect',
      'form_element' => 'Zend\\Form\\View\\Helper\\FormElement',
      'formelement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'formElement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'FormElement' => 'Zend\\Form\\View\\Helper\\FormElement',
      'form_element_errors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'formelementerrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'formElementErrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'FormElementErrors' => 'Zend\\Form\\View\\Helper\\FormElementErrors',
      'form_email' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'formemail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'formEmail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'FormEmail' => 'Zend\\Form\\View\\Helper\\FormEmail',
      'form_file' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formfile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formFile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'FormFile' => 'Zend\\Form\\View\\Helper\\FormFile',
      'formfileapcprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'form_file_apc_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formFileApcProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'FormFileApcProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress',
      'formfilesessionprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'form_file_session_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formFileSessionProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'FormFileSessionProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress',
      'formfileuploadprogress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'form_file_upload_progress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formFileUploadProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'FormFileUploadProgress' => 'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress',
      'formhidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'form_hidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'formHidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'FormHidden' => 'Zend\\Form\\View\\Helper\\FormHidden',
      'formimage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'form_image' => 'Zend\\Form\\View\\Helper\\FormImage',
      'formImage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'FormImage' => 'Zend\\Form\\View\\Helper\\FormImage',
      'forminput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'form_input' => 'Zend\\Form\\View\\Helper\\FormInput',
      'formInput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'FormInput' => 'Zend\\Form\\View\\Helper\\FormInput',
      'formlabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'form_label' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'formLabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'FormLabel' => 'Zend\\Form\\View\\Helper\\FormLabel',
      'formmonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'form_month' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'formMonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'FormMonth' => 'Zend\\Form\\View\\Helper\\FormMonth',
      'formmonthselect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'form_month_select' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'formMonthSelect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'FormMonthSelect' => 'Zend\\Form\\View\\Helper\\FormMonthSelect',
      'formmulticheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'form_multi_checkbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'formMultiCheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'FormMultiCheckbox' => 'Zend\\Form\\View\\Helper\\FormMultiCheckbox',
      'formnumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'form_number' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'formNumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'FormNumber' => 'Zend\\Form\\View\\Helper\\FormNumber',
      'formpassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'form_password' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'formPassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'FormPassword' => 'Zend\\Form\\View\\Helper\\FormPassword',
      'formradio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'form_radio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'formRadio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'FormRadio' => 'Zend\\Form\\View\\Helper\\FormRadio',
      'formrange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'form_range' => 'Zend\\Form\\View\\Helper\\FormRange',
      'formRange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'FormRange' => 'Zend\\Form\\View\\Helper\\FormRange',
      'formreset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'form_reset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'formReset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'FormReset' => 'Zend\\Form\\View\\Helper\\FormReset',
      'formrow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'form_row' => 'Zend\\Form\\View\\Helper\\FormRow',
      'formRow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'FormRow' => 'Zend\\Form\\View\\Helper\\FormRow',
      'formsearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'form_search' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'formSearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'FormSearch' => 'Zend\\Form\\View\\Helper\\FormSearch',
      'formselect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'form_select' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'formSelect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'FormSelect' => 'Zend\\Form\\View\\Helper\\FormSelect',
      'formsubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'form_submit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'formSubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'FormSubmit' => 'Zend\\Form\\View\\Helper\\FormSubmit',
      'formtel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'form_tel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'formTel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'FormTel' => 'Zend\\Form\\View\\Helper\\FormTel',
      'formtext' => 'Zend\\Form\\View\\Helper\\FormText',
      'form_text' => 'Zend\\Form\\View\\Helper\\FormText',
      'formText' => 'Zend\\Form\\View\\Helper\\FormText',
      'FormText' => 'Zend\\Form\\View\\Helper\\FormText',
      'formtextarea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'form_text_area' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formTextarea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formTextArea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'FormTextArea' => 'Zend\\Form\\View\\Helper\\FormTextarea',
      'formtime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'form_time' => 'Zend\\Form\\View\\Helper\\FormTime',
      'formTime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'FormTime' => 'Zend\\Form\\View\\Helper\\FormTime',
      'formurl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'form_url' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'formUrl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'FormUrl' => 'Zend\\Form\\View\\Helper\\FormUrl',
      'formweek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'form_week' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'formWeek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'FormWeek' => 'Zend\\Form\\View\\Helper\\FormWeek',
      'currencyformat' => 'Zend\\I18n\\View\\Helper\\CurrencyFormat',
      'currencyFormat' => 'Zend\\I18n\\View\\Helper\\CurrencyFormat',
      'CurrencyFormat' => 'Zend\\I18n\\View\\Helper\\CurrencyFormat',
      'dateformat' => 'Zend\\I18n\\View\\Helper\\DateFormat',
      'dateFormat' => 'Zend\\I18n\\View\\Helper\\DateFormat',
      'DateFormat' => 'Zend\\I18n\\View\\Helper\\DateFormat',
      'numberformat' => 'Zend\\I18n\\View\\Helper\\NumberFormat',
      'numberFormat' => 'Zend\\I18n\\View\\Helper\\NumberFormat',
      'NumberFormat' => 'Zend\\I18n\\View\\Helper\\NumberFormat',
      'plural' => 'Zend\\I18n\\View\\Helper\\Plural',
      'Plural' => 'Zend\\I18n\\View\\Helper\\Plural',
      'translate' => 'Zend\\I18n\\View\\Helper\\Translate',
      'Translate' => 'Zend\\I18n\\View\\Helper\\Translate',
      'translateplural' => 'Zend\\I18n\\View\\Helper\\TranslatePlural',
      'translatePlural' => 'Zend\\I18n\\View\\Helper\\TranslatePlural',
      'TranslatePlural' => 'Zend\\I18n\\View\\Helper\\TranslatePlural',
      'access' => 'User\\View\\Helper\\Access',
      'currentUser' => 'User\\View\\Helper\\CurrentUser',
      'agendaViewHelper' => 'Agenda\\View\\Helper\\AgendaHelper',
      'checkListHelper' => 'CheckList\\View\\Helper\\CheckListHelper',
      'stravaViewHelper' => 'StravaApi\\View\\Helper\\StravaApiHelper',
      'asset' => 'AssetManager\\View\\Helper\\Asset',
      'mainMenu' => 'Application\\View\\Helper\\Menu',
      'beheerMenu' => 'Application\\View\\Helper\\BeheerMenu',
      'pageBreadcrumbs' => 'Application\\View\\Helper\\Breadcrumbs',
    ),
    'factories' => 
    array (
      'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessengerFactory',
      'zendviewhelperflashmessenger' => 'Zend\\Mvc\\Plugin\\FlashMessenger\\View\\Helper\\FlashMessengerFactory',
      'Zend\\Form\\View\\Helper\\Form' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormButton' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCaptcha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Dumb' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Figlet' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\Image' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\Captcha\\ReCaptcha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCheckbox' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormCollection' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormColor' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDate' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTimeLocal' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateTimeSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormDateSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormElement' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormElementErrors' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormEmail' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormFile' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileApcProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileSessionProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\File\\FormFileUploadProgress' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormHidden' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormImage' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormInput' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormLabel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMonth' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMonthSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormMultiCheckbox' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormNumber' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormPassword' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRadio' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRange' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormReset' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormRow' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSearch' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSelect' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormSubmit' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTel' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormText' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTextarea' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormUrl' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\Form\\View\\Helper\\FormWeek' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\CurrencyFormat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\DateFormat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\NumberFormat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\Plural' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\Translate' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\View\\Helper\\TranslatePlural' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'User\\View\\Helper\\Access' => 'User\\View\\Helper\\Factory\\AccessFactory',
      'User\\View\\Helper\\CurrentUser' => 'User\\View\\Helper\\Factory\\CurrentUserFactory',
      'Agenda\\View\\Helper\\AgendaHelper' => 'Agenda\\View\\Helper\\Factory\\AgendaViewHelperFactory',
      'CheckList\\View\\Helper\\CheckListHelper' => 'CheckList\\View\\Helper\\Factory\\CheckListHelperFactory',
      'StravaApi\\View\\Helper\\StravaApiHelper' => 'StravaApi\\View\\Helper\\Factory\\StravaViewHelperFactory',
      'AssetManager\\View\\Helper\\Asset' => 'AssetManager\\Service\\AssetViewHelperFactory',
      'Application\\View\\Helper\\Menu' => 'Application\\View\\Helper\\Factory\\MenuFactory',
      'Application\\View\\Helper\\BeheerMenu' => 'Application\\View\\Helper\\Factory\\BeheerMenuFactory',
      'Application\\View\\Helper\\Breadcrumbs' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'route_manager' => 
  array (
    'factories' => 
    array (
      'symfony_cli' => 'DoctrineModule\\Service\\SymfonyCliRouteFactory',
    ),
  ),
  'router' => 
  array (
    'routes' => 
    array (
      'doctrine_orm_module_yuml' => 
      array (
        'type' => 'literal',
        'options' => 
        array (
          'route' => '/ocra_service_manager_yuml',
          'defaults' => 
          array (
            'controller' => 'DoctrineORMModule\\Yuml\\YumlController',
            'action' => 'index',
          ),
        ),
      ),
      'twitter' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/twitter[/:action]',
          'defaults' => 
          array (
            'controller' => 'Twitter\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'login' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/login',
          'defaults' => 
          array (
            'controller' => 'User\\Controller\\AuthController',
            'action' => 'login',
          ),
        ),
      ),
      'logout' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/logout',
          'defaults' => 
          array (
            'controller' => 'User\\Controller\\AuthController',
            'action' => 'logout',
          ),
        ),
      ),
      'not-authorized' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/not-authorized',
          'defaults' => 
          array (
            'controller' => 'User\\Controller\\AuthController',
            'action' => 'notAuthorized',
          ),
        ),
      ),
      'reset-password' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/reset-password',
          'defaults' => 
          array (
            'controller' => 'User\\Controller\\UserController',
            'action' => 'resetPassword',
          ),
        ),
      ),
      'set-password' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/set-password',
          'defaults' => 
          array (
            'controller' => 'User\\Controller\\UserController',
            'action' => 'setPassword',
          ),
        ),
      ),
      'users' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/users[/:action[/:id]]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'userbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'roles' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/roles[/:action[/:id]]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]*',
          ),
          'defaults' => 
          array (
            'controller' => 'rolebeheer',
            'action' => 'index',
          ),
        ),
      ),
      'permissions' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/permissions[/:action[/:id]]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]*',
          ),
          'defaults' => 
          array (
            'controller' => 'permissionbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'request-token' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/request-token',
          'defaults' => 
          array (
            'controller' => 'User\\Controller\\TokenController',
            'action' => 'requestToken',
          ),
        ),
      ),
      'validate-token' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/validate-token',
          'defaults' => 
          array (
            'controller' => 'User\\Controller\\TokenController',
            'action' => 'validateToken',
          ),
        ),
      ),
      'blog' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/blog[/:action[/:id]]',
          'defaults' => 
          array (
            'controller' => 'Blog\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'blogbeheer' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/blogbeheer[/:action[/:id]]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'blogbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'blogajaxbeheer' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/blogajaxbeheer[/:action[/:id]]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'blogajaxbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'categorybeheer' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/beheer/categorie[/:action[/:id]]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[a-zA-Z0-9_-]*',
          ),
          'defaults' => 
          array (
            'controller' => 'categorybeheer',
            'action' => 'index',
          ),
        ),
      ),
      'agenda' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/agenda[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'agendabeheer',
            'action' => 'index',
          ),
        ),
      ),
      'agendaAjax' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/agenda-ajax[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'agendaAjax',
          ),
        ),
      ),
      'email' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/email[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'emailbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'uploadfiles' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/uploadfiles[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'uploadfilesbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'images' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/image[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'imagesbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'ajaximage' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/ajaximage[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'UploadImages\\Controller\\AjaxImageController',
          ),
        ),
      ),
      'youtube' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/youtube[/:action]',
          'defaults' => 
          array (
            'controller' => 'YouTube\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'contact' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/contact[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'contactbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'search' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/search[/:action]',
          'defaults' => 
          array (
            'controller' => 'Search\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'event' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/event[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'eventbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'eventCategory' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/event/category[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'eventcategorybeheer',
            'action' => 'index',
          ),
        ),
      ),
      'checklist' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/checklist[/:action]',
          'defaults' => 
          array (
            'controller' => 'CheckList\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'checklistajax' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/checklistajax[/:action]',
          'defaults' => 
          array (
            'controller' => 'checklistajax',
          ),
        ),
      ),
      'bitlyshortener' => 
      array (
        'type' => 'Literal',
        'options' => 
        array (
          'route' => '/bitly-shortener',
          'defaults' => 
          array (
            'controller' => 'BitlyShortener\\Controller\\BitlyShortenerController',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
        ),
      ),
      'strava' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/strava[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'stravabeheer',
            'action' => 'index',
          ),
        ),
      ),
      'stravaimport' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/stravaimport[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'stravaimportbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'stravalog' => 
      array (
        'type' => 'segment',
        'options' => 
        array (
          'route' => '/stravalog[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'stravalogbeheer',
            'action' => 'index',
          ),
        ),
      ),
      'runningStats' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/running-stats[/:action][/:id]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'stravaindex',
            'action' => 'index',
          ),
        ),
      ),
      'home' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'beheer' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/beheer',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\BeheerController',
            'action' => 'index',
          ),
        ),
        'may_terminate' => true,
        'child_routes' => 
        array (
          'blog' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/blog[[/]:action[/:id]]',
              'defaults' => 
              array (
                'controller' => 'blogbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'categories' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/categories[/:action[/:id]]',
              'defaults' => 
              array (
                'controller' => 'categorybeheer',
                'action' => 'index',
              ),
            ),
          ),
          'roles' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/roles[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'rolebeheer',
                'action' => 'index',
              ),
            ),
          ),
          'permissions' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/permissions[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'permissionbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'users' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/users[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[a-zA-Z0-9_-]*',
              ),
              'defaults' => 
              array (
                'controller' => 'userbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'contact' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/contact[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'contactbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'email' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/email[/:folder[/:page]][/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'emailbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'showEmail' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/email/show[/:folder[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'emailbeheer',
                'action' => 'showEmail',
              ),
            ),
          ),
          'showEmailBody' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/email/showbody[/:folder[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'emailbeheer',
                'action' => 'showEmailBody',
              ),
            ),
          ),
          'manageEmailfolders' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/email/folders[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'emailbeheer',
                'action' => 'addFolder',
              ),
            ),
          ),
          'downloadAttachment' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/email/attachement[/:folder][/:id][/:attachmentId]',
              'constraints' => 
              array (
                'folder' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
                'attachmentId' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'emailbeheer',
                'action' => 'downloadFile',
              ),
            ),
          ),
          'agenda' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/agenda[/:action[/:day]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'day' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'agendabeheer',
                'action' => 'index',
              ),
            ),
          ),
          'search' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/search[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'searchbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'event' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/event[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'eventbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'eventcategories' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/event/categories[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'eventcategorybeheer',
                'action' => 'index',
              ),
            ),
          ),
          'checklist' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/checklist[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'checklistbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'checklistitem' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/checklistitem[/:action[/:id][/:checklistid]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'checklistitembeheer',
                'action' => 'index',
              ),
            ),
          ),
          'images' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/images[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'imagesbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'strava' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/strava[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'stravabeheer',
                'action' => 'index',
              ),
            ),
          ),
          'stravaimport' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/stravaimport[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'stravaimportbeheer',
                'action' => 'index',
              ),
            ),
          ),
          'stravalog' => 
          array (
            'type' => 'Zend\\Router\\Http\\Segment',
            'options' => 
            array (
              'route' => '/stravalog[/:action[/:id]]',
              'constraints' => 
              array (
                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                'id' => '[0-9]*',
              ),
              'defaults' => 
              array (
                'controller' => 'stravalogbeheer',
                'action' => 'index',
              ),
            ),
          ),
        ),
      ),
      'application' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/application[/:action[/:id]]',
          'constraints' => 
          array (
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'index',
          ),
        ),
      ),
      'about' => 
      array (
        'type' => 'Zend\\Router\\Http\\Literal',
        'options' => 
        array (
          'route' => '/about',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'about',
          ),
        ),
      ),
      'events' => 
      array (
        'type' => 'Zend\\Router\\Http\\Segment',
        'options' => 
        array (
          'route' => '/events[/:action[/:id]]',
          'defaults' => 
          array (
            'controller' => 'Application\\Controller\\IndexController',
            'action' => 'events',
          ),
        ),
      ),
    ),
  ),
  'doctrine' => 
  array (
    'cache' => 
    array (
      'apc' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\ApcCache',
        'namespace' => 'DoctrineModule',
      ),
      'apcu' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\ApcuCache',
        'namespace' => 'DoctrineModule',
      ),
      'array' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\ArrayCache',
        'namespace' => 'DoctrineModule',
      ),
      'filesystem' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
        'directory' => 'data/DoctrineModule/cache',
        'namespace' => 'DoctrineModule',
      ),
      'memcache' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
        'instance' => 'my_memcache_alias',
        'namespace' => 'DoctrineModule',
      ),
      'memcached' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
        'instance' => 'my_memcached_alias',
        'namespace' => 'DoctrineModule',
      ),
      'predis' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\PredisCache',
        'instance' => 'my_predis_alias',
        'namespace' => 'DoctrineModule',
      ),
      'redis' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\RedisCache',
        'instance' => 'my_redis_alias',
        'namespace' => 'DoctrineModule',
      ),
      'wincache' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
        'namespace' => 'DoctrineModule',
      ),
      'xcache' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\XcacheCache',
        'namespace' => 'DoctrineModule',
      ),
      'zenddata' => 
      array (
        'class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
        'namespace' => 'DoctrineModule',
      ),
    ),
    'authentication' => 
    array (
      'odm_default' => 
      array (
      ),
      'orm_default' => 
      array (
        'objectManager' => 'doctrine.entitymanager.orm_default',
      ),
    ),
    'authenticationadapter' => 
    array (
      'odm_default' => true,
      'orm_default' => true,
    ),
    'authenticationstorage' => 
    array (
      'odm_default' => true,
      'orm_default' => true,
    ),
    'authenticationservice' => 
    array (
      'odm_default' => true,
      'orm_default' => true,
    ),
    'connection' => 
    array (
      'orm_default' => 
      array (
        'configuration' => 'orm_default',
        'eventmanager' => 'orm_default',
        'params' => 
        array (
          'host' => '127.0.0.1',
          'port' => '3306',
          'user' => 'verzeilberg',
          'password' => '32xuhe3O17lo2AL316s6vogEdEP1qE',
          'dbname' => 'verzeilberg',
          'charset' => 'UTF8',
        ),
        'driverClass' => 'Doctrine\\DBAL\\Driver\\PDOMySql\\Driver',
      ),
    ),
    'configuration' => 
    array (
      'orm_default' => 
      array (
        'metadata_cache' => 'array',
        'query_cache' => 'array',
        'result_cache' => 'array',
        'hydration_cache' => 'array',
        'driver' => 'orm_default',
        'generate_proxies' => true,
        'proxy_dir' => 'data/DoctrineORMModule/Proxy',
        'proxy_namespace' => 'DoctrineORMModule\\Proxy',
        'filters' => 
        array (
        ),
        'datetime_functions' => 
        array (
          'date' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'time' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'timestamp' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'convert_tz' => 'Oro\\ORM\\Query\\AST\\Functions\\DateTime\\ConvertTz',
        ),
        'string_functions' => 
        array (
          'md5' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'group_concat' => 'Oro\\ORM\\Query\\AST\\Functions\\String\\GroupConcat',
          'cast' => 'Oro\\ORM\\Query\\AST\\Functions\\Cast',
          'concat_ws' => 'Oro\\ORM\\Query\\AST\\Functions\\String\\ConcatWs',
          'replace' => 'Oro\\ORM\\Query\\AST\\Functions\\String\\Replace',
          'date_format' => 'Oro\\ORM\\Query\\AST\\Functions\\String\\DateFormat',
        ),
        'numeric_functions' => 
        array (
          'timestampdiff' => 'Oro\\ORM\\Query\\AST\\Functions\\Numeric\\TimestampDiff',
          'dayofyear' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'dayofmonth' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'dayofweek' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'week' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'day' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'hour' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'minute' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'month' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'quarter' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'second' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'year' => 'Oro\\ORM\\Query\\AST\\Functions\\SimpleFunction',
          'sign' => 'Oro\\ORM\\Query\\AST\\Functions\\Numeric\\Sign',
          'pow' => 'Oro\\ORM\\Query\\AST\\Functions\\Numeric\\Pow',
          'round' => 'Oro\\ORM\\Query\\AST\\Functions\\Numeric\\Round',
        ),
        'second_level_cache' => 
        array (
        ),
      ),
    ),
    'driver' => 
    array (
      'orm_default' => 
      array (
        'class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
        'drivers' => 
        array (
          'User\\Entity' => 'User_driver',
          'Blog\\Entity' => 'Blog_driver',
          'Agenda\\Entity' => 'Agenda_driver',
          'UploadFiles\\Entity' => 'UploadFiles_driver',
          'UploadImages\\Entity' => 'UploadImages_driver',
          'YouTube\\Entity' => 'YouTube_driver',
          'Contact\\Entity' => 'Contact_driver',
          'Search\\Entity' => 'Search_driver',
          'Event\\Entity' => 'Event_driver',
          'CheckList\\Entity' => 'CheckList_driver',
          'StravaApi\\Entity' => 'StravaApi_driver',
          'Application\\Entity' => 'Application_driver',
        ),
      ),
      'User_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/User/config/../src/Entity',
        ),
      ),
      'Blog_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/Blog/config/../src/Entity',
        ),
      ),
      'Agenda_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/Agenda/config/../src/Entity',
        ),
      ),
      'UploadFiles_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/UploadFiles/config/../src/Entity',
        ),
      ),
      'UploadImages_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/UploadImages/config/../src/Entity',
        ),
      ),
      'YouTube_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/YouTube/config/../src/Entity',
        ),
      ),
      'Contact_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/Contact/config/../src/Entity',
        ),
      ),
      'Search_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/Search/config/../src/Entity',
        ),
      ),
      'Event_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/Event/config/../src/Entity',
        ),
      ),
      'CheckList_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/CheckList/config/../src/Entity',
        ),
      ),
      'StravaApi_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/StravaApi/config/../src/Entity',
        ),
      ),
      'Application_driver' => 
      array (
        'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
        'cache' => 'array',
        'paths' => 
        array (
          0 => '/var/www/vhosts/verzeilberg-dev/module/Application/config/../src/Entity',
        ),
      ),
    ),
    'entitymanager' => 
    array (
      'orm_default' => 
      array (
        'connection' => 'orm_default',
        'configuration' => 'orm_default',
      ),
    ),
    'eventmanager' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'sql_logger_collector' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'mapping_collector' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'formannotationbuilder' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'entity_resolver' => 
    array (
      'orm_default' => 
      array (
      ),
    ),
    'migrations_configuration' => 
    array (
      'orm_default' => 
      array (
        'directory' => 'data/DoctrineORMModule/Migrations',
        'name' => 'Doctrine Database Migrations',
        'namespace' => 'DoctrineORMModule\\Migrations',
        'table' => 'migrations',
        'column' => 'version',
      ),
    ),
    'migrations_cmd' => 
    array (
      'generate' => 
      array (
      ),
      'execute' => 
      array (
      ),
      'migrate' => 
      array (
      ),
      'status' => 
      array (
      ),
      'version' => 
      array (
      ),
      'diff' => 
      array (
      ),
      'latest' => 
      array (
      ),
    ),
  ),
  'doctrine_factories' => 
  array (
    'cache' => 'DoctrineModule\\Service\\CacheFactory',
    'eventmanager' => 'DoctrineModule\\Service\\EventManagerFactory',
    'driver' => 'DoctrineModule\\Service\\DriverFactory',
    'authenticationadapter' => 'DoctrineModule\\Service\\Authentication\\AdapterFactory',
    'authenticationstorage' => 'DoctrineModule\\Service\\Authentication\\StorageFactory',
    'authenticationservice' => 'DoctrineModule\\Service\\Authentication\\AuthenticationServiceFactory',
    'connection' => 'DoctrineORMModule\\Service\\DBALConnectionFactory',
    'configuration' => 'DoctrineORMModule\\Service\\ConfigurationFactory',
    'entitymanager' => 'DoctrineORMModule\\Service\\EntityManagerFactory',
    'entity_resolver' => 'DoctrineORMModule\\Service\\EntityResolverFactory',
    'sql_logger_collector' => 'DoctrineORMModule\\Service\\SQLLoggerCollectorFactory',
    'mapping_collector' => 'DoctrineORMModule\\Service\\MappingCollectorFactory',
    'formannotationbuilder' => 'DoctrineORMModule\\Service\\FormAnnotationBuilderFactory',
    'migrations_configuration' => 'DoctrineORMModule\\Service\\MigrationsConfigurationFactory',
    'migrations_cmd' => 'DoctrineORMModule\\Service\\MigrationsCommandFactory',
  ),
  'controllers' => 
  array (
    'factories' => 
    array (
      'DoctrineModule\\Controller\\Cli' => 'DoctrineModule\\Service\\CliControllerFactory',
      'Twitter\\Controller\\IndexController' => 'Twitter\\Factory\\IndexControllerFactory',
      'User\\Controller\\AuthController' => 'User\\Controller\\Factory\\AuthControllerFactory',
      'User\\Controller\\PermissionController' => 'User\\Controller\\Factory\\PermissionControllerFactory',
      'User\\Controller\\RoleController' => 'User\\Controller\\Factory\\RoleControllerFactory',
      'User\\Controller\\UserController' => 'User\\Controller\\Factory\\UserControllerFactory',
      'User\\Controller\\TokenController' => 'User\\Controller\\Factory\\TokenControllerFactory',
      'Blog\\Controller\\IndexController' => 'Blog\\Controller\\Factory\\IndexControllerFactory',
      'Blog\\Controller\\BlogController' => 'Blog\\Controller\\Factory\\BlogControllerFactory',
      'Blog\\Controller\\BlogAjaxController' => 'Blog\\Controller\\Factory\\BlogAjaxControllerFactory',
      'Blog\\Controller\\CategoryController' => 'Blog\\Controller\\Factory\\CategoryControllerFactory',
      'Agenda\\Controller\\AgendaController' => 'Agenda\\Controller\\Factory\\AgendaControllerFactory',
      'Agenda\\Controller\\AgendaAjaxController' => 'Agenda\\Controller\\Factory\\AgendaAjaxControllerFactory',
      'Email\\Controller\\EmailController' => 'Email\\Factory\\EmailControllerFactory',
      'UploadFiles\\Controller\\UploadFilesController' => 'UploadFiles\\Factory\\UploadFilesControllerFactory',
      'UploadImages\\Controller\\UploadImagesController' => 'UploadImages\\Controller\\Factory\\UploadImagesControllerFactory',
      'UploadImages\\Controller\\AjaxImageController' => 'UploadImages\\Controller\\Factory\\AjaxImageControllerFactory',
      'YouTube\\Controller\\IndexController' => 'YouTube\\Controller\\Factory\\IndexControllerFactory',
      'Contact\\Controller\\ContactController' => 'Contact\\Factory\\ContactControllerFactory',
      'Search\\Controller\\SearchController' => 'Search\\Controller\\Factory\\SearchControllerFactory',
      'Event\\Controller\\EventController' => 'Event\\Factory\\EventControllerFactory',
      'Event\\Controller\\EventCategoryController' => 'Event\\Factory\\EventCategoryControllerFactory',
      'CheckList\\Controller\\CheckListController' => 'CheckList\\Controller\\Factory\\CheckListControllerFactory',
      'CheckList\\Controller\\CheckListItemController' => 'CheckList\\Controller\\Factory\\CheckListItemControllerFactory',
      'CheckList\\Controller\\CheckListAjaxController' => 'CheckList\\Controller\\Factory\\CheckListAjaxControllerFactory',
      'BitlyShortener\\Controller\\BitlyShortenerController' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'StravaApi\\Controller\\StravaController' => 'StravaApi\\Controller\\Factory\\StravaControllerFactory',
      'StravaApi\\Controller\\StravaImportController' => 'StravaApi\\Controller\\Factory\\StravaImportControllerFactory',
      'StravaApi\\Controller\\StravaLogController' => 'StravaApi\\Controller\\Factory\\StravaLogControllerFactory',
      'StravaApi\\Controller\\IndexController' => 'StravaApi\\Controller\\Factory\\IndexControllerFactory',
      'AssetManager\\Controller\\Console' => 'AssetManager\\Controller\\ConsoleControllerFactory',
      'Application\\Controller\\IndexController' => 'Application\\Controller\\Factory\\IndexControllerFactory',
      'Application\\Controller\\BeheerController' => 'Application\\Controller\\Factory\\BeheerControllerFactory',
    ),
    'aliases' => 
    array (
      'permissionbeheer' => 'User\\Controller\\PermissionController',
      'rolebeheer' => 'User\\Controller\\RoleController',
      'userbeheer' => 'User\\Controller\\UserController',
      'blogbeheer' => 'Blog\\Controller\\BlogController',
      'blogajaxbeheer' => 'Blog\\Controller\\BlogAjaxController',
      'categorybeheer' => 'Blog\\Controller\\CategoryController',
      'agendabeheer' => 'Agenda\\Controller\\AgendaController',
      'agendaAjax' => 'Agenda\\Controller\\AgendaAjaxController',
      'emailbeheer' => 'Email\\Controller\\EmailController',
      'uploadfilesbeheer' => 'UploadFiles\\Controller\\UploadFilesController',
      'imagesbeheer' => 'UploadImages\\Controller\\UploadImagesController',
      'contactbeheer' => 'Contact\\Controller\\ContactController',
      'searchbeheer' => 'Search\\Controller\\SearchController',
      'eventbeheer' => 'Event\\Controller\\EventController',
      'eventcategorybeheer' => 'Event\\Controller\\EventCategoryController',
      'checklistbeheer' => 'CheckList\\Controller\\CheckListController',
      'checklistitembeheer' => 'CheckList\\Controller\\CheckListItemController',
      'checklistajax' => 'CheckList\\Controller\\CheckListAjaxController',
      'stravabeheer' => 'StravaApi\\Controller\\StravaController',
      'stravaimportbeheer' => 'StravaApi\\Controller\\StravaImportController',
      'stravalogbeheer' => 'StravaApi\\Controller\\StravaLogController',
      'stravaindex' => 'StravaApi\\Controller\\IndexController',
    ),
  ),
  'console' => 
  array (
    'router' => 
    array (
      'routes' => 
      array (
        'doctrine_cli' => 
        array (
          'type' => 'symfony_cli',
        ),
        'AssetManager-warmup' => 
        array (
          'options' => 
          array (
            'route' => 'assetmanager warmup [--purge] [--verbose|-v]',
            'defaults' => 
            array (
              'controller' => 'AssetManager\\Controller\\Console',
              'action' => 'warmup',
            ),
          ),
        ),
        'import-questions' => 
        array (
          'options' => 
          array (
            'route' => 'import-questions [<file>]',
            'defaults' => 
            array (
              'controller' => 'Application\\Controller\\CliController',
              'action' => 'importPppLibraryQuestions',
            ),
          ),
        ),
      ),
    ),
  ),
  'form_elements' => 
  array (
    'aliases' => 
    array (
      'objectselect' => 'DoctrineModule\\Form\\Element\\ObjectSelect',
      'objectradio' => 'DoctrineModule\\Form\\Element\\ObjectRadio',
      'objectmulticheckbox' => 'DoctrineModule\\Form\\Element\\ObjectMultiCheckbox',
    ),
    'factories' => 
    array (
      'DoctrineModule\\Form\\Element\\ObjectSelect' => 'DoctrineORMModule\\Service\\ObjectSelectFactory',
      'DoctrineModule\\Form\\Element\\ObjectRadio' => 'DoctrineORMModule\\Service\\ObjectRadioFactory',
      'DoctrineModule\\Form\\Element\\ObjectMultiCheckbox' => 'DoctrineORMModule\\Service\\ObjectMultiCheckboxFactory',
    ),
  ),
  'hydrators' => 
  array (
    'factories' => 
    array (
      'DoctrineModule\\Stdlib\\Hydrator\\DoctrineObject' => 'DoctrineORMModule\\Service\\DoctrineObjectHydratorFactory',
    ),
  ),
  'view_manager' => 
  array (
    'template_map' => 
    array (
      'zend-developer-tools/toolbar/doctrine-orm-queries' => '/var/www/vhosts/verzeilberg-dev/vendor/doctrine/doctrine-orm-module/config/../view/zend-developer-tools/toolbar/doctrine-orm-queries.phtml',
      'zend-developer-tools/toolbar/doctrine-orm-mappings' => '/var/www/vhosts/verzeilberg-dev/vendor/doctrine/doctrine-orm-module/config/../view/zend-developer-tools/toolbar/doctrine-orm-mappings.phtml',
      'layout/layout' => '/var/www/vhosts/verzeilberg-dev/module/Application/config/../view/layout/layout.phtml',
      'application/index/index' => '/var/www/vhosts/verzeilberg-dev/module/Application/config/../view/application/index/index.phtml',
      'error/404' => '/var/www/vhosts/verzeilberg-dev/module/Application/config/../view/error/404.phtml',
      'error/index' => '/var/www/vhosts/verzeilberg-dev/module/Application/config/../view/error/index.phtml',
    ),
    'template_path_stack' => 
    array (
      'twitter' => '/var/www/vhosts/verzeilberg-dev/module/Twitter/config/../view',
      0 => '/var/www/vhosts/verzeilberg-dev/module/User/config/../view',
      1 => '/var/www/vhosts/verzeilberg-dev/module/Blog/config/../view',
      'agenda' => '/var/www/vhosts/verzeilberg-dev/module/Agenda/config/../view',
      'email' => '/var/www/vhosts/verzeilberg-dev/module/Email/config/../view',
      'uploadfiles' => '/var/www/vhosts/verzeilberg-dev/module/UploadFiles/config/../view',
      'uploadimages' => '/var/www/vhosts/verzeilberg-dev/module/UploadImages/config/../view',
      2 => '/var/www/vhosts/verzeilberg-dev/module/YouTube/config/../view',
      'contact' => '/var/www/vhosts/verzeilberg-dev/module/Contact/config/../view',
      3 => '/var/www/vhosts/verzeilberg-dev/module/Search/config/../view',
      'event' => '/var/www/vhosts/verzeilberg-dev/module/Event/config/../view',
      4 => '/var/www/vhosts/verzeilberg-dev/module/CheckList/config/../view',
      'BitlyShortener' => '/var/www/vhosts/verzeilberg-dev/module/BitlyShortener/config/../view',
      'stravaapi' => '/var/www/vhosts/verzeilberg-dev/module/StravaApi/config/../view',
      5 => '/var/www/vhosts/verzeilberg-dev/module/Application/config/../view',
    ),
    'strategies' => 
    array (
      0 => 'ViewJsonStrategy',
      1 => 'ViewJsonStrategy',
    ),
    'display_not_found_reason' => true,
    'display_exceptions' => true,
    'doctype' => 'HTML5',
    'not_found_template' => 'error/404',
    'exception_template' => 'error/index',
  ),
  'zenddevelopertools' => 
  array (
    'profiler' => 
    array (
      'collectors' => 
      array (
        'doctrine.sql_logger_collector.orm_default' => 'doctrine.sql_logger_collector.orm_default',
        'doctrine.mapping_collector.orm_default' => 'doctrine.mapping_collector.orm_default',
      ),
    ),
    'toolbar' => 
    array (
      'entries' => 
      array (
        'doctrine.sql_logger_collector.orm_default' => 'zend-developer-tools/toolbar/doctrine-orm-queries',
        'doctrine.mapping_collector.orm_default' => 'zend-developer-tools/toolbar/doctrine-orm-mappings',
      ),
    ),
  ),
  'filters' => 
  array (
    'aliases' => 
    array (
      'alnum' => 'Zend\\I18n\\Filter\\Alnum',
      'Alnum' => 'Zend\\I18n\\Filter\\Alnum',
      'alpha' => 'Zend\\I18n\\Filter\\Alpha',
      'Alpha' => 'Zend\\I18n\\Filter\\Alpha',
      'numberformat' => 'Zend\\I18n\\Filter\\NumberFormat',
      'numberFormat' => 'Zend\\I18n\\Filter\\NumberFormat',
      'NumberFormat' => 'Zend\\I18n\\Filter\\NumberFormat',
      'numberparse' => 'Zend\\I18n\\Filter\\NumberParse',
      'numberParse' => 'Zend\\I18n\\Filter\\NumberParse',
      'NumberParse' => 'Zend\\I18n\\Filter\\NumberParse',
    ),
    'factories' => 
    array (
      'Zend\\I18n\\Filter\\Alnum' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Filter\\Alpha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Filter\\NumberFormat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Filter\\NumberParse' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'validators' => 
  array (
    'aliases' => 
    array (
      'alnum' => 'Zend\\I18n\\Validator\\Alnum',
      'Alnum' => 'Zend\\I18n\\Validator\\Alnum',
      'alpha' => 'Zend\\I18n\\Validator\\Alpha',
      'Alpha' => 'Zend\\I18n\\Validator\\Alpha',
      'datetime' => 'Zend\\I18n\\Validator\\DateTime',
      'dateTime' => 'Zend\\I18n\\Validator\\DateTime',
      'DateTime' => 'Zend\\I18n\\Validator\\DateTime',
      'float' => 'Zend\\I18n\\Validator\\IsFloat',
      'Float' => 'Zend\\I18n\\Validator\\IsFloat',
      'int' => 'Zend\\I18n\\Validator\\IsInt',
      'Int' => 'Zend\\I18n\\Validator\\IsInt',
      'isfloat' => 'Zend\\I18n\\Validator\\IsFloat',
      'isFloat' => 'Zend\\I18n\\Validator\\IsFloat',
      'IsFloat' => 'Zend\\I18n\\Validator\\IsFloat',
      'isint' => 'Zend\\I18n\\Validator\\IsInt',
      'isInt' => 'Zend\\I18n\\Validator\\IsInt',
      'IsInt' => 'Zend\\I18n\\Validator\\IsInt',
      'phonenumber' => 'Zend\\I18n\\Validator\\PhoneNumber',
      'phoneNumber' => 'Zend\\I18n\\Validator\\PhoneNumber',
      'PhoneNumber' => 'Zend\\I18n\\Validator\\PhoneNumber',
      'postcode' => 'Zend\\I18n\\Validator\\PostCode',
      'postCode' => 'Zend\\I18n\\Validator\\PostCode',
      'PostCode' => 'Zend\\I18n\\Validator\\PostCode',
    ),
    'factories' => 
    array (
      'Zend\\I18n\\Validator\\Alnum' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\Alpha' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\DateTime' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\IsFloat' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\IsInt' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\PhoneNumber' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
      'Zend\\I18n\\Validator\\PostCode' => 'Zend\\ServiceManager\\Factory\\InvokableFactory',
    ),
  ),
  'input_filters' => 
  array (
    'abstract_factories' => 
    array (
      0 => 'Zend\\InputFilter\\InputFilterAbstractServiceFactory',
    ),
  ),
  'twitter_credentials' => 
  array (
    'oauth_access_token' => '320650214-nH3o3BjVYfTP9HfSWYmFkBUcoyC5HwQ2qUhz8yAz',
    'oauth_access_token_secret' => '8JMlfd5bsd7LrFhHvityFmtUCGiizUvNjeVUqcDpw',
    'consumer_key' => 'YguWLyI3fltBiq1VSqfQQ',
    'consumer_secret' => 'CjpZhinCu6jRxc0wTGwIJyGko3NxO1QDtHZEZFl6EE',
    'userId' => '320650214',
  ),
  'shorten_url_credentials' => 
  array (
    'google_api_key' => 'AIzaSyDIw8MCqnETlVYrH_4ekuz98PX0newMwtI',
  ),
  'login_settings' => 
  array (
    'mailing_settings' => 
    array (
      'password_reset_token_mail' => 
      array (
        'subject' => 'Password Reset',
        'sender_mail' => 'no-reply@example.com',
        'sender_name' => 'User Demo',
      ),
    ),
  ),
  'access_filter' => 
  array (
    'controllers' => 
    array (
      'userbeheer' => 
      array (
        0 => 
        array (
          'actions' => 
          array (
            0 => 'resetPassword',
            1 => 'message',
            2 => 'setPassword',
          ),
          'allow' => '*',
        ),
        1 => 
        array (
          'actions' => 
          array (
            0 => 'index',
            1 => 'add',
            2 => 'edit',
            3 => 'view',
            4 => 'changePassword',
          ),
          'allow' => '+user.manage',
        ),
      ),
      'rolebeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+role.manage',
        ),
      ),
      'permissionbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+permission.manage',
        ),
      ),
      'User\\Controller\\TokenController' => 
      array (
        0 => 
        array (
          'actions' => 
          array (
            0 => 'requestToken',
            1 => 'validateToken',
          ),
          'allow' => '@',
        ),
      ),
      'Blog\\Controller\\IndexController' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '*',
        ),
      ),
      'blogbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+blog.manage',
        ),
      ),
      'blogajaxbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+blog.manage',
        ),
      ),
      'categorybeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+blog.manage',
        ),
      ),
      'agendabeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+agenda.manage',
        ),
      ),
      'agendaAjax' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+agenda.manage',
        ),
      ),
      'emailbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+email.manage',
        ),
      ),
      'uploadfilesbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+uploadfiles.manage',
        ),
      ),
      'imagesbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+images.manage',
        ),
      ),
      'UploadImages\\Controller\\AjaxImageController' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+images.manage',
        ),
      ),
      'YouTube\\Controller\\IndexController' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '*',
        ),
      ),
      'contactbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+contact.manage',
        ),
      ),
      'searchbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+search.manage',
        ),
      ),
      'eventbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+event.manage',
        ),
      ),
      'eventcategorybeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+event.manage',
        ),
      ),
      'checklistbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+checklist.manage',
        ),
      ),
      'checklistitembeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+checklist.manage',
        ),
      ),
      'checklistajax' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+checklist.manage',
        ),
      ),
      'stravabeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+strava.manage',
        ),
      ),
      'stravaimportbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+strava.manage',
        ),
      ),
      'stravalogbeheer' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '+strava.manage',
        ),
      ),
      'stravaindex' => 
      array (
        0 => 
        array (
          'actions' => '*',
          'allow' => '*',
        ),
      ),
      'Application\\Controller\\IndexController' => 
      array (
        0 => 
        array (
          'actions' => 
          array (
            0 => 'index',
            1 => 'about',
            2 => 'events',
            3 => 'event',
            4 => 'getEventLocations',
            5 => 'user',
            6 => 'getLocations',
            7 => 'runningStats',
            8 => 'getChartData',
            9 => 'detail',
          ),
          'allow' => '*',
        ),
      ),
      'Application\\Controller\\BeheerController' => 
      array (
        0 => 
        array (
          'actions' => 
          array (
            0 => 'index',
          ),
          'allow' => '+beheer.manage',
        ),
      ),
    ),
    'options' => 
    array (
      'mode' => 'restrictive',
    ),
  ),
  'smtp' => 
  array (
    'name' => 'localhost.localdomain',
    'host' => '127.0.0.1',
    'port' => 25,
    'connection_class' => 'plain',
    'connection_config' => 
    array (
      'username' => '<user>',
      'password' => '<pass>',
    ),
  ),
  'user' => 
  array (
    'token' => 
    array (
      'active' => true,
      'hours_token_valid' => 8,
      'reset_token_time' => true,
      'only_token_code' => false,
      'defaultLogo' => 'img/bg.jpg',
      'mailtoken_img_alt' => 'Logo Verzeilberg',
      'token_redirect_succes_route' => 'home',
      'token_mail_subject' => 'Inlog token Verzeilberg.nl',
      'token_mail_sender_email' => 'info@verzeilberg.nl',
      'token_mail_sender_name' => 'Verzeilberg',
      'token_mail_reply_email' => 'info@verzeilberg.nl',
      'token_mail_reply_name' => 'Verzeilberg',
      'token_mail_template' => 'user/templates/token_email.phtml',
      'mailtoken_header_name' => 'Verzeilberg',
      'mailtoken_header_style' => 'font-size: 26px;  color: #E31C23;',
      'mailtoken_no_mail_msg' => '<a href="mailto:info@verzeilberg.nl">Verzeilberg.nl</a>',
      'token_general_agreement' => false,
      'licence_agreement_partial' => 'user/templates/algemene_voorwaarden.phtml',
      'licence_agreement_check' => true,
      'licence_agreement_check_hours' => 12,
    ),
    'ignore_route_keys' => 
    array (
      0 => 'api',
      1 => 'oauth',
    ),
    'ignore_route_keys_partial' => 
    array (
      0 => '.rpc.',
      1 => 'zf-apigility',
    ),
  ),
  'asset_manager' => 
  array (
    'resolver_configs' => 
    array (
      'paths' => 
      array (
        0 => '/var/www/vhosts/verzeilberg-dev/module/Blog/config/../public',
        1 => '/var/www/vhosts/verzeilberg-dev/module/Agenda/config/../public',
        2 => '/var/www/vhosts/verzeilberg-dev/module/Email/config/../public',
        3 => '/var/www/vhosts/verzeilberg-dev/module/UploadFiles/config/../public',
        4 => '/var/www/vhosts/verzeilberg-dev/module/UploadImages/config/../public',
        5 => '/var/www/vhosts/verzeilberg-dev/module/YouTube/config/../public',
        6 => '/var/www/vhosts/verzeilberg-dev/module/Event/config/../public',
        7 => '/var/www/vhosts/verzeilberg-dev/module/CheckList/config/../public',
        8 => '/var/www/vhosts/verzeilberg-dev/module/StravaApi/config/../public',
      ),
    ),
    'clear_output_buffer' => true,
    'resolvers' => 
    array (
      'AssetManager\\Resolver\\MapResolver' => 3000,
      'AssetManager\\Resolver\\ConcatResolver' => 2500,
      'AssetManager\\Resolver\\CollectionResolver' => 2000,
      'AssetManager\\Resolver\\PrioritizedPathsResolver' => 1500,
      'AssetManager\\Resolver\\AliasPathStackResolver' => 1000,
      'AssetManager\\Resolver\\PathStackResolver' => 500,
    ),
    'view_helper' => 
    array (
      'append_timestamp' => true,
      'query_string' => '_',
      'cache' => NULL,
    ),
  ),
  'agenda_settings' => 
  array (
    'clock' => '24',
  ),
  'email_settings' => 
  array (
    'server' => 'imap.zeke.nl',
    'user' => 'sander@verzeilberg.nl',
    'password' => 'Joker512011',
  ),
  'filesUploadSettings' => 
  array (
    'default' => 
    array (
      'uploadFolder' => '',
      'uploadeFileSize' => '',
      'allowedFileExtensions' => 
      array (
      ),
    ),
  ),
  'imageUploadSettings' => 
  array (
    'default' => 
    array (
      'uploadFolder' => 'img/userFiles/countries/original/',
      'uploadeFileSize' => '5000000000000000',
      'allowedImageTypes' => 
      array (
        0 => 'image/jpeg',
        1 => 'image/png',
        2 => 'image/gif',
      ),
    ),
    'rootPath' => '/var/www/vhosts/verzeilberg-dev/public/img/userFiles',
    'event' => 
    array (
      'uploadFolder' => 'img/userFiles/event/original/',
      'uploadeFileSize' => '5000000000000000',
      'allowedImageTypes' => 
      array (
        0 => 'image/jpeg',
        1 => 'image/png',
        2 => 'image/gif',
      ),
    ),
    'blog' => 
    array (
      'uploadFolder' => 'img/userFiles/blog/original/',
      'uploadeFileSize' => '5000000000000000',
      'allowedImageTypes' => 
      array (
        0 => 'image/jpeg',
        1 => 'image/png',
        2 => 'image/gif',
      ),
    ),
  ),
  'youtube_credentials' => 
  array (
    'consumer_key' => 'AIzaSyBd0ib8T5YC8FG_zRH-IxOA8blnLvqJ1xM',
  ),
  'stravaSettings' => 
  array (
    'clientId' => '36626',
    'clientSecret' => 'd333c6a9ae022db688f8a451ce4b003ab5645615',
    'redirectUri' => 'http://www.verzeilberg.nl/beheer/stravaimport',
    'athleteId' => 42734690,
    'code' => '3ef01d571e26de8e99648f8018f5688d92992615',
    'approval_prompt' => 'auto',
    'scopes' => 
    array (
      0 => 'read',
      1 => 'activity:read',
      2 => 'activity:read_all',
    ),
    'activitiesPerPage' => 30,
    'googleMapKey' => 'AIzaSyB1n_2dwkLKZ8lMls39ZGeLuxQ08oyniIs',
  ),
  'rbac_manager' => 
  array (
    'assertions' => 
    array (
      0 => 'Application\\Service\\RbacAssertionManager',
    ),
  ),
  'view_helper_config' => 
  array (
    'flashmessenger' => 
    array (
      'message_open_format' => '<div%s><ul><li>',
      'message_close_string' => '</li></ul></div>',
      'message_separator_string' => '</li><li>',
    ),
  ),
  'translator' => 
  array (
    'locale' => 'nl_NL',
    'translation_file_patterns' => 
    array (
      0 => 
      array (
        'type' => 'gettext',
        'base_dir' => '/var/www/vhosts/verzeilberg-dev/module/Application/config/../language',
        'pattern' => '%s.mo',
      ),
    ),
  ),
  'session_config' => 
  array (
    'cookie_lifetime' => 86400,
    'gc_maxlifetime' => 2592000,
  ),
  'session_manager' => 
  array (
    'validators' => 
    array (
      0 => 'Zend\\Session\\Validator\\RemoteAddr',
      1 => 'Zend\\Session\\Validator\\HttpUserAgent',
    ),
  ),
  'session_storage' => 
  array (
    'type' => 'Zend\\Session\\Storage\\SessionArrayStorage',
  ),
  'caches' => 
  array (
    'FilesystemCache' => 
    array (
      'adapter' => 
      array (
        'name' => 'Zend\\Cache\\Storage\\Adapter\\Filesystem',
        'options' => 
        array (
          'cache_dir' => './data/cache',
          'ttl' => 3600,
        ),
      ),
      'plugins' => 
      array (
        0 => 
        array (
          'name' => 'serializer',
          'options' => 
          array (
          ),
        ),
      ),
    ),
  ),
);