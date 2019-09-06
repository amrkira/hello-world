<?php

return [

    /**
     *
     * Shared translations.
     *
     */
    'title' => 'adu',
    'next' => 'Next Step',
    'back' => 'Previous',
    'finish' => 'Install',
    'forms' => [
        'errorTitle' => 'The Following errors occurred:',
    ],

    /**
     *
     * Home page translations.
     *
     */
    'welcome' => [
        'templateTitle' => 'Witaj',
        'title'   => 'Instalator Aplikacji',
        'message' => 'Instalacja Aplikacji Programy Lojalnościowe',
        'next'    => 'Rozpocznij',
    ],

    /**
     *
     * Requirements page translations.
     *
     */
    'requirements' => [
        'templateTitle' => 'Krok 1 | Wygamania Serwera',
        'title' => 'Wygamania Serwera',
        'next'    => 'Sprawdź uprawnienia folderów',
    ],

    /**
     *
     * Permissions page translations.
     *
     */
    'permissions' => [
        'templateTitle' => 'Krok 2 | Uprawnienia',
        'title' => 'Uprawnienia',
        'next' => 'Konfiguruj Środowisko',
    ],

    /**
     *
     * Environment page translations.
     *
     */
    'environment' => [
        'menu' => [
            'templateTitle' => 'Krok 3 | Ustawienia Środowiska',
            'title' => 'Ustawienia Środowiska',
            'desc' => 'wybierz w jaki sposób chcesz konfigurować plik <code>.env</code> .',
            'wizard-button' => 'Wizualny podgląd',
            'classic-button' => 'Klasyczny edytor tekstowy',
        ],
        'wizard' => [
            'templateTitle' => 'Krok 3 | Ustawienia Środowiska | Konfiguracja ENV',
            'title' => 'Konfigurator wizualny <code>.env</code>',
            'tabs' => [
                'environment' => 'Środowisko',
                'database' => 'Baza Danych',
                'application' => 'Aplikacja'
            ],
            'form' => [
                'name_required' => 'Środowisko jest wymagane.',
                'app_name_label' => 'Nazwa Aplikacji',
                'app_name_placeholder' => 'Nazwa Aplikacji',
                'app_environment_label' => 'Środowisko Aplikacji',
                'app_environment_label_local' => 'Local',
                'app_environment_label_developement' => 'Development',
                'app_environment_label_qa' => 'Qa',
                'app_environment_label_production' => 'Production',
                'app_environment_label_other' => 'Inne',
                'app_environment_placeholder_other' => 'Wejdź do środowiska...',
                'app_debug_label' => 'App Debug',
                'app_debug_label_true' => 'True',
                'app_debug_label_false' => 'False',
                'app_log_level_label' => 'App Log Level',
                'app_log_level_label_debug' => 'debug',
                'app_log_level_label_info' => 'info',
                'app_log_level_label_notice' => 'notacja',
                'app_log_level_label_warning' => 'ostrzeżenie',
                'app_log_level_label_error' => 'błąd',
                'app_log_level_label_critical' => 'krytyczny',
                'app_log_level_label_alert' => 'alarm',
                'app_log_level_label_emergency' => 'ewentualny',
                'app_url_label' => 'App Url',
                'app_url_placeholder' => 'App Url',
                'db_connection_label' => 'Połączenie z bazą danych',
                'db_connection_label_mysql' => 'mysql',
                'db_connection_label_sqlite' => 'sqlite',
                'db_connection_label_pgsql' => 'pgsql',
                'db_connection_label_sqlsrv' => 'sqlsrv',
                'db_host_label' => 'Host Bazy Danych',
                'db_host_placeholder' => ' Host Bazy Danych',
                'db_port_label' => 'Port Bazy Danych',
                'db_port_placeholder' => 'Port Bazy Danych',
                'db_name_label' => 'Nazwa Bazy Danych',
                'db_name_placeholder' => 'Nazwa Bazy Danych',
                'db_username_label' => 'Nazwa użytkownika Bazy Danych',
                'db_username_placeholder' => 'Nazwa użytkownika Bazy Danych',
                'db_password_label' => 'Hasło Bazy Danych',
                'db_password_placeholder' => 'Hasło Bazy Danych',

                'app_tabs' => [
                    'more_info' => 'Więcej informacji',
                    'broadcasting_title' => 'Broadcasting, Caching, Session, &amp; Queue',
                    'broadcasting_label' => 'Broadcast Driver',
                    'broadcasting_placeholder' => 'Broadcast Driver',
                    'cache_label' => 'Cache Driver',
                    'cache_placeholder' => 'Cache Driver',
                    'session_label' => 'Session Driver',
                    'session_placeholder' => 'Session Driver',
                    'queue_label' => 'Queue Driver',
                    'queue_placeholder' => 'Queue Driver',
                    'redis_label' => 'Redis Driver',
                    'redis_host' => 'Redis Host',
                    'redis_password' => 'Redis Password',
                    'redis_port' => 'Redis Port',

                    'mail_label' => 'Mail',
                    'mail_driver_label' => 'Mail Driver',
                    'mail_driver_placeholder' => 'Mail Driver',
                    'mail_host_label' => 'Mail Host',
                    'mail_host_placeholder' => 'Mail Host',
                    'mail_port_label' => 'Mail Port',
                    'mail_port_placeholder' => 'Mail Port',
                    'mail_username_label' => 'Mail Username',
                    'mail_username_placeholder' => 'Mail Username',
                    'mail_password_label' => 'Mail Password',
                    'mail_password_placeholder' => 'Mail Password',
                    'mail_encryption_label' => 'Mail Encryption',
                    'mail_encryption_placeholder' => 'Mail Encryption',

                    'pusher_label' => 'Pusher',
                    'pusher_app_id_label' => 'Pusher App Id',
                    'pusher_app_id_palceholder' => 'Pusher App Id',
                    'pusher_app_key_label' => 'Pusher App Key',
                    'pusher_app_key_palceholder' => 'Pusher App Key',
                    'pusher_app_secret_label' => 'Pusher App Secret',
                    'pusher_app_secret_palceholder' => 'Pusher App Secret',
                ],
                'buttons' => [
                    'setup_database' => 'Setup Database',
                    'setup_application' => 'Setup Application',
                    'install' => 'Install',
                ],
            ],
        ],
        'classic' => [
            'templateTitle' => 'Etap 3 | Ustawienia środowiska | edycja tekstowa',
            'title' => 'Edycja Tekstowa ustawień środowiska',
            'save' => 'zapisz .env',
            'back' => 'użyj panelowego edytora',
            'install' => 'Zapisz i Instaluj',
        ],
        'success' => 'Twoje ustawienia zostały zapisane w pliku .env .',
        'errors' => 'Błąd w trakcie zapisywania w pliku .env, Proszę wykonać operację ręcznie.',
    ],

    'install' => 'Instaluj',

    /**
     *
     * Installed Log translations.
     *
     */
    'installed' => [
        'success_log_message' => 'Instalacja została przeprowadzona bez problemów. Przejdź na dowolną stroną projektu by zarejestrować administratora ',
    ],

    /**
     *
     * Final page translations.
     *
     */
    'final' => [
        'title' => 'Instalacja Zakończona',
        'templateTitle' => 'Instalacja Zakończona',
        'finished' => 'Aplikacja została zainstalowana.',
        'migration' => 'Migration &amp; Seed Console Output:',
        'console' => 'Application Console Output:',
        'log' => 'Installation Log Entry:',
        'env' => ' Plik .env :',
        'exit' => 'Kliknij tu by zamknąć',
    ],

    /**
     *
     * Update specific translations
     *
     */
    'updater' => [
        /**
         *
         * Shared translations.
         *
         */
        'title' => 'Aktualizator Aplikacji',

        /**
         *
         * Welcome page translations for update feature.
         *
         */
        'welcome' => [
            'title'   => 'Witaj w aktualizatorze aplikacji',
            'message' => 'Witaj w aktualizatorze aplikacji.',
        ],

        /**
         *
         * Welcome page translations for update feature.
         *
         */
        'overview' => [
            'title'   => 'Podgląd',
            'message' => '1 akutalizacja.| :number aktualizacji.',
            'install_updates' => "Instaluje akutalizacje"
        ],

        /**
         *
         * Final page translations.
         *
         */
        'final' => [
            'title' => 'Zakończono',
            'finished' => 'Application\'s zaktualizowana.',
            'exit' => 'Kliknij by wyjść',
        ],

        'log' => [
            'success_message' => 'Laravel Installer successfully UPDATED on ',
        ],
    ],
];
