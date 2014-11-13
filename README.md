auth-social-auth
================

This package is a simple bridge between ipunkt/auth and ipunkt/social-auth.  
It extends the ipunkt/auth User model, implementing the ipunkt/social-auth HasProfileInterface through the EloquentHasProfile Trait.  

# Install

## Installation

Add to your composer.json following lines

	"require": {
		"ipunkt/auth-social-auth": "dev-master"
	}

## Configuration

- Add 

        'Ipunkt\Auth\AuthServiceProvider',
    
    to your service provider list.  
- Publish the config by doing

        `php artisan config:publish ipunkt/auth`
	
- Edit the 'user_table' variable to suit your needs
- Migrate the user table by doing

        `php artisan migrate --package=ipunkt/auth`

