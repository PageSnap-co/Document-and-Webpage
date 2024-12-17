<style>
    ::-webkit-scrollbar {
        background-color: #202324;
        color: #aba499;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #454a4d;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #575e62;
    }

    ::-webkit-scrollbar-thumb:active {
        background-color: #484e51;
    }

    ::-webkit-scrollbar-corner {
        background-color: #181a1b;
    }
</style>
<div class="flex flex-col gap-2">
    <div aria-label="Tabs with icons" data-tabs-toggle="#tabs-codes-content" role="tablist" class="text-white flex text-center flex-wrap -mb-px border-b border-gray-200 dark:border-gray-700">
        <button type="button" aria-controls="tabpanel-0" aria-selected="false" class="flex items-center justify-center p-4 text-sm font-medium first:ml-0 active" role="tab" data-tabs-target="#tabpanel-0">cURL</button>
        <button type="button" aria-controls="tabpanel-1" aria-selected="false" class="flex items-center justify-center p-4 text-sm font-medium first:ml-0" role="tab" data-tabs-target="#tabpanel-1">Python</button>
        <button type="button" aria-controls="tabpanel-2" aria-selected="false" class="flex items-center justify-center p-4 text-sm font-medium first:ml-0" role="tab" data-tabs-target="#tabpanel-2">Nodejs</button>
        <button type="button" aria-controls="tabpanel-3" aria-selected="false" class="flex items-center justify-center p-4 text-sm font-medium first:ml-0" role="tab" data-tabs-target="#tabpanel-3">PHP</button>
        <button type="button" aria-controls="tabpanel-4" aria-selected="false" class="flex items-center justify-center p-4 text-sm font-medium first:ml-0" role="tab" data-tabs-target="#tabpanel-4">Ruby</button>
    </div>
    <div id="tabs-codes-content">
        <div class="py-3" id="tabpanel-0" role="tabpanel" tabindex="0">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="bg-gray-900 text-white p-5 rounded">
                        <pre class="text-sm font-mono"><code class="block"><span class="text-green-400">curl</span> <span class="text-blue-400">-X POST</span> <span class="text-yellow-200">'{{config('app.api_url')}}'</span> <span class="text-gray-400">\</span><br>  <span class="text-blue-400">-u</span> <span class="text-yellow-200">'apiname:apipassword'</span> <span class="text-gray-400">\</span><br>  <span class="text-blue-400">-H</span> <span class="text-yellow-200">'Content-Type: application/json'</span> <span class="text-gray-400">\</span><br>  <span class="text-blue-400">-d</span> <span class="text-yellow-200">'{<br>    <span class="text-green-400">"sandbox"</span>: <span class="text-blue-200">true</span>,<br>    <span class="text-green-400">"webhook_url"</span>: <span class="text-yellow-200">"https://your-webhook-url.com"</span>,<br>    <span class="text-green-400">"contents"</span>: {<br>      <span class="text-green-400">"urls"</span>: [<span class="text-yellow-200">"https://en.wikipedia.org/wiki/Tech"</span>]<br>    }<br>  }</span>'</code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3" id="tabpanel-1" role="tabpanel" tabindex="0">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="bg-gray-900 text-white p-5 rounded">
                        <pre class="text-sm font-mono"><code class="block"><span class="text-green-500">import</span> requests<br><br>response <span class="text-blue-500">=</span> requests.post(<span class="text-yellow-500">'{{config('app.api_url')}}'</span>,<br>&nbsp;&nbsp;auth<span class="text-blue-500">=</span>(<span class="text-yellow-500">'apiname'</span>, <span class="text-yellow-500">'apipassword'</span>),<br>&nbsp;&nbsp;json<span class="text-blue-500">={</span><br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-500">"sandbox"</span>: <span class="text-blue-500">True</span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-500">"webhook_url"</span>: <span class="text-yellow-500">"https://your-webhook-url.com"</span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-500">"contents"</span>: <span class="text-blue-500">{</span><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-500">"urls"</span>: [<span class="text-yellow-500">"https://en.wikipedia.org/wiki/Tech"</span>]<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-blue-500">}</span><br>&nbsp;&nbsp;<span class="text-blue-500">}</span><br>)</code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3" id="tabpanel-2" role="tabpanel" tabindex="0">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="bg-gray-900 text-white p-5 rounded">
                        <pre class="text-sm font-mono"><code class="block"><span class="text-blue-400">const</span> axios = <span class="text-yellow-200">require</span>(<span class="text-green-300">'axios'</span>);<br><br>axios.<span class="text-yellow-200">post</span>(<span class="text-green-300">'{{config('app.api_url')}}'</span>, {<br>&nbsp;&nbsp;<span class="text-purple-400">sandbox</span>: <span class="text-blue-400">true</span>,<br>&nbsp;&nbsp;<span class="text-purple-400">webhook_url</span>: <span class="text-green-300">"https://your-webhook-url.com"</span>,<br>&nbsp;&nbsp;<span class="text-purple-400">contents</span>: {<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">urls</span>: [<span class="text-green-300">"https://en.wikipedia.org/wiki/Tech"</span>]<br>&nbsp;&nbsp;}<br>}, {<br>&nbsp;&nbsp;<span class="text-purple-400">auth</span>: {<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">username</span>: <span class="text-green-300">'apiname'</span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-purple-400">password</span>: <span class="text-green-300">'apipassword'</span><br>&nbsp;&nbsp;}<br>});</code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3" id="tabpanel-3" role="tabpanel" tabindex="0">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="bg-gray-900 text-white p-5 rounded">
                        <pre class="text-sm font-mono"><code class="block"><span class="text-purple-400">&lt;?php</span><br><br><span class="text-blue-400">$data</span> = <span class="text-yellow-200">array</span>(<br>&nbsp;&nbsp;<span class="text-green-400">'sandbox'</span> =&gt; <span class="text-blue-400">true</span>,<br>&nbsp;&nbsp;<span class="text-green-400">'webhook_url'</span> =&gt; <span class="text-green-400">'https://your-webhook-url.com'</span>,<br>&nbsp;&nbsp;<span class="text-green-400">'contents'</span> =&gt; <span class="text-yellow-200">array</span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-green-400">'urls'</span> =&gt; <span class="text-yellow-200">array</span>(<span class="text-green-400">'https://en.wikipedia.org/wiki/Tech'</span>)<br>&nbsp;&nbsp;)<br>);<br><br><span class="text-blue-400">$ch</span> = <span class="text-blue-400">curl_init</span>(<span class="text-green-400">'{{config('app.api_url')}}'</span>);<br><br><span class="text-blue-400">curl_setopt</span>(<span class="text-blue-400">$ch</span>, <span class="text-orange-400">CURLOPT_RETURNTRANSFER</span>, <span class="text-blue-400">true</span>);<br><span class="text-blue-400">curl_setopt</span>(<span class="text-blue-400">$ch</span>, <span class="text-orange-400">CURLOPT_POST</span>, <span class="text-blue-400">true</span>);<br><span class="text-blue-400">curl_setopt</span>(<span class="text-blue-400">$ch</span>, <span class="text-orange-400">CURLOPT_POSTFIELDS</span>, <span class="text-blue-400">json_encode</span>(<span class="text-blue-400">$data</span>));<br><span class="text-blue-400">curl_setopt</span>(<span class="text-blue-400">$ch</span>, <span class="text-orange-400">CURLOPT_HTTPHEADER</span>, <span class="text-yellow-200">array</span>(<br>&nbsp;&nbsp;<span class="text-green-400">'Content-Type: application/json'</span>,<br>&nbsp;&nbsp;<span class="text-green-400">'Authorization: Basic '</span> . <span class="text-blue-400">base64_encode</span>(<span class="text-green-400">"apiname:apipassword"</span>)<br>));<br><br><span class="text-blue-400">$result</span> = <span class="text-blue-400">curl_exec</span>(<span class="text-blue-400">$ch</span>);</code></pre>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3" id="tabpanel-4" role="tabpanel" tabindex="0">
            <div class="overflow-x-auto">
                <div class="inline-block min-w-full">
                    <div class="bg-gray-900 text-white p-5 rounded">
                        <pre class="text-sm font-mono"><code class="block"><span class="text-green-400">require</span> <span class="text-yellow-200">'httparty'</span><br><br>response = <span class="text-blue-400">HTTParty</span>.post(<span class="text-yellow-200">'{{config('app.api_url')}}'</span>,<br>  basic_auth: {username: <span class="text-yellow-200">'apiname'</span>, password: <span class="text-yellow-200">'apipassword'</span>},<br>  body: {<br>    sandbox: <span class="text-blue-400">true</span>,<br>    webhook_url: <span class="text-yellow-200">"https://your-webhook-url.com"</span>,<br>    contents: {<br>      urls: [<span class="text-yellow-200">"https://en.wikipedia.org/wiki/Tech"</span>]<br>    }<br>  }.to_json,<br>  headers: {}<span class="text-yellow-200">'Content-Type'</span> =&gt; <span class="text-yellow-200">'application/json'</span>}<br>)</code></pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="postman-run-button mt-3"
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