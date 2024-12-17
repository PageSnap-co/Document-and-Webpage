<!-- Option: set_java_script_enabled -->
<div id="option-set_java_script_enabled" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">set_java_script_enabled
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">boolean</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Enables or disables JavaScript execution on the page, allowing control over whether JavaScript code runs during the page load and interactions. By default, any JavaScript code present on the web page will be executed during the page load and interaction.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"set_java_script_enabled": false<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: set_extra_http_headers -->
<div id="option-set_extra_http_headers" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">set_extra_http_headers
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">json object</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Set custom HTTP headers for all requests made by the page, enabling modification of the headers sent with each request. HTTP headers are key-value pairs that provide additional information about the request or the response. By default, PageSnap sends some standard headers with each request, such as <font class="font-bold">User-Agent</font>, <font class="font-bold">Accept-Language</font>, etc.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"set_extra_http_headers": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"User-Agent": "MyCustomUserAgent/1.0",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Referer": "https://example.com"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: auth -->
<div id="option-auth" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">auth
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">json object</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Providing credentials for HTTP authentication requests made by the page, enabling automatic login or access to protected resources that require authentication. Keep in mind that this option only works for HTTP authentication mechanisms supported by the browser, such as Basic and Digest authentication. It does not handle other types of authentication, such as form-based login or OAuth.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"auth": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"username": "myname",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"password": "abc123"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: cookies -->
<div id="option-cookies" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">cookies
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">array</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Allows you to set cookies for the current page programmatically. PageSnap allows user to set cookie with properties <font class="font-bold">name</font>, and <font class="font-bold">value</font>.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"cookies": [{<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"name": "cookie1",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"value": "value1"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}, {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"name": "cookie2",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"value": "value2"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}]<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: stop_for_status -->
<div id="option-stop_for_status" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">stop_for_status
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">boolean</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Stop capturing the page if the website HTTP response code is not 2XX, allowing control over the response status code.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"stop_for_status": true<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: click_selector -->
<div id="option-click_selector" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">click_selector
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Fetches an element with the given selector, scrolls it into view if needed, and then click in the center of the element.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"click_selector": "#myElement"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: add_style -->
<div id="option-add_style" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">add_style
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            This will append the given CSS styles to the document before saving it. It can be a URL to a css style sheet file or a string of CSS rules.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>

        <div class="mb-6 bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"add_style": "https://example.com/styles.css"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"add_style": "body {background-color: red;}"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: add_script -->
<div id="option-add_script" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">add_script
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            This will execute the given JavaScript before saving the document. It can be a URL or a string of JS code.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>

        <div class="mb-6 bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"add_script": "https://example.com/script.js"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"add_script": "document.body.style.backgroundColor = 'lightblue';"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: emulate_media_type -->
<div id="option-emulate_media_type" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">emulate_media_type
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Allows setting the page's emulated media type, to simulate different rendering scenarios. Supported values are: <font class="font-bold">screen</font>, <font class="font-bold">print</font>
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"emulate_media_type": "print"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: wait_for_selector -->
<div id="option-wait_for_selector" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">wait_for_selector
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Waits for a specified selector to appear in the page's DOM. It pauses the execution until the element matching the selector is found or until a timeout is reached.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"wait_for_selector": "#myElement"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: wait_until -->
<div id="option-wait_until" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">wait_until
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Allows you to specify when to consider the navigation to be finished. You can provide multiple values separated by a comma. Supported values are:
        </p>
        <ul class="list-disc ml-4 pb-2 text-lg leading-8 text-gray-400">
            <li>
                <font class="text-gray-100 font-bold">load:</font> Waits for the <font class="font-bold">load</font> event to be fired, indicating that the page has fully loaded.
            </li>
            <li>
                <font class="text-gray-100 font-bold">domcontentloaded:</font> Waits for the <font class="font-bold">DOMContentLoaded</font> event to be fired, indicating that the initial HTML document has been parsed completely.
            </li>
            <li>
                <font class="text-gray-100 font-bold">networkidle0:</font> Waits until there are no more than 0 network connections for at least 500 ms.
            </li>
            <li>
                <font class="text-gray-100 font-bold">networkidle2:</font> Waits until there are no more than 2 network connections for at least 500 ms.
            </li>
        </ul>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"wait_until": "domcontentloaded,load"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: wait_for_timeout -->
