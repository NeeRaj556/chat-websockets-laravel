<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebSocket Chat Project</title>
</head>

<body>

    <h1>WebSocket Chat Project</h1>

    <p>Welcome to the WebSocket Chat Project! This project provides a real-time chat experience using WebSockets. Follow the steps below to set up and run the project.</p>

    <h2>Getting Started</h2>

    <h3>Prerequisites</h3>

    <ul>
        <li>PHP (>= 7.4)</li>
        <li>Composer</li>
        <li>Node.js</li>
        <li>MySQL or other compatible databases</li>
    </ul>

    <h3>Installation</h3>

    <ol>
        <li>Clone the repository to your local machine:</li>

        <pre><code>git clone https://github.com/your-username/websocket-chat.git</code></pre>

        <li>Change into the project directory:</li>

        <pre><code>cd websocket-chat</code></pre>

        <li>Copy the <code>.env_copy</code> file to <code>.env</code>:</li>

        <pre><code>cp .env_copy .env</code></pre>
    </ol>

    <h2>Database Setup</h2>

    <ol>
        <li>Open the <code>.env</code> file and set up your database connection details:</li>

        <pre><code>
DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
</code></pre>

        <li>Run database migrations and seed data:</li>

        <pre><code>php artisan migrate:fresh --seed</code></pre>
    </ol>

    <h2>WebSocket Setup</h2>

    <ol>
        <li>Initialize the WebSocket server:</li>

        <pre><code>php artisan websocket:init</code></pre>
    </ol>

    <h2>Run the Application</h2>
