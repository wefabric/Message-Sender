# Message-Sender

Package for sending data packets to an API endpoint.

## Installation:

1. Add the new credentials to the config.php.example file and config.php file
2. Create a new MessageSender in the src folder
3. In public/index.php, do the following:
   - Create a new MessageSender with the config
   - Add a `/` to the end of the `/**` line directly after where the MessageSenders are initialized
   - Set the correct options
4. Run the program by navigating in a browser to `message-sender.test`. This will create a WSDL package that you have to manually adapt a bit.
5. Remove the previously added `/`
6. Add the new folder in the composer.json > autoload section.
7. Do the rest.

