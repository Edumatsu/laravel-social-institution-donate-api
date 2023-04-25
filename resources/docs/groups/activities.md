# Activities


## List
List user and following activites.




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/app/activities',
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
    "http://localhost/v1/app/activities"
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
    -G "http://localhost/v1/app/activities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (200):

```json
{
    "data": [
        {
            "userId": 1,
            "userFirstName": "João Paulo",
            "userLastName": "da Silva",
            "userPhotoUrl": "https:\/\/files-stg.causas.app.br\/user\/ebbfd58f-4b31-4125-a082-7aaf5cf6d700.png",
            "activityText": "Efetuou uma doação de <strong>R$ 10,00<\/strong> para <strong>Casa Abrigo Amorada<\/strong>",
            "institutionId": 1,
            "createdAt": "2021-09-01 01:25:38"
        },
        {
            "userId": 7,
            "userFirstName": "Angela",
            "userLastName": "Santos",
            "userPhotoUrl": "",
            "activityText": "Efetuou uma doação para <strong>Abrigo do Idoso<\/strong>",
            "institutionId": 2,
            "createdAt": "2021-09-12 11:52:34"
        }
    ],
    "pagination": {
        "total": 2,
        "current_page": 1,
        "first_page": 1,
        "prev_page": null,
        "next_page": null,
        "last_page": 1,
        "per_page": 15,
        "is_last_page": true
    }
}
```
<div id="execution-results-GETv1-app-activities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-app-activities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-app-activities"></code></pre>
</div>
<div id="execution-error-GETv1-app-activities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-app-activities"></code></pre>
</div>
<form id="form-GETv1-app-activities" data-method="GET" data-path="v1/app/activities" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-app-activities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-app-activities" onclick="tryItOut('GETv1-app-activities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-app-activities" onclick="cancelTryOut('GETv1-app-activities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-app-activities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/app/activities</code></b>
</p>
</form>



