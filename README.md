
## Test API endpoinds

# How to run

- pre request: Docker install
- clone repo and ```cd test-api```
- copy .env file into project folder
- ```composer install```
- ```./vendor/bin/sail up```
- ```./vendor/bin/sail artisan migrate:fresh --seed --seeder=NewsSeeder```

## Endpoints

-   PATCH http://127.0.0.1/api/v1/news/state
    ```
    Content-Type: application/json
    data {"id":1,"news_state":"active"}
    or
    data {"id":1,"news_state":"hidden"}
    ```
  - GET http://127.0.0.1/api/v1/news 
      to get all active news without full description
  - GET http://127.0.0.1/api/v1/news/1
      to get one news by id with all fields. 
    Response example:
    ```
      {
          "data": {
              "id": 1,
              "title": "rem",
              "url": "http:\/\/www.funk.com\/",
              "short_description": "Architecto et ad aut hic aut aut. Aut rerum aut qui enim et. Aut quis rerum eaque dolores et laudantium tempore. Eius voluptatem recusandae deserunt quae iure dolores.",
              "description": "Ea id a eligendi quidem ut quisquam ad. Deserunt quo et porro corporis. Voluptas velit fugit eos et dolorem eaque.",
              "isActive": 1,
              "created_at": "2024-06-03T09:59:24.000000Z",
              "updated_at": "2024-06-03T09:59:24.000000Z"
          }
      }
      ```
