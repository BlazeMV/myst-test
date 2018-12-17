<?php

return [
	'default' => 'rozie',
	
	'bots' => [
		'rozie' => [
			'username'                      => 'RoziieBot',
			'token'                         => env('ROZIIE_TOKEN', ''),
			'async'                         => false,
			'process_edited_messages'       => true,
			'commands_param_separator'      => ' ',
			'cbq_param_separator'           => ' ',
			'unknown_command_reply_help'    => false,
			'engages_in'                    => [
				'private'                       => true,
				'group'                         => true,
				'supergroup'                    => true,
				'channel'                       => true,
			],
            'process'                       => [
                'commands'                      => true,
                'callback_queries'              => true,
                'texts'                         => true,
                'hashtags'                      => true,
                'mentions'                      => true,
                'conversations'                 => true,
            ],
			'commands'                      => [
			    \App\Telegram\Commands\StartCommand::class,
			],
			'callback_queries'              => [
			    \App\Telegram\CallbackQueries\Yes::class,
			],
			'conversations'                 => [
			    \App\Telegram\Conversations\ScheduleConversation::class,
			],
			'texts'                      => [
			    \App\Telegram\Texts\Hello::class,
			],
			'hashtags'                      => [
			    \App\Telegram\Hashtags\Ok::class,
			],
			'mentions'                      => [
			    \App\Telegram\Mentions\Blazemv::class,
			]
		]
	],
    'maintain_db' => true,
    'db_connection' => env('MYST_DB_CONNECTION', env('DB_CONNECTION', 'mysql'))
];