<?php return array (
  'app' => 
  array (
    'name' => 'PixelFed',
    'env' => 'production',
    'debug' => false,
    'url' => 'http://13.61.5.217:8080',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'base64:d87GxYXrIQfKYKRw1tT9U/l5iq4R1V/yfF/nBjIbYAw=',
    'cipher' => 'AES-256-CBC',
    'short_description' => 'Pixelfed is an image sharing platform, an ethical alternative to centralized platforms.',
    'description' => 'Pixelfed is an image sharing platform, an ethical alternative to centralized platforms.',
    'rules' => NULL,
    'logo' => '/img/pixelfed-icon-color.svg',
    'banner_image' => '/storage/headers/default.jpg',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'App\\Providers\\AppServiceProvider',
      23 => 'App\\Providers\\AuthServiceProvider',
      24 => 'App\\Providers\\BroadcastServiceProvider',
      25 => 'App\\Providers\\HorizonServiceProvider',
      26 => 'App\\Providers\\EventServiceProvider',
      27 => 'App\\Providers\\RouteServiceProvider',
      28 => 'App\\Providers\\PassportServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'PrettyNumber' => 'App\\Util\\Lexer\\PrettyNumber',
      'Purify' => 'Stevebauman\\Purify\\Facades\\Purify',
      'FFMpeg' => 'Pbmedia\\LaravelFFMpeg\\FFMpegFacade',
      'Captcha' => 'Buzz\\LaravelHCaptcha\\CaptchaFacade',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'api' => 
      array (
        'driver' => 'passport',
        'provider' => 'users',
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\User',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
  ),
  'autospam' => 
  array (
    'enabled' => false,
    'ignored_tokens' => 'the,a,of,and',
    'nlp' => 
    array (
      'enabled' => false,
      'spam_sample_limit' => 200,
    ),
    'live_filters' => 
    array (
      'enabled' => false,
      'filters' => '',
    ),
  ),
  'backup' => 
  array (
    'backup' => 
    array (
      'name' => 'PixelFed',
      'source' => 
      array (
        'files' => 
        array (
          'include' => 
          array (
            0 => '/var/www',
          ),
          'exclude' => 
          array (
            0 => '/var/www/.git',
            1 => '/var/www/storage/app/public/cache',
            2 => '/var/www/vendor',
            3 => '/var/www/node_modules',
          ),
          'follow_links' => false,
          'ignore_unreadable_directories' => false,
          'relative_path' => NULL,
        ),
        'mysql' => 
        array (
          'dump' => 
          array (
            'useSingleTransaction' => true,
            'useQuick' => true,
          ),
        ),
        'databases' => 
        array (
          0 => 'mysql',
        ),
      ),
      'database_dump_compressor' => 'Spatie\\DbDumper\\Compressors\\Bzip2Compressor',
      'database_dump_file_extension' => '',
      'destination' => 
      array (
        'filename_prefix' => '',
        'disks' => 
        array (
          0 => 'local',
        ),
      ),
      'temporary_directory' => '/var/www/storage/app/backup-temp',
      'password' => NULL,
      'encryption' => 'default',
    ),
    'notifications' => 
    array (
      'notifications' => 
      array (
        'Spatie\\Backup\\Notifications\\Notifications\\BackupHasFailedNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\UnhealthyBackupWasFoundNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupHasFailedNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\BackupWasSuccessfulNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\HealthyBackupWasFoundNotification' => 
        array (
          0 => 'mail',
        ),
        'Spatie\\Backup\\Notifications\\Notifications\\CleanupWasSuccessfulNotification' => 
        array (
          0 => 'mail',
        ),
      ),
      'notifiable' => 'Spatie\\Backup\\Notifications\\Notifiable',
      'mail' => 
      array (
        'to' => '',
        'from' => 
        array (
          'address' => 'pixelfed@example.com',
          'name' => 'PixelFed',
        ),
      ),
      'slack' => 
      array (
        'webhook_url' => '',
        'channel' => NULL,
        'username' => NULL,
        'icon' => NULL,
      ),
      'discord' => 
      array (
        'webhook_url' => '',
        'username' => '',
        'avatar_url' => '',
      ),
    ),
    'monitor_backups' => 
    array (
      0 => 
      array (
        'name' => 'PixelFed',
        'disks' => 
        array (
          0 => 'local',
        ),
        'health_checks' => 
        array (
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumAgeInDays' => 1,
          'Spatie\\Backup\\Tasks\\Monitor\\HealthChecks\\MaximumStorageInMegabytes' => 5000,
        ),
      ),
    ),
    'cleanup' => 
    array (
      'strategy' => 'Spatie\\Backup\\Tasks\\Cleanup\\Strategies\\DefaultStrategy',
      'default_strategy' => 
      array (
        'keep_all_backups_for_days' => 7,
        'keep_daily_backups_for_days' => 16,
        'keep_weekly_backups_for_weeks' => 8,
        'keep_monthly_backups_for_months' => 4,
        'keep_yearly_backups_for_years' => 2,
        'delete_oldest_backups_when_using_more_megabytes_than' => 5000,
      ),
    ),
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => NULL,
        'secret' => NULL,
        'app_id' => NULL,
        'options' => 
        array (
          'cluster' => NULL,
          'encrypted' => false,
          'host' => '13.61.5.217',
          'port' => 443,
          'scheme' => 'https',
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'redis',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/var/www/storage/framework/cache/data',
        'lock_path' => '/var/www/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'lock_connection' => 'default',
        'client' => 'predis',
        'default' => 
        array (
          'scheme' => 'tcp',
          'path' => NULL,
          'host' => 'redis',
          'password' => '',
          'port' => '6379',
          'database' => 0,
        ),
      ),
      'redis:session' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'prefix' => 'pf_session',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => NULL,
        'secret' => NULL,
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'pixelfed_cache',
    'limiter' => 'redis',
  ),
  'captcha' => 
  array (
    'secret' => 'default_secret',
    'sitekey' => 'default_sitekey',
    'http_client' => 'Buzz\\LaravelHCaptcha\\HttpClient',
    'options' => 
    array (
      'multiple' => false,
      'lang' => 'en',
    ),
    'attributes' => 
    array (
      'theme' => 'light',
    ),
    'enabled' => false,
    'active' => 
    array (
      'login' => false,
      'register' => false,
    ),
    'triggers' => 
    array (
      'login' => 
      array (
        'enabled' => false,
        'attempts' => 2,
      ),
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => '.well-known/*',
      1 => 'api/*',
      2 => 'oauth/*',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
      0 => 'Link',
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'costar' => 
  array (
    'enabled' => false,
    'domain' => 
    array (
      'block' => NULL,
      'cw' => NULL,
      'unlisted' => NULL,
    ),
    'keyword' => 
    array (
      'block' => NULL,
      'cw' => NULL,
      'unlisted' => NULL,
    ),
    'actor' => 
    array (
      'block' => NULL,
      'cw' => NULL,
      'unlisted' => NULL,
    ),
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'database' => 'pixelfed',
        'prefix' => '',
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'host' => 'db',
        'port' => '3306',
        'database' => 'pixelfed',
        'username' => 'pixelfed',
        'password' => 'PixelFed2025_Secure!',
        'unix_socket' => '',
        'sticky' => true,
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => false,
        'engine' => NULL,
        'dump' => 
        array (
          0 => 'use_single_transaction',
          1 => 'skip_lock_tables',
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'host' => 'db',
        'port' => '3306',
        'database' => 'pixelfed',
        'username' => 'pixelfed',
        'password' => 'PixelFed2025_Secure!',
        'charset' => 'utf8',
        'prefix' => '',
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'host' => 'db',
        'port' => '3306',
        'database' => 'pixelfed',
        'username' => 'pixelfed',
        'password' => 'PixelFed2025_Secure!',
        'charset' => 'utf8',
        'prefix' => '',
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'predis',
      'default' => 
      array (
        'scheme' => 'tcp',
        'path' => NULL,
        'host' => 'redis',
        'password' => '',
        'port' => '6379',
        'database' => 0,
      ),
      'horizon' => 
      array (
        'scheme' => 'tcp',
        'path' => NULL,
        'host' => 'redis',
        'password' => '',
        'port' => '6379',
        'database' => 0,
        'options' => 
        array (
          'prefix' => 'horizon:',
        ),
      ),
    ),
    'dbal' => 
    array (
      'types' => 
      array (
        'timestamp' => 'Illuminate\\Database\\DBAL\\TimestampType',
      ),
    ),
  ),
  'debugbar' => 
  array (
    'enabled' => false,
    'except' => 
    array (
    ),
    'storage' => 
    array (
      'enabled' => false,
      'driver' => 'file',
      'path' => '/var/www/storage/debugbar',
      'connection' => NULL,
      'provider' => '',
    ),
    'include_vendors' => true,
    'capture_ajax' => true,
    'add_ajax_timing' => false,
    'error_handler' => false,
    'clockwork' => false,
    'collectors' => 
    array (
      'phpinfo' => true,
      'messages' => true,
      'time' => true,
      'memory' => true,
      'exceptions' => true,
      'log' => true,
      'db' => true,
      'views' => true,
      'route' => true,
      'auth' => true,
      'gate' => true,
      'session' => true,
      'symfony_request' => true,
      'mail' => true,
      'laravel' => false,
      'events' => false,
      'default_request' => false,
      'logs' => false,
      'files' => false,
      'config' => false,
      'cache' => false,
    ),
    'options' => 
    array (
      'auth' => 
      array (
        'show_name' => true,
      ),
      'db' => 
      array (
        'with_params' => true,
        'backtrace' => true,
        'timeline' => false,
        'explain' => 
        array (
          'enabled' => false,
          'types' => 
          array (
            0 => 'SELECT',
          ),
        ),
        'hints' => true,
      ),
      'mail' => 
      array (
        'full_log' => false,
      ),
      'views' => 
      array (
        'data' => false,
      ),
      'route' => 
      array (
        'label' => true,
      ),
      'logs' => 
      array (
        'file' => NULL,
      ),
      'cache' => 
      array (
        'values' => true,
      ),
    ),
    'inject' => true,
    'route_prefix' => '_debugbar',
    'route_domain' => NULL,
  ),
  'dotenv-editor' => 
  array (
    'autoBackup' => true,
    'backupPath' => '/var/www/storage/dotenv-editor/backups/',
  ),
  'exp' => 
  array (
    'lc' => false,
    'rec' => false,
    'loops' => false,
    'top' => false,
    'polls' => false,
    'cached_public_timeline' => false,
    'cached_home_timeline' => false,
    'gps' => false,
    'spa' => true,
    'emc' => true,
    'hls' => false,
    'pue' => true,
    'autolink' => false,
  ),
  'federation' => 
  array (
    'activitypub' => 
    array (
      'enabled' => true,
      'outbox' => true,
      'inbox' => true,
      'sharedInbox' => true,
      'remoteFollow' => true,
      'delivery' => 
      array (
        'timeout' => 30.0,
        'concurrency' => 10,
        'logger' => 
        array (
          'enabled' => false,
          'driver' => 'log',
        ),
      ),
      'ingest' => 
      array (
        'store_notes_without_followers' => false,
      ),
    ),
    'atom' => 
    array (
      'enabled' => true,
    ),
    'avatars' => 
    array (
      'store_local' => true,
    ),
    'nodeinfo' => 
    array (
      'enabled' => true,
    ),
    'webfinger' => 
    array (
      'enabled' => true,
    ),
    'network_timeline' => true,
    'network_timeline_days_falloff' => 90,
    'custom_emoji' => 
    array (
      'enabled' => false,
      'max_size' => 2000000,
    ),
    'migration' => true,
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'cloud' => 's3',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/storage/app',
        'permissions' => 
        array (
          'file' => 
          array (
            'public' => 420,
            'private' => 384,
          ),
          'dir' => 
          array (
            'public' => 493,
            'private' => 448,
          ),
        ),
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/var/www/storage/app/public',
        'url' => 'http://13.61.5.217:8080/storage',
        'visibility' => 'public',
        'throw' => true,
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'visibility' => 'public',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => true,
      ),
      'alt-primary' => 
      array (
        'enabled' => false,
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'visibility' => 'public',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => true,
      ),
      'alt-secondary' => 
      array (
        'enabled' => false,
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'visibility' => 'public',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
        'throw' => true,
      ),
      'spaces' => 
      array (
        'driver' => 's3',
        'key' => NULL,
        'secret' => NULL,
        'endpoint' => NULL,
        'region' => NULL,
        'bucket' => NULL,
        'visibility' => 'public',
        'options' => 
        array (
          'CacheControl' => 'max-age=31536000',
        ),
        'root' => '',
        'throw' => true,
        'url' => NULL,
      ),
      'backup' => 
      array (
        'driver' => 's3',
        'visibility' => 'private',
        'root' => '/var/www/storage/app/backups/',
        'key' => NULL,
        'secret' => NULL,
        'endpoint' => NULL,
        'region' => NULL,
        'bucket' => NULL,
      ),
    ),
  ),
  'hashids' => 
  array (
    'default' => 'main',
    'connections' => 
    array (
      'main' => 
      array (
        'salt' => 'v3MsJ1Hgnlma8YPrD3f4sW6vAn6zLnkuh6vOpKnR5IKkLqDGIk7TCADS2igpEN4ADrtXkkzV2E8HBfzpz7BreDzQqVOYDMeb4cJ1xhDhDwDeicZVUPyrxihHDaMWpTsP',
        'length' => '24',
      ),
      'alternative' => 
      array (
        'salt' => 'your-salt-string',
        'length' => 'your-length-integer',
      ),
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 1024,
      'threads' => 2,
      'time' => 2,
    ),
  ),
  'horizon' => 
  array (
    'domain' => NULL,
    'path' => 'horizon',
    'use' => 'default',
    'prefix' => 'horizon:',
    'middleware' => 
    array (
      0 => 'web',
    ),
    'waits' => 
    array (
      'redis:feed' => 30,
      'redis:follow' => 30,
      'redis:shared' => 30,
      'redis:default' => 30,
      'redis:inbox' => 30,
      'redis:low' => 30,
      'redis:high' => 30,
      'redis:delete' => 30,
      'redis:story' => 30,
      'redis:mmo' => 30,
      'redis:intbg' => 30,
    ),
    'trim' => 
    array (
      'recent' => 60,
      'pending' => 60,
      'completed' => 60,
      'recent_failed' => 10080,
      'failed' => 10080,
      'monitored' => 10080,
    ),
    'silenced' => 
    array (
    ),
    'metrics' => 
    array (
      'trim_snapshots' => 
      array (
        'job' => 24,
        'queue' => 24,
      ),
    ),
    'fast_termination' => false,
    'memory_limit' => 64,
    'defaults' => 
    array (
      'supervisor-1' => 
      array (
        'connection' => 'redis',
        'queue' => 
        array (
          0 => 'default',
        ),
        'balance' => 'auto',
        'autoScalingStrategy' => 'time',
        'maxProcesses' => 1,
        'maxTime' => 0,
        'maxJobs' => 0,
        'memory' => 128,
        'tries' => 1,
        'timeout' => 60,
        'nice' => 0,
      ),
    ),
    'environments' => 
    array (
      'production' => 
      array (
        'supervisor-1' => 
        array (
          'connection' => 'redis',
          'queue' => 
          array (
            0 => 'high',
            1 => 'default',
            2 => 'follow',
            3 => 'shared',
            4 => 'inbox',
            5 => 'feed',
            6 => 'low',
            7 => 'story',
            8 => 'delete',
            9 => 'mmo',
            10 => 'intbg',
          ),
          'balance' => 'auto',
          'minProcesses' => '1',
          'maxProcesses' => '20',
          'memory' => 64,
          'tries' => 3,
          'nice' => 0,
          'timeout' => 300,
        ),
      ),
      'local' => 
      array (
        'supervisor-1' => 
        array (
          'connection' => 'redis',
          'queue' => 
          array (
            0 => 'high',
            1 => 'default',
            2 => 'follow',
            3 => 'shared',
            4 => 'inbox',
            5 => 'feed',
            6 => 'low',
            7 => 'story',
            8 => 'delete',
            9 => 'mmo',
            10 => 'intbg',
          ),
          'balance' => 'auto',
          'minProcesses' => 1,
          'maxProcesses' => 20,
          'memory' => 128,
          'tries' => 3,
          'nice' => 0,
          'timeout' => 300,
        ),
      ),
    ),
    'darkmode' => false,
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'image-optimizer' => 
  array (
    'optimizers' => 
    array (
      'Spatie\\ImageOptimizer\\Optimizers\\Jpegoptim' => 
      array (
        0 => '-m80',
        1 => '--strip-all',
        2 => '--all-progressive',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Pngquant' => 
      array (
        0 => '--force',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Optipng' => 
      array (
        0 => '-i0',
        1 => '-o7',
        2 => '-strip all',
        3 => '-quiet',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Svgo' => 
      array (
        0 => '--disable=cleanupIDs',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Gifsicle' => 
      array (
        0 => '-b',
        1 => '-O3',
      ),
    ),
    'binary_path' => '',
    'timeout' => 59,
    'log_optimizer_activity' => false,
  ),
  'import' => 
  array (
    'instagram' => 
    array (
      'enabled' => true,
      'limits' => 
      array (
        'max_posts' => 1000,
        'max_attempts' => -1,
      ),
      'allow_archived_posts' => false,
      'allow_video_posts' => true,
      'permissions' => 
      array (
        'admins_only' => false,
        'admin_follows_only' => false,
        'min_account_age' => 1,
        'min_follower_count' => 0,
        'user_ids' => NULL,
      ),
      'storage' => 
      array (
        'cloud' => 
        array (
          'enabled' => false,
        ),
      ),
    ),
  ),
  'instance' => 
  array (
    'force_https_urls' => true,
    'description' => 'Pixelfed - Photo sharing for everyone',
    'contact' => 
    array (
      'enabled' => false,
      'max_per_day' => 1,
    ),
    'discover' => 
    array (
      'public' => true,
      'loops' => 
      array (
        'enabled' => false,
      ),
      'tags' => 
      array (
        'is_public' => false,
      ),
    ),
    'email' => 'mshlool38@gmail.com',
    'timeline' => 
    array (
      'home' => 
      array (
        'cached' => false,
        'cache_ttl' => 900,
      ),
      'local' => 
      array (
        'cached' => false,
        'is_public' => false,
      ),
      'network' => 
      array (
        'cached' => false,
        'cache_dropoff' => 100,
        'max_hours_old' => 6,
      ),
    ),
    'page' => 
    array (
      404 => 
      array (
        'header' => 'Sorry, this page isn\'t available.',
        'body' => 'The link you followed may be broken, or the page may have been removed. <a href="/">Go back to Pixelfed.</a>',
      ),
      503 => 
      array (
        'header' => 'Service Unavailable',
        'body' => 'Our service is in maintenance mode, please try again later.',
      ),
    ),
    'username' => 
    array (
      'banned' => NULL,
      'remote' => 
      array (
        'formats' => 
        array (
          0 => '@',
          1 => 'from',
          2 => 'custom',
        ),
        'format' => '@',
        'custom' => NULL,
      ),
    ),
    'polls' => 
    array (
      'enabled' => false,
    ),
    'stories' => 
    array (
      'enabled' => false,
    ),
    'restricted' => 
    array (
      'enabled' => false,
      'level' => 1,
    ),
    'oauth' => 
    array (
      'token_expiration' => 365,
      'refresh_expiration' => 400,
      'pat' => 
      array (
        'enabled' => false,
        'id' => NULL,
      ),
    ),
    'label' => 
    array (
      'covid' => 
      array (
        'enabled' => true,
        'url' => 'https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public',
        'org' => 'visit the WHO website',
      ),
    ),
    'enable_cc' => true,
    'has_legal_notice' => false,
    'embed' => 
    array (
      'profile' => true,
      'post' => true,
    ),
    'hide_nsfw_on_public_feeds' => false,
    'avatar' => 
    array (
      'local_to_cloud' => false,
    ),
    'admin_invites' => 
    array (
      'enabled' => true,
    ),
    'user_filters' => 
    array (
      'max_user_blocks' => 50,
      'max_user_mutes' => 50,
      'max_domain_blocks' => 50,
    ),
    'reports' => 
    array (
      'email' => 
      array (
        'enabled' => false,
        'to' => NULL,
        'autospam' => false,
      ),
    ),
    'landing' => 
    array (
      'show_directory' => true,
      'show_explore' => true,
    ),
    'banner' => 
    array (
      'blurhash' => 'UzJR]l{wHZRjM}R%XRkCH?X9xaWEjZj]kAjt',
    ),
    'parental_controls' => 
    array (
      'enabled' => false,
      'limits' => 
      array (
        'respect_open_registration' => true,
        'max_children' => 1,
        'auto_verify_email' => true,
      ),
    ),
    'software-update' => 
    array (
      'disable_failed_warning' => false,
    ),
    'notifications' => 
    array (
      'gc' => 
      array (
        'enabled' => false,
        'delete_after_days' => 365,
      ),
    ),
    'curated_registration' => 
    array (
      'enabled' => false,
      'resend_confirmation_limit' => 5,
      'captcha_enabled' => false,
      'state' => 
      array (
        'fallback_on_closed_reg' => true,
        'only_enabled_on_closed_reg' => true,
      ),
      'notify' => 
      array (
        'admin' => 
        array (
          'on_verify_email' => 
          array (
            'enabled' => false,
            'bundle' => false,
            'max_per_day' => 10,
          ),
          'on_user_response' => false,
        ),
      ),
    ),
  ),
  'laravel-ffmpeg' => 
  array (
    'ffmpeg' => 
    array (
      'binaries' => 'ffmpeg',
      'threads' => false,
    ),
    'ffprobe' => 
    array (
      'binaries' => 'ffprobe',
    ),
    'timeout' => 3600,
    'log_channel' => false,
    'temporary_files_root' => '/tmp',
    'temporary_files_encrypted_hls' => '/tmp',
    'min_hls_version' => '4.3.0',
  ),
  'ldap' => 
  array (
    'default' => 'default',
    'connections' => 
    array (
      'default' => 
      array (
        'hosts' => 
        array (
          0 => '127.0.0.1',
        ),
        'username' => 'cn=user,dc=local,dc=com',
        'password' => 'secret',
        'port' => 389,
        'base_dn' => 'dc=local,dc=com',
        'timeout' => 5,
        'use_ssl' => false,
        'use_tls' => false,
      ),
    ),
    'logging' => true,
    'cache' => 
    array (
      'enabled' => false,
      'driver' => 'redis',
    ),
  ),
  'livestreaming' => 
  array (
    'enabled' => false,
    'server' => 
    array (
      'host' => '13.61.5.217',
      'port' => 1935,
      'path' => 'live',
    ),
    'broadcast' => 
    array (
      'delete_token_after_finished' => true,
      'max_duration' => 60,
      'max_active' => 10,
      'limits' => 
      array (
        'enabled' => true,
        'min_follower_count' => 100,
        'min_account_age' => 14,
        'admins_only' => true,
      ),
      'sources' => 
      array (
        'app' => false,
        'web' => false,
      ),
    ),
    'comments' => 
    array (
      'max_falloff' => 50,
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/var/www/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/var/www/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'critical',
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/var/www/storage/logs/laravel.log',
      ),
      'media' => 
      array (
        'driver' => 'single',
        'bubble' => false,
        'path' => '/var/www/storage/logs/media.log',
        'level' => 'debug',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'log',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'url' => NULL,
        'host' => 'smtp.mailtrap.io',
        'port' => '2525',
        'encryption' => '',
        'username' => '',
        'password' => '',
        'timeout' => NULL,
        'local_domain' => NULL,
        'verify_peer' => true,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -bs -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'pixelfed@example.com',
      'name' => 'PixelFed',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/var/www/resources/views/vendor/mail',
      ),
    ),
  ),
  'media' => 
  array (
    'delete_local_after_cloud' => true,
    'exif' => 
    array (
      'database' => false,
    ),
    'storage' => 
    array (
      'remote' => 
      array (
        'cloud' => false,
        'resilient_mode' => false,
      ),
    ),
    'hls' => 
    array (
      'enabled' => false,
      'debug' => false,
      'p2p' => false,
      'p2p_debug' => false,
      'bitrate' => 1000,
      'tracker' => 'wss://tracker.webtorrent.dev',
      'ice' => 'stun:stun.l.google.com:19302',
    ),
  ),
  'passport' => 
  array (
    'guard' => 'web',
    'private_key' => NULL,
    'public_key' => NULL,
    'client_uuids' => false,
    'personal_access_client' => 
    array (
      'id' => NULL,
      'secret' => NULL,
    ),
  ),
  'pixelfed' => 
  array (
    'domain' => 
    array (
      'admin' => '13.61.5.217',
      'app' => '13.61.5.217',
    ),
    'version' => '0.12.1',
    'nodeinfo' => 
    array (
      'url' => 'http://13.61.5.217:8080/api/nodeinfo/2.0.json',
    ),
    'memory_limit' => '1024M',
    'open_registration' => true,
    'max_account_size' => '1000000',
    'max_photo_size' => '15000',
    'max_avatar_size' => 2000,
    'max_caption_length' => '500',
    'max_bio_length' => '125',
    'max_name_length' => '30',
    'min_password_length' => 8,
    'max_album_length' => '4',
    'enforce_email_verification' => false,
    'image_quality' => 80,
    'account_deletion' => true,
    'account_delete_after' => false,
    'cloud_storage' => false,
    'max_users' => '1000',
    'enforce_max_users' => true,
    'optimize_image' => true,
    'optimize_video' => true,
    'user_invites' => 
    array (
      'enabled' => false,
      'limit' => 
      array (
        'total' => 0,
        'daily' => 0,
        'monthly' => 0,
      ),
    ),
    'max_collection_length' => 100,
    'media_types' => 'image/jpeg,image/png,image/gif',
    'enforce_account_limit' => true,
    'import' => 
    array (
      'instagram' => 
      array (
        'enabled' => false,
        'limits' => 
        array (
          'posts' => 100,
          'size' => 5000,
        ),
      ),
    ),
    'oauth_enabled' => true,
    'bouncer' => 
    array (
      'enabled' => false,
      'cloud_ips' => 
      array (
        'ban_logins' => false,
        'ban_signups' => false,
        'ban_api' => false,
        'ban_api_strict_mode' => false,
      ),
    ),
    'media_fast_process' => true,
    'max_altext_length' => 1000,
    'allow_app_registration' => true,
    'app_registration_rate_limit_attempts' => 3,
    'app_registration_rate_limit_decay' => 1800,
    'app_registration_confirm_rate_limit_attempts' => 20,
    'app_registration_confirm_rate_limit_decay' => 1800,
  ),
  'portfolio' => 
  array (
    'domain' => '13.61.5.217',
    'path' => '/i/portfolio',
  ),
  'purify' => 
  array (
    'default' => 'default',
    'configs' => 
    array (
      'default' => 
      array (
        'Core.Encoding' => 'utf-8',
        'HTML.Doctype' => 'HTML 4.01 Transitional',
        'HTML.Allowed' => 'a[href|title|rel|class],p[class],span[class],br',
        'HTML.ForbiddenElements' => '',
        'CSS.AllowedProperties' => '',
        'AutoFormat.AutoParagraph' => false,
        'AutoFormat.RemoveEmpty' => false,
        'Attr.AllowedClasses' => 
        array (
          0 => 'h-feed',
          1 => 'h-entry',
          2 => 'h-cite',
          3 => 'h-card',
          4 => 'p-author',
          5 => 'p-name',
          6 => 'p-in-reply-to',
          7 => 'p-repost-of',
          8 => 'p-comment',
          9 => 'u-photo',
          10 => 'u-uid',
          11 => 'u-url',
          12 => 'dt-published',
          13 => 'e-content',
          14 => 'mention',
          15 => 'hashtag',
          16 => 'ellipsis',
          17 => 'invisible',
        ),
        'Attr.AllowedRel' => 
        array (
          0 => 'noreferrer',
          1 => 'noopener',
          2 => 'nofollow',
        ),
        'HTML.TargetBlank' => true,
        'HTML.Nofollow' => true,
        'URI.DefaultScheme' => 'https',
        'URI.DisableExternalResources' => true,
        'URI.DisableResources' => true,
        'URI.AllowedSchemes' => 
        array (
          'http' => true,
          'https' => true,
        ),
        'URI.HostBlacklist' => 
        array (
        ),
      ),
    ),
    'definitions' => 'Stevebauman\\Purify\\Definitions\\Html5Definition',
    'serializer' => 
    array (
      'driver' => 'redis',
      'cache' => 'Stevebauman\\Purify\\Cache\\CacheDefinitionCache',
    ),
  ),
  'queue' => 
  array (
    'default' => 'redis',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => 'your-public-key',
        'secret' => 'your-secret-key',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'your-queue-name',
        'region' => 'us-east-1',
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 1800,
        'block_for' => NULL,
        'after_commit' => true,
      ),
    ),
    'failed' => 
    array (
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'remote-auth' => 
  array (
    'mastodon' => 
    array (
      'enabled' => false,
      'ignore_closed_state' => false,
      'contraints' => 
      array (
        'skip_email_verification' => true,
      ),
      'domains' => 
      array (
        'default' => 'mastodon.social,mastodon.online,mstdn.social,mas.to',
        'custom' => NULL,
        'only_default' => false,
        'only_custom' => false,
      ),
      'max_uses' => 
      array (
        'enabled' => true,
        'limit' => 3,
      ),
    ),
  ),
  'routes' => 
  array (
    'hashtag' => 
    array (
      'base' => 'http://13.61.5.217:8080/discover/tags/',
      'search' => 'http://13.61.5.217:8080/discover/tags/',
    ),
  ),
  'security' => 
  array (
    'url' => 
    array (
      'verify_dns' => false,
      'trusted_domains' => 'pixelfed.social,pixelfed.art,mastodon.social',
    ),
    'forgot-email' => 
    array (
      'enabled' => true,
      'limits' => 
      array (
        'max' => 
        array (
          'hourly' => 50,
          'daily' => 100,
          'weekly' => 200,
          'monthly' => 500,
        ),
      ),
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
    ),
    'ses' => 
    array (
      'key' => NULL,
      'secret' => NULL,
      'region' => 'us-east-1',
    ),
    'sparkpost' => 
    array (
      'secret' => NULL,
    ),
    'stripe' => 
    array (
      'model' => 'App\\User',
      'key' => NULL,
      'secret' => NULL,
    ),
  ),
  'session' => 
  array (
    'driver' => 'redis',
    'lifetime' => 86400,
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/var/www/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'pxfs',
    'path' => '/',
    'domain' => '13.61.5.217',
    'secure' => true,
    'http_only' => true,
    'same_site' => 'lax',
    'partitioned' => false,
  ),
  'snowflake' => 
  array (
    'epoch' => 1549756800000,
    'worker_id' => 1,
    'datacenter_id' => 1,
  ),
  'telescope' => 
  array (
    'domain' => NULL,
    'path' => 'telescope',
    'driver' => 'database',
    'storage' => 
    array (
      'database' => 
      array (
        'connection' => 'mysql',
      ),
    ),
    'enabled' => false,
    'middleware' => 
    array (
      0 => 'web',
      1 => 'Laravel\\Telescope\\Http\\Middleware\\Authorize',
    ),
    'only_paths' => 
    array (
    ),
    'ignore_paths' => 
    array (
      0 => 'js*',
      1 => 'i*',
    ),
    'ignore_commands' => 
    array (
    ),
    'watchers' => 
    array (
      'Laravel\\Telescope\\Watchers\\CacheWatcher' => true,
      'Laravel\\Telescope\\Watchers\\CommandWatcher' => 
      array (
        'enabled' => true,
        'ignore' => 
        array (
        ),
      ),
      'Laravel\\Telescope\\Watchers\\DumpWatcher' => true,
      'Laravel\\Telescope\\Watchers\\EventWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ExceptionWatcher' => true,
      'Laravel\\Telescope\\Watchers\\JobWatcher' => true,
      'Laravel\\Telescope\\Watchers\\LogWatcher' => true,
      'Laravel\\Telescope\\Watchers\\MailWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ClientRequestWatcher' => true,
      'Laravel\\Telescope\\Watchers\\ModelWatcher' => 
      array (
        'enabled' => true,
        'events' => 
        array (
          0 => 'eloquent.*',
        ),
      ),
      'Laravel\\Telescope\\Watchers\\NotificationWatcher' => true,
      'Laravel\\Telescope\\Watchers\\QueryWatcher' => 
      array (
        'enabled' => true,
        'ignore_packages' => true,
        'slow' => 100,
      ),
      'Laravel\\Telescope\\Watchers\\RedisWatcher' => true,
      'Laravel\\Telescope\\Watchers\\RequestWatcher' => 
      array (
        'enabled' => true,
        'size_limit' => 64,
      ),
      'Laravel\\Telescope\\Watchers\\GateWatcher' => 
      array (
        'enabled' => true,
        'ignore_abilities' => 
        array (
        ),
        'ignore_packages' => true,
      ),
      'Laravel\\Telescope\\Watchers\\ScheduleWatcher' => true,
    ),
  ),
  'trending' => 
  array (
    'hashtags' => 
    array (
      'ttl' => 43200,
      'recency_mins' => 20160,
      'limit' => 20,
    ),
  ),
  'trustedproxy' => 
  array (
    'proxies' => '*',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/var/www/resources/views',
    ),
    'compiled' => '/var/www/storage/framework/views',
  ),
  'webpush' => 
  array (
    'vapid' => 
    array (
      'subject' => NULL,
      'public_key' => NULL,
      'private_key' => NULL,
      'pem_file' => NULL,
    ),
    'model' => 'NotificationChannels\\WebPush\\PushSubscription',
    'table_name' => 'push_subscriptions',
    'database_connection' => 'mysql',
    'client_options' => 
    array (
    ),
    'gcm' => 
    array (
      'key' => NULL,
      'sender_id' => NULL,
    ),
  ),
  'websockets' => 
  array (
    'dashboard' => 
    array (
      'port' => 6001,
      'domain' => NULL,
      'path' => 'laravel-websockets',
      'middleware' => 
      array (
        0 => 'web',
        1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
      ),
    ),
    'apps' => 
    array (
      0 => 
      array (
        'id' => NULL,
        'name' => 'PixelFed',
        'host' => NULL,
        'key' => NULL,
        'secret' => NULL,
        'path' => NULL,
        'capacity' => NULL,
        'enable_client_messages' => false,
        'enable_statistics' => false,
        'allowed_origins' => 
        array (
        ),
      ),
    ),
    'app_provider' => 'BeyondCode\\LaravelWebSockets\\Apps\\ConfigAppProvider',
    'allowed_origins' => 
    array (
    ),
    'max_request_size_in_kb' => 250,
    'path' => 'laravel-websockets',
    'middleware' => 
    array (
      0 => 'web',
      1 => 'BeyondCode\\LaravelWebSockets\\Dashboard\\Http\\Middleware\\Authorize',
    ),
    'statistics' => 
    array (
      'store' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Stores\\DatabaseStore',
      'interval_in_seconds' => 60,
      'delete_statistics_older_than_days' => 60,
    ),
    'ssl' => 
    array (
      'local_cert' => NULL,
      'capath' => NULL,
      'local_pk' => NULL,
      'passphrase' => NULL,
      'verify_peer' => true,
      'allow_self_signed' => false,
    ),
    'channel_manager' => 'BeyondCode\\LaravelWebSockets\\WebSockets\\Channels\\ChannelManagers\\ArrayChannelManager',
    'managers' => 
    array (
      'app' => 'BeyondCode\\LaravelWebSockets\\Apps\\ConfigAppManager',
    ),
    'replication' => 
    array (
      'mode' => 'local',
      'modes' => 
      array (
        'local' => 
        array (
          'channel_manager' => 'BeyondCode\\LaravelWebSockets\\ChannelManagers\\LocalChannelManager',
          'collector' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Collectors\\MemoryCollector',
        ),
        'redis' => 
        array (
          'connection' => 'default',
          'channel_manager' => 'BeyondCode\\LaravelWebSockets\\ChannelManagers\\RedisChannelManager',
          'collector' => 'BeyondCode\\LaravelWebSockets\\Statistics\\Collectors\\RedisCollector',
        ),
      ),
    ),
    'handlers' => 
    array (
      'websocket' => 'BeyondCode\\LaravelWebSockets\\Server\\WebSocketHandler',
      'health' => 'BeyondCode\\LaravelWebSockets\\Server\\HealthHandler',
      'trigger_event' => 'BeyondCode\\LaravelWebSockets\\API\\TriggerEvent',
      'fetch_channels' => 'BeyondCode\\LaravelWebSockets\\API\\FetchChannels',
      'fetch_channel' => 'BeyondCode\\LaravelWebSockets\\API\\FetchChannel',
      'fetch_users' => 'BeyondCode\\LaravelWebSockets\\API\\FetchUsers',
    ),
    'promise_resolver' => 'React\\Promise\\FulfilledPromise',
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
