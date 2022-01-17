<?php
$api_root = 'http://'.getenv('LOCAL_IP_ADDRESS').':81';
$api_uri_root = $api_root . '/';
$api_uri_schema = $api_root . '/openapi.json';

$html = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <link href="../swagger/swagger-ui.css" type="text/css" rel="stylesheet">
            <script src="../swagger/swagger-ui-bundle.js"></script>
        </head>
        <body>
        <div id="swagger-ui"></div>
        <script>
            const ui = SwaggerUIBundle({
                url: "'.$api_uri_schema.'",
                dom_id: \'#swagger-ui\',
                presets: [
                    SwaggerUIBundle.presets.apis,
                    SwaggerUIBundle.SwaggerUIStandalonePreset
                ],
                layout: "BaseLayout",
                requestInterceptor: (request) => {
                  return request;
                }
            })
        </script>
        </body>
        </html>
    ';


echo $html;