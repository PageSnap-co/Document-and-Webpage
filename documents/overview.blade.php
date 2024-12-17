<!-- Introduction Section -->
<div id="section-introduction" class="flex flex-col md:flex-row">
    <div class="p-5 w-full bg-gray-800">
        <h2 class="text-3xl font-bold mb-4">Introduction</h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Welcome to our cutting-edge SaaS service, where you can effortlessly convert website links or HTML content into high-quality PDFs through simple HTTP requests.
            Our API allows you to customize the PDF output to match your preferences and automatically provides a download link via HTTP POST webhook response and your dashboard.
            The PDFs are securely stored in our AWS S3 bucket for 2 days, ensuring easy access and prompt redaction and removal thereafter.
            Designed for efficiency and reliability, our service integrates seamlessly with your workflows, enabling you to focus on your core activities while we handle your document conversion needs.
        </p>

        <div class="postman-run-button"
            data-postman-action="collection/fork"
            data-postman-visibility="public"
            data-postman-var-1="6265431-2e86efef-d276-491b-886a-841110220d53"
            data-postman-collection-url="entityId=6265431-2e86efef-d276-491b-886a-841110220d53&entityType=collection&workspaceId=773dbc6b-e56a-433f-890b-29636b833ea3"
            data-postman-param="env%5BProduction%5D=W3sia2V5IjoiYmFzZVVybCIsInZhbHVlIjoiaHR0cHM6Ly9hcGkuYXNpYS5wYWdlc25hcC5jbyIsImVuYWJsZWQiOnRydWUsInR5cGUiOiJkZWZhdWx0Iiwic2Vzc2lvblZhbHVlIjoiaHR0cDovL2FwaS5hc2lhLnBhZ2VzbmFwLmNvIiwiY29tcGxldGVTZXNzaW9uVmFsdWUiOiJodHRwOi8vYXBpLmFzaWEucGFnZXNuYXAuY28iLCJzZXNzaW9uSW5kZXgiOjB9LHsia2V5IjoiYXBpVXNlcm5hbWUiLCJ2YWx1ZSI6IllPVVJfQVBJX1VTRVJfTkFNRSIsImVuYWJsZWQiOnRydWUsInR5cGUiOiJkZWZhdWx0Iiwic2Vzc2lvblZhbHVlIjoiWU9VUl9BUElfVVNFUl9OQU1FIiwiY29tcGxldGVTZXNzaW9uVmFsdWUiOiJZT1VSX0FQSV9VU0VSX05BTUUiLCJzZXNzaW9uSW5kZXgiOjF9LHsia2V5IjoiYXBpUGFzc3dvcmQiLCJ2YWx1ZSI6IllPVVJfQVBJX0tFWSIsImVuYWJsZWQiOnRydWUsInR5cGUiOiJkZWZhdWx0Iiwic2Vzc2lvblZhbHVlIjoiWU9VUl9BUElfS0VZIiwiY29tcGxldGVTZXNzaW9uVmFsdWUiOiJZT1VSX0FQSV9LRVkiLCJzZXNzaW9uSW5kZXgiOjJ9XQ=="></div>
        <script type="text/javascript">
            (function(p, o, s, t, m, a, n) {
                !p[s] && (p[s] = function() {
                    (p[t] || (p[t] = [])).push(arguments);
                });
                !o.getElementById(s + t) && o.getElementsByTagName("head")[0].appendChild((
                    (n = o.createElement("script")),
                    (n.id = s + t), (n.async = 1), (n.src = m), n
                ));
            }(window, document, "_pm", "PostmanRunObject", "https://run.pstmn.io/button.js"));
        </script>
    </div>
</div>

<!-- Authentication Section -->
<div id="section-authentication" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-3xl font-bold mb-4">Authentication</h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">To authenticate your account, include your API username and keys in the <font class="font-bold">Basic Auth</font> header of your HTTP requests. You can manage your API tokens in the dashboard.</p>
        <div class="mt-2 bg-indigo-900 border-l-8 border-indigo-700 text-lg leading-8 text-gray-300 p-4 rounded">
            Keep your API keys confidential and do not share them with others. Each API key is associated with your account and is used for billing purposes. If you need to provide API access to multiple users or services, create separate API keys for each use case. Regularly review and deactivate any unused keys to maintain the security of your account. Remember, you are responsible for all API requests made using your API keys.
        </div>
    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">
        <div class="my-2">Request Header</div>
        <div class="bg-gray-900 text-white p-2 rounded">Include the Basic Auth username and keys in the request header using your preferred programming language.</div>
    </div>
</div>

