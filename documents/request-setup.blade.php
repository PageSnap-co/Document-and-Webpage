<!-- Setup: Contents -->
<div id="setup-contents" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">contents <font class="rounded-full bg-indigo-800 text-white text-sm px-2">required</font>
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">array</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            At least one entry is required for either the <font class="font-bold">urls</font> or <font class="font-bold">htmls</font> parameter. When a request with this JSON payload is sent to the API, the service will process each web page specified by the URLs and each HTML snippet independently, creating a distinct PDF document for each content source provided. This allows users to efficiently generate multiple PDFs from different types of content with a single API request. The maximum count of contents per request is <font class="font-bold">{{ config('pagesnap.max_contents_per_request') }}</font>.
        </p>
        <ul class="list-disc ml-4 text-lg leading-8 text-gray-400">
            <li>
                <font class="text-gray-100 font-bold">urls:</font> This array contains a list of URLs pointing to web pages. The API will retrieve the content from each of these web pages and generate a separate PDF for each URL.
            </li>
            <li>
                <font class="text-gray-100 font-bold">htmls:</font> This array holds raw HTML strings. Each HTML snippet will be rendered and captured into its own separate PDF.
            </li>
        </ul>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="my-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"contents": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"urls": [<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"https://en.wikipedia.org/wiki/Tech",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"https://en.wikipedia.org/wiki/Web"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"htmls": [<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&lt;div&gt;Hello World!&lt;/div&gt;",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"&lt;p&gt;Hello World Again!&lt;/p&gt;",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Setup: webhook_url -->
<div id="setup-webhook_url" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">webhook_url
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            The <font class="font-bold">webhook_url</font> parameter allows you to specify a URL where our service will send an HTTP POST request containing the results of the PDF capture process. The request will include the following information in the response body:
        </p>
        <ul class="list-disc ml-4 pb-2 text-lg leading-8 text-gray-400">
            <li>
                <font class="text-gray-100 font-bold">request:</font> The original request payload you sent to our API for capturing the PDFs.
            </li>
            <li>
                <font class="text-gray-100 font-bold">results:</font> An array of URLs where you can download the captured PDF files. Each URL corresponds to a single captured PDF. These URLs will be valid for <font class="font-bold">2 hours</font>.
            </li>
            <li>
                <font class="text-gray-100 font-bold">error:</font> If there were any errors during the PDF capture process, this field will contain an error message. If the process was successful, this field will be <font class="font-bold">null</font>.
            </li>
        </ul>

        <p class="text-lg pb-2 leading-8 text-gray-400">
            If the <font class="font-bold">webhook_url</font> parameter is not provided, the request submission will still work. However, you will not receive any webhook notifications with the download links. In this case, you can manually retrieve the download links for your captured PDFs from our dashboard under the <font class="font-bold">Requests</font> section.
        </p>

        <p class="text-lg pb-2 leading-8 text-gray-400">
            Note: Ensure that the provided <font class="font-bold">webhook_url</font>, if specified, is a valid, publicly accessible URL that can handle incoming POST requests.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="my-2">Request Body</div>
        <div class="mb-6 bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"webhook_url": "https://your-webhook-url.com"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

        <div class="my-2">Webhook Response Sample</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"request_id": "5f7b1b7b-7b7b-4b7b-8b7b-7b7b7b7b7b7b",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"request": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...Request Payload...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;},<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"results": [<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"source": "https://en.wikipedia.org/wiki/Tech",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"pdf": "https://pagesnap.io/download/5f7b1b7b-7b7b-4b7b-8b7b-7b7b7b7b7b7b/tech.pdf",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"expired_at": "2021-12-31T23:59:59Z",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"error": null<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;]<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Setup: s3_path_url -->
<div id="setup-s3_path_url" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">s3_path_url
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            The <font class="font-bold">s3_path_url</font> is an optional parameter that allows you to store the captured PDFs in your own AWS S3 bucket. Provide the <font class="font-bold">s3_path_url</font> in the format <font class="font-bold">s3://your-bucket-name/path/to/store/pdfs/</font> and ensure our service has write permissions to your bucket. You can copy and paste our sample bucket policy to apply to your AWS S3 bucket. When <font class="font-bold">s3_path_url</font> is specified, the results array in the webhook response and our dashboard will contain S3 path to the PDFs in your designated bucket. Please note that the path is not a pre-signed link because we do not have permission to create a pre-signed link for your bucket.
        </p>

        <div class="mt-2 bg-indigo-900 border-l-8 border-indigo-700 text-lg leading-8 text-gray-300 p-4 rounded">
            Please remember to replace the <font class="font-bold">&lt;You_bucket_name&gt;</font> in our policy sample.
        </div>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="my-2">Request Body</div>
        <div class="mb-6 bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"s3_path_url": "s3://your-bucket-name/path/to/store/pdfs/",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

        <div class="my-2">Required Bucket Policy</div>
        <div class="mb-6 bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"Version": "2012-10-17",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"Statement": [<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Sid": "Only allow writes to this bucket with bucket owner full control",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Effect": "Allow",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Principal": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"AWS": "arn:aws:iam::146666182615:role/pagesnap-role-lambda"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Action": "s3:PutObject",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Resource": "arn:aws:s3:::&lt;Your_bucket_name&gt;/*",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Condition": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"StringEquals": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"s3:x-amz-acl": "bucket-owner-full-control"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;]<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>