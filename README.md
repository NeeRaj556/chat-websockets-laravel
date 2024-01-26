# WebSocket Chat Project

Welcome to the WebSocket Chat Project! This project provides a real-time chat experience using WebSockets. Follow the steps below to set up and run the project.

## Getting Started

### Prerequisites

- PHP (>= 8.0)
- Composer
- Node.js
- MySQL or other compatible databases

### Installation

1. Clone the repository to your local machine:
   [git clone https://github.com/your-username/websocket-chat.git](https://github.com/NeeRaj556/chat-websockets-laravel/)https://github.com/NeeRaj556/chat-websockets-laravel/
  2. Change into the project directory:


    cd websocket-chat


  3.Copy/Rename the .env_copy file to .env:
      
       cp .env_copy .env
       
  4.Database Setup
    1 Open the .env file and set up your database connection details:
              
                DB_CONNECTION=mysql
            DB_HOST=your_database_host
            DB_PORT=your_database_port
            DB_DATABASE=your_database_name
            DB_USERNAME=your_database_username
            DB_PASSWORD=your_database_password
    
 2 Create database according to .env file
 
   5.Pusher Setup 
        * SignIn/SignUp and then From Dashboard Get the API Key
                 
                    PUSHER_APP_ID=
                    PUSHER_APP_KEY=
                    PUSHER_APP_SECRET=
                    PUSHER_HOST=
                    PUSHER_PORT=443
                    PUSHER_SCHEME=https
                    PUSHER_APP_CLUSTER=mt1

   6.Run database migrations and seed data:
   
    php artisan migrate:fresh --seed
    
   7.Initialize the WebSocket server:(NOTE: Run continous in background)
   
    php artisan websocket:init

   8.Start the Laravel development server:

     php artisan serve

