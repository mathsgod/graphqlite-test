### Installation


```
composer install
```


### Run the application with dev mode

```
php devmode.php
```


```
Array
(
    [errors] => Array
        (
            [0] => Array
                (
                    [message] => Cannot query field "test" on type "Query".
                    [locations] => Array
                        (
                            [0] => Array
                                (
                                    [line] => 1
                                    [column] => 3
                                )

                        )

                    [extensions] => Array
                        (
                            [file] => C:\Users\maths\project\graphqlite-test\vendor\webonyx\graphql-php\src\Validator\Rules\FieldsOnCorrectType.php
                            [line] => 43
                        )

                )

        )

)
```



### Run the application with prod mode
```
Array
(
    [data] => Array
        (
            [test] => Hello, World!
        )

)
```