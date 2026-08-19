<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.11.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.11.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-products">
                                <a href="#endpoints-GETapi-products">GET api/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-search">
                                <a href="#endpoints-GETapi-products-search">GET api/products/search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-filter">
                                <a href="#endpoints-GETapi-products-filter">GET api/products/filter</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-sort">
                                <a href="#endpoints-GETapi-products-sort">GET api/products/sort</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-paginate">
                                <a href="#endpoints-GETapi-products-paginate">GET api/products/paginate</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-active">
                                <a href="#endpoints-GETapi-products-active">GET api/products/active</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-inactive">
                                <a href="#endpoints-GETapi-products-inactive">GET api/products/inactive</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-category--categoryId-">
                                <a href="#endpoints-GETapi-products-category--categoryId-">GET api/products/category/{categoryId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products--id-">
                                <a href="#endpoints-GETapi-products--id-">GET api/products/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-products">
                                <a href="#endpoints-POSTapi-products">POST api/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-products--id-">
                                <a href="#endpoints-PUTapi-products--id-">PUT api/products/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-products--id-">
                                <a href="#endpoints-DELETEapi-products--id-">DELETE api/products/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories">
                                <a href="#endpoints-GETapi-categories">GET api/categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories--id-">
                                <a href="#endpoints-GETapi-categories--id-">GET api/categories/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-categories">
                                <a href="#endpoints-POSTapi-categories">POST api/categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-categories--id-">
                                <a href="#endpoints-PUTapi-categories--id-">PUT api/categories/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-categories--id-">
                                <a href="#endpoints-DELETEapi-categories--id-">DELETE api/categories/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories--id--products">
                                <a href="#endpoints-GETapi-categories--id--products">GET api/categories/{id}/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories--id--products-active">
                                <a href="#endpoints-GETapi-categories--id--products-active">GET api/categories/{id}/products/active</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories--id--products-inactive">
                                <a href="#endpoints-GETapi-categories--id--products-inactive">GET api/categories/{id}/products/inactive</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories--id--products-search">
                                <a href="#endpoints-GETapi-categories--id--products-search">GET api/categories/{id}/products/search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories--id--products-filter">
                                <a href="#endpoints-GETapi-categories--id--products-filter">GET api/categories/{id}/products/filter</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories--id--products-sort">
                                <a href="#endpoints-GETapi-categories--id--products-sort">GET api/categories/{id}/products/sort</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-categories--id--products-paginate">
                                <a href="#endpoints-GETapi-categories--id--products-paginate">GET api/categories/{id}/products/paginate</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-me">
                                <a href="#endpoints-GETapi-me">GET api/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-refresh-token">
                                <a href="#endpoints-POSTapi-refresh-token">POST api/refresh-token</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-change-password">
                                <a href="#endpoints-POSTapi-change-password">POST api/change-password</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-update-profile">
                                <a href="#endpoints-PUTapi-update-profile">PUT api/update-profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-delete-account">
                                <a href="#endpoints-DELETEapi-delete-account">DELETE api/delete-account</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders-date-range">
                                <a href="#endpoints-GETapi-orders-date-range">GET api/orders/date-range</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders-price-range">
                                <a href="#endpoints-GETapi-orders-price-range">GET api/orders/price-range</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders-status--status-">
                                <a href="#endpoints-GETapi-orders-status--status-">GET api/orders/status/{status}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders">
                                <a href="#endpoints-GETapi-orders">GET api/orders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-orders">
                                <a href="#endpoints-POSTapi-orders">POST api/orders</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-orders--id-">
                                <a href="#endpoints-GETapi-orders--id-">GET api/orders/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-orders--id--cancel">
                                <a href="#endpoints-POSTapi-orders--id--cancel">POST api/orders/{id}/cancel</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-orders--id--status">
                                <a href="#endpoints-PUTapi-orders--id--status">PUT api/orders/{id}/status</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-orders--id-">
                                <a href="#endpoints-DELETEapi-orders--id-">DELETE api/orders/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-cart">
                                <a href="#endpoints-GETapi-cart">GET api/cart</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-cart-add">
                                <a href="#endpoints-POSTapi-cart-add">POST api/cart/add</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-cart-update--productId-">
                                <a href="#endpoints-PUTapi-cart-update--productId-">PUT api/cart/update/{productId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-cart-remove--productId-">
                                <a href="#endpoints-DELETEapi-cart-remove--productId-">DELETE api/cart/remove/{productId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-cart-clear">
                                <a href="#endpoints-DELETEapi-cart-clear">DELETE api/cart/clear</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-cart-checkout">
                                <a href="#endpoints-POSTapi-cart-checkout">POST api/cart/checkout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-newsletter-subscribe">
                                <a href="#endpoints-POSTapi-newsletter-subscribe">POST api/newsletter/subscribe</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: August 19, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer YOUR_BEARER_TOKEN"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>Send the token in the Header as: <code>Bearer {your_token}</code>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-products">GET api/products</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;MacBook Pro 16 M3 Pro&quot;,
            &quot;slug&quot;: &quot;macbook-pro-16-m3-pro&quot;,
            &quot;description&quot;: &quot;Powerhouse for developers and creative professionals.&quot;,
            &quot;price&quot;: &quot;2499.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;M3 Pro&quot;,
                &quot;ram&quot;: &quot;18GB&quot;,
                &quot;ssd&quot;: &quot;512GB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Dell XPS 15&quot;,
            &quot;slug&quot;: &quot;dell-xps-15&quot;,
            &quot;description&quot;: &quot;Premium Windows laptop with infinity edge display.&quot;,
            &quot;price&quot;: &quot;1899.00&quot;,
            &quot;stock&quot;: 20,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4060&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Lenovo Legion Pro 7i&quot;,
            &quot;slug&quot;: &quot;lenovo-legion-pro-7i&quot;,
            &quot;description&quot;: &quot;High-end gaming laptop with RGB keyboard and high refresh rate screen.&quot;,
            &quot;price&quot;: &quot;2199.99&quot;,
            &quot;stock&quot;: 11,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9-14900HX&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4080&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;ASUS ROG Zephyrus G14&quot;,
            &quot;slug&quot;: &quot;asus-rog-zephyrus-g14&quot;,
            &quot;description&quot;: &quot;Ultra-portable gaming laptop with OLED screen.&quot;,
            &quot;price&quot;: &quot;1599.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;AMD Ryzen 9&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4070&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;HP Spectre x360&quot;,
            &quot;slug&quot;: &quot;hp-spectre-x360&quot;,
            &quot;description&quot;: &quot;2-in-1 convertible laptop with touch screen and stylus support.&quot;,
            &quot;price&quot;: &quot;1399.99&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel Ultra 7&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;ssd&quot;: &quot;1TB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Sony Alpha A7 IV&quot;,
            &quot;slug&quot;: &quot;sony-alpha-a7-iv&quot;,
            &quot;description&quot;: &quot;Full-frame mirrorless camera for photos and video.&quot;,
            &quot;price&quot;: &quot;2498.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;33MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Canon EOS R6 Mark II&quot;,
            &quot;slug&quot;: &quot;canon-eos-r6-mark-ii&quot;,
            &quot;description&quot;: &quot;High-speed mirrorless camera with unmatched autofocus system.&quot;,
            &quot;price&quot;: &quot;2299.00&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.2MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p Uncropped&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Fujifilm X-T5&quot;,
            &quot;slug&quot;: &quot;fujifilm-x-t5&quot;,
            &quot;description&quot;: &quot;Classic retro design with modern high-res APS-C sensor.&quot;,
            &quot;price&quot;: &quot;1699.95&quot;,
            &quot;stock&quot;: 10,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1512790182412-b19e6d61b397?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;40MP APS-C&quot;,
                &quot;video&quot;: &quot;6.2K 30p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Nikon Z6 II&quot;,
            &quot;slug&quot;: &quot;nikon-z6-ii&quot;,
            &quot;description&quot;: &quot;Versatile full-frame camera with dual EXPEED processors.&quot;,
            &quot;price&quot;: &quot;1996.95&quot;,
            &quot;stock&quot;: 17,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1617005082133-548c4dd27f35?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.5MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;GoPro HERO12 Black&quot;,
            &quot;slug&quot;: &quot;gopro-hero12-black&quot;,
            &quot;description&quot;: &quot;Rugged and waterproof action camera with HDR video.&quot;,
            &quot;price&quot;: &quot;399.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;27MP&quot;,
                &quot;video&quot;: &quot;5.3K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products" data-method="GET"
      data-path="api/products"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products"
                    onclick="tryItOut('GETapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products"
                    onclick="cancelTryOut('GETapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products-search">GET api/products/search</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/search" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/search"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-search">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;MacBook Pro 16 M3 Pro&quot;,
            &quot;slug&quot;: &quot;macbook-pro-16-m3-pro&quot;,
            &quot;description&quot;: &quot;Powerhouse for developers and creative professionals.&quot;,
            &quot;price&quot;: &quot;2499.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;M3 Pro&quot;,
                &quot;ram&quot;: &quot;18GB&quot;,
                &quot;ssd&quot;: &quot;512GB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Dell XPS 15&quot;,
            &quot;slug&quot;: &quot;dell-xps-15&quot;,
            &quot;description&quot;: &quot;Premium Windows laptop with infinity edge display.&quot;,
            &quot;price&quot;: &quot;1899.00&quot;,
            &quot;stock&quot;: 20,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4060&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Lenovo Legion Pro 7i&quot;,
            &quot;slug&quot;: &quot;lenovo-legion-pro-7i&quot;,
            &quot;description&quot;: &quot;High-end gaming laptop with RGB keyboard and high refresh rate screen.&quot;,
            &quot;price&quot;: &quot;2199.99&quot;,
            &quot;stock&quot;: 11,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9-14900HX&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4080&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;ASUS ROG Zephyrus G14&quot;,
            &quot;slug&quot;: &quot;asus-rog-zephyrus-g14&quot;,
            &quot;description&quot;: &quot;Ultra-portable gaming laptop with OLED screen.&quot;,
            &quot;price&quot;: &quot;1599.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;AMD Ryzen 9&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4070&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;HP Spectre x360&quot;,
            &quot;slug&quot;: &quot;hp-spectre-x360&quot;,
            &quot;description&quot;: &quot;2-in-1 convertible laptop with touch screen and stylus support.&quot;,
            &quot;price&quot;: &quot;1399.99&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel Ultra 7&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;ssd&quot;: &quot;1TB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Sony Alpha A7 IV&quot;,
            &quot;slug&quot;: &quot;sony-alpha-a7-iv&quot;,
            &quot;description&quot;: &quot;Full-frame mirrorless camera for photos and video.&quot;,
            &quot;price&quot;: &quot;2498.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;33MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Canon EOS R6 Mark II&quot;,
            &quot;slug&quot;: &quot;canon-eos-r6-mark-ii&quot;,
            &quot;description&quot;: &quot;High-speed mirrorless camera with unmatched autofocus system.&quot;,
            &quot;price&quot;: &quot;2299.00&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.2MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p Uncropped&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Fujifilm X-T5&quot;,
            &quot;slug&quot;: &quot;fujifilm-x-t5&quot;,
            &quot;description&quot;: &quot;Classic retro design with modern high-res APS-C sensor.&quot;,
            &quot;price&quot;: &quot;1699.95&quot;,
            &quot;stock&quot;: 10,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1512790182412-b19e6d61b397?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;40MP APS-C&quot;,
                &quot;video&quot;: &quot;6.2K 30p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Nikon Z6 II&quot;,
            &quot;slug&quot;: &quot;nikon-z6-ii&quot;,
            &quot;description&quot;: &quot;Versatile full-frame camera with dual EXPEED processors.&quot;,
            &quot;price&quot;: &quot;1996.95&quot;,
            &quot;stock&quot;: 17,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1617005082133-548c4dd27f35?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.5MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;GoPro HERO12 Black&quot;,
            &quot;slug&quot;: &quot;gopro-hero12-black&quot;,
            &quot;description&quot;: &quot;Rugged and waterproof action camera with HDR video.&quot;,
            &quot;price&quot;: &quot;399.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;27MP&quot;,
                &quot;video&quot;: &quot;5.3K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-search" data-method="GET"
      data-path="api/products/search"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-search"
                    onclick="tryItOut('GETapi-products-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-search"
                    onclick="cancelTryOut('GETapi-products-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products-search"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products-filter">GET api/products/filter</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products-filter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/filter" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/filter"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-filter">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;MacBook Pro 16 M3 Pro&quot;,
            &quot;slug&quot;: &quot;macbook-pro-16-m3-pro&quot;,
            &quot;description&quot;: &quot;Powerhouse for developers and creative professionals.&quot;,
            &quot;price&quot;: &quot;2499.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;M3 Pro&quot;,
                &quot;ram&quot;: &quot;18GB&quot;,
                &quot;ssd&quot;: &quot;512GB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Dell XPS 15&quot;,
            &quot;slug&quot;: &quot;dell-xps-15&quot;,
            &quot;description&quot;: &quot;Premium Windows laptop with infinity edge display.&quot;,
            &quot;price&quot;: &quot;1899.00&quot;,
            &quot;stock&quot;: 20,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4060&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Lenovo Legion Pro 7i&quot;,
            &quot;slug&quot;: &quot;lenovo-legion-pro-7i&quot;,
            &quot;description&quot;: &quot;High-end gaming laptop with RGB keyboard and high refresh rate screen.&quot;,
            &quot;price&quot;: &quot;2199.99&quot;,
            &quot;stock&quot;: 11,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9-14900HX&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4080&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;ASUS ROG Zephyrus G14&quot;,
            &quot;slug&quot;: &quot;asus-rog-zephyrus-g14&quot;,
            &quot;description&quot;: &quot;Ultra-portable gaming laptop with OLED screen.&quot;,
            &quot;price&quot;: &quot;1599.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;AMD Ryzen 9&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4070&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;HP Spectre x360&quot;,
            &quot;slug&quot;: &quot;hp-spectre-x360&quot;,
            &quot;description&quot;: &quot;2-in-1 convertible laptop with touch screen and stylus support.&quot;,
            &quot;price&quot;: &quot;1399.99&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel Ultra 7&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;ssd&quot;: &quot;1TB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Sony Alpha A7 IV&quot;,
            &quot;slug&quot;: &quot;sony-alpha-a7-iv&quot;,
            &quot;description&quot;: &quot;Full-frame mirrorless camera for photos and video.&quot;,
            &quot;price&quot;: &quot;2498.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;33MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Canon EOS R6 Mark II&quot;,
            &quot;slug&quot;: &quot;canon-eos-r6-mark-ii&quot;,
            &quot;description&quot;: &quot;High-speed mirrorless camera with unmatched autofocus system.&quot;,
            &quot;price&quot;: &quot;2299.00&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.2MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p Uncropped&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Fujifilm X-T5&quot;,
            &quot;slug&quot;: &quot;fujifilm-x-t5&quot;,
            &quot;description&quot;: &quot;Classic retro design with modern high-res APS-C sensor.&quot;,
            &quot;price&quot;: &quot;1699.95&quot;,
            &quot;stock&quot;: 10,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1512790182412-b19e6d61b397?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;40MP APS-C&quot;,
                &quot;video&quot;: &quot;6.2K 30p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Nikon Z6 II&quot;,
            &quot;slug&quot;: &quot;nikon-z6-ii&quot;,
            &quot;description&quot;: &quot;Versatile full-frame camera with dual EXPEED processors.&quot;,
            &quot;price&quot;: &quot;1996.95&quot;,
            &quot;stock&quot;: 17,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1617005082133-548c4dd27f35?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.5MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;GoPro HERO12 Black&quot;,
            &quot;slug&quot;: &quot;gopro-hero12-black&quot;,
            &quot;description&quot;: &quot;Rugged and waterproof action camera with HDR video.&quot;,
            &quot;price&quot;: &quot;399.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;27MP&quot;,
                &quot;video&quot;: &quot;5.3K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-filter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-filter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-filter"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-filter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-filter">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-filter" data-method="GET"
      data-path="api/products/filter"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-filter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-filter"
                    onclick="tryItOut('GETapi-products-filter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-filter"
                    onclick="cancelTryOut('GETapi-products-filter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-filter"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/filter</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products-filter"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products-sort">GET api/products/sort</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products-sort">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/sort" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/sort"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-sort">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 9,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;ASUS ROG Zephyrus G14&quot;,
            &quot;slug&quot;: &quot;asus-rog-zephyrus-g14&quot;,
            &quot;description&quot;: &quot;Ultra-portable gaming laptop with OLED screen.&quot;,
            &quot;price&quot;: &quot;1599.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;AMD Ryzen 9&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4070&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Canon EOS R6 Mark II&quot;,
            &quot;slug&quot;: &quot;canon-eos-r6-mark-ii&quot;,
            &quot;description&quot;: &quot;High-speed mirrorless camera with unmatched autofocus system.&quot;,
            &quot;price&quot;: &quot;2299.00&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.2MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p Uncropped&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Dell XPS 15&quot;,
            &quot;slug&quot;: &quot;dell-xps-15&quot;,
            &quot;description&quot;: &quot;Premium Windows laptop with infinity edge display.&quot;,
            &quot;price&quot;: &quot;1899.00&quot;,
            &quot;stock&quot;: 20,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4060&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Fujifilm X-T5&quot;,
            &quot;slug&quot;: &quot;fujifilm-x-t5&quot;,
            &quot;description&quot;: &quot;Classic retro design with modern high-res APS-C sensor.&quot;,
            &quot;price&quot;: &quot;1699.95&quot;,
            &quot;stock&quot;: 10,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1512790182412-b19e6d61b397?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;40MP APS-C&quot;,
                &quot;video&quot;: &quot;6.2K 30p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;GoPro HERO12 Black&quot;,
            &quot;slug&quot;: &quot;gopro-hero12-black&quot;,
            &quot;description&quot;: &quot;Rugged and waterproof action camera with HDR video.&quot;,
            &quot;price&quot;: &quot;399.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;27MP&quot;,
                &quot;video&quot;: &quot;5.3K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;HP Spectre x360&quot;,
            &quot;slug&quot;: &quot;hp-spectre-x360&quot;,
            &quot;description&quot;: &quot;2-in-1 convertible laptop with touch screen and stylus support.&quot;,
            &quot;price&quot;: &quot;1399.99&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel Ultra 7&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;ssd&quot;: &quot;1TB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Lenovo Legion Pro 7i&quot;,
            &quot;slug&quot;: &quot;lenovo-legion-pro-7i&quot;,
            &quot;description&quot;: &quot;High-end gaming laptop with RGB keyboard and high refresh rate screen.&quot;,
            &quot;price&quot;: &quot;2199.99&quot;,
            &quot;stock&quot;: 11,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9-14900HX&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4080&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;MacBook Pro 16 M3 Pro&quot;,
            &quot;slug&quot;: &quot;macbook-pro-16-m3-pro&quot;,
            &quot;description&quot;: &quot;Powerhouse for developers and creative professionals.&quot;,
            &quot;price&quot;: &quot;2499.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;M3 Pro&quot;,
                &quot;ram&quot;: &quot;18GB&quot;,
                &quot;ssd&quot;: &quot;512GB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Nikon Z6 II&quot;,
            &quot;slug&quot;: &quot;nikon-z6-ii&quot;,
            &quot;description&quot;: &quot;Versatile full-frame camera with dual EXPEED processors.&quot;,
            &quot;price&quot;: &quot;1996.95&quot;,
            &quot;stock&quot;: 17,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1617005082133-548c4dd27f35?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.5MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Sony Alpha A7 IV&quot;,
            &quot;slug&quot;: &quot;sony-alpha-a7-iv&quot;,
            &quot;description&quot;: &quot;Full-frame mirrorless camera for photos and video.&quot;,
            &quot;price&quot;: &quot;2498.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;33MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-sort" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-sort"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-sort"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-sort" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-sort">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-sort" data-method="GET"
      data-path="api/products/sort"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-sort', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-sort"
                    onclick="tryItOut('GETapi-products-sort');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-sort"
                    onclick="cancelTryOut('GETapi-products-sort');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-sort"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/sort</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products-sort"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-sort"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-sort"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products-paginate">GET api/products/paginate</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products-paginate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/paginate" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/paginate"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-paginate">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
                &quot;slug&quot;: &quot;iphone-15-pro&quot;,
                &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
                &quot;price&quot;: &quot;999.99&quot;,
                &quot;stock&quot;: 12,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;8GB&quot;,
                    &quot;storage&quot;: &quot;256GB&quot;,
                    &quot;screen&quot;: &quot;6.1 inch OLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
                &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
                &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
                &quot;price&quot;: &quot;1199.99&quot;,
                &quot;stock&quot;: 7,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;12GB&quot;,
                    &quot;storage&quot;: &quot;512GB&quot;,
                    &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
                &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
                &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
                &quot;price&quot;: &quot;899.00&quot;,
                &quot;stock&quot;: 18,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;12GB&quot;,
                    &quot;storage&quot;: &quot;128GB&quot;,
                    &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
                &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
                &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
                &quot;price&quot;: &quot;1099.00&quot;,
                &quot;stock&quot;: 13,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;16GB&quot;,
                    &quot;storage&quot;: &quot;512GB&quot;,
                    &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;OnePlus 12&quot;,
                &quot;slug&quot;: &quot;oneplus-12&quot;,
                &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
                &quot;price&quot;: &quot;799.99&quot;,
                &quot;stock&quot;: 14,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;12GB&quot;,
                    &quot;storage&quot;: &quot;256GB&quot;,
                    &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 6,
                &quot;category_id&quot;: 2,
                &quot;name&quot;: &quot;MacBook Pro 16 M3 Pro&quot;,
                &quot;slug&quot;: &quot;macbook-pro-16-m3-pro&quot;,
                &quot;description&quot;: &quot;Powerhouse for developers and creative professionals.&quot;,
                &quot;price&quot;: &quot;2499.00&quot;,
                &quot;stock&quot;: 7,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;processor&quot;: &quot;M3 Pro&quot;,
                    &quot;ram&quot;: &quot;18GB&quot;,
                    &quot;ssd&quot;: &quot;512GB&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 7,
                &quot;category_id&quot;: 2,
                &quot;name&quot;: &quot;Dell XPS 15&quot;,
                &quot;slug&quot;: &quot;dell-xps-15&quot;,
                &quot;description&quot;: &quot;Premium Windows laptop with infinity edge display.&quot;,
                &quot;price&quot;: &quot;1899.00&quot;,
                &quot;stock&quot;: 20,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;processor&quot;: &quot;Intel i9&quot;,
                    &quot;ram&quot;: &quot;32GB&quot;,
                    &quot;gpu&quot;: &quot;RTX 4060&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 8,
                &quot;category_id&quot;: 2,
                &quot;name&quot;: &quot;Lenovo Legion Pro 7i&quot;,
                &quot;slug&quot;: &quot;lenovo-legion-pro-7i&quot;,
                &quot;description&quot;: &quot;High-end gaming laptop with RGB keyboard and high refresh rate screen.&quot;,
                &quot;price&quot;: &quot;2199.99&quot;,
                &quot;stock&quot;: 11,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;processor&quot;: &quot;Intel i9-14900HX&quot;,
                    &quot;ram&quot;: &quot;32GB&quot;,
                    &quot;gpu&quot;: &quot;RTX 4080&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 9,
                &quot;category_id&quot;: 2,
                &quot;name&quot;: &quot;ASUS ROG Zephyrus G14&quot;,
                &quot;slug&quot;: &quot;asus-rog-zephyrus-g14&quot;,
                &quot;description&quot;: &quot;Ultra-portable gaming laptop with OLED screen.&quot;,
                &quot;price&quot;: &quot;1599.00&quot;,
                &quot;stock&quot;: 7,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;processor&quot;: &quot;AMD Ryzen 9&quot;,
                    &quot;ram&quot;: &quot;16GB&quot;,
                    &quot;gpu&quot;: &quot;RTX 4070&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 10,
                &quot;category_id&quot;: 2,
                &quot;name&quot;: &quot;HP Spectre x360&quot;,
                &quot;slug&quot;: &quot;hp-spectre-x360&quot;,
                &quot;description&quot;: &quot;2-in-1 convertible laptop with touch screen and stylus support.&quot;,
                &quot;price&quot;: &quot;1399.99&quot;,
                &quot;stock&quot;: 16,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;processor&quot;: &quot;Intel Ultra 7&quot;,
                    &quot;ram&quot;: &quot;16GB&quot;,
                    &quot;ssd&quot;: &quot;1TB&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost/api/products/paginate?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;last_page_url&quot;: &quot;http://localhost/api/products/paginate?page=2&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/products/paginate?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/products/paginate?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/products/paginate?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: &quot;http://localhost/api/products/paginate?page=2&quot;,
        &quot;path&quot;: &quot;http://localhost/api/products/paginate&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 10,
        &quot;total&quot;: 15
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-paginate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-paginate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-paginate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-paginate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-paginate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-paginate" data-method="GET"
      data-path="api/products/paginate"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-paginate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-paginate"
                    onclick="tryItOut('GETapi-products-paginate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-paginate"
                    onclick="cancelTryOut('GETapi-products-paginate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-paginate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/paginate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products-paginate"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-paginate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-paginate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products-active">GET api/products/active</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products-active">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/active" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/active"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-active">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Active products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;MacBook Pro 16 M3 Pro&quot;,
            &quot;slug&quot;: &quot;macbook-pro-16-m3-pro&quot;,
            &quot;description&quot;: &quot;Powerhouse for developers and creative professionals.&quot;,
            &quot;price&quot;: &quot;2499.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;M3 Pro&quot;,
                &quot;ram&quot;: &quot;18GB&quot;,
                &quot;ssd&quot;: &quot;512GB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Dell XPS 15&quot;,
            &quot;slug&quot;: &quot;dell-xps-15&quot;,
            &quot;description&quot;: &quot;Premium Windows laptop with infinity edge display.&quot;,
            &quot;price&quot;: &quot;1899.00&quot;,
            &quot;stock&quot;: 20,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1593642632823-8f785ba67e45?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4060&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;Lenovo Legion Pro 7i&quot;,
            &quot;slug&quot;: &quot;lenovo-legion-pro-7i&quot;,
            &quot;description&quot;: &quot;High-end gaming laptop with RGB keyboard and high refresh rate screen.&quot;,
            &quot;price&quot;: &quot;2199.99&quot;,
            &quot;stock&quot;: 11,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel i9-14900HX&quot;,
                &quot;ram&quot;: &quot;32GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4080&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;ASUS ROG Zephyrus G14&quot;,
            &quot;slug&quot;: &quot;asus-rog-zephyrus-g14&quot;,
            &quot;description&quot;: &quot;Ultra-portable gaming laptop with OLED screen.&quot;,
            &quot;price&quot;: &quot;1599.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;AMD Ryzen 9&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;gpu&quot;: &quot;RTX 4070&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;category_id&quot;: 2,
            &quot;name&quot;: &quot;HP Spectre x360&quot;,
            &quot;slug&quot;: &quot;hp-spectre-x360&quot;,
            &quot;description&quot;: &quot;2-in-1 convertible laptop with touch screen and stylus support.&quot;,
            &quot;price&quot;: &quot;1399.99&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;processor&quot;: &quot;Intel Ultra 7&quot;,
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;ssd&quot;: &quot;1TB&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Sony Alpha A7 IV&quot;,
            &quot;slug&quot;: &quot;sony-alpha-a7-iv&quot;,
            &quot;description&quot;: &quot;Full-frame mirrorless camera for photos and video.&quot;,
            &quot;price&quot;: &quot;2498.00&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;33MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Canon EOS R6 Mark II&quot;,
            &quot;slug&quot;: &quot;canon-eos-r6-mark-ii&quot;,
            &quot;description&quot;: &quot;High-speed mirrorless camera with unmatched autofocus system.&quot;,
            &quot;price&quot;: &quot;2299.00&quot;,
            &quot;stock&quot;: 16,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.2MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p Uncropped&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Fujifilm X-T5&quot;,
            &quot;slug&quot;: &quot;fujifilm-x-t5&quot;,
            &quot;description&quot;: &quot;Classic retro design with modern high-res APS-C sensor.&quot;,
            &quot;price&quot;: &quot;1699.95&quot;,
            &quot;stock&quot;: 10,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1512790182412-b19e6d61b397?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;40MP APS-C&quot;,
                &quot;video&quot;: &quot;6.2K 30p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;Nikon Z6 II&quot;,
            &quot;slug&quot;: &quot;nikon-z6-ii&quot;,
            &quot;description&quot;: &quot;Versatile full-frame camera with dual EXPEED processors.&quot;,
            &quot;price&quot;: &quot;1996.95&quot;,
            &quot;stock&quot;: 17,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1617005082133-548c4dd27f35?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;24.5MP Full-Frame&quot;,
                &quot;video&quot;: &quot;4K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;category_id&quot;: 3,
            &quot;name&quot;: &quot;GoPro HERO12 Black&quot;,
            &quot;slug&quot;: &quot;gopro-hero12-black&quot;,
            &quot;description&quot;: &quot;Rugged and waterproof action camera with HDR video.&quot;,
            &quot;price&quot;: &quot;399.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;sensor&quot;: &quot;27MP&quot;,
                &quot;video&quot;: &quot;5.3K 60p&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-active" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-active"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-active"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-active">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-active" data-method="GET"
      data-path="api/products/active"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-active', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-active"
                    onclick="tryItOut('GETapi-products-active');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-active"
                    onclick="cancelTryOut('GETapi-products-active');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-active"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/active</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products-active"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products-inactive">GET api/products/inactive</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products-inactive">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/inactive" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/inactive"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-inactive">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Inactive products fetched successfully&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-inactive" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-inactive"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-inactive"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-inactive" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-inactive">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-inactive" data-method="GET"
      data-path="api/products/inactive"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-inactive', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-inactive"
                    onclick="tryItOut('GETapi-products-inactive');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-inactive"
                    onclick="cancelTryOut('GETapi-products-inactive');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-inactive"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/inactive</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products-inactive"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-inactive"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-inactive"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-products-category--categoryId-">GET api/products/category/{categoryId}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products-category--categoryId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/category/consequatur" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/category/consequatur"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-category--categoryId-">
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Category not found&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-category--categoryId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-category--categoryId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-category--categoryId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products-category--categoryId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-category--categoryId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products-category--categoryId-" data-method="GET"
      data-path="api/products/category/{categoryId}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-category--categoryId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-category--categoryId-"
                    onclick="tryItOut('GETapi-products-category--categoryId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-category--categoryId-"
                    onclick="cancelTryOut('GETapi-products-category--categoryId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-category--categoryId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/category/{categoryId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products-category--categoryId-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products-category--categoryId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products-category--categoryId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>categoryId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="categoryId"                data-endpoint="GETapi-products-category--categoryId-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-products--id-">GET api/products/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/1" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Product fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;category_id&quot;: 1,
        &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
        &quot;slug&quot;: &quot;iphone-15-pro&quot;,
        &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
        &quot;price&quot;: &quot;999.99&quot;,
        &quot;stock&quot;: 12,
        &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
        &quot;images&quot;: null,
        &quot;specs&quot;: {
            &quot;ram&quot;: &quot;8GB&quot;,
            &quot;storage&quot;: &quot;256GB&quot;,
            &quot;screen&quot;: &quot;6.1 inch OLED&quot;
        },
        &quot;is_active&quot;: true,
        &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-products--id-" data-method="GET"
      data-path="api/products/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--id-"
                    onclick="tryItOut('GETapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--id-"
                    onclick="cancelTryOut('GETapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-products--id-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-products--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-products">POST api/products</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/products" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"category_id\": \"consequatur\",
    \"name\": \"mqeopfuudtdsufvyvddqa\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"price\": 12,
    \"stock\": 66,
    \"primary_image\": \"http:\\/\\/reichel.info\\/\",
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "category_id": "consequatur",
    "name": "mqeopfuudtdsufvyvddqa",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "price": 12,
    "stock": 66,
    "primary_image": "http:\/\/reichel.info\/",
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products">
</span>
<span id="execution-results-POSTapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-products" data-method="POST"
      data-path="api/products"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products"
                    onclick="tryItOut('POSTapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products"
                    onclick="cancelTryOut('POSTapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-products"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category_id"                data-endpoint="POSTapi-products"
               value="consequatur"
               data-component="body">
    <br>
<p>Must match an existing stored value. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-products"
               value="mqeopfuudtdsufvyvddqa"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>mqeopfuudtdsufvyvddqa</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-products"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="POSTapi-products"
               value="12"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stock"                data-endpoint="POSTapi-products"
               value="66"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>66</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>primary_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="primary_image"                data-endpoint="POSTapi-products"
               value="http://reichel.info/"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://reichel.info/</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>specs</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="specs"                data-endpoint="POSTapi-products"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-products" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-products"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-products" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-products"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-products--id-">PUT api/products/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/products/1" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\",
    \"price\": 12,
    \"stock\": 66,
    \"primary_image\": \"http:\\/\\/reichel.info\\/\",
    \"is_active\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "description": "Dolores dolorum amet iste laborum eius est dolor.",
    "price": 12,
    "stock": 66,
    "primary_image": "http:\/\/reichel.info\/",
    "is_active": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-products--id-">
</span>
<span id="execution-results-PUTapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-products--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-products--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-products--id-" data-method="PUT"
      data-path="api/products/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-products--id-"
                    onclick="tryItOut('PUTapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-products--id-"
                    onclick="cancelTryOut('PUTapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-products--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-products--id-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-products--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="category_id"                data-endpoint="PUTapi-products--id-"
               value=""
               data-component="body">
    <br>
<p>Must match an existing stored value.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-products--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-products--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="price"                data-endpoint="PUTapi-products--id-"
               value="12"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>12</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>stock</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="stock"                data-endpoint="PUTapi-products--id-"
               value="66"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>66</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>primary_image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="primary_image"                data-endpoint="PUTapi-products--id-"
               value="http://reichel.info/"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://reichel.info/</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>specs</code></b>&nbsp;&nbsp;
<small>object</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="specs"                data-endpoint="PUTapi-products--id-"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-products--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-products--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-products--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-products--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-products--id-">DELETE api/products/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-products--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/products/1" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--id-">
</span>
<span id="execution-results-DELETEapi-products--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-products--id-" data-method="DELETE"
      data-path="api/products/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--id-"
                    onclick="tryItOut('DELETEapi-products--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--id-"
                    onclick="cancelTryOut('DELETEapi-products--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-products--id-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-products--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-products--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the product. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-categories">GET api/categories</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Categories fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Smartphones&quot;,
            &quot;slug&quot;: &quot;smartphones&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Laptops&quot;,
            &quot;slug&quot;: &quot;laptops&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;Cameras&quot;,
            &quot;slug&quot;: &quot;cameras&quot;,
            &quot;image&quot;: &quot;https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories" data-method="GET"
      data-path="api/categories"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories"
                    onclick="tryItOut('GETapi-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories"
                    onclick="cancelTryOut('GETapi-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-categories--id-">GET api/categories/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories/1" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Category fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Smartphones&quot;,
        &quot;slug&quot;: &quot;smartphones&quot;,
        &quot;image&quot;: &quot;https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=600&amp;auto=format&amp;fit=crop&quot;,
        &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--id-" data-method="GET"
      data-path="api/categories/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--id-"
                    onclick="tryItOut('GETapi-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--id-"
                    onclick="cancelTryOut('GETapi-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories--id-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-categories--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-categories">POST api/categories</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/categories" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-categories">
</span>
<span id="execution-results-POSTapi-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-categories" data-method="POST"
      data-path="api/categories"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-categories"
                    onclick="tryItOut('POSTapi-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-categories"
                    onclick="cancelTryOut('POSTapi-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-categories"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-categories"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-categories--id-">PUT api/categories/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/categories/1" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"description\": \"Dolores dolorum amet iste laborum eius est dolor.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "description": "Dolores dolorum amet iste laborum eius est dolor."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-categories--id-">
</span>
<span id="execution-results-PUTapi-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-categories--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-categories--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-categories--id-" data-method="PUT"
      data-path="api/categories/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-categories--id-"
                    onclick="tryItOut('PUTapi-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-categories--id-"
                    onclick="cancelTryOut('PUTapi-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-categories--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-categories--id-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-categories--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-categories--id-"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-categories--id-"
               value="Dolores dolorum amet iste laborum eius est dolor."
               data-component="body">
    <br>
<p>Example: <code>Dolores dolorum amet iste laborum eius est dolor.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-categories--id-">DELETE api/categories/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-categories--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/categories/1" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-categories--id-">
</span>
<span id="execution-results-DELETEapi-categories--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-categories--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-categories--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-categories--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-categories--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-categories--id-" data-method="DELETE"
      data-path="api/categories/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-categories--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-categories--id-"
                    onclick="tryItOut('DELETEapi-categories--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-categories--id-"
                    onclick="cancelTryOut('DELETEapi-categories--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-categories--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/categories/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-categories--id-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-categories--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-categories--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-categories--id--products">GET api/categories/{id}/products</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories--id--products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories/1/products" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1/products"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--id--products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--id--products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--id--products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--id--products"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--id--products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--id--products">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--id--products" data-method="GET"
      data-path="api/categories/{id}/products"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--id--products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--id--products"
                    onclick="tryItOut('GETapi-categories--id--products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--id--products"
                    onclick="cancelTryOut('GETapi-categories--id--products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--id--products"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{id}/products</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories--id--products"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--id--products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--id--products"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-categories--id--products"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-categories--id--products-active">GET api/categories/{id}/products/active</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories--id--products-active">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories/1/products/active" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1/products/active"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--id--products-active">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Active products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--id--products-active" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--id--products-active"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--id--products-active"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--id--products-active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--id--products-active">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--id--products-active" data-method="GET"
      data-path="api/categories/{id}/products/active"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--id--products-active', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--id--products-active"
                    onclick="tryItOut('GETapi-categories--id--products-active');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--id--products-active"
                    onclick="cancelTryOut('GETapi-categories--id--products-active');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--id--products-active"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{id}/products/active</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories--id--products-active"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--id--products-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--id--products-active"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-categories--id--products-active"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-categories--id--products-inactive">GET api/categories/{id}/products/inactive</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories--id--products-inactive">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories/1/products/inactive" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1/products/inactive"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--id--products-inactive">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Inactive products fetched successfully&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--id--products-inactive" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--id--products-inactive"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--id--products-inactive"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--id--products-inactive" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--id--products-inactive">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--id--products-inactive" data-method="GET"
      data-path="api/categories/{id}/products/inactive"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--id--products-inactive', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--id--products-inactive"
                    onclick="tryItOut('GETapi-categories--id--products-inactive');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--id--products-inactive"
                    onclick="cancelTryOut('GETapi-categories--id--products-inactive');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--id--products-inactive"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{id}/products/inactive</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories--id--products-inactive"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--id--products-inactive"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--id--products-inactive"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-categories--id--products-inactive"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-categories--id--products-search">GET api/categories/{id}/products/search</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories--id--products-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories/1/products/search" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1/products/search"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--id--products-search">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--id--products-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--id--products-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--id--products-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--id--products-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--id--products-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--id--products-search" data-method="GET"
      data-path="api/categories/{id}/products/search"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--id--products-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--id--products-search"
                    onclick="tryItOut('GETapi-categories--id--products-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--id--products-search"
                    onclick="cancelTryOut('GETapi-categories--id--products-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--id--products-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{id}/products/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories--id--products-search"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--id--products-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--id--products-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-categories--id--products-search"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-categories--id--products-filter">GET api/categories/{id}/products/filter</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories--id--products-filter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories/1/products/filter" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1/products/filter"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--id--products-filter">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--id--products-filter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--id--products-filter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--id--products-filter"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--id--products-filter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--id--products-filter">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--id--products-filter" data-method="GET"
      data-path="api/categories/{id}/products/filter"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--id--products-filter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--id--products-filter"
                    onclick="tryItOut('GETapi-categories--id--products-filter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--id--products-filter"
                    onclick="cancelTryOut('GETapi-categories--id--products-filter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--id--products-filter"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{id}/products/filter</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories--id--products-filter"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--id--products-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--id--products-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-categories--id--products-filter"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-categories--id--products-sort">GET api/categories/{id}/products/sort</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories--id--products-sort">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories/1/products/sort" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1/products/sort"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--id--products-sort">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 3,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
            &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
            &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
            &quot;price&quot;: &quot;899.00&quot;,
            &quot;stock&quot;: 18,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;128GB&quot;,
                &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
            &quot;slug&quot;: &quot;iphone-15-pro&quot;,
            &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
            &quot;price&quot;: &quot;999.99&quot;,
            &quot;stock&quot;: 12,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;8GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.1 inch OLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;OnePlus 12&quot;,
            &quot;slug&quot;: &quot;oneplus-12&quot;,
            &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
            &quot;price&quot;: &quot;799.99&quot;,
            &quot;stock&quot;: 14,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;256GB&quot;,
                &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
            &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
            &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
            &quot;price&quot;: &quot;1199.99&quot;,
            &quot;stock&quot;: 7,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;12GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;category_id&quot;: 1,
            &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
            &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
            &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
            &quot;price&quot;: &quot;1099.00&quot;,
            &quot;stock&quot;: 13,
            &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
            &quot;images&quot;: null,
            &quot;specs&quot;: {
                &quot;ram&quot;: &quot;16GB&quot;,
                &quot;storage&quot;: &quot;512GB&quot;,
                &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
            },
            &quot;is_active&quot;: true,
            &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--id--products-sort" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--id--products-sort"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--id--products-sort"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--id--products-sort" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--id--products-sort">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--id--products-sort" data-method="GET"
      data-path="api/categories/{id}/products/sort"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--id--products-sort', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--id--products-sort"
                    onclick="tryItOut('GETapi-categories--id--products-sort');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--id--products-sort"
                    onclick="cancelTryOut('GETapi-categories--id--products-sort');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--id--products-sort"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{id}/products/sort</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories--id--products-sort"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--id--products-sort"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--id--products-sort"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-categories--id--products-sort"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-categories--id--products-paginate">GET api/categories/{id}/products/paginate</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-categories--id--products-paginate">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/categories/1/products/paginate" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1/products/paginate"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-categories--id--products-paginate">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Products fetched successfully&quot;,
    &quot;data&quot;: {
        &quot;current_page&quot;: 1,
        &quot;data&quot;: [
            {
                &quot;id&quot;: 1,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;iPhone 15 Pro&quot;,
                &quot;slug&quot;: &quot;iphone-15-pro&quot;,
                &quot;description&quot;: &quot;Flagship phone with Titanium design and A17 Pro chip.&quot;,
                &quot;price&quot;: &quot;999.99&quot;,
                &quot;stock&quot;: 12,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1695048133142-1a20484d2569?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;8GB&quot;,
                    &quot;storage&quot;: &quot;256GB&quot;,
                    &quot;screen&quot;: &quot;6.1 inch OLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 2,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;Samsung Galaxy S24 Ultra&quot;,
                &quot;slug&quot;: &quot;samsung-galaxy-s24-ultra&quot;,
                &quot;description&quot;: &quot;Ultimate Android experience with S-Pen and AI features.&quot;,
                &quot;price&quot;: &quot;1199.99&quot;,
                &quot;stock&quot;: 7,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1610945265064-0e34e5519bbf?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;12GB&quot;,
                    &quot;storage&quot;: &quot;512GB&quot;,
                    &quot;screen&quot;: &quot;6.8 inch AMOLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 3,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;Google Pixel 8 Pro&quot;,
                &quot;slug&quot;: &quot;google-pixel-8-pro&quot;,
                &quot;description&quot;: &quot;Advanced AI cameras and pure Android experience.&quot;,
                &quot;price&quot;: &quot;899.00&quot;,
                &quot;stock&quot;: 18,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1598327105666-5b89351aff97?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;12GB&quot;,
                    &quot;storage&quot;: &quot;128GB&quot;,
                    &quot;screen&quot;: &quot;6.7 inch LTPO OLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 4,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;Xiaomi 14 Ultra&quot;,
                &quot;slug&quot;: &quot;xiaomi-14-ultra&quot;,
                &quot;description&quot;: &quot;Leica quad-camera system for professional mobile photography.&quot;,
                &quot;price&quot;: &quot;1099.00&quot;,
                &quot;stock&quot;: 13,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1565849904461-04a58ad377e0?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;16GB&quot;,
                    &quot;storage&quot;: &quot;512GB&quot;,
                    &quot;screen&quot;: &quot;6.73 inch AMOLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            },
            {
                &quot;id&quot;: 5,
                &quot;category_id&quot;: 1,
                &quot;name&quot;: &quot;OnePlus 12&quot;,
                &quot;slug&quot;: &quot;oneplus-12&quot;,
                &quot;description&quot;: &quot;Fast performance with Snapdragon 8 Gen 3 and 100W charging.&quot;,
                &quot;price&quot;: &quot;799.99&quot;,
                &quot;stock&quot;: 14,
                &quot;primary_image&quot;: &quot;https://images.unsplash.com/photo-1546054454-aa26e2b734c7?w=600&amp;auto=format&amp;fit=crop&quot;,
                &quot;images&quot;: null,
                &quot;specs&quot;: {
                    &quot;ram&quot;: &quot;12GB&quot;,
                    &quot;storage&quot;: &quot;256GB&quot;,
                    &quot;screen&quot;: &quot;6.82 inch AMOLED&quot;
                },
                &quot;is_active&quot;: true,
                &quot;created_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2026-08-19T19:37:47.000000Z&quot;
            }
        ],
        &quot;first_page_url&quot;: &quot;http://localhost/api/categories/1/products/paginate?page=1&quot;,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;last_page_url&quot;: &quot;http://localhost/api/categories/1/products/paginate?page=1&quot;,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/categories/1/products/paginate?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;next_page_url&quot;: null,
        &quot;path&quot;: &quot;http://localhost/api/categories/1/products/paginate&quot;,
        &quot;per_page&quot;: 10,
        &quot;prev_page_url&quot;: null,
        &quot;to&quot;: 5,
        &quot;total&quot;: 5
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-categories--id--products-paginate" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-categories--id--products-paginate"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-categories--id--products-paginate"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-categories--id--products-paginate" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-categories--id--products-paginate">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-categories--id--products-paginate" data-method="GET"
      data-path="api/categories/{id}/products/paginate"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-categories--id--products-paginate', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-categories--id--products-paginate"
                    onclick="tryItOut('GETapi-categories--id--products-paginate');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-categories--id--products-paginate"
                    onclick="cancelTryOut('GETapi-categories--id--products-paginate');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-categories--id--products-paginate"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/categories/{id}/products/paginate</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-categories--id--products-paginate"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-categories--id--products-paginate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-categories--id--products-paginate"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-categories--id--products-paginate"
               value="1"
               data-component="url">
    <br>
<p>The ID of the category. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\",
    \"email\": \"kunde.eloisa@example.com\",
    \"password\": \"4[*UyPJ\\\"}6\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq",
    "email": "kunde.eloisa@example.com",
    "password": "4[*UyPJ\"}6"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-register"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="kunde.eloisa@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>kunde.eloisa@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="4[*UyPJ"}6"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>4[*UyPJ"}6</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\",
    \"password\": \"O[2UZ5ij-e\\/dl4m{o,\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com",
    "password": "O[2UZ5ij-e\/dl4m{o,"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-login"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="O[2UZ5ij-e/dl4m{o,"
               data-component="body">
    <br>
<p>Example: <code>O[2UZ5ij-e/dl4m{o,</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/logout" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/logout"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-logout"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-me">GET api/me</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/me" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/me"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-me" data-method="GET"
      data-path="api/me"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-me"
                    onclick="tryItOut('GETapi-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-me"
                    onclick="cancelTryOut('GETapi-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-me"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-refresh-token">POST api/refresh-token</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-refresh-token">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/refresh-token" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/refresh-token"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-refresh-token">
</span>
<span id="execution-results-POSTapi-refresh-token" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-refresh-token"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-refresh-token"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-refresh-token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-refresh-token">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-refresh-token" data-method="POST"
      data-path="api/refresh-token"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-refresh-token', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-refresh-token"
                    onclick="tryItOut('POSTapi-refresh-token');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-refresh-token"
                    onclick="cancelTryOut('POSTapi-refresh-token');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-refresh-token"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/refresh-token</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-refresh-token"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-refresh-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-refresh-token"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-change-password">POST api/change-password</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-change-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/change-password" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"current_password\": \"consequatur\",
    \"new_password\": \"mqeopfuudtdsufvyvddqamniihfqcoynlazghdtqtqxbajwbpilpmufinllwloauydlsmsjuryv\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/change-password"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "consequatur",
    "new_password": "mqeopfuudtdsufvyvddqamniihfqcoynlazghdtqtqxbajwbpilpmufinllwloauydlsmsjuryv"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-change-password">
</span>
<span id="execution-results-POSTapi-change-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-change-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-change-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-change-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-change-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-change-password" data-method="POST"
      data-path="api/change-password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-change-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-change-password"
                    onclick="tryItOut('POSTapi-change-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-change-password"
                    onclick="cancelTryOut('POSTapi-change-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-change-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/change-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-change-password"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-change-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-change-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>current_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="current_password"                data-endpoint="POSTapi-change-password"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="new_password"                data-endpoint="POSTapi-change-password"
               value="mqeopfuudtdsufvyvddqamniihfqcoynlazghdtqtqxbajwbpilpmufinllwloauydlsmsjuryv"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>mqeopfuudtdsufvyvddqamniihfqcoynlazghdtqtqxbajwbpilpmufinllwloauydlsmsjuryv</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-update-profile">PUT api/update-profile</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-update-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/update-profile" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"vmqeopfuudtdsufvyvddq\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/update-profile"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "vmqeopfuudtdsufvyvddq"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-update-profile">
</span>
<span id="execution-results-PUTapi-update-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-update-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-update-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-update-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-update-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-update-profile" data-method="PUT"
      data-path="api/update-profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-update-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-update-profile"
                    onclick="tryItOut('PUTapi-update-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-update-profile"
                    onclick="cancelTryOut('PUTapi-update-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-update-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/update-profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-update-profile"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-update-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-update-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-update-profile"
               value="vmqeopfuudtdsufvyvddq"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>vmqeopfuudtdsufvyvddq</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-update-profile"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-delete-account">DELETE api/delete-account</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-delete-account">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/delete-account" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/delete-account"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-delete-account">
</span>
<span id="execution-results-DELETEapi-delete-account" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-delete-account"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-delete-account"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-delete-account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-delete-account">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-delete-account" data-method="DELETE"
      data-path="api/delete-account"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-delete-account', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-delete-account"
                    onclick="tryItOut('DELETEapi-delete-account');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-delete-account"
                    onclick="cancelTryOut('DELETEapi-delete-account');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-delete-account"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/delete-account</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-delete-account"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-delete-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-delete-account"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-orders-date-range">GET api/orders/date-range</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-orders-date-range">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/date-range" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"start_date\": \"2026-08-19T20:47:04\",
    \"end_date\": \"2107-09-18\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/date-range"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "start_date": "2026-08-19T20:47:04",
    "end_date": "2107-09-18"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders-date-range">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders-date-range" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders-date-range"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-date-range"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders-date-range" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-date-range">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders-date-range" data-method="GET"
      data-path="api/orders/date-range"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-date-range', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders-date-range"
                    onclick="tryItOut('GETapi-orders-date-range');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders-date-range"
                    onclick="cancelTryOut('GETapi-orders-date-range');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders-date-range"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/date-range</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-orders-date-range"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders-date-range"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders-date-range"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>start_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="start_date"                data-endpoint="GETapi-orders-date-range"
               value="2026-08-19T20:47:04"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2026-08-19T20:47:04</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>end_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="end_date"                data-endpoint="GETapi-orders-date-range"
               value="2107-09-18"
               data-component="body">
    <br>
<p>Must be a valid date. Must be a date after or equal to <code>start_date</code>. Example: <code>2107-09-18</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-orders-price-range">GET api/orders/price-range</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-orders-price-range">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/price-range" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"min_price\": 73,
    \"max_price\": 11613.31890586
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/price-range"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "min_price": 73,
    "max_price": 11613.31890586
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders-price-range">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders-price-range" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders-price-range"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-price-range"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders-price-range" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-price-range">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders-price-range" data-method="GET"
      data-path="api/orders/price-range"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-price-range', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders-price-range"
                    onclick="tryItOut('GETapi-orders-price-range');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders-price-range"
                    onclick="cancelTryOut('GETapi-orders-price-range');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders-price-range"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/price-range</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-orders-price-range"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders-price-range"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders-price-range"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>min_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="min_price"                data-endpoint="GETapi-orders-price-range"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>73</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>max_price</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="max_price"                data-endpoint="GETapi-orders-price-range"
               value="11613.31890586"
               data-component="body">
    <br>
<p>Example: <code>11613.31890586</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-orders-status--status-">GET api/orders/status/{status}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-orders-status--status-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/status/consequatur" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"delivered\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/status/consequatur"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "delivered"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders-status--status-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders-status--status-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders-status--status-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders-status--status-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders-status--status-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders-status--status-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders-status--status-" data-method="GET"
      data-path="api/orders/status/{status}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders-status--status-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders-status--status-"
                    onclick="tryItOut('GETapi-orders-status--status-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders-status--status-"
                    onclick="cancelTryOut('GETapi-orders-status--status-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders-status--status-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/status/{status}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-orders-status--status-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders-status--status-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders-status--status-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="GETapi-orders-status--status-"
               value="consequatur"
               data-component="url">
    <br>
<p>The status. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="GETapi-orders-status--status-"
               value="delivered"
               data-component="body">
    <br>
<p>Example: <code>delivered</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>processed</code></li> <li><code>shipped</code></li> <li><code>delivered</code></li> <li><code>cancelled</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-orders">GET api/orders</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders" data-method="GET"
      data-path="api/orders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders"
                    onclick="tryItOut('GETapi-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders"
                    onclick="cancelTryOut('GETapi-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-orders"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-orders">POST api/orders</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-orders">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/orders" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone\": \"consequatur\",
    \"shipping_address\": \"consequatur\",
    \"items\": [
        {
            \"product_id\": \"consequatur\",
            \"quantity\": 45
        }
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": "consequatur",
    "shipping_address": "consequatur",
    "items": [
        {
            "product_id": "consequatur",
            "quantity": 45
        }
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-orders">
</span>
<span id="execution-results-POSTapi-orders" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-orders"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-orders" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-orders" data-method="POST"
      data-path="api/orders"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-orders"
                    onclick="tryItOut('POSTapi-orders');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-orders"
                    onclick="cancelTryOut('POSTapi-orders');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-orders"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/orders</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-orders"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-orders"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipping_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shipping_address"                data-endpoint="POSTapi-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <b style="line-height: 2;"><code>items</code></b>&nbsp;&nbsp;
<small>object[]</small>&nbsp;
 &nbsp;
 &nbsp;
<br>
<p>Must have at least 1 items.</p>
            </summary>
                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="items.0.product_id"                data-endpoint="POSTapi-orders"
               value="consequatur"
               data-component="body">
    <br>
<p>Must match an existing stored value. Example: <code>consequatur</code></p>
                    </div>
                                                                <div style="margin-left: 14px; clear: unset;">
                        <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="items.0.quantity"                data-endpoint="POSTapi-orders"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
                    </div>
                                    </details>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-orders--id-">GET api/orders/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/orders/consequatur" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/consequatur"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-orders--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-orders--id-" data-method="GET"
      data-path="api/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-orders--id-"
                    onclick="tryItOut('GETapi-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-orders--id-"
                    onclick="cancelTryOut('GETapi-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-orders--id-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-orders--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-orders--id--cancel">POST api/orders/{id}/cancel</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-orders--id--cancel">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/orders/consequatur/cancel" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/consequatur/cancel"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-orders--id--cancel">
</span>
<span id="execution-results-POSTapi-orders--id--cancel" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-orders--id--cancel"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-orders--id--cancel"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-orders--id--cancel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-orders--id--cancel">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-orders--id--cancel" data-method="POST"
      data-path="api/orders/{id}/cancel"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-orders--id--cancel', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-orders--id--cancel"
                    onclick="tryItOut('POSTapi-orders--id--cancel');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-orders--id--cancel"
                    onclick="cancelTryOut('POSTapi-orders--id--cancel');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-orders--id--cancel"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/orders/{id}/cancel</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-orders--id--cancel"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-orders--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-orders--id--cancel"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="POSTapi-orders--id--cancel"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-orders--id--status">PUT api/orders/{id}/status</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-orders--id--status">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/orders/consequatur/status" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"status\": \"shipped\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/consequatur/status"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "shipped"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-orders--id--status">
</span>
<span id="execution-results-PUTapi-orders--id--status" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-orders--id--status"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-orders--id--status"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-orders--id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-orders--id--status">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-orders--id--status" data-method="PUT"
      data-path="api/orders/{id}/status"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-orders--id--status', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-orders--id--status"
                    onclick="tryItOut('PUTapi-orders--id--status');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-orders--id--status"
                    onclick="cancelTryOut('PUTapi-orders--id--status');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-orders--id--status"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/orders/{id}/status</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-orders--id--status"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-orders--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-orders--id--status"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-orders--id--status"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-orders--id--status"
               value="shipped"
               data-component="body">
    <br>
<p>Example: <code>shipped</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>pending</code></li> <li><code>processed</code></li> <li><code>shipped</code></li> <li><code>delivered</code></li> <li><code>cancelled</code></li></ul>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-orders--id-">DELETE api/orders/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-orders--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/orders/consequatur" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/orders/consequatur"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-orders--id-">
</span>
<span id="execution-results-DELETEapi-orders--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-orders--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-orders--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-orders--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-orders--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-orders--id-" data-method="DELETE"
      data-path="api/orders/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-orders--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-orders--id-"
                    onclick="tryItOut('DELETEapi-orders--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-orders--id-"
                    onclick="cancelTryOut('DELETEapi-orders--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-orders--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/orders/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-orders--id-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-orders--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-orders--id-"
               value="consequatur"
               data-component="url">
    <br>
<p>The ID of the order. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-cart">GET api/cart</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-cart">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/cart" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cart"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-cart">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-cart" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-cart"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cart"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cart">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-cart" data-method="GET"
      data-path="api/cart"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-cart', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-cart"
                    onclick="tryItOut('GETapi-cart');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-cart"
                    onclick="cancelTryOut('GETapi-cart');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-cart"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/cart</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-cart"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-cart"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-cart-add">POST api/cart/add</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-cart-add">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/cart/add" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"product_id\": \"consequatur\",
    \"quantity\": 45
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cart/add"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "product_id": "consequatur",
    "quantity": 45
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-cart-add">
</span>
<span id="execution-results-POSTapi-cart-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-cart-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cart-add"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-cart-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cart-add">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-cart-add" data-method="POST"
      data-path="api/cart/add"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-cart-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-cart-add"
                    onclick="tryItOut('POSTapi-cart-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-cart-add"
                    onclick="cancelTryOut('POSTapi-cart-add');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-cart-add"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/cart/add</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-cart-add"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-cart-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-cart-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>product_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="product_id"                data-endpoint="POSTapi-cart-add"
               value="consequatur"
               data-component="body">
    <br>
<p>Must match an existing stored value. Example: <code>consequatur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="POSTapi-cart-add"
               value="45"
               data-component="body">
    <br>
<p>Must be at least 1. Example: <code>45</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-cart-update--productId-">PUT api/cart/update/{productId}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-PUTapi-cart-update--productId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/cart/update/consequatur" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"quantity\": 73
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cart/update/consequatur"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "quantity": 73
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-cart-update--productId-">
</span>
<span id="execution-results-PUTapi-cart-update--productId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-cart-update--productId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-cart-update--productId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-cart-update--productId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-cart-update--productId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-cart-update--productId-" data-method="PUT"
      data-path="api/cart/update/{productId}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-cart-update--productId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-cart-update--productId-"
                    onclick="tryItOut('PUTapi-cart-update--productId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-cart-update--productId-"
                    onclick="cancelTryOut('PUTapi-cart-update--productId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-cart-update--productId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/cart/update/{productId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="PUTapi-cart-update--productId-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-cart-update--productId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-cart-update--productId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="productId"                data-endpoint="PUTapi-cart-update--productId-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>quantity</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="quantity"                data-endpoint="PUTapi-cart-update--productId-"
               value="73"
               data-component="body">
    <br>
<p>Must be at least 0. Example: <code>73</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-cart-remove--productId-">DELETE api/cart/remove/{productId}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-cart-remove--productId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/cart/remove/consequatur" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cart/remove/consequatur"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-cart-remove--productId-">
</span>
<span id="execution-results-DELETEapi-cart-remove--productId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-cart-remove--productId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cart-remove--productId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-cart-remove--productId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cart-remove--productId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-cart-remove--productId-" data-method="DELETE"
      data-path="api/cart/remove/{productId}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cart-remove--productId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-cart-remove--productId-"
                    onclick="tryItOut('DELETEapi-cart-remove--productId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-cart-remove--productId-"
                    onclick="cancelTryOut('DELETEapi-cart-remove--productId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-cart-remove--productId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/cart/remove/{productId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-cart-remove--productId-"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-cart-remove--productId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-cart-remove--productId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>productId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="productId"                data-endpoint="DELETEapi-cart-remove--productId-"
               value="consequatur"
               data-component="url">
    <br>
<p>Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-cart-clear">DELETE api/cart/clear</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-cart-clear">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/cart/clear" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cart/clear"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-cart-clear">
</span>
<span id="execution-results-DELETEapi-cart-clear" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-cart-clear"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-cart-clear"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-cart-clear" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-cart-clear">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-cart-clear" data-method="DELETE"
      data-path="api/cart/clear"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-cart-clear', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-cart-clear"
                    onclick="tryItOut('DELETEapi-cart-clear');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-cart-clear"
                    onclick="cancelTryOut('DELETEapi-cart-clear');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-cart-clear"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/cart/clear</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-cart-clear"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-cart-clear"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-cart-clear"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-cart-checkout">POST api/cart/checkout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-cart-checkout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/cart/checkout" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"phone\": \"vmqeopfuudtdsufvy\",
    \"shipping_address\": \"vddqamniihfqcoynlazgh\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/cart/checkout"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": "vmqeopfuudtdsufvy",
    "shipping_address": "vddqamniihfqcoynlazgh"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-cart-checkout">
</span>
<span id="execution-results-POSTapi-cart-checkout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-cart-checkout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-cart-checkout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-cart-checkout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-cart-checkout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-cart-checkout" data-method="POST"
      data-path="api/cart/checkout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-cart-checkout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-cart-checkout"
                    onclick="tryItOut('POSTapi-cart-checkout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-cart-checkout"
                    onclick="cancelTryOut('POSTapi-cart-checkout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-cart-checkout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/cart/checkout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-cart-checkout"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-cart-checkout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-cart-checkout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="phone"                data-endpoint="POSTapi-cart-checkout"
               value="vmqeopfuudtdsufvy"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters. Example: <code>vmqeopfuudtdsufvy</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>shipping_address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="shipping_address"                data-endpoint="POSTapi-cart-checkout"
               value="vddqamniihfqcoynlazgh"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>vddqamniihfqcoynlazgh</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-newsletter-subscribe">POST api/newsletter/subscribe</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-newsletter-subscribe">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/newsletter/subscribe" \
    --header "Authorization: Bearer YOUR_BEARER_TOKEN" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"qkunze@example.com\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/newsletter/subscribe"
);

const headers = {
    "Authorization": "Bearer YOUR_BEARER_TOKEN",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qkunze@example.com"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-newsletter-subscribe">
</span>
<span id="execution-results-POSTapi-newsletter-subscribe" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-newsletter-subscribe"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-newsletter-subscribe"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-newsletter-subscribe" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-newsletter-subscribe">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-newsletter-subscribe" data-method="POST"
      data-path="api/newsletter/subscribe"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-newsletter-subscribe', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-newsletter-subscribe"
                    onclick="tryItOut('POSTapi-newsletter-subscribe');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-newsletter-subscribe"
                    onclick="cancelTryOut('POSTapi-newsletter-subscribe');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-newsletter-subscribe"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/newsletter/subscribe</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-newsletter-subscribe"
               value="Bearer YOUR_BEARER_TOKEN"
               data-component="header">
    <br>
<p>Example: <code>Bearer YOUR_BEARER_TOKEN</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-newsletter-subscribe"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-newsletter-subscribe"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-newsletter-subscribe"
               value="qkunze@example.com"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>qkunze@example.com</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
