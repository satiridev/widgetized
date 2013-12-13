<?php namespace Satiri\Widgetized;

use Illuminate\Support\ServiceProvider;
use Event, Blade;

class WidgetizedServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('satiri/widgetized');

		Blade::extend(function($value)
		{
			$pattern = Blade::createMatcher("widgetized");
			return preg_replace($pattern, '<?php new \Satiri\Widgetized\WidgetRunner($2); ?>',$value);

		});
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
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