    1. Clone the application from github into your local stream_socket_server  
        2. Create a database and set the database name, username and password into your in the .inv file 
        3. run php artisan migrate 
        4. run php artisan db:seed 
        5.1. get the Websites on the link http://yourlocalhostname/subscription_api/public/api/websites 
        5.2. get  the posts on the link http://yourlocalhostname/subscription_api/public/api/posts  
        5.3. get  the users on the link http://yourlocalhostname/subscription_api/public/api/users 
        6. you can register new post using POST request on:  http://yourlocalhostname/subscription_api/public/api/post/store  
        {
            "title":"Post title",
            "content":"Post content",
            "description":"Post Description", 
            "website_id": "website_id" //ex 2 
        }
        7. You can subscribe user to website using POST request on:  http://yourlocalhostname/subscription_api/public/api/user/subscribe 
        {
            "user_id":"your_users_id", 
            "website_id":"your_websites_id" //ex 3
        }