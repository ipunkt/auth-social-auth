<?php namespace Ipunkt\AuthSocialAuth;

use Config;
use Illuminate\Support\ServiceProvider;

class AuthSocialAuthServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
	
	public function boot() {
		$this->package('ipunkt/auth-social-auth');
		if( true === Config::get('auth-social-auth::set_usermodel') ) {
			Config::set('auth::set_usermodel', false);
			Config::set('auth.model', 'Ipunkt\AuthSocialAuth\User\EloquentUser');
		}
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
