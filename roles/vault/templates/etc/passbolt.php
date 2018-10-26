<?php

return
[
	'App' => [
		'fullBaseURL' => 'https://vault.gconfs.fr',
	],

	// Database configuration.
	'Datasources' => [
		'default' => [
			'host' => 'localhost',
			'username' => 'passbolt',
			'password' => '{{ mysql_vault_pass }}',
			'database' => 'passbolt',
		],
	],
	'passbolt' => [
		'ssl' => [
			'force' => true,
		],
		'gpg' => [
			// Main server key.
			'serverKey' => [
				// Server private key fingerprint
				'fingerprint' => '{{ key_fingerprint }}',
				'public' => CONFIG . 'gpg' . DS . 'serverkey.asc',
				'private' => CONFIG . 'gpg' . DS . 'serverkey_private.asc',
			],
		],
	],
];