<div id="option-wait_for_timeout" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">wait_for_timeout
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Specify the maximum time (in milliseconds) that the navigation should take before it times out. By default, the timeout is set to 30 seconds (30,000 milliseconds). If the navigation takes longer than the specified timeout, PageSnap will abort the navigation.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"wait_for_timeout": 30000<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: idle_time_after_loaded -->
<div id="option-idle_time_after_loaded" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">idle_time_after_loaded
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">integer</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Wait for the specified time in milliseconds after each page load or click event. The default is 1000 milliseconds. This is an extra delay to ensure that the page has fully loaded and any animations or dynamic content have settled before capturing the screenshot or generating the PDF. This option does not override other waiting options.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"idle_time_after_loaded": 1000<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: display_header_footer -->
<div id="option-display_header_footer" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">display_header_footer
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">boolean</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            To control whether to include headers and footers in the generated PDF. When it is set to <font class="font-bold">true</font>, PageSnap will add headers and footers to each page of the generated PDF. The headers and footers can display information such as the page number, title, date, or any custom content you specify. Required if you need to configure the <font class="font-bold">header_template</font> or <font class="font-bold">footer_template</font> options.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"display_header_footer": true<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: header_template -->
<div id="option-header_template" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">header_template
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Specify a custom HTML template for the header of each page in the generated PDF.
            This option works in conjunction with the <font class="font-bold">display_header_footer</font> option.
            When <font class="font-bold">display_header_footer</font> is set to true, PageSnap will use the provided <font class="font-bold">header_template</font> to render the header on each page of the PDF.
            The value should be a valid HTML string that defines the content and styling of the header.
            You can also use HTML classes <font class="font-bold">date</font>, <font class="font-bold">title</font>, <font class="font-bold">url</font>, <font class="font-bold">pageNumber</font>, <font class="font-bold">totalPages</font> to inject printing values.
            Make sure to provide appropriate margins using the <font class="font-bold">margin_top</font> option to ensure that the header has enough space and doesn't overlap with the main content of the page.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"display_header_footer": true,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"header_template": "&lt;span style='float: right;'&gt;Page &lt;span class='pageNumber'&gt;&lt;/span&gt; of &lt;span class='totalPages'&gt;&lt;/span&gt;&lt;/span&gt;",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"margin_top": "5cm"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: footer_template -->
<div id="option-footer_template" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">footer_template
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Specify a custom HTML template for the footer of each page in the generated PDF.
            This option works in conjunction with the <font class="font-bold">display_header_footer</font> option.
            When <font class="font-bold">display_header_footer</font> is set to true, PageSnap will use the provided <font class="font-bold">footer_template</font> to render the footer on each page of the PDF.
            The value should be a valid HTML string that defines the content and styling of the footer.
            You can also use HTML classes <font class="font-bold">date</font>, <font class="font-bold">title</font>, <font class="font-bold">url</font>, <font class="font-bold">pageNumber</font>, <font class="font-bold">totalPages</font> to inject printing values.
            Make sure to provide appropriate margins using the <font class="font-bold">margin_bottom</font> option to ensure that the footer has enough space and doesn't overlap with the main content of the page.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"display_header_footer": true,<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"footer_template": "&lt;span style='float: right;'&gt;Page &lt;span class='pageNumber'&gt;&lt;/span&gt; of &lt;span class='totalPages'&gt;&lt;/span&gt;&lt;/span&gt;",<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"margin_bottom": "5cm"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: page_ranges -->
