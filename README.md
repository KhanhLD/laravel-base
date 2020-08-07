# Laravel base project
Current version: Laravel 5.7.15

#IMPORTANT
In the `.env` file. With param `APP_DEBUG` - Only set TRUE at your local. MUST set FALSE at STAGING/PROD

# TODO
- [ ] Add document
- [ ] Refactor architecture
- [ ] ...

# Debug tools
- Laravel Debugbar: disabled by default, enable it by env variable `DEBUGBAR_ENABLED=true`
- Log database queries: disabled by default, enable it by env variable `DEBUG_LOG_QUERIES=true`, queries will be logged to `storage/logs/queries.log`

# Static analyze
Check potential PHP errors before run on server with [`phpstan`](https://github.com/nunomaduro/larastan),

Within project root folder, run `composer phpstan`

Or run for specific files or folders `composer phpstan -- --paths=app/,tests/`

You can also setup code editor for realtime feedback, e.g. [vscode](https://code.visualstudio.com/docs/languages/php#_linting), [sonarlint](https://www.sonarlint.org/), ...

# Conventions
Check code convention with `phpcs`.

Within project root folder, run `phpcs` or `composer phpcs`.

You can also setup code editor for realtime feedback, e.g. [vscode](https://marketplace.visualstudio.com/items?itemName=ikappas.phpcs), [sublime](https://benmatselby.github.io/sublime-phpcs/), ... or use git hooks ([see example](https://gist.github.com/fdemiramon/0423b4308218d417fbf3))

We follow [Framgia PHP Convention](https://github.com/framgia/coding-standards/blob/master/eng/README.md#php) with some extended rules (defined in [phpcs.xml](./phpcs.xml))
- Auto check in both `app/` and `config` folders
- Not allow whitespace on blank line
    ```diff
    -    
    +
    ```
- Must have one space before and after operators +-*/:?
    ```diff
    - $result = $balance*$rate;
    + $result = $balance * $rate;
    ```
- Must have one line after each class member
    ```diff
    <?php
    class MyClass
    {
    -    private $propertyA;
    -    private $propertyB;
    +    private $propertyA;
    +
    +    private $propertyB;

        public function methodA()
        {
            //
        }
    +
        public function methodB()
        {
            //
        }
    }
    ```

# PHPUnit
Before running unit test, please make file `.env.testing`
```sh
cp .env.testing.example .env.testing
```

And setup database connection if needed.

Running unit test:
- `composer test` for all tests in folder [tests/](./tests/)
- `composer test tests/Unit/ExampleTest.php` to test specific file
- `composer test-coverage` to test and generate coverage reports in folder _tests/coverage/_

# Docker
If you want to use docker, simple copy file `docker-compose.yml.example` to file `docker-compose.yml` and change the container prefix name `project_` in file `docker-compose.yml`.
```sh
cp docker-compose.yml.example docker-compose.yml
```
Update `docker-compose.yml`:
```diff
# docker-compose.yml
services:
    application:
-        container_name: project_application
+        container_name: myapp_application
        image: debian
```
Up and running:
```sh
sudo docker-compose up -d
```
Your app will be available at http://localhost:8000 by default.

Update `.env`, e.g.
```env
DB_HOST=mysql
REDIS_HOST=redis
```

Update `.env.testing`, e.g.
```env
DB_HOST=mysql
```

To run artisan command, enter the workspace container:
```
sudo docker exec -it project_workspace bash
```

More info: https://github.com/FramgiaDockerTeam/laravel-microservices

# Framgia CI
To apply Framgia CI, you can using git cherry-pick to apply ci config from [dedicated branch](https://github.com/framgia/laravel-base/tree/framgia_civ3_config).

For Framgia CI version 2:
```sh
git cherry-pick framgia_civ2_config
```

Or Framgia CI version 3:
```sh
git cherry-pick framgia_civ3_config
```

And follow CI service document at: https://github.com/framgiaci/documents/
