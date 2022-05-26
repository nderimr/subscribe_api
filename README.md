    1. Clone the application from github into your local stream_socket_server  <br>
        2. Create a database and set the database name, username and password into your in the .inv file <br>
        3. run php artisan migrate <br>
        4. run php artisan db:seed <br>
        5.1. get the Websites on the link http://yourlocalhostname/subscription_api/public/api/websites <br>
        5.2. get  the posts on the link http://yourlocalhostname/subscription_api/public/api/posts  <br>
        5.3. get  the users on the link http://yourlocalhostname/subscription_api/public/api/users <br>
        6. you can register new post using POST request on:  http://yourlocalhostname/subscription_api/public/api/post/store  <br>
        {<br>
            "title":"Post title",<br>
            "content":"Post content",<br>
            "description":"Post Description", <br>
            "website_id": "website_id" //ex 2 <br>
        }<br>
        7. You can subscribe user to website using POST request on:  http://yourlocalhostname/subscription_api/public/api/user/subscribe <br>
        {<br>
            "user_id":"your_users_id",  <br>
            "website_id":"your_websites_id" //ex 3<br>
        }<br>