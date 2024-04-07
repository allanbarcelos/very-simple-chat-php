# PHP Chat with Memcached

[Português](README.pt.md) | English

This is a simple PHP chat application that utilizes Memcached for real-time message storage. It includes a basic user interface and integration with the Memcached server for message persistence.

## Requirements

- Docker
- Memcached
- Web browser

## Installation and Usage

1. Make sure you have Docker installed on your machine.
2. Clone this repository to your development environment.
3. In the terminal, navigate to the root directory of the project.
4. Run the command `docker-compose up -d` to start the containers.
5. Access the chat in your web browser at `http://localhost`.

## Configuration

- The file `php/php.ini` contains specific PHP configurations, such as memory limits and execution time.
- The file `apache/httpd.conf` contains specific Apache configurations, such as the document root and logs.

## How to Use

- Open the chat in your web browser.
- Choose a username when prompted.
- Type your message into the input box and press "Send" or the Enter key.
- Messages will be displayed in the chat box in real-time.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).

---

This project was developed as an example for educational purposes. Feel free to use and modify it as needed.
