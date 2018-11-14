<?php

return [
	'default' => 'rozie',
	
	'bots' => [
		'rozie' => [
			'username'                      => 'RoziieBot',
			'token'                         => env('ROZIIE_TOKEN', ''),
			'async'                         => false,
			'process_edited_messages'       => true,
			'commands_param_seperator'      => ' ',
			'cbq_param_seperator'           => ' ',
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
                'text'                          => true,
                'hashtags'                      => true,
                'mentions'                      => true,
            ],
			'commands'                      => [
			    \App\Telegram\Commands\StartCommand::class,
			],
			'callback_queries'              => [
			
			],
			'conversations'                 => [
			    \App\Telegram\Conversations\ScheduleConversation::class,
			],
			'texts'                      => [
			
			],
			'hashtags'                      => [
			
			],
			'mentions'                      => [
			
			]
		]
	]
];