# Settings
APIs for show settings

Class SettingController

## Show
Show all settings




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/settings',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/settings"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```bash
curl -X GET \
    -G "http://localhost/v1/app/settings" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
{
    "causasDonateValue": 1.5,
    "version": {
        "id": 1,
        "name": "1.0.0"
    }
}
```
<div id="execution-results-GETv1-app-settings" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-settings"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-settings"></code></pre>
</div>
<div id="execution-error-GETv1-app-settings" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-settings"></code></pre>
</div>
<form id="form-GETv1-app-settings" data-method="GET" data-path="v1/app/settings" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-settings', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-settings" onclick="tryItOut('GETv1-app-settings');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-settings" onclick="cancelTryOut('GETv1-app-settings');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-settings" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/settings</code></b>
</p>
</form>



