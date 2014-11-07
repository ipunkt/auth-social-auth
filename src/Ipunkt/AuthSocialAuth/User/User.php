<?php namespace Ipunkt\AuthSocialAuth;

use Ipunkt\Auth\models\EloquentUser;
use Ipunkt\SocialAuth\Profile\EloquentHasProfile;
use Ipunkt\SocialAuth\Profile\HasProfileInterface;

class User extends EloquentUser implements HasProfileInterface {
	use EloquentHasProfile;
} 