<div id="option-page_ranges" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">page_ranges
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Specify the range of pages to include in the generated PDF. By default, when this option is not provided, PageSnap will generate a PDF that includes all the pages of the web page and might consumed more credits unnecessarily. You can specify a range of pages to include by providing a comma-separated list of page numbers or ranges. For example, "1,3-5,8" will include pages 1, 3, 4, 5, and 8 in the generated PDF.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"page_ranges": "1,3-5,8"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: scale -->
<div id="option-scale" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">scale
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">float</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Determines how the web page is scaled when rendering it to a PDF. It affects the size and resolution of the content in the generated PDF. The default value of scale is 1, which means the web page is rendered at its original size. If you set scale to a value greater than 1, the content will be scaled up, resulting in a larger PDF. Conversely, if you set scale to a value less than 1, the content will be scaled down, resulting in a smaller PDF. The supported values are in the range of 0.1 to 2.0.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"scale": 1<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: width -->
<div id="option-width" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">width
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Allows you to specify the width of the generated PDF in <font class="font-bold">cm</font>. It's important to note that setting the width option may affect the layout and appearance of the content in the PDF. If the specified width is smaller than the actual content width, the content will be scaled down to fit within the given width. This may result in a different layout compared to the original web page.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"width": "10cm"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: height -->
<div id="option-height" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">height
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Allows you to specify the height of the generated PDF in <font class="font-bold">cm</font>. It's important to note that setting the height option may affect the layout and appearance of the content in the PDF. If the specified height is smaller than the actual content height, the content will be scaled down to fit within the given height. This may result in a different layout compared to the original web page.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"height": "50cm"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: margin_top -->
<div id="option-margin_top" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">margin_top
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Defines the margins for the top sides of the PDF pages. The margins are specified in <font class="font-bold">cm</font> units. The option is particularly useful when you want to add some breathing space around the content in the PDF or when you need to accommodate headers, footers, or other elements that require specific positioning.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"margin_top": "5cm"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: margin_bottom -->
<div id="option-margin_bottom" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">margin_bottom
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Defines the margins for the bottom sides of the PDF pages. The margins are specified in <font class="font-bold">cm</font> units. The option is particularly useful when you want to add some breathing space around the content in the PDF or when you need to accommodate headers, footers, or other elements that require specific positioning.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"margin_bottom": "5cm"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: margin_left -->
<div id="option-margin_left" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">margin_left
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Defines the margins for the left sides of the PDF pages. The margins are specified in <font class="font-bold">cm</font> units. The option is particularly useful when you want to add some breathing space around the content in the PDF or when you need to accommodate headers, footers, or other elements that require specific positioning.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"margin_left": "5cm"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: margin_right -->
<div id="option-margin_right" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">margin_right
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Defines the margins for the right sides of the PDF pages. The margins are specified in <font class="font-bold">cm</font> units. The option is particularly useful when you want to add some breathing space around the content in the PDF or when you need to accommodate headers, footers, or other elements that require specific positioning.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"margin_right": "5cm"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: print_background -->
<div id="option-print_background" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">print_background
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">boolean</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Control whether the background graphics of the web page should be included in the generated PDF. By default, this option is set to <font class="font-bold">false</font>, which means that background graphics, such as background colors, images, and gradients, are not included in the PDF. Keep in mind that enabling this option may increase the file size of the generated PDF, especially if the web page contains large background images or complex background graphics. It can also impact the rendering performance and the time required to generate the PDF.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"print_background": false<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: landscape -->
<div id="option-landscape" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">landscape
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">boolean</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Allows you to specify the orientation of the generated PDF pages. By default, the option is set to <font class="font-bold">false</font>, which means that the PDF pages are generated in portrait orientation. In portrait orientation, the height of the page is greater than its width
            To generate the PDF pages in landscape orientation, you can set the option to <font class="font-bold">true</font>.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"landscape": false<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>

<!-- Option: format -->
<div id="option-format" class="flex flex-col md:flex-row">
    <div class="p-5 w-full md:w-1/2 bg-gray-800">
        <h2 class="text-xl font-bold mb-4">format
            <font class="rounded-full bg-gray-500 text-white text-sm px-2">string</font>
        </h2>
        <p class="text-lg pb-2 leading-8 text-gray-400">
            Specify the paper size of the generated PDF. By default, the paper size is set to <font class="font-bold">Letter</font>.
            You can choose from a variety of paper sizes, including <font class="font-bold">A0</font>, <font class="font-bold">A1</font>, <font class="font-bold">A2</font>, <font class="font-bold">A3</font>, <font class="font-bold">A4</font>, <font class="font-bold">A5</font>, <font class="font-bold">A6</font>, <font class="font-bold">Letter</font>, <font class="font-bold">Legal</font>, and <font class="font-bold">Tabloid</font>.
        </p>

    </div>
    <div class="p-5 w-full md:w-1/2 bg-gray-700">

        <div class="mb-2">Request Body</div>
        <div class="bg-gray-900 text-white p-2 rounded">
            <code>
                <code>
                    {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;"options": {<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"format": "Letter"<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                    &nbsp;&nbsp;&nbsp;&nbsp;...<br>
                    }
                </code>
            </code>
        </div>

    </div>
</div>