<!-- Sandbox Section -->
<div id="section-sandbox" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-3xl font-bold mb-4">Sandbox</h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">When getting started with PageSnap or working in development mode, it's strongly advised to enable the <font class="font-bold">sandbox</font> parameter by setting it to true. This parameter adds a watermark to the generated PDF without deducting from your conversion credits, allowing you to set up your code and perform multiple tests without worrying about exhausting your credit balance.</p>
        <p class="text-lg pb-2 leading-8 text-gray-400">Once you've completed your setup and testing, you can conduct a final local test with the <font class="font-bold">sandbox</font> parameter removed or set to false to ensure the PDF renders precisely as intended. Please note that there is a limit of <font class="font-bold">{{config('pagesnap.sandbox_limit_per_day')}}</font> sandbox requests per day per account.</p>
    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">
        <div class="my-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;"sandbox": true<br>
                }
            </code>
        </div>
    </div>
</div>

<!-- Generate API Key Section -->
<div id="section-apikey" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-3xl font-bold mb-4">Generate API Key</h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">To interact with the PageSnap API for capturing PDFs, you'll need an API key. PageSnap uses this key to grant access permission and track credit usage. You can generate multiple API keys if needed, to manage different keys for different projects. To generate an API key, create a PageSnap account and generate it via your dashboard.</p>
    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700"></div>
</div>

<!-- Basic Example Section -->
<div id="section-basic-example" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-3xl font-bold mb-4">Basic Example</h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">This is one of the most basic example that you can quick test with your API key. This will generate the PDF in sandbox mode, and you can retrieve it from your dashboard account. If a <font class="font-bold">webhook_url</font> is provided, the result and the PDF download link will be sent via webhook.</p>
    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="my-2">Request Header</div>
        <div class="mb-6 bg-gray-900 text-white p-2 rounded">Include the Basic Auth username and keys in the request header using your preferred programming language.</div>

        <div class="my-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"sandbox": true,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"contents": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"urls": [<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"https://en.wikipedia.org/wiki/Tech"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;},<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {}<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Response Section -->
<div id="section-response-status" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-3xl font-bold mb-4">Response</h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">This is the API response format you will receive after submitting a request. You can use the returned <font class="font-bold">request_id</font> to verify and match the incoming <a href="#setup-webhook_url" class="text-blue-400 hover:text-blue-300">webhook notification</a> once the PDF conversion is completed. Below are the potential response statuses you may receive when interacting with our API, along with the corresponding reasons for each status:</p>
    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">
        <div class="my-2">Response Example</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;"request_id": "5d2509ce-93f0-4e52-aeae-cab134a11c08",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;"success": true,<br>
                &nbsp;&nbsp;&nbsp;&nbsp;"message": "Request sent to processing queue successfully",<br>
                &nbsp;&nbsp;&nbsp;&nbsp;"error": ""<br>
                }
            </code>
        </div>

        <table class="my-2 table-auto">
            <thead>
                <tr>
                    <td class="px-4 py-2">Status Code</td>
                    <td class="px-4 py-2">Reason</td>
                </tr>
            </thead>
            <tbody class="text-gray-300 bg-gray-900">
                <tr>
                    <td class="border border-gray-500 px-4 py-2">200</td>
                    <td class="border border-gray-500 px-4 py-2">Request successful.</td>
                </tr>

                <tr>
                    <td class="border border-gray-500 px-4 py-2">401</td>
                    <td class="border border-gray-500 px-4 py-2">Missing Authorization Token.</td>
                </tr>

                <tr>
                    <td class="border border-gray-500 px-4 py-2">402</td>
                    <td class="border border-gray-500 px-4 py-2">Insufficient credit.</td>
                </tr>

                <tr>
                    <td class="border border-gray-500 px-4 py-2">403</td>
                    <td class="border border-gray-500 px-4 py-2">Invalid API key or user not authorized.</td>
                </tr>

                <tr>
                    <td class="border border-gray-500 px-4 py-2">429</td>
                    <td class="border border-gray-500 px-4 py-2">Sandbox limit per day limit reached.</td>
                </tr>

                <tr>
                    <td class="border border-gray-500 px-4 py-2">500</td>
                    <td class="border border-gray-500 px-4 py-2">Internal Server Error.</td>
                </tr>
        </table>
    </div>
</div>

<!-- Help Section -->
<div id="section-help" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-3xl font-bold mb-4">Help</h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">If you encounter any problems while integrating with our API, please don't hesitate to contact our support team at support@pagesnap.co. We're here to assist you in achieving your desired document conversions.</p>
    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700"></div>
</div>