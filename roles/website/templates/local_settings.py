import os
from gconfs import settings

DEBUG = False
ALLOWED_HOSTS = ['gconfs.fr']

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': 'website',
        'USER': 'website',
        'PASSWORD': '{{ website_mysql_pass }}',
        'OPTIONS': {
            'init_command': "SET sql_mode='STRICT_TRANS_TABLES'",
        },
    }
}


SOCIAL_AUTH_EPITA_KEY = '{{ epita_key }}'
SOCIAL_AUTH_EPITA_SECRET = '{{ epita_secret }}'

YOUTUBE_API_KEY = '{{ youtube_key }}'
YOUTUBE_RUN_EVERY_MINS=10
