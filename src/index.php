<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tuneup Technology Docs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/css/stylesheet.css" rel="stylesheet">
</head>

<body>
    <div class="bg-theme-color">
        <div class="container text-center">

            <h1>Tuneup Technology App<br />API Documentation</h1>
            <p>The Tuneup Technology App RESTful API allows you to interact with the customers, tickets, inventory, and locations objects of the application.</p>
            <br />
            <p><a href="/"><i class="fas fa-chevron-left"></i> Return to the Dashboard</a></p>

        </div>
    </div>

    <div class="container">

        <h4>Client Libraries</h4>
        <p>Want to save some time and headache? We've built the following client libraries to make getting started with our API that much easier. If you instead want to make a few one-off calls, you can view the accompanying <code>cURL</code> examples listed on each object below.</p>
        <ul>
            <li><a href="https://github.com/tuneuptechnology/tuneuptechnology-python">Python Client Library</a></li>
            <li><a href="https://github.com/tuneuptechnology/tuneuptechnology-node">Node Client Library</a></li>
            <li><a href="https://github.com/tuneuptechnology/tuneuptechnology-php">PHP Client Library</a></li>
            <li><a href="https://github.com/tuneuptechnology/tuneuptechnology-go">Go Client Library</a></li>
            <li><a href="https://github.com/tuneuptechnology/tuneuptechnology-ruby">Ruby Client Library</a></li>
            <li><a href="https://github.com/tuneuptechnology/tuneuptechnology-postman">Postman Collection</a></li>
        </ul>

        <hr>

        <h4>Authentication</h4>
        <p>Authentication and identification to the API is done by providing the email of your user and an API Key in the headers of every request. Requests without a proper email (<code>Email</code>) or API Key (<code>Api-Key</code>) will fail. Find your API keys on your account page.</p>
        <p>API Keys are permission based. Retrieving records can be done with an API key with "READ" permissions while creating, updating, or deleting a record will require an API key with "WRITE" permissions.</p>
        <div class="code-block-red"><b>Treat API keys like passwords!</b> They give read/write access to your entire company. This means they should not be stored in repositories, plaintext, emails, etc. If your API Key becomes compromised, you can generate a new one on your account page.</div>

        <hr>

        <h4>Objects</h4>
        <p>All parameters are required on create, otherwise optional. Where a specific record will need to be selected, <code>id</code> will be required on every call. Wherever you see <code>{id}</code>, replace that with the ID of the record you want to retrieve. Items such as customers, tickets, locations, users, etc that belong to a company may only be filled if they belong to the same company of the API key you are using, otherwise your request will fail.</p>

        <hr>

        <h4>Pagination</h4>
        <p>Pagination occurs on collection <code>GET</code> requests and is limited to 20 records per page. The collection is accessible via the <code>data</code> property. Simply append the page number to your query to retrieve a specific page (eg: <code>?page=2</code>). If there are additional pages available, they will be present on the response in addition to showing the next page and the last page.</p>

        <hr>

        <h4>Errors</h4>
        <p>We hope your API experience is error free, but they happen from time-to-time. Here is a list of common error categories you may come across.</p>

        <table>
            <tr>
                <th class="text-right">Code</th>
                <th class="type-column">Reason</th>
                <th>Description</th>
            </tr>
            <tr>
                <td class="text-right">200</td>
                <td class="type-column">OK</td>
                <td>The request was successful.</td>
            </tr>
            <tr>
                <td class="text-right">400</td>
                <td class="type-column">Bad Request</td>
                <td>The request was not processed due to client error.</td>
            </tr>
            <tr>
                <td class="text-right">404</td>
                <td class="type-column">Not Found</td>
                <td>The requested resource could not be found.</td>
            </tr>
            <tr>
                <td class="text-right">405</td>
                <td class="type-column">Method Not Allowed</td>
                <td>You probably sent your request as GET instead of POST.</td>
            </tr>
            <tr>
                <td class="text-right">422</td>
                <td class="type-column">Bad Request</td>
                <td>The request was not processed due to bad input.</td>
            </tr>
            <tr>
                <td class="text-right">500</td>
                <td class="type-column">Server Error</td>
                <td>We probably goofed! There may be something on our end that we need to fix. Please contact us with details.</td>
            </tr>
        </table>

        <p>Additional information about your request can be found in the <code>message</code> field of the response.</p>

        <hr>

        <h4>Customers</h4>
        <p>Customers are the main focus of the App. Every other record is tied to a customer whether that's a ticket, a piece of inventory used for that ticket, etc.</p>

        <h5 class="new-section-title">Customers Object</h5>
        <table>
            <tr>
                <th class="text-right">Parameter</th>
                <th class="type-column">Type</th>
                <th>Description</th>
            </tr>
            <tr>
                <td class="text-right">id</td>
                <td class="type-column">integer</td>
                <td>The ID of the record.</td>
            </tr>
            <tr>
                <td class="text-right">firstname</td>
                <td class="type-column">string</td>
                <td>The first name of the customer.</td>
            </tr>
            <tr>
                <td class="text-right">lastname</td>
                <td class="type-column">string</td>
                <td>The last name of the customer.</td>
            </tr>
            <tr>
                <td class="text-right">email</td>
                <td class="type-column">string</td>
                <td>The email of the customer.</td>
            </tr>
            <tr>
                <td class="text-right">phone</td>
                <td class="type-column">string</td>
                <td>The phone number of the customer, validated against US based phone numbers.</td>
            </tr>
            <tr>
                <td class="text-right">user_id</td>
                <td class="type-column">integer</td>
                <td>The ID of the user who owns the customer record.</td>
            </tr>
            <tr>
                <td class="text-right">notes</td>
                <td class="type-column">string</td>
                <td>The notes about the customer.</td>
            </tr>
            <tr>
                <td class="text-right">location_id</td>
                <td class="type-column">integer</td>
                <td>The ID of the location the user is assigned to.</td>
            </tr>
        </table>

        <h5 class="new-section-title">Customer API Calls</h5>
        <p>Select an endpoint to see more info.</p>

        <?php
        $dir = array_slice(scandir('./docs'), 2);
        foreach ($dir as $language) {
            if ($language == 'go') {
                echo "<h2>${language} Examples</h2>";

                $dir = array_slice(scandir("./docs/${language}/examples"), 2);
                foreach ($dir as $godir) {
                    $subdir = array_slice(scandir("./docs/${language}/examples/$godir"), 2);
                    foreach ($subdir as $example) {
                        echo "<h3>" . $example . "</h3>";
                        echo "<code>" . nl2br(file_get_contents("./docs/${language}/examples" . '/' . $godir . '/' . $example)) . "</code>";
                        echo "<hr />";
                    }
                }
            } else {
                echo "<h2>${language} Examples</h2>";

                $dir = array_slice(scandir("./docs/${language}/examples"), 2);
                foreach ($dir as $example) {
                    echo "<h3>" . $example . "</h3>";
                    echo "<code>" . nl2br(file_get_contents("./docs/${language}/examples" . '/' . $example)) . "</code>";
                    echo "<hr />";
                }
            }
        }
        ?>
    </div>
</body>

</html>
