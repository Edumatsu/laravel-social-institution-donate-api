# Donation
APIs for register donation

Class DonationController

## Register
Register user donation




> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/app/donations',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'json' => [
            'institution_id' => '1',
            'institution_amount' => '10.00',
            'app_amount' => '1.00',
            'transaction_id' => 'Xtz1...',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/app/donations"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "institution_id": "1",
    "institution_amount": "10.00",
    "app_amount": "1.00",
    "transaction_id": "Xtz1..."
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/app/donations" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"institution_id":"1","institution_amount":"10.00","app_amount":"1.00","transaction_id":"Xtz1..."}'

```


> Example response (200):

```json
{}
```
<div id="execution-results-POSTv1-app-donations" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-app-donations"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-app-donations"></code></pre>
</div>
<div id="execution-error-POSTv1-app-donations" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-app-donations"></code></pre>
</div>
<form id="form-POSTv1-app-donations" data-method="POST" data-path="v1/app/donations" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-app-donations', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-app-donations" onclick="tryItOut('POSTv1-app-donations');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-app-donations" onclick="cancelTryOut('POSTv1-app-donations');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-app-donations" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/app/donations</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>institution_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="institution_id" data-endpoint="POSTv1-app-donations" data-component="body" required  hidden>
<br>
The donated Institution Id.
</p>
<p>
<b><code>institution_amount</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="institution_amount" data-endpoint="POSTv1-app-donations" data-component="body" required  hidden>
<br>
The amount donated to institution.
</p>
<p>
<b><code>app_amount</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="app_amount" data-endpoint="POSTv1-app-donations" data-component="body" required  hidden>
<br>
The amount donated to Causas App.
</p>
<p>
<b><code>transaction_id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="transaction_id" data-endpoint="POSTv1-app-donations" data-component="body" required  hidden>
<br>
The PagSeguro Transaction Id.
</p>

</form>



