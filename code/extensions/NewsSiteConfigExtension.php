<?php
/**
 * Add some settings to the siteconfig. Pretty easy, right?
 *
 * @package News/blog module
 * @author Sphere
 */
class NewsSiteConfigExtension extends DataExtension {

	/**
	 * @var type array of all the extra's we need for setting everything up.
	 */
	private static $db = array(
		'Comments' => 'boolean(true)',
		'NewsEmail' => 'Varchar(255)',
		'MustApprove' => 'boolean(true)',
		'Gravatar' => 'boolean(true)',
		'AkismetKey' => 'Varchar(255)',
		'ExtraSecurity' => 'Boolean(true)',
		'PostsPerPage' => 'Int',
		'DefaultGravatar' => 'Varchar(255)',
		'GravatarSize' => 'Int',
		'TweetOnPost' => 'Boolean(false)',
		'SlideshowInitial' => 'Boolean(true)',
		'SlideshowSize' => 'Varchar(15)',
		'ReturnExternal' => 'Boolean(true)',
	);
	
	/**
	 * Update the SiteConfig with the news-settings.
	 * @param FieldList $fields of current FieldList of SiteConfig
	 */
	public function updateCMSFields(FieldList $fields){

		$fields->addFieldToTab(
			'Root', // What tab
			TabSet::create(
				'Newssettings', // name
				_t($this->class . '.NEWSCOMMENTS', 'News settings'), // title
				/** General news settings */
				Tab::create(
					'News', // Name
					_t($this->class . '.NEWS','News'), // Title
					CheckboxField::create('TweetOnPost', _t($this->class . '.TWEETPOST', 'Tweet after posting?')), // Requires Firesphere/silverstripe-social
					TextField::create('PostsPerPage', _t($this->class . '.PPP', 'Amount of posts per page')),
					EmailField::create('NewsEmail', _t($this->class . '.NEWSMAIL', 'Send e-mailnotification of a comment to')),
					CheckboxField::create('ReturnExternal', _t($this->class . '.EXTERNAL', 'Make externals open in a new tab/window'))
				),
				/** Comment settings */
				Tab::create(
					'Comments',
					_t($this->class . '.COMMENTSSETTINGS', 'Comments'),
					CheckboxField::create('Comments', _t($this->class . '.COMMENTS', 'Allow comments on newsitems')),
					CheckboxField::create('MustApprove', _t($this->class . '.APPROVE', 'Comments must be approved')),
					CheckboxField::create('Gravatar', _t($this->class . '.GRAVATAR', 'Use Gravatar-Image')),
					TextField::create('DefaultGravatar', _t($this->class . '.GRAVURL', 'Default Gravatar-image url')),
					NumericField::create('GravatarSize', _t($this->class . '.GRAVSIZE', 'Gravatar image size')),
					TextField::create('AkismetKey', _t($this->class . '.AKISMET', 'Akismet API key')),
					CheckboxField::create('ExtraSecurity', _t($this->class . '.SPAMPROTECTION', 'Use an extra field for spamprotection'))
				),
				/** Slideshow settings */
				Tab::create(
					'Slideshowsettings', // name
					_t($this->class . '.SLIDESHOWSETTINGS', 'Slideshow'), // title
					CheckboxField::create('SlideshowInitial', _t($this->class . '.SLIDEINITIAL', 'Show only the first image, the rest will have css-class hidden.')),
					TextField::create('SlideshowSize', _t($this->class . '.SLIDESIZE', 'Size of the images. Leave blank or 0 to control from CSS'))
				)
			),
			'Access'
		);
	}
}
