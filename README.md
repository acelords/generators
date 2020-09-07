# AceLords Generators

An AceLords composer package for use with AceLords projects.

## Commands
```bash
acelords:make-channel             Create a new AceLords project channel class
acelords:make-command             Create a new AceLords project command
acelords:make-controller          Create a new AceLords project controller class
acelords:make-controller --api    Create a new AceLords project controller class containing only the api methods
acelords:make-controller --repo   Create a new AceLords project controller class based on a model repository
acelords:make-event               Create a new AceLords project event class
acelords:make-facade              Create a new AceLords project facade class
acelords:make-filter              Create a new AceLords project filter class
acelords:make-job --sync          Create a new AceLords project job class
acelords:make-listener --queued   Create a new AceLords project event listener class
acelords:make-mail                Create a new AceLords project email class
acelords:make-middleware          Create a new AceLords project middleware class
acelords:make-model               Create a new AceLords project Eloquent model class
acelords:make-notification        Create a new AceLords project notification class
acelords:make-policy              Create a new AceLords project policy class
acelords:make-project             Craft a new AceLords project under packages
acelords:make-provider            Create a new AceLords project service provider class
acelords:make-repo                Create a new AceLords project event class
acelords:make-request             Create a new AceLords project form request class
acelords:make-resource            Create a new AceLords project resource
acelords:make-rule                Create a new AceLords project validation rule
acelords:make-service             Create a new AceLords project service class for a facade class
acelords:make-widget              Create a new AceLords project widget class

```

### How to run
```
// create a UserController in users module
php artisan acelords:make-controller UserController users
```

## Installation
Can be installed via composer
```bash
composer install acelords/generators
```

## Responses methods
It would be a nice idea to add these methods to the base Controller for easier modifications
```php
/**
     * return a standardized error message
     *
     * @param string $message
     * @param int $code
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respError($message = 'An error occurred', $code = 422)
    {
        return response()->json([
            'message' => $message,
            'alert' => 'error',
        ], $code);
    }

    /**
     * return a standardized success message
     *
     * @param string $message
     * @param int $code
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respSuccess($message = 'Action Successful', $code = 200)
    {
        return response()->json([
            'message' => $message,
            'alert' => 'success',
        ], $code);
    }

    /**
     * provide a common function to return messages to the user
     *
     * @param $result
     * @param string $messageOnSuccess
     * @param string $messageOnError
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function respJuicer($result, $messageOnSuccess = 'Action Successful', $messageOnError = 'An error occurred')
    {
        if($result)
            return $this->respSuccess($messageOnSuccess);

        return $this->respError($messageOnError);
    }
```

## Support
If you've found this useful and would like to buy the maintainers a coffee (or a Tesla, we're not picky), feel free to do so.


### Crowdfunding
It's also possible to support the project on **Github Sponsors**, [Patreon](https://www.patreon.com/acelords) or by buying products and merchandise at [Marketplace](https://store.acelords.space).

This funding is used for maintaining the project and adding new features into Code Style plus other open-source repositories.

## License 
Licensed under [DBAD](https://dbad-license.org/)

## Credits
- [AceLords Team](https://acelords.space)
