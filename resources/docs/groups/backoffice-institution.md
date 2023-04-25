# Backoffice / Institution
APIs for managing institutions

## List
Fetch all institutions

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/backoffice/institutions',
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
    "http://localhost/v1/backoffice/institutions"
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
    -G "http://localhost/v1/backoffice/institutions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (401):

```json
{
    "message": "Token not provided"
}
```
<div id="execution-results-GETv1-backoffice-institutions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-backoffice-institutions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-backoffice-institutions"></code></pre>
</div>
<div id="execution-error-GETv1-backoffice-institutions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-backoffice-institutions"></code></pre>
</div>
<form id="form-GETv1-backoffice-institutions" data-method="GET" data-path="v1/backoffice/institutions" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-backoffice-institutions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-backoffice-institutions" onclick="tryItOut('GETv1-backoffice-institutions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-backoffice-institutions" onclick="cancelTryOut('GETv1-backoffice-institutions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-backoffice-institutions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/backoffice/institutions</code></b>
</p>
<p>
<label id="auth-GETv1-backoffice-institutions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETv1-backoffice-institutions" data-component="header"></label>
</p>
</form>


## Create
Create a new institution

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/v1/backoffice/institutions',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'name',
                'contents' => 'Instituto Arca da Fé'
            ],
            [
                'name' => 'description',
                'contents' => 'O Instituto tem como objetivo ajudar e resgatar os animais de rua'
            ],
            [
                'name' => 'about',
                'contents' => 'Instituto <strong>Arca da Fé</strong> lorem ipsum dolor sit amet'
            ],
            [
                'name' => 'document',
                'contents' => '123456789000115'
            ],
            [
                'name' => 'phone',
                'contents' => '+5514998887777'
            ],
            [
                'name' => 'cellphone',
                'contents' => '+5514988887777'
            ],
            [
                'name' => 'website',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'facebook',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'instagram',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'payment_token',
                'contents' => 'htsqqw...'
            ],
            [
                'name' => 'special_donate_text',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'special_donate_url',
                'contents' => 'https://www.site.com/specialdonate'
            ],
            [
                'name' => 'voluntary_text',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'voluntary_url',
                'contents' => 'https://www.site.com/voluntary'
            ],
            [
                'name' => 'money_donate',
                'contents' => '1'
            ],
            [
                'name' => 'main_category',
                'contents' => '1'
            ],
            [
                'name' => 'categories',
                'contents' => '2'
            ],
            [
                'name' => 'address[name]',
                'contents' => 'Matriz'
            ],
            [
                'name' => 'address[cep]',
                'contents' => '18681860'
            ],
            [
                'name' => 'address[street]',
                'contents' => 'Rua José Hiran Garrido'
            ],
            [
                'name' => 'address[number]',
                'contents' => '121'
            ],
            [
                'name' => 'address[neighborhood]',
                'contents' => 'Itapuã'
            ],
            [
                'name' => 'address[complement]',
                'contents' => 'casa'
            ],
            [
                'name' => 'address[city]',
                'contents' => 'Lençóis Paulista'
            ],
            [
                'name' => 'address[state]',
                'contents' => 'SP'
            ],
            [
                'name' => 'attachment',
                'contents' => fopen('/tmp/phpZiacqy', 'r')
            ],
            [
                'name' => 'images[]',
                'contents' => fopen('/tmp/phpXduenD', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/backoffice/institutions"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'Instituto Arca da Fé');
body.append('description', 'O Instituto tem como objetivo ajudar e resgatar os animais de rua');
body.append('about', 'Instituto <strong>Arca da Fé</strong> lorem ipsum dolor sit amet');
body.append('document', '123456789000115');
body.append('phone', '+5514998887777');
body.append('cellphone', '+5514988887777');
body.append('website', 'https://www.site.com');
body.append('facebook', 'https://www.site.com');
body.append('instagram', 'https://www.site.com');
body.append('payment_token', 'htsqqw...');
body.append('special_donate_text', 'https://www.site.com');
body.append('special_donate_url', 'https://www.site.com/specialdonate');
body.append('voluntary_text', 'https://www.site.com');
body.append('voluntary_url', 'https://www.site.com/voluntary');
body.append('money_donate', '1');
body.append('main_category', '1');
body.append('categories', '2');
body.append('address[name]', 'Matriz');
body.append('address[cep]', '18681860');
body.append('address[street]', 'Rua José Hiran Garrido');
body.append('address[number]', '121');
body.append('address[neighborhood]', 'Itapuã');
body.append('address[complement]', 'casa');
body.append('address[city]', 'Lençóis Paulista');
body.append('address[state]', 'SP');
body.append('attachment', document.querySelector('input[name="attachment"]').files[0]);
body.append('images[]', document.querySelector('input[name="images[]"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```

```bash
curl -X POST \
    "http://localhost/v1/backoffice/institutions" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=Instituto Arca da Fé" \
    -F "description=O Instituto tem como objetivo ajudar e resgatar os animais de rua" \
    -F "about=Instituto <strong>Arca da Fé</strong> lorem ipsum dolor sit amet" \
    -F "document=123456789000115" \
    -F "phone=+5514998887777" \
    -F "cellphone=+5514988887777" \
    -F "website=https://www.site.com" \
    -F "facebook=https://www.site.com" \
    -F "instagram=https://www.site.com" \
    -F "payment_token=htsqqw..." \
    -F "special_donate_text=https://www.site.com" \
    -F "special_donate_url=https://www.site.com/specialdonate" \
    -F "voluntary_text=https://www.site.com" \
    -F "voluntary_url=https://www.site.com/voluntary" \
    -F "money_donate=1" \
    -F "main_category=1" \
    -F "categories=2" \
    -F "address[name]=Matriz" \
    -F "address[cep]=18681860" \
    -F "address[street]=Rua José Hiran Garrido" \
    -F "address[number]=121" \
    -F "address[neighborhood]=Itapuã" \
    -F "address[complement]=casa" \
    -F "address[city]=Lençóis Paulista" \
    -F "address[state]=SP" \
    -F "attachment=@/tmp/phpZiacqy"     -F "images[]=@/tmp/phpXduenD" 
```


<div id="execution-results-POSTv1-backoffice-institutions" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTv1-backoffice-institutions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-backoffice-institutions"></code></pre>
</div>
<div id="execution-error-POSTv1-backoffice-institutions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-backoffice-institutions"></code></pre>
</div>
<form id="form-POSTv1-backoffice-institutions" data-method="POST" data-path="v1/backoffice/institutions" data-authed="1" data-hasfiles="2" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTv1-backoffice-institutions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTv1-backoffice-institutions" onclick="tryItOut('POSTv1-backoffice-institutions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTv1-backoffice-institutions" onclick="cancelTryOut('POSTv1-backoffice-institutions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTv1-backoffice-institutions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>v1/backoffice/institutions</code></b>
</p>
<p>
<label id="auth-POSTv1-backoffice-institutions" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTv1-backoffice-institutions" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution name.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution small description.
</p>
<p>
<b><code>about</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="about" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution about.
</p>
<p>
<b><code>document</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="document" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution CNPJ.
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution phone.
</p>
<p>
<b><code>cellphone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cellphone" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution cellphone.
</p>
<p>
<b><code>attachment</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="attachment" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The value must be a file.
</p>
<p>
<b><code>images</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="images.0" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<input type="file" name="images.1" data-endpoint="POSTv1-backoffice-institutions" data-component="body" hidden>
<br>
The value must be a file.
</p>
<p>
<b><code>website</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="website" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution website.
</p>
<p>
<b><code>facebook</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="facebook" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution facebook.
</p>
<p>
<b><code>instagram</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="instagram" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution instagram.
</p>
<p>
<b><code>payment_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment_token" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution Pagseguro payment token.
</p>
<p>
<b><code>special_donate_text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="special_donate_text" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution special donate page text.
</p>
<p>
<b><code>special_donate_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="special_donate_url" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution special donate website page.
</p>
<p>
<b><code>voluntary_text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="voluntary_text" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution voluntary page text.
</p>
<p>
<b><code>voluntary_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="voluntary_url" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution voluntary website page.
</p>
<p>
<b><code>money_donate</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="POSTv1-backoffice-institutions" hidden><input type="radio" name="money_donate" value="true" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required ><code>true</code></label>
<label data-endpoint="POSTv1-backoffice-institutions" hidden><input type="radio" name="money_donate" value="false" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required ><code>false</code></label>
<br>
The institution accept money donate.
</p>
<p>
<b><code>main_category</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="main_category" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution main category ID.
</p>
<p>
<b><code>categories</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
<input type="text" name="categories.0" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<input type="text" name="categories.1" data-endpoint="POSTv1-backoffice-institutions" data-component="body" hidden>
<br>
The Category IDs that belongs to the new institution.
</p>
<p>
<details>
<summary>
<b><code>address</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

</summary>
<br>
<p>
<b><code>address.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.name" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution address name.
</p>
<p>
<b><code>address.cep</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.cep" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution address cep.
</p>
<p>
<b><code>address.street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.street" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution address street.
</p>
<p>
<b><code>address.number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.number" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution address number.
</p>
<p>
<b><code>address.neighborhood</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.neighborhood" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution address neighborhood.
</p>
<p>
<b><code>address.complement</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.complement" data-endpoint="POSTv1-backoffice-institutions" data-component="body"  hidden>
<br>
The institution address complement.
</p>
<p>
<b><code>address.city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.city" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution address city.
</p>
<p>
<b><code>address.state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.state" data-endpoint="POSTv1-backoffice-institutions" data-component="body" required  hidden>
<br>
The institution address state.
</p>
</details>
</p>

</form>


## Detail
Detail the institution

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/v1/backoffice/institutions/amet',
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
    "http://localhost/v1/backoffice/institutions/amet"
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
    -G "http://localhost/v1/backoffice/institutions/amet" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (404):

```json
{
    "message": "api.resource.not.found"
}
```
<div id="execution-results-GETv1-backoffice-institutions--institution-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETv1-backoffice-institutions--institution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-backoffice-institutions--institution-"></code></pre>
</div>
<div id="execution-error-GETv1-backoffice-institutions--institution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-backoffice-institutions--institution-"></code></pre>
</div>
<form id="form-GETv1-backoffice-institutions--institution-" data-method="GET" data-path="v1/backoffice/institutions/{institution}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETv1-backoffice-institutions--institution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETv1-backoffice-institutions--institution-" onclick="tryItOut('GETv1-backoffice-institutions--institution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETv1-backoffice-institutions--institution-" onclick="cancelTryOut('GETv1-backoffice-institutions--institution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETv1-backoffice-institutions--institution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>v1/backoffice/institutions/{institution}</code></b>
</p>
<p>
<label id="auth-GETv1-backoffice-institutions--institution-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETv1-backoffice-institutions--institution-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>institution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="institution" data-endpoint="GETv1-backoffice-institutions--institution-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update
Update the institution

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/v1/backoffice/institutions/deserunt',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'name',
                'contents' => 'Instituto Arca da Fé'
            ],
            [
                'name' => 'description',
                'contents' => 'O Instituto tem como objetivo ajudar e resgatar os animais de rua'
            ],
            [
                'name' => 'about',
                'contents' => 'Instituto <strong>Arca da Fé</strong> lorem ipsum dolor sit amet'
            ],
            [
                'name' => 'document',
                'contents' => '123456789000115'
            ],
            [
                'name' => 'phone',
                'contents' => '+5514998887777'
            ],
            [
                'name' => 'cellphone',
                'contents' => '+5514988887777'
            ],
            [
                'name' => 'website',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'facebook',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'instagram',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'payment_token',
                'contents' => 'htsqqw...'
            ],
            [
                'name' => 'special_donate_text',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'special_donate_url',
                'contents' => 'https://www.site.com/specialdonate'
            ],
            [
                'name' => 'voluntary_text',
                'contents' => 'https://www.site.com'
            ],
            [
                'name' => 'voluntary_url',
                'contents' => 'https://www.site.com/voluntary'
            ],
            [
                'name' => 'money_donate',
                'contents' => '1'
            ],
            [
                'name' => 'main_category',
                'contents' => '8'
            ],
            [
                'name' => 'categories[]',
                'contents' => '3'
            ],
            [
                'name' => 'address[name]',
                'contents' => 'Matriz'
            ],
            [
                'name' => 'address[cep]',
                'contents' => '18681860'
            ],
            [
                'name' => 'address[street]',
                'contents' => '18681860'
            ],
            [
                'name' => 'address[number]',
                'contents' => '18681860'
            ],
            [
                'name' => 'address[neighborhood]',
                'contents' => '18681860'
            ],
            [
                'name' => 'address[complement]',
                'contents' => '18681860'
            ],
            [
                'name' => 'address[city]',
                'contents' => '18681860'
            ],
            [
                'name' => 'address[state]',
                'contents' => '18681860'
            ],
            [
                'name' => 'attachment',
                'contents' => fopen('/tmp/phpzPzrrP', 'r')
            ],
            [
                'name' => 'images[]',
                'contents' => fopen('/tmp/phpWmdDMW', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://localhost/v1/backoffice/institutions/deserunt"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'Instituto Arca da Fé');
body.append('description', 'O Instituto tem como objetivo ajudar e resgatar os animais de rua');
body.append('about', 'Instituto <strong>Arca da Fé</strong> lorem ipsum dolor sit amet');
body.append('document', '123456789000115');
body.append('phone', '+5514998887777');
body.append('cellphone', '+5514988887777');
body.append('website', 'https://www.site.com');
body.append('facebook', 'https://www.site.com');
body.append('instagram', 'https://www.site.com');
body.append('payment_token', 'htsqqw...');
body.append('special_donate_text', 'https://www.site.com');
body.append('special_donate_url', 'https://www.site.com/specialdonate');
body.append('voluntary_text', 'https://www.site.com');
body.append('voluntary_url', 'https://www.site.com/voluntary');
body.append('money_donate', '1');
body.append('main_category', '8');
body.append('categories[]', '3');
body.append('address[name]', 'Matriz');
body.append('address[cep]', '18681860');
body.append('address[street]', '18681860');
body.append('address[number]', '18681860');
body.append('address[neighborhood]', '18681860');
body.append('address[complement]', '18681860');
body.append('address[city]', '18681860');
body.append('address[state]', '18681860');
body.append('attachment', document.querySelector('input[name="attachment"]').files[0]);
body.append('images[]', document.querySelector('input[name="images[]"]').files[0]);

fetch(url, {
    method: "PUT",
    headers,
    body,
}).then(response => response.json());
```

```bash
curl -X PUT \
    "http://localhost/v1/backoffice/institutions/deserunt" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=Instituto Arca da Fé" \
    -F "description=O Instituto tem como objetivo ajudar e resgatar os animais de rua" \
    -F "about=Instituto <strong>Arca da Fé</strong> lorem ipsum dolor sit amet" \
    -F "document=123456789000115" \
    -F "phone=+5514998887777" \
    -F "cellphone=+5514988887777" \
    -F "website=https://www.site.com" \
    -F "facebook=https://www.site.com" \
    -F "instagram=https://www.site.com" \
    -F "payment_token=htsqqw..." \
    -F "special_donate_text=https://www.site.com" \
    -F "special_donate_url=https://www.site.com/specialdonate" \
    -F "voluntary_text=https://www.site.com" \
    -F "voluntary_url=https://www.site.com/voluntary" \
    -F "money_donate=1" \
    -F "main_category=8" \
    -F "categories[]=3" \
    -F "address[name]=Matriz" \
    -F "address[cep]=18681860" \
    -F "address[street]=18681860" \
    -F "address[number]=18681860" \
    -F "address[neighborhood]=18681860" \
    -F "address[complement]=18681860" \
    -F "address[city]=18681860" \
    -F "address[state]=18681860" \
    -F "attachment=@/tmp/phpzPzrrP"     -F "images[]=@/tmp/phpWmdDMW" 
```


<div id="execution-results-PUTv1-backoffice-institutions--institution-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTv1-backoffice-institutions--institution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTv1-backoffice-institutions--institution-"></code></pre>
</div>
<div id="execution-error-PUTv1-backoffice-institutions--institution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTv1-backoffice-institutions--institution-"></code></pre>
</div>
<form id="form-PUTv1-backoffice-institutions--institution-" data-method="PUT" data-path="v1/backoffice/institutions/{institution}" data-authed="1" data-hasfiles="2" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTv1-backoffice-institutions--institution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTv1-backoffice-institutions--institution-" onclick="tryItOut('PUTv1-backoffice-institutions--institution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTv1-backoffice-institutions--institution-" onclick="cancelTryOut('PUTv1-backoffice-institutions--institution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTv1-backoffice-institutions--institution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>v1/backoffice/institutions/{institution}</code></b>
</p>
<p>
<label id="auth-PUTv1-backoffice-institutions--institution-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>institution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="institution" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="url" required  hidden>
<br>

</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution name.
</p>
<p>
<b><code>description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="description" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution small description.
</p>
<p>
<b><code>about</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="about" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution about.
</p>
<p>
<b><code>document</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="document" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution CNPJ.
</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="phone" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution phone.
</p>
<p>
<b><code>cellphone</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cellphone" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution cellphone.
</p>
<p>
<b><code>attachment</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="attachment" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The value must be a file.
</p>
<p>
<b><code>images</code></b>&nbsp;&nbsp;<small>file[]</small>     <i>optional</i> &nbsp;
<input type="file" name="images.0" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<input type="file" name="images.1" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" hidden>
<br>
The value must be a file.
</p>
<p>
<b><code>website</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="website" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution website.
</p>
<p>
<b><code>facebook</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="facebook" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution facebook.
</p>
<p>
<b><code>instagram</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="instagram" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution instagram.
</p>
<p>
<b><code>payment_token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="payment_token" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution Pagseguro payment token.
</p>
<p>
<b><code>special_donate_text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="special_donate_text" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution special donate page text.
</p>
<p>
<b><code>special_donate_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="special_donate_url" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution special donate website page.
</p>
<p>
<b><code>voluntary_text</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="voluntary_text" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution voluntary page text.
</p>
<p>
<b><code>voluntary_url</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="voluntary_url" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution voluntary website page.
</p>
<p>
<b><code>money_donate</code></b>&nbsp;&nbsp;<small>boolean</small>  &nbsp;
<label data-endpoint="PUTv1-backoffice-institutions--institution-" hidden><input type="radio" name="money_donate" value="true" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required ><code>true</code></label>
<label data-endpoint="PUTv1-backoffice-institutions--institution-" hidden><input type="radio" name="money_donate" value="false" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required ><code>false</code></label>
<br>
The institution accept money donate.
</p>
<p>
<b><code>main_category</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="main_category" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>

</p>
<p>
<b><code>categories</code></b>&nbsp;&nbsp;<small>string[]</small>     <i>optional</i> &nbsp;
<input type="text" name="categories.0" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<input type="text" name="categories.1" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" hidden>
<br>
The Category IDs that belongs to the new institution.
</p>
<p>
<details>
<summary>
<b><code>address</code></b>&nbsp;&nbsp;<small>object</small>     <i>optional</i> &nbsp;
<br>

</summary>
<br>
<p>
<b><code>address.name</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.name" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution address name.
</p>
<p>
<b><code>address.cep</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.cep" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution address cep.
</p>
<p>
<b><code>address.street</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.street" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution address street.
</p>
<p>
<b><code>address.number</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.number" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution address number.
</p>
<p>
<b><code>address.neighborhood</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.neighborhood" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution address neighborhood.
</p>
<p>
<b><code>address.complement</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="address.complement" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body"  hidden>
<br>
The institution address complement.
</p>
<p>
<b><code>address.city</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.city" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution address city.
</p>
<p>
<b><code>address.state</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="address.state" data-endpoint="PUTv1-backoffice-institutions--institution-" data-component="body" required  hidden>
<br>
The institution address state.
</p>
</details>
</p>

</form>


## Delete
Delete the institution

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/v1/backoffice/institutions/cum',
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
    "http://localhost/v1/backoffice/institutions/cum"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```

```bash
curl -X DELETE \
    "http://localhost/v1/backoffice/institutions/cum" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```


> Example response (204, No Content):

```json
<Empty response>
```
<div id="execution-results-DELETEv1-backoffice-institutions--institution-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEv1-backoffice-institutions--institution-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEv1-backoffice-institutions--institution-"></code></pre>
</div>
<div id="execution-error-DELETEv1-backoffice-institutions--institution-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEv1-backoffice-institutions--institution-"></code></pre>
</div>
<form id="form-DELETEv1-backoffice-institutions--institution-" data-method="DELETE" data-path="v1/backoffice/institutions/{institution}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEv1-backoffice-institutions--institution-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEv1-backoffice-institutions--institution-" onclick="tryItOut('DELETEv1-backoffice-institutions--institution-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEv1-backoffice-institutions--institution-" onclick="cancelTryOut('DELETEv1-backoffice-institutions--institution-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEv1-backoffice-institutions--institution-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>v1/backoffice/institutions/{institution}</code></b>
</p>
<p>
<label id="auth-DELETEv1-backoffice-institutions--institution-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="DELETEv1-backoffice-institutions--institution-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>institution</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="institution" data-endpoint="DELETEv1-backoffice-institutions--institution-" data-component="url" required  hidden>
<br>

</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="DELETEv1-backoffice-institutions--institution-" data-component="url" required  hidden>
<br>
The ID of the institution
</p>
</form>



