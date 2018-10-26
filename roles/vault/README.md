## Passbolt installation playbook

### Required variables:

`public_key`: path to the public key
`private_key`: path to the private key
`mysql_vault_pass`: mysql database password
`key_fingerprint`: gpg key fingerprint
`overwrite` (optional): enables git clone --force and reinstallation of the DB

use `-e variable=value` in ansible-playbook to pass a variable
