<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command_loader' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/CommandLoader/CommandLoaderInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/console/CommandLoader/ContainerCommandLoader.php';

return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'console.command.about' => ['privates', 'console.command.about', 'getConsole_Command_AboutService.php', true],
    'console.command.assets_install' => ['privates', 'console.command.assets_install', 'getConsole_Command_AssetsInstallService.php', true],
    'console.command.cache_clear' => ['privates', 'console.command.cache_clear', 'getConsole_Command_CacheClearService.php', true],
    'console.command.cache_pool_clear' => ['privates', 'console.command.cache_pool_clear', 'getConsole_Command_CachePoolClearService.php', true],
    'console.command.cache_pool_delete' => ['privates', 'console.command.cache_pool_delete', 'getConsole_Command_CachePoolDeleteService.php', true],
    'console.command.cache_pool_list' => ['privates', 'console.command.cache_pool_list', 'getConsole_Command_CachePoolListService.php', true],
    'console.command.cache_pool_prune' => ['privates', 'console.command.cache_pool_prune', 'getConsole_Command_CachePoolPruneService.php', true],
    'console.command.cache_warmup' => ['privates', 'console.command.cache_warmup', 'getConsole_Command_CacheWarmupService.php', true],
    'console.command.config_debug' => ['privates', 'console.command.config_debug', 'getConsole_Command_ConfigDebugService.php', true],
    'console.command.config_dump_reference' => ['privates', 'console.command.config_dump_reference', 'getConsole_Command_ConfigDumpReferenceService.php', true],
    'console.command.container_debug' => ['privates', 'console.command.container_debug', 'getConsole_Command_ContainerDebugService.php', true],
    'console.command.debug_autowiring' => ['privates', 'console.command.debug_autowiring', 'getConsole_Command_DebugAutowiringService.php', true],
    'console.command.event_dispatcher_debug' => ['privates', 'console.command.event_dispatcher_debug', 'getConsole_Command_EventDispatcherDebugService.php', true],
    'console.command.form_debug' => ['privates', 'console.command.form_debug', 'getConsole_Command_FormDebugService.php', true],
    'console.command.router_debug' => ['privates', 'console.command.router_debug', 'getConsole_Command_RouterDebugService.php', true],
    'console.command.router_match' => ['privates', 'console.command.router_match', 'getConsole_Command_RouterMatchService.php', true],
    'console.command.translation_debug' => ['privates', 'console.command.translation_debug', 'getConsole_Command_TranslationDebugService.php', true],
    'console.command.translation_update' => ['privates', 'console.command.translation_update', 'getConsole_Command_TranslationUpdateService.php', true],
    'console.command.xliff_lint' => ['privates', 'console.command.xliff_lint', 'getConsole_Command_XliffLintService.php', true],
    'console.command.yaml_lint' => ['privates', 'console.command.yaml_lint', 'getConsole_Command_YamlLintService.php', true],
    'doctrine.cache_clear_metadata_command' => ['privates', 'doctrine.cache_clear_metadata_command', 'getDoctrine_CacheClearMetadataCommandService.php', true],
    'doctrine.cache_clear_query_cache_command' => ['privates', 'doctrine.cache_clear_query_cache_command', 'getDoctrine_CacheClearQueryCacheCommandService.php', true],
    'doctrine.cache_clear_result_command' => ['privates', 'doctrine.cache_clear_result_command', 'getDoctrine_CacheClearResultCommandService.php', true],
    'doctrine.cache_collection_region_command' => ['privates', 'doctrine.cache_collection_region_command', 'getDoctrine_CacheCollectionRegionCommandService.php', true],
    'doctrine.clear_entity_region_command' => ['privates', 'doctrine.clear_entity_region_command', 'getDoctrine_ClearEntityRegionCommandService.php', true],
    'doctrine.clear_query_region_command' => ['privates', 'doctrine.clear_query_region_command', 'getDoctrine_ClearQueryRegionCommandService.php', true],
    'doctrine.database_create_command' => ['privates', 'doctrine.database_create_command', 'getDoctrine_DatabaseCreateCommandService.php', true],
    'doctrine.database_drop_command' => ['privates', 'doctrine.database_drop_command', 'getDoctrine_DatabaseDropCommandService.php', true],
    'doctrine.database_import_command' => ['privates', 'doctrine.database_import_command', 'getDoctrine_DatabaseImportCommandService.php', true],
    'doctrine.ensure_production_settings_command' => ['privates', 'doctrine.ensure_production_settings_command', 'getDoctrine_EnsureProductionSettingsCommandService.php', true],
    'doctrine.generate_entities_command' => ['privates', 'doctrine.generate_entities_command', 'getDoctrine_GenerateEntitiesCommandService.php', true],
    'doctrine.mapping_convert_command' => ['privates', 'doctrine.mapping_convert_command', 'getDoctrine_MappingConvertCommandService.php', true],
    'doctrine.mapping_import_command' => ['privates', 'doctrine.mapping_import_command', 'getDoctrine_MappingImportCommandService.php', true],
    'doctrine.mapping_info_command' => ['privates', 'doctrine.mapping_info_command', 'getDoctrine_MappingInfoCommandService.php', true],
    'doctrine.query_dql_command' => ['privates', 'doctrine.query_dql_command', 'getDoctrine_QueryDqlCommandService.php', true],
    'doctrine.query_sql_command' => ['privates', 'doctrine.query_sql_command', 'getDoctrine_QuerySqlCommandService.php', true],
    'doctrine.schema_create_command' => ['privates', 'doctrine.schema_create_command', 'getDoctrine_SchemaCreateCommandService.php', true],
    'doctrine.schema_drop_command' => ['privates', 'doctrine.schema_drop_command', 'getDoctrine_SchemaDropCommandService.php', true],
    'doctrine.schema_update_command' => ['privates', 'doctrine.schema_update_command', 'getDoctrine_SchemaUpdateCommandService.php', true],
    'doctrine.schema_validate_command' => ['privates', 'doctrine.schema_validate_command', 'getDoctrine_SchemaValidateCommandService.php', true],
    'maker.auto_command.make_auth' => ['privates', 'maker.auto_command.make_auth', 'getMaker_AutoCommand_MakeAuthService.php', true],
    'maker.auto_command.make_command' => ['privates', 'maker.auto_command.make_command', 'getMaker_AutoCommand_MakeCommandService.php', true],
    'maker.auto_command.make_controller' => ['privates', 'maker.auto_command.make_controller', 'getMaker_AutoCommand_MakeControllerService.php', true],
    'maker.auto_command.make_crud' => ['privates', 'maker.auto_command.make_crud', 'getMaker_AutoCommand_MakeCrudService.php', true],
    'maker.auto_command.make_entity' => ['privates', 'maker.auto_command.make_entity', 'getMaker_AutoCommand_MakeEntityService.php', true],
    'maker.auto_command.make_fixtures' => ['privates', 'maker.auto_command.make_fixtures', 'getMaker_AutoCommand_MakeFixturesService.php', true],
    'maker.auto_command.make_form' => ['privates', 'maker.auto_command.make_form', 'getMaker_AutoCommand_MakeFormService.php', true],
    'maker.auto_command.make_functional_test' => ['privates', 'maker.auto_command.make_functional_test', 'getMaker_AutoCommand_MakeFunctionalTestService.php', true],
    'maker.auto_command.make_migration' => ['privates', 'maker.auto_command.make_migration', 'getMaker_AutoCommand_MakeMigrationService.php', true],
    'maker.auto_command.make_registration_form' => ['privates', 'maker.auto_command.make_registration_form', 'getMaker_AutoCommand_MakeRegistrationFormService.php', true],
    'maker.auto_command.make_serializer_encoder' => ['privates', 'maker.auto_command.make_serializer_encoder', 'getMaker_AutoCommand_MakeSerializerEncoderService.php', true],
    'maker.auto_command.make_serializer_normalizer' => ['privates', 'maker.auto_command.make_serializer_normalizer', 'getMaker_AutoCommand_MakeSerializerNormalizerService.php', true],
    'maker.auto_command.make_subscriber' => ['privates', 'maker.auto_command.make_subscriber', 'getMaker_AutoCommand_MakeSubscriberService.php', true],
    'maker.auto_command.make_twig_extension' => ['privates', 'maker.auto_command.make_twig_extension', 'getMaker_AutoCommand_MakeTwigExtensionService.php', true],
    'maker.auto_command.make_unit_test' => ['privates', 'maker.auto_command.make_unit_test', 'getMaker_AutoCommand_MakeUnitTestService.php', true],
    'maker.auto_command.make_user' => ['privates', 'maker.auto_command.make_user', 'getMaker_AutoCommand_MakeUserService.php', true],
    'maker.auto_command.make_validator' => ['privates', 'maker.auto_command.make_validator', 'getMaker_AutoCommand_MakeValidatorService.php', true],
    'maker.auto_command.make_voter' => ['privates', 'maker.auto_command.make_voter', 'getMaker_AutoCommand_MakeVoterService.php', true],
    'twig.command.debug' => ['privates', 'twig.command.debug', 'getTwig_Command_DebugService.php', true],
    'twig.command.lint' => ['privates', 'twig.command.lint', 'getTwig_Command_LintService.php', true],
    'web_server.command.server_run' => ['privates', 'web_server.command.server_run', 'getWebServer_Command_ServerRunService.php', true],
    'web_server.command.server_start' => ['privates', 'web_server.command.server_start', 'getWebServer_Command_ServerStartService.php', true],
    'web_server.command.server_status' => ['privates', 'web_server.command.server_status', 'getWebServer_Command_ServerStatusService.php', true],
    'web_server.command.server_stop' => ['privates', 'web_server.command.server_stop', 'getWebServer_Command_ServerStopService.php', true],
], [
    'console.command.about' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AboutCommand',
    'console.command.assets_install' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\AssetsInstallCommand',
    'console.command.cache_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheClearCommand',
    'console.command.cache_pool_clear' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolClearCommand',
    'console.command.cache_pool_delete' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolDeleteCommand',
    'console.command.cache_pool_list' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolListCommand',
    'console.command.cache_pool_prune' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CachePoolPruneCommand',
    'console.command.cache_warmup' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\CacheWarmupCommand',
    'console.command.config_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDebugCommand',
    'console.command.config_dump_reference' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ConfigDumpReferenceCommand',
    'console.command.container_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerDebugCommand',
    'console.command.debug_autowiring' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\DebugAutowiringCommand',
    'console.command.event_dispatcher_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\EventDispatcherDebugCommand',
    'console.command.form_debug' => 'Symfony\\Component\\Form\\Command\\DebugCommand',
    'console.command.router_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterDebugCommand',
    'console.command.router_match' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\RouterMatchCommand',
    'console.command.translation_debug' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationDebugCommand',
    'console.command.translation_update' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\TranslationUpdateCommand',
    'console.command.xliff_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\XliffLintCommand',
    'console.command.yaml_lint' => 'Symfony\\Bundle\\FrameworkBundle\\Command\\YamlLintCommand',
    'doctrine.cache_clear_metadata_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearMetadataCacheDoctrineCommand',
    'doctrine.cache_clear_query_cache_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearQueryCacheDoctrineCommand',
    'doctrine.cache_clear_result_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ClearResultCacheDoctrineCommand',
    'doctrine.cache_collection_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CollectionRegionDoctrineCommand',
    'doctrine.clear_entity_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EntityRegionCacheDoctrineCommand',
    'doctrine.clear_query_region_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\QueryRegionCacheDoctrineCommand',
    'doctrine.database_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\CreateDatabaseDoctrineCommand',
    'doctrine.database_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\DropDatabaseDoctrineCommand',
    'doctrine.database_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ImportDoctrineCommand',
    'doctrine.ensure_production_settings_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\EnsureProductionSettingsDoctrineCommand',
    'doctrine.generate_entities_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\GenerateEntitiesDoctrineCommand',
    'doctrine.mapping_convert_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ConvertMappingDoctrineCommand',
    'doctrine.mapping_import_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\ImportMappingDoctrineCommand',
    'doctrine.mapping_info_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\InfoDoctrineCommand',
    'doctrine.query_dql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunDqlDoctrineCommand',
    'doctrine.query_sql_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\RunSqlDoctrineCommand',
    'doctrine.schema_create_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\CreateSchemaDoctrineCommand',
    'doctrine.schema_drop_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\DropSchemaDoctrineCommand',
    'doctrine.schema_update_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\UpdateSchemaDoctrineCommand',
    'doctrine.schema_validate_command' => 'Doctrine\\Bundle\\DoctrineBundle\\Command\\Proxy\\ValidateSchemaCommand',
    'maker.auto_command.make_auth' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_command' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_controller' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_crud' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_entity' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_fixtures' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_functional_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_migration' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_registration_form' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_serializer_encoder' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_serializer_normalizer' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_subscriber' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_twig_extension' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_unit_test' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_user' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_validator' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'maker.auto_command.make_voter' => 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand',
    'twig.command.debug' => 'Symfony\\Bridge\\Twig\\Command\\DebugCommand',
    'twig.command.lint' => 'Symfony\\Bundle\\TwigBundle\\Command\\LintCommand',
    'web_server.command.server_run' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerRunCommand',
    'web_server.command.server_start' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStartCommand',
    'web_server.command.server_status' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStatusCommand',
    'web_server.command.server_stop' => 'Symfony\\Bundle\\WebServerBundle\\Command\\ServerStopCommand',
]), ['about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:pool:list' => 'console.command.cache_pool_list', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'server:run' => 'web_server.command.server_run', 'server:start' => 'web_server.command.server_start', 'server:stop' => 'web_server.command.server_stop', 'server:status' => 'web_server.command.server_status', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:generate:entities' => 'doctrine.generate_entities_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:functional-test' => 'maker.auto_command.make_functional_test', 'make:registration-form' => 'maker.auto_command.make_registration_form', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:serializer:normalizer' => 'maker.auto_command.make_serializer_normalizer', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:unit-test' => 'maker.auto_command.make_unit_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:user' => 'maker.auto_command.make_user', 'make:migration' => 'maker.auto_command.make_migration']